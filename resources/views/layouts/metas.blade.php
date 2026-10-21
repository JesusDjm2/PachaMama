@push('page_metas')
@php
    $ruta = Route::currentRouteName();
    $isPt = $ruta === 'pt.tour';
    $isEn = $ruta === 'toursen.show';
    $isEs = ! $isPt && ! $isEn;

    $ogLocale = $isPt ? 'pt_BR' : ($isEn ? 'en_US' : 'es_PE');
    $touristTypes = match (true) {
        $isPt => ['Aventura', 'Cultura', 'História'],
        $isEn => ['Adventure', 'Culture', 'History'],
        default => ['Aventura', 'Cultura', 'Historia'],
    };
    $itineraryLabel = $isPt ? 'Itinerário de' : ($isEn ? 'Itinerary of' : 'Itinerario de');
    $homeLabel = $isPt ? 'Início' : ($isEn ? 'Home' : 'Inicio');
    $homeUrl = $isPt ? route('pt.index') : ($isEn ? 'https://pachamamaspirit.com/' : 'https://pachamamaspirit.com/inicio');

    // El tour "hermano" de cada idioma se resuelve desde la fila española (tours.id).
    $tourEs = $isEs ? $tour : ($tour->tour ?? null);
    $tourEn = $tourEs?->toursens;
    $tourPt = $isPt ? $tour : $tourEs?->tourpt;
@endphp
<meta name="description" content="{{ $tour->descripcion }}">
<meta name="keywords" content="{{ $tour->keywords }}">
<link rel="canonical" href="{{ request()->url() }}">
<meta property="og:type" content="product">
<meta property="og:locale" content="{{ $ogLocale }}">
<meta property="og:title" content="{{ $tour->nombre }} | Pacha Mama Spirit">
<meta property="og:description" content="{{ $tour->descripcion }}">
<meta property="og:url" content="{{ request()->url() }}">
<meta property="og:image" content="{{ $tour->img }}">
<meta property="og:image:secure_url" content="{{ $tour->img }}">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $tour->nombre }} | Pacha Mama Spirit">
<meta name="twitter:description" content="{{ $tour->descripcion }}">
<meta name="twitter:image" content="{{ $tour->img }}">
<meta name="robots" content="index,follow">
@if ($isEs)
<link rel="alternate" hreflang="es" href="{{ request()->url() }}">
@else
<link rel="alternate" hreflang="es" href="{{ $tourEs ? route('tours.show', $tourEs->slug) : $homeUrl }}">
@endif
@if ($tourEn)
<link rel="alternate" hreflang="en" href="{{ $isEn ? request()->url() : route('toursen.show', $tourEn->slug) }}">
@endif
@if ($tourPt)
<link rel="alternate" hreflang="pt-br" href="{{ $isPt ? request()->url() : route('pt.tour', $tourPt->slug) }}">
@endif
@if ($tourEn)
<link rel="alternate" hreflang="x-default" href="{{ $isEn ? request()->url() : route('toursen.show', $tourEn->slug) }}">
@else
<link rel="alternate" hreflang="x-default" href="{{ request()->url() }}">
@endif
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": "TouristTrip",
      "name": "{{ addslashes($tour->nombre) }}",
      "description": "{{ addslashes($tour->descripcion) }}",
      "image": "{{ $tour->img }}",
      "url": "{{ request()->url() }}",
      "inLanguage": "{{ $isPt ? 'pt-BR' : ($isEn ? 'en' : 'es') }}",
      "provider": {
        "@id": "https://pachamamaspirit.com/#organization"
      },
      "touristType": {!! json_encode($touristTypes) !!},
      "offers": {
        "@type": "Offer",
        "price": "{{ $tour->precio }}",
        "priceCurrency": "USD",
        "availability": "https://schema.org/InStock",
        "url": "{{ request()->url() }}"
      },
      "itinerary": {
        "@type": "ItemList",
        "name": "{{ $itineraryLabel }} {{ addslashes($tour->nombre) }}",
        "numberOfItems": {{ (int) $tour->dias }}
      },
      "duration": "P{{ (int) $tour->dias }}D",
      "location": {
        "@type": "Place",
        "name": "{{ addslashes($tour->ubicacion) }}",
        "address": {
          "@type": "PostalAddress",
          "addressCountry": "PE"
        }
      }
    },
    {
      "@type": "BreadcrumbList",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "{{ $homeLabel }}",
          "item": "{{ $homeUrl }}"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "{{ addslashes($tour->nombre) }}",
          "item": "{{ request()->url() }}"
        }
      ]
    }
  ]
}
</script>
@endpush
