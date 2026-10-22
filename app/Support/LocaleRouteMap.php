<?php

namespace App\Support;

use App\Http\Controllers\DestiniesPeruController;
use App\Models\Blog;
use App\Models\Enblog;
use App\Models\Ptblog;
use App\Models\Tour;
use App\Models\Tourpt;
use App\Models\Toursen;
use Illuminate\Support\Facades\Route;

/**
 * URLs pareadas ES/EN/PT para hreflang, conmutador de idioma del menú y SEO.
 */
final class LocaleRouteMap
{
    public const LOCALES = ['es', 'en', 'pt'];

    /** Rutas de categoría ES/EN → link de la categoría PT equivalente. */
    private const CATEGORY_PT_LINKS = [
        'caminata' => 'trilhas',
        'hikes' => 'trilhas',
        'mapi' => 'machu-picchu',
        'mapien' => 'machu-picchu',
        'peru' => 'arredores-do-peru',
        'around' => 'arredores-do-peru',
        'fullday' => 'dia-inteiro',
        'fulldayen' => 'dia-inteiro',
        'luxury' => 'tours-de-luxo',
        'private' => 'tours-de-luxo',
    ];

    /**
     * URL de la contraparte real en el idioma pedido, o null si esta página no está traducida.
     * A diferencia de switchUrlTo(), no cae en la portada: sirve para enlaces e hreflang.
     */
    public static function counterpartUrl(string $locale): ?string
    {
        $route = Route::currentRouteName();
        if ($route === null || ! in_array($locale, self::LOCALES, true)) {
            return null;
        }

        $slug = request()->route('slug');

        $tour = self::tourAlternateUrls($route, $slug);
        if ($tour !== null) {
            return $tour[$locale] ?? null;
        }

        $blog = self::blogAlternateUrls($route, $slug);
        if ($blog !== null) {
            return $blog[$locale] ?? null;
        }

        $dest = self::destinationAlternateUrls($route, $slug);
        if ($dest !== null) {
            return $dest[$locale] ?? null;
        }

        if (isset(self::CATEGORY_PT_LINKS[$route]) && $locale === 'pt' && Route::has('pt.categoria')) {
            return route('pt.categoria', self::CATEGORY_PT_LINKS[$route]);
        }

        $target = self::staticRoutePairs()[$route][$locale] ?? null;

        return ($target !== null && Route::has($target)) ? route($target) : null;
    }
    /**
     * Rutas nombradas que tienen equivalente en otro idioma (misma clave = nombre de ruta actual).
     * `pt` es null mientras la página aún no tenga versión en portugués.
     *
     * @return array<string, array{en: string, es: string, pt: ?string}>
     */
    public static function staticRoutePairs(): array
    {
        $ausente = ['pt' => null];

        return [
            'index' => ['en' => 'index', 'es' => 'inicio', 'pt' => 'pt.index'],
            'inicio' => ['en' => 'index', 'es' => 'inicio', 'pt' => 'pt.index'],
            'pt.index' => ['en' => 'index', 'es' => 'inicio', 'pt' => 'pt.index'],
            'contact' => ['en' => 'contact', 'es' => 'contactenos', 'pt' => 'pt.contato'],
            'contactenos' => ['en' => 'contact', 'es' => 'contactenos', 'pt' => 'pt.contato'],
            'pt.contato' => ['en' => 'contact', 'es' => 'contactenos', 'pt' => 'pt.contato'],
            'about' => ['en' => 'about', 'es' => 'nosotros'] + $ausente,
            'nosotros' => ['en' => 'about', 'es' => 'nosotros'] + $ausente,
            'mapi' => ['en' => 'mapien', 'es' => 'mapi'] + $ausente,
            'mapien' => ['en' => 'mapien', 'es' => 'mapi'] + $ausente,
            'caminata' => ['en' => 'hikes', 'es' => 'caminata'] + $ausente,
            'hikes' => ['en' => 'hikes', 'es' => 'caminata'] + $ausente,
            'peru' => ['en' => 'around', 'es' => 'peru'] + $ausente,
            'around' => ['en' => 'around', 'es' => 'peru'] + $ausente,
            'luxury' => ['en' => 'private', 'es' => 'luxury'] + $ausente,
            'private' => ['en' => 'private', 'es' => 'luxury'] + $ausente,
            'fullday' => ['en' => 'fulldayen', 'es' => 'fullday'] + $ausente,
            'fulldayen' => ['en' => 'fulldayen', 'es' => 'fullday'] + $ausente,
            'lodges' => ['en' => 'lodgen', 'es' => 'lodges'] + $ausente,
            'lodgen' => ['en' => 'lodgen', 'es' => 'lodges'] + $ausente,
            'listado' => ['en' => 'enlistado', 'es' => 'listado', 'pt' => 'pt.blog.index'],
            'enlistado' => ['en' => 'enlistado', 'es' => 'listado', 'pt' => 'pt.blog.index'],
            'pt.blog.index' => ['en' => 'enlistado', 'es' => 'listado', 'pt' => 'pt.blog.index'],
            'destinos-peru' => ['en' => 'destinies-peru', 'es' => 'destinos-peru', 'pt' => 'pt.destinos'],
            'destinies-peru' => ['en' => 'destinies-peru', 'es' => 'destinos-peru', 'pt' => 'pt.destinos'],
            'pt.destinos' => ['en' => 'destinies-peru', 'es' => 'destinos-peru', 'pt' => 'pt.destinos'],
            'terminos' => ['en' => 'terms-en', 'es' => 'terminos'] + $ausente,
            'terms-en' => ['en' => 'terms-en', 'es' => 'terminos'] + $ausente,
            'preguntas' => ['en' => 'faq', 'es' => 'preguntas'] + $ausente,
            'faq' => ['en' => 'faq', 'es' => 'preguntas'] + $ausente,
        ];
    }

