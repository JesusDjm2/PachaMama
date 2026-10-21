<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ToursNuevosSeeder extends Seeder
{
    public function run(): void
    {
        \Eloquent::unguard();

        $tours = [
            // ─── 1. MACHU PICCHU 2D/1N ────────────────────────────────────────────────
            [
                'es' => [
                    'nombre'     => 'Machu Picchu 2 Días 1 Noche',
                    'descripcion'=> 'Visita la ciudadela inca de Machu Picchu en 2 días. Viaje en tren panorámico, visita guiada y noche en Aguas Calientes.',
                    'contenido'  => '<h2>Machu Picchu en 2 días</h2><p>Machu Picchu es la joya del Imperio Inca y uno de los destinos más fascinantes del mundo. Con este paquete de 2 días vivirás una experiencia completa: viaje en tren panorámico por el cañón del Urubamba, noche en Aguas Calientes y una mañana de visita guiada a la ciudadela inca al amanecer.</p><p>Nuestro guía profesional te llevará a través de las terrazas agrícolas, los templos sagrados y los miradores con las mejores vistas de las montañas circundantes.</p>',
                    'detallado'  => '<h3>Itinerario detallado</h3><p><strong>Día 1:</strong> Recojo en tu hotel en Cusco, traslado a la estación de tren, viaje panorámico a Aguas Calientes, alojamiento.</p><p><strong>Día 2:</strong> Bus a la ciudadela al amanecer, visita guiada de 2 horas, tiempo libre para explorar, regreso en tren a Cusco.</p>',
                    'incluidos'  => '<ul><li>Recojo y traslados en Cusco</li><li>Tren ida y vuelta (servicio panorámico)</li><li>Bus subida y bajada a Machu Picchu</li><li>Entrada a la ciudadela</li><li>Guía profesional certificado</li><li>1 noche de alojamiento en Aguas Calientes</li></ul>',
                    'importante' => '<ul><li>Llevar pasaporte original (obligatorio para ingresar)</li><li>Zapatos cómodos de montaña</li><li>Protector solar y ropa de lluvia</li><li>La ciudadela tiene cupo diario limitado</li></ul>',
                    'ubicacion'  => 'Cusco',
                    'precio'     => 320,
                    'dias'       => 2,
                    'img'        => 'img/buscador/visita-machu-picchu.webp',
                    'categoria'  => 'machupicchu',
                    'keywords'   => 'Machu Picchu tour, visita Machu Picchu, tour Machu Picchu 2 dias, tren Machu Picchu, Aguas Calientes',
                    'slug'       => 'tour-machu-picchu-2-dias-1-noche',
                    'clase'      => 'machu',
                ],
                'en' => [
                    'nombre'     => 'Machu Picchu 2 Days 1 Night',
                    'descripcion'=> 'Visit the Inca citadel of Machu Picchu in 2 days. Panoramic train ride, guided tour and overnight stay in Aguas Calientes.',
                    'contenido'  => '<h2>Machu Picchu in 2 days</h2><p>Machu Picchu is the crown jewel of the Inca Empire and one of the most breathtaking destinations on earth. This 2-day package gives you a complete experience: a scenic train ride through the Urubamba canyon, an overnight stay in Aguas Calientes, and an early morning guided tour of the Inca citadel at sunrise.</p><p>Our certified guide will lead you through the agricultural terraces, sacred temples and viewpoints with the best views of the surrounding mountains.</p>',
                    'detallado'  => '<h3>Detailed Itinerary</h3><p><strong>Day 1:</strong> Hotel pickup in Cusco, transfer to train station, scenic train to Aguas Calientes, overnight accommodation.</p><p><strong>Day 2:</strong> Early bus to the citadel, 2-hour guided tour, free exploration time, return train to Cusco.</p>',
                    'incluidos'  => '<ul><li>Hotel pickups and transfers in Cusco</li><li>Round-trip train (panoramic service)</li><li>Bus up and down to Machu Picchu</li><li>Entrance ticket to the citadel</li><li>Certified professional guide</li><li>1 night accommodation in Aguas Calientes</li></ul>',
                    'importante' => '<ul><li>Original passport required for entry</li><li>Comfortable hiking shoes required</li><li>Sunscreen and rain gear recommended</li><li>Daily visitor quota is limited — book in advance</li></ul>',
                    'ubicacion'  => 'Cusco',
                    'precio'     => 320,
                    'dias'       => 2,
                    'img'        => 'img/buscador/visita-machu-picchu.webp',
                    'categoria'  => 'machupicchu',
                    'keywords'   => 'Machu Picchu tour, visit Machu Picchu, Machu Picchu 2 days, train to Machu Picchu, Aguas Calientes',
                    'slug'       => 'machu-picchu-2-days-1-night',
                    'clase'      => 'machu',
                ],
            ],

            // ─── 2. VALLE SAGRADO ──────────────────────────────────────────────────────
            [
                'es' => [
                    'nombre'     => 'Valle Sagrado de los Incas - Tour Día Completo',
                    'descripcion'=> 'Recorre el Valle Sagrado visitando Pisac, Ollantaytambo y los mercados artesanales. Un día inolvidable en el corazón del mundo inca.',
                    'contenido'  => '<h2>El Valle Sagrado de los Incas</h2><p>El Valle Sagrado es uno de los lugares más hermosos e históricos de Perú. Situado entre Cusco y Machu Picchu, alberga algunas de las ruinas más impresionantes del Imperio Inca. En este tour de día completo visitarás las ruinas de Pisac con su mercado artesanal, el complejo arqueológico de Ollantaytambo y las salinas de Maras.</p>',
                    'detallado'  => '<h3>Itinerario</h3><p><strong>Mañana:</strong> Salida desde Cusco, visita a las ruinas y mercado de Pisac, almuerzo en restaurante local.</p><p><strong>Tarde:</strong> Visita a las salineras de Maras y el sitio arqueológico de Moray, finalizado en Ollantaytambo, regreso a Cusco al atardecer.</p>',
                    'incluidos'  => '<ul><li>Transporte privado ida y vuelta</li><li>Guía profesional bilingüe</li><li>Entradas a los sitios arqueológicos</li><li>Almuerzo buffet en restaurante local</li></ul>',
                    'importante' => '<ul><li>Llevar ropa abrigada para las alturas</li><li>Protector solar y agua</li><li>Se recomienda efectivo para compras en el mercado</li></ul>',
                    'ubicacion'  => 'Cusco',
                    'precio'     => 75,
                    'dias'       => 1,
                    'img'        => 'img/panoramico/sacred-valley-cusco-valle-sagrado.webp',
                    'categoria'  => 'around',
                    'keywords'   => 'Valle Sagrado Incas, tour Valle Sagrado Cusco, Pisac Ollantaytambo, Maras Moray, viaje cusco',
                    'slug'       => 'valle-sagrado-de-los-incas-dia-completo',
                    'clase'      => 'ollantaytambo',
                ],
                'en' => [
                    'nombre'     => 'Sacred Valley of the Incas - Full Day Tour',
                    'descripcion'=> 'Explore the Sacred Valley visiting Pisac, Ollantaytambo and artisan markets. An unforgettable day in the heart of the Inca world.',
                    'contenido'  => '<h2>The Sacred Valley of the Incas</h2><p>The Sacred Valley is one of the most beautiful and historically rich places in Peru. Located between Cusco and Machu Picchu, it holds some of the most impressive ruins of the Inca Empire. On this full-day tour you will visit the ruins and artisan market of Pisac, the Ollantaytambo archaeological complex, and the Maras salt mines.</p>',
                    'detallado'  => '<h3>Itinerary</h3><p><strong>Morning:</strong> Departure from Cusco, visit Pisac ruins and market, local lunch.</p><p><strong>Afternoon:</strong> Visit Maras salt mines and Moray archaeological site, finishing at Ollantaytambo, return to Cusco at sunset.</p>',
                    'incluidos'  => '<ul><li>Private round-trip transport</li><li>Professional bilingual guide</li><li>Entrance fees to archaeological sites</li><li>Buffet lunch at a local restaurant</li></ul>',
                    'importante' => '<ul><li>Bring warm clothing for high altitudes</li><li>Sunscreen and water recommended</li><li>Cash recommended for market shopping</li></ul>',
                    'ubicacion'  => 'Cusco',
                    'precio'     => 75,
                    'dias'       => 1,
                    'img'        => 'img/panoramico/sacred-valley-cusco-valle-sagrado.webp',
                    'categoria'  => 'around',
                    'keywords'   => 'Sacred Valley Incas, Sacred Valley tour Cusco, Pisac Ollantaytambo, Maras Moray, Cusco day trip',
                    'slug'       => 'sacred-valley-incas-full-day-tour',
                    'clase'      => 'ollantaytambo',
                ],
            ],

            // ─── 3. LARES TREK ─────────────────────────────────────────────────────────
            [
                'es' => [
                    'nombre'     => 'Caminata Lares a Machu Picchu - 4 Días',
                    'descripcion'=> 'Ruta de senderismo alternativa al Camino Inca. Pasa por comunidades andinas, lagunas glaciares y aguas termales antes de llegar a Machu Picchu.',
                    'contenido'  => '<h2>Caminata Lares - La ruta de las comunidades andinas</h2><p>El Trek Lares es una de las rutas de senderismo más auténticas de los Andes peruanos. A diferencia del Camino Inca, esta ruta te sumerge en la vida cotidiana de las comunidades quechuas, atravesando pasos de montaña de más de 4.000 metros, lagunas de colores y aguas termales naturales.</p>',
                    'detallado'  => '<h3>Itinerario 4 días</h3><p><strong>Día 1:</strong> Cusco → Lares, inicio del trekking, campamento.</p><p><strong>Día 2:</strong> Caminata por pasos de altura, visita a comunidades, aguas termales de Lares.</p><p><strong>Día 3:</strong> Descenso a Ollantaytambo, tren a Aguas Calientes.</p><p><strong>Día 4:</strong> Machu Picchu, regreso a Cusco.</p>',
                    'incluidos'  => '<ul><li>Transporte en todos los tramos</li><li>Guía de montaña certificado</li><li>Chef y equipo de cocina en ruta</li><li>Carpas, sleeping bag y colchoneta</li><li>Mulas de carga para equipaje</li><li>Tren Aguas Calientes-Ollantaytambo</li><li>Entrada a Machu Picchu</li><li>Bus subida/bajada Machu Picchu</li></ul>',
                    'importante' => '<ul><li>Nivel físico medio-alto requerido</li><li>Mínimo 2 días de aclimatación en Cusco</li><li>No apto para personas con problemas cardíacos</li></ul>',
                    'ubicacion'  => 'Cusco',
                    'precio'     => 480,
                    'dias'       => 4,
                    'img'        => 'img/panoramico/lares-trek.webp',
                    'categoria'  => 'hikes,machupicchu',
                    'keywords'   => 'Lares Trek, caminata Lares Cusco, trek alternativo Inca Trail, Machu Picchu senderismo, comunidades andinas',
                    'slug'       => 'caminata-lares-machu-picchu-4-dias',
                    'clase'      => 'caminata',
                ],
                'en' => [
                    'nombre'     => 'Lares Trek to Machu Picchu - 4 Days',
                    'descripcion'=> 'Alternative trekking route to the Inca Trail. Pass through Andean communities, glacial lakes and hot springs before reaching Machu Picchu.',
                    'contenido'  => '<h2>Lares Trek — The Andean Communities Route</h2><p>The Lares Trek is one of the most authentic hiking routes in the Peruvian Andes. Unlike the Inca Trail, this route immerses you in the daily life of Quechua communities, crossing mountain passes above 4,000 meters, colorful alpine lakes and natural hot springs.</p>',
                    'detallado'  => '<h3>4-Day Itinerary</h3><p><strong>Day 1:</strong> Cusco → Lares, start of trekking, camp.</p><p><strong>Day 2:</strong> High-altitude passes, community visits, Lares hot springs.</p><p><strong>Day 3:</strong> Descent to Ollantaytambo, train to Aguas Calientes.</p><p><strong>Day 4:</strong> Machu Picchu, return to Cusco.</p>',
                    'incluidos'  => '<ul><li>Transport on all legs</li><li>Certified mountain guide</li><li>Chef and cooking crew en route</li><li>Tents, sleeping bag and mat</li><li>Pack mules for luggage</li><li>Aguas Calientes–Ollantaytambo train</li><li>Machu Picchu entrance ticket</li><li>Bus up/down to Machu Picchu</li></ul>',
                    'importante' => '<ul><li>Medium-high fitness level required</li><li>Minimum 2 days of acclimatization in Cusco</li><li>Not suitable for people with heart conditions</li></ul>',
                    'ubicacion'  => 'Cusco',
                    'precio'     => 480,
                    'dias'       => 4,
                    'img'        => 'img/panoramico/lares-trek.webp',
                    'categoria'  => 'hikes,machupicchu',
                    'keywords'   => 'Lares Trek, Lares trekking Cusco, alternative Inca Trail, Machu Picchu hiking, Andean communities',
                    'slug'       => 'lares-trek-machu-picchu-4-days',
                    'clase'      => 'caminata',
                ],
            ],

            // ─── 4. SALKANTAY TREK ─────────────────────────────────────────────────────
            [
                'es' => [
                    'nombre'     => 'Caminata Salkantay a Machu Picchu - 5 Días',
                    'descripcion'=> 'El trekking más popular como alternativa al Camino Inca. Asciende al imponente nevado Salkantay (6.271 m) y desciende hasta la selva alta hacia Machu Picchu.',
                    'contenido'  => '<h2>Salkantay Trek — La ruta del nevado sagrado</h2><p>El Salkantay Trek es considerado uno de los 25 mejores treks del mundo por la revista National Geographic. Su punto más alto es el Paso Salkantay a 4.638 m, con vistas directas al nevado Salkantay, el segundo más alto del Cusco. La ruta desciende desde los glaciares hasta los cafetales de la ceja de selva, terminando en la mítica Machu Picchu.</p>',
                    'detallado'  => '<h3>Itinerario 5 días</h3><p><strong>Día 1:</strong> Mollepata → Soraypampa (campamento junto a la Laguna Humantay).</p><p><strong>Día 2:</strong> Paso Salkantay (4.638 m) → Chaullay, descenso dramático.</p><p><strong>Día 3:</strong> Chaullay → Santa Teresa, aguas termales de Cocalmayo.</p><p><strong>Día 4:</strong> Santa Teresa → Aguas Calientes en tren o zip-line.</p><p><strong>Día 5:</strong> Machu Picchu, regreso a Cusco.</p>',
                    'incluidos'  => '<ul><li>Transporte Cusco → Mollepata y retorno</li><li>Guía de montaña certificado</li><li>Chef especializado en ruta</li><li>Carpas dobles y sleeping bags de -15°C</li><li>Mulas para equipaje</li><li>Tren Aguas Calientes → Ollantaytambo</li><li>Bus y entrada Machu Picchu</li><li>4 desayunos, 4 almuerzos, 4 cenas</li></ul>',
                    'importante' => '<ul><li>Nivel físico alto requerido</li><li>El clima en la ruta es muy variable</li><li>Mínimo 3 días de aclimatación en Cusco</li></ul>',
                    'ubicacion'  => 'Cusco',
                    'precio'     => 550,
                    'dias'       => 5,
                    'img'        => 'img/panoramico/Salkantay-cusco-Peru-Pacha-mama.webp',
                    'categoria'  => 'hikes,machupicchu',
                    'keywords'   => 'Salkantay Trek, caminata Salkantay Machu Picchu, trek Salkantay Peru, nevado Salkantay, trekking cusco',
                    'slug'       => 'caminata-salkantay-machu-picchu-5-dias',
                    'clase'      => 'aventuras',
                ],
                'en' => [
                    'nombre'     => 'Salkantay Trek to Machu Picchu - 5 Days',
                    'descripcion'=> 'The most popular alternative to the Inca Trail. Ascend the imposing Salkantay snow peak (6,271 m) and descend through cloud forest to Machu Picchu.',
                    'contenido'  => '<h2>Salkantay Trek — The Sacred Snow Peak Route</h2><p>The Salkantay Trek is ranked among the world\'s 25 best treks by National Geographic. Its highest point is Salkantay Pass at 4,638 m, with direct views of the Salkantay snow peak — the second highest in the Cusco region. The route descends from glaciers through coffee plantations in the cloud forest, ending at the mythical Machu Picchu.</p>',
                    'detallado'  => '<h3>5-Day Itinerary</h3><p><strong>Day 1:</strong> Mollepata → Soraypampa (camp beside Humantay Lake).</p><p><strong>Day 2:</strong> Salkantay Pass (4,638 m) → Chaullay, dramatic descent.</p><p><strong>Day 3:</strong> Chaullay → Santa Teresa, Cocalmayo hot springs.</p><p><strong>Day 4:</strong> Santa Teresa → Aguas Calientes by train or zip-line.</p><p><strong>Day 5:</strong> Machu Picchu, return to Cusco.</p>',
                    'incluidos'  => '<ul><li>Transport Cusco → Mollepata and return</li><li>Certified mountain guide</li><li>Specialized trail chef</li><li>Double tents and -15°C sleeping bags</li><li>Pack mules for luggage</li><li>Aguas Calientes → Ollantaytambo train</li><li>Machu Picchu bus and entrance</li><li>4 breakfasts, 4 lunches, 4 dinners</li></ul>',
                    'importante' => '<ul><li>High fitness level required</li><li>Weather on the route is highly variable</li><li>Minimum 3 days acclimatization in Cusco</li></ul>',
                    'ubicacion'  => 'Cusco',
                    'precio'     => 550,
                    'dias'       => 5,
                    'img'        => 'img/panoramico/Salkantay-cusco-Peru-Pacha-mama.webp',
                    'categoria'  => 'hikes,machupicchu',
                    'keywords'   => 'Salkantay Trek, Salkantay Machu Picchu, Salkantay Trek Peru, Salkantay snow peak, Cusco trekking',
                    'slug'       => 'salkantay-trek-machu-picchu-5-days',
                    'clase'      => 'aventuras',
                ],
            ],

            // ─── 5. LAGO TITICACA ──────────────────────────────────────────────────────
            [
                'es' => [
                    'nombre'     => 'Lago Titicaca - Islas Flotantes Uros y Taquile 2 Días',
                    'descripcion'=> 'Visita el lago navegable más alto del mundo. Conoce las Islas Flotantes de los Uros y la Isla Taquile con su cultura viva y artesanía única.',
                    'contenido'  => '<h2>Lago Titicaca — El lago sagrado de los Andes</h2><p>A 3.812 metros de altitud, el Lago Titicaca es el lago navegable más alto del mundo y uno de los lugares más mágicos de Sudamérica. En este tour de 2 días explorarás las famosas Islas Flotantes de los Uros, construidas con totora, y la Isla Taquile, donde los pobladores mantienen vivas tradiciones textiles declaradas Patrimonio Cultural de la Humanidad por la UNESCO.</p>',
                    'detallado'  => '<h3>Itinerario 2 días</h3><p><strong>Día 1:</strong> Salida en bote desde Puno hacia las Islas Flotantes de los Uros, demostración de construcción de balsas, tarde en Isla Taquile, alojamiento en casa de familia local.</p><p><strong>Día 2:</strong> Desayuno en Taquile, senderismo por la isla, regreso a Puno en bote.</p>',
                    'incluidos'  => '<ul><li>Transporte terrestre Cusco–Puno (o solo Puno)</li><li>Bote de ida y vuelta</li><li>Guía bilingüe</li><li>Alojamiento en casa de familia en Taquile</li><li>1 desayuno y 1 almuerzo</li><li>Entradas a las islas</li></ul>',
                    'importante' => '<ul><li>Llevar ropa de abrigo (noches muy frías)</li><li>La altitud puede afectar; beber mate de coca</li><li>Efectivo para artesanías locales</li></ul>',
                    'ubicacion'  => 'Puno',
                    'precio'     => 130,
                    'dias'       => 2,
                    'img'        => 'img/buscador/Titicaca-lake.webp',
                    'categoria'  => 'around',
                    'keywords'   => 'Lago Titicaca tour, Islas Uros, Isla Taquile, Puno Peru, lago mas alto mundo, tour Puno',
                    'slug'       => 'lago-titicaca-islas-uros-taquile-2-dias',
                    'clase'      => 'puno',
                ],
                'en' => [
                    'nombre'     => 'Lake Titicaca - Uros Floating Islands & Taquile 2 Days',
                    'descripcion'=> 'Visit the highest navigable lake in the world. Discover the Uros Floating Islands and Taquile Island with its living culture and unique craftsmanship.',
                    'contenido'  => '<h2>Lake Titicaca — The Sacred Andean Lake</h2><p>At 3,812 meters above sea level, Lake Titicaca is the world\'s highest navigable lake and one of South America\'s most magical destinations. On this 2-day tour you\'ll explore the famous reed Uros Floating Islands and Taquile Island, where the local community maintains UNESCO-recognized textile traditions.</p>',
                    'detallado'  => '<h3>2-Day Itinerary</h3><p><strong>Day 1:</strong> Boat departure from Puno to the Uros Floating Islands, reed boat demonstration, afternoon on Taquile Island, overnight with local family.</p><p><strong>Day 2:</strong> Breakfast on Taquile, island hike, return to Puno by boat.</p>',
                    'incluidos'  => '<ul><li>Overland transport Cusco–Puno (optional)</li><li>Round-trip boat</li><li>Bilingual guide</li><li>Homestay accommodation on Taquile</li><li>1 breakfast and 1 lunch</li><li>Island entrance fees</li></ul>',
                    'importante' => '<ul><li>Warm clothing essential (very cold nights)</li><li>Altitude may affect you; drink coca tea</li><li>Cash recommended for local crafts</li></ul>',
                    'ubicacion'  => 'Puno',
                    'precio'     => 130,
                    'dias'       => 2,
                    'img'        => 'img/buscador/Titicaca-lake.webp',
                    'categoria'  => 'around',
                    'keywords'   => 'Lake Titicaca tour, Uros Islands, Taquile Island, Puno Peru, highest navigable lake, Puno tour',
                    'slug'       => 'lake-titicaca-uros-taquile-2-days',
                    'clase'      => 'puno',
                ],
            ],

            // ─── 6. CAÑÓN DEL COLCA ────────────────────────────────────────────────────
            [
                'es' => [
                    'nombre'     => 'Cañón del Colca y Vuelo del Cóndor - 2 Días',
                    'descripcion'=> 'Visita el segundo cañón más profundo del mundo desde Arequipa. Observa el vuelo del majestuoso cóndor andino en la Cruz del Cóndor.',
                    'contenido'  => '<h2>Cañón del Colca — Tierra del cóndor andino</h2><p>El Cañón del Colca, a 160 km de Arequipa, es uno de los cañones más profundos del mundo con 3.400 metros de profundidad. Es el lugar ideal para observar el vuelo del cóndor andino, el ave voladora más grande del planeta. En este tour de 2 días recorrerás los miradores del cañón, visitarás pueblos coloniales y disfrutarás de las aguas termales de La Calera.</p>',
                    'detallado'  => '<h3>Itinerario 2 días</h3><p><strong>Día 1:</strong> Salida de Arequipa, pueblos de Chivay y Yanque, aguas termales de La Calera, alojamiento.</p><p><strong>Día 2:</strong> Mirador Cruz del Cóndor (vuelo del cóndor al amanecer), recorrido por los miradores, regreso a Arequipa.</p>',
                    'incluidos'  => '<ul><li>Transporte privado ida y vuelta</li><li>Guía bilingüe</li><li>1 noche de alojamiento</li><li>1 desayuno</li><li>Entrada al cañón</li></ul>',
                    'importante' => '<ul><li>El avistamiento del cóndor no está garantizado</li><li>Temperatura muy fría por las mañanas</li><li>El cañón está a 3.600 m de altitud</li></ul>',
                    'ubicacion'  => 'Arequipa',
                    'precio'     => 95,
                    'dias'       => 2,
                    'img'        => 'img/panoramico/mirador-del-condor-arequipa.webp',
                    'categoria'  => 'around',
                    'keywords'   => 'Cañón del Colca, vuelo del cóndor, Cruz del Cóndor, tour Arequipa, Colca Peru',
                    'slug'       => 'canon-del-colca-vuelo-del-condor-2-dias',
                    'clase'      => 'arequipa',
                ],
                'en' => [
                    'nombre'     => 'Colca Canyon & Condor Flight - 2 Days',
                    'descripcion'=> 'Visit one of the world\'s deepest canyons from Arequipa. Watch the majestic Andean condor soar at Cruz del Cóndor viewpoint.',
                    'contenido'  => '<h2>Colca Canyon — Land of the Andean Condor</h2><p>The Colca Canyon, 160 km from Arequipa, is one of the world\'s deepest canyons at 3,400 meters. It is the best place to witness the soaring flight of the Andean condor, the world\'s largest flying bird. On this 2-day tour you\'ll visit canyon viewpoints, colonial villages and the La Calera hot springs.</p>',
                    'detallado'  => '<h3>2-Day Itinerary</h3><p><strong>Day 1:</strong> Departure from Arequipa, Chivay and Yanque villages, La Calera hot springs, overnight accommodation.</p><p><strong>Day 2:</strong> Cruz del Cóndor viewpoint (condor flight at dawn), canyon viewpoints, return to Arequipa.</p>',
                    'incluidos'  => '<ul><li>Private round-trip transport</li><li>Bilingual guide</li><li>1 night accommodation</li><li>1 breakfast</li><li>Canyon entrance fee</li></ul>',
                    'importante' => '<ul><li>Condor sighting is not guaranteed</li><li>Very cold mornings — dress in layers</li><li>The canyon is at 3,600 m altitude</li></ul>',
                    'ubicacion'  => 'Arequipa',
                    'precio'     => 95,
                    'dias'       => 2,
                    'img'        => 'img/panoramico/mirador-del-condor-arequipa.webp',
                    'categoria'  => 'around',
                    'keywords'   => 'Colca Canyon, condor flight, Cruz del Condor, Arequipa tour, Colca Peru',
                    'slug'       => 'colca-canyon-condor-flight-2-days',
                    'clase'      => 'arequipa',
                ],
            ],

            // ─── 7. CHOQUEQUIRAO ───────────────────────────────────────────────────────
            [
                'es' => [
                    'nombre'     => 'Trek a Choquequirao - 4 Días',
                    'descripcion'=> 'Descubre la ciudadela inca de Choquequirao, conocida como la hermana de Machu Picchu. Un trekking exigente para los amantes de la aventura y la arqueología.',
                    'contenido'  => '<h2>Choquequirao — La ciudad perdida de los Incas</h2><p>Choquequirao es una de las ciudadelas incas mejor preservadas de Perú y sólo accesible a pie, lo que la convierte en un destino exclusivo y poco masificado. Ubicada a 3.085 msnm en las laderas del cañón del Apurímac, esta maravilla arqueológica es conocida como "la hermana de Machu Picchu". Actualmente menos del 40% del sitio ha sido excavado.</p>',
                    'detallado'  => '<h3>Itinerario 4 días</h3><p><strong>Día 1:</strong> Cusco → Cachora, inicio del trek, descenso al río Apurímac.</p><p><strong>Día 2:</strong> Ascenso a Choquequirao (6+ horas de senderismo), campamento en la ciudadela.</p><p><strong>Día 3:</strong> Visita detallada de las ruinas de Choquequirao, tarde libre para explorar.</p><p><strong>Día 4:</strong> Regreso a Cachora, transporte a Cusco.</p>',
                    'incluidos'  => '<ul><li>Transporte Cusco–Cachora–Cusco</li><li>Guía arqueológico certificado</li><li>Chef y equipo de cocina</li><li>Carpas y sleeping bags</li><li>Mulas de carga</li><li>Entrada a Choquequirao</li><li>Todas las comidas en ruta</li></ul>',
                    'importante' => '<ul><li>Nivel físico muy alto requerido (40 km A/R)</li><li>Temperatura extrema: calor en el cañón, frío en la cumbre</li><li>Llevar suficiente crema solar y repelente</li></ul>',
                    'ubicacion'  => 'Cusco',
                    'precio'     => 520,
                    'dias'       => 4,
                    'img'        => 'img/panoramico/guia-de-viajes-choquequirao.webp',
                    'categoria'  => 'hikes',
                    'keywords'   => 'Choquequirao trek, ciudad perdida Incas, trekking Choquequirao Cusco, aventura Peru, arqueología Inca',
                    'slug'       => 'trek-choquequirao-4-dias',
                    'clase'      => 'choque',
                ],
                'en' => [
                    'nombre'     => 'Choquequirao Trek - 4 Days',
                    'descripcion'=> 'Discover the Inca citadel of Choquequirao, known as Machu Picchu\'s sister. A challenging trek for lovers of adventure and archaeology.',
                    'contenido'  => '<h2>Choquequirao — The Lost City of the Incas</h2><p>Choquequirao is one of Peru\'s best-preserved Inca citadels and only accessible on foot, making it an exclusive and uncrowded destination. Located at 3,085 m in the Apurímac canyon, this archaeological wonder is known as "Machu Picchu\'s sister." Less than 40% of the site has been excavated to date.</p>',
                    'detallado'  => '<h3>4-Day Itinerary</h3><p><strong>Day 1:</strong> Cusco → Cachora, start of trek, descent to the Apurímac river.</p><p><strong>Day 2:</strong> Ascent to Choquequirao (6+ hours trekking), camp at the citadel.</p><p><strong>Day 3:</strong> Detailed visit of Choquequirao ruins, free afternoon to explore.</p><p><strong>Day 4:</strong> Return to Cachora, transport to Cusco.</p>',
                    'incluidos'  => '<ul><li>Cusco–Cachora–Cusco transport</li><li>Certified archaeological guide</li><li>Chef and cooking crew</li><li>Tents and sleeping bags</li><li>Pack mules for luggage</li><li>Choquequirao entrance fee</li><li>All meals on the trail</li></ul>',
                    'importante' => '<ul><li>Very high fitness level required (40 km round trip)</li><li>Extreme temperatures: hot in the canyon, cold at the summit</li><li>Bring plenty of sunscreen and insect repellent</li></ul>',
                    'ubicacion'  => 'Cusco',
                    'precio'     => 520,
                    'dias'       => 4,
                    'img'        => 'img/panoramico/guia-de-viajes-choquequirao.webp',
                    'categoria'  => 'hikes',
                    'keywords'   => 'Choquequirao trek, lost Inca city, Choquequirao trekking Cusco, Peru adventure, Inca archaeology',
                    'slug'       => 'choquequirao-trek-4-days',
                    'clase'      => 'choque',
                ],
            ],

            // ─── 8. LÍNEAS DE NAZCA ────────────────────────────────────────────────────
            [
                'es' => [
                    'nombre'     => 'Líneas de Nazca y Huacachina - 2 Días desde Lima',
                    'descripcion'=> 'Sobrevuela las enigmáticas Líneas de Nazca y disfruta del oasis de Huacachina con sandboarding y paseo en buggies por las dunas del desierto.',
                    'contenido'  => '<h2>Líneas de Nazca — El misterio del desierto peruano</h2><p>Las Líneas de Nazca son una de las maravillas arqueológicas más misteriosas del mundo, declaradas Patrimonio Cultural de la Humanidad por la UNESCO. Grabadas en el desierto costeño de Ica hace más de 2.000 años, estas figuras gigantescas sólo pueden apreciarse en su totalidad desde el aire. El vuelo en avioneta sobre las líneas es una experiencia verdaderamente única.</p>',
                    'detallado'  => '<h3>Itinerario 2 días</h3><p><strong>Día 1:</strong> Lima → Ica (bus), Huacachina, sandboarding y buggies en las dunas al atardecer, alojamiento.</p><p><strong>Día 2:</strong> Vuelo sobre las Líneas de Nazca desde el aeropuerto de Ica, regreso a Lima o continuación a Cusco.</p>',
                    'incluidos'  => '<ul><li>Transporte Lima–Ica–Lima</li><li>Vuelo en avioneta sobre las Líneas de Nazca</li><li>Tour en buggy y sandboarding en Huacachina</li><li>1 noche de alojamiento en Ica</li><li>Guía bilingüe</li></ul>',
                    'importante' => '<ul><li>El vuelo puede cancelarse por viento fuerte</li><li>Las personas con mareos deben consultar antes</li><li>Llevar protector solar muy alto (desierto)</li></ul>',
                    'ubicacion'  => 'Ica - Lima',
                    'precio'     => 185,
                    'dias'       => 2,
                    'img'        => 'img/panoramico/Lineas-de-nazca-peru-ica.webp',
                    'categoria'  => 'around',
                    'keywords'   => 'Líneas de Nazca, Huacachina, tour Nazca Ica, sandboarding Peru, vuelo Nazca Peru',
                    'slug'       => 'lineas-de-nazca-huacachina-2-dias',
                    'clase'      => 'nazca',
                ],
                'en' => [
                    'nombre'     => 'Nazca Lines & Huacachina Oasis - 2 Days from Lima',
                    'descripcion'=> 'Fly over the enigmatic Nazca Lines and enjoy the Huacachina oasis with sandboarding and dune buggy rides across the desert.',
                    'contenido'  => '<h2>Nazca Lines — Mystery of the Peruvian Desert</h2><p>The Nazca Lines are one of the world\'s most mysterious archaeological wonders, declared a UNESCO World Cultural Heritage site. Etched into the coastal desert of Ica more than 2,000 years ago, these gigantic figures can only be fully appreciated from the air. The light aircraft flight over the lines is a truly unique experience.</p>',
                    'detallado'  => '<h3>2-Day Itinerary</h3><p><strong>Day 1:</strong> Lima → Ica (bus), Huacachina oasis, sunset sandboarding and dune buggy ride, overnight accommodation.</p><p><strong>Day 2:</strong> Flight over the Nazca Lines from Ica airport, return to Lima or continue to Cusco.</p>',
                    'incluidos'  => '<ul><li>Lima–Ica–Lima transport</li><li>Light aircraft flight over the Nazca Lines</li><li>Dune buggy and sandboarding at Huacachina</li><li>1 night accommodation in Ica</li><li>Bilingual guide</li></ul>',
                    'importante' => '<ul><li>Flight may be cancelled due to strong winds</li><li>Persons prone to motion sickness should consult beforehand</li><li>High-factor sunscreen essential (desert conditions)</li></ul>',
                    'ubicacion'  => 'Ica - Lima',
                    'precio'     => 185,
                    'dias'       => 2,
                    'img'        => 'img/panoramico/Lineas-de-nazca-peru-ica.webp',
                    'categoria'  => 'around',
                    'keywords'   => 'Nazca Lines, Huacachina, Nazca Ica tour, sandboarding Peru, Nazca flight Peru',
                    'slug'       => 'nazca-lines-huacachina-2-days',
                    'clase'      => 'nazca',
                ],
            ],

            // ─── 9. AMAZONAS / TAMBOPATA ───────────────────────────────────────────────
            [
                'es' => [
                    'nombre'     => 'Reserva Tambopata - Amazonas 3 Días 2 Noches',
                    'descripcion'=> 'Adéntrate en la selva amazónica peruana en la Reserva Nacional Tambopata. Observa fauna exótica, collpas de guacamayos y convive con la naturaleza más pura del planeta.',
                    'contenido'  => '<h2>Tambopata — El corazón de la Amazonia peruana</h2><p>La Reserva Nacional Tambopata, en Puerto Maldonado, es uno de los ecosistemas más biodiversos del mundo. Con más de 600 especies de aves, 1.200 especies de mariposas y abundantes mamíferos tropicales, este paraíso natural es el destino perfecto para los amantes de la naturaleza y el ecoturismo responsable. En 3 días descubrirás lagunas oxbow, collpas de guacamayos y senderos por la selva primaria.</p>',
                    'detallado'  => '<h3>Itinerario 3 días</h3><p><strong>Día 1:</strong> Vuelo Lima o Cusco → Puerto Maldonado, traslado en bote al lodge en la selva, caminata nocturna.</p><p><strong>Día 2:</strong> Visita a la collpa de guacamayos al amanecer, laguna Cocococha, observación de fauna.</p><p><strong>Día 3:</strong> Caminata matutina por la selva, regreso a Puerto Maldonado, vuelo de retorno.</p>',
                    'incluidos'  => '<ul><li>Traslados aeropuerto y en bote</li><li>2 noches en lodge ecológico en la reserva</li><li>Todas las comidas</li><li>Guía naturalista especializado</li><li>Todas las actividades del programa</li></ul>',
                    'importante' => '<ul><li>Llevar repelente de insectos fuerte (DEET)</li><li>Vacuna de fiebre amarilla recomendada</li><li>Ropa de manga larga y botas impermeables</li></ul>',
                    'ubicacion'  => 'Puerto Maldonado',
                    'precio'     => 390,
                    'dias'       => 3,
                    'img'        => 'img/panoramico/tambopata-jungle-Pacha-mama.webp',
                    'categoria'  => 'around',
                    'keywords'   => 'Tambopata selva, amazonas Peru tour, Puerto Maldonado, ecoturismo Peru, guacamayos Tambopata',
                    'slug'       => 'reserva-tambopata-amazonas-3-dias',
                    'clase'      => 'selva',
                ],
                'en' => [
                    'nombre'     => 'Tambopata Reserve - Amazon Jungle 3 Days 2 Nights',
                    'descripcion'=> 'Venture into the Peruvian Amazon rainforest in the Tambopata National Reserve. Spot exotic wildlife, macaw clay licks and experience the world\'s purest nature.',
                    'contenido'  => '<h2>Tambopata — The Heart of the Peruvian Amazon</h2><p>The Tambopata National Reserve, near Puerto Maldonado, is one of the world\'s most biodiverse ecosystems. With over 600 bird species, 1,200 butterfly species and abundant tropical mammals, this natural paradise is the perfect destination for nature lovers and responsible ecotourism. In 3 days you\'ll discover oxbow lakes, macaw clay licks and trails through primary rainforest.</p>',
                    'detallado'  => '<h3>3-Day Itinerary</h3><p><strong>Day 1:</strong> Flight Lima or Cusco → Puerto Maldonado, boat transfer to jungle lodge, night walk.</p><p><strong>Day 2:</strong> Dawn macaw clay lick visit, Cocha Salvador oxbow lake, wildlife observation.</p><p><strong>Day 3:</strong> Morning jungle hike, return to Puerto Maldonado, return flight.</p>',
                    'incluidos'  => '<ul><li>Airport and boat transfers</li><li>2 nights at an eco-lodge in the reserve</li><li>All meals included</li><li>Specialist naturalist guide</li><li>All scheduled activities</li></ul>',
                    'importante' => '<ul><li>Strong insect repellent (DEET) essential</li><li>Yellow fever vaccination recommended</li><li>Long-sleeved clothing and waterproof boots required</li></ul>',
                    'ubicacion'  => 'Puerto Maldonado',
                    'precio'     => 390,
                    'dias'       => 3,
                    'img'        => 'img/panoramico/tambopata-jungle-Pacha-mama.webp',
                    'categoria'  => 'around',
                    'keywords'   => 'Tambopata jungle, Amazon Peru tour, Puerto Maldonado, ecotourism Peru, macaw clay lick',
                    'slug'       => 'tambopata-reserve-amazon-jungle-3-days',
                    'clase'      => 'selva',
                ],
            ],

            // ─── 10. HUCHUY QOSQO ─────────────────────────────────────────────────────
            [
                'es' => [
                    'nombre'     => 'Huchuy Qosqo - Caminata y Ruinas Incas 1 Día',
                    'descripcion'=> 'Descubre las ruinas incas de Huchuy Qosqo con vistas panorámicas al Valle Sagrado. Una caminata moderada de día completo perfecta para quienes buscan aventura sin multitudes.',
                    'contenido'  => '<h2>Huchuy Qosqo — El pequeño Cusco</h2><p>Huchuy Qosqo, que en quechua significa "Pequeño Cusco", es un sitio arqueológico inca ubicado a 3.600 msnm sobre el Valle Sagrado. Menos visitado que otros sitios, este lugar ofrece una experiencia íntima con ruinas bien conservadas, terrazas agrícolas y vistas espectaculares. La ruta de ascenso pasa por comunidades andinas y paisajes de puna hasta llegar a la ciudadela.</p>',
                    'detallado'  => '<h3>Itinerario 1 día</h3><p><strong>Mañana:</strong> Recojo en hotel en Cusco, traslado a Lamay, inicio de la caminata (3-4 horas de ascenso).</p><p><strong>Mediodía:</strong> Llegada a Huchuy Qosqo, visita guiada a las ruinas y almuerzo tipo picnic con vista al Valle Sagrado.</p><p><strong>Tarde:</strong> Descenso a Chinchero o regreso a Lamay, retorno a Cusco.</p>',
                    'incluidos'  => '<ul><li>Transporte desde/hacia Cusco</li><li>Guía local certificado</li><li>Almuerzo tipo picnic</li><li>Entrada al sitio arqueológico</li><li>Bastones de trekking (si se necesitan)</li></ul>',
                    'importante' => '<ul><li>Nivel físico moderado (700 m de desnivel positivo)</li><li>Ropa en capas: puede hacer frío en la cumbre</li><li>Llevar agua y snacks adicionales</li></ul>',
                    'ubicacion'  => 'Cusco',
                    'precio'     => 65,
                    'dias'       => 1,
                    'img'        => 'img/panoramico/huchuy-qosqo-tour-cusco.webp',
                    'categoria'  => 'hikes,around',
                    'keywords'   => 'Huchuy Qosqo tour, ruinas incas Cusco, caminata Valle Sagrado, trekking Cusco dia completo',
                    'slug'       => 'huchuy-qosqo-caminata-ruinas-1-dia',
                    'clase'      => 'huchuy',
                ],
                'en' => [
                    'nombre'     => 'Huchuy Qosqo - Hiking & Inca Ruins Full Day',
                    'descripcion'=> 'Discover the Inca ruins of Huchuy Qosqo with panoramic views over the Sacred Valley. A moderate full-day hike perfect for those seeking adventure without the crowds.',
                    'contenido'  => '<h2>Huchuy Qosqo — The Little Cusco</h2><p>Huchuy Qosqo, which means "Little Cusco" in Quechua, is an Inca archaeological site located at 3,600 m above the Sacred Valley. Less visited than other sites, this place offers an intimate experience with well-preserved ruins, agricultural terraces and spectacular views. The ascent passes through Andean communities and puna highlands to reach the citadel.</p>',
                    'detallado'  => '<h3>1-Day Itinerary</h3><p><strong>Morning:</strong> Hotel pickup in Cusco, transfer to Lamay, start of hike (3–4 hours ascent).</p><p><strong>Midday:</strong> Arrival at Huchuy Qosqo, guided tour of the ruins and picnic lunch with Sacred Valley views.</p><p><strong>Afternoon:</strong> Descent to Chinchero or back to Lamay, return to Cusco.</p>',
                    'incluidos'  => '<ul><li>Transport from/to Cusco</li><li>Certified local guide</li><li>Picnic lunch</li><li>Archaeological site entrance fee</li><li>Trekking poles (if needed)</li></ul>',
                    'importante' => '<ul><li>Moderate fitness level required (700 m elevation gain)</li><li>Layer clothing: it can be cold at the top</li><li>Bring extra water and snacks</li></ul>',
                    'ubicacion'  => 'Cusco',
                    'precio'     => 65,
                    'dias'       => 1,
                    'img'        => 'img/panoramico/huchuy-qosqo-tour-cusco.webp',
                    'categoria'  => 'hikes,around',
                    'keywords'   => 'Huchuy Qosqo tour, Inca ruins Cusco, Sacred Valley hike, Cusco trekking day trip',
                    'slug'       => 'huchuy-qosqo-hiking-inca-ruins-full-day',
                    'clase'      => 'huchuy',
                ],
            ],
        ];

        foreach ($tours as $pair) {
            $es = $pair['es'];
            $en = $pair['en'];

            // Skip if already exists (safe to run multiple times)
            if (DB::table('tours')->where('slug', $es['slug'])->exists()) {
                $this->command->info("Ya existe (ES): {$es['nombre']} — omitido.");
                continue;
            }

            // Insert Spanish tour
            $tourId = DB::table('tours')->insertGetId(array_merge($es, [
                'resumen'    => null,
                'mapa'       => null,
                'created_at' => now(),
                'updated_at' => now(),
            ]));

            // Insert English tour linked to Spanish
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
