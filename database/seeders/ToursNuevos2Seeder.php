<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ToursNuevos2Seeder extends Seeder
{
    public function run(): void
    {
        \Eloquent::unguard();

        $tours = [

            // ─── 1. CAMINO INCA CLÁSICO 4 DÍAS ────────────────────────────────────────
            [
                'es' => [
                    'nombre'     => 'Camino Inca a Machu Picchu - 4 Días 3 Noches',
                    'descripcion'=> 'El trekking más icónico de América. Recorre el Camino Inca original de Km 82 a Machu Picchu cruzando pasos de montaña, ruinas incas y bosques nublados.',
                    'contenido'  => '<h2>Camino Inca Clásico — La ruta sagrada de los Incas</h2><p>El Camino Inca (Qhapaq Ñan) es el sendero más famoso del mundo y la forma más auténtica de llegar a Machu Picchu. Con 43 km de distancia y un máximo de 4.215 metros en el Paso de la Mujer Muerta, esta ruta combina arqueología, naturaleza y aventura de manera incomparable. Solo se emiten 500 permisos diarios para toda la ruta, lo que garantiza una experiencia íntima y sin masificación.</p><p>En 4 días atravesarás cinco zonas climáticas diferentes, visitarás ruinas incas poco conocidas y terminarás entrando a Machu Picchu al amanecer por la Puerta del Sol.</p>',
                    'detallado'  => '<h3>Itinerario 4 días</h3><p><strong>Día 1 — Km 82 a Wayllabamba (3.000 m):</strong> Recojo a las 6:00 AM, traslado al punto de partida Km 82, cruce del río Urubamba, caminata por el valle de Cusichaca, almuerzo en Llactapata, llegada al campamento de Wayllabamba. Distancia: 16 km | Dificultad: Fácil.</p><p><strong>Día 2 — Wayllabamba a Pacaymayo (3.600 m):</strong> La etapa más exigente. Ascenso de 5 horas hasta el Paso de la Mujer Muerta (4.215 m), las mejores vistas de la ruta. Descenso al campamento de Pacaymayo. Distancia: 8 km | Dificultad: Difícil.</p><p><strong>Día 3 — Pacaymayo a Wiñay Wayna (2.600 m):</strong> Visita a las ruinas de Runkuraqay (3.800 m), Sayaqmarka y Phuyupatamarca. Espectacular descenso por escalinatas incas hasta Wiñay Wayna. Cena de despedida con los porteadores. Distancia: 16 km | Dificultad: Difícil.</p><p><strong>Día 4 — Wiñay Wayna a Machu Picchu:</strong> Madrugada a la Puerta del Sol (Intipunku) para ver el amanecer sobre Machu Picchu. Visita guiada de 2,5 horas a la ciudadela. Tarde libre. Tren de regreso a Ollantaytambo y bus a Cusco. Distancia: 5 km | Dificultad: Moderada.</p>',
                    'incluidos'  => '<ul><li>Transporte privado Cusco → Km 82 y retorno desde Ollantaytambo</li><li>Permiso oficial del Camino Inca y entrada a Machu Picchu</li><li>3 noches de camping (carpas dobles proporcionadas)</li><li>3 desayunos, 3 almuerzos y 3 cenas + té de media tarde</li><li>Guía bilingüe certificado (máx. 8 personas por guía)</li><li>Chef profesional de trekking</li><li>Porteadores (equipaje de grupo)</li><li>Kit de primeros auxilios y oxígeno de emergencia</li><li>Tren turístico Aguas Calientes → Ollantaytambo</li><li>Bus Ollantaytambo → Cusco</li></ul>',
                    'importante' => '<ul><li>Pasaporte original obligatorio en todos los controles</li><li>El nombre debe coincidir exactamente con el permiso</li><li>El Camino Inca cierra todo el mes de febrero</li><li>Reservar con mínimo 6 meses de anticipación en temporada alta</li><li>Llevar sleeping bag (no incluido) y ropa de abrigo</li><li>Máximo 16 personas por grupo</li></ul>',
                    'ubicacion'  => 'Cusco',
                    'precio'     => 775,
                    'dias'       => 4,
                    'img'        => 'img/panoramico/Inca-Trail-pacha-mama-Peru.webp',
                    'categoria'  => 'hikes,machupicchu',
                    'keywords'   => 'Camino Inca 4 dias, Inca Trail Peru, trek Machu Picchu, Km 82, Paso Mujer Muerta, senderismo cusco',
                    'slug'       => 'camino-inca-machu-picchu-4-dias-3-noches',
                    'clase'      => 'aventuras',
                ],
                'en' => [
                    'nombre'     => 'Classic Inca Trail to Machu Picchu - 4 Days 3 Nights',
                    'descripcion'=> 'The most iconic trek in the Americas. Walk the original Inca Trail from Km 82 to Machu Picchu, crossing mountain passes, Inca ruins and cloud forests.',
                    'contenido'  => '<h2>Classic Inca Trail — The Sacred Inca Route</h2><p>The Inca Trail (Qhapaq Ñan) is the world\'s most famous trekking route and the most authentic way to arrive at Machu Picchu. Covering 43 km with a maximum altitude of 4,215 m at Dead Woman\'s Pass, this route combines archaeology, nature and adventure in an unmatched way. Only 500 daily permits are issued for the entire trail, guaranteeing an intimate experience without overcrowding.</p><p>Over 4 days you will cross five different climatic zones, visit little-known Inca ruins, and finish by entering Machu Picchu at sunrise through the Sun Gate.</p>',
                    'detallado'  => '<h3>4-Day Itinerary</h3><p><strong>Day 1 — Km 82 to Wayllabamba (3,000 m):</strong> 6:00 AM pickup, transfer to Km 82 trailhead, cross the Urubamba River, hike through Cusichaca Valley, lunch at Llactapata, arrive at Wayllabamba camp. Distance: 16 km | Difficulty: Easy.</p><p><strong>Day 2 — Wayllabamba to Pacaymayo (3,600 m):</strong> The most demanding day. 5-hour ascent to Dead Woman\'s Pass (4,215 m) with the best views on the route. Descent to Pacaymayo camp. Distance: 8 km | Difficulty: Hard.</p><p><strong>Day 3 — Pacaymayo to Wiñay Wayna (2,600 m):</strong> Visit Runkuraqay (3,800 m), Sayaqmarka and Phuyupatamarca ruins. Spectacular descent via Inca stairways to Wiñay Wayna. Farewell dinner with the porters. Distance: 16 km | Difficulty: Hard.</p><p><strong>Day 4 — Wiñay Wayna to Machu Picchu:</strong> Pre-dawn hike to the Sun Gate (Intipunku) for sunrise over Machu Picchu. 2.5-hour guided tour of the citadel. Free afternoon. Return train to Ollantaytambo, bus to Cusco. Distance: 5 km | Difficulty: Moderate.</p>',
                    'incluidos'  => '<ul><li>Private transport Cusco → Km 82 and return from Ollantaytambo</li><li>Official Inca Trail permit and Machu Picchu entrance fee</li><li>3 nights camping (tents provided)</li><li>3 breakfasts, 3 lunches, 3 dinners + afternoon tea</li><li>Certified bilingual guide (max. 8 people per guide)</li><li>Professional trekking chef</li><li>Porters (group equipment)</li><li>First aid kit and emergency oxygen</li><li>Tourist train Aguas Calientes → Ollantaytambo</li><li>Bus Ollantaytambo → Cusco</li></ul>',
                    'importante' => '<ul><li>Original passport required at all checkpoints</li><li>Name must match the permit exactly</li><li>Inca Trail closes for the entire month of February</li><li>Book at least 6 months in advance during high season</li><li>Bring your own sleeping bag (not included) and warm clothing</li><li>Maximum 16 people per group</li></ul>',
                    'ubicacion'  => 'Cusco',
                    'precio'     => 775,
                    'dias'       => 4,
                    'img'        => 'img/panoramico/Inca-Trail-pacha-mama-Peru.webp',
                    'categoria'  => 'hikes,machupicchu',
                    'keywords'   => 'Inca Trail 4 days, Inca Trail Peru, trek to Machu Picchu, Km 82, Dead Womans Pass, Cusco hiking',
                    'slug'       => 'classic-inca-trail-machu-picchu-4-days-3-nights',
                    'clase'      => 'aventuras',
                ],
            ],

            // ─── 2. CAMINO INCA CORTO 2 DÍAS ──────────────────────────────────────────
            [
                'es' => [
                    'nombre'     => 'Camino Inca Corto a Machu Picchu - 2 Días',
                    'descripcion'=> 'La versión más accesible del Camino Inca. Parte desde el Km 104, recorre Chachabamba y Wiñay Wayna, y entra a Machu Picchu por la Puerta del Sol al atardecer.',
                    'contenido'  => '<h2>Camino Inca Corto — La esencia del sendero inca en 2 días</h2><p>El Camino Inca Corto es la opción perfecta para quienes quieren vivir la experiencia auténtica del Camino Inca sin los 4 días de trekking intenso. Partiendo desde el Km 104 en lugar del Km 82, esta ruta de 12 km recorre bosques nublados, las ruinas de Chachabamba y el impresionante complejo arqueológico de Wiñay Wayna antes de alcanzar la Puerta del Sol con vistas directas a Machu Picchu.</p>',
                    'detallado'  => '<h3>Itinerario 2 días</h3><p><strong>Día 1 — Cusco → Km 104 → Aguas Calientes:</strong> Traslado matutino a la estación de tren de Ollantaytambo. Tren hasta el Km 104 (Chachabamba), inicio del trek. Visita guiada al complejo arqueológico de Chachabamba. Caminata por bosque nublado con orquídeas y aves exóticas. Almuerzo en Wiñay Wayna campsite. Visita guiada al complejo arqueológico de Wiñay Wayna (terrazas, canales, templos). Ascenso por escalinatas incas hasta la Puerta del Sol (Intipunku) con vistas panorámicas de Machu Picchu al atardecer. Descenso a Aguas Calientes, alojamiento. Distancia total: 12 km.</p><p><strong>Día 2 — Machu Picchu → Cusco:</strong> Desayuno temprano. Bus a la ciudadela de Machu Picchu. Visita guiada de 2,5 horas. Tarde libre para explorar. Bus de bajada a Aguas Calientes. Tren de regreso a Ollantaytambo. Bus a Cusco.</p>',
                    'incluidos'  => '<ul><li>Transporte privado Cusco → Ollantaytambo y retorno desde Ollantaytambo</li><li>Tren ida y vuelta (clase Expedición) Ollantaytambo ↔ Km 104 / Aguas Calientes</li><li>Permiso Camino Inca Corto y entrada a Machu Picchu</li><li>1 noche de alojamiento en Aguas Calientes</li><li>1 desayuno, 1 box lunch y 1 cena</li><li>Guía bilingüe certificado</li><li>Bus subida y bajada Machu Picchu</li></ul>',
                    'importante' => '<ul><li>Pasaporte original obligatorio en todos los puestos de control</li><li>El Camino Inca cierra en febrero para mantenimiento</li><li>Solo se emiten 250 permisos diarios — reservar con 6 meses de anticipación</li><li>Llevar mochila ligera (máx. 5 kg en el sendero)</li></ul>',
                    'ubicacion'  => 'Cusco',
                    'precio'     => 545,
                    'dias'       => 2,
                    'img'        => 'img/panoramico/inti-punku-puerta-del-sol.webp',
                    'categoria'  => 'hikes,machupicchu',
                    'keywords'   => 'Camino Inca corto, Inca Trail 2 dias, Km 104, Wiñay Wayna, Puerta del Sol Machu Picchu, trekking accesible',
                    'slug'       => 'camino-inca-corto-machu-picchu-2-dias',
                    'clase'      => 'machu',
                ],
                'en' => [
                    'nombre'     => 'Short Inca Trail to Machu Picchu - 2 Days',
                    'descripcion'=> 'The most accessible version of the Inca Trail. Start at Km 104, hike through Chachabamba and Wiñay Wayna, and enter Machu Picchu through the Sun Gate at sunset.',
                    'contenido'  => '<h2>Short Inca Trail — The Essence of the Inca Path in 2 Days</h2><p>The Short Inca Trail is the perfect option for those who want the authentic Inca Trail experience without 4 days of intense trekking. Starting from Km 104 rather than Km 82, this 12 km route passes through cloud forests, the Chachabamba ruins and the impressive Wiñay Wayna archaeological complex before reaching the Sun Gate with direct views of Machu Picchu.</p>',
                    'detallado'  => '<h3>2-Day Itinerary</h3><p><strong>Day 1 — Cusco → Km 104 → Aguas Calientes:</strong> Morning transfer to Ollantaytambo train station. Train to Km 104 (Chachabamba), start of the trek. Guided visit to Chachabamba ruins. Hike through cloud forest with orchids and exotic birds. Lunch at Wiñay Wayna campsite. Guided tour of the Wiñay Wayna archaeological complex (terraces, canals, temples). Ascent via Inca stairways to the Sun Gate (Intipunku) with panoramic views of Machu Picchu at sunset. Descent to Aguas Calientes, overnight stay. Total distance: 12 km.</p><p><strong>Day 2 — Machu Picchu → Cusco:</strong> Early breakfast. Bus to Machu Picchu citadel. 2.5-hour guided tour. Free afternoon to explore. Bus down to Aguas Calientes. Return train to Ollantaytambo. Bus to Cusco.</p>',
                    'incluidos'  => '<ul><li>Private transport Cusco → Ollantaytambo and return from Ollantaytambo</li><li>Round-trip train (Expedition class) Ollantaytambo ↔ Km 104 / Aguas Calientes</li><li>Short Inca Trail permit and Machu Picchu entrance fee</li><li>1 night accommodation in Aguas Calientes</li><li>1 breakfast, 1 box lunch and 1 dinner</li><li>Certified bilingual guide</li><li>Machu Picchu shuttle bus up and down</li></ul>',
                    'importante' => '<ul><li>Original passport required at all checkpoints</li><li>Inca Trail closes in February for maintenance</li><li>Only 250 daily permits issued — book 6 months in advance</li><li>Bring a light daypack (max. 5 kg on the trail)</li></ul>',
                    'ubicacion'  => 'Cusco',
                    'precio'     => 545,
                    'dias'       => 2,
                    'img'        => 'img/panoramico/inti-punku-puerta-del-sol.webp',
                    'categoria'  => 'hikes,machupicchu',
                    'keywords'   => 'Short Inca Trail, Inca Trail 2 days, Km 104, Wiñay Wayna, Sun Gate Machu Picchu, accessible trekking',
                    'slug'       => 'short-inca-trail-machu-picchu-2-days',
                    'clase'      => 'machu',
                ],
            ],

            // ─── 3. SALKANTAY + CAMINO INCA 6 DÍAS ────────────────────────────────────
            [
                'es' => [
                    'nombre'     => 'Trek Salkantay y Camino Inca - 6 Días',
                    'descripcion'=> 'La combinación definitiva: el Salkantay Trek seguido del Camino Inca clásico. Dos rutas épicas en un solo viaje que culminan en la entrada al amanecer por la Puerta del Sol.',
                    'contenido'  => '<h2>Salkantay + Camino Inca — La experiencia completa</h2><p>Este trek de 6 días es uno de los más épicos que se pueden hacer en Perú. Combina el imponente nevado Salkantay (6.271 m) con los últimos dos días del Camino Inca clásico, atravesando cinco ecosistemas distintos: puna andina, zona glacial, bosque nublado, selva alta y finalmente la ciudadela de Machu Picchu. El punto más alto de la ruta es el Paso Incachiriaska a 5.100 metros.</p>',
                    'detallado'  => '<h3>Itinerario 6 días</h3><p><strong>Día 1 — Cusco → Soraypampa (4.100 m):</strong> Salida a las 4:30 AM hacia Mollepata. Parada en las ruinas de Tarawasi. Visita a la Laguna Humantay (2,5 h de caminata). Campamento en Soraypampa. Distancia: 15 km.</p><p><strong>Día 2 — Soraypampa → Canal Inca:</strong> El día más exigente. Ascenso al Paso Incachiriaska (5.100 m) con vistas directas al Salkantay (6.271 m) y Humantay. Descenso al campamento del Canal Inca. Distancia: 15 km.</p><p><strong>Día 3 — Canal Inca → Huayllabamba → Ayapata (3.325 m):</strong> Transición del Salkantay al Camino Inca clásico. Visita a las ruinas de Inkaracay. Bosque nublado. Cambio de caballos a porteadores en Huayllabamba. Campamento en Ayapata. Distancia: 14 km.</p><p><strong>Día 4 — Ayapata → Chaquicocha (3.670 m):</strong> Ascenso al Paso de la Mujer Muerta (4.215 m). Visita a ruinas de Runkuraqay y Sayaqmarka. Laguna Yanacocha. Campamento en Chaquicocha. Distancia: 12 km.</p><p><strong>Día 5 — Chaquicocha → Wiñay Wayna (2.700 m):</strong> Paso de Phuyupatamarca (3.670 m). Tour del complejo arqueológico de Phuyupatamarca. Descenso por bosque nublado hasta Wiñay Wayna. Distancia: 10 km.</p><p><strong>Día 6 — Wiñay Wayna → Machu Picchu:</strong> Amanecer en la Puerta del Sol. Visita guiada de 2,5 horas a Machu Picchu. Tren de regreso. Distancia: 4 km.</p>',
                    'incluidos'  => '<ul><li>Transporte privado Cusco → Mollepata y retorno</li><li>Permisos Salkantay y Camino Inca oficial</li><li>Entrada a Machu Picchu</li><li>5 noches de camping (carpas, colchonetas inflables, sleeping bag -5°C, poncho)</li><li>5 desayunos, 5 almuerzos, 5 cenas y tés de tarde</li><li>Guía bilingüe de montaña certificado</li><li>Chef profesional de trekking</li><li>Caballos (días 1-3) y porteadores (días 4-6)</li><li>Bastones de trekking y kit de primeros auxilios</li><li>Tren Aguas Calientes → Ollantaytambo y bus a Cusco</li></ul>',
                    'importante' => '<ul><li>Nivel físico alto requerido (máximo 5.100 m)</li><li>La disponibilidad del Camino Inca determina la fecha de inicio</li><li>Reservar con 2-3 meses de anticipación en temporada alta</li><li>Mínimo 3 días de aclimatación previos en Cusco</li></ul>',
                    'ubicacion'  => 'Cusco',
                    'precio'     => 1100,
                    'dias'       => 6,
                    'img'        => 'img/panoramico/camino-inca-reserva.webp',
                    'categoria'  => 'hikes,machupicchu',
                    'keywords'   => 'Salkantay Camino Inca, trek combinado Peru, Salkantay Inca Trail 6 dias, Incachiriaska, trekking avanzado Cusco',
                    'slug'       => 'trek-salkantay-camino-inca-6-dias',
                    'clase'      => 'aventuras',
                ],
                'en' => [
                    'nombre'     => 'Salkantay Trek & Inca Trail - 6 Days',
                    'descripcion'=> 'The ultimate combination: the Salkantay Trek followed by the classic Inca Trail. Two epic routes in one trip, culminating in a sunrise entry through the Sun Gate.',
                    'contenido'  => '<h2>Salkantay + Inca Trail — The Complete Experience</h2><p>This 6-day trek is one of the most epic journeys you can do in Peru. It combines the imposing Salkantay snow peak (6,271 m) with the final two days of the classic Inca Trail, crossing five distinct ecosystems: Andean puna, glacial zone, cloud forest, high jungle and finally the Machu Picchu citadel. The highest point on the route is Incachiriaska Pass at 5,100 metres.</p>',
                    'detallado'  => '<h3>6-Day Itinerary</h3><p><strong>Day 1 — Cusco → Soraypampa (4,100 m):</strong> 4:30 AM departure to Mollepata. Stop at Tarawasi ruins. Visit Humantay Lake (2.5 h hike). Camp at Soraypampa. Distance: 15 km.</p><p><strong>Day 2 — Soraypampa → Canal Inca:</strong> The most demanding day. Ascent to Incachiriaska Pass (5,100 m) with direct views of Salkantay (6,271 m) and Humantay. Descent to Canal Inca camp. Distance: 15 km.</p><p><strong>Day 3 — Canal Inca → Huayllabamba → Ayapata (3,325 m):</strong> Transition from Salkantay to the classic Inca Trail. Visit Inkaracay ruins. Cloud forest. Switch from horses to porters at Huayllabamba. Camp at Ayapata. Distance: 14 km.</p><p><strong>Day 4 — Ayapata → Chaquicocha (3,670 m):</strong> Ascent to Dead Woman\'s Pass (4,215 m). Visit Runkuraqay and Sayaqmarka ruins. Yanacocha Lake. Camp at Chaquicocha. Distance: 12 km.</p><p><strong>Day 5 — Chaquicocha → Wiñay Wayna (2,700 m):</strong> Phuyupatamarca Pass (3,670 m). Tour of the Phuyupatamarca complex. Descent through cloud forest to Wiñay Wayna. Distance: 10 km.</p><p><strong>Day 6 — Wiñay Wayna → Machu Picchu:</strong> Sunrise at the Sun Gate. 2.5-hour guided tour of Machu Picchu. Return train. Distance: 4 km.</p>',
                    'incluidos'  => '<ul><li>Private transport Cusco → Mollepata and return</li><li>Salkantay and official Inca Trail permits</li><li>Machu Picchu entrance fee</li><li>5 nights camping (tents, inflatable mattresses, -5°C sleeping bag, poncho)</li><li>5 breakfasts, 5 lunches, 5 dinners and afternoon teas</li><li>Certified bilingual mountain guide</li><li>Professional trekking chef</li><li>Horses (days 1–3) and porters (days 4–6)</li><li>Trekking poles and first aid kit</li><li>Train Aguas Calientes → Ollantaytambo and bus to Cusco</li></ul>',
                    'importante' => '<ul><li>High fitness level required (maximum 5,100 m altitude)</li><li>Inca Trail availability determines the start date</li><li>Book 2–3 months in advance during high season</li><li>Minimum 3 days of prior acclimatization in Cusco</li></ul>',
                    'ubicacion'  => 'Cusco',
                    'precio'     => 1100,
                    'dias'       => 6,
                    'img'        => 'img/panoramico/camino-inca-reserva.webp',
                    'categoria'  => 'hikes,machupicchu',
                    'keywords'   => 'Salkantay Inca Trail, combined Peru trek, Salkantay Inca Trail 6 days, Incachiriaska, advanced Cusco trekking',
                    'slug'       => 'salkantay-trek-inca-trail-6-days',
                    'clase'      => 'aventuras',
                ],
            ],

            // ─── 4. CACHICATA TREK ─────────────────────────────────────────────────────
            [
                'es' => [
                    'nombre'     => 'Cachicata Trek - La Cantera Inca a Ollantaytambo 3 Días',
                    'descripcion'=> 'Descubre la ruta secreta por donde los Incas transportaban los bloques de piedra desde la cantera de Cachicata hasta Ollantaytambo. Un trek único, sin permisos y sin multitudes.',
                    'contenido'  => '<h2>Cachicata Trek — La ruta de los constructores incas</h2><p>El Cachicata Trek es uno de los treks más originales y menos conocidos del Cusco. La ruta sigue el mismo camino que usaron los ingenieros incas para transportar los enormes monolitos de granito rosado desde la cantera de Cachicata, a 4.400 msnm, hasta el majestuoso templo de Ollantaytambo. A lo largo del camino encontrarás piedras a medio labrar abandonadas hace más de 500 años, una ventana fascinante a las técnicas constructivas del Imperio Inca.</p>',
                    'detallado'  => '<h3>Itinerario 3 días</h3><p><strong>Día 1 — Cusco → Cachicata:</strong> Traslado a Ollantaytambo, cruce del río Urubamba en bote, inicio del ascenso por la ladera del Valle Sagrado, llegada a la cantera de Cachicata (4.400 m), visita a los bloques de piedra tallados y abandonados. Campamento junto a la cantera.</p><p><strong>Día 2 — Cachicata → Paucarcancha:</strong> Descenso por la ruta original de transporte de piedras, cruzando el altiplano y bosques de polylepis. Vistas panorámicas del nevado Verónica y el Valle Sagrado. Campamento en Paucarcancha.</p><p><strong>Día 3 — Paucarcancha → Ollantaytambo → Cusco:</strong> Llegada a Ollantaytambo, visita guiada al templo de Ollantaytambo donde descansan las piedras de Cachicata, regreso a Cusco en tren o transporte privado.</p>',
                    'incluidos'  => '<ul><li>Transporte Cusco → inicio del trek y retorno</li><li>Cruce del río en bote</li><li>Guía local especializado en arqueología inca</li><li>2 noches de camping completo</li><li>Todas las comidas en ruta (2 desayunos, 3 almuerzos, 2 cenas)</li><li>Caballos o mulas para el equipaje</li><li>Entrada al sitio arqueológico de Ollantaytambo</li></ul>',
                    'importante' => '<ul><li>No requiere permiso especial (a diferencia del Camino Inca)</li><li>Disponible todo el año</li><li>Nivel físico moderado-alto (llegada a 4.400 m)</li><li>Máximo 12 personas por grupo</li></ul>',
                    'ubicacion'  => 'Cusco',
                    'precio'     => 380,
                    'dias'       => 3,
                    'img'        => 'img/panoramico/cachicata-tour-a-machu-picchu.webp',
                    'categoria'  => 'hikes,around',
                    'keywords'   => 'Cachicata Trek, cantera inca Ollantaytambo, trekking alternativo Cusco, rutas incas sin permiso, Valle Sagrado trekking',
                    'slug'       => 'cachicata-trek-cantera-inca-ollantaytambo-3-dias',
                    'clase'      => 'ollantaytambo',
                ],
                'en' => [
                    'nombre'     => 'Cachicata Trek - Inca Quarry Trail to Ollantaytambo 3 Days',
                    'descripcion'=> 'Discover the secret route the Incas used to transport stone blocks from the Cachicata quarry to Ollantaytambo. A unique, permit-free and crowd-free trek.',
                    'contenido'  => '<h2>Cachicata Trek — The Route of the Inca Builders</h2><p>The Cachicata Trek is one of the most original and least-known treks near Cusco. The route follows the same path used by Inca engineers to transport enormous pink granite monoliths from the Cachicata quarry, at 4,400 m, to the majestic Ollantaytambo temple. Along the way you will find half-carved stones abandoned more than 500 years ago — a fascinating window into the construction techniques of the Inca Empire.</p>',
                    'detallado'  => '<h3>3-Day Itinerary</h3><p><strong>Day 1 — Cusco → Cachicata:</strong> Transfer to Ollantaytambo, cross the Urubamba River by boat, ascent along the Sacred Valley hillside, arrival at the Cachicata quarry (4,400 m), visit the carved and abandoned stone blocks. Camp beside the quarry.</p><p><strong>Day 2 — Cachicata → Paucarcancha:</strong> Descent along the original stone transport route, crossing the high plateau and polylepis forests. Panoramic views of the Verónica snow peak and the Sacred Valley. Camp at Paucarcancha.</p><p><strong>Day 3 — Paucarcancha → Ollantaytambo → Cusco:</strong> Arrival at Ollantaytambo, guided tour of the Ollantaytambo temple where the Cachicata stones rest, return to Cusco by train or private transport.</p>',
                    'incluidos'  => '<ul><li>Transport Cusco → trek start and return</li><li>River crossing by boat</li><li>Local guide specialised in Inca archaeology</li><li>2 nights full camping</li><li>All meals on the trail (2 breakfasts, 3 lunches, 2 dinners)</li><li>Horses or mules for luggage</li><li>Ollantaytambo archaeological site entrance</li></ul>',
                    'importante' => '<ul><li>No special permit required (unlike the Inca Trail)</li><li>Available year-round</li><li>Moderate-high fitness level (reaches 4,400 m)</li><li>Maximum 12 people per group</li></ul>',
                    'ubicacion'  => 'Cusco',
                    'precio'     => 380,
                    'dias'       => 3,
                    'img'        => 'img/panoramico/cachicata-tour-a-machu-picchu.webp',
                    'categoria'  => 'hikes,around',
                    'keywords'   => 'Cachicata Trek, Inca quarry Ollantaytambo, alternative Cusco trek, permit-free Inca routes, Sacred Valley trekking',
                    'slug'       => 'cachicata-trek-inca-quarry-ollantaytambo-3-days',
                    'clase'      => 'ollantaytambo',
                ],
            ],

            // ─── 5. AUSANGATE + VINICUNCA 3 DÍAS ──────────────────────────────────────
            [
                'es' => [
                    'nombre'     => 'Ausangate Trek y Montaña de 7 Colores - 3 Días',
                    'descripcion'=> 'Combina el circuito del nevado Ausangate (6.384 m) con la famosa Montaña de los 7 Colores (Vinicunca). El trekking de alta montaña más espectacular del Cusco.',
                    'contenido'  => '<h2>Ausangate y Vinicunca — Los Andes en todo su esplendor</h2><p>El Ausangate es el nevado sagrado más importante de la región del Cusco, venerado como "Apu" por las comunidades quechuas desde tiempos inmemoriales. El circuito alrededor de su base, a más de 5.000 metros de altitud, ofrece paisajes de una belleza sobrecogedora: lagunas turquesas, manadas de alpacas y vicuñas, y vistas directas al glaciar. La ruta también incluye la visita a la famosa Montaña de los 7 Colores (Vinicunca), descubierta por el mundo apenas en 2015.</p>',
                    'detallado'  => '<h3>Itinerario 3 días</h3><p><strong>Día 1 — Cusco → Tinki → Campamento base (4.800 m):</strong> Salida a las 5:00 AM hacia Tinki (3 horas en transporte). Inicio del trekking por la falda del Ausangate. Lagunas de colores a los pies del glaciar. Campamento base con vistas directas al nevado. Distancia: 12 km.</p><p><strong>Día 2 — Campamento base → Paso más alto (5.150 m) → Pampa Cañahuay:</strong> La etapa más alta y espectacular. Cruce del paso a 5.150 m con vistas al glaciar. Aguas termales naturales. Campamento en la pampa. Distancia: 14 km.</p><p><strong>Día 3 — Pampa Cañahuay → Vinicunca (5.200 m) → Cusco:</strong> Ascenso a la Montaña de los 7 Colores. Vistas 360° de los Andes. Regreso a Cusco. Distancia: 10 km.</p>',
                    'incluidos'  => '<ul><li>Transporte Cusco ↔ Tinki</li><li>Guía de montaña certificado (habla quechua)</li><li>2 noches de camping (carpa, sleeping bag -15°C, colchoneta)</li><li>Todas las comidas en ruta</li><li>Caballos para el equipaje</li><li>Entrada a la Montaña de los 7 Colores</li></ul>',
                    'importante' => '<ul><li>Nivel de condición física muy alto requerido (altitud máx. 5.200 m)</li><li>Imprescindible aclimatarse mínimo 2-3 días en Cusco antes</li><li>No apto para personas con problemas cardiorrespiratorios</li><li>Temperatura puede bajar a -10°C por las noches</li></ul>',
                    'ubicacion'  => 'Cusco',
                    'precio'     => 310,
                    'dias'       => 3,
                    'img'        => 'img/panoramico/Cerro-de-7-colores-Vinicunca-Pacha-mama.webp',
                    'categoria'  => 'hikes',
                    'keywords'   => 'Ausangate trek, Montaña 7 colores, Vinicunca trek, arcoiris montaña Cusco, alta montaña Peru, Ausangate Cusco',
                    'slug'       => 'ausangate-trek-montana-7-colores-3-dias',
                    'clase'      => 'vinicunca',
                ],
                'en' => [
                    'nombre'     => 'Ausangate Trek & Rainbow Mountain - 3 Days',
                    'descripcion'=> 'Combine the Ausangate snow peak circuit (6,384 m) with the famous Rainbow Mountain (Vinicunca). The most spectacular high-altitude trek in the Cusco region.',
                    'contenido'  => '<h2>Ausangate & Vinicunca — The Andes in All Their Splendour</h2><p>Ausangate is the most important sacred snow peak in the Cusco region, revered as an "Apu" (mountain deity) by Quechua communities since ancient times. The circuit around its base, above 5,000 metres, offers landscapes of breathtaking beauty: turquoise lakes, herds of alpacas and vicuñas, and direct views of the glacier. The route also includes a visit to the famous Rainbow Mountain (Vinicunca), discovered by the outside world only in 2015.</p>',
                    'detallado'  => '<h3>3-Day Itinerary</h3><p><strong>Day 1 — Cusco → Tinki → Base Camp (4,800 m):</strong> 5:00 AM departure towards Tinki (3 hours by transport). Start of trekking along the Ausangate foothills. Coloured glacial lakes at the foot of the glacier. Base camp with direct views of the snow peak. Distance: 12 km.</p><p><strong>Day 2 — Base Camp → Highest Pass (5,150 m) → Pampa Cañahuay:</strong> The highest and most spectacular stage. Crossing the 5,150 m pass with glacier views. Natural hot springs. Camp on the pampa. Distance: 14 km.</p><p><strong>Day 3 — Pampa Cañahuay → Rainbow Mountain (5,200 m) → Cusco:</strong> Ascent to Rainbow Mountain. 360° Andean views. Return to Cusco. Distance: 10 km.</p>',
                    'incluidos'  => '<ul><li>Cusco ↔ Tinki transport</li><li>Certified mountain guide (Quechua-speaking)</li><li>2 nights camping (tent, -15°C sleeping bag, mat)</li><li>All meals on the trail</li><li>Pack horses for luggage</li><li>Rainbow Mountain entrance fee</li></ul>',
                    'importante' => '<ul><li>Very high fitness level required (max altitude 5,200 m)</li><li>Essential to acclimatise at least 2–3 days in Cusco beforehand</li><li>Not suitable for people with cardiorespiratory conditions</li><li>Temperature can drop to -10°C at night</li></ul>',
                    'ubicacion'  => 'Cusco',
                    'precio'     => 310,
                    'dias'       => 3,
                    'img'        => 'img/panoramico/Cerro-de-7-colores-Vinicunca-Pacha-mama.webp',
                    'categoria'  => 'hikes',
                    'keywords'   => 'Ausangate trek, Rainbow Mountain, Vinicunca trek, rainbow mountain Cusco, high altitude Peru, Ausangate Cusco',
                    'slug'       => 'ausangate-trek-rainbow-mountain-3-days',
                    'clase'      => 'vinicunca',
                ],
            ],

            // ─── 6. PAQUETE AMAZON + MACHU PICCHU 10D ─────────────────────────────────
            [
                'es' => [
                    'nombre'     => 'Amazon y Machu Picchu - Paquete Peru 10 Días',
                    'descripcion'=> 'Lo mejor del Perú en 10 días: la selva amazónica de Tambopata, el Valle Sagrado, Machu Picchu y la Montaña de los 7 Colores. Un viaje completo e inolvidable.',
                    'contenido'  => '<h2>Amazon y Machu Picchu — El Perú completo en 10 días</h2><p>Este paquete combina dos de los ecosistemas más extraordinarios del planeta: la Amazonia peruana en Tambopata y los Andes del Cusco con Machu Picchu. En 10 días pasarás de la exuberante selva tropical, con sus 1.300 especies de aves, jaguares y delfines de río rosados, a las alturas andinas del Imperio Inca, culminando con la visita a la ciudadela más famosa del mundo.</p>',
                    'detallado'  => '<h3>Itinerario 10 días</h3><p><strong>Día 1 — Lima:</strong> Llegada al aeropuerto Jorge Chávez, traslado al hotel en Miraflores.</p><p><strong>Días 2-3 — Amazonas (Tambopata):</strong> Vuelo a Puerto Maldonado, viaje en canoa motorizada por el río Madre de Dios, lodge ecológico en la reserva, caminatas nocturnas, Isla de los Monos, mirador del lago Sandoval, pasarela en el dosel (30 m de altura), collpa de loros al amanecer.</p><p><strong>Día 4 — Cusco:</strong> Vuelo a Cusco, aclimatación a la altitud, visita libre al centro histórico.</p><p><strong>Día 5 — Valle Sagrado:</strong> Tour completo: Pisac, almuerzo buffet en Urubamba, Ollantaytambo, Chinchero.</p><p><strong>Días 6-7 — Machu Picchu:</strong> Tren a Aguas Calientes, visita a la ciudadela, tiempo libre, regreso.</p><p><strong>Día 8 — Montaña de los 7 Colores:</strong> Excursión de día completo a Vinicunca (5.200 m).</p><p><strong>Día 9 — Cusco libre:</strong> Actividades opcionales: rafting, ciclismo de montaña, visita a museos.</p><p><strong>Día 10 — Regreso:</strong> Traslado al aeropuerto, vuelo de retorno.</p>',
                    'incluidos'  => '<ul><li>Vuelos domésticos Lima–Puerto Maldonado–Cusco</li><li>Traslados aeropuerto en todo el recorrido</li><li>7 noches hotel 3 estrellas + 2 noches lodge ecológico</li><li>Entradas a todos los sitios del programa</li><li>Guías bilingües profesionales</li><li>8 desayunos, 3 almuerzos, 2 cenas</li><li>Transporte en canoa motorizada</li><li>Tren turístico ida y vuelta a Machu Picchu</li><li>Bus subida y bajada a Machu Picchu</li></ul>',
                    'importante' => '<ul><li>Llevar repelente de insectos y ropa manga larga para la selva</li><li>Vacuna de fiebre amarilla recomendada para Tambopata</li><li>Mínimo de 2 años de edad; menores de 18 deben ir acompañados</li><li>Presupuestar USD 100-150 adicionales para comidas no incluidas</li></ul>',
                    'ubicacion'  => 'Lima, Puerto Maldonado, Cusco',
                    'precio'     => 1750,
                    'dias'       => 10,
                    'img'        => 'img/panoramico/tambopata-jungle-1.jpg',
                    'categoria'  => 'luxury,around',
                    'keywords'   => 'paquete Peru 10 dias, Amazon Machu Picchu tour, selva y montaña Peru, Tambopata Cusco, viaje completo Peru',
                    'slug'       => 'amazon-machu-picchu-paquete-peru-10-dias',
                    'clase'      => 'selva',
                ],
                'en' => [
                    'nombre'     => 'Amazon & Machu Picchu - Peru Package 10 Days',
                    'descripcion'=> 'The best of Peru in 10 days: the Tambopata Amazon rainforest, Sacred Valley, Machu Picchu and Rainbow Mountain. A complete and unforgettable journey.',
                    'contenido'  => '<h2>Amazon & Machu Picchu — The Complete Peru in 10 Days</h2><p>This package combines two of the most extraordinary ecosystems on the planet: the Peruvian Amazon in Tambopata and the Andean heights of Cusco with Machu Picchu. In 10 days you will move from the lush tropical rainforest — with its 1,300 bird species, jaguars and pink river dolphins — to the Andean heights of the Inca Empire, culminating with a visit to the world\'s most famous citadel.</p>',
                    'detallado'  => '<h3>10-Day Itinerary</h3><p><strong>Day 1 — Lima:</strong> Arrival at Jorge Chávez airport, transfer to Miraflores hotel.</p><p><strong>Days 2–3 — Amazon (Tambopata):</strong> Flight to Puerto Maldonado, motorised canoe on Madre de Dios River, eco-lodge in the reserve, night walks, Monkey Island, Lake Sandoval viewpoint, canopy walkway (30 m), dawn parrot clay lick.</p><p><strong>Day 4 — Cusco:</strong> Flight to Cusco, altitude acclimatisation, free time in the historic centre.</p><p><strong>Day 5 — Sacred Valley:</strong> Full tour: Pisac, buffet lunch in Urubamba, Ollantaytambo, Chinchero.</p><p><strong>Days 6–7 — Machu Picchu:</strong> Train to Aguas Calientes, citadel visit, free time, return.</p><p><strong>Day 8 — Rainbow Mountain:</strong> Full-day excursion to Vinicunca (5,200 m).</p><p><strong>Day 9 — Cusco free day:</strong> Optional activities: rafting, mountain biking, museum visits.</p><p><strong>Day 10 — Departure:</strong> Transfer to airport, return flight.</p>',
                    'incluidos'  => '<ul><li>Domestic flights Lima–Puerto Maldonado–Cusco</li><li>Airport transfers throughout the itinerary</li><li>7 nights 3-star hotel + 2 nights eco-lodge</li><li>Entrance fees to all programme sites</li><li>Professional bilingual guides</li><li>8 breakfasts, 3 lunches, 2 dinners</li><li>Motorised canoe transport</li><li>Round-trip tourist train to Machu Picchu</li><li>Machu Picchu shuttle bus up and down</li></ul>',
                    'importante' => '<ul><li>Insect repellent and long-sleeved clothing essential for the jungle</li><li>Yellow fever vaccination recommended for Tambopata</li><li>Minimum age 2 years; under-18s must be accompanied by an adult</li><li>Budget an additional USD 100–150 for meals not included</li></ul>',
                    'ubicacion'  => 'Lima, Puerto Maldonado, Cusco',
                    'precio'     => 1750,
                    'dias'       => 10,
                    'img'        => 'img/panoramico/tambopata-jungle-1.jpg',
                    'categoria'  => 'luxury,around',
                    'keywords'   => 'Peru 10 day package, Amazon Machu Picchu tour, jungle and mountain Peru, Tambopata Cusco, complete Peru trip',
                    'slug'       => 'amazon-machu-picchu-peru-package-10-days',
                    'clase'      => 'selva',
                ],
            ],

            // ─── 7. EXPEDICIÓN PERÚ 11D (AMAZON + CAMINO INCA) ────────────────────────
            [
                'es' => [
                    'nombre'     => 'Expedición Perú - Amazon y Camino Inca 11 Días',
                    'descripcion'=> 'La combinación más aventurera: 2 días en la selva amazónica de Tambopata, Valle Sagrado y el Camino Inca clásico de 4 días hasta Machu Picchu.',
                    'contenido'  => '<h2>Expedición Perú — Selva, montaña e historia inca en 11 días</h2><p>Esta expedición de 11 días es para quienes quieren vivir Perú en toda su profundidad: desde la biodiversidad más rica del planeta en la Amazonia hasta la grandeza del Imperio Inca en el Camino a Machu Picchu, con campamentos bajo las estrellas de los Andes y la entrada al amanecer a la ciudadela más famosa del mundo.</p>',
                    'detallado'  => '<h3>Itinerario 11 días</h3><p><strong>Día 1 — Lima.</strong><p><strong>Días 2-3 — Tambopata:</strong> Vuelo a Puerto Maldonado, lodge ecológico, Isla de los Monos, Lago Sandoval, pasarela en el dosel (30 m), collpa de loros.</p><p><strong>Día 4 — Cusco:</strong> Vuelo, aclimatación.</p><p><strong>Día 5 — Valle Sagrado:</strong> Pisac, Urubamba, Ollantaytambo, Chinchero.</p><p><strong>Días 6-9 — Camino Inca 4 días:</strong> Trek completo Km 82 → Machu Picchu.</p><p><strong>Día 10 — Cusco libre:</strong> Actividades opcionales.</p><p><strong>Día 11 — Regreso.</strong></p>',
                    'incluidos'  => '<ul><li>Vuelos domésticos Lima–Puerto Maldonado–Cusco</li><li>Traslados en todo el recorrido</li><li>5 noches hotel 3 estrellas + 2 noches lodge + 3 noches camping</li><li>Permiso oficial del Camino Inca y entrada Machu Picchu</li><li>10 desayunos, 6 almuerzos, 4 cenas y tés de tarde</li><li>Guías, chef de trekking y porteadores</li><li>Equipo completo de camping</li><li>Tren + bus de retorno desde Machu Picchu</li></ul>',
                    'importante' => '<ul><li>Reservar el Camino Inca con mínimo 6 meses de anticipación</li><li>Nivel físico medio-alto (4 días de trekking exigente)</li><li>Vacuna de fiebre amarilla recomendada</li><li>Presupuestar USD 100-150 adicionales para comidas</li></ul>',
                    'ubicacion'  => 'Lima, Puerto Maldonado, Cusco',
                    'precio'     => 2456,
                    'dias'       => 11,
                    'img'        => 'img/panoramico/Machu-Picchu-Camino-Inca-Peru.webp',
                    'categoria'  => 'luxury,hikes,machupicchu',
                    'keywords'   => 'expedicion Peru 11 dias, Amazon Camino Inca, paquete aventura Peru, Tambopata Machu Picchu, viaje completo Peru',
                    'slug'       => 'expedicion-peru-amazon-camino-inca-11-dias',
                    'clase'      => 'machu',
                ],
                'en' => [
                    'nombre'     => 'Peru Expedition - Amazon & Inca Trail 11 Days',
                    'descripcion'=> 'The most adventurous combination: 2 days in the Tambopata Amazon rainforest, Sacred Valley and the classic 4-day Inca Trail to Machu Picchu.',
                    'contenido'  => '<h2>Peru Expedition — Jungle, Mountains and Inca History in 11 Days</h2><p>This 11-day expedition is for those who want to experience Peru in all its depth: from the richest biodiversity on the planet in the Amazon to the grandeur of the Inca Empire on the trail to Machu Picchu, with camping under the Andean stars and a sunrise entry to the world\'s most famous citadel.</p>',
                    'detallado'  => '<h3>11-Day Itinerary</h3><p><strong>Day 1 — Lima.</strong><p><strong>Days 2–3 — Tambopata:</strong> Flight to Puerto Maldonado, eco-lodge, Monkey Island, Lake Sandoval, canopy walkway (30 m), dawn parrot clay lick.</p><p><strong>Day 4 — Cusco:</strong> Flight, acclimatisation.</p><p><strong>Day 5 — Sacred Valley:</strong> Pisac, Urubamba, Ollantaytambo, Chinchero.</p><p><strong>Days 6–9 — Classic Inca Trail 4 days:</strong> Full trek Km 82 → Machu Picchu.</p><p><strong>Day 10 — Free day in Cusco:</strong> Optional activities.</p><p><strong>Day 11 — Departure.</strong></p>',
                    'incluidos'  => '<ul><li>Domestic flights Lima–Puerto Maldonado–Cusco</li><li>Transfers throughout the itinerary</li><li>5 nights 3-star hotel + 2 nights eco-lodge + 3 nights camping</li><li>Official Inca Trail permit and Machu Picchu entrance</li><li>10 breakfasts, 6 lunches, 4 dinners and afternoon teas</li><li>Guides, trekking chef and porters</li><li>Complete camping equipment</li><li>Return train + bus from Machu Picchu</li></ul>',
                    'importante' => '<ul><li>Book Inca Trail permit at least 6 months in advance</li><li>Medium-high fitness level required (4 demanding trekking days)</li><li>Yellow fever vaccination recommended</li><li>Budget an additional USD 100–150 for extra meals</li></ul>',
                    'ubicacion'  => 'Lima, Puerto Maldonado, Cusco',
                    'precio'     => 2456,
                    'dias'       => 11,
                    'img'        => 'img/panoramico/Machu-Picchu-Camino-Inca-Peru.webp',
                    'categoria'  => 'luxury,hikes,machupicchu',
                    'keywords'   => 'Peru expedition 11 days, Amazon Inca Trail, Peru adventure package, Tambopata Machu Picchu, complete Peru trip',
                    'slug'       => 'peru-expedition-amazon-inca-trail-11-days',
                    'clase'      => 'machu',
                ],
            ],

            // ─── 8. LUXURY LODGE MACHU PICCHU ─────────────────────────────────────────
            [
                'es' => [
                    'nombre'     => 'Machu Picchu Luxury - Sanctuary Lodge 3 Días',
                    'descripcion'=> 'Experimenta Machu Picchu de la forma más exclusiva: alojamiento en el único hotel dentro de la ciudadela, entrada al amanecer antes de la apertura al público y cena de gala con vistas.',
                    'contenido'  => '<h2>Machu Picchu Luxury — La experiencia definitiva</h2><p>El Belmond Sanctuary Lodge es el único hotel situado en la propia ciudadela de Machu Picchu, lo que te permite entrar al sitio arqueológico antes de que abra al público general y disfrutar de la magia del amanecer en completa privacidad. Este paquete de 3 días incluye tren panorámico Vistadome, visitas exclusivas con guía privado y acceso a los miradores más impresionantes.</p>',
                    'detallado'  => '<h3>Itinerario 3 días</h3><p><strong>Día 1 — Cusco → Aguas Calientes:</strong> Traslado en tren Vistadome panorámico desde Ollantaytambo. Check-in en el Sanctuary Lodge. Visita al pueblo de Aguas Calientes y aguas termales. Cena de gala en el hotel.</p><p><strong>Día 2 — Machu Picchu (día completo):</strong> Entrada privada a la ciudadela antes de la apertura pública al amanecer. Tour guiado privado de 3 horas por los sectores más importantes. Almuerzo en el hotel con vistas. Tarde libre para explorar la ciudadela. Opcional: ascenso al Huayna Picchu o Montaña Machu Picchu (cargo adicional).</p><p><strong>Día 3 — Aguas Calientes → Cusco:</strong> Desayuno en el hotel. Tren de regreso a Ollantaytambo, bus privado a Cusco.</p>',
                    'incluidos'  => '<ul><li>Tren Vistadome ida y vuelta</li><li>2 noches en el Belmond Sanctuary Lodge (o similar 5 estrellas)</li><li>Entradas a Machu Picchu (2 visitas)</li><li>Guía privado certificado</li><li>2 desayunos y 1 cena de gala</li><li>Bus subida y bajada a la ciudadela</li><li>Transporte privado Cusco ↔ Ollantaytambo</li></ul>',
                    'importante' => '<ul><li>Reservar con mínimo 3-4 meses de anticipación (hotel con cupos muy limitados)</li><li>La entrada a Machu Picchu tiene cupo diario restringido</li><li>Precio varía según disponibilidad del hotel</li></ul>',
                    'ubicacion'  => 'Cusco - Machu Picchu',
                    'precio'     => 1800,
                    'dias'       => 3,
                    'img'        => 'img/panoramico/belmond-sanctuary-lodge-hotel.webp',
                    'categoria'  => 'luxury,machupicchu',
                    'keywords'   => 'Machu Picchu luxury, Sanctuary Lodge, hotel Machu Picchu, tren Vistadome, tour exclusivo Machu Picchu, Belmond',
                    'slug'       => 'machu-picchu-luxury-sanctuary-lodge-3-dias',
                    'clase'      => 'santuaryLodge',
                ],
                'en' => [
                    'nombre'     => 'Machu Picchu Luxury - Sanctuary Lodge 3 Days',
                    'descripcion'=> 'Experience Machu Picchu in the most exclusive way: stay at the only hotel inside the citadel, enter at sunrise before the public and enjoy a gala dinner with views.',
                    'contenido'  => '<h2>Machu Picchu Luxury — The Ultimate Experience</h2><p>Belmond Sanctuary Lodge is the only hotel located within the Machu Picchu citadel itself, allowing you to enter the archaeological site before it opens to the general public and enjoy the magic of sunrise in complete privacy. This 3-day package includes a panoramic Vistadome train, exclusive visits with a private guide and access to the most impressive viewpoints.</p>',
                    'detallado'  => '<h3>3-Day Itinerary</h3><p><strong>Day 1 — Cusco → Aguas Calientes:</strong> Transfer by panoramic Vistadome train from Ollantaytambo. Check in at the Sanctuary Lodge. Visit Aguas Calientes town and thermal baths. Gala dinner at the hotel.</p><p><strong>Day 2 — Machu Picchu (full day):</strong> Private entry to the citadel before public opening at sunrise. 3-hour private guided tour of the most important sectors. Lunch at the hotel with views. Free afternoon to explore the citadel. Optional: ascent of Huayna Picchu or Machu Picchu Mountain (additional charge).</p><p><strong>Day 3 — Aguas Calientes → Cusco:</strong> Breakfast at the hotel. Return Vistadome train to Ollantaytambo, private bus to Cusco.</p>',
                    'incluidos'  => '<ul><li>Round-trip Vistadome train</li><li>2 nights at Belmond Sanctuary Lodge (or 5-star equivalent)</li><li>Machu Picchu entrance tickets (2 visits)</li><li>Certified private guide</li><li>2 breakfasts and 1 gala dinner</li><li>Machu Picchu shuttle bus up and down</li><li>Private transport Cusco ↔ Ollantaytambo</li></ul>',
                    'importante' => '<ul><li>Book at least 3–4 months in advance (hotel has very limited availability)</li><li>Machu Picchu has a daily visitor quota</li><li>Price varies according to hotel availability</li></ul>',
                    'ubicacion'  => 'Cusco - Machu Picchu',
                    'precio'     => 1800,
                    'dias'       => 3,
                    'img'        => 'img/panoramico/belmond-sanctuary-lodge-hotel.webp',
                    'categoria'  => 'luxury,machupicchu',
                    'keywords'   => 'Machu Picchu luxury, Sanctuary Lodge, Machu Picchu hotel, Vistadome train, exclusive Machu Picchu tour, Belmond',
                    'slug'       => 'machu-picchu-luxury-sanctuary-lodge-3-days',
                    'clase'      => 'santuaryLodge',
                ],
            ],

            // ─── 9. PAQUETE ULTIMATE PERU 15D ─────────────────────────────────────────
            [
                'es' => [
                    'nombre'     => 'La Aventura Definitiva: Amazon, Camino Inca y Titicaca 15 Días',
                    'descripcion'=> 'El tour más completo de Perú: selva amazónica, Camino Inca de 4 días, Cusco histórico, Lago Titicaca y la Ruta del Sol. Todo Perú en una sola expedición.',
                    'contenido'  => '<h2>La Aventura Definitiva — El Perú completo en 15 días</h2><p>Este paquete de 15 días es, sin duda, la forma más completa de descubrir Perú. Tres regiones, tres ecosistemas y miles de años de historia: la Amazonia biodiversa de Tambopata, la majestuosidad del Camino Inca hasta Machu Picchu y la profundidad cultural del Lago Titicaca con sus islas flotantes y comunidades ancestrales. Un viaje que cambia la forma de ver el mundo.</p>',
                    'detallado'  => '<h3>Itinerario 15 días</h3><p><strong>Días 1-4 — Lima y Amazonas:</strong> Llegada a Lima, vuelo a Puerto Maldonado, 3 días en lodge ecológico Tambopata (Isla de los Monos, Lago Sandoval, pasarela del dosel, collpa de loros).</p><p><strong>Día 5 — Valle Sagrado:</strong> Vuelo a Cusco, aclimatación, tour Valle Sagrado (Pisac y Ollantaytambo).</p><p><strong>Días 6-9 — Camino Inca clásico 4 días:</strong> Km 82 → Paso Mujer Muerta → Wiñay Wayna → Amanecer en Machu Picchu.</p><p><strong>Día 10 — Cusco libre.</strong></p><p><strong>Día 11 — Ruta del Sol a Puno:</strong> Bus panorámico con paradas en Andahuaylillas, Raqchi y Pukara.</p><p><strong>Días 12-13 — Lago Titicaca:</strong> Islas Flotantes de los Uros, Isla Taquile, noche en familia en Isla Amantaní.</p><p><strong>Día 14 — Puno libre.</strong></p><p><strong>Día 15 — Regreso.</strong></p>',
                    'incluidos'  => '<ul><li>2 vuelos domésticos</li><li>Traslados en todo el circuito</li><li>8 noches hotel 3 estrellas + 2 noches lodge + 3 noches camping + 1 noche homestay</li><li>Permiso Camino Inca y entradas a Machu Picchu</li><li>13 desayunos, 8 almuerzos, 6 cenas</li><li>Guías bilingües profesionales en cada etapa</li><li>Equipo completo de camping y trekking</li></ul>',
                    'importante' => '<ul><li>Reservar el Camino Inca con 6 meses mínimo de anticipación</li><li>El Camino Inca cierra en febrero</li><li>Presupuestar USD 200-250 adicionales para comidas no incluidas</li><li>Nivel físico medio-alto para los días de trekking</li></ul>',
                    'ubicacion'  => 'Lima, Puerto Maldonado, Cusco, Puno',
                    'precio'     => 2778,
                    'dias'       => 15,
                    'img'        => 'img/panoramico/paquetes-peru-tierras-vivas.webp',
                    'categoria'  => 'luxury,hikes,machupicchu',
                    'keywords'   => 'paquete Peru completo, Amazon Camino Inca Titicaca, tour Peru 15 dias, expedicion Peru, aventura Peru completa',
                    'slug'       => 'aventura-definitiva-amazon-camino-inca-titicaca-15-dias',
                    'clase'      => 'machu',
                ],
                'en' => [
                    'nombre'     => 'The Ultimate Peru Adventure: Amazon, Inca Trail & Titicaca 15 Days',
                    'descripcion'=> 'The most complete Peru tour: Amazon rainforest, 4-day Inca Trail, historic Cusco, Lake Titicaca and the Sun Route. All of Peru in one expedition.',
                    'contenido'  => '<h2>The Ultimate Peru Adventure — Complete Peru in 15 Days</h2><p>This 15-day package is without doubt the most comprehensive way to discover Peru. Three regions, three ecosystems and thousands of years of history: the biodiverse Amazonia of Tambopata, the majesty of the Inca Trail to Machu Picchu, and the cultural depth of Lake Titicaca with its floating islands and ancestral communities. A journey that changes the way you see the world.</p>',
                    'detallado'  => '<h3>15-Day Itinerary</h3><p><strong>Days 1–4 — Lima & Amazon:</strong> Arrive Lima, fly to Puerto Maldonado, 3 days at Tambopata eco-lodge (Monkey Island, Lake Sandoval, canopy walkway, dawn parrot clay lick).</p><p><strong>Day 5 — Sacred Valley:</strong> Fly to Cusco, acclimatisation, Sacred Valley tour (Pisac and Ollantaytambo).</p><p><strong>Days 6–9 — Classic Inca Trail 4 days:</strong> Km 82 → Dead Woman\'s Pass → Wiñay Wayna → Sunrise at Machu Picchu.</p><p><strong>Day 10 — Free day in Cusco.</strong></p><p><strong>Day 11 — Sun Route to Puno:</strong> Scenic bus with stops at Andahuaylillas, Raqchi and Pukara.</p><p><strong>Days 12–13 — Lake Titicaca:</strong> Uros Floating Islands, Taquile Island, overnight homestay on Amantaní Island.</p><p><strong>Day 14 — Free day in Puno.</strong></p><p><strong>Day 15 — Departure.</strong></p>',
                    'incluidos'  => '<ul><li>2 domestic flights</li><li>Transfers throughout the circuit</li><li>8 nights 3-star hotel + 2 nights lodge + 3 nights camping + 1 night homestay</li><li>Inca Trail permit and Machu Picchu entrance fees</li><li>13 breakfasts, 8 lunches, 6 dinners</li><li>Professional bilingual guides at each stage</li><li>Complete camping and trekking equipment</li></ul>',
                    'importante' => '<ul><li>Book Inca Trail permit at least 6 months in advance</li><li>Inca Trail closes in February</li><li>Budget an additional USD 200–250 for meals not included</li><li>Medium-high fitness level required for trekking days</li></ul>',
                    'ubicacion'  => 'Lima, Puerto Maldonado, Cusco, Puno',
                    'precio'     => 2778,
                    'dias'       => 15,
                    'img'        => 'img/panoramico/paquetes-peru-tierras-vivas.webp',
                    'categoria'  => 'luxury,hikes,machupicchu',
                    'keywords'   => 'complete Peru package, Amazon Inca Trail Titicaca, Peru 15 day tour, Peru expedition, complete Peru adventure',
                    'slug'       => 'ultimate-peru-adventure-amazon-inca-trail-titicaca-15-days',
                    'clase'      => 'machu',
                ],
            ],

            // ─── 10. TOUR LIMA CIUDAD DE REYES ────────────────────────────────────────
            [
                'es' => [
                    'nombre'     => 'Lima Ciudad de Reyes - Tour Gastronómico y Cultural 2 Días',
                    'descripcion'=> 'Descubre Lima, una de las mejores ciudades gastronómicas del mundo. Visita Miraflores, Barranco, el centro histórico Patrimonio UNESCO y el Larco Museum con las mejores colecciones de arte precolombino.',
                    'contenido'  => '<h2>Lima — La Ciudad de los Reyes</h2><p>Lima es mucho más que un punto de escala. Capital de Perú y declarada Patrimonio de la Humanidad en su centro histórico, Lima combina arquitectura colonial española, gastronomía de fama mundial (hogar de dos de los mejores restaurantes del mundo, Central y Maido) y museos con las colecciones de arte precolombino más importantes del continente. Con este tour de 2 días conocerás sus barrios más emblemáticos: Miraflores con sus acantilados sobre el Pacífico, el bohemio Barranco y el fascinante Larco Museum.</p>',
                    'detallado'  => '<h3>Itinerario 2 días</h3><p><strong>Día 1 — Centro histórico y museos:</strong> Recojo en aeropuerto, traslado al hotel en Miraflores. Tour del centro histórico: Plaza Mayor, Catedral, Palacio de Gobierno, Convento de San Francisco y sus catacumbas. Tarde: Museo Larco (más de 45.000 piezas de oro, plata y cerámica inca). Cena de bienvenida en restaurante de cocina novoandina.</p><p><strong>Día 2 — Miraflores, Barranco y despedida:</strong> Paseo por los acantilados de Miraflores, Parque del Amor, mercado de artesanías de Polvos Azules. Barrio de Barranco: Puente de los Suspiros, galería de arte, calle bohemia. Almuerzo con vista al mar. Traslado al aeropuerto para vuelo a Cusco.</p>',
                    'incluidos'  => '<ul><li>Traslado aeropuerto ↔ hotel</li><li>1 noche de alojamiento en Miraflores</li><li>Guía bilingüe de historia y cultura limeña</li><li>Entrada al Larco Museum</li><li>Entrada a las catacumbas del Convento San Francisco</li><li>1 desayuno y 1 cena</li><li>Transporte privado en todo el recorrido</li></ul>',
                    'importante' => '<ul><li>Ideal como primer o último día de tu viaje por Perú</li><li>Lima puede tener neblina costera (garúa) — no es mal tiempo, es parte del encanto</li><li>Temperatura constante 15-20°C en invierno, 25-28°C en verano</li></ul>',
                    'ubicacion'  => 'Lima',
                    'precio'     => 110,
                    'dias'       => 2,
                    'img'        => 'img/panoramico/ciudad-de-reyes-lima.webp',
                    'categoria'  => 'around',
                    'keywords'   => 'tour Lima, Lima gastronomico, Miraflores Barranco, Larco Museum, centro historico Lima, turismo Lima Peru',
                    'slug'       => 'lima-ciudad-de-reyes-tour-gastronomico-cultural-2-dias',
                    'clase'      => 'lima',
                ],
                'en' => [
                    'nombre'     => 'Lima City of Kings - Gastronomic & Cultural Tour 2 Days',
                    'descripcion'=> 'Discover Lima, one of the world\'s top gastronomic cities. Visit Miraflores, Barranco, the UNESCO World Heritage historic centre and the Larco Museum with the finest pre-Columbian art collections.',
                    'contenido'  => '<h2>Lima — The City of Kings</h2><p>Lima is far more than a stopover. Peru\'s capital and UNESCO World Heritage-listed city centre, Lima combines Spanish colonial architecture, world-renowned gastronomy (home to two of the world\'s best restaurants, Central and Maido) and museums holding the continent\'s most important pre-Columbian art collections. On this 2-day tour you\'ll explore its most iconic neighbourhoods: Miraflores with its cliffs above the Pacific, bohemian Barranco and the fascinating Larco Museum.</p>',
                    'detallado'  => '<h3>2-Day Itinerary</h3><p><strong>Day 1 — Historic centre and museums:</strong> Airport pickup, hotel transfer in Miraflores. Historic centre tour: Plaza Mayor, Cathedral, Government Palace, San Francisco Convent and its catacombs. Afternoon: Larco Museum (over 45,000 pieces of Inca gold, silver and ceramics). Welcome dinner at a Novo-Andean cuisine restaurant.</p><p><strong>Day 2 — Miraflores, Barranco and farewell:</strong> Walk along the Miraflores cliffs, Parque del Amor, Polvos Azules artisan market. Barranco district: Bridge of Sighs, art gallery, bohemian street. Seafront lunch. Transfer to the airport for your Cusco flight.</p>',
                    'incluidos'  => '<ul><li>Airport ↔ hotel transfers</li><li>1 night accommodation in Miraflores</li><li>Bilingual Lima history and culture guide</li><li>Larco Museum entrance</li><li>San Francisco Convent catacombs entrance</li><li>1 breakfast and 1 dinner</li><li>Private transport throughout</li></ul>',
                    'importante' => '<ul><li>Ideal as the first or last day of your Peru journey</li><li>Lima may have coastal fog (garúa) — not bad weather, it\'s part of the charm</li><li>Temperature constant 15–20°C in winter, 25–28°C in summer</li></ul>',
                    'ubicacion'  => 'Lima',
                    'precio'     => 110,
                    'dias'       => 2,
                    'img'        => 'img/panoramico/ciudad-de-reyes-lima.webp',
                    'categoria'  => 'around',
                    'keywords'   => 'Lima tour, Lima gastronomy, Miraflores Barranco, Larco Museum, Lima historic centre, Lima Peru tourism',
                    'slug'       => 'lima-city-of-kings-gastronomic-cultural-tour-2-days',
                    'clase'      => 'lima',
                ],
            ],

        ]; // end $tours

        foreach ($tours as $pair) {
            $es = $pair['es'];
            $en = $pair['en'];

            if (DB::table('tours')->where('slug', $es['slug'])->exists()) {
                $this->command->info("Ya existe (ES): {$es['nombre']} — omitido.");
                continue;
            }

            $tourId = DB::table('tours')->insertGetId(array_merge($es, [
                'resumen'    => null,
                'mapa'       => null,
                'created_at' => now(),
                'updated_at' => now(),
            ]));

            if (! DB::table('toursens')->where('slug', $en['slug'])->exists()) {
                DB::table('toursens')->insert(array_merge($en, [
                    'tour_id'    => $tourId,
                    'resumen'    => null,
                    'mapa'       => null,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]));
            }

            $this->command->info("Creado: {$es['nombre']}");
        }

        \Eloquent::reguard();
    }
}
