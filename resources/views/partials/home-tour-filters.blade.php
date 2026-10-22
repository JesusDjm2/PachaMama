@php
    $etiquetas = [
        'pt' => [
            'kicker' => 'EXPERIÊNCIAS SELECIONADAS',
            'titulo' => 'Tours e Passeios Recomendados',
            'subtitulo' => 'Descubra os melhores roteiros no Peru com guias especializados, itinerários flexíveis e assistência personalizada.',
            'buscarLabel' => 'Buscar tour',
            'buscar' => 'Ex: Trilha Inca, Humantay, Salkantay...',
            'ubicacion' => 'Destino',
            'todas' => 'Todos os destinos',
            'dias' => 'Duração',
            'cualquiera' => 'Qualquer duração',
            'dia' => 'dia',
            'diasPlural' => 'dias',
            'precio' => 'Orçamento máx.',
            'sinLimite' => 'Sem limite (USD)',
            'hasta' => 'Até',
            'aplicar' => 'Buscar tours',
            'limpiar' => 'Limpar filtros',
            'limpiarTodo' => 'Limpar filtros',
            'destinosPopulares' => 'Destinos em destaque:',
            'todos' => 'Todos',
            'resultados' => 'Exibindo',
            'experiencias' => 'experiências selecionadas',
            'filtrosAtivos' => 'Filtros aplicados:',
        ],
        'es' => [
            'kicker' => 'EXPERIENCIAS DESTACADAS',
            'titulo' => 'Tours Recomendados y Populares',
            'subtitulo' => 'Descubre los mejores itinerarios en Perú con guías expertos, salidas flexibles y asistencia de principio a fin.',
            'buscarLabel' => 'Buscar tour',
            'buscar' => 'Ej: Camino Inca, Humantay, Salkantay...',
            'ubicacion' => 'Destino',
            'todas' => 'Todos los destinos',
            'dias' => 'Duración',
            'cualquiera' => 'Cualquier duración',
            'dia' => 'día',
            'diasPlural' => 'días',
            'precio' => 'Presupuesto máx.',
            'sinLimite' => 'Sin límite (USD)',
            'hasta' => 'Hasta',
            'aplicar' => 'Buscar tours',
            'limpiar' => 'Limpiar filtros',
            'limpiarTodo' => 'Limpiar filtros',
            'destinosPopulares' => 'Destinos destacados:',
            'todos' => 'Todos',
            'resultados' => 'Mostrando',
            'experiencias' => 'experiencias seleccionadas',
            'filtrosAtivos' => 'Filtros aplicados:',
        ],
        'en' => [
            'kicker' => 'HANDPICKED EXPERIENCES',
            'titulo' => 'Recommended & Popular Tours',
            'subtitulo' => 'Discover the best itineraries in Peru with expert local guides, flexible departures, and customized service.',
            'buscarLabel' => 'Search tour',
            'buscar' => 'E.g., Inca Trail, Humantay, Salkantay...',
            'ubicacion' => 'Destination',
            'todas' => 'All destinations',
            'dias' => 'Duration',
            'cualquiera' => 'Any duration',
            'dia' => 'day',
            'diasPlural' => 'days',
            'precio' => 'Max budget',
            'sinLimite' => 'No limit (USD)',
            'hasta' => 'Up to',
            'aplicar' => 'Search tours',
            'limpiar' => 'Clear filters',
            'limpiarTodo' => 'Clear filters',
            'destinosPopulares' => 'Popular destinations:',
            'todos' => 'All',
            'resultados' => 'Showing',
            'experiencias' => 'curated experiences',
            'filtrosAtivos' => 'Active filters:',
        ],
    ];
    $t = $etiquetas[$filterLocale ?? 'es'] ?? $etiquetas['es'];

    $activeQ = request('q');
    $activeUbicacion = request('ubicacion');
    $activeDias = request('dias');
    $activePrecio = request('precio_max');
    $hasActiveFilters = filled($activeQ) || filled($activeUbicacion) || filled($activeDias) || filled($activePrecio);

    $destinosChips = [
        ['label' => 'Cusco', 'value' => 'Cusco'],
        ['label' => 'Machu Picchu', 'value' => 'Machu Picchu'],
        ['label' => 'Arequipa', 'value' => 'Arequipa'],
        ['label' => 'Puno', 'value' => 'Puno'],
        ['label' => 'Lima', 'value' => 'Lima'],
        ['label' => 'Puerto Maldonado', 'value' => 'Puerto Maldonado'],
    ];
