<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Tour;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $nombre = trim((string) $request->input('name', ''));
        if ($nombre === '') {
            return view('es.noresults', ['nombre' => '']);
        }
        $name = $request->all();
        $respuesta = Tour::where('nombre', 'LIKE',  "%$nombre%")->get();
        if (count($respuesta) != 0) {
            $respuestas = [
                'respuestas' => $respuesta,
                'nombre' => $nombre,
            ];

            return view('es.search', $respuestas, $name);
        } else {
            return view('es.noresults', compact('nombre'));
        }
    }
    public function searchblog(Request $request)
    {
        $nombre = trim((string) $request->input('name', ''));
        if ($nombre === '') {
            return view('blogs.es.blogs.noresults', ['nombre' => '']);
        }
        $blog = Blog::where('nombre', 'LIKE',  "%$nombre%")->get();
        if (count($blog) != 0) {
            $blogs = [
                'blogs' => $blog,
            ];

            return view('blogs.es.blogs.search', ['blogs' => $blog])
                ->with('nombre', $nombre);
        } else {
            return view('blogs.es.blogs.noresults', compact('nombre'));
        }
    }
}
