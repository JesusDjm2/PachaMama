@extends('layouts.admin')

@section('titulo', 'Criar Categoria')

@section('contenido')
<div class="card pm-card">
    <div class="card-header pm-card-header">
        <h6 class="mb-0">Criar nova categoria (PT)</h6>
        <a href="{{ route('ptcategoria.index') }}" class="btn btn-secondary btn-sm">Voltar</a>
    </div>
    <div class="card-body">
        <form action="{{ route('ptcategoria.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nombre" class="form-label">Nome</label>
                <input type="text" class="form-control form-control-sm" id="nombre" name="nombre" required
                    value="{{ old('nombre') }}">
                @error('nombre')<div class="text-danger" style="font-size:0.78rem;">{{ $message }}</div>@enderror
            </div>
            <div class="mb-3">
                <label for="link" class="form-label">Link</label>
                <input type="text" class="form-control form-control-sm" id="link" name="link" readonly
                    value="{{ old('link') }}">
                @error('link')<div class="text-danger" style="font-size:0.78rem;">{{ $message }}</div>@enderror
            </div>
            <button type="submit" class="btn btn-pm-primary">Criar</button>
        </form>
    </div>
</div>

@push('admin_scripts')
<script>
document.getElementById('nombre').addEventListener('input', function () {
    document.getElementById('link').value = this.value.trim().replace(/\s+/g, '-').toLowerCase();
});
</script>
@endpush
@endsection
