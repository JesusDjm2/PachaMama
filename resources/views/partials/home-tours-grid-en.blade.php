@if ($tours->isEmpty())
    <div class="col-12">
        <p class="text-center text-muted py-4">No tours match these filters.</p>
    </div>
@endif
@foreach ($tours->take(8) as $tour)
    <div class="col-lg-3 col-md-6">
        <div class="card card-new w-100">
            <a href="{{ route('toursen.show', $tour->slug) }}">
                <img class="card-img-top" src="{{ $tour->img }}" alt="Camino Inca 4 dias"
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
                        <a href="{{ route('category.show', $category) }}"
                            class="{{ $colors[$index % count($colors)] }} fw-bold text-uppercase small text-decoration-none"
                            title="View category">
                            {{ $category->nombre }}
                        </a>
                    @endforeach
                </div>

                <div class="row iconos-tours small text-secondary">
                    <div class="col-6 text-end">
                        <span class="icon-clock-o" aria-hidden="true"></span>
                        {{ $tour->dias }} day{{ $tour->dias == 1 ? '' : 's' }}
                    </div>
                    <div class="col-6 text-start">
                        <span class="icon-usd" aria-hidden="true"></span> {{ $tour->precio }}.00
                    </div>
                    <div class="col-12 mt-2 text-center">
                        <span class="icon-map-marker" aria-hidden="true"></span> {{ $tour->ubicacion }}
                    </div>
                </div>
                <a href="{{ route('toursen.show', $tour->slug) }}" class="boton-card">More details</a>
            </div>
        </div>
    </div>
@endforeach
