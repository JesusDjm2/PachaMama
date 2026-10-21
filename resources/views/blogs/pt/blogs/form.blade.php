<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            <label for="nombre">Nome</label>
            <input type="text" name="nombre" value="{{ old('nombre', $blog->nombre) }}"
                class="form-control {{ $errors->has('nombre') ? 'is-invalid' : '' }}" placeholder="Nome">
            @if ($errors->has('nombre'))
                <div class="invalid-feedback">{{ $errors->first('nombre') }}</div>
            @endif
        </div>

        <div class="form-group">
            <label for="descripcion">Descrição</label>
            <input type="text" name="descripcion" value="{{ old('descripcion', $blog->descripcion) }}"
                class="form-control {{ $errors->has('descripcion') ? 'is-invalid' : '' }}" placeholder="Descrição"
                maxlength="105">
            @if ($errors->has('descripcion'))
                <div class="invalid-feedback">{{ $errors->first('descripcion') }}</div>
            @endif
        </div>

        <div class="form-group">
            <label for="cuerpo">Corpo</label>
            <textarea name="cuerpo" class="ckeditor form-control {{ $errors->has('cuerpo') ? 'is-invalid' : '' }}"
                placeholder="Corpo">{!! old('cuerpo', $blog->cuerpo) !!}</textarea>
            @if ($errors->has('cuerpo'))
                <div class="invalid-feedback">{{ $errors->first('cuerpo') }}</div>
            @endif
        </div>

        <div class="form-group">
            <label for="published_at">Data de publicação <small class="text-muted">(datePublished para o Google)</small></label>
            <input type="date" name="published_at"
                class="form-control {{ $errors->has('published_at') ? 'is-invalid' : '' }}"
                value="{{ old('published_at', optional($blog->published_at ?? $blog->created_at)->format('Y-m-d')) }}">
            @if ($errors->has('published_at'))
                <div class="invalid-feedback">{{ $errors->first('published_at') }}</div>
            @endif
        </div>

        <div class="form-group">
            <label for="img">Imagem</label>
            <input type="file" name="img" class="form-control {{ $errors->has('img') ? 'is-invalid' : '' }}"
                {{ $blog->exists ? '' : 'required' }}>
            @if ($blog->img)
                <img src="{{ asset($blog->img) }}" alt="Imagem do blog" style="width: 100px">
            @endif
            @if ($errors->has('img'))
                <div class="invalid-feedback">{{ $errors->first('img') }}</div>
            @endif
        </div>

        <div class="form-group">
            <label for="keywords">Keywords</label>
            <input type="text" name="keywords" value="{{ old('keywords', $blog->keywords) }}"
                class="form-control {{ $errors->has('keywords') ? 'is-invalid' : '' }}" placeholder="Keywords">
            @if ($errors->has('keywords'))
                <div class="invalid-feedback">{{ $errors->first('keywords') }}</div>
            @endif
        </div>

        <div class="form-group">
            <label>Tags:</label>
            <br>
            @foreach ($tags as $id => $tag)
                <div class="form-check form-check-inline">
                    <input type="checkbox" name="tags[]" value="{{ $id }}" class="form-check-input"
                        id="tag_{{ $id }}"
                        {{ in_array($id, old('tags', $blog->tags->pluck('id')->toArray())) ? 'checked' : '' }}>
                    <label class="form-check-label" for="tag_{{ $id }}">{{ $tag }}</label>
                </div>
            @endforeach
            @if ($errors->has('tags'))
                <div class="invalid-feedback">{{ $errors->first('tags') }}</div>
            @endif
        </div>

        <div class="form-group">
            <label for="slug">Slug</label>
            <input type="text" name="slug" class="form-control{{ $errors->has('slug') ? ' is-invalid' : '' }}"
                value="{{ old('slug', $blog->slug) }}" placeholder="Slug" onkeyup="replaceSpaces(this)">
            {!! $errors->first('slug', '<div class="invalid-feedback">:message</div>') !!}
        </div>

        @isset($blogsEs)
        <div class="form-group">
            <label for="blog_id">Artigo em espanhol vinculado <small class="text-muted">(opcional, 1:1)</small></label>
            <select name="blog_id" id="blog_id" class="form-control {{ $errors->has('blog_id') ? 'is-invalid' : '' }}">
                <option value="">— Sem vincular —</option>
                @foreach ($blogsEs as $b)
                    <option value="{{ $b->id }}" {{ (string) old('blog_id', $blog->blog_id) === (string) $b->id ? 'selected' : '' }}>
                        {{ $b->nombre }}
                    </option>
                @endforeach
            </select>
            @if ($errors->has('blog_id'))
                <div class="invalid-feedback d-block">{{ $errors->first('blog_id') }}</div>
            @endif
        </div>
        @endisset

        <script>
            function replaceSpaces(input) {
                input.value = input.value
                    .normalize('NFD').replace(/[\u0300-\u036f]/g, '')
                    .replace(/ /g, '-').replace(/[-]{2,}/g, '-');
            }
        </script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('.ckeditor').ckeditor();
            });
        </script>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Salvar</button>
    </div>
</div>
