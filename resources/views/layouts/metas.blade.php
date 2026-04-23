@push('page_metas')
@php
    $isEn = Route::currentRouteName() === 'toursen.show';
    $ogLocale = $isEn ? 'en_US' : 'es_PE';
    $touristTypes = $isEn ? ['Adventure', 'Culture', 'History'] : ['Aventura', 'Cultura', 'Historia'];
    $itineraryLabel = $isEn ? 'Itinerary of' : 'Itinerario de';
    $homeLabel = $isEn ? 'Home' : 'Inicio';
    $homeUrl = $isEn ? 'https://pachamamaspirit.com/' : 'https://pachamamaspirit.com/inicio';
@endphp
<meta name="description" content="{{ $tour->descripcion }}">
<meta name="keywords" content="{{ $tour->keywords }}">
<link rel="canonical" href="{{ request()->fullUrl() }}">
<meta property="og:type" content="product">
<meta property="og:locale" content="{{ $ogLocale }}">
<meta property="og:title" content="{{ $tour->nombre }} | Pacha Mama Spirit">
<meta property="og:description" content="{{ $tour->descripcion }}">
<meta property="og:url" content="{{ request()->fullUrl() }}">
<meta property="og:image" content="{{ $tour->img }}">
<meta property="og:image:secure_url" content="{{ $tour->img }}">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $tour->nombre }} | Pacha Mama Spirit">
<meta name="twitter:description" content="{{ $tour->descripcion }}">
<meta name="twitter:image" content="{{ $tour->img }}">
<meta name="robots" content="index,follow">
@if (! $isEn && $tour->toursens)
<link rel="alternate" hreflang="en" href="{{ route('toursen.show', $tour->toursens->slug) }}">
@endif
@if ($isEn && $tour->tour)
<link rel="alternate" hreflang="es" href="{{ route('tours.show', $tour->tour->slug) }}">
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
      "url": "{{ request()->fullUrl() }}",
      "inLanguage": "{{ $isEn ? 'en' : 'es' }}",
      "provider": {
        "@id": "https://pachamamaspirit.com/#organization"
      },
      "touristType": {!! json_encode($touristTypes) !!},
      "offers": {
        "@type": "Offer",
        "price": "{{ $tour->precio }}",
        "priceCurrency": "USD",
        "availability": "https://schema.org/InStock",
        "url": "{{ request()->fullUrl() }}"
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
          "item": "{{ request()->fullUrl() }}"
        }
      ]
    }
  ]
}
</script>
@endpush
