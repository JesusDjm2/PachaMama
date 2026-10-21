@if ($tours->isEmpty())
    <div class="col-12">
        <p class="text-center text-muted py-4">Nenhum tour corresponde a esses filtros.</p>
    </div>
@endif
@foreach ($tours->take(8) as $tour)
    <div class="col-lg-3 col-md-6">
        <div class="card card-new w-100">
            <a href="{{ route('pt.tour', $tour->slug) }}">
                <img class="card-img-top" src="{{ $tour->img }}" alt="{{ $tour->nombre }}"
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
