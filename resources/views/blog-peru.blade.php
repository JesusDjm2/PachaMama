@extends('layouts.app')
@php    $titulo="Perú Blog" @endphp
@php    $descripcion="Conozca en el blog temas relacionados con el Perú, con mucha información importante y datos culturales." @endphp
@php    $keywords="peru blog, peru blog 2024" @endphp
@php $img="https://pachamamaspirit.com//blog-peru" @endphp
@section('titulo', $titulo)
@include('layouts.metasblogs')

@section('content')
    @include('layouts.menu-castellano')
    <div class="blog">
        <div class="container h-100 d-flex align-items-center">
            <div class="row w-100">
                <div class="col-lg-12 text-center">
                    <h1 class="h1-destinos">
                        Blogs sobre Perú
                    </h1>
                    <p class="text-center text-white">Encuentra temas de interés de viajes en Perú, tips, historia y más</p>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="details">
                        <div class="location">
                            <p><a href="{{ route('inicio') }}">Inicio</a> / <a>Blog</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col lg-12 mb-2">
                    <h2>BLogs sobre sobre Perú</h2>
                    <p>
                        ¡Bienvenid@ a nuestra sección de blogs! Aquí encontrarás temas interesantes sobre Perú, desde tips
                        útiles para viajar hasta información sobre la historia, costumbres, lugares turísticos y mucho más.
                        Explora nuestras publicaciones y descubre todo lo que este hermoso país tiene para ofrecer.</p>
                </div>
                <div class="col-lg-12 mb-5">
                    <div class="input-group mb-2">
                        <input type="text" class="form-control" id="buscador" placeholder="Buscar blog">
                    </div>
                    <div id="no-results" style="display: none; font-weight:bold">No se encontraron resultados para tu
                        búsqueda.</div>
                </div>
                <script>
                    function searchBlogs() {
                        const input = document.getElementById('buscador');
                        const blogs = document.querySelectorAll('.nombreBlog');
                        const blogContainers = document.querySelectorAll('.blog-container');
                        const noResults = document.getElementById('no-results');
                        let numResults = 0;

                        const searchWords = input.value.toLowerCase().normalize('NFD').replace(/[\u0300-\u036f]/g, "").split(' ');

                        blogContainers.forEach(function(blogContainer) {
                            let blogName = blogContainer.querySelector('.nombreBlog').textContent.toLowerCase().normalize('NFD')
                                .replace(/[\u0300-\u036f]/g, "");
                            let hasAllWords = true;

                            searchWords.forEach(function(searchWord) {
                                if (!blogName.includes(searchWord)) {
                                    hasAllWords = false;
                                }
                            });

                            if (hasAllWords) {
                                blogContainer.style.display = 'block';
                                numResults++;
                            } else {
                                blogContainer.style.display = 'none';
                            }
                        });

                        if (input.value === '') {
                            blogContainers.forEach(function(blogContainer) {
                                blogContainer.style.display = 'block';
                            });
                        }

                        if (numResults === 0) {
                            noResults.style.display = 'block';
                        } else {
                            noResults.style.display = 'none';
                        }
                    }
                    setInterval(searchBlogs, 500);
                </script>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                @foreach ($blogs as $blog)
                    <div class="blogs blogimg blog-container"
                        style="background:url({{ $blog->img }}); background-size:cover">
                        <div class="black">
                            <h2 class="nombreBlog">{{ $blog->nombre }}</h2>
                            <div class="fecha"><i class="icon-calendar"></i><span>
                                    {{ $blog->created_at->format('d/m/Y') }}</span></div>
                            <p>{{ $blog->descripcion }}</p>
                            <a href="{{ route('blog.show', $blog->slug) }}">Leer artículo</a>
                        </div>
                    </div>
                @endforeach


            </div>
        </div>
    </section>
    <div style="padding-bottom: 5em"></div>
@endsection
