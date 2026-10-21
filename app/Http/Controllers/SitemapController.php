<?php

namespace App\Http\Controllers;

use App\Models\Tour;
use App\Models\Toursen;
use App\Models\Tourpt;
use App\Models\Ptblog;
use App\Models\Ptcategory;
use App\Models\Blog;
use App\Models\Enblog;
use App\Models\Category;
use App\Models\Categoria;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\URL;

class SitemapController extends BaseController
{
    public function index()
    {
        $tours = Tour::all();
        $toursEn = Toursen::all();
        $toursPt = Tourpt::all();
        $blogs = Blog::all();
        $blogsEn = Enblog::all();
        $blogsPt = Ptblog::all();
        $categoriesEn = Category::all();
        $categoriesEs = Categoria::all();
        $categoriesPt = Ptcategory::all();

        // Páginas estáticas
        $staticPages = $this->getStaticPages();

        return response()->view('sitemap.index', [
            'tours' => $tours,
            'toursEn' => $toursEn,
            'toursPt' => $toursPt,
            'blogs' => $blogs,
            'blogsEn' => $blogsEn,
            'blogsPt' => $blogsPt,
            'categoriesEn' => $categoriesEn,
            'categoriesEs' => $categoriesEs,
            'categoriesPt' => $categoriesPt,
            'staticPages' => $staticPages,
        ], 200)->header('Content-Type', 'text/xml; charset=utf-8');
    }

    private function getStaticPages()
    {
        return [
            // Español
            ['url' => route('inicio'), 'changefreq' => 'weekly', 'priority' => '1.00'],
            ['url' => route('mapi'), 'changefreq' => 'monthly', 'priority' => '0.90'],
            ['url' => route('caminata'), 'changefreq' => 'monthly', 'priority' => '0.90'],
            ['url' => route('peru'), 'changefreq' => 'monthly', 'priority' => '0.90'],
            ['url' => route('luxury'), 'changefreq' => 'monthly', 'priority' => '0.90'],
            ['url' => route('fullday'), 'changefreq' => 'monthly', 'priority' => '0.90'],
            ['url' => route('listado'), 'changefreq' => 'weekly', 'priority' => '0.85'],
            ['url' => route('lodges'), 'changefreq' => 'monthly', 'priority' => '0.80'],
            ['url' => route('nosotros'), 'changefreq' => 'monthly', 'priority' => '0.80'],
            ['url' => route('terminos'), 'changefreq' => 'yearly', 'priority' => '0.50'],
            ['url' => route('preguntas'), 'changefreq' => 'monthly', 'priority' => '0.75'],
            ['url' => route('contactenos'), 'changefreq' => 'monthly', 'priority' => '0.75'],
            ['url' => route('destinos-peru'), 'changefreq' => 'monthly', 'priority' => '0.85'],
            ['url' => route('armar-viaje'), 'changefreq' => 'monthly', 'priority' => '0.80'],
            ['url' => route('promo.es'), 'changefreq' => 'weekly', 'priority' => '0.80'],

            // Inglés
            ['url' => route('index'), 'changefreq' => 'weekly', 'priority' => '1.00'],
            ['url' => route('mapien'), 'changefreq' => 'monthly', 'priority' => '0.90'],
            ['url' => route('hikes'), 'changefreq' => 'monthly', 'priority' => '0.90'],
            ['url' => route('around'), 'changefreq' => 'monthly', 'priority' => '0.90'],
            ['url' => route('private'), 'changefreq' => 'monthly', 'priority' => '0.90'],
            ['url' => route('fulldayen'), 'changefreq' => 'monthly', 'priority' => '0.90'],
            ['url' => route('enlistado'), 'changefreq' => 'weekly', 'priority' => '0.85'],
            ['url' => route('lodgen'), 'changefreq' => 'monthly', 'priority' => '0.80'],
            ['url' => route('about'), 'changefreq' => 'monthly', 'priority' => '0.80'],
            ['url' => route('terms-en'), 'changefreq' => 'yearly', 'priority' => '0.50'],
            ['url' => route('faq'), 'changefreq' => 'monthly', 'priority' => '0.75'],
            ['url' => route('contact'), 'changefreq' => 'monthly', 'priority' => '0.75'],
            ['url' => route('destinies-peru'), 'changefreq' => 'monthly', 'priority' => '0.85'],
            ['url' => route('promo.en'), 'changefreq' => 'weekly', 'priority' => '0.80'],

            // Portugués
            ['url' => route('pt.index'), 'changefreq' => 'weekly', 'priority' => '1.00'],
            ['url' => route('pt.blog.index'), 'changefreq' => 'weekly', 'priority' => '0.85'],
            ['url' => route('pt.contato'), 'changefreq' => 'monthly', 'priority' => '0.75'],
            ['url' => route('pt.categoria', 'trilhas'), 'changefreq' => 'monthly', 'priority' => '0.90'],
            ['url' => route('pt.categoria', 'machu-picchu'), 'changefreq' => 'monthly', 'priority' => '0.90'],
            ['url' => route('pt.categoria', 'arredores-do-peru'), 'changefreq' => 'monthly', 'priority' => '0.90'],
            ['url' => route('pt.categoria', 'dia-inteiro'), 'changefreq' => 'monthly', 'priority' => '0.90'],
            ['url' => route('pt.categoria', 'tours-de-luxo'), 'changefreq' => 'monthly', 'priority' => '0.90'],
            ['url' => route('promo.pt'), 'changefreq' => 'weekly', 'priority' => '0.80'],
        ];
    }
}
