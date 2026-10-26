@extends('layouts.admin')
@section('titulo', 'Editar Tour en Inglés — ' . $tour->nombre)

@section('contenido')
<div class="pm-page-header">
    <div>
        <h1>Editar Tour en Inglés</h1>
        <small>{{ $tour->nombre }}</small>
    </div>
    <div class="d-flex align-items-center" style="gap:0.5rem;">
        <a href="{{ route('toursen.show', ['slug' => $tour->slug]) }}" target="_blank" class="btn btn-outline-info btn-sm">
            <i class="fas fa-external-link-alt mr-1"></i> Ver en web
        </a>
        <a href="{{ route('toursen.index') }}" class="btn btn-secondary btn-sm">
            <i class="fas fa-arrow-left mr-1"></i> Volver
        </a>
    </div>
</div>

@if(session('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="fas fa-check-circle mr-1"></i> {{ session('status') }}
        <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
    </div>
@endif

@if (isset($errors) && $errors->any())
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <i class="fas fa-exclamation-circle mr-1"></i> Por favor revisa los campos requeridos.
        <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
    </div>
@endif

<form action="/toursen/{{ $tour->id }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    {{-- Información básica --}}
    <div class="card pm-card">
        <div class="card-header pm-card-header">
            <h6><i class="fas fa-info-circle text-teal mr-2" style="color:#2aa8a8;"></i> Información básica</h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-3">
                    <label class="form-label font-weight-600">Nombre del tour</label>
                    <input type="text" name="nombre" id="nombre" class="form-control form-control-sm @error('nombre') is-invalid @enderror" required value="{{ old('nombre', $tour->nombre) }}">
                    @error('nombre')<div class="invalid-feedback">{{ $message }}</div>@enderror
                </div>
                <div class="col-lg-2 col-md-4 mb-3">
                    <label class="form-label font-weight-600">Precio (USD)</label>
                    <input type="text" name="precio" class="form-control form-control-sm @error('precio') is-invalid @enderror" required value="{{ old('precio', $tour->precio) }}">
                </div>
                <div class="col-lg-2 col-md-4 mb-3">
                    <label class="form-label font-weight-600">Días</label>
                    <input type="text" name="dias" class="form-control form-control-sm @error('dias') is-invalid @enderror" required value="{{ old('dias', $tour->dias) }}">
                </div>
                <div class="col-lg-2 col-md-4 mb-3">
                    <label class="form-label font-weight-600">Ubicación</label>
                    <input type="text" name="ubicacion" class="form-control form-control-sm @error('ubicacion') is-invalid @enderror" required value="{{ old('ubicacion', $tour->ubicacion) }}">
                </div>
                <div class="col-lg-6 col-md-12 mb-3">
                    <label class="form-label font-weight-600">Slug (URL amigable)</label>
                    <input type="text" name="slug" id="slug" class="form-control form-control-sm @error('slug') is-invalid @enderror" required value="{{ old('slug', $tour->slug) }}">
                </div>
                <div class="col-lg-6 col-md-12 mb-3">
                    <label class="form-label font-weight-600">Tour en español vinculado <small class="text-muted">(opcional)</small></label>
                    <select name="tour_id" id="tour_id" class="form-control form-control-sm">
                        <option value="">— Ninguno / Sin vincular —</option>
                        @foreach ($toursDisponibles as $tourDisponible)
                            <option value="{{ $tourDisponible->id }}"
                                {{ (string) $tourDisponible->id === (string) old('tour_id', $tour->tour_id) ? 'selected' : '' }}>
                                {{ $tourDisponible->nombre }}
                            </option>
                        @endforeach
                    </select>
                </div>
                <div class="col-12 mb-2">
                    <label class="form-label font-weight-600">Descripción corta <small class="text-muted">— usada en tarjetas y resumen</small></label>
                    <input type="text" name="descripcion" class="form-control form-control-sm @error('descripcion') is-invalid @enderror" required value="{{ old('descripcion', $tour->descripcion) }}">
                </div>
            </div>
        </div>
    </div>

    {{-- Categorías --}}
    <div class="card pm-card">
        <div class="card-header pm-card-header">
            <div class="d-flex align-items-center">
                <i class="fas fa-tags text-teal mr-2" style="color:#2aa8a8;"></i>
                <h6>Categorías del Tour</h6>
            </div>
            <small class="text-muted">Selecciona todas las categorías que apliquen</small>
        </div>
        <div class="card-body">
            <div class="row">
                @foreach ($categorias as $categoria)
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-2">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" name="categories[]" value="{{ $categoria->id }}"
                                   class="custom-control-input" id="categoria-{{ $categoria->id }}"
                                   {{ in_array($categoria->id, old('categories', $tour->categories->pluck('id')->toArray())) ? 'checked' : '' }}>
                            <label class="custom-control-label font-weight-500" for="categoria-{{ $categoria->id }}" style="font-size:0.86rem; cursor:pointer;">
                                {{ $categoria->nombre }}
                            </label>
                        </div>
                    </div>
                @endforeach
            </div>
            @error('categories')
                <div class="text-danger mt-2" style="font-size:0.8rem;">{{ $message }}</div>
            @enderror
        </div>
    </div>

    {{-- Contenido detallado --}}
    <div class="card pm-card">
        <div class="card-header pm-card-header">
            <h6><i class="fas fa-align-left text-teal mr-2" style="color:#2aa8a8;"></i> Contenido e Itinerario</h6>
        </div>
        <div class="card-body">
            <div class="mb-4">
                <label class="form-label font-weight-600">Presentación / Resumen general</label>
                <textarea class="ckeditor form-control" name="contenido" id="contenido">{!! old('contenido', $tour->contenido) !!}</textarea>
            </div>
            <div class="mb-4">
                <label class="form-label font-weight-600">Itinerario detallado</label>
                <textarea class="ckeditor form-control" name="detallado" id="detallado">{!! old('detallado', $tour->detallado) !!}</textarea>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-3">
                    <label class="form-label font-weight-600">Qué incluye</label>
                    <textarea class="ckeditor form-control" name="incluidos" id="incluidos">{!! old('incluidos', $tour->incluidos) !!}</textarea>
                </div>
                <div class="col-lg-6 col-md-12 mb-3">
                    <label class="form-label font-weight-600">Información importante / Qué llevar</label>
                    <textarea class="ckeditor form-control" name="importante" id="importante">{!! old('importante', $tour->importante) !!}</textarea>
                </div>
            </div>
            <div class="mb-2">
                <label class="form-label font-weight-600">Código embebido de Mapa <small class="text-muted">(iframe Google Maps)</small></label>
                <textarea name="mapa" id="mapa" class="form-control form-control-sm" rows="3">{!! old('mapa', $tour->mapa) !!}</textarea>
            </div>
        </div>
    </div>

    {{-- Multimedia y SEO --}}
    <div class="card pm-card">
        <div class="card-header pm-card-header">
            <h6><i class="fas fa-image text-teal mr-2" style="color:#2aa8a8;"></i> Imagen, Banner y SEO</h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-4">
                    <label class="form-label font-weight-600">Imagen principal de portada</label>
                    <input type="file" id="img" name="img" class="form-control form-control-sm mb-2" accept="image/*">
                    @if($tour->img)
                        <div class="mt-2 p-2 border rounded bg-light" style="display:inline-block;">
                            <img src="{{ asset($tour->img) }}" alt="{{ $tour->nombre }}" class="rounded shadow-sm" style="max-height:160px; max-width:100%; object-fit:cover;">
                            <small class="text-muted d-block mt-1 font-monospace">{{ $tour->img }}</small>
                        </div>
                    @endif
                </div>

                <div class="col-lg-6 col-md-12 mb-4">
                    <label class="form-label font-weight-600">Clase del banner panorámico</label>
                    <select name="clase" id="clase" class="form-control form-control-sm mb-2">
                        @php
                            $clases = [
                                'aventuras' => 'Camino Inca Salkantay',
                                'imperdible' => 'Cusco city tour',
                                'machu' => 'Machu Picchu',
                                'ollantaytambo' => 'Ollantaytambo',
                                'pachamamalodge' => 'Vista Valle Sagrado',
                                'valle' => 'Vista Valle Sagrado 2',
                                'santuaryLodge' => 'Hotel Sanctuary Lodge',
                                'puno' => 'Balsa en Lago Titicaca',
                                'selva' => 'Amazonas',
                                'caminata' => 'Caminata Salkantay',
                                'nazca' => 'Lineas de Nazca',
                                'lima' => 'Ciudad de Lima',
                                'arequipa' => 'Ciudad de Arequipa',
                                'huchuy' => 'Huchuy Qosqo',
                                'choque' => 'Choquequirao',
                                'humantay' => 'Laguna Humantay',
                                'vinicunca' => 'Vinicunca',
                                'ica' => 'Huacachina',
                                'pisco' => 'Reserva Nacional Paracas',
                                'puerto' => 'Puerto Maldonado'
                            ];
                        @endphp
                        @foreach($clases as $val => $lbl)
                            <option value="{{ $val }}" {{ old('clase', $tour->clase) === $val ? 'selected' : '' }}>
                                {{ $lbl }} ({{ $val }})
                            </option>
                        @endforeach
                    </select>
                    <div id="dynamic-class-div" class="{{ old('clase', $tour->clase) }} rounded border shadow-sm" style="width:100%; height:140px; background-size:cover; background-position:center;">
                    </div>
                </div>

                <div class="col-12 mb-2">
                    <label class="form-label font-weight-600">Keywords SEO <small class="text-muted">— separar por comas</small></label>
                    <input type="text" id="keywords" name="keywords" class="form-control form-control-sm" value="{{ old('keywords', $tour->keywords) }}" placeholder="machu picchu tour, inca trail, cusco travel">
                </div>
            </div>
        </div>
    </div>

    {{-- Acciones --}}
    <div class="pm-form-actions mb-4">
        <button type="submit" class="btn btn-pm-primary">
            <i class="fas fa-save mr-1"></i> Guardar Cambios
        </button>
        <a href="{{ route('toursen.index') }}" class="btn btn-secondary">
            <i class="fas fa-times mr-1"></i> Cancelar
        </a>
    </div>
</form>

@push('admin_scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    var selectElement = document.getElementById('clase');
    var dynamicDiv = document.getElementById('dynamic-class-div');
    if (selectElement && dynamicDiv) {
        selectElement.addEventListener('change', function() {
            dynamicDiv.className = 'rounded border shadow-sm ' + this.value;
        });
    }
});
</script>
@endpush
@endsection
