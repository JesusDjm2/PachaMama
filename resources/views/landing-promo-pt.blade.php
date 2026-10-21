<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('partials.gtm-head')
    @include('partials.google-ads-tag')
    <title>Tours no Peru | Pacha Mama Spirit — Reserve sua viagem</title>
    <meta name="description" content="Descubra os melhores tours da Pacha Mama Spirit no Peru: 4, 5, 7, 10 e 11 dias. Machu Picchu, Caminho Inca, Salkantay e muito mais. Orçamento grátis pelo WhatsApp.">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ route('promo.pt') }}">
    <link rel="alternate" hreflang="pt-br" href="{{ route('promo.pt') }}">
    <link rel="alternate" hreflang="es" href="{{ route('promo.es') }}">
    <link rel="alternate" hreflang="en" href="{{ route('promo.en') }}">
    <link rel="alternate" hreflang="x-default" href="{{ route('promo.en') }}">

    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Pacha Mama Spirit">
    <meta property="og:title" content="Tours no Peru | Pacha Mama Spirit">
    <meta property="og:description" content="Machu Picchu, Caminho Inca, Salkantay e mais. Tours de 4 a 11 dias. Solicite seu orçamento gratuito.">
    <meta property="og:image" content="{{ asset('img/machu-picchu-travel.webp') }}">
    <meta property="og:url" content="{{ route('promo.pt') }}">
    <meta property="og:locale" content="pt_BR">

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="dns-prefetch" href="//fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" href="{{ asset('img/icono-home.png') }}" type="image/png">

    <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/landing-promo.css') }}?v={{ @filemtime(public_path('css/landing-promo.css')) }}">

    <link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;600;700&family=Quicksand:wght@400;500;600;700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;600;700&family=Quicksand:wght@400;500;600;700&display=swap" media="print" onload="this.media='all'">
    <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@400;600;700&family=Quicksand:wght@400;500;600;700&display=swap"></noscript>
</head>

