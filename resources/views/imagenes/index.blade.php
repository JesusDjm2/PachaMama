@extends('layouts.admin')
@section('titulo', 'Galería de Imágenes')

@section('contenido')
<div class="pm-page-header">
    <div>
        <h1>Galería de Imágenes</h1>
        <small>Imágenes subidas al servidor — haz clic en la URL para copiarla</small>
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
        <h6>Listado de imágenes</h6>
        <small style="color:#9ca3af;">Haz clic en la URL para copiarla al portapapeles</small>
    </div>
    <div class="card-body p-0">
        <div class="table-responsive">
            <table id="tabladatos" class="table pm-table table-hover mb-0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Vista previa</th>
                        <th>URL (clic para copiar)</th>
                        <th class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($imagenes as $imagen)
                    <tr>
                        <td style="color:#9ca3af; font-size:0.78rem;">{{ $imagen->id }}</td>
                        <td>
                            <img src="../img/galeria/{{ $imagen->img }}" width="100" height="65"
                                style="border-radius:8px; object-fit:cover;" alt="{{ $imagen->img }}">
                        </td>
                        <td>
                            <span class="pm-url-copy" title="Clic para copiar"
                                onclick="copiarUrl(this)"
                                style="cursor:pointer; color:#2aa8a8; font-size:0.78rem; font-family:monospace;
                                       display:block; padding:4px 8px; background:#f0fafa; border-radius:4px;
                                       border:1px solid #c8e8e8; max-width:340px; overflow:hidden; text-overflow:ellipsis; white-space:nowrap;">
                                {{ asset("img/galeria/$imagen->img") }}
                            </span>
                        </td>
                        <td class="text-center" style="white-space:nowrap;">
                            <form action="{{ route('imagenes.destroy', $imagen->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <a href="{{ asset("img/galeria/$imagen->img") }}" target="_blank" class="btn btn-action btn-action-view" title="Ver imagen">
                                    <i class="fas fa-eye"></i>
                                </a>
                                <a href="/imagenes/{{ $imagen->id }}/edit" class="btn btn-action btn-action-edit" title="Editar">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <button type="submit" class="btn btn-action btn-action-delete" title="Eliminar"
                                    onclick="return confirm('¿Eliminar esta imagen?');">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@push('admin_scripts')
<script>
function copiarUrl(el) {
    navigator.clipboard.writeText(el.textContent.trim()).then(function() {
        var orig = el.style.background;
        el.style.background = '#d1fae5';
        el.textContent = '✓ Copiado!';
        setTimeout(function() {
            el.style.background = orig;
            el.textContent = el.getAttribute('data-url') || el.textContent;
        }, 1500);
    });
    // Guardar la URL original antes del cambio visual
    if (!el.getAttribute('data-url')) {
        el.setAttribute('data-url', el.textContent.trim());
    }
}
// Init: guardar data-url en cada elemento
document.querySelectorAll('.pm-url-copy').forEach(function(el) {
    el.setAttribute('data-url', el.textContent.trim());
});
</script>
@endpush
@endsection
