@extends('layouts.admin')
@section('titulo', 'Blogs en Español')

@section('contenido')
<div class="pm-page-header">
    <div>
        <h1>Blogs en Español</h1>
        <small>Artículos del blog publicados en español</small>
    </div>
    <a href="{{ route('blogs.create') }}" class="btn btn-pm-primary btn-sm">
        <i class="fas fa-plus mr-1"></i> Nuevo Blog
    </a>
</div>

@if($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="fas fa-check-circle mr-1"></i> {{ $message }}
        <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
    </div>
@endif

<div class="card pm-card">
    <div class="card-header pm-card-header">
        <h6>Listado de artículos</h6>
        <div class="pm-search">
            <input type="text" id="search" class="form-control form-control-sm" placeholder="Buscar blog...">
        </div>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table id="tabladatos" class="table pm-table table-hover mb-0">
                <thead>
                    <tr>
                        <th class="sortable" data-index="0">Título</th>
                        <th>Imagen</th>
                        <th>Tags</th>
                        <th class="sortable" data-index="3">Slug</th>
                        <th class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($blogs as $blog)
                    <tr>
                        <td>
                            <div class="font-weight-bold" style="color:#1a2e45;">{{ $blog->nombre }}</div>
                            <div style="font-size:0.78rem; color:#6b7280; margin-top:2px;">{{ Str::limit($blog->descripcion, 70) }}</div>
                        </td>
                        <td><img src="{{ $blog->img }}" width="100" height="65" style="border-radius:8px; object-fit:cover;" alt="{{ $blog->nombre }}"></td>
                        <td>
                            @foreach($blog->tags as $tag)
                                <span class="badge-cat">{{ $tag->nombre }}</span>
                            @endforeach
                        </td>
                        <td><code style="font-size:0.75rem; color:#6b7280;">{{ $blog->slug }}</code></td>
                        <td class="text-center" style="white-space:nowrap;">
                            <form action="{{ route('blogs.destroy', $blog->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('blog.show', $blog->slug) }}" class="btn btn-action btn-action-view" title="Ver en web" target="_blank">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('blogs.edit', $blog->id) }}" class="btn btn-action btn-action-edit" title="Editar">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <button type="submit" class="btn btn-action btn-action-delete" title="Eliminar"
                                    onclick="return confirm('¿Eliminar este blog?');">
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
