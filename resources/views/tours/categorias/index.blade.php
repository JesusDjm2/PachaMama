@extends('layouts.admin')
@section('titulo', 'Categorías')
@section('contenido')
    <div class="row">
        <div class="col-12 mt-2">
            <div class="row">
                <div class="col-6 float-left">
                    <h2>Lista de Categorías en español:</h2>
                </div>
                <div class="col-6">
                    <a href="{{ route('categoria.create') }}" class="btn btn-primary btn-sm float-right mr-2">Nueva
                        Categoría</a>
                </div>
                <div class="col-lg-12">
                    @if (session('status'))
                        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                            {{ session('status') }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                </div>
            </div>
            <table class="table mt-4 table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Link</th>
                        <th scope="col" class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->nombre }}</td>
                            <td>{{ $category->link }}</td>
                            <td class="text-center">
                                {{-- <a href="{{ route('category.show', $category->id) }}" class="btn btn-info btn-sm" title="Ver">
                                    <i class="fa fa-eye"></i>
                                </a> --}}
                                <a href="{{ route('categoria.show', $category) }}" class="btn btn-info btn-sm" title="Ver">
                                    <i class="fa fa-eye"></i>
                                </a>
                                
                                <a href="{{ route('categoria.edit', $category) }}" class="btn btn-warning btn-sm"
                                    title="Editar">
                                    <i class="fa fa-edit"></i>
                                </a>
                                 <button type="button" class="btn btn-danger btn-sm" onclick="confirmDeletion('{{ route('categoria.destroy', $category) }}')">
                                    <i class="fa fa-trash"></i>
                                </button>                              
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

   

    <script>
        function confirmDeletion(url) {
            if (confirm('¿Está seguro de que desea eliminar esta categoría?')) {
                // Crea un formulario para enviar la solicitud DELETE
                var form = document.createElement('form');
                form.method = 'POST';
                form.action = url;

                // Agrega los campos necesarios
                var csrfToken = document.createElement('input');
                csrfToken.type = 'hidden';
                csrfToken.name = '_token';
                csrfToken.value = '{{ csrf_token() }}';
                form.appendChild(csrfToken);

                var methodField = document.createElement('input');
                methodField.type = 'hidden';
                methodField.name = '_method';
                methodField.value = 'DELETE';
                form.appendChild(methodField);

                // Agrega el formulario al body y envíalo
                document.body.appendChild(form);
                form.submit();
            }
        }
    </script>
@endsection
