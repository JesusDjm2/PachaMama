<?php

namespace App\Http\Controllers;

use App\Models\Enblog;
use App\Models\Toursen;
use Illuminate\Http\Request;

class SearchenController extends Controller
{
    public function search(Request $request)
    {
        $name=$request->all();
        $nombre = $name['name'];
        $respuesta = Toursen::where('nombre', 'LIKE',  "%$nombre%")->get();
        if(count($respuesta) != 0){
            $respuestas = [
                'respuestas' => $respuesta,
            ];
    
            return view('en.search', $respuestas);
        }
        else{
            return view('en.noresults');
        }
    }
    public function searchblog(Request $request)
    {
        $name=$request->all();
        $nombre = $name['name'];
        $blog = Enblog::where('nombre', 'LIKE',  "%$nombre%")->get();
        if(count($blog) != 0){
            $blogs = [
                'respuestas' => $blog,
            ];
    
            return view('blogs.en..blogs.search', ['blogs' => $blog])
            ->with('nombre', $nombre);
        }
        else{
            return view('blogs.en.blogs.noresults', compact('nombre'));
        }
    }
}
