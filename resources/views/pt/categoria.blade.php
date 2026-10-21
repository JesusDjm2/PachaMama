@extends('layouts.apppt')
@php
    // Cada categoría tiene su propio fondo (clase CSS del tema), su texto de entrada y sus parejas ES/EN.
    $datos = [
        'trilhas' => [
            'hero' => 'caminata',
            'titulo' => 'Tours de trekking pelo Peru',
            'lead' => 'Esta é a lista das melhores caminhadas que dá para fazer pelo Peru',
            'keywords' => 'trilha inca, camino inca, trekking peru, salkantay, machu picchu a pé',
            'alternates' => ['es' => 'caminata', 'en' => 'hikes'],
        ],
        'machu-picchu' => [
            'hero' => 'machu',
            'titulo' => 'Tours para Machu Picchu',
            'lead' => 'Todos os nossos tours que incluem a cidadela de Machu Picchu',
            'keywords' => 'machu picchu tour, viagem machu picchu, trem machu picchu, caminho inca',
            'alternates' => ['es' => 'mapi', 'en' => 'mapien'],
        ],
        'arredores-do-peru' => [
            'hero' => 'destinos destinos-around-peru',
            'titulo' => 'Tours pelo Peru',
            'lead' => 'Tours que visitam duas ou mais cidades dentro do território peruano',
            'keywords' => 'tour pelo peru, peru completo, lima cusco puno, viagens no peru',
            'alternates' => ['es' => 'peru', 'en' => 'around'],
        ],
        'dia-inteiro' => [
            'hero' => 'ollantaytambo',
            'titulo' => 'Bate-voltas e tours de um dia',
            'lead' => 'Passeios de um dia saindo de Cusco e do Vale Sagrado',
            'keywords' => 'bate volta cusco, tour de um dia vale sagrado, vinicunca dia, humantay dia',
            'alternates' => ['es' => 'fullday', 'en' => 'fulldayen'],
        ],
        'tours-de-luxo' => [
            'hero' => 'pachamamalodge',
            'titulo' => 'Tours de luxo e experiências privativas',
            'lead' => 'As experiências mais exclusivas do Peru, com serviço privativo do começo ao fim',
            'keywords' => 'peru luxo, tour privativo peru, sanctuary lodge, viagem exclusiva machu picchu',
            'alternates' => ['es' => 'luxury', 'en' => 'private'],
        ],
    ];
    $cat = $datos[$categoria->link] ?? [
        'hero' => 'destinos',
        'titulo' => $categoria->nombre . ' | Pacha Mama Spirit',
        'lead' => 'Tours de ' . $categoria->nombre . ' com a Pacha Mama Spirit',
        'keywords' => 'tours peru, ' . $categoria->nombre,
        'alternates' => [],
    ];
    $titulo = $cat['titulo'];
    $descripcion = $cat['lead'];
    $keywords = $cat['keywords'];
    $img = 'https://pachamamaspirit.com/img/panoramico/Recorrido-Cusco-Machu-Picchu.webp';
@endphp
@section('titulo', $cat['titulo'])
@include('layouts.metasblogs')
@push('page_metas')
@if (! empty($cat['alternates']['es']))
<link rel="alternate" hreflang="es" href="{{ route($cat['alternates']['es']) }}">
@endif
@if (! empty($cat['alternates']['en']))
<link rel="alternate" hreflang="en" href="{{ route($cat['alternates']['en']) }}">
@endif
<link rel="alternate" hreflang="pt-br" href="{{ route('pt.categoria', $categoria->link) }}">
@if (! empty($cat['alternates']['en']))
<link rel="alternate" hreflang="x-default" href="{{ route($cat['alternates']['en']) }}">
@endif
@endpush
@section('content')
    <div class="{{ $cat['hero'] }}">
        <div class="container h-100 d-flex align-items-center">
            <div class="row w-100">
                <div class="col-lg-12 text-center">
                    <h1 class="h1-destinos">{{ $cat['titulo'] }}</h1>
                    <p style="color: #fff" class="text-center">{{ $cat['lead'] }}</p>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-12 pt-5 pb-4">
                    <h2>{{ $categoria->nombre }}:</h2>
                </div>
                @forelse ($tours as $tour)
                    <div class="col-lg-3 col-md-6">
                        <div class="card card-new" style="width: 18rem;">
                            <a href="{{ route('pt.tour', $tour->slug) }}">
                                <img class="card-img-top" src="{{ $tour->img }}" alt="{{ $tour->nombre }}"
                                    loading="lazy">
                            </a>
                            <div class="card-body text-center">
                                <h5 class="card-titulo">{{ $tour->nombre }}</h5>
                                <p class="text-card">{{ $tour->descripcion }}</p>
                                <div class="enlacesCategoria">
                                    @php
                                        $colors = ['text-primary', 'text-success', 'text-info', 'text-warning', 'text-secondary'];
                                    @endphp

                                    @foreach ($tour->categories as $index => $category)
                                        <a href="{{ route('pt.categoria', $category) }}"
                                            class="{{ $colors[$index % count($colors)] }} font-weight-bold text-uppercase"
                                            title="Ver categoria" style="font-size: 11px;">
                                            {{ $category->nombre }}
                                        </a>
                                    @endforeach
                                </div>
                                <div class="row iconos-tours">
                                    <div class="col-6">
                                        <span class="icon-clock-o" style="float: right">
                                            {{ $tour->dias }} {{ $tour->dias == 1 ? 'dia' : 'dias' }}</span>
                                    </div>
                                    <div class="col-6">
                                        <span class="icon-usd" style="float:left">{{ $tour->precio }}.00</span>
                                    </div>
                                    <div class="col-12 mt-2">
                                        <span class="icon-map-marker"> {{ $tour->ubicacion }}</span>
                                    </div>
                                </div>
                                <a href="{{ route('pt.tour', $tour->slug) }}" class="boton-card">Mais
                                    detalhes</a>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 py-4">
                        <p class="text-center text-muted">Ainda não há tours publicados nesta categoria.</p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>
@endsection
