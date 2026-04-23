@push('page_metas')
@php
    $enRoutes = ['enblog', 'enlistado', 'hikes', 'mapien', 'around', 'private', 'fulldayen', 'lodgen', 'destinies-peru', 'destinies-peru.destination', 'search.blog.en', 'searchen'];
    $isEn = in_array(Route::currentRouteName(), $enRoutes, true)
            || str_starts_with(request()->path(), 'en/')
            || str_starts_with(request()->path(), 'peru-blog')
            || str_starts_with(request()->path(), 'en-blog/')
            || str_starts_with(request()->path(), 'en-tag/');
    $ogLocale = $isEn ? 'en_US' : 'es_PE';
@endphp
<meta name="description" content="{{ $descripcion }}" />
<meta name="keywords" content="{{ $keywords }}" />
<link rel="canonical" href="{{ request()->fullUrl() }}" />
<meta property="og:type" content="website">
<meta property="og:locale" content="{{ $ogLocale }}">
<meta property="og:title" content="{{ $titulo }}">
<meta property="og:description" content="{{ $descripcion }}">
<meta property="og:url" content="{{ request()->fullUrl() }}">
<meta property="og:image" content="{{ $img }}">
<meta property="og:image:secure_url" content="{{ $img }}">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $titulo }}">
<meta name="twitter:description" content="{{ $descripcion }}">
<meta name="twitter:image" content="{{ $img }}">
<meta name="robots" content="index,follow">
@endpush
