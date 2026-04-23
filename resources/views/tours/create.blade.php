@extends('layouts.admin')
@section('titulo', 'Crear Tour en Español')

@section('contenido')
<div class="pm-page-header">
    <div>
        <h1>Crear Tour en Español</h1>
        <small>Nuevo tour visible en la versión en español de la web</small>
    </div>
    <div>
        <a href="/toursen/create" class="btn btn-pm-outline btn-sm mr-2">
            <i class="fas fa-globe mr-1"></i> Crear en Inglés
        </a>
        <a href="{{ route('tours.index') }}" class="btn btn-secondary btn-sm">
            <i class="fas fa-arrow-left mr-1"></i> Volver
        </a>
    </div>
</div>

<form action="/tours" method="POST" enctype="multipart/form-data">
    @csrf

    {{-- Información básica --}}
    <div class="card pm-card">
        <div class="card-header pm-card-header">
            <h6>Información básica</h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-3">
                    <label class="form-label">Nombre del tour</label>
                    <input type="text" name="nombre" class="form-control form-control-sm" required>
                </div>
                <div class="col-lg-2 col-md-4 mb-3">
                    <label class="form-label">Precio (USD)</label>
                    <input type="text" name="precio" class="form-control form-control-sm" required>
                </div>
                <div class="col-lg-2 col-md-4 mb-3">
                    <label class="form-label">Días</label>
                    <input type="text" name="dias" class="form-control form-control-sm" required>
                </div>
                <div class="col-lg-2 col-md-4 mb-3">
                    <label class="form-label">Ubicación</label>
                    <input type="text" name="ubicacion" class="form-control form-control-sm" required>
                </div>
                <div class="col-12 mb-3">
                    <label class="form-label">Descripción corta (meta)</label>
                    <input type="text" name="descripcion" class="form-control form-control-sm" required>
                </div>
            </div>
        </div>
    </div>

    {{-- Contenido rico --}}
    <div class="card pm-card">
        <div class="card-header pm-card-header">
            <h6>Contenido del tour</h6>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <label class="form-label">Contenido principal</label>
                <textarea class="ckeditor form-control" name="contenido" id="contenido"></textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Detalle del tour</label>
                <textarea class="ckeditor form-control" name="detallado" id="detallado"></textarea>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-3">
                    <label class="form-label">Incluye <small>— preferible listas</small></label>
                    <textarea class="ckeditor form-control" name="incluidos" id="incluidos" required></textarea>
                </div>
                <div class="col-lg-4 mb-3">
                    <label class="form-label">Importante <small>— preferible listas</small></label>
                    <textarea class="ckeditor form-control" name="importante" id="importante"></textarea>
                </div>
                <div class="col-lg-4 mb-3">
                    <label class="form-label">Mapa (embed)</label>
                    <textarea class="ckeditor form-control" name="mapa" id="mapa"></textarea>
                </div>
            </div>
        </div>
    </div>

    {{-- Imagen y clasificación --}}
    <div class="card pm-card">
        <div class="card-header pm-card-header">
            <h6>Imagen y clasificación</h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6 mb-3">
                    <label class="form-label">Imagen principal</label>
                    <input type="file" name="img" class="form-control form-control-sm" accept="image/*" required
                        onchange="previewImg(event)">
                    <img id="img-preview" class="pm-img-preview" alt="Vista previa">
                </div>
                <div class="col-lg-3 mb-3">
                    <label class="form-label">Categoría <small>— Ctrl para seleccionar varias</small></label>
                    <select name="categoria[]" id="categoria" class="form-control form-control-sm" required multiple>
                        <option value="hikes">Hikes</option>
                        <option value="around">Around Perú</option>
                        <option value="machupicchu">Machu Picchu</option>
                        <option value="luxury">Luxury</option>
                        <option value="fullday">Full day</option>
                    </select>
                </div>
                <div class="col-lg-3 mb-3">
                    <label class="form-label">Clase de imagen</label>
                    <select name="clase" id="clase" class="form-control form-control-sm" required>
                        <option value="aventuras">Camino Inca / Salkantay</option>
                        <option value="imperdible">Cusco city tour</option>
                        <option value="machu">Machu Picchu</option>
                        <option value="ollantaytambo">Ollantaytambo</option>
                        <option value="pachamamalodge">Vista Valle Sagrado</option>
                        <option value="valle">Vista Valle Sagrado 2</option>
                        <option value="santuaryLodge">Hotel Sanctuary Lodge</option>
                        <option value="puno">Balsa Lago Titicaca</option>
                        <option value="selva">Amazonas</option>
                        <option value="caminata">Caminata Salkantay</option>
                        <option value="nazca">Líneas de Nazca</option>
                        <option value="lima">Ciudad de Lima</option>
                        <option value="arequipa">Ciudad de Arequipa</option>
                        <option value="huchuy">Huchuy Qosqo</option>
                        <option value="choque">Choquequirao</option>
                        <option value="humantay">Laguna Humantay</option>
                        <option value="vinicunca">Vinicunca</option>
                        <option value="ica">Huacachina</option>
                        <option value="pisco">Reserva Paracas</option>
                        <option value="puerto">Puerto Maldonado</option>
                    </select>
                    <div id="clase-preview" class="pm-clase-preview mt-2"></div>
                </div>
            </div>
        </div>
    </div>

    {{-- SEO --}}
    <div class="card pm-card">
        <div class="card-header pm-card-header">
            <h6>SEO</h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-8 mb-3">
                    <label class="form-label">Keywords <small>— separar por comas</small></label>
                    <input type="text" name="keywords" class="form-control form-control-sm" required>
                </div>
                <div class="col-lg-4 mb-3">
                    <label class="form-label">Slug</label>
                    <input type="text" name="slug" class="form-control form-control-sm" required>
                </div>
            </div>
        </div>
    </div>

    <div class="pm-form-actions">
        <button type="submit" class="btn btn-pm-primary">
            <i class="fas fa-save mr-1"></i> Guardar tour
        </button>
        <a href="{{ route('tours.index') }}" class="btn btn-secondary">
            <i class="fas fa-times mr-1"></i> Cancelar
        </a>
    </div>
</form>

@push('admin_scripts')
<script>
function previewImg(e) {
    var preview = document.getElementById('img-preview');
    var file = e.target.files[0];
    if (file) {
        var reader = new FileReader();
        reader.onload = function(ev) { preview.src = ev.target.result; preview.style.display = 'block'; };
        reader.readAsDataURL(file);
    }
}
document.getElementById('clase').addEventListener('change', function() {
    var div = document.getElementById('clase-preview');
    div.className = 'pm-clase-preview mt-2 ' + this.value;
});
$(document).ready(function() { $('.ckeditor').ckeditor(); CKEDITOR.config.allowedContent = true; });
</script>
@endpush
@endsection
