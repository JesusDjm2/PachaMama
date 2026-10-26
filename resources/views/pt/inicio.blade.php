@extends('layouts.apppt')
@section('titulo', 'Pacha Mama Spirit | Agência de Viagens no Peru')
@section('metas')
    <meta name="keywords"
        content="reservar peru, reservar machu picchu, viagem para o peru, caminho inca, inca trail, tours em cusco, agência de viagens peru">
    <link rel="canonical" href="{{ route('pt.index') }}">
    <meta name="description"
        content="A Pacha Mama Spirit é uma agência de viagens peruana para conhecer o Peru e fazer turismo: trilhas, cultura, gastronomia e história. Monte sua viagem com quem vive o país.">
    <meta name="image_src" content="https://pachamamaspirit.com/img/panoramico/Recorrido-Cusco-Machu-Picchu.webp">
    <meta name="og_image" content="https://pachamamaspirit.com/img/panoramico/Recorrido-Cusco-Machu-Picchu.webp">
    <meta name="og_secureImage" content="https://pachamamaspirit.com/img/panoramico/Recorrido-Cusco-Machu-Picchu.webp">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="pt_BR">
    <meta property="og:title" content="Pacha Mama Spirit | Agência de Viagens no Peru">
    <meta property="og:description"
        content="A Pacha Mama Spirit é uma agência de viagens peruana para conhecer o Peru e fazer turismo: trilhas, cultura, gastronomia e história.">
    <meta property="og:url" content="{{ route('pt.index') }}">
    <meta name="twitter:card" content="summary">
    <meta name="robots" content="index,follow">
