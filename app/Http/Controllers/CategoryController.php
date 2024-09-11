<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('toursen.categorias.index', compact('categories'));
    }

    public function create()
    {
        return view('toursen.categorias.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'link' => 'required|string|max:255',
        ]);

        Category::create($request->all());
        return redirect()->route('category.index')->with('status', 'Categoría creada exitosamente');
    }

    /* public function show(Category $category)
    {
        return view('toursen.categorias.show', compact('category'));
    } */

    /* public function show($id)
    {
        $category = Category::with('toursens')->findOrFail($id);
        return view('toursen.categorias.show', compact('category'));
    } */
    public function show(Category $category)
    {
        $category->load('toursens');
        return view('toursen.categorias.show', compact('category'));
    }

    public function edit(Category $category)
    {
        return view('toursen.categorias.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'link' => 'required|string|max:255',
        ]);

        $category->update($request->all());
        return redirect()->route('category.index')->with('status', 'Categoría actualizada exitosamente');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('category.index')->with('status', 'Categoría eliminada exitosamente');
    }
}
