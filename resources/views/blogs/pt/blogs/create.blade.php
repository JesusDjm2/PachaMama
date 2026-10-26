@extends('layouts.admin')
@section('titulo', 'Criar Blog em Português')

@section('contenido')
<div class="pm-page-header">
    <div>
        <h1>Criar Blog em Português</h1>
        <small>Novo artigo para o blog em português</small>
    </div>
    <a href="{{ route('ptblogs.index') }}" class="btn btn-secondary btn-sm">
        <i class="fas fa-arrow-left mr-1"></i> Voltar
    </a>
</div>

<div class="card pm-card">
    <div class="card-header pm-card-header">
        <h6><i class="fas fa-pen-fancy text-teal mr-2" style="color:#2aa8a8;"></i> Conteúdo do artigo (PT)</h6>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('ptblogs.store') }}" enctype="multipart/form-data">
            @csrf
            @include('blogs.pt.blogs.form')
        </form>
    </div>
</div>
@endsection
