<?php

namespace App\Http\Controllers;

use App\Models\Ptblog;
use App\Models\Ptcategory;
use App\Models\Tour;
use App\Models\Tourpt;
use App\Support\HomeTourFilters;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Validation\Rule;

class TourptController extends Controller
{
    public function mostrar(Request $request)
    {
        $query = Tourpt::query()
            ->with('categories')
            ->orderBy('created_at', 'desc');
        HomeTourFilters::applyToTourptQuery($query, $request);

        if ($request->filled('q')) {
            $termino = trim((string) $request->input('q'));
            $query->where(function ($w) use ($termino) {
                $w->where('nombre', 'like', '%' . $termino . '%')
                  ->orWhere('ubicacion', 'like', '%' . $termino . '%')
                  ->orWhere('descripcion', 'like', '%' . $termino . '%');
            });
        }

        $tours = $query->get();

        $blogsRecientes = Ptblog::query()
            ->orderByDesc('published_at')
            ->orderByDesc('created_at')
            ->take(12)
            ->get();

        $filterMeta = HomeTourFilters::metaForTourpt();

        if ($request->ajax()) {
            return response()
                ->view('partials.home-tours-grid-pt', ['tours' => $tours])
                ->header('Cache-Control', 'private, no-store');
        }

        return view('pt.inicio', [
            'tours' => $tours,
            'blogsRecientes' => $blogsRecientes,
            'filterUbicaciones' => $filterMeta['ubicaciones'],
            'filterDias' => $filterMeta['dias'],
            'filterPrecios' => $filterMeta['precios'],
            'filterAction' => route('pt.index'),
            'filterLocale' => 'pt',
        ]);
    }

    public function show(string $slug)
    {
        $tour = Tourpt::query()->with('categories')->where('slug', $slug)->firstOrFail();

        return view('pt.tour', [
            'tour' => $tour,
            'otrosTours' => Tourpt::query()->where('id', '!=', $tour->id)->get(),
        ]);
    }

    public function categoria(Ptcategory $categoria)
    {
        $tours = Tourpt::query()
            ->with('categories')
            ->whereHas('categories', fn ($q) => $q->where('link', $categoria->link))
            ->orderBy('created_at', 'desc')
            ->get();

        return view('pt.categoria', compact('categoria', 'tours'));
    }

    /**
     * Panel: listado de tours en portugués, con filtro por categoría PT.
     */
    public function index(Request $request)
    {
        $categories = Ptcategory::orderBy('nombre')->get();
        $filtroCategoria = $request->get('categoria');

        $query = Tourpt::with(['categories', 'tour'])->latest();
        if ($filtroCategoria) {
            $query->whereHas('categories', fn ($q) => $q->where('link', $filtroCategoria));
        }
        $tours = $query->get();

        return view('tourspt.index', compact('tours', 'categories', 'filtroCategoria'));
    }

    public function create()
    {
        $toursDisponibles = $this->toursDisponiblesParaTourpt(null);
        $categories = Ptcategory::all();

        return view('tourspt.create', compact('toursDisponibles', 'categories'));
    }

    /**
     * Tours en español sin versión PT, más el tour ya vinculado al editar ($tourIdEs).
     */
    protected function toursDisponiblesParaTourpt(?int $tourIdEsVinculado): Collection
    {
        return Tour::query()
            ->where(function ($q) use ($tourIdEsVinculado) {
                $q->whereDoesntHave('tourpt');
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
            'img' => 'required|file|image',
            'mapa' => 'nullable|string',
            'categoria' => 'required|array',
            'categoria.*' => 'string',
            'keywords' => 'nullable|string',
            'slug' => 'required|string|unique:tourspt,slug',
            'clase' => 'required|string',
            'tour_id' => [
                'required',
                'exists:tours,id',
                Rule::unique('tourspt', 'tour_id'),
            ],
        ]);

        $tour = new Tourpt();
        $tour->fill($request->only([
            'nombre', 'descripcion', 'detallado', 'contenido', 'incluidos', 'importante',
            'precio', 'dias', 'ubicacion', 'mapa', 'keywords', 'slug', 'clase',
        ]));
        $tour->tour_id = $request->input('tour_id');
        // La columna categoria guarda las claves del tour ES enlazado (la usan las insignias de inicio PT);
        // las categorías PT visibles van en el pivote ptcategories.
        $tour->categoria = optional(Tour::find($request->input('tour_id')))->categoria ?? '';

        if ($request->hasFile('img')) {
            $img = $request->file('img');
            $imgTour = $img->getClientOriginalName();
            $img->move(public_path('img/buscador/'), $imgTour);
            $tour->img = "img/buscador/$imgTour";
        }

        $tour->save();
        $tour->categories()->sync($request->get('categoria'));

        session()->flash('status', 'Tour em português criado e vinculado ao tour em espanhol.');

        return redirect('tourspt');
    }

    public function edit($id)
    {
        $tour = Tourpt::with('categories')->findOrFail($id);
        $toursDisponibles = $this->toursDisponiblesParaTourpt($tour->tour_id);
        $categorias = Ptcategory::all();

        return view('tourspt.edit', compact('tour', 'toursDisponibles', 'categorias'));
    }

    public function update(Request $request, $id)
    {
        $tour = Tourpt::findOrFail($id);

        $request->validate([
            'nombre' => 'required|string|max:120',
            'descripcion' => 'required|string|max:250',
            'slug' => 'required|string|unique:tourspt,slug,' . $tour->id,
            'tour_id' => [
                'required',
                'exists:tours,id',
                Rule::unique('tourspt', 'tour_id')->ignore($tour->id),
            ],
        ]);

        $tour->fill($request->only([
            'nombre', 'descripcion', 'detallado', 'contenido', 'incluidos', 'importante',
            'precio', 'dias', 'ubicacion', 'mapa', 'keywords', 'slug', 'clase',
        ]));
        $tour->tour_id = $request->input('tour_id');
        $tour->categoria = optional(Tour::find($request->input('tour_id')))->categoria ?? $tour->categoria;

        if ($request->hasFile('img')) {
            $img = $request->file('img');
            $imgTour = $img->getClientOriginalName();
            $img->move(public_path('img/buscador/'), $imgTour);
            $tour->img = "img/buscador/$imgTour";
        }

        $tour->save();
        $tour->categories()->sync($request->get('categories', []));

        session()->flash('status', 'Tour atualizado com sucesso!');

        return redirect('tourspt');
    }

    public function destroy($id)
    {
        $tour = Tourpt::findOrFail($id);
        $tour->categories()->detach();
        $tour->delete();

        session()->flash('status', 'Tour removido com sucesso!');

        return redirect('tourspt');
    }
}
