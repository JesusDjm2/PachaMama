@extends('layouts.app')
@section('titulo', 'Sobre Pacha Mama Spirit — La agencia que conecta al viajero con el alma de los Andes')
@section('metas')
<meta name="description" content="Agencia familiar en Cusco desde 2018. Tours auténticos a Machu Picchu, Camino Inca y Valle Sagrado con guías quechuas y ceremonias andinas reales.">
<meta name="keywords" content="Pacha Mama Spirit, agencia de viajes Cusco, turismo responsable Peru, viajes espirituales Peru, tours auténticos Machu Picchu, guías quechuas, pago a la tierra, Camino Inca, Valle Sagrado">
<link rel="canonical" href="{{ request()->url() }}">
<meta property="og:type" content="website">
<meta property="og:locale" content="es_PE">
<meta property="og:title" content="Sobre Pacha Mama Spirit — La agencia que conecta al viajero con el alma de los Andes">
<meta property="og:description" content="Agencia familiar en Cusco desde 2018. Tours auténticos a Machu Picchu con guías quechuas, ceremonias andinas y turismo responsable.">
<meta property="og:url" content="{{ request()->url() }}">
<meta property="og:image" content="https://pachamamaspirit.com/img/panoramico/Recorrido-Cusco-Machu-Picchu.webp">
<meta property="og:image:secure_url" content="https://pachamamaspirit.com/img/panoramico/Recorrido-Cusco-Machu-Picchu.webp">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Sobre Pacha Mama Spirit — La agencia que conecta al viajero con el alma de los Andes">
<meta name="twitter:description" content="Agencia familiar en Cusco desde 2018. Tours auténticos con guías quechuas y ceremonias andinas.">
<meta name="twitter:image" content="https://pachamamaspirit.com/img/panoramico/Recorrido-Cusco-Machu-Picchu.webp">
<meta name="robots" content="index,follow,max-image-preview:large">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "AboutPage",
  "@id": "{{ request()->url() }}",
  "url": "{{ request()->url() }}",
  "name": "Sobre Pacha Mama Spirit — La agencia que conecta al viajero con el alma de los Andes",
  "description": "Agencia familiar en Cusco desde 2018 con más de 20 años de experiencia en tours auténticos por Perú, guías quechuas y turismo responsable.",
  "inLanguage": "es-PE",
  "isPartOf": { "@id": "https://pachamamaspirit.com/#website" },
  "about": { "@id": "https://pachamamaspirit.com/#organization" },
  "breadcrumb": {
    "@type": "BreadcrumbList",
    "itemListElement": [
      { "@type": "ListItem", "position": 1, "name": "Inicio", "item": "https://pachamamaspirit.com/inicio" },
      { "@type": "ListItem", "position": 2, "name": "Nosotros", "item": "{{ request()->url() }}" }
    ]
  },
  "mainEntity": {
    "@type": "TravelAgency",
    "@id": "https://pachamamaspirit.com/#organization",
    "name": "Pacha Mama Spirit",
    "slogan": "La agencia que conecta al viajero con el alma de los Andes",
    "description": "Agencia de viajes familiar especializada en turismo auténtico, espiritual y sostenible en Perú. Tours a Machu Picchu, Camino Inca, Salkantay, Valle Sagrado y Rainbow Mountain con guías locales quechuahablantes.",
    "url": "https://pachamamaspirit.com",
    "logo": "https://pachamamaspirit.com/img/pacha-mama-spirit-logo.png",
    "foundingDate": "2018",
    "founders": [
      { "@type": "Person", "name": "Herberth Alvarado Miranda" },
      { "@type": "Person", "name": "David Miranda" }
    ],
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "Cusco",
      "addressRegion": "Cusco",
      "addressCountry": "PE"
    },
    "areaServed": { "@type": "Country", "name": "Perú" },
    "knowsLanguage": ["Spanish", "English", "Quechua"],
    "knowsAbout": ["Machu Picchu", "Inca Trail", "Salkantay Trek", "Sacred Valley", "Rainbow Mountain", "Andean Spirituality", "Sustainable Tourism"]
  }
}
</script>
@endsection
@section('content')
    <div class="blog">
        <div class="container h-100 d-flex align-items-center">
            <div class="row w-100">
                <div class="col-lg-12 text-center">
                    <h1 class="h1-destinos">Conectamos al viajero con el alma de los Andes</h1>
                    <p>Una agencia familiar de Cusco, hecha por peruanos para viajeros que buscan más que un paquete turístico.</p>
                </div>
            </div>
        </div>
    </div>
    <section style="background:#f7f8fa; padding: 4rem 0;">
        <div class="container" id="pachamama">
            <div class="row justify-content-center">
                <div class="col-lg-9 text-center mb-4">
                    <img src="{{ asset('img/pacha-mama-spirit-logo.png') }}" width="200px" alt="Logo de Pacha Mama Spirit, agencia de viajes de Cusco" class="mb-4">
                    <h2 class="text-center mb-3">Quiénes somos</h2>
                    <div class="linea mb-4"></div>
                    <p style="font-size:1.1rem; line-height:1.8;">
                        <strong>Pacha Mama Spirit</strong> es una agencia de viajes familiar fundada en Cusco el año 2018 por los
                        hermanos <strong>Herberth Alvarado Miranda</strong> y <strong>David Miranda</strong>. Llevamos más de
                        <strong>20 años de experiencia</strong> guiando a viajeros por el Perú, pero lo que nos define no son los años:
                        es la forma en que entendemos el viaje.
                    </p>
                    <p style="font-size:1.1rem; line-height:1.8;">
                        Creemos que un tour no es un viaje. Que <strong>Machu Picchu</strong> no es solo una postal.
                        Que los Andes son un ser vivo con el que se dialoga, se aprende y se agradece.
                        Por eso nuestro nombre es <em>Pacha Mama</em> — Madre Tierra en quechua — y por eso
                        cada itinerario que diseñamos está pensado para que vuelvas a casa con algo más que fotos.
                    </p>
                    <p style="font-size:1.1rem; line-height:1.8;">
                        Nuestro equipo está formado por <strong>guías locales quechuahablantes</strong>, porteadores
                        provenientes de comunidades del Valle Sagrado, cocineros que preparan platos ancestrales
                        y maestros andinos (<em>paqos</em>) que comparten ceremonias auténticas cuando el viajero lo pide.
                        Nuestro <strong>lodge exclusivo</strong> está ubicado en el Valle Sagrado de los Incas, entre
                        los pueblos de Huayllabamba y Raqchi, a una hora de la estación de tren hacia Machu Picchu.
                    </p>
                </div>
            </div>

            <!-- Posicionamiento destacado -->
            <div class="row justify-content-center mt-3 mb-5">
                <div class="col-lg-9">
                    <div style="background:linear-gradient(135deg, #228b8b 0%, #977828 100%); color:#fff; border-radius:18px; padding:3rem 2rem; text-align:center; box-shadow:0 10px 40px rgba(34,139,139,0.25);">
                        <p style="font-size:0.85rem; letter-spacing:3px; opacity:0.85; margin-bottom:1rem;">NUESTRA PROMESA</p>
                        <p style="font-size:1.6rem; font-style:italic; line-height:1.5; margin:0; text-shadow:0 1px 4px rgba(0,0,0,.2);">
                            "No vendemos paquetes turísticos. Ofrecemos <strong style="color:#fff;">experiencias de vida</strong> —
                            un diálogo con la Pachamama, los Apus y la tradición viva de los Andes."
                        </p>
                    </div>
                </div>
            </div>

            <!-- Valores de marca -->
            <div class="row justify-content-center mt-2">
                <div class="col-lg-12 text-center mb-4">
                    <h2 class="text-center mb-3">Nuestros valores</h2>
                    <div class="linea mb-4"></div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div style="background:#fff; border-radius:14px; padding:2rem; box-shadow:0 4px 20px rgba(0,0,0,0.07); height:100%;">
                        <div class="text-center mb-3">
                            <span style="font-size:2.5rem;">🌄</span>
                            <h4 style="font-weight:700; color:#1a2e45; margin-top:0.5rem;">Autenticidad andina</h4>
                            <div class="linea mb-3"></div>
                        </div>
                        <p style="text-align:center;">
                            Guías quechuahablantes, porteadores de comunidad, ceremonias reales con maestros de linaje
                            verificable. Sin performance turístico.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div style="background:#fff; border-radius:14px; padding:2rem; box-shadow:0 4px 20px rgba(0,0,0,0.07); height:100%;">
                        <div class="text-center mb-3">
                            <span style="font-size:2.5rem;">🌱</span>
                            <h4 style="font-weight:700; color:#1a2e45; margin-top:0.5rem;">Turismo responsable</h4>
                            <div class="linea mb-3"></div>
                        </div>
                        <p style="text-align:center;">
                            Precios justos para porteadores, compras locales, residuos mínimos y apoyo directo a
                            proyectos de comunidades del Valle Sagrado.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div style="background:#fff; border-radius:14px; padding:2rem; box-shadow:0 4px 20px rgba(0,0,0,0.07); height:100%;">
                        <div class="text-center mb-3">
                            <span style="font-size:2.5rem;">✨</span>
                            <h4 style="font-weight:700; color:#1a2e45; margin-top:0.5rem;">Experiencias transformacionales</h4>
                            <div class="linea mb-3"></div>
                        </div>
                        <p style="text-align:center;">
                            No armamos itinerarios apretados. Incluimos silencio, contemplación y tiempo para que
                            el paisaje te cambie algo por dentro.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div style="background:#fff; border-radius:14px; padding:2rem; box-shadow:0 4px 20px rgba(0,0,0,0.07); height:100%;">
                        <div class="text-center mb-3">
                            <span style="font-size:2.5rem;">🤝</span>
                            <h4 style="font-weight:700; color:#1a2e45; margin-top:0.5rem;">Trato familiar</h4>
                            <div class="linea mb-3"></div>
                        </div>
                        <p style="text-align:center;">
                            Respuesta por WhatsApp en menos de 1 hora. Diseño del viaje contigo, no para ti.
                            Grupos pequeños — nunca más de 12 viajeros.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div style="background:#fff; border-radius:14px; padding:2rem; box-shadow:0 4px 20px rgba(0,0,0,0.07); height:100%;">
                        <div class="text-center mb-3">
                            <span style="font-size:2.5rem;">🏔️</span>
                            <h4 style="font-weight:700; color:#1a2e45; margin-top:0.5rem;">Expertos locales</h4>
                            <div class="linea mb-3"></div>
                        </div>
                        <p style="text-align:center;">
                            20+ años caminando estas rutas. Conocemos cada piedra del Camino Inca, cada mirador
                            secreto del Valle Sagrado, cada historia detrás de las ruinas.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div style="background:#fff; border-radius:14px; padding:2rem; box-shadow:0 4px 20px rgba(0,0,0,0.07); height:100%;">
                        <div class="text-center mb-3">
                            <span style="font-size:2.5rem;">🔎</span>
                            <h4 style="font-weight:700; color:#1a2e45; margin-top:0.5rem;">Transparencia total</h4>
                            <div class="linea mb-3"></div>
                        </div>
                        <p style="text-align:center;">
                            Precios desglosados, cancelación flexible hasta 48h antes y cero comisiones ocultas.
                            Te decimos qué incluye y qué no — sin sorpresas.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Misión y Visión -->
            <div class="row justify-content-center mt-4">
                <div class="col-lg-5 mb-4">
                    <div style="background:#fff; border-radius:14px; padding:2rem; box-shadow:0 4px 20px rgba(0,0,0,0.07); height:100%;">
                        <div class="text-center mb-3">
                            <span style="font-size:2.5rem; color:#2aa8a8;">&#9670;</span>
                            <h4 style="font-weight:700; color:#1a2e45; margin-top:0.5rem;">Misión</h4>
                            <div class="linea mb-3"></div>
                        </div>
                        <p style="text-align:center;">
                            Colaborar con el progreso de las comunidades del Valle Sagrado y el sur del Perú,
                            ofreciendo viajes que integren ayuda comunitaria, convivencia, concientización ambiental
                            y educación — asegurándonos de que el turismo beneficie a quienes heredan estos territorios.
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
                            Ser la agencia de referencia en el sur de Perú para viajeros que buscan experiencias
                            auténticas, sostenibles y transformacionales — donde cada persona que llega deja de
                            ser cliente y pasa a ser parte de la familia <strong>Pacha Mama</strong>.
                        </p>
                    </div>
                </div>
            </div>

            <!-- CTA final -->
            <div class="row justify-content-center mt-4">
                <div class="col-lg-8 text-center">
                    <p style="font-size:1.15rem; line-height:1.7; color:#2aa8a8;">
                        <em>Allin kausay kachun</em> — que haya buena vida.
                    </p>
                    <p style="font-size:1.05rem;">
                        Si los Andes te están llamando, conversemos.
                        Armamos tu viaje a la medida de tu espíritu.
                    </p>
                    <a href="{{ route('contactenos') }}" style="display:inline-block; background:linear-gradient(135deg, #228b8b 0%, #977828 100%); color:#fff; padding:1rem 2.5rem; border-radius:50px; text-decoration:none; font-weight:600; margin-top:1rem; box-shadow:0 6px 20px rgba(34,139,139,0.3);">
                        Diseña tu viaje con nosotros
                    </a>
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
