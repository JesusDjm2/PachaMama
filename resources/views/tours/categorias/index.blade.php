@extends('layouts.admin')
@section('titulo', 'Categorías en Español')

@section('contenido')
<div class="pm-page-header">
    <div>
        <h1>Categorías de Tours en Español</h1>
        <small>Categorías organizadas para el catálogo de tours en español</small>
    </div>
    <a href="{{ route('categoria.create') }}" class="btn btn-pm-primary btn-sm">
        <i class="fas fa-plus mr-1"></i> Nueva Categoría
    </a>
</div>

@if (session('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="fas fa-check-circle mr-1"></i> {{ session('status') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

<div class="card pm-card">
    <div class="card-header pm-card-header">
        <div class="d-flex align-items-center flex-wrap" style="gap:0.75rem;">
            <h6>Listado de categorías</h6>
            <span class="badge badge-pill badge-light border text-muted" style="font-size:0.75rem; font-weight:600;">
                <span id="catTotalCount">{{ count($categories) }}</span> categorías
            </span>
        </div>
        <div class="pm-search">
            <input type="text" id="search" class="form-control" placeholder="Buscar categoría...">
        </div>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table id="tabladatos" class="table pm-table table-hover mb-0">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Enlace (slug)</th>
                        <th class="text-center" style="width:140px;">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($categories as $category)
                        <tr>
                            <td class="font-weight-bold" style="color:#1a2e45;">{{ $category->nombre }}</td>
                            <td><code style="font-size:0.78rem; color:#6b7280;">{{ $category->link }}</code></td>
                            <td class="text-center" style="white-space:nowrap;">
                                <a href="{{ route('categoria.show', $category) }}" class="btn btn-action btn-action-view" title="Ver en web" target="_blank">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('categoria.edit', $category) }}" class="btn btn-action btn-action-edit" title="Editar">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <button type="button" class="btn btn-action btn-action-delete" title="Eliminar categoría"
                                    onclick="confirmDeletion('{{ route('categoria.destroy', $category) }}')">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3" class="text-center py-4 text-muted">
                                <i class="fas fa-folder-open fa-2x mb-2 d-block" style="opacity:0.4;"></i>
                                No hay categorías registradas.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

@push('admin_scripts')
<script>
function confirmDeletion(url) {
    confirmarEliminarUrl(url, '¿Eliminar categoría en español?', 'Esta categoría será eliminada permanentemente del catálogo.');
}

(function() {
    var searchInput = document.getElementById('search');
    var table = document.getElementById('tabladatos');
    if (!searchInput || !table) return;

    var tbody = table.querySelector('tbody');
    var rows = Array.from(tbody.querySelectorAll('tr'));
    var countEl = document.getElementById('catTotalCount');

    function normalizar(str) {
        return (str || '').toLowerCase().normalize('NFD').replace(/[\u0300-\u036f]/g, '');
    }

    searchInput.addEventListener('input', function() {
        var query = normalizar(this.value.trim());
        var visibleCount = 0;

        rows.forEach(function(row) {
            if (row.cells.length < 2) return;
            var name = normalizar(row.cells[0].textContent);
            var link = normalizar(row.cells[1].textContent);
            var match = query === '' || name.includes(query) || link.includes(query);

            row.style.display = match ? '' : 'none';
            if (match) visibleCount++;
        });

        if (countEl) countEl.textContent = visibleCount;
    });
})();
</script>
@endpush
@endsection
