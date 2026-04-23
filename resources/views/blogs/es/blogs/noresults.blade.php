@extends('layouts.app')
@php
    $titulo = 'Sin resultados en el blog';
    $descripcion = 'Prueba otra búsqueda en el blog de viajes de Pacha Mama Spirit.';
    $keywords = 'blog Perú, viajes Perú';
    $img = 'https://pachamamaspirit.com/img/panoramico/trekking-peru.webp';
@endphp
@section('titulo', $titulo)
@include('layouts.metasblogs')
@section('content')
    <div class="blog blog--compact">
        <div class="container">
            <div class="row justify-content-center py-3">
                <div class="col-lg-10 col-xl-8 text-center">
                    <h1 class="h1-destinos mb-2">Sin resultados</h1>
                    <p class="blog-hero-subtitle mb-0">
                        @if (($nombre ?? '') !== '')
                            No hay artículos que coincidan con &lsquo;{{ $nombre }}&rsquo;.
                        @else
                            Indica una palabra o tema para buscar en el blog.
                        @endif
                    </p>
                </div>
            </div>
        </div>
    </div>

    <section class="blog-search-results blog-search-results--empty" aria-label="Nueva búsqueda">
        <div class="container">
            <div class="blog-search-empty-panel mx-auto">
                <h2 class="blog-search-empty-panel__title text-center">Buscar en el blog</h2>
                <p class="text-center text-muted small mb-4">Escribe palabras clave del tema que te interesa (por ejemplo:
                    Cusco, Machu Picchu, gastronomía).</p>
                <form action="{{ route('searchblog') }}" method="GET" class="blog-search-empty-panel__form">
                    <div class="row g-2 justify-content-center align-items-stretch">
                        <div class="col-12 col-md-8">
                            <label class="visually-hidden" for="blog-search-empty-es">Término de búsqueda</label>
                            <input type="text" id="blog-search-empty-es" name="name" class="form-control"
                                placeholder="Buscar tema…" value="{{ $nombre ?? '' }}" autocomplete="off">
                        </div>
                        <div class="col-12 col-md-4 col-lg-3 d-flex align-items-stretch">
                            <button type="submit" class="boton-blog-search w-100 align-self-md-center">Buscar</button>
                        </div>
                    </div>
                </form>
                <p class="text-center mt-4 mb-0">
                    <a href="{{ route('listado') }}" class="blog-search-results__link-all">Ver todos los artículos del blog</a>
                </p>
            </div>
        </div>
    </section>
@endsection
