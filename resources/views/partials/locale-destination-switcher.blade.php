@php
    $destPair = \App\Support\LocaleRouteMap::destinationAlternateUrls(Route::currentRouteName(), request()->route('slug'));
@endphp
@if ($destPair)
    <div class="locale-lang-strip locale-lang-strip--inline text-center small">
        <span class="locale-lang-strip__muted mr-1">{{ Route::currentRouteName() === 'destinies-peru.destination' ? 'This page:' : 'Esta página:' }}</span>
        <a href="{{ $destPair['es'] }}" hreflang="es">Español</a>
        <span class="locale-lang-strip__muted mx-1" aria-hidden="true">·</span>
        <a href="{{ $destPair['en'] }}" hreflang="en">English</a>
    </div>
@endif
