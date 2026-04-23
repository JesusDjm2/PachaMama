<?php

namespace App\Support;

use App\Http\Controllers\DestiniesPeruController;
use App\Models\Blog;
use App\Models\Enblog;
use App\Models\Tour;
use App\Models\Toursen;
use Illuminate\Support\Facades\Route;

/**
 * URLs pareadas ES/EN para hreflang, conmutador de idioma del menú y SEO.
 */
final class LocaleRouteMap
{
    /**
     * Rutas nombradas que tienen equivalente en el otro idioma (misma clave = nombre de ruta actual).
     *
     * @return array<string, array{en: string, es: string}>
     */
    public static function staticRoutePairs(): array
    {
        return [
            'index' => ['en' => 'index', 'es' => 'inicio'],
            'inicio' => ['en' => 'index', 'es' => 'inicio'],
            'contact' => ['en' => 'contact', 'es' => 'contactenos'],
            'contactenos' => ['en' => 'contact', 'es' => 'contactenos'],
            'about' => ['en' => 'about', 'es' => 'nosotros'],
            'nosotros' => ['en' => 'about', 'es' => 'nosotros'],
            'mapi' => ['en' => 'mapien', 'es' => 'mapi'],
            'mapien' => ['en' => 'mapien', 'es' => 'mapi'],
            'caminata' => ['en' => 'hikes', 'es' => 'caminata'],
            'hikes' => ['en' => 'hikes', 'es' => 'caminata'],
            'peru' => ['en' => 'around', 'es' => 'peru'],
            'around' => ['en' => 'around', 'es' => 'peru'],
            'luxury' => ['en' => 'private', 'es' => 'luxury'],
            'private' => ['en' => 'private', 'es' => 'luxury'],
            'fullday' => ['en' => 'fulldayen', 'es' => 'fullday'],
            'fulldayen' => ['en' => 'fulldayen', 'es' => 'fullday'],
            'lodges' => ['en' => 'lodgen', 'es' => 'lodges'],
            'lodgen' => ['en' => 'lodgen', 'es' => 'lodges'],
            'listado' => ['en' => 'enlistado', 'es' => 'listado'],
            'enlistado' => ['en' => 'enlistado', 'es' => 'listado'],
            'destinos-peru' => ['en' => 'destinies-peru', 'es' => 'destinos-peru'],
            'destinies-peru' => ['en' => 'destinies-peru', 'es' => 'destinos-peru'],
            'terminos' => ['en' => 'terms-en', 'es' => 'terminos'],
            'terms-en' => ['en' => 'terms-en', 'es' => 'terminos'],
            'preguntas' => ['en' => 'faq', 'es' => 'preguntas'],
            'faq' => ['en' => 'faq', 'es' => 'preguntas'],
        ];
    }

    /**
     * @return array{es: string, en: string}|null URLs absolutas
     */
    public static function destinationAlternateUrls(?string $routeName, mixed $slug = null): ?array
    {
        $esToEn = DestiniesPeruController::ES_SLUG_TO_EN_SLUG;

        if ($routeName && isset($esToEn[$routeName])) {
            $enSlug = $esToEn[$routeName];

            return [
                'es' => route($routeName),
                'en' => route('destinies-peru.destination', ['slug' => $enSlug]),
            ];
        }

        if ($routeName === 'destinies-peru.destination' && $slug) {
            $enToEs = array_flip($esToEn);
            if (isset($enToEs[$slug])) {
                $esRouteName = $enToEs[$slug];

                return [
                    'es' => route($esRouteName),
                    'en' => route('destinies-peru.destination', ['slug' => $slug]),
                ];
            }
        }

        return null;
    }

    /**
     * URL del menú “English” / “Español” según la página actual.
     *
     * @param  bool  $toEnglish  true = ir a la versión en inglés (layout ES); false = ir a español (layout EN)
     */
    public static function menuLanguageSwitchUrl(bool $toEnglish): string
    {
        $route = Route::currentRouteName();
        $req = request();
        $slug = $req->route('slug');

        $dest = self::destinationAlternateUrls($route, $slug);
        if ($dest !== null) {
            return $toEnglish ? $dest['en'] : $dest['es'];
        }

        foreach (self::staticRoutePairs() as $fromRoute => $targets) {
            if ($route === $fromRoute) {
                return $toEnglish ? route($targets['en']) : route($targets['es']);
            }
        }

        if ($route === 'tours.show' && ($slug = $req->route('slug'))) {
            if ($toEnglish) {
                $tour = Tour::query()->where('slug', $slug)->with('toursens')->first();
                if ($tour && $tour->toursens) {
                    return route('toursen.show', $tour->toursens->slug);
                }
            }

            return route('inicio');
        }

        if ($route === 'toursen.show' && ($slug = $req->route('slug'))) {
            if (! $toEnglish) {
                $toursen = Toursen::query()->where('slug', $slug)->with('tour')->first();
                if ($toursen && $toursen->tour) {
                    return route('tours.show', $toursen->tour->slug);
                }
            }

            return route('index');
        }

        if ($route === 'blog.show' && ($slug = $req->route('slug'))) {
            if ($toEnglish) {
                $blog = Blog::query()->where('slug', $slug)->with('enblog')->first();
                if ($blog && $blog->enblog) {
                    return route('enblog', $blog->enblog->slug);
                }

                return route('enlistado');
            }

            return route('listado');
        }

        if ($route === 'enblog' && ($slug = $req->route('slug'))) {
            if (! $toEnglish) {
                $en = Enblog::query()->where('slug', $slug)->with('blog')->first();
                if ($en && $en->blog) {
                    return route('blog.show', $en->blog->slug);
                }

                return route('listado');
            }

            return route('enlistado');
        }

        if ($route === 'search' && $toEnglish) {
            $name = trim((string) $req->input('name', ''));
            if ($name !== '') {
                return route('searchen', ['name' => $name]);
            }

            return route('index');
        }

        if ($route === 'searchen' && ! $toEnglish) {
            $name = trim((string) $req->input('name', ''));
            if ($name !== '') {
                return route('search', ['name' => $name]);
            }

            return route('inicio');
        }

        if ($route === 'searchblog' && $toEnglish) {
            $name = trim((string) $req->input('name', ''));
            if ($name !== '') {
                return route('search.blog.en', ['name' => $name]);
            }

            return route('enlistado');
        }

        if ($route === 'search.blog.en' && ! $toEnglish) {
            $name = trim((string) $req->input('name', ''));
            if ($name !== '') {
                return route('searchblog', ['name' => $name]);
            }

            return route('listado');
        }

        return $toEnglish ? route('index') : route('inicio');
    }
}
