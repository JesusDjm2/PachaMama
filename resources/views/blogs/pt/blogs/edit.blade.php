@extends('layouts.admin')
@section('titulo', 'Editar Blog em Português')

@section('contenido')
<div class="pm-page-header">
    <div>
        <h1>Editar Blog em Português</h1>
        <small>{{ $blog->nombre }}</small>
    </div>
    <div class="d-flex align-items-center" style="gap:0.5rem;">
        <a href="/pt/blog/{{ $blog->slug }}" target="_blank" class="btn btn-outline-info btn-sm">
            <i class="fas fa-external-link-alt mr-1"></i> Ver no site
        </a>
        <a href="{{ route('ptblogs.index') }}" class="btn btn-secondary btn-sm">
            <i class="fas fa-arrow-left mr-1"></i> Voltar
        </a>
    </div>
</div>

<div class="card pm-card">
    <div class="card-header pm-card-header">
        <h6><i class="fas fa-edit text-teal mr-2" style="color:#2aa8a8;"></i> Modificar artigo (PT)</h6>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('ptblogs.update', $blog->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            @include('blogs.pt.blogs.form')
        </form>
    </div>
</div>
@endsection
