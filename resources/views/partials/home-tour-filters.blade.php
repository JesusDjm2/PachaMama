@php
    $etiquetas = [
        'es' => [
            'titulo' => 'Filtrar tours', 'ubicacion' => 'Ubicación', 'todas' => 'Todas las ubicaciones',
            'dias' => 'Días', 'cualquiera' => 'Cualquier duración', 'dia' => 'día', 'diasPlural' => 'días',
            'precio' => 'Precio máximo (USD)', 'sinLimite' => 'Sin límite', 'hasta' => 'Hasta',
            'aplicar' => 'Filtrar', 'limpiar' => 'Limpiar',
        ],
        'en' => [
            'titulo' => 'Filter tours', 'ubicacion' => 'Location', 'todas' => 'All locations',
            'dias' => 'Days', 'cualquiera' => 'Any duration', 'dia' => 'day', 'diasPlural' => 'days',
            'precio' => 'Max price (USD)', 'sinLimite' => 'No limit', 'hasta' => 'Up to',
            'aplicar' => 'Apply', 'limpiar' => 'Clear',
        ],
        'pt' => [
            'titulo' => 'Filtrar tours', 'ubicacion' => 'Destino', 'todas' => 'Todos os destinos',
            'dias' => 'Dias', 'cualquiera' => 'Qualquer duração', 'dia' => 'dia', 'diasPlural' => 'dias',
            'precio' => 'Preço máximo (USD)', 'sinLimite' => 'Sem limite', 'hasta' => 'Até',
            'aplicar' => 'Filtrar', 'limpiar' => 'Limpar',
        ],
    ];
    $t = $etiquetas[$filterLocale ?? 'es'] ?? $etiquetas['es'];
@endphp
<div class="mb-4 w-100">
    <div class="card border-0 shadow-sm">
        <div class="card-body py-3">
            <h3 class="h6 text-uppercase text-secondary mb-3">
                {{ $t['titulo'] }}
            </h3>
            <form method="get" action="{{ $filterAction }}" class="row g-3 align-items-end js-home-tour-filters">
                <div class="col-md-4">
                    <label for="filter-ubicacion" class="form-label small mb-1">{{ $t['ubicacion'] }}</label>
                    <select name="ubicacion" id="filter-ubicacion" class="form-select form-select-sm">
                        <option value="">{{ $t['todas'] }}</option>
                        @foreach ($filterUbicaciones ?? [] as $u)
                            <option value="{{ $u }}" @selected(request('ubicacion') == $u)>{{ $u }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="filter-dias" class="form-label small mb-1">{{ $t['dias'] }}</label>
                    <select name="dias" id="filter-dias" class="form-select form-select-sm">
                        <option value="">{{ $t['cualquiera'] }}</option>
                        @foreach ($filterDias ?? [] as $d)
                            <option value="{{ $d }}" @selected((string) request('dias') === (string) $d)>{{ $d }}
                                {{ $d == 1 ? $t['dia'] : $t['diasPlural'] }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="filter-precio" class="form-label small mb-1">{{ $t['precio'] }}</label>
                    <select name="precio_max" id="filter-precio" class="form-select form-select-sm">
                        <option value="">{{ $t['sinLimite'] }}</option>
                        @foreach ($filterPrecios ?? [] as $p)
                            <option value="{{ $p }}" @selected((string) request('precio_max') === (string) $p)>
                                {{ $t['hasta'] }} ${{ $p }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-2 d-flex gap-2 flex-wrap">
                    <button type="submit" class="btn btn-primary btn-sm flex-grow-1">
                        {{ $t['aplicar'] }}
                    </button>
                    <a href="{{ $filterAction }}" class="btn btn-outline-secondary btn-sm js-home-tour-filters-clear">{{ $t['limpiar'] }}</a>
                </div>
            </form>
        </div>
    </div>
</div>
