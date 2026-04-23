@extends('layouts.app')
@section('titulo', 'Tours a Perú — Machu Picchu, Cusco, Camino Inca | Pacha Mama Spirit')
@section('metas')
    <meta name="description" content="Agencia de viajes en Perú especializada en tours a Machu Picchu, Camino Inca, Cusco y aventuras únicas. Más de 20 años de experiencia. Reserva hoy con Pacha Mama Spirit.">
    <meta name="keywords" content="tours Peru, tours Machu Picchu, Camino Inca, agencia de viajes Peru, tours Cusco, viajes Peru, Pacha Mama Spirit, trekking Peru, tour operador Peru">
    <link rel="canonical" href="https://pachamamaspirit.com/inicio">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="es_PE">
    <meta property="og:title" content="Tours a Perú — Machu Picchu, Cusco, Camino Inca | Pacha Mama Spirit">
    <meta property="og:description" content="Agencia de viajes en Perú especializada en tours a Machu Picchu, Camino Inca, Cusco y aventuras únicas. Más de 20 años de experiencia.">
    <meta property="og:url" content="https://pachamamaspirit.com/inicio">
    <meta property="og:image" content="https://pachamamaspirit.com/img/panoramico/Recorrido-Cusco-Machu-Picchu.webp">
    <meta property="og:image:secure_url" content="https://pachamamaspirit.com/img/panoramico/Recorrido-Cusco-Machu-Picchu.webp">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Tours a Perú — Machu Picchu, Cusco, Camino Inca | Pacha Mama Spirit">
    <meta name="twitter:description" content="Agencia de viajes en Perú especializada en tours a Machu Picchu, Camino Inca, Cusco y aventuras únicas.">
    <meta name="twitter:image" content="https://pachamamaspirit.com/img/panoramico/Recorrido-Cusco-Machu-Picchu.webp">
    <meta name="robots" content="index,follow">
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebPage",
      "@id": "https://pachamamaspirit.com/inicio",
      "url": "https://pachamamaspirit.com/inicio",
      "name": "Tours a Perú — Machu Picchu, Cusco, Camino Inca | Pacha Mama Spirit",
      "description": "Agencia de viajes en Perú especializada en tours a Machu Picchu, Camino Inca, Cusco y aventuras únicas.",
      "inLanguage": "es-PE",
      "isPartOf": { "@id": "https://pachamamaspirit.com/#website" },
      "about": { "@id": "https://pachamamaspirit.com/#organization" },
      "breadcrumb": {
        "@type": "BreadcrumbList",
        "itemListElement": [
          { "@type": "ListItem", "position": 1, "name": "Inicio", "item": "https://pachamamaspirit.com/inicio" }
        ]
      }
    }
    </script>
