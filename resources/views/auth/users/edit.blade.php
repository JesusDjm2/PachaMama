@extends('layouts.admin')
@section('titulo', 'Editar Usuario')

@section('contenido')
<div class="pm-page-header">
    <div>
        <h1>Editar Usuario</h1>
        <small>{{ $user->name }}</small>
    </div>
    <a href="{{ route('users.index') }}" class="btn btn-secondary btn-sm">
        <i class="fas fa-arrow-left mr-1"></i> Volver
    </a>
</div>

@if(session('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="fas fa-check-circle mr-1"></i> {{ session('status') }}
        <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
    </div>
@endif

<div class="card pm-card" style="max-width:600px;">
    <div class="card-header pm-card-header">
        <h6>Datos del usuario</h6>
    </div>
    <div class="card-body">
        <form action="/users/{{ $user->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Nombre</label>
                <input type="text" name="name" class="form-control" required value="{{ $user->name }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Email</label>
                <input type="email" name="email" class="form-control" required value="{{ $user->email }}">
            </div>
            <div class="pm-form-actions">
                <button type="submit" class="btn btn-pm-primary">
                    <i class="fas fa-save mr-1"></i> Guardar cambios
                </button>
                <a href="{{ route('users.index') }}" class="btn btn-secondary">
                    <i class="fas fa-times mr-1"></i> Cancelar
                </a>
                @if(Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="btn btn-link btn-sm ml-auto" style="color:#6b7280;">
                        <i class="fas fa-key mr-1"></i> ¿Olvidaste tu contraseña?
                    </a>
                @endif
            </div>
        </form>
    </div>
</div>
@endsection
