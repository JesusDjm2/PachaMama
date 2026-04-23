@extends('layouts.appen')
@section('titulo', 'About Pacha Mama Spirit — The Agency That Connects Travelers with the Soul of the Andes')
@section('metas')
<meta name="description" content="Family agency in Cusco since 2018. Authentic tours to Machu Picchu, Inca Trail and Sacred Valley with Quechua-speaking guides and real Andean ceremonies.">
<meta name="keywords" content="Pacha Mama Spirit, travel agency Cusco, responsible tourism Peru, spiritual travel Peru, authentic Machu Picchu tours, Quechua guides, Inca Trail, Sacred Valley">
<link rel="canonical" href="{{ request()->url() }}">
<meta property="og:type" content="website">
<meta property="og:locale" content="en_US">
<meta property="og:title" content="About Pacha Mama Spirit — The Agency That Connects Travelers with the Soul of the Andes">
<meta property="og:description" content="Family agency in Cusco since 2018. Authentic tours to Machu Picchu with Quechua-speaking guides, Andean ceremonies and responsible tourism.">
<meta property="og:url" content="{{ request()->url() }}">
<meta property="og:image" content="https://pachamamaspirit.com/img/panoramico/Recorrido-Cusco-Machu-Picchu.webp">
<meta property="og:image:secure_url" content="https://pachamamaspirit.com/img/panoramico/Recorrido-Cusco-Machu-Picchu.webp">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="About Pacha Mama Spirit — The Agency That Connects Travelers with the Soul of the Andes">
<meta name="twitter:description" content="Family agency in Cusco since 2018. Authentic tours with Quechua-speaking guides and Andean ceremonies.">
<meta name="twitter:image" content="https://pachamamaspirit.com/img/panoramico/Recorrido-Cusco-Machu-Picchu.webp">
<meta name="robots" content="index,follow,max-image-preview:large">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "AboutPage",
  "@id": "{{ request()->url() }}",
  "url": "{{ request()->url() }}",
  "name": "About Pacha Mama Spirit — The Agency That Connects Travelers with the Soul of the Andes",
  "description": "Family agency in Cusco since 2018 with over 20 years of experience in authentic tours across Peru, Quechua-speaking guides and responsible tourism.",
  "inLanguage": "en-US",
  "isPartOf": { "@id": "https://pachamamaspirit.com/#website" },
  "about": { "@id": "https://pachamamaspirit.com/#organization" },
  "breadcrumb": {
    "@type": "BreadcrumbList",
    "itemListElement": [
      { "@type": "ListItem", "position": 1, "name": "Home", "item": "https://pachamamaspirit.com/" },
      { "@type": "ListItem", "position": 2, "name": "About Us", "item": "{{ request()->url() }}" }
    ]
  },
  "mainEntity": {
    "@type": "TravelAgency",
    "@id": "https://pachamamaspirit.com/#organization",
    "name": "Pacha Mama Spirit",
    "slogan": "The agency that connects travelers with the soul of the Andes",
    "description": "Family travel agency specializing in authentic, spiritual and sustainable tourism in Peru. Tours to Machu Picchu, Inca Trail, Salkantay, Sacred Valley and Rainbow Mountain with local Quechua-speaking guides.",
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
    "areaServed": { "@type": "Country", "name": "Peru" },
    "knowsLanguage": ["Spanish", "English", "Quechua"],
    "knowsAbout": ["Machu Picchu", "Inca Trail", "Salkantay Trek", "Sacred Valley", "Rainbow Mountain", "Andean Spirituality", "Sustainable Tourism"]
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
                    <h1 class="h1-destinos">We Connect Travelers with the Soul of the Andes</h1>
                    <p>A family agency from Cusco, built by Peruvians for travelers who want more than a tourist package.</p>
                </div>
            </div>
        </div>
    </div>

    <section style="background:#f7f8fa; padding: 4rem 0;">
        <div class="container" id="pachamama">
            <div class="row justify-content-center">
                <div class="col-lg-9 text-center mb-4">
                    <img src="{{ asset('img/pacha-mama-spirit-logo.png') }}" width="200px" alt="Pacha Mama Spirit logo — travel agency in Cusco, Peru" class="mb-4">
                    <h2 class="text-center mb-3">Who We Are</h2>
                    <div class="linea mb-4"></div>
                    <p style="font-size:1.1rem; line-height:1.8;">
                        <strong>Pacha Mama Spirit</strong> is a family travel agency founded in Cusco in 2018 by brothers
                        <strong>Herberth Alvarado Miranda</strong> and <strong>David Miranda</strong>. We bring over
                        <strong>20 years of experience</strong> guiding travelers across Peru — but what defines us
                        is not the years: it is the way we understand travel.
                    </p>
                    <p style="font-size:1.1rem; line-height:1.8;">
                        We believe a tour is not a journey. That <strong>Machu Picchu</strong> is not just a postcard.
                        That the Andes are a living being to be listened to, learned from and thanked.
                        That is why our name is <em>Pacha Mama</em> — Mother Earth in Quechua — and why
                        every itinerary we design is built so that you return home with something more than photographs.
                    </p>
                    <p style="font-size:1.1rem; line-height:1.8;">
                        Our team is made up of <strong>local Quechua-speaking guides</strong>, porters from Sacred Valley
                        communities, cooks who prepare ancestral dishes and Andean masters (<em>paqos</em>) who share
                        authentic ceremonies when the traveler wishes. Our <strong>exclusive lodge</strong> sits in the
                        Sacred Valley of the Incas, between the villages of Huayllabamba and Raqchi,
                        one hour from the Machu Picchu train station.
                    </p>
                </div>
            </div>

            {{-- Promise banner --}}
            <div class="row justify-content-center mt-3 mb-5">
                <div class="col-lg-9">
                    <div style="background:linear-gradient(135deg, #228b8b 0%, #977828 100%); color:#fff; border-radius:18px; padding:3rem 2rem; text-align:center; box-shadow:0 10px 40px rgba(34,139,139,0.25);">
                        <p style="font-size:0.85rem; letter-spacing:3px; opacity:0.85; margin-bottom:1rem;">OUR PROMISE</p>
                        <p style="font-size:1.6rem; font-style:italic; line-height:1.5; margin:0; text-shadow:0 1px 4px rgba(0,0,0,.2);">
                            "We don't sell tourist packages. We offer <strong style="color:#fff;">life experiences</strong> —
                            a dialogue with Pachamama, the Apus and the living tradition of the Andes."
                        </p>
                    </div>
                </div>
            </div>

            {{-- Values --}}
            <div class="row justify-content-center mt-2">
                <div class="col-lg-12 text-center mb-4">
                    <h2 class="text-center mb-3">Our Values</h2>
                    <div class="linea mb-4"></div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div style="background:#fff; border-radius:14px; padding:2rem; box-shadow:0 4px 20px rgba(0,0,0,0.07); height:100%;">
                        <div class="text-center mb-3">
                            <span style="font-size:2.5rem;">🌄</span>
                            <h4 style="font-weight:700; color:#1a2e45; margin-top:0.5rem;">Andean Authenticity</h4>
                            <div class="linea mb-3"></div>
                        </div>
                        <p style="text-align:center;">
                            Quechua-speaking guides, community porters, real ceremonies with verifiable lineage masters.
                            No tourist performance.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div style="background:#fff; border-radius:14px; padding:2rem; box-shadow:0 4px 20px rgba(0,0,0,0.07); height:100%;">
                        <div class="text-center mb-3">
                            <span style="font-size:2.5rem;">🌱</span>
                            <h4 style="font-weight:700; color:#1a2e45; margin-top:0.5rem;">Responsible Tourism</h4>
                            <div class="linea mb-3"></div>
                        </div>
                        <p style="text-align:center;">
                            Fair wages for porters, local purchasing, minimal waste and direct support for
                            Sacred Valley community projects.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div style="background:#fff; border-radius:14px; padding:2rem; box-shadow:0 4px 20px rgba(0,0,0,0.07); height:100%;">
                        <div class="text-center mb-3">
                            <span style="font-size:2.5rem;">✨</span>
                            <h4 style="font-weight:700; color:#1a2e45; margin-top:0.5rem;">Transformational Experiences</h4>
                            <div class="linea mb-3"></div>
                        </div>
                        <p style="text-align:center;">
                            We don't build rushed itineraries. We include silence, contemplation and time
                            for the landscape to change something inside you.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div style="background:#fff; border-radius:14px; padding:2rem; box-shadow:0 4px 20px rgba(0,0,0,0.07); height:100%;">
                        <div class="text-center mb-3">
                            <span style="font-size:2.5rem;">🤝</span>
                            <h4 style="font-weight:700; color:#1a2e45; margin-top:0.5rem;">Family-Style Service</h4>
                            <div class="linea mb-3"></div>
                        </div>
                        <p style="text-align:center;">
                            WhatsApp replies in under 1 hour. We design your trip <em>with</em> you, not for you.
                            Small groups — never more than 12 travelers.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div style="background:#fff; border-radius:14px; padding:2rem; box-shadow:0 4px 20px rgba(0,0,0,0.07); height:100%;">
                        <div class="text-center mb-3">
                            <span style="font-size:2.5rem;">🏔️</span>
                            <h4 style="font-weight:700; color:#1a2e45; margin-top:0.5rem;">Local Experts</h4>
                            <div class="linea mb-3"></div>
                        </div>
                        <p style="text-align:center;">
                            20+ years walking these routes. We know every stone of the Inca Trail, every secret
                            viewpoint in the Sacred Valley, every story behind the ruins.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div style="background:#fff; border-radius:14px; padding:2rem; box-shadow:0 4px 20px rgba(0,0,0,0.07); height:100%;">
                        <div class="text-center mb-3">
                            <span style="font-size:2.5rem;">🔎</span>
                            <h4 style="font-weight:700; color:#1a2e45; margin-top:0.5rem;">Full Transparency</h4>
                            <div class="linea mb-3"></div>
                        </div>
                        <p style="text-align:center;">
                            Itemized prices, flexible cancellation up to 48h before departure and zero hidden fees.
                            We tell you what is included and what is not — no surprises.
                        </p>
                    </div>
                </div>
            </div>

            {{-- Mission & Vision --}}
            <div class="row justify-content-center mt-4">
                <div class="col-lg-5 mb-4">
                    <div style="background:#fff; border-radius:14px; padding:2rem; box-shadow:0 4px 20px rgba(0,0,0,0.07); height:100%;">
                        <div class="text-center mb-3">
                            <span style="font-size:2.5rem; color:#2aa8a8;">&#9670;</span>
                            <h4 style="font-weight:700; color:#1a2e45; margin-top:0.5rem;">Mission</h4>
                            <div class="linea mb-3"></div>
                        </div>
                        <p style="text-align:center;">
                            To support the progress of Sacred Valley communities and southern Peru by offering journeys
                            that integrate community aid, coexistence, environmental awareness and education —
                            ensuring tourism benefits those who inherit these territories.
                        </p>
                    </div>
                </div>
                <div class="col-lg-5 mb-4">
                    <div style="background:#fff; border-radius:14px; padding:2rem; box-shadow:0 4px 20px rgba(0,0,0,0.07); height:100%;">
                        <div class="text-center mb-3">
                            <span style="font-size:2.5rem; color:#d4a843;">&#9670;</span>
                            <h4 style="font-weight:700; color:#1a2e45; margin-top:0.5rem;">Vision</h4>
                            <div class="linea mb-3"></div>
                        </div>
                        <p style="text-align:center;">
                            To be the reference agency in southern Peru for travelers seeking authentic, sustainable
                            and transformational experiences — where every person who arrives stops being a client
                            and becomes part of the <strong>Pacha Mama</strong> family.
                        </p>
                    </div>
                </div>
            </div>

            {{-- CTA --}}
            <div class="row justify-content-center mt-4">
                <div class="col-lg-8 text-center">
                    <p style="font-size:1.15rem; line-height:1.7; color:#2aa8a8;">
                        <em>Allin kausay kachun</em> — may there be good life.
                    </p>
                    <p style="font-size:1.05rem;">
                        If the Andes are calling you, let's talk.
                        We'll design your trip to the measure of your spirit.
                    </p>
                    <a href="{{ route('contact') }}" style="display:inline-block; background:linear-gradient(135deg, #228b8b 0%, #977828 100%); color:#fff; padding:1rem 2.5rem; border-radius:50px; text-decoration:none; font-weight:600; margin-top:1rem; box-shadow:0 6px 20px rgba(34,139,139,0.3);">
                        Design your trip with us
                    </a>
                </div>
            </div>

            <div class="space"></div>
        </div>
    </section>
@endsection
