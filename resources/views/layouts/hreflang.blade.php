{{--
    SEO bilingual hreflang map.
    Include in <head> of both layouts (app.blade.php and appen.blade.php).
    For blog/tour detail pages the pair is declared by the view via
    @push('page_metas') with its own <link rel="alternate"> tags.
--}}
@php
    use App\Support\LocaleRouteMap;
    $current = Route::currentRouteName();
    $destPair = LocaleRouteMap::destinationAlternateUrls($current, request()->route('slug'));
    $pairs = LocaleRouteMap::staticRoutePairs();
    $pair = $pairs[$current] ?? null;
@endphp
@if ($destPair)
    <link rel="alternate" hreflang="es" href="{{ $destPair['es'] }}">
    <link rel="alternate" hreflang="en" href="{{ $destPair['en'] }}">
    <link rel="alternate" hreflang="x-default" href="{{ $destPair['en'] }}">
@elseif ($pair)
    <link rel="alternate" hreflang="es" href="{{ route($pair['es']) }}">
    <link rel="alternate" hreflang="en" href="{{ route($pair['en']) }}">
    <link rel="alternate" hreflang="x-default" href="{{ route($pair['en']) }}">
@else
    {{-- Pages without bilingual pair (blog/tour details declare their own via @push) --}}
    <link rel="alternate" hreflang="x-default" href="{{ url('/') }}">
@endif
