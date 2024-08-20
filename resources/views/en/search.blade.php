@extends('layouts.appen')
@php $titulo="Full day tours for Perú" @endphp
@php $descripcion="add this amazing tours to your package for Perú, City tour, Museums, treks" @endphp
@php $keywords="Vinicunca, Humantay, rainbow mountain, City tour" @endphp
@php $img="https://pachamamaspirit.com/img/panoramico/trekking-peru.webp" @endphp
@section('titulo', $titulo)
@include('layouts.metasblogs')
@section('content')
    <div class="blog">
        <div class="container d-flex align-items-center justify-content-center vh-100">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 style="padding-top: 18%;color:#fff" class="h1web">Results of your search</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($respuestas as $respuesta)
                <div class="col-lg-4 pt-5">
                    <div class="card" style="width: 18rem; margin:auto">
                        <a href="{{ route('toursen.show', ['slug' => $respuesta->slug, 'id' => $respuesta->id]) }}">
                            <img class="card-img-top" src="img/buscador/{{ $respuesta->img }}" alt="Camino Inca 4 dias"
                                loading="lazy">
                        </a>
                        <div class="card-body">
                            <h5 class="card-titulo">{{ $respuesta->nombre }}</h5>
                            <p class="card-text">{{ $respuesta->descripcion }}</p>
                            <div class="text-center">
                                <a href="{{ route('toursen.show', ['slug' => $respuesta->slug, 'id' => $respuesta->id]) }}"
                                    class="boton-card">Más info</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
