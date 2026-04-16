@extends('layouts.appen')
@php $titulo = 'Tour search results | Pacha Mama Spirit' @endphp
@php $descripcion = 'Tours in Peru matching your search on Pacha Mama Spirit.' @endphp
@php $keywords = 'Peru tours, Machu Picchu, Cusco, travel Peru' @endphp
@php $img = 'https://pachamamaspirit.com/img/panoramico/trekking-peru.webp' @endphp
@section('titulo', $titulo)
@include('layouts.metasblogs')
@section('content')
    <div class="blog">
        <div class="container d-flex align-items-center justify-content-center vh-100">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="h1-destinos">Search results: &lsquo;{{ $name }}&rsquo;</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container pb-5">
        <div class="row pt-5 g-4 results-cards-grid">
            @foreach ($respuestas as $respuesta)
                @php
                    $ti = $respuesta->img ?? '';
                    $tourImg = \Illuminate\Support\Str::startsWith($ti, ['http://', 'https://'])
                        ? $ti
                        : asset(ltrim($ti, '/'));
                @endphp
                <div class="col-12 col-sm-6 col-lg-3 col-results-card">
                    <div class="card card-new">
                        <a href="{{ route('toursen.show', $respuesta->slug) }}">
                            <img class="card-img-top" src="{{ $tourImg }}" alt="{{ $respuesta->nombre }}" loading="lazy">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-titulo">{{ $respuesta->nombre }}</h5>
                            <p class="text-card">{{ $respuesta->descripcion }}</p>
                            <div class="enlacesCategoria">
                                @if (Str::contains($respuesta->categoria, 'machupicchu'))
                                    <p style="display:none">{{ $mapi = 'Machu Picchu' }}</p>
                                    <a class="enlaceMapi" href="{{ route('mapien') }}">{{ $mapi }}</a>
                                @endif
                                @if (Str::contains($respuesta->categoria, 'hikes'))
                                    <p style="display:none">{{ $hike = 'Hikes' }}</p>
                                    <a class="enlaceHike" href="{{ route('hikes') }}">{{ $hike }}</a>
                                @endif
                                @if (Str::contains($respuesta->categoria, 'around'))
                                    <p style="display:none">{{ $around = 'Around Peru' }}</p>
                                    <a class="enlaceAround" href="{{ route('around') }}">{{ $around }}</a>
                                @endif
                                @if (Str::contains($respuesta->categoria, 'luxury'))
                                    <p style="display:none">{{ $lux = 'Luxury' }}</p>
                                    <a class="enlaceLuxury" href="{{ route('private') }}">{{ $lux }}</a>
                                @endif
                                @if (Str::contains($respuesta->categoria, 'fullday'))
                                    <p style="display:none">{{ $fd = 'Full day' }}</p>
                                    <a class="enlaceFullday" href="{{ route('fulldayen') }}">{{ $fd }}</a>
                                @endif
                            </div>
                            <div class="row iconos-tours">
                                <div class="col-6">
                                    <span class="icon-clock-o" style="float:right">{{ $respuesta->dias }}
                                        {{ $respuesta->dias == 1 ? 'day' : 'days' }}</span>
                                </div>
                                <div class="col-6">
                                    <span class="icon-usd" style="float:left">{{ $respuesta->precio }}.00</span>
                                </div>
                                <div class="col-12 pt-2">
                                    <span class="icon-map-marker"> {{ $respuesta->ubicacion }}</span>
                                </div>
                            </div>
                            <a href="{{ route('toursen.show', $respuesta->slug) }}" class="boton-card">More details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
