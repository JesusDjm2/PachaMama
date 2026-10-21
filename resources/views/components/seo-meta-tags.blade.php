<!-- SEO Meta Tags Component -->
<!-- Uso: @include('components.seo-meta-tags', ['title' => '...', 'description' => '...', ...]) -->

@php
$site_name = 'PachaMama Spirit';
$canonical_url = $canonical_url ?? url()->current();
$image = $image ?? asset('img/logo.webp');
$url = $url ?? url()->current();

// Si no se pasa descripción, usar una por defecto
if (!isset($description) || empty($description)) {
    $description = 'PachaMama Spirit - Tours a Machu Picchu, Camino Inca, Rainbow Mountain y más destinos en Perú. Vive experiencias inolvidables en los Andes.';
}

// Detectar idioma de la URL
$locale = request()->segment(1) === 'en' ? 'en' : 'es';
$hreflang_es = url()->current();
$hreflang_en = url()->current();

if ($locale === 'es') {
    // Si estamos en español, crear versión en inglés
    $hreflang_en = str_replace('/es/', '/', $hreflang_en);
} else {
    // Si estamos en inglés, crear versión en español
    $hreflang_es = str_replace('/', '/es/', $hreflang_es);
}
@endphp

<!-- Basic Meta Tags -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>{{ $title }} | {{ $site_name }}</title>
<meta name="description" content="{{ Str::limit($description, 160) }}">
@if(isset($keywords))
<meta name="keywords" content="{{ $keywords }}">
@endif

<!-- Canonical URL -->
<link rel="canonical" href="{{ $canonical_url }}">

<!-- Language Alternate Tags (Hreflang) -->
<link rel="alternate" hreflang="es" href="{{ $hreflang_es }}">
<link rel="alternate" hreflang="en" href="{{ $hreflang_en }}">
<link rel="alternate" hreflang="x-default" href="{{ url('/') }}">

<!-- Open Graph Tags (Social Media) -->
<meta property="og:type" content="{{ $og_type ?? 'website' }}">
<meta property="og:title" content="{{ $title }}">
<meta property="og:description" content="{{ Str::limit($description, 160) }}">
<meta property="og:image" content="{{ $image }}">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:url" content="{{ $url }}">
<meta property="og:site_name" content="{{ $site_name }}">
@if(isset($og_locale))
<meta property="og:locale" content="{{ $og_locale }}">
@endif

<!-- Twitter Card Tags -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $title }}">
<meta name="twitter:description" content="{{ Str::limit($description, 160) }}">
<meta name="twitter:image" content="{{ $image }}">
<meta name="twitter:site" content="@pachamamaspirit">

<!-- Additional Meta Tags -->
<meta name="author" content="{{ $author ?? 'PachaMama Spirit' }}">
<meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
<meta name="theme-color" content="#8B4513">

<!-- Favicon -->
<link rel="icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">
<link rel="apple-touch-icon" href="{{ asset('img/apple-touch-icon.png') }}">

<!-- Preload for Performance -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="dns-prefetch" href="https://cdnjs.cloudflare.com">

<!-- Structured Data (JSON-LD) -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "{{ $schema_type ?? 'Organization' }}",
  "name": "{{ $site_name }}",
  "url": "{{ url('/') }}",
  "logo": "{{ asset('img/logo.webp') }}",
  "description": "{{ $description }}",
  "telephone": "+51 84 000000",
  "email": "info@pachamamaspirit.com",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Portal de Panes 167",
    "addressLocality": "Cusco",
    "addressRegion": "Cusco",
    "postalCode": "08002",
    "addressCountry": "PE"
  },
  "areaServed": ["PE", "SA"],
  "priceRange": "$$",
  "foundingDate": "2015",
  "sameAs": [
    "https://www.facebook.com/pachamamaspirit",
    "https://www.instagram.com/pachamamaspirit",
    "https://www.youtube.com/@pachamamaspirit",
    "https://www.tripadvisor.com/Attraction_Review"
  ]@if(isset($rating)),
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "{{ $rating ?? 4.9 }}",
    "reviewCount": "{{ $review_count ?? 250 }}"
  }
  @endif
}
</script>

@if(isset($schema_breadcrumb) && !empty($schema_breadcrumb))
<!-- Breadcrumb Schema -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": @json($schema_breadcrumb)
}
</script>
@endif

@if(isset($schema_article))
<!-- Article Schema -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "headline": "{{ $title }}",
  "description": "{{ $description }}",
  "image": "{{ $image }}",
  "datePublished": "{{ $published_date ?? now()->toIso8601String() }}",
  "dateModified": "{{ $modified_date ?? now()->toIso8601String() }}",
  "author": {
    "@type": "Person",
    "name": "{{ $author ?? 'PachaMama Spirit' }}"
  },
  "publisher": {
    "@type": "Organization",
    "name": "{{ $site_name }}",
    "logo": "{{ asset('img/logo.webp') }}"
  }
}
</script>
@endif

@if(isset($schema_product))
<!-- Product/Tour Schema -->
<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Product",
  "name": "{{ $title }}",
  "image": "{{ $image }}",
  "description": "{{ $description }}",
  "brand": {
    "@type": "Brand",
    "name": "{{ $site_name }}"
  },
  "offers": {
    "@type": "Offer",
    "url": "{{ $url }}",
    "priceCurrency": "USD",
    "price": "{{ $price ?? '0' }}",
    "availability": "https://schema.org/InStock"
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "{{ $rating ?? 4.9 }}",
    "reviewCount": "{{ $review_count ?? 100 }}"
  }
}
</script>
@endif
