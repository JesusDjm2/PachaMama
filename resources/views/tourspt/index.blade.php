@extends('layouts.admin')
@section('titulo', 'Tours em Português')

@section('contenido')
<div class="pm-page-header">
    <div>
        <h1>Tours em Português</h1>
        <small>Gerencie todos os tours publicados em português</small>
    </div>
    <a href="{{ route('tourspt.create') }}" class="btn btn-pm-primary btn-sm">
        <i class="fas fa-plus mr-1"></i> Novo Tour
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

<div class="card pm-card">
    <div class="card-header pm-card-header">
        <div class="d-flex align-items-center flex-wrap" style="gap:8px;">
            <h6 class="mb-0 mr-3">
                Lista de tours
                <span class="badge badge-secondary ml-1">{{ $tours->count() }}</span>
                @if($filtroCategoria)
                    <span class="badge badge-primary ml-1">filtrado</span>
                @endif
            </h6>
            <a href="{{ route('tourspt.index') }}"
               class="badge {{ !$filtroCategoria ? 'badge-dark' : 'badge-light border' }} px-3 py-2"
               style="font-size:0.78rem;text-decoration:none;cursor:pointer;">
                Todos
            </a>
            @foreach($categories as $cat)
            <a href="{{ route('tourspt.index', ['categoria' => $cat->link]) }}"
               class="badge {{ $filtroCategoria === $cat->link ? 'badge-primary' : 'badge-light border' }} px-3 py-2"
               style="font-size:0.78rem;text-decoration:none;cursor:pointer;">
                {{ $cat->nombre }}
            </a>
            @endforeach
        </div>
        <div class="pm-search mt-2 mt-sm-0">
            <input type="text" id="search" class="form-control form-control-sm" placeholder="Buscar tour...">
        </div>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table id="tabladatos" class="table pm-table table-hover mb-0">
                <thead>
                    <tr>
                        <th class="sortable" data-index="0">Nome</th>
                        <th>Imagen</th>
                        <th>Tour em espanhol</th>
                        <th class="sortable" data-index="3">Categorias</th>
                        <th class="text-center">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($tours as $tour)
                    <tr>
                        <td>
                            <div class="font-weight-bold" style="color:#1a2e45;">{{ $tour->nombre }}</div>
                            <div style="font-size:0.78rem; color:#6b7280; margin-top:2px;">
                                <span class="mr-2"><i class="fas fa-dollar-sign fa-xs mr-1"></i>{{ $tour->precio }}</span>
                                <span class="mr-2"><i class="fas fa-calendar-day fa-xs mr-1"></i>{{ $tour->dias }} dias</span>
                                <span><i class="fas fa-map-marker-alt fa-xs mr-1"></i>{{ $tour->ubicacion }}</span>
                            </div>
                        </td>
                        <td><img src="{{ asset($tour->img) }}" width="100" height="65" style="border-radius:8px; object-fit:cover;"></td>
                        <td style="font-size:0.82rem;">
                            @if ($tour->tour)
                                <a href="{{ route('tours.edit', $tour->tour->id) }}">{{ Str::limit($tour->tour->nombre, 40) }}</a>
                            @else
                                <span class="text-muted">—</span>
                            @endif
                        </td>
                        <td>
                            @if($tour->categories->isEmpty())
                                <span style="color:#9ca3af; font-size:0.78rem;">Sem categorias</span>
                            @else
                                @foreach($tour->categories as $cat)
                                    <span class="pm-table badge-cat">{{ $cat->nombre }}</span>
                                @endforeach
                            @endif
                        </td>
                        <td class="text-center" style="white-space:nowrap;">
                            <form action="{{ route('tourspt.destroy', $tour->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('tourspt.edit', $tour->id) }}" class="btn btn-action btn-action-edit" title="Editar">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="{{ route('pt.tour', $tour->slug) }}" class="btn btn-action btn-action-view" title="Ver no site" target="_blank">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <button type="submit" class="btn btn-action btn-action-delete" title="Excluir"
                                    onclick="return confirm('Excluir este tour?');">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center text-muted py-4">
                            <i class="fas fa-search fa-2x mb-2 d-block"></i>
                            Nenhum tour nesta categoria.
                            <a href="{{ route('tourspt.index') }}">Ver todos</a>
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
