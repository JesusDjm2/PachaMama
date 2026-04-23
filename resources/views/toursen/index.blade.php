@extends('layouts.admin')
@section('titulo', 'Tours en Inglés')

@section('contenido')
<div class="pm-page-header">
    <div>
        <h1>Tours en Inglés</h1>
        <small>Gestiona todos los tours publicados en inglés</small>
    </div>
    <a href="{{ route('toursen.create') }}" class="btn btn-pm-primary btn-sm">
        <i class="fas fa-plus mr-1"></i> Nuevo Tour
    </a>
</div>

@if(session('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="fas fa-check-circle mr-1"></i> {{ session('status') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

<div class="card pm-card">
    <div class="card-header pm-card-header">
        <h6>Listado de tours</h6>
        <div class="pm-search">
            <input type="text" id="search" class="form-control form-control-sm" placeholder="Buscar tour...">
        </div>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table id="tabladatos" class="table pm-table table-hover mb-0">
                <thead>
                    <tr>
                        <th class="sortable" data-index="0">Nombre</th>
                        <th>Imagen</th>
                        <th class="sortable" data-index="2">Categoría</th>
                        <th>Categorías web</th>
                        <th class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tours as $tour)
                    <tr>
                        <td>
                            <div class="font-weight-bold" style="color:#1a2e45;">{{ $tour->nombre }}</div>
                            <div style="font-size:0.78rem; color:#6b7280; margin-top:2px;">
                                <span class="mr-2"><i class="fas fa-dollar-sign fa-xs mr-1"></i>{{ $tour->precio }}</span>
                                <span class="mr-2"><i class="fas fa-calendar-day fa-xs mr-1"></i>{{ $tour->dias }} días</span>
                                <span><i class="fas fa-map-marker-alt fa-xs mr-1"></i>{{ $tour->ubicacion }}</span>
                            </div>
                        </td>
                        <td><img src="{{ $tour->img }}" width="100" height="65" style="border-radius:8px; object-fit:cover;"></td>
                        <td><span class="pm-table badge-cat">{{ $tour->categoria }}</span></td>
                        <td>
                            @if($tour->categories->isEmpty())
                                <span style="color:#9ca3af; font-size:0.78rem;">Sin categorías</span>
                            @else
                                @foreach($tour->categories as $cat)
                                    <span class="pm-table badge-cat">{{ $cat->nombre }}</span>
                                @endforeach
                            @endif
                        </td>
                        <td class="text-center" style="white-space:nowrap;">
                            <form action="{{ route('toursen.destroy', $tour->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('toursen.edit', $tour->id) }}" class="btn btn-action btn-action-edit" title="Editar">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="{{ route('toursen.show', ['slug' => $tour->slug]) }}" class="btn btn-action btn-action-view" title="Ver en web" target="_blank">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <button type="submit" class="btn btn-action btn-action-delete" title="Eliminar"
                                    onclick="return confirm('¿Eliminar este tour?');">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
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
(function() {
    const searchInput = document.getElementById('search');
    const table = document.getElementById('tabladatos');
    const tbody = table.querySelector('tbody');
    const rows = Array.from(tbody.querySelectorAll('tr'));
    const headers = table.querySelectorAll('thead th.sortable');

    function normalize(str) {
        return str.normalize('NFD').replace(/[\u0300-\u036f]/g, '').toLowerCase();
    }

    searchInput.addEventListener('input', function() {
        const q = normalize(this.value);
        rows.forEach(row => {
            row.style.display = normalize(row.textContent).includes(q) ? '' : 'none';
        });
    });

    headers.forEach(th => {
        th.addEventListener('click', function() {
            const idx = parseInt(this.dataset.index);
            const asc = !this.classList.contains('asc');
            headers.forEach(h => h.classList.remove('asc', 'desc'));
            this.classList.add(asc ? 'asc' : 'desc');
            rows.sort((a, b) => {
                const ta = normalize(a.children[idx].textContent);
                const tb = normalize(b.children[idx].textContent);
                return asc ? ta.localeCompare(tb) : tb.localeCompare(ta);
            }).forEach(r => tbody.appendChild(r));
        });
    });
})();
</script>
@endpush
@endsection
