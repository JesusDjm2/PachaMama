{{-- Carrusel horizontal de blogs en inicio (ES), index (EN) e início (PT). Imágenes: loading="lazy". --}}
@php
    $locale = $locale ?? 'es';
    $textos = match ($locale) {
        'pt' => [
            'heading' => 'Últimas publicações do blog',
            'lead' => 'Dicas, cultura e inspiração para a sua viagem ao Peru — use as setas ou deslize',
            'all' => 'Ver todo o blog',
            'prev' => 'Publicações anteriores',
            'next' => 'Próximas publicações',
            'go' => 'Ler →',
        ],
        'en' => [
            'heading' => 'Latest blog posts',
            'lead' => 'Tips, culture, and travel ideas for Peru — use arrows or swipe',
            'all' => 'View all posts',
            'prev' => 'Previous posts',
            'next' => 'Next posts',
            'go' => 'Read →',
        ],
        default => [
            'heading' => 'Últimas entradas del blog',
            'lead' => 'Tips, cultura e inspiración para tu viaje a Perú — usa las flechas o desliza',
            'all' => 'Ver todo el blog',
            'prev' => 'Entradas anteriores',
            'next' => 'Siguientes entradas',
            'go' => 'Leer →',
        ],
    };
    $allHref = match ($locale) {
        'pt' => \Illuminate\Support\Facades\Route::has('pt.blog.index') ? route('pt.blog.index') : route('pt.index'),
        'en' => route('enlistado'),
        default => route('listado'),
    };
    $postHref = fn ($entrada) => match ($locale) {
        'pt' => route('pt.blog', $entrada->slug),
        'en' => route('enblog', $entrada->slug),
        default => route('blog.show', $entrada->slug),
    };
@endphp
@if (isset($blogs) && $blogs->isNotEmpty())
    <div class="home-blog-rail w-100 mt-4">
        <div class="home-blog-rail__head text-center mb-2">
            <h2 class="h2-tierras">{{ $textos['heading'] }}</h2>
            <p class="home-blog-rail__lead">{{ $textos['lead'] }}</p>
        </div>
        <div class="home-blog-rail__viewport">
            <button type="button" class="home-blog-rail__arrow home-blog-rail__arrow--prev" aria-label="{{ $textos['prev'] }}">
                <span aria-hidden="true">‹</span>
            </button>
            <div class="home-blog-rail__track" role="region" aria-label="{{ $textos['heading'] }}" tabindex="0">
                @foreach ($blogs as $entrada)
                    @php
                        $imgEntrada = $entrada->img ?? '';
                        $srcEntrada = \Illuminate\Support\Str::startsWith($imgEntrada, ['http://', 'https://'])
                            ? $imgEntrada
                            : asset(ltrim($imgEntrada, '/'));
                        $dateRef = $entrada->published_at ?? $entrada->created_at;
                    @endphp
                    <article class="home-blog-rail__card">
                        <a href="{{ $postHref($entrada) }}" class="home-blog-rail__link">
                            <div class="home-blog-rail__media" role="img" aria-label="{{ $entrada->nombre }}">
                                <img src="{{ $srcEntrada }}" alt="" class="home-blog-rail__media-img" width="400" height="200" loading="lazy" decoding="async">
                            </div>
                            <div class="home-blog-rail__body">
                                <span class="home-blog-rail__accent" aria-hidden="true"></span>
                                <time class="home-blog-rail__date" datetime="{{ $dateRef->toIso8601String() }}">{{ $dateRef->format('d/m/Y') }}</time>
                                <h3 class="home-blog-rail__title">{{ $entrada->nombre }}</h3>
                                <p class="home-blog-rail__excerpt">{{ Str::limit(strip_tags($entrada->descripcion ?? ''), 96) }}</p>
                                <span class="home-blog-rail__go" aria-hidden="true">{{ $textos['go'] }}</span>
                            </div>
                        </a>
                    </article>
                @endforeach
            </div>
            <button type="button" class="home-blog-rail__arrow home-blog-rail__arrow--next" aria-label="{{ $textos['next'] }}">
                <span aria-hidden="true">›</span>
            </button>
        </div>
        <div class="text-center mt-2">
            <a href="{{ $allHref }}" class="home-blog-rail__btn-all">{{ $textos['all'] }}</a>
        </div>
    </div>
@endif

