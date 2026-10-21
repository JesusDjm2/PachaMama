@extends('layouts.admin')
@section('titulo', 'Editar tour em português')

@section('contenido')
<div class="pm-page-header">
    <div>
        <h1>Editar tour: {{ $tour->nombre }}</h1>
        <small>Tour publicado em português</small>
    </div>
    <a href="{{ route('tourspt.index') }}" class="btn btn-secondary btn-sm">
        <i class="fas fa-arrow-left mr-1"></i> Voltar
    </a>
</div>

@if(session('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="fas fa-check-circle mr-1"></i> {{ session('status') }}
        <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('tourspt.update', $tour->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="card pm-card">
        <div class="card-header pm-card-header">
            <h6>Informações básicas</h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6 mb-3">
                    <label class="form-label">Nome do tour</label>
                    <input type="text" name="nombre" class="form-control form-control-sm" required
                        value="{{ old('nombre', $tour->nombre) }}">
                    @error('nombre')<div class="text-danger" style="font-size:0.78rem;">{{ $message }}</div>@enderror
                </div>
                <div class="col-lg-2 mb-3">
                    <label class="form-label">Preço (USD)</label>
                    <input type="text" name="precio" class="form-control form-control-sm" required
                        value="{{ old('precio', $tour->precio) }}">
                </div>
                <div class="col-lg-2 mb-3">
                    <label class="form-label">Dias</label>
                    <input type="text" name="dias" class="form-control form-control-sm" required
                        value="{{ old('dias', $tour->dias) }}">
                </div>
                <div class="col-lg-2 mb-3">
                    <label class="form-label">Localização</label>
                    <input type="text" name="ubicacion" class="form-control form-control-sm" required
                        value="{{ old('ubicacion', $tour->ubicacion) }}">
                </div>
                <div class="col-12 mb-3">
                    <label class="form-label">Descrição curta (meta)</label>
                    <input type="text" name="descripcion" class="form-control form-control-sm" required
                        value="{{ old('descripcion', $tour->descripcion) }}">
                </div>
                <div class="col-lg-6 mb-3">
                    <label class="form-label">Tour em espanhol vinculado</label>
                    <select name="tour_id" id="tour_id" class="form-control form-control-sm" required>
                        <option value="">— Selecionar tour —</option>
                        @foreach($toursDisponibles as $t)
                            <option value="{{ $t->id }}" {{ (string) old('tour_id', $tour->tour_id) === (string) $t->id ? 'selected' : '' }}>{{ $t->nombre }}</option>
                        @endforeach
                    </select>
                    @error('tour_id')<div class="text-danger" style="font-size:0.78rem;">{{ $message }}</div>@enderror
                </div>
                <div class="col-lg-6 mb-3">
                    <label class="form-label">Categorias do site</label>
                    <div class="row">
                        @foreach($categorias as $cat)
                            <div class="col-md-6">
                                <div class="form-check">
                                    <input type="checkbox" name="categories[]" value="{{ $cat->id }}"
                                        class="form-check-input" id="categoria-{{ $cat->id }}"
                                        {{ in_array($cat->id, old('categories', $tour->categories->pluck('id')->toArray())) ? 'checked' : '' }}>
                                    <label class="form-check-label" for="categoria-{{ $cat->id }}">{{ $cat->nombre }}</label>
                                </div>
                            </div>
                        @endforeach
                    </div>
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
                <textarea class="ckeditor form-control" name="contenido" id="contenido">{!! old('contenido', $tour->contenido) !!}</textarea>
            </div>
            <div class="mb-3">
                <label class="form-label">Detalhado</label>
                <textarea class="ckeditor form-control" name="detallado" id="detallado" required>{!! old('detallado', $tour->detallado) !!}</textarea>
            </div>
            <div class="row">
                <div class="col-lg-4 mb-3">
                    <label class="form-label">Inclui <small>— apenas listas</small></label>
                    <textarea class="ckeditor form-control" name="incluidos" id="incluidos" required>{!! old('incluidos', $tour->incluidos) !!}</textarea>
                </div>
                <div class="col-lg-4 mb-3">
                    <label class="form-label">Importante <small>— apenas listas</small></label>
                    <textarea class="ckeditor form-control" name="importante" id="importante">{!! old('importante', $tour->importante) !!}</textarea>
                </div>
                <div class="col-lg-4 mb-3">
                    <label class="form-label">Mapa (embed)</label>
                    <textarea class="ckeditor form-control" name="mapa" id="mapa">{!! old('mapa', $tour->mapa) !!}</textarea>
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
                <div class="col-lg-4 mb-3">
                    <label class="form-label">Trocar imagem</label>
                    <input type="file" name="img" class="form-control form-control-sm" accept="image/*">
                    @if ($tour->img)
                        <img src="{{ asset($tour->img) }}" class="mt-2" width="100%" height="180" style="object-fit:cover; border-radius:8px;">
                    @endif
                </div>
                <div class="col-lg-8 mb-3">
                    <label class="form-label">Classe da imagem</label>
                    <select name="clase" id="clase" class="form-control form-control-sm" required>
                        @foreach([
                            'aventuras' => 'Caminho Inca / Salkantay',
                            'imperdible' => 'Cusco city tour',
                            'machu' => 'Machu Picchu',
                            'ollantaytambo' => 'Ollantaytambo',
                            'pachamamalodge' => 'Vista Valle Sagrado',
                            'valle' => 'Vista Valle Sagrado 2',
                            'santuaryLodge' => 'Hotel Sanctuary Lodge',
                            'puno' => 'Balsa Lago Titicaca',
                            'selva' => 'Amazônia',
                            'caminata' => 'Caminhada Salkantay',
                            'nazca' => 'Linhas de Nazca',
                            'lima' => 'Cidade de Lima',
                            'arequipa' => 'Cidade de Arequipa',
                            'huchuy' => 'Huchuy Qosqo',
                            'choque' => 'Choquequirao',
                            'humantay' => 'Laguna Humantay',
                            'vinicunca' => 'Vinicunca',
                            'ica' => 'Huacachina',
                            'pisco' => 'Reserva Paracas',
                            'puerto' => 'Puerto Maldonado',
                        ] as $value => $label)
                            <option value="{{ $value }}" {{ old('clase', $tour->clase) === $value ? 'selected' : '' }}>{{ $label }}</option>
                        @endforeach
                    </select>
                    <div id="clase-preview" class="pm-clase-preview mt-2 {{ old('clase', $tour->clase) }}"></div>
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
                    <input type="text" name="keywords" class="form-control form-control-sm" required
                        value="{{ old('keywords', $tour->keywords) }}">
                </div>
                <div class="col-lg-4 mb-3">
                    <label class="form-label">Slug</label>
                    <input type="text" name="slug" class="form-control form-control-sm" required
                        value="{{ old('slug', $tour->slug) }}"
                        onkeyup="this.value = this.value.replace(/ /g, '-').replace(/[-]{2,}/g, '-')">
                    @error('slug')<div class="text-danger" style="font-size:0.78rem;">{{ $message }}</div>@enderror
                </div>
            </div>
        </div>
    </div>

    <div class="pm-form-actions">
        <button type="submit" class="btn btn-pm-primary">
            <i class="fas fa-save mr-1"></i> Salvar alterações
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
