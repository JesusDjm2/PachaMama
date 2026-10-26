<div class="row">
    <div class="col-lg-8 mb-3">
        <label class="form-label font-weight-600">Título do artigo</label>
        <input type="text" name="nombre" id="nombre" value="{{ old('nombre', $blog->nombre) }}"
            class="form-control form-control-sm {{ $errors->has('nombre') ? 'is-invalid' : '' }}"
            placeholder="Título do artigo" required>
        @if($errors->has('nombre'))
            <div class="invalid-feedback">{{ $errors->first('nombre') }}</div>
        @endif
    </div>

    <div class="col-lg-4 mb-3">
        <label class="form-label font-weight-600">Slug (URL amigável)</label>
        <input type="text" name="slug" id="slug"
            class="form-control form-control-sm {{ $errors->has('slug') ? 'is-invalid' : '' }}"
            value="{{ old('slug', $blog->slug) }}" placeholder="url-do-artigo" required
            onkeyup="this.value=this.value.replace(/ /g,'-').replace(/[-]{2,}/g,'-')">
        @if($errors->has('slug'))
            <div class="invalid-feedback">{{ $errors->first('slug') }}</div>
        @endif
    </div>

    <div class="col-12 mb-3">
        <label class="form-label font-weight-600">Descrição curta <small class="text-muted">— máx. 105 caracteres, meta description</small></label>
        <input type="text" name="descripcion" value="{{ old('descripcion', $blog->descripcion) }}"
            class="form-control form-control-sm {{ $errors->has('descripcion') ? 'is-invalid' : '' }}"
            placeholder="Resumo do artigo para o Google" maxlength="105" required>
        @if($errors->has('descripcion'))
            <div class="invalid-feedback">{{ $errors->first('descripcion') }}</div>
        @endif
    </div>

    <div class="col-12 mb-3">
        <label class="form-label font-weight-600">Corpo do artigo</label>
        <textarea name="cuerpo" class="ckeditor form-control {{ $errors->has('cuerpo') ? 'is-invalid' : '' }}"
            placeholder="Conteúdo completo">{!! old('cuerpo', $blog->cuerpo) !!}</textarea>
        @if($errors->has('cuerpo'))
            <div class="invalid-feedback">{{ $errors->first('cuerpo') }}</div>
        @endif
    </div>

    <div class="col-lg-6 mb-3">
        <label class="form-label font-weight-600">Data de publicação <small class="text-muted">— datePublished para o Google</small></label>
        <input type="date" name="published_at"
            class="form-control form-control-sm {{ $errors->has('published_at') ? 'is-invalid' : '' }}"
            value="{{ old('published_at', optional($blog->published_at ?? $blog->created_at)->format('Y-m-d')) }}">
        @if($errors->has('published_at'))
            <div class="invalid-feedback">{{ $errors->first('published_at') }}</div>
        @endif
    </div>

    <div class="col-lg-6 mb-3">
        <label class="form-label font-weight-600">Imagem de capa</label>
        <input type="file" name="img" class="form-control form-control-sm {{ $errors->has('img') ? 'is-invalid' : '' }}"
            {{ $blog->exists ? '' : 'required' }}>
        @if($blog->img)
            <div class="mt-2 p-1 border rounded bg-light d-inline-block">
                <img src="{{ asset($blog->img) }}" alt="Imagem atual" style="max-height:80px; object-fit:cover;" class="rounded">
            </div>
        @endif
        @if($errors->has('img'))
            <div class="invalid-feedback">{{ $errors->first('img') }}</div>
        @endif
    </div>

    <div class="col-12 mb-3">
        <label class="form-label font-weight-600">Keywords SEO <small class="text-muted">— separar por vírgulas</small></label>
        <input type="text" name="keywords" value="{{ old('keywords', $blog->keywords) }}"
            class="form-control form-control-sm {{ $errors->has('keywords') ? 'is-invalid' : '' }}"
            placeholder="keyword1, keyword2, keyword3">
        @if($errors->has('keywords'))
            <div class="invalid-feedback">{{ $errors->first('keywords') }}</div>
        @endif
    </div>

    <div class="col-12 mb-3">
        <label class="form-label font-weight-600">Tags (Português)</label>
        <div class="d-flex flex-wrap" style="gap:0.75rem;">
            @foreach($tags as $id => $tag)
                <div class="custom-control custom-checkbox mr-2">
                    <input type="checkbox" name="tags[]" value="{{ $id }}" id="pttag_{{ $id }}"
                        class="custom-control-input"
                        {{ in_array($id, old('tags', $blog->pttags->pluck('id')->toArray())) ? 'checked' : '' }}>
                    <label class="custom-control-label font-weight-500" for="pttag_{{ $id }}" style="cursor:pointer; font-size:0.86rem;">
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
        <i class="fas fa-save mr-1"></i> Salvar Artigo
    </button>
    <a href="{{ route('ptblogs.index') }}" class="btn btn-secondary">
        <i class="fas fa-times mr-1"></i> Cancelar
    </a>
</div>

<script type="text/javascript">
$(document).ready(function() { $('.ckeditor').ckeditor(); });
</script>
