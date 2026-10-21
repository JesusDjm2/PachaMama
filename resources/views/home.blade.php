@extends('layouts.admin')
@section('titulo', 'Dashboard')

@section('contenido')

<div class="pm-page-header">
    <div>
        <h1>Dashboard</h1>
        <small>Resumen general de tours y categorías</small>
    </div>
</div>

{{-- Stats cards --}}
<div class="row mb-4">
    @php
        $stats = [
            ['Tours en Español', $totalES, 'text-success', 'border-left-success', 'fa-map-marked-alt'],
            ['Tours en Inglés', $totalEN, 'text-primary', 'border-left-primary', 'fa-globe'],
            ['Tours em Português', $totalPT, 'text-info', 'border-left-info', 'fa-globe-americas'],
            ['Categorías Español', $categoriasES->count(), 'text-warning', 'border-left-warning', 'fa-tag'],
            ['Categorías Inglés', $categoriasEN->count(), 'text-secondary', 'border-left-secondary', 'fa-tags'],
            ['Categorias Português', $categoriasPT->count(), 'text-dark', 'border-left-dark', 'fa-tags'],
        ];
    @endphp
    @foreach ($stats as [$label, $value, $textClass, $borderClass, $icon])
        <div class="col-xl-2 col-md-4 mb-3">
            <div class="card {{ $borderClass }} shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold {{ $textClass }} text-uppercase mb-1">{{ $label }}</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $value }}</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas {{ $icon }} fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

{{-- Category tables --}}
<div class="row">
    <div class="col-lg-4 mb-4">
        <div class="card pm-card shadow">
            <div class="card-header pm-card-header d-flex align-items-center justify-content-between">
                <h6 class="mb-0"><i class="fas fa-language mr-2 text-success"></i>Categorías — Tours Español</h6>
                <a href="{{ route('categoria.index') }}" class="btn btn-sm btn-outline-secondary">Gestionar</a>
            </div>
            <div class="card-body p-0">
                <table class="table pm-table table-hover mb-0">
                    <thead>
                        <tr>
                            <th>Categoría</th>
                            <th class="text-center" style="width:120px;">Tours</th>
                            <th class="text-center" style="width:80px;">Ver</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($categoriasES as $cat)
                        <tr>
                            <td>
                                <span class="font-weight-bold" style="color:#1a2e45;">{{ $cat->nombre }}</span>
                                <br><code style="font-size:0.72rem;color:#9ca3af;">{{ $cat->link }}</code>
                            </td>
                            <td class="text-center">
                                @if($cat->tours_count > 0)
                                    <span class="badge badge-success" style="font-size:0.85rem;padding:5px 12px;">{{ $cat->tours_count }}</span>
                                @else
                                    <span class="badge badge-secondary" style="font-size:0.85rem;padding:5px 12px;">0</span>
                                @endif
                            </td>
                            <td class="text-center">
                                <a href="{{ route('tours.index', ['categoria' => $cat->link]) }}" class="btn btn-action btn-action-view" title="Ver tours">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="3" class="text-center text-muted py-3">Sin categorías registradas</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="col-lg-4 mb-4">
        <div class="card pm-card shadow">
            <div class="card-header pm-card-header d-flex align-items-center justify-content-between">
                <h6 class="mb-0"><i class="fas fa-language mr-2 text-primary"></i>Categorías — Tours Inglés</h6>
                <a href="{{ route('category.index') }}" class="btn btn-sm btn-outline-secondary">Gestionar</a>
            </div>
            <div class="card-body p-0">
                <table class="table pm-table table-hover mb-0">
                    <thead>
                        <tr>
                            <th>Category</th>
                            <th class="text-center" style="width:120px;">Tours</th>
                            <th class="text-center" style="width:80px;">View</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($categoriasEN as $cat)
                        <tr>
                            <td>
                                <span class="font-weight-bold" style="color:#1a2e45;">{{ $cat->nombre }}</span>
                                <br><code style="font-size:0.72rem;color:#9ca3af;">{{ $cat->link }}</code>
                            </td>
                            <td class="text-center">
                                @if($cat->toursens_count > 0)
                                    <span class="badge badge-primary" style="font-size:0.85rem;padding:5px 12px;">{{ $cat->toursens_count }}</span>
                                @else
                                    <span class="badge badge-secondary" style="font-size:0.85rem;padding:5px 12px;">0</span>
                                @endif
                            </td>
                            <td class="text-center">
                                <a href="{{ route('toursen.index', ['categoria' => $cat->link]) }}" class="btn btn-action btn-action-view" title="View tours">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="3" class="text-center text-muted py-3">No categories registered</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="col-lg-4 mb-4">
        <div class="card pm-card shadow">
            <div class="card-header pm-card-header d-flex align-items-center justify-content-between">
                <h6 class="mb-0"><i class="fas fa-language mr-2 text-info"></i>Categorias — Tours Português</h6>
                <a href="{{ route('ptcategoria.index') }}" class="btn btn-sm btn-outline-secondary">Gerenciar</a>
            </div>
            <div class="card-body p-0">
                <table class="table pm-table table-hover mb-0">
                    <thead>
                        <tr>
                            <th>Categoria</th>
                            <th class="text-center" style="width:90px;">Tours</th>
                            <th class="text-center" style="width:80px;">Ver</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($categoriasPT as $cat)
                        <tr>
                            <td>
                                <span class="font-weight-bold" style="color:#1a2e45;">{{ $cat->nombre }}</span>
                                <br><code style="font-size:0.72rem;color:#9ca3af;">{{ $cat->link }}</code>
                            </td>
                            <td class="text-center">
                                @if($cat->tours_count > 0)
                                    <span class="badge badge-info" style="font-size:0.85rem;padding:5px 12px;">{{ $cat->tours_count }}</span>
                                @else
                                    <span class="badge badge-secondary" style="font-size:0.85rem;padding:5px 12px;">0</span>
                                @endif
                            </td>
                            <td class="text-center">
                                <a href="{{ route('tourspt.index', ['categoria' => $cat->link]) }}" class="btn btn-action btn-action-view" title="Ver tours">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="3" class="text-center text-muted py-3">Nenhuma categoria registrada</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

