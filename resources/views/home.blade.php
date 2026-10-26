@extends('layouts.admin')
@section('titulo', 'Dashboard General')

@section('contenido')

<!-- Page Header -->
<div class="pm-page-header">
    <div>
        <h1 class="h3 font-weight-bold text-gray-800 mb-1">Dashboard de Administración</h1>
        <small class="text-muted">Resumen operativo del catálogo multilingüe, contenidos y accesos directos</small>
    </div>
    <div class="d-flex align-items-center" style="gap:8px;">
        <span class="badge badge-light border text-muted px-3 py-2" style="font-size:0.8rem; font-weight:600;">
            <i class="far fa-calendar-alt mr-1 text-info"></i> {{ date('d/m/Y') }}
        </span>
        <span class="badge badge-success px-3 py-2" style="font-size:0.8rem;">
            <i class="fas fa-circle fa-xs mr-1"></i> Sistema Operativo
        </span>
    </div>
</div>

<!-- 4 High-Impact KPI Cards -->
<div class="row mb-3">
    <!-- Tours Card -->
    <div class="col-xl-3 col-md-6 mb-3">
        <div class="card pm-kpi-card h-100 shadow-sm" style="border-left: 4px solid #2aa8a8;">
            <div class="card-body p-3">
                <div class="d-flex align-items-center justify-content-between mb-2">
                    <span class="text-uppercase font-weight-bold text-muted" style="font-size:0.75rem; letter-spacing:0.04em;">Tours Publicados</span>
                    <div class="pm-kpi-icon" style="background:rgba(42,168,168,0.12); color:#2aa8a8;">
                        <i class="fas fa-map-marked-alt"></i>
                    </div>
                </div>
                <div class="h3 font-weight-bold text-gray-800 mb-2">{{ $totalES + $totalEN + $totalPT }}</div>
                <div class="d-flex flex-wrap" style="gap:4px;">
                    <a href="{{ route('tours.index') }}" class="badge badge-success px-2 py-1" title="Ver tours en español">
                        ES: {{ $totalES }}
                    </a>
                    <a href="{{ route('toursen.index') }}" class="badge badge-primary px-2 py-1" title="Ver tours en inglés">
                        EN: {{ $totalEN }}
                    </a>
                    <a href="{{ route('tourspt.index') }}" class="badge badge-info px-2 py-1" title="Ver tours en portugués">
                        PT: {{ $totalPT }}
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Blogs Card -->
    <div class="col-xl-3 col-md-6 mb-3">
        <div class="card pm-kpi-card h-100 shadow-sm" style="border-left: 4px solid #4e73df;">
            <div class="card-body p-3">
                <div class="d-flex align-items-center justify-content-between mb-2">
                    <span class="text-uppercase font-weight-bold text-muted" style="font-size:0.75rem; letter-spacing:0.04em;">Artículos de Blog</span>
                    <div class="pm-kpi-icon" style="background:rgba(78,115,223,0.12); color:#4e73df;">
                        <i class="fas fa-newspaper"></i>
                    </div>
                </div>
                <div class="h3 font-weight-bold text-gray-800 mb-2">{{ $totalBlogsES + $totalBlogsEN + $totalBlogsPT }}</div>
                <div class="d-flex flex-wrap" style="gap:4px;">
                    <a href="{{ route('blogs.index') }}" class="badge badge-success px-2 py-1" title="Ver blogs en español">
                        ES: {{ $totalBlogsES }}
                    </a>
                    <a href="{{ route('enblogs.index') }}" class="badge badge-primary px-2 py-1" title="Ver blogs en inglés">
                        EN: {{ $totalBlogsEN }}
                    </a>
                    <a href="{{ route('ptblogs.index') }}" class="badge badge-info px-2 py-1" title="Ver blogs en portugués">
                        PT: {{ $totalBlogsPT }}
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Categorías Card -->
    <div class="col-xl-3 col-md-6 mb-3">
        <div class="card pm-kpi-card h-100 shadow-sm" style="border-left: 4px solid #f6c23e;">
            <div class="card-body p-3">
                <div class="d-flex align-items-center justify-content-between mb-2">
                    <span class="text-uppercase font-weight-bold text-muted" style="font-size:0.75rem; letter-spacing:0.04em;">Categorías Activas</span>
                    <div class="pm-kpi-icon" style="background:rgba(246,194,62,0.15); color:#c4971a;">
                        <i class="fas fa-tags"></i>
                    </div>
                </div>
                <div class="h3 font-weight-bold text-gray-800 mb-2">{{ $categoriasES->count() + $categoriasEN->count() + $categoriasPT->count() }}</div>
                <div class="d-flex flex-wrap" style="gap:4px;">
                    <a href="{{ route('categoria.index') }}" class="badge badge-success px-2 py-1" title="Categorías español">
                        ES: {{ $categoriasES->count() }}
                    </a>
                    <a href="{{ route('category.index') }}" class="badge badge-primary px-2 py-1" title="Categorías inglés">
                        EN: {{ $categoriasEN->count() }}
                    </a>
                    <a href="{{ route('ptcategoria.index') }}" class="badge badge-info px-2 py-1" title="Categorias portugués">
                        PT: {{ $categoriasPT->count() }}
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Sistema Card -->
    <div class="col-xl-3 col-md-6 mb-3">
        <div class="card pm-kpi-card h-100 shadow-sm" style="border-left: 4px solid #1a2e45;">
            <div class="card-body p-3">
                <div class="d-flex align-items-center justify-content-between mb-2">
                    <span class="text-uppercase font-weight-bold text-muted" style="font-size:0.75rem; letter-spacing:0.04em;">Recursos & Medios</span>
                    <div class="pm-kpi-icon" style="background:rgba(26,46,69,0.12); color:#1a2e45;">
                        <i class="fas fa-photo-video"></i>
                    </div>
                </div>
                <div class="h3 font-weight-bold text-gray-800 mb-2">{{ $totalImagenes }} <small class="text-muted" style="font-size:0.85rem; font-weight:400;">imágenes</small></div>
                <div class="d-flex flex-wrap" style="gap:6px;">
                    <a href="{{ route('imagenes.index') }}" class="badge badge-dark px-2 py-1" title="Ver galería">
                        <i class="fas fa-images mr-1"></i> Galería
                    </a>
                    <a href="{{ route('users.index') }}" class="badge badge-secondary px-2 py-1" title="Ver usuarios">
                        <i class="fas fa-users mr-1"></i> {{ $totalUsers }} Usuarios
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Compact Quick Actions Ribbon -->
<div class="card pm-card shadow-sm mb-4">
    <div class="card-header pm-card-header py-2">
        <h6 class="mb-0 text-uppercase" style="font-size:0.82rem;"><i class="fas fa-bolt text-warning mr-2"></i>Acciones Rápidas</h6>
        <small class="text-muted">Creación ágil de contenido multilingüe</small>
    </div>
    <div class="card-body py-3">
        <div class="d-flex flex-wrap align-items-center" style="gap:8px;">
            <span class="text-muted font-weight-bold small mr-1">Tours:</span>
            <a href="{{ route('tours.create') }}" class="btn btn-sm btn-outline-success">
                <i class="fas fa-plus mr-1"></i> Tour ES
            </a>
            <a href="{{ route('toursen.create') }}" class="btn btn-sm btn-outline-primary">
                <i class="fas fa-plus mr-1"></i> Tour EN
            </a>
            <a href="{{ route('tourspt.create') }}" class="btn btn-sm btn-outline-info">
                <i class="fas fa-plus mr-1"></i> Tour PT
            </a>

            <div class="border-left mx-2 d-none d-md-block" style="height:24px;"></div>

            <span class="text-muted font-weight-bold small mr-1">Blogs:</span>
            <a href="{{ route('blogs.create') }}" class="btn btn-sm btn-outline-secondary">
                <i class="fas fa-plus mr-1"></i> Blog ES
            </a>
            <a href="{{ route('enblogs.create') }}" class="btn btn-sm btn-outline-secondary">
                <i class="fas fa-plus mr-1"></i> Blog EN
            </a>
            <a href="{{ route('ptblogs.create') }}" class="btn btn-sm btn-outline-secondary">
                <i class="fas fa-plus mr-1"></i> Blog PT
            </a>

            <div class="border-left mx-2 d-none d-md-block" style="height:24px;"></div>

            <a href="{{ route('imagenes.create') }}" class="btn btn-sm btn-pm-primary ml-auto">
                <i class="fas fa-cloud-upload-alt mr-1"></i> Subir Imágenes
            </a>
        </div>
    </div>
