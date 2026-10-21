<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> @yield('titulo') </title>

    @include('partials.gtm-head')
    @include('partials.google-ads-tag')

    @include('layouts.hreflang')
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{ asset('img/icono-home.png') }}">
    <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilos-bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}?v={{ file_exists(public_path('css/estilos.css')) ? filemtime(public_path('css/estilos.css')) : '20261021' }}">
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;600;700&family=Quicksand:wght@400;500;600;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;500;600;700&family=Quicksand:wght@400;500;600;700&display=swap" media="print" onload="this.media='all'">
    <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;600;700&family=Quicksand:wght@400;500;600;700&display=swap"></noscript>
    @stack('page_metas')
    @yield('metas')
</head>

<body>
    @include('partials.gtm-body')
    <div class="btn-whatsapp">
        <a href="https://api.whatsapp.com/send?phone=51921136755" target="_blank" rel="noopener" aria-label="Fale conosco pelo WhatsApp" data-track="whatsapp_click">
            <span class="btn-whatsapp__icon icon-whatsapp" aria-hidden="true"></span>
        </a>
    </div>
    <div class="site-mobile-menu site-navbar-target" aria-hidden="true">
        <div class="site-mobile-menu-header">
            <span class="site-mobile-menu-title">Menu</span>
            <button type="button" class="site-mobile-menu-close-btn js-menu-toggle" aria-label="Fechar o menu">
                <span class="icon-close2" aria-hidden="true"></span>
            </button>
        </div>
        <div class="site-mobile-menu-search" role="search" aria-label="Buscar tours no Peru">
            <form class="mobile-menu-search-form" action="{{ route('pt.index') }}" method="GET">
                <label class="mobile-menu-search-label" for="mobile-menu-search-input-pt">Encontre um destino</label>
                <div class="mobile-menu-search-field">
                    <span class="mobile-menu-search-field__icon icon-search" aria-hidden="true"></span>
                    <input type="search" id="mobile-menu-search-input-pt" name="q"
                        class="form-control mobile-menu-search-input js-mobile-menu-search-input"
                        placeholder="Para onde você quer ir?" autocomplete="off" enterkeyhint="search">
                </div>
                <button type="submit" class="mobile-menu-search-submit">
                    <span class="icon-search mobile-menu-search-submit__icon" aria-hidden="true"></span>
                    Buscar tours
                </button>
            </form>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    <div class="site-navbar-wrap">
        <div class="site-navbar-top">
            <div class="container py-3">
                <div class="row align-items-center">
                    <div class="col-6">
                        <div class="d-flex mr-auto">
                            <a class="align-items-center mr-4">
                                <span class="icon-envelope mr-2 text-white"></span>
                                <span class="d-none d-md-inline-block text-white">info@pachamamaspirit.com</span>
                            </a>
                            <a class="d-flex align-items-center mr-4">
                                <span class="icon-phone mr-2 text-white"></span>
                                <span class="d-none d-md-inline-block text-white">+51 921 136 755</span>
                            </a>
                            <a href="{{ route('pt.contato') }}" class="d-flex align-items-center">
                                <span class="icon-user mr-2 text-white"></span>
                                <span class="d-none d-md-inline-block text-white">Fale conosco</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 text-right">
                        <div class="mr-auto">
                            <a href="https://www.facebook.com/PachaMamaSpiritMountain" rel="nofollow noopener" target="_blank"
                                class="p-2 pl-0" aria-label="Facebook"><span class="icon-facebook"></span></a>
                            <a href="https://www.instagram.com/pachamamaspiritmountain/" rel="nofollow noopener" target="_blank"
                                class="p-2 pl-0" aria-label="Instagram"><span class="icon-instagram"></span></a>
                            <a href="https://www.tripadvisor.com/Attraction_Review-g294314-d23476170-Reviews-Pacha_Mama_Spirit-Cusco_Cusco_Region.html" target="_blank" rel="nofollow noopener" class="p-2 pl-0" aria-label="TripAdvisor"><span
                                    class="icon-tripadvisor"></span></a>
                            <a href="https://www.youtube.com/channel/UCR5v94oQX3budGLKTRL4BBQ" rel="nofollow noopener"
                                target="_blank" class="p-2 pl-0" aria-label="YouTube"><span class="icon-youtube-play"></span></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="site-navbar site-navbar-target js-sticky-header">
            <div class="container">
                <div class="row align-items-center row-menu">
                    <div class="col-6 col-md-4 col-xl-2 site-navbar-logo-col">
                        <a href="{{ route('pt.index') }}" aria-label="Pacha Mama Spirit Início">
                            <img src="{{ asset('img/pacha-mama-spirit-logo.png') }}" alt="Logotipo Pacha Mama Spirit"
                                class="logo" title="Logo Pacha Mama Spirit">
                        </a>
                    </div>
                    <div class="col-6 col-md-8 col-xl-10 site-navbar-nav-col">
                        <nav class="site-navigation" role="navigation" aria-label="Menu principal">
                            <div class="container pe-0">
                                <div class="d-inline-flex d-xl-none align-items-center justify-content-end site-nav-mobile-toggle">
                                    <div class="tablet-header-quick d-none d-md-inline-flex align-items-center me-2">
                                        @include('partials.language-select', ['currentLocale' => 'pt', 'compact' => true, 'extraClass' => 'pacha-lang-select-wrap--header'])
                                        <button type="button" class="header-search-icon-btn" data-bs-toggle="modal" data-bs-target="#exampleModal" aria-label="Buscar tours">
                                            <span class="icon-search" aria-hidden="true"></span>
                                        </button>
                                    </div>
                                    <a href="#" class="site-menu-toggle js-menu-toggle" aria-label="Abrir o menu">
                                        <span class="icon-menu h3 mb-0" aria-hidden="true"></span>
                                    </a>
                                </div>
                                <ul class="site-menu main-menu js-clone-nav d-none d-xl-block">
                                    <li>
                                        <a href="{{ route('pt.categoria', ['categoria' => 'trilhas']) }}" class="nav-link">Trilhas e caminhadas</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('pt.categoria', ['categoria' => 'machu-picchu']) }}" class="nav-link">Tours para Machu Picchu</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('pt.categoria', ['categoria' => 'arredores-do-peru']) }}" class="nav-link">Arredores do Peru</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('pt.categoria', ['categoria' => 'dia-inteiro']) }}" class="nav-link">Bate-voltas</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('pt.categoria', ['categoria' => 'tours-de-luxo']) }}" class="nav-link">Tours de luxo</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('pt.contato') }}" class="nav-link">Contato</a>
                                    </li>
                                    <li class="nav-item-lang">
                                        @include('partials.language-select', ['currentLocale' => 'pt'])
                                    </li>
                                    <li class="nav-item-search">
                                        <i class="icon-search botonsearch" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal" role="button" tabindex="0" aria-label="Buscar tours"></i>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('partials.locale-destination-switcher')
    @stack('locale_page_switcher')
    @yield('content')

    <!-- Modal de busca -->
    <div class="modal fade modal-pacha" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content border-0 shadow">
                <div class="modal-body p-4 position-relative">
                    <button type="button" class="close modal-pacha-close" data-bs-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <form action="{{ route('pt.index') }}" method="GET">
                        @csrf
                        <h3 class="h3-book-pop-up">Encontre o seu destino no Peru</h3>
                        <div class="mb-3">
                            <label for="q-modal" class="visually-hidden">Buscar</label>
                            <input type="text" id="q-modal" name="q" class="form-control form-control-pacha-search"
                                placeholder="Para onde você quer ir?" required>
                        </div>
                        <div class="text-center">
                            <input type="submit" class="boton-index" value="Buscar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Fim do modal de busca -->

    <section>
        <div class="display-foot footer-mountain-stage">
            @include('partials.footer-condor')
            <img src="{{ asset('img/paisaje-cerros-silueta.png') }}" alt="Paisagem de cerros silhueta Pacha Mama"
                 width="100%" loading="lazy" decoding="async">
        </div>
        <div class="display-foot-2 footer-mountain-stage">
            @include('partials.footer-condor')
            <img src="{{ asset('img/paisaje-cerros-silueta-responsive.png') }}"
                title="Paisagem de cerros silhueta viagens min" alt="Paisagem de cerros silhueta Pacha Mama" width="100%" loading="lazy" decoding="async">
        </div>

        <footer>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-6 text-center mb-4">
                        <img src="{{ asset('img/Pacha-Mama-Spirit-Blanco.png') }}" alt="Pacha Mama Spirit — Agência de viagens no Peru" width="160" height="80" class="mb-3 img-fluid footer-logo-img mt-5" loading="lazy">
                        <p class="footer-tagline text-white-50">Agência de viagens peruana especializada em tours de aventura, experiências culturais e viagens únicas por todo o Peru.</p>
                    </div>
                    <div class="col-lg-2 col-md-6 text-center mb-4">
                        <h4 class="h4-foot">Explore</h4>
                        <div class="linea-foot"></div>
                        <a class="a-foot" href="{{ route('nosotros') }}">Quem somos</a>
                        <a class="a-foot" href="{{ route('terminos') }}">Termos e Condições</a>
                        <a class="a-foot" href="{{ route('preguntas') }}">Perguntas frequentes</a>
                        <a class="a-foot" href="{{ route('pt.blog.index') }}">Blog</a>
                        <a class="a-foot" href="{{ route('pt.contato') }}">Fale conosco</a>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center mb-4">
                        <h4 class="h4-foot">Contato</h4>
                        <div class="linea-foot"></div>
                        <p><span class="icon-whatsapp mr-1"></span> <a href="tel:+51921136755" class="footer-contact-link">+51 921 136 755</a></p>
                        <p><span class="icon-whatsapp mr-1"></span> <a href="tel:+19895722905" class="footer-contact-link">+1 (989) 572-2905</a></p>
                        <p><span class="icon-envelope mr-1"></span> <a href="mailto:info@pachamamaspirit.com" class="footer-contact-link">info@pachamamaspirit.com</a></p>
                        <p><span class="icon-map-marker mr-1"></span> Cusco - Peru</p>
                    </div>
                    <div class="col-lg-2 col-md-6 text-center mb-4">
                        <h4 class="h4-foot">Siga a gente</h4>
                        <div class="linea-foot"></div>
                        <div class="social-foot mt-2">
                            <a href="https://www.facebook.com/PachaMamaSpiritMountain" rel="nofollow noopener" target="_blank" aria-label="Facebook"><span class="icon-facebook"></span></a>
                            <a href="https://www.instagram.com/pachamamaspiritmountain/" rel="nofollow noopener" target="_blank" aria-label="Instagram"><span class="icon-instagram"></span></a>
                            <a href="https://www.tripadvisor.com/Attraction_Review-g294314-d23476170-Reviews-Pacha_Mama_Spirit-Cusco_Cusco_Region.html" target="_blank" rel="nofollow noopener" aria-label="TripAdvisor"><span class="icon-tripadvisor"></span></a>
                            <a href="https://www.youtube.com/channel/UCR5v94oQX3budGLKTRL4BBQ" rel="nofollow noopener" target="_blank" aria-label="YouTube"><span class="icon-youtube-play"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-12 px-0">
                    <div class="copy">
                        <h5>Copyright {{ date('Y') }} &copy; Todos os direitos reservados &mdash; Pacha Mama Spirit &mdash; Feito por <a href="https://www.facebook.com/DjmWebMaster" class="djm2" target="_blank" rel="nofollow">DJM2</a></h5>
                    </div>
                </div>
            </div>
        </footer>
    </section>

    <script src="{{ asset('js/jquery-3.3.1.min.js') }}" defer></script>
    <script src="{{ asset('js/jquery.sticky.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}" defer></script>
    <script src="{{ asset('js/main.js') }}?v={{ file_exists(public_path('js/main.js')) ? filemtime(public_path('js/main.js')) : '20261021' }}" defer></script>
    @stack('scripts')

</body>

</html>
