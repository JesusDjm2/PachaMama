@extends('layouts.appen')
@php $titulo="Frequently Asked Questions — Travel to Peru 2026 | Pacha Mama Spirit" @endphp
@php $descripcion="18 updated FAQs for traveling to Peru in 2026: visa, safety, Machu Picchu, altitude, currency, weather and local tips from a Cusco agency." @endphp
@php $keywords="frequently asked questions Peru, FAQ travel Peru, how to travel to Peru 2026, Peru safety, Peru visa, Peru currency, Machu Picchu weather, altitude sickness Cusco, what to pack Peru" @endphp
@php $img="https://pachamamaspirit.com/img/panoramico/trekking-peru.webp" @endphp
@section('titulo', $titulo)
@push('page_metas')
<meta name="description" content="{{ $descripcion }}">
<meta name="keywords" content="{{ $keywords }}">
<link rel="canonical" href="{{ request()->url() }}">
<meta property="og:title" content="{{ $titulo }}">
<meta property="og:description" content="{{ $descripcion }}">
<meta property="og:image" content="{{ $img }}">
<meta property="og:locale" content="en_US">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $titulo }}">
<meta name="twitter:description" content="{{ $descripcion }}">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {"@type":"Question","name":"Do I need a visa to travel to Peru in 2026?","acceptedAnswer":{"@type":"Answer","text":"Most travelers from the Americas, the European Union, UK, Australia, New Zealand and Japan do not need a visa for tourist stays of up to 183 days. You only need a valid passport (minimum 6 months validity) and an outbound ticket. Upon arrival a digital TAM (Andean Migration Card) is issued. Check the official list at migraciones.gob.pe if your nationality is not in those groups."}},
    {"@type":"Question","name":"How many days should I spend in Peru?","acceptedAnswer":{"@type":"Answer","text":"A minimum viable trip is 7 days for Lima, Cusco and Machu Picchu. Ideally 10–14 days to add Sacred Valley, Rainbow Mountain and Lake Titicaca. For Arequipa, Colca Canyon or the Amazon, plan 18–21 days. In fewer than 5 days you can only cover Cusco and Machu Picchu at a very intense pace."}},
    {"@type":"Question","name":"Do I need to speak Spanish to travel in Peru?","acceptedAnswer":{"@type":"Answer","text":"Not essential if you travel with an agency. Spanish is the official language (spoken by 82% of the population) and Quechua is widely spoken in Cusco. If you travel independently outside tourist areas, basic Spanish helps. With a Pacha Mama Spirit guide you will have bilingual guides in English, French, German, Italian and Chinese."}},
    {"@type":"Question","name":"How safe is Peru in 2026?","acceptedAnswer":{"@type":"Answer","text":"Peru is safe in its tourist areas: Cusco, Sacred Valley, Machu Picchu, Arequipa, Puno and central Lima. Basic precautions: use app-based taxis (Uber, Cabify, InDrive), do not display valuables, keep a digital copy of your passport. Cusco has a dedicated Tourist Police (POLTUR). Traveling with an agency reduces risk to virtually zero."}},
    {"@type":"Question","name":"What is the best time to visit Machu Picchu?","acceptedAnswer":{"@type":"Answer","text":"May to September is the dry season with clear skies — ideal for trekking but crowded. April and October offer the best balance of good weather, fewer tourists and reasonable prices. February is when the Classic Inca Trail closes for maintenance, but Machu Picchu and alternative routes (Salkantay, Lares) remain open."}},
    {"@type":"Question","name":"How do I prevent altitude sickness in Cusco?","acceptedAnswer":{"@type":"Answer","text":"Cusco sits at 3,399 metres. To avoid soroche: acclimatize for at least 2 days before strenuous activity, drink plenty of water, avoid alcohol for the first 48 hours, eat lightly, drink coca-leaf tea or chew coca leaves (legal and effective), and rest well on your first night. If symptoms are severe, see a doctor — Cusco has 24/7 oxygen services and well-equipped clinics."}},
    {"@type":"Question","name":"What is the currency of Peru and how much money should I bring?","acceptedAnswer":{"@type":"Answer","text":"The official currency is the Peruvian Sol (PEN). 2026 exchange rate reference: 1 USD ≈ 3.75 soles; 1 EUR ≈ 4.10 soles. Daily budget: backpacker 40–60 USD, mid-range 80–120 USD, luxury 200+ USD. US dollars are accepted at large hotels and agencies. For everyday use, use soles. Change money at official exchange houses only, never on the street. Visa and MasterCard are widely accepted."}},
    {"@type":"Question","name":"Do I need vaccinations to travel to Peru?","acceptedAnswer":{"@type":"Answer","text":"No vaccination is mandatory to enter Peru. Yellow fever is recommended if you plan to visit the Amazon jungle (Iquitos, Puerto Maldonado, Manu). For Cusco, Machu Picchu and the coast it is not necessary. Keep tetanus, hepatitis A and B up to date. Consult a travel doctor 4–6 weeks before departure."}},
    {"@type":"Question","name":"Can I drink tap water in Peru?","acceptedAnswer":{"@type":"Answer","text":"No. Tap water is not drinkable in most of the country, including Cusco and Lima. Always drink bottled or filtered water. Tourist lodges and hotels offer free filtered water. Bring a reusable filter bottle (LifeStraw, Grayl) — Machu Picchu has banned disposable plastic bottles since 2019."}},
    {"@type":"Question","name":"How do I get to Machu Picchu from Cusco?","acceptedAnswer":{"@type":"Answer","text":"Four main routes: 1) Tourist train from Ollantaytambo — most comfortable, 4 hours total; 2) Classic Inca Trail — 4 days hiking, permit required 6 months in advance; 3) Salkantay Trek — 5 days, no special permit, more affordable; 4) Hydroelectric route — van plus hike, 6 hours, cheapest option. For 95% of travelers we recommend option 1 for comfort and time efficiency."}},
    {"@type":"Question","name":"How much does a 10-day trip to Peru cost?","acceptedAnswer":{"@type":"Answer","text":"2026 reference budget for 10 days covering Lima, Cusco, Sacred Valley and Machu Picchu: backpacker 700–900 USD, mid-range 1,500–2,000 USD, luxury 3,500–5,000 USD. International flights not included. All-inclusive tours with a local agency usually offer better value for money than booking everything independently from abroad."}},
    {"@type":"Question","name":"What clothes should I pack for Peru?","acceptedAnswer":{"@type":"Answer","text":"Dress in layers. In Cusco you can have intense sun during the day and near-freezing temperatures at night. Essentials: thermal shirts, fleece or mid-layer, waterproof jacket, trekking trousers (avoid jeans), sun hat and wool hat, buff, light gloves, already-broken-in hiking boots and comfortable trainers. For the jungle, add lightweight breathable clothing and strong insect repellent. For the coast, summer clothes."}},
    {"@type":"Question","name":"Can I pay by card in Peru?","acceptedAnswer":{"@type":"Answer","text":"Yes at hotels, tourist restaurants, supermarkets and agencies. Visa and MasterCard are most widely accepted; American Express has limited coverage. At markets, local transport, taxis and small towns use cash or the local mobile apps Yape and Plin (require a Peruvian phone number). Always carry some cash in soles."}},
    {"@type":"Question","name":"Is Peru expensive to travel?","acceptedAnswer":{"@type":"Answer","text":"No, compared to Europe, the United States or Australia. Peru offers great variety: from hostels at 10 USD per night to luxury lodges at over 500 USD. Street food at a market: 3–5 USD; mid-range restaurant: 10–15 USD; fine dining: 40–80 USD. The most expensive items are usually the train tickets to Machu Picchu and the citadel entrance."}},
    {"@type":"Question","name":"Can I visit Machu Picchu without a tour agency?","acceptedAnswer":{"@type":"Answer","text":"Yes, but with limitations. You can buy your ticket at tuboleto.cultura.pe and train tickets at perurail.com or incarail.com. Since 2024 all entries require a certified guide inside the citadel. The Classic Inca Trail requires a licensed agency by law. For other routes, you can go independently if you have travel experience."}},
    {"@type":"Question","name":"What Peruvian food should I try?","acceptedAnswer":{"@type":"Answer","text":"Must-tries: ceviche (lime-marinated fresh fish, a national cultural heritage dish), lomo saltado, ají de gallina, causa limeña, anticuchos, cuy al horno (roasted guinea pig, traditional Andean dish), native potatoes (Peru has over 3,800 varieties), chicha morada and pisco sour. In Cusco try chiri uchu in June. Peruvian cuisine is recognized as one of the world's top three."}},
    {"@type":"Question","name":"What is the pago a la tierra (earth offering) ceremony?","acceptedAnswer":{"@type":"Answer","text":"It is the most important ceremony in the Andean worldview. A master or paqo prepares an offering to Pachamama (Mother Earth) with coca leaves, seeds, wool, sweets and symbolic elements — each representing a petition or gratitude. It is performed in August (the sacred month of Pachamama), before an important journey, or in thanks after a healing. At Pacha Mama Spirit we include authentic ceremonies led by community paqos — not tourist performances."}},
    {"@type":"Question","name":"Can I travel to Peru with children?","acceptedAnswer":{"@type":"Answer","text":"Yes, Peru is a very family-friendly destination. Recommendations: avoid altitudes above 3,500m with children under 3 years old; gradual acclimatization (Lima → Sacred Valley 2,800m → Cusco 3,399m); choose itineraries with more time and less intensity; travel insurance with pediatric coverage. Machu Picchu is suitable for the whole family — many travelers bring children from age 6. The Inca Trail is generally recommended from age 10. We design family tours with adapted activities."}}
  ]
}
</script>

