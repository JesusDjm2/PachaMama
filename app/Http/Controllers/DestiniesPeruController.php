<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use App\Models\Toursen;
use Illuminate\View\View;

class DestiniesPeruController extends Controller
{
    /** @var array<string, array{view: string, ubicacion: string}> */
    public const PAGES = [
        'cusco-navel-of-the-world' => [
            'view' => 'en.destinies-peru.cusco-navel-of-the-world',
            'ubicacion' => 'Cusco',
        ],
        'lima-city-of-kings' => [
            'view' => 'en.destinies-peru.lima-city-of-kings',
            'ubicacion' => 'Lima',
        ],
        'arequipa-the-white-city' => [
            'view' => 'en.destinies-peru.arequipa-the-white-city',
            'ubicacion' => 'Arequipa',
        ],
        'puno-city' => [
            'view' => 'en.destinies-peru.puno-city',
            'ubicacion' => 'Puno',
        ],
        'ica-city' => [
            'view' => 'en.destinies-peru.ica-city',
            'ubicacion' => 'Ica',
        ],
        'pisco-city' => [
            'view' => 'en.destinies-peru.pisco-city',
            'ubicacion' => 'Pisco',
        ],
        'puerto-maldonado' => [
            'view' => 'en.destinies-peru.puerto-maldonado',
            'ubicacion' => 'Puerto Maldonado',
        ],
    ];

    /** Slug de URL en español → clave inglesa en PAGES (misma ubicación / consulta de tours). */
    public const ES_SLUG_TO_EN_SLUG = [
        'cusco-ombligo-del-mundo' => 'cusco-navel-of-the-world',
        'lima-ciudad-de-reyes' => 'lima-city-of-kings',
        'arequipa-la-ciudad-blanca' => 'arequipa-the-white-city',
        'la-ciudad-de-puno' => 'puno-city',
        'ciudad-de-ica' => 'ica-city',
        'ciudad-de-pisco' => 'pisco-city',
        'puerto-maldonado' => 'puerto-maldonado',
    ];

    public function destination(string $slug): View
    {
        if (! isset(self::PAGES[$slug])) {
            abort(404);
        }

        $data = $this->destinationTourData(self::PAGES[$slug]['ubicacion']);

        return view(self::PAGES[$slug]['view'], $data);
    }

    public function destinationEs(string $esSlug): View
    {
        $enSlug = self::ES_SLUG_TO_EN_SLUG[$esSlug] ?? null;
        if (! $enSlug || ! isset(self::PAGES[$enSlug])) {
            abort(404);
        }

        $data = $this->destinationTourData(self::PAGES[$enSlug]['ubicacion']);

        return view('es.destinos-en-peru.' . $esSlug, $data);
    }

    /**
     * @return array{toursByLocation: \Illuminate\Support\Collection, toursEsByLocation: \Illuminate\Support\Collection, destinationUbicacionLabel: string}
     */
    private function destinationTourData(string $needle): array
    {
        $toursByLocation = Toursen::query()
            ->with('categories')
            ->where('ubicacion', 'LIKE', '%' . $needle . '%')
            ->orderBy('nombre')
            ->get();

        $linkedTourIds = $toursByLocation->pluck('tour_id')->filter()->unique()->values()->all();

        $toursEsByLocation = Tour::query()
            ->where('ubicacion', 'LIKE', '%' . $needle . '%')
            ->when(count($linkedTourIds) > 0, fn ($q) => $q->whereNotIn('id', $linkedTourIds))
            ->orderBy('nombre')
            ->get();

        return [
            'toursByLocation' => $toursByLocation,
            'toursEsByLocation' => $toursEsByLocation,
            'destinationUbicacionLabel' => $needle,
        ];
    }
}
