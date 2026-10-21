<?php

namespace Database\Seeders;

use App\Models\Ptcategory;
use App\Models\Tour;
use App\Models\Tourpt;
use Illuminate\Database\Seeder;

/**
 * Catálogo portugués a partir del catálogo español (tours).
 *
 * nombre/descripcion/slug/keywords se escriben en pt-BR y se reescriben en cada corrida.
 * Los cuerpos largos (contenido, detallado, incluidos, importante, mapa) se copian del
 * español solo al crear la fila, para no pisar la traducción que el admin avance después.
 */
class PortuguesCatalogoSeeder extends Seeder
{
    /** Categoría visible en las tarjetas, indexada por la clave máquina de tours.categoria. */
    private const CATEGORIAS = [
        'hikes'       => ['link' => 'trilhas', 'nombre' => 'Trilhas'],
        'machupicchu' => ['link' => 'machu-picchu', 'nombre' => 'Machu Picchu'],
        'around'      => ['link' => 'arredores-do-peru', 'nombre' => 'Arredores do Peru'],
        'fullday'     => ['link' => 'dia-inteiro', 'nombre' => 'Dia inteiro'],
        'luxury'      => ['link' => 'tours-de-luxo', 'nombre' => 'Tours de luxo'],
    ];

    private const TOURS = [
        1 => [
            'nombre' => 'Passeio pela cidade de Cusco',
            'descripcion' => 'Curta este passeio incrível pela capital do império Inca, conhecida como o umbigo do mundo: a imperial cidade de Cusco.',
            'slug' => 'passeio-pela-cidade-de-cusco',
            'keywords' => 'city tour Cusco, passeio em Cusco, o que fazer em Cusco, tour cidade de Cusco',
        ],
        2 => [
            'nombre' => 'Camino Inca clássico de 5 dias',
            'descripcion' => 'O passeio de 5 dias pelo Camino Inca inclui 4 dias de caminhada pela trilha histórica e 1 dia extra para explorar Machu Picchu com a Huayna Picchu (custo adicional).',
            'slug' => 'camino-inca-classico-de-5-dias',
            'keywords' => 'camino inca 5 dias, camino inca a machu picchu, trilha inca peru, caminho inca',
        ],
        4 => [
            'nombre' => 'Montanha de 7 cores Vinicunca',
            'descripcion' => 'Uma caminhada inesquecível até Vinicunca, mais conhecida como a Montanha de 7 Cores ou Montanha Arco-íris.',
            'slug' => 'montanha-de-7-cores-vinicunca',
            'keywords' => 'vinicunca, montanha de 7 cores, montanha arco-iris cusco, caminho inca',
        ],
        5 => [
            'nombre' => 'Caminhada à Laguna Humantay',
            'descripcion' => 'Venha conhecer esta linda caminhada até a Laguna Humantay, aos pés do nevado Salkantay, rota que também leva a Machu Picchu.',
            'slug' => 'caminhada-a-laguna-humantay',
            'keywords' => 'laguna humantay, caminhada humantay, salkantay, lagoa humantay cusco',
        ],
        6 => [
            'nombre' => 'Pacote Puno e Cusco — 7 dias',
            'descripcion' => 'Este pacote e seu roteiro levam aos principais pontos turísticos da região andina: a cidade de Cusco, conhecida como o umbigo do mundo e império dos Incas.',
            'slug' => 'pacote-puno-cusco-7-dias',
            'keywords' => 'cusco puno, tour cusco, tour puno, pacote peru 7 dias',
        ],
        7 => [
            'nombre' => 'Pacote Lima, Cusco e Puno — 9 dias',
            'descripcion' => 'Viagem de 9 dias e 8 noites, um pacote ideal para explorar as principais atrações turísticas do país.',
            'slug' => 'pacote-lima-cusco-puno-9-dias',
            'keywords' => 'peru 9 dias, tour pelo peru, pacote lima cusco puno',
        ],
        8 => [
            'nombre' => 'Pacote Lima, Cusco e Puno no Peru — 11 dias',
            'descripcion' => 'Uma viagem de 11 dias e 10 noites, o pacote ideal para conhecer os principais pontos turísticos do país.',
            'slug' => 'pacote-lima-cusco-puno-11-dias',
            'keywords' => 'peru 11 dias, tour pelo peru 11 dias, pacote peru completo, pachamama',
        ],
        9 => [
            'nombre' => 'Lima, Paracas, Nazca, Arequipa, Puno e Cusco — 14 dias',
            'descripcion' => 'Um roteiro completo, pensado para visitar as principais atrações turísticas do Peru em 14 dias, do litoral desertico ao altiplano andino.',
            'slug' => 'lima-paracas-nazca-arequipa-puno-cusco-14-dias',
            'keywords' => 'peru 14 dias, pacote turistico peru, tour completo peru',
        ],
        10 => [
            'nombre' => 'Machu Picchu em 2 dias e 1 noite',
            'descripcion' => 'Visite a cidadela inca de Machu Picchu em 2 dias. Viagem de trem panorâmico, visita guiada e noite em Aguas Calientes.',
            'slug' => 'machu-picchu-2-dias-1-noite',
            'keywords' => 'tour machu picchu, visita machu picchu, machu picchu 2 dias, trem machu picchu, aguas calientes',
        ],
        11 => [
            'nombre' => 'Vale Sagrado dos Incas — passeio de dia inteiro',
            'descripcion' => 'Percorra o Vale Sagrado visitando Pisac, Ollantaytambo e os mercados de artesanato. Um dia inesquecível no coração do mundo inca.',
            'slug' => 'vale-sagrado-dos-incas-dia-inteiro',
            'keywords' => 'vale sagrado dos incas, tour vale sagrado cusco, pisac ollantaytambo, maras moray',
        ],
        12 => [
            'nombre' => 'Caminhada Lares até Machu Picchu — 4 dias',
            'descripcion' => 'Rota de trekking alternativa ao Camino Inca. Passa por comunidades andinas, lagoas glaciares e águas termais antes de chegar a Machu Picchu.',
            'slug' => 'caminhada-lares-machu-picchu-4-dias',
            'keywords' => 'lares trek, caminhada lares cusco, trek alternativo camino inca, machu picchu trekking',
        ],
        13 => [
            'nombre' => 'Caminhada Salkantay até Machu Picchu — 5 dias',
            'descripcion' => 'O trekking mais popular como alternativa ao Camino Inca. Suba até o imponente nevado Salkantay (6.271 m) e desça até a selva alta rumo a Machu Picchu.',
            'slug' => 'caminhada-salkantay-machu-picchu-5-dias',
            'keywords' => 'salkantay trek, caminhada salkantay machu picchu, trek salkantay peru, nevado salkantay',
        ],
        14 => [
            'nombre' => 'Lago Titicaca — Ilhas Flutuantes Uros e Taquile, 2 dias',
            'descripcion' => 'Visite o lago navegável mais alto do mundo. Conheça as Ilhas Flutuantes dos Uros e a Ilha Taquile, com sua cultura viva e artesanato único.',
            'slug' => 'lago-titicaca-ilhas-uros-taquile-2-dias',
            'keywords' => 'lago titicaca tour, ilhas uros, ilha taquile, puno peru, lago mais alto do mundo',
        ],
        15 => [
            'nombre' => 'Cânion do Colca e Voo do Condor — 2 dias',
            'descripcion' => 'Visite o segundo cânion mais profundo do mundo a partir de Arequipa e observe o voo do majestoso condor-andino na Cruz del Cóndor.',
            'slug' => 'canion-do-colca-voo-do-condor-2-dias',
            'keywords' => 'canion do colca, voo do condor, cruz do condor, tour arequipa',
        ],
        16 => [
            'nombre' => 'Trek Choquequirao — 4 dias',
            'descripcion' => 'Descubra a cidadela inca de Choquequirao, conhecida como a irmã de Machu Picchu. Um trekking exigente, para quem ama aventura e arqueologia.',
            'slug' => 'trek-choquequirao-4-dias',
            'keywords' => 'choquequirao trek, cidade perdida dos incas, trekking choquequirao cusco',
        ],
        17 => [
            'nombre' => 'Linhas de Nazca e Huacachina — 2 dias saindo de Lima',
            'descripcion' => 'Sobrevoe as enigmáticas Linhas de Nazca e aproveite o oásis de Huacachina com sandboard e passeio de buggy pelas dunas do deserto.',
            'slug' => 'linhas-de-nazca-huacachina-2-dias',
            'keywords' => 'linhas de nazca, huacachina, tour nazca ica, sandboard peru, voo sobre nazca',
        ],
        18 => [
            'nombre' => 'Reserva Tambopata — Amazônia, 3 dias e 2 noites',
            'descripcion' => 'Mergulhe na selva amazônica peruana na Reserva Nacional Tambopata. Observe fauna exótica, colônias de araras e viva a natureza mais pura do planeta.',
            'slug' => 'reserva-tambopata-amazonia-3-dias',
            'keywords' => 'tambopata selva, amazonas peru tour, puerto maldonado, ecoturismo peru',
        ],
        19 => [
            'nombre' => 'Huchuy Qosqo — caminhada e ruínas incas, 1 dia',
            'descripcion' => 'Descubra as ruínas incas de Huchuy Qosqo com vista panorâmica do Vale Sagrado. Uma caminhada moderada de dia inteiro, perfeita para quem busca aventura sem multidões.',
            'slug' => 'huchuy-qosqo-caminhada-ruinas-1-dia',
            'keywords' => 'huchuy qosqo tour, ruinas incas cusco, caminhada vale sagrado, trekking cusco',
        ],
        20 => [
            'nombre' => 'Camino Inca até Machu Picchu — 4 dias e 3 noites',
            'descripcion' => 'O trekking mais icônico das Américas. Percorra o Camino Inca original, do Km 82 até Machu Picchu, cruzando abraços de montanha, ruínas incas e selva de névoa.',
            'slug' => 'camino-inca-machu-picchu-4-dias-3-noites',
            'keywords' => 'camino inca 4 dias, inca trail peru, trek machu picchu, km 82, warmiwañusca',
        ],
        21 => [
            'nombre' => 'Camino Inca curto até Machu Picchu — 2 dias',
            'descripcion' => 'A versão mais acessível do Camino Inca. Parte do Km 104, passa por Chachabamba e Wiñay Wayna e entra em Machu Picchu pela Porta do Sol ao entardecer.',
            'slug' => 'camino-inca-curto-machu-picchu-2-dias',
            'keywords' => 'camino inca curto, inca trail 2 dias, km 104, winay wayna, porta do sol',
        ],
        22 => [
            'nombre' => 'Trek Salkantay e Camino Inca — 6 dias',
            'descripcion' => 'A combinação definitiva: o trek Salkantay seguido do Camino Inca clássico. Duas rotas épicas em uma só viagem, que termina na entrada ao amanhecer pela Porta do Sol.',
            'slug' => 'trek-salkantay-camino-inca-6-dias',
            'keywords' => 'salkantay camino inca, trek combinado peru, salkantay inca trail 6 dias, incachiriaska',
        ],
        23 => [
            'nombre' => 'Cachicata Trek — a pedreira inca até Ollantaytambo, 3 dias',
            'descripcion' => 'Descubra a rota secreta por onde os Incas transportavam os blocos de pedra da pedreira de Cachicata até Ollantaytambo. Um trek único, sem permissões e sem multidões.',
            'slug' => 'cachicata-trek-pedreira-inca-ollantaytambo-3-dias',
            'keywords' => 'cachicata trek, pedreira inca ollantaytambo, trekking alternativo cusco, vale sagrado trekking',
        ],
        24 => [
            'nombre' => 'Trek Ausangate e Montanha de 7 Cores — 3 dias',
            'descripcion' => 'Combine o circuito do nevado Ausangate (6.384 m) com a famosa Montanha de 7 Cores (Vinicunca). O trekking de alta montanha mais espetacular de Cusco.',
            'slug' => 'ausangate-trek-montanha-7-cores-3-dias',
            'keywords' => 'ausangate trek, montanha 7 cores, vinicunca trek, alta montanha peru',
        ],
        25 => [
            'nombre' => 'Amazônia e Machu Picchu — pacote Peru, 10 dias',
            'descripcion' => 'O melhor do Peru em 10 dias: a selva amazônica de Tambopata, o Vale Sagrado, Machu Picchu e a Montanha de 7 Cores. Uma viagem completa e inesquecível.',
            'slug' => 'amazonia-machu-picchu-pacote-peru-10-dias',
            'keywords' => 'pacote peru 10 dias, amazonia machu picchu tour, tambopata cusco, viagem peru',
        ],
        26 => [
            'nombre' => 'Expedição Peru — Amazônia e Camino Inca, 11 dias',
            'descripcion' => 'A combinação mais aventureira: 2 dias na selva amazônica de Tambopata, Vale Sagrado e o Camino Inca clássico de 4 dias até Machu Picchu.',
            'slug' => 'expedicao-peru-amazonia-camino-inca-11-dias',
            'keywords' => 'expedicao peru 11 dias, amazonia camino inca, pacote aventura peru, tambopata machu picchu',
        ],
        27 => [
            'nombre' => 'Machu Picchu Luxury — Sanctuary Lodge, 3 dias',
            'descripcion' => 'Viva Machu Picchu da forma mais exclusiva: hospedagem no único hotel dentro da cidadela, entrada ao amanhecer antes da abertura ao público e jantar de gala com vista.',
            'slug' => 'machu-picchu-luxury-sanctuary-lodge-3-dias',
            'keywords' => 'machu picchu luxury, sanctuary lodge, hotel machu picchu, trem vistadome, tour exclusivo',
        ],
        28 => [
            'nombre' => 'A aventura definitiva: Amazônia, Camino Inca e Titicaca — 15 dias',
            'descripcion' => 'O tour mais completo do Peru: selva amazônica, Camino Inca de 4 dias, Cusco histórica, Lago Titicaca e a Rota do Sol. Todo o Peru em uma única expedição.',
            'slug' => 'aventura-definitiva-amazonia-camino-inca-titicaca-15-dias',
            'keywords' => 'pacote peru completo, amazonia camino inca titicaca, tour peru 15 dias, expedicao peru',
        ],
        29 => [
            'nombre' => 'Lima, Cidade dos Reis — tour gastronômico e cultural, 2 dias',
            'descripcion' => 'Descubra Lima, uma das melhores cidades gastronômicas do mundo. Visite Miraflores, Barranco, o centro histórico Patrimônio da UNESCO e o Museu Larco.',
            'slug' => 'lima-cidade-dos-reis-tour-gastronomico-cultural-2-dias',
            'keywords' => 'tour lima, lima gastronomica, miraflores barranco, museu larco, centro historico de lima',
        ],
    ];

