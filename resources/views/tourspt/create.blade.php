@extends('layouts.admin')
@section('titulo', 'Criar Tour em Português')

@section('contenido')
<div class="pm-page-header">
    <div>
        <h1>Criar Tour em Português</h1>
        <small>Novo tour visível na versão em português do site</small>
    </div>
    <a href="{{ route('tourspt.index') }}" class="btn btn-secondary btn-sm">
        <i class="fas fa-arrow-left mr-1"></i> Voltar
    </a>
</div>

@if (isset($errors) && $errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('tourspt.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="card pm-card">
        <div class="card-header pm-card-header">
            <h6>Informações básicas</h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6 mb-3">
                    <label class="form-label">Nome do tour</label>
                    <input type="text" name="nombre" class="form-control form-control-sm" required
                        value="{{ old('nombre') }}">
                    @error('nombre')<div class="text-danger" style="font-size:0.78rem;">{{ $message }}</div>@enderror
                </div>
                <div class="col-lg-2 mb-3">
                    <label class="form-label">Preço (USD)</label>
                    <input type="text" name="precio" class="form-control form-control-sm" required
                        value="{{ old('precio') }}">
                </div>
                <div class="col-lg-2 mb-3">
                    <label class="form-label">Dias</label>
                    <input type="text" name="dias" class="form-control form-control-sm" required
                        value="{{ old('dias') }}">
                </div>
                <div class="col-lg-2 mb-3">
                    <label class="form-label">Localização</label>
                    <input type="text" name="ubicacion" class="form-control form-control-sm" required
                        value="{{ old('ubicacion') }}">
                </div>
                <div class="col-12 mb-3">
                    <label class="form-label">Descrição curta (meta)</label>
                    <input type="text" name="descripcion" class="form-control form-control-sm" required
                        value="{{ old('descripcion') }}">
                </div>
                <div class="col-lg-6 mb-3">
                    <label class="form-label">Tour em espanhol vinculado</label>
                    <select name="tour_id" id="tour_id" class="form-control form-control-sm" required>
                        <option value="">— Selecionar tour —</option>
                        @foreach($toursDisponibles as $t)
                            <option value="{{ $t->id }}" {{ (string) old('tour_id') === (string) $t->id ? 'selected' : '' }}>{{ $t->nombre }}</option>
                        @endforeach
                    </select>
                    @error('tour_id')<div class="text-danger" style="font-size:0.78rem;">{{ $message }}</div>@enderror
                </div>
                <div class="col-lg-6 mb-3">
                    <label class="form-label">Categorias do site</label>
                    <select name="categoria[]" id="categoria" class="form-control form-control-sm" multiple>
                        @foreach($categories as $cat)
                            <option value="{{ $cat->id }}" {{ in_array($cat->id, old('categoria', [])) ? 'selected' : '' }}>{{ $cat->nombre }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
    </div>

    <div class="card pm-card">
        <div class="card-header pm-card-header">
            <h6>Conteúdo do tour</h6>
        </div>
        <div class="card-body">
            <div class="mb-3">
                <label class="form-label">Conteúdo principal</label>
                <textarea class="ckeditor form-control" name="contenido" id="contenido">{{ old('contenido') }}</textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Detalhado</label>
                <textarea class="ckeditor form-control" name="detallado" id="detallado" required>{{ old('detallado') }}</textarea>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-3">
                    <label class="form-label">Inclui <small>— apenas listas</small></label>
                    <textarea class="ckeditor form-control" name="incluidos" id="incluidos" required>{{ old('incluidos') }}</textarea>
                </div>
                <div class="col-lg-4 mb-3">
                    <label class="form-label">Importante <small>— apenas listas</small></label>
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
            <h6>Imagem e classe</h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6 mb-3">
                    <label class="form-label">Imagem principal</label>
                    <input type="file" name="img" class="form-control form-control-sm" accept="image/*" required>
                </div>
                <div class="col-lg-6 mb-3">
                    <label class="form-label">Classe da imagem</label>
                    <select name="clase" id="clase" class="form-control form-control-sm" required>
                        <option value="aventuras">Caminho Inca / Salkantay</option>
                        <option value="imperdible">Cusco city tour</option>
                        <option value="machu">Machu Picchu</option>
                        <option value="ollantaytambo">Ollantaytambo</option>
                        <option value="pachamamalodge">Vista Valle Sagrado</option>
                        <option value="valle">Vista Valle Sagrado 2</option>
                        <option value="santuaryLodge">Hotel Sanctuary Lodge</option>
                        <option value="puno">Balsa Lago Titicaca</option>
                        <option value="selva">Amazônia</option>
                        <option value="caminata">Caminhada Salkantay</option>
                        <option value="nazca">Linhas de Nazca</option>
                        <option value="lima">Cidade de Lima</option>
                        <option value="arequipa">Cidade de Arequipa</option>
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
                    <label class="form-label">Keywords <small>— separar por vírgulas</small></label>
                    <input type="text" name="keywords" class="form-control form-control-sm" required value="{{ old('keywords') }}">
                </div>
                <div class="col-lg-4 mb-3">
                    <label class="form-label">Slug</label>
                    <input type="text" name="slug" class="form-control form-control-sm" required value="{{ old('slug') }}"
                        onkeyup="this.value = this.value.replace(/ /g, '-').replace(/[-]{2,}/g, '-')">
                    @error('slug')<div class="text-danger" style="font-size:0.78rem;">{{ $message }}</div>@enderror
                </div>
            </div>
        </div>
    </div>

    <div class="pm-form-actions">
        <button type="submit" class="btn btn-pm-primary">
            <i class="fas fa-save mr-1"></i> Salvar tour
        </button>
        <a href="{{ route('tourspt.index') }}" class="btn btn-secondary">
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
