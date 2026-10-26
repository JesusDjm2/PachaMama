<div class="row">
    <div class="col-md-7 mb-3">
        <label for="nombre" class="form-label font-weight-600">Nombre del Tag</label>
        <input type="text" name="nombre" id="nombre" class="form-control form-control-sm {{ $errors->has('nombre') ? 'is-invalid' : '' }}"
               placeholder="Ej: Arequipa Tours" value="{{ old('nombre', $tag->nombre) }}" required autofocus>
        @if ($errors->has('nombre'))
            <div class="invalid-feedback">{{ $errors->first('nombre') }}</div>
        @endif
    </div>
    <div class="col-md-5 mb-3">
        <label for="slug" class="form-label font-weight-600">Slug</label>
        <input type="text" name="slug" id="slug" class="form-control form-control-sm {{ $errors->has('slug') ? 'is-invalid' : '' }}"
               placeholder="arequipa-tours" value="{{ old('slug', $tag->slug) }}" readonly required>
        @if ($errors->has('slug'))
            <div class="invalid-feedback">{{ $errors->first('slug') }}</div>
        @endif
        <small class="text-muted">Generado automáticamente</small>
    </div>
</div>

<div class="pm-form-actions mt-3">
    <button type="submit" class="btn btn-pm-primary">
        <i class="fas fa-save mr-1"></i> Guardar Tag
    </button>
    <a href="{{ route('tags.index') }}" class="btn btn-secondary">
        <i class="fas fa-times mr-1"></i> Cancelar
    </a>
</div>

<script>
document.addEventListener('DOMContentLoaded', function () {
    const nombreInput = document.getElementById('nombre');
    const slugInput = document.getElementById('slug');
    if (nombreInput && slugInput) {
        nombreInput.addEventListener('input', function() {
            var str = this.value.toLowerCase().normalize('NFD').replace(/[\u0300-\u036f]/g, '');
            slugInput.value = str.trim().replace(/[^a-z0-9\s-]/g, '').replace(/\s+/g, '-').replace(/-+/g, '-');
        });
    }
});
</script>
