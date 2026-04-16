@extends('layouts.app')
@section('titulo', 'Resultados de búsqueda en el blog')
@section('content')
    <div class="blog">
        <div class="container d-flex align-items-center justify-content-center">
            <div class="row w-100 py-4">
                <div class="col-lg-12 text-center">
                    <h1 class="h1-destinos">Resultados de la búsqueda: &lsquo;{{ $nombre }}&rsquo;</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container pb-5">
        <div class="row pt-4 g-4 results-cards-grid">
            @foreach ($blogs as $blog)
                <div class="col-12 col-sm-6 col-lg-4 col-results-card">
                    <div class="card card-new">
                        <a href="{{ route('blog.show', ['slug' => $blog->slug, 'id' => $blog->id]) }}">
                            <img class="card-img-top" src="{{ $blog->img }}" alt="{{ $blog->nombre }}" loading="lazy">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-titulo">{{ $blog->nombre }}</h5>
                            <p class="text-card">{{ $blog->descripcion }}</p>
                            <div class="tags text-center mb-2">
                                @foreach ($blog->tags as $tag)
                                    <a href="{{ route('tag', $tag->slug) }}">#{{ $tag->nombre }} </a>
                                @endforeach
                            </div>
                            <a href="{{ route('blog.show', ['slug' => $blog->slug, 'id' => $blog->id]) }}"
                                class="boton-card">Más info</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
