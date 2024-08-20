@extends('layouts.app')
@section('titulo', 'Pacha Mama Spirit | Agencia de viajes a Perú')
@section('metas')
<meta name="title" content="Sobre la agencia de viajes Pacha Mama Spirit, viajes a Perú, reserva tu viaje a Perú"/>
<meta name="keywords" content="Pacha Mama Spirit, viajes a Perú, reservar Peru, peru, Cusco peru, tours a Peru, tours a Machu Picchu, Machu Picchu, Reservar Machu Picchu, Viajes  Machu Picchu, Incas"/>
<meta rel="canonical" content="{{ request()->fullUrl() }}">

<meta name="og_image" content="{{ asset('img/pacha-mama-spirit-logo.png')  }}"/>
<meta name="og_secureImage" content="{{ asset('img/pacha-mama-spirit-logo.png')  }}"/>

<meta property="og:title" content="{Sobre la agencia de viajes Pacha Mama Spirit, viajes a Perú, reserva tu viaje a Perú"/>
<meta property="og:description" content="Pacha Mama Spirit, viajes a Perú, reservar Peru, peru, Cusco peru, tours a Peru, tours a Machu Picchu, Machu Picchu, Reservar Machu Picchu, Viajes  Machu Picchu, Incas"/>
<meta property="og:locale" content="es" />
<meta property="og:url" content="{{ request()->fullUrl() }}"/>
<meta name="twitter:card" content="summary"/>
<meta name="robots" content="index,follow" />
@endsection
@section('content')
    <div class="blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 style="padding-top: 250px;color:#fff" class="h1web">Sobre Pacha Mama Spirit</h1> <span></span>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="container mt-5 mb-2" id="pachamama">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <img src="{{ asset('img/pacha-mama-spirit-logo.png') }}" width="260px" alt="Pacha mama Spirit logo" class="mb-4">
                    <p>
                        <strong>Pacha Mama Spirit</strong> es una agencia creada el año 2018 por Herberth Alvarado Miranda y
                        David Miranda y que actualmente cuenta con un equipo de profesionales comprometidos con el servicio
                        de calidad, conocimiento y lo más importante el amor por este hermoso país, nuestro equipo cuenta
                        con una amplia experiencia en el rubro turístico desde hace más de 20 años, contamos con la
                        experiencia para poder brindar nuevas experiencias únicas a los nuevos y antiguos visitantes de
                        <strong>Perú</strong>. La idea principal de Pacha Mama Spirit es brindar al visitante experiencias
                        distintas a los clásicos tour que se ofrecen con normalidad, aprovechando la riqueza que Perú nos
                        brinda, riquezas en tours de caminatas, aventuras, culturales, sociales y gastronómicas entre
                        otras.<br><br>
                        Perú es un país que ofrece mucha diversidad turística gracias a su amplia historia y a sus 3
                        regiones naturales, que permite tener una gran cantidad de microclimas. Además de la amable acogida
                        que los peruanos dan a los viajeros durante toda su estadía.<br><br>
                        Pacha Mama Spirit empezó la construcción de su exclusivo lodge en el año 2020 y tiene como finalidad
                        aprovechar la riqueza visual que el Valle Sagrado de los Incas brinda naturalmente, con amplias
                        ventanas y una ubicación estratégica y el lujo que nos caracteriza, permite vivir una experiencia
                        única a los huéspedes que se hospedan. Nuestro exclusivo lodge esta ubicado en medio del cerro entre
                        el pueblo de Huayllabamba y Raqchi, esta a 1 hora de la estación de tren que lleva a la ciudadela de
                        Machu Picchu, También está ubicado en medio del <strong>Valle Sagrado de los Incas</strong>, y sus
                        principales lugares turísticos.
                    </p>
                </div>
                <div class="space"></div>
                <div class="col-lg-6">
                    <h4 class="text-center">Misión</h4>
                    <p>                    
                    Tenemos el compromiso de colaborar con el progreso de las comunidades mas necesitadas en Cusco, ya que
                    muchas familias no se benefician del turismo como debería ser hoy en día, nuestra ayuda va desde ayuda
                    comunitaria, convivencia y concientización, educación, entre otros.
                    </p>
                </div>
                <div class="col-lg-6">
                    <h4 class="text-center">Misión</h4>
                    <p>                    
                    Tenemos el compromiso de colaborar con el progreso de las comunidades mas necesitadas en Cusco, ya que
                    muchas familias no se benefician del turismo como debería ser hoy en día, nuestra ayuda va desde ayuda
                    comunitaria, convivencia y concientización, educación, entre otros.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-----Prueba full img------>
    <div class="full-img mt-5">
        <div class="full-img-card uno">
            <div class="oscuro">
                <h5>Caminatas</h5>
                <p>Excursiones con caminatas por Perú</p>
                <a href="{{ route('hikes') }}">Ver Tours</a>
            </div>
        </div>
        <div class="full-img-card dos">
            <div class="oscuro">
                <h5>Machu Picchu</h5>
                <p>Tours en Machu Pïcchu</p>
                <a href="{{ route('mapi') }}">Ver Tours</a>
            </div>
        </div>
        <div class="full-img-card tres">
            <div class="oscuro">
                <h5>Perú</h5>
                <p>Tours para conocer Perú</p>
                <a href="{{ route('around') }}">Ver Tours</a>
            </div>
        </div>
        <div class="full-img-card cuatro">
            <div class="oscuro">
                <h5>Mountain Lodge</h5>
                <p>Pacha Mama Spirit Lodge</p>
                <a href="{{ route('lodges') }}">Ver Tours</a>
            </div>
        </div>
    </div>
    <!------End Fin Full img---------->
    
@endsection
