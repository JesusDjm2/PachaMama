@extends('layouts.appen')
@php
    $titulo = 'No blog results | Pacha Mama Spirit';
    $descripcion = 'Try another search in the Pacha Mama Spirit travel blog.';
    $keywords = 'Peru blog, travel Peru';
    $img = 'https://pachamamaspirit.com/img/panoramico/trekking-peru.webp';
@endphp
@section('titulo', $titulo)
@include('layouts.metasblogs')
@section('content')
    <div class="blog blog--compact">
        <div class="container">
            <div class="row justify-content-center py-3">
                <div class="col-lg-10 col-xl-8 text-center">
                    <h1 class="h1-destinos mb-2">No results</h1>
                    <p class="blog-hero-subtitle mb-0">
                        @if (($nombre ?? '') !== '')
                            No articles match &lsquo;{{ $nombre }}&rsquo;.
                        @else
                            Enter a keyword to search the blog.
                        @endif
                    </p>
                </div>
            </div>
        </div>
    </div>

    <section class="blog-search-results blog-search-results--empty" aria-label="New search">
        <div class="container">
            <div class="blog-search-empty-panel mx-auto">
                <h2 class="blog-search-empty-panel__title text-center">Search the blog</h2>
                <p class="text-center text-muted small mb-4">Try different keywords (for example: Cusco, trekking, food).</p>
                <form action="{{ route('search.blog.en') }}" method="GET" class="blog-search-empty-panel__form">
                    <div class="row g-2 justify-content-center align-items-stretch">
                        <div class="col-12 col-md-8">
                            <label class="visually-hidden" for="blog-search-empty-en">Search term</label>
                            <input type="text" id="blog-search-empty-en" name="name" class="form-control"
                                placeholder="Search topic…" value="{{ $nombre ?? '' }}" autocomplete="off">
                        </div>
                        <div class="col-12 col-md-4 col-lg-3 d-flex align-items-stretch">
                            <button type="submit" class="boton-blog-search w-100 align-self-md-center">Search</button>
                        </div>
                    </div>
                </form>
                <p class="text-center mt-4 mb-0">
                    <a href="{{ route('enlistado') }}" class="blog-search-results__link-all">Browse all blog articles</a>
                </p>
            </div>
        </div>
    </section>
@endsection
