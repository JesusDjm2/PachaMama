@extends('layouts.admin')
@section('titulo', 'Editar tour en español')

@section('contenido')
    @if (session('status'))
        <div class="text-success">
            <h4>{{ session('status') }}</h4>
        </div>
    @endif
    <div class="row">
        <div class="col-lg-12">
            <h3 class="float-left">Editar: {{ $tour->nombre }}</h3>
            <a href="{{route('tours.index')}}" class="btn btn-sm btn-danger float-right">Volver</a>
        </div>
        <div style="width: 100%; margin-bottom:2em; border-bottom: 2px dotted #858796"></div>
        <div class="col-12 mt-2">
            <form action="/tours/{{ $tour->id }}" method="post" enctype="multipart/form-data" class="bg-light"
                style="padding: 1em">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-lg-3 pt-3">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" class="form-control form-control-sm" required
                            value="{{ $tour->nombre }}">
                    </div>
                    <div class="col-lg-3 pt-3">
                        <label for="" class="form-label">Precio:</label>
                        <input type="text" id="precio" name="precio" class="form-control form-control-sm" required
                            value="{{ $tour->precio }}">
                    </div>
                    <div class="col-lg-3 pt-3">
                        <label for="" class="form-label">Ubicación:</label>
                        <input type="text" id="ubicacion" name="ubicacion" class="form-control form-control-sm" required
                            value="{{ $tour->ubicacion }}">
                    </div>
                    <div class="col-lg-3 pt-3">
                        <label for="" class="form-label">Días:</label>
                        <input type="text" id="dias" name="dias" class="form-control form-control-sm" required
                            value="{{ $tour->dias }}">
                    </div>
                   
                    <div class="col-lg-12 pt-3">
                        <label for="descripcion" class="form-label">Descripción:</label>
                        <input type="text" id="descripcion" name="descripcion" class="form-control form-control-sm" required
                            value="{{ $tour->descripcion }}">
                    </div>
                    <div class="col-lg-12 pt-3">
                        <label for="contenido" class="form-label">Contenido:</label>
                        <textarea class="ckeditor form-control" name="contenido" id="contenido">{!! Request::old('content', $tour->contenido) !!}</textarea>
                        </textarea>
                    </div>
                    
                    <div class="col-lg-12 pt-3">
                        <label for="detallado" class="form-label">Detalle del tour:</label>
                        <textarea class="ckeditor form-control" name="detallado" id="detallado">{!! Request::old('content', $tour->detallado) !!}</textarea>
                        </textarea>
                    </div>
                    <div class="col-lg-4 pt-3">
                        <label for="incluidos" class="form-label">Incluidos:</label>
                        <textarea class="ckeditor form-control" name="incluidos" id="incluidos">{!! Request::old('content', $tour->incluidos) !!}</textarea>
                        </textarea>
                    </div>
                    <div class="col-lg-4 pt-3">
                        <label for="importante" class="form-label">Importante:</label>
                        <textarea class="ckeditor form-control" name="importante" id="importante">{!! Request::old('content', $tour->importante) !!}</textarea>
                        </textarea>
                    </div>
                    <div class="col-lg-4 pt-3">
                        <label for="mapa" class="form-label">Mapa:</label>
                        <textarea class="ckeditor form-control" name="mapa" id="mapa">{!! Request::old('content', $tour->mapa) !!}</textarea>
                    </div>                    
                    <div class="col-lg-4 pt-3">
                        <label for="img" class="form-label">Imagen:</label>
                        <input type="file" id="img" name="img" class="form-control form-control-sm" accept="image/*"
                            value="{{ $tour->img }}">
                        <img src="../../{{ $tour->img }}" style="width: 100%; height:180px; object-fit:cover"><br>
                    </div>
                    <div class="col-lg-4 pt-3">
                        <label for="" class="form-label">Categoría:</label>
                        {{-- <input type="text" id="categoria" name="categoria" class="ckeditor form-control" required value="{{$tour->categoria}}"> --}}
                        <select name="categoria[]" id="categoria" class="form-control form-control-sm" aria-label="Default select example"
                            required multiple="multiple">
                            <option value="{{ $tour->categoria }}" selected style="text-transform: capitalize">
                                {{ $tour->categoria }} <small>(Seleccionado)</small></option>
                            <option value="hikes">Hikes</option>
                            <option value="around">Around Perú</option>
                            <option value="machupicchu">Machu Picchu</option>
                            <option value="luxury">Luxury</option>
                            <option value="fullday">Full day</option>
                        </select>
                    </div>
                    <div class="col-lg-4 pt-3">
                        <label for="" class="form-label">Clase:</label>
                        <select name="clase" id="clase" class="form-control form-control-sm">
                            <option value="aventuras">Camino Inca Salkantay</option>
                            <option value="imperdible">Cusco city tour</option>
                            <option value="machu">Machu Picchu</option>
                            <option value="ollantaytambo">Ollantaytambo</option>
                            <option value="pachamamalodge">Vista Valle Sagrado</option>
                            <option value="valle">Vista Valle Sagrado 2</option>
                            <option value="santuaryLodge">Hotel Sanctuary Lodge</option>
                            <option value="puno">Balsa en Lago Titicaca</option>
                            <option value="selva">Amazonas</option>
                            <option value="caminata">Caminata Salkantay</option>
                            <option value="nazca">Lineas de Nazca</option>
                            <option value="lima">Ciudad de Lima</option>
                            <option value="arequipa">Ciudad de Arequipa</option>
                            <option value="huchuy">Huchuy Qosqo</option>
                            <option value="choque">Choquequirao</option>
                            <option value="humantay">Laguna Humantay</option>
                            <option value="vinicunca">Vinicunca</option>
                            <option value="ica">Huacachina</option>
                            <option value="pisco">Reserva Nacional Paracas</option>
                            <option value="puerto">Puerto Maldonado</option>
                        </select>
                        <div style="width: 100%; height: 180px; object-fit: cover;" id="dynamic-class-div" class="default-class">
                            <!-- Contenido aquí -->
                        </div>
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                var selectElement = document.getElementById('clase');
                                var dynamicDiv = document.getElementById('dynamic-class-div');
                                
                                // Inicializa el div con la clase correspondiente al valor seleccionado por defecto
                                var defaultClass = selectElement.value;
                                if (defaultClass) {
                                    dynamicDiv.classList.add(defaultClass);
                                }
                    
                                // Actualiza la clase del div cuando cambia la selección
                                selectElement.addEventListener('change', function() {
                                    var selectedClass = this.value;
                                    
                                    // Elimina todas las clases dinámicas anteriores (excepto la clase predeterminada)
                                    dynamicDiv.className = 'default-class';
                                    
                                    // Agrega la nueva clase basada en la opción seleccionada
                                    if (selectedClass) {
                                        dynamicDiv.classList.add(selectedClass);
                                    }
                                });
                            });
                        </script>
                    </div>                    
                    <div class="col-lg-12 pt-3">
                        <label for="keywords" class="form-label">Keywords:</label>
                        <input type="text" id="keywords" name="keywords" class="form-control form-control-sm" required
                            value="{{ $tour->keywords }}">
                    </div>
                    <div class="col-lg-12 pt-3">
                        <label for="" class="form-label">Slug:</label>
                        <input type="text" id="slug" name="slug" class="form-control form-control-sm" required
                            value="{{ $tour->slug }}">
                    </div>
                </div>
                <a href="/tours" class="btn btn-secondary mt-4">Cancelar</a>
                <button class="btn btn-primary mt-4" type="submit">Guardar</button>
            </form>
        </div>
    </div>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.ckeditor').ckeditor();
            CKEDITOR.config.allowedContent = true;
        });
    </script>
@endsection