<body class="lp-page">
    @include('partials.gtm-body')

    {{-- Barra superior: contato + redes + idioma + ação --}}
    <div class="lp-topbar">
        <div class="lp-topbar__inner">
            <div class="lp-topbar__info">
                <a href="mailto:info@pachamamaspirit.com" class="lp-topbar__email"><span class="icon-envelope" aria-hidden="true"></span> info@pachamamaspirit.com</a>
                <a href="tel:+51921136755"><span class="icon-phone" aria-hidden="true"></span> +51 921 136 755</a>
            </div>
            <div class="lp-topbar__actions">
                <div class="lp-topbar__social">
                    <a class="whatsapp" href="https://api.whatsapp.com/send?phone=51921136755" target="_blank" rel="noopener" aria-label="WhatsApp" data-track="whatsapp_click"><span class="icon-whatsapp" aria-hidden="true"></span></a>
                    <a class="facebook" href="https://www.facebook.com/PachaMamaSpiritMountain" target="_blank" rel="nofollow noopener" aria-label="Facebook"><span class="icon-facebook" aria-hidden="true"></span></a>
                    <a class="instagram" href="https://www.instagram.com/pachamamaspiritmountain/" target="_blank" rel="nofollow noopener" aria-label="Instagram"><span class="icon-instagram" aria-hidden="true"></span></a>
                    <a class="tripadvisor" href="https://www.tripadvisor.com/Attraction_Review-g294314-d23476170-Reviews-Pacha_Mama_Spirit-Cusco_Cusco_Region.html" target="_blank" rel="nofollow noopener" aria-label="TripAdvisor"><span class="icon-tripadvisor" aria-hidden="true"></span></a>
                    <a class="youtube" href="https://www.youtube.com/channel/UCR5v94oQX3budGLKTRL4BBQ" target="_blank" rel="nofollow noopener" aria-label="YouTube"><span class="icon-youtube-play" aria-hidden="true"></span></a>
                </div>
                <a href="{{ route('promo.es') }}" class="lp-lang-switch" hreflang="es" lang="es">Español</a>
                <a href="{{ route('promo.en') }}" class="lp-lang-switch" hreflang="en" lang="en">English</a>
                <button type="button" class="lp-btn lp-btn--teal lp-btn--sm lp-topbar__cta" data-open-form>Reservar agora</button>
            </div>
        </div>
    </div>

    {{-- HERO --}}
    <header class="lp-hero" id="inicio">
        <div class="lp-container">
            <img class="lp-hero__logo" src="{{ asset('img/Pacha-Mama-Spirit-Blanco.png') }}" alt="Pacha Mama Spirit" loading="eager">
            <h1 class="lp-hero__title">Viva o Peru com a <span>Pacha Mama Spirit</span></h1>
            <p class="lp-hero__subtitle">Tours de aventura, cultura e natureza em Cusco, Machu Picchu e por todo o Peru. Agência local, guias certificados e orçamento 100% gratuito.</p>
            <div class="lp-hero-ctas">
                <a href="#tours" class="lp-btn lp-btn--primary">
                    <span class="icon-th-large" aria-hidden="true"></span> Ver tours disponíveis
                </a>
                <button type="button" class="lp-btn lp-btn--outline" data-open-form>
                    <span class="icon-envelope-o" aria-hidden="true"></span> Solicitar informações
                </button>
            </div>
            <div class="lp-hero__trust">
                <div class="lp-trust-item"><span class="icon-map-marker" aria-hidden="true"></span> Agência local em Cusco</div>
                <div class="lp-trust-item"><span class="icon-check-circle" aria-hidden="true"></span> Guias certificados</div>
                <div class="lp-trust-item"><span class="icon-group" aria-hidden="true"></span> Grupos reduzidos</div>
                <div class="lp-trust-item"><span class="icon-tripadvisor" aria-hidden="true"></span> Avaliações verificadas no TripAdvisor</div>
            </div>
        </div>
        <a href="#tours" class="lp-scroll-cue" aria-label="Descer para a próxima seção">
            <span class="icon-chevron-down" aria-hidden="true"></span>
        </a>
    </header>

    {{-- TOURS POR DURAÇÃO --}}
    <section class="lp-section lp-section--alt" id="tours">
        <div class="lp-container lp-center">
            <span class="lp-eyebrow">Nossos melhores tours</span>
            <h2 class="lp-section-title">Escolha a duração da sua viagem</h2>
            <p class="lp-section-lead">Toque em um botão e veja todos os tours publicados com aquela duração, direto do nosso catálogo.</p>

            @php
                $duracionesPt = [
                    4  => ['img' => 'img/buscador/camino-inca-machu-picchu.webp', 'label' => 'Caminho Inca clássico'],
                    5  => ['img' => 'img/buscador/humantay-lake-trek-salkantay.webp', 'label' => 'Trek Salkantay'],
                    7  => ['img' => 'img/buscador/vinicunca-rainbow-mountain.webp', 'label' => 'Cusco + Montanha Colorida'],
                    10 => ['img' => 'img/buscador/Titicaca-lake.webp', 'label' => 'Rota do sul completa'],
                    11 => ['img' => 'img/buscador/cusco-Pacha-mama.webp', 'label' => 'Grande tour pelo Peru'],
                ];
            @endphp

            <div class="lp-tours-grid" data-reveal-group>
                @foreach ($duracionesPt as $dias => $info)
                    <a href="{{ route('inicio', ['dias' => $dias]) }}" class="lp-tour-card lp-reveal" style="background-image:url('{{ asset($info['img']) }}')">
                        <span class="lp-tour-card__arrow"><span class="icon-arrow-right" aria-hidden="true"></span></span>
                        <div class="lp-tour-card__body">
                            <div class="lp-tour-card__days">{{ $dias }}<small>dias</small></div>
                            <div class="lp-tour-card__label">{{ $info['label'] }}</div>
                            <span class="lp-tour-card__count">
                                <span class="icon-th-list" aria-hidden="true"></span>
                                {{ $conteoDias[$dias] ?? 0 }} {{ ($conteoDias[$dias] ?? 0) == 1 ? 'tour' : 'tours' }}
                            </span>
                        </div>
                    </a>
                @endforeach
            </div>

            <div class="lp-tours-more">
                <a href="{{ route('inicio') }}" class="lp-btn lp-btn--ghost">
                    <span class="icon-globe" aria-hidden="true"></span> Ver o catálogo completo de tours
                </a>
            </div>
        </div>
    </section>

    {{-- SOBRE NÓS --}}
    <section class="lp-section" id="nosotros">
        <div class="lp-container">
            <div class="lp-about" data-reveal-group>
                <div class="lp-reveal">
                    <span class="lp-eyebrow">Sobre nós</span>
                    <h2 class="lp-section-title">Uma agência peruana que conhece o Peru de verdade</h2>
                    <p>A Pacha Mama Spirit é uma agência de viagens local, com base em Cusco, especializada em tours de aventura, cultura e natureza por todo o Peru. Trabalhamos com guias profissionais e operação própria para te entregar uma experiência autêntica, segura e feita do seu jeito.</p>
                    <p>Do Caminho Inca ao Salkantay, Machu Picchu, o lago Titicaca e os cantos menos conhecidos do país, a gente desenha cada viagem pensando em você.</p>
                    <div class="lp-about__stats">
                        <div class="lp-stat"><div class="lp-stat__num"><span class="icon-check-circle" aria-hidden="true"></span></div><div class="lp-stat__label">Guias certificados</div></div>
                        <div class="lp-stat"><div class="lp-stat__num"><span class="icon-group" aria-hidden="true"></span></div><div class="lp-stat__label">Grupos reduzidos</div></div>
                        <div class="lp-stat"><div class="lp-stat__num"><span class="icon-lock" aria-hidden="true"></span></div><div class="lp-stat__label">Pagamento 100% seguro</div></div>
                        <div class="lp-stat"><div class="lp-stat__num"><span class="icon-headphones" aria-hidden="true"></span></div><div class="lp-stat__label">Atendimento personalizado</div></div>
                    </div>
                    <div class="lp-about__cta">
                        <a href="{{ route('nosotros') }}" class="lp-btn lp-btn--teal" target="_blank" rel="noopener">Conheça a nossa história</a>
                    </div>
                </div>
                <div class="lp-about__img lp-reveal">
                    <img src="{{ asset('img/buscador/cusco-Pacha-mama.webp') }}" alt="Equipe Pacha Mama Spirit em Cusco" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    {{-- PERGUNTAS FREQUENTES (banner parallax) --}}
    <section class="lp-parallax" id="preguntas" style="background-image:url('{{ asset('img/buscador/catedral-del-Cusco.webp') }}')">
        <div class="lp-parallax__overlay"></div>
        <div class="lp-container lp-center lp-parallax__content lp-reveal">
            <span class="lp-eyebrow">Ficou com alguma dúvida antes de viajar?</span>
            <h2 class="lp-section-title">A gente responde todas as suas perguntas</h2>
            <p class="lp-section-lead">Preços, segurança, altitude, pagamentos e muito mais — tudo na nossa página de perguntas frequentes.</p>
            <a href="{{ route('preguntas') }}" class="lp-btn lp-btn--primary" target="_blank" rel="noopener">
                <span class="icon-question-circle" aria-hidden="true"></span> Ver perguntas frequentes
            </a>
        </div>
    </section>

    {{-- CONTATO + FORMULÁRIO --}}
    <section class="lp-section" id="contacto">
        <div class="lp-container">
            <div class="lp-center">
                <span class="lp-eyebrow">Vamos conversar</span>
                <h2 class="lp-section-title">Informações de contato</h2>
                <p class="lp-section-lead">Fale com a gente pelo canal que você preferir — a resposta é rápida.</p>
            </div>

            <div class="lp-contact-grid" data-reveal-group>
                <a href="https://api.whatsapp.com/send?phone=51921136755" target="_blank" rel="noopener" class="lp-contact-card lp-reveal" data-track="whatsapp_click">
                    <div class="lp-contact-card__icon"><span class="icon-whatsapp" aria-hidden="true"></span></div>
                    <div class="lp-contact-card__label">WhatsApp</div>
                    <div class="lp-contact-card__value">+51 921 136 755</div>
                </a>
                <a href="tel:+19895722905" class="lp-contact-card lp-reveal">
                    <div class="lp-contact-card__icon"><span class="icon-phone" aria-hidden="true"></span></div>
                    <div class="lp-contact-card__label">Telefone / EUA</div>
                    <div class="lp-contact-card__value">+1 (989) 572-2905</div>
                </a>
                <a href="mailto:info@pachamamaspirit.com" class="lp-contact-card lp-reveal">
                    <div class="lp-contact-card__icon"><span class="icon-envelope" aria-hidden="true"></span></div>
                    <div class="lp-contact-card__label">E-mail</div>
                    <div class="lp-contact-card__value">info@pachamamaspirit.com</div>
                </a>
                <a href="{{ route('contactenos') }}" class="lp-contact-card lp-reveal">
                    <div class="lp-contact-card__icon"><span class="icon-map-marker" aria-hidden="true"></span></div>
                    <div class="lp-contact-card__label">Escritório</div>
                    <div class="lp-contact-card__value">Cusco, Peru</div>
                </a>
            </div>

            <div class="lp-contact-cta lp-center">
                <span class="lp-eyebrow">Orçamento gratuito</span>
                <h2 class="lp-section-title">Conte como é a viagem dos seus sonhos</h2>
                <p class="lp-section-lead">Preencha o formulário e um assessor da Pacha Mama Spirit entra em contato com uma proposta feita para você.</p>
                <button type="button" class="lp-btn lp-btn--primary" data-open-form>
                    <span class="icon-paper-plane" aria-hidden="true"></span> Solicitar orçamento gratuito
                </button>
            </div>
        </div>
    </section>

    {{-- RODAPÉ --}}
    <footer class="lp-footer">
        <div class="lp-container">
            <img src="{{ asset('img/Pacha-Mama-Spirit-Blanco.png') }}" alt="Pacha Mama Spirit" loading="lazy">
            <div class="lp-footer__links">
                <a href="{{ route('inicio') }}">Site completo</a>
                <a href="{{ route('nosotros') }}">Sobre nós</a>
                <a href="{{ route('preguntas') }}">Perguntas frequentes</a>
                <a href="{{ route('contactenos') }}">Contato</a>
                <a href="{{ route('terminos') }}">Termos e Condições</a>
            </div>
            <p class="lp-footer__copy">© {{ date('Y') }} Pacha Mama Spirit — Todos os direitos reservados.</p>
        </div>
    </footer>

    {{-- CTA fixa mobile --}}
    <div class="lp-sticky-cta">
        <a href="https://api.whatsapp.com/send?phone=51921136755" target="_blank" rel="noopener" class="lp-btn lp-btn--teal" data-track="whatsapp_click">
            <span class="icon-whatsapp" aria-hidden="true"></span> WhatsApp
        </a>
        <button type="button" class="lp-btn lp-btn--primary" data-open-form>
            <span class="icon-envelope-o" aria-hidden="true"></span> Reservar
        </button>
    </div>

    {{-- MODAL: formulário de orçamento --}}
    <div class="lp-modal" id="modal-formulario" aria-hidden="true">
        <div class="lp-modal__backdrop" data-close-form></div>
        <div class="lp-modal__dialog lp-form-wrap" role="dialog" aria-modal="true" aria-labelledby="modal-formulario-title">
            <button type="button" class="lp-modal__close" data-close-form aria-label="Fechar">&times;</button>
            <div class="lp-center">
                <span class="lp-eyebrow">Orçamento gratuito</span>
                <h2 class="lp-section-title" id="modal-formulario-title">Conte como é a viagem dos seus sonhos</h2>
                <p class="lp-section-lead">Preencha o formulário e um assessor da Pacha Mama Spirit entra em contato com uma proposta feita para você.</p>
            </div>

            <form class="lp-form" action="{{ route('mensajeIndex') }}" method="POST">
                @csrf
                <div class="lp-form__row">
                    <div class="lp-field">
                        <label for="name-pt">Nome completo *</label>
                        <input type="text" id="name-pt" name="name" placeholder="Seu nome" required>
                    </div>
                    <div class="lp-field">
                        <label for="email-pt">E-mail *</label>
                        <input type="email" id="email-pt" name="email" placeholder="seuemail@email.com" required>
                    </div>
                </div>
                <div class="lp-form__row">
                    <div class="lp-field">
                        <label for="phone-pt">Telefone / WhatsApp *</label>
                        <input type="tel" id="phone-pt" name="phone" placeholder="+55 11 90000-0000" required>
                    </div>
                    <div class="lp-field">
                        <label for="country-pt">Nacionalidade</label>
                        <input type="text" id="country-pt" name="country" placeholder="País de origem">
                    </div>
                </div>
                <div class="lp-form__row">
                    <div class="lp-field">
                        <label for="adults-pt">N.º de viajantes</label>
                        <input type="number" id="adults-pt" name="adults" min="1" placeholder="2">
                    </div>
                    <div class="lp-field">
                        <label for="tipo-pt">Tour de interesse</label>
                        <select id="tipo-pt" name="tipo">
                            <option value="">Selecione uma opção</option>
                            <option value="4-dias">Tour de 4 dias</option>
                            <option value="5-dias">Tour de 5 dias</option>
                            <option value="7-dias">Tour de 7 dias</option>
                            <option value="10-dias">Tour de 10 dias</option>
                            <option value="11-dias">Tour de 11 dias</option>
                            <option value="a-medida">Viagem personalizada</option>
                        </select>
                    </div>
                </div>
                <div class="lp-field">
                    <label for="message-pt">Mensagem *</label>
                    <textarea id="message-pt" name="message" rows="4" placeholder="Conte as datas e os detalhes da sua viagem..." required></textarea>
                </div>
                <div class="lp-form__submit">
                    <button type="submit" class="lp-btn lp-btn--primary lp-btn--block">
                        <span class="icon-paper-plane" aria-hidden="true"></span> Enviar solicitação
                    </button>
                </div>
                <p class="lp-form__note">Seus dados são usados apenas para responder ao seu pedido de viagem.</p>
            </form>
        </div>
    </div>

    @if (session('success') || session('status'))
        {{-- Overlay de confirmação: aparece uma vez após enviar o formulário e redireciona ao início --}}
        <div class="lp-success-modal" id="success-modal" data-redirect-url="{{ url('/') }}" aria-hidden="true">
            <div class="lp-modal__backdrop" data-success-close></div>
            <div class="lp-success-modal__dialog" role="alertdialog" aria-modal="true" aria-labelledby="success-modal-title">
                <button type="button" class="lp-modal__close" data-success-close aria-label="Fechar">&times;</button>
                <div class="lp-success-modal__icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                </div>
                <h3 class="lp-success-modal__title" id="success-modal-title">Mensagem enviada com sucesso!</h3>
                <p class="lp-success-modal__text">{{ session('success') ?? session('status') }}</p>
                <p class="lp-success-modal__redirect">Você será redirecionado ao início em <span data-countdown>4</span>s...</p>
                <button type="button" class="lp-btn lp-btn--primary" data-success-redirect>Ir para o início agora</button>
            </div>
        </div>
    @endif

    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
    <script src="{{ asset('js/landing-promo.js') }}?v={{ @filemtime(public_path('js/landing-promo.js')) }}" defer></script>
</body>

</html>
