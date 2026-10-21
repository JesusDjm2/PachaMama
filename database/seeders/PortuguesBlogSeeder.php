<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\Ptag;
use App\Models\Ptblog;
use App\Models\Tag;
use Illuminate\Database\Seeder;

/**
 * Espeja el blog español en portugués: 25 artigos con título, descripción y slug en pt-BR.
 * El cuerpo HTML largo se copia del español solo al crear la fila (quién traduce después no se pisa).
 */
class PortuguesBlogSeeder extends Seeder
{
    public const TAGS = [
        2 => ['nombre' => 'Cusco', 'slug' => 'cusco'],
        3 => ['nombre' => 'Peru', 'slug' => 'peru'],
        5 => ['nombre' => 'Lima', 'slug' => 'lima'],
        6 => ['nombre' => 'Arequipa', 'slug' => 'arequipa'],
        7 => ['nombre' => 'Puno', 'slug' => 'puno'],
        8 => ['nombre' => 'História', 'slug' => 'historia'],
        9 => ['nombre' => 'Costumes', 'slug' => 'costumes'],
        10 => ['nombre' => 'Pessoas', 'slug' => 'pessoas'],
        12 => ['nombre' => 'Gastronomia', 'slug' => 'gastronomia'],
        13 => ['nombre' => 'Dicas de viagem', 'slug' => 'dicas-de-viagem'],
    ];

