@extends('layouts.apppt')
@php
    $titulo = 'Blog sobre o Peru — dicas de viagem | Pacha Mama Spirit';
    $descripcion = 'Artigos sobre o Peru: dicas de viagem, história, cultura e destinos para planejar a sua viagem com a Pacha Mama Spirit.';
    $keywords = 'blog peru, viagem ao peru, dicas cusco, machu picchu blog, trilhas peru';
    $img = 'https://pachamamaspirit.com/img/panoramico/Recorrido-Cusco-Machu-Picchu.webp';
@endphp
@section('titulo', $titulo)
@include('layouts.metasblogs')
@push('page_metas')
<link rel="alternate" hreflang="es" href="{{ route('listado') }}">
<link rel="alternate" hreflang="en" href="{{ route('enlistado') }}">
<link rel="alternate" hreflang="pt-br" href="{{ route('pt.blog.index') }}">
<link rel="alternate" hreflang="x-default" href="{{ route('enlistado') }}">
@endpush
@section('content')
    <div class="blog">
        <div class="container h-100 d-flex align-items-center">
            <div class="row w-100">
                <div class="col-lg-12 text-center">
                    <h1 class="h1-destinos">Blog sobre o Peru</h1>
                    <p class="blog-hero-subtitle">Dicas de viagem, história, cultura e destinos — explore os nossos artigos</p>
                </div>
            </div>
        </div>
    </div>
    <section class="blog-listing-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="details">
                        <div class="location">
                            <p><a href="{{ route('pt.index') }}">Início</a> / <a>Blog</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mb-2">
                    <h2>Blog sobre o Peru</h2>
                    <p class="blog-listing-lead">
                        Bem-vindo à nossa seção de blog! Aqui você encontra assuntos interessantes sobre o Peru, de dicas
                        úteis para viajar a informações sobre história, costumbres, pontos turísticos e muito mais.
                        Explore as publicações e descubra tudo o que este país tem a oferecer.
                    </p>
                </div>
                <div class="col-lg-12 mb-5">
                    <div class="input-group mb-2">
                        <input type="text" class="form-control" id="buscador" placeholder="Buscar assunto" autocomplete="off">
                    </div>
                    <div id="no-results" class="blog-listing-no-results" style="display: none;">
                        Nenhum resultado para a sua busca.
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid px-0">
            <div class="row g-0">
                @forelse ($blogs as $blog)
                    <div class="blogs blogimg blog-container"
                        style="background:url({{ asset(ltrim($blog->img, '/')) }});background-size:cover;">
                        <div class="black">
                            <h2 class="nombreBlog">{{ $blog->nombre }}</h2>
                            <div class="fecha"><i class="icon-calendar"></i><span>
                                    {{ ($blog->published_at ?? $blog->created_at)->format('d/m/Y') }}</span></div>
                            <p>{{ $blog->descripcion }}</p>
                            <a href="{{ route('pt.blog', $blog->slug) }}">Ler artigo</a>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <p class="text-center py-5">
                            Ainda não há artigos publicados em português.
                            <a href="{{ route('listado') }}">Ver o blog em espanhol</a>.
                        </p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
    <div class="pb-5"></div>
    <script>
        function searchBlogs() {
            const input = document.getElementById('buscador');
            if (!input) return;
            const blogContainers = document.querySelectorAll('.blog-container');
            const noResults = document.getElementById('no-results');
            let numResults = 0;
            const raw = input.value.trim().toLowerCase().normalize('NFD').replace(/[\u0300-\u036f]/g, '');
            const searchWords = raw.length ? raw.split(/\s+/).filter(Boolean) : [];

            blogContainers.forEach(function (blogContainer) {
                const titleEl = blogContainer.querySelector('.nombreBlog');
                if (!titleEl) return;
                const blogName = titleEl.textContent.toLowerCase().normalize('NFD').replace(/[\u0300-\u036f]/g, '');
                const hasAllWords = searchWords.length === 0 || searchWords.every(function (w) {
                    return blogName.includes(w);
                });
                blogContainer.style.display = hasAllWords ? '' : 'none';
                if (hasAllWords) numResults++;
            });

            if (raw === '') {
                blogContainers.forEach(function (blogContainer) {
                    blogContainer.style.display = '';
                });
            }

            if (noResults) {
                noResults.style.display = (searchWords.length && numResults === 0) ? 'block' : 'none';
            }
        }
        document.getElementById('buscador')?.addEventListener('input', searchBlogs);
    </script>

@endsection
