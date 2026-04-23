<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\EnblogController;
use App\Http\Controllers\EnlacesCategorias;
use App\Http\Controllers\EntagController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImagenesController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SearchenController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\ToursenController;
use App\Http\Controllers\UserControler;
use App\Http\Controllers\DestiniesPeruController;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//Páginas de inicio
Route::get('/', [ToursenController::class, 'mostrar'])->name('index');
Route::get('inicio', [TourController::class, 'mostrar'])->name('inicio');

Route::get('contact-pacha-mama', [EnlacesCategorias::class, 'contact'])->name('contact');
Route::get('about-Pacha-Mama', [EnlacesCategorias::class, 'about'])->name('about');
Route::get('terms-and-conditions', [EnlacesCategorias::class, 'termsEn'])->name('terms-en');
Route::get('contacte-pacha-mama', [EnlacesCategorias::class, 'contactenos'])->name('contactenos');
//Categorias español
Route::get('machu-picchu', [EnlacesCategorias::class, 'machuPicchu'])->name('mapi');
Route::get('caminatas', [EnlacesCategorias::class, 'caminata'])->name('caminata');
Route::get('alrededor-de-peru', [EnlacesCategorias::class, 'peru'])->name('peru');
Route::get('privados', [EnlacesCategorias::class, 'luxury'])->name('luxury');
Route::get('tours-de-un-dia', [EnlacesCategorias::class, 'fullday'])->name('fullday');

// Categorías (inglés): literales ANTES del resource "categories" (si no, categories/trekking cae en el CRUD).
Route::get('category/machu-picchu', [EnlacesCategorias::class, 'mapien'])->name('mapien');
Route::get('categories/trekking', [EnlacesCategorias::class, 'hikes'])->name('hikes');
Route::get('category/around-peru', [EnlacesCategorias::class, 'around'])->name('around');
Route::get('category/luxury-tours', [EnlacesCategorias::class, 'private'])->name('private');
Route::get('full-day-tours', [EnlacesCategorias::class, 'fulldayen'])->name('fulldayen');
Route::get('pacha-mama-spirit-lodge', [EnlacesCategorias::class, 'lodgen'])->name('lodgen');

Route::get('category/{category:link}', [CategoryController::class, 'show'])->name('category.show');

Route::resource('categories', CategoryController::class)->middleware('auth')->names([
    'index' => 'category.index',
    'create' => 'category.create',
    'store' => 'category.store',
    'edit' => 'category.edit',
    'update' => 'category.update',
    'destroy' => 'category.destroy',
    'show' => 'category.admin.show',
]);

Route::get('lodge-pacha-mama-spirit', [EnlacesCategorias::class, 'lodge'])->name('lodges');
Route::get('nosotros', [EnlacesCategorias::class, 'nosotros'])->name('nosotros');
Route::get('terminos-y-condiciones', [EnlacesCategorias::class, 'terminos'])->name('terminos');
Route::get('preguntas-frecuentes', [EnlacesCategorias::class, 'preguntas'])->name('preguntas');
Route::get('frequently-asked-questions', [EnlacesCategorias::class, 'faq'])->name('faq');

Route::get('ven-a-conocer-Peru', [EnlacesCategorias::class, 'landing'])->name('landing');

//Blog Ingles:
Route::get('blog-peru', [BlogController::class, 'listado'])->name('listado');
Route::get('peru-blog', [EnblogController::class, 'listado'])->name('enlistado');

Route::get('blog/holy-week', function () { return view('blog/en/Holy-week');})->name('holy-week');
Route::get('blog/touristic-activities-cusco', function () { return view('blog/en/touristic-activities-cusco');})->name('activities-cusco');

//Destinies
Route::get('en/destinies-peru', function () {
    return view('en/destinies-peru');
})->name('destinies-peru');
Route::get('en/destinies-peru/{slug}', [DestiniesPeruController::class, 'destination'])
    ->whereIn('slug', array_keys(DestiniesPeruController::PAGES))
    ->name('destinies-peru.destination');

