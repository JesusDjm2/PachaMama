<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NuevosBlogsSEO2026Seeder extends Seeder
{
    public function run(): void
    {
        $now = '2026-05-03 10:00:00';
        $created = 0;

        // ─────────────────────────────────────────────
        // BLOG 1 – Machu Picchu 2026
        // ─────────────────────────────────────────────
        $es1 = '<p>Machu Picchu es el sueño de todo viajero y en 2026 sigue siendo el destino más icónico de Sudamérica. Planificar bien tu visita marca la diferencia entre un paseo turístico y una experiencia que recuerdas toda la vida. Esta guía completa y actualizada te dice exactamente qué hacer, cuánto cuesta y cómo llegar.</p>
<h2>¿Por Qué Visitar Machu Picchu en 2026?</h2>
<p>Construida en el siglo XV a 2,430 metros de altitud entre los picos andinos, la ciudadela de Machu Picchu fue declarada Patrimonio de la Humanidad por la UNESCO y elegida una de las Nuevas Siete Maravillas del Mundo. En 2026, el sistema de visita por circuitos ofrece una experiencia más ordenada y sin masificación extrema, siempre que reserves con anticipación.</p>
<h2>Precio de Entradas a Machu Picchu 2026</h2>
<p>El sistema de tickets funciona por circuitos y franjas horarias. Es obligatorio reservar online con mínimo 4 semanas de anticipación (8 en temporada alta). Precios aproximados para visitantes extranjeros:</p>
<ul>
<li><strong>Circuito 1 – Ciudadela + Huayna Picchu:</strong> desde $75 USD</li>
<li><strong>Circuito 2 – Ciudadela Principal:</strong> desde $55 USD</li>
<li><strong>Circuito 3 – Ciudadela + Montaña Machu Picchu:</strong> desde $65 USD</li>
</ul>
<p>Los horarios de ingreso disponibles son: 6:00 am, 7:00 am, 8:00 am, 9:00 am, 10:00 am y 12:00 pm. El turno de las 6:00 am es el más solicitado: menos visitantes y luz matutina perfecta para fotografías.</p>
<h2>Cómo Llegar a Machu Picchu desde Cusco</h2>
<h3>En tren (la opción más cómoda)</h3>
<p>Desde Cusco o Ollantaytambo hasta Aguas Calientes, las empresas Peru Rail e Inca Rail ofrecen servicios desde $35 USD. El trayecto dura entre 1.5 y 3.5 horas. Desde Aguas Calientes, tomas un bus de 25 minutos hasta la entrada de la ciudadela.</p>
<h3>Caminando el Camino Inca (la ruta épica)</h3>
<p>Cuatro días de trekking atravesando bosque nublado, ruinas incas y alturas que cortan la respiración, llegando a la ciudadela al amanecer por la Puerta del Sol. Los permisos son limitados a 500 personas por día y se agotan con meses de anticipación.</p>
<h3>Ruta terrestre (la opción económica)</h3>
<p>Combinando buses y una caminata por Santa Teresa puedes llegar a Aguas Calientes por mucho menos dinero. Perfecta para mochileros y viajeros con presupuesto ajustado.</p>
<h2>Qué Ver Dentro de la Ciudadela</h2>
<ul>
<li><strong>Templo del Sol:</strong> piedra perfectamente tallada alineada al solsticio de invierno</li>
<li><strong>Intihuatana:</strong> el reloj solar sagrado de los Incas</li>
<li><strong>Templo de las Tres Ventanas:</strong> vistas al Valle Urubamba</li>
<li><strong>Puerta del Sol (Intipunku):</strong> la llegada legendaria del Camino Inca</li>
<li><strong>Puente Inca:</strong> una pasarela de vértigo tallada directamente en la roca</li>
</ul>
<h2>Consejos para una Visita Perfecta</h2>
<ul>
<li>Reserva con mínimo 2 meses de anticipación en temporada alta (junio–agosto)</li>
<li>Lleva ropa en capas y chubasquero: el clima cambia en minutos</li>
<li>Mantente hidratado para prevenir el mal de altura</li>
<li>Contrata un guía bilingüe certificado: transforma la visita en una experiencia cultural profunda</li>
<li>Quédate en Aguas Calientes la noche anterior para llegar descansado al amanecer</li>
</ul>
<h2>Reserva tu Tour a Machu Picchu con Pacha Mama Spirit</h2>
<p>En <strong>Pacha Mama Spirit</strong> ofrecemos paquetes completos a Machu Picchu desde Cusco: transporte, entradas, guía bilingüe certificado y almuerzo en Aguas Calientes. Nuestros guías locales conocen cada rincón de la ciudadela y te contarán historias que no encontrarás en ningún libro.</p>
<p><a href="/tours">Explora nuestros tours a Machu Picchu</a> y vive la experiencia de tu vida.</p>';

        $en1 = '<p>Machu Picchu is every traveler\'s dream, and in 2026 it remains South America\'s most iconic destination. Planning your visit well is the difference between a tourist stopover and a life-changing memory. This complete, up-to-date guide tells you exactly what to do, how much it costs, and how to get there.</p>
<h2>Why Visit Machu Picchu in 2026?</h2>
<p>Built in the 15th century at 2,430 meters above sea level among the Andean peaks, the citadel of Machu Picchu is a UNESCO World Heritage Site and one of the New Seven Wonders of the World. In 2026, the circuit-based visit system delivers an organized, crowd-controlled experience — as long as you book well in advance.</p>
<h2>Machu Picchu Ticket Prices 2026</h2>
<p>The ticketing system operates by circuits and time slots. Online booking is mandatory, at least 4 weeks ahead (8 weeks in high season). Approximate prices for foreign visitors:</p>
<ul>
<li><strong>Circuit 1 – Citadel + Huayna Picchu:</strong> from $75 USD</li>
<li><strong>Circuit 2 – Main Citadel:</strong> from $55 USD</li>
<li><strong>Circuit 3 – Citadel + Machu Picchu Mountain:</strong> from $65 USD</li>
</ul>
<p>Available entry times: 6:00 am, 7:00 am, 8:00 am, 9:00 am, 10:00 am and 12:00 pm. The 6:00 am slot is the most in-demand: fewer visitors and perfect morning light for photography.</p>
<h2>How to Get to Machu Picchu from Cusco</h2>
<h3>By Train (most comfortable)</h3>
<p>From Cusco or Ollantaytambo to Aguas Calientes, Peru Rail and Inca Rail offer services from $35 USD. The journey takes 1.5 to 3.5 hours. From Aguas Calientes, a 25-minute bus takes you to the citadel entrance.</p>
<h3>Walking the Inca Trail (the epic route)</h3>
<p>Four days of trekking through cloud forest, Inca ruins and breathtaking altitudes, arriving at the citadel at sunrise through the Sun Gate. Permits are limited to 500 people per day and sell out months in advance.</p>
<h3>Overland Route (the budget option)</h3>
<p>Combining buses and a hike via Santa Teresa lets you reach Aguas Calientes for much less money — perfect for backpackers and budget travelers.</p>
<h2>What to See Inside the Citadel</h2>
<ul>
<li><strong>Temple of the Sun:</strong> perfectly carved stone aligned to the winter solstice</li>
<li><strong>Intihuatana:</strong> the sacred Inca solar clock</li>
<li><strong>Temple of the Three Windows:</strong> panoramic views over the Urubamba Valley</li>
<li><strong>Sun Gate (Intipunku):</strong> the legendary Inca Trail arrival point</li>
<li><strong>Inca Bridge:</strong> a vertigo-inducing walkway carved directly into the rock face</li>
</ul>
<h2>Tips for a Perfect Visit</h2>
<ul>
<li>Book at least 2 months ahead in high season (June–August)</li>
<li>Dress in layers and bring a rain jacket: weather can change in minutes</li>
<li>Stay hydrated to prevent altitude sickness</li>
<li>Hire a certified bilingual guide: it transforms the visit into a deep cultural experience</li>
<li>Stay overnight in Aguas Calientes to arrive rested at sunrise</li>
</ul>
<h2>Book Your Machu Picchu Tour with Pacha Mama Spirit</h2>
<p>At <strong>Pacha Mama Spirit</strong> we offer complete Machu Picchu packages from Cusco: transport, entry tickets, certified bilingual guide, and lunch in Aguas Calientes. Our local guides know every corner of the citadel and share stories you won\'t find in any book.</p>
<p><a href="/en/tours">Explore our Machu Picchu tours</a> and experience the trip of a lifetime.</p>';

        // ─────────────────────────────────────────────
        // BLOG 2 – Camino Inca 2026
        // ─────────────────────────────────────────────
        $es2 = '<p>El Camino Inca es mucho más que un trekking: es una peregrinación por la historia viva del Imperio Inca. Si tu sueño es llegar a Machu Picchu caminando, este artículo tiene todo lo que necesitas saber para el 2026: precios, permisos, qué esperar y cómo reservar tu lugar antes de que se agoten.</p>
<h2>¿Qué es el Camino Inca?</h2>
<p>El Camino Inca Clásico es una ruta de trekking de 43 kilómetros que atraviesa montañas, selva nublada y una docena de sitios arqueológicos incas, culminando en la mítica Puerta del Sol con Machu Picchu al fondo al amanecer del cuarto día. Es considerado uno de los trekkings más famosos y emocionantes del mundo.</p>
<h2>Permisos y Precios del Camino Inca 2026</h2>
<p>El Ministerio de Cultura del Perú limita el acceso a <strong>500 personas por día</strong> (incluyendo turistas, guías y porteadores), lo que hace que los permisos sean un bien muy escaso. Precios aproximados:</p>
<ul>
<li><strong>Camino Inca Clásico 4 días / 3 noches:</strong> desde $600 USD (todo incluido)</li>
<li><strong>Camino Inca Corto 2 días / 1 noche:</strong> desde $350 USD</li>
<li><strong>Solo permiso (sin tour):</strong> no es posible, el permiso está vinculado a una agencia autorizada</li>
</ul>
<p>Los precios incluyen el permiso oficial, guía certificado, porteadores, comidas en ruta y la entrada a Machu Picchu. <strong>Los permisos para junio, julio y agosto se agotan en febrero o antes.</strong></p>
<h2>Itinerario del Camino Inca Clásico</h2>
<h3>Día 1 – Km 82 a Wayllabamba (3,000 m)</h3>
<p>El trekking comienza en el Km 82 de la vía férrea Cusco-Aguas Calientes. El primer día es de aclimatación, con ascensos suaves y el primer contacto con la vegetación andina. Se pasa por las ruinas de Llactapata con vistas lejanas a Machu Picchu.</p>
<h3>Día 2 – El día más duro: Paso de la Mujer Muerta (4,215 m)</h3>
<p>El día más exigente físicamente. Subes al punto más alto del camino, el Abra de Warmihuañusca, desde donde la vista de los Andes es absolutamente sobrecogedora. La bajada lleva a Pacaymayu y al campamento.</p>
<h3>Día 3 – Ruinas y Bosque Nublado</h3>
<p>El día más arqueológico: pasas por Runkurakay, Sayacmarca, Phuyupatamarca y el hermoso bosque nublado hasta el campamento de Wiñay Wayna, el sitio arqueológico más elaborado del camino.</p>
<h3>Día 4 – La llegada a Machu Picchu</h3>
<p>Madrugas a las 3:30 am para ser de los primeros en atravesar la Puerta del Sol. Cuando la niebla se levanta y aparece Machu Picchu ante tus ojos, entiendes por qué este camino lo cambia todo.</p>
<h2>¿Cuándo Reservar el Camino Inca?</h2>
<ul>
<li><strong>Para mayo–agosto:</strong> reserva en diciembre–enero del año anterior</li>
<li><strong>Para septiembre–noviembre:</strong> reserva con 3 a 4 meses de anticipación</li>
<li><strong>Diciembre–marzo:</strong> temporada de lluvias, el camino está abierto pero con menos demanda</li>
</ul>
<h2>Reserva tu Camino Inca con Pacha Mama Spirit</h2>
<p>En <strong>Pacha Mama Spirit</strong> somos una agencia autorizada para operar el Camino Inca. Nuestros grupos son pequeños (máximo 12 personas), nuestros guías son arqueólogos e historiadores locales y nuestros porteadores tienen las mejores condiciones de trabajo del mercado.</p>
<p><a href="/tours">Consulta fechas disponibles para el Camino Inca 2026</a> y reserva antes de que se agoten los permisos.</p>';

        $en2 = '<p>The Inca Trail is far more than a trek: it\'s a pilgrimage through the living history of the Inca Empire. If your dream is to arrive at Machu Picchu on foot, this article covers everything you need to know for 2026 — prices, permits, what to expect, and how to book before spots run out.</p>
<h2>What is the Inca Trail?</h2>
<p>The Classic Inca Trail is a 43-kilometer trekking route that crosses mountains, cloud forest, and a dozen Inca archaeological sites, culminating at the mythical Sun Gate with Machu Picchu spread out below at sunrise on the fourth day. It is considered one of the most famous and exhilarating treks in the world.</p>
<h2>Inca Trail Permits and Prices 2026</h2>
<p>Peru\'s Ministry of Culture limits access to <strong>500 people per day</strong> (including tourists, guides, and porters), making permits a scarce commodity. Approximate prices:</p>
<ul>
<li><strong>Classic Inca Trail 4 days / 3 nights:</strong> from $600 USD (all-inclusive)</li>
<li><strong>Short Inca Trail 2 days / 1 night:</strong> from $350 USD</li>
<li><strong>Permit only (without tour):</strong> not possible — permits are tied to licensed agencies</li>
</ul>
<p>Prices include the official permit, certified guide, porters, meals on the trail, and Machu Picchu entry. <strong>Permits for June, July and August sell out in February or earlier.</strong></p>
<h2>Classic Inca Trail Itinerary</h2>
<h3>Day 1 – Km 82 to Wayllabamba (3,000 m)</h3>
<p>The trek starts at Km 82 of the Cusco–Aguas Calientes railway. The first day is for acclimatization, with gentle ascents and your first encounter with Andean vegetation. You pass through the Llactapata ruins with distant views of Machu Picchu.</p>
<h3>Day 2 – The hardest day: Dead Woman\'s Pass (4,215 m)</h3>
<p>The most physically demanding day. You ascend to the highest point of the trail — Abra de Warmihuañusca — where the Andean panorama is absolutely breathtaking. The descent leads to Pacaymayu and camp.</p>
<h3>Day 3 – Ruins and Cloud Forest</h3>
<p>The most archaeological day: you pass through Runkurakay, Sayacmarca, Phuyupatamarca and the stunning cloud forest to the Wiñay Wayna campsite, the most elaborate archaeological site on the route.</p>
<h3>Day 4 – Arriving at Machu Picchu</h3>
<p>You wake at 3:30 am to be among the first through the Sun Gate. When the mist lifts and Machu Picchu appears before you, you understand why this trail changes everything.</p>
<h2>When to Book the Inca Trail?</h2>
<ul>
<li><strong>For May–August:</strong> book in December–January of the previous year</li>
<li><strong>For September–November:</strong> book 3 to 4 months ahead</li>
<li><strong>December–March:</strong> rainy season — the trail is open with less demand</li>
</ul>
<h2>Book Your Inca Trail with Pacha Mama Spirit</h2>
<p>At <strong>Pacha Mama Spirit</strong> we are a licensed Inca Trail operator. Our groups are small (max 12 people), our guides are local archaeologists and historians, and our porters work under the best conditions in the market.</p>
<p><a href="/en/tours">Check available dates for the Inca Trail 2026</a> and book before permits run out.</p>';

        // ─────────────────────────────────────────────
        // BLOG 3 – Cusco en 3 días
        // ─────────────────────────────────────────────
        $es3 = '<p>Cusco es una ciudad que te atrapa desde el primer momento: la Plaza de Armas con sus catedrales barrocas, los callejones de piedra inca, los mercados de colores y la energía única de la capital del Imperio más grande de América. Si tienes 3 días, aquí tienes el itinerario perfecto para no perderte nada esencial.</p>
<h2>Día 1 – El Centro Histórico y la Magia Inca</h2>
<h3>Mañana: Plaza de Armas y Catedral</h3>
<p>Empieza el día en la <strong>Plaza de Armas</strong>, el corazón palpitante de Cusco. La Catedral del Cusco, construida sobre el palacio del Inca Viracocha, guarda una de las colecciones de arte colonial más importantes de América. No te pierdas la famosa <em>Última Cena Cusqueña</em> de Marcos Zapata, donde Jesús y sus apóstoles cenan cuy.</p>
<h3>Tarde: Qorikancha y San Blas</h3>
<p>El <strong>Qorikancha</strong> (Templo del Sol) fue el lugar más sagrado del Imperio Inca, revestido de oro hasta la conquista española. Hoy convive con el convento de Santo Domingo en una fusión arquitectónica única. Por la tarde, sube al barrio bohemio de <strong>San Blas</strong>: talleres de artesanos, restaurantes escondidos y las mejores vistas de los tejados coloniales de Cusco.</p>
<h3>Noche: Gastronomía Cusqueña</h3>
<p>Cena en uno de los restaurantes de cocina andina fusión que han convertido a Cusco en un destino gastronómico de primer nivel. Prueba el <em>lomo saltado</em>, la <em>trucha del Titicaca</em> o el chupe de camarones.</p>
<h2>Día 2 – Las Ruinas que Rodean Cusco</h2>
<h3>Saqsayhuamán</h3>
<p>A solo 2 km del centro, la fortaleza de <strong>Saqsayhuamán</strong> impresiona con sus bloques de piedra de hasta 125 toneladas ensamblados con precisión milimétrica. El recinto es escenario del Inti Raymi cada 24 de junio. Las vistas de Cusco desde aquí son espectaculares.</p>
<h3>Q\'enqo, Puka Pukara y Tambomachay</h3>
<p>En el mismo circuito, visita el santuario rupestre de <strong>Q\'enqo</strong>, la fortaleza roja de <strong>Puka Pukara</strong> y las fuentes ceremoniales de <strong>Tambomachay</strong>. El boleto turístico de Cusco incluye todos estos sitios.</p>
<h3>Mercado de San Pedro</h3>
<p>Por la tarde, sumérgete en el <strong>Mercado de San Pedro</strong>: colores, sabores, hierbas medicinales, tejidos andinos y la vida cotidiana auténtica de Cusco. Prueba una <em>chicha morada</em> fresca o un vaso de emoliente.</p>
<h2>Día 3 – Valle Sagrado o Machu Picchu</h2>
<p>Con 3 días en Cusco, tienes dos opciones para el tercer día:</p>
<ul>
<li><strong>Excursión de día al Valle Sagrado:</strong> Pisac, las salineras de Maras y Ollantaytambo. Una jornada cultural e histórica perfecta.</li>
<li><strong>Visita a Machu Picchu:</strong> salida temprana en tren desde Ollantaytambo. Exige reservar con anticipación.</li>
</ul>
<h2>Consejos Prácticos para Visitar Cusco</h2>
<ul>
<li><strong>Altitud:</strong> Cusco está a 3,399 m. Dedica las primeras 24 horas a aclimatarte con descanso, mate de coca y poca actividad física</li>
<li><strong>Boleto turístico:</strong> cubre la mayoría de sitios arqueológicos y museos por $40 USD</li>
<li><strong>Mejor época:</strong> mayo a octubre (temporada seca); junio tiene el Inti Raymi</li>
<li><strong>Moneda:</strong> los soles son preferibles a los dólares en el mercado</li>
</ul>
<h2>Organiza tu Viaje a Cusco con Pacha Mama Spirit</h2>
<p>En <strong>Pacha Mama Spirit</strong> diseñamos itinerarios a medida por Cusco y el Valle Sagrado, con guías locales que convierten cada visita en una clase magistral de historia inca y colonial.</p>
<p><a href="/tours">Descubre nuestros tours por Cusco</a> y empieza a planificar tu viaje ideal.</p>';

        $en3 = '<p>Cusco grabs you from the very first moment: the Plaza de Armas with its baroque cathedrals, the Inca stone alleyways, the colorful markets, and the unique energy of the capital of the greatest empire in the Americas. If you have 3 days, here is the perfect itinerary to make sure you don\'t miss anything essential.</p>
<h2>Day 1 – The Historic Center and Inca Magic</h2>
<h3>Morning: Plaza de Armas and Cathedral</h3>
<p>Start your day at the <strong>Plaza de Armas</strong>, the beating heart of Cusco. The Cusco Cathedral, built over the palace of Inca Viracocha, holds one of the most important colonial art collections in the Americas. Don\'t miss the famous <em>Cusco Last Supper</em> by Marcos Zapata, where Jesus and his apostles dine on guinea pig.</p>
<h3>Afternoon: Qorikancha and San Blas</h3>
<p><strong>Qorikancha</strong> (Temple of the Sun) was the most sacred place in the Inca Empire, once sheathed in gold until the Spanish conquest. Today it coexists with the Convent of Santo Domingo in a unique architectural fusion. In the afternoon, head up to the bohemian <strong>San Blas</strong> neighborhood: artisan workshops, hidden restaurants, and the best views over Cusco\'s colonial rooftops.</p>
<h3>Evening: Cusco Gastronomy</h3>
<p>Dine at one of the Andean fusion restaurants that have turned Cusco into a world-class food destination. Try <em>lomo saltado</em>, <em>Titicaca trout</em>, or the rich chupe de camarones shrimp chowder.</p>
<h2>Day 2 – The Ruins Surrounding Cusco</h2>
<h3>Sacsayhuaman</h3>
<p>Just 2 km from the center, the fortress of <strong>Sacsayhuaman</strong> impresses with its stone blocks weighing up to 125 tonnes, assembled with millimeter precision. The site hosts the Inti Raymi celebration every June 24th. The views over Cusco from here are spectacular.</p>
<h3>Q\'enqo, Puka Pukara and Tambomachay</h3>
<p>On the same circuit, visit the rock sanctuary of <strong>Q\'enqo</strong>, the red fortress of <strong>Puka Pukara</strong>, and the ceremonial fountains of <strong>Tambomachay</strong>. The Cusco Tourist Ticket covers all these sites.</p>
<h3>San Pedro Market</h3>
<p>In the afternoon, dive into the <strong>San Pedro Market</strong>: colors, flavors, medicinal herbs, Andean textiles, and the authentic everyday life of Cusco. Try a fresh <em>chicha morada</em> or a glass of emoliente herbal drink.</p>
<h2>Day 3 – Sacred Valley or Machu Picchu</h2>
<p>With 3 days in Cusco, you have two options for the third day:</p>
<ul>
<li><strong>Day trip to the Sacred Valley:</strong> Pisac, the Maras salt mines, and Ollantaytambo — a perfect cultural and historical day.</li>
<li><strong>Visit to Machu Picchu:</strong> early train departure from Ollantaytambo. Advance booking is essential.</li>
</ul>
<h2>Practical Tips for Visiting Cusco</h2>
<ul>
<li><strong>Altitude:</strong> Cusco sits at 3,399 m. Dedicate the first 24 hours to acclimatizing with rest, coca tea, and light activity</li>
<li><strong>Tourist Ticket:</strong> covers most archaeological sites and museums for $40 USD</li>
<li><strong>Best time to visit:</strong> May to October (dry season); June has the Inti Raymi festival</li>
<li><strong>Currency:</strong> Peruvian soles are preferred over dollars at the market</li>
</ul>
<h2>Plan Your Cusco Trip with Pacha Mama Spirit</h2>
<p>At <strong>Pacha Mama Spirit</strong> we design custom Cusco and Sacred Valley itineraries, with local guides who turn every visit into a masterclass in Inca and colonial history.</p>
<p><a href="/en/tours">Discover our Cusco tours</a> and start planning your perfect trip.</p>';

        // ─────────────────────────────────────────────
        // BLOG 4 – Mal de altura / Soroche
        // ─────────────────────────────────────────────
        $es4 = '<p>Viajar a Cusco, Puno o el Camino Inca implica enfrentarse a altitudes que el cuerpo no está acostumbrado. El <strong>mal de altura</strong> o <em>soroche</em> es la respuesta natural del organismo a la menor cantidad de oxígeno en el aire y afecta a entre el 25 y el 40% de los visitantes que llegan a más de 3,000 metros. La buena noticia: con la información correcta, se puede prevenir y gestionar eficazmente.</p>
<h2>¿Qué es el Mal de Altura?</h2>
<p>El soroche ocurre cuando el cuerpo no recibe suficiente oxígeno al ascender rápidamente a grandes altitudes. Ciudades como Cusco (3,399 m), Puno (3,827 m) o el Paso de la Mujer Muerta en el Camino Inca (4,215 m) superan con creces el umbral en que el cuerpo empieza a notar la diferencia. No distingue entre personas jóvenes o mayores, deportistas o sedentarios.</p>
<h2>Síntomas del Soroche</h2>
<p>Los síntomas aparecen generalmente entre las 6 y 12 horas de llegar a altitud:</p>
<ul>
<li>Dolor de cabeza (el síntoma más común)</li>
<li>Náuseas y vómitos</li>
<li>Fatiga y falta de energía</li>
<li>Mareos y sensación de inestabilidad</li>
<li>Dificultad para dormir</li>
<li>Pérdida de apetito</li>
</ul>
<p>En casos más graves puede aparecer edema pulmonar o cerebral, que requieren descenso inmediato y atención médica urgente.</p>
<h2>Cómo Prevenir el Mal de Altura en Perú</h2>
<h3>1. Aclimatación gradual</h3>
<p>La regla de oro: <strong>sube despacio</strong>. Si vienes de Lima (sea level), considera pasar 1-2 días en una ciudad intermedia antes de llegar a Cusco o Puno. Idealmente, pasa tus primeras 24-48 horas en Cusco sin hacer actividad física intensa.</p>
<h3>2. Mate de coca</h3>
<p>La <strong>hoja de coca</strong> es el remedio ancestral andino por excelencia. El mate de coca (infusión de hojas de coca) ayuda a dilatar los vasos sanguíneos, mejorando la circulación en altitud. Lo encontrarás en todos los hoteles y restaurantes de Cusco. Masticar las hojas también es efectivo.</p>
<h3>3. Hidratación constante</h3>
<p>En altitud el cuerpo se deshidrata más rápido. Bebe al menos 2-3 litros de agua al día desde que llegues. Evita el alcohol las primeras 48 horas y reduce el café.</p>
<h3>4. Medicación preventiva: Acetazolamida (Diamox)</h3>
<p>La <strong>acetazolamida</strong> (nombre comercial Diamox) es el medicamento más eficaz para prevenir el mal de altura. Se toma 24 horas antes de llegar a altitud y durante los primeros días. Requiere prescripción médica; consulta a tu médico antes del viaje. Los efectos secundarios incluyen orinar más frecuente y hormigueo en los dedos.</p>
<h3>5. Pastillas de soroche</h3>
<p>En cualquier farmacia peruana encontrarás las <strong>Sorojchi Pills</strong>, un remedio popular local con aspirina y cafeína. Alivian los síntomas pero no los previenen.</p>
<h2>Qué Hacer si ya Tienes Soroche</h2>
<ul>
<li>Descansa: no hagas actividad física hasta que mejores</li>
<li>Bebe abundante agua y mate de coca</li>
<li>Toma ibuprofeno o paracetamol para el dolor de cabeza</li>
<li>Si los síntomas son graves o no mejoran en 24 horas, consulta a un médico</li>
<li>En caso de síntomas severos, desciende inmediatamente a menor altitud</li>
</ul>
<h2>¿Qué Actividades Evitar las Primeras 24 Horas?</h2>
<p>Al llegar a Cusco, evita correr, subir escaleras rápido, beber alcohol o ducharte con agua muy caliente. Dale a tu cuerpo tiempo para adaptarse antes de embarcarte en tours intensos o trekkings.</p>
<h2>Viaja Seguro con Pacha Mama Spirit</h2>
<p>En <strong>Pacha Mama Spirit</strong> conocemos la altitud como nadie. Todos nuestros itinerarios incluyen días de aclimatación planificados estratégicamente, y nuestros guías están capacitados para reconocer y asistir síntomas de mal de altura.</p>
<p><a href="/tours">Planifica tu viaje a Perú</a> con la tranquilidad de viajar bien acompañado.</p>';

        $en4 = '<p>Traveling to Cusco, Puno, or the Inca Trail means facing altitudes that the body isn\'t used to. <strong>Altitude sickness</strong> — known in Peru as <em>soroche</em> — is the body\'s natural response to reduced oxygen levels in the air and affects 25 to 40% of visitors who arrive above 3,000 meters. The good news: with the right information, it can be effectively prevented and managed.</p>
<h2>What is Altitude Sickness?</h2>
<p>Soroche occurs when the body doesn\'t receive enough oxygen after rapidly ascending to high altitude. Cities like Cusco (3,399 m), Puno (3,827 m), or Dead Woman\'s Pass on the Inca Trail (4,215 m) far exceed the threshold where the body begins to feel the difference. It doesn\'t discriminate between young or old, athletes or sedentary travelers.</p>
<h2>Symptoms of Altitude Sickness</h2>
<p>Symptoms typically appear between 6 and 12 hours after arriving at altitude:</p>
<ul>
<li>Headache (the most common symptom)</li>
<li>Nausea and vomiting</li>
<li>Fatigue and low energy</li>
<li>Dizziness and unsteadiness</li>
<li>Difficulty sleeping</li>
<li>Loss of appetite</li>
</ul>
<p>In more serious cases, pulmonary or cerebral edema can develop, requiring immediate descent and urgent medical attention.</p>
<h2>How to Prevent Altitude Sickness in Peru</h2>
<h3>1. Gradual Acclimatization</h3>
<p>The golden rule: <strong>ascend slowly</strong>. If you\'re coming from Lima (sea level), consider spending 1-2 days at an intermediate altitude before reaching Cusco or Puno. Ideally, spend your first 24-48 hours in Cusco without intense physical activity.</p>
<h3>2. Coca Tea</h3>
<p><strong>Coca leaf</strong> is the ancestral Andean remedy par excellence. Coca tea (an infusion of coca leaves) helps dilate blood vessels, improving circulation at altitude. You\'ll find it in every hotel and restaurant in Cusco. Chewing the leaves is also effective.</p>
<h3>3. Constant Hydration</h3>
<p>At altitude, the body dehydrates faster. Drink at least 2-3 liters of water per day from the moment you arrive. Avoid alcohol for the first 48 hours and reduce caffeine intake.</p>
<h3>4. Preventive Medication: Acetazolamide (Diamox)</h3>
<p><strong>Acetazolamide</strong> (brand name Diamox) is the most effective medication for preventing altitude sickness. It is taken 24 hours before arriving at altitude and during the first days. It requires a prescription; consult your doctor before traveling. Side effects include more frequent urination and tingling in the fingers.</p>
<h3>5. Soroche Pills</h3>
<p>In any Peruvian pharmacy you\'ll find <strong>Sorojchi Pills</strong>, a popular local remedy containing aspirin and caffeine. They relieve symptoms but do not prevent them.</p>
<h2>What to Do if You Already Have Soroche</h2>
<ul>
<li>Rest: avoid physical activity until you feel better</li>
<li>Drink plenty of water and coca tea</li>
<li>Take ibuprofen or paracetamol for the headache</li>
<li>If symptoms are severe or don\'t improve within 24 hours, consult a doctor</li>
<li>In case of severe symptoms, descend to a lower altitude immediately</li>
</ul>
<h2>Activities to Avoid in the First 24 Hours</h2>
<p>Upon arriving in Cusco, avoid running, climbing stairs quickly, drinking alcohol, or taking very hot showers. Give your body time to adapt before embarking on intense tours or treks.</p>
<h2>Travel Safely with Pacha Mama Spirit</h2>
<p>At <strong>Pacha Mama Spirit</strong> we know altitude like no one else. All our itineraries include strategically planned acclimatization days, and our guides are trained to recognize and assist with altitude sickness symptoms.</p>
<p><a href="/en/tours">Plan your Peru trip</a> with the peace of mind of traveling in good company.</p>';

        // ─────────────────────────────────────────────
        // BLOG 5 – Montaña de 7 Colores / Vinicunca
        // ─────────────────────────────────────────────
        $es5 = '<p>La <strong>Montaña de Siete Colores</strong>, conocida también como Vinicunca o Rainbow Mountain, es uno de los destinos más fotografiados de Perú y en 2026 sigue siendo una experiencia que deja sin palabras. Sus franjas de color rojo, amarillo, verde, violeta y blanco forman un paisaje que parece de otro planeta. Esta guía te da todo lo que necesitas para visitarla con éxito.</p>
<h2>¿Dónde Está la Montaña de Siete Colores?</h2>
<p>Vinicunca se encuentra en el distrito de Pitumarca, provincia de Canchis, a unos 100 kilómetros al sureste de Cusco. Está a <strong>5,200 metros de altitud</strong>, lo que la convierte en una de las rutas de trekking más exigentes de la región. Su ascenso se hizo viral en redes sociales alrededor de 2016, cuando los deshielos dejaron al descubierto su espectacular colorido mineral.</p>
<h2>¿Por Qué Tiene Esos Colores?</h2>
<p>Los colores de Vinicunca son resultado de la composición mineralógica del suelo:</p>
<ul>
<li><strong>Rojo:</strong> óxido de hierro (goethita)</li>
<li><strong>Verde:</strong> clorita y fangolita</li>
<li><strong>Blanco:</strong> carbonato cálcico y cuarzo</li>
<li><strong>Amarillo:</strong> azufre</li>
<li><strong>Violeta/rosa:</strong> arcillas rosadas</li>
</ul>
<p>Durante miles de años, estas capas geológicas estuvieron cubiertas por hielo y nieve. El retroceso glaciar acelerado por el cambio climático las expuso al mundo.</p>
<h2>Cómo Llegar a Vinicunca desde Cusco</h2>
<h3>En tour organizado (recomendado)</h3>
<p>La gran mayoría de visitantes va en tour desde Cusco. El bus sale muy temprano (4:00–5:00 am) desde la Plaza de Armas o puntos acordados, llega al pueblo de Cusipata tras 3 horas de viaje, y desde allí comienza el trekking de 7 km (ida) con una subida de casi 600 metros de desnivel. Precio del tour: desde $20–$35 USD (sin entrada).</p>
<h3>Precio de la entrada</h3>
<p>La entrada a la comunidad campesina de Pampachiri (que gestiona el acceso) cuesta aproximadamente <strong>10 soles (≈$3 USD)</strong> y se paga directamente en el control de acceso.</p>
<h2>Dificultad y Preparación Física</h2>
<p>La ruta es de <strong>dificultad moderada-alta</strong> por la altitud y el desnivel. No necesitas experiencia en montañismo, pero sí es importante:</p>
<ul>
<li>Aclimatarte al menos 2 días en Cusco antes de ir</li>
<li>Llevar ropa abrigada (hace frío aunque haya sol)</li>
<li>Usar protector solar de alta protección (el UV en altitud es brutal)</li>
<li>Hidratarte bien antes y durante el trekking</li>
<li>Considerar alquilar un caballo en el tramo más exigente (disponible en ruta, $10–15 USD)</li>
</ul>
<h2>Mejor Época para Visitar la Montaña de Siete Colores</h2>
<ul>
<li><strong>Temporada seca (abril–noviembre):</strong> cielo despejado y colores más vivos. Mayo y octubre son ideales</li>
<li><strong>Temporada de lluvias (diciembre–marzo):</strong> el camino puede estar lodoso, pero hay menos turistas y el paisaje con nubes tiene su encanto</li>
</ul>
<p>Recomendamos salir lo más temprano posible para evitar la llegada masiva de grupos que se acumula entre las 10 am y el mediodía.</p>
<h2>Reserva tu Excursión a Vinicunca con Pacha Mama Spirit</h2>
<p>En <strong>Pacha Mama Spirit</strong> operamos la excursión a la Montaña de Siete Colores con grupos pequeños, desayuno incluido, guía experto y transporte cómodo desde Cusco.</p>
<p><a href="/tours">Reserva tu excursión a Rainbow Mountain</a> y descubre uno de los paisajes más increíbles del mundo.</p>';

        $en5 = '<p>The <strong>Rainbow Mountain</strong>, also known as Vinicunca or Montaña de Siete Colores, is one of Peru\'s most photographed destinations and in 2026 it continues to be an experience that leaves visitors speechless. Its stripes of red, yellow, green, violet and white form a landscape that looks like another planet. This guide gives you everything you need to visit it successfully.</p>
<h2>Where is Rainbow Mountain?</h2>
<p>Vinicunca is located in the Pitumarca district, Canchis province, about 100 kilometers southeast of Cusco. It sits at <strong>5,200 meters above sea level</strong>, making it one of the most demanding trekking routes in the region. It went viral on social media around 2016, when glacial retreat exposed its spectacular mineral colors to the world.</p>
<h2>Why Does It Have Those Colors?</h2>
<p>Vinicunca\'s colors are the result of the soil\'s mineralogical composition:</p>
<ul>
<li><strong>Red:</strong> iron oxide (goethite)</li>
<li><strong>Green:</strong> chlorite and phyllite</li>
<li><strong>White:</strong> calcium carbonate and quartz</li>
<li><strong>Yellow:</strong> sulfur</li>
<li><strong>Violet/pink:</strong> pink clays</li>
</ul>
<p>For thousands of years, these geological layers were covered by ice and snow. Glacial retreat accelerated by climate change exposed them to the world.</p>
<h2>How to Get to Vinicunca from Cusco</h2>
<h3>By organized tour (recommended)</h3>
<p>The vast majority of visitors go on a tour from Cusco. The bus departs very early (4:00–5:00 am) from the Plaza de Armas or agreed pickup points, reaches the village of Cusipata after 3 hours, and from there the 7 km trek begins (one way) with a climb of nearly 600 meters in elevation. Tour price: from $20–$35 USD (excluding entry fee).</p>
<h3>Entry Fee</h3>
<p>Entry to the Pampachiri peasant community (which manages access) costs approximately <strong>10 soles (≈$3 USD)</strong> and is paid directly at the access checkpoint.</p>
<h2>Difficulty and Physical Preparation</h2>
<p>The route is <strong>moderate-high difficulty</strong> due to altitude and elevation gain. You don\'t need mountaineering experience, but it is important to:</p>
<ul>
<li>Acclimatize for at least 2 days in Cusco before going</li>
<li>Wear warm layers (it gets cold even when sunny)</li>
<li>Use high-SPF sunscreen (UV at altitude is intense)</li>
<li>Stay well hydrated before and during the trek</li>
<li>Consider renting a horse on the steepest section (available on route, $10–15 USD)</li>
</ul>
<h2>Best Time to Visit Rainbow Mountain</h2>
<ul>
<li><strong>Dry season (April–November):</strong> clear skies and more vivid colors. May and October are ideal</li>
<li><strong>Rainy season (December–March):</strong> the trail can be muddy, but fewer tourists and the cloudy landscape has its own charm</li>
</ul>
<p>We recommend departing as early as possible to avoid the mass arrival of groups that accumulates between 10 am and noon.</p>
<h2>Book Your Vinicunca Excursion with Pacha Mama Spirit</h2>
<p>At <strong>Pacha Mama Spirit</strong> we operate the Rainbow Mountain excursion with small groups, included breakfast, expert guide, and comfortable transport from Cusco.</p>
<p><a href="/en/tours">Book your Rainbow Mountain excursion</a> and discover one of the most incredible landscapes in the world.</p>';

        // ─────────────────────────────────────────────
        // BLOG 6 – Valle Sagrado de los Incas
        // ─────────────────────────────────────────────
        $es6 = '<p>El <strong>Valle Sagrado de los Incas</strong>, o Valle del Urubamba, es uno de los tesoros más subestimados del turismo en Perú. A solo 30 kilómetros de Cusco, este fértil valle andino fue el corazón agrícola y espiritual del Imperio Inca, y hoy ofrece una combinación perfecta de ruinas, paisajes, mercados artesanales y cultura viva que pocos destinos del mundo pueden igualar.</p>
<h2>Por Qué el Valle Sagrado es Imprescindible</h2>
<p>Situado entre Pisac y Ollantaytambo, el Valle Sagrado tiene una altitud menor que Cusco (entre 2,700 y 2,900 m), lo que lo convierte en una excelente opción para los primeros días de aclimatación. El río Urubamba riega campos de maíz, papa y quinua que los campesinos cultivan con las mismas técnicas que usaron sus ancestros incas. Las montañas nevadas que flanquean el valle añaden un telón de fondo de postal.</p>
<h2>Pisac: Mercado y Fortaleza</h2>
<p>El pueblo de <strong>Pisac</strong> es la puerta de entrada al Valle Sagrado. Su mercado artesanal (especialmente activo los domingos) es uno de los más coloridos y auténticos de los Andes: textiles, cerámica, joyería de plata y productos locales. Sobre el pueblo, las <strong>ruinas incas de Pisac</strong> dominan el valle desde lo alto con sus andenes agrícolas, un complejo astronómico y algunas de las tumbas incas más extensas descubiertas.</p>
<h2>Moray y las Salineras de Maras</h2>
<h3>Moray: el laboratorio agrícola inca</h3>
<p>Los <strong>círculos concéntricos de Moray</strong> son uno de los sitios más enigmáticos del Perú precolombino. Se cree que los Incas usaban estos anillos descendentes (con diferencias de temperatura de hasta 15°C entre el nivel superior e inferior) como laboratorio para experimentar con distintas variedades de cultivos. La vista desde arriba es hipnótica.</p>
<h3>Salineras de Maras</h3>
<p>A pocos kilómetros de Moray, más de <strong>3,000 pozas de sal</strong> escalonadas en la ladera de la montaña conforman uno de los paisajes más fotogénicos de los Andes. La sal se extrae aquí desde la época inca usando agua salada que mana de un manantial subterráneo. Las comunidades locales continúan con la tradición ancestral.</p>
<h2>Ollantaytambo: La Ciudad Inca Viva</h2>
<p><strong>Ollantaytambo</strong> es el sitio arqueológico más impresionante del Valle Sagrado y el único pueblo del Perú donde la trama urbana inca original sigue habitada. Su fortaleza, construida sobre un peñón de roca, guarda los bloques de piedra más grandes de la arquitectura inca. El pueblo mismo, con sus callejones de agua corriente y sus canchas (bloques residenciales incas), es un museo viviente. Ollantaytambo es también la estación de tren más habitual para el Camino Inca y los trenes a Machu Picchu.</p>
<h2>Cómo Organizar un Día en el Valle Sagrado</h2>
<ul>
<li><strong>Tour privado desde Cusco:</strong> la opción más cómoda y flexible, con guía incluido</li>
<li><strong>Tour grupal:</strong> más económico, ideal para mochileros; los buses colectivos salen de Cusco desde primera hora</li>
<li><strong>En coche propio o alquilado:</strong> te da libertad para parar en miradores y pueblos menores</li>
</ul>
<p>Un día completo bien aprovechado cubre Pisac (mañana), Maras y Moray (mediodía) y Ollantaytambo (tarde). Muchos viajeros optan por pernoctar en Ollantaytambo y tomar el tren a Machu Picchu al día siguiente.</p>
<h2>Explora el Valle Sagrado con Pacha Mama Spirit</h2>
<p>En <strong>Pacha Mama Spirit</strong> operamos excursiones al Valle Sagrado con guías especializados en historia inca, acceso a comunidades locales fuera de los circuitos turísticos masivos y almuerzo típico incluido.</p>
<p><a href="/tours">Descubre nuestros tours al Valle Sagrado</a> y vive el Perú auténtico.</p>';

        $en6 = '<p>The <strong>Sacred Valley of the Incas</strong>, or Urubamba Valley, is one of Peru\'s most underrated treasures. Just 30 kilometers from Cusco, this fertile Andean valley was the agricultural and spiritual heart of the Inca Empire, and today it offers a perfect blend of ruins, landscapes, craft markets, and living culture that few destinations in the world can match.</p>
<h2>Why the Sacred Valley is a Must-See</h2>
<p>Located between Pisac and Ollantaytambo, the Sacred Valley sits at a lower altitude than Cusco (between 2,700 and 2,900 m), making it an excellent option for the first days of acclimatization. The Urubamba River irrigates fields of corn, potato, and quinoa that farmers cultivate using the same techniques as their Inca ancestors. The snow-capped mountains flanking the valley add a postcard-perfect backdrop.</p>
<h2>Pisac: Market and Fortress</h2>
<p>The town of <strong>Pisac</strong> is the gateway to the Sacred Valley. Its artisan market (especially busy on Sundays) is one of the most colorful and authentic in the Andes: textiles, ceramics, silver jewelry, and local produce. Above the town, the <strong>Pisac Inca ruins</strong> dominate the valley from above with agricultural terraces, an astronomical complex, and some of the largest Inca tombs ever discovered.</p>
<h2>Moray and the Maras Salt Mines</h2>
<h3>Moray: the Inca agricultural laboratory</h3>
<p>The <strong>concentric circles of Moray</strong> are one of the most enigmatic sites in pre-Columbian Peru. Scholars believe the Incas used these descending rings (with temperature differences of up to 15°C between the top and bottom levels) as a laboratory to experiment with different crop varieties. The view from above is hypnotic.</p>
<h3>Maras Salt Mines</h3>
<p>Just a few kilometers from Moray, more than <strong>3,000 salt pools</strong> terraced into the mountainside form one of the most photogenic landscapes in the Andes. Salt has been extracted here since Inca times using salty water that springs from an underground source. Local communities continue the ancestral tradition.</p>
<h2>Ollantaytambo: The Living Inca City</h2>
<p><strong>Ollantaytambo</strong> is the most impressive archaeological site in the Sacred Valley and the only town in Peru where the original Inca urban layout is still inhabited. Its fortress, built on a rock outcrop, holds the largest stone blocks in Inca architecture. The town itself, with its running-water alleyways and canchas (Inca residential blocks), is a living museum. Ollantaytambo is also the most common train station for the Inca Trail and trains to Machu Picchu.</p>
<h2>How to Plan a Day in the Sacred Valley</h2>
<ul>
<li><strong>Private tour from Cusco:</strong> the most comfortable and flexible option, with guide included</li>
<li><strong>Group tour:</strong> more affordable, ideal for backpackers; collective buses depart from Cusco from early morning</li>
<li><strong>Own or rented car:</strong> gives you freedom to stop at viewpoints and smaller villages</li>
</ul>
<p>A well-planned full day covers Pisac (morning), Maras and Moray (midday) and Ollantaytambo (afternoon). Many travelers choose to overnight in Ollantaytambo and take the train to Machu Picchu the next morning.</p>
<h2>Explore the Sacred Valley with Pacha Mama Spirit</h2>
<p>At <strong>Pacha Mama Spirit</strong> we operate Sacred Valley excursions with guides specializing in Inca history, access to local communities off the mass tourist circuit, and a typical lunch included.</p>
<p><a href="/en/tours">Discover our Sacred Valley tours</a> and experience authentic Peru.</p>';

        // ─────────────────────────────────────────────
        // BLOG 7 – Salkantay Trek 2026
        // ─────────────────────────────────────────────
        $es7 = '<p>El <strong>Salkantay Trek</strong> es la alternativa al Camino Inca que ha conquistado los corazones de miles de viajeros que buscan mayor desafío, más naturaleza y la posibilidad de llegar a Machu Picchu sin depender de los limitados permisos del Camino Inca. En 2026, es considerada por muchos la ruta de trekking más bella de todo el Perú.</p>
<h2>¿Qué es el Salkantay Trek?</h2>
<p>El Salkantay Trek es una ruta de trekking de <strong>5 días / 4 noches</strong> (o 4 días en versión intensiva) que parte desde Mollepata o Soraypampa, cerca de Cusco, y llega a Machu Picchu atravesando el imponente Nevado Salkantay (6,271 m), la montaña sagrada de los Incas. El punto más alto de la ruta es el <strong>Paso Salkantay a 4,650 m</strong>, desde donde las vistas del glaciar son absolutamente sobrecogedoras.</p>
<h2>Por Qué el Salkantay Trek es Mejor que el Camino Inca para Muchos Viajeros</h2>
<ul>
<li><strong>Sin permisos limitados:</strong> no hay restricción de plazas como en el Camino Inca</li>
<li><strong>Más variedad de paisajes:</strong> desde nevados a 4,600 m hasta selva tropical a 1,500 m</li>
<li><strong>Más económico:</strong> generalmente un 30-40% más barato que el Camino Inca</li>
<li><strong>Menos masificado:</strong> aunque ha crecido en popularidad, aún ofrece tramos de auténtica soledad</li>
<li><strong>La Laguna Humantay:</strong> una de las joyas más fotogénicas de los Andes está justo en el primer día de la ruta</li>
</ul>
<h2>Itinerario del Salkantay Trek 5 días</h2>
<h3>Día 1 – Cusco a Soraypampa + Laguna Humantay</h3>
<p>Salida en bus desde Cusco a las 4:00 am hacia Mollepata y luego Soraypampa (3,900 m). Caminata de 2 horas hasta la espectacular <strong>Laguna Humantay</strong> (4,200 m), con el Nevado Salkantay de fondo. Primera noche en campamento o lodge en Soraypampa.</p>
<h3>Día 2 – El Paso Salkantay (4,650 m)</h3>
<p>El día más exigente y más épico. Subes al Paso Salkantay con el glaciar del Salkantay omnipresente a tu izquierda. En el paso, el silencio y la inmensidad del paisaje andino producen una experiencia casi mística. El descenso hacia el Valle de Humantay es brutal pero gratificante.</p>
<h3>Día 3 – Del Frío a la Selva</h3>
<p>Desciendes desde el ecosistema altoandino hasta la zona de ceja de selva, donde la vegetación se vuelve exuberante. Cascadas, orquídeas y el calor subtropical reemplazan al frío glaciar. Llegas al pueblo de La Playa o Lucmabamba.</p>
<h3>Día 4 – Santa Teresa y Aguas Calientes</h3>
<p>Opcional: zipline en Santa Teresa. Después, tomas el tren local o caminas hasta Aguas Calientes, el pueblo base de Machu Picchu. Noche en Aguas Calientes.</p>
<h3>Día 5 – Machu Picchu</h3>
<p>El final épico: la Ciudadela Inca de Machu Picchu recompensa todos los esfuerzos de los días anteriores. La entrada a Machu Picchu está incluida en la mayoría de tours del Salkantay.</p>
<h2>¿Cuánto Cuesta el Salkantay Trek en 2026?</h2>
<ul>
<li><strong>Tour organizado 5 días (camping):</strong> desde $350 USD</li>
<li><strong>Tour organizado 5 días (lodges/glamping):</strong> desde $550 USD</li>
<li><strong>Precio incluye:</strong> transporte, guía, porteadores, comidas, campamentos/lodges, entrada a Machu Picchu</li>
</ul>
<h2>Reserva tu Salkantay Trek con Pacha Mama Spirit</h2>
<p>En <strong>Pacha Mama Spirit</strong> operamos el Salkantay Trek con grupos pequeños, equipamiento de calidad, cocina de altura excepcional y guías que conocen cada rincón de la montaña sagrada.</p>
<p><a href="/tours">Reserva tu Salkantay Trek 2026</a> y vive la aventura definitiva en los Andes peruanos.</p>';

        $en7 = '<p>The <strong>Salkantay Trek</strong> is the alternative to the Inca Trail that has captured the hearts of thousands of travelers seeking a greater challenge, more nature, and the possibility of reaching Machu Picchu without depending on the limited Inca Trail permits. In 2026, many consider it the most beautiful trekking route in all of Peru.</p>
<h2>What is the Salkantay Trek?</h2>
<p>The Salkantay Trek is a <strong>5-day / 4-night</strong> trekking route (or 4 days in intensive version) that starts from Mollepata or Soraypampa, near Cusco, and arrives at Machu Picchu by crossing the imposing Salkantay Peak (6,271 m), the sacred mountain of the Incas. The highest point of the route is the <strong>Salkantay Pass at 4,650 m</strong>, where glacier views are absolutely breathtaking.</p>
<h2>Why the Salkantay Trek is Better than the Inca Trail for Many Travelers</h2>
<ul>
<li><strong>No limited permits:</strong> no quota restrictions unlike the Inca Trail</li>
<li><strong>Greater variety of landscapes:</strong> from snowfields at 4,600 m to tropical jungle at 1,500 m</li>
<li><strong>More affordable:</strong> generally 30-40% cheaper than the Inca Trail</li>
<li><strong>Less crowded:</strong> although grown in popularity, it still offers stretches of genuine solitude</li>
<li><strong>Humantay Lake:</strong> one of the most photogenic jewels of the Andes sits right on the first day of the route</li>
</ul>
<h2>Salkantay Trek 5-Day Itinerary</h2>
<h3>Day 1 – Cusco to Soraypampa + Humantay Lake</h3>
<p>Bus departure from Cusco at 4:00 am toward Mollepata, then Soraypampa (3,900 m). A 2-hour hike to the spectacular <strong>Humantay Lake</strong> (4,200 m), with the Salkantay Peak as backdrop. First night at campsite or lodge in Soraypampa.</p>
<h3>Day 2 – The Salkantay Pass (4,650 m)</h3>
<p>The most demanding and most epic day. You ascend to the Salkantay Pass with the Salkantay glacier omnipresent to your left. At the pass, the silence and immensity of the Andean landscape produces an almost mystical experience. The descent toward the Humantay Valley is brutal but deeply rewarding.</p>
<h3>Day 3 – From Cold to Jungle</h3>
<p>You descend from the high Andean ecosystem to the cloud forest transition zone, where the vegetation becomes lush. Waterfalls, orchids, and subtropical warmth replace the glacial cold. You arrive at the village of La Playa or Lucmabamba.</p>
<h3>Day 4 – Santa Teresa and Aguas Calientes</h3>
<p>Optional: zipline in Santa Teresa. Afterwards, take the local train or walk to Aguas Calientes, the base town of Machu Picchu. Night in Aguas Calientes.</p>
<h3>Day 5 – Machu Picchu</h3>
<p>The epic finale: the Inca Citadel of Machu Picchu rewards all the efforts of the previous days. Machu Picchu entry is included in most Salkantay tour packages.</p>
<h2>How Much Does the Salkantay Trek Cost in 2026?</h2>
<ul>
<li><strong>Organized 5-day tour (camping):</strong> from $350 USD</li>
<li><strong>Organized 5-day tour (lodges/glamping):</strong> from $550 USD</li>
<li><strong>Price includes:</strong> transport, guide, porters, meals, campsites/lodges, Machu Picchu entry</li>
</ul>
<h2>Book Your Salkantay Trek with Pacha Mama Spirit</h2>
<p>At <strong>Pacha Mama Spirit</strong> we operate the Salkantay Trek with small groups, quality equipment, exceptional mountain cuisine, and guides who know every corner of the sacred mountain.</p>
<p><a href="/en/tours">Book your Salkantay Trek 2026</a> and live the ultimate adventure in the Peruvian Andes.</p>';

        // ─────────────────────────────────────────────
        // BLOG 8 – Mejor época para viajar a Perú
        // ─────────────────────────────────────────────
        $es8 = '<p>Perú es uno de los países con mayor diversidad climática del mundo: desde la costa desértica de Lima hasta la selva amazónica de Madre de Dios, pasando por el altiplano andino de Puno y las montañas de Cusco. Conocer la climatología de cada región antes de tu viaje puede marcar la diferencia entre un viaje perfecto y uno lleno de imprevistos. Esta guía te dice cuándo viajar a Perú según tus destinos y preferencias.</p>
<h2>Las Dos Estaciones del Perú Andino</h2>
<p>En la sierra peruana (Cusco, Puno, Arequipa, Huaraz) el clima se divide en dos estaciones claramente definidas:</p>
<h3>Temporada Seca (abril – octubre)</h3>
<p>Es la <strong>mejor época para visitar el Perú andino</strong>. Los días son soleados y despejados, perfectos para hacer trekking, visitar ruinas y fotografiar paisajes. Las noches pueden ser muy frías (bajo cero en las alturas). Es la temporada alta del turismo, así que los precios son más altos y debes reservar con anticipación.</p>
<h3>Temporada de Lluvias (noviembre – marzo)</h3>
<p>Las tardes traen lluvia casi a diario en la sierra. Aunque el paisaje es más verde y exuberante, algunos caminos de trekking se vuelven resbaladizos o se cierran (el Camino Inca cierra en febrero por mantenimiento). Los precios de hoteles y tours bajan considerablemente y hay menos turistas: ideal si buscas experiencias más auténticas.</p>
<h2>Mes a Mes: Cuándo es Mejor Viajar a Perú</h2>
<ul>
<li><strong>Enero–febrero:</strong> plena temporada de lluvias en la sierra; ideal para la costa y Lima. Febrero: cierre del Camino Inca.</li>
<li><strong>Marzo–abril:</strong> fin de la temporada de lluvias; los paisajes son espectacularmente verdes y hay menos turistas.</li>
<li><strong>Mayo–junio:</strong> excelente combinación: tiempo seco, paisajes verdes aún y menor masificación que julio–agosto. <strong>24 de junio: Inti Raymi en Cusco.</strong></li>
<li><strong>Julio–agosto:</strong> pico máximo del turismo. Clima excelente pero mayor afluencia y precios más altos. Reservar con meses de antelación.</li>
<li><strong>Septiembre–octubre:</strong> temporada ideal con buen tiempo, menos turistas y precios moderados.</li>
<li><strong>Noviembre–diciembre:</strong> inicio de lluvias; bueno para la selva amazónica. Inicio de la temporada baja.</li>
</ul>
<h2>Clima por Región</h2>
<h3>Cusco y Machu Picchu</h3>
<p>La mejor época: mayo a octubre. En julio la temperatura máxima ronda los 19°C y la mínima baja a 1°C en la madrugada. Machu Picchu, al estar en una zona más baja y húmeda, puede tener lloviznas incluso en temporada seca.</p>
<h3>Lima y la Costa</h3>
<p>Lima tiene un microclima especial: nublado y húmedo en invierno (junio–octubre) con la llamada "garúa", y soleado y cálido en verano (diciembre–abril, 25–30°C). Las mejores playas se disfrutan de enero a marzo.</p>
<h3>La Amazonia Peruana</h3>
<p>La selva tiene lluvia durante todo el año, pero la temporada seca (mayo–octubre) facilita el acceso a lodges y la observación de fauna silvestre. En temporada lluviosa, los ríos crecen y se puede navegar por lugares inaccesibles en otras épocas.</p>
<h3>Arequipa y el Cañón del Colca</h3>
<p>Arequipa tiene 300 días de sol al año. La mejor época para el Cañón del Colca es mayo a noviembre para ver los cóndores en vuelo. En temporada de lluvias (diciembre–marzo) el riesgo de deslizamientos puede cerrar algunas rutas.</p>
<h2>Festividades que Vale la Pena Coincidir</h2>
<ul>
<li><strong>Inti Raymi:</strong> 24 de junio en Cusco (Fiesta del Sol)</li>
<li><strong>Virgen del Carmen:</strong> 16 de julio en Paucartambo</li>
<li><strong>Fiestas Patrias:</strong> 28 y 29 de julio en todo el país</li>
<li><strong>Señor de los Milagros:</strong> octubre en Lima</li>
<li><strong>Semana Santa:</strong> en Cusco, una de las más impresionantes de América</li>
</ul>
<h2>Planifica tu Viaje Ideal con Pacha Mama Spirit</h2>
<p>En <strong>Pacha Mama Spirit</strong> diseñamos itinerarios personalizados adaptados a la época del año, tus intereses y tu presupuesto. Llevamos más de 10 años ayudando a viajeros de todo el mundo a descubrir Perú de la mejor manera posible.</p>
<p><a href="/tours">Consulta nuestros paquetes por temporada</a> y empieza a planificar el viaje de tu vida.</p>';

        $en8 = '<p>Peru is one of the most climatically diverse countries in the world: from the desert coast of Lima to the Amazon jungle of Madre de Dios, through the Andean plateau of Puno and the mountains of Cusco. Understanding the climate of each region before your trip can make the difference between a perfect journey and one full of surprises. This guide tells you when to visit Peru based on your destinations and preferences.</p>
<h2>The Two Seasons of Andean Peru</h2>
<p>In the Peruvian highlands (Cusco, Puno, Arequipa, Huaraz) the climate divides into two clearly defined seasons:</p>
<h3>Dry Season (April – October)</h3>
<p>This is the <strong>best time to visit Andean Peru</strong>. Days are sunny and clear, perfect for trekking, visiting ruins, and photographing landscapes. Nights can be very cold (below zero at high altitudes). It is peak tourist season, so prices are higher and booking in advance is essential.</p>
<h3>Rainy Season (November – March)</h3>
<p>Afternoons bring rain almost daily in the highlands. Although the landscape is greener and more lush, some trekking trails become slippery or close (the Inca Trail closes in February for maintenance). Hotel and tour prices drop significantly and there are fewer tourists — ideal if you seek more authentic experiences.</p>
<h2>Month by Month: When is the Best Time to Visit Peru?</h2>
<ul>
<li><strong>January–February:</strong> full rainy season in the highlands; ideal for the coast and Lima. February: Inca Trail closed.</li>
<li><strong>March–April:</strong> end of rainy season; landscapes are spectacularly green with fewer tourists.</li>
<li><strong>May–June:</strong> excellent combination — dry weather, still-green landscapes, and less crowding than July–August. <strong>June 24: Inti Raymi in Cusco.</strong></li>
<li><strong>July–August:</strong> peak tourism. Excellent weather but higher crowds and prices. Book months ahead.</li>
<li><strong>September–October:</strong> ideal season with good weather, fewer tourists, and moderate prices.</li>
<li><strong>November–December:</strong> start of rains; good for the Amazon jungle. Beginning of low season.</li>
</ul>
<h2>Climate by Region</h2>
<h3>Cusco and Machu Picchu</h3>
<p>Best time: May to October. In July, maximum temperatures are around 19°C and minimums drop to 1°C at night. Machu Picchu, being in a lower and more humid zone, can have drizzle even in dry season.</p>
<h3>Lima and the Coast</h3>
<p>Lima has a special microclimate: overcast and humid in winter (June–October) with the famous "garúa" sea mist, and sunny and warm in summer (December–April, 25–30°C). The best beaches are enjoyed from January to March.</p>
<h3>The Peruvian Amazon</h3>
<p>The jungle has rain year-round, but the dry season (May–October) makes access to lodges easier and wildlife watching better. In rainy season, rivers rise and you can navigate places inaccessible at other times.</p>
<h3>Arequipa and Colca Canyon</h3>
<p>Arequipa has 300 sunny days per year. The best time for Colca Canyon is May to November to see condors in flight. In rainy season (December–March), landslide risk may close some routes.</p>
<h2>Festivals Worth Timing Your Visit Around</h2>
<ul>
<li><strong>Inti Raymi:</strong> June 24 in Cusco (Festival of the Sun)</li>
<li><strong>Virgen del Carmen:</strong> July 16 in Paucartambo</li>
<li><strong>Fiestas Patrias:</strong> July 28–29 throughout the country</li>
<li><strong>Señor de los Milagros:</strong> October in Lima</li>
<li><strong>Semana Santa:</strong> in Cusco, one of the most impressive in the Americas</li>
</ul>
<h2>Plan Your Ideal Trip with Pacha Mama Spirit</h2>
<p>At <strong>Pacha Mama Spirit</strong> we design personalized itineraries tailored to the time of year, your interests, and your budget. We have over 10 years of experience helping travelers from around the world discover Peru in the best way possible.</p>
<p><a href="/en/tours">Check our seasonal packages</a> and start planning the trip of your life.</p>';

        // ─────────────────────────────────────────────
        // BLOG 9 – Lago Titicaca
        // ─────────────────────────────────────────────
        $es9 = '<p>El <strong>Lago Titicaca</strong> es el lago navegable más alto del mundo (3,812 metros sobre el nivel del mar) y uno de los destinos más evocadores y espirituales de toda Sudamérica. Compartido entre Perú y Bolivia, sus aguas de un azul profundo, sus islas flotantes de totora y sus comunidades quechuas y aymaras preservan una cultura milenaria que sobrevive en estado casi puro. Visitarlo es una de las experiencias más memorables que Perú tiene para ofrecer.</p>
<h2>Las Islas Flotantes de los Uros</h2>
<p>Las <strong>Islas Flotantes de los Uros</strong> son el símbolo más reconocible del Lago Titicaca. Construidas totalmente con juncos de totora, estas islas artificiales son hogar de la comunidad Uro, uno de los pueblos más antiguos de los Andes, que eligió vivir sobre el agua para protegerse de las invasiones. Las propias islas, las barcas, las viviendas y hasta los alimentos se elaboran con la planta de totora. Una visita guiada de 2-3 horas en barca desde el puerto de Puno te lleva a este mundo único.</p>
<h2>Isla Taquile: Arte y Tranquilidad</h2>
<p>A 45 kilómetros del puerto de Puno, la <strong>Isla Taquile</strong> es una comunidad quechua cuya tradición textil fue declarada Patrimonio Cultural Inmaterial de la Humanidad por la UNESCO. Los hombres de Taquile hilan y tejen mientras caminan, y los tejidos que producen son considerados entre los más finos de los Andes. La isla, libre de coches y de hoteles de cadena, ofrece una paz y una autenticidad que es difícil encontrar en otros lugares del circuito turístico peruano.</p>
<h2>Isla Amantaní: Turismo Vivencial</h2>
<p>La <strong>Isla Amantaní</strong> es la mayor del Lago Titicaca en el lado peruano y ofrece una experiencia única: el turismo vivencial. Las familias locales hospedan a los viajeros en sus casas, los invitan a cocinar, a trabajar la tierra y a participar en sus festividades nocturnas vestidos con la ropa tradicional de la isla. Es la forma más auténtica de conectar con la cultura del Titicaca.</p>
<h2>Cómo Llegar al Lago Titicaca desde Cusco</h2>
<ul>
<li><strong>En bus:</strong> Cusco–Puno dura aproximadamente 7 horas (350 km). Hay buses cómodos con paradas en sitios arqueológicos en ruta (Ruta del Sol). Precio: desde $10–$25 USD</li>
<li><strong>En tren (PeruRail):</strong> el tren panorámico Cusco–Puno es una experiencia en sí misma (384 km en 10 horas, con paisajes de altiplano espectaculares). Precio: desde $100 USD</li>
<li><strong>En avión:</strong> vuelos Lima–Juliaca (aeropuerto más cercano a Puno), con conexión desde Lima. Tiempo: 1.5 horas desde Lima</li>
</ul>
<h2>Qué Incluye un Tour al Lago Titicaca</h2>
<p>Los tours estándar desde Puno incluyen:</p>
<ul>
<li>Visita a las Islas Flotantes de los Uros (2–3 horas)</li>
<li>Visita a Taquile o Amantaní (con o sin noche vivencial)</li>
<li>Guía bilingüe certificado</li>
<li>Barca con motor</li>
<li>Almuerzo típico en la isla</li>
</ul>
<h2>Consejos para Visitar el Lago Titicaca</h2>
<ul>
<li>Llega al menos un día antes del tour para aclimatarte: Puno está a 3,827 m</li>
<li>El clima puede ser intenso: lleva protector solar, gorra y ropa abrigada</li>
<li>Si haces la noche vivencial en Amantaní, lleva efectivo en soles para las familias</li>
<li>La mejor época para visitar es mayo–octubre (temporada seca)</li>
</ul>
<h2>Reserva tu Tour al Lago Titicaca con Pacha Mama Spirit</h2>
<p>En <strong>Pacha Mama Spirit</strong> organizamos tours al Lago Titicaca desde Cusco y desde Puno, con opciones de día completo y de dos días con noche vivencial en Amantaní. Una experiencia que cambia la perspectiva.</p>
<p><a href="/tours">Explora nuestros tours al Lago Titicaca</a> y conecta con el alma de los Andes.</p>';

        $en9 = '<p><strong>Lake Titicaca</strong> is the world\'s highest navigable lake (3,812 meters above sea level) and one of the most evocative and spiritual destinations in all of South America. Shared between Peru and Bolivia, its deep blue waters, totora reed floating islands, and Quechua and Aymara communities preserve an ancient culture that survives in an almost pure state. Visiting it is one of the most memorable experiences Peru has to offer.</p>
<h2>The Uros Floating Islands</h2>
<p>The <strong>Uros Floating Islands</strong> are the most recognizable symbol of Lake Titicaca. Built entirely from totora reeds, these artificial islands are home to the Uro community, one of the oldest peoples of the Andes, who chose to live on water to protect themselves from invasions. The islands themselves, the boats, the houses, and even some foods are made from the totora plant. A 2-3 hour guided boat trip from the port of Puno takes you to this unique world.</p>
<h2>Taquile Island: Art and Tranquility</h2>
<p>45 kilometers from the port of Puno, <strong>Taquile Island</strong> is a Quechua community whose textile tradition was declared an Intangible Cultural Heritage of Humanity by UNESCO. Taquile men spin and weave as they walk, and the textiles they produce are considered among the finest in the Andes. The island, free of cars and chain hotels, offers a peace and authenticity that is hard to find elsewhere on the Peruvian tourist circuit.</p>
<h2>Amantaní Island: Immersive Tourism</h2>
<p><strong>Amantaní Island</strong> is the largest on the Peruvian side of Lake Titicaca and offers a unique experience: immersive community tourism. Local families host travelers in their homes, invite them to cook, work the land, and participate in their evening festivities dressed in traditional island clothing. It is the most authentic way to connect with Titicaca culture.</p>
<h2>How to Get to Lake Titicaca from Cusco</h2>
<ul>
<li><strong>By bus:</strong> Cusco–Puno takes approximately 7 hours (350 km). Comfortable buses with stops at archaeological sites en route (Ruta del Sol). Price: from $10–$25 USD</li>
<li><strong>By train (PeruRail):</strong> the panoramic Cusco–Puno train is an experience in itself (384 km in 10 hours, with spectacular altiplano scenery). Price: from $100 USD</li>
<li><strong>By plane:</strong> Lima–Juliaca flights (closest airport to Puno), with connection from Lima. Time: 1.5 hours from Lima</li>
</ul>
<h2>What a Lake Titicaca Tour Includes</h2>
<p>Standard tours from Puno include:</p>
<ul>
<li>Visit to the Uros Floating Islands (2–3 hours)</li>
<li>Visit to Taquile or Amantaní (with or without overnight homestay)</li>
<li>Certified bilingual guide</li>
<li>Motor boat</li>
<li>Typical lunch on the island</li>
</ul>
<h2>Tips for Visiting Lake Titicaca</h2>
<ul>
<li>Arrive at least one day before the tour to acclimatize: Puno is at 3,827 m</li>
<li>The weather can be intense: bring sunscreen, a hat, and warm clothing</li>
<li>If doing the overnight homestay on Amantaní, bring cash in soles for the families</li>
<li>Best time to visit: May–October (dry season)</li>
</ul>
<h2>Book Your Lake Titicaca Tour with Pacha Mama Spirit</h2>
<p>At <strong>Pacha Mama Spirit</strong> we organize Lake Titicaca tours from Cusco and from Puno, with full-day and two-day options including an overnight homestay on Amantaní. An experience that changes your perspective.</p>
<p><a href="/en/tours">Explore our Lake Titicaca tours</a> and connect with the soul of the Andes.</p>';

        // ─────────────────────────────────────────────
        // BLOG 10 – Cañón del Colca
        // ─────────────────────────────────────────────
        $es10 = '<p>El <strong>Cañón del Colca</strong> es el segundo cañón más profundo del mundo (más de 3,400 metros en sus puntos más profundos, casi el doble que el Gran Cañón del Colorado) y uno de los destinos más espectaculares del Perú. A pocos kilómetros de Arequipa, la Ciudad Blanca, el Colca combina paisajes de altiplano sobrecogedores, pueblos coloniales de iglesias barrocas y la posibilidad de ver en libertad al <strong>cóndor andino</strong>, el ave voladora más grande del mundo.</p>
<h2>El Mirador Cruz del Cóndor</h2>
<p>El <strong>Mirador Cruz del Cóndor</strong> es el punto más famoso y visitado del Cañón del Colca. Situado a unos 1,200 metros sobre el fondo del cañón, es el lugar donde cada mañana (entre las 8:00 y las 10:00 am) los <strong>cóndores andinos</strong> aprovechan las corrientes térmicas para planar majestuosamente a escasos metros de los visitantes. Ver un cóndor volar tan de cerca, con sus casi 3 metros de envergadura, es una de esas experiencias que se graban en la memoria para siempre.</p>
<h2>Los Pueblos del Valle del Colca</h2>
<p>El camino hacia el cañón atraviesa una serie de pueblos coloniales que conservan iglesias del siglo XVII, tradiciones prehispánicas y la famosa vestimenta tradicional con sus bordados y sombreros blancos característicos:</p>
<ul>
<li><strong>Chivay:</strong> la capital del valle, con mercado local y termas naturales (La Calera)</li>
<li><strong>Yanque:</strong> iglesia barroca espectacular y comunidades que mantienen las danzas tradicionales</li>
<li><strong>Maca:</strong> uno de los pueblos más pintorescos, con andenes incas en activo</li>
<li><strong>Cabanaconde:</strong> punto de partida para los trekkings más profundos al fondo del cañón</li>
</ul>
<h2>Las Termas de La Calera</h2>
<p>Tras un día de trekking o de sightseeing, nada mejor que sumergirse en las <strong>aguas termales de La Calera</strong>, a 4 km de Chivay. Con temperaturas entre 35°C y 40°C, estas termas naturales en medio del altiplano son el antídoto perfecto para el cansancio y el frío de la altura.</p>
<h2>Trekking en el Cañón del Colca</h2>
<p>Para los viajeros más aventureros, el Colca ofrece rutas de trekking de 1 a 3 días que bajan al fondo del cañón hasta el oasis de Sangalle, donde hay palmeras y hasta una pequeña piscina natural. El ascenso de regreso es uno de los más exigentes de la región (1,200 metros de desnivel positivo), pero la recompensa visual lo vale todo.</p>
<h2>Cómo Llegar al Cañón del Colca desde Arequipa</h2>
<ul>
<li><strong>En tour organizado (2 días / 1 noche):</strong> la opción más popular, con salida desde Arequipa, noche en Chivay y visita al mirador del cóndor a la mañana siguiente. Precio: desde $50 USD</li>
<li><strong>En bus público:</strong> buses diarios desde el terminal de Arequipa a Chivay (3.5 horas, $5 USD)</li>
<li><strong>En coche alquilado:</strong> la opción más flexible para parar en miradores y pueblos a tu ritmo</li>
</ul>
<h2>Mejor Época para Visitar el Cañón del Colca</h2>
<p>La mejor época es <strong>mayo a noviembre</strong> (temporada seca), con cielos despejados y máxima probabilidad de ver los cóndores. En temporada de lluvias (diciembre–marzo) el riesgo de deslizamientos puede cerrar la carretera del cañón.</p>
<h2>Reserva tu Tour al Cañón del Colca con Pacha Mama Spirit</h2>
<p>En <strong>Pacha Mama Spirit</strong> organizamos tours al Cañón del Colca desde Arequipa con guías expertos en ornitología y flora andina, termas incluidas y el mejor mirador del cóndor garantizado.</p>
<p><a href="/tours">Reserva tu tour al Cañón del Colca</a> y prepárate para quedarte sin palabras.</p>';

        $en10 = '<p>The <strong>Colca Canyon</strong> is the second deepest canyon in the world (over 3,400 meters at its deepest points, nearly twice as deep as the Grand Canyon) and one of Peru\'s most spectacular destinations. Just a short drive from Arequipa, the White City, the Colca combines breathtaking altiplano scenery, colonial villages with baroque churches, and the chance to see the <strong>Andean condor</strong> — the world\'s largest flying bird — soaring in the wild.</p>
<h2>The Cruz del Cóndor Viewpoint</h2>
<p>The <strong>Cruz del Cóndor viewpoint</strong> is the most famous and visited spot in the Colca Canyon. Located about 1,200 meters above the canyon floor, it is where every morning (between 8:00 and 10:00 am) <strong>Andean condors</strong> use thermal currents to soar majestically just meters from visitors. Seeing a condor fly so close, with its nearly 3-meter wingspan, is one of those experiences that stays with you forever.</p>
<h2>The Villages of the Colca Valley</h2>
<p>The road to the canyon passes through a series of colonial villages that preserve 17th-century churches, pre-Hispanic traditions, and the famous traditional dress with its characteristic embroidery and white hats:</p>
<ul>
<li><strong>Chivay:</strong> the valley capital, with a local market and natural hot springs (La Calera)</li>
<li><strong>Yanque:</strong> spectacular baroque church and communities that maintain traditional dances</li>
<li><strong>Maca:</strong> one of the most picturesque villages, with active Inca terraces</li>
<li><strong>Cabanaconde:</strong> starting point for the deepest treks to the canyon floor</li>
</ul>
<h2>The La Calera Hot Springs</h2>
<p>After a day of trekking or sightseeing, nothing beats soaking in the <strong>La Calera hot springs</strong>, 4 km from Chivay. With temperatures between 35°C and 40°C, these natural thermal pools in the middle of the altiplano are the perfect antidote for fatigue and the cold of the altitude.</p>
<h2>Trekking in Colca Canyon</h2>
<p>For more adventurous travelers, the Colca offers 1 to 3-day trekking routes that descend to the canyon floor and the Sangalle oasis, where there are palm trees and even a small natural pool. The return ascent is one of the most demanding in the region (1,200 meters of elevation gain), but the visual reward makes it all worthwhile.</p>
<h2>How to Get to Colca Canyon from Arequipa</h2>
<ul>
<li><strong>Organized tour (2 days / 1 night):</strong> the most popular option, departing from Arequipa, overnight in Chivay, and condor viewpoint visit the next morning. Price: from $50 USD</li>
<li><strong>Public bus:</strong> daily buses from Arequipa terminal to Chivay (3.5 hours, $5 USD)</li>
<li><strong>Rented car:</strong> the most flexible option to stop at viewpoints and villages at your own pace</li>
</ul>
<h2>Best Time to Visit Colca Canyon</h2>
<p>The best time is <strong>May to November</strong> (dry season), with clear skies and maximum probability of seeing condors. In rainy season (December–March), landslide risk may close the canyon road.</p>
<h2>Book Your Colca Canyon Tour with Pacha Mama Spirit</h2>
<p>At <strong>Pacha Mama Spirit</strong> we organize Colca Canyon tours from Arequipa with expert guides specializing in ornithology and Andean flora, hot springs included and the best condor viewpoint guaranteed.</p>
<p><a href="/en/tours">Book your Colca Canyon tour</a> and prepare to be left speechless.</p>';

        // ─────────────────────────────────────────────
        // DATOS COMPLETOS DE LOS 10 BLOGS
        // ─────────────────────────────────────────────
        $data = [
            [
                'es' => [
                    'nombre'       => 'Machu Picchu 2026: Guía Completa de Entradas, Precios y Consejos',
                    'descripcion'  => 'Todo para visitar Machu Picchu en 2026: precios de entradas, cómo llegar y los mejores consejos.',
                    'keywords'     => 'machu picchu 2026, entradas machu picchu 2026, como llegar a machu picchu, precio entrada machu picchu, visitar machu picchu',
                    'slug'         => 'guia-machu-picchu-2026',
                    'img'          => '/img/blog/ciudadela-machupicchu.webp',
                    'published_at' => '2026-01-10 08:00:00',
                    'tags'         => [2, 3, 13],
                    'cuerpo'       => $es1,
                ],
                'en' => [
                    'nombre'       => 'Machu Picchu 2026: Complete Guide to Tickets, Prices and Tips',
                    'descripcion'  => 'Everything you need to visit Machu Picchu in 2026: ticket prices, how to get there and the best tips.',
                    'keywords'     => 'machu picchu 2026, machu picchu tickets 2026, how to get to machu picchu, machu picchu entrance fee, visit machu picchu',
                    'slug'         => 'machu-picchu-guide-2026',
                    'img'          => '/img/blog/ciudadela-machupicchu.webp',
                    'published_at' => '2026-01-10 08:00:00',
                    'tags'         => [4, 9, 2],
                    'cuerpo'       => $en1,
                ],
            ],
            [
                'es' => [
                    'nombre'       => 'Camino Inca 2026: Precios, Permisos y Todo lo que Debes Saber',
                    'descripcion'  => 'Guía completa del Camino Inca 2026: precios de permisos, fechas y cómo reservar antes de que se agoten.',
                    'keywords'     => 'camino inca 2026, permiso camino inca, precio camino inca, reservar camino inca, trekking machu picchu',
                    'slug'         => 'camino-inca-2026-guia-completa',
                    'img'          => '/img/blog/camino-inca-hacia-machupicchu.webp',
                    'published_at' => '2026-01-24 08:00:00',
                    'tags'         => [2, 3, 13],
                    'cuerpo'       => $es2,
                ],
                'en' => [
                    'nombre'       => 'Inca Trail 2026: Permits, Prices and Everything You Need to Know',
                    'descripcion'  => 'Complete Inca Trail 2026 guide: permit prices, available dates, what is included and how to book your trek.',
                    'keywords'     => 'inca trail 2026, inca trail permit, inca trail price, book inca trail, inca trail trek machu picchu',
                    'slug'         => 'inca-trail-2026-complete-guide',
                    'img'          => '/img/blog/camino-inca-hacia-machupicchu.webp',
                    'published_at' => '2026-01-24 08:00:00',
                    'tags'         => [1, 2, 9],
                    'cuerpo'       => $en2,
                ],
            ],
            [
                'es' => [
                    'nombre'       => 'Qué Hacer en Cusco en 3 Días: Itinerario Perfecto 2026',
                    'descripcion'  => 'El itinerario definitivo para Cusco en 3 días: qué ver, dónde comer y los imprescindibles de la capital inca.',
                    'keywords'     => 'que hacer en cusco, itinerario cusco 3 dias, visitar cusco 2026, atracciones cusco, cusco peru turismo',
                    'slug'         => 'que-hacer-en-cusco-3-dias',
                    'img'          => '/img/blog/plaza-de-armas-cusco.webp',
                    'published_at' => '2026-02-07 08:00:00',
                    'tags'         => [2, 3, 13],
                    'cuerpo'       => $es3,
                ],
                'en' => [
                    'nombre'       => 'What to Do in Cusco in 3 Days: Perfect 2026 Itinerary',
                    'descripcion'  => 'The ultimate itinerary to visit Cusco in 3 days: what to see, where to eat and the must-sees of the Inca capital.',
                    'keywords'     => 'what to do in cusco, cusco 3 day itinerary, visit cusco 2026, cusco attractions, cusco peru tourism',
                    'slug'         => 'what-to-do-in-cusco-3-days',
                    'img'          => '/img/blog/plaza-de-armas-cusco.webp',
                    'published_at' => '2026-02-07 08:00:00',
                    'tags'         => [9, 4],
                    'cuerpo'       => $en3,
                ],
            ],
            [
                'es' => [
                    'nombre'       => 'Mal de Altura en Perú: Síntomas, Prevención y Remedios Efectivos',
                    'descripcion'  => 'Todo sobre el soroche en Perú: síntomas, cómo prevenirlo, remedios naturales y qué medicamentos tomar.',
                    'keywords'     => 'mal de altura peru, soroche cusco, sintomas mal de altura, prevenir mal de altura, remedios soroche',
                    'slug'         => 'mal-de-altura-soroche-peru',
                    'img'          => '/img/blog/soroche-mal-de-altura-peru.webp',
                    'published_at' => '2026-02-21 08:00:00',
                    'tags'         => [3, 13],
                    'cuerpo'       => $es4,
                ],
                'en' => [
                    'nombre'       => 'Altitude Sickness in Peru: Symptoms, Prevention and Remedies',
                    'descripcion'  => 'Everything about altitude sickness (soroche) in Peru: symptoms, how to prevent it and effective remedies.',
                    'keywords'     => 'altitude sickness peru, soroche cusco, altitude sickness symptoms, prevent altitude sickness, altitude sickness remedies cusco',
                    'slug'         => 'altitude-sickness-peru-guide',
                    'img'          => '/img/blog/soroche-mal-de-altura-peru.webp',
                    'published_at' => '2026-02-21 08:00:00',
                    'tags'         => [4],
                    'cuerpo'       => $en4,
                ],
            ],
            [
                'es' => [
                    'nombre'       => 'Montaña de 7 Colores (Vinicunca): Guía Completa 2026',
                    'descripcion'  => 'Todo para visitar la Montaña de Siete Colores en 2026: cómo llegar, precio de entrada y los mejores consejos.',
                    'keywords'     => 'montana de 7 colores, vinicunca cusco, rainbow mountain peru, como llegar vinicunca, precio montana 7 colores',
                    'slug'         => 'montana-7-colores-vinicunca-guia',
                    'img'          => '/img/blog/vinicunca.webp',
                    'published_at' => '2026-03-07 08:00:00',
                    'tags'         => [2, 3, 13],
                    'cuerpo'       => $es5,
                ],
                'en' => [
                    'nombre'       => 'Rainbow Mountain Peru (Vinicunca): Complete Guide 2026',
                    'descripcion'  => 'Everything to visit Rainbow Mountain in 2026: how to get there, entrance fee and the best tips.',
                    'keywords'     => 'rainbow mountain peru, vinicunca cusco, rainbow mountain 2026, how to get to rainbow mountain, vinicunca hike',
                    'slug'         => 'rainbow-mountain-vinicunca-guide',
                    'img'          => '/img/blog/vinicunca.webp',
                    'published_at' => '2026-03-07 08:00:00',
                    'tags'         => [1, 9, 4],
                    'cuerpo'       => $en5,
                ],
            ],
            [
                'es' => [
                    'nombre'       => 'Valle Sagrado de los Incas: Pisac, Ollantaytambo, Moray y Más',
                    'descripcion'  => 'Guía completa del Valle Sagrado: Pisac, Moray, Salineras de Maras, Ollantaytambo y cómo organizar tu visita.',
                    'keywords'     => 'valle sagrado de los incas, pisac cusco, ollantaytambo, salineras de maras, tour valle sagrado',
                    'slug'         => 'valle-sagrado-incas-guia-completa',
                    'img'          => '/img/blog/ollantaytambo.webp',
                    'published_at' => '2026-03-21 08:00:00',
                    'tags'         => [2, 3, 8],
                    'cuerpo'       => $es6,
                ],
                'en' => [
                    'nombre'       => 'Sacred Valley of the Incas: Pisac, Ollantaytambo, Moray and More',
                    'descripcion'  => 'Complete guide to the Sacred Valley: Pisac, Moray, Maras Salt Mines, Ollantaytambo and how to plan your visit.',
                    'keywords'     => 'sacred valley of the incas, pisac cusco, ollantaytambo, maras salt mines, sacred valley tour',
                    'slug'         => 'sacred-valley-incas-complete-guide',
                    'img'          => '/img/blog/ollantaytambo.webp',
                    'published_at' => '2026-03-21 08:00:00',
                    'tags'         => [8, 9, 4],
                    'cuerpo'       => $en6,
                ],
            ],
            [
                'es' => [
                    'nombre'       => 'Salkantay Trek 2026: La Mejor Alternativa al Camino Inca',
                    'descripcion'  => 'Descubre el Salkantay Trek 2026: ruta, precios, dificultad y por qué es la alternativa perfecta al Camino Inca.',
                    'keywords'     => 'salkantay trek 2026, camino salkantay, laguna humantay, trekking cusco alternativa, salkantay machu picchu',
                    'slug'         => 'salkantay-trek-2026-guia',
                    'img'          => '/img/blog/laguna-humantay.webp',
                    'published_at' => '2026-04-04 08:00:00',
                    'tags'         => [2, 3, 13],
                    'cuerpo'       => $es7,
                ],
                'en' => [
                    'nombre'       => 'Salkantay Trek 2026: The Best Alternative to the Inca Trail',
                    'descripcion'  => 'Discover the Salkantay Trek 2026: route, prices, difficulty and why it is the perfect Inca Trail alternative.',
                    'keywords'     => 'salkantay trek 2026, salkantay trail, humantay lake, cusco trekking alternative, salkantay machu picchu',
                    'slug'         => 'salkantay-trek-2026-guide',
                    'img'          => '/img/blog/laguna-humantay.webp',
                    'published_at' => '2026-04-04 08:00:00',
                    'tags'         => [1, 9, 4],
                    'cuerpo'       => $en7,
                ],
            ],
            [
                'es' => [
                    'nombre'       => 'Cuándo Viajar a Perú: La Mejor Época por Temporada y Región 2026',
                    'descripcion'  => 'Descubre cuál es la mejor época para viajar a Perú en 2026: temporada seca, lluviosa y festividades por región.',
                    'keywords'     => 'mejor epoca para viajar a peru, cuando viajar a peru 2026, temporada seca peru, clima cusco, mejor mes visitar peru',
                    'slug'         => 'mejor-epoca-viajar-peru-2026',
                    'img'          => '/img/blog/Travel-Peru-Pacha-mama.jpg',
                    'published_at' => '2026-04-18 08:00:00',
                    'tags'         => [3, 13],
                    'cuerpo'       => $es8,
                ],
                'en' => [
                    'nombre'       => 'Best Time to Visit Peru 2026: Season Guide by Region',
                    'descripcion'  => 'Discover the best time to visit Peru in 2026: dry season, rainy season and top festivals by region.',
                    'keywords'     => 'best time to visit peru, when to go to peru 2026, peru dry season, cusco weather, best month visit peru',
                    'slug'         => 'best-time-to-visit-peru-2026',
                    'img'          => '/img/blog/Travel-Peru-Pacha-mama.jpg',
                    'published_at' => '2026-04-18 08:00:00',
                    'tags'         => [4],
                    'cuerpo'       => $en8,
                ],
            ],
            [
                'es' => [
                    'nombre'       => 'Lago Titicaca: Islas Flotantes de los Uros, Taquile y Amantaní',
                    'descripcion'  => 'Guía completa del Lago Titicaca: islas Uros, Taquile, Amantaní, cómo llegar desde Cusco y qué ver en Puno.',
                    'keywords'     => 'lago titicaca, islas flotantes uros, isla taquile, isla amantani, lago titicaca puno turismo',
                    'slug'         => 'lago-titicaca-islas-flotantes-guia',
                    'img'          => '/img/blog/lago-titicaca-islas-uros.webp',
                    'published_at' => '2026-04-25 08:00:00',
                    'tags'         => [3, 7, 13],
                    'cuerpo'       => $es9,
                ],
                'en' => [
                    'nombre'       => 'Lake Titicaca: Uros Floating Islands, Taquile and Amantaní',
                    'descripcion'  => 'Complete Lake Titicaca guide: Uros floating islands, Taquile, Amantaní, how to get there from Cusco.',
                    'keywords'     => 'lake titicaca, uros floating islands, taquile island, amantani island, lake titicaca puno tourism',
                    'slug'         => 'lake-titicaca-floating-islands-guide',
                    'img'          => '/img/blog/lago-titicaca-islas-uros.webp',
                    'published_at' => '2026-04-25 08:00:00',
                    'tags'         => [4],
                    'cuerpo'       => $en9,
                ],
            ],
            [
                'es' => [
                    'nombre'       => 'Cañón del Colca y el Cóndor: Guía Completa desde Arequipa',
                    'descripcion'  => 'Todo para visitar el Cañón del Colca desde Arequipa: cóndores, pueblos coloniales, termas y consejos de viaje.',
                    'keywords'     => 'canon del colca, condor colca, mirador cruz del condor, arequipa canyon, tour canon del colca 2026',
                    'slug'         => 'canon-del-colca-arequipa-guia',
                    'img'          => '/img/blog/mirador-de-condor-arequipa-canon-del-colca.webp',
                    'published_at' => '2026-05-02 08:00:00',
                    'tags'         => [3, 6, 13],
                    'cuerpo'       => $es10,
                ],
                'en' => [
                    'nombre'       => 'Colca Canyon and Condor Watching: Complete Guide from Arequipa',
                    'descripcion'  => 'Everything to visit Colca Canyon from Arequipa: condor watching, colonial villages, hot springs and travel tips.',
                    'keywords'     => 'colca canyon arequipa, condor watching peru, cruz del condor viewpoint, arequipa canyon tour, colca canyon guide 2026',
                    'slug'         => 'colca-canyon-arequipa-complete-guide',
                    'img'          => '/img/blog/mirador-de-condor-arequipa-canon-del-colca.webp',
                    'published_at' => '2026-05-02 08:00:00',
                    'tags'         => [10, 4],
                    'cuerpo'       => $en10,
                ],
            ],
        ];

        // ─────────────────────────────────────────────
        // INSERCIÓN EN BASE DE DATOS
        // ─────────────────────────────────────────────
        foreach ($data as $pair) {
            $esData = $pair['es'];
            $enData = $pair['en'];

            if (DB::table('blogs')->where('slug', $esData['slug'])->exists()) {
                $this->command->line("  ⊘ Omitido (slug ES ya existe): {$esData['slug']}");

                continue;
            }

            if (DB::table('enblogs')->where('slug', $enData['slug'])->exists()) {
                $this->command->warn("  ⊘ Omitido (slug EN ya existe, sin crear par): {$enData['slug']}");

                continue;
            }

            $esTags = $esData['tags'];
            $enTags = $enData['tags'];
            unset($esData['tags'], $enData['tags']);

            // Insertar blog ES
            $esId = DB::table('blogs')->insertGetId([
                'nombre'       => $esData['nombre'],
                'descripcion'  => $esData['descripcion'],
                'cuerpo'       => $esData['cuerpo'],
                'img'          => $esData['img'],
                'keywords'     => $esData['keywords'],
                'slug'         => $esData['slug'],
                'published_at' => $esData['published_at'],
                'created_at'   => $esData['published_at'],
                'updated_at'   => $now,
            ]);

            // Tags ES
            foreach ($esTags as $tagId) {
                DB::table('blog_categoria')->insert([
                    'blog_id' => $esId,
                    'tag_id'  => $tagId,
                ]);
            }

            // Insertar blog EN vinculado al ES
            $enId = DB::table('enblogs')->insertGetId([
                'nombre'       => $enData['nombre'],
                'descripcion'  => $enData['descripcion'],
                'cuerpo'       => $enData['cuerpo'],
                'img'          => $enData['img'],
                'keywords'     => $enData['keywords'],
                'slug'         => $enData['slug'],
                'published_at' => $enData['published_at'],
                'blog_id'      => $esId,
                'created_at'   => $enData['published_at'],
                'updated_at'   => $now,
            ]);

            // Tags EN
            foreach ($enTags as $tagId) {
                DB::table('enblog_categoria')->insert([
                    'blog_id' => $enId,
                    'tag_id'  => $tagId,
                ]);
            }

            $this->command->line("  ✓ ES #{$esId} + EN #{$enId} — {$esData['nombre']}");
            $created++;
        }

        $this->command->info('');
        if ($created > 0) {
            $this->command->info("{$created} par(es) blog ES + EN insertados correctamente ({$created} × 2 artículos).");
            $this->command->warn('IMÁGENES PENDIENTES (agrega estas fotos a public/img/blog/):');
            $this->command->line('  → soroche-mal-de-altura-peru.webp  (Blog 4: Mal de Altura)');
            $this->command->line('  → lago-titicaca-islas-uros.webp    (Blog 9: Lago Titicaca)');
        } else {
            $this->command->info('Ningún par nuevo: los 10 slugs ES ya estaban en la base de datos (seeder idempotente).');
        }
    }
}
