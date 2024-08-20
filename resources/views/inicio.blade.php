@extends('layouts.app')
@section('titulo', 'Pacha Mama Spirit || Agencia de viaje para Perú')
@section('metas')
    <meta name="keywords"
        content="Book Peru, Book Machu Picchu, machu Picchu, Travel peru, Travel to Machu Picchu, Inca Trail, Ica trail to Machu Picchu">
    <link rel="canonical" href="https://pachamamaspirit.com/inicio">
    <meta name="description"
        content="Pacha Mama Spirit It's a travel agency to visit and do tourism in Peru. Travel around Peru and get to know its culture, gastronomy and History">
    <meta name="image_src" content="https://pachamamaspirit.com/img/panoramico/Recorrido-Cusco-Machu-Picchu.webp">

    <meta name="og_image" content="https://pachamamaspirit.com/img/panoramico/Recorrido-Cusco-Machu-Picchu.webp">
    <meta name="og_secureImage" content="https://pachamamaspirit.com/img/panoramico/Recorrido-Cusco-Machu-Picchu.webp">

    <meta property="og:title" content="Pacha Mama Spirit | Travel Agency Perú">
    <meta property="og:description"
        content="Pacha Mama Spirit It's a travel agency to visit and do tourism in Peru. Travel around Peru and get to know its culture, gastronomy and History">
    <meta property="og:url" content="https://pachamamaspirit.com/inicio">
    <meta name="twitter:card" content="summary">
    <meta name="robots" content="index,follow">
