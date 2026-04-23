@extends('layouts.app')
@php $titulo="Preguntas Frecuentes para Viajar a Perú 2026 | Pacha Mama Spirit" @endphp
@php $descripcion="18 preguntas actualizadas para viajar a Perú 2026: visa, seguridad, Machu Picchu, altitud, moneda, clima y consejos locales de una agencia en Cusco." @endphp
@php $keywords="preguntas frecuentes Peru, FAQ viajar Peru, como viajar a Peru 2026, seguridad Peru, visa Peru, moneda Peru, clima Machu Picchu, mal de altura Cusco, que llevar a Peru, pago a la tierra" @endphp
@php $img="https://pachamamaspirit.com/img/panoramico/trekking-peru.webp" @endphp
@section('titulo', $titulo)
@include('layouts.metasblogs')
@push('page_metas')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {"@type":"Question","name":"¿Necesito visa para viajar a Perú en 2026?","acceptedAnswer":{"@type":"Answer","text":"La mayoría de viajeros de América, la Unión Europea, Reino Unido, Australia, Nueva Zelanda y Japón no necesitan visa para estancias turísticas de hasta 183 días. Solo necesitas pasaporte vigente (mínimo 6 meses) y billete de salida. Al ingresar se emite la TAM digital (Tarjeta Andina de Migración). Consulta la lista oficial en migraciones.gob.pe si tu nacionalidad no está en esos bloques."}},
    {"@type":"Question","name":"¿Cuántos días se recomienda para visitar Perú?","acceptedAnswer":{"@type":"Answer","text":"El mínimo viable son 7 días para Lima, Cusco y Machu Picchu. Lo ideal son 10 a 14 días para sumar Valle Sagrado, Rainbow Mountain y Titicaca. Si quieres también Arequipa, Colca o Amazonía, calcula 18 a 21 días. En menos de 5 días solo alcanza para Cusco y Machu Picchu a ritmo muy exigente."}},
    {"@type":"Question","name":"¿Es necesario hablar español para viajar por Perú?","acceptedAnswer":{"@type":"Answer","text":"No es indispensable si viajas con agencia. En Perú el español es el idioma oficial (82% de la población) y en Cusco también se habla quechua. Si viajas por tu cuenta fuera de zonas turísticas, un nivel básico ayuda mucho. Con agencia tendrás guías bilingües (inglés, francés, alemán, italiano, chino) y no necesitas español."}},
    {"@type":"Question","name":"¿Qué tan seguro es viajar a Perú en 2026?","acceptedAnswer":{"@type":"Answer","text":"Perú es seguro en sus zonas turísticas: Cusco, Valle Sagrado, Machu Picchu, Arequipa, Puno y el centro de Lima. Toma precauciones básicas: usa taxis por app (Uber, Cabify, InDrive), no exhibas objetos de valor y evita zonas alejadas de noche. Cusco tiene policía turística dedicada (POLTUR). Viajar con agencia reduce el riesgo a prácticamente cero."}},
    {"@type":"Question","name":"¿Cuál es la mejor época para visitar Machu Picchu?","acceptedAnswer":{"@type":"Answer","text":"Mayo a setiembre es la temporada seca con cielos despejados, ideal para trekking pero con más turistas. Abril y octubre ofrecen la mejor combinación entre buen clima, menos multitudes y precios razonables. Febrero cierra el Camino Inca Clásico por mantenimiento, pero Machu Picchu y otras rutas siguen abiertas."}},
    {"@type":"Question","name":"¿Cómo evitar el mal de altura (soroche) en Cusco?","acceptedAnswer":{"@type":"Answer","text":"Cusco está a 3.399 metros. Para evitar el soroche: aclimátate al menos 2 días antes de actividad exigente, bebe mucha agua, evita alcohol las primeras 48 horas, come ligero, toma mate de coca o mastica hojas de coca (legal y efectivo), y descansa bien la primera noche. Si los síntomas son severos, consulta un médico — en Cusco hay servicio de oxígeno 24/7."}},
    {"@type":"Question","name":"¿Cuál es la moneda de Perú y cuánto dinero llevar?","acceptedAnswer":{"@type":"Answer","text":"La moneda oficial es el Sol peruano (PEN). Tipo de cambio 2026: 1 USD ≈ 3,75 soles, 1 EUR ≈ 4,10 soles. Presupuesto diario: 40–60 USD mochilero, 80–120 USD rango medio, 200+ USD gama alta. Los dólares se aceptan en hoteles grandes y agencias. Para el día a día usa soles. Cambia en casas de cambio oficiales, no en la calle. Visa y MasterCard se aceptan en la mayoría de establecimientos."}},
    {"@type":"Question","name":"¿Necesito vacunas para viajar a Perú?","acceptedAnswer":{"@type":"Answer","text":"Ninguna vacuna es obligatoria para entrar a Perú. Se recomienda la fiebre amarilla si planeas ir a la selva amazónica (Iquitos, Puerto Maldonado, Manu). Para Cusco, Machu Picchu y la costa no es necesaria. Ten al día tétanos, hepatitis A y B. Consulta con un médico de viaje 4 a 6 semanas antes del viaje."}},
    {"@type":"Question","name":"¿Puedo tomar agua del grifo en Perú?","acceptedAnswer":{"@type":"Answer","text":"No. El agua del grifo no es potable en la mayoría del país, incluida Cusco. Bebe siempre agua embotellada o filtrada. En lodges y hoteles turísticos ofrecen agua filtrada gratuita. Lleva una botella reutilizable con filtro (tipo LifeStraw o Grayl) para reducir plástico: Machu Picchu prohíbe botellas desechables desde 2019."}},
    {"@type":"Question","name":"¿Cómo llegar a Machu Picchu desde Cusco?","acceptedAnswer":{"@type":"Answer","text":"Cuatro rutas principales: 1) Tren turístico desde Ollantaytambo, la más cómoda, 4 horas total; 2) Camino Inca Clásico a pie en 4 días, requiere permiso con 6 meses de anticipación; 3) Salkantay Trek en 5 días, sin permiso especial, más económico; 4) Ruta por Hidroeléctrica combinando van y caminata, la más económica, 6 horas. Para el 95% de viajeros recomendamos la opción 1 por comodidad."}},
    {"@type":"Question","name":"¿Cuánto cuesta un viaje a Perú por 10 días?","acceptedAnswer":{"@type":"Answer","text":"Presupuesto 2026 para 10 días cubriendo Lima, Cusco, Valle Sagrado y Machu Picchu: mochilero 700–900 USD, rango medio 1.500–2.000 USD, gama alta 3.500–5.000 USD. Vuelos internacionales aparte. Los tours todo incluido con agencia local suelen ofrecer mejor relación precio-valor que armarlo por cuenta propia desde el extranjero."}},
    {"@type":"Question","name":"¿Qué ropa debo llevar a Perú?","acceptedAnswer":{"@type":"Answer","text":"Viste por capas. En Cusco puedes tener sol fuerte de día y hielo de noche. Lleva camisetas térmicas, polar o fleece, casaca impermeable, pantalón de trekking (evita jeans), gorro de sol y de lana, buff, guantes ligeros, botas de trekking ya usadas y zapatillas cómodas. Si vas a la selva, ropa ligera transpirable y repelente fuerte. Si vas a costa, ropa de verano."}},
    {"@type":"Question","name":"¿Se puede pagar con tarjeta en Perú?","acceptedAnswer":{"@type":"Answer","text":"Sí en hoteles, restaurantes turísticos, supermercados y agencias. Visa y MasterCard son las más aceptadas; American Express tiene cobertura limitada. En mercados, transporte local, taxis y pueblos pequeños es efectivo o Yape/Plin (apps de pago móvil locales, requieren número peruano). Siempre lleva algo de efectivo en soles."}},
    {"@type":"Question","name":"¿Es caro viajar a Perú?","acceptedAnswer":{"@type":"Answer","text":"No en comparación con Europa, Estados Unidos o Australia. Perú ofrece mucha variedad: desde hostales por 10 USD la noche hasta lodges de lujo sobre los 500 USD. La comida local en un mercado cuesta 3–5 USD, un restaurante medio 10–15 USD y alta cocina 40–80 USD. Lo más caro suelen ser los boletos de tren a Machu Picchu y la entrada a la ciudadela."}},
    {"@type":"Question","name":"¿Se puede ir a Machu Picchu sin agencia?","acceptedAnswer":{"@type":"Answer","text":"Sí, pero con limitaciones. Puedes comprar tú mismo el boleto en tuboleto.cultura.pe y los pasajes de tren en perurail.com o incarail.com. Desde 2024 todas las entradas exigen guía certificado dentro de la ciudadela. Si haces el Camino Inca, es obligatorio ir con agencia autorizada. Para el resto, puedes ir por cuenta propia si hablas español y tienes experiencia viajera."}},
    {"@type":"Question","name":"¿Qué comida peruana debo probar?","acceptedAnswer":{"@type":"Answer","text":"Imprescindibles: ceviche (pescado marinado en limón, patrimonio cultural), lomo saltado, ají de gallina, causa limeña, anticuchos, cuy al horno (andino tradicional), papas nativas (Perú tiene más de 3.800 variedades), chicha morada y pisco sour. En Cusco prueba también el chiri uchu en junio. La gastronomía peruana es reconocida entre las 3 mejores del mundo."}},
    {"@type":"Question","name":"¿Qué es el pago a la tierra o despacho andino?","acceptedAnswer":{"@type":"Answer","text":"Es la ceremonia más importante de la cosmovisión andina. Un maestro o paqo prepara una ofrenda a la Pachamama (Madre Tierra) con hojas de coca, semillas, lanas, dulces y elementos simbólicos, cada uno representa una petición o agradecimiento. Se realiza en agosto (mes sagrado), antes de un viaje importante, o en agradecimiento después de una sanación. En Pacha Mama Spirit incluimos despachos auténticos con paqos de comunidad, no performances turísticas."}},
    {"@type":"Question","name":"¿Puedo viajar a Perú con niños?","acceptedAnswer":{"@type":"Answer","text":"Sí, Perú es un destino familiar muy amigable. Recomendaciones: evita altitudes mayores a 3.500m con menores de 3 años, aclimatación gradual (Lima → Valle Sagrado 2.800m → Cusco 3.399m), itinerarios con más tiempo y menos ritmo, seguro de viaje con cobertura pediátrica. Machu Picchu es apto desde los 6 años. El Camino Inca generalmente se recomienda desde los 10 años. Diseñamos tours familiares con actividades adaptadas."}}
  ]
}
</script>

