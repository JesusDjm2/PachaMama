@extends('layouts.app')

@section('content')
<div class="hero d-flex align-items-center justify-content-center">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="h1-destinos">{{ $category->nombre }}</h1>
                @if ($category->toursens->count())
                    <ul class="list-unstyled">
                        @foreach ($category->toursens as $toursen)
                            <li>{{ $toursen->name }}</li>
                        @endforeach
                    </ul>
                @else
                    <p class="text-center text-white">There are no related tours.</p>
                @endif
                <p class="mt-3 text-center text-white">Number of tours: <strong>{{ $category->toursens->count() }}</strong></p>
            </div>
        </div>
    </div>
</div>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mt-5">
                <div class="row">
                    @foreach ($category->toursens as $tour)
                        <div class="col-lg-3 col-md-6 mb-4">
                            <div class="card card-new" style="width: 100%;">
                                <a href="{{ route('toursen.show', ['id' => $tour->id, 'slug' => $tour->slug]) }}">
                                    <img class="card-img-top" src="../{{ $tour->img }}" alt="{{ $tour->nombre }}" loading="lazy">
                                </a>
                                <div class="card-body text-center">
                                    <h5 class="card-titulo">{{ $tour->nombre }}</h5>
                                    <p class="text-card">{{ $tour->descripcion }}</p>
                                    <div class="enlacesCategoria">
                                        @php
                                            $colors = ['text-primary', 'text-success', 'text-info', 'text-warning', 'text-secondary'];
                                        @endphp

                                        @foreach ($tour->categories as $index => $category)
                                            <a href="{{ route('category.show', $category) }}"
                                                class="{{ $colors[$index % count($colors)] }} font-weight-bold text-uppercase"
                                                title="Ver categoría" style="font-size: 11px;">
                                                {{ $category->nombre }}
                                            </a>
                                        @endforeach
                                    </div>
                                    <div class="row iconos-tours mt-3">
                                        <div class="col-6">
                                            <span class="icon-clock-o" style="float: right">
                                                {{ $tour->dias }} day{{ $tour->dias == 1 ? '' : 's' }}
                                            </span>
                                        </div>
                                        <div class="col-6">
                                            <span class="icon-usd" style="float: left">
                                                {{ $tour->precio }}.00
                                            </span>
                                        </div>
                                        <div class="col-12 mt-2">
                                            <span class="icon-map-marker">
                                                {{ $tour->ubicacion }}
                                            </span>
                                        </div>
                                    </div>
                                    <a href="{{ route('tours.show', ['id' => $tour->id, 'slug' => $tour->slug]) }}"
                                        class="boton-card">Más detalles</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