</div>

<!-- Tabbed Category Explorer (Compact Master Card) -->
<div class="card pm-card shadow-sm mb-4">
    <div class="card-header pm-card-header py-2 d-flex align-items-center justify-content-between flex-wrap" style="gap:8px;">
        <div class="d-flex align-items-center flex-wrap" style="gap:8px;">
            <h6 class="mb-0 text-uppercase mr-3" style="font-size:0.82rem;">
                <i class="fas fa-folder-open text-primary mr-2"></i>Distribución de Categorías
            </h6>
            <!-- Tabs Navigation -->
            <ul class="nav nav-pills pm-nav-pills" id="categoryTabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active py-1 px-3" id="es-tab" data-toggle="pill" href="#tab-es" role="tab" aria-controls="tab-es" aria-selected="true">
                        <span class="badge badge-success mr-1">ES</span> Español ({{ $categoriasES->count() }})
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link py-1 px-3" id="en-tab" data-toggle="pill" href="#tab-en" role="tab" aria-controls="tab-en" aria-selected="false">
                        <span class="badge badge-primary mr-1">EN</span> English ({{ $categoriasEN->count() }})
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link py-1 px-3" id="pt-tab" data-toggle="pill" href="#tab-pt" role="tab" aria-controls="tab-pt" aria-selected="false">
                        <span class="badge badge-info mr-1">PT</span> Português ({{ $categoriasPT->count() }})
                    </a>
                </li>
            </ul>
        </div>
        <div class="d-flex align-items-center" style="gap:6px;">
            <a href="{{ route('categoria.index') }}" class="btn btn-sm btn-outline-secondary" id="manageCatBtn">
                <i class="fas fa-cog mr-1"></i> Gestionar Categorías (ES)
            </a>
        </div>
    </div>

    <div class="card-body p-0">
        <div class="tab-content" id="categoryTabsContent">
            <!-- Tab Español -->
            <div class="tab-pane fade show active" id="tab-es" role="tabpanel" aria-labelledby="es-tab">
                <div class="table-responsive">
                    <table class="table pm-table table-hover mb-0">
                        <thead>
                            <tr>
                                <th style="width:50px;">#</th>
                                <th>Nombre de la Categoría</th>
                                <th>Slug / Enlace</th>
                                <th class="text-center" style="width:140px;">Tours Asignados</th>
                                <th class="text-center" style="width:120px;">Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($categoriasES as $idx => $cat)
                            <tr>
                                <td class="text-muted">{{ $idx + 1 }}</td>
                                <td>
                                    <span class="font-weight-bold" style="color:#1a2e45;">{{ $cat->nombre }}</span>
                                </td>
                                <td>
                                    <code class="px-2 py-1 bg-light rounded" style="font-size:0.75rem; color:#2aa8a8;">{{ $cat->link }}</code>
                                </td>
                                <td class="text-center">
                                    <span class="badge {{ $cat->tours_count > 0 ? 'badge-success' : 'badge-secondary' }} px-3 py-1 font-weight-bold" style="font-size:0.85rem;">
                                        {{ $cat->tours_count }} tours
                                    </span>
                                </td>
                                <td class="text-center">
                                    <a href="{{ route('tours.index', ['categoria' => $cat->link]) }}" class="btn btn-action btn-action-view" title="Ver tours asociados">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('categoria.edit', $cat->id) }}" class="btn btn-action btn-action-edit" title="Editar categoría">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="text-center text-muted py-4">No hay categorías registradas en español.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Tab English -->
            <div class="tab-pane fade" id="tab-en" role="tabpanel" aria-labelledby="en-tab">
                <div class="table-responsive">
                    <table class="table pm-table table-hover mb-0">
                        <thead>
                            <tr>
                                <th style="width:50px;">#</th>
                                <th>Category Name</th>
                                <th>Slug / Link</th>
                                <th class="text-center" style="width:140px;">Assigned Tours</th>
                                <th class="text-center" style="width:120px;">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($categoriasEN as $idx => $cat)
                            <tr>
                                <td class="text-muted">{{ $idx + 1 }}</td>
                                <td>
                                    <span class="font-weight-bold" style="color:#1a2e45;">{{ $cat->nombre }}</span>
                                </td>
                                <td>
                                    <code class="px-2 py-1 bg-light rounded" style="font-size:0.75rem; color:#4e73df;">{{ $cat->link }}</code>
                                </td>
                                <td class="text-center">
                                    <span class="badge {{ $cat->toursens_count > 0 ? 'badge-primary' : 'badge-secondary' }} px-3 py-1 font-weight-bold" style="font-size:0.85rem;">
                                        {{ $cat->toursens_count }} tours
                                    </span>
                                </td>
                                <td class="text-center">
                                    <a href="{{ route('toursen.index', ['categoria' => $cat->link]) }}" class="btn btn-action btn-action-view" title="View associated tours">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('category.edit', $cat->id) }}" class="btn btn-action btn-action-edit" title="Edit category">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="text-center text-muted py-4">No categories registered in English.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Tab Português -->
            <div class="tab-pane fade" id="tab-pt" role="tabpanel" aria-labelledby="pt-tab">
                <div class="table-responsive">
                    <table class="table pm-table table-hover mb-0">
                        <thead>
                            <tr>
                                <th style="width:50px;">#</th>
                                <th>Nome da Categoria</th>
                                <th>Slug / Link</th>
                                <th class="text-center" style="width:140px;">Tours Vinculados</th>
                                <th class="text-center" style="width:120px;">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($categoriasPT as $idx => $cat)
                            <tr>
                                <td class="text-muted">{{ $idx + 1 }}</td>
                                <td>
                                    <span class="font-weight-bold" style="color:#1a2e45;">{{ $cat->nombre }}</span>
                                </td>
                                <td>
                                    <code class="px-2 py-1 bg-light rounded" style="font-size:0.75rem; color:#36b9cc;">{{ $cat->link }}</code>
                                </td>
                                <td class="text-center">
                                    <span class="badge {{ $cat->tours_count > 0 ? 'badge-info' : 'badge-secondary' }} px-3 py-1 font-weight-bold" style="font-size:0.85rem;">
                                        {{ $cat->tours_count }} tours
                                    </span>
                                </td>
                                <td class="text-center">
                                    <a href="{{ route('tourspt.index', ['categoria' => $cat->link]) }}" class="btn btn-action btn-action-view" title="Ver tours vinculados">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('ptcategoria.edit', $cat->id) }}" class="btn btn-action btn-action-edit" title="Editar categoria">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="5" class="text-center text-muted py-4">Nenhuma categoria registrada em português.</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Live Site Quick Preview Links -->
