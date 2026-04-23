@if ($tours->isEmpty())
    <div class="col-12">
        <p class="text-center text-muted py-4">No hay tours con estos filtros.</p>
    </div>
@endif
@foreach ($tours->take(8) as $tour)
    <div class="col-lg-3 col-md-6">
        <div class="card card-new">
            <a href="{{ route('tours.show', $tour->slug) }}">
                <img class="card-img-top" src="{{ $tour->img }}" alt="Camino Inca 4 dias"
                    loading="lazy">
            </a>
            <div class="card-body text-center">
                <h5 class="card-titulo">{{ $tour->nombre }}</h5>
                <p class="text-card">{{ $tour->descripcion }}</p>
                <div class="enlacesCategoria">
                    @if (Str::contains($tour->categoria, 'machupicchu'))
                        <p class="d-none">
                            {{ $mapi = 'Machu Picchu' }}
                        </p>
                        <a class="enlaceMapi" href="{{ route('mapi') }}">{{ $mapi }}
                        </a>
                    @endif
                    @if (Str::contains($tour->categoria, 'hikes'))
                        <p class="d-none">
                            {{ $hike = 'Caminata' }}
                        </p>
                        <a class="enlaceHike" href="{{ route('caminata') }}">
                            {{ $hike }}</a>
                    @endif
                    @if (Str::contains($tour->categoria, 'around'))
                        <p class="d-none">
                            {{ $peru = 'Perú' }}
                        </p>
                        <a class="enlaceAround" href="{{ route('peru') }}">
                            {{ $peru }}
                        </a>
                    @endif
                    @if (Str::contains($tour->categoria, 'luxury'))
                        <p class="d-none">
                            {{ $luxury = 'Privado' }}
                        </p>
                        <a class="enlaceLuxury" href="{{ route('luxury') }}"> {{ $luxury }}</a>
                    @endif
                    @if (Str::contains($tour->categoria, 'fullday'))
                        <p class="d-none">
                            {{ $fullday = 'Full Day' }}
                        </p>
                        <a class="enlaceFullday" href="{{ route('fullday') }}"> {{ $fullday }}</a>
                    @endif
                </div>
                <div class="row iconos-tours small text-secondary">
                    <div class="col-6 text-end">
                        <span class="icon-clock-o" aria-hidden="true"></span> {{ $tour->dias }}
                        {{ $tour->dias == 1 ? 'día' : 'días' }}
                    </div>
                    <div class="col-6 text-start">
                        <span class="icon-usd" aria-hidden="true"></span> {{ $tour->precio }}.00
                    </div>
                    <div class="col-12 pt-2 text-center">
                        <span class="icon-map-marker" aria-hidden="true"></span> {{ $tour->ubicacion }}
                    </div>
                </div>
                <a href="{{ route('tours.show', $tour->slug) }}" class="boton-card">Más detalles</a>
            </div>
        </div>
    </div>
@endforeach
