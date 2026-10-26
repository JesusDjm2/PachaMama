@extends('layouts.admin')
@section('titulo', 'Editar Tag en Español')

@section('contenido')
<div class="pm-page-header">
    <div>
        <h1>Editar Tag en Español</h1>
        <small>{{ $tag->nombre }}</small>
    </div>
    <a href="{{ route('tags.index') }}" class="btn btn-secondary btn-sm">
        <i class="fas fa-arrow-left mr-1"></i> Volver
    </a>
</div>

<div class="card pm-card" style="max-width: 650px;">
    <div class="card-header pm-card-header">
        <h6><i class="fas fa-edit text-teal mr-2" style="color:#2aa8a8;"></i> Modificar etiqueta</h6>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('tags.update', $tag->id) }}">
            {{ method_field('PATCH') }}
            @csrf
            @include('blogs.es.tags.form')
        </form>
    </div>
</div>
@endsection
