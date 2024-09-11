@extends('layouts.appen')
@section('titulo', 'Pacha Mama Spirit | Travel Agency for Perú')
@section('metas')
    <meta name="keywords"
        content="Book Peru, Book Machu Picchu, machu Picchu, Travel peru, Travel to Machu Picchu, Inca Trail, Ica trail to Machu Picchu">
    <link rel="canonical" href="https://pachamamaspirit.com">
    <meta name="description"
        content="Pacha Mama Spirit It's a travel agency to visit and do tourism in Peru. Travel around Peru and get to know its culture, gastronomy and History">
    <meta name="image_src" content="https://pachamamaspirit.com/img/panoramico/Recorrido-Cusco-Machu-Picchu.webp">
    <meta name="og_image" content="https://pachamamaspirit.com/img/panoramico/Recorrido-Cusco-Machu-Picchu.webp">
    <meta name="og_secureImage" content="https://pachamamaspirit.com/img/panoramico/Recorrido-Cusco-Machu-Picchu.webp">
    <meta property="og:title" content="Pacha Mama Spirit | Travel Agency Perú">
    <meta property="og:description"
        content="Pacha Mama Spirit It's a travel agency to visit and do tourism in Peru. Travel around Peru and get to know its culture, gastronomy and History">
    <meta property="og:url" content="https://pachamamaspirit.com">
    <meta name="twitter:card" content="summary">
    <meta name="robots" content="index,follow">
