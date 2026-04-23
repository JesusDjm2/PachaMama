<?php

namespace App\Support;

use App\Models\Tour;
use App\Models\Toursen;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

class HomeTourFilters
{
    public static function applyToTourQuery(Builder $query, Request $request): void
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

    public static function applyToToursenQuery(Builder $query, Request $request): void
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
        $ubicaciones = Tour::query()
            ->select('ubicacion')
            ->distinct()
            ->whereNotNull('ubicacion')
            ->where('ubicacion', '!=', '')
            ->orderBy('ubicacion')
            ->pluck('ubicacion')
            ->values();

        $dias = Tour::query()
            ->select('dias')
            ->distinct()
            ->orderBy('dias')
            ->pluck('dias')
            ->values();

        $max = (int) Tour::query()->max('precio');
        $precios = self::precioOpciones($max);

        return compact('ubicaciones', 'dias', 'precios');
    }

    /**
     * @return array{ubicaciones: \Illuminate\Support\Collection, dias: \Illuminate\Support\Collection, precios: list<int>}
     */
    public static function metaForToursen(): array
    {
        $ubicaciones = Toursen::query()
            ->select('ubicacion')
            ->distinct()
            ->whereNotNull('ubicacion')
            ->where('ubicacion', '!=', '')
            ->orderBy('ubicacion')
            ->pluck('ubicacion')
            ->values();

        $dias = Toursen::query()
            ->select('dias')
            ->distinct()
            ->orderBy('dias')
            ->pluck('dias')
            ->values();

        $max = (int) Toursen::query()->max('precio');
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
