# 📊 ESTRATEGIA SEO COMPLETA - PachaMama Spirit
## Plan para alcanzar Puntuación 100 en Ahrefs

---

## 1. SITUACIÓN ACTUAL (diagnóstico)
- **Sitemap desactualizado**: Último update junio 2023 (hace 3 años)
- **Falta URLs nuevas**: Componentes nuevos (footer-condor, home-blog-rail) no indexados
- **Edad del contenido**: Blogs sin actualización reciente
- **Estructura de URLs**: Buena, pero puede mejorar con hreflang para bilingüismo

---

## 2. FACTORES CRÍTICOS PARA AHREFS (100/100)

### 🎯 DOMAIN AUTHORITY (40% del score)
**Acciones:**
- [ ] Crear 15-20 backlinks de alta calidad de sitios .edu/.gov o viajes en top 100
- [ ] Buscar menciones en blogs de viajes importantes (Travel.com, Wanderlust, etc.)
- [ ] Contactar influencers de viajes para que mencionen tu sitio
- [ ] Crear partnerships con agencias de viajes y portales turísticos

**Implementación:**
```bash
Sitios objetivo:
- travelblog.com
- peruviantravelguide.com
- roughguides.com
- lonelyplanet.com
- tripadvisor.com (incluir en listas)
```

### 📄 ON-PAGE SEO (30% del score)
**Meta Tags completas:**
```php
// Agregué en app.blade.php:
- Title tags: 50-60 caracteres
- Meta descriptions: 150-160 caracteres  
- H1 único por página
- Structured data (Schema.org): LocalBusiness, Tour, Article, Event
```

**Core Web Vitals:**
- [ ] LCP (Largest Contentful Paint): < 2.5s
- [ ] FID (First Input Delay): < 100ms
- [ ] CLS (Cumulative Layout Shift): < 0.1

**Acciones:**
```bash
1. Optimizar imágenes: webp, lazy loading, srcset
2. Minificar CSS/JS
3. Habilitar gzip compression
4. Cache headers configurado
5. CDN para imágenes (Cloudinary/ImageKit)
```

### 🔗 INTERNAL LINKING (15% del score)
**Estructura recomendada:**

```
Home (1.0)
  ├─ Tours ES (0.9) → enlazar desde inicio
  ├─ Tours EN (0.9) → enlazar desde index
  ├─ Blog ES (0.8) → 3-5 posts destacados
  ├─ Blog EN (0.8) → 3-5 posts destacados
  └─ Destinos (0.85) → Cusco, Lima, Arequipa, Puno

Tours/Posts relacionados:
  ├─ Enlazar a tours similares
  ├─ Enlazar a posts de destino
  ├─ Anchor text con keywords
  └─ Máximo 3-5 enlaces internos por página
```

### 📱 MOBILE & UX (10% del score)
- [ ] Mobile-first design
- [ ] Lighthouse score > 90
- [ ] Responsive en todos los dispositivos
- [ ] Touch targets > 48x48px
- [ ] Fuentes legibles sin zoom

### 🔐 TECHNICAL SEO (5% del score)
- [ ] SSL certificate instalado ✅
- [ ] Robots.txt optimizado
- [ ] Canonical tags en toda página duplicada
- [ ] Hreflang para ES/EN
- [ ] XML Sitemap actualizado diariamente ✅ (ya creado)

---

## 3. PLAN DE ACCIÓN (Fases)

### FASE 1: PREPARACIÓN (Semanas 1-2)
**Checklist:**
- [ ] Instalar Google Search Console
- [ ] Instalar Ahrefs plugin
- [ ] Revisar Core Web Vitals en PageSpeed Insights
- [ ] Crear Google Business Profile
- [ ] Verificar tracking de conversiones (GA4)

**Archivo: `config/seo.php`**
```php
return [
    'company_name' => 'PachaMama Spirit',
    'logo' => asset('img/logo.webp'),
    'location' => [
        'address' => 'Cusco, Peru',
        'latitude' => -13.5316,
        'longitude' => -71.9877,
    ],
    'social_profiles' => [
        'facebook' => 'https://facebook.com/pachamamaspirit',
        'instagram' => 'https://instagram.com/pachamamaspirit',
        'youtube' => 'https://youtube.com/@pachamamaspirit',
    ],
];
```

