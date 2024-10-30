<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Tour;
use App\Models\Toursen;

use Illuminate\Http\Request;

class EnlacesCategorias extends Controller
{
    public function contactenos()
    {
        $tours = Tour::all();
        return view('contactenos', compact('tours'));
    }
    public function machuPicchu()
    {
        $tours = Tour::all();
        //muestra
        return view('es.machu-picchu', compact('tours'));
    }
    public function caminata()
    {
        $tours = Tour::all();
        return view('es.caminatas', compact('tours'));
    }
    public function peru()
    {
        $tours = Tour::all();
        return view('es.peru', compact('tours'));
    }
    public function luxury()
    {
        $tours = Tour::all();
        return view('es.privados', compact('tours'));
    }
    public function fullday()
    {
        $tours = Tour::all();
        return view('es.tours-de-un-dia', compact('tours'));
    }
    public function lodge()
    {
        $tours = Tour::all();
        return view('es.lodge-pacha-mama-spirit', compact('tours'));
    }
    public function nosotros()
    {
        return view('nosotros');
    }
    public function terminos()
    {
        return view('terminos-y-condiciones');
    }
    public function preguntas()
    {
        return view('preguntas-frecuentes');
    }
    public function landing()
    {
        return view('landing');
    }


    //Categorias ingles
    public function about()
    {
        $tours = Toursen::all();
        return view('about-us', compact('tours'));
    }

    public function contact()
    {
        $tours = Toursen::all();
        return view('contact', compact('tours'));
    }
    public function mapien()
    {
        /* $tours = Toursen::all(); */
        $tours = Toursen::whereHas('categories', function ($query) {
            $query->whereRaw('LOWER(nombre) = ?', ['machu']);
        })->get();
        return view('en.machu-picchu', compact('tours'));
    }
    public function hikes()
    {
        $category = Category::whereRaw('LOWER(nombre) LIKE ?', ['%machu%'])->first();
        dd();
        return redirect()->route('category.show', $category);
        /* $tours = Toursen::all(); */
        /* $tours = Toursen::whereHas('categories', function ($query) {
            $query->whereRaw('LOWER(nombre) = ?', ['trekking']);
        })->get();
        return view('en.hikes', compact('tours')); */
    }
    public function around()
    {
        /* $tours = Toursen::all(); */
        $tours = Toursen::whereHas('categories', function ($query) {
            $query->whereRaw('LOWER(nombre) = ?', ['around']);
        })->get();
        return view('en.around-peru', compact('tours'));
    }
    public function private()
    {
        $tours = Toursen::all();
        return view('en.private-and-exclusive-tours', compact('tours'));
    }
    public function fulldayen()
    {
        $tours = Toursen::all();
        return view('en.full-day-tours', compact('tours'));
    }
    public function lodgen()
    {
        $tours = Tour::all();
        return view('en.pacha-mama-spirit-lodge', compact('tours'));
    }
}
