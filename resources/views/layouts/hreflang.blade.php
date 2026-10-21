{{--
    SEO hreflang map (ES / EN / PT-BR).
    Include in <head> of the three layouts (app, appen, apppt).
    For blog/tour detail pages the pair is declared by the view via
    @push('page_metas') with its own <link rel="alternate"> tags.
--}}
@php
    use App\Support\LocaleRouteMap;
    $current = Route::currentRouteName();
    // Detail pages (blog, tour) declare their own hreflang via @section('metas') / @push('page_metas').
    // Skip here to avoid duplicate/conflicting x-default tags pointing to the homepage.
    $selfManaged = in_array($current, ['blog.show', 'enblog', 'tours.show', 'toursen.show', 'tag', 'entag', 'pt.tour'], true);
    $destPair = $selfManaged ? null : LocaleRouteMap::destinationAlternateUrls($current, request()->route('slug'));
    $pairs = LocaleRouteMap::staticRoutePairs();
    $pair = $selfManaged ? null : ($pairs[$current] ?? null);
    $ptUrl = $selfManaged ? null : LocaleRouteMap::counterpartUrl('pt');
@endphp
@if ($selfManaged)
    {{-- hreflang handled by the individual view --}}
@elseif ($destPair)
    <link rel="alternate" hreflang="es" href="{{ $destPair['es'] }}">
    <link rel="alternate" hreflang="en" href="{{ $destPair['en'] }}">
    @if ($ptUrl)
    <link rel="alternate" hreflang="pt-br" href="{{ $ptUrl }}">
    @endif
    <link rel="alternate" hreflang="x-default" href="{{ $destPair['en'] }}">
@elseif ($pair)
    <link rel="alternate" hreflang="es" href="{{ route($pair['es']) }}">
    <link rel="alternate" hreflang="en" href="{{ route($pair['en']) }}">
    @if ($ptUrl)
    <link rel="alternate" hreflang="pt-br" href="{{ $ptUrl }}">
    @endif
    <link rel="alternate" hreflang="x-default" href="{{ route($pair['en']) }}">
@endif
