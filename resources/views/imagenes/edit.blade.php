@extends('layouts.admin')
@section('titulo', 'Editar Imagen')

@section('contenido')
<div class="pm-page-header">
    <div>
        <h1>Editar Imagen</h1>
        <small>Reemplazar archivo de imagen en la galería</small>
    </div>
    <a href="{{ route('imagenes.index') }}" class="btn btn-secondary btn-sm">
        <i class="fas fa-arrow-left mr-1"></i> Volver
    </a>
</div>

@if (isset($errors) && $errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <i class="fas fa-exclamation-circle mr-1"></i> {{ $errors->first() }}
        <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
    </div>
@endif

<div class="card pm-card" style="max-width: 650px;">
    <div class="card-header pm-card-header">
        <h6>Actualizar archivo de imagen</h6>
    </div>
    <div class="card-body">
        <form action="{{ route('imagenes.update', ['imagene' => $imagen->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="mb-3">
                <label class="form-label">Imagen actual</label>
                <div class="p-2 border rounded bg-light text-center">
                    <img src="{{ asset('img/galeria/' . $imagen->img) }}" alt="{{ $imagen->img }}" 
                         style="max-width: 100%; max-height: 220px; object-fit: contain; border-radius: 6px;">
                    <div class="mt-2 text-muted" style="font-size: 0.8rem; font-family: monospace;">
                        {{ $imagen->img }}
                    </div>
                </div>
            </div>

            <div class="mb-4">
                <label for="img" class="form-label">Seleccionar nueva imagen (opcional)</label>
                <input type="file" id="img" name="img" class="form-control" accept="image/*">
                <small class="text-muted">Si seleccionas un archivo nuevo, reemplazará la imagen actual en el servidor.</small>
            </div>

            <div class="pm-form-actions">
                <button class="btn btn-pm-primary" type="submit">
                    <i class="fas fa-save mr-1"></i> Guardar Cambios
                </button>
                <a href="{{ route('imagenes.index') }}" class="btn btn-secondary">
                    <i class="fas fa-times mr-1"></i> Cancelar
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
