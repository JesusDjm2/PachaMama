@extends('layouts.admin')
@section('titulo', 'Editar Categoría en Inglés')

@section('contenido')
<div class="pm-page-header">
    <div>
        <h1>Editar Categoría en Inglés</h1>
        <small>{{ $category->nombre }}</small>
    </div>
    <a href="{{ route('category.index') }}" class="btn btn-secondary btn-sm">
        <i class="fas fa-arrow-left mr-1"></i> Volver
    </a>
</div>

<div class="card pm-card" style="max-width: 700px;">
    <div class="card-header pm-card-header">
        <h6><i class="fas fa-edit text-teal mr-2" style="color:#2aa8a8;"></i> Modificar categoría (EN)</h6>
    </div>
    <div class="card-body">
        <form action="{{ route('category.update', $category) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-7 mb-3">
                    <label for="nombre" class="form-label font-weight-600">Nombre (inglés)</label>
                    <input type="text" class="form-control form-control-sm @error('nombre') is-invalid @enderror"
                           id="nombre" name="nombre" value="{{ old('nombre', $category->nombre) }}" required>
                    @error('nombre')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="col-md-5 mb-3">
                    <label for="link" class="form-label font-weight-600">Enlace (slug)</label>
                    <input type="text" class="form-control form-control-sm @error('link') is-invalid @enderror"
                           id="link" name="link" value="{{ old('link', $category->link) }}" readonly required>
                    @error('link')<div class="invalid-feedback">{{ $message }}</div>@enderror
                    <small class="text-muted">Generado automáticamente</small>
                </div>
            </div>
            <div class="pm-form-actions mt-3">
                <button type="submit" class="btn btn-pm-primary">
                    <i class="fas fa-save mr-1"></i> Actualizar Categoría
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
