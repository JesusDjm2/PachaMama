<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Categoria;
use App\Models\Category;
use App\Models\Enblog;
use App\Models\Imagenes;
use App\Models\Ptblog;
use App\Models\Ptcategory;
use App\Models\Tour;
use App\Models\Tourpt;
use App\Models\Toursen;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $totalES = Tour::count();
        $totalEN = Toursen::count();
        $totalPT = Tourpt::count();

        $totalBlogsES = Blog::count();
        $totalBlogsEN = Enblog::count();
        $totalBlogsPT = Ptblog::count();

        $totalImagenes = Imagenes::count();
        $totalUsers = User::count();

        $categoriasES = Categoria::withCount('tours')->orderBy('nombre')->get();
        $categoriasEN = Category::withCount('toursens')->orderBy('nombre')->get();
        $categoriasPT = Ptcategory::withCount('tours')->orderBy('nombre')->get();

        return view('home', compact(
            'totalES', 'totalEN', 'totalPT',
            'totalBlogsES', 'totalBlogsEN', 'totalBlogsPT',
            'totalImagenes', 'totalUsers',
            'categoriasES', 'categoriasEN', 'categoriasPT'
        ));
    }
}