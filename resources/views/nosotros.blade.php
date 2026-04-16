@extends('layouts.app')
@section('titulo', 'Sobre Pacha Mama Spirit — Agencia de Viajes en Cusco, Perú')
@section('metas')
<meta name="description" content="Conoce a Pacha Mama Spirit, agencia de viajes fundada en Cusco en 2018. Más de 20 años de experiencia en tours a Machu Picchu, Camino Inca y destinos únicos de Perú.">
<meta name="keywords" content="Pacha Mama Spirit, agencia de viajes Cusco, agencia de viajes Peru, tours Peru, tours Machu Picchu, Cusco Peru, Incas, turismo Peru">
<link rel="canonical" href="{{ request()->url() }}">
<meta property="og:type" content="website">
<meta property="og:locale" content="es_PE">
<meta property="og:title" content="Sobre Pacha Mama Spirit — Agencia de Viajes en Cusco, Perú">
<meta property="og:description" content="Conoce a Pacha Mama Spirit, agencia de viajes fundada en Cusco en 2018. Más de 20 años de experiencia en tours a Machu Picchu, Camino Inca y destinos únicos de Perú.">
<meta property="og:url" content="{{ request()->url() }}">
<meta property="og:image" content="https://pachamamaspirit.com/img/panoramico/Recorrido-Cusco-Machu-Picchu.webp">
<meta property="og:image:secure_url" content="https://pachamamaspirit.com/img/panoramico/Recorrido-Cusco-Machu-Picchu.webp">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Sobre Pacha Mama Spirit — Agencia de Viajes en Cusco, Perú">
<meta name="twitter:description" content="Conoce a Pacha Mama Spirit, agencia de viajes fundada en Cusco en 2018. Más de 20 años de experiencia en tours a Machu Picchu y Camino Inca.">
<meta name="twitter:image" content="https://pachamamaspirit.com/img/panoramico/Recorrido-Cusco-Machu-Picchu.webp">
<meta name="robots" content="index,follow">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "AboutPage",
  "@id": "{{ request()->url() }}",
  "url": "{{ request()->url() }}",
  "name": "Sobre Pacha Mama Spirit — Agencia de Viajes en Cusco, Perú",
  "description": "Conoce a Pacha Mama Spirit, agencia de viajes fundada en Cusco en 2018 con más de 20 años de experiencia.",
  "inLanguage": "es-PE",
  "isPartOf": { "@id": "https://pachamamaspirit.com/#website" },
  "about": { "@id": "https://pachamamaspirit.com/#organization" },
  "breadcrumb": {
    "@type": "BreadcrumbList",
    "itemListElement": [
      { "@type": "ListItem", "position": 1, "name": "Inicio", "item": "https://pachamamaspirit.com/inicio" },
      { "@type": "ListItem", "position": 2, "name": "Nosotros", "item": "{{ request()->url() }}" }
    ]
  }
}
</script>
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
    <section style="background:#f7f8fa; padding: 4rem 0;">
        <div class="container" id="pachamama">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center mb-4">
                    <img src="{{ asset('img/pacha-mama-spirit-logo.png') }}" width="200px" alt="Pacha mama Spirit logo" class="mb-4">
                    <h2 class="text-center mb-3">Quiénes somos</h2>
                    <div class="linea mb-4"></div>
                    <p>
                        <strong>Pacha Mama Spirit</strong> es una agencia creada el año 2018 por Herberth Alvarado Miranda y
                        David Miranda. Contamos con un equipo de profesionales comprometidos con el servicio de calidad,
                        conocimiento y lo más importante: el amor por este hermoso país. Nuestro equipo tiene más de 20 años
                        de experiencia en el rubro turístico, brindando experiencias únicas a los visitantes de <strong>Perú</strong>.
                        <br><br>
                        Perú es un país que ofrece mucha diversidad turística gracias a su amplia historia y sus 3 regiones
                        naturales, con una gran cantidad de microclimas y una amable acogida para los viajeros.
                        <br><br>
                        Nuestro exclusivo lodge está ubicado en el Valle Sagrado de los Incas, entre los pueblos de Huayllabamba
                        y Raqchi, a 1 hora de la estación de tren hacia <strong>Machu Picchu</strong>.
                    </p>
                </div>
            </div>
            <div class="row justify-content-center mt-2">
                <div class="col-lg-5 mb-4">
                    <div style="background:#fff; border-radius:14px; padding:2rem; box-shadow:0 4px 20px rgba(0,0,0,0.07); height:100%;">
                        <div class="text-center mb-3">
                            <span style="font-size:2.5rem; color:#2aa8a8;">&#9670;</span>
                            <h4 style="font-weight:700; color:#1a2e45; margin-top:0.5rem;">Misión</h4>
                            <div class="linea mb-3"></div>
                        </div>
                        <p style="text-align:center;">
                            Colaborar con el progreso de las comunidades más necesitadas en Cusco, ofreciendo ayuda comunitaria,
                            convivencia, concientización y educación, asegurándonos de que el turismo beneficie a todos.
                        </p>
                    </div>
                </div>
                <div class="col-lg-5 mb-4">
                    <div style="background:#fff; border-radius:14px; padding:2rem; box-shadow:0 4px 20px rgba(0,0,0,0.07); height:100%;">
                        <div class="text-center mb-3">
                            <span style="font-size:2.5rem; color:#d4a843;">&#9670;</span>
                            <h4 style="font-weight:700; color:#1a2e45; margin-top:0.5rem;">Visión</h4>
                            <div class="linea mb-3"></div>
                        </div>
                        <p style="text-align:center;">
                            Ser la agencia de viajes de referencia en el sur de Perú, reconocida por experiencias auténticas,
                            sostenibles y de alto valor, donde cada viajero se convierte en parte de la familia Pacha Mama.
                        </p>
                    </div>
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
