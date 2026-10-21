<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('partials.gtm-head')
    @include('partials.google-ads-tag')
    <title>Peru Tours | Pacha Mama Spirit — Book Your Trip</title>
    <meta name="description" content="Discover Pacha Mama Spirit's best Peru tours: 4, 5, 7, 10 and 11 days. Machu Picchu, Inca Trail, Salkantay and more. Free quote via WhatsApp.">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ route('promo.en') }}">
    <link rel="alternate" hreflang="en" href="{{ route('promo.en') }}">
    <link rel="alternate" hreflang="es" href="{{ route('promo.es') }}">
    <link rel="alternate" hreflang="pt-br" href="{{ route('promo.pt') }}">
    <link rel="alternate" hreflang="x-default" href="{{ route('promo.en') }}">

    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Pacha Mama Spirit">
    <meta property="og:title" content="Peru Tours | Pacha Mama Spirit">
    <meta property="og:description" content="Machu Picchu, Inca Trail, Salkantay and more. Tours from 4 to 11 days. Request your free quote.">
    <meta property="og:image" content="{{ asset('img/machu-picchu-travel.webp') }}">
    <meta property="og:url" content="{{ route('promo.en') }}">
    <meta property="og:locale" content="en_US">

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

    {{-- Top bar: contact + social + language + action --}}
    <div class="lp-topbar">
        <div class="lp-topbar__inner">
            <div class="lp-topbar__info">
                <a href="mailto:info@pachamamaspirit.com" class="lp-topbar__email"><span class="icon-envelope" aria-hidden="true"></span> info@pachamamaspirit.com</a>
                <a href="tel:+19895722905"><span class="icon-phone" aria-hidden="true"></span> +1 (989) 572-2905</a>
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
                <a href="{{ route('promo.pt') }}" class="lp-lang-switch" hreflang="pt-br" lang="pt-BR">Português</a>
                <button type="button" class="lp-btn lp-btn--teal lp-btn--sm lp-topbar__cta" data-open-form>Book now</button>
            </div>
        </div>
    </div>

    {{-- HERO --}}
    <header class="lp-hero" id="home">
        <div class="lp-container">
            <img class="lp-hero__logo" src="{{ asset('img/Pacha-Mama-Spirit-Blanco.png') }}" alt="Pacha Mama Spirit" loading="eager">
            <h1 class="lp-hero__title">Experience Peru with <span>Pacha Mama Spirit</span></h1>
            <p class="lp-hero__subtitle">Adventure, culture and nature tours across Cusco, Machu Picchu and all of Peru. Local agency, certified guides, and a 100% free quote.</p>
            <div class="lp-hero-ctas">
                <a href="#tours" class="lp-btn lp-btn--primary">
                    <span class="icon-th-large" aria-hidden="true"></span> View available tours
                </a>
                <button type="button" class="lp-btn lp-btn--outline" data-open-form>
                    <span class="icon-envelope-o" aria-hidden="true"></span> Request information
                </button>
            </div>
            <div class="lp-hero__trust">
                <div class="lp-trust-item"><span class="icon-map-marker" aria-hidden="true"></span> Local agency in Cusco</div>
                <div class="lp-trust-item"><span class="icon-check-circle" aria-hidden="true"></span> Certified guides</div>
                <div class="lp-trust-item"><span class="icon-group" aria-hidden="true"></span> Small group tours</div>
                <div class="lp-trust-item"><span class="icon-tripadvisor" aria-hidden="true"></span> Verified TripAdvisor reviews</div>
            </div>
        </div>
        <a href="#tours" class="lp-scroll-cue" aria-label="Scroll to next section">
            <span class="icon-chevron-down" aria-hidden="true"></span>
        </a>
    </header>

    {{-- TOURS BY DURATION --}}
    <section class="lp-section lp-section--alt" id="tours">
        <div class="lp-container lp-center">
            <span class="lp-eyebrow">Our best tours</span>
            <h2 class="lp-section-title">Choose your trip length</h2>
            <p class="lp-section-lead">Pick a button below to see every published tour with that exact duration, straight from our catalog.</p>

            @php
                $durationsEn = [
                    4  => ['img' => 'img/buscador/camino-inca-machu-picchu.webp', 'label' => 'Classic Inca Trail'],
                    5  => ['img' => 'img/buscador/humantay-lake-trek-salkantay.webp', 'label' => 'Salkantay Trek'],
                    7  => ['img' => 'img/buscador/vinicunca-rainbow-mountain.webp', 'label' => 'Cusco + Rainbow Mountain'],
                    10 => ['img' => 'img/buscador/Titicaca-lake.webp', 'label' => 'Full Southern Route'],
                    11 => ['img' => 'img/buscador/cusco-Pacha-mama.webp', 'label' => 'Grand Peru Tour'],
                ];
            @endphp

            <div class="lp-tours-grid" data-reveal-group>
                @foreach ($durationsEn as $dias => $info)
                    <a href="{{ route('index', ['dias' => $dias]) }}" class="lp-tour-card lp-reveal" style="background-image:url('{{ asset($info['img']) }}')">
                        <span class="lp-tour-card__arrow"><span class="icon-arrow-right" aria-hidden="true"></span></span>
                        <div class="lp-tour-card__body">
                            <div class="lp-tour-card__days">{{ $dias }}<small>days</small></div>
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
                <a href="{{ route('index') }}" class="lp-btn lp-btn--ghost">
                    <span class="icon-globe" aria-hidden="true"></span> View full tour catalog
                </a>
            </div>
        </div>
    </section>

    {{-- ABOUT US --}}
    <section class="lp-section" id="about">
        <div class="lp-container">
            <div class="lp-about" data-reveal-group>
                <div class="lp-reveal">
                    <span class="lp-eyebrow">About us</span>
                    <h2 class="lp-section-title">A Peruvian agency that truly knows Peru</h2>
                    <p>Pacha Mama Spirit is a local travel agency based in Cusco, specialized in adventure, culture and nature tours across Peru. We work with professional guides and our own operations to give you an authentic, safe and personalized experience.</p>
                    <p>From the Inca Trail to Salkantay, Machu Picchu, Lake Titicaca and the country's lesser-known corners, we design every trip with you in mind.</p>
                    <div class="lp-about__stats">
                        <div class="lp-stat"><div class="lp-stat__num"><span class="icon-check-circle" aria-hidden="true"></span></div><div class="lp-stat__label">Certified guides</div></div>
                        <div class="lp-stat"><div class="lp-stat__num"><span class="icon-group" aria-hidden="true"></span></div><div class="lp-stat__label">Small groups</div></div>
                        <div class="lp-stat"><div class="lp-stat__num"><span class="icon-lock" aria-hidden="true"></span></div><div class="lp-stat__label">100% secure payment</div></div>
                        <div class="lp-stat"><div class="lp-stat__num"><span class="icon-headphones" aria-hidden="true"></span></div><div class="lp-stat__label">Personalized support</div></div>
                    </div>
                    <div class="lp-about__cta">
                        <a href="{{ route('about') }}" class="lp-btn lp-btn--teal" target="_blank" rel="noopener">Learn more about us</a>
                    </div>
                </div>
                <div class="lp-about__img lp-reveal">
                    <img src="{{ asset('img/buscador/cusco-Pacha-mama.webp') }}" alt="Pacha Mama Spirit team in Cusco" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    {{-- FAQ (parallax banner) --}}
    <section class="lp-parallax" id="faq" style="background-image:url('{{ asset('img/buscador/catedral-del-Cusco.webp') }}')">
        <div class="lp-parallax__overlay"></div>
        <div class="lp-container lp-center lp-parallax__content lp-reveal">
            <span class="lp-eyebrow">Got questions?</span>
            <h2 class="lp-section-title">We've got every answer</h2>
            <p class="lp-section-lead">Pricing, safety, altitude, payments and more — all answered on our Frequently Asked Questions page.</p>
            <a href="{{ route('faq') }}" class="lp-btn lp-btn--primary" target="_blank" rel="noopener">
                <span class="icon-question-circle" aria-hidden="true"></span> View Frequently Asked Questions
            </a>
        </div>
    </section>

    {{-- CONTACT + FORM --}}
    <section class="lp-section" id="contact">
        <div class="lp-container">
            <div class="lp-center">
                <span class="lp-eyebrow">Let's talk</span>
                <h2 class="lp-section-title">Contact information</h2>
                <p class="lp-section-lead">Reach us however you prefer — we reply fast.</p>
            </div>

            <div class="lp-contact-grid" data-reveal-group>
                <a href="https://api.whatsapp.com/send?phone=51921136755" target="_blank" rel="noopener" class="lp-contact-card lp-reveal" data-track="whatsapp_click">
                    <div class="lp-contact-card__icon"><span class="icon-whatsapp" aria-hidden="true"></span></div>
                    <div class="lp-contact-card__label">WhatsApp</div>
                    <div class="lp-contact-card__value">+51 921 136 755</div>
                </a>
                <a href="tel:+19895722905" class="lp-contact-card lp-reveal">
                    <div class="lp-contact-card__icon"><span class="icon-phone" aria-hidden="true"></span></div>
                    <div class="lp-contact-card__label">Phone / USA</div>
                    <div class="lp-contact-card__value">+1 (989) 572-2905</div>
                </a>
                <a href="mailto:info@pachamamaspirit.com" class="lp-contact-card lp-reveal">
                    <div class="lp-contact-card__icon"><span class="icon-envelope" aria-hidden="true"></span></div>
                    <div class="lp-contact-card__label">Email</div>
                    <div class="lp-contact-card__value">info@pachamamaspirit.com</div>
                </a>
                <a href="{{ route('contact') }}" class="lp-contact-card lp-reveal">
                    <div class="lp-contact-card__icon"><span class="icon-map-marker" aria-hidden="true"></span></div>
                    <div class="lp-contact-card__label">Office</div>
                    <div class="lp-contact-card__value">Cusco, Peru</div>
                </a>
            </div>

            <div class="lp-contact-cta lp-center">
                <span class="lp-eyebrow">Free quote</span>
                <h2 class="lp-section-title">Tell us about your dream trip</h2>
                <p class="lp-section-lead">Fill out the form and a Pacha Mama Spirit advisor will contact you with a tailored proposal.</p>
                <button type="button" class="lp-btn lp-btn--primary" data-open-form>
                    <span class="icon-paper-plane" aria-hidden="true"></span> Request your free quote
                </button>
            </div>
        </div>
    </section>

    {{-- FOOTER --}}
    <footer class="lp-footer">
        <div class="lp-container">
            <img src="{{ asset('img/Pacha-Mama-Spirit-Blanco.png') }}" alt="Pacha Mama Spirit" loading="lazy">
            <div class="lp-footer__links">
                <a href="{{ route('index') }}">Full website</a>
                <a href="{{ route('about') }}">About Us</a>
                <a href="{{ route('faq') }}">FAQ</a>
                <a href="{{ route('contact') }}">Contact</a>
                <a href="{{ route('terms-en') }}">Terms &amp; Conditions</a>
            </div>
            <p class="lp-footer__copy">© {{ date('Y') }} Pacha Mama Spirit — All rights reserved.</p>
        </div>
    </footer>

    {{-- Mobile sticky CTA --}}
    <div class="lp-sticky-cta">
        <a href="https://api.whatsapp.com/send?phone=51921136755" target="_blank" rel="noopener" class="lp-btn lp-btn--teal" data-track="whatsapp_click">
            <span class="icon-whatsapp" aria-hidden="true"></span> WhatsApp
        </a>
        <button type="button" class="lp-btn lp-btn--primary" data-open-form>
            <span class="icon-envelope-o" aria-hidden="true"></span> Book now
        </button>
    </div>

    {{-- MODAL: quote request form --}}
    <div class="lp-modal" id="modal-form" aria-hidden="true">
        <div class="lp-modal__backdrop" data-close-form></div>
        <div class="lp-modal__dialog lp-form-wrap" role="dialog" aria-modal="true" aria-labelledby="modal-form-title">
            <button type="button" class="lp-modal__close" data-close-form aria-label="Close">&times;</button>
            <div class="lp-center">
                <span class="lp-eyebrow">Free quote</span>
                <h2 class="lp-section-title" id="modal-form-title">Tell us about your dream trip</h2>
                <p class="lp-section-lead">Fill out the form and a Pacha Mama Spirit advisor will contact you with a tailored proposal.</p>
            </div>

            <form class="lp-form" action="{{ route('mensajeIndex') }}" method="POST">
                @csrf
                <div class="lp-form__row">
                    <div class="lp-field">
                        <label for="name-en">Full name *</label>
                        <input type="text" id="name-en" name="name" placeholder="Your name" required>
                    </div>
                    <div class="lp-field">
                        <label for="email-en">Email *</label>
                        <input type="email" id="email-en" name="email" placeholder="youremail@email.com" required>
                    </div>
                </div>
                <div class="lp-form__row">
                    <div class="lp-field">
                        <label for="phone-en">Phone / WhatsApp *</label>
                        <input type="tel" id="phone-en" name="phone" placeholder="+1 900 000 0000" required>
                    </div>
                    <div class="lp-field">
                        <label for="country-en">Nationality</label>
                        <input type="text" id="country-en" name="country" placeholder="Country of origin">
                    </div>
                </div>
                <div class="lp-form__row">
                    <div class="lp-field">
                        <label for="adults-en">Number of travelers</label>
                        <input type="number" id="adults-en" name="adults" min="1" placeholder="2">
                    </div>
                    <div class="lp-field">
                        <label for="tipo-en">Tour of interest</label>
                        <select id="tipo-en" name="tipo">
                            <option value="">Select an option</option>
                            <option value="4-days">4-day tour</option>
                            <option value="5-days">5-day tour</option>
                            <option value="7-days">7-day tour</option>
                            <option value="10-days">10-day tour</option>
                            <option value="11-days">11-day tour</option>
                            <option value="custom">Custom trip</option>
                        </select>
                    </div>
                </div>
                <div class="lp-field">
                    <label for="message-en">Message *</label>
                    <textarea id="message-en" name="message" rows="4" placeholder="Tell us your travel dates and details..." required></textarea>
                </div>
                <div class="lp-form__submit">
                    <button type="submit" class="lp-btn lp-btn--primary lp-btn--block">
                        <span class="icon-paper-plane" aria-hidden="true"></span> Send request
                    </button>
                </div>
                <p class="lp-form__note">Your data is only used to respond to your travel inquiry.</p>
            </form>
        </div>
    </div>

    @if (session('success') || session('status'))
        {{-- Confirmation overlay: shown once right after the form redirects back, then goes to the homepage --}}
        <div class="lp-success-modal" id="success-modal" data-redirect-url="{{ url('/') }}" aria-hidden="true">
            <div class="lp-modal__backdrop" data-success-close></div>
            <div class="lp-success-modal__dialog" role="alertdialog" aria-modal="true" aria-labelledby="success-modal-title">
                <button type="button" class="lp-modal__close" data-success-close aria-label="Close">&times;</button>
                <div class="lp-success-modal__icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                </div>
                <h3 class="lp-success-modal__title" id="success-modal-title">Message sent successfully!</h3>
                <p class="lp-success-modal__text">{{ session('success') ?? session('status') }}</p>
                <p class="lp-success-modal__redirect">You'll be redirected to the homepage in <span data-countdown>4</span>s...</p>
                <button type="button" class="lp-btn lp-btn--primary" data-success-redirect>Go to homepage now</button>
            </div>
        </div>
    @endif

    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
    <script src="{{ asset('js/landing-promo.js') }}?v={{ @filemtime(public_path('js/landing-promo.js')) }}" defer></script>
</body>

</html>
