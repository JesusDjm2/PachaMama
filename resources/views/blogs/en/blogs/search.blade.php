@extends('layouts.appen')
@php
    $titulo = 'Blog search results | Pacha Mama Spirit';
    $descripcion = 'Blog articles about Peru matching your search.';
    $keywords = 'Peru blog, travel Peru, Machu Picchu, Cusco';
    $img = 'https://pachamamaspirit.com/img/panoramico/trekking-peru.webp';
    $n = $blogs->count();
@endphp
@section('titulo', $titulo)
@include('layouts.metasblogs')
@section('content')
    <div class="blog blog--compact">
        <div class="container d-flex align-items-center justify-content-center">
            <div class="row w-100 justify-content-center py-3">
                <div class="col-lg-10 col-xl-8 text-center">
                    <h1 class="h1-destinos mb-2">Search results for &lsquo;{{ $nombre }}&rsquo;</h1>
                    <p class="blog-hero-subtitle mb-0">
                        @if ($n === 1)
                            <strong>1</strong> article found.
                        @else
                            <strong>{{ $n }}</strong> articles found.
                        @endif
                    </p>
                </div>
            </div>
        </div>
    </div>

    <section class="blog-search-results" aria-label="Search results">
        <div class="container">
            <div class="blog-search-results__toolbar">
                <nav class="blog-search-results__breadcrumb" aria-label="Breadcrumb">
                    <a href="{{ route('index') }}">Home</a>
                    <span class="blog-search-results__sep" aria-hidden="true">/</span>
                    <a href="{{ route('enlistado') }}">Blog</a>
                    <span class="blog-search-results__sep" aria-hidden="true">/</span>
                    <span>Search</span>
                </nav>
                <a href="{{ route('enlistado') }}" class="blog-search-results__back">← Browse all articles</a>
            </div>

            <div class="row pt-2 g-4 justify-content-center results-cards-grid blog-search-results__grid">
                @foreach ($blogs as $blog)
                    @php
                        $srcBlog = \Illuminate\Support\Str::startsWith((string) $blog->img, ['http://', 'https://'])
                            ? $blog->img
                            : asset(ltrim((string) $blog->img, '/'));
                        $excerpt = \Illuminate\Support\Str::limit(strip_tags((string) ($blog->descripcion ?? '')), 140);
                    @endphp
                    <div class="col-12 col-md-6 col-xl-4 col-results-card d-flex">
                        <article class="card card-new blog-result-card w-100 h-100">
                            <a href="{{ route('enblog', $blog->slug) }}" class="blog-result-card__media-link">
                                <img class="card-img-top" src="{{ $srcBlog }}" alt="{{ $blog->nombre }}" loading="lazy"
                                    width="400" height="220">
                            </a>
                            <div class="card-body text-center d-flex flex-column">
                                @if ($blog->created_at ?? null)
                                    <time class="blog-result-card__date"
                                        datetime="{{ $blog->created_at->toIso8601String() }}">{{ $blog->created_at->format('d/m/Y') }}</time>
                                @endif
                                <h2 class="card-titulo h5">{{ $blog->nombre }}</h2>
                                <p class="text-card blog-result-card__excerpt">{{ $excerpt }}</p>
                                @if ($blog->entags->isNotEmpty())
                                    <div class="tags blog-result-card__tags mb-2">
                                        @foreach ($blog->entags as $tag)
                                            <a href="{{ route('entag', $tag->slug) }}">#{{ $tag->nombre }}</a>
                                        @endforeach
                                    </div>
                                @endif
                                <a href="{{ route('enblog', $blog->slug) }}" class="boton-card mt-auto align-self-center">More
                                    info</a>
                            </div>
                        </article>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
