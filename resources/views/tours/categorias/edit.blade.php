@extends('layouts.admin')

@section('titulo', 'Editar Categoría en español')

@section('contenido')
    <h2>Editar Categoría en español</h2>
    <form action="{{ route('categoria.update', $category) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" value="{{ old('nombre', $category->nombre) }}" required>
        </div>
        <div class="mb-3">
            <label for="link" class="form-label">Link</label>
            <input type="text" class="form-control" id="link" name="link" value="{{ old('link', $category->link) }}" required readonly>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const nombreInput = document.getElementById('nombre');
            const linkInput = document.getElementById('link');

            // Actualiza el campo link cuando cambia el nombre
            nombreInput.addEventListener('input', function () {
                const nombreValue = nombreInput.value.trim();
                // Reemplaza los espacios por guiones y convierte a minúsculas
                const linkValue = nombreValue.replace(/\s+/g, '-').toLowerCase();
                linkInput.value = linkValue;
            });
        });
    </script>
@endsection
