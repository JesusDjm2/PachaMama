<?php

namespace App\Http\Controllers;

use App\Models\Enblog;
use App\Models\Entag;
use App\Models\Toursen;
use Illuminate\Http\Request;

class EnblogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Enblog::query()->with('entags')->get();
        return view('blogs.en.blogs.index', compact('blogs'));
    }
    public function listado(){
        $blogs = Enblog::latest()->get();
        return view('peru-blog',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blog = new Enblog();
        $tags = Entag::query()->pluck('nombre', 'id');
        return view('blogs.en.blogs.create', compact('blog', 'tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|unique:blogs',
            'descripcion' => 'required',
            'cuerpo' => 'required',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'keywords' => 'nullable|string',
            'slug' => 'required|string',
            'tags' => 'nullable|array',
        ]);
        $blog = new Enblog();
        $blog->nombre = $request->get('nombre');
        $blog->descripcion = $request->get('descripcion');
        $blog->cuerpo = $request->get('cuerpo');

        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('img/blog'), $filename);
            $blog->img = '/img/blog/' . $filename;
        }
        $blog->keywords = $request->get('keywords');
        $blog->slug = $request->get('slug');
        $blog->save();
        $blog->entags()->sync(request('tags'));
        return redirect()->route('enblogs.index', $blog->id)->with('success', 'El blog se ha creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Enblog  $enblog
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $blog = Enblog::where('slug', $slug)->firstOrFail();
        $blogses = Enblog::where('id', '!=', $blog->id)->latest()->take(3)->get();
        $tours = Toursen::latest()->take(4)->get();
        return view('blogs.en.blogs.show', compact('blog', 'blogses','tours'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Enblog  $enblog
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blog = Enblog::with('entags')->findOrFail($id); 
        $tags = Entag::query()->pluck('nombre', 'id');
        return view('blogs.en.blogs.edit', compact('blog', 'tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Enblog  $enblog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        {
            $request->validate([
                'nombre' => 'required|unique:blogs,nombre,' . $id,
                'descripcion' => 'required',
                'cuerpo' => 'required',
                'img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                'keywords' => 'nullable|string',
                'slug' => 'required|string',
                'tags' => 'nullable|array',
            ]);
            $blog = Enblog::findOrFail($id);
            $blog->nombre = $request->get('nombre');
            $blog->descripcion = $request->get('descripcion');
            $blog->cuerpo = $request->get('cuerpo');
            $blog->keywords = $request->get('keywords');
            $blog->slug = $request->get('slug');
            if ($request->hasFile('img')) {
                $image = $request->file('img');
                $filename = $image->getClientOriginalName();
                $image->move(public_path('img/blog'), $filename);
                $blog->img = '/img/blog/' . $filename;
            }
    
            $blog->save();
            $blog->entags()->sync(request('tags'));
            return redirect()->route('enblogs.index')->with('success', 'El blog se ha actualizado correctamente.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Enblog  $enblog
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $blog = Enblog::query()->findOrFail($id);
        $blog->entags()->detach();
        if (file_exists(public_path($blog->img))) {
            unlink(public_path($blog->img));
        }
        $blog->delete();

        return redirect()->route('enblogs.index')
            ->with('success', 'Blog borrado exitosamente!');
    }
}