<div class="row">
    <div class="col-md-4 mb-3">
        <div class="card pm-card shadow-sm h-100">
            <div class="card-body p-3 d-flex align-items-center justify-content-between">
                <div>
                    <span class="badge badge-success px-2 py-1 mb-1">Español</span>
                    <h6 class="font-weight-bold mb-0 text-gray-800">Sitio Web en Español</h6>
                    <small class="text-muted">Ruta principal: <code>/inicio</code></small>
                </div>
                <a href="{{ route('inicio') }}" target="_blank" class="btn btn-sm btn-outline-success">
                    <i class="fas fa-external-link-alt mr-1"></i> Abrir Web
                </a>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="card pm-card shadow-sm h-100">
            <div class="card-body p-3 d-flex align-items-center justify-content-between">
                <div>
                    <span class="badge badge-primary px-2 py-1 mb-1">English</span>
                    <h6 class="font-weight-bold mb-0 text-gray-800">English Website</h6>
                    <small class="text-muted">Main route: <code>/</code></small>
                </div>
                <a href="{{ route('index') }}" target="_blank" class="btn btn-sm btn-outline-primary">
                    <i class="fas fa-external-link-alt mr-1"></i> Open Web
                </a>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="card pm-card shadow-sm h-100">
            <div class="card-body p-3 d-flex align-items-center justify-content-between">
                <div>
                    <span class="badge badge-info px-2 py-1 mb-1">Português</span>
                    <h6 class="font-weight-bold mb-0 text-gray-800">Site em Português</h6>
                    <small class="text-muted">Rota principal: <code>/pt</code></small>
                </div>
                <a href="{{ route('pt.index') }}" target="_blank" class="btn btn-sm btn-outline-info">
                    <i class="fas fa-external-link-alt mr-1"></i> Abrir Web
                </a>
            </div>
        </div>
    </div>
</div>

@push('admin_scripts')
<script>
$(document).ready(function() {
    $('a[data-toggle="pill"]').on('shown.bs.tab', function (e) {
        var target = $(e.target).attr("href");
        var btn = $('#manageCatBtn');
        if (target === '#tab-es') {
            btn.attr('href', '{{ route('categoria.index') }}').html('<i class="fas fa-cog mr-1"></i> Gestionar Categorías (ES)');
        } else if (target === '#tab-en') {
            btn.attr('href', '{{ route('category.index') }}').html('<i class="fas fa-cog mr-1"></i> Manage Categories (EN)');
        } else if (target === '#tab-pt') {
            btn.attr('href', '{{ route('ptcategoria.index') }}').html('<i class="fas fa-cog mr-1"></i> Gerenciar Categorias (PT)');
        }
    });
});
</script>
@endpush

@endsection
