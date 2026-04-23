@extends('layouts.appen')
@section('titulo', 'Contact Pacha Mama Spirit — Book Your Tour to Peru')
@section('metas')
<meta name="description" content="Contact our Cusco team to plan your trip to Peru. We reply on WhatsApp in under an hour. Tours to Machu Picchu, Inca Trail, Salkantay and more.">
<meta name="keywords" content="contact travel agency Peru, book tour Peru, Pacha Mama Spirit contact, Machu Picchu tour booking, Cusco travel agency contact">
<link rel="canonical" href="{{ request()->url() }}">
<meta property="og:type" content="website">
<meta property="og:locale" content="en_US">
<meta property="og:title" content="Contact Pacha Mama Spirit — Book Your Tour to Peru">
<meta property="og:description" content="Contact our Cusco team to plan your trip to Peru. We reply on WhatsApp in under an hour.">
<meta property="og:url" content="{{ request()->url() }}">
<meta property="og:image" content="https://pachamamaspirit.com/img/panoramico/Recorrido-Cusco-Machu-Picchu.webp">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Contact Pacha Mama Spirit — Book Your Tour to Peru">
<meta name="twitter:description" content="Contact our Cusco team to plan your trip to Peru. We reply in under an hour.">
<meta name="twitter:image" content="https://pachamamaspirit.com/img/panoramico/Recorrido-Cusco-Machu-Picchu.webp">
<meta name="robots" content="index,follow">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ContactPage",
  "@id": "{{ request()->url() }}",
  "url": "{{ request()->url() }}",
  "name": "Contact Pacha Mama Spirit — Book Your Tour to Peru",
  "description": "Contact our Cusco team to plan your trip to Peru. We reply in under an hour.",
  "inLanguage": "en-US",
  "isPartOf": { "@id": "https://pachamamaspirit.com/#website" },
  "breadcrumb": {
    "@type": "BreadcrumbList",
    "itemListElement": [
      { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://pachamamaspirit.com/" },
      { "@type": "ListItem", "position": 2, "name": "Contact", "item": "{{ request()->url() }}" }
    ]
  }
}
</script>
@endsection

@section('content')
    @include('layouts.menu')

    {{-- HERO --}}
    <div class="blog">
        <div class="container h-100 d-flex align-items-center">
            <div class="row w-100">
                <div class="col-lg-12 text-center">
                    <h1 class="h1-destinos">Contact Pacha Mama Spirit</h1>
                    <p>We are here to help you plan the journey of a lifetime. Our Cusco team replies in under an hour.</p>
                </div>
            </div>
        </div>
    </div>

    <section style="background:#f7f8fa; padding: 4rem 0;">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="text-center mb-3">Get in touch with our team</h2>
                    <p style="font-size:1.05rem; line-height:1.8; color:#374151;">
                        Do you have questions about a tour, want a customized itinerary or simply need advice?
                        Write to us — we respond quickly and always without obligation.
                    </p>
                </div>
            </div>

            <div class="row align-items-start justify-content-center">
                {{-- Contact info card --}}
                <div class="col-md-4 mb-4">
                    <div style="background:#fff; border-radius:14px; padding:2rem; box-shadow:0 4px 20px rgba(0,0,0,0.07);">
                        <div class="text-center mb-3">
                            <span class="icon-whatsapp" style="font-size:2rem; color:#2aa8a8;"></span>
                            <h5 style="font-weight:700; color:#1a2e45; margin-top:0.5rem;">WhatsApp</h5>
                        </div>
                        <p class="text-center">
                            <a href="tel:+51921136755" style="color:#374151; text-decoration:none;">+51 921 136 755</a><br>
                            <a href="tel:+19895722905" style="color:#374151; text-decoration:none;">+1 (989) 572-2905</a>
                        </p>

                        <div class="text-center mt-3 mb-2">
                            <span class="icon-envelope" style="font-size:2rem; color:#2aa8a8;"></span>
                            <h5 style="font-weight:700; color:#1a2e45; margin-top:0.5rem;">Email</h5>
                        </div>
                        <p class="text-center">
                            <a href="mailto:info@pachamamaspirit.com" style="color:#374151; text-decoration:none;">info@pachamamaspirit.com</a><br>
                            <a href="mailto:reserves@pachamamaspirit.com" style="color:#374151; text-decoration:none;">reserves@pachamamaspirit.com</a>
                        </p>

                        <div class="text-center mt-3 mb-2">
                            <span class="icon-map-marker" style="font-size:2rem; color:#2aa8a8;"></span>
                            <h5 style="font-weight:700; color:#1a2e45; margin-top:0.5rem;">Location</h5>
                        </div>
                        <p class="text-center">Ayuda Mutua k2-6<br>Cusco, Perú</p>

                        <div class="text-center mt-3 mb-2">
                            <span style="font-size:1.5rem;">⏱️</span>
                            <h5 style="font-weight:700; color:#1a2e45; margin-top:0.5rem;">Response time</h5>
                        </div>
                        <p class="text-center">We reply in under <strong>1 hour</strong><br>Mon – Sun, 6 am – 10 pm (Cusco time)</p>
                    </div>
                </div>

                {{-- Contact form --}}
                <div class="col-md-8">
                    <div style="background:#fff; border-radius:14px; padding:2.5rem; box-shadow:0 4px 24px rgba(0,0,0,0.07);">
                        <h3 style="font-weight:700; color:#1a2e45; margin-bottom:1.5rem; font-size:1.15rem;">Tell us about your trip</h3>
                        <form id="contact-form" name="contact-form" action="{{ route('mensajeIndex') }}" method="POST">
                            @csrf
                            <div class="row formTransparent">
                                <div class="col-md-6 mb-3">
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Full name *" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <input type="email" id="email" name="email" class="form-control" placeholder="Email *" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <input type="tel" id="phone" name="phone" class="form-control" placeholder="Phone / WhatsApp *" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <input type="text" id="country" name="country" class="form-control" placeholder="Country of origin">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <input type="number" id="adults" name="adults" class="form-control" placeholder="Number of travelers" min="1">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <select name="tipo" id="tipo" class="form-control">
                                        <option value="" selected>Type of trip</option>
                                        <option value="familia">Family trip</option>
                                        <option value="pareja">Couple trip</option>
                                        <option value="amigos">Friends trip</option>
                                        <option value="grupo">Group trip</option>
                                        <option value="privado">Private trip</option>
                                    </select>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <textarea placeholder="Tell us about your trip — dates, destinations, interests or any questions…" id="message" name="message" rows="4" class="form-control" required></textarea>
                                </div>
                                <div class="col-md-12 text-center">
                                    <button class="btnTransparent" type="submit">Send message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
