<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index()
    {
        $categories = Categoria::all();
        return view('tours.categorias.index', compact('categories'));
    }

    public function create()
    {
        return view('tours.categorias.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'link' => 'required|string|max:255',
        ]);

        Categoria::create($request->all());
        return redirect()->route('categoria.index')->with('status', 'Categoría creada exitosamente');
    }

    public function show(Categoria $categoria)
    {
        $categoria->load('tours');
        return view('tours.categorias.show', ['category' => $categoria]);
    }

    public function edit(Categoria $categoria)
    {
        return view('tours.categorias.edit', ['category' => $categoria]);
    }

    public function update(Request $request, Categoria $categoria)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'link' => 'required|string|max:255',
        ]);

        $categoria->update($request->all());
        return redirect()->route('categoria.index')->with('status', 'Categoría actualizada exitosamente');
    }

    public function destroy(Categoria $categoria)
    {
        $categoria->delete();
        return redirect()->route('categoria.index')->with('status', 'Categoría eliminada exitosamente');
    }
}
