@extends('layouts.admin')
@section('titulo', 'Criar Tag em Português')

@section('contenido')
<div class="pm-page-header">
    <div>
        <h1>Criar Tag em Português</h1>
        <small>Nova etiqueta para categorizar artigos de blog em português</small>
    </div>
    <a href="{{ route('pttags.index') }}" class="btn btn-secondary btn-sm">
        <i class="fas fa-arrow-left mr-1"></i> Voltar
    </a>
</div>

<div class="card pm-card" style="max-width: 650px;">
    <div class="card-header pm-card-header">
        <h6><i class="fas fa-tag text-teal mr-2" style="color:#2aa8a8;"></i> Dados da etiqueta (PT)</h6>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('pttags.store') }}">
            @csrf
            @include('blogs.pt.tags.form')
        </form>
    </div>
</div>
@endsection
