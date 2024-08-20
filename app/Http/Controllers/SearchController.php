<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Tour;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $name = $request->all();
        $nombre = $name['name'];
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
        $name = $request->all();
        $nombre = $name['name'];
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