    public function run(): void
    {
        $categorias = [];
        foreach (self::CATEGORIAS as $clave => $datos) {
            $categorias[$clave] = Ptcategory::firstOrCreate(['link' => $datos['link']], ['nombre' => $datos['nombre']]);
        }

        foreach (self::TOURS as $tourId => $pt) {
            $origen = Tour::find($tourId);
            if (! $origen) {
                continue;
            }

            $tour = Tourpt::where('tour_id', $tourId)->first();

            if (! $tour) {
                $tour = new Tourpt([
                    'contenido' => (string) $origen->contenido,
                    'resumen' => $origen->resumen,
                    'detallado' => (string) $origen->detallado,
                    'incluidos' => (string) $origen->incluidos,
                    'importante' => $origen->importante,
                    'mapa' => $origen->mapa,
                ]);
            }

            $tour->fill([
                'tour_id' => $origen->id,
                'nombre' => $pt['nombre'],
                'descripcion' => $pt['descripcion'],
                'keywords' => $pt['keywords'],
                'slug' => $pt['slug'],
                'ubicacion' => $origen->ubicacion,
                'precio' => $origen->precio,
                'dias' => $origen->dias,
                'img' => $origen->img,
                'categoria' => $origen->categoria,
                'clase' => $origen->clase,
            ])->save();

            $ids = [];
            foreach (array_filter(array_map('trim', explode(',', (string) $origen->categoria))) as $clave) {
                if (isset($categorias[$clave])) {
                    $ids[] = $categorias[$clave]->id;
                }
            }
            $tour->categories()->sync(array_unique($ids));
        }
    }
}
