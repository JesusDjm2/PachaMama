@extends('layouts.apppt')
@section('titulo', $blog->nombre . ' | Pacha Mama Spirit')
@section('metas')
    <meta name="description" content="{{ $blog->descripcion }}" />
    <meta name="keywords" content="{{ $blog->keywords }}" />
    <link rel="canonical" href="{{ request()->url() }}" />
    <meta property="og:type" content="article">
    <meta property="og:locale" content="pt_BR">
    <meta property="og:title" content="{{ $blog->nombre }} | Pacha Mama Spirit">
    <meta property="og:description" content="{{ $blog->descripcion }}">
    <meta property="og:url" content="{{ request()->url() }}">
    <meta property="og:image" content="{{ $blog->img }}">
    <meta property="og:image:secure_url" content="{{ $blog->img }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $blog->nombre }} | Pacha Mama Spirit">
    <meta name="twitter:description" content="{{ $blog->descripcion }}">
    <meta name="twitter:image" content="{{ $blog->img }}">
    <meta name="robots" content="index,follow">
    <link rel="alternate" hreflang="pt-br" href="{{ route('pt.blog', $blog->slug) }}">
    @if ($blog->blog)
    <link rel="alternate" hreflang="es" href="{{ route('blog.show', $blog->blog->slug) }}">
    @endif
    @if ($blog->blog?->enblog)
    <link rel="alternate" hreflang="en" href="{{ route('enblog', $blog->blog->enblog->slug) }}">
    @endif
    <link rel="alternate" hreflang="x-default" href="{{ $blog->blog?->enblog ? route('enblog', $blog->blog->enblog->slug) : ($blog->blog ? route('blog.show', $blog->blog->slug) : route('pt.blog', $blog->slug)) }}">
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@graph": [
        {
          "@type": "BlogPosting",
          "headline": "{{ addslashes($blog->nombre) }}",
          "description": "{{ addslashes($blog->descripcion) }}",
          "image": "{{ $blog->img }}",
          "url": "{{ request()->url() }}",
          "datePublished": "{{ ($blog->published_at ?? $blog->created_at)->toIso8601String() }}",
          "dateModified": "{{ $blog->updated_at->toIso8601String() }}",
          "author": { "@id": "https://pachamamaspirit.com/#organization" },
          "publisher": { "@id": "https://pachamamaspirit.com/#organization" },
          "inLanguage": "pt-BR",
          "mainEntityOfPage": { "@type": "WebPage", "@id": "{{ request()->url() }}" },
          "keywords": "{{ addslashes($blog->keywords) }}"
        },
        {
          "@type": "BreadcrumbList",
          "itemListElement": [
            { "@type": "ListItem", "position": 1, "name": "Início", "item": "{{ route('pt.index') }}" },
            { "@type": "ListItem", "position": 2, "name": "Blog", "item": "{{ route('pt.blog.index') }}" },
            { "@type": "ListItem", "position": 3, "name": "{{ addslashes($blog->nombre) }}", "item": "{{ request()->url() }}" }
          ]
        }
      ]
    }
    </script>
@endsection
@push('locale_page_switcher')
    @if ($blog->blog || $blog->blog?->enblog)
        <div class="locale-lang-strip text-center small">
            @if ($blog->blog)
                <a href="{{ route('blog.show', $blog->blog->slug) }}" hreflang="es">Ver este artigo em espanhol →</a>
            @endif
            @if ($blog->blog && $blog->blog->enblog)
                <span class="locale-lang-strip__muted mx-1" aria-hidden="true">·</span>
            @endif
            @if ($blog->blog?->enblog)
                <a href="{{ route('enblog', $blog->blog->enblog->slug) }}" hreflang="en">Read this article in English →</a>
            @endif
        </div>
    @endif
