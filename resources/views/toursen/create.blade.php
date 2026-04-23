@extends('layouts.admin')
@section('titulo', 'Crear Tour en Inglés')

@section('contenido')
<div class="pm-page-header">
    <div>
        <h1>Crear Tour en Inglés</h1>
        <small>Nuevo tour visible en la versión en inglés de la web</small>
    </div>
    <a href="{{ route('toursen.index') }}" class="btn btn-secondary btn-sm">
        <i class="fas fa-arrow-left mr-1"></i> Volver
    </a>
</div>

@if(session('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="fas fa-check-circle mr-1"></i> {{ session('status') }}
        <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
    </div>
@endif

<form action="/toursen" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="card pm-card">
        <div class="card-header pm-card-header">
            <h6>Información básica</h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6 mb-3">
                    <label class="form-label">Nombre del tour</label>
                    <input type="text" name="nombre" class="form-control form-control-sm" required
                        value="{{ old('nombre', $tour->nombre ?? '') }}">
                    @error('nombre')<div class="text-danger" style="font-size:0.78rem;">{{ $message }}</div>@enderror
                </div>
                <div class="col-lg-2 mb-3">
                    <label class="form-label">Precio (USD)</label>
                    <input type="text" name="precio" class="form-control form-control-sm" required
                        value="{{ old('precio', $tour->precio ?? '') }}">
                </div>
                <div class="col-lg-2 mb-3">
                    <label class="form-label">Días</label>
                    <input type="text" name="dias" class="form-control form-control-sm" required
                        value="{{ old('dias', $tour->dias ?? '') }}">
                </div>
                <div class="col-lg-2 mb-3">
                    <label class="form-label">Ubicación</label>
                    <input type="text" name="ubicacion" class="form-control form-control-sm" required
                        value="{{ old('ubicacion', $tour->ubicacion ?? '') }}">
                </div>
                <div class="col-12 mb-3">
                    <label class="form-label">Descripción corta (meta)</label>
                    <input type="text" name="descripcion" class="form-control form-control-sm" required
                        value="{{ old('descripcion', $tour->descripcion ?? '') }}">
                </div>
                <div class="col-lg-6 mb-3">
                    <label class="form-label">Tour en español vinculado</label>
                    <select name="tour_id" id="tour_id" class="form-control form-control-sm" required>
                        <option value="">— Seleccionar tour —</option>
                        @foreach($toursDisponibles as $t)
                            <option value="{{ $t->id }}" {{ (string) old('tour_id') === (string) $t->id ? 'selected' : '' }}>{{ $t->nombre }}</option>
                        @endforeach
                    </select>
                    @error('tour_id')<div class="text-danger" style="font-size:0.78rem;">{{ $message }}</div>@enderror
                </div>
                <div class="col-lg-6 mb-3">
                    <label class="form-label">Categorías web</label>
                    <select name="categoria[]" id="categoria" class="form-control form-control-sm" multiple>
                        @foreach($categories as $cat)
                            <option value="{{ $cat->id }}">{{ $cat->nombre }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
    </div>

    <div class="card pm-card">
        <div class="card-header pm-card-header">
            <h6>Contenido del tour</h6>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <label class="form-label">Contenido principal</label>
                <textarea class="ckeditor form-control" name="contenido" id="contenido">{{ old('contenido') }}</textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Detallado</label>
                <textarea class="ckeditor form-control" name="detallado" id="detallado" required>{{ old('detallado') }}</textarea>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-3">
                    <label class="form-label">Incluye <small>— solo listas</small></label>
                    <textarea class="ckeditor form-control" name="incluidos" id="incluidos" required>{{ old('incluidos') }}</textarea>
                </div>
                <div class="col-lg-4 mb-3">
                    <label class="form-label">Importante <small>— solo listas</small></label>
                    <textarea class="ckeditor form-control" name="importante" id="importante">{{ old('importante') }}</textarea>
                </div>
                <div class="col-lg-4 mb-3">
                    <label class="form-label">Mapa (embed)</label>
                    <textarea class="ckeditor form-control" name="mapa" id="mapa">{{ old('mapa') }}</textarea>
                </div>
            </div>
        </div>
    </div>

    <div class="card pm-card">
        <div class="card-header pm-card-header">
            <h6>Imagen y clase</h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6 mb-3">
                    <label class="form-label">Imagen principal</label>
                    <input type="file" name="img" class="form-control form-control-sm" accept="image/*" required>
                </div>
                <div class="col-lg-6 mb-3">
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

    <div class="card pm-card">
        <div class="card-header pm-card-header">
            <h6>SEO</h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-8 mb-3">
                    <label class="form-label">Keywords <small>— separar por comas</small></label>
                    <input type="text" name="keywords" class="form-control form-control-sm" required value="{{ old('keywords') }}">
                </div>
                <div class="col-lg-4 mb-3">
                    <label class="form-label">Slug</label>
                    <input type="text" name="slug" class="form-control form-control-sm" required value="{{ old('slug') }}">
                </div>
            </div>
        </div>
    </div>

    <div class="pm-form-actions">
        <button type="submit" class="btn btn-pm-primary">
            <i class="fas fa-save mr-1"></i> Guardar tour
        </button>
        <a href="{{ route('toursen.index') }}" class="btn btn-secondary">
            <i class="fas fa-times mr-1"></i> Cancelar
        </a>
    </div>
</form>

@push('admin_scripts')
<script>
document.getElementById('clase').addEventListener('change', function() {
    document.getElementById('clase-preview').className = 'pm-clase-preview mt-2 ' + this.value;
});
$(document).ready(function() { $('.ckeditor').ckeditor(); });
</script>
@endpush
@endsection