    /**
     * URL de la página actual en el idioma pedido; cae en la portada de ese idioma.
     */
    public static function switchUrlTo(string $locale): string
    {
        if (! in_array($locale, self::LOCALES, true)) {
            return self::homeUrl('es');
        }

        $route = Route::currentRouteName();
        $slug = request()->route('slug');

        if ($route !== null) {
            $dest = self::destinationAlternateUrls($route, $slug);
            if ($dest !== null && isset($dest[$locale])) {
                return $dest[$locale];
            }

            $tour = self::tourAlternateUrls($route, $slug);
            if ($tour !== null && isset($tour[$locale])) {
                return $tour[$locale];
            }

            $blog = self::blogAlternateUrls($route, $slug);
            if ($blog !== null) {
                return $blog[$locale] ?? self::blogListUrl($locale);
            }

            $search = self::searchAlternateUrl($route, $locale);
            if ($search !== null) {
                return $search;
            }

            $target = self::staticRoutePairs()[$route][$locale] ?? null;
            if ($target !== null && Route::has($target)) {
                return route($target);
            }
        }

        return self::homeUrl($locale);
    }

    public static function blogListUrl(string $locale): string
    {
        return match ($locale) {
            'pt' => Route::has('pt.blog.index') ? route('pt.blog.index') : route('pt.index'),
            'en' => route('enlistado'),
            default => route('listado'),
        };
    }

    public static function homeUrl(string $locale): string
    {
        return match ($locale) {
            'pt' => route('pt.index'),
            'en' => route('index'),
            default => route('inicio'),
        };
    }

    /**
     * @return array<string, string>|null URLs del tour en los idiomas que tienen contraparte
     */
    public static function tourAlternateUrls(?string $routeName, mixed $slug): ?array
    {
        $anchor = match ($routeName) {
            'tours.show' => Tour::query()->where('slug', $slug)->with(['toursens', 'tourpt'])->first(),
            'toursen.show' => Toursen::query()->where('slug', $slug)->with('tour.tourpt')->first()?->tour,
            'pt.tour' => Tourpt::query()->where('slug', $slug)->with('tour.toursens')->first()?->tour,
            default => null,
        };

        if ($anchor === null) {
            return null;
        }

        $out = ['es' => route('tours.show', $anchor->slug)];

        if ($anchor->toursens && Route::has('toursen.show')) {
            $out['en'] = route('toursen.show', $anchor->toursens->slug);
        }
        if ($anchor->tourpt && Route::has('pt.tour')) {
            $out['pt'] = route('pt.tour', $anchor->tourpt->slug);
        }

        return $out;
    }

