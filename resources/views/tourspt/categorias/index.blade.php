@extends('layouts.admin')
@section('titulo', 'Categorías de Tours en Portugués')

@section('contenido')
<div class="pm-page-header">
    <div>
        <h1>Categorías de Tours</h1>
        <small>Categorías visibles en la web en portugués</small>
    </div>
    <a href="{{ route('ptcategoria.create') }}" class="btn btn-pm-primary btn-sm">
        <i class="fas fa-plus mr-1"></i> Nueva Categoría
    </a>
</div>

@if(session('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="fas fa-check-circle mr-1"></i> {{ session('status') }}
        <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
    </div>
@endif

<div class="card pm-card">
    <div class="card-header pm-card-header">
        <h6>Listado de categorías</h6>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table pm-table table-hover mb-0">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Enlace</th>
                        <th class="text-center">Tours</th>
                        <th class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <td class="font-weight-bold" style="color:#1a2e45;">{{ $category->nombre }}</td>
                        <td><code style="font-size:0.78rem; color:#6b7280;">{{ $category->link }}</code></td>
                        <td class="text-center">
                            <span class="badge {{ $category->tours_count > 0 ? 'badge-primary' : 'badge-secondary' }}">{{ $category->tours_count }}</span>
                        </td>
                        <td class="text-center" style="white-space:nowrap;">
                            <a href="{{ route('pt.categoria', $category->link) }}" class="btn btn-action btn-action-view" title="Ver no site" target="_blank">
                                <i class="fas fa-eye"></i>
                            </a>
                            <a href="{{ route('ptcategoria.edit', $category) }}" class="btn btn-action btn-action-edit" title="Editar">
                                <i class="fas fa-edit"></i>
                            </a>
                            <button type="button" class="btn btn-action btn-action-delete" title="Excluir"
                                onclick="confirmDeletion('{{ route('ptcategoria.destroy', $category) }}')">
                                <i class="fas fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@push('admin_scripts')
<script>
function confirmDeletion(url) {
    confirmarEliminarUrl(url, 'Excluir categoria em português?', 'Esta categoria em português será excluída permanentemente do catálogo.');
}
</script>
@endpush
@endsection
