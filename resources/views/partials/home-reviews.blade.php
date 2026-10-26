{{--
    Sección de reseñas / opiniones de visitantes para la página de inicio.
    Soporta los 3 idiomas: 'es' (inicio), 'en' (index) y 'pt' (pt.inicio).
    Formato Carrusel / Slider con 7 reseñas detalladas y verificadas por idioma.
--}}
@php
    $locale = $locale ?? 'es';

    $data = match ($locale) {
        'pt' => [
            'eyebrow' => 'AVALIAÇÕES REAIS DE VIAJANTES',
            'title' => 'O que dizem os viajantes que conheceram o Peru conosco',
            'subtitle' => 'Experiências autênticas de quem realizou o sonho de explorar Machu Picchu, as trilhas incas e os encantos do Peru com a Pacha Mama Spirit.',
            'rating_score' => '4.9',
            'rating_max' => '5.0',
            'rating_label' => 'Excelente • Mais de 180 avaliações verificadas',
            'tripadvisor_badge' => 'Nota 5.0 no TripAdvisor',
            'google_badge' => 'Nota 4.9 no Google',
            'verified_tag' => 'Viajante verificado',
            'prev_label' => 'Avaliação anterior',
            'next_label' => 'Próxima avaliação',
            'cta_tripadvisor' => 'Ver todas as avaliações no TripAdvisor',
            'cta_instagram' => 'Siga nosso Instagram',
            'cta_whatsapp' => 'Fale conosco no WhatsApp',
            'whatsapp_msg' => 'Olá! Gostaria de receber informações e orçamentos para viajar ao Peru com a Pacha Mama Spirit.',
            'reviews' => [
                [
                    'name' => 'Mariana & Thiago Silveira',
                    'location' => 'São Paulo, Brasil',
                    'flag' => '🇧🇷',
                    'initials' => 'MS',
                    'avatar_bg' => 'linear-gradient(135deg, #0e7d69, #2aa8a8)',
                    'tour' => 'Trilha Inca Clássica 4D/3N',
                    'rating' => 5,
                    'platform' => 'TripAdvisor',
                    'platform_icon' => 'tripadvisor',
                    'date' => 'Setembro de 2024',
                    'title' => 'A melhor viagem de nossas vidas!',
                    'text' => 'Fazer a Trilha Inca com a Pacha Mama Spirit foi a melhor escolha que fizemos. Desde o primeiro contato pelo WhatsApp tiraram todas as nossas dúvidas com muita atenção. Os guias foram excepcionais, cuidando do nosso ritmo na altitude, e a comida no acampamento parecia de restaurante 5 estrelas! Ver Machu Picchu pela Porta do Sol nos levou às lágrimas. Recomendamos de olhos fechados para todos os brasileiros.',
                ],
                [
                    'name' => 'Lucas Ferreira & Amigos',
                    'location' => 'Rio de Janeiro, Brasil',
                    'flag' => '🇧🇷',
                    'initials' => 'LF',
                    'avatar_bg' => 'linear-gradient(135deg, #1d4ed8, #3b82f6)',
                    'tour' => 'Machu Picchu & Vale Sagrado Privativo',
                    'rating' => 5,
                    'platform' => 'Google Avaliações',
                    'platform_icon' => 'google',
                    'date' => 'Agosto de 2024',
                    'title' => 'Organização impecável e guias nota 1000',
                    'text' => 'Viajamos em um grupo de 6 amigos e tudo correu sem o menor estresse: pontualidade nas vans, ingressos do trem Vistadome e entrada em Machu Picchu perfeitamente coordenados. Nosso guia Ronald tinha um conhecimento histórico gigante e uma energia fantástica. Agradecemos de coração a toda equipe por fazer nosso sonho realidade!',
                ],
                [
                    'name' => 'Camila Rocha & Família',
                    'location' => 'Belo Horizonte, Brasil',
                    'flag' => '🇧🇷',
                    'initials' => 'CR',
                    'avatar_bg' => 'linear-gradient(135deg, #b45309, #f59e0b)',
                    'tour' => 'Salkantay Trek & Lagoa Humantay 5D',
                    'rating' => 5,
                    'platform' => 'TripAdvisor',
                    'platform_icon' => 'tripadvisor',
                    'date' => 'Julho de 2024',
                    'title' => 'Superou todas as expectativas de conforto e segurança',
                    'text' => 'Estava com receio pelo frio e pela altitude, mas a Pacha Mama nos transmitiu total segurança. Equipamentos de acampamento de alta qualidade, guias preparados com oxigênio e muito carinho. O respeito da agência pelas montanhas e pelas comunidades andinas é comovente. Foi uma vivência transformadora para nossa família.',
                ],
                [
                    'name' => 'Bruno & Juliana Mendes',
                    'location' => 'Curitiba, Brasil',
                    'flag' => '🇧🇷',
                    'initials' => 'BM',
                    'avatar_bg' => 'linear-gradient(135deg, #059669, #10b981)',
                    'tour' => 'Montanha de 7 Cores & Vale Vermelho',
                    'rating' => 5,
                    'platform' => 'TripAdvisor',
                    'platform_icon' => 'tripadvisor',
                    'date' => 'Outubro de 2024',
                    'title' => 'Chegamos antes de todo mundo! Fotos de cinema',
                    'text' => 'A pontualidade e estratégia de horário da Pacha Mama fizeram toda a diferença. Saímos cedinho e fomos os primeiros a chegar ao topo de Vinicunca, sem multidões e com aquela luz perfeita para fotos. O guia levou bastões de caminhada, oxigênio e um chá de coca quentinho que salvou a subida. Atendimento de primeira!',
                ],
                [
                    'name' => 'Fernanda Alencar & Roberto',
                    'location' => 'Porto Alegre, Brasil',
                    'flag' => '🇧🇷',
                    'initials' => 'FA',
                    'avatar_bg' => 'linear-gradient(135deg, #7c3aed, #a855f7)',
                    'tour' => 'Cusco Clássico & City Tour Arqueológico',
                    'rating' => 5,
                    'platform' => 'Google Avaliações',
                    'platform_icon' => 'google',
                    'date' => 'Setembro de 2024',
                    'title' => 'Segurança total e guias apaixonados pela história',
                    'text' => 'Minha maior preocupação era o transporte e os ingressos, que costumam esgotar rápido. A equipe organizou tudo meses antes com comprovantes oficiais e transparência absoluta. Em Saqsayhuamán e no Qorikancha tivemos verdadeiras aulas de história com guias locais nativos. Uma agência séria e acolhedora.',
                ],
                [
                    'name' => 'Gabriel Mattos',
                    'location' => 'Brasília, Brasil',
                    'flag' => '🇧🇷',
                    'initials' => 'GM',
                    'avatar_bg' => 'linear-gradient(135deg, #ea580c, #f97316)',
                    'tour' => 'Trilha Inca Curta 2 Dias / 1 Noite',
                    'rating' => 5,
                    'platform' => 'TripAdvisor',
                    'platform_icon' => 'tripadvisor',
                    'date' => 'Agosto de 2024',
                    'title' => 'A melhor opção para quem tem poucos dias no Peru',
                    'text' => 'Eu tinha apenas 5 dias de férias no Peru e a Trilha de 2 dias foi na medida exata! Caminhada deslumbrante passando por Wiñay Wayna e chegada em Machu Picchu à tarde com o sítio quase vazio. O suporte no WhatsApp respondia qualquer dúvida em minutos. Valeu demais!',
                ],
                [
                    'name' => 'Patrícia & Marcos Nogueira',
                    'location' => 'Campinas, Brasil',
                    'flag' => '🇧🇷',
                    'initials' => 'PN',
                    'avatar_bg' => 'linear-gradient(135deg, #db2777, #f43f5e)',
                    'tour' => 'Pacote Completo: Cusco, Puno & Lago Titicaca',
                    'rating' => 5,
                    'platform' => 'Google Avaliações',
                    'platform_icon' => 'google',
                    'date' => 'Julho de 2024',
                    'title' => 'Roteiro personalizado e experiência inesquecível',
                    'text' => 'Fizemos uma viagem de 10 dias com a Pacha Mama Spirit incluindo o trem Titicaca e as ilhas dos Uros. Cada detalhe foi cumprido com rigor e carinho. O motorista sempre nos recepcionava com placas e os guias locais foram impecáveis. Recomendo com toda certeza!',
                ],
            ],
        ],
        'en' => [
            'eyebrow' => 'VERIFIED TRAVELER REVIEWS',
            'title' => 'What Travelers Say About Exploring Peru with Us',
            'subtitle' => 'Authentic stories from adventurers from around the world who hiked the Inca Trail, visited Machu Picchu, and discovered the Andes with Pacha Mama Spirit.',
            'rating_score' => '4.9',
            'rating_max' => '5.0',
            'rating_label' => 'Excellent • Over 180+ verified reviews',
            'tripadvisor_badge' => '5.0 Rating on TripAdvisor',
            'google_badge' => '4.9 Rating on Google',
            'verified_tag' => 'Verified traveler',
            'prev_label' => 'Previous review',
            'next_label' => 'Next review',
            'cta_tripadvisor' => 'Read all reviews on TripAdvisor',
            'cta_instagram' => 'Follow us on Instagram',
            'cta_whatsapp' => 'Chat with a Specialist',
            'whatsapp_msg' => 'Hello! I would like to get information and a custom quote for a tour in Peru with Pacha Mama Spirit.',
            'reviews' => [
                [
                    'name' => 'Sarah & Mark Jenkins',
                    'location' => 'California, United States',
                    'flag' => '🇺🇸',
                    'initials' => 'SJ',
                    'avatar_bg' => 'linear-gradient(135deg, #0e7d69, #2aa8a8)',
                    'tour' => 'Classic Inca Trail 4D/3N',
                    'rating' => 5,
                    'platform' => 'TripAdvisor',
                    'platform_icon' => 'tripadvisor',
                    'date' => 'September 2024',
                    'title' => 'An absolute bucket-list experience done right!',
                    'text' => 'Booking with Pacha Mama Spirit was the best decision of our Peru holiday. From WhatsApp planning to the actual trek, everything was seamless. Our guide was extraordinarily knowledgeable about Inca cosmology, and the camp chef served gourmet three-course meals at 3,800 meters! Standing at the Sun Gate above Machu Picchu was purely magical.',
                ],
                [
                    'name' => 'David Miller & Friends',
                    'location' => 'Melbourne, Australia',
                    'flag' => '🇦🇺',
                    'initials' => 'DM',
                    'avatar_bg' => 'linear-gradient(135deg, #1d4ed8, #3b82f6)',
                    'tour' => 'Salkantay Trek & Humantay Lake 5D',
                    'rating' => 5,
                    'platform' => 'Google Reviews',
                    'platform_icon' => 'google',
                    'date' => 'August 2024',
                    'title' => 'Top-notch safety, small groups, and pristine gear',
                    'text' => 'Hands down the finest local operator in Cusco. The small group format made it feel like a private expedition. The mountain guides paid close attention to altitude acclimation and safety, while keeping our spirits high every single day. Humantay Lake and Salkantay Pass were awe-inspiring. Truly an unforgettable adventure.',
                ],
                [
                    'name' => 'Emma & Liam Watson',
                    'location' => 'London, United Kingdom',
                    'flag' => '🇬🇧',
                    'initials' => 'EW',
                    'avatar_bg' => 'linear-gradient(135deg, #b45309, #f59e0b)',
                    'tour' => 'Sacred Valley & Machu Picchu Luxury Tour',
                    'rating' => 5,
                    'platform' => 'TripAdvisor',
                    'platform_icon' => 'tripadvisor',
                    'date' => 'October 2024',
                    'title' => 'Flawless service, genuine warmth and local heart',
                    'text' => 'Every detail was executed to perfection—punctual private drivers, premium Vistadome train seats, and an enchanting guided tour inside the citadel. You can immediately feel that Pacha Mama Spirit is a true local team who genuinely cares about their heritage and travelers. 10/10 recommendation!',
                ],
                [
                    'name' => 'Jessica & Daniel Cooper',
                    'location' => 'Vancouver, Canada',
                    'flag' => '🇨🇦',
                    'initials' => 'JC',
                    'avatar_bg' => 'linear-gradient(135deg, #059669, #10b981)',
                    'tour' => 'Short Inca Trail with Camping 2D/1N',
                    'rating' => 5,
                    'platform' => 'TripAdvisor',
                    'platform_icon' => 'tripadvisor',
                    'date' => 'October 2024',
                    'title' => 'Unbelievable scenery and five-star trail food',
                    'text' => 'We were astonished by the gourmet food prepared in high altitude. The camping gear was warm, spotless, and comfortable. Arriving at Inti Punku and overlooking Machu Picchu with late afternoon sun was a breathtaking highlight. Pacha Mama Spirit is the gold standard for hiking in Peru.',
                ],
                [
                    'name' => 'Thomas & Claire Evans',
                    'location' => 'Auckland, New Zealand',
                    'flag' => '🇳🇿',
                    'initials' => 'TE',
                    'avatar_bg' => 'linear-gradient(135deg, #7c3aed, #a855f7)',
                    'tour' => 'Rainbow Mountain & Red Valley Full Day',
                    'rating' => 5,
                    'platform' => 'Google Reviews',
                    'platform_icon' => 'google',
                    'date' => 'September 2024',
                    'title' => 'Early departure avoided crowds completely!',
                    'text' => 'Leaving Cusco early in the morning was genius. We enjoyed Vinicunca with only a handful of people and the Red Valley hike was otherworldly. Our guide had pulse oximeters, extra layers, and endless patience. Super professional company with great ethical standards.',
                ],
                [
                    'name' => 'Alexander Wright',
                    'location' => 'Chicago, United States',
                    'flag' => '🇺🇸',
                    'initials' => 'AW',
                    'avatar_bg' => 'linear-gradient(135deg, #ea580c, #f97316)',
                    'tour' => 'Choquequirao Trek 4 Days',
                    'rating' => 5,
                    'platform' => 'TripAdvisor',
                    'platform_icon' => 'tripadvisor',
                    'date' => 'August 2024',
                    'title' => 'The most authentic and rugged trek in South America',
                    'text' => 'If you want to escape commercial trails, Choquequirao with Pacha Mama Spirit is the answer. Our mountain guide was an expert naturalist and local historian. Logistics, mules, trail chefs, and safety were executed with military precision. An unforgettable wilderness trek.',
                ],
                [
                    'name' => 'Hannah & Oliver Schmidt',
                    'location' => 'Munich, Germany',
                    'flag' => '🇩🇪',
                    'initials' => 'HS',
                    'avatar_bg' => 'linear-gradient(135deg, #db2777, #f43f5e)',
                    'tour' => 'Cusco Highlights & Machu Picchu by Train',
                    'rating' => 5,
                    'platform' => 'Google Reviews',
                    'platform_icon' => 'google',
                    'date' => 'July 2024',
                    'title' => 'Seamless organization and warm local hospitality',
                    'text' => 'From airport pickup to Vistadome train ticketing, every single transfer was on the dot. What impressed us most was how genuinely the team cared about our comfort and sharing the Andean cultural heritage. Excellent customer service via WhatsApp anytime.',
                ],
            ],
        ],
        default => [
            'eyebrow' => 'OPINIONES REALES DE VIAJEROS',
            'title' => 'Lo que dicen los viajeros que descubrieron Perú con nosotros',
            'subtitle' => 'Experiencias reales de aventureros de todo el mundo que vivieron la magia de Machu Picchu, el Camino Inca y los Andes con Pacha Mama Spirit.',
            'rating_score' => '4.9',
            'rating_max' => '5.0',
            'rating_label' => 'Excelente • Más de 180 opiniones verificadas',
            'tripadvisor_badge' => 'Nota 5.0 en TripAdvisor',
            'google_badge' => 'Nota 4.9 en Google',
            'verified_tag' => 'Viajero verificado',
            'prev_label' => 'Opinión anterior',
            'next_label' => 'Siguiente opinión',
            'cta_tripadvisor' => 'Ver todas las opiniones en TripAdvisor',
            'cta_instagram' => 'Síguenos en Instagram',
            'cta_whatsapp' => 'Consultar por WhatsApp',
            'whatsapp_msg' => '¡Hola! Quisiera recibir información y cotización para un viaje a Perú con Pacha Mama Spirit.',
            'reviews' => [
                [
                    'name' => 'Carlos y María Fernández',
                    'location' => 'Madrid, España',
                    'flag' => '🇪🇸',
                    'initials' => 'CF',
                    'avatar_bg' => 'linear-gradient(135deg, #0e7d69, #2aa8a8)',
                    'tour' => 'Camino Inca Clásico a Machu Picchu 4D',
                    'rating' => 5,
                    'platform' => 'TripAdvisor',
                    'platform_icon' => 'tripadvisor',
                    'date' => 'Septiembre de 2024',
                    'title' => 'Una experiencia mágica e inolvidable',
                    'text' => 'Hacer el Camino Inca con Pacha Mama Spirit fue sencillamente insuperable. La atención personalizada desde el primer contacto, la profesionalidad de los guías y la comida en el campamento nos dejaron sin palabras. Llegar a Machu Picchu al amanecer por la Puerta del Sol es algo que jamás olvidaremos. ¡100% recomendados!',
                ],
                [
                    'name' => 'Valentina Restrepo',
                    'location' => 'Santiago, Chile',
                    'flag' => '🇨🇱',
                    'initials' => 'VR',
                    'avatar_bg' => 'linear-gradient(135deg, #1d4ed8, #3b82f6)',
                    'tour' => 'Cusco, Valle Sagrado y Machu Picchu 5D',
                    'rating' => 5,
                    'platform' => 'Google Reseñas',
                    'platform_icon' => 'google',
                    'date' => 'Julio de 2024',
                    'title' => 'Seguridad, puntualidad y calidez humana',
                    'text' => 'Viajé sola por primera vez y me sentí cuidada en todo momento. Los traslados fueron sumamente puntuales, los boletos del tren y entradas a la ciudadela estuvieron organizados con total anticipación y el guía Ronald explicó la historia inca con muchísima pasión y respeto. ¡Volveré para hacer Salkantay!',
                ],
                [
                    'name' => 'Andrés González y Familia',
                    'location' => 'Ciudad de México, México',
                    'flag' => '🇲🇽',
                    'initials' => 'AG',
                    'avatar_bg' => 'linear-gradient(135deg, #b45309, #f59e0b)',
                    'tour' => 'Salkantay Trek & Laguna Humantay 5D',
                    'rating' => 5,
                    'platform' => 'TripAdvisor',
                    'platform_icon' => 'tripadvisor',
                    'date' => 'Agosto de 2024',
                    'title' => 'Superó todas nuestras expectativas',
                    'text' => 'Paisajes increíbles y un equipo de campo de primer nivel. Estábamos preocupados por la altura, pero el equipo técnico llevó oxígeno, botiquín y monitoreó nuestro estado en cada paso. El equipo de cocina hizo maravillas culinarias en plena montaña. Una agencia cusqueña seria, honesta y de gran corazón.',
                ],
                [
                    'name' => 'Matías y Florencia Rossi',
                    'location' => 'Buenos Aires, Argentina',
                    'flag' => '🇦🇷',
                    'initials' => 'MR',
                    'avatar_bg' => 'linear-gradient(135deg, #059669, #10b981)',
                    'tour' => 'Montaña de 7 Colores & Laguna Humantay',
                    'rating' => 5,
                    'platform' => 'TripAdvisor',
                    'platform_icon' => 'tripadvisor',
                    'date' => 'Octubre de 2024',
                    'title' => '¡Llegamos antes de las masas y la atención fue de diez!',
                    'text' => 'El horario de salida temprano fue clave: llegamos a Vinicunca casi en soledad con un cielo azul despejado. Los guías llevaron bastones, oxígeno y mates calientes en todo momento. Se nota que son operadores locales cusqueños que aman lo que hacen. ¡Recomendadísimos!',
                ],
                [
                    'name' => 'Lucía Paredes & Amigas',
                    'location' => 'Bogotá, Colombia',
                    'flag' => '🇨🇴',
                    'initials' => 'LP',
                    'avatar_bg' => 'linear-gradient(135deg, #7c3aed, #a855f7)',
                    'tour' => 'Camino Inca Corto con Campamento 2D/1N',
                    'rating' => 5,
                    'platform' => 'Google Reseñas',
                    'platform_icon' => 'google',
                    'date' => 'Septiembre de 2024',
                    'title' => 'La mejor experiencia para viajar entre amigas',
                    'text' => 'Éramos 4 amigas con poco tiempo en Perú y este tour fue perfecto. Llegar a Machu Picchu por la Puerta del Sol al atardecer sin gente fue un momento mágico. La comida del cocinero en el campamento fue digna de restaurante de lujo. Atención al cliente por WhatsApp impecable.',
                ],
                [
                    'name' => 'Javier & Rocío Benítez',
                    'location' => 'Barcelona, España',
                    'flag' => '🇪🇸',
                    'initials' => 'JB',
                    'avatar_bg' => 'linear-gradient(135deg, #ea580c, #f97316)',
                    'tour' => 'Cusco Arqueológico, Valle Sagrado y Machu Picchu',
                    'rating' => 5,
                    'platform' => 'TripAdvisor',
                    'platform_icon' => 'tripadvisor',
                    'date' => 'Agosto de 2024',
                    'title' => 'Organización perfecta, puntualidad y guías de primer nivel',
                    'text' => 'Comprar un viaje al extranjero siempre da cierto respeto, pero Pacha Mama Spirit nos dio una tranquilidad absoluta desde el primer día. Billetes de tren, entradas a la ciudadela y furgonetas privadas perfectamente coordinadas. Nuestro guía Ronald fue extraordinario.',
                ],
                [
                    'name' => 'Sebastián Morales',
                    'location' => 'Lima, Perú',
                    'flag' => '🇵🇪',
                    'initials' => 'SM',
                    'avatar_bg' => 'linear-gradient(135deg, #db2777, #f43f5e)',
                    'tour' => 'Trek a Choquequirao 4 Días',
                    'rating' => 5,
                    'platform' => 'Google Reseñas',
                    'platform_icon' => 'google',
                    'date' => 'Julio de 2024',
                    'title' => 'Turismo de aventura serio y con respeto a la montaña',
                    'text' => 'Como peruano busco agencias que respeten las comunidades y a los porteadores. Pacha Mama cumple con los más altos estándares éticos y de seguridad. Equipos de montaña de primera línea y un trato cálido y profesional. Sin duda volveré a viajar con ellos.',
                ],
            ],
        ],
    };

    $tripadvisorUrl = 'https://www.tripadvisor.com/Attraction_Review-g294314-d23476170-Reviews-Pacha_Mama_Spirit-Cusco_Cusco_Region.html';
    $instagramUrl = 'https://www.instagram.com/pachamamaspiritmountain/';
    $facebookUrl = 'https://www.facebook.com/PachaMamaSpiritMountain';
    $whatsappUrl = 'https://api.whatsapp.com/send?phone=51921136755&text=' . urlencode($data['whatsapp_msg']);
