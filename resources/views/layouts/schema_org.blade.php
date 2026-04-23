{{--
    Global Organization / TravelAgency / WebSite schema.
    Included in <head> of both layouts (app.blade.php + appen.blade.php) so it
    renders on every page. Tour and blog pages reference this via @id.
--}}
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@graph": [
    {
      "@type": ["TravelAgency", "Organization", "LocalBusiness"],
      "@id": "https://pachamamaspirit.com/#organization",
      "name": "Pacha Mama Spirit",
      "alternateName": "Pacha Mama Spirit Perú",
      "description": "Agencia de viajes peruana especializada en tours de aventura, caminatas, cultura e historia. Fundada en Cusco con más de 20 años de experiencia — Machu Picchu, Camino Inca, Cusco day trips y tours privados.",
      "url": "https://pachamamaspirit.com/inicio",
      "logo": {
        "@type": "ImageObject",
        "url": "https://pachamamaspirit.com/img/pacha-mama-spirit-logo.png",
        "width": 200,
        "height": 60
      },
      "image": "https://pachamamaspirit.com/img/panoramico/Recorrido-Cusco-Machu-Picchu.webp",
      "foundingDate": "2018",
      "foundingLocation": {
        "@type": "Place",
        "name": "Cusco, Perú"
      },
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Ayuda Mutua K2-6",
        "addressLocality": "Cusco",
        "addressRegion": "Cusco",
        "addressCountry": "PE"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": -13.5319,
        "longitude": -71.9675
      },
      "telephone": "+51921136755",
      "email": "info@pachamamaspirit.com",
      "priceRange": "$$",
      "openingHoursSpecification": [
        {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
          "opens": "08:00",
          "closes": "20:00"
        }
      ],
      "contactPoint": [
        {
          "@type": "ContactPoint",
          "telephone": "+51 921 136 755",
          "contactType": "reservations",
          "availableLanguage": ["Spanish", "English"],
          "email": "reserves@pachamamaspirit.com"
        },
        {
          "@type": "ContactPoint",
          "telephone": "+51 921 136 755",
          "contactType": "customer support",
          "availableLanguage": ["Spanish", "English"],
          "email": "info@pachamamaspirit.com"
        }
      ],
      "areaServed": {
        "@type": "Country",
        "name": "Peru"
      },
      "knowsLanguage": ["es", "en"],
      "sameAs": [
        "https://www.facebook.com/PachaMamaSpiritMountain",
        "https://www.instagram.com/pachamamaspiritmountain/",
        "https://twitter.com/PachaSpirit",
        "https://www.tripadvisor.com/Attraction_Review-g294314-d23476170-Reviews-Pacha_Mama_Spirit-Cusco_Cusco_Region.html",
        "https://www.youtube.com/channel/UCR5v94oQX3budGLKTRL4BBQ"
      ],
      "makesOffer": {
        "@type": "Offer",
        "itemOffered": {
          "@type": "Service",
          "serviceType": "Tours and Travel Experiences in Peru"
        }
      }
    },
    {
      "@type": "WebSite",
      "@id": "https://pachamamaspirit.com/#website",
      "url": "https://pachamamaspirit.com",
      "name": "Pacha Mama Spirit",
      "description": "Agencia de viajes en Perú — tours a Machu Picchu, Camino Inca, Cusco y experiencias culturales.",
      "publisher": { "@id": "https://pachamamaspirit.com/#organization" },
      "inLanguage": ["es", "en"],
      "potentialAction": [
        {
          "@type": "SearchAction",
          "target": {
            "@type": "EntryPoint",
            "urlTemplate": "https://pachamamaspirit.com/search?name={search_term_string}"
          },
          "query-input": "required name=search_term_string"
        },
        {
          "@type": "SearchAction",
          "target": {
            "@type": "EntryPoint",
            "urlTemplate": "https://pachamamaspirit.com/searchen?name={search_term_string}"
          },
          "query-input": "required name=search_term_string"
        }
      ]
    }
  ]
}
</script>
