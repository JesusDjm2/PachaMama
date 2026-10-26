<div class="row">
    @isset($blogsEs)
        <div class="col-12 mb-3">
            <div class="p-3 bg-light border rounded d-flex align-items-center justify-content-between flex-wrap" style="gap:0.5rem;">
                <div>
                    <label class="form-label font-weight-600 mb-1" for="blog_id">
                        <i class="fas fa-link text-info mr-1"></i> Artículo en español vinculado <small class="text-muted">(opcional, 1:1)</small>
                    </label>
                    <select name="blog_id" id="blog_id" class="form-control form-control-sm {{ $errors->has('blog_id') ? 'is-invalid' : '' }}" style="max-width:380px;">
                        <option value="">— Sin vincular —</option>
                        @foreach ($blogsEs as $b)
                            <option value="{{ $b->id }}" {{ (string) old('blog_id', $blog->blog_id) === (string) $b->id ? 'selected' : '' }}>
                                {{ $b->nombre }}
                            </option>
                        @endforeach
                    </select>
                </div>
                @if($blog->blog)
                    <span class="badge badge-success px-2 py-1"><i class="fas fa-check mr-1"></i> Vinculado a: {{ $blog->blog->slug }}</span>
                @endif
            </div>
            @if ($errors->has('blog_id'))
                <div class="invalid-feedback d-block">{{ $errors->first('blog_id') }}</div>
            @endif
        </div>
    @endisset

    <div class="col-lg-8 mb-3">
        <label class="form-label font-weight-600">Título del blog (inglés)</label>
        <input type="text" name="nombre" id="nombre" value="{{ old('nombre', $blog->nombre) }}"
            class="form-control form-control-sm {{ $errors->has('nombre') ? 'is-invalid' : '' }}"
            placeholder="Title of the article" required>
        @if($errors->has('nombre'))
            <div class="invalid-feedback">{{ $errors->first('nombre') }}</div>
        @endif
    </div>

    <div class="col-lg-4 mb-3">
        <label class="form-label font-weight-600">Slug (URL amigable)</label>
        <input type="text" name="slug" id="slug"
            class="form-control form-control-sm {{ $errors->has('slug') ? 'is-invalid' : '' }}"
            value="{{ old('slug', $blog->slug) }}" placeholder="url-of-the-article" required
            onkeyup="this.value=this.value.replace(/ /g,'-').replace(/[-]{2,}/g,'-')">
        @if($errors->has('slug'))
            <div class="invalid-feedback">{{ $errors->first('slug') }}</div>
        @endif
    </div>

    <div class="col-12 mb-3">
        <label class="form-label font-weight-600">Descripción corta <small class="text-muted">— máx. 105 caracteres, meta description</small></label>
        <input type="text" name="descripcion" value="{{ old('descripcion', $blog->descripcion) }}"
            class="form-control form-control-sm {{ $errors->has('descripcion') ? 'is-invalid' : '' }}"
            placeholder="Short summary for SEO" maxlength="105" required>
        @if($errors->has('descripcion'))
            <div class="invalid-feedback">{{ $errors->first('descripcion') }}</div>
        @endif
    </div>

    <div class="col-12 mb-3">
        <label class="form-label font-weight-600">Cuerpo del artículo</label>
        <textarea name="cuerpo" class="ckeditor form-control {{ $errors->has('cuerpo') ? 'is-invalid' : '' }}"
            placeholder="Body content">{{ old('cuerpo', $blog->cuerpo) }}</textarea>
        @if($errors->has('cuerpo'))
            <div class="invalid-feedback">{{ $errors->first('cuerpo') }}</div>
        @endif
    </div>

    <div class="col-lg-6 mb-3">
        <label class="form-label font-weight-600">Fecha de publicación <small class="text-muted">— datePublished en Google</small></label>
        <input type="date" name="published_at"
            class="form-control form-control-sm {{ $errors->has('published_at') ? 'is-invalid' : '' }}"
            value="{{ old('published_at', optional($blog->published_at ?? $blog->created_at)->format('Y-m-d')) }}">
        @if($errors->has('published_at'))
            <div class="invalid-feedback">{{ $errors->first('published_at') }}</div>
        @endif
    </div>

    <div class="col-lg-6 mb-3">
        <label class="form-label font-weight-600">Imagen de portada</label>
        <input type="file" name="img" class="form-control form-control-sm {{ $errors->has('img') ? 'is-invalid' : '' }}">
        @if($blog->img)
            <div class="mt-2 p-1 border rounded bg-light d-inline-block">
                <img src="{{ asset($blog->img) }}" alt="Imagen actual" style="max-height:80px; object-fit:cover;" class="rounded">
            </div>
        @endif
        @if($errors->has('img'))
            <div class="invalid-feedback">{{ $errors->first('img') }}</div>
        @endif
    </div>

    <div class="col-12 mb-3">
        <label class="form-label font-weight-600">Keywords SEO <small class="text-muted">— separar por comas</small></label>
        <input type="text" name="keywords" value="{{ old('keywords', $blog->keywords) }}"
            class="form-control form-control-sm {{ $errors->has('keywords') ? 'is-invalid' : '' }}"
            placeholder="keyword1, keyword2, keyword3">
        @if($errors->has('keywords'))
            <div class="invalid-feedback">{{ $errors->first('keywords') }}</div>
        @endif
    </div>

    <div class="col-12 mb-3">
        <label class="form-label font-weight-600">Tags (Inglés)</label>
        <div class="d-flex flex-wrap" style="gap:0.75rem;">
            @foreach($tags as $id => $tag)
                <div class="custom-control custom-checkbox mr-2">
                    <input type="checkbox" name="tags[]" value="{{ $id }}" id="entag_{{ $id }}"
                        class="custom-control-input"
                        {{ in_array($id, old('tags', $blog->entags->pluck('id')->toArray())) ? 'checked' : '' }}>
                    <label class="custom-control-label font-weight-500" for="entag_{{ $id }}" style="cursor:pointer; font-size:0.86rem;">
                        {{ $tag }}
                    </label>
                </div>
            @endforeach
        </div>
        @if ($errors->has('tags'))
            <div class="text-danger mt-1" style="font-size:0.8rem;">{{ $errors->first('tags') }}</div>
        @endif
    </div>
</div>

<div class="pm-form-actions mt-3">
    <button type="submit" class="btn btn-pm-primary">
        <i class="fas fa-save mr-1"></i> Guardar Artículo
    </button>
    <a href="{{ route('enblogs.index') }}" class="btn btn-secondary">
        <i class="fas fa-times mr-1"></i> Cancelar
    </a>
</div>

<script type="text/javascript">
$(document).ready(function() { $('.ckeditor').ckeditor(); });
</script>
