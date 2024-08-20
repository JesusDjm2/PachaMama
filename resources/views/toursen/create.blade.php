@extends('layouts.admin')
@section('titulo', 'Crear tour en inglés')

@section('contenido')
    @if (session('status'))
        <div class="text-success">
            <h4>{{ session('status') }}</h4>
        </div>
    @endif
    <div class="row">
        <div class="col-lg-12">
            <h3 class="float-left">Crear Nuevo Tour en Inglés</h3>
            <a href="{{ route('toursen.index') }}" class="btn btn-primary float-right">Volver</a>
        </div>
        <div class="col-12 mt-2">
            <form action="/toursen" method="post" enctype="multipart/form-data" class="bg-light" style="padding: 1em">
                @csrf
                <div class="row">
                    <div class="col-lg-6 pt-3">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" class="form-control form-control-sm" required>
                    </div>
                    <div class="col-lg-3 pt-3">
                        <label for="" class="form-label">Precio:</label>
                        <input type="text" id="precio" name="precio" class="form-control form-control-sm" required>
                    </div>
                    <div class="col-lg-3 pt-3">
                        <label for="" class="form-label">Días:</label>
                        <input type="text" id="dias" name="dias" class="form-control form-control-sm" required>
                    </div>

                    <div class="col-lg-12 pt-3">
                        <label for="descripcion" class="form-label">Descripción:</label>
                        <input type="text" id="descripcion" name="descripcion" class="form-control form-control-sm"
                            required>
                    </div>

                    <div class="col-lg-12 pt-3">
                        <label for="contenido" class="form-label">Contenido:</label>
                        <textarea class="ckeditor form-control" name="contenido" id="contenido"></textarea>
                        </textarea>
                    </div>
                    <div class="col-lg-12 pt-3">
                        <label for="resumen" class="form-label">Resumen:</label>
                        <textarea class="ckeditor form-control" name="resumen" id="resumen" required></textarea>
                        </textarea>
                    </div>
                    <div class="col-lg-12 pt-3">Detallado:</label>
                        <textarea class="ckeditor form-control" name="detallado" id="detallado" required></textarea>
                        </textarea>
                    </div>
                    <div class="col-lg-4 pt-3">
                        <label for="incluidos" class="form-label">Incluye: <small>Solo listas</small> </label>
                        <textarea class="ckeditor form-control form-control-sm" name="incluidos" id="incluidos" required></textarea>
                        </textarea>
                    </div>

                    <div class="col-lg-4 pt-3">
                        <label for="importante" class="form-label">Importante: <small>Solo listas</small></label>
                        <textarea class="ckeditor form-control" name="importante" id="importante"></textarea>
                        </textarea>
                    </div>
                    <div class="col-lg-4 pt-3">
                        <label for="mapa" class="form-label">Mapa:</label>
                        <textarea name="mapa" id="mapa" class="ckeditor"></textarea>
                    </div>
                    <div class="col-lg-12 pt-3">
                        <label for="img" class="form-label">Imagen:</label>
                        <input type="file" id="img" name="img" class="form-control form-control-sm"
                            accept="image/*" required>
                    </div>
                    <div class="col-lg-4 pt-3">
                        <label for="" class="form-label">Clase:<small>(Clase que tomara la imagen)</small></label>
                        <select name="clase" id="clase" class="form-control form-control-sm" required>
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

                        <!-- Divs para previsualización de imágenes -->
                        <div style="width: 100%; height:180px; object-fit:cover" id="dynamic-class-div" class="default-class">
                            <!-- Contenido aquí -->
                        </div>
                        <script>
                            document.getElementById('clase').addEventListener('change', function() {
                                var selectedClass = this.value;
                                var dynamicDiv = document.getElementById('dynamic-class-div');
                            
                                // Elimina todas las clases dinámicas anteriores (excepto la clase predeterminada)
                                dynamicDiv.className = 'default-class';
                            
                                // Agrega la nueva clase basada en la opción seleccionada
                                if (selectedClass) {
                                    dynamicDiv.classList.add(selectedClass);
                                }
                            });
                            </script>
                    </div>
                    <div class="col-lg-4 pt-3">
                        <label for="" class="form-label">Categoría:</label>
                        <select multiple="multiple" name="categoria[]" id="categoria"
                            class="form-control form-control-sm">
                            <option value="caminata">Hikes</option>
                            <option value="machuPicchu">Machu Picchu</option>
                            <option value="around">Around Perú</option>
                            <option value="luxury">Luxury</option>
                            <option value="fullday">Full day</option>
                        </select>
                    </div>
                    <div class="col-lg-4 pt-3">
                        <label for="" class="form-label">Ubicación:</label>
                        <input type="text" id="ubicacion" name="ubicacion" class="form-control form-control-sm"
                            required>
                    </div>
                    <div class="col-lg-12 pt-3">
                        <label for="" class="form-label">Keywords: <small>(Separar cada palabra/frase por una
                                coma)</small></label>
                        <input type="text" id="keywords" name="keywords" class="form-control form-control-sm"
                            required>
                    </div>
                    <div class="col-lg-12 pt-3">
                        <label for="" class="form-label">Slug:</label>
                        <input type="text" id="slug" name="slug" class="form-control form-control-sm"
                            required>
                    </div>
                </div>
                <a href="{{ route('toursen.index') }}" class="btn btn-secondary mt-4">Cancelar</a>
                <button class="btn btn-primary mt-4" type="submit">Guardar</button>
            </form>
        </div>
    </div>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.ckeditor').ckeditor();
        });
    </script>
@endsection
