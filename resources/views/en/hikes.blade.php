@extends('layouts.appen')
@php $titulo="Hiking tours around Peru" @endphp
@php $descripcion="This is a list of the best hikes that can be done around Peru. Machu icchu tour, Peru tour, tours around Perú" @endphp
@php $keywords="Inca Trail, Machu Picchu tour, travel to Peru, Discover Peru" @endphp
@php $img="https://pachamamaspirit.com/img/panoramico/trekking-peru.webp" @endphp
@section('titulo', $titulo)
@include('layouts.metasblogs')
@section('content')
    <div class="caminata">
        <div class="container h-100 d-flex align-items-center">
            <div class="row w-100">
                <div class="col-lg-12 text-center">
                    <h1 class="h1-destinos">
                        Hiking tours around Peru
                    </h1>
                    <p style="color: #fff" class="text-center">This is a list of the best hikes that can be done around Peru
                    </p>

                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 pt-5 pb-4">
                    <h2>Hiking tours around Peru:</h2>
                </div>
                <!-----Fin orueba--->
                @foreach ($tours as $tour)
                    <div class="col-lg-3 col-md-6">
                        <div class="card card-new" style="width: 18rem;">
                            <a href="{{ route('toursen.show', ['slug' => $tour->slug]) }}">
                                <img class="card-img-top" src="{{ $tour->img }}" alt="{{ $tour->nombre }}"
                                    loading="lazy">
                            </a>
                            <div class="card-body text-center">
                                <h5 class="card-titulo">{{ $tour->nombre }}</h5>
                                <p class="text-card">{{ $tour->descripcion }}</p>
                                <div class="enlacesCategoria">
                                    @php
                                        $colors = [
                                            'text-primary',
                                            'text-success',
                                            'text-info',
                                            'text-warning',
                                            'text-secondary',
                                        ];
                                    @endphp

                                    @foreach ($tour->categories as $index => $category)
                                        <a href="{{ route('category.show', $category) }}"
                                            class="{{ $colors[$index % count($colors)] }} font-weight-bold text-uppercase"
                                            title="Ver categoría" style="font-size: 11px;">
                                            {{ $category->nombre }}
                                        </a>
                                    @endforeach
                                </div>


                                <div class="row iconos-tours">
                                    <div class="col-6">
                                        <span class="icon-clock-o" style="float: right">
                                            {{ $tour->dias }}day{{ $tour->dias == 1 ? '' : 's' }}</span>
                                    </div>
                                    <div class="col-6">
                                        <span class="icon-usd" style="float:left">{{ $tour->precio }}.00</span>
                                    </div>
                                    <div class="col-12 mt-2">
                                        <span class="icon-map-marker"> {{ $tour->ubicacion }}</span>
                                    </div>
                                </div>
                                <a href="{{ route('toursen.show', ['slug' => $tour->slug]) }}" class="boton-card">Más
                                    detalles</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
