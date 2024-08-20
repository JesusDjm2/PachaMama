@extends('layouts.app')
@section('content')
    <div class="blog">
        <div class="container d-flex align-items-center justify-content-center vh-100">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="h1-destinos">Resultados de su búsqueda: '{{$name}}'</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row pt-5">
            @foreach ($respuestas as $respuesta)
                    <div class="col-lg-3 col-md-6">
                        <div class="card card-new" style="width: 18rem;">
                            <a href="{{ route('tours.show', $respuesta->slug) }}">
                                <img class="card-img-top" src="{{ $respuesta->img }}" alt="Camino Inca 4 dias"
                                    loading="lazy">
                            </a>
                            <div class="card-body text-center">
                                <h5 class="card-titulo">{{ $respuesta->nombre }}</h5>
                                <p class="text-card">{{ $respuesta->descripcion }}</p>
                                <div class="enlacesCategoria">
                                    @if (Str::contains($respuesta->categoria, 'machupicchu'))
                                        <p style="display:none">
                                            {{ $mapi = 'Machu Picchu' }}
                                        </p>
                                        <a class="enlaceMapi" href="{{ route('mapi') }}">{{ $mapi }}
                                        </a>
                                    @endif
                                    @if (Str::contains($respuesta->categoria, 'hikes'))
                                        <p style="display:none">
                                            {{ $hike = 'Caminata' }}
                                        </p>
                                        <a class="enlaceHike" href="{{ route('caminata') }}">
                                            {{ $hike }}</a>
                                    @endif
                                    @if (Str::contains($respuesta->categoria, 'around'))
                                        <p style="display: none">
                                            {{ $peru = 'Perú' }}
                                        </p>
                                        <a class="enlaceAround" href="{{ route('peru') }}">
                                            {{ $peru }}
                                        </a>
                                    @endif
                                    @if (Str::contains($respuesta->categoria, 'luxury'))
                                        <p style="display:none">
                                            {{ $luxury = 'Privado' }}
                                        </p>
                                        <a class="enlaceLuxury" href="{{ route('luxury') }}"> {{ $luxury }}</a>
                                    @endif
                                    @if (Str::contains($respuesta->categoria, 'fullday'))
                                        <p style="display:none">
                                            {{ $fullday = 'Full Day' }}
                                        </p>
                                        <a class="enlaceFullday" href="{{ route('fullday') }}"> {{ $fullday }}</a>
                                    @endif
                                </div>
                                <div class="row iconos-tours">
                                    <div class="col-6">
                                        <span class="icon-clock-o" style="float:right"> {{ $respuesta->dias }}
                                            {{ $respuesta->dias == 1 ? 'día' : 'días' }}</span>
                                    </div>
                                    <div class="col-6">
                                        <span class="icon-usd" style="float:left">{{ $respuesta->precio }}.00</span>
                                    </div>
                                    <div class="col-12 pt-2">
                                        <span class="icon-map-marker"> {{ $respuesta->ubicacion }}</span>
                                    </div>
                                </div>
                                <a href="{{ route('tours.show', $respuesta->slug) }}" class="boton-card">Más detalles</a>
                            </div>
                        </div>
                    </div>
                @endforeach
        </div>
    </div>
@endsection