<style>
/* ── FAQ Page Styles ── */
.faq-search-wrap {
  background: #f5f8fa;
  border-radius: 16px;
  padding: 1.5rem 2rem;
  margin: 2rem 0;
  box-shadow: 0 2px 12px rgba(42,168,168,.08);
}
.faq-search-wrap input {
  border: 2px solid rgba(42,168,168,.3);
  border-radius: 50px;
  padding: .7rem 1.4rem .7rem 3rem;
  font-size: 1rem;
  width: 100%;
  outline: none;
  transition: border-color .2s;
  background: #fff url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='18' height='18' viewBox='0 0 24 24' fill='none' stroke='%232aa8a8' stroke-width='2.5' stroke-linecap='round' stroke-linejoin='round'%3E%3Ccircle cx='11' cy='11' r='8'/%3E%3Cline x1='21' y1='21' x2='16.65' y2='16.65'/%3E%3C/svg%3E") no-repeat 1rem center;
}
.faq-search-wrap input:focus { border-color: #2aa8a8; }
.faq-search-count { font-size:.85rem; color:#6c757d; margin-top:.5rem; }

/* sidebar TOC */
.faq-sidebar { position: sticky; top: 100px; }
.faq-sidebar .sidebar-title {
  font-size: .75rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: .08em;
  color: #6c757d;
  margin-bottom: .75rem;
}
.faq-toc-link {
  display: flex;
  align-items: center;
  gap: .6rem;
  padding: .5rem .8rem;
  border-radius: 10px;
  font-size: .88rem;
  color: #1a2e45;
  text-decoration: none;
  transition: background .15s, color .15s;
  margin-bottom: .15rem;
  line-height: 1.3;
}
.faq-toc-link:hover, .faq-toc-link.active { background: rgba(42,168,168,.1); color: #1d8a8a; }
.faq-toc-icon { font-size: 1rem; flex-shrink: 0; }
.faq-toc-count {
  margin-left: auto;
  background: rgba(42,168,168,.12);
  color: #1d8a8a;
  font-size: .72rem;
  font-weight: 700;
  padding: .15rem .45rem;
  border-radius: 20px;
  flex-shrink: 0;
}

/* category blocks */
.faq-category { margin-bottom: 2.5rem; scroll-margin-top: 120px; }
.faq-category-header {
  display: flex;
  align-items: center;
  gap: .75rem;
  margin-bottom: 1rem;
  padding-bottom: .6rem;
  border-bottom: 2px solid rgba(42,168,168,.2);
}
.faq-category-icon {
  width: 40px; height: 40px;
  background:#228b8b;
  border-radius: 12px;
  display: flex; align-items: center; justify-content: center;
  font-size: 1.1rem;
  flex-shrink: 0;
}
.faq-category-title {
  font-family: "Josefin Sans", sans-serif;
  font-size: 1.2rem;
  font-weight: 700;
  color: #1a2e45;
  margin: 0;
}

/* accordion customization */
.faq-accordion .accordion-item {
  border: 1px solid rgba(42,168,168,.2);
  border-radius: 12px !important;
  margin-bottom: .5rem;
  overflow: hidden;
  box-shadow: 0 1px 4px rgba(42,168,168,.06);
}
.faq-accordion .accordion-button {
  font-weight: 600;
  font-size: .97rem;
  color: #1a2e45;
  background: #fff;
  padding: 1rem 1.2rem;
  gap: .75rem;
  box-shadow: none !important;
  border-radius: 0 !important;
}
.faq-accordion .accordion-button:not(.collapsed) {
  color: #1d8a8a;
  background: rgba(42,168,168,.06);
}
.faq-accordion .accordion-button::after {
  filter: none;
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 24 24' fill='none' stroke='%232aa8a8' stroke-width='2.5' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline points='6 9 12 15 18 9'/%3E%3C/svg%3E");
  transition: transform .2s;
}
.faq-accordion .accordion-body {
  font-size: .97rem;
  line-height: 1.8;
  color: #374151;
  padding: .75rem 1.2rem 1.2rem;
  background: #fafeff;
}
.faq-accordion .accordion-body ul,
.faq-accordion .accordion-body ol {
  margin-top: .5rem;
  padding-left: 1.4rem;
}
.faq-accordion .accordion-body li { margin-bottom: .35rem; }

/* question number badge */
.faq-q-num {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  width: 24px; height: 24px;
  border-radius: 50%;
  background: #228b8b;
  color: #fff;
  font-size: .72rem;
  font-weight: 700;
  flex-shrink: 0;
}
.accordion-button:not(.collapsed) .faq-q-num {
  background: linear-gradient(135deg, #977828 0%, #228b8b 100%);
}

/* hidden by search */
.faq-item-hidden { display: none !important; }
.faq-category-hidden { display: none !important; }
.faq-no-results {
  text-align: center; padding: 2.5rem 1rem; color: #6c757d;
  font-size: 1.05rem; display: none;
}
</style>
@endpush

@section('content')
    @include('layouts.menu')

    {{-- ── HERO ── --}}
    <div class="preguntas">
        <div class="container h-100 d-flex align-items-center">
            <div class="row w-100">
                <div class="col-lg-12 text-center">
                    <h1 class="h1-destinos">Preguntas Frecuentes para Viajar a Perú</h1>
                    <p>Todo lo que necesitas saber antes de viajar a Perú en 2026 — visa, clima, seguridad, altitud, moneda y más.
                        Respuestas reales de una agencia local en Cusco.</p>
                </div>
            </div>
        </div>
    </div>

    <section>
        <div class="container" id="pachamama" style="padding-bottom:3rem;">

            {{-- ── HEADING + INTRO ── --}}
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h2 class="h1-index"><beige>Lo que necesitas saber antes de viajar a Perú</beige></h2>
                    <p style="font-size:1.05rem;line-height:1.8;color:#374151;max-width:680px;margin:0 auto 0;">
                        18 preguntas actualizadas a 2026 con normativa oficial, tarifas vigentes y recomendaciones de nuestros guías en Cusco.
                        ¿No encuentras la tuya? <a href="{{ route('contact') }}" style="color:#2aa8a8;font-weight:600;">Escríbenos por WhatsApp</a>.
                    </p>
                </div>
            </div>

            {{-- ── SEARCH BAR ── --}}
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="faq-search-wrap">
                        <input type="text" id="faqSearch" placeholder="Busca una pregunta… ej: visa, clima, Machu Picchu" autocomplete="off">
                        <div class="faq-search-count" id="faqCount">18 preguntas — elige una categoría o busca directamente</div>
                    </div>
                </div>
            </div>

            {{-- ── MAIN LAYOUT: sidebar + content ── --}}
            <div class="row g-4 mt-1">

                {{-- Sidebar TOC --}}
                <div class="col-lg-3 d-none d-lg-block">
                    <div class="faq-sidebar">
                        <p class="sidebar-title">Categorías</p>
                        <nav id="faqToc">
                            <a href="#cat-requisitos" class="faq-toc-link">
                                <span class="faq-toc-icon">🌍</span> Visa y requisitos
                                <span class="faq-toc-count">3</span>
                            </a>
                            <a href="#cat-salud" class="faq-toc-link">
                                <span class="faq-toc-icon">🛡️</span> Seguridad y salud
                                <span class="faq-toc-count">4</span>
                            </a>
                            <a href="#cat-transporte" class="faq-toc-link">
                                <span class="faq-toc-icon">🚂</span> Transporte
                                <span class="faq-toc-count">2</span>
                            </a>
                            <a href="#cat-dinero" class="faq-toc-link">
                                <span class="faq-toc-icon">💰</span> Dinero y presupuesto
                                <span class="faq-toc-count">4</span>
                            </a>
                            <a href="#cat-equipaje" class="faq-toc-link">
                                <span class="faq-toc-icon">🎒</span> Qué llevar
                                <span class="faq-toc-count">1</span>
                            </a>
                            <a href="#cat-cultura" class="faq-toc-link">
                                <span class="faq-toc-icon">🍽️</span> Cultura y experiencias
                                <span class="faq-toc-count">4</span>
                            </a>
                        </nav>
                    </div>
                </div>

                {{-- FAQ Content --}}
                <div class="col-lg-9">

                    {{-- Mobile category pills --}}
                    <div class="d-flex flex-wrap gap-2 mb-4 d-lg-none">
                        <a href="#cat-requisitos" class="btn btn-sm" style="background:rgba(42,168,168,.12);color:#1d8a8a;border-radius:50px;font-size:.82rem;">🌍 Visa</a>
                        <a href="#cat-salud" class="btn btn-sm" style="background:rgba(42,168,168,.12);color:#1d8a8a;border-radius:50px;font-size:.82rem;">🛡️ Salud</a>
                        <a href="#cat-transporte" class="btn btn-sm" style="background:rgba(42,168,168,.12);color:#1d8a8a;border-radius:50px;font-size:.82rem;">🚂 Transporte</a>
                        <a href="#cat-dinero" class="btn btn-sm" style="background:rgba(42,168,168,.12);color:#1d8a8a;border-radius:50px;font-size:.82rem;">💰 Dinero</a>
                        <a href="#cat-equipaje" class="btn btn-sm" style="background:rgba(42,168,168,.12);color:#1d8a8a;border-radius:50px;font-size:.82rem;">🎒 Equipaje</a>
                        <a href="#cat-cultura" class="btn btn-sm" style="background:rgba(42,168,168,.12);color:#1d8a8a;border-radius:50px;font-size:.82rem;">🍽️ Cultura</a>
                    </div>

                    <div id="faqNoResults" class="faq-no-results">
                        No encontramos ninguna pregunta con ese término. ¿Tienes una duda específica?
                        <br><a href="{{ route('contact') }}" style="color:#2aa8a8;font-weight:600;">Consúltanos por WhatsApp</a>
                    </div>

                    {{-- ══ CATEGORÍA 1: Visa y requisitos ══ --}}
                    <div class="faq-category" id="cat-requisitos">
                        <div class="faq-category-header">
                            <div class="faq-category-icon">🌍</div>
                            <h2 class="faq-category-title">Visa y requisitos de entrada</h2>
                        </div>
                        <div class="accordion faq-accordion" id="acc-requisitos">

                            <div class="accordion-item faq-item" data-text="necesito visa viajar perú 2026 pasaporte migraciones">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#r1">
                                        <span class="faq-q-num">1</span>
                                        ¿Necesito visa para viajar a Perú en 2026?
                                    </button>
                                </h3>
                                <div id="r1" class="accordion-collapse collapse" data-bs-parent="#acc-requisitos">
                                    <div class="accordion-body">
                                        <strong>La mayoría de viajeros no necesita visa.</strong> Si eres ciudadano de América, la Unión Europea,
                                        Reino Unido, Australia, Nueva Zelanda o Japón, solo necesitas <strong>pasaporte con vigencia mínima de 6 meses</strong>
                                        y billete de salida. Se otorga una estancia turística de hasta <strong>183 días</strong>, documentada
                                        en la TAM digital (Tarjeta Andina de Migración) que se emite al ingresar. Si tu nacionalidad no está en
                                        esos bloques, consulta la lista oficial en <em>migraciones.gob.pe</em>.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item faq-item" data-text="cuántos días visitar perú 7 10 14 21 lima cusco machu picchu titicaca arequipa">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#r2">
                                        <span class="faq-q-num">2</span>
                                        ¿Cuántos días se recomienda para visitar Perú?
                                    </button>
                                </h3>
                                <div id="r2" class="accordion-collapse collapse" data-bs-parent="#acc-requisitos">
                                    <div class="accordion-body">
                                        Depende de qué quieras ver:
                                        <ul>
                                            <li><strong>7 días</strong> — mínimo viable para Lima, Cusco y Machu Picchu.</li>
                                            <li><strong>10 a 14 días</strong> — lo ideal: sumas Valle Sagrado, Rainbow Mountain y Lago Titicaca.</li>
                                            <li><strong>18 a 21 días</strong> — para incluir Arequipa, Cañón del Colca, Nazca o Amazonía.</li>
                                        </ul>
                                        En menos de 5 días solo alcanza para Cusco y Machu Picchu a ritmo muy exigente — no lo recomendamos.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item faq-item" data-text="hablar español idioma viajar perú quechua guías bilingüe inglés francés alemán">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#r3">
                                        <span class="faq-q-num">3</span>
                                        ¿Es necesario hablar español para viajar por Perú?
                                    </button>
                                </h3>
                                <div id="r3" class="accordion-collapse collapse" data-bs-parent="#acc-requisitos">
                                    <div class="accordion-body">
                                        <strong>No es indispensable si viajas con agencia.</strong> En Perú el idioma oficial es el español y lo habla
                                        el 82% de la población. En Cusco y el sur también se habla <strong>quechua</strong> ampliamente. Si viajas
                                        por tu cuenta fuera de zonas turísticas, un nivel básico ayuda. Con una agencia como Pacha Mama Spirit
                                        tendrás <strong>guías bilingües</strong> en inglés, francés, alemán, italiano y chino.
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    {{-- ══ CATEGORÍA 2: Seguridad y salud ══ --}}
                    <div class="faq-category" id="cat-salud">
                        <div class="faq-category-header">
                            <div class="faq-category-icon">🛡️</div>
                            <h2 class="faq-category-title">Seguridad y salud</h2>
                        </div>
                        <div class="accordion faq-accordion" id="acc-salud">

                            <div class="accordion-item faq-item" data-text="seguro seguridad perú 2026 taxis uber poltur robo peligros">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#s1">
                                        <span class="faq-q-num">4</span>
                                        ¿Qué tan seguro es viajar a Perú en 2026?
                                    </button>
                                </h3>
                                <div id="s1" class="accordion-collapse collapse" data-bs-parent="#acc-salud">
                                    <div class="accordion-body">
                                        Perú es seguro en sus <strong>zonas turísticas</strong>: Cusco, Valle Sagrado, Machu Picchu, Arequipa,
                                        Puno, Trujillo y el centro de Lima. Precauciones básicas:
                                        <ul>
                                            <li>Usa taxis por aplicación — en Lima: Uber, Cabify o InDrive (evita taxis de la calle).</li>
                                            <li>No exhibas objetos de valor en espacios públicos.</li>
                                            <li>Mantén copia digital del pasaporte en la nube.</li>
                                            <li>En Cusco funciona la <strong>POLTUR</strong> (Policía de Turismo) 24/7.</li>
                                            <li>Teléfono de emergencias: <strong>105</strong>.</li>
                                        </ul>
                                        Viajar con agencia reduce el riesgo a prácticamente cero.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item faq-item" data-text="soroche mal altura aclimatación cusco coca mate oxígeno vómitos cefalea">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#s2">
                                        <span class="faq-q-num">5</span>
                                        ¿Cómo evitar el mal de altura (soroche) en Cusco?
                                    </button>
                                </h3>
                                <div id="s2" class="accordion-collapse collapse" data-bs-parent="#acc-salud">
                                    <div class="accordion-body">
                                        Cusco está a <strong>3.399 metros</strong>. Para evitar el soroche:
                                        <ul>
                                            <li><strong>Aclimátate 2 días mínimo</strong> antes de cualquier actividad exigente.</li>
                                            <li>Bebe mucha agua e infusiones (mate de coca, remedio local tradicional).</li>
                                            <li>Evita alcohol las primeras 48 horas.</li>
                                            <li>Come ligero, evita comidas grasas.</li>
                                            <li>Descansa bien la primera noche — no planees trekking en día uno.</li>
                                        </ul>
                                        Las hojas de coca son legales, ancestrales y efectivas. Si los síntomas son severos (vómitos, cefalea intensa,
                                        desorientación), acude a un centro médico — en Cusco hay servicio de oxígeno 24/7 y clínicas bien equipadas.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item faq-item" data-text="vacunas fiebre amarilla selva tetanos hepatitis a b médico viaje iquitos">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#s3">
                                        <span class="faq-q-num">6</span>
                                        ¿Necesito vacunas para viajar a Perú?
                                    </button>
                                </h3>
                                <div id="s3" class="accordion-collapse collapse" data-bs-parent="#acc-salud">
                                    <div class="accordion-body">
                                        <strong>Ninguna vacuna es obligatoria</strong> para entrar a Perú. Se recomienda la vacuna de
                                        <strong>fiebre amarilla</strong> si planeas visitar la selva amazónica (Iquitos, Puerto Maldonado, Manu).
                                        Para Cusco, Machu Picchu y la costa no es necesaria. Ten al día tétanos, hepatitis A y B.
                                        Consulta con un médico de viaje entre 4 y 6 semanas antes de partir.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item faq-item" data-text="agua grifo potable beber cusco lifestraw grayl botella desechable machu picchu 2019">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#s4">
                                        <span class="faq-q-num">7</span>
                                        ¿Puedo tomar agua del grifo en Perú?
                                    </button>
                                </h3>
                                <div id="s4" class="accordion-collapse collapse" data-bs-parent="#acc-salud">
                                    <div class="accordion-body">
                                        <strong>No.</strong> El agua del grifo no es potable en la mayor parte del país, incluidos Cusco y Lima.
                                        Bebe siempre agua embotellada o filtrada. En lodges y hoteles turísticos te ofrecen agua filtrada gratis.
                                        Lleva una <strong>botella reutilizable con filtro</strong> (LifeStraw, Grayl) — en Machu Picchu las
                                        botellas desechables están prohibidas desde 2019.
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    {{-- ══ CATEGORÍA 3: Transporte ══ --}}
                    <div class="faq-category" id="cat-transporte">
                        <div class="faq-category-header">
                            <div class="faq-category-icon">🚂</div>
                            <h2 class="faq-category-title">Transporte y logística</h2>
                        </div>
                        <div class="accordion faq-accordion" id="acc-transporte">

                            <div class="accordion-item faq-item" data-text="mejor época visitar machu picchu temporada seca lluvia camino inca febrero mayo setiembre">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#t1">
                                        <span class="faq-q-num">8</span>
                                        ¿Cuál es la mejor época para visitar Machu Picchu?
                                    </button>
                                </h3>
                                <div id="t1" class="accordion-collapse collapse" data-bs-parent="#acc-transporte">
                                    <div class="accordion-body">
                                        <strong>Mayo a setiembre</strong> es temporada seca con cielos despejados — ideal para trekking pero con muchos turistas.
                                        <strong>Abril y octubre</strong> ofrecen la mejor combinación entre buen clima, menos multitudes y precios razonables.
                                        En <strong>febrero cierra el Camino Inca Clásico</strong> por mantenimiento — Machu Picchu y rutas alternativas
                                        (Salkantay, Lares) siguen abiertas.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item faq-item" data-text="llegar machu picchu cusco tren ollantaytambo camino inca salkantay hidroeléctrica perurail incarail">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#t2">
                                        <span class="faq-q-num">9</span>
                                        ¿Cómo llegar a Machu Picchu desde Cusco?
                                    </button>
                                </h3>
                                <div id="t2" class="accordion-collapse collapse" data-bs-parent="#acc-transporte">
                                    <div class="accordion-body">
                                        Cuatro rutas principales:
                                        <ol>
                                            <li><strong>Tren turístico</strong> desde Ollantaytambo — la más cómoda, 4 horas totales.</li>
                                            <li><strong>Camino Inca Clásico</strong> — 4 días a pie, requiere permiso con 6 meses de anticipación.</li>
                                            <li><strong>Salkantay Trek</strong> — 5 días, sin permiso especial, más económico.</li>
                                            <li><strong>Ruta Hidroeléctrica</strong> — van + caminata, 6 horas, la más económica.</li>
                                        </ol>
                                        Para el 95% de viajeros recomendamos la <strong>opción 1</strong> por confort y tiempo.
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    {{-- ══ CATEGORÍA 4: Dinero y presupuesto ══ --}}
                    <div class="faq-category" id="cat-dinero">
                        <div class="faq-category-header">
                            <div class="faq-category-icon">💰</div>
                            <h2 class="faq-category-title">Dinero y presupuesto</h2>
                        </div>
                        <div class="accordion faq-accordion" id="acc-dinero">

                            <div class="accordion-item faq-item" data-text="moneda sol peruano pen dólar euro cambio mochilero presupuesto diario">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#d1">
                                        <span class="faq-q-num">10</span>
                                        ¿Cuál es la moneda de Perú y cuánto dinero llevar?
                                    </button>
                                </h3>
                                <div id="d1" class="accordion-collapse collapse" data-bs-parent="#acc-dinero">
                                    <div class="accordion-body">
                                        La moneda oficial es el <strong>Sol peruano (PEN)</strong>. Tipo de cambio referencial 2026:
                                        1 USD ≈ 3,75 soles; 1 EUR ≈ 4,10 soles.
                                        <br><br>Presupuesto diario:
                                        <ul>
                                            <li><strong>Mochilero:</strong> 40–60 USD (hostal, transporte público, comida en mercados).</li>
                                            <li><strong>Rango medio:</strong> 80–120 USD (hotel 3★, restaurantes, un tour al día).</li>
                                            <li><strong>Gama alta:</strong> 200+ USD (hotel boutique, tours privados, alta cocina).</li>
                                        </ul>
                                        Los dólares se aceptan en hoteles grandes, restaurantes turísticos y agencias. Para el día a día usa soles.
                                        Cambia dinero solo en <strong>casas de cambio oficiales</strong>, nunca en la calle.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item faq-item" data-text="cuesta viaje perú 10 días presupuesto referencial 2026 lima cusco machu picchu">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#d2">
                                        <span class="faq-q-num">11</span>
                                        ¿Cuánto cuesta un viaje a Perú por 10 días?
                                    </button>
                                </h3>
                                <div id="d2" class="accordion-collapse collapse" data-bs-parent="#acc-dinero">
                                    <div class="accordion-body">
                                        Presupuesto referencial 2026 para 10 días cubriendo Lima, Cusco, Valle Sagrado y Machu Picchu:
                                        <ul>
                                            <li><strong>Mochilero:</strong> 700–900 USD</li>
                                            <li><strong>Rango medio:</strong> 1.500–2.000 USD</li>
                                            <li><strong>Gama alta:</strong> 3.500–5.000 USD</li>
                                        </ul>
                                        Vuelos internacionales aparte. Los tours todo incluido con agencia local suelen ofrecer mejor relación
                                        precio-valor que armarlo por cuenta propia desde el extranjero.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item faq-item" data-text="pagar tarjeta visa mastercard american express yape plin efectivo soles mercados">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#d3">
                                        <span class="faq-q-num">12</span>
                                        ¿Se puede pagar con tarjeta en Perú?
                                    </button>
                                </h3>
                                <div id="d3" class="accordion-collapse collapse" data-bs-parent="#acc-dinero">
                                    <div class="accordion-body">
                                        Sí en hoteles, restaurantes turísticos, supermercados y agencias. <strong>Visa y MasterCard</strong>
                                        son las más aceptadas; American Express tiene cobertura limitada. En mercados, transporte local, taxis
                                        y pueblos pequeños usa efectivo o las apps locales <strong>Yape</strong> y <strong>Plin</strong>
                                        (requieren número peruano). Siempre lleva algo de efectivo en soles.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item faq-item" data-text="caro perú hostal hotel precio comida mercado restaurante tren boleto ciudadela">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#d4">
                                        <span class="faq-q-num">13</span>
                                        ¿Es caro viajar a Perú?
                                    </button>
                                </h3>
                                <div id="d4" class="accordion-collapse collapse" data-bs-parent="#acc-dinero">
                                    <div class="accordion-body">
                                        <strong>No,</strong> comparado con Europa, Estados Unidos o Australia. Perú ofrece gran variedad: desde
                                        hostales por 10 USD la noche hasta lodges de lujo sobre los 500 USD. Comida en un mercado local: 3–5 USD;
                                        restaurante medio: 10–15 USD; alta cocina: 40–80 USD. Transporte y tours locales son accesibles.
                                        <br><br>Lo más caro suelen ser los boletos de tren a Machu Picchu y la entrada a la ciudadela.
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    {{-- ══ CATEGORÍA 5: Qué llevar ══ --}}
                    <div class="faq-category" id="cat-equipaje">
                        <div class="faq-category-header">
                            <div class="faq-category-icon">🎒</div>
                            <h2 class="faq-category-title">Qué llevar</h2>
                        </div>
                        <div class="accordion faq-accordion" id="acc-equipaje">

                            <div class="accordion-item faq-item" data-text="ropa llevar perú capas cusco trekking polar impermeable gorro botas selva verano">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#e1">
                                        <span class="faq-q-num">14</span>
                                        ¿Qué ropa debo llevar a Perú?
                                    </button>
                                </h3>
                                <div id="e1" class="accordion-collapse collapse" data-bs-parent="#acc-equipaje">
                                    <div class="accordion-body">
                                        <strong>Viste por capas</strong>. En Cusco puedes tener sol intenso de día y temperaturas bajo cero de noche.
                                        Esenciales: camisetas térmicas, polar o fleece, casaca impermeable, pantalón de trekking (evita jeans),
                                        gorro de sol y de lana, buff, guantes ligeros, botas de trekking <em>ya usadas</em> (no estrenes)
                                        y zapatillas cómodas.
                                        <br><br>Si vas a la selva, suma ropa ligera transpirable y repelente fuerte. Si vas a la costa, ropa de verano.
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    {{-- ══ CATEGORÍA 6: Cultura y experiencias ══ --}}
                    <div class="faq-category" id="cat-cultura">
                        <div class="faq-category-header">
                            <div class="faq-category-icon">🍽️</div>
                            <h2 class="faq-category-title">Cultura y experiencias</h2>
                        </div>
                        <div class="accordion faq-accordion" id="acc-cultura">

                            <div class="accordion-item faq-item" data-text="machu picchu sin agencia boleto tuboleto perurail incarail guía certificado camino inca">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c1">
                                        <span class="faq-q-num">15</span>
                                        ¿Se puede ir a Machu Picchu sin agencia?
                                    </button>
                                </h3>
                                <div id="c1" class="accordion-collapse collapse" data-bs-parent="#acc-cultura">
                                    <div class="accordion-body">
                                        <strong>Sí, pero con limitaciones.</strong> Puedes comprar tu boleto en <em>tuboleto.cultura.pe</em>
                                        y pasajes de tren en <em>perurail.com</em> o <em>incarail.com</em>. Desde 2024 todas las entradas
                                        exigen <strong>guía certificado dentro de la ciudadela</strong>. Para el <strong>Camino Inca es
                                        obligatorio</strong> ir con agencia autorizada. Para el resto, puedes ir por cuenta propia si
                                        hablas español y tienes experiencia viajera.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item faq-item" data-text="comida peruana probar ceviche lomo saltado ají gallina causa anticuchos cuy chicha pisco gastronomía">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c2">
                                        <span class="faq-q-num">16</span>
                                        ¿Qué comida peruana debo probar?
                                    </button>
                                </h3>
                                <div id="c2" class="accordion-collapse collapse" data-bs-parent="#acc-cultura">
                                    <div class="accordion-body">
                                        Imprescindibles:
                                        <ul>
                                            <li><strong>Ceviche</strong> — pescado fresco marinado en limón. Patrimonio Cultural de la Nación.</li>
                                            <li><strong>Lomo saltado</strong> — carne al wok con influencia china (chifa).</li>
                                            <li><strong>Ají de gallina</strong> — crema de ají con pollo deshilachado.</li>
                                            <li><strong>Causa limeña</strong> — papa amarilla prensada con relleno.</li>
                                            <li><strong>Anticuchos</strong> — brochetas de corazón de res a la parrilla.</li>
                                            <li><strong>Cuy al horno</strong> — plato andino tradicional (si te animas).</li>
                                            <li><strong>Papas nativas</strong> — Perú tiene más de 3.800 variedades.</li>
                                            <li><strong>Chicha morada</strong> — bebida de maíz morado.</li>
                                            <li><strong>Pisco sour</strong> — cóctel nacional.</li>
                                        </ul>
                                        En Cusco prueba también el <em>chiri uchu</em> en junio. La gastronomía peruana es reconocida entre las 3 mejores del mundo.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item faq-item" data-text="pago tierra despacho andino pachamama paqo ofrenda agosto cosmovisión ceremonia">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c3">
                                        <span class="faq-q-num">17</span>
                                        ¿Qué es el pago a la tierra o despacho andino?
                                    </button>
                                </h3>
                                <div id="c3" class="accordion-collapse collapse" data-bs-parent="#acc-cultura">
                                    <div class="accordion-body">
                                        Es la ceremonia más importante de la <strong>cosmovisión andina</strong>. Un maestro o <em>paqo</em>
                                        prepara una ofrenda a la Pachamama (Madre Tierra) con hojas de coca, semillas, lanas, dulces y elementos
                                        simbólicos — cada uno representa una petición o agradecimiento.
                                        <br><br>
                                        Se realiza en <strong>agosto</strong> (mes sagrado de la Pachamama), antes de un viaje importante, o en
                                        agradecimiento después de una sanación. En Pacha Mama Spirit incluimos despachos auténticos guiados por
                                        paqos de comunidad — no performances turísticas.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item faq-item" data-text="viajar perú niños familia altitud aclimatación machu picchu camino inca seguro pediátrico">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#c4">
                                        <span class="faq-q-num">18</span>
                                        ¿Puedo viajar a Perú con niños?
                                    </button>
                                </h3>
                                <div id="c4" class="accordion-collapse collapse" data-bs-parent="#acc-cultura">
                                    <div class="accordion-body">
                                        Sí, Perú es un destino familiar muy amigable. Recomendaciones:
                                        <ul>
                                            <li>Evita altitudes mayores a 3.500m con menores de 3 años.</li>
                                            <li>Aclimatación gradual: Lima → Valle Sagrado (2.800m) → Cusco (3.399m).</li>
                                            <li>Itinerarios con más tiempo y menos ritmo.</li>
                                            <li>Seguro de viaje con cobertura pediátrica.</li>
                                        </ul>
                                        Machu Picchu es apto para toda la familia — muchos viajeros llevan hijos desde los 6 años.
                                        El Camino Inca generalmente se recomienda <strong>desde los 10 años</strong>.
                                        Diseñamos tours familiares con actividades adaptadas.
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    {{-- CTA final --}}
                    <div style="background:linear-gradient(135deg, #228b8b 0%, #977828 100%);color:#fff;border-radius:18px;padding:2.5rem;text-align:center;margin:2rem 0 1rem;box-shadow:0 10px 30px rgba(34,139,139,.25);">
                        <h3 style="color:#fff;margin-bottom:1rem;text-shadow:0 1px 4px rgba(0,0,0,.25);">¿No encuentras tu pregunta?</h3>
                        <p style="font-size:1.1rem;margin-bottom:1.5rem;color:rgba(255,255,255,.93);text-shadow:0 1px 3px rgba(0,0,0,.2);">
                            Nuestro equipo en Cusco responde por WhatsApp en menos de una hora.
                            Te ayudamos a planificar tu viaje sin compromiso.
                        </p>
                        <a href="{{ route('contact') }}" style="display:inline-block;background:#fff;color:#228b8b;padding:.9rem 2.2rem;border-radius:50px;text-decoration:none;font-weight:700;box-shadow:0 4px 14px rgba(0,0,0,.15);">
                            Pregúntanos ahora
                        </a>
                    </div>

                </div>{{-- /col-lg-9 --}}
            </div>{{-- /row --}}

            <div class="space"></div>
        </div>
    </section>

@push('scripts')
<script>
(function () {
    const input   = document.getElementById('faqSearch');
    const count   = document.getElementById('faqCount');
    const noRes   = document.getElementById('faqNoResults');
    const items   = document.querySelectorAll('.faq-item');
    const cats    = document.querySelectorAll('.faq-category');
    const total   = items.length;

    function normalize(str) {
        return str.toLowerCase()
            .normalize('NFD').replace(/[\u0300-\u036f]/g, '');
    }

    input.addEventListener('input', function () {
        const q = normalize(this.value.trim());

        if (!q) {
            items.forEach(i => i.classList.remove('faq-item-hidden'));
            cats.forEach(c => c.classList.remove('faq-category-hidden'));
            noRes.style.display = 'none';
            count.textContent = total + ' preguntas — elige una categoría o busca directamente';
            return;
        }

        let visible = 0;
        items.forEach(item => {
            const text = normalize(item.getAttribute('data-text') + ' ' + item.querySelector('.accordion-button').textContent);
            if (text.includes(q)) {
                item.classList.remove('faq-item-hidden');
                // auto-expand matched item
                const btn = item.querySelector('.accordion-button');
                const pane = item.querySelector('.accordion-collapse');
                btn.classList.remove('collapsed');
                pane.classList.add('show');
                visible++;
            } else {
                item.classList.add('faq-item-hidden');
                const btn = item.querySelector('.accordion-button');
                const pane = item.querySelector('.accordion-collapse');
                btn.classList.add('collapsed');
                pane.classList.remove('show');
            }
        });

        cats.forEach(cat => {
            const hasVisible = cat.querySelectorAll('.faq-item:not(.faq-item-hidden)').length > 0;
            cat.classList.toggle('faq-category-hidden', !hasVisible);
        });

        if (visible === 0) {
            noRes.style.display = 'block';
            count.textContent = 'Sin resultados para "' + this.value.trim() + '"';
        } else {
            noRes.style.display = 'none';
            count.textContent = visible + ' ' + (visible === 1 ? 'pregunta encontrada' : 'preguntas encontradas');
        }
    });

    // Sidebar active link on scroll
    const tocLinks = document.querySelectorAll('.faq-toc-link');
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const id = entry.target.id;
                tocLinks.forEach(l => {
                    l.classList.toggle('active', l.getAttribute('href') === '#' + id);
                });
            }
        });
    }, { rootMargin: '-30% 0px -60% 0px' });

    cats.forEach(c => observer.observe(c));
})();
</script>
@endpush

@endsection
