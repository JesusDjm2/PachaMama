<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> @yield('titulo') </title>

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
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;600;700&family=Quicksand:wght@400;500;600;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;600;700&family=Quicksand:wght@400;500;600;700&display=swap" media="print" onload="this.media='all'">
    <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;600;700&family=Quicksand:wght@400;500;600;700&display=swap"></noscript>
    @stack('page_metas')
    @yield('metas')
</head>

<body>
    <div class="btn-whatsapp">
        <a href="https://api.whatsapp.com/send?phone=51921136755" target="_blank" rel="noopener" aria-label="Contact us on WhatsApp">
            <span class="btn-whatsapp__icon icon-whatsapp" aria-hidden="true"></span>
        </a>
    </div>
    <div class="site-mobile-menu site-navbar-target" aria-hidden="true">
        <div class="site-mobile-menu-header">
            <span class="site-mobile-menu-title">Menu</span>
            <button type="button" class="site-mobile-menu-close-btn js-menu-toggle" aria-label="Close menu">
                <span class="icon-close2" aria-hidden="true"></span>
            </button>
        </div>
        <div class="site-mobile-menu-search" role="search" aria-label="Search Peru tours">
            <form class="mobile-menu-search-form" action="{{ route('searchen') }}" method="GET">
                <label class="mobile-menu-search-label" for="mobile-menu-search-input-en">Find a destination</label>
                <div class="mobile-menu-search-field">
                    <span class="mobile-menu-search-field__icon icon-search" aria-hidden="true"></span>
                    <input type="search" id="mobile-menu-search-input-en" name="name"
                        class="form-control mobile-menu-search-input js-mobile-menu-search-input"
                        placeholder="Where do you want to go?" autocomplete="off" enterkeyhint="search">
                </div>
                <button type="submit" class="mobile-menu-search-submit">
                    <span class="icon-search mobile-menu-search-submit__icon" aria-hidden="true"></span>
                    Search tours
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
                            <a href="{{route('contact')}}" class="d-flex align-items-center">
                                <span class="icon-user mr-2 text-white"></span>
                                <span class="d-none d-md-inline-block text-white">Contact Us</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-6 text-right">
                        <div class="mr-auto">
                            {{-- <a href="https://twitter.com/PachaSpirit" target="_blank" rel="no-follow"
                                class="p-2 pl-0"><span class="icon-twitter"></span></a> --}}
                            <a href="https://www.facebook.com/PachaMamaSpiritMountain" rel="no-follow" target="_blank"
                                class="p-2 pl-0"><span class="icon-facebook"></span></a>
                            {{-- <a href="https://www.pinterest.com/spiritpachamama/_saved/" rel="no-follow" target="_blank"
                                class="p-2 pl-0"><span class="icon-pinterest"></span></a> --}}
                            <a href="https://www.instagram.com/pachamamaspiritmountain/" rel="no-follow" target="_blank"
                                class="p-2 pl-0"><span class="icon-instagram"></span></a>
                            <a href="#" target="_blank" rel="no-follow" class="p-2 pl-0"><span
                                    class="icon-tripadvisor"></span></a>
                            <a href="https://www.youtube.com/channel/UCR5v94oQX3budGLKTRL4BBQ" rel="no-follow"
                                target="_blank" class="p-2 pl-0"><span class="icon-youtube-play"></span></a>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="site-navbar site-navbar-target js-sticky-header">
            <div class="container">
                <div class="row align-items-center row-menu">
                    <div class="col-2">
                        <a href="{{ route('index') }}">
                            <img src="{{ asset('img/pacha-mama-spirit-logo.png') }}" alt="Pacha mama Spirit logo"
                                class="logo" title="Logo Pacha Mama Spirit">
                        </a>
                    </div>
                    <div class="col-10">
                        <nav class="site-navigation" role="navigation">
                            <div class="container">
                                <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3 site-nav-mobile-toggle">
                                    <a href="#" class="site-menu-toggle js-menu-toggle text-white" aria-label="Open menu">
                                        <span class="icon-menu h3" aria-hidden="true"></span>
                                    </a>
                                </div>
                                <ul class="site-menu main-menu js-clone-nav d-none d-lg-block">
                                    <li class="has-children">
                                        <a href="{{ route('destinies-peru') }}" class="nav-link"
                                            @if (request()->is('destinies')) id="active" @endif>Destinies</a>
                                        <ul class="dropdown arrow-top">
                                            <li>
                                                <a href="{{ route('destinies-peru.destination', ['slug' => 'cusco-navel-of-the-world']) }}"
                                                    class="nav-link">Cusco</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('destinies-peru.destination', ['slug' => 'lima-city-of-kings']) }}" class="nav-link">Lima</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('destinies-peru.destination', ['slug' => 'arequipa-the-white-city']) }}"
                                                    class="nav-link">Arequipa</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('destinies-peru.destination', ['slug' => 'puno-city']) }}" class="nav-link">Puno</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('destinies-peru.destination', ['slug' => 'ica-city']) }}" class="nav-link">Ica</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('destinies-peru.destination', ['slug' => 'pisco-city']) }}" class="nav-link">Pisco</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('destinies-peru.destination', ['slug' => 'puerto-maldonado']) }}" class="nav-link">Puerto
                                                    Maldonado</a>
                                            </li>
                                        </ul>
                                    </li> 
                                    <li>
                                        <a href="{{ route('hikes') }}" class="nav-link">Do you like hikes?</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('mapien') }}" class="nav-link">Tours to Machu Picchu</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('around') }}" class="nav-link">Around Perú</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('lodgen') }}" class="nav-link">Luxury Lodge</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('enlistado') }}" class="nav-link">Blogs</a>
                                    </li>
                                    <li>
                                        <a href="{{ \App\Support\LocaleRouteMap::menuLanguageSwitchUrl(false) }}"
                                            class="castellano-es" hreflang="es" lang="es">Español</a>
                                    </li>
                                    <li class="nav-item-search">
                                        <i class="icon-search botonsearch" data-bs-toggle="modal"
                                            data-bs-target="#exampleModal" role="button" tabindex="0" aria-label="Search tours"></i>
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
    {{-- </main> --}}
    {{-- </div> --}}
    <!-- JavaScript Bundle with Popper -->
    <!-- Modal de banner-->
    <div class="modal fade modal-pacha" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content border-0 shadow">
                <div class="modal-body p-4 position-relative">
                    <button type="button" class="close modal-pacha-close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <form action="{{ route('searchen') }}" method="GET">
                        @csrf
                        <h3 class="h3-book-pop-up">Find your destination in Peru</h3>
                        <div class="mb-3">
                            <label for="name" class="visually-hidden">Search</label>
                            <input type="text" id="name" name="name" class="form-control form-control-pacha-search"
                                placeholder="Where do you want to go?" required>
                        </div>
                        <div class="text-center">
                            <input type="submit" class="boton-index" value="Search">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Fin Modal de banner-->

    <section>
        <div class="display-foot">
            <img src="{{ asset('img/paisaje-cerros-silueta.png') }}" alt="Paisaje Pacha Mama cerros silueta"
                 width="100%" loading="lazy">
        </div>
        <div class="display-foot-2">
            <img src="{{ asset('img/paisaje-cerros-silueta-responsive.png') }}"
                title="Paisaje cerros sombra viajes min" alt="Paisaje Pacha Mama cerros silueta" width="100%" loading="lazy">
        </div>

        <footer>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-3 col-md-6 text-center mb-4">
                        <img src="{{ asset('img/Pacha-Mama-Spirit-Blanco.png') }}" alt="Pacha Mama Spirit — Travel Agency Peru" width="160" height="80" class="mb-3 img-fluid footer-logo-img mt-5" loading="lazy">
                        <p class="footer-tagline text-white-50">Peruvian travel agency specializing in adventure tours, cultural experiences and unique journeys across Peru.</p>
                    </div>
                    <div class="col-lg-2 col-md-6 text-center mb-4">
                        <h4 class="h4-foot">Explore</h4>
                        <div class="linea-foot"></div>
                        <a class="a-foot" href="{{ route('about') }}">About Us</a>
                        <a class="a-foot" href="{{ route('terms-en') }}">Terms &amp; Conditions</a>
                        <a class="a-foot" href="{{ route('faq') }}">FAQs</a>
                        <a class="a-foot" href="{{ route('enlistado') }}">Blog</a>
                        <a class="a-foot" href="{{ route('contact') }}">Contact Us</a>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center mb-4">
                        <h4 class="h4-foot">Contact</h4>
                        <div class="linea-foot"></div>
                        <p><span class="icon-whatsapp mr-1"></span> <a href="tel:+51921136755" class="footer-contact-link">+51 921 136 755</a></p>
                        <p><span class="icon-whatsapp mr-1"></span> <a href="tel:+19895722905" class="footer-contact-link">+1 (989) 572-2905</a></p>
                        <p><span class="icon-envelope mr-1"></span> <a href="mailto:info@pachamamaspirit.com" class="footer-contact-link">info@pachamamaspirit.com</a></p>
                        <p><span class="icon-map-marker mr-1"></span> Cusco - Perú</p>
                    </div>
                    <div class="col-lg-2 col-md-6 text-center mb-4">
                        <h4 class="h4-foot">Follow Us</h4>
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
                        <h5>Copyright {{ date('Y') }} &copy; All rights reserved &mdash; Pacha Mama Spirit &mdash; Made by <a href="https://www.facebook.com/DjmWebMaster" class="djm2" target="_blank" rel="nofollow">DJM2</a></h5>
                    </div>
                </div>
            </div>
        </footer>
    </section>

    <script src="{{ asset('js/jquery-3.3.1.min.js') }}" defer></script>
    <script src="{{ asset('js/jquery.sticky.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}" defer></script>
    <script src="{{ asset('js/main.js') }}" defer></script>
    @stack('scripts')

</body>

</html>
