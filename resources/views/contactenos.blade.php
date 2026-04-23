@extends('layouts.app')
@section('titulo', 'Contacte a Pacha Mama Spirit — Reserva tu Tour en Perú')
@section('metas')
    <meta name="description" content="Contáctenos para planear tu viaje a Perú. Respondemos en pocas horas. Tours a Machu Picchu, Camino Inca, Cusco y más. WhatsApp: +51 921 136 755.">
    <meta name="keywords" content="contacto agencia de viajes Peru, reservar tour Peru, contacto Pacha Mama Spirit, tours Machu Picchu reservas, agencia turismo Cusco contacto">
    <link rel="canonical" href="{{ request()->url() }}">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="es_PE">
    <meta property="og:title" content="Contacte a Pacha Mama Spirit — Reserva tu Tour en Perú">
    <meta property="og:description" content="Contáctenos para planear tu viaje a Perú. Respondemos en pocas horas. Tours a Machu Picchu, Camino Inca, Cusco y más.">
    <meta property="og:url" content="{{ request()->url() }}">
    <meta property="og:image" content="https://pachamamaspirit.com/img/panoramico/Recorrido-Cusco-Machu-Picchu.webp">
    <meta property="og:image:secure_url" content="https://pachamamaspirit.com/img/panoramico/Recorrido-Cusco-Machu-Picchu.webp">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Contacte a Pacha Mama Spirit — Reserva tu Tour en Perú">
    <meta name="twitter:description" content="Contáctenos para planear tu viaje a Perú. Tours a Machu Picchu, Camino Inca, Cusco y más. WhatsApp: +51 921 136 755.">
    <meta name="twitter:image" content="https://pachamamaspirit.com/img/panoramico/Recorrido-Cusco-Machu-Picchu.webp">
    <meta name="robots" content="index,follow">
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "ContactPage",
      "@id": "{{ request()->url() }}",
      "url": "{{ request()->url() }}",
      "name": "Contacte a Pacha Mama Spirit — Reserva tu Tour en Perú",
      "description": "Contáctenos para planear tu viaje a Perú. Respondemos en pocas horas.",
      "inLanguage": "es-PE",
      "isPartOf": { "@id": "https://pachamamaspirit.com/#website" },
      "breadcrumb": {
        "@type": "BreadcrumbList",
        "itemListElement": [
          { "@type": "ListItem", "position": 1, "name": "Inicio", "item": "https://pachamamaspirit.com/inicio" },
          { "@type": "ListItem", "position": 2, "name": "Contacto", "item": "{{ request()->url() }}" }
        ]
      }
    }
    </script>
@endsection
@section('content')
    <div class="blog">
        <div class="container h-100 d-flex align-items-center">
            <div class="row w-100">
                <div class="col-lg-12 text-center">
                    <h1 class="h1-destinos">Contacte a Pacha Mama Spirit</h1>
                    <p>Estamos aquí para ayudarte a planear el viaje de tu vida. Respondemos por WhatsApp en menos de una hora.</p>
                </div>
            </div>
        </div>
    </div>
    <section style="background:#f7f8fa; padding: 4rem 0;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center mb-4">
                    <h2 class="text-center">Contácte al equipo de Pacha Mama</h2>
                    <p class="mx-auto" style="max-width:540px; text-align:center;">
                        Estamos aquí para ayudarte. Nuestro equipo se comunicará contigo en cuestión de horas.
                    </p>
                </div>
            </div>
            <div class="row align-items-start">
                <div class="col-md-4 mb-4">
                    <div style="background:#fff; border-radius:14px; padding:2rem; box-shadow:0 4px 20px rgba(0,0,0,0.07);">
                        <div class="text-center mb-3">
                            <span class="icon-whatsapp" style="font-size:2rem; color:#2aa8a8;"></span>
                            <h5 style="font-weight:700; color:#1a2e45; margin-top:0.5rem;">WhatsApp</h5>
                        </div>
                        <p class="text-center">+51 921 136 755<br>+1 (989) 572-2905</p>

                        <div class="text-center mt-3 mb-3">
                            <span class="icon-envelope" style="font-size:2rem; color:#2aa8a8;"></span>
                            <h5 style="font-weight:700; color:#1a2e45; margin-top:0.5rem;">Email</h5>
                        </div>
                        <p class="text-center">info@pachamamaspirit.com<br>reserves@pachamamaspirit.com</p>

                        <div class="text-center mt-3 mb-3">
                            <span class="icon-map-marker" style="font-size:2rem; color:#2aa8a8;"></span>
                            <h5 style="font-weight:700; color:#1a2e45; margin-top:0.5rem;">Dirección</h5>
                        </div>
                        <p class="text-center">Ayuda Mutua k2-6<br>Cusco, Perú</p>
                    </div>
                </div>
                <div class="col-md-8">
                    <div style="background:#fff; border-radius:14px; padding:2.5rem; box-shadow:0 4px 24px rgba(0,0,0,0.07);">
                        <form id="contact-form" name="contact-form" action="{{ route('mensajeIndex') }}" method="POST">
                            @csrf
                            <div class="row formTransparent">
                                <div class="col-md-6">
                                    <div class="md-form mb-4">
                                        <input type="text" id="name" name="name" class="form-control" placeholder="Nombre:" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="md-form mb-4">
                                        <input type="text" id="email" name="email" class="form-control" placeholder="Email:" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="md-form mb-4">
                                        <input type="text" id="phone" name="phone" class="form-control" placeholder="Teléfono:" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="md-form mb-4">
                                        <input type="text" id="country" name="country" class="form-control" placeholder="Nacionalidad:">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="md-form mb-4">
                                        <input type="number" id="adults" name="adults" class="form-control" placeholder="N.º de adultos:">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="md-form mb-4">
                                        <select name="tipo" id="tipo" class="form-control">
                                            <option selected>Tipo de viaje:</option>
                                            <option value="familia">En familia</option>
                                            <option value="pareja">En pareja</option>
                                            <option value="amigos">Con amigos</option>
                                            <option value="grupo">En grupo</option>
                                            <option value="privado">Viaje privado</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-12 mt-2">
                                    <div class="md-form">
                                        <textarea placeholder="Tu mensaje..." id="message" name="message" rows="4" class="form-control" required></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12 mt-3 text-center">
                                    <button class="btnTransparent" type="submit">Enviar mensaje</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