@endphp

<div class="home-tour-discovery">
    <div class="home-tour-discovery__header">
        <span class="home-tour-discovery__kicker">
            <span class="icon-compass" aria-hidden="true"></span> {{ $t['kicker'] }}
        </span>
        <h2 class="home-tour-discovery__title">{{ $t['titulo'] }}</h2>
        <p class="home-tour-discovery__subtitle">{{ $t['subtitulo'] }}</p>
        <div class="home-tour-discovery__line"></div>
    </div>

    <div class="home-tour-filter-card">
        <form method="get" action="{{ $filterAction }}" class="home-tour-filter-form js-home-tour-filters">
            <div class="home-filter-grid">
                <!-- Campo 1: Búsqueda por texto / palabra clave -->
                <div class="home-filter-field">
                    <label for="filter-q" class="home-filter-field__label">
                        {{ $t['buscarLabel'] }}
                    </label>
                    <div class="home-filter-field__control">
                        <span class="home-filter-field__icon icon-search" aria-hidden="true"></span>
                        <input type="search" name="q" id="filter-q" value="{{ $activeQ }}"
                            class="form-control home-filter-input js-home-tour-filter-q"
                            placeholder="{{ $t['buscar'] }}" autocomplete="off" enterkeyhint="search">
                    </div>
                </div>

                <!-- Campo 2: Destino / Ubicación -->
                <div class="home-filter-field">
                    <label for="filter-ubicacion" class="home-filter-field__label">
                        {{ $t['ubicacion'] }}
                    </label>
                    <div class="home-filter-field__control">
                        <span class="home-filter-field__icon icon-map-marker" aria-hidden="true"></span>
                        <select name="ubicacion" id="filter-ubicacion" class="form-select home-filter-select js-home-tour-filter-select">
                            <option value="">{{ $t['todas'] }}</option>
                            @foreach ($filterUbicaciones ?? [] as $u)
                                <option value="{{ $u }}" @selected($activeUbicacion == $u)>{{ $u }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <!-- Campo 3: Duración en días -->
                <div class="home-filter-field">
                    <label for="filter-dias" class="home-filter-field__label">
                        {{ $t['dias'] }}
                    </label>
                    <div class="home-filter-field__control">
                        <span class="home-filter-field__icon icon-clock-o" aria-hidden="true"></span>
                        <select name="dias" id="filter-dias" class="form-select home-filter-select js-home-tour-filter-select">
                            <option value="">{{ $t['cualquiera'] }}</option>
                            @foreach ($filterDias ?? [] as $d)
                                <option value="{{ $d }}" @selected((string) $activeDias === (string) $d)>
                                    {{ $d }} {{ $d == 1 ? $t['dia'] : $t['diasPlural'] }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <!-- Campo 4: Presupuesto máximo -->
                <div class="home-filter-field">
                    <label for="filter-precio" class="home-filter-field__label">
                        {{ $t['precio'] }}
                    </label>
                    <div class="home-filter-field__control">
                        <span class="home-filter-field__icon icon-usd" aria-hidden="true"></span>
                        <select name="precio_max" id="filter-precio" class="form-select home-filter-select js-home-tour-filter-select">
                            <option value="">{{ $t['sinLimite'] }}</option>
                            @foreach ($filterPrecios ?? [] as $p)
                                <option value="{{ $p }}" @selected((string) $activePrecio === (string) $p)>
                                    {{ $t['hasta'] }} ${{ $p }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <!-- Campo 5: Botones de Acción -->
                <div class="home-filter-actions">
                    <button type="submit" class="home-filter-btn home-filter-btn--submit" title="{{ $t['aplicar'] }}">
                        <span class="icon-search" aria-hidden="true"></span>
                        <span>{{ $t['aplicar'] }}</span>
                    </button>
                    <a href="{{ $filterAction }}" class="home-filter-btn home-filter-btn--reset js-home-tour-filters-clear"
                        title="{{ $t['limpiar'] }}" aria-label="{{ $t['limpiar'] }}">
                        <span class="icon-refresh" aria-hidden="true"></span>
                    </a>
                </div>
            </div>

            <!-- Chips de destinos populares -->
            <div class="home-tour-chips-bar">
                <span class="home-tour-chips-bar__label">
                    <span class="icon-fire" aria-hidden="true"></span> {{ $t['destinosPopulares'] }}
                </span>
                <button type="button" class="home-tour-chip js-chip-dest {{ empty($activeUbicacion) ? 'is-active' : '' }}" data-value="">
                    {{ $t['todos'] }}
                </button>
                @foreach ($destinosChips as $chip)
                    <button type="button" class="home-tour-chip js-chip-dest {{ $activeUbicacion === $chip['value'] ? 'is-active' : '' }}"
                        data-value="{{ $chip['value'] }}">
                        {{ $chip['label'] }}
                    </button>
                @endforeach
            </div>
        </form>
    </div>

    <!-- Barra de metadatos y filtros activos -->
    <div class="home-tour-meta-bar">
        <div class="home-tour-meta-count">
            <span>{{ $t['resultados'] }} <strong class="js-home-tours-count">{{ isset($tours) ? $tours->count() : 0 }}</strong> {{ $t['experiencias'] }}</span>
        </div>

        <div class="home-tour-active-tags js-home-tour-active-tags {{ $hasActiveFilters ? '' : 'd-none' }}">
            <span class="text-muted small me-1">{{ $t['filtrosAtivos'] }}</span>
            @if (filled($activeQ))
                <span class="home-tour-active-tag">
                    <span class="icon-search" aria-hidden="true"></span> "{{ $activeQ }}"
                    <button type="button" class="home-tour-active-tag__remove js-remove-filter-tag" data-field="q" aria-label="Remover">✕</button>
                </span>
            @endif
            @if (filled($activeUbicacion))
                <span class="home-tour-active-tag">
                    <span class="icon-map-marker" aria-hidden="true"></span> {{ $activeUbicacion }}
                    <button type="button" class="home-tour-active-tag__remove js-remove-filter-tag" data-field="ubicacion" aria-label="Remover">✕</button>
                </span>
            @endif
            @if (filled($activeDias))
                <span class="home-tour-active-tag">
                    <span class="icon-clock-o" aria-hidden="true"></span> {{ $activeDias }} {{ $activeDias == 1 ? $t['dia'] : $t['diasPlural'] }}
                    <button type="button" class="home-tour-active-tag__remove js-remove-filter-tag" data-field="dias" aria-label="Remover">✕</button>
                </span>
            @endif
            @if (filled($activePrecio))
                <span class="home-tour-active-tag">
                    <span class="icon-usd" aria-hidden="true"></span> {{ $t['hasta'] }} ${{ $activePrecio }}
                    <button type="button" class="home-tour-active-tag__remove js-remove-filter-tag" data-field="precio_max" aria-label="Remover">✕</button>
                </span>
            @endif
            <a href="{{ $filterAction }}" class="home-tour-clear-all-btn js-home-tour-filters-clear">{{ $t['limpiarTodo'] }}</a>
        </div>
    </div>
</div>
