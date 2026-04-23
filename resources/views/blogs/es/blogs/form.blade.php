<div class="row">
    @if (isset($blog) && $blog->exists && $blog->enblog)
        <div class="col-12 mb-3">
            <div class="alert alert-info py-2 mb-0" style="font-size:0.9rem;">
                <strong>Versión en inglés vinculada:</strong>
                <a href="{{ route('enblogs.edit', $blog->enblog->id) }}">{{ $blog->enblog->nombre }}</a>
                <span class="text-muted">({{ $blog->enblog->slug }})</span>
            </div>
        </div>
    @endif
    <div class="col-lg-8 mb-3">
        <label class="form-label">Título del blog</label>
        <input type="text" name="nombre" value="{{ old('nombre', $blog->nombre) }}"
            class="form-control form-control-sm {{ $errors->has('nombre') ? 'is-invalid' : '' }}"
            placeholder="Título del artículo">
        @if($errors->has('nombre'))
            <div class="invalid-feedback">{{ $errors->first('nombre') }}</div>
        @endif
    </div>
    <div class="col-lg-4 mb-3">
        <label class="form-label">Slug</label>
        <input type="text" name="slug"
            class="form-control form-control-sm {{ $errors->has('slug') ? 'is-invalid' : '' }}"
            value="{{ old('slug', $blog->slug) }}" placeholder="url-del-articulo"
            onkeyup="this.value=this.value.replace(/ /g,'-').replace(/[-]{2,}/g,'-')">
        @if($errors->has('slug'))
            <div class="invalid-feedback">{{ $errors->first('slug') }}</div>
        @endif
    </div>
    <div class="col-12 mb-3">
        <label class="form-label">Descripción corta <small>— máx. 105 caracteres, usada como meta description</small></label>
        <input type="text" name="descripcion" value="{{ old('descripcion', $blog->descripcion) }}"
            class="form-control form-control-sm {{ $errors->has('descripcion') ? 'is-invalid' : '' }}"
            placeholder="Descripción" maxlength="105">
        @if($errors->has('descripcion'))
            <div class="invalid-feedback">{{ $errors->first('descripcion') }}</div>
        @endif
    </div>
    <div class="col-12 mb-3">
        <label class="form-label">Cuerpo del artículo</label>
        <textarea name="cuerpo" class="ckeditor form-control {{ $errors->has('cuerpo') ? 'is-invalid' : '' }}"
            placeholder="Cuerpo">{{ old('cuerpo', $blog->cuerpo) }}</textarea>
        @if($errors->has('cuerpo'))
            <div class="invalid-feedback">{{ $errors->first('cuerpo') }}</div>
        @endif
    </div>
    <div class="col-lg-6 mb-3">
        <label class="form-label">Imagen de portada</label>
        <input type="file" name="img" class="form-control form-control-sm {{ $errors->has('img') ? 'is-invalid' : '' }}">
        @if($blog->img)
            <img src="{{ asset($blog->img) }}" alt="Imagen actual" class="pm-img-preview" style="display:block;">
        @endif
        @if($errors->has('img'))
            <div class="invalid-feedback">{{ $errors->first('img') }}</div>
        @endif
    </div>
    <div class="col-lg-6 mb-3">
        <label class="form-label">Keywords <small>— separar por comas</small></label>
        <input type="text" name="keywords" value="{{ old('keywords', $blog->keywords) }}"
            class="form-control form-control-sm {{ $errors->has('keywords') ? 'is-invalid' : '' }}"
            placeholder="keyword1, keyword2, keyword3">
        @if($errors->has('keywords'))
            <div class="invalid-feedback">{{ $errors->first('keywords') }}</div>
        @endif
    </div>
    <div class="col-12 mb-3">
        <label class="form-label">Tags</label>
        <div class="d-flex flex-wrap gap-2" style="gap:0.5rem;">
            @foreach($tags as $id => $tag)
                <div class="form-check form-check-inline" style="margin-right:1rem;">
                    <input type="checkbox" name="tags[]" value="{{ $id }}" id="tag_{{ $id }}"
                        class="form-check-input"
                        {{ in_array($id, old('tags', $blog->tags->pluck('id')->toArray())) ? 'checked' : '' }}>
                    <label class="form-check-label" for="tag_{{ $id }}" style="font-weight:500; font-size:0.85rem;">
                        {{ $tag }}
                    </label>
                </div>
            @endforeach
        </div>
    </div>
</div>

<div class="pm-form-actions">
    <button type="submit" class="btn btn-pm-primary">
        <i class="fas fa-save mr-1"></i> Guardar
    </button>
    <a href="{{ route('blogs.index') }}" class="btn btn-secondary">
        <i class="fas fa-times mr-1"></i> Cancelar
    </a>
</div>

<script type="text/javascript">
$(document).ready(function() { $('.ckeditor').ckeditor(); });
</script>
