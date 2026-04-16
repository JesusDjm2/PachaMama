@extends('layouts.appen')
@php $titulo = 'No tour results | Pacha Mama Spirit' @endphp
@php $descripcion = 'Try another search for tours in Peru.' @endphp
@php $keywords = 'Peru tours, Machu Picchu, travel Peru' @endphp
@php $img = 'https://pachamamaspirit.com/img/panoramico/trekking-peru.webp' @endphp
@section('titulo', $titulo)
@include('layouts.metasblogs')
@section('content')
    <div class="hero">
        <div class="container h-100 d-flex align-items-center justify-content-center">
            <div class="row w-100 py-5">
                <div class="col-lg-12 text-center">
                    <h1 class="h1-destinos">No tours found @if (!empty($nombre))for &lsquo;{{ $nombre }}&rsquo; @endif</h1>
                    <p class="text-center text-white mb-4">Try another destination or keyword.</p>
                </div>
                <div class="col-12 col-md-8 col-lg-6 mx-auto px-3">
                    <form action="{{ route('searchen') }}" method="GET" class="noresults-search-form">
                        <div class="mb-3">
                            <label for="noresults-name-en" class="sr-only">Search</label>
                            <input type="text" id="noresults-name-en" name="name" class="form-control rounded-pill px-4 py-2"
                                placeholder="Where do you want to go?" value="{{ $nombre ?? '' }}" required>
                        </div>
                        <div class="text-center">
                            <input type="submit" class="boton-blog-search" value="Search">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
