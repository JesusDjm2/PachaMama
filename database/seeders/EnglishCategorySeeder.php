<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

/**
 * Categorías para tours en inglés (tabla categories + pivote category_toursen).
 * Los nombres en minúsculas deben coincidir con EnlacesCategorias (mapien, hikes, around).
 */
class EnglishCategorySeeder extends Seeder
{
    public function run(): void
    {
        $rows = [
            ['nombre' => 'Machu', 'link' => 'machu'],
            ['nombre' => 'Trekking', 'link' => 'trekking'],
            ['nombre' => 'Around', 'link' => 'around'],
            ['nombre' => 'Full day', 'link' => 'full-day'],
            ['nombre' => 'Luxury', 'link' => 'luxury'],
        ];

        foreach ($rows as $row) {
            Category::updateOrCreate(
                ['link' => $row['link']],
                ['nombre' => $row['nombre']]
            );
        }
    }
}
