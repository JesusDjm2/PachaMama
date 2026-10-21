<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('partials.gtm-head')
    @include('partials.google-ads-tag')
    <title>Tours en Perú | Pacha Mama Spirit — Reserva tu viaje</title>
    <meta name="description" content="Descubre los mejores tours de Pacha Mama Spirit en Perú: 4, 5, 7, 10 y 11 días. Machu Picchu, Camino Inca, Salkantay y más. Cotiza gratis por WhatsApp.">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ route('promo.es') }}">
    <link rel="alternate" hreflang="es" href="{{ route('promo.es') }}">
    <link rel="alternate" hreflang="en" href="{{ route('promo.en') }}">
    <link rel="alternate" hreflang="pt-br" href="{{ route('promo.pt') }}">
    <link rel="alternate" hreflang="x-default" href="{{ route('promo.en') }}">

    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Pacha Mama Spirit">
    <meta property="og:title" content="Tours en Perú | Pacha Mama Spirit">
    <meta property="og:description" content="Machu Picchu, Camino Inca, Salkantay y más. Tours de 4 a 11 días. Solicita tu cotización gratuita.">
    <meta property="og:image" content="{{ asset('img/machu-picchu-travel.webp') }}">
    <meta property="og:url" content="{{ route('promo.es') }}">
    <meta property="og:locale" content="es_PE">

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

    {{-- Barra superior: contacto + redes + idioma + acción --}}
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
                <a href="{{ route('promo.en') }}" class="lp-lang-switch" hreflang="en" lang="en">English</a>
                <a href="{{ route('promo.pt') }}" class="lp-lang-switch" hreflang="pt-br" lang="pt-BR">Português</a>
                <button type="button" class="lp-btn lp-btn--teal lp-btn--sm lp-topbar__cta" data-open-form>Reservar ahora</button>
            </div>
        </div>
    </div>

    {{-- HERO --}}
    <header class="lp-hero" id="inicio">
        <div class="lp-container">
            <img class="lp-hero__logo" src="{{ asset('img/Pacha-Mama-Spirit-Blanco.png') }}" alt="Pacha Mama Spirit" loading="eager">
            <h1 class="lp-hero__title">Vive Perú con <span>Pacha Mama Spirit</span></h1>
            <p class="lp-hero__subtitle">Tours de aventura, cultura y naturaleza en Cusco, Machu Picchu y todo el Perú. Agencia local, guías certificados y cotización 100% gratuita.</p>
            <div class="lp-hero-ctas">
                <a href="#tours" class="lp-btn lp-btn--primary">
                    <span class="icon-th-large" aria-hidden="true"></span> Ver tours disponibles
                </a>
                <button type="button" class="lp-btn lp-btn--outline" data-open-form>
                    <span class="icon-envelope-o" aria-hidden="true"></span> Solicitar información
                </button>
            </div>
            <div class="lp-hero__trust">
                <div class="lp-trust-item"><span class="icon-map-marker" aria-hidden="true"></span> Agencia local en Cusco</div>
                <div class="lp-trust-item"><span class="icon-check-circle" aria-hidden="true"></span> Guías certificados</div>
                <div class="lp-trust-item"><span class="icon-group" aria-hidden="true"></span> Grupos reducidos</div>
                <div class="lp-trust-item"><span class="icon-tripadvisor" aria-hidden="true"></span> Reseñas verificadas en TripAdvisor</div>
            </div>
        </div>
        <a href="#tours" class="lp-scroll-cue" aria-label="Bajar a la siguiente sección">
            <span class="icon-chevron-down" aria-hidden="true"></span>
        </a>
    </header>

    {{-- TOURS POR DURACIÓN --}}
    <section class="lp-section lp-section--alt" id="tours">
        <div class="lp-container lp-center">
            <span class="lp-eyebrow">Nuestros mejores tours</span>
            <h2 class="lp-section-title">Elige la duración de tu viaje</h2>
            <p class="lp-section-lead">Selecciona un botón y descubre todos los tours publicados con esa duración, directo de nuestro catálogo.</p>

            @php
                $duracionesEs = [
                    4  => ['img' => 'img/buscador/camino-inca-machu-picchu.webp', 'label' => 'Camino Inca clásico'],
                    5  => ['img' => 'img/buscador/humantay-lake-trek-salkantay.webp', 'label' => 'Trek Salkantay'],
                    7  => ['img' => 'img/buscador/vinicunca-rainbow-mountain.webp', 'label' => 'Cusco + Montaña de Colores'],
                    10 => ['img' => 'img/buscador/Titicaca-lake.webp', 'label' => 'Ruta sur completa'],
                    11 => ['img' => 'img/buscador/cusco-Pacha-mama.webp', 'label' => 'Gran tour por Perú'],
                ];
            @endphp

            <div class="lp-tours-grid" data-reveal-group>
                @foreach ($duracionesEs as $dias => $info)
                    <a href="{{ route('inicio', ['dias' => $dias]) }}" class="lp-tour-card lp-reveal" style="background-image:url('{{ asset($info['img']) }}')">
                        <span class="lp-tour-card__arrow"><span class="icon-arrow-right" aria-hidden="true"></span></span>
                        <div class="lp-tour-card__body">
                            <div class="lp-tour-card__days">{{ $dias }}<small>días</small></div>
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
                    <span class="icon-globe" aria-hidden="true"></span> Ver catálogo completo de tours
                </a>
            </div>
        </div>
    </section>

    {{-- SOBRE NOSOTROS --}}
    <section class="lp-section" id="nosotros">
        <div class="lp-container">
            <div class="lp-about" data-reveal-group>
                <div class="lp-reveal">
                    <span class="lp-eyebrow">Sobre nosotros</span>
                    <h2 class="lp-section-title">Una agencia peruana que conoce Perú de verdad</h2>
                    <p>Pacha Mama Spirit es una agencia de viajes local con base en Cusco, especializada en tours de aventura, cultura y naturaleza por todo el Perú. Trabajamos con guías profesionales y operaciones propias para ofrecerte una experiencia auténtica, segura y personalizada.</p>
                    <p>Desde el Camino Inca hasta el Salkantay, Machu Picchu, el lago Titicaca y los rincones menos conocidos del país, diseñamos cada viaje pensando en ti.</p>
                    <div class="lp-about__stats">
                        <div class="lp-stat"><div class="lp-stat__num"><span class="icon-check-circle" aria-hidden="true"></span></div><div class="lp-stat__label">Guías certificados</div></div>
                        <div class="lp-stat"><div class="lp-stat__num"><span class="icon-group" aria-hidden="true"></span></div><div class="lp-stat__label">Grupos reducidos</div></div>
                        <div class="lp-stat"><div class="lp-stat__num"><span class="icon-lock" aria-hidden="true"></span></div><div class="lp-stat__label">Pago 100% seguro</div></div>
                        <div class="lp-stat"><div class="lp-stat__num"><span class="icon-headphones" aria-hidden="true"></span></div><div class="lp-stat__label">Atención personalizada</div></div>
                    </div>
                    <div class="lp-about__cta">
                        <a href="{{ route('nosotros') }}" class="lp-btn lp-btn--teal" target="_blank" rel="noopener">Conoce más sobre nosotros</a>
                    </div>
                </div>
                <div class="lp-about__img lp-reveal">
                    <img src="{{ asset('img/buscador/cusco-Pacha-mama.webp') }}" alt="Equipo Pacha Mama Spirit en Cusco" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    {{-- PREGUNTAS FRECUENTES (banner parallax) --}}
    <section class="lp-parallax" id="preguntas" style="background-image:url('{{ asset('img/buscador/catedral-del-Cusco.webp') }}')">
        <div class="lp-parallax__overlay"></div>
        <div class="lp-container lp-center lp-parallax__content lp-reveal">
            <span class="lp-eyebrow">¿Dudas antes de viajar?</span>
            <h2 class="lp-section-title">Resolvemos todas tus preguntas</h2>
            <p class="lp-section-lead">Precios, seguridad, altura, pagos y más — todo respondido en nuestra página de preguntas frecuentes.</p>
            <a href="{{ route('preguntas') }}" class="lp-btn lp-btn--primary" target="_blank" rel="noopener">
                <span class="icon-question-circle" aria-hidden="true"></span> Ver preguntas frecuentes
            </a>
        </div>
    </section>

    {{-- CONTACTO + FORMULARIO --}}
    <section class="lp-section" id="contacto">
        <div class="lp-container">
            <div class="lp-center">
                <span class="lp-eyebrow">Hablemos</span>
                <h2 class="lp-section-title">Información de contacto</h2>
                <p class="lp-section-lead">Contáctanos por el medio que prefieras, respondemos rápido.</p>
            </div>

            <div class="lp-contact-grid" data-reveal-group>
                <a href="https://api.whatsapp.com/send?phone=51921136755" target="_blank" rel="noopener" class="lp-contact-card lp-reveal" data-track="whatsapp_click">
                    <div class="lp-contact-card__icon"><span class="icon-whatsapp" aria-hidden="true"></span></div>
                    <div class="lp-contact-card__label">WhatsApp</div>
                    <div class="lp-contact-card__value">+51 921 136 755</div>
                </a>
                <a href="tel:+19895722905" class="lp-contact-card lp-reveal">
                    <div class="lp-contact-card__icon"><span class="icon-phone" aria-hidden="true"></span></div>
                    <div class="lp-contact-card__label">Teléfono / USA</div>
                    <div class="lp-contact-card__value">+1 (989) 572-2905</div>
                </a>
                <a href="mailto:info@pachamamaspirit.com" class="lp-contact-card lp-reveal">
                    <div class="lp-contact-card__icon"><span class="icon-envelope" aria-hidden="true"></span></div>
                    <div class="lp-contact-card__label">Email</div>
                    <div class="lp-contact-card__value">info@pachamamaspirit.com</div>
                </a>
                <a href="{{ route('contactenos') }}" class="lp-contact-card lp-reveal">
                    <div class="lp-contact-card__icon"><span class="icon-map-marker" aria-hidden="true"></span></div>
                    <div class="lp-contact-card__label">Oficina</div>
                    <div class="lp-contact-card__value">Cusco, Perú</div>
                </a>
            </div>

            <div class="lp-contact-cta lp-center">
                <span class="lp-eyebrow">Cotización gratuita</span>
                <h2 class="lp-section-title">Cuéntanos sobre tu viaje soñado</h2>
                <p class="lp-section-lead">Completa el formulario y un asesor de Pacha Mama Spirit te contactará con una propuesta a tu medida.</p>
                <button type="button" class="lp-btn lp-btn--primary" data-open-form>
                    <span class="icon-paper-plane" aria-hidden="true"></span> Solicitar cotización gratuita
                </button>
            </div>
        </div>
    </section>

    {{-- FOOTER --}}
    <footer class="lp-footer">
        <div class="lp-container">
            <img src="{{ asset('img/Pacha-Mama-Spirit-Blanco.png') }}" alt="Pacha Mama Spirit" loading="lazy">
            <div class="lp-footer__links">
                <a href="{{ route('inicio') }}">Sitio web completo</a>
                <a href="{{ route('nosotros') }}">Nosotros</a>
                <a href="{{ route('preguntas') }}">Preguntas Frecuentes</a>
                <a href="{{ route('contactenos') }}">Contacto</a>
                <a href="{{ route('terminos') }}">Términos &amp; Condiciones</a>
            </div>
            <p class="lp-footer__copy">© {{ date('Y') }} Pacha Mama Spirit — Todos los derechos reservados.</p>
        </div>
    </footer>

    {{-- CTA fija móvil --}}
    <div class="lp-sticky-cta">
        <a href="https://api.whatsapp.com/send?phone=51921136755" target="_blank" rel="noopener" class="lp-btn lp-btn--teal" data-track="whatsapp_click">
            <span class="icon-whatsapp" aria-hidden="true"></span> WhatsApp
        </a>
        <button type="button" class="lp-btn lp-btn--primary" data-open-form>
            <span class="icon-envelope-o" aria-hidden="true"></span> Reservar
        </button>
    </div>

    {{-- MODAL: formulario de cotización --}}
    <div class="lp-modal" id="modal-formulario" aria-hidden="true">
        <div class="lp-modal__backdrop" data-close-form></div>
        <div class="lp-modal__dialog lp-form-wrap" role="dialog" aria-modal="true" aria-labelledby="modal-formulario-title">
            <button type="button" class="lp-modal__close" data-close-form aria-label="Cerrar">&times;</button>
            <div class="lp-center">
                <span class="lp-eyebrow">Cotización gratuita</span>
                <h2 class="lp-section-title" id="modal-formulario-title">Cuéntanos sobre tu viaje soñado</h2>
                <p class="lp-section-lead">Completa el formulario y un asesor de Pacha Mama Spirit te contactará con una propuesta a tu medida.</p>
            </div>

            <form class="lp-form" action="{{ route('mensajeIndex') }}" method="POST">
                @csrf
                <div class="lp-form__row">
                    <div class="lp-field">
                        <label for="name-es">Nombre completo *</label>
                        <input type="text" id="name-es" name="name" placeholder="Tu nombre" required>
                    </div>
                    <div class="lp-field">
                        <label for="email-es">Correo electrónico *</label>
                        <input type="email" id="email-es" name="email" placeholder="tucorreo@email.com" required>
                    </div>
                </div>
                <div class="lp-form__row">
                    <div class="lp-field">
                        <label for="phone-es">Teléfono / WhatsApp *</label>
                        <input type="tel" id="phone-es" name="phone" placeholder="+51 900 000 000" required>
                    </div>
                    <div class="lp-field">
                        <label for="country-es">Nacionalidad</label>
                        <input type="text" id="country-es" name="country" placeholder="País de origen">
                    </div>
                </div>
                <div class="lp-form__row">
                    <div class="lp-field">
                        <label for="adults-es">N.º de viajeros</label>
                        <input type="number" id="adults-es" name="adults" min="1" placeholder="2">
                    </div>
                    <div class="lp-field">
                        <label for="tipo-es">Tour de interés</label>
                        <select id="tipo-es" name="tipo">
                            <option value="">Selecciona una opción</option>
                            <option value="4-dias">Tour de 4 días</option>
                            <option value="5-dias">Tour de 5 días</option>
                            <option value="7-dias">Tour de 7 días</option>
                            <option value="10-dias">Tour de 10 días</option>
                            <option value="11-dias">Tour de 11 días</option>
                            <option value="a-medida">Viaje a medida</option>
                        </select>
                    </div>
                </div>
                <div class="lp-field">
                    <label for="message-es">Mensaje *</label>
                    <textarea id="message-es" name="message" rows="4" placeholder="Cuéntanos las fechas y detalles de tu viaje..." required></textarea>
                </div>
                <div class="lp-form__submit">
                    <button type="submit" class="lp-btn lp-btn--primary lp-btn--block">
                        <span class="icon-paper-plane" aria-hidden="true"></span> Enviar solicitud
                    </button>
                </div>
                <p class="lp-form__note">Tus datos se usan únicamente para responder tu consulta de viaje.</p>
            </form>
        </div>
    </div>

    @if (session('success') || session('status'))
        {{-- Overlay de confirmación: se muestra una sola vez tras enviar el formulario y redirige al inicio --}}
        <div class="lp-success-modal" id="success-modal" data-redirect-url="{{ url('/') }}" aria-hidden="true">
            <div class="lp-modal__backdrop" data-success-close></div>
            <div class="lp-success-modal__dialog" role="alertdialog" aria-modal="true" aria-labelledby="success-modal-title">
                <button type="button" class="lp-modal__close" data-success-close aria-label="Cerrar">&times;</button>
                <div class="lp-success-modal__icon">
                    <svg viewBox="0 0 24 24" fill="none" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"></polyline></svg>
                </div>
                <h3 class="lp-success-modal__title" id="success-modal-title">¡Mensaje enviado exitosamente!</h3>
                <p class="lp-success-modal__text">{{ session('success') ?? session('status') }}</p>
                <p class="lp-success-modal__redirect">Serás redirigido al inicio en <span data-countdown>4</span>s...</p>
                <button type="button" class="lp-btn lp-btn--primary" data-success-redirect>Ir al inicio ahora</button>
            </div>
        </div>
    @endif

    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>
    <script src="{{ asset('js/landing-promo.js') }}?v={{ @filemtime(public_path('js/landing-promo.js')) }}" defer></script>
</body>

</html>
