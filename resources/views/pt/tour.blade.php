@extends('layouts.apppt')
@section('titulo', $tour->nombre)
@include('layouts.metas')
@push('locale_page_switcher')
    @if ($tour->tour)
        <div class="locale-lang-strip text-center small">
            <a href="{{ route('tours.show', $tour->tour->slug) }}" hreflang="es">Ver este tour em espanhol →</a>
            @if ($tour->tour->toursens)
                <span class="locale-lang-strip__muted mx-1" aria-hidden="true">·</span>
                <a href="{{ route('toursen.show', $tour->tour->toursens->slug) }}" hreflang="en">See this tour in English →</a>
            @endif
        </div>
    @endif
@endpush
@section('content')
    @include('layouts.menu')
    <div class="contenedor-fondo">
        <div class="{{ trim($tour->clase) ?: 'blog' }}" id="blog">
            <div id="sarah" style="display:none">{{ trim($tour->clase) }}</div>
            <div class="container h-100 d-flex align-items-center">
                <div class="row w-100">
                    <div class="col-lg-12 text-center">
                        <h1 class="h1-destinos">{{ $tour->nombre }}</h1>
                        <div class="col-lg-12 text-center font-weight-bold" style="color: #fff">
                            <span><i class="icon-map-marker"></i> {{ $tour->ubicacion }}</span>&nbsp;&nbsp;
                            <span><i class="icon-clock-o"></i> {{ $tour->dias }}
                                {{ $tour->dias == 1 ? 'dia' : 'dias' }}</span>
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
                            <p><a href="{{ route('pt.index') }}">Início</a> /
                                <a id="cat">
                                    @foreach ($tour->categories as $category)
                                        <a href="{{ route('pt.categoria', $category) }}">
                                            {{ $category->nombre }}
                                        </a>
                                        @if (!$loop->last)
                                            -
                                        @endif
                                    @endforeach
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
                                    type="button" role="tab" aria-controls="home" aria-selected="true"><i
                                        class="icon-pencil"></i> Programa detalhado</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact"
                                    type="button" role="tab" aria-controls="contact" aria-selected="false"><i
                                        class="icon-add_box"></i> Inclui</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="mapa-tab" data-bs-toggle="tab" data-bs-target="#mapa"
                                    type="button" role="tab" aria-controls="mapa" aria-selected="false"><i
                                        class="icon-map-marker"></i> Mapa</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="importante-tab" data-bs-toggle="tab"
                                    data-bs-target="#importante" type="button" role="tab" aria-controls="importante"
                                    aria-selected="false"><i class="icon-sim_card_alert"></i> Importante</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent" style="text-align: justify">
                            <div class="tab-pane fade show active" id="home" role="tabpanel"
                                aria-labelledby="home-tab">
                                {!! $tour->detallado !!}
                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                {!! $tour->incluidos !!}
                            </div>
                            <div class="tab-pane fade" id="mapa" role="tabpanel" aria-labelledby="mapa-tab">
                                @if (!empty($tour->mapa))
                                    {!! $tour->mapa !!}
                                @else
                                    <p>Mapa não incluído</p>
                                @endif
                            </div>
                            <div class="tab-pane fade" id="importante" role="tabpanel" aria-labelledby="importante-tab">
                                {!! $tour->importante !!}
                            </div>
                        </div>
                    </div>
                    <div class="compartir">
                        <h4 class="mb-3">Compartilhar:</h4>
                        <a href="https://www.facebook.com/sharer/sharer.php?u={{ request()->fullUrl() }}" target="_blank"
                            rel="noopener nofollow" aria-label="Compartilhar no Facebook">
                            <i class="icon-facebook"></i>
                        </a>
                        <a href="https://twitter.com/intent/tweet?url={{ request()->fullUrl() }}" target="_blank"
                            rel="noopener nofollow" aria-label="Compartilhar no Twitter">
                            <i class="icon-twitter"></i>
                        </a>
                        <a href="https://pinterest.com/pin/create/button/?url={{ request()->fullUrl() }}&description={{ $tour->descripcion }}"
                            target="_blank" rel="noopener nofollow" aria-label="Compartilhar no Pinterest">
                            <i class="icon-pinterest"></i>
                        </a>
                        <a href="https://www.linkedin.com/shareArticle?mini=true&url={{ request()->fullUrl() }}&title={{ $tour->nombre }}&summary={{ $tour->descripcion }}&source=PachaMamaSpirit"
                            target="_blank" rel="noopener nofollow" aria-label="Compartilhar no LinkedIn">
                            <i class="icon-linkedin"></i>
                        </a>
                        <a href="https://api.whatsapp.com/send?text={{ request()->fullUrl() }}" target="_blank"
                            rel="noopener nofollow" aria-label="Compartilhar no WhatsApp">
                            <i class="icon-whatsapp"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="div-form-tours">
                        <p class="text-center mb-0">A partir de:</p>
                        <h4 class="precio">${{ $tour->precio }}.00</h4>
                        <div class="linea-precio"></div>
                        <h3 class="text-center">Pedir informações</h3>
                        <form class="djmFormShow" action="{{ route('mensajePachaPt') }}" method="POST">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="nombre">Nome:</label>
                                    <input type="text" class="form-control form-control-sm" id="nombre"
                                        name="nombre" placeholder="Inca Pachacutec">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email">E-mail:</label>
                                    <input type="email" class="form-control form-control-sm" id="email"
                                        name="email" placeholder="filho-do-sol@gmail.com">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="adultos">Adultos:</label>
                                    <input type="number" class="form-control form-control-sm" name="adultos"
                                        id="adultos" placeholder="Quantidade">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="childs" data-title="Crianças até 3 anos não pagam">Crianças:
                                        ⓘ</label>
                                    <input type="number" class="form-control form-control-sm" name="childs"
                                        id="childs" placeholder="Quantidade">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="date">Data de chegada ao Peru:</label>
                                    <input type="date" class="form-control form-control-sm" id="date"
                                        name="date">
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="phone">Telefone: <i class="icon-whatsapp"></i></label>
                                    <input type="number" class="form-control form-control-sm" id="phone"
                                        name="phone">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="tour">Tour:</label>
                                    <input type="text" class="form-control form-control-sm" name="tour"
                                        id="tour" value="{{ $tour->nombre }}" readonly>
                                </div>
                                <div class="form-group col-lg-12">
                                    <label for="mensaje">Mensagem:</label>
                                    <textarea type="text" name="mensaje" id="mensaje" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="boton-card">Enviar</button>
                            </div>
                        </form>
                        <div class="card align-items-center">
                            <div class="card-bod mt-3 mb-3">
                                <h4 class="text-center">Atendimento ao cliente:</h4>
                                <p class="text-center"><i class="icon-whatsapp"></i> +51 921 136 755<br>
                                    <i class="icon-envelope"></i> info@pachamamaspirit.com
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="space"></div>
                <div class="col-lg-12">
                    <h2 class="h2-tierras">Tours populares:</h2>
                </div>
                @foreach ($otrosTours->random(4) as $popular)
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="card card-new" style="width: 100%;">
                            <a href="{{ route('pt.tour', $popular->slug) }}">
                                <img class="card-img-top" src="{{ asset($popular->img) }}" alt="{{ $popular->nombre }}"
                                    loading="lazy">
                            </a>
                            <div class="card-body text-center">
                                <h5 class="card-titulo">{{ $popular->nombre }}</h5>
                                <p class="text-card">{{ $popular->descripcion }}</p>
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

                                    @foreach ($popular->categories as $index => $category)
                                        <a href="{{ route('pt.categoria', $category) }}"
                                            class="{{ $colors[$index % count($colors)] }} font-weight-bold text-uppercase"
                                            title="Ver categoria" style="font-size: 11px;">
                                            {{ $category->nombre }}
                                        </a>
                                    @endforeach
                                </div>
                                <div class="row iconos-tours mt-3">
                                    <div class="col-6">
                                        <span class="icon-clock-o" style="float: right">
                                            {{ $popular->dias }} {{ $popular->dias == 1 ? 'dia' : 'dias' }}
                                        </span>
                                    </div>
                                    <div class="col-6">
                                        <span class="icon-usd" style="float: left">
                                            {{ $popular->precio }}.00
                                        </span>
                                    </div>
                                    <div class="col-12 mt-2">
                                        <span class="icon-map-marker">
                                            {{ $popular->ubicacion }}
                                        </span>
                                    </div>
                                </div>
                                <a href="{{ route('pt.tour', $popular->slug) }}"
                                    class="boton-card">Mais detalhes</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="space"></div>
            </div>
        </div>
    </section>

@endsection
