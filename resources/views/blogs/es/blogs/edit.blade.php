@extends('layouts.admin')
@section('titulo', 'Editar Blog — ' . $blog->nombre)

@section('contenido')
<div class="pm-page-header">
    <div>
        <h1>Editar Blog</h1>
        <small>{{ $blog->nombre }}</small>
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
        <form method="POST" action="{{ route('blogs.update', $blog->id) }}" enctype="multipart/form-data">
            {{ method_field('PATCH') }}
            @csrf
            @include('blogs.es.blogs.form')
        </form>
    </div>
</div>
@endsection
