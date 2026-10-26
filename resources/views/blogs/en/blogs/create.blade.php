@extends('layouts.admin')
@section('titulo', 'Crear Blog en Inglés')

@section('contenido')
<div class="pm-page-header">
    <div>
        <h1>Crear Blog en Inglés</h1>
        <small>Nuevo artículo para el blog en inglés</small>
    </div>
    <a href="{{ route('enblogs.index') }}" class="btn btn-secondary btn-sm">
        <i class="fas fa-arrow-left mr-1"></i> Volver
    </a>
</div>

<div class="card pm-card">
    <div class="card-header pm-card-header">
        <h6><i class="fas fa-pen-fancy text-teal mr-2" style="color:#2aa8a8;"></i> Contenido del artículo (EN)</h6>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('enblogs.store') }}" enctype="multipart/form-data">
            @csrf
            @include('blogs.en.blogs.form')
        </form>
    </div>
</div>
@endsection