    public const BLOGS = [
        11 => [
            'nombre' => '10 atividades turísticas para fazer em Cusco',
            'slug' => 'actividades-turisticas-em-cusco',
            'descripcion' => 'Conheça e aproveite muitas das atividades turísticas na cidade do Cusco.',
            'keywords' => 'o que fazer em cusco, atividades turísticas cusco, turismo peru',
        ],
        12 => [
            'nombre' => 'Semana Santa em Cusco 2024',
            'slug' => 'semana-santa-em-cusco',
            'descripcion' => 'Uma das manifestações religiosas mais importantes da cidade do Cusco.',
            'keywords' => 'semana santa cusco, feriado santo peru, celebrações religiosas peru',
        ],
        13 => [
            'nombre' => 'Santa Rosa de Lima',
            'slug' => 'santa-rosa-de-lima',
            'descripcion' => 'A santa conhecida como a "Padroeira da América".',
            'keywords' => 'santa rosa de lima, 30 de agosto, tradição peruana',
        ],
        14 => [
            'nombre' => 'Mistura Perú',
            'slug' => 'mistura-peru',
            'descripcion' => 'A feira de gastronomia peruana e internacional que acontece todos os anos em Lima.',
            'keywords' => 'mistura peru, gastronomia peruana, feira gastronômica lima',
        ],
        15 => [
            'nombre' => 'Fiestas Patrias no Peru',
            'slug' => 'fiestas-patrias-no-peru',
            'descripcion' => 'Todo dia 28 de julho celebra-se a independência do Peru.',
            'keywords' => 'fiestas patrias peru, 28 de julho, independência do peru',
        ],
        16 => [
            'nombre' => 'As melhores praias do Peru',
            'slug' => 'as-melhores-praias-do-peru',
            'descripcion' => 'Confira a lista das melhores praias para aproveitar o verão no Peru.',
            'keywords' => 'praias do peru, litoral peruano, verão em máncora',
        ],
        17 => [
            'nombre' => 'Contemplando o Cañón del Colca — Mirador do Cóndor',
            'slug' => 'mirador-del-condor-canon-del-colca',
            'descripcion' => 'O Cañón del Colca, um dos destinos turísticos mais impressionantes do Peru.',
            'keywords' => 'cañón del colca, mirador do cóndor, arequipa turismo',
        ],
        18 => [
            'nombre' => 'A catedral do Cusco: um tesouro arquitetônico',
            'slug' => 'catedral-do-cusco-historia',
            'descripcion' => 'A Catedral do Cusco, também conhecida como Catedral Basílica da Virgem da Assunção.',
            'keywords' => 'catedral do cusco, plaza de armas, arquitetura colonial',
        ],
        19 => [
            'nombre' => 'Corpus Christi: uma festa cusquenha cheia de tradição',
            'slug' => 'corpus-christi-cusco',
            'descripcion' => 'Uma das celebrações religiosas mais importantes e tradicionais da cidade imperial.',
            'keywords' => 'corpus christi cusco, festas cusco, tradição andina',
        ],
        20 => [
            'nombre' => 'Inti Raymi, a milenar festa do Sol',
            'slug' => 'inti-raymi-festa-do-sol',
            'descripcion' => 'Uma viagem fascinante no tempo até a grandeza do Império Inca e a veneração ao sol.',
            'keywords' => 'inti raymi, festa do sol cusco, saqsayhuaman junho',
        ],
        21 => [
            'nombre' => 'As cholitas escaladoras da Bolívia',
            'slug' => 'cholitas-escaladoras-bolivia',
            'descripcion' => 'Mulheres audazes que desafiam os limites e conquistam as montanhas.',
            'keywords' => 'cholitas escaladoras, aconcágua, mulheres andinas',
        ],
        22 => [
            'nombre' => 'Casamentos andinos',
            'slug' => 'casamentos-andinos',
            'descripcion' => 'A cerimônia de amor que tem as montanhas como testemunhas.',
            'keywords' => 'casamento andino, rituais andinos, pachamama casamento',
        ],
        23 => [
            'nombre' => 'Festa da Virgem del Carmen em Paucartambo',
            'slug' => 'festa-virgem-del-carmen-paucartambo',
            'descripcion' => 'Um encontro celestial entre tradição, devoção e alegria transbordante.',
            'keywords' => 'virgem del carmen, paucartambo, festa de julho cusco',
        ],
        24 => [
            'nombre' => 'Agosto, o mês da Pachamama e seu significado na cultura andina',
            'slug' => 'mes-da-pachamama',
            'descripcion' => 'Preservemos o lar que nos dá vida. Ame e proteja a Pachamama. Juntos cuidamos do nosso tesouro natural.',
            'keywords' => 'pachamama, agosto andino, madre tierra perú',
        ],
        25 => [
            'nombre' => 'Os feriados mais importantes do Peru',
            'slug' => 'feriados-mais-importantes-do-peru',
            'descripcion' => 'O Peru é um país que acolhe uma variedade de celebrações e festividades ao longo do ano.',
            'keywords' => 'feriados peru, calendário de festas, viagens no peru',
        ],
        26 => [
            'nombre' => 'Machu Picchu 2026: guia completo de ingressos, preços e dicas',
            'slug' => 'guia-machu-picchu-2026',
            'descripcion' => 'Tudo para visitar Machu Picchu em 2026: preços dos ingressos, como chegar e as melhores dicas.',
            'keywords' => 'machu picchu ingressos, tickets machu picchu 2026, como chegar a machu picchu',
        ],
        27 => [
            'nombre' => 'Camino Inca 2026: preços, permissões e tudo o que você precisa saber',
            'slug' => 'camino-inca-2026-guia-completa',
            'descripcion' => 'Guia completo do Camino Inca 2026: preços das permissões, datas e como reservar antes que se esgotem.',
            'keywords' => 'camino inca 2026, permissão camino inca, trilha inca preço',
        ],
        28 => [
            'nombre' => 'O que fazer em Cusco em 3 dias: roteiro perfeito 2026',
            'slug' => 'o-que-fazer-em-cusco-3-dias',
            'descripcion' => 'O roteiro definitivo para Cusco em 3 dias: o que ver, onde comer e os imprescindíveis da capital inca.',
            'keywords' => 'roteiro cusco 3 dias, o que fazer em cusco, turismo cusco',
        ],
        29 => [
            'nombre' => 'Mal de altitude no Peru: sintomas, prevenção e remédios eficazes',
            'slug' => 'mal-de-altitude-peru-soroche',
            'descripcion' => 'Tudo sobre o soroche no Peru: sintomas, como prevenir, remédios naturais e que medicamentos tomar.',
            'keywords' => 'soroche, mal de altitude peru, hoja de coca altitude',
        ],
        30 => [
            'nombre' => 'Montanha de 7 Cores (Vinicunca): guia completo 2026',
            'slug' => 'montanha-7-cores-vinicunca-guia',
            'descripcion' => 'Tudo para visitar a Montanha de Sete Cores em 2026: como chegar, preço do ingresso e as melhores dicas.',
            'keywords' => 'vinicunca montanha colorida, cerro de los siete colores, trekking cusco',
        ],
        31 => [
            'nombre' => 'Vale Sagrado dos Incas: Pisac, Ollantaytambo, Moray e mais',
            'slug' => 'vale-sagrado-dos-incas-guia-completa',
            'descripcion' => 'Guia completo do Vale Sagrado: Pisac, Moray, Salineras de Maras, Ollantaytambo e como organizar a sua visita.',
            'keywords' => 'vale sagrado dos incas, pisac ollantaytambo, moray maras',
        ],
        32 => [
            'nombre' => 'Salkantay Trek 2026: a melhor alternativa ao Camino Inca',
            'slug' => 'salkantay-trek-2026-guia',
            'descripcion' => 'Descubra o Salkantay Trek 2026: rota, preços, dificuldade e por que é a alternativa perfeita ao Camino Inca.',
            'keywords' => 'salkantay trek, alternativa camino inca, trekking machu picchu',
        ],
        33 => [
            'nombre' => 'Quando viajar para o Peru: a melhor época por temporada e região',
            'slug' => 'melhor-epoca-para-viajar-ao-peru',
            'descripcion' => 'Descubra qual é a melhor época para viajar ao Peru: temporada seca, chuvosa e festividades por região.',
            'keywords' => 'melhor época peru, clima cusco, temporada seca andes',
        ],
        34 => [
            'nombre' => 'Lago Titicaca: ilhas flutuantes dos Uros, Taquile e Amantaní',
            'slug' => 'lago-titicaca-ilhas-uros-taquile-amantani',
            'descripcion' => 'Guia completo do Lago Titicaca: ilhas Uros, Taquile, Amantaní, como chegar desde Cusco e o que ver em Puno.',
            'keywords' => 'lago titicaca, ilhas uros, puno turismo',
        ],
        35 => [
            'nombre' => 'Cañón del Colca e o cóndor: guia completo desde Arequipa',
            'slug' => 'canon-del-colca-guia-desde-arequipa',
            'descripcion' => 'Tudo para visitar o Cañón del Colca desde Arequipa: cóndores, vilas coloniais, termas e dicas de viagem.',
            'keywords' => 'canon del colca arequipa, cruz del condor, termas de colca',
        ],
    ];