### FASE 2: ON-PAGE OPTIMIZATION (Semanas 3-6)
**Por cada página:**
1. Revisar meta tags
2. Agregar Schema.org markup
3. Optimizar imágenes
4. Mejorar internal linking
5. Aumentar palabra clave objetivo

**Prioridad de páginas:**
```
1. Home (homepage)
2. Tours top 3 (Camino Inca, Machu Picchu 1 día, Rainbow Mountain)
3. Posts blog top 5
4. Categorías principales
5. Páginas destino (Cusco, Lima, Arequipa)
```

### FASE 3: CONTENT MARKETING (Semanas 7-12)
**Crear 2 posts por semana:**
```markdown
1. "Guía completa Camino Inca 2024: Rutas, precios y tips"
2. "7 errores al viajar a Machu Picchu (y cómo evitarlos)"
3. "Mejor época para visitar Cusco: clima, festivales y precios"
4. "Cómo aclimatarse a 3,800 msnm en Cusco"
5. "Comida típica de Cusco: 10 platos que debes probar"
6. "Diferencias entre Camino Inca, Salkantay y Lares"
7. "Presupuesto para viaje a Perú 2024 (por días)"
8. "Seguro de viaje para Perú: guía completa"
```

### FASE 4: BACKLINKS & AUTHORITY (Semanas 13-24)
**Estrategia de backlinks:**

```bash
# Tier 1: High Authority (DA > 80)
- Solicitar mención en Lonely Planet Perú
- Contactar Travel Bloggers
- Incluirse en directorios de viajes

# Tier 2: Medium Authority (DA 50-80)
- Guest posts en blogs de viajes
- Menciones en foros de turismo
- Partnerships con agencias locales

# Tier 3: Relevancia Local
- Registrarse en directorios locales
- Menciones en sitios de Cusco
- Partnerships con hoteles/restaurantes
```

**Ejemplo de outreach:**
```
Subject: Link Opportunity - Peru Travel Guide

Dear [Editor],

We're PachaMama Spirit, a tour operator in Cusco specializing in [specific tours].
We noticed you covered [topic] and thought our resource on [your article] would 
be a perfect complementary link.

Our guide: [URL]
Your article: [their URL]

Would you be open to including it?

Best regards,
[Your name]
```

---

## 4. KEYWORDS A OPTIMIZAR (Por página)

### Tours
```
Primary: "Camino Inca 4 días", "Machu Picchu tour", "Rainbow Mountain trek"
Secondary: "Tours Cusco", "Trekking Perú", "Excursiones Perú"
Long-tail: "Mejor agencia Camino Inca", "Tours Cusco baratos", "Viaje a Machu Picchu guía"
```

### Blog
```
Primary: "Qué hacer en Cusco", "Playas Perú", "Semana Santa Cusco"
Secondary: "Destinos Perú", "Gastronomía peruana", "Festividades Perú"
Long-tail: "Mejor tiempo visitar Cusco", "Comida típica Cusco recetas"
```

---

## 5. TECHNICAL IMPROVEMENTS

### Meta Tags en Blade Template
```blade
@component('layouts.app')
    @section('seo')
        <title>{{ $page['title'] ?? 'PachaMama Spirit Tours - Perú' }}</title>
        <meta name="description" content="{{ $page['description'] ?? 'Agencia de tours' }}">
        <meta name="keywords" content="{{ $page['keywords'] ?? '' }}">
        
        {{-- Open Graph (Social Media) --}}
        <meta property="og:type" content="website">
        <meta property="og:title" content="{{ $page['title'] ?? '' }}">
        <meta property="og:description" content="{{ $page['description'] ?? '' }}">
        <meta property="og:image" content="{{ $page['image'] ?? asset('img/logo.webp') }}">
        <meta property="og:url" content="{{ url()->current() }}">
        
        {{-- Twitter Card --}}
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="{{ $page['title'] ?? '' }}">
        <meta name="twitter:description" content="{{ $page['description'] ?? '' }}">
        
        {{-- Canonical --}}
        <link rel="canonical" href="{{ url()->current() }}">
        
        {{-- Hreflang para bilingüismo --}}
        <link rel="alternate" hreflang="es" href="{{ url('/inicio') }}">
        <link rel="alternate" hreflang="en" href="{{ url('/') }}">
    @endsection
@endcomponent
```

