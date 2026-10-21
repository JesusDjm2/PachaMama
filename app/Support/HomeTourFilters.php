<?php

namespace App\Support;

use App\Models\Tour;
use App\Models\Tourpt;
use App\Models\Toursen;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class HomeTourFilters
{
    public static function applyToTourQuery(Builder $query, Request $request): void
    {
        self::applyToQuery($query, $request);
    }

    public static function applyToToursenQuery(Builder $query, Request $request): void
    {
        self::applyToQuery($query, $request);
    }

    public static function applyToTourptQuery(Builder $query, Request $request): void
    {
        self::applyToQuery($query, $request);
    }

    /**
     * tours, toursens y tourspt comparten ubicacion/dias/precio, así que el filtro es idéntico.
     */
    public static function applyToQuery(Builder $query, Request $request): void
    {
        if ($request->filled('ubicacion')) {
            $u = trim((string) $request->input('ubicacion'));
            $query->where('ubicacion', 'like', '%' . $u . '%');
        }
        if ($request->filled('dias')) {
            $query->where('dias', (int) $request->input('dias'));
        }
        if ($request->filled('precio_max')) {
            $query->where('precio', '<=', (int) $request->input('precio_max'));
        }
    }

    /**
     * @return array{ubicaciones: \Illuminate\Support\Collection, dias: \Illuminate\Support\Collection, precios: list<int>}
     */
    public static function metaForTours(): array
    {
        return self::metaFor(Tour::class);
    }

    /**
     * @return array{ubicaciones: \Illuminate\Support\Collection, dias: \Illuminate\Support\Collection, precios: list<int>}
     */
    public static function metaForToursen(): array
    {
        return self::metaFor(Toursen::class);
    }

    /**
     * @return array{ubicaciones: \Illuminate\Support\Collection, dias: \Illuminate\Support\Collection, precios: list<int>}
     */
    public static function metaForTourpt(): array
    {
        return self::metaFor(Tourpt::class);
    }

    /**
     * @param  class-string<\Illuminate\Database\Eloquent\Model>  $model
     * @return array{ubicaciones: \Illuminate\Support\Collection, dias: \Illuminate\Support\Collection, precios: list<int>}
     */
    private static function metaFor(string $model): array
    {
        $ubicaciones = $model::query()
            ->select('ubicacion')
            ->distinct()
            ->whereNotNull('ubicacion')
            ->where('ubicacion', '!=', '')
            ->orderBy('ubicacion')
            ->pluck('ubicacion')
            ->values();

        $dias = $model::query()
            ->select('dias')
            ->distinct()
            ->orderBy('dias')
            ->pluck('dias')
            ->values();

        $max = (int) $model::query()->max('precio');
        $precios = self::precioOpciones($max);

        return compact('ubicaciones', 'dias', 'precios');
    }

    /**
     * @return list<int>
     */
    private static function precioOpciones(int $maxPrecio): array
    {
        $candidatos = [100, 200, 300, 500, 750, 1000, 1500, 2000, 3000, 5000, 10000];
        $out = [];
        foreach ($candidatos as $p) {
            if ($p <= $maxPrecio) {
                $out[] = $p;
            }
        }
        if ($maxPrecio > 0 && ! in_array($maxPrecio, $out, true)) {
            $out[] = $maxPrecio;
        }
        sort($out);

        return array_values(array_unique($out));
    }
}
