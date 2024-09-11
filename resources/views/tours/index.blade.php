@extends('layouts.admin')
@section('titulo', 'Tours en español')
@section('css')
    <!-- Puedes añadir tus estilos personalizados aquí -->
@endsection

@section('contenido')
    <style>
        th {
            cursor: pointer;
        }
        .sort-arrow {
            font-size: 0.8em;
            margin-left: 5px;
            opacity: 0.6;
        }
        .asc .sort-arrow::after {
            content: '▲'; /* Flecha hacia arriba */
            opacity: 1;
        }
        .desc .sort-arrow::after {
            content: '▼'; /* Flecha hacia abajo */
            opacity: 1;
        }
    </style>

    <div class="row">
        <div class="col-12 mt-2">
            <div class="row">
                <div class="col-6 float-left">
                    <h2>Lista de tours en español:</h2>                    
                </div>
                <div class="col-6">
                    <a href="{{ url('tours/create') }}" class="btn btn-primary btn-sm float-right mr-2">Nuevo Tour</a>
                </div>
                <div class="col-lg-12">
                    @if (session('status'))
                        <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                            {{ session('status') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @endif
                </div>
            </div>
            <div style="width: 100%; margin-bottom:2em; border-bottom: 2px dotted #858796"></div>
            <div class="row mt-4">
                <div class="col-lg-12 mb-3">
                    <input type="text" id="search" class="form-control form-control-sm" placeholder="Buscar...">
                </div>
            </div>
            <table id="tabladatos" class="table mt-4 table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col" data-sort="nombre">Nombre<span class="sort-arrow"></span></th>
                        <th scope="col" data-sort="imagen">Imagen<span class="sort-arrow"></span></th>
                        <th scope="col" data-sort="categoria">Categoría<span class="sort-arrow"></span></th>
                        <th scope="col" data-sort="slug">Slug<span class="sort-arrow"></span></th>
                        <th scope="col" class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tours as $tour)
                        <tr>
                            <td class="font-weight-bold">
                                <li>{{ $tour->nombre }}</li>
                                <ul>
                                    <span class="font-weight-normal">
                                        Precio: {{ $tour->precio }}<br>
                                        Días: {{ $tour->dias }}<br>
                                        Ubicación: {{ $tour->ubicacion }}
                                    </span>
                                </ul>
                            </td>
                            <td><img src="{{ $tour->img }}" width="120px"></td>
                            <td>{{ $tour->categoria }}</td>
                            <td>{{ $tour->slug }}</td>
                            <td style="width: 140px">
                                <form action="{{ route('toursen.destroy', $tour->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('toursen.edit', $tour->id) }}" class="btn btn-info btn-sm" title="Editar">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="{{ route('toursen.show', ['id' => $tour->id, 'slug' => $tour->slug]) }}" class="btn btn-success btn-sm" title="Ver tour" target="_blank">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <button type="submit" class="btn btn-danger btn-sm" title="Eliminar" onclick="return confirm('¿Desea eliminar?');">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const searchInput = document.getElementById('search');
                const table = document.getElementById('tabladatos');
                const rows = table.getElementsByTagName('tbody')[0].getElementsByTagName('tr');
                const headers = table.querySelectorAll('thead th');
                const defaultSortIndex = 0; // Index of the column you want to sort by default (0 = "Nombre")

                function normalizeText(text) {
                    return text.normalize('NFD').replace(/[\u0300-\u036f]/g, '').toLowerCase();
                }

                function sortTable(index, isAscending) {
                    const sortedRows = Array.from(rows).sort((a, b) => {
                        const aText = normalizeText(a.children[index].textContent.trim());
                        const bText = normalizeText(b.children[index].textContent.trim());
                        
                        if (aText < bText) return isAscending ? -1 : 1;
                        if (aText > bText) return isAscending ? 1 : -1;
                        return 0;
                    });

                    const tbody = table.querySelector('tbody');
                    sortedRows.forEach(row => tbody.appendChild(row));
                }

                searchInput.addEventListener('input', function() {
                    const query = normalizeText(searchInput.value);
                    for (let row of rows) {
                        const cells = row.getElementsByTagName('td');
                        let found = false;
                        for (let cell of cells) {
                            if (normalizeText(cell.textContent).includes(query)) {
                                found = true;
                                break;
                            }
                        }
                        row.style.display = found ? '' : 'none';
                    }
                });

                headers.forEach((header, index) => {
                    header.addEventListener('click', () => {
                        const sortKey = header.getAttribute('data-sort');
                        const isAscending = !header.classList.contains('asc');
                        
                        headers.forEach(h => h.classList.remove('asc', 'desc'));
                        header.classList.add(isAscending ? 'asc' : 'desc');
                        
                        sortTable(index, isAscending);
                    });
                });

                headers[defaultSortIndex].classList.add('asc');
                sortTable(defaultSortIndex, true);
            });
        </script>
    </div>
@endsection
