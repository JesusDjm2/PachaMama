@extends('layouts.admin')
@section('titulo', 'Tours en Inglés')

@section('contenido')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.2/css/jquery.dataTables.min.css">
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
            content: '▲';
            /* Flecha hacia arriba */
            opacity: 1;
        }

        .desc .sort-arrow::after {
            content: '▼';
            /* Flecha hacia abajo */
            opacity: 1;
        }
    </style>

    <div class="row">
        <div class="col-12 mt-2">
            <div class="row">
                <div class="col-7 float-left">
                    <h2 class="text-primary">Lista de tours en inglés:</h2>
                </div>
                <div class="col-5">
                    <a href="{{ route('toursen.create') }}" class="btn btn-primary float-right mr-2">Nuevo Tour</a>
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
            <div class="row mt-4">
                <div class="col-lg-12 mb-3">
                    <input type="text" id="search" class="form-control form-control-sm" placeholder="Buscar...">
                </div>
            </div>
            <table id="tabladatos" class="table table-hover">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col" data-sort="nombre">Tour<span class="sort-arrow"></span></th>
                        <th scope="col" data-sort="imagen">Imagen<span class="sort-arrow"></span></th>
                        <th scope="col" data-sort="ubicacion">Ubicación<span class="sort-arrow"></span></th>
                        <th scope="col" data-sort="slug">categorias<span class="sort-arrow"></span></th>
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
                                        Ubicación: {{ $tour->ubicacion }}<br>
                                        Slug: {{ $tour->slug }}
                                    </span>
                                </ul>
                            </td>
                            <td><img src="{{ $tour->img }}" width="120px"></td>
                            <td>{{ $tour->categoria }}</td>
                            <td>
                                @if ($tour->categories->isEmpty())
                                    <span class="text-muted">Sin Categorías</span>
                                @else
                                    @foreach ($tour->categories as $category)
                                        <li>{{ $category->nombre }}</li>
                                    @endforeach
                                @endif
                            </td>
                            <td style="width: 140px">
                                <form action="{{ route('toursen.destroy', $tour->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{ route('toursen.edit', $tour->id) }}" class="btn btn-info btn-sm"
                                        title="Editar">
                                        <i class="fa fa-edit"></i>
                                    </a>
                                    <a href="{{ route('toursen.show', ['slug' => $tour->slug]) }}"
                                        class="btn btn-success btn-sm" title="Ver tour" target="_blank">
                                        <i class="fa fa-eye"></i>
                                    </a>
                                    <button type="submit" class="btn btn-danger btn-sm" title="Eliminar"
                                        onclick="return confirm('¿Desea eliminar?');">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const searchInput = document.getElementById('search');
            const table = document.getElementById('tabladatos');
            const rows = table.getElementsByTagName('tbody')[0].getElementsByTagName('tr');
            const headers = table.querySelectorAll('thead th');
            const defaultSortIndex = 0; // Index of the column you want to sort by default (0 = "Tour")

            // Function to handle sorting
            function sortTable(index, isAscending) {
                const sortedRows = Array.from(rows).sort((a, b) => {
                    const aText = a.children[index].textContent.trim().toLowerCase();
                    const bText = b.children[index].textContent.trim().toLowerCase();

                    if (aText < bText) return isAscending ? -1 : 1;
                    if (aText > bText) return isAscending ? 1 : -1;
                    return 0;
                });

                const tbody = table.querySelector('tbody');
                sortedRows.forEach(row => tbody.appendChild(row));
            }

            // Event listener for the search input
            searchInput.addEventListener('input', function() {
                const query = searchInput.value.toLowerCase();
                for (let row of rows) {
                    const cells = row.getElementsByTagName('td');
                    let found = false;
                    for (let cell of cells) {
                        if (cell.textContent.toLowerCase().includes(query)) {
                            found = true;
                            break;
                        }
                    }
                    row.style.display = found ? '' : 'none';
                }
            });

            // Event listener for column headers
            headers.forEach((header, index) => {
                header.addEventListener('click', () => {
                    const sortKey = header.getAttribute('data-sort');
                    const isAscending = !header.classList.contains('asc');

                    // Remove sorting classes from all headers
                    headers.forEach(h => h.classList.remove('asc', 'desc'));

                    // Add sorting class to the clicked header
                    header.classList.add(isAscending ? 'asc' : 'desc');

                    sortTable(index, isAscending);
                });
            });

            // Set default sort (e.g., by the first column)
            headers[defaultSortIndex].classList.add('asc');
            sortTable(defaultSortIndex, true); // true for ascending order
        });
    </script>
@endsection
