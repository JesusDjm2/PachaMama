@extends('layouts.app')
@section('content')
    <div class="hero">
        <div class="container h-100 d-flex align-items-center justify-content-center">
            <div class="row w-100 py-5">
                <div class="col-lg-12 text-center">
                    <h1 class="h1-destinos">No se encontraron resultados @if (!empty($nombre))para &lsquo;{{ $nombre }}&rsquo; @endif</h1>
                    <p class="text-center text-white mb-4">Prueba con otro destino o palabra clave.</p>
                </div>
                <div class="col-12 col-md-8 col-lg-6 mx-auto px-3">
                    <form action="{{ route('search') }}" method="GET" class="noresults-search-form">
                        <div class="mb-3">
                            <label for="noresults-name-es" class="sr-only">Buscar</label>
                            <input type="text" id="noresults-name-es" name="name" class="form-control rounded-pill px-4 py-2"
                                placeholder="¿Qué destino buscas?" value="{{ $nombre ?? '' }}" required>
                        </div>
                        <div class="text-center">
                            <input type="submit" class="boton-blog-search" value="Buscar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
