<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Ptag;
use App\Models\Ptblog;
use App\Models\Tourpt;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Validation\Rule;

class PtblogController extends Controller
{
    public function listado(Request $request)
    {
        $query = Ptblog::query()->latest();

        if ($request->filled('name')) {
            $termino = trim((string) $request->input('name'));
            $query->where(function ($w) use ($termino) {
                $w->where('nombre', 'like', '%' . $termino . '%')
                  ->orWhere('descripcion', 'like', '%' . $termino . '%');
            });
        }

        $blogs = $query->get();

        return view('pt.blog-index', [
            'blogs' => $blogs,
            'busqueda' => $request->filled('name') ? trim((string) $request->input('name')) : null,
        ]);
    }

    public function show(string $slug)
    {
        $blog = Ptblog::query()->with(['tags', 'blog.enblog'])->where('slug', $slug)->firstOrFail();
        $blogses = Ptblog::query()->where('id', '!=', $blog->id)->latest()->take(3)->get();
        $tours = Tourpt::query()->with('categories')->latest()->take(4)->get();

        return view('pt.blog-show', compact('blog', 'blogses', 'tours'));
    }

    public function tag(string $slug)
    {
        $tag = Ptag::query()->where('slug', $slug)->firstOrFail();
        $blogs = $tag->blogs()->latest()->get();
        $coincidencias = $tag->blogs()->count();
        $allTags = Ptag::query()
            ->withCount('blogs')
            ->orderByDesc('blogs_count')
            ->orderBy('nombre')
            ->get();

        return view('pt.tag', compact('tag', 'blogs', 'coincidencias', 'allTags'));
    }

    /**
     * Artículos ES sin pareja PT (más el blog ya vinculado a este ptblog al editar).
     */
    protected function blogsDisponiblesParaPt(?Ptblog $ptblog): Collection
    {
        return Blog::query()
            ->where(function ($q) use ($ptblog) {
                $q->whereDoesntHave('ptblog');
                if ($ptblog && $ptblog->blog_id) {
                    $q->orWhere('id', $ptblog->blog_id);
                }
            })
            ->orderBy('nombre')
            ->get();
    }

    public function index()
    {
        $blogs = Ptblog::query()->with(['tags', 'blog'])->get();

        return view('blogs.pt.blogs.index', compact('blogs'));
    }

    public function create()
    {
        $blog = new Ptblog();
        $tags = Ptag::query()->pluck('nombre', 'id');
        $blogsEs = $this->blogsDisponiblesParaPt(null);

        return view('blogs.pt.blogs.create', compact('blog', 'tags', 'blogsEs'));
    }

    public function store(Request $request)
    {
        if (! $request->filled('blog_id')) {
            $request->merge(['blog_id' => null]);
        }

        $request->validate([
            'nombre' => 'required|unique:ptblogs,nombre',
            'descripcion' => 'required',
            'cuerpo' => 'required',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'keywords' => 'nullable|string',
            'slug' => 'required|string|unique:ptblogs,slug',
            'tags' => 'nullable|array',
            'published_at' => 'nullable|date',
            'blog_id' => [
                'nullable',
                'exists:blogs,id',
                Rule::unique('ptblogs', 'blog_id'),
            ],
        ]);

        $blog = new Ptblog();
        $blog->nombre = $request->get('nombre');
        $blog->descripcion = $request->get('descripcion');
        $blog->cuerpo = $request->get('cuerpo');
        $blog->keywords = $request->get('keywords');
        $blog->slug = $request->get('slug');
        $blog->blog_id = $request->input('blog_id') ?: null;
        $blog->published_at = $request->filled('published_at') ? $request->get('published_at') : now();

        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('img/blog'), $filename);
            $blog->img = '/img/blog/' . $filename;
        }

        $blog->save();
        $blog->tags()->sync($request->get('tags', []));

        return redirect()->route('ptblogs.index')->with('success', 'Artigo em português criado com sucesso.');
    }

    public function edit($id)
    {
        $blog = Ptblog::with(['tags', 'blog'])->findOrFail($id);
        $tags = Ptag::query()->pluck('nombre', 'id');
        $blogsEs = $this->blogsDisponiblesParaPt($blog);

        return view('blogs.pt.blogs.edit', compact('blog', 'tags', 'blogsEs'));
    }

    public function update(Request $request, $id)
    {
        if (! $request->filled('blog_id')) {
            $request->merge(['blog_id' => null]);
        }

        $request->validate([
            'nombre' => 'required|unique:ptblogs,nombre,' . $id,
            'descripcion' => 'required',
            'cuerpo' => 'required',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'keywords' => 'nullable|string',
            'slug' => 'required|string|unique:ptblogs,slug,' . $id,
            'tags' => 'nullable|array',
            'published_at' => 'nullable|date',
            'blog_id' => [
                'nullable',
                'exists:blogs,id',
                Rule::unique('ptblogs', 'blog_id')->ignore($id),
            ],
        ]);

        $blog = Ptblog::findOrFail($id);
        $blog->nombre = $request->get('nombre');
        $blog->descripcion = $request->get('descripcion');
        $blog->cuerpo = $request->get('cuerpo');
        $blog->keywords = $request->get('keywords');
        $blog->slug = $request->get('slug');
        $blog->blog_id = $request->input('blog_id') ?: null;
        if ($request->filled('published_at')) {
            $blog->published_at = $request->get('published_at');
        }

        if ($request->hasFile('img')) {
            $image = $request->file('img');
            $filename = $image->getClientOriginalName();
            $image->move(public_path('img/blog'), $filename);
            $blog->img = '/img/blog/' . $filename;
        }

        $blog->save();
        $blog->tags()->sync($request->get('tags', []));

        return redirect()->route('ptblogs.index')->with('success', 'Artigo atualizado com sucesso.');
    }

    public function destroy($id)
    {
        $blog = Ptblog::query()->findOrFail($id);
        $blog->tags()->detach();
        if ($blog->img && file_exists(public_path($blog->img))) {
            unlink(public_path($blog->img));
        }
        $blog->delete();

        return redirect()->route('ptblogs.index')->with('success', 'Artigo removido com sucesso!');
    }
}
