<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BlogController;
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

use App\Mail\ContactoMailable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

//Páginas de inicio
Route::get('/', [ToursenController::class, 'mostrar'])->name('index');
Route::get('inicio', [TourController::class, 'mostrar'])->name('inicio');

Route::get('contact-pacha-mama', [EnlacesCategorias::class, 'contact'])->name('contact');
Route::get('contacte-pacha-mama', [EnlacesCategorias::class, 'contactenos'])->name('contactenos');
//Categorias español
Route::get('machu-picchu', [EnlacesCategorias::class, 'machuPicchu'])->name('mapi');
Route::get('caminatas', [EnlacesCategorias::class, 'caminata'])->name('caminata');
Route::get('alrededor-de-peru', [EnlacesCategorias::class, 'peru'])->name('peru');
Route::get('privados', [EnlacesCategorias::class, 'luxury'])->name('luxury');
Route::get('tours-de-un-dia', [EnlacesCategorias::class, 'fullday'])->name('fullday');

Route::get('lodge-pacha-mama-spirit', [EnlacesCategorias::class, 'lodge'])->name('lodges');
Route::get('nosotros', [EnlacesCategorias::class, 'nosotros'])->name('nosotros');
Route::get('terminos-y-condiciones', [EnlacesCategorias::class, 'terminos'])->name('terminos');
Route::get('preguntas-frecuentes', [EnlacesCategorias::class, 'preguntas'])->name('preguntas');

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
Route::get('en/destinies-peru/cusco-navel-of-the-world', function () {
    return view('en/destinies-peru/cusco-navel-of-the-world');
})->name('cusco-navel-of-the-world');
Route::get('en/destinies-peru/lima-city-of-kings', function () {
    return view('en/destinies-peru/lima-city-of-kings');
})->name('lima-city-of-kings');
Route::get('en/destinies-peru/arequipa-the-white-city', function () {
    return view('en/destinies-peru/arequipa-the-white-city');
})->name('arequipa-the-white-city');
Route::get('en/destinies-peru/puno-city', function () {
    return view('en/destinies-peru/puno-city');
})->name('puno-city');
Route::get('en/destinies-peru/ica-city', function () {
    return view('en/destinies-peru/ica-city');
})->name('ica-city');
Route::get('en/destinies-peru/pisco-city', function () {
    return view('en/destinies-peru/pisco-city');
})->name('pisco-city');
Route::get('en/destinies-peru/puerto-maldonado', function () {
    return view('en/destinies-peru/puerto-maldonado');
})->name('puerto-maldonado-en');

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
//Categorias ingles
Route::get('machu-picchu-en', [EnlacesCategorias::class, 'mapien'])->name('mapien');
Route::get('hikes', [EnlacesCategorias::class, 'hikes'])->name('hikes');
Route::get('around-peru', [EnlacesCategorias::class, 'around'])->name('around');
Route::get('private', [EnlacesCategorias::class, 'private'])->name('private');
Route::get('full-day-tours', [EnlacesCategorias::class, 'fulldayen'])->name('fulldayen');
Route::get('lodge-pacha-mama-spirit-en', [EnlacesCategorias::class, 'lodgen'])->name('lodgen');
//Administrador de tour español
Route::resource('tours', TourController::class)->middleware('auth');
Route::get('search', [SearchController::class, 'search'])->name('search');
Route::get('searchblog', [SearchController::class, 'searchblog'])->name('searchblog');
Route::get('tour/{slug}/', [TourController::class, 'show'])->name('tours.show');

//Administrador de tour Ingles
Route::resource('toursen', ToursenController::class)->middleware('auth');
Route::get('search-en-blog', [SearchenController::class, 'searchblog'])->name('search.blog.en');
Route::get('/{slug}/', [ToursenController::class, 'show'])->name('toursen.show');
Route::get('searchen', [SearchenController::class, 'search'])->name('searchen');

//mensajes
Route::post('mensajePacha', [MailController::class, 'getMail'])->name('mensajePacha');
Route::post('mensajePachaEn', [MailController::class, 'getMailEn'])->name('mensajePachaEn');
Route::post('mensajeIndex', [MailController::class, 'getMailIndex'])->name('mensajeIndex');

//Paginas estaticas español:
Route::get('arma-tu-viaje', function () {
    return view('arma-tu-viaje');
})->name('armar-viaje');
/* Route::get('peru-blog', function () {
    return view('peru-blog');
})->name('peru-blog'); */
//Destinos
Route::get('es/destinos-peru', function () {
    return view('es/destinos-peru');
})->name('destinos-peru');
Route::get('es/destinos-en-peru/cusco-ombligo-del-mundo', function () {
    return view('es/destinos-en-peru/cusco-ombligo-del-mundo');
})->name('cusco-ombligo-del-mundo');
Route::get('es/destinos-en-peru/lima-ciudad-de-reyes', function () {
    return view('es/destinos-en-peru/lima-ciudad-de-reyes');
})->name('lima-ciudad-de-reyes');
Route::get('es/destinos-en-peru/arequipa-la-ciudad-blanca', function () {
    return view('es/destinos-en-peru/arequipa-la-ciudad-blanca');
})->name('arequipa-la-ciudad-blanca');
Route::get('es/destinos-en-peru/la-ciudad-de-puno', function () {
    return view('es/destinos-en-peru/la-ciudad-de-puno');
})->name('la-ciudad-de-puno');
Route::get('es/destinos-en-peru/ciudad-de-ica', function () {
    return view('es/destinos-en-peru/ciudad-de-ica');
})->name('ciudad-de-ica');
Route::get('es/destinos-en-peru/ciudad-de-pisco', function () {
    return view('es/destinos-en-peru/ciudad-de-pisco');
})->name('ciudad-de-pisco');
Route::get('es/destinos-en-peru/puerto-maldonado', function () {
    return view('es/destinos-en-peru/puerto-maldonado');
})->name('puerto-maldonado');

