@extends('layouts.admin')
@section('titulo', 'Usuarios Registrados')

@section('contenido')
<div class="pm-page-header">
    <div>
        <h1>Usuarios Registrados</h1>
        <small>Administradores con acceso al panel</small>
    </div>
    <a href="{{ route('registrar') }}" class="btn btn-pm-primary btn-sm">
        <i class="fas fa-user-plus mr-1"></i> Nuevo Usuario
    </a>
</div>

<div class="card pm-card">
    <div class="card-header pm-card-header">
        <h6>Listado de usuarios</h6>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table class="table pm-table table-hover mb-0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td style="color:#9ca3af; font-size:0.78rem;">{{ $user->id }}</td>
                        <td>
                            <div class="d-flex align-items-center">
                                <div style="width:34px; height:34px; border-radius:50%; background:linear-gradient(135deg,#2aa8a8,#1a2e45);
                                            display:flex; align-items:center; justify-content:center; color:#fff; font-weight:700;
                                            font-size:0.85rem; margin-right:10px; flex-shrink:0;">
                                    {{ strtoupper(substr($user->name, 0, 1)) }}
                                </div>
                                <span class="font-weight-bold" style="color:#1a2e45;">{{ $user->name }}</span>
                            </div>
                        </td>
                        <td style="color:#6b7280;">{{ $user->email }}</td>
                        <td class="text-center" style="white-space:nowrap;">
                            <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <a href="/users/{{ $user->id }}/edit" class="btn btn-action btn-action-edit" title="Editar">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <button type="submit" class="btn btn-action btn-action-delete" title="Eliminar"
                                    onclick="return confirm('¿Eliminar este usuario?');">
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
