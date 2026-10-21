<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use App\Models\Toursen;

class LandingPromoController extends Controller
{
    /**
     * Duraciones destacadas para la campaña publicitaria.
     * Elegidas porque tienen tours reales publicados (evita botones sin resultados).
     */
    private const DIAS_DESTACADOS = [4, 5, 7, 10, 11];

    public function es()
    {
        $conteoDias = Tour::whereIn('dias', self::DIAS_DESTACADOS)
            ->selectRaw('dias, count(*) as total')
            ->groupBy('dias')
            ->pluck('total', 'dias');

        return view('landing-promo-es', [
            'diasDestacados' => self::DIAS_DESTACADOS,
            'conteoDias' => $conteoDias,
        ]);
    }

    public function en()
    {
        $conteoDias = Toursen::whereIn('dias', self::DIAS_DESTACADOS)
            ->selectRaw('dias, count(*) as total')
            ->groupBy('dias')
            ->pluck('total', 'dias');

        return view('landing-promo-en', [
            'diasDestacados' => self::DIAS_DESTACADOS,
            'conteoDias' => $conteoDias,
        ]);
    }

    public function pt()
    {
        $conteoDias = Tour::whereIn('dias', self::DIAS_DESTACADOS)
            ->selectRaw('dias, count(*) as total')
            ->groupBy('dias')
            ->pluck('total', 'dias');

        return view('landing-promo-pt', [
            'diasDestacados' => self::DIAS_DESTACADOS,
            'conteoDias' => $conteoDias,
        ]);
    }
}
