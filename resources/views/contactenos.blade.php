@extends('layouts.app')
@section('titulo', 'Contacte al equipo de Pacha Mama Spirit | Agencia de viajes Perú')
@section('metas')
    <meta name="keywords"
        content="Book Peru, Book Machu Picchu, machu Picchu, Travel Peru, Travel to Machu Picchu, Inca Trail, Ica trail to Machu Picchu">
    <link rel="canonical" href="https://pachamamaspirit.com">
    <meta name="description"
        content="Pacha Mama Spirit It's a travel agency to visit and do tourism in Peru. Travel around Peru and get to know its culture, gastronomy and History">
    <meta name="image_src" content="https://pachamamaspirit.com/img/panoramico/Recorrido-Cusco-Machu-Picchu.webp">

    <meta name="og_image" content="https://pachamamaspirit.com/img/panoramico/Recorrido-Cusco-Machu-Picchu.webp">
    <meta name="og_secureImage" content="https://pachamamaspirit.com/img/panoramico/Recorrido-Cusco-Machu-Picchu.webp">

    <meta property="og:title" content="Contacte al equipo de Pacha Mama Spirit | Agencia de viajes Perú">
    <meta property="og:description"
        content="Pacha Mama Spirit It's a travel agency to visit and do tourism in Peru. Travel around Peru and get to know its culture, gastronomy and History">
    <meta property="og:url" content="https://pachamamaspirit.com/contact-pacha-mama">
    <meta name="twitter:card" content="summary">
    <meta name="robots" content="index,follow">
@endsection
@section('content')
    <div class="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 style="padding-top: 250px;color:#fff" class="h1web">Contácte con Pacha Mama Spirit por ayuda</h1>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="container mt-3">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="h1-responsive font-weight-bold text-center my-4">Contácte al equipo de Pacha Mama</h2>
                    <p class="text-center w-responsive mx-auto mb-5">
                        Estamos aquí para ayudarte. ¿Tiene usted alguna pregunta? Por favor, no dude en contactarnos
                        directamente. Nuestro equipo se comunicará contigo en cuestión de horas para ayudarte.
                    </p>
                </div>
                <div class="col-md-4">
                    <p class="text-center">
                        <i class="icon-whatsapp" style="font-size: 30px"></i><br>
                        +51 987 654 321 <br>
                        +001 987 654 4321
                    </p>
                    <p class="text-center">
                        <i class="icon-envelope" style="font-size: 30px"></i><br>
                        info@pachamamaspirit.com <br>
                        reserves@pachamamaspirit.com
                    </p>
                    <p class="text-center">
                        <i class="icon-map-marker" style="font-size: 30px"></i><br>
                        Ayuda Mutua k2-6 Cusco, Perú<br>
                        Psje Roadway k-3 MI - EEUU
                    </p>
                </div>
                <div class="col-md-8">
                    <form id="contact-form" name="contact-form" action="{{ route('mensajeIndex') }}" method="POST">
                        @csrf
                        <div class="row formTransparent">
                            <div class="col-md-6">
                                <div class="md-form mb-4">
                                    <input type="text" id="name" name="name" class="form-control"
                                        placeholder="Nombre:" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="md-form mb-4">
                                    <input type="text" id="email" name="email" class="form-control"
                                        placeholder="Email:" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="md-form mb-4">
                                    <input type="text" id="phone" name="phone" class="form-control"
                                        placeholder="Teléfono:" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="md-form mb-4">
                                    <input type="text" id="country" name="country" class="form-control"
                                        placeholder="Nacionalidad:">
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
                                        <option selected>Opciones de viaje:</option>
                                        <option value="familia">Viaje en familia</option>
                                        <option value="pareja">Viaje en pareja</option>
                                        <option value="amigos">Con amigos</option>
                                        <option value="grupo">Viaje en grupo</option>
                                        <option value="privado">Viaje privado</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12 mt-2">
                                <div class="md-form">
                                    <textarea type="text" placeholder="Escriba acá su mensaje..." id="message" name="message" rows="2"
                                        class="form-control md-textarea" required></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 mt-2">
                                <div class="text-center">
                                    <button class="btnTransparent" type="submit">Enviar</button>
                                </div>
                            </div>
                    </form>
                </div>

            </div>
        </div>
    </section>
@endsection
