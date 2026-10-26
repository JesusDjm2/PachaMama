@extends('layouts.admin')
@section('titulo', 'Registrar Nuevo Administrador')

@section('contenido')
<div class="pm-page-header">
    <div>
        <h1>Registrar Nuevo Administrador</h1>
        <small>Crea una nueva cuenta de acceso administrativo para el panel de control</small>
    </div>
    <a href="{{ route('users.index') }}" class="btn btn-secondary btn-sm">
        <i class="fas fa-arrow-left mr-1"></i> Volver a Usuarios
    </a>
</div>

<div class="card pm-card" style="max-width: 650px;">
    <div class="card-header pm-card-header">
        <h6><i class="fas fa-user-plus text-teal mr-2" style="color:#2aa8a8;"></i> Datos de la cuenta</h6>
    </div>
    <div class="card-body">
        <form method="POST" action="{{ route('users.store') }}">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label font-weight-600">Nombre completo</label>
                <div class="input-group input-group-sm">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-white"><i class="fas fa-user text-muted"></i></span>
                    </div>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                           name="name" value="{{ old('name') }}" placeholder="Ej: Administrador PachaMama" required autocomplete="name" autofocus>
                </div>
                @error('name')
                    <div class="text-danger mt-1" style="font-size:0.8rem;">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="email" class="form-label font-weight-600">Correo electrónico</label>
                <div class="input-group input-group-sm">
                    <div class="input-group-prepend">
                        <span class="input-group-text bg-white"><i class="fas fa-envelope text-muted"></i></span>
                    </div>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                           name="email" value="{{ old('email') }}" placeholder="admin@pachamamaspirit.com" required autocomplete="email">
                </div>
                @error('email')
                    <div class="text-danger mt-1" style="font-size:0.8rem;">{{ $message }}</div>
                @enderror
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="password" class="form-label font-weight-600">Contraseña</label>
                    <div class="input-group input-group-sm">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white"><i class="fas fa-lock text-muted"></i></span>
                        </div>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                               name="password" placeholder="Mínimo 8 caracteres" required autocomplete="new-password">
                    </div>
                    @error('password')
                        <div class="text-danger mt-1" style="font-size:0.8rem;">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6 mb-3">
                    <label for="password-confirm" class="form-label font-weight-600">Confirmar Contraseña</label>
                    <div class="input-group input-group-sm">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-white"><i class="fas fa-check-double text-muted"></i></span>
                        </div>
                        <input id="password-confirm" type="password" class="form-control"
                               name="password_confirmation" placeholder="Repite la contraseña" required autocomplete="new-password">
                    </div>
                </div>
            </div>

            <div class="pm-form-actions mt-3">
                <button type="submit" class="btn btn-pm-primary">
                    <i class="fas fa-user-check mr-1"></i> Registrar Usuario
                </button>
                <a href="{{ route('users.index') }}" class="btn btn-secondary">
                    <i class="fas fa-times mr-1"></i> Cancelar
                </a>
            </div>
        </form>
    </div>
</div>
@endsection
