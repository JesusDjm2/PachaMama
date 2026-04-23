@php
    $destPair = \App\Support\LocaleRouteMap::destinationAlternateUrls(Route::currentRouteName(), request()->route('slug'));
@endphp
@if ($destPair)
    <div class="text-center py-1 small border-bottom bg-white" style="border-color: rgba(26,46,69,0.08) !important;">
        <span class="text-muted mr-1">{{ Route::currentRouteName() === 'destinies-peru.destination' ? 'This page:' : 'Esta página:' }}</span>
        <a href="{{ $destPair['es'] }}" class="font-weight-bold" hreflang="es">Español</a>
        <span class="text-muted mx-1" aria-hidden="true">·</span>
        <a href="{{ $destPair['en'] }}" class="font-weight-bold" hreflang="en">English</a>
    </div>
@endif