@endsection
@section('content')
    <div class="hero">
        <!------- formulario---------->
        <div class="container">
            <div class="row">
                <div class="col-12 mx-auto">
                    <div class="form-index">
                        <div class="contenidoindex">
                            <h1 class="text-center hero-index-title">Descubre los
                                lugares mas impresionantes que tiene
                                Perú
                            </h1>
                            <p class="text-center hero-index-lead">Caminatas,
                                gastronomía, sitios arqueológicos, reservas naturales,
                                costumbres, tradiciones, paisajes y mucho más...
                            </p>
                            <a href="{{ route('caminata') }}">Caminatas</a>
                            <a href="{{ route('luxury') }}">Lujo</a>
                            <a href="{{ route('mapi') }}">Machu Picchu</a>
                            <a href="{{ route('peru') }}">Alrededor de Perú</a>
                        </div>
                        <a href="#pachamama">
                            <div class="circulo">
                                <i class="icon-chevron-down desvanecer"></i>
                                <i class="icon-chevron-down"></i>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!--------Fin formulario ---------->
    </div>
    <section>
        <div class="container" id="pachamama">
            <div class="row justify-content-center">
                <div class="col-lg-12 text-center">
                    <h1 class="h1-index">
                        <span class="text-brand">Pacha Mama Spirit</span>
                    </h1>
                    <div class="linea mb-4"></div>
                    <p>
                        <strong>Pacha Mama Spirit</strong> es una agencia de viajes peruana y nacida en Cusco, que se le
                        conoce como el ombligo del mundo, antigua capital del imperio Inca.
                        Nuestro equipo ha desarrollado una lista de tours que permite al visitante disfrutar lo mejor que
                        Perú tiene para ofrecer como aventura, cultura, caminatas, historia, gastronomia, exclusividad y un
                        equipo de Pacha Mama Spirit, que ama Perú y todo lo que nos brinda.
                        Perú tiene una de las biodiversidades más ricas en el mundo, esto gracias a la
                        coordillera
                        de los andes, que atraviesa el país formando costa, sierra y selva en su camino, y con cada region
                        natural trae consigo otra considerable cantidad de microclimas. Esto convierte a Perú en un país
                        rico en diversidad de productos naturales, paisajes únicos, y una extensa gastronomia entre
                        otros.<br><br>
                        Perú tambien fué la cede principal del <strong>Tahuantinsuyo</strong>, que fue erigido por
                        los <strong>Incas</strong>, la cultura más desarrollada y grande
                        de suramerica. Estos hombres edificaron fortalezas hechas de piedras gigantescas, que han perdurado
                        en el tiempo y
                        hoy forman parte de la actualidad, conservando su grandeza. Perú de esta manera se convierte en un
                        país que tiene mucho que ofrecer a sus
                        visitantes.
                    </p>
                </div>
                <div class="col-lg-12 mt-3">
                    <div class="col-lg-12 mb-3 text-center">
                        <h3>Lo que Pacha Mama Spirit ofrece:</h3>
                        <div class="linea mb-4 mt-2"></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="feature-card">
                                <img src="{{ asset('img/thumb/local-tour-guide-in-Peru.png') }}" alt="Guías locales" loading="lazy">
                                <p class="feature-title">Guías locales</p>
                                <div class="linea2-blogs"></div>
                                <p class="feature-desc">Guías locales expertos y conocedores de la riqueza del pasado de la cultura Inca.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="feature-card">
                                <img src="{{ asset('img/thumb/eco-friendly-company.png') }}" alt="Turismo sostenible" loading="lazy">
                                <p class="feature-title">Turismo sostenible</p>
                                <div class="linea2-blogs"></div>
                                <p class="feature-desc">Experiencias que combinan lo natural con prácticas responsables que respetan el medioambiente y las comunidades locales.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="feature-card">
                                <img src="{{ asset('img/thumb/small-groups.png') }}" alt="Grupos pequeños" loading="lazy">
                                <p class="feature-title">Grupos pequeños</p>
                                <div class="linea2-blogs"></div>
                                <p class="feature-desc">Más tiempo con el guía y una atención personalizada en cada recorrido.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="feature-card">
                                <img src="{{ asset('img/thumb/food-on-trail.png') }}" alt="Comida en caminatas" loading="lazy">
                                <p class="feature-title">Comida en caminatas</p>
                                <div class="linea2-blogs"></div>
                                <p class="feature-desc">Deliciosa comida en ruta, sabrosa y nutritiva durante todas tus aventuras.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="feature-card">
                                <img src="{{ asset('img/thumb/legally-licensed.png') }}" alt="Licencia registrada" loading="lazy">
                                <p class="feature-title">Licencia registrada</p>
                                <div class="linea2-blogs"></div>
                                <p class="feature-desc">Agencia con licencia y permisos en regla, brindando servicios turísticos confiables y de calidad.</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 mb-4">
                            <div class="feature-card">
                                <img src="{{ asset('img/thumb/camping-equipment.png') }}" alt="Equipo de campamento" loading="lazy">
                                <p class="feature-title">Equipo de campamento</p>
                                <div class="linea2-blogs"></div>
                                <p class="feature-desc">Equipos de alta calidad para garantizar una experiencia cómoda y segura en la naturaleza.</p>
                            </div>
                        </div>
                    </div>
                    @if (isset($blogsRecientes) && $blogsRecientes->isNotEmpty())
                        <div class="home-blog-rail w-100 mt-4">
                            <div class="home-blog-rail__head text-center mb-2">
                                <h2 class="h2-tierras">Últimas entradas del blog</h2>
                                <p class="home-blog-rail__lead">Tips, cultura e inspiración para tu viaje a Perú — desliza en el móvil</p>
                            </div>
                            <div class="home-blog-rail__track" role="region" aria-label="Últimas entradas del blog">
                                @foreach ($blogsRecientes as $entrada)
                                    @php
                                        $imgEntrada = $entrada->img ?? '';
                                        $srcEntrada = \Illuminate\Support\Str::startsWith($imgEntrada, ['http://', 'https://'])
                                            ? $imgEntrada
                                            : asset(ltrim($imgEntrada, '/'));
                                    @endphp
                                    <article class="home-blog-rail__card">
                                        <a href="{{ route('blog.show', $entrada->slug) }}" class="home-blog-rail__link">
                                            <div class="home-blog-rail__media" role="img" aria-label="{{ $entrada->nombre }}">
                                                <img src="{{ $srcEntrada }}" alt="" class="home-blog-rail__media-img" width="400" height="200" loading="lazy">
                                            </div>
                                            <div class="home-blog-rail__body">
                                                <span class="home-blog-rail__accent" aria-hidden="true"></span>
                                                <time class="home-blog-rail__date" datetime="{{ $entrada->created_at->toIso8601String() }}">{{ $entrada->created_at->format('d/m/Y') }}</time>
                                                <h3 class="home-blog-rail__title">{{ $entrada->nombre }}</h3>
                                                <p class="home-blog-rail__excerpt">{{ Str::limit(strip_tags($entrada->descripcion ?? ''), 96) }}</p>
                                                <span class="home-blog-rail__go" aria-hidden="true">Leer →</span>
                                            </div>
                                        </a>
                                    </article>
                                @endforeach
                            </div>
                            <div class="text-center mt-2">
                                <a href="{{ route('listado') }}" class="home-blog-rail__btn-all">Ver todo el blog</a>
                            </div>
                        </div>
                    @endif
                </div>
                <div class="space"></div>
                <div class="col-12" id="home-tours-section">
                    <h2 class="h2-tierras">Top tours mas vendidos:</h2>
                    @include('partials.home-tour-filters')
                    <div class="row g-3 home-tours-results" id="home-tours-results" aria-live="polite">
                        @include('partials.home-tours-grid-es')
                    </div>
                </div>

                <div class="space"></div>
            </div>
        </div>
    </section>
    <!-----Prueba full img------>
    <div class="full-img">
        <div class="full-img-card uno">
            <div class="oscuro">
                <h5>Caminatas</h5>
                <p>Excursiones con caminatas por Perú</p>
                <a href="{{ route('caminata') }}">Ver Tours</a>
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
                <a href="{{ route('peru') }}">Ver Tours</a>
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
    <!------Fin Full img---------->
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="space"></div>
                <div class="col-lg-12">
                    <h2 class="h2-tierras">Perú Aventura:</h2>
                    <p>
                        Pacha Mama Spirit es una agencia de viajes con bastante experiencia en viajes de aventura y
                        caminatas por las principales rutas turisticas que Perú tiene para ofrecer. Ya que los viajeros se
                        mueven a menudo a pie por las zonas rurales, el senderismo les brinda una vista de cerca de paisajes
                        increíbles durante su recorrido. El Camino Inca, que lleva a Machu Picchu, es una de las mejores
                        caminatas que existe en Suraemrica y debe ser una de tus opciones principales de senderismo.
                    </p>
                </div>
                <div class="space"></div>
                @foreach ($tours->filter(function ($tour) {
                return Str::contains($tour->categoria, 'hikes');
            })->take(4) as $tour)
                    @if (Str::contains($tour->categoria, 'hikes'))
                        <div class="col-lg-3 col-md-6">
                            <div class="card card-new">
                                <a href="{{ route('tours.show', ['id' => $tour->id, 'slug' => $tour->slug]) }}">
                                    <img class="card-img-top" src="{{ $tour->img }}" alt="Camino Inca 4 dias"
                                        loading="lazy">
                                </a>
                                <div class="card-body text-center">
                                    <h5 class="card-titulo">{{ $tour->nombre }}</h5>
                                    <p class="text-card">{{ $tour->descripcion }}</p>
                                    <div class="enlacesCategoria">
                                        @if (Str::contains($tour->categoria, 'machupicchu'))
                                            <p class="d-none">
                                                {{ $mapi = 'Machu Picchu' }}
                                            </p>
                                            <a class="enlaceMapi" href="{{ route('mapi') }}">{{ $mapi }}
                                            </a>
                                        @endif
                                        @if (Str::contains($tour->categoria, 'hikes'))
                                            <p class="d-none">
                                                {{ $hike = 'Caminata' }}
                                            </p>
                                            <a class="enlaceHike" href="{{ route('caminata') }}">
                                                {{ $hike }}</a>
                                        @endif
                                        @if (Str::contains($tour->categoria, 'around'))
                                            <p class="d-none">
                                                {{ $peru = 'Perú' }}
                                            </p>
                                            <a class="enlaceAround" href="{{ route('peru') }}">
                                                {{ $peru }}
                                            </a>
                                        @endif
                                        @if (Str::contains($tour->categoria, 'luxury'))
                                            <p class="d-none">
                                                {{ $luxury = 'Privado' }}
                                            </p>
                                            <a class="enlaceLuxury" href="{{ route('luxury') }}">
                                                {{ $luxury }}</a>
                                        @endif
                                        @if (Str::contains($tour->categoria, 'fullday'))
                                            <p class="d-none">
                                                {{ $fullday = 'Full Day' }}
                                            </p>
                                            <a class="enlaceFullday" href="{{ route('fullday') }}">
                                                {{ $fullday }}</a>
                                        @endif
                                    </div>

                                    <div class="row iconos-tours small text-secondary">
                                        <div class="col-6 text-end">
                                            <span class="icon-clock-o" aria-hidden="true"></span>
                                                {{ $tour->dias }} {{ $tour->dias == 1 ? 'día' : 'días' }}
                                        </div>
                                        <div class="col-6 text-start">
                                            <span class="icon-usd" aria-hidden="true"></span> {{ $tour->precio }}.00
                                        </div>
                                        <div class="col-12 pt-2 text-center">
                                            <span class="icon-map-marker" aria-hidden="true"></span> {{ $tour->ubicacion }}
                                        </div>
                                    </div>
                                    <a href="{{ route('tours.show', ['id' => $tour->id, 'slug' => $tour->slug]) }}"
                                        class="boton-card">Más detalles</a>

                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
                <div class="space"></div>
            </div>
        </div>
    </section>
    <section class="section-home-cta py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4 mb-4 mb-md-0 text-md-start text-center">
                    <h2 class="text-md-start text-center">Contáctanos</h2>
                    <p class="mt-3 mb-0">¿Tienes alguna pregunta o quieres planear tu viaje? Nuestro equipo te responderá en pocas horas.</p>
                    <div class="mt-4 text-md-start text-center">
                        <p class="mb-2"><span class="icon-whatsapp mr-2 contact-line-icon" aria-hidden="true"></span> +51 921 136 755</p>
                        <p class="mb-2"><span class="icon-envelope mr-2 contact-line-icon" aria-hidden="true"></span> info@pachamamaspirit.com</p>
                        <p class="mb-0"><span class="icon-map-marker mr-2 contact-line-icon" aria-hidden="true"></span> Cusco, Perú</p>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="home-contact-card">
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
                                        <textarea placeholder="Tu mensaje..." id="message" name="message" rows="3" class="form-control" required></textarea>
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
