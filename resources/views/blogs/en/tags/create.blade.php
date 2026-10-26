@extends('layouts.admin')
@section('titulo', 'Crear Tag en Inglés')

@section('contenido')
<div class="pm-page-header">
    <div>
        <h1>Crear Tag en Inglés</h1>
        <small>Nueva etiqueta para categorizar artículos de blog en inglés</small>
    </div>
    <a href="{{ route('entags.index') }}" class="btn btn-secondary btn-sm">
        <i class="fas fa-arrow-left mr-1"></i> Volver
    </a>
</div>

<div class="card pm-card" style="max-width: 650px;">
    <div class="card-header pm-card-header">
        <h6><i class="fas fa-tag text-teal mr-2" style="color:#2aa8a8;"></i> Datos de la etiqueta (EN)</h6>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('entags.store') }}">
            @csrf
            @include('blogs.en.tags.form')
        </form>
    </div>
</div>
@endsection
