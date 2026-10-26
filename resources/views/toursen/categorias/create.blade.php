@extends('layouts.admin')
@section('titulo', 'Crear Categoría en Inglés')

@section('contenido')
<div class="pm-page-header">
    <div>
        <h1>Crear Categoría en Inglés</h1>
        <small>Nueva categoría para el catálogo de tours en inglés</small>
    </div>
    <a href="{{ route('category.index') }}" class="btn btn-secondary btn-sm">
        <i class="fas fa-arrow-left mr-1"></i> Volver
    </a>
</div>

<div class="card pm-card" style="max-width: 700px;">
    <div class="card-header pm-card-header">
        <h6><i class="fas fa-folder-plus text-teal mr-2" style="color:#2aa8a8;"></i> Datos de la categoría (EN)</h6>
    </div>
    <div class="card-body">
        <form action="{{ route('category.store') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-md-7 mb-3">
                    <label for="nombre" class="form-label font-weight-600">Nombre (inglés)</label>
                    <input type="text" class="form-control form-control-sm @error('nombre') is-invalid @enderror"
                           id="nombre" name="nombre" value="{{ old('nombre') }}" placeholder="Ej: Machu Picchu Tours" required autofocus>
                    @error('nombre')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="col-md-5 mb-3">
                    <label for="link" class="form-label font-weight-600">Enlace (slug)</label>
                    <input type="text" class="form-control form-control-sm @error('link') is-invalid @enderror"
                           id="link" name="link" value="{{ old('link') }}" placeholder="machu-picchu-tours" readonly>
                    @error('link')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    <small class="text-muted">Generado automáticamente</small>
                </div>
            </div>
            <div class="pm-form-actions mt-3">
                <button type="submit" class="btn btn-pm-primary">
                    <i class="fas fa-save mr-1"></i> Guardar Categoría
                </button>
                <a href="{{ route('category.index') }}" class="btn btn-secondary">
                    <i class="fas fa-times mr-1"></i> Cancelar
                </a>
            </div>
        </form>
    </div>
</div>

@push('admin_scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const nombreInput = document.getElementById('nombre');
    const linkInput = document.getElementById('link');

    nombreInput.addEventListener('input', function () {
        var str = this.value.toLowerCase().normalize('NFD').replace(/[\u0300-\u036f]/g, '');
        linkInput.value = str.trim().replace(/[^a-z0-9\s-]/g, '').replace(/\s+/g, '-').replace(/-+/g, '-');
    });
});
</script>
@endpush
@endsection
