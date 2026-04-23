<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Enblog;
use App\Models\Entag;
use App\Models\Toursen;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Validation\Rule;

class EnblogController extends Controller
{
    /**
     * Artículos ES sin pareja EN (más el blog ya vinculado a este enblog al editar).
     */
    protected function blogsDisponiblesParaEn(?Enblog $enblog): Collection
    {
        return Blog::query()
            ->where(function ($q) use ($enblog) {
                $q->whereDoesntHave('enblog');
                if ($enblog && $enblog->blog_id) {
                    $q->orWhere('id', $enblog->blog_id);
                }
            })
            ->orderBy('nombre')
            ->get();
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Enblog::query()->with(['entags', 'blog'])->get();
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
        $blogsEs = $this->blogsDisponiblesParaEn(null);

        return view('blogs.en.blogs.create', compact('blog', 'tags', 'blogsEs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (! $request->filled('blog_id')) {
            $request->merge(['blog_id' => null]);
        }

        $request->validate([
            'nombre' => 'required|unique:enblogs,nombre',
            'descripcion' => 'required',
            'cuerpo' => 'required',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'keywords' => 'nullable|string',
            'slug' => 'required|string|unique:enblogs,slug',
            'tags' => 'nullable|array',
            'blog_id' => [
                'nullable',
                'exists:blogs,id',
                Rule::unique('enblogs', 'blog_id'),
            ],
        ]);
        $blog = new Enblog();
        $blog->nombre = $request->get('nombre');
        $blog->descripcion = $request->get('descripcion');
        $blog->cuerpo = $request->get('cuerpo');
        $blog->blog_id = $request->input('blog_id') ?: null;

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
        $blog = Enblog::query()->with('blog')->where('slug', $slug)->firstOrFail();
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
        $blog = Enblog::with(['entags', 'blog'])->findOrFail($id);
        $tags = Entag::query()->pluck('nombre', 'id');
        $blogsEs = $this->blogsDisponiblesParaEn($blog);

        return view('blogs.en.blogs.edit', compact('blog', 'tags', 'blogsEs'));
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
        if (! $request->filled('blog_id')) {
            $request->merge(['blog_id' => null]);
        }

        $request->validate([
            'nombre' => 'required|unique:enblogs,nombre,' . $id,
            'descripcion' => 'required',
            'cuerpo' => 'required',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'keywords' => 'nullable|string',
            'slug' => 'required|string|unique:enblogs,slug,' . $id,
            'tags' => 'nullable|array',
            'blog_id' => [
                'nullable',
                'exists:blogs,id',
                Rule::unique('enblogs', 'blog_id')->ignore($id),
            ],
        ]);
        $blog = Enblog::findOrFail($id);
        $blog->nombre = $request->get('nombre');
        $blog->descripcion = $request->get('descripcion');
        $blog->cuerpo = $request->get('cuerpo');
        $blog->keywords = $request->get('keywords');
        $blog->slug = $request->get('slug');
        $blog->blog_id = $request->input('blog_id') ?: null;
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
