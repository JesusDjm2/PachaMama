<?php

namespace App\Http\Controllers;

use App\Models\Ptag;
use Illuminate\Http\Request;

class PtagController extends Controller
{
    public function index()
    {
        $tags = Ptag::withCount('blogs')->orderBy('nombre')->get();

        return view('blogs.pt.tags.index', compact('tags'));
    }

    public function create()
    {
        $tag = new Ptag();

        return view('blogs.pt.tags.create', compact('tag'));
    }

    public function store(Request $request)
    {
        $request->validate(['nombre' => 'required', 'slug' => 'required|unique:pttags,slug']);

        Ptag::create([
            'nombre' => $request->input('nombre'),
            'slug' => $request->input('slug'),
        ]);

        return redirect()->route('pttags.index')->with('success', 'Tag em português criado com sucesso!');
    }

    public function edit($id)
    {
        $tag = Ptag::findOrFail($id);

        return view('blogs.pt.tags.edit', compact('tag'));
    }

    public function update(Request $request, $id)
    {
        $tag = Ptag::findOrFail($id);
        $request->validate([
            'nombre' => 'required',
            'slug' => 'required|unique:pttags,slug,' . $tag->id,
        ]);
        $tag->update($request->only('nombre', 'slug'));

        return redirect()->route('pttags.index')->with('success', 'Tag atualizado com sucesso!');
    }

    public function destroy($id)
    {
        $tag = Ptag::findOrFail($id);
        $tag->blogs()->detach();
        $tag->delete();

        return redirect()->route('pttags.index')->with('success', 'Tag removido com sucesso!');
    }
}