@endsection
@section('content')
    <div class="hero">
        <div class="container">
            <div class="row">
                <div class="col-12 mx-auto">
                    <div class="form-index">
                        <div class="contenidoindex">
                            <h1 class="text-center hero-index-title">
                                Descubra os lugares mais impressionantes do Peru
                            </h1>
                            <p class="text-center hero-index-lead">
                                Caminhadas, gastronomia, sítios arqueológicos, reservas naturais, costumes, tradições,
                                paisagens e muito mais...
                            </p>
                            <a href="{{ route('pt.categoria', ['categoria' => 'trilhas']) }}">Trilhas</a>
                            <a href="{{ route('pt.categoria', ['categoria' => 'machu-picchu']) }}">Machu Picchu</a>
                            <a href="{{ route('pt.categoria', ['categoria' => 'arredores-do-peru']) }}">Arredores do Peru</a>
                            <a href="{{ route('pt.categoria', ['categoria' => 'tours-de-luxo']) }}">Tours de luxo</a>
                        </div>
                        <a href="#pachamama">
                            <div class="circulo">
                                <i class="icon-chevron-down desvanecer"></i>
                                <i class="icon-chevron-down"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 mt-2">
                    @if (session('success'))
                        <div class="text-success text-center">
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Fechar"></button>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <!--------Fim do formulário ---------->
    <section>
        <div class="container" id="pachamama">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <h2 class="h1-index">
                        <span class="text-brand">Pacha Mama Spirit</span>
                    </h2>
                    <p>
                        A <strong>Pacha Mama Spirit</strong> é uma agência de viagens peruana que nasceu em Cusco, o
                        chamado umbigo do mundo e antiga capital do <strong>império Inca</strong>. Nossa equipe montou uma
                        lista de tours que permite ao visitante aproveitar o melhor que o Peru tem a oferecer: aventura,
                        cultura, trekking, história, gastronomia e exclusividade, com um time que ama o <strong>Peru</strong>
                        e tudo o que ele nos dá.
                        O Peru tem uma das biodiversidades mais ricas do mundo, graças à cordilheira dos Andes, que cruza o
                        país formando litoral, montanha e selva no caminho, e cada região natural traz consigo uma série de
                        microclimas. Isso faz do Peru um país rico em produtos naturais, paisagens únicas e uma gastronomia
                        extensa, entre tantas outras coisas.<br><br>
                        O Peru também foi o principal cenário do Tahuantinsuyo, erguido pelos Incas, a maior e mais
                        desenvolvida cultura da América do Sul. Esse povo construiu fortalezas de pedras gigantescas que
                        resistiram ao tempo e hoje fazem parte do dia a dia, conservando toda a sua grandeza. É assim que o
                        Peru se revela um país com muito a oferecer a quem o visita.
                    </p>
                </div>
                <div class="col-lg-12 mt-3">
                    <div class="col-lg-12 mb-3">
                        <h3 class="text-center">O que a Pacha Mama oferece a quem viaja com a gente</h3>
                        <div class="linea mb-4 mt-3"></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="pt-4 d-flex flex-column align-items-center card-new feature-pillar-card rounded-3">
                                <img src="{{ asset('img/thumb/local-tour-guide-in-Peru.png') }}" height="100px"
                                    alt="Guia local de turismo no Peru" loading="lazy">
                                <p class="font-weight-bold mt-3">Guia local</p>
                                <div class="linea2-blogs"></div>
                                <p class="text-justify m-3 small">Guias locais especialistas, que conhecem a
                                    fundo a riqueza do passado da cultura Inca.</p>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="pt-4 d-flex flex-column align-items-center card-new feature-pillar-card rounded-3">
                                <img src="{{ asset('img/thumb/eco-friendly-company.png') }}" height="100px"
                                    alt="Empresa de viagens sustentável no Peru" loading="lazy">
                                <p class="font-weight-bold mt-3">Turismo sustentável</p>
                                <div class="linea2-blogs"></div>
                                <p class="text-justify m-3 small">Temos orgulho de oferecer experiências que
                                    unem a natureza a práticas responsáveis, que respeitam o meio ambiente e as comunidades
                                    locais.</p>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="pt-4 d-flex flex-column align-items-center card-new feature-pillar-card rounded-3">
                                <img src="{{ asset('img/thumb/small-groups.png') }}" height="100px" alt="Grupos reduzidos em tours no Peru"
                                    loading="lazy">
                                <p class="font-weight-bold mt-3">Grupos reduzidos</p>
                                <div class="linea2-blogs"></div>
                                <p class="text-justify m-3 small">Você fica mais perto do guia e ouve tudo
                                    o que ele tem para contar. Um tour personalizado.</p>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="pt-4 d-flex flex-column align-items-center card-new feature-pillar-card rounded-3">
                                <img src="{{ asset('img/thumb/food-on-trail.png') }}" height="100px" alt="Comida de qualidade nas trilhas do Peru"
                                    loading="lazy">
                                <p class="font-weight-bold mt-3">Alimentação na trilha</p>
                                <div class="linea2-blogs"></div>
                                <p class="text-justify m-3 small">Delicie seu paladar com a nossa comida de
                                    trilha. Garantimos refeições saborosas e reforçadas durante a aventura.</p>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="pt-4 d-flex flex-column align-items-center card-new feature-pillar-card rounded-3">
                                <img src="{{ asset('img/thumb/legally-licensed.png') }}" height="100px"
                                    alt="Agência de viagens licenciada no Peru" loading="lazy">
                                <p class="font-weight-bold mt-3">Licença em dia</p>
                                <div class="linea2-blogs"></div>
                                <p class="text-justify m-3 small">Nossa agência no Peru tem licença e
                                    permissões regularizadas, com serviços turísticos de qualidade e confiáveis.</p>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="pt-4 d-flex flex-column align-items-center card-new feature-pillar-card rounded-3">
                                <img src="{{ asset('img/thumb/camping-equipment.png') }}" height="100px"
                                    alt="Equipamento de camping para trilhas no Peru" loading="lazy">
                                <p class="font-weight-bold mt-3">Equipamento de camping</p>
                                <div class="linea2-blogs"></div>
                                <p class="text-justify m-3 small">Oferecemos uma ampla seleção de
                                    equipamentos de camping de alta qualidade, para uma experiência confortável e segura na
                                    montanha.</p>
                            </div>
                        </div>
                    </div>
                    @include('partials.home-blog-rail', ['blogs' => $blogsRecientes ?? collect(), 'locale' => 'pt'])
                </div>
                <div class="space"></div>
                <div class="col-12" id="home-tours-section">
                    @include('partials.home-tour-filters')
                    <div class="row g-3 home-tours-results" id="home-tours-results" aria-live="polite">
                        @include('partials.home-tours-grid-pt')
                    </div>
                </div>
                <div class="space"></div>
            </div>
        </div>
    </section>
    <!-----Imagem full------>
    <div class="full-img">
        <div class="full-img-card uno">
            <div class="oscuro">
                <h5>Trekking</h5>
                <p>Caminhadas pelo Peru</p>
                <a href="{{ route('pt.categoria', ['categoria' => 'trilhas']) }}">Explorar tours</a>
            </div>
        </div>
        <div class="full-img-card dos">
            <div class="oscuro">
                <h5>Machu Picchu</h5>
                <p>Tours em Machu Picchu</p>
                <a href="{{ route('pt.categoria', ['categoria' => 'machu-picchu']) }}">Explorar tours</a>
            </div>
        </div>
        <div class="full-img-card tres">
            <div class="oscuro">
                <h5>Peru</h5>
                <p>Tours para descobrir o Peru</p>
                <a href="{{ route('pt.categoria', ['categoria' => 'arredores-do-peru']) }}">Explorar tours</a>
            </div>
        </div>
        <div class="full-img-card cuatro">
            <div class="oscuro">
                <h5>Mountain Lodge</h5>
                <p>Pacha Mama Spirit Lodge</p>
                <a href="{{ route('lodges') }}">Explorar tours</a>
            </div>
        </div>
    </div>
    <!------Fim Full img---------->
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="space"></div>
                <div class="col-lg-12">
                    <h2 class="h2-tierras">Aventura no Peru:</h2>
                    <div class="linea2-blogs mb-4"></div>
                    <p>
                        A Pacha Mama Spirit é uma agência com muita experiência em viagens de aventura e caminhadas pelas
                        principais rotas turísticas do Peru. Como quem viaja a pé atravessa áreas rurais, o trekking dá uma
                        visão de perto de paisagens incríveis no caminho. O Camino Inca, que leva até Machu Picchu, é um dos
                        melhores trekkings da América do Sul e deveria ser uma das suas primeiras opções de caminhada.
                    </p>
                </div>
                <div class="space"></div>
                @foreach ($tours as $tour)
                    @if (Str::contains($tour->categoria, 'hikes'))
                        <div class="col-lg-3 col-md-6">
                            <div class="card card-new w-100">
                                <a href="{{ route('pt.tour', $tour->slug) }}">
                                    <img class="card-img-top" src="{{ asset($tour->img) }}" alt="{{ $tour->nombre }}"
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
                                                class="{{ $colors[$index % count($colors)] }} fw-bold text-uppercase small text-decoration-none"
                                                title="Ver categoria">
                                                {{ $category->nombre }}
                                            </a>
                                        @endforeach
                                    </div>
                                    <div class="row iconos-tours small text-secondary">
                                        <div class="col-6 text-end">
                                            <span class="icon-clock-o" aria-hidden="true"></span>
                                                {{ $tour->dias }} {{ $tour->dias == 1 ? 'dia' : 'dias' }}
                                        </div>
                                        <div class="col-6 text-start">
                                            <span class="icon-usd" aria-hidden="true"></span> {{ $tour->precio }}.00
                                        </div>
                                        <div class="col-12 mt-2 text-center">
                                            <span class="icon-map-marker" aria-hidden="true"></span> {{ $tour->ubicacion }}
                                        </div>
                                    </div>
                                    <a href="{{ route('pt.tour', $tour->slug) }}"
                                        class="boton-card">Mais detalhes</a>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
                <div class="space"></div>
            </div>
        </div>
    </section>

    @include('partials.home-reviews', ['locale' => 'pt'])

    <section>
        <div class="container mt-3">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="h1-responsive font-weight-bold text-center my-4">Fale com a equipe da Pacha Mama Spirit</h2>
                    <p class="text-center w-responsive mx-auto mb-5">
                        Estamos aqui para ajudar. Ficou com alguma dúvida? Não deixe de falar com a
                        gente diretamente. Nossa equipe responde em poucas horas para te ajudar a montar a viagem.
                    </p>
                    <form id="contact-form" name="contact-form" action="{{ route('mensajeIndexPt') }}" method="POST">
                        @csrf
                        <div class="row formTransparent">
                            <div class="col-md-6">
                                <div class="md-form mb-4">
                                    <input type="text" id="name" name="name" class="form-control"
                                        placeholder="Nome:" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="md-form mb-4">
                                    <input type="text" id="email" name="email" class="form-control"
                                        placeholder="E-mail:" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="md-form mb-4">
                                    <input type="text" id="phone" name="phone" class="form-control"
                                        placeholder="Telefone:" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="md-form mb-4">
                                    <input type="text" id="country" name="country" class="form-control"
                                        placeholder="País:">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="md-form mb-4">
                                    <input type="number" id="adults" name="adults" class="form-control"
                                        placeholder="Adultos:">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="md-form mb-4">
                                    <select name="tipo" id="tipo" class="form-control md">
                                        <option selected> Tipo de viagem:</option>
                                        <option value="familia">Viagem em família</option>
                                        <option value="pareja">Viagem a dois</option>
                                        <option value="amigos">Viagem com amigos</option>
                                        <option value="grupo">Viagem em grupo</option>
                                        <option value="privado">Viagem privativa</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12 mt-2">
                                <div class="md-form">
                                    <textarea type="text" placeholder="Escreva aqui a sua dúvida..." id="message" name="message" rows="2"
                                        class="form-control md-textarea" required></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 mt-2">
                                <div class="text-center">
                                    <button class="btnTransparent" type="submit">Enviar</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
