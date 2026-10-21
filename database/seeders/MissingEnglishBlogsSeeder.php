<?php

namespace Database\Seeders;

use App\Models\Enblog;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

/**
 * Inserts the three English blog posts that exist in Spanish (blogs id 23–25)
 * but had no matching enblogs row with blog_id set.
 *
 * Run: php artisan db:seed --class=MissingEnglishBlogsSeeder
 */
class MissingEnglishBlogsSeeder extends Seeder
{
    public function run(): void
    {
        $htmlDir = database_path('seeders/html');

        $entries = [
            23 => [
                'nombre' => 'Our Lady of Mount Carmel Festival in Paucartambo',
                'descripcion' => 'Faith, tradition, and exuberant joy at one of Cusco’s most beloved festivals.',
                'keywords' => 'Paucartambo, Virgin of Carmen, Mamacha Carmen, Paucartambo dances, Cusco festivals',
                'slug' => 'virgin-of-carmen-festival-paucartambo',
                'img' => '/img/blog/virgen-carmen-inicio.jpg',
                'body_file' => 'en_blog_23_virgen_carmen.html',
                'entag_ids' => [9, 8, 7],
            ],
            24 => [
                'nombre' => 'August: Pachamama Month and Its Meaning in Andean Culture',
                'descripcion' => 'Honour the living Earth—love and protect Pachamama; together we safeguard nature.',
                'keywords' => 'Pachamama, Mother Earth, Andean culture, payment to the Earth, August Peru',
                'slug' => 'august-pachamama-month-andean-culture',
                'img' => '/img/blog/pacha-portada.jpg',
                'body_file' => 'en_blog_24_pachamama.html',
                'entag_ids' => [9, 4, 10, 8, 7],
            ],
            25 => [
                'nombre' => 'Peru’s Most Important Holidays and Celebrations',
                'descripcion' => 'Peru hosts memorable civic and religious celebrations throughout the year.',
                'keywords' => 'Peru holidays, Peruvian festivities, public holidays Peru, Inti Raymi, Peruvian culture',
                'slug' => 'major-holidays-celebrations-peru',
                'img' => '/img/blog/Feriados-de-Peru.jpg',
                'body_file' => 'en_blog_25_feriados.html',
                'entag_ids' => [4, 8, 5],
            ],
        ];

        foreach ($entries as $blogId => $meta) {
            if (Enblog::query()->where('blog_id', $blogId)->exists()) {
                $this->command?->info("Skip blog_id {$blogId}: English row already linked.");

                continue;
            }

            $path = $htmlDir . DIRECTORY_SEPARATOR . $meta['body_file'];
            if (! File::exists($path)) {
                throw new \RuntimeException("Missing HTML file: {$path}");
            }

            $cuerpo = File::get($path);

            $enblog = Enblog::query()->create([
                'nombre' => $meta['nombre'],
                'descripcion' => $meta['descripcion'],
                'cuerpo' => $cuerpo,
                'img' => $meta['img'],
                'keywords' => $meta['keywords'],
                'slug' => $meta['slug'],
                'blog_id' => $blogId,
            ]);

            $enblog->entags()->sync($meta['entag_ids']);

            $this->command?->info("Created enblog id {$enblog->id} for Spanish blog {$blogId}.");
        }
    }
}
