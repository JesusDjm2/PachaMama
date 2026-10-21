<div class="box box-info padding-1">
    <div class="box-body">
        <div class="form-group">
            <label for="nombre">Nome da tag:</label>
            <input type="text" name="nombre" id="nombre" class="form-control {{ $errors->has('nombre') ? 'is-invalid' : '' }}"
                placeholder="Nome" value="{{ old('nombre', $tag->nombre) }}">
            @if ($errors->has('nombre'))
                <div class="invalid-feedback">{{ $errors->first('nombre') }}</div>
            @endif
        </div>
        <div class="form-group">
            <label for="slug">Slug:</label>
            <input type="text" name="slug" id="slug" class="form-control {{ $errors->has('slug') ? 'is-invalid' : '' }}"
                placeholder="Slug" readonly value="{{ old('slug', $tag->slug) }}">
            @if ($errors->has('slug'))
                <div class="invalid-feedback">{{ $errors->first('slug') }}</div>
            @endif
        </div>
        <script>
            const nombreInput = document.getElementById('nombre');
            const slugInput = document.getElementById('slug');
            nombreInput.addEventListener('input', () => {
                slugInput.value = nombreInput.value.trim()
                    .normalize('NFD').replace(/[\u0300-\u036f]/g, '')
                    .replace(/\s+/g, '-');
            });
        </script>
    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-success">Salvar</button>
    </div>
</div>
