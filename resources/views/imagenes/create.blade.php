@extends('layouts.admin')
@section('titulo', 'Subir Imágenes')

@section('contenido')
<div class="pm-page-header">
    <div>
        <h1>Subir Imágenes</h1>
        <small>Las imágenes se guardan en /img/galeria/ y se pueden usar en tours y blogs</small>
    </div>
    <a href="{{ route('imagenes.index') }}" class="btn btn-secondary btn-sm">
        <i class="fas fa-arrow-left mr-1"></i> Volver
    </a>
</div>

@if($errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <i class="fas fa-exclamation-circle mr-1"></i> {{ $errors->first() }}
        <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
    </div>
@endif

<div class="card pm-card">
    <div class="card-header pm-card-header">
        <h6>Seleccionar imágenes</h6>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('imagenes.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-4">
                <label class="form-label">Imágenes <small>— puedes seleccionar varias a la vez</small></label>
                <input type="file" name="img[]" id="img" class="form-control" multiple accept="image/*"
                    onchange="previewMultiple(event)">
            </div>
            <div id="multi-preview" class="d-flex flex-wrap" style="gap:0.75rem; margin-bottom:1rem;"></div>
            <div class="pm-form-actions">
                <button type="submit" class="btn btn-pm-primary">
                    <i class="fas fa-cloud-upload-alt mr-1"></i> Subir imágenes
                </button>
                <a href="{{ route('imagenes.index') }}" class="btn btn-secondary">
                    <i class="fas fa-times mr-1"></i> Cancelar
                </a>
            </div>
        </form>
    </div>
</div>

@push('admin_scripts')
<script>
function previewMultiple(e) {
    var container = document.getElementById('multi-preview');
    container.innerHTML = '';
    Array.from(e.target.files).forEach(function(file) {
        var reader = new FileReader();
        reader.onload = function(ev) {
            var img = document.createElement('img');
            img.src = ev.target.result;
            img.style.cssText = 'width:120px;height:80px;object-fit:cover;border-radius:8px;border:1px solid #e0eeee;';
            container.appendChild(img);
        };
        reader.readAsDataURL(file);
    });
}
</script>
@endpush
@endsection
