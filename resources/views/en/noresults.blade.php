@extends('layouts.appen')
@extends('layouts.appen')
@php $titulo="Results for your tour search" @endphp
@php $descripcion="List of search for your tours" @endphp
@php $keywords="Vinicunca, Humantay, rainbow mountain, City tour" @endphp
@php $img="https://pachamamaspirit.com/img/panoramico/trekking-peru.webp" @endphp
@section('titulo', $titulo)
@include('layouts.metasblogs')
@section('content')
    <div class="blog">
        <div class="container d-flex align-items-center justify-content-center vh-100">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3 style="padding-top: 18%;color:#fff" class="h1web">>No se encontraron resultados en su búsqueda</h3>
                </div>
            </div>
        </div>
    </div>
@endsection
