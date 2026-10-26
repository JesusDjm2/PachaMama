@extends('layouts.admin')
@section('titulo', 'Editar Tag em Português')

@section('contenido')
<div class="pm-page-header">
    <div>
        <h1>Editar Tag em Português</h1>
        <small>{{ $tag->nombre }}</small>
    </div>
    <a href="{{ route('pttags.index') }}" class="btn btn-secondary btn-sm">
        <i class="fas fa-arrow-left mr-1"></i> Voltar
    </a>
</div>

<div class="card pm-card" style="max-width: 650px;">
    <div class="card-header pm-card-header">
        <h6><i class="fas fa-edit text-teal mr-2" style="color:#2aa8a8;"></i> Modificar etiqueta (PT)</h6>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('pttags.update', $tag->id) }}">
            @csrf
            @method('PUT')
            @include('blogs.pt.tags.form')
        </form>
    </div>
</div>
@endsection
