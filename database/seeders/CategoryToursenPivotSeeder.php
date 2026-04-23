<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Tour;
use App\Models\Toursen;
use Illuminate\Database\Seeder;

/**
 * Rellena category_toursen a partir del campo toursens.categoria (CSV)
 * y, si existe tour_id, también de tours.categoria (misma convención que en español).
 */
class CategoryToursenPivotSeeder extends Seeder
{
    /** @var array<string, string> token CSV → category.link */
    private const TOKEN_TO_LINK = [
        'machupicchu' => 'machu',
        'hikes' => 'trekking',
        'caminata' => 'trekking',
        'around' => 'around',
        'fullday' => 'full-day',
        'luxury' => 'luxury',
    ];

    public function run(): void
    {
        $linkToId = Category::query()->pluck('id', 'link')->all();

        foreach (Toursen::query()->cursor() as $toursen) {
            $links = [];

            foreach ($this->tokensFromCsv($toursen->categoria ?? '') as $token) {
                $link = self::TOKEN_TO_LINK[$token] ?? null;
                if ($link && isset($linkToId[$link])) {
                    $links[$linkToId[$link]] = true;
                }
            }

            if ($toursen->tour_id) {
                $tour = Tour::query()->find($toursen->tour_id);
                if ($tour) {
                    foreach ($this->tokensFromCsv($tour->categoria ?? '') as $token) {
                        $link = self::TOKEN_TO_LINK[$token] ?? null;
                        if ($link && isset($linkToId[$link])) {
                            $links[$linkToId[$link]] = true;
                        }
                    }
                }
            }

            $toursen->categories()->sync(array_keys($links));
        }
    }

    /**
     * @return list<string>
     */
    private function tokensFromCsv(?string $csv): array
    {
        if ($csv === null || $csv === '') {
            return [];
        }

        $parts = array_map('trim', explode(',', strtolower($csv)));

        return array_values(array_filter($parts, fn ($p) => $p !== ''));
    }
}