@endsection
@section('content')
    <div class="hero">
        <!------- formulario---------->
        <div class="container">
            <div class="row">
                <div class="col-12 mx-auto">
                    <div class="form-index">
                        <div class="contenidoindex">
                            <h1 style="color: #fff;text-shadow:3px 3px 4px rgb(30 53 52)" class="text-center">Descubre los
                                lugares mas impresionantes que tiene
                                Perú
                            </h1>
                            <p style="color: #fff;text-shadow:3px 3px 4px rgb(30 53 52)" class="text-center">Walks,
                                gastronomy, archaeological sites, nature
                                reserves, customs, traditions, landscapes and much more...
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
                <div class="col-lg-12">
                    <h1 class="h1-index">
                        <beige>Pacha Mama Spirit</beige>
                    </h1>
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
                    <div class="col-lg-12 mb-3">
                        <h3 class="text-center">Lo que Pacha Mama Spirit ofrece:</h3>
                        <div class="linea mb-4 mt-3"></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="pt-4 d-flex flex-column align-items-center card-new" style="border:1px solid grey">
                                <img src="{{ asset('img/thumb/local-tour-guide-in-Peru.png') }}" height="100px"
                                    alt="Local Tour guide" loading="lazy">
                                <p class="font-weight-bold mt-3">Guías locales</p>
                                <div class="linea2-blogs" style="margin-bottom: 0px"></div>
                                <p class="text-justify m-3" style="font-size: 14px">Guías locales expertos y conocedores de
                                    la riqueza del pasado de la cultura Inca.</p>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="pt-4 d-flex flex-column align-items-center card-new" style="border:1px solid grey">
                                <img src="{{ asset('img/thumb/eco-friendly-company.png') }}" height="100px"
                                    alt="Local Tour guide" loading="lazy">
                                <p class="font-weight-bold mt-3">Turismo sostenible</p>
                                <div class="linea2-blogs" style="margin-bottom: 0px"></div>
                                <p class="text-justify m-3" style="font-size: 14px">Estamos orgullosos de ofrecer
                                    experiencias que combinan lo natural con prácticas responsables que respetan el medio
                                    ambiente y las comunidades locales.</p>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="pt-4 d-flex flex-column align-items-center card-new" style="border:1px solid grey">
                                <img src="{{ asset('img/thumb/small-groups.png') }}" height="100px" alt="Local Tour guide"
                                    loading="lazy">
                                <p class="font-weight-bold mt-3">Grupos pequeños</p>
                                <div class="linea2-blogs" style="margin-bottom: 0px"></div>
                                <p class="text-justify m-3" style="font-size: 14px">Puedes pasar más tiempo con el guía y
                                    escuchar todo lo que tiene que decir. Un recorrido personalizado.</p>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="pt-4 d-flex flex-column align-items-center card-new" style="border:1px solid grey">
                                <img src="{{ asset('img/thumb/food-on-trail.png') }}" height="100px" alt="Local Tour guide"
                                    loading="lazy">
                                <p class="font-weight-bold mt-3">Comida en caminatas</p>
                                <div class="linea2-blogs" style="margin-bottom: 0px"></div>
                                <p class="text-justify m-3" style="font-size: 14px">Delight your taste buds with our
                                    delicious trail food.We ensure
                                    you have flavorful sustenance during your adventures.</p>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="pt-4 d-flex flex-column align-items-center card-new" style="border:1px solid grey">
                                <img src="{{ asset('img/thumb/legally-licensed.png') }}" height="100px"
                                    alt="Local Tour guide" loading="lazy">
                                <p class="font-weight-bold mt-3">Licencia registrada</p>
                                <div class="linea2-blogs" style="margin-bottom: 0px"></div>
                                <p class="text-justify m-3" style="font-size: 14px">Nuestra agencia de viajes en Perú
                                    cuenta con licencia y permisos en regla, brindando servicios turísticos confiables y de
                                    calidad.</p>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="pt-4 d-flex flex-column align-items-center card-new"
                                style="border:1px solid grey">
                                <img src="{{ asset('img/thumb/camping-equipment.png') }}" height="100px"
                                    alt="Local Tour guide" loading="lazy">
                                <p class="font-weight-bold mt-3">Equipo de campamento</p>
                                <div class="linea2-blogs" style="margin-bottom: 0px"></div>
                                <p class="text-justify m-3" style="font-size: 14px">Ofrecemos una amplia selección de
                                    equipos de campamento de alta calidad para garantizar una experiencia cómoda y segura en
                                    la naturaleza.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="space"></div>
                <div class="col-lg-12">
                    <h2 class="h2-tierras">Top tours mas vendidos:</h2>
                </div>

                <!-----Prueba--->
                @foreach ($tours->take(8) as $tour)
                    <div class="col-lg-3 col-md-6">
                        <div class="card card-new" style="width: 18rem;">
                            <a href="{{ route('tours.show', $tour->slug) }}">
                                <img class="card-img-top" src="{{ $tour->img }}" alt="Camino Inca 4 dias"
                                    loading="lazy">
                            </a>
                            <div class="card-body text-center">
                                <h5 class="card-titulo">{{ $tour->nombre }}</h5>
                                <p class="text-card">{{ $tour->descripcion }}</p>
                                <div class="enlacesCategoria">
                                    @if (Str::contains($tour->categoria, 'machupicchu'))
                                        <p style="display:none">
                                            {{ $mapi = 'Machu Picchu' }}
                                        </p>
                                        <a class="enlaceMapi" href="{{ route('mapi') }}">{{ $mapi }}
                                        </a>
                                    @endif
                                    @if (Str::contains($tour->categoria, 'hikes'))
                                        <p style="display:none">
                                            {{ $hike = 'Caminata' }}
                                        </p>
                                        <a class="enlaceHike" href="{{ route('caminata') }}">
                                            {{ $hike }}</a>
                                    @endif
                                    @if (Str::contains($tour->categoria, 'around'))
                                        <p style="display: none">
                                            {{ $peru = 'Perú' }}
                                        </p>
                                        <a class="enlaceAround" href="{{ route('peru') }}">
                                            {{ $peru }}
                                        </a>
                                    @endif
                                    @if (Str::contains($tour->categoria, 'luxury'))
                                        <p style="display:none">
                                            {{ $luxury = 'Privado' }}
                                        </p>
                                        <a class="enlaceLuxury" href="{{ route('luxury') }}"> {{ $luxury }}</a>
                                    @endif
                                    @if (Str::contains($tour->categoria, 'fullday'))
                                        <p style="display:none">
                                            {{ $fullday = 'Full Day' }}
                                        </p>
                                        <a class="enlaceFullday" href="{{ route('fullday') }}"> {{ $fullday }}</a>
                                    @endif
                                </div>
                                <div class="row iconos-tours">
                                    <div class="col-6">
                                        <span class="icon-clock-o" style="float:right"> {{ $tour->dias }}
                                            {{ $tour->dias == 1 ? 'día' : 'días' }}</span>
                                    </div>
                                    <div class="col-6">
                                        <span class="icon-usd" style="float:left">{{ $tour->precio }}.00</span>
                                    </div>
                                    <div class="col-12 pt-2">
                                        <span class="icon-map-marker"> {{ $tour->ubicacion }}</span>
                                    </div>
                                </div>
                                <a href="{{ route('tours.show', $tour->slug) }}" class="boton-card">Más detalles</a>
                            </div>
                        </div>
                    </div>
                @endforeach

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
                            <div class="card card-new" style="width: 18rem;">
                                <a href="{{ route('tours.show', ['id' => $tour->id, 'slug' => $tour->slug]) }}">
                                    <img class="card-img-top" src="{{ $tour->img }}" alt="Camino Inca 4 dias"
                                        loading="lazy">
                                </a>
                                <div class="card-body text-center">
                                    <h5 class="card-titulo">{{ $tour->nombre }}</h5>
                                    <p class="text-card">{{ $tour->descripcion }}</p>
                                    <div class="enlacesCategoria">
                                        @if (Str::contains($tour->categoria, 'machupicchu'))
                                            <p style="display:none">
                                                {{ $mapi = 'Machu Picchu' }}
                                            </p>
                                            <a class="enlaceMapi" href="{{ route('mapi') }}">{{ $mapi }}
                                            </a>
                                        @endif
                                        @if (Str::contains($tour->categoria, 'hikes'))
                                            <p style="display:none">
                                                {{ $hike = 'Caminata' }}
                                            </p>
                                            <a class="enlaceHike" href="{{ route('caminata') }}">
                                                {{ $hike }}</a>
                                        @endif
                                        @if (Str::contains($tour->categoria, 'around'))
                                            <p style="display: none">
                                                {{ $peru = 'Perú' }}
                                            </p>
                                            <a class="enlaceAround" href="{{ route('peru') }}">
                                                {{ $peru }}
                                            </a>
                                        @endif
                                        @if (Str::contains($tour->categoria, 'luxury'))
                                            <p style="display:none">
                                                {{ $luxury = 'Privado' }}
                                            </p>
                                            <a class="enlaceLuxury" href="{{ route('luxury') }}">
                                                {{ $luxury }}</a>
                                        @endif
                                        @if (Str::contains($tour->categoria, 'fullday'))
                                            <p style="display:none">
                                                {{ $fullday = 'Full Day' }}
                                            </p>
                                            <a class="enlaceFullday" href="{{ route('fullday') }}">
                                                {{ $fullday }}</a>
                                        @endif
                                    </div>

                                    <div class="row iconos-tours">
                                        <div class="col-6">
                                            <span class="icon-clock-o" style="float: right">
                                                {{ $tour->dias }} {{ $tour->dias == 1 ? 'día' : 'días' }}</span>
                                        </div>
                                        <div class="col-6">
                                            <span class="icon-usd" style="float:left"> {{ $tour->precio }}.00</span>
                                        </div>
                                        <div class="col-12 pt-2">
                                            <span class="icon-map-marker"> {{ $tour->ubicacion }}</span>
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
    <section>
        <div class="container mt-3">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="h1-responsive font-weight-bold text-center my-4">Contact Pacha Mama Spirit team</h2>
                    <p class="text-center w-responsive mx-auto mb-5">
                        ¿Tiene usted alguna pregunta? Por favor, no dude en contáctenos directamente, nuestro equipo le
                        responderá en la mayor brevedad posible para poder ayudarle.
                    </p>
                    <form id="contact-form" name="contact-form" action="{{ route('mensajeIndex') }}" method="POST">
                        @csrf
                        <div class="row formTransparent">
                            <div class="col-md-6">
                                <div class="md-form mb-4">
                                    <input type="text" id="name" name="name" class="form-control"
                                        placeholder="Nombre:" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="md-form mb-4">
                                    <input type="text" id="email" name="email" class="form-control"
                                        placeholder="Email:" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="md-form mb-4">
                                    <input type="text" id="phone" name="phone" class="form-control"
                                        placeholder="Teléfono:" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="md-form mb-4">
                                    <input type="text" id="country" name="country" class="form-control"
                                        placeholder="Nacionalidad:">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="md-form mb-4">
                                    <input type="number" id="adults" name="adults" class="form-control"
                                        placeholder="Adultos:">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="md-form mb-4">
                                    <select name="tipo" id="tipo" class="form-control md">
                                        <option selected>Opciones de viaje:</option>
                                        <option value="familia">Viaje en familia</option>
                                        <option value="pareja">Viaje en pareja</option>
                                        <option value="amigos">Con amigos</option>
                                        <option value="grupo">Viaje en grupo</option>
                                        <option value="privado">Viaje privado</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12 mt-2">
                                <div class="md-form">
                                    <textarea type="text" placeholder="Escriba acá su mensaje..." id="message" name="message" rows="2"
                                        class="form-control md-textarea" required></textarea>
                                </div>
                            </div>
                            <div class="col-md-12 mt-2">
                                <div class="text-center">
                                    <button class="btnTransparent" type="submit">Enviar</button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection
