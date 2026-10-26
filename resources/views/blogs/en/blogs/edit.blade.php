@extends('layouts.admin')
@section('titulo', 'Editar Blog en Inglés')

@section('contenido')
<div class="pm-page-header">
    <div>
        <h1>Editar Blog en Inglés</h1>
        <small>{{ $blog->nombre }}</small>
    </div>
    <div class="d-flex align-items-center" style="gap:0.5rem;">
        <a href="/blog/{{ $blog->slug }}" target="_blank" class="btn btn-outline-info btn-sm">
            <i class="fas fa-external-link-alt mr-1"></i> Ver en web
        </a>
        <a href="{{ route('enblogs.index') }}" class="btn btn-secondary btn-sm">
            <i class="fas fa-arrow-left mr-1"></i> Volver
        </a>
    </div>
</div>

<div class="card pm-card">
    <div class="card-header pm-card-header">
        <h6><i class="fas fa-edit text-teal mr-2" style="color:#2aa8a8;"></i> Modificar artículo (EN)</h6>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('enblogs.update', $blog->id) }}" enctype="multipart/form-data">
            {{ method_field('PATCH') }}
            @csrf
            @include('blogs.en.blogs.form')
        </form>
    </div>
</div>
@endsection
