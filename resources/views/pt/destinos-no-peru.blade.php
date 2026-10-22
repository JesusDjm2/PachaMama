@extends('layouts.apppt')
@php $titulo="Encontre os melhores destinos turísticos no Peru | Pacha Mama Spirit" @endphp
@php $descripcion="O Peru abriga muitos dos lugares turísticos mais fascinantes do mundo: Machu Picchu, Cusco, Lima, Arequipa, Puno e a Amazônia. Descubra-os aqui." @endphp
@php $keywords="destinos peru, viagem ao peru, o que fazer no peru, cusco turismo, machu picchu turismo, lago titicaca, arequipa" @endphp
@php $img="https://pachamamaspirit.com/img/panoramico/trekking-peru.webp" @endphp
@section('titulo', $titulo)
@include('layouts.metasblogs')
@section('content')
    <div class="blog-temas">
        <div class="container h-100 d-flex align-items-center">
            <div class="row w-100">
                <div class="col-lg-12 text-center">
                    <h1 class="h1-destinos">
                        Encontre destinos para conhecer o Peru
                    </h1>
                </div>
            </div>
        </div>
    </div>
    <section class="destinations-peru-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 destinations-prose">
                    <br><br>
                    <h2>O Peru como destino turístico mundial</h2>
                    <i>Peru: País de tradições ancestrais, povo acolhedor e natureza deslumbrante.</i><br><br>
                    <p>
                        O turismo no <a target="_blank" rel="noopener" class="enlaces-tours" href="{{ route('pt.index') }}">Peru</a> é
                        reconhecido internacionalmente por seus monumentos arqueológicos milenares — com mais de cem mil sítios cadastrados —,
                        pelo ecoturismo na Amazônia peruana, pelo turismo cultural em suas cidades coloniais, pela gastronomia premiada
                        mundialmente e pelo trekking de aventura nas cordilheiras dos Andes.<br><br>

                        De acordo com pesquisas oficiais do setor turístico, o índice de satisfação dos viajantes após visitar o Peru
                        supera 94%, sendo uma das experiências mais marcantes e bem avaliadas da América do Sul.
                    </p>
                    <h3>Por que visitar o Peru?</h3>
                    <p>
                        A resposta é ao mesmo tempo simples e fascinante, assim como o próprio Peru. Visitar o Peru é entrar em contato
                        com civilizações milenares vivas, com comunidades que compartilham sua sabedoria ancestral com generosidade,
                        e com paisagens que despertam emoções inesquecíveis. A verdadeira riqueza do Peru está no sorriso acolhedor
                        do povo andino, na explosão de sabores de um ceviche à beira do Pacífico, na energia ao caminhar pelas muralhas
                        de Machu Picchu e no vento fresco que sopra sobre as montanhas sagradas.
                    </p>
                    <h2>Informações e assistência ao turista</h2>
                    <p>
                        O Peru disponibiliza um serviço oficial e gratuito de atendimento que opera 7 dias por semana durante o ano todo:
                        o <a target="_blank" rel="noopener nofollow" class="enlaces-tours" href="https://www.peru.travel/es/datos-utiles/iperu">Iperú</a>
                        (Informações e Assistência ao Turista). Esse serviço oferece suporte a viajantes nacionais e estrangeiros antes, durante
                        e depois de sua viagem, fornecendo orientações seguras sobre atrativos e operadores autorizados.
                    </p>
                    <h3>Os 7 destinos turísticos mais populares do Peru</h3>
                    <p>
                        Com três regiões geográficas bem marcadas — Costa, Serra (Andes) e Selva Amazônica —, o Peru permite ao viajante
                        vivenciar desde passeios náuticos e esportes nas dunas até caminhadas de alta montanha e expedições ecológicas na floresta.
                        Confira abaixo os 7 principais destinos imperdíveis para planejar seu roteiro:
                    </p>
                </div>
            </div>

            <div class="row g-4 pt-2 results-cards-grid destinations-cards-grid">
                <div class="col-12 col-sm-6 col-lg-3 col-results-card">
                    <div class="card card-new destinations-card">
                        <a href="{{ route('pt.destinos.destination', ['slug' => 'cusco-umbigo-do-mundo']) }}">
                            <img class="card-img-top"
                                src="{{ asset('img/thumb/City-Tour-en-Sacsayhuaman-Cusco-Peru.webp') }}"
                                alt="Cidade de Cusco e Sacsayhuamán" loading="lazy">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-titulo">Cusco</h5>
                            <p class="text-card text-center">O Umbigo do Mundo e a Capital Inca</p>
                            <a href="{{ route('pt.destinos.destination', ['slug' => 'cusco-umbigo-do-mundo']) }}" class="boton-card">Ver detalhes</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 col-results-card">
                    <div class="card card-new destinations-card">
                        <a href="{{ route('pt.destinos.destination', ['slug' => 'lima-cidade-dos-reis']) }}">
                            <img class="card-img-top" src="{{ asset('img/thumb/ceviche-peruano-gastronomy.webp') }}"
                                alt="Lima e Gastronomia Peruana" loading="lazy">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-titulo">Lima</h5>
                            <p class="text-card text-center">A Cidade dos Reis e capital gastronômica</p>
                            <a href="{{ route('pt.destinos.destination', ['slug' => 'lima-cidade-dos-reis']) }}" class="boton-card">Ver detalhes</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 col-results-card">
                    <div class="card card-new destinations-card">
                        <a href="{{ route('pt.destinos.destination', ['slug' => 'arequipa-a-cidade-branca']) }}">
                            <img class="card-img-top" src="{{ asset('img/thumb/arequipa-ciudad-blanca-pacha-mama.webp') }}"
                                alt="Arequipa Cidade Branca" loading="lazy">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-titulo">Arequipa</h5>
                            <p class="text-card text-center">A Cidade Branca e o Cânion do Colca</p>
                            <a href="{{ route('pt.destinos.destination', ['slug' => 'arequipa-a-cidade-branca']) }}" class="boton-card">Ver detalhes</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 col-results-card">
                    <div class="card card-new destinations-card">
                        <a href="{{ route('pt.destinos.destination', ['slug' => 'a-cidade-de-puno']) }}">
                            <img class="card-img-top" src="{{ asset('img/thumb/lago-titicaca.webp') }}"
                                alt="Lago Titicaca em Puno" loading="lazy">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-titulo">Puno</h5>
                            <p class="text-card text-center">Capital do folclore e o Lago Titicaca</p>
                            <a href="{{ route('pt.destinos.destination', ['slug' => 'a-cidade-de-puno']) }}" class="boton-card">Ver detalhes</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 col-results-card">
                    <div class="card card-new destinations-card">
                        <a href="{{ route('pt.destinos.destination', ['slug' => 'cidade-de-ica']) }}">
                            <img class="card-img-top" src="{{ asset('img/thumb/Lineas-de-Nazca.webp') }}"
                                alt="Ica, Oásis de Huacachina e Linhas de Nazca" loading="lazy">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-titulo">Ica</h5>
                            <p class="text-card text-center">A terra do sol eterno e o oásis de Huacachina</p>
                            <a href="{{ route('pt.destinos.destination', ['slug' => 'cidade-de-ica']) }}" class="boton-card">Ver detalhes</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 col-results-card">
                    <div class="card card-new destinations-card">
                        <a href="{{ route('pt.destinos.destination', ['slug' => 'cidade-de-pisco']) }}">
                            <img class="card-img-top" src="{{ asset('img/thumb/leon-marino.webp') }}"
                                alt="Pisco e Ilhas Ballestas em Paracas" loading="lazy">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-titulo">Pisco</h5>
                            <p class="text-card text-center">Berço do Pisco e a Reserva de Paracas</p>
                            <a href="{{ route('pt.destinos.destination', ['slug' => 'cidade-de-pisco']) }}" class="boton-card">Ver detalhes</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-3 col-results-card">
                    <div class="card card-new destinations-card">
                        <a href="{{ route('pt.destinos.destination', ['slug' => 'puerto-maldonado']) }}">
                            <img class="card-img-top"
                                src="{{ asset('img/thumb/rio-amazonas-selva-de-peru-pacha-mama-spirit.webp') }}"
                                alt="Selva amazônica em Puerto Maldonado" loading="lazy">
                        </a>
                        <div class="card-body text-center">
                            <h5 class="card-titulo">Puerto Maldonado</h5>
                            <p class="text-card text-center">A exuberante selva amazônica peruana</p>
                            <a href="{{ route('pt.destinos.destination', ['slug' => 'puerto-maldonado']) }}" class="boton-card">Ver detalhes</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
