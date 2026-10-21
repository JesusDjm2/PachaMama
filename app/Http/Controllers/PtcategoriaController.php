<?php

namespace App\Http\Controllers;

use App\Models\Ptcategory;
use Illuminate\Http\Request;

class PtcategoriaController extends Controller
{
    public function index()
    {
        $categories = Ptcategory::withCount('tours')->orderBy('nombre')->get();

        return view('tourspt.categorias.index', compact('categories'));
    }

    public function create()
    {
        return view('tourspt.categorias.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'link' => 'required|string|max:255|unique:ptcategories,link',
        ]);

        Ptcategory::create($request->only('nombre', 'link'));

        return redirect()->route('ptcategoria.index')->with('status', 'Categoria criada com sucesso');
    }

    public function edit(Ptcategory $ptcategoria)
    {
        return view('tourspt.categorias.edit', compact('ptcategoria'));
    }

    public function update(Request $request, Ptcategory $ptcategoria)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'link' => 'required|string|max:255|unique:ptcategories,link,' . $ptcategoria->id,
        ]);

        $ptcategoria->update($request->only('nombre', 'link'));

        return redirect()->route('ptcategoria.index')->with('status', 'Categoria atualizada com sucesso');
    }

    public function destroy(Ptcategory $ptcategoria)
    {
        $ptcategoria->tours()->detach();
        $ptcategoria->delete();

        return redirect()->route('ptcategoria.index')->with('status', 'Categoria removida com sucesso');
    }
}
