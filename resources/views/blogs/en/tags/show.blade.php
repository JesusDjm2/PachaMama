@extends('layouts.appen')
@section('titulo', $tag->nombre)
@section('metas')
<meta name="description" content="{{$tag->nombre}}">
<meta name="keywords" content="{{ $tag->nombre}}"/>
<link rel="canonical" href="{{ request()->fullUrl() }}">
<link rel="image_src" content="https://pachamamaspirit.com/img/panoramico/los-mejores-destinos-para-peru.webp">

<meta name="og:image" content="https://pachamamaspirit.com/img/panoramico/los-mejores-destinos-para-peru.webp"/>
<meta name="og:secureImage" content="https://pachamamaspirit.com/img/panoramico/los-mejores-destinos-para-peru.webp"/>

<meta property="og:title" content="{{ $tag->nombre }}"/>
<meta property="og:description" content="{{ $tag->nombre}}"/>
<meta property="og:url" content="{{ request()->fullUrl() }}"/>
<meta name="twitter:card" content="summary"/>
<meta name="robots" content="index,follow" />
@endsection
@section('content')
    <div class="temasBlogs">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-12">
                    <h1 class="h1web">#{{ $tag->nombre }}</h1>
                    <p class="text-center" style="color: #fff">
                        Blogs related to {{ $tag->nombre }}: {{ $coincidencias }} articles found
                    </p>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="details">
                        <div class="location">
                            <p><a href="{{ route('index') }}">Home</a> / <a href="{{ route('enlistado') }}">Blog</a>
                                / <a>#{{ $tag->nombre }}</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Search Bar -->
            <div class="row mb-4">
                <div class="col-lg-12">
                    <div class="search-container">
                        <div class="input-group">
                            <input type="text" id="blogSearch" class="form-control" placeholder="Search by title or description...">
                            <div class="input-group-append">
                                <span class="input-group-text">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <circle cx="11" cy="11" r="8"></circle>
                                        <path d="m21 21-4.35-4.35"></path>
                                    </svg>
                                </span>
                            </div>
                        </div>
                        <small class="text-muted mt-1 d-block">Type to search in real-time</small>
                    </div>
                </div>
            </div>
            
            <div class="row">
                <!-- Sidebar Column -->
                <div class="col-lg-3 col-12 sidebar-col">
                    <div class="sticky-sidebar">
                        <div class="sidebar-header d-flex align-items-center justify-content-between">
                            <h3 class="mb-0">All tags</h3>
                            <button class="sidebar-toggle d-lg-none" id="sidebarToggle"
                                aria-expanded="false" aria-label="Show or hide tags">
                                <i class="fas fa-chevron-down"></i>
                            </button>
                        </div>
                        <div class="linea2-blogs mt-2"></div>
                        <div class="tags-list" id="tagsList">
                            @foreach ($allTags as $sidebarTag)
                                <div class="tag-item {{ $sidebarTag->id === $tag->id ? 'active' : '' }}">
                                    <a href="{{ route('entag', $sidebarTag->slug) }}" class="tag-link">
                                        <i class="fas fa-tag fa-xs"></i>
                                        <span class="tag-name">{{ $sidebarTag->nombre }}</span>
                                        <span class="badge badge-count">{{ $sidebarTag->enblogs->count() }}</span>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                
                <!-- Blog Cards Column -->
                <div class="col-lg-9">
                    <h2 class="mb-4 w-100">Blogs tagged with "{{ $tag->nombre }}"</h2>
                    <div id="blogContainer" class="row">
                        @foreach ($tag->enblogs as $blog)
                            <div class="blog-item col-lg-4 col-md-6 mb-4" data-title="{{ strtolower($blog->nombre) }}" data-description="{{ strtolower($blog->descripcion) }}">
                                <div class="card card-new">
                                    <a href="{{ route('enblog', $blog->slug) }}">
                                        <img class="card-img-top" src="{{ $blog->img }}" alt="{{ $blog->nombre }}" loading="lazy">
                                    </a>
                                    <div class="card-body text-center d-flex flex-column">
                                        <h5 class="card-title blog-title">{{ $blog->nombre }}</h5>
                                        <p class="text-card flex-grow-1 blog-description mb-2">{{ $blog->descripcion }}</p>
                                        <div class="tags mb-1">
                                            @foreach ($blog->entags as $blogTag)
                                                <a href="{{ route('entag', $blogTag->slug) }}">#{{ $blogTag->nombre }}</a>
                                            @endforeach
                                        </div>
                                        <a href="{{ route('enblog', $blog->slug) }}" class="btn-blog-card mt-auto">
                                            <span class="btn-text">Read more</span>
                                            <i class="fas fa-arrow-right btn-icon"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    @if ($tag->enblogs->isEmpty())
                        <div class="text-center py-5">
                            <p class="text-muted">No blogs found with this tag.</p>
                            <a href="{{ route('enlistado') }}" class="btn btn-pm-primary">View all blogs</a>
                        </div>
                    @endif
                    <div id="noResults" class="text-center py-5" style="display: none;">
                        <p class="text-muted">No blogs found matching your search.</p>
                        <button class="btn btn-outline-secondary" onclick="clearSearch()">Clear search</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <style>
        html,
        body {
            overflow-x: hidden;
        }

        .search-container {
            width: 100%;
        }

        .search-container .input-group {
            width: 100%;
        }

        /* ── Sidebar ── */
        .sticky-sidebar {
            position: sticky;
            top: 20px;
            background: #f8f9fa;
            border-radius: 10px;
            padding: 20px;
            border: 1px solid #dee2e6;
        }

        .sidebar-toggle {
            background: none;
            border: 1px solid #dee2e6;
            border-radius: 6px;
            padding: 4px 10px;
            color: #1a2e45;
            cursor: pointer;
            transition: background 0.2s ease, border-color 0.2s ease;
            line-height: 1;
        }

        .sidebar-toggle:hover {
            background: #e9ecef;
            border-color: #adb5bd;
        }

        .sidebar-toggle i {
            transition: transform 0.3s ease;
            font-size: 0.8rem;
        }

        .sidebar-toggle[aria-expanded="true"] i {
            transform: rotate(180deg);
        }

        /* ── Tag list – desktop ── */
        .tags-list {
            margin-top: 10px;
        }

        .tag-item {
            border-radius: 6px;
            transition: background-color 0.25s ease;
        }

        .tag-item + .tag-item {
            margin-top: 4px;
        }

        .tag-item:hover {
            background-color: #e9ecef;
        }

        .tag-item.active {
            background-color: #2aa8a8;
        }

        .tag-item.active .tag-link {
            color: #fff;
        }

        .tag-link {
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 8px 12px;
            color: #1a2e45;
            text-decoration: none;
            font-size: 0.9rem;
        }

        .tag-link .tag-name {
            flex: 1;
            min-width: 0;
            overflow: hidden;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .badge-count {
            flex-shrink: 0;
            background-color: #dee2e6;
            color: #495057;
            font-size: 0.75rem;
            padding: 2px 7px;
            border-radius: 50px;
        }

        .tag-item.active .badge-count {
            background-color: rgba(255,255,255,0.3);
            color: #fff;
        }

        .tag-link:hover {
            color: #2aa8a8;
            text-decoration: none;
        }

        .tag-item.active .tag-link:hover {
            color: #fff;
        }

        /* ── Misc ── */
        .highlight {
            background-color: #fff3cd;
            padding: 2px 4px;
            border-radius: 3px;
            font-weight: bold;
        }

        .blog-item {
            transition: all 0.3s ease;
        }

        .blog-item:hover {
            transform: translateY(-2px);
        }

        /* ── CTA button ── */
        .btn-blog-card {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            padding: 12px 24px;
            background: linear-gradient(135deg, #2aa8a8 0%, #1a2e45 100%);
            color: white;
            border: none;
            border-radius: 50px;
            font-weight: 500;
            font-size: 0.9rem;
            text-decoration: none;
            position: relative;
            overflow: hidden;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            box-shadow: 0 4px 15px rgba(42, 168, 168, 0.3);
            min-width: 140px;
        }

        .btn-blog-card:hover {
            transform: translateY(-3px) scale(1.02);
            box-shadow: 0 8px 25px rgba(42, 168, 168, 0.4);
            background: linear-gradient(135deg, #1a2e45 0%, #2aa8a8 100%);
            color: white;
        }

        .btn-blog-card:active {
            transform: translateY(-1px) scale(0.98);
            box-shadow: 0 4px 15px rgba(42, 168, 168, 0.3);
        }

        .btn-text {
            margin-right: 8px;
            transition: transform 0.3s ease;
        }

        .btn-icon {
            transition: transform 0.3s ease;
            font-size: 0.8rem;
        }

        .btn-blog-card:hover .btn-icon {
            transform: translateX(3px);
        }

        /* ── Responsive: tablet ≤ 991px ── */
        @media (max-width: 991.98px) {
            .sticky-sidebar {
                position: relative;
                top: 0;
                margin-bottom: 24px;
            }

            .sidebar-col {
                order: 2;
            }

            .col-lg-9 {
                order: 1;
            }

            .tags-list {
                overflow: hidden;
                max-height: 0;
                transition: max-height 0.35s ease;
                margin-top: 0;
            }

            .tags-list.is-open {
                max-height: 1200px;
                margin-top: 10px;
            }
        }

        /* ── Responsive: móvil ≤ 767px – chips ── */
        @media (max-width: 767.98px) {
            .sticky-sidebar {
                padding: 14px 16px;
                border-radius: 10px;
            }

            .tags-list.is-open {
                display: flex;
                flex-wrap: wrap;
                gap: 8px;
                padding-top: 4px;
            }

            .tag-item {
                flex: 0 0 auto;
                margin-top: 0 !important;
            }

            .tag-link {
                padding: 6px 12px;
                font-size: 0.82rem;
                border-radius: 50px;
                border: 1px solid #dee2e6;
                background: #fff;
                gap: 6px;
                white-space: nowrap;
            }

            .tag-item.active .tag-link {
                border-color: #2aa8a8;
                background: #2aa8a8;
            }

            .badge-count {
                background-color: rgba(0,0,0,0.12);
                color: inherit;
                padding: 1px 6px;
            }

            .tag-item.active .badge-count {
                background-color: rgba(255,255,255,0.35);
            }
        }

        /* ── Responsive: móvil pequeño ≤ 575px ── */
        @media (max-width: 575.98px) {
            .search-container .input-group {
                flex-direction: row;
                flex-wrap: nowrap;
            }

            .search-container .input-group-append {
                flex-shrink: 0;
            }

            .btn-blog-card {
                padding: 8px 16px;
                font-size: 0.8rem;
                min-width: 100px;
            }
        }
    </style>
    
    <script>
    document.addEventListener('DOMContentLoaded', function() {

        // ── Sidebar toggle (tablet / mobile) ──
        const sidebarToggle = document.getElementById('sidebarToggle');
        const tagsList = document.getElementById('tagsList');

        if (sidebarToggle && tagsList) {
            sidebarToggle.addEventListener('click', function() {
                const isOpen = tagsList.classList.toggle('is-open');
                this.setAttribute('aria-expanded', isOpen);
            });
        }

        // ── Search ──
        const searchInput = document.getElementById('blogSearch');
        const blogItems = document.querySelectorAll('.blog-item');
        const noResults = document.getElementById('noResults');
        const blogContainer = document.getElementById('blogContainer');
        
        searchInput.addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            let visibleCount = 0;
            
            blogItems.forEach(item => {
                const title = item.dataset.title.toLowerCase();
                const description = item.dataset.description.toLowerCase();
                
                if (title.includes(searchTerm) || description.includes(searchTerm)) {
                    item.style.display = '';
                    visibleCount++;
                } else {
                    item.style.display = 'none';
                }
            });
            
            noResults.style.display = visibleCount === 0 && searchTerm !== '' ? 'block' : 'none';
            blogContainer.style.display = visibleCount === 0 && searchTerm !== '' ? 'none' : 'flex';
        });
        
        window.clearSearch = function() {
            searchInput.value = '';
            searchInput.dispatchEvent(new Event('input'));
        };
    });
    </script>
@endsection
