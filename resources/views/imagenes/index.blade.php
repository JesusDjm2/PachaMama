@extends('layouts.admin')
@section('titulo', 'Galería de Imágenes')

@section('contenido')
<div class="pm-page-header">
    <div>
        <h1>Galería de Imágenes</h1>
        <small>Imágenes subidas al servidor — haz clic en cualquier foto o en su botón para ampliarla en popup o copiar su enlace directo</small>
    </div>
    <a href="{{ route('imagenes.create') }}" class="btn btn-pm-primary btn-sm">
        <i class="fas fa-cloud-upload-alt mr-1"></i> Subir Imágenes
    </a>
</div>

@if(session('status'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="fas fa-check-circle mr-1"></i> {{ session('status') }}
        <button type="button" class="close" data-dismiss="alert"><span>&times;</span></button>
    </div>
@endif

<div class="card pm-card">
    <div class="card-header pm-card-header">
        <div class="d-flex align-items-center flex-wrap" style="gap:0.75rem;">
            <h6>Listado de imágenes</h6>
            <span class="badge badge-pill badge-light border text-muted" style="font-size:0.75rem; font-weight:600;">
                <span id="imgTotalCount">{{ count($imagenes) }}</span> fotos
            </span>
        </div>
        <div class="pm-search">
            <input type="text" id="search" class="form-control" placeholder="Buscar por nombre de foto...">
        </div>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table id="tabladatos" class="table pm-table table-hover mb-0">
                <thead>
                    <tr>
                        <th style="width: 50px;">#</th>
                        <th style="width: 120px;">Foto</th>
                        <th>Nombre del archivo</th>
                        <th style="width: 170px;">Enlace directo</th>
                        <th class="text-center" style="width: 130px;">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($imagenes as $imagen)
                    @php
                        $imgUrl = asset("img/galeria/$imagen->img");
                    @endphp
                    <tr>
                        <td style="color:#9ca3af; font-size:0.78rem;">{{ $imagen->id }}</td>
                        <td>
                            <div class="pm-img-thumb-container" 
                                 onclick="abrirModalImagen('{{ $imgUrl }}', '{{ addslashes($imagen->img) }}')" 
                                 title="Clic para ampliar imagen en popup">
                                <img src="/img/galeria/{{ $imagen->img }}" width="90" height="60"
                                     class="pm-img-thumb" alt="{{ $imagen->img }}" loading="lazy">
                                <div class="pm-img-overlay">
                                    <i class="fas fa-search-plus"></i>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="font-weight-600 text-truncate" style="max-width:320px; color:#1a2e45;" title="{{ $imagen->img }}">
                                {{ $imagen->img }}
                            </div>
                            <small class="text-muted d-block">Subido al directorio /img/galeria/</small>
                        </td>
                        <td>
                            <button type="button" class="btn btn-sm pm-btn-copy"
                                    onclick="copiarEnlace('{{ $imgUrl }}', this)"
                                    title="Copiar enlace directo al portapapeles">
                                <i class="far fa-copy"></i>
                                <span>Copiar enlace</span>
                            </button>
                        </td>
                        <td class="text-center" style="white-space:nowrap;">
                            <form action="{{ route('imagenes.destroy', $imagen->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="btn btn-action btn-action-view" 
                                        onclick="abrirModalImagen('{{ $imgUrl }}', '{{ addslashes($imagen->img) }}')" 
                                        title="Ver foto en popup">
                                    <i class="fas fa-eye"></i>
                                </button>
                                <a href="/imagenes/{{ $imagen->id }}/edit" class="btn btn-action btn-action-edit" title="Editar">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <button type="submit" class="btn btn-action btn-action-delete" title="Eliminar"
                                    onclick="return confirm('¿Eliminar esta imagen de la galería?');">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center py-4 text-muted">
                            <i class="far fa-image fa-2x mb-2 d-block" style="opacity:0.4;"></i>
                            No hay imágenes registradas en la galería.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- Modal Popup para previsualizar imagen dentro de la misma vista -->
<div class="modal fade" id="modalVerImagen" tabindex="-1" role="dialog" aria-labelledby="modalVerImagenTitulo" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content pm-modal-content">
            <div class="modal-header pm-modal-header d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center text-truncate mr-2" style="max-width:85%;">
                    <i class="far fa-image mr-2" style="font-size:1.15rem; color:#2aa8a8;"></i>
                    <h6 class="modal-title font-weight-bold text-truncate" id="modalVerImagenTitulo" style="color:#1a2e45; margin:0; font-size:0.95rem;">
                        Vista previa de imagen
                    </h6>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Cerrar" style="font-size:1.5rem; line-height:1; padding:0.5rem; margin:-0.5rem -0.5rem -0.5rem auto; color:#6b7280; outline:none;">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body pm-modal-body p-0 text-center" style="background:#0b1320; position:relative; min-height:260px; display:flex; align-items:center; justify-content:center;">
                <div id="modalImgSpinner" class="spinner-border text-light" role="status" style="display:none; position:absolute; z-index:2;">
                    <span class="sr-only">Cargando...</span>
                </div>
                <img id="modalImgSrc" src="" alt="Vista previa" class="img-fluid"
                     style="max-height:75vh; max-width:100%; object-fit:contain; display:block; margin:auto;">
            </div>
            <div class="modal-footer pm-modal-footer d-flex justify-content-between align-items-center flex-wrap" style="gap:0.5rem;">
                <div class="text-truncate mr-2" style="max-width:350px;">
                    <span id="modalImgFilename" class="text-muted font-weight-bold text-truncate d-block" style="font-size:0.8rem; font-family:monospace;"></span>
                </div>
                <div class="d-flex align-items-center" style="gap:0.5rem;">
                    <button type="button" id="modalBtnCopy" class="btn btn-sm btn-outline-teal" onclick="copiarEnlaceDesdeModal(this)">
                        <i class="far fa-copy mr-1"></i> <span>Copiar enlace</span>
                    </button>
                    <a id="modalBtnDirect" href="" target="_blank" class="btn btn-sm btn-light border text-secondary" title="Abrir imagen en pestaña nueva">
                        <i class="fas fa-external-link-alt mr-1"></i> Abrir en pestaña
                    </a>
                    <button type="button" class="btn btn-sm btn-secondary" data-dismiss="modal">
                        Cerrar
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

@push('admin_scripts')
<script>
// Función para copiar enlace con retroalimentación visual
function copiarEnlace(url, btn) {
    if (!url) return;

    function exito() {
        var span = btn.querySelector('span');
        var icon = btn.querySelector('i');
        var origText = span ? span.textContent : '';
        var origClass = icon ? icon.className : '';

        btn.classList.add('copied');
        if (span) span.textContent = '¡Copiado!';
        if (icon) icon.className = 'fas fa-check mr-1';

        setTimeout(function() {
            btn.classList.remove('copied');
            if (span) span.textContent = origText || 'Copiar enlace';
            if (icon) icon.className = origClass || 'far fa-copy';
        }, 1800);
    }

    if (navigator.clipboard && window.isSecureContext) {
        navigator.clipboard.writeText(url).then(exito).catch(function() {
            copiarFallback(url);
            exito();
        });
    } else {
        copiarFallback(url);
        exito();
    }
}

// Fallback para contextos no HTTPS o navegadores antiguos
function copiarFallback(texto) {
    var ta = document.createElement('textarea');
    ta.value = texto;
    ta.style.position = 'fixed';
    ta.style.top = '-9999px';
    ta.style.left = '-9999px';
    document.body.appendChild(ta);
    ta.focus();
    ta.select();
    try {
        document.execCommand('copy');
    } catch (err) {
        console.error('Error al copiar:', err);
    }
    document.body.removeChild(ta);
}

// Variables para el modal
var modalImgCurrentUrl = '';

// Abrir imagen en modal popup
function abrirModalImagen(url, nombre) {
    modalImgCurrentUrl = url;
    var modal = $('#modalVerImagen');
    var modalImg = document.getElementById('modalImgSrc');
    var modalTitle = document.getElementById('modalVerImagenTitulo');
    var modalFilename = document.getElementById('modalImgFilename');
    var modalDirect = document.getElementById('modalBtnDirect');
    var spinner = document.getElementById('modalImgSpinner');

    if (modalTitle) modalTitle.textContent = nombre || 'Vista previa de imagen';
    if (modalFilename) modalFilename.textContent = nombre || url;
    if (modalDirect) modalDirect.href = url;

    // Resetear imagen y mostrar spinner
    if (modalImg) {
        modalImg.style.opacity = '0';
        if (spinner) spinner.style.display = 'block';

        modalImg.onload = function() {
            if (spinner) spinner.style.display = 'none';
            modalImg.style.opacity = '1';
        };
        modalImg.onerror = function() {
            if (spinner) spinner.style.display = 'none';
            modalImg.style.opacity = '1';
        };
        modalImg.src = url;
    }

    modal.modal('show');
}

// Copiar enlace desde el modal
function copiarEnlaceDesdeModal(btn) {
    if (modalImgCurrentUrl) {
        copiarEnlace(modalImgCurrentUrl, btn);
    }
}

// Búsqueda en tiempo real por nombre de foto
(function() {
    var searchInput = document.getElementById('search');
    var table = document.getElementById('tabladatos');
    if (!searchInput || !table) return;

    var tbody = table.querySelector('tbody');
    var rows = Array.from(tbody.querySelectorAll('tr'));
    var countEl = document.getElementById('imgTotalCount');

    function normalizar(str) {
        return (str || '').toLowerCase().normalize('NFD').replace(/[̀-ͯ]/g, '');
    }

    searchInput.addEventListener('input', function() {
        var query = normalizar(this.value.trim());
        var visibleCount = 0;

        rows.forEach(function(row) {
            if (row.cells.length < 3) return; // fila vacía
            var filename = normalizar(row.cells[2].textContent);
            var id = normalizar(row.cells[0].textContent);
            var match = query === '' || filename.includes(query) || id.includes(query);

            row.style.display = match ? '' : 'none';
            if (match) visibleCount++;
        });

        if (countEl) countEl.textContent = visibleCount;
    });
})();
</script>
@endpush
@endsection
