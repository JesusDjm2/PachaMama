@extends('layouts.admin')
@section('titulo', 'Crear nuevo tour en español')

@section('contenido')
    <div class="row">
        <div class="col-12 mt-2">
            <div class="row" style="padding: 1em; border-radius: 10px;">
                <div class="col-lg-6 float-left">
                    <h3>Crear nuevo tour en español</h3>                    
                </div>
                <div class="col-lg-6">                    
                    <a href="/toursen/create" class="btn btn-primary btn-sm float-right">Crear tour en Ingles</a>
                    <a href="/tours" class="btn btn-danger btn-sm mr-3 float-right">Volver</a>
                </div>
            </div>
            <div style="width: 100%; margin-bottom:2em; border-bottom: 2px dotted #858796"></div>
            <form action="/tours" method="post" enctype="multipart/form-data" class="bg-light">
                @csrf
                <div class="row">
                    <div class="col-lg-4 pt-3">
                        <label for="nombre" class="form-label">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" class="form-control form-control-sm" required>
                    </div>
                    <div class="col-lg-4 pt-3">
                        <label for="" class="form-label">Precio:</label>
                        <input type="text" id="precio" name="precio" class="form-control form-control-sm" required>
                    </div>
                    <div class="col-lg-4 pt-3">
                        <label for="" class="form-label">Días:</label>
                        <input type="text" id="dias" name="dias" class="form-control form-control-sm" required>
                    </div>
                    <div class="col-lg-12 pt-3">
                        <label for="descripcion" class="form-label">Descripción:</label>
                        <input type="text" id="descripcion" name="descripcion" class="form-control form-control-sm" required>
                    </div>
                    <div class="col-lg-12 pt-3">
                        <label for="contenido" class="form-label">Contenido:</label>
                        <textarea class="ckeditor form-control" name="contenido" id="contenido"></textarea>
                        </textarea>
                    </div>
                    <div class="col-lg-12 pt-3">
                        <label for="detallado" class="form-label">Detalle del tour:</label>
                        <textarea class="ckeditor form-control" name="detallado" id="detallado"></textarea>
                        </textarea>
                    </div>
                    <div class="col-lg-4 pt-3">
                        <label for="incluidos" class="form-label">Incluye: <small>Preferible listas</small> </label>
                        <textarea class="ckeditor form-control" name="incluidos" id="incluidos" required></textarea>
                        </textarea>
                    </div>
                    <div class="col-lg-4 pt-3">
                        <label for="importante" class="form-label">Importante: <small>Preferible listas</small></label>
                        <textarea class="ckeditor form-control" name="importante" id="importante"></textarea>
                        </textarea>
                    </div>
                    <div class="col-lg-4 pt-3">
                        <label for="mapa" class="form-label">Mapa:</label>
                        <textarea class="ckeditor form-control" name="mapa" id="mapa"></textarea>
                    </div>
                    {{-- <div class="col-lg-12 pt-3">
                        <label for="img" class="form-label">Imagen:</label>
                        <input type="file" id="img" name="img" class="form-control" accept="image/*" required>
                    </div> --}}
                    <div class="col-lg-12 pt-3">
                        <label for="img" class="form-label">Imagen:</label>
                        <input type="file" id="img" name="img" class="form-control form-control-sm" accept="image/*" required onchange="previewImage(event)">
                        <img id="img-preview" src="#" alt="Vista previa de la imagen" style="display: none; max-width: 100%; max-height: 200px;">
                    </div>
                    
                    <script>
                        function previewImage(event) {
                            var input = event.target;
                            var imgPreview = document.getElementById('img-preview');
                    
                            if (input.files && input.files[0]) {
                                var reader = new FileReader();
                    
                                reader.onload = function (e) {
                                    imgPreview.src = e.target.result;
                                    imgPreview.style.display = 'block'; // Mostrar la imagen previa
                                }
                    
                                reader.readAsDataURL(input.files[0]); // Convertir la imagen a formato base64
                            }
                        }
                    </script>

                    <div class="col-lg-6 pt-3">
                        <label for="" class="form-label">Categoría: <small class="text-success">Presionar Ctrl para
                                seleccionar mas de1 categoria</small></label>
                        <select name="categoria[]" id="categoria" class="form-control form-control-sm" required multiple="multiple">
                            <option value="hikes">Hikes</option>
                            <option value="around">Around Perú</option>
                            <option value="machupicchu">Machu Picchu</option>
                            <option value="luxury">Luxury</option>
                            <option value="fullday">Full day</option>
                        </select>
                    </div>
                    <div class="col-lg-3 pt-3">
                        <label for="" class="form-label">Ubicación:</label>
                        <input type="text" id="ubicacion" name="ubicacion" class="form-control form-control-sm" required>
                    </div>
                    <div class="col-lg-3 pt-3">
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
                    <div class="col-lg-12 pt-3">
                        <label for="" class="form-label">Keywords: <small class="text-success">(Separar cada
                                palabra/frase por una coma)</small></label>
                        <input type="text" id="keywords" name="keywords" class="form-control form-control-sm" required>
                    </div>
                    <div class="col-lg-12 pt-3">
                        <label for="" class="form-label">Slug:</label>
                        <input type="text" id="slug" name="slug" class="form-control form-control-sm" required>
                    </div>

                </div>
                <a href="/tours" class="btn btn-secondary mt-4">Cancelar</a>
                <button class="btn btn-primary mt-4" type="submit">Guardar</button>
            </form>
        </div>
    </div>
    <script type="text/javascript">
        CKEDITOR.replace('.ckeditor', {
            toolbar: [
                ['Youtube']
            ]
        });
    </script>
@endsection