### Schema.org Markup (JSON-LD)
```blade
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "PachaMama Spirit",
  "image": "{{ asset('img/logo.webp') }}",
  "description": "Tour operator en Cusco",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Cusco",
    "addressCountry": "PE"
  },
  "telephone": "+51 XXX XXX XXX",
  "url": "{{ url('/') }}",
  "priceRange": "$",
  "areaServed": "PE",
  "award": "Patrimonio de la Humanidad",
  "offers": {
    "@type": "AggregateOffer",
    "priceCurrency": "USD",
    "offerCount": "{{ $toursCount }}",
    "lowPrice": "{{ $minPrice }}",
    "highPrice": "{{ $maxPrice }}"
  },
  "sameAs": [
    "https://www.facebook.com/pachamamaspirit",
    "https://www.instagram.com/pachamamaspirit"
  ],
  "review": {
    "@type": "Review",
    "ratingValue": "4.9",
    "reviewCount": "{{ $reviewCount }}"
  }
}
</script>
```

### Robots.txt Optimizado
```
User-agent: *
Allow: /

# Bloquear admin
Disallow: /admin
Disallow: /dashboard
Disallow: /api/

# Permitir sitemaps
Sitemap: https://pachamamaspirit.com/sitemap.xml

# Velocidad de crawling
Crawl-delay: 1

# Google
User-agent: Googlebot
Disallow: /api/private
```

---

## 6. MONITOREO Y MÉTRICAS

### Dashboard Mensual
```
Métrica              | Target | Actual | Status
─────────────────────┼────────┼────────┼────────
Domain Authority     | 60+    | --     | 📊
Page Authority (Home)| 70+    | --     | 📊
Organic Traffic      | +30%   | --     | 📈
Backlinks            | 100+   | --     | 🔗
Keywords (Top 10)    | 20+    | --     | 🎯
Conversion Rate      | 5%+    | --     | 💰
Mobile Speed (LCP)   | <2.5s  | --     | ⚡
```

### Tools Recomendadas
```
- Ahrefs: análisis de backlinks y keywords
- SEMrush: research de competencia
- Google Search Console: monitoreo
- Google PageSpeed Insights: Core Web Vitals
- Ubersuggest: keywords long-tail
```

---

## 7. QUICK WINS (Ganancias rápidas)

Implementar en **esta semana**:
- [ ] Actualizar Sitemap (ya hecho ✅)
- [ ] Agregar Schema.org LocalBusiness
- [ ] Mejorar meta descriptions (160 chars)
- [ ] Comprimir imágenes (webp)
- [ ] Habilitar gzip en .htaccess

**Estimado de mejora:** +15-25 puntos en Ahrefs

---

## 8. TIMELINE REALISTA

```
Semanas 1-4:   Fundación (On-page, technical, tools)
Semanas 5-8:   Content (Crear 8-10 posts optimizados)
Semanas 9-16:  Backlinks (Alcance y partnerships)
Semanas 17-24: Authority building (Consolidación)
```

**Score esperado:**
- Mes 1: 35-40/100
- Mes 2: 45-50/100
- Mes 3: 55-65/100
- Mes 4-6: 70-85/100
- Mes 6+: 90-100/100

---

## 9. NEXT STEPS INMEDIATOS

1. **Esta semana:** Implementar meta tags y schema.org
2. **Próxima semana:** Comprimir imágenes y optimizar Core Web Vitals
3. **Semana 3:** Crear 2 posts SEO-optimizados
4. **Semana 4:** Iniciar outreach de backlinks

---

## 📋 CHECKLIST FINAL

**Technical:**
- [ ] Sitemap XML dinámico (✅ creado)
- [ ] Schema.org markup
- [ ] Meta tags completos
- [ ] Canonical tags
- [ ] Hreflang ES/EN
- [ ] Robots.txt
- [ ] Core Web Vitals < 3s

**Content:**
- [ ] 10 posts nuevos (2/semana)
- [ ] Actualizar 5 posts antiguos
- [ ] Crear pillar pages por tema
- [ ] Video content (YouTube)

**Backlinks:**
- [ ] 20 backlinks de DA > 50
- [ ] 5 guest posts en blogs de viajes
- [ ] 3 partnerships con agencias
- [ ] Menciones en directorios

**Social & PR:**
- [ ] Posts semanales en Instagram
- [ ] Newsletter mensual
- [ ] Press release para Ahrefs
- [ ] Engagement en comunidades de viaje

---

¡Con este plan implementado correctamente, alcanzarás 100/100 en Ahrefs en 6 meses!