@endsection
@section('content')
    <div class="hero">
        <div class="container">
            <div class="row">
                <div class="col-12 mx-auto">
                    <div class="form-index">
                        <div class="contenidoindex">
                            <h1 style="color: #fff;text-shadow:3px 3px 4px rgb(30 53 52)" class="text-center">
                                Discover the most impressive places that Peru has
                            </h1>
                            <p style="color: #fff;text-shadow:3px 3px 4px rgb(30 53 52)" class="text-center">
                                Walks, gastronomy, archaeological sites, nature reserves, customs, traditions, landscapes
                                and much more...
                            </p>
                            <a href="{{ route('hikes') }}">Hikes</a>
                            <a href="{{ route('around') }}">luxury</a>
                            <a href="{{ route('mapien') }}">Machu Picchu</a>
                            <a href="{{ route('around') }}">Around Perú</a>
                        </div>
                        <a href="#pachamama">
                            <div class="circulo">
                                <i class="icon-chevron-down desvanecer"></i>
                                <i class="icon-chevron-down"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-12 mt-2">
                    @if (session('success'))
                        <div class="text-success text-center">
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                        </div>
                    @endif
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
                    <h2 class="h1-index">
                        <beige>Pacha Mama Spirit</beige>
                    </h2>
                    <p>
                        <strong>Pacha Mama Spirit</strong> is a Peruvian travel agency born in Cusco, which is known as the
                        navel of the
                        world, the ancient capital of the <strong>Inca empire</strong>. Our team has developed a list of
                        tours that allows
                        the visitor to enjoy the best that Peru has to offer such as adventure, culture, hiking, history,
                        gastronomy, exclusivity and a Pacha Mama Spirit team, who loves <strong>Peru</strong> and everything
                        it offers us.
                        Peru has one of the richest biodiversities in the world, thanks to the Andes mountain range, which
                        crosses the country forming coast, mountains and jungle on its way, and with each natural region
                        brings with it another considerable amount of microclimates. This makes Peru a country rich in
                        diversity of natural products, unique landscapes, and an extensive gastronomy among others.<br><br>
                        Peru was also the main site of the Tahuantinsuyo, which was erected by the Incas, the largest and
                        most developed culture in South America. These men built fortresses made of gigantic stones, which
                        have endured over time and today are part of the present day, conserving their greatness. In this
                        way, Peru becomes a country that has a lot to offer its visitors.
                    </p>
                </div>
                <div class="col-lg-12 mt-3">
                    <div class="col-lg-12 mb-3">
                        <h3 class="text-center">What Pacha Mama offers its clients</h3>
                        <div class="linea mb-4 mt-3"></div>
                    </div>
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="pt-4 d-flex flex-column align-items-center card-new" style="border:1px solid grey">
                                <img src="{{ asset('img/thumb/local-tour-guide-in-Peru.png') }}" height="100px"
                                    alt="Local Tour guide" loading="lazy">
                                <p class="font-weight-bold mt-3">Local tour guide</p>
                                <div class="linea2-blogs" style="margin-bottom: 0px"></div>
                                <p class="text-justify m-3" style="font-size: 14px">Local guides who are experts and
                                    knowledgeable about the
                                    richness of the past of the Inca culture.</p>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="pt-4 d-flex flex-column align-items-center card-new" style="border:1px solid grey">
                                <img src="{{ asset('img/thumb/eco-friendly-company.png') }}" height="100px"
                                    alt="Local Tour guide" loading="lazy">
                                <p class="font-weight-bold mt-3">Sustainable Tourism</p>
                                <div class="linea2-blogs" style="margin-bottom: 0px"></div>
                                <p class="text-justify m-3" style="font-size: 14px">We're proud to offer experiences that
                                    combine the natural
                                    with responsible practices that respect the environment and local communities.</p>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="pt-4 d-flex flex-column align-items-center card-new" style="border:1px solid grey">
                                <img src="{{ asset('img/thumb/small-groups.png') }}" height="100px" alt="Local Tour guide"
                                    loading="lazy">
                                <p class="font-weight-bold mt-3">Small groups</p>
                                <div class="linea2-blogs" style="margin-bottom: 0px"></div>
                                <p class="text-justify m-3" style="font-size: 14px">You get to spend more time with the
                                    guide and listen to
                                    everything
                                    they have to say. A personalized tour.</p>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="pt-4 d-flex flex-column align-items-center card-new" style="border:1px solid grey">
                                <img src="{{ asset('img/thumb/food-on-trail.png') }}" height="100px" alt="Local Tour guide"
                                    loading="lazy">
                                <p class="font-weight-bold mt-3">Food on trail</p>
                                <div class="linea2-blogs" style="margin-bottom: 0px"></div>
                                <p class="text-justify m-3" style="font-size: 14px">Delight your taste buds with our
                                    delicious trail food.We ensure
                                    you have flavorful sustenance during your adventures.</p>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="pt-4 d-flex flex-column align-items-center card-new"
                                style="border:1px solid grey">
                                <img src="{{ asset('img/thumb/legally-licensed.png') }}" height="100px"
                                    alt="Local Tour guide" loading="lazy">
                                <p class="font-weight-bold mt-3">Legally licensed</p>
                                <div class="linea2-blogs" style="margin-bottom: 0px"></div>
                                <p class="text-justify m-3" style="font-size: 14px">Our travel agency in Peru has a
                                    license and permits in order,
                                    providing quality and reliable tourist services.</p>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="pt-4 d-flex flex-column align-items-center card-new"
                                style="border:1px solid grey">
                                <img src="{{ asset('img/thumb/camping-equipment.png') }}" height="100px"
                                    alt="Local Tour guide" loading="lazy">
                                <p class="font-weight-bold mt-3">Camping Equipment</p>
                                <div class="linea2-blogs" style="margin-bottom: 0px"></div>
                                <p class="text-justify m-3" style="font-size: 14px">We offer a wide selection of
                                    high-quality camping equipment to
                                    ensure a comfortable and safe experience in the wilderness.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="space"></div>
                <div class="col-lg-12 mb-4">
                    <h2 class="h2-tierras">Recommended tours:</h2>
                    <div class="linea2-blogs"></div>
                </div>

                <!-----Prueba--->
                @foreach ($tours->take(8) as $tour)
                    <div class="col-lg-3 col-md-6">
                        <div class="card card-new" style="width: 18rem;">
                            <a href="{{ route('toursen.show', ['slug' => $tour->slug]) }}">
                                <img class="card-img-top" src="{{ $tour->img }}" alt="Camino Inca 4 dias"
                                    loading="lazy">
                            </a>
                            <div class="card-body text-center">
                                <h5 class="card-titulo">{{ $tour->nombre }}</h5>
                                <p class="text-card">{{ $tour->descripcion }}</p>
                                <div class="enlacesCategoria">
                                    @php
                                        $colors = ['text-primary', 'text-success', 'text-info', 'text-warning', 'text-secondary'];
                                    @endphp
                                
                                    @foreach ($tour->categories as $index => $category)
                                        <a href="{{ route('category.show', $category) }}"
                                            class="{{ $colors[$index % count($colors)] }} font-weight-bold text-uppercase"
                                            title="Ver categoría" style="font-size: 11px;">
                                            {{ $category->nombre }}
                                        </a>
                                    @endforeach
                                </div>
                                

                                <div class="row iconos-tours">
                                    <div class="col-6">
                                        <span class="icon-clock-o" style="float: right">
                                            {{ $tour->dias }}day{{ $tour->dias == 1 ? '' : 's' }}</span>
                                    </div>
                                    <div class="col-6">
                                        <span class="icon-usd" style="float:left">{{ $tour->precio }}.00</span>
                                    </div>
                                    <div class="col-12 mt-2">
                                        <span class="icon-map-marker"> {{ $tour->ubicacion }}</span>
                                    </div>
                                </div>
                                <a href="{{ route('toursen.show', ['slug' => $tour->slug]) }}" class="boton-card">Más
                                    detalles</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                <!-----Fin orueba--->
                <div class="space"></div>
            </div>
        </div>
    </section>
    <!-----Prueba full img------>
    <div class="full-img">
        <div class="full-img-card uno">
            <div class="oscuro">
                <h5>Trekking</h5>
                <p>Excursions with walks through Peru</p>
                <a href="{{ route('hikes') }}">Explore tours</a>
            </div>
        </div>
        <div class="full-img-card dos">
            <div class="oscuro">
                <h5>Machu Picchu</h5>
                <p>Tours in Machu Picchu</p>
                <a href="{{ route('mapien') }}">Explore tours</a>
            </div>
        </div>
        <div class="full-img-card tres">
            <div class="oscuro">
                <h5>Perú</h5>
                <p>Tours to discover Peru</p>
                <a href="{{ route('around') }}">Explore tours</a>
            </div>
        </div>
        <div class="full-img-card cuatro">
            <div class="oscuro">
                <h5>Mountain Lodge</h5>
                <p>Pacha Mama Spirit Lodge</p>
                <a href="{{ route('lodgen') }}">Explore tours</a>
            </div>
        </div>
    </div>
    <!------Fin Full img---------->
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="space"></div>
                <div class="col-lg-12">
                    <h2 class="h2-tierras">Peru Adventure:</h2>
                    <div class="linea2-blogs mb-4"></div>
                    <p>
                        Pacha Mama Spirit is a travel agency with a lot of experience in adventure trips and walks through
                        the main tourist routes that Peru has to offer. Since travelers often move through rural areas on
                        foot, hiking gives them an up-close view of incredible scenery along the way. The Inca Trail, which
                        leads to Machu Picchu, is one of the best treks that exists in South America and should be one of
                        your main hiking options.
                    </p>
                </div>
                <div class="space"></div>
                @foreach ($tours as $tour)
                    @if (Str::contains($tour->categoria, 'caminata'))
                        <div class="col-lg-3 col-md-6">
                            <div class="card card-new" style="width: 100%;">
                                <a href="{{ route('toursen.show', ['id' => $tour->id, 'slug' => $tour->slug]) }}">
                                    <img class="card-img-top" src="{{ $tour->img }}" alt="Camino Inca 4 dias"
                                        loading="lazy">
                                </a>
                                <div class="card-body text-center">
                                    <h5 class="card-titulo">{{ $tour->nombre }}</h5>
                                    <p class="text-card">{{ $tour->descripcion }}</p>
                                    <div class="enlacesCategoria">
                                        @php
                                            $colors = ['text-primary', 'text-success', 'text-info', 'text-warning', 'text-secondary'];
                                        @endphp
                                    
                                        @foreach ($tour->categories as $index => $category)
                                            <a href="{{ route('category.show', $category) }}"
                                                class="{{ $colors[$index % count($colors)] }} font-weight-bold text-uppercase"
                                                title="Ver categoría" style="font-size: 11px;">
                                                {{ $category->nombre }}
                                            </a>
                                        @endforeach
                                    </div>
                                    <div class="row iconos-tours">
                                        <div class="col-6">
                                            <span class="icon-clock-o" style="float: right">
                                                {{ $tour->dias }}day{{ $tour->dias == 1 ? '' : 's' }}</span>
                                        </div>
                                        <div class="col-6">
                                            <span class="icon-usd" style="float:left">{{ $tour->precio }}.00</span>
                                        </div>
                                        <div class="col-12 mt-2">
                                            <span class="icon-map-marker"> {{ $tour->ubicacion }}</span>
                                        </div>
                                    </div>
                                    <a href="{{ route('toursen.show', ['id' => $tour->id, 'slug' => $tour->slug]) }}"
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
    <!---<section>
     <div class="container">
      <div class="row">
     </div>
     </div>
    </section>--->
    <section>
        <div class="container mt-3">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="h1-responsive font-weight-bold text-center my-4">Contact Pacha Mama Spirit team</h2>
                    <p class="text-center w-responsive mx-auto mb-5">
                        We are here to help you. Do you have any questions? Please do not hesitate to
                        contact us directly. Our team will come back to you within a matter of hours to help you.
                    </p>
                    <form id="contact-form" name="contact-form" action="{{ route('mensajeIndex') }}" method="POST">
                        @csrf
                        <div class="row formTransparent">
                            <div class="col-md-6">
                                <div class="md-form mb-4">
                                    <input type="text" id="name" name="name" class="form-control"
                                        placeholder="Name:" required>
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
                                        placeholder="Phone:" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="md-form mb-4">
                                    <input type="text" id="country" name="country" class="form-control"
                                        placeholder="Country:">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="md-form mb-4">
                                    <input type="number" id="adults" name="adults" class="form-control"
                                        placeholder="Adults:">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="md-form mb-4">
                                    <select name="tipo" id="tipo" class="form-control md">
                                        <option selected> Trip option:</option>
                                        <option value="familia">Family trip</option>
                                        <option value="pareja">Couple trip</option>
                                        <option value="amigos">Friends trip</option>
                                        <option value="grupo">Group trip</option>
                                        <option value="privado">Private trip</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12 mt-2">
                                <div class="md-form">
                                    <textarea type="text" placeholder="Write here your query..." id="message" name="message" rows="2"
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