@endpush
@section('content')
    <div class="temasBlogs">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12">
                    <h1 class="h1web">{{ $blog->nombre }}</h1>
                    <p class="text-center" style="color: #fff">
                        {{ $blog->descripcion }}
                    </p>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="details">
                        <div class="location">
                            <p><a href="{{ route('pt.index') }}">Início</a> / <a href="{{ route('pt.blog.index') }}">Blog</a>
                                / <a>{{ $blog->nombre }}</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8" id="cuerpo">
                    <h2 class="text-center blog-post-heading">{{ $blog->nombre }}</h2>
                    <p class="text-center blog-post-meta">
                        <i class="icon-calendar" aria-hidden="true"></i>
                        Publicado: {{ ($blog->published_at ?? $blog->created_at)->format('d/m/Y') }}
                        &nbsp;·&nbsp;
                        <i class="icon-pencil" aria-hidden="true"></i>
                        Atualizado: {{ $blog->updated_at->format('d/m/Y') }}
                    </p>
                    <div class="blog-post-content">
                        {!! $blog->cuerpo !!}
                    </div>
                    <div class="compartir">
                        <h4 class="mb-3">Compartilhar:</h4>
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ request()->url() }}" target="_blank"
                            rel="noopener nofollow">
                            <i class="icon-facebook"></i>
                        </a>
                        <a href="https://twitter.com/intent/tweet?url={{ request()->url() }}" target="_blank"
                            rel="noopener nofollow">
                            <i class="icon-twitter"></i>
                        </a>
                        <a href="https://pinterest.com/pin/create/button/?url={{ request()->url() }}&description={{ $blog->descripcion }}"
                            target="_blank" rel="noopener nofollow">
                            <i class="icon-pinterest"></i>
                        </a>
                        <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ request()->url() }}&title={{ $blog->nombre }}&summary={{ $blog->descripcion }}&source=PachaMamaSpirit"
                            target="_blank" rel="noopener nofollow">
                            <i class="icon-linkedin"></i>
                        </a>
                        <a href="https://api.whatsapp.com/send?text={{ request()->url() }}" target="_blank"
                            rel="noopener nofollow">
                            <i class="icon-whatsapp"></i>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="sticky">
                        <h3>Buscar no blog:</h3>
                        <div class="linea2-blogs"></div>
                        <form action="{{ route('pt.blog.index') }}" method="GET" class="mb-4">
                            @csrf
                            <div class="form-row">
                                <div class="form-outline">
                                    <input type="text" id="name" name="name" class="form-control"
                                        placeholder="Escreva um tema..." required>
                                </div>
                                <input type="submit" class="boton-blog-search" value="Buscar">
                            </div>
                        </form>
                        <h3>Tags:</h3>
                        <div class="linea2-blogs"></div>
                        <div class="tags">
                            @foreach ($blog->tags as $tag)
                                <a href="{{ route('pt.tag', $tag->slug) }}">#{{ $tag->nombre }} </a>
                            @endforeach
                        </div>

                        <h3>Artigos sugeridos:</h3>
                        <div class="linea2-blogs"></div>
                        @foreach ($blogses as $blogse)
                            <a href="{{ route('pt.blog', $blogse->slug) }}">
                                <div class="row blogSpace">
                                    <div class="col-4">
                                        <img src="{{ asset(ltrim($blogse->img, '/')) }}" alt="{{ $blogse->nombre }}"
                                            class="imgCuadrada" loading="lazy">
                                    </div>
                                    <div class="col-8">
                                        <p>{{ $blogse->nombre }}</p>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                </div>
                <div class="space"></div>
            </div>
            <div class="row">
                <div class="col-12 pt-5 pb-3">
                    <h2>Tours populares:</h2>
                </div>
                @foreach ($tours as $tour)
                    <div class="col-lg-3 col-md-6">
                        <div class="card card-new" style="width: 18rem;">
                            <a href="{{ route('pt.tour', $tour->slug) }}">
                                <img class="card-img-top" src="{{ $tour->img }}" alt="{{ $tour->nombre }}" loading="lazy">
                            </a>
                            <div class="card-body text-center">
                                <h5 class="card-title">{{ $tour->nombre }}</h5>
                                <p class="text-card">{{ $tour->descripcion }}</p>
                                <div class="enlacesCategoria">
                                    @foreach ($tour->categories as $category)
                                        <a href="{{ route('pt.categoria', $category) }}"
                                            class="font-weight-bold text-uppercase" style="font-size: 11px;">
                                            {{ $category->nombre }}
                                        </a>
                                    @endforeach
                                </div>
                                <div class="row iconos-tours">
                                    <div class="col-4" style="float: left">
                                        <span class="icon-clock-o"> {{ $tour->dias }} {{ $tour->dias == 1 ? 'dia' : 'dias' }}</span>
                                    </div>
                                    <div class="col-4" style="float:right">
                                        <span class="icon-map-marker"> {{ $tour->ubicacion }}</span>
                                    </div>
                                    <div class="col-4" style="float:right">
                                        <span class="icon-usd"><strong>{{ $tour->precio }}</strong></span>
                                    </div>
                                </div>
                                <a href="{{ route('pt.tour', $tour->slug) }}" class="boton-card">Mais detalhes</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
