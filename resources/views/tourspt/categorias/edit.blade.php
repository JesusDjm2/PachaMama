@extends('layouts.admin')

@section('titulo', 'Editar Categoria')

@section('contenido')
<div class="card pm-card">
    <div class="card-header pm-card-header">
        <h6 class="mb-0">Editar categoria: {{ $ptcategoria->nombre }}</h6>
        <a href="{{ route('ptcategoria.index') }}" class="btn btn-secondary btn-sm">Voltar</a>
    </div>
    <div class="card-body">
        <form action="{{ route('ptcategoria.update', $ptcategoria) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="nombre" class="form-label">Nome</label>
                <input type="text" class="form-control form-control-sm" id="nombre" name="nombre" required
                    value="{{ old('nombre', $ptcategoria->nombre) }}">
                @error('nombre')<div class="text-danger" style="font-size:0.78rem;">{{ $message }}</div>@enderror
            </div>
            <div class="mb-3">
                <label for="link" class="form-label">Link</label>
                <input type="text" class="form-control form-control-sm" id="link" name="link" readonly
                    value="{{ old('link', $ptcategoria->link) }}">
                <small class="text-muted">Mudar o link quebra os URLs já publicados e os hreflang dessa categoria.</small>
                @error('link')<div class="text-danger" style="font-size:0.78rem;">{{ $message }}</div>@enderror
            </div>
            <button type="submit" class="btn btn-pm-primary">Atualizar</button>
        </form>
    </div>
</div>

@push('admin_scripts')
<script>
document.getElementById('nombre').addEventListener('input', function () {
    document.getElementById('link').value = this.value.trim()
        .normalize('NFD').replace(/[\u0300-\u036f]/g, '')
        .replace(/\s+/g, '-').toLowerCase();
});
</script>
@endpush
@endsection
