@php
    use Illuminate\Support\Str;
    $toursPt = $toursPtByLocation ?? collect();
@endphp
@if ($toursPt->isNotEmpty())
    <div class="destiny-tours-en mt-5">
        <h2 class="h2-tierras text-center destiny-tours-en__title">Passeios e Tours em {{ $destinationUbicacionLabel ?? '' }}</h2>
        <p class="text-center destiny-tours-en__intro">Tours cuja <strong>localização</strong> inclui este destino imperdível no Peru.</p>

        <div class="row g-4 justify-content-center destiny-tours-en__grid">
            @foreach ($toursPt as $tour)
                @php
                    $ti = $tour->img ?? '';
                    $src = Str::startsWith($ti, ['http://', 'https://']) ? $ti : asset(ltrim($ti, '/'));
                @endphp
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card card-new h-100 destiny-tour-card">
                        <a href="{{ route('pt.tour', ['slug' => $tour->slug]) }}">
                            <img class="card-img-top" src="{{ $src }}" alt="{{ $tour->nombre }}" loading="lazy">
                        </a>
                        <div class="card-body text-center d-flex flex-column">
                            <h3 class="h6 card-titulo mb-2">{{ $tour->nombre }}</h3>
                            <p class="text-card small flex-grow-1">{{ Str::limit(strip_tags($tour->descripcion ?? ''), 130) }}</p>
                            <div class="row iconos-tours small text-muted mb-2">
                                <div class="col-6 text-end">
                                    <span class="icon-clock-o"></span> {{ $tour->dias }} dia{{ $tour->dias == 1 ? '' : 's' }}
                                </div>
                                <div class="col-6 text-start">
                                    <span class="icon-usd"></span> {{ $tour->precio }}.00
                                </div>
                                <div class="col-12 mt-1">
                                    <span class="icon-map-marker"></span> {{ $tour->ubicacion }}
                                </div>
                            </div>
                            <a href="{{ route('pt.tour', ['slug' => $tour->slug]) }}" class="boton-card mt-auto">Ver detalhes</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endif
