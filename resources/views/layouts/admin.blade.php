<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="robots" content="nofollow">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <title>@yield('titulo', 'Admin') — Pacha Mama Spirit</title>
    <link rel="shortcut icon" href="{{ asset('img/icono-home.png') }}">
    <link href="{{ asset('admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('admin/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin-custom.css') }}" rel="stylesheet">
</head>

<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion pm-sidebar" id="accordionSidebar">
            <!-- Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center py-3" href="{{ route('dashboard') }}">
                <img src="{{ asset('img/Pacha-Mama-Spirit-Blanco.png') }}" class="img-fluid" style="max-height: 44px; object-fit: contain;" alt="Pacha Mama Spirit">
            </a>

            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>

            <hr class="sidebar-divider">

            <!-- Heading: TOURS -->
            <div class="sidebar-heading">Tours & Destinos</div>

            @php
                $isToursEs = request()->routeIs('tours.*', 'categoria.*');
                $isToursEn = request()->routeIs('toursen.*', 'category.*');
                $isToursPt = request()->routeIs('tourspt.*', 'ptcategoria.*');
                $isBlogsEs = request()->routeIs('blogs.*', 'tags.*');
                $isBlogsEn = request()->routeIs('enblogs.*', 'entags.*');
                $isBlogsPt = request()->routeIs('ptblogs.*', 'pttags.*');
            @endphp

            <!-- Tours Español -->
            <li class="nav-item {{ $isToursEs ? 'active' : '' }}">
                <a class="nav-link {{ $isToursEs ? '' : 'collapsed' }}" href="#" data-toggle="collapse" data-target="#collapseToursEs"
                    aria-expanded="{{ $isToursEs ? 'true' : 'false' }}" aria-controls="collapseToursEs">
                    <i class="fas fa-fw fa-map-marked-alt text-success"></i>
                    <span>Tours <span class="badge badge-success ml-1 px-1 py-0" style="font-size:0.65rem;">ES</span></span>
                </a>
                <div id="collapseToursEs" class="collapse {{ $isToursEs ? 'show' : '' }}" aria-labelledby="headingToursEs" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item {{ request()->routeIs('tours.index') ? 'active font-weight-bold' : '' }}" href="{{ route('tours.index') }}">
                            <i class="fas fa-list fa-xs mr-1 text-muted"></i> Lista Tours
                        </a>
                        <a class="collapse-item {{ request()->routeIs('categoria.*') ? 'active font-weight-bold' : '' }}" href="{{ route('categoria.index') }}">
                            <i class="fas fa-tags fa-xs mr-1 text-muted"></i> Categorías
                        </a>
                    </div>
                </div>
            </li>

            <!-- Tours English -->
            <li class="nav-item {{ $isToursEn ? 'active' : '' }}">
                <a class="nav-link {{ $isToursEn ? '' : 'collapsed' }}" href="#" data-toggle="collapse" data-target="#collapseToursEn"
                    aria-expanded="{{ $isToursEn ? 'true' : 'false' }}" aria-controls="collapseToursEn">
                    <i class="fas fa-fw fa-globe text-primary"></i>
                    <span>Tours <span class="badge badge-primary ml-1 px-1 py-0" style="font-size:0.65rem;">EN</span></span>
                </a>
                <div id="collapseToursEn" class="collapse {{ $isToursEn ? 'show' : '' }}" aria-labelledby="headingToursEn" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item {{ request()->routeIs('toursen.index') ? 'active font-weight-bold' : '' }}" href="{{ route('toursen.index') }}">
                            <i class="fas fa-list fa-xs mr-1 text-muted"></i> Tours List
                        </a>
                        <a class="collapse-item {{ request()->routeIs('category.*') ? 'active font-weight-bold' : '' }}" href="{{ route('category.index') }}">
                            <i class="fas fa-tags fa-xs mr-1 text-muted"></i> Categories
                        </a>
                    </div>
                </div>
            </li>

            <!-- Tours Português -->
            <li class="nav-item {{ $isToursPt ? 'active' : '' }}">
                <a class="nav-link {{ $isToursPt ? '' : 'collapsed' }}" href="#" data-toggle="collapse" data-target="#collapseToursPt"
                    aria-expanded="{{ $isToursPt ? 'true' : 'false' }}" aria-controls="collapseToursPt">
                    <i class="fas fa-fw fa-globe-americas text-info"></i>
                    <span>Tours <span class="badge badge-info ml-1 px-1 py-0" style="font-size:0.65rem;">PT</span></span>
                </a>
                <div id="collapseToursPt" class="collapse {{ $isToursPt ? 'show' : '' }}" aria-labelledby="headingToursPt" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item {{ request()->routeIs('tourspt.index') ? 'active font-weight-bold' : '' }}" href="{{ route('tourspt.index') }}">
                            <i class="fas fa-list fa-xs mr-1 text-muted"></i> Lista Tours
                        </a>
                        <a class="collapse-item {{ request()->routeIs('ptcategoria.*') ? 'active font-weight-bold' : '' }}" href="{{ route('ptcategoria.index') }}">
                            <i class="fas fa-tags fa-xs mr-1 text-muted"></i> Categorias
                        </a>
                    </div>
                </div>
            </li>

            <hr class="sidebar-divider">

            <!-- Heading: BLOGS -->
            <div class="sidebar-heading">Blogs & Artículos</div>

            <!-- Blogs Español -->
            <li class="nav-item {{ $isBlogsEs ? 'active' : '' }}">
                <a class="nav-link {{ $isBlogsEs ? '' : 'collapsed' }}" href="#" data-toggle="collapse" data-target="#collapseBlogsEs"
                    aria-expanded="{{ $isBlogsEs ? 'true' : 'false' }}" aria-controls="collapseBlogsEs">
                    <i class="fas fa-fw fa-newspaper text-success"></i>
                    <span>Blogs <span class="badge badge-success ml-1 px-1 py-0" style="font-size:0.65rem;">ES</span></span>
                </a>
                <div id="collapseBlogsEs" class="collapse {{ $isBlogsEs ? 'show' : '' }}" aria-labelledby="headingBlogsEs" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item {{ request()->routeIs('blogs.index') ? 'active font-weight-bold' : '' }}" href="{{ route('blogs.index') }}">
                            <i class="fas fa-file-alt fa-xs mr-1 text-muted"></i> Artículos
                        </a>
                        <a class="collapse-item {{ request()->routeIs('tags.*') ? 'active font-weight-bold' : '' }}" href="{{ route('tags.index') }}">
                            <i class="fas fa-hashtag fa-xs mr-1 text-muted"></i> Tags
                        </a>
                    </div>
                </div>
            </li>

            <!-- Blogs English -->
            <li class="nav-item {{ $isBlogsEn ? 'active' : '' }}">
                <a class="nav-link {{ $isBlogsEn ? '' : 'collapsed' }}" href="#" data-toggle="collapse" data-target="#collapseBlogsEn"
                    aria-expanded="{{ $isBlogsEn ? 'true' : 'false' }}" aria-controls="collapseBlogsEn">
                    <i class="fas fa-fw fa-newspaper text-primary"></i>
                    <span>Blogs <span class="badge badge-primary ml-1 px-1 py-0" style="font-size:0.65rem;">EN</span></span>
                </a>
                <div id="collapseBlogsEn" class="collapse {{ $isBlogsEn ? 'show' : '' }}" aria-labelledby="headingBlogsEn" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item {{ request()->routeIs('enblogs.index') ? 'active font-weight-bold' : '' }}" href="{{ route('enblogs.index') }}">
                            <i class="fas fa-file-alt fa-xs mr-1 text-muted"></i> Articles
                        </a>
                        <a class="collapse-item {{ request()->routeIs('entags.*') ? 'active font-weight-bold' : '' }}" href="{{ route('entags.index') }}">
                            <i class="fas fa-hashtag fa-xs mr-1 text-muted"></i> Tags
                        </a>
                    </div>
                </div>
            </li>

            <!-- Blogs Português -->
            <li class="nav-item {{ $isBlogsPt ? 'active' : '' }}">
                <a class="nav-link {{ $isBlogsPt ? '' : 'collapsed' }}" href="#" data-toggle="collapse" data-target="#collapseBlogsPt"
                    aria-expanded="{{ $isBlogsPt ? 'true' : 'false' }}" aria-controls="collapseBlogsPt">
                    <i class="fas fa-fw fa-newspaper text-info"></i>
                    <span>Blogs <span class="badge badge-info ml-1 px-1 py-0" style="font-size:0.65rem;">PT</span></span>
                </a>
                <div id="collapseBlogsPt" class="collapse {{ $isBlogsPt ? 'show' : '' }}" aria-labelledby="headingBlogsPt" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item {{ request()->routeIs('ptblogs.index') ? 'active font-weight-bold' : '' }}" href="{{ route('ptblogs.index') }}">
                            <i class="fas fa-file-alt fa-xs mr-1 text-muted"></i> Artigos
                        </a>
                        <a class="collapse-item {{ request()->routeIs('pttags.*') ? 'active font-weight-bold' : '' }}" href="{{ route('pttags.index') }}">
                            <i class="fas fa-hashtag fa-xs mr-1 text-muted"></i> Tags
                        </a>
                    </div>
                </div>
            </li>

            <hr class="sidebar-divider">

            <!-- Heading: SISTEMA -->
            <div class="sidebar-heading">Multimedia & Sistema</div>

            <!-- Imágenes -->
            <li class="nav-item {{ request()->routeIs('imagenes.*') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('imagenes.index') }}">
                    <i class="fas fa-fw fa-images"></i>
                    <span>Galería de Imágenes</span>
                </a>
            </li>

            <!-- Usuarios -->
            <li class="nav-item {{ request()->routeIs('users.*', 'registrar') ? 'active' : '' }}">
                <a class="nav-link" href="{{ route('users.index') }}">
                    <i class="fas fa-fw fa-users-cog"></i>
                    <span>Usuarios</span>
                </a>
            </li>

            <hr class="sidebar-divider d-none d-md-block">

            <!-- Toggler -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow-sm px-3">
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Breadcrumb / Current View Title -->
                    <div class="d-none d-md-flex align-items-center">
                        <span class="badge badge-light border text-muted px-2 py-1 mr-2" style="font-size:0.75rem; font-weight:600; letter-spacing:0.04em;">PANEL ADMIN</span>
                        <h6 class="mb-0 font-weight-bold text-gray-800" style="font-size:0.95rem;">@yield('titulo')</h6>
                    </div>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto align-items-center">
                        <!-- Live Site Links Dropdown -->
                        <li class="nav-item dropdown no-arrow mr-2">
                            <a class="btn btn-sm btn-outline-info dropdown-toggle font-weight-bold" href="#" id="viewSiteDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border-radius:20px; font-size:0.78rem; padding:5px 14px;">
                                <i class="fas fa-external-link-alt mr-1"></i> Ver Sitio Web
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="viewSiteDropdown" style="min-width: 220px;">
                                <div class="dropdown-header font-weight-bold text-uppercase text-xs">Versiones Públicas</div>
                                <a class="dropdown-item d-flex align-items-center py-2" href="{{ route('inicio') }}" target="_blank">
                                    <span class="badge badge-success mr-2" style="font-size:0.7rem;">ES</span>
                                    <div>
                                        <div class="font-weight-bold" style="font-size:0.85rem;">Español</div>
                                        <small class="text-muted">/inicio</small>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center py-2" href="{{ route('index') }}" target="_blank">
                                    <span class="badge badge-primary mr-2" style="font-size:0.7rem;">EN</span>
                                    <div>
                                        <div class="font-weight-bold" style="font-size:0.85rem;">English</div>
                                        <small class="text-muted">/</small>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center py-2" href="{{ route('pt.index') }}" target="_blank">
                                    <span class="badge badge-info mr-2" style="font-size:0.7rem;">PT</span>
                                    <div>
                                        <div class="font-weight-bold" style="font-size:0.85rem;">Português</div>
                                        <small class="text-muted">/pt</small>
                                    </div>
                                </a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- User Profile Dropdown -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle d-flex align-items-center py-2" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <div style="width:34px; height:34px; border-radius:50%; background:linear-gradient(135deg,#2aa8a8,#1a2e45);
                                            display:flex; align-items:center; justify-content:center; color:#fff; font-weight:700;
                                            font-size:0.85rem; margin-right:8px; box-shadow:0 2px 6px rgba(42,168,168,0.25);">
                                    {{ strtoupper(substr(Auth::user()->name ?? 'A', 0, 1)) }}
                                </div>
                                <span class="mr-2 d-none d-lg-inline text-gray-700 font-weight-bold" style="font-size:0.85rem;">
                                    {{ Auth::user()->name ?? 'Admin' }}
                                </span>
                                <i class="fas fa-chevron-down fa-xs text-gray-400"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <div class="dropdown-header font-weight-bold text-uppercase text-xs">Cuenta Conectada</div>
                                <div class="px-3 py-1 text-muted" style="font-size:0.78rem;">
                                    <i class="fas fa-envelope mr-1 text-gray-400"></i> {{ Auth::user()->email ?? '' }}
                                </div>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('users.index') }}">
                                    <i class="fas fa-users-cog fa-sm fa-fw mr-2 text-gray-400"></i> Administrar Usuarios
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item text-danger" href="#" onclick="event.preventDefault(); confirmarCerrarSesion();">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-danger"></i> Cerrar Sesión
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </nav>

                <!-- Page Content -->
                <div class="container-fluid px-3 px-md-4">
                    @yield('contenido')
                </div>
            </div>

            <!-- Footer -->
            <footer class="sticky-footer bg-white mt-4">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Pacha Mama Spirit &copy; {{ date('Y') }} — Panel de Control | Desarrollado por <a href="https://www.facebook.com/DjmWebMaster" rel="no-follow" target="_blank">DJM2</a></span>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Scripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ckeditor/4.9.2/ckeditor.js"></script>
    <script src="{{ asset('admin/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('admin/js/sb-admin-2.min.js') }}"></script>
    
    <!-- SweetAlert2 Library -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Modal Logout Fallback -->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="logoutModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content pm-modal-content">
                <div class="modal-header pm-modal-header d-flex align-items-center justify-content-between">
                    <div class="d-flex align-items-center">
                        <i class="fas fa-sign-out-alt text-danger mr-2" style="font-size:1.15rem;"></i>
                        <h6 class="modal-title font-weight-bold" id="logoutModalLabel" style="color:#1a2e45; margin:0;">
                            ¿Cerrar sesión?
                        </h6>
                    </div>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Cerrar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body py-4 px-4">
                    <p class="mb-0 text-gray-700">¿Estás seguro de que deseas salir del panel de administración? Se finalizará tu sesión de trabajo de forma segura.</p>
                </div>
                <div class="modal-footer pm-modal-footer d-flex justify-content-end" style="gap:0.5rem;">
                    <button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal">Cancelar</button>
                    <button class="btn btn-danger btn-sm" type="button" onclick="document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt mr-1"></i> Sí, cerrar sesión
                    </button>
                </div>
            </div>
        </div>
    </div>

    <script>
    // 1. Confirmación de Cierre de Sesión con SweetAlert2
    function confirmarCerrarSesion() {
        if (typeof Swal !== 'undefined') {
            Swal.fire({
                title: '¿Cerrar sesión?',
                text: '¿Estás seguro de que deseas salir del panel de administración? Se finalizará tu sesión de trabajo.',
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#e02424',
                cancelButtonColor: '#6b7280',
                confirmButtonText: '<i class="fas fa-sign-out-alt mr-1"></i> Sí, cerrar sesión',
                cancelButtonText: 'Cancelar',
                reverseButtons: true,
                focusCancel: true,
                customClass: {
                    popup: 'pm-swal-popup'
                }
            }).then(function(result) {
                if (result.isConfirmed) {
                    document.getElementById('logout-form').submit();
                }
            });
        } else {
            $('#logoutModal').modal('show');
        }
    }

    // 2. Función global para eliminar por URL (para categorías y llamadas directas)
    function confirmarEliminarUrl(url, title, text) {
        if (typeof Swal !== 'undefined') {
            Swal.fire({
                title: title || '¿Eliminar este registro?',
                text: text || 'Esta acción no se puede deshacer y borrará el elemento permanentemente.',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#e02424',
                cancelButtonColor: '#6b7280',
                confirmButtonText: '<i class="fas fa-trash-alt mr-1"></i> Sí, eliminar',
                cancelButtonText: 'Cancelar',
                reverseButtons: true,
                focusCancel: true,
                customClass: {
                    popup: 'pm-swal-popup'
                }
            }).then(function(result) {
                if (result.isConfirmed) {
                    var form = document.createElement('form');
                    form.method = 'POST';
                    form.action = url;
                    var csrf = document.querySelector('meta[name="csrf-token"]') ? document.querySelector('meta[name="csrf-token"]').content : '{{ csrf_token() }}';
                    form.innerHTML = '<input type="hidden" name="_token" value="' + csrf + '">' +
                                     '<input type="hidden" name="_method" value="DELETE">';
                    document.body.appendChild(form);
                    form.submit();
                }
            });
        } else {
            if (confirm((title || '¿Eliminar?') + '\n' + (text || 'Esta acción no se puede deshacer.'))) {
                var form = document.createElement('form');
                form.method = 'POST';
                form.action = url;
                var csrf = document.querySelector('meta[name="csrf-token"]') ? document.querySelector('meta[name="csrf-token"]').content : '{{ csrf_token() }}';
                form.innerHTML = '<input type="hidden" name="_token" value="' + csrf + '">' +
                                 '<input type="hidden" name="_method" value="DELETE">';
                document.body.appendChild(form);
                form.submit();
            }
        }
    }

    // 3. Interceptor global para todos los botones de eliminación en tablas y vistas
    document.addEventListener('click', function(e) {
        var btn = e.target.closest('.btn-action-delete, [data-confirm-delete]');
        if (!btn) return;

        var form = btn.closest('form');
        if (!form) return;

        // Si ya fue confirmado, permitir el envío normal
        if (form.dataset.confirmed === 'true') return;

        // Detener la acción por defecto y cualquier onclick nativo
        e.preventDefault();
        e.stopImmediatePropagation();

        var title = btn.getAttribute('data-confirm-title') || '¿Eliminar este registro?';
        var text = btn.getAttribute('data-confirm-text') || 'Esta acción no se puede deshacer y borrará el elemento permanentemente.';

        if (typeof Swal !== 'undefined') {
            Swal.fire({
                title: title,
                text: text,
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#e02424',
                cancelButtonColor: '#6b7280',
                confirmButtonText: '<i class="fas fa-trash-alt mr-1"></i> Sí, eliminar',
                cancelButtonText: 'Cancelar',
                reverseButtons: true,
                focusCancel: true,
                customClass: {
                    popup: 'pm-swal-popup'
                }
            }).then(function(result) {
                if (result.isConfirmed) {
                    form.dataset.confirmed = 'true';
                    btn.removeAttribute('onclick');
                    form.submit();
                }
            });
        } else {
            if (confirm(title + '\n' + text)) {
                form.dataset.confirmed = 'true';
                btn.removeAttribute('onclick');
                form.submit();
            }
        }
    }, true); // useCapture: true para adelantarse a cualquier onclick inline

    // 4. Notificaciones automáticas Toast/Alert para respuestas del servidor (Éxito o Error)
    @if(session('status') || session('success'))
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof Swal !== 'undefined') {
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 3500,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer);
                    toast.addEventListener('mouseleave', Swal.resumeTimer);
                }
            });
            Toast.fire({
                icon: 'success',
                title: {!! json_encode(session('status') ?? session('success')) !!}
            });
        }
    });
    @endif

    @if(session('error') || (isset($errors) && $errors->any()))
    document.addEventListener('DOMContentLoaded', function() {
        if (typeof Swal !== 'undefined') {
            Swal.fire({
                icon: 'error',
                title: 'Atención',
                text: {!! json_encode(session('error') ?? ($errors->any() ? $errors->first() : 'Ocurrió un error en la solicitud.')) !!},
                confirmButtonColor: '#2aa8a8',
                confirmButtonText: 'Entendido',
                customClass: {
                    popup: 'pm-swal-popup'
                }
            });
        }
    });
    @endif
    </script>

    @stack('admin_scripts')
</body>

</html>
