<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @php
    use Carbon\Carbon;
    @endphp

    {{-- Páginas estáticas --}}
    @foreach($staticPages as $page)
    <url>
        <loc>{{ $page['url'] }}</loc>
        <lastmod>{{ date('Y-m-d') }}</lastmod>
        <changefreq>{{ $page['changefreq'] }}</changefreq>
        <priority>{{ $page['priority'] }}</priority>
    </url>
    @endforeach

    {{-- Tours Español --}}
    @foreach($tours as $tour)
    <url>
        <loc>{{ route('tours.show', $tour->slug) }}</loc>
        <lastmod>{{ $tour->updated_at->toAtomString() }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.80</priority>
    </url>
    @endforeach

    {{-- Tours Inglés --}}
    @foreach($toursEn as $tour)
    <url>
        <loc>{{ route('toursen.show', $tour->slug) }}</loc>
        <lastmod>{{ $tour->updated_at->toAtomString() }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.80</priority>
    </url>
    @endforeach

    {{-- Blogs Español --}}
    @foreach($blogs as $blog)
    <url>
        <loc>{{ route('blog.show', $blog->slug) }}</loc>
        <lastmod>{{ $blog->updated_at->toAtomString() }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.75</priority>
    </url>
    @endforeach

    {{-- Blogs Inglés --}}
    @foreach($blogsEn as $blog)
    <url>
        <loc>{{ route('enblog', $blog->slug) }}</loc>
        <lastmod>{{ $blog->updated_at->toAtomString() }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.75</priority>
    </url>
    @endforeach

    {{-- Tours Portugués --}}
    @foreach($toursPt as $tour)
    <url>
        <loc>{{ route('pt.tour', $tour->slug) }}</loc>
        <lastmod>{{ $tour->updated_at->toAtomString() }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.80</priority>
    </url>
    @endforeach

    {{-- Blogs Portugués --}}
    @foreach($blogsPt as $blog)
    <url>
        <loc>{{ route('pt.blog', $blog->slug) }}</loc>
        <lastmod>{{ $blog->updated_at->toAtomString() }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.75</priority>
    </url>
    @endforeach

    {{-- Categorías Portugués --}}
    @foreach($categoriesPt as $category)
    <url>
        <loc>{{ route('pt.categoria', $category) }}</loc>
        <lastmod>{{ $category->updated_at->toAtomString() }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.75</priority>
    </url>
    @endforeach

    {{-- Categorías Inglés --}}
    @foreach($categoriesEn as $category)
    <url>
        <loc>{{ route('category.show', $category->link) }}</loc>
        <lastmod>{{ $category->updated_at->toAtomString() }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.75</priority>
    </url>
    @endforeach

    {{-- Categorías Español --}}
    @foreach($categoriesEs as $category)
    <url>
        <loc>{{ url('/categoria/' . $category->link) }}</loc>
        <lastmod>{{ $category->updated_at->toAtomString() }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.75</priority>
    </url>
    @endforeach

    {{-- Destinos Inglés --}}
    @foreach(['cusco-navel-of-the-world', 'lima-city-of-kings', 'arequipa-the-white-city', 'puno-city', 'ica-city', 'pisco-city', 'puerto-maldonado'] as $destination)
    <url>
        <loc>{{ route('destinies-peru.destination', $destination) }}</loc>
        <lastmod>{{ date('Y-m-d') }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.75</priority>
    </url>
    @endforeach

    {{-- Destinos Español --}}
    @foreach(['cusco-ombligo-del-mundo', 'lima-ciudad-de-reyes', 'arequipa-la-ciudad-blanca', 'la-ciudad-de-puno', 'ciudad-de-ica', 'ciudad-de-pisco', 'puerto-maldonado'] as $destination)
    <url>
        <loc>{{ route($destination) }}</loc>
        <lastmod>{{ date('Y-m-d') }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.75</priority>
    </url>
    @endforeach
</urlset>
