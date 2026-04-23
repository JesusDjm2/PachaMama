@php
    $isEn = ($filterLocale ?? 'es') === 'en';
@endphp
<div class="mb-4 w-100">
    <div class="card border-0 shadow-sm">
        <div class="card-body py-3">
            <h3 class="h6 text-uppercase text-secondary mb-3">
                {{ $isEn ? 'Filter tours' : 'Filtrar tours' }}
            </h3>
            <form method="get" action="{{ $filterAction }}" class="row g-3 align-items-end js-home-tour-filters">
                <div class="col-md-4">
                    <label for="filter-ubicacion" class="form-label small mb-1">{{ $isEn ? 'Location' : 'Ubicación' }}</label>
                    <select name="ubicacion" id="filter-ubicacion" class="form-select form-select-sm">
                        <option value="">{{ $isEn ? 'All locations' : 'Todas las ubicaciones' }}</option>
                        @foreach ($filterUbicaciones ?? [] as $u)
                            <option value="{{ $u }}" @selected(request('ubicacion') == $u)>{{ $u }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="filter-dias" class="form-label small mb-1">{{ $isEn ? 'Days' : 'Días' }}</label>
                    <select name="dias" id="filter-dias" class="form-select form-select-sm">
                        <option value="">{{ $isEn ? 'Any duration' : 'Cualquier duración' }}</option>
                        @foreach ($filterDias ?? [] as $d)
                            <option value="{{ $d }}" @selected((string) request('dias') === (string) $d)>{{ $d }}
                                {{ $isEn ? ($d == 1 ? 'day' : 'days') : ($d == 1 ? 'día' : 'días') }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-3">
                    <label for="filter-precio" class="form-label small mb-1">{{ $isEn ? 'Max price (USD)' : 'Precio máximo (USD)' }}</label>
                    <select name="precio_max" id="filter-precio" class="form-select form-select-sm">
                        <option value="">{{ $isEn ? 'No limit' : 'Sin límite' }}</option>
                        @foreach ($filterPrecios ?? [] as $p)
                            <option value="{{ $p }}" @selected((string) request('precio_max') === (string) $p)>
                                {{ $isEn ? 'Up to' : 'Hasta' }} ${{ $p }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-2 d-flex gap-2 flex-wrap">
                    <button type="submit" class="btn btn-primary btn-sm flex-grow-1">
                        {{ $isEn ? 'Apply' : 'Filtrar' }}
                    </button>
                    <a href="{{ $filterAction }}" class="btn btn-outline-secondary btn-sm js-home-tour-filters-clear">{{ $isEn ? 'Clear' : 'Limpiar' }}</a>
                </div>
            </form>
        </div>
    </div>
</div>