{{-- Quick access --}}
<div class="row">
    <div class="col-12">
        <div class="card pm-card shadow">
            <div class="card-header pm-card-header">
                <h6 class="mb-0"><i class="fas fa-bolt mr-2"></i>Acceso Rápido</h6>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2 col-6 mb-3">
                        <a href="{{ route('toursen.index') }}" class="btn btn-pm-primary btn-block">
                            <i class="fas fa-globe mr-1"></i> Tours Inglés
                        </a>
                    </div>
                    <div class="col-md-2 col-6 mb-3">
                        <a href="{{ route('tourspt.index') }}" class="btn btn-pm-primary btn-block">
                            <i class="fas fa-globe-americas mr-1"></i> Tours Português
                        </a>
                    </div>
                    <div class="col-md-2 col-6 mb-3">
                        <a href="{{ route('tours.index') }}" class="btn btn-pm-primary btn-block">
                            <i class="fas fa-map-marked-alt mr-1"></i> Tours Español
                        </a>
                    </div>
                    <div class="col-md-2 col-6 mb-3">
                        <a href="{{ route('enblogs.index') }}" class="btn btn-outline-secondary btn-block">
                            <i class="fas fa-blog mr-1"></i> Blogs Inglés
                        </a>
                    </div>
                    <div class="col-md-2 col-6 mb-3">
                        <a href="{{ route('ptblogs.index') }}" class="btn btn-outline-secondary btn-block">
                            <i class="fas fa-blog mr-1"></i> Blogs Português
                        </a>
                    </div>
                    <div class="col-md-2 col-6 mb-3">
                        <a href="{{ route('blogs.index') }}" class="btn btn-outline-secondary btn-block">
                            <i class="fas fa-blog mr-1"></i> Blogs Español
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