<style>
/* ── FAQ Page Styles (EN) ── */
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
.faq-accordion .accordion-body ol { margin-top: .5rem; padding-left: 1.4rem; }
.faq-accordion .accordion-body li { margin-bottom: .35rem; }

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
                    <h1 class="h1-destinos">Frequently Asked Questions — Travel to Peru</h1>
                    <p>Everything you need to know before traveling to Peru in 2026 — visa, weather, safety, altitude, currency and more.
                        Real answers from a local agency in Cusco.</p>
                </div>
            </div>
        </div>
    </div>

    <section>
        <div class="container" id="pachamama" style="padding-bottom:3rem;">

            {{-- ── HEADING + INTRO ── --}}
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h2 class="h1-index"><beige>What you need to know before traveling to Peru</beige></h2>
                    <p style="font-size:1.05rem;line-height:1.8;color:#374151;max-width:680px;margin:0 auto 0;">
                        18 questions updated for 2026 with official regulations, current prices and field-tested advice from our Cusco guides.
                        Can't find yours? <a href="{{ route('contact') }}" style="color:#2aa8a8;font-weight:600;">WhatsApp us</a> — we reply in under an hour.
                    </p>
                </div>
            </div>

            {{-- ── SEARCH BAR ── --}}
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="faq-search-wrap">
                        <input type="text" id="faqSearch" placeholder="Search a question… e.g. visa, altitude, Machu Picchu" autocomplete="off">
                        <div class="faq-search-count" id="faqCount">18 questions — choose a category or search directly</div>
                    </div>
                </div>
            </div>

            {{-- ── MAIN LAYOUT ── --}}
            <div class="row g-4 mt-1">

                {{-- Sidebar TOC --}}
                <div class="col-lg-3 d-none d-lg-block">
                    <div class="faq-sidebar">
                        <p class="sidebar-title">Categories</p>
                        <nav id="faqToc">
                            <a href="#cat-entry" class="faq-toc-link">
                                <span class="faq-toc-icon">🌍</span> Visa &amp; Entry
                                <span class="faq-toc-count">3</span>
                            </a>
                            <a href="#cat-health" class="faq-toc-link">
                                <span class="faq-toc-icon">🛡️</span> Safety &amp; Health
                                <span class="faq-toc-count">4</span>
                            </a>
                            <a href="#cat-transport" class="faq-toc-link">
                                <span class="faq-toc-icon">🚂</span> Getting Around
                                <span class="faq-toc-count">2</span>
                            </a>
                            <a href="#cat-budget" class="faq-toc-link">
                                <span class="faq-toc-icon">💰</span> Money &amp; Budget
                                <span class="faq-toc-count">4</span>
                            </a>
                            <a href="#cat-packing" class="faq-toc-link">
                                <span class="faq-toc-icon">🎒</span> What to Pack
                                <span class="faq-toc-count">1</span>
                            </a>
                            <a href="#cat-culture" class="faq-toc-link">
                                <span class="faq-toc-icon">🍽️</span> Culture &amp; Experiences
                                <span class="faq-toc-count">4</span>
                            </a>
                        </nav>
                    </div>
                </div>

                {{-- FAQ Content --}}
                <div class="col-lg-9">

                    {{-- Mobile pills --}}
                    <div class="d-flex flex-wrap gap-2 mb-4 d-lg-none">
                        <a href="#cat-entry"     class="btn btn-sm" style="background:rgba(42,168,168,.12);color:#1d8a8a;border-radius:50px;font-size:.82rem;">🌍 Visa</a>
                        <a href="#cat-health"    class="btn btn-sm" style="background:rgba(42,168,168,.12);color:#1d8a8a;border-radius:50px;font-size:.82rem;">🛡️ Health</a>
                        <a href="#cat-transport" class="btn btn-sm" style="background:rgba(42,168,168,.12);color:#1d8a8a;border-radius:50px;font-size:.82rem;">🚂 Transport</a>
                        <a href="#cat-budget"    class="btn btn-sm" style="background:rgba(42,168,168,.12);color:#1d8a8a;border-radius:50px;font-size:.82rem;">💰 Budget</a>
                        <a href="#cat-packing"   class="btn btn-sm" style="background:rgba(42,168,168,.12);color:#1d8a8a;border-radius:50px;font-size:.82rem;">🎒 Packing</a>
                        <a href="#cat-culture"   class="btn btn-sm" style="background:rgba(42,168,168,.12);color:#1d8a8a;border-radius:50px;font-size:.82rem;">🍽️ Culture</a>
                    </div>

                    <div id="faqNoResults" class="faq-no-results">
                        No questions matched your search. Have a specific query?
                        <br><a href="{{ route('contact') }}" style="color:#2aa8a8;font-weight:600;">Ask us on WhatsApp</a>
                    </div>

                    {{-- ══ CATEGORY 1: Visa & Entry ══ --}}
                    <div class="faq-category" id="cat-entry">
                        <div class="faq-category-header">
                            <div class="faq-category-icon">🌍</div>
                            <h2 class="faq-category-title">Visa &amp; Entry Requirements</h2>
                        </div>
                        <div class="accordion faq-accordion" id="acc-entry">

                            <div class="accordion-item faq-item" data-text="visa travel peru 2026 passport migraciones stay 183 days tam">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#e1">
                                        <span class="faq-q-num">1</span>
                                        Do I need a visa to travel to Peru in 2026?
                                    </button>
                                </h3>
                                <div id="e1" class="accordion-collapse collapse" data-bs-parent="#acc-entry">
                                    <div class="accordion-body">
                                        <strong>Most travelers do not need a visa.</strong> If you are a citizen of the Americas, European Union,
                                        UK, Australia, New Zealand or Japan, you only need a <strong>valid passport (minimum 6 months)</strong>
                                        and an outbound ticket. A tourist stay of up to <strong>183 days</strong> is granted and documented in the
                                        digital TAM (Andean Migration Card) issued on arrival. If your nationality is not in those groups,
                                        check the official list at <em>migraciones.gob.pe</em>.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item faq-item" data-text="how many days visit peru 7 10 14 21 lima cusco machu picchu titicaca arequipa">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#e2">
                                        <span class="faq-q-num">2</span>
                                        How many days should I spend in Peru?
                                    </button>
                                </h3>
                                <div id="e2" class="accordion-collapse collapse" data-bs-parent="#acc-entry">
                                    <div class="accordion-body">
                                        It depends on what you want to see:
                                        <ul>
                                            <li><strong>7 days</strong> — minimum viable: Lima, Cusco and Machu Picchu.</li>
                                            <li><strong>10–14 days</strong> — ideal: add Sacred Valley, Rainbow Mountain and Lake Titicaca.</li>
                                            <li><strong>18–21 days</strong> — to include Arequipa, Colca Canyon, Nazca or the Amazon.</li>
                                        </ul>
                                        In fewer than 5 days you can only cover Cusco and Machu Picchu at a very intense pace — we do not recommend it.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item faq-item" data-text="speak spanish language travel peru quechua bilingual guides english french german">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#e3">
                                        <span class="faq-q-num">3</span>
                                        Do I need to speak Spanish to travel in Peru?
                                    </button>
                                </h3>
                                <div id="e3" class="accordion-collapse collapse" data-bs-parent="#acc-entry">
                                    <div class="accordion-body">
                                        <strong>Not essential if you travel with an agency.</strong> Spanish is the official language, spoken by
                                        82% of the population. In Cusco and the south, <strong>Quechua</strong> is also widely spoken. If you
                                        travel independently outside tourist areas, basic Spanish helps. With Pacha Mama Spirit you will have
                                        <strong>bilingual guides</strong> in English, French, German, Italian and Chinese.
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    {{-- ══ CATEGORY 2: Safety & Health ══ --}}
                    <div class="faq-category" id="cat-health">
                        <div class="faq-category-header">
                            <div class="faq-category-icon">🛡️</div>
                            <h2 class="faq-category-title">Safety &amp; Health</h2>
                        </div>
                        <div class="accordion faq-accordion" id="acc-health">

                            <div class="accordion-item faq-item" data-text="safe safety peru 2026 taxis uber poltur theft pickpocket crime">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#h1">
                                        <span class="faq-q-num">4</span>
                                        How safe is Peru in 2026?
                                    </button>
                                </h3>
                                <div id="h1" class="accordion-collapse collapse" data-bs-parent="#acc-health">
                                    <div class="accordion-body">
                                        Peru is <strong>safe in its tourist zones</strong>: Cusco, Sacred Valley, Machu Picchu, Arequipa,
                                        Puno, Trujillo and central Lima. Basic precautions:
                                        <ul>
                                            <li>Use app-based taxis — in Lima: Uber, Cabify or InDrive (avoid street taxis).</li>
                                            <li>Do not display valuables in public spaces.</li>
                                            <li>Keep a digital copy of your passport in the cloud.</li>
                                            <li>Cusco has <strong>POLTUR</strong> (Tourist Police) operating 24/7.</li>
                                            <li>Emergency number: <strong>105</strong>.</li>
                                        </ul>
                                        Traveling with an agency reduces risk to virtually zero.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item faq-item" data-text="altitude sickness soroche acclimatize cusco coca tea oxygen vomiting headache">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#h2">
                                        <span class="faq-q-num">5</span>
                                        How do I prevent altitude sickness in Cusco?
                                    </button>
                                </h3>
                                <div id="h2" class="accordion-collapse collapse" data-bs-parent="#acc-health">
                                    <div class="accordion-body">
                                        Cusco sits at <strong>3,399 metres (11,152 ft)</strong>. To prevent soroche:
                                        <ul>
                                            <li><strong>Acclimatize for at least 2 days</strong> before any demanding activity.</li>
                                            <li>Drink plenty of water and herbal infusions (coca-leaf tea, a traditional local remedy).</li>
                                            <li>Avoid alcohol for the first 48 hours.</li>
                                            <li>Eat light, avoid fatty or heavy meals.</li>
                                            <li>Rest well on your first night — do not plan trekking on day one.</li>
                                        </ul>
                                        Coca leaves are legal, ancestral and effective. If symptoms are severe (vomiting, intense headache,
                                        disorientation), seek medical attention — Cusco has 24/7 oxygen services and well-equipped clinics.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item faq-item" data-text="vaccinations yellow fever jungle amazon hepatitis tetanus travel doctor iquitos">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#h3">
                                        <span class="faq-q-num">6</span>
                                        Do I need vaccinations to travel to Peru?
                                    </button>
                                </h3>
                                <div id="h3" class="accordion-collapse collapse" data-bs-parent="#acc-health">
                                    <div class="accordion-body">
                                        <strong>No vaccination is mandatory</strong> to enter Peru. <strong>Yellow fever</strong> is recommended
                                        if you plan to visit the Amazon jungle (Iquitos, Puerto Maldonado, Manu). For Cusco, Machu Picchu and
                                        the coast it is not required. Keep tetanus, hepatitis A and B up to date.
                                        Consult a travel medicine doctor 4–6 weeks before departure.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item faq-item" data-text="tap water drink potable cusco lima lifestraw grayl bottle reusable plastic ban 2019">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#h4">
                                        <span class="faq-q-num">7</span>
                                        Can I drink tap water in Peru?
                                    </button>
                                </h3>
                                <div id="h4" class="accordion-collapse collapse" data-bs-parent="#acc-health">
                                    <div class="accordion-body">
                                        <strong>No.</strong> Tap water is not potable in most of the country, including Cusco and Lima.
                                        Always drink bottled or filtered water. Tourist lodges and hotels offer free filtered water.
                                        Bring a <strong>reusable filter bottle</strong> (LifeStraw, Grayl) — Machu Picchu has banned
                                        disposable plastic bottles since 2019.
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    {{-- ══ CATEGORY 3: Getting Around ══ --}}
                    <div class="faq-category" id="cat-transport">
                        <div class="faq-category-header">
                            <div class="faq-category-icon">🚂</div>
                            <h2 class="faq-category-title">Getting Around</h2>
                        </div>
                        <div class="accordion faq-accordion" id="acc-transport">

                            <div class="accordion-item faq-item" data-text="best time visit machu picchu dry season rain inca trail february may september">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#tr1">
                                        <span class="faq-q-num">8</span>
                                        What is the best time to visit Machu Picchu?
                                    </button>
                                </h3>
                                <div id="tr1" class="accordion-collapse collapse" data-bs-parent="#acc-transport">
                                    <div class="accordion-body">
                                        <strong>May to September</strong> is the dry season with clear skies — ideal for trekking but very crowded.
                                        <strong>April and October</strong> offer the best balance of good weather, fewer tourists and reasonable prices.
                                        In <strong>February the Classic Inca Trail closes</strong> for maintenance — Machu Picchu and alternative
                                        routes (Salkantay, Lares) remain open.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item faq-item" data-text="get to machu picchu cusco train ollantaytambo inca trail salkantay hydroelectric perurail incarail">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#tr2">
                                        <span class="faq-q-num">9</span>
                                        How do I get to Machu Picchu from Cusco?
                                    </button>
                                </h3>
                                <div id="tr2" class="accordion-collapse collapse" data-bs-parent="#acc-transport">
                                    <div class="accordion-body">
                                        Four main routes:
                                        <ol>
                                            <li><strong>Tourist train</strong> from Ollantaytambo — most comfortable, 4 hours total.</li>
                                            <li><strong>Classic Inca Trail</strong> — 4 days hiking, permit required 6 months in advance.</li>
                                            <li><strong>Salkantay Trek</strong> — 5 days, no special permit, more affordable.</li>
                                            <li><strong>Hydroelectric route</strong> — van plus hike, 6 hours, cheapest option.</li>
                                        </ol>
                                        For 95% of travelers we recommend <strong>option 1</strong> for comfort and time.
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    {{-- ══ CATEGORY 4: Money & Budget ══ --}}
                    <div class="faq-category" id="cat-budget">
                        <div class="faq-category-header">
                            <div class="faq-category-icon">💰</div>
                            <h2 class="faq-category-title">Money &amp; Budget</h2>
                        </div>
                        <div class="accordion faq-accordion" id="acc-budget">

                            <div class="accordion-item faq-item" data-text="currency peru sol pen dollar euro exchange rate backpacker daily budget money">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#b1">
                                        <span class="faq-q-num">10</span>
                                        What is the currency of Peru and how much money should I bring?
                                    </button>
                                </h3>
                                <div id="b1" class="accordion-collapse collapse" data-bs-parent="#acc-budget">
                                    <div class="accordion-body">
                                        The official currency is the <strong>Peruvian Sol (PEN)</strong>. 2026 reference exchange rate:
                                        1 USD ≈ 3.75 soles; 1 EUR ≈ 4.10 soles.
                                        <br><br>Daily budget:
                                        <ul>
                                            <li><strong>Backpacker:</strong> 40–60 USD (hostel, public transport, market food).</li>
                                            <li><strong>Mid-range:</strong> 80–120 USD (3-star hotel, restaurants, one tour per day).</li>
                                            <li><strong>Luxury:</strong> 200+ USD (boutique hotel, private tours, fine dining).</li>
                                        </ul>
                                        US dollars are accepted at large hotels, tourist restaurants and agencies. For everyday use, pay in soles.
                                        Exchange money only at <strong>official exchange houses</strong>, never on the street.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item faq-item" data-text="cost 10 days trip peru 2026 budget lima cusco sacred valley machu picchu">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#b2">
                                        <span class="faq-q-num">11</span>
                                        How much does a 10-day trip to Peru cost?
                                    </button>
                                </h3>
                                <div id="b2" class="accordion-collapse collapse" data-bs-parent="#acc-budget">
                                    <div class="accordion-body">
                                        2026 reference budget for 10 days covering Lima, Cusco, Sacred Valley and Machu Picchu:
                                        <ul>
                                            <li><strong>Backpacker:</strong> 700–900 USD</li>
                                            <li><strong>Mid-range:</strong> 1,500–2,000 USD</li>
                                            <li><strong>Luxury:</strong> 3,500–5,000 USD</li>
                                        </ul>
                                        International flights not included. All-inclusive tours with a local agency usually offer better
                                        value than booking everything independently from abroad.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item faq-item" data-text="pay card visa mastercard american express yape plin cash soles markets villages">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#b3">
                                        <span class="faq-q-num">12</span>
                                        Can I pay by card in Peru?
                                    </button>
                                </h3>
                                <div id="b3" class="accordion-collapse collapse" data-bs-parent="#acc-budget">
                                    <div class="accordion-body">
                                        Yes at hotels, tourist restaurants, supermarkets and agencies. <strong>Visa and MasterCard</strong>
                                        are the most widely accepted; American Express has limited coverage. At markets, local transport, taxis
                                        and small villages use cash or the local mobile apps <strong>Yape</strong> and <strong>Plin</strong>
                                        (require a Peruvian phone number). Always carry some cash in soles.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item faq-item" data-text="expensive cheap peru hostel hotel price food market restaurant train ticket citadel">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#b4">
                                        <span class="faq-q-num">13</span>
                                        Is Peru expensive to travel?
                                    </button>
                                </h3>
                                <div id="b4" class="accordion-collapse collapse" data-bs-parent="#acc-budget">
                                    <div class="accordion-body">
                                        <strong>No,</strong> compared to Europe, the United States or Australia. Peru offers great variety: from
                                        hostels at 10 USD per night to luxury lodges at over 500 USD. Street market food: 3–5 USD;
                                        mid-range restaurant: 10–15 USD; fine dining: 40–80 USD. Local transport and tours are affordable.
                                        <br><br>The most expensive items are usually the train tickets to Machu Picchu and the citadel entrance fee.
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    {{-- ══ CATEGORY 5: What to Pack ══ --}}
                    <div class="faq-category" id="cat-packing">
                        <div class="faq-category-header">
                            <div class="faq-category-icon">🎒</div>
                            <h2 class="faq-category-title">What to Pack</h2>
                        </div>
                        <div class="accordion faq-accordion" id="acc-packing">

                            <div class="accordion-item faq-item" data-text="clothes pack peru layers cusco trekking fleece waterproof hat boots jungle summer">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#p1">
                                        <span class="faq-q-num">14</span>
                                        What clothes should I pack for Peru?
                                    </button>
                                </h3>
                                <div id="p1" class="accordion-collapse collapse" data-bs-parent="#acc-packing">
                                    <div class="accordion-body">
                                        <strong>Dress in layers.</strong> In Cusco you can have intense sunshine during the day and near-freezing
                                        temperatures at night. Essentials: thermal base layers, fleece or mid-layer, waterproof jacket,
                                        trekking trousers (avoid jeans), sun hat and wool hat, buff, light gloves,
                                        <em>already broken-in</em> hiking boots and comfortable trainers.
                                        <br><br>For the jungle, add lightweight breathable clothing and strong insect repellent. For the coast, summer clothes.
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    {{-- ══ CATEGORY 6: Culture & Experiences ══ --}}
                    <div class="faq-category" id="cat-culture">
                        <div class="faq-category-header">
                            <div class="faq-category-icon">🍽️</div>
                            <h2 class="faq-category-title">Culture &amp; Experiences</h2>
                        </div>
                        <div class="accordion faq-accordion" id="acc-culture">

                            <div class="accordion-item faq-item" data-text="machu picchu without agency ticket tuboleto perurail incarail certified guide inca trail">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cu1">
                                        <span class="faq-q-num">15</span>
                                        Can I visit Machu Picchu without a tour agency?
                                    </button>
                                </h3>
                                <div id="cu1" class="accordion-collapse collapse" data-bs-parent="#acc-culture">
                                    <div class="accordion-body">
                                        <strong>Yes, but with limitations.</strong> You can buy your ticket at <em>tuboleto.cultura.pe</em>
                                        and train tickets at <em>perurail.com</em> or <em>incarail.com</em>. Since 2024 all entries require a
                                        <strong>certified guide inside the citadel</strong>. The <strong>Classic Inca Trail requires</strong>
                                        a licensed agency by law. For other access routes, you can go independently if you have travel experience.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item faq-item" data-text="peruvian food try ceviche lomo saltado aji de gallina causa anticuchos guinea pig chicha pisco gastronomy">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cu2">
                                        <span class="faq-q-num">16</span>
                                        What Peruvian food should I try?
                                    </button>
                                </h3>
                                <div id="cu2" class="accordion-collapse collapse" data-bs-parent="#acc-culture">
                                    <div class="accordion-body">
                                        Must-tries:
                                        <ul>
                                            <li><strong>Ceviche</strong> — lime-marinated fresh fish. National cultural heritage dish.</li>
                                            <li><strong>Lomo saltado</strong> — stir-fried beef with Chinese-Peruvian influence (chifa).</li>
                                            <li><strong>Ají de gallina</strong> — creamy ají pepper sauce with shredded chicken.</li>
                                            <li><strong>Causa limeña</strong> — layered yellow potato dish with filling.</li>
                                            <li><strong>Anticuchos</strong> — grilled beef heart skewers.</li>
                                            <li><strong>Cuy al horno</strong> — roasted guinea pig (traditional Andean, if you dare).</li>
                                            <li><strong>Native potatoes</strong> — Peru has over 3,800 varieties.</li>
                                            <li><strong>Chicha morada</strong> — purple corn drink.</li>
                                            <li><strong>Pisco sour</strong> — the national cocktail.</li>
                                        </ul>
                                        In Cusco try <em>chiri uchu</em> in June. Peruvian cuisine ranks among the world's top three.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item faq-item" data-text="pago tierra earth offering ceremony pachamama paqo andean worldview august despacho">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cu3">
                                        <span class="faq-q-num">17</span>
                                        What is the pago a la tierra (earth offering) ceremony?
                                    </button>
                                </h3>
                                <div id="cu3" class="accordion-collapse collapse" data-bs-parent="#acc-culture">
                                    <div class="accordion-body">
                                        It is the most important ceremony of the <strong>Andean worldview</strong>. A master or <em>paqo</em>
                                        prepares an offering to Pachamama (Mother Earth) with coca leaves, seeds, wool, sweets and symbolic
                                        elements — each representing a petition or act of gratitude.
                                        <br><br>
                                        It is performed in <strong>August</strong> (the sacred month of Pachamama), before an important journey,
                                        or as thanks after a healing. At Pacha Mama Spirit we include authentic ceremonies led by community
                                        paqos — not tourist performances.
                                    </div>
                                </div>
                            </div>

                            <div class="accordion-item faq-item" data-text="travel peru children family altitude acclimatization machu picchu inca trail pediatric insurance">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#cu4">
                                        <span class="faq-q-num">18</span>
                                        Can I travel to Peru with children?
                                    </button>
                                </h3>
                                <div id="cu4" class="accordion-collapse collapse" data-bs-parent="#acc-culture">
                                    <div class="accordion-body">
                                        Yes, Peru is a very family-friendly destination. Recommendations:
                                        <ul>
                                            <li>Avoid altitudes above 3,500m (11,480 ft) with children under 3 years old.</li>
                                            <li>Gradual acclimatization: Lima → Sacred Valley (2,800m) → Cusco (3,399m).</li>
                                            <li>Choose itineraries with more time and less intensity.</li>
                                            <li>Travel insurance with pediatric coverage.</li>
                                        </ul>
                                        Machu Picchu is suitable for the whole family — many travelers bring children from age 6.
                                        The Inca Trail is generally recommended <strong>from age 10</strong>.
                                        We design family tours with adapted activities.
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    {{-- CTA --}}
                    <div style="background:linear-gradient(135deg, #228b8b 0%, #977828 100%);color:#fff;border-radius:18px;padding:2.5rem;text-align:center;margin:2rem 0 1rem;box-shadow:0 10px 30px rgba(34,139,139,.25);">
                        <h3 style="color:#fff;margin-bottom:1rem;text-shadow:0 1px 4px rgba(0,0,0,.25);">Can't find your question?</h3>
                        <p style="font-size:1.1rem;margin-bottom:1.5rem;color:rgba(255,255,255,.93);text-shadow:0 1px 3px rgba(0,0,0,.2);">
                            Our Cusco team replies on WhatsApp in under an hour.
                            We'll help you plan your trip with no obligation.
                        </p>
                        <a href="{{ route('contact') }}" style="display:inline-block;background:#fff;color:#228b8b;padding:.9rem 2.2rem;border-radius:50px;text-decoration:none;font-weight:700;box-shadow:0 4px 14px rgba(0,0,0,.15);">
                            Ask us now
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
    const input  = document.getElementById('faqSearch');
    const count  = document.getElementById('faqCount');
    const noRes  = document.getElementById('faqNoResults');
    const items  = document.querySelectorAll('.faq-item');
    const cats   = document.querySelectorAll('.faq-category');
    const total  = items.length;

    function normalize(str) {
        return str.toLowerCase().normalize('NFD').replace(/[\u0300-\u036f]/g, '');
    }

    input.addEventListener('input', function () {
        const q = normalize(this.value.trim());

        if (!q) {
            items.forEach(i => i.classList.remove('faq-item-hidden'));
            cats.forEach(c => c.classList.remove('faq-category-hidden'));
            noRes.style.display = 'none';
            count.textContent = total + ' questions — choose a category or search directly';
            return;
        }

        let visible = 0;
        items.forEach(item => {
            const text = normalize(item.getAttribute('data-text') + ' ' + item.querySelector('.accordion-button').textContent);
            if (text.includes(q)) {
                item.classList.remove('faq-item-hidden');
                item.querySelector('.accordion-button').classList.remove('collapsed');
                item.querySelector('.accordion-collapse').classList.add('show');
                visible++;
            } else {
                item.classList.add('faq-item-hidden');
                item.querySelector('.accordion-button').classList.add('collapsed');
                item.querySelector('.accordion-collapse').classList.remove('show');
            }
        });

        cats.forEach(cat => {
            const hasVisible = cat.querySelectorAll('.faq-item:not(.faq-item-hidden)').length > 0;
            cat.classList.toggle('faq-category-hidden', !hasVisible);
        });

        if (visible === 0) {
            noRes.style.display = 'block';
            count.textContent = 'No results for "' + this.value.trim() + '"';
        } else {
            noRes.style.display = 'none';
            count.textContent = visible + ' ' + (visible === 1 ? 'question found' : 'questions found');
        }
    });

    // Sidebar active link on scroll
    const tocLinks = document.querySelectorAll('.faq-toc-link');
    const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const id = entry.target.id;
                tocLinks.forEach(l => l.classList.toggle('active', l.getAttribute('href') === '#' + id));
            }
        });
    }, { rootMargin: '-30% 0px -60% 0px' });

    cats.forEach(c => observer.observe(c));
})();
</script>
@endpush

@endsection