    /**
     * @return array<string, string>|null
     */
    public static function blogAlternateUrls(?string $routeName, mixed $slug): ?array
    {
        $anchor = match ($routeName) {
            'blog.show' => Blog::query()->where('slug', $slug)->with(['enblog', 'ptblog'])->first(),
            'enblog' => Enblog::query()->where('slug', $slug)->with('blog.ptblog')->first()?->blog,
            'pt.blog' => Ptblog::query()->where('slug', $slug)->with('blog.enblog')->first()?->blog,
            default => null,
        };

        if ($anchor === null) {
            return null;
        }

        $out = ['es' => route('blog.show', $anchor->slug)];

        if ($anchor->enblog && Route::has('enblog')) {
            $out['en'] = route('enblog', $anchor->enblog->slug);
        }
        if ($anchor->ptblog && Route::has('pt.blog')) {
            $out['pt'] = route('pt.blog', $anchor->ptblog->slug);
        }

        return $out;
    }

    /**
     * @return array{es?: string, en?: string, pt?: string}|null URLs absolutas
     */
    public static function destinationAlternateUrls(?string $routeName, mixed $slug = null): ?array
    {
        $esToEn = DestiniesPeruController::ES_SLUG_TO_EN_SLUG;
        $ptToEn = DestiniesPeruController::PT_SLUG_TO_EN_SLUG;
        $enToEs = array_flip($esToEn);
        $enToPt = array_flip($ptToEn);

        $enSlug = null;
        if ($routeName && isset($esToEn[$routeName])) {
            $enSlug = $esToEn[$routeName];
        } elseif ($routeName === 'destinies-peru.destination' && $slug && isset($enToEs[$slug])) {
            $enSlug = $slug;
        } elseif ($routeName === 'pt.destinos.destination' && $slug && isset($ptToEn[$slug])) {
            $enSlug = $ptToEn[$slug];
        }

        if ($enSlug === null) {
            return null;
        }

        $res = [];
        if (isset($enToEs[$enSlug]) && Route::has($enToEs[$enSlug])) {
            $res['es'] = route($enToEs[$enSlug]);
        }
        if (Route::has('destinies-peru.destination')) {
            $res['en'] = route('destinies-peru.destination', ['slug' => $enSlug]);
        }
        if (isset($enToPt[$enSlug]) && Route::has('pt.destinos.destination')) {
            $res['pt'] = route('pt.destinos.destination', ['slug' => $enToPt[$enSlug]]);
        }

        return ! empty($res) ? $res : null;
    }

    /**
     * URL del menú “English” / “Español” según la página actual.
     *
     * @param  bool  $toEnglish  true = ir a la versión en inglés (layout ES); false = ir a español (layout EN)
     */
    public static function menuLanguageSwitchUrl(bool $toEnglish): string
    {
        return self::switchUrlTo($toEnglish ? 'en' : 'es');
    }

    /**
     * Las páginas de búsqueda mantienen el término al cambiar de idioma.
     */
    private static function searchAlternateUrl(?string $route, string $locale): ?string
    {
        $targets = match ($route) {
            'search', 'searchen' => ['es' => 'search', 'en' => 'searchen'],
            'searchblog', 'search.blog.en' => ['es' => 'searchblog', 'en' => 'search.blog.en'],
            default => null,
        };

        if ($targets === null) {
            return null;
        }

        $target = $targets[$locale] ?? null;
        if ($target === null || ! Route::has($target)) {
            return self::homeUrl($locale);
        }

        $name = trim((string) request()->input('name', ''));

        return $name !== '' ? route($target, ['name' => $name]) : self::homeUrl($locale);
    }
}
