<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('titulo') | Pacha Mama Spirit Perú</title>

    @include('layouts.hreflang')

    <!-- DNS prefetch & preconnect (mejora velocidad de carga) -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('img/icono-home.png') }}" type="image/png">

    <!-- SEO base: constante en todas las páginas -->
    <meta property="og:site_name" content="Pacha Mama Spirit">

    <!-- Metas específicas de cada página (secciones de hijos) -->
    @yield('metas')
    @stack('page_metas')

    <!-- CSS crítico -->
    <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilos-bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">

    <!-- Google Fonts — carga no bloqueante para mejor Core Web Vitals -->
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;600;700&family=Quicksand:wght@400;500;600;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;600;700&family=Quicksand:wght@400;500;600;700&display=swap" media="print" onload="this.media='all'">
    <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;600;700&family=Quicksand:wght@400;500;600;700&display=swap"></noscript>
</head>

<body>
    <div class="btn-whatsapp">
        <a href="https://api.whatsapp.com/send?phone=51921136755" target="_blank" rel="noopener" aria-label="Contáctanos por WhatsApp">
            <span class="btn-whatsapp__icon icon-whatsapp" aria-hidden="true"></span>
        </a>
    </div>
    <div class="site-mobile-menu site-navbar-target" aria-hidden="true">
        <div class="site-mobile-menu-header">
            <span class="site-mobile-menu-title">Menú</span>
            <button type="button" class="site-mobile-menu-close-btn js-menu-toggle" aria-label="Cerrar menú">
                <span class="icon-close2" aria-hidden="true"></span>
            </button>
        </div>
        <div class="site-mobile-menu-search" role="search" aria-label="Buscar tours en Perú">
            <form class="mobile-menu-search-form" action="{{ route('search') }}" method="GET">
                <label class="mobile-menu-search-label" for="mobile-menu-search-input-es">Buscar destinos</label>
                <div class="mobile-menu-search-field">
                    <span class="mobile-menu-search-field__icon icon-search" aria-hidden="true"></span>
                    <input type="search" id="mobile-menu-search-input-es" name="name"
                        class="form-control mobile-menu-search-input js-mobile-menu-search-input"
                        placeholder="¿Qué destino buscas?" autocomplete="off" enterkeyhint="search">
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
            <div class="container py-2">
                <div class="row align-items-center">
                    <div class="col-7">
                        <div class="d-flex align-items-center">
                            <a class="d-flex align-items-center mr-4" href="mailto:info@pachamamaspirit.com" aria-label="Enviar email">
                                <span class="icon-envelope mr-2"></span>
                                <span class="d-none d-md-inline-block">info@pachamamaspirit.com</span>
                            </a>
                            <a class="d-flex align-items-center mr-4" href="tel:+51921136755" aria-label="Llamar">
                                <span class="icon-phone mr-2"></span>
                                <span class="d-none d-md-inline-block">+51 921 136 755</span>
                            </a>
                            <a href="{{ route('contactenos') }}" class="d-flex align-items-center d-none d-md-flex">
                                <span class="icon-user mr-2"></span>
                                <span>Contáctenos</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-5 text-right">
                        <a href="https://www.facebook.com/PachaMamaSpiritMountain" rel="nofollow noopener" target="_blank" class="p-2" aria-label="Facebook"><span class="icon-facebook"></span></a>
                        <a href="https://www.instagram.com/pachamamaspiritmountain/" rel="nofollow noopener" target="_blank" class="p-2" aria-label="Instagram"><span class="icon-instagram"></span></a>
                        <a href="https://www.tripadvisor.com/Attraction_Review-g294314-d23476170-Reviews-Pacha_Mama_Spirit-Cusco_Cusco_Region.html" target="_blank" rel="nofollow noopener" class="p-2" aria-label="TripAdvisor"><span class="icon-tripadvisor"></span></a>
                        <a href="https://www.youtube.com/channel/UCR5v94oQX3budGLKTRL4BBQ" rel="nofollow noopener" target="_blank" class="p-2" aria-label="YouTube"><span class="icon-youtube-play"></span></a>
                    </div>
                </div>
            </div>
        </div>

        <div class="site-navbar site-navbar-target js-sticky-header">
            <div class="container">
                <div class="row align-items-center row-menu">
                    <div class="col-2">
                        <a href="{{ route('inicio') }}" aria-label="Inicio Pacha Mama Spirit">
                            <img src="{{ asset('img/pacha-mama-spirit-logo.png') }}" alt="Logo Pacha Mama Spirit — Agencia de viajes Perú"
                                class="logo" decoding="async">
                        </a>
                    </div>
                    <div class="col-10">
                        <nav class="site-navigation" role="navigation" aria-label="Menú principal">
                            <div class="container">
                                <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3 site-nav-mobile-toggle">
                                    <a href="#" class="site-menu-toggle js-menu-toggle text-white" aria-label="Abrir menú"><span
                                            class="icon-menu h3" aria-hidden="true"></span></a>
                                </div>
                                <ul class="site-menu main-menu js-clone-nav d-none d-lg-block">
                                    <li class="has-children">
                                        <a href="{{ route('destinos-peru') }}" class="nav-link @if(request()->is('destinos-peru')) active @endif">Destinos</a>
                                        <ul class="dropdown arrow-top">
                                            <li><a href="{{ route('cusco-ombligo-del-mundo') }}" class="nav-link">Cusco</a></li>
                                            <li><a href="{{ route('lima-ciudad-de-reyes') }}" class="nav-link">Lima</a></li>
                                            <li><a href="{{ route('arequipa-la-ciudad-blanca') }}" class="nav-link">Arequipa</a></li>
                                            <li><a href="{{ route('la-ciudad-de-puno') }}" class="nav-link">Puno</a></li>
                                            <li><a href="{{ route('ciudad-de-ica') }}" class="nav-link">Ica</a></li>
                                            <li><a href="{{ route('ciudad-de-pisco') }}" class="nav-link">Pisco</a></li>
                                            <li><a href="{{ route('puerto-maldonado') }}" class="nav-link">Puerto Maldonado</a></li>
                                        </ul>
                                    </li> 
                                    <li>
                                        <a href="{{ route('caminata') }}" class="nav-link @if(request()->is('caminata')) active @endif">¿Te gustan las caminatas?</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('mapi') }}" class="nav-link @if(request()->is('machu-picchu')) active @endif">Tours a Machu Picchu</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('peru') }}" class="nav-link @if(request()->is('alrededor-de-peru')) active @endif">Conoce Perú</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('lodges') }}" class="nav-link @if(request()->is('lodge*')) active @endif">Lodge Exclusivo</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('listado') }}" class="nav-link @if(request()->is('blog*')) active @endif">Blog</a>
                                    </li>
                                    <li>
                                        <a href="{{ \App\Support\LocaleRouteMap::menuLanguageSwitchUrl(true) }}"
                                            class="castellano-es" hreflang="en" lang="en">English</a>
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

    <div class="modal fade modal-pacha" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content border-0 shadow">
                <div class="modal-body p-4 position-relative">
                    <button type="button" class="close modal-pacha-close" data-bs-dismiss="modal" aria-label="Cerrar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <form action="{{ route('search') }}" method="GET">
                        @csrf
                        <h3 class="h3-book-pop-up">Encuentra tu destino en Perú</h3>
                        <div class="form-group mb-0">
                            <label for="search-name" class="visually-hidden">Destino</label>
                            <input type="text" id="search-name" name="name" class="form-control form-control-pacha-search"
                                placeholder="¿Qué destino buscas?" required>
                        </div>
                        <div class="text-center mt-3">
                            <input type="submit" class="boton-index" value="Buscar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin Modal de búsqueda -->
    <section>
        <div class="display-foot">
            <img src="{{ asset('img/paisaje-cerros-silueta.png') }}" title="Paisaje cerros Perú"
                alt="Paisaje cerros silueta" width="100%" loading="lazy">
        </div>
        <div class="display-foot-2">
            <img src="{{ asset('img/paisaje-cerros-silueta-responsive.png') }}" title="Silueta paisajes Perú"
                alt="Paisaje cerros silueta" width="100%" loading="lazy">
        </div>
        <footer>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-6 text-center mb-4">
                        <img src="{{ asset('img/Pacha-Mama-Spirit-Blanco.png') }}" alt="Pacha Mama Spirit — Agencia de viajes Perú" width="160" height="80" class="mb-3 img-fluid footer-logo-img mt-5" loading="lazy">
                        <p class="footer-tagline text-white-50">Agencia de viajes peruana especializada en tours de aventura, cultura y experiencias únicas por Perú.</p>
                    </div>
                    <div class="col-lg-2 col-md-6 text-center mb-4">
                        <h4 class="h4-foot">Explora</h4>
                        <div class="linea-foot"></div>
                        <a class="a-foot" href="{{ route('nosotros') }}">Nosotros</a>
                        <a class="a-foot" href="{{ route('terminos') }}">Términos &amp; Condiciones</a>
                        <a class="a-foot" href="{{ route('preguntas') }}">Preguntas Frecuentes</a>
                        <a class="a-foot" href="{{ route('listado') }}">Blog</a>
                        <a class="a-foot" href="{{ route('contactenos') }}">Contáctenos</a>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center mb-4">
                        <h4 class="h4-foot">Contacto</h4>
                        <div class="linea-foot"></div>
                        <p><span class="icon-whatsapp mr-1"></span> <a href="tel:+51921136755" class="footer-contact-link">+51 921 136 755</a></p>
                        <p><span class="icon-whatsapp mr-1"></span> <a href="tel:+19895722905" class="footer-contact-link">+1 (989) 572-2905</a></p>
                        <p><span class="icon-envelope mr-1"></span> <a href="mailto:info@pachamamaspirit.com" class="footer-contact-link">info@pachamamaspirit.com</a></p>
                        <p><span class="icon-map-marker mr-1"></span> Cusco - Perú</p>
                    </div>
                    <div class="col-lg-2 col-md-6 text-center mb-4">
                        <h4 class="h4-foot">Síguenos</h4>
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
                        <h5>Copyright {{ date('Y') }} &copy; Todos los derechos reservados &mdash; Pacha Mama Spirit &mdash; Hecho por <a href="https://www.facebook.com/DjmWebMaster" class="djm2" target="_blank" rel="nofollow">DJM2</a></h5>
                    </div>
                </div>
            </div>
        </footer>
    </section>

    @include('layouts.schema_org')

    <script src="{{ asset('js/jquery-3.3.1.min.js') }}" defer></script>
    <script src="{{ asset('js/jquery.sticky.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}" defer></script>
    <script src="{{ asset('js/main.js') }}" defer></script>
    @stack('scripts')
</body>

</html>