    public function run(): void
    {
        $tagsById = [];
        foreach (self::TAGS as $esTagId => $dados) {
            $tagsById[$esTagId] = Ptag::query()->firstOrCreate(
                ['slug' => $dados['slug']],
                ['nombre' => $dados['nombre']]
            );
        }

        foreach (Blog::query()->orderBy('id')->get() as $blogEs) {
            $traduccion = self::BLOGS[$blogEs->id] ?? null;
            if ($traduccion === null) {
                continue;
            }

            $pt = Ptblog::query()->firstOrNew(['blog_id' => $blogEs->id]);
            $nuevo = ! $pt->exists;

            $pt->nombre = $traduccion['nombre'];
            $pt->slug = $traduccion['slug'];
            $pt->descripcion = $traduccion['descripcion'];
            $pt->keywords = $traduccion['keywords'];

            if ($nuevo) {
                $pt->cuerpo = $blogEs->cuerpo;
                $pt->img = $blogEs->img;
                $pt->published_at = $blogEs->published_at;
            }

            $pt->save();

            $tagIds = $blogEs->tags()
                ->pluck('tags.id')
                ->map(fn ($id) => $tagsById[$id]->id ?? null)
                ->filter()
                ->values()
                ->all();

            $pt->tags()->sync($tagIds);
        }
    }
}