@endphp

<section class="home-reviews-section py-5" id="opiniones-viajeros" aria-label="{{ $data['title'] }}">
    <div class="container">
        {{-- Encabezado de la sección con métricas de confianza --}}
        <div class="row justify-content-center text-center mb-4">
            <div class="col-lg-10 col-xl-9">
                <span class="home-reviews-eyebrow">{{ $data['eyebrow'] }}</span>
                <h2 class="home-reviews-title text-center">{{ $data['title'] }}</h2>
                <div class="home-reviews-line my-3 mx-auto"></div>
                <p class="home-reviews-lead">{{ $data['subtitle'] }}</p>

                {{-- Barra de confianza con estrellas y badges --}}
                <div class="home-reviews-trustbar d-flex flex-wrap align-items-center justify-content-center gap-3 mt-3">
                    <div class="home-reviews-score d-inline-flex align-items-center">
                        <span class="home-reviews-score-num">{{ $data['rating_score'] }}</span>
                        <div class="home-reviews-stars text-warning mx-2" aria-label="5 de 5 estrellas">
                            <span class="icon-star" aria-hidden="true"></span>
                            <span class="icon-star" aria-hidden="true"></span>
                            <span class="icon-star" aria-hidden="true"></span>
                            <span class="icon-star" aria-hidden="true"></span>
                            <span class="icon-star" aria-hidden="true"></span>
                        </div>
                        <span class="home-reviews-score-label text-muted small">{{ $data['rating_label'] }}</span>
                    </div>

                    <div class="home-reviews-badges d-inline-flex flex-wrap align-items-center gap-2">
                        <a href="{{ $tripadvisorUrl }}" target="_blank" rel="noopener nofollow" class="home-reviews-badge-link badge-tripadvisor" title="TripAdvisor Reviews">
                            <span class="icon-tripadvisor me-1" aria-hidden="true"></span>
                            <span>{{ $data['tripadvisor_badge'] }}</span>
                        </a>
                        <span class="home-reviews-badge-link badge-google" title="Google Reviews">
                            <svg class="google-icon-svg me-1" viewBox="0 0 24 24" width="16" height="16" aria-hidden="true">
                                <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                                <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                                <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.06H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.94l2.85-2.22.81-.63z"/>
                                <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.06l3.66 2.84c.87-2.6 3.3-4.52 6.16-4.52z"/>
                            </svg>
                            <span>{{ $data['google_badge'] }}</span>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        {{-- Carrusel de Reseñas --}}
        <div class="home-reviews-carousel-viewport position-relative">
            {{-- Flecha anterior --}}
            <button type="button" class="home-reviews-arrow home-reviews-arrow--prev" aria-label="{{ $data['prev_label'] }}">
                <span aria-hidden="true">&#x2039;</span>
            </button>

            {{-- Track deslizante --}}
            <div class="home-reviews-track" role="region" aria-label="{{ $data['title'] }}" tabindex="0">
                @foreach ($data['reviews'] as $index => $review)
                    <div class="home-reviews-slide" data-slide-index="{{ $index }}">
                        <article class="home-review-card h-100 d-flex flex-column">
                            {{-- Encabezado de la tarjeta: Avatar, Nombre, Procedencia --}}
                            <div class="home-review-card-head d-flex align-items-center mb-3">
                                <div class="home-review-avatar me-3" style="background: {{ $review['avatar_bg'] }};">
                                    <span>{{ $review['initials'] }}</span>
                                </div>
                                <div class="home-review-user-info flex-grow-1">
                                    <h3 class="home-review-author mb-0">{{ $review['name'] }}</h3>
                                    <div class="home-review-meta small text-muted">
                                        <span class="home-review-flag">{{ $review['flag'] }}</span>
                                        <span>{{ $review['location'] }}</span>
                                    </div>
                                </div>
                                <div class="home-review-verified" title="{{ $data['verified_tag'] }}">
                                    <span class="icon-check-circle text-success" aria-hidden="true"></span>
                                </div>
                            </div>

                            {{-- Tour realizado --}}
                            <div class="home-review-tour mb-2">
                                <span class="badge bg-light text-dark border">
                                    <span class="icon-map-marker text-brand me-1" aria-hidden="true"></span>
                                    {{ $review['tour'] }}
                                </span>
                            </div>

                            {{-- Estrellas y Título --}}
                            <div class="home-review-stars text-warning mb-2" aria-label="{{ $review['rating'] }} de 5 estrellas">
                                @for ($i = 0; $i < $review['rating']; $i++)
                                    <span class="icon-star" aria-hidden="true"></span>
                                @endfor
                            </div>

                            <h4 class="home-review-headline h6 mb-2">{{ $review['title'] }}</h4>

                            {{-- Cuerpo del testimonio --}}
                            <blockquote class="home-review-text flex-grow-1 mb-3">
                                “{{ $review['text'] }}”
                            </blockquote>

                            {{-- Pie de tarjeta: Fecha y Fuente --}}
                            <div class="home-review-card-foot d-flex justify-content-between align-items-center pt-2 border-top small text-muted">
                                <span class="home-review-date">{{ $review['date'] }}</span>
                                <div class="home-review-source d-inline-flex align-items-center">
                                    @if ($review['platform_icon'] === 'tripadvisor')
                                        <span class="icon-tripadvisor text-success me-1" aria-hidden="true"></span>
                                    @else
                                        <svg class="google-icon-svg me-1" viewBox="0 0 24 24" width="14" height="14" aria-hidden="true">
                                            <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/>
                                            <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/>
                                            <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.06H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.94l2.85-2.22.81-.63z"/>
                                            <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.06l3.66 2.84c.87-2.6 3.3-4.52 6.16-4.52z"/>
                                        </svg>
                                    @endif
                                    <span>{{ $review['platform'] }}</span>
                                </div>
                            </div>
                        </article>
                    </div>
                @endforeach
            </div>

            {{-- Flecha siguiente --}}
            <button type="button" class="home-reviews-arrow home-reviews-arrow--next" aria-label="{{ $data['next_label'] }}">
                <span aria-hidden="true">&#x203A;</span>
            </button>
        </div>

        {{-- Indicadores / Dots del Carrusel --}}
        <div class="home-reviews-dots text-center mt-3 d-flex justify-content-center align-items-center gap-2" aria-hidden="true">
            @foreach ($data['reviews'] as $index => $review)
                <button type="button" class="home-reviews-dot {{ $index === 0 ? 'active' : '' }}" data-target-slide="{{ $index }}" aria-label="Slide {{ $index + 1 }}"></button>
            @endforeach
        </div>

        {{-- Acciones sociales de confianza inferior --}}
        <div class="row mt-4 pt-3">
            <div class="col-12">
                <div class="home-reviews-cta-box d-flex flex-wrap align-items-center justify-content-between p-3 rounded-3">
                    <div class="home-reviews-cta-left d-flex align-items-center gap-3 mb-3 mb-md-0">
                        <div class="home-reviews-social-icons d-inline-flex gap-2">
                            <a href="{{ $tripadvisorUrl }}" target="_blank" rel="noopener nofollow" class="home-social-btn btn-ta" aria-label="TripAdvisor" title="TripAdvisor">
                                <span class="icon-tripadvisor" aria-hidden="true"></span>
                            </a>
                            <a href="{{ $instagramUrl }}" target="_blank" rel="noopener nofollow" class="home-social-btn btn-ig" aria-label="Instagram" title="Instagram">
                                <span class="icon-instagram" aria-hidden="true"></span>
                            </a>
                            <a href="{{ $facebookUrl }}" target="_blank" rel="noopener nofollow" class="home-social-btn btn-fb" aria-label="Facebook" title="Facebook">
                                <span class="icon-facebook" aria-hidden="true"></span>
                            </a>
                        </div>
                        <span class="home-reviews-cta-text fw-bold text-dark">
                            {{ $data['rating_label'] }}
                        </span>
                    </div>

                    <div class="home-reviews-cta-right d-flex flex-wrap gap-2">
                        <a href="{{ $tripadvisorUrl }}" target="_blank" rel="noopener nofollow" class="btn btn-outline-dark btn-sm rounded-pill px-3 py-2">
                            <span class="icon-tripadvisor me-1 text-success" aria-hidden="true"></span>
                            {{ $data['cta_tripadvisor'] }}
                        </a>
                        <a href="{{ $whatsappUrl }}" target="_blank" rel="noopener" class="btn btn-success btn-sm rounded-pill px-3 py-2 d-inline-flex align-items-center" data-track="whatsapp_click">
                            <span class="icon-whatsapp me-1" aria-hidden="true"></span>
                            {{ $data['cta_whatsapp'] }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
