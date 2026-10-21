@extends('layouts.apppt')
@section('titulo', 'Contato Pacha Mama Spirit — Reserve seu tour pelo Peru')
@section('metas')
<meta name="description" content="Fale com a nossa equipe em Cusco para planejar a sua viagem ao Peru. Respondemos no WhatsApp em menos de uma hora. Tours para Machu Picchu, Camino Inca, Salkantay e mais.">
<meta name="keywords" content="contato agência de viagens Peru, reservar tour Peru, Pacha Mama Spirit contato, reservar tour Machu Picchu, agência de viagens Cusco contato">
<link rel="canonical" href="{{ route('pt.contato') }}">
<meta property="og:type" content="website">
<meta property="og:locale" content="pt_BR">
<meta property="og:title" content="Contato Pacha Mama Spirit — Reserve seu tour pelo Peru">
<meta property="og:description" content="Fale com a nossa equipe em Cusco para planejar a sua viagem ao Peru. Respondemos no WhatsApp em menos de uma hora.">
<meta property="og:url" content="{{ route('pt.contato') }}">
<meta property="og:image" content="https://pachamamaspirit.com/img/panoramico/Recorrido-Cusco-Machu-Picchu.webp">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="Contato Pacha Mama Spirit — Reserve seu tour pelo Peru">
<meta name="twitter:description" content="Fale com a nossa equipe em Cusco. Respondemos em menos de uma hora.">
<meta name="twitter:image" content="https://pachamamaspirit.com/img/panoramico/Recorrido-Cusco-Machu-Picchu.webp">
<meta name="robots" content="index,follow">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "ContactPage",
  "@id": "{{ route('pt.contato') }}",
  "url": "{{ route('pt.contato') }}",
  "name": "Contato Pacha Mama Spirit — Reserve seu tour pelo Peru",
  "description": "Fale com a nossa equipe em Cusco para planejar a sua viagem ao Peru. Respondemos em menos de uma hora.",
  "inLanguage": "pt-BR",
  "isPartOf": { "@id": "https://pachamamaspirit.com/#website" },
  "breadcrumb": {
    "@type": "BreadcrumbList",
    "itemListElement": [
      { "@type": "ListItem", "position": 1, "name": "Início", "item": "{{ route('pt.index') }}" },
      { "@type": "ListItem", "position": 2, "name": "Contato", "item": "{{ route('pt.contato') }}" }
    ]
  }
}
</script>
<link rel="alternate" hreflang="es" href="{{ route('contactenos') }}">
<link rel="alternate" hreflang="en" href="{{ route('contact') }}">
<link rel="alternate" hreflang="pt-br" href="{{ route('pt.contato') }}">
<link rel="alternate" hreflang="x-default" href="{{ route('contact') }}">
@endsection

@section('content')
    {{-- HERO --}}
    <div class="blog">
        <div class="container h-100 d-flex align-items-center">
            <div class="row w-100">
                <div class="col-lg-12 text-center">
                    <h1 class="h1-destinos">Fale com a Pacha Mama Spirit</h1>
                    <p>Estamos aqui para ajudar você a planejar a viagem da sua vida. Nossa equipe em Cusco responde em menos de uma hora.</p>
                </div>
            </div>
        </div>
    </div>

    <section style="background:#f7f8fa; padding: 4rem 0;">
        <div class="container">
            @if (session('success'))
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="alert alert-success text-center" role="alert">{{ session('success') }}</div>
                    </div>
                </div>
            @endif

            <div class="row justify-content-center mb-5">
                <div class="col-lg-8 text-center">
                    <h2 class="text-center mb-3">Entre em contato com a nossa equipe</h2>
                    <p style="font-size:1.05rem; line-height:1.8; color:#374151;">
                        Tem dúvidas sobre um tour, quer um roteiro personalizado ou precisa de uma sugestão?
                        Escreva para a gente — respondemos rápido e sempre sem compromisso.
                    </p>
                </div>
            </div>

            <div class="row align-items-start justify-content-center">
                {{-- Cartão de informações --}}
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
                            <h5 style="font-weight:700; color:#1a2e45; margin-top:0.5rem;">E-mail</h5>
                        </div>
                        <p class="text-center">
                            <a href="mailto:info@pachamamaspirit.com" style="color:#374151; text-decoration:none;">info@pachamamaspirit.com</a><br>
                            <a href="mailto:reserves@pachamamaspirit.com" style="color:#374151; text-decoration:none;">reserves@pachamamaspirit.com</a>
                        </p>

                        <div class="text-center mt-3 mb-2">
                            <span class="icon-map-marker" style="font-size:2rem; color:#2aa8a8;"></span>
                            <h5 style="font-weight:700; color:#1a2e45; margin-top:0.5rem;">Onde estamos</h5>
                        </div>
                        <p class="text-center">Ayuda Mutua k2-6<br>Cusco, Perú</p>

                        <div class="text-center mt-3 mb-2">
                            <span style="font-size:1.5rem;">⏱️</span>
                            <h5 style="font-weight:700; color:#1a2e45; margin-top:0.5rem;">Tempo de resposta</h5>
                        </div>
                        <p class="text-center">Respondemos em menos de <strong>1 hora</strong><br>Seg – Dom, 6h – 22h (horário de Cusco)</p>
                    </div>
                </div>

                {{-- Formulário --}}
                <div class="col-md-8">
                    <div style="background:#fff; border-radius:14px; padding:2.5rem; box-shadow:0 4px 24px rgba(0,0,0,0.07);">
                        <h3 style="font-weight:700; color:#1a2e45; margin-bottom:1.5rem; font-size:1.15rem;">Conte para a gente sobre a sua viagem</h3>
                        <form id="contact-form" name="contact-form" action="{{ route('mensajeIndexPt') }}" method="POST">
                            @csrf
                            <div class="row formTransparent">
                                <div class="col-md-6 mb-3">
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Nome completo *" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <input type="email" id="email" name="email" class="form-control" placeholder="E-mail *" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <input type="tel" id="phone" name="phone" class="form-control" placeholder="Telefone / WhatsApp *" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <input type="text" id="country" name="country" class="form-control" placeholder="País de origem">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <input type="number" id="adults" name="adults" class="form-control" placeholder="Número de viajantes" min="1">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <select name="tipo" id="tipo" class="form-control">
                                        <option value="" selected>Tipo de viagem</option>
                                        <option value="familia">Viagem em família</option>
                                        <option value="pareja">Viagem a dois</option>
                                        <option value="amigos">Viagem com amigos</option>
                                        <option value="grupo">Viagem em grupo</option>
                                        <option value="privado">Viagem privativa</option>
                                    </select>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <textarea placeholder="Conte sobre a sua viagem — datas, destinos, interesses ou dúvidas…" id="message" name="message" rows="4" class="form-control" required></textarea>
                                </div>
                                <div class="col-md-12 text-center">
                                    <button class="btnTransparent" type="submit">Enviar mensagem</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
