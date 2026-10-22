@if ($tours->isEmpty())
    <div class="col-12">
        <div class="tour-empty-state">
            <div class="tour-empty-state__icon">
                <span class="icon-compass" aria-hidden="true"></span>
            </div>
            <h4 class="tour-empty-state__title">Nenhum tour encontrado</h4>
            <p class="tour-empty-state__text">Não encontramos tours com esses filtros. Tente ajustar os parâmetros ou limpar os filtros para explorar todas as nossas opções.</p>
            <a href="{{ route('pt.index') }}" class="home-filter-btn home-filter-btn--submit js-home-tour-filters-clear px-4 d-inline-flex">
                <span class="icon-refresh me-1" aria-hidden="true"></span> Ver todos os tours
            </a>
        </div>
    </div>
@endif
@foreach ($tours->take(8) as $tour)
    <div class="col-12 col-sm-6 col-lg-3 d-flex align-items-stretch mb-4">
        <div class="card card-new w-100">
            <a href="{{ route('pt.tour', $tour->slug) }}">
                <img class="card-img-top" src="{{ asset($tour->img) }}" alt="{{ $tour->nombre }}"
                    loading="lazy">
            </a>
            <div class="card-body text-center">
                <h5 class="card-titulo">{{ $tour->nombre }}</h5>
                <p class="text-card">{{ $tour->descripcion }}</p>
                <div class="enlacesCategoria">
                    @php
                        $colors = ['text-primary', 'text-success', 'text-info', 'text-warning', 'text-secondary'];
                    @endphp

                    @foreach ($tour->categories as $index => $category)
                        <a href="{{ route('pt.categoria', $category) }}"
                            class="{{ $colors[$index % count($colors)] }} fw-bold text-uppercase small text-decoration-none"
                            title="Ver categoria">
                            {{ $category->nombre }}
                        </a>
                    @endforeach
                </div>

                <div class="row iconos-tours small text-secondary">
                    <div class="col-6 text-end">
                        <span class="icon-clock-o" aria-hidden="true"></span>
                        {{ $tour->dias }} {{ $tour->dias == 1 ? 'dia' : 'dias' }}
                    </div>
                    <div class="col-6 text-start">
                        <span class="icon-usd" aria-hidden="true"></span> {{ $tour->precio }}.00
                    </div>
                    <div class="col-12 mt-2 text-center">
                        <span class="icon-map-marker" aria-hidden="true"></span> {{ $tour->ubicacion }}
                    </div>
                </div>
                <a href="{{ route('pt.tour', $tour->slug) }}" class="boton-card">Mais detalhes</a>
            </div>
        </div>
    </div>
@endforeach
