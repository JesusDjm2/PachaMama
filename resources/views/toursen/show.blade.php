@extends('layouts.appen')
@section('titulo', $tour->nombre)
@include('layouts.metas')
@section('content')
    @include('layouts.menu')
    <div class="contenedor-fondo">
        <div class="blog" id="blog">
            <!----Variable de clase------>
            <div id="sarah" style="opacity: 0">
                {{ $tour->clase }}
            </div>
            <!----Fin Variable de clase------>
            <script>
                var $nombre = document.getElementById('sarah').innerText;
                var $insertar = document.getElementById("blog");
                $insertar.classList.remove("blog");
                $insertar.classList.add($nombre);
            </script>
            <div class="container h-100 d-flex align-items-center">
                <div class="row w-100">
                    <div class="col-lg-12 text-center">
                        <h1 class="h1-destinos">{{ $tour->nombre }}</h1>
                        <div class="col-lg-12 text-center font-weight-bold" style="color: #fff">
                            <span><i class="icon-map-marker"></i> {{ $tour->ubicacion }}</span>&nbsp;&nbsp;
                            <span><i class="icon-clock-o"></i> {{ $tour->dias }} day{{ $tour->dias == 1 ? '' : 's' }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <section>
        <div class="container pt-5">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    @if (session('status'))
                        <div class="text-success text-center">
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        </div>
                    @endif
                    <div class="details">
                        <div class="location">
                            <p><a href="{{ route('inicio') }}">Inicio</a> /
                                <a id="cat">
                                    {{ $tour->categoria }}
                                    <script>
                                        const cat = document.getElementById("cat");
                                        const categorias = "<?php echo $tour->categoria; ?>".split(","); // dividimos la cadena en un array
                                        const tourCategoria = categorias[0]; // obtenemos la primera categoría
                                        switch (tourCategoria) {
                                            case "machuPicchu":
                                                cat.textContent = "Tours Machu Picchu";
                                                cat.href = "{{ route('mapien') }}";
                                                break;
                                            case "around":
                                                cat.textContent = "Around Perú";
                                                cat.href = '{{ route('around') }}';
                                                break;
                                            case "caminata":
                                                cat.textContent = "Treks";
                                                cat.href = '{{ route('hikes') }}';
                                                break;
                                            case "luxury":
                                                cat.textContent = "Luxury";
                                                cat.href = '{{ route('private') }}';
                                                break;
                                            case "fullday":
                                                cat.textContent = "Full Day";
                                                cat.href = '{{ route('fulldayen') }}';
                                                break;
                                            default:
                                                cat.textContent = tourCategoria;
                                                break;
                                        }
                                    </script>
                                </a>
                                / {{ $tour->nombre }}
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <p class="text-justify">{!! $tour->contenido !!}</p>
                    <br>
                    <div>
                        <ul class="nav nav-tabs justify-content-center nav-fill" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                                    type="button" role="tab" aria-controls="home"
                                    aria-selected="true"><i class="icon-pencil"></i> Overview</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                                    type="button" role="tab" aria-controls="profile" aria-selected="false"><i class="icon-list"></i> Program
                                    detailed</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact"
                                    type="button" role="tab" aria-controls="contact"
                                    aria-selected="false"><i class="icon-add_box"></i> Included</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="mapa-tab" data-bs-toggle="tab" data-bs-target="#mapa"
                                    type="button" role="tab" aria-controls="mapa"
                                    aria-selected="false"><i class="icon-map-marker"></i> Mapa</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="importante-tab" data-bs-toggle="tab"
                                    data-bs-target="#importante" type="button" role="tab" aria-controls="importante"
                                    aria-selected="false"><i class="icon-sim_card_alert"></i> Important</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel"
                                aria-labelledby="home-tab">
                                {!! $tour->resumen !!}
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                {!! $tour->detallado !!}
                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                {!! $tour->incluidos !!}
                            </div>
                            <div class="tab-pane fade" id="mapa" role="tabpanel" aria-labelledby="mapa-tab">
                                @if (!empty($tour->mapa))
                                    {!! $tour->mapa !!}
                                @else
                                    <p>Map not included</p>
                                @endif
                            </div>
                            <div class="tab-pane fade" id="importante" role="tabpanel" aria-labelledby="importante-tab">
                                {!! $tour->importante !!}
                            </div>
                        </div>
                    </div>
                    <div class="compartir">
                        <h4 class="mb-3">Share:</h4>
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ request()->fullUrl() }}" target="_blank"
                            rel="noopener nofollow">
                            <i class="icon-facebook"></i>
                        </a>
                        <a href="https://twitter.com/intent/tweet?url={{ request()->fullUrl() }}" target="_blank"
                            rel="noopener nofollow">
                            <i class="icon-twitter"></i>
                        </a>
                        <a href="https://pinterest.com/pin/create/button/?url={{ request()->fullUrl() }}&description={{ $tour->descripcion }}"
                            target="_blank" rel="noopener nofollow">
                            <i class="icon-pinterest"></i>
                        </a>
                        <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ request()->fullUrl() }}&title={{ $tour->nombre }}&summary={{ $tour->descripcion }}&source=PachaMamaSpirit"
                            target="_blank" rel="noopener nofollow">
                            <i class="icon-linkedin"></i>
                        </a>
                        <a href="https://api.whatsapp.com/send?text={{ request()->fullUrl() }}" target="_blank"
                            rel="noopener nofollow">
                            <i class="icon-whatsapp"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="div-form-tours">
                        <p class="text-center mb-0">From:</p>
                        <h4 class="precio">${{ $tour->precio }}.00</h4>
                        <div class="linea-precio"></div>
                        <h3 class="text-center">Request Info</h3>
                        <form class="djmFormShow" action="{{ route('mensajePachaEn') }}" method="POST">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Nombre:</label>
                                    <input type="text" class="form-control form-control-sm" id="nombre" name="nombre"
                                        placeholder="Inca Pachacutec">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Email:</label>
                                    <input type="email" class="form-control form-control-sm" id="email" name="email"
                                        placeholder="hijo-del-sol@gmail.com">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="inputAddress">Adults:</label>
                                    <input type="number" class="form-control form-control-sm" name="adultos" id="adultos"
                                        placeholder="Number">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputAddress2" data-title="Children under 3 years old don't pay">Childs:
                                        ⓘ</label>
                                    <input type="number" class="form-control form-control-sm" name="childs" id="inputAddress2"
                                        placeholder="Number">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="inputCity">Date arrival in Peru:</label>
                                    <input type="date" class="form-control form-control-sm" id="date" name="date">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="inputCity">Phone number: <i class="icon-whatsapp"></i></label>
                                    <input type="number" class="form-control form-control-sm" id="phone" name="phone">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="tour">Tour:</label>
                                    <input type="text" class="form-control form-control-sm" name="tour" id="tour"
                                        value="{{ $tour->nombre }}" readonly>
                                </div>
                                <div class="form-group col-lg-12">
                                    <label for="mensaje">Message:</label>
                                    <textarea type="text" name="mensaje" id="mensaje" class="form-control" id="mensaje">
                                    </textarea>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="boton-card">Submit</button>
                            </div>
                        </form>
                        <div class="card align-items-center">
                            <div class="card-bod">
                                <h4 class="text-center">Customer Support:</h4>
                                <p class="text-center"><i class="icon-whatsapp">
                                    </i> +51 921 136 755<br>
                                    </i> info@pachamamaspirit.com
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="space"></div>
                <div class="col-lg-12">
                    <h2 class="h2-tierras">Popular tours:</h2>
                </div>
                @foreach ($otrosTours->take(4) as $tour)
                    <div class="col-lg-3 col-md-6">
                        <div class="card card-new" style="width: 18rem;">
                            <a href="{{ route('toursen.show', ['id' => $tour->id, 'slug' => $tour->slug]) }}">
                                
                                <img class="card-img-top" src="../{{ $tour->img }}" alt="Camino Inca 4 dias"
                                    loading="lazy">
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
                                        <a class="enlaceFullday" href="{{ route('fullday') }}"> {{ $fullday }}</a>
                                    @endif
                                </div>

                                <div class="row iconos-tours">
                                    <div class="col-6">
                                        <span class="icon-clock-o" style="float:right"> {{ $tour->dias }}días</span>
                                    </div>                                    
                                    <div class="col-6">
                                        <span class="icon-usd" style="float: left">{{ $tour->precio }}.00</span>
                                    </div>
                                    <div class="col-12 pt-2">
                                        <span class="icon-map-marker"> {{ $tour->ubicacion }}</span>
                                    </div>
                                </div>
                                <a href="{{ route('toursen.show', ['id' => $tour->id, 'slug' => $tour->slug]) }}"
                                    class="boton-card">Más detalles</a>

                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="space"></div>
            </div>
        </div>
    </section>

@endsection
