<!DOCTYPE html>
<html lang="Es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title> @yield('titulo') Pacha Mama Perú</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{ asset('img/icono-home.png') }}">
    <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}" defer type="text/css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilos-bootstrap.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400..700&family=Josefin+Sans:ital,wght@0,100..700;1,100..700&family=Lemonada:wght@300..700&family=Merienda:wght@300..900&family=Playwrite+HU:wght@100..400&display=swap" rel="stylesheet">    <div class="btn-whatsapp">
        <a href="https://api.whatsapp.com/send?phone=51921136755" target="_blank">
            <img src="{{ asset('img/whatsapp.png') }}" alt="WhatsaApp de Pacha Mama Spirit" width="80%">
        </a>
    </div>
    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
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
                            <a href="{{ route('contactenos') }}" class="d-flex align-items-center">
                                <span class="icon-user mr-2 text-white"></span>
                                <span class="d-none d-md-inline-block text-white">Contáctenos</span>
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
                        <a href="{{ route('inicio') }}">
                            <img src="{{ asset('img/pacha-mama-spirit-logo.png') }}" alt="Logo Pacha Mama Spirit"
                                class="logo">
                        </a>
                    </div>
                    <div class="col-10">
                        <nav class="site-navigation" role="navigation">
                            <div class="container">
                                <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3" style="float: right"><a
                                        href="#" class="site-menu-toggle js-menu-toggle text-white"><span
                                            class="icon-menu h3"></span></a>
                                </div>
                                <ul class="site-menu main-menu js-clone-nav d-none d-lg-block">
                                    <li class="has-children">
                                        <a href="{{ route('destinos-peru') }}" class="nav-link">Destinos
                                            @if (request()->is('destinos-peru'))
                                                id="active"
                                            @endif
                                        </a>
                                        <ul class="dropdown arrow-top">
                                            <li>
                                                <a href="{{ route('cusco-ombligo-del-mundo') }}"
                                                    class="nav-link">Cusco</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('lima-ciudad-de-reyes') }}"
                                                    class="nav-link">Lima</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('arequipa-la-ciudad-blanca') }}"
                                                    class="nav-link">Arequipa</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('la-ciudad-de-puno') }}" class="nav-link">Puno</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('ciudad-de-ica') }}" class="nav-link">Ica</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('ciudad-de-pisco') }}" class="nav-link">Pisco</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('puerto-maldonado') }}" class="nav-link">Puerto
                                                    Maldonado</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{ route('caminata') }}" class="nav-link">¿Te gustan las
                                            caminatas?</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('mapi') }}" class="nav-link">Tours a Machu Picchu</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('peru') }}" class="nav-link">Conoce Perú</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('lodges') }}" class="nav-link">Lodge Exclusivo</a>
                                    </li>
                                    <li>
                                        <a href="{{ route('listado') }}" class="nav-link">Blog</a>
                                    </li>
                                    <li>
                                        <button type="button" onclick="window.location='{{ URL::route('index') }}'"
                                            class="castellano-es">English</button>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col">
                                                <i class="icon-search botonsearch" data-toggle="modal"
                                                    data-target="#exampleModal"></i>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @yield('content')
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content" style="padding: 1em">
                <form style="padding: 0px 25px" action="{{ route('search') }}" method="GET">
                    @csrf
                    <h3 class="h3-book-pop-up">Encuentra tu destino en Perú</h3>
                    <div class="form-row">
                        <div class="form-group col-12 text-center">
                            <input type="text" id="name" name="name" class="form-control"
                                placeholder="Buscar..." required>
                            <input type="submit" class="boton-index mt-2" value="Buscar">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Fin Modal de banner-->
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
                <div class="row">
                    <div class="col-lg-4 text-center">
                        <h4 class="h4-foot">Consultas</h4>
                        <div class="linea-foot"></div>
                        <a class="a-foot" href="{{ route('nosotros') }}"> Nosotros</a>
                        <a class="a-foot" href="{{ route('terminos') }}"> Terminos & Condiciones</a>
                        <a class="a-foot" href="{{ route('preguntas') }}"> Preguntas Frecuentes</a>
                        {{-- <a class="a-foot" href=""> Comentarios</a> --}}
                    </div>
                    <div class="col-lg-4 text-center">
                        <h4 class="h4-foot">Contacto</h4>
                        <div class="linea-foot"></div>
                        <p>Es <span class="icon-whatsapp"></span> +51 921 136 755</p>
                        <p>En <span class="icon-whatsapp"></span> +1 (989) 572-2905</p>
                        <p><span class="icon-envelope"></span> info@pachamamaspirit.com</p>
                        <p><span class="icon-map-marker"></span> Cusco - Perú</p>
                    </div>
                    <div class="col-lg-4">
                        <h4 class="h4-foot">Sociales</h4>
                        <div class="linea-foot"></div>
                        <div class="text-center social-foot">
                            {{-- <a href="https://twitter.com/PachaSpirit" target="_blank" rel="no-follow"
                                class="p-2 pl-0"><span class="icon-twitter"></span></a> --}}
                            <a href="https://www.facebook.com/PachaMamaSpiritMountain" rel="no-follow"
                                target="_blank" class="p-2 pl-0"><span class="icon-facebook"></span></a>
                            {{-- <a href="https://www.pinterest.com/spiritpachamama/_saved/" rel="no-follow"
                                target="_blank" class="p-2 pl-0"><span class="icon-pinterest"></span></a> --}}
                            <a href="https://www.instagram.com/pachamamaspiritmountain/" rel="no-follow"
                                target="_blank" class="p-2 pl-0"><span class="icon-instagram"></span></a>
                            <a href="#" target="_blank" rel="no-follow" class="p-2 pl-0"><span
                                    class="icon-tripadvisor"></span></a>
                            <a href="https://www.youtube.com/channel/UCR5v94oQX3budGLKTRL4BBQ" rel="no-follow"
                                target="_blank" class="p-2 pl-0"><span class="icon-youtube-play"></span></a>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="copy">
                        <h5> Copiryght 2022 © todos los derechos reservados | Pacha Mama Spirit | Hecho por <a
                                href="https://www.facebook.com/DjmWebMaster" class="djm2" target="_blank"
                                rel="no-follow">
                                DJM2</a>
                        </h5>
                    </div>
                </div>
            </div>
        </footer>
    </section>
    {{-- <script src="https://cdn.jsdelivr.net/npm/lazyload@2.0.0-rc.2/lazyload.js"></script> --}}
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