/* Blogs */
//Blogs Español
Route::resource('tags', TagController::class)->middleware('auth')->names('tags');
Route::get('tag/{slug}', [TagController::class, 'show'])->name('tag');
Route::resource('blogs', BlogController::class)->middleware('auth')->names('blogs');
Route::get('blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

//Blogs Inglés
Route::resource('entags', EntagController::class)->middleware('auth')->names('entags');
Route::get('en-tag/{slug}', [EntagController::class, 'show'])->name('entag');
Route::resource('enblogs', EnblogController::class)->middleware('auth')->names('enblogs');
Route::get('en-blog/{slug}', [EnblogController::class, 'show'])->name('enblog');
//Usuarios
Route::resource('users', UserControler::class)->middleware('auth');
Route::get('registrarPacha', [UserControler::class, 'create'])->middleware('auth')->name('registrar');
Route::post('upload_image', [ArticleController::class, 'uploadImage'])->name('upload');
Auth::routes();
Route::get('/djm2', [HomeController::class, 'index']);

//Crud de imagenes
Route::resource('imagenes', ImagenesController::class)->middleware('auth');
//Administrador de tour español
Route::resource('tours', TourController::class)->middleware('auth');
Route::get('search', [SearchController::class, 'search'])->name('search');
Route::get('searchblog', [SearchController::class, 'searchblog'])->name('searchblog');
Route::get('tour/{slug}/', [TourController::class, 'show'])->name('tours.show');

//Administrador de tour Ingles
Route::resource('toursen', ToursenController::class)->middleware('auth')->except(['show'])->names('toursen');
Route::get('search-en-blog', [SearchenController::class, 'searchblog'])->name('search.blog.en');
Route::get('searchen', [SearchenController::class, 'search'])->name('searchen');

//mensajes
Route::post('mensajePacha', [MailController::class, 'getMail'])->name('mensajePacha');
Route::post('mensajePachaEn', [MailController::class, 'getMailEn'])->name('mensajePachaEn');
Route::post('mensajeIndex', [MailController::class, 'getMailIndex'])->name('mensajeIndex');

//Paginas estaticas español:
Route::get('arma-tu-viaje', function () {
    return view('arma-tu-viaje');
})->name('armar-viaje');
//Destinos
Route::get('es/destinos-peru', function () {
    return view('es/destinos-peru');
})->name('destinos-peru');
Route::get('es/destinos-en-peru/cusco-ombligo-del-mundo', function () {
    return app(DestiniesPeruController::class)->destinationEs('cusco-ombligo-del-mundo');
})->name('cusco-ombligo-del-mundo');
Route::get('es/destinos-en-peru/lima-ciudad-de-reyes', function () {
    return app(DestiniesPeruController::class)->destinationEs('lima-ciudad-de-reyes');
})->name('lima-ciudad-de-reyes');
Route::get('es/destinos-en-peru/arequipa-la-ciudad-blanca', function () {
    return app(DestiniesPeruController::class)->destinationEs('arequipa-la-ciudad-blanca');
})->name('arequipa-la-ciudad-blanca');
Route::get('es/destinos-en-peru/la-ciudad-de-puno', function () {
    return app(DestiniesPeruController::class)->destinationEs('la-ciudad-de-puno');
})->name('la-ciudad-de-puno');
Route::get('es/destinos-en-peru/ciudad-de-ica', function () {
    return app(DestiniesPeruController::class)->destinationEs('ciudad-de-ica');
})->name('ciudad-de-ica');
Route::get('es/destinos-en-peru/ciudad-de-pisco', function () {
    return app(DestiniesPeruController::class)->destinationEs('ciudad-de-pisco');
})->name('ciudad-de-pisco');
Route::get('es/destinos-en-peru/puerto-maldonado', function () {
    return app(DestiniesPeruController::class)->destinationEs('puerto-maldonado');
})->name('puerto-maldonado');

// Tour público en inglés (slug) — al final para no interceptar rutas estáticas de una sola parte
Route::get('{slug}', [ToursenController::class, 'show'])
    ->where('slug', '[A-Za-z0-9][A-Za-z0-9\-]*')
    ->name('toursen.show');
