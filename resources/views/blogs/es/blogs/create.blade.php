@extends('layouts.admin')
@section('titulo', 'Crear Blog en Español')

@section('contenido')
<div class="pm-page-header">
    <div>
        <h1>Crear Blog en Español</h1>
        <small>Nuevo artículo para el blog en español</small>
    </div>
    <a href="{{ route('blogs.index') }}" class="btn btn-secondary btn-sm">
        <i class="fas fa-arrow-left mr-1"></i> Volver
    </a>
</div>

<div class="card pm-card">
    <div class="card-header pm-card-header">
        <h6>Contenido del artículo</h6>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('blogs.store') }}" enctype="multipart/form-data">
            @csrf
            @include('blogs.es.blogs.form')
        </form>
    </div>
</div>
@endsection
