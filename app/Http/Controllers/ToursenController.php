<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Enblog;
use App\Models\Toursen;
use App\Models\Tour;
use App\Support\HomeTourFilters;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Validation\Rule;

class ToursenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /* public function index()
    {
        $tours = Toursen::all();
        return view('toursen.index')->with('tours', $tours);
    } */
    public function index()
    {
        $tours = Toursen::with('categories')->get();
        return view('toursen.index')->with('tours', $tours);
    }

    public function mostrar(Request $request)
    {
        $query = Toursen::query()
            ->with('categories')
            ->orderBy('created_at', 'desc');
        HomeTourFilters::applyToToursenQuery($query, $request);
        $tours = $query->get();
        $blogsRecientes = Enblog::query()->latest()->take(4)->get();
        $filterMeta = HomeTourFilters::metaForToursen();

        if ($request->ajax()) {
            return response()
                ->view('partials.home-tours-grid-en', ['tours' => $tours])
                ->header('Cache-Control', 'private, no-store');
        }

        return view('index', [
            'tours' => $tours,
            'blogsRecientes' => $blogsRecientes,
            'filterUbicaciones' => $filterMeta['ubicaciones'],
            'filterDias' => $filterMeta['dias'],
            'filterPrecios' => $filterMeta['precios'],
            'filterAction' => route('index'),
            'filterLocale' => 'en',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $toursDisponibles = $this->toursDisponiblesParaToursen(null);
        $categories = Category::all();

        return view('toursen.create', compact('toursDisponibles', 'categories'));
    }

    /**
     * Tours en español sin versión EN, más el tour ya vinculado al editar ($tourIdEs = tours.tour_id).
     */
    protected function toursDisponiblesParaToursen(?int $tourIdEsVinculado): Collection
    {
        return Tour::query()
            ->where(function ($q) use ($tourIdEsVinculado) {
                $q->whereDoesntHave('toursens');
                if ($tourIdEsVinculado) {
                    $q->orWhere('id', $tourIdEsVinculado);
                }
            })
            ->orderBy('nombre')
            ->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'required|string|max:255',
            'detallado' => 'required|string',
            'contenido' => 'required|string',
            'incluidos' => 'required|string',
            'importante' => 'nullable|string',
            'precio' => 'required|numeric',
            'dias' => 'required|integer',
            'ubicacion' => 'required|string',
            'img' => 'nullable|file|image',
            'mapa' => 'nullable|string',
            'categoria' => 'required|array',
            'categoria.*' => 'string',
            'keywords' => 'nullable|string',
            'slug' => 'required|string|unique:toursens,slug',
            'clase' => 'required|string',
            'tour_id' => [
                'required',
                'exists:tours,id',
                Rule::unique('toursens', 'tour_id'),
            ],
        ]);

        $toursen = new Toursen();

        $toursen->nombre = $request->get('nombre');
        $toursen->descripcion = $request->get('descripcion');
        $toursen->detallado = $request->get('detallado');
        $toursen->contenido = $request->get('contenido');
        $toursen->incluidos = $request->get('incluidos');
        $toursen->importante = $request->get('importante');
        $toursen->precio = $request->get('precio');
        $toursen->dias = $request->get('dias');
        $toursen->ubicacion = $request->get('ubicacion');

        if ($request->hasFile('img')) {
            $img = $request->file('img');
            $rutaImg = public_path("img/buscador/");
            $imgTour = $img->getClientOriginalName();
            $img->move($rutaImg, $imgTour);
            $toursen->img = "img/buscador/$imgTour";
        }

        $toursen->mapa = $request->get('mapa');
        $toursen->keywords = $request->get('keywords');
        $toursen->slug = $request->get('slug');
        $toursen->clase = $request->get('clase');
        $toursen->tour_id = $request->input('tour_id');

        $toursen->save();

        // Asociar categorías
        $toursen->categories()->sync($request->get('categoria'));

        session()->flash('status', 'Tour en inglés creado y vinculado al tour en español.');
        return redirect('toursen');
    }


    public function show($slug) 
    {
        /* $tour = Toursen::where('slug', $slug)->firstOrFail(); */
        $tour = Toursen::with(['categories', 'tour'])->where('slug', $slug)->firstOrFail();
        $otrosTours = Toursen::where('id', '!=', $tour->id)->get();
        return view('toursen.show', compact('tour', 'otrosTours'));
    }

    public function edit($id)
    {
        $tour = Toursen::findOrFail($id);
        $toursDisponibles = $this->toursDisponiblesParaToursen($tour->tour_id);
        $categorias = Category::all(); // Obtener todas las categorías

        return view('toursen.edit', compact('tour', 'toursDisponibles', 'categorias'));
    }

    public function update(Request $request, $id)
    {
        $tour = Toursen::findOrFail($id);

        $request->validate([
            'nombre' => 'required|string|max:120',
            'descripcion' => 'required|string|max:250',
            'tour_id' => [
                'required',
                'exists:tours,id',
                Rule::unique('toursens', 'tour_id')->ignore($tour->id),
            ],
        ]);

        $tour->nombre = $request->get('nombre');
        $tour->descripcion = $request->get('descripcion');
        $tour->mapa = $request->get('mapa');
        $tour->detallado = $request->get('detallado');
        $tour->contenido = $request->get('contenido');
        $tour->incluidos = $request->get('incluidos');
        $tour->importante = $request->get('importante');
        $tour->precio = $request->get('precio');
        $tour->dias = $request->get('dias');
        $tour->ubicacion = $request->get('ubicacion');
        $tour->keywords = $request->get('keywords');
        $tour->clase = $request->get('clase');
        $tour->slug = $request->get('slug');

        if ($request->hasFile('img')) {
            $img = $request->file('img');
            $rutaImg = public_path("img/buscador/");
            $imgTour = $img->getClientOriginalName();
            $img->move($rutaImg, $imgTour);
            $tour->img = "img/buscador/$imgTour";
        }

        // Actualizar la relación con el tour seleccionado
        $tour->tour_id = $request->get('tour_id');

        // Sincronizar las categorías seleccionadas
        $tour->categories()->sync($request->get('categories', []));

        $tour->save();

        session()->flash('status', 'Tour actualizado exitosamente!');
        return redirect('/toursen');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Toursen  $toursen
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tour = Toursen::find($id);
        $tour->delete();
        session()->flash('status', 'Tour borrado exitosamente!');
        return redirect('/toursen');
    }
}
