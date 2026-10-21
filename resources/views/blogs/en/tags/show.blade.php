@extends('layouts.appen')
@php
    $titulo = '#' . $tag->nombre . ' | Pacha Mama Spirit';
    $descripcion = 'Blog articles related to ' . $tag->nombre . ' at Pacha Mama Spirit Peru — travel, tours and Peruvian culture.';
    $keywords = $tag->nombre . ', peru blog, peru travel, peru tours';
    $img = 'https://pachamamaspirit.com/img/panoramico/trekking-peru.webp';
    $allTags = $allTags ?? collect();
@endphp
@section('titulo', $titulo)
@include('layouts.metasblogs')
@section('content')

<div class="temasBlogs">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12">
                <h1 class="h1web">#{{ $tag->nombre }}</h1>
                <p class="text-center mb-0" style="color: #fff">
                    {{ $coincidencias }} article{{ $coincidencias !== 1 ? 's' : '' }} found
                </p>
            </div>
        </div>
    </div>
</div>

<section class="blog-search-results blog-tag-page" aria-label="Tag articles">
    <div class="container">
        <div class="blog-search-results__toolbar">
            <nav class="blog-search-results__breadcrumb" aria-label="Breadcrumb">
                <a href="{{ route('index') }}">Home</a>
                <span class="blog-search-results__sep" aria-hidden="true">/</span>
                <a href="{{ route('enlistado') }}">Peru Blog</a>
                <span class="blog-search-results__sep" aria-hidden="true">/</span>
                <span>#{{ $tag->nombre }}</span>
            </nav>
            <a href="{{ route('enlistado') }}" class="blog-search-results__back">← View all posts</a>
        </div>

        <div class="row g-4 align-items-start">
            <aside class="col-lg-3 order-lg-1" aria-label="Other tags">
                <div class="tag-sidebar">
                    <h2 class="tag-sidebar__title">Blog topics</h2>
                    <ul class="tag-sidebar__list list-unstyled mb-0">
                        @foreach ($allTags as $t)
                            <li class="tag-sidebar__item{{ $t->id === $tag->id ? ' tag-sidebar__item--active' : '' }}">
                                <a href="{{ route('entag', $t->slug) }}" class="tag-sidebar__link">
                                    <span class="tag-sidebar__name">#{{ $t->nombre }}</span>
                                    <span class="tag-sidebar__count" aria-label="{{ $t->enblogs_count }} articles">{{ $t->enblogs_count }}</span>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </aside>

            <div class="col-lg-9 order-lg-2">
                <h2 class="h5 mb-3 text-center text-md-start" style="color:#1a2e45;font-weight:700;">
                    Articles tagged #{{ $tag->nombre }}
                </h2>

                @if ($blogs->isEmpty())
                    <div class="blog-search-results--empty text-center py-5">
                        <div class="blog-search-empty-panel mx-auto">
                            <p class="blog-search-empty-panel__title mb-2">No articles with this tag</p>
                            <p class="text-muted mb-3">Browse other topics in the sidebar or return to the blog index.</p>
                            <a href="{{ route('enlistado') }}" class="blog-search-results__link-all">View all blogs</a>
                        </div>
                    </div>
                @else
                    <div class="row pt-2 g-4 justify-content-center blog-tag-page__grid">
                        @foreach ($blogs as $blog)
                            @php
                                $srcBlog = \Illuminate\Support\Str::startsWith((string) ($blog->img ?? ''), ['http://', 'https://'])
                                    ? $blog->img
                                    : asset(ltrim((string) ($blog->img ?? ''), '/'));
                                $excerpt = \Illuminate\Support\Str::limit(strip_tags((string) ($blog->descripcion ?? '')), 140);
                            @endphp
                            <div class="col-12 col-md-6 d-flex">
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
                                        <h3 class="card-titulo h5">{{ $blog->nombre }}</h3>
                                        <p class="text-card blog-result-card__excerpt">{{ $excerpt }}</p>
                                        <a href="{{ route('enblog', $blog->slug) }}" class="boton-card mt-auto align-self-center">Read article</a>
                                    </div>
                                </article>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
    </div>
</section>

<div class="pb-5"></div>
@endsection
