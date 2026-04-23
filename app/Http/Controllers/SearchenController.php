<?php

namespace App\Http\Controllers;

use App\Models\Enblog;
use App\Models\Toursen;
use Illuminate\Http\Request;

class SearchenController extends Controller
{
    public function search(Request $request)
    {
        $nombre = trim((string) $request->input('name', ''));
        if ($nombre === '') {
            return view('en.noresults', ['nombre' => '']);
        }
        $respuesta = Toursen::where('nombre', 'LIKE',  "%$nombre%")->get();
        if (count($respuesta) != 0) {
            return view('en.search', [
                'respuestas' => $respuesta,
                'name' => $nombre,
            ]);
        }

        return view('en.noresults', compact('nombre'));
    }
    public function searchblog(Request $request)
    {
        $nombre = trim((string) $request->input('name', ''));
        if ($nombre === '') {
            return view('blogs.en.blogs.noresults', ['nombre' => '']);
        }
        $blog = Enblog::with('entags')->where('nombre', 'LIKE', "%$nombre%")->get();
        if(count($blog) != 0){
            $blogs = [
                'respuestas' => $blog,
            ];
    
            return view('blogs.en.blogs.search', ['blogs' => $blog])
            ->with('nombre', $nombre);
        }
        else{
            return view('blogs.en.blogs.noresults', compact('nombre'));
        }
    }
}
