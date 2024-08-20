@extends('layouts.app')
@php $titulo="Pacha Mama Spirit Lodge" @endphp
@php $descripcion="Perú tiene muchos lugares tur´siticos para conocer en su territorio, descubreos en esta sección." @endphp
@php $keywords="Lodge de lujo, Machu Picchu lodge, sky lodge, Pacha Mama Lodge" @endphp
@php $img="https://pachamamaspirit.com/img/panoramico/Pacha-mama-spirit-lodge.webp" @endphp
@section('titulo', $titulo)
@include('layouts.metasblogs')
@section('content')
    <div class="pachamamalodge">
        <div class="container h-100 d-flex align-items-center">
            <div class="row w-100">
                <div class="col-lg-12 text-center">
                    <h1 class="h1-destinos">
                        Nuestro exclusivo lodge 'Pacha Mama Spirit'
                    </h1>
                    <p style="color: #fff" class="text-center">Se encuentra en el corazón del valle sagrado de los incas,
                        amanezca con una de las mejores vistas que el valle sagrado puede ofrecer</p>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 pt-5 pb-4">
                    <h2>Lodge Pacha Mama Spirit tours:</h2>
                    <p class="text-succes">
                        Nuestro lodge actualmente se encuentra en construcción, pronto ofreceremos a nuestros visitantes
                        esta extraordinaria experiencia.
                    </p>
                    <P style="height: 20vh"></P>
                </div>
                <!-----Fin orueba--->
                @foreach ($tours as $tour)
                    @if (Str::contains($tour->categoria, 'lodge'))
                        <div class="col-lg-3 col-md-6">
                            <div class="card card-new" style="width: 18rem;">
                                <a href="{{ route('tours.show', $tour->slug) }}">
                                    <img class="card-img-top" src="{{ $tour->img }}"
                                        alt="Camino Inca 4 dias" loading="lazy">
                                </a>
                                <div class="card-body text-center">
                                    <h5 class="card-titulo">{{ $tour->nombre }}</h5>
                                    <p class="text-card">{{ $tour->descripcion }}</p>
                                    <div class="enlacesCategoria">
                                        @if (Str::contains($tour->categoria, 'machupicchu'))
                                            <p style="display:none">
                                                {{ $mapi = 'Machu Picchu' }}
                                            </p>
                                            <a class="enlaceMapi" href="{{ route('mapi') }}">{{ $mapi }}
                                            </a>
                                        @endif
                                        @if (Str::contains($tour->categoria, 'hikes'))
                                            <p style="display:none">
                                                {{ $hike = 'Caminata' }}
                                            </p>
                                            <a class="enlaceHike" href="{{ route('caminata') }}">
                                                {{ $hike }}</a>
                                        @endif
                                        @if (Str::contains($tour->categoria, 'around'))
                                            <p style="display: none">
                                                {{ $peru = 'Perú' }}
                                            </p>
                                            <a class="enlaceAround" href="{{ route('peru') }}">
                                                {{ $peru }}
                                            </a>
                                        @endif
                                        @if (Str::contains($tour->categoria, 'luxury'))
                                            <p style="display:none">
                                                {{ $luxury = 'Privado' }}
                                            </p>
                                            <a class="enlaceLuxury" href="{{ route('luxury') }}"> {{ $luxury }}</a>
                                        @endif
                                        @if (Str::contains($tour->categoria, 'fullday'))
                                            <p style="display:none">
                                                {{ $fullday = 'Full Day' }}
                                            </p>
                                            <a class="enlaceFullday" href="{{ route('fullday') }}">
                                                {{ $fullday }}</a>
                                        @endif
                                    </div>

                                    <div class="row iconos-tours">
                                        <div class="col-6">
                                            <span class="icon-clock-o" style="float: right"> {{ $tour->dias }} días</span>
                                        </div>                                       
                                        <div class="col-6">
                                            <span class="icon-usd" style="float:left"> {{ $tour->precio }}.00</span>
                                        </div>
                                        <div class="col-12 pt-2" style="float:right">
                                            <span class="icon-map-marker"> {{ $tour->ubicacion }}</span>
                                        </div>
                                    </div>
                                    <a href="{{ route('tours.show', $tour->slug) }}"
                                        class="boton-card">Más Info</a>

                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </section>
@endsection
