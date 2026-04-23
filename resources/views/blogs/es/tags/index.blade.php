@extends('layouts.admin')
@section('titulo', 'Tags en Español')

@section('contenido')
<div class="pm-page-header">
    <div>
        <h1>Tags en Español</h1>
        <small>Etiquetas para categorizar los blogs en español</small>
    </div>
    <a href="{{ route('tags.create') }}" class="btn btn-pm-primary btn-sm">
        <i class="fas fa-plus mr-1"></i> Nuevo Tag
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
        <h6>Listado de tags</h6>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table pm-table table-hover mb-0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Slug</th>
                        <th class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($tags as $tag)
                    <tr>
                        <td style="color:#9ca3af; font-size:0.78rem;">{{ $tag->id }}</td>
                        <td class="font-weight-bold" style="color:#1a2e45;">{{ $tag->nombre }}</td>
                        <td><code style="font-size:0.78rem; color:#6b7280;">{{ $tag->slug }}</code></td>
                        <td class="text-center" style="white-space:nowrap;">
                            <form action="{{ route('tags.destroy', $tag->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <a href="{{ route('tags.show', $tag->id) }}" class="btn btn-action btn-action-view" title="Ver">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="{{ route('tags.edit', $tag->id) }}" class="btn btn-action btn-action-edit" title="Editar">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <button type="submit" class="btn btn-action btn-action-delete" title="Eliminar"
                                    onclick="return confirm('¿Eliminar este tag?');">
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
@endsection
