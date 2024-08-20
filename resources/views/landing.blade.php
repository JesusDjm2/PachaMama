<!DOCTYPE html>
<html lang="Es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Visita Perú con Pacha Mama Perú</title>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{ asset('img/icono-home.png') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}" defer type="text/css">
    <link rel="stylesheet" href="{{ asset('css/landing.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">

</head>

<body>
    <div class="btn-whatsapp">
        <a href="https://api.whatsapp.com/send?phone=51921136755" target="_blank">
            <img src="{{ asset('img/whatsapp.png') }}" alt="WhatsaApp de Pacha Mama Spirit" width="80%">
        </a>
    </div>

    <!--boton compartir-->
    <a href="#" class="compartir" data-toggle="modal" data-target="#popupModal">
        <span class="icon-share share"></span>
    </a>
    <div class="modal fade" id="popupModal" tabindex="-1" role="dialog" aria-labelledby="popupModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content text-center">
                <div class="modal-header">
                    <h5 class="modal-title" id="popupModalLabel">Compartilhar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <a href="https://www.facebook.com/sharer/sharer.php?u={{ request()->fullUrl() }}" target="_blank"
                        rel="nofollow noopener noreferrer" target="_blank" rel="noopener nofollow" class="btn-social">
                        <i class="icon-facebook"></i> Compartilhar no Facebook
                    </a>
                    <a href="https://twitter.com/intent/tweet?url={{ request()->fullUrl() }}" target="_blank"
                        rel="nofollow noopener noreferrer" target="_blank" rel="noopener" class="btn-social">
                        <i class="icon-twitter"></i> Compartilhar no Twitter
                    </a>
                    <a href="https://wa.me/?text={{ request()->fullUrl() }}" target="_blank" rel="noopener"
                        class="btn-social">
                        <i class="icon-whatsapp"></i> Compartilhar no WhatsApp
                    </a>
                    <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ request()->fullUrl() }}"
                        target="_blank" rel="noopener" class="btn-social">
                        <i class="icon-linkedin"></i> Compartilhar no Pinterest
                    </a>
                    <a href="https://www.pinterest.com/pin/create/button/?url={{ request()->fullUrl() }}&description={{ urlencode('Tudo o que você precisa saber para viajar para Machu Picchu') }}"
                        target="_blank" rel="noopener" class="btn-social">
                        <i class="icon-pinterest"></i> Compartilhar no Pinterest
                    </a>
                </div>

            </div>
        </div>
    </div>

    <div class="container-sm text-center mt-5">
        <div class="row">
            <div class="container">
                <div class="row contenedor">
                    <div class="col-12">
                        <img src="{{ asset('img/pacha-mama-spirit-logo.png') }}" alt="Logo NC Travel Cusco"
                            width="340px">
                        <p class="mt-2">¡Viaja alrededor de Perú!</p>
                    </div>
                    <div class="col-lg-12">
                        @if (session('status'))
                            <div class="text-success text-center">
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="col-12 mt-1">
                        <span class="icon-facebook"
                            onclick="window.open('https://www.facebook.com/PachaMamaSpiritMountain', '_blank');"></span>
                        <span class="icon-whatsapp"
                            onclick="window.open('https://api.whatsapp.com/send?phone=51921136755&text=Me%20gustar%C3%ADa%20solicitar%20informaci%C3%B3n%20para%20un%20viaje%20por%20favor', '_blank');"></span>
                        <span class="icon-instagram"
                            onclick="window.open('https://www.instagram.com/pachamamaspiritmountain/', '_blank');"></span>
                        <span class="icon-pinterest"
                            onclick="window.open('https://www.pinterest.com/spiritpachamama/', '_blank');"></span>
                        <span class="icon-twitter"
                            onclick="window.open('https://twitter.com/PachaSpirit', '_blank');"></span>
                        <span class="icon-youtube"
                            onclick="window.open('https://www.youtube.com/channel/UCR5v94oQX3budGLKTRL4BBQ', '_blank');"></span>
                    </div>
                    <div class="col-12 mt-3">
                        <a href="" target="_blank">Paquetes en Perú</a>
                        <a href="" target="_blank">Tours de caminatas</a>
                        <a href="#popup2" class="open-popup">Solicitar información</a>
                        <a href="https://pachamamaspirit.com/" target="_blank">Visita nuestra web
                        </a>
                        <a href="" target="_blank">Preguntas Frecuentes
                        </a>

                        <a href="" target="_blank">Blog Peru</a>
                        <a href="https://api.whatsapp.com/send?phone=51921136755&text=Me%20gustar%C3%ADa%20solicitar%20informaci%C3%B3n%20para%20un%20viaje%20por%20favor"
                            target="_blank">Entre en conacto con un consultor</i></a>
                    </div>

                    <!---popup reserva-->
                    <div id="popup2" class="popup">
                        <div class="popup-content">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title mx-auto mb-3" id="popupModalLabel">Solicitar información para su viaje</h5>
                                    <div class="linea-2"></div>
                                    <button type="button" class="close-popup" data-dismiss="modal"
                                        aria-label="Fechar">
                                        &times;
                                    </button>
                                </div>
                                <div class="modal-body mt-3">
                                    {{-- <form action="" method="POST">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label for="nombre">Nome: *</label>
                                                <input type="text" class="form-control form-control-sm"
                                                    id="nombre" name="nombre" placeholder="Digite su nombre"
                                                    required>
                                            </div>
                                            <div class="col-md-6">
                                                <label for="email">Email: *</label>
                                                <input type="email" class="form-control form-control-sm"
                                                    id="email" name="email" placeholder="Digite su e-mail"
                                                    required>
                                            </div>
                                            <div class="col-md-6 mt-3">
                                                <label for="telefono">Teléfono:<i
                                                        class="icon-whatsapp text-success"></i> *</label>
                                                <input type="text" class="form-control form-control-sm"
                                                    id="telefono" name="telefono" placeholder="Digite su teléfono"
                                                    required>
                                            </div>
                                            <div class="col-md-6 mt-3">
                                                <label for="fecha">Data da viagem:</label>
                                                <input type="date" class="form-control form-control-sm"
                                                    id="fecha" name="fecha"
                                                    placeholder="Digite la fecha deseada">
                                            </div>
                                            <div class="col-md-6 mt-3">
                                                <label for="nacionalidad">Nacionalidad:</label>
                                                <input type="text" class="form-control form-control-sm"
                                                    id="nacionalidad" name="nacionalidad"
                                                    placeholder="Digite su nacionalidad">
                                            </div>
                                            <div class="col-md-6 mt-3">
                                                <label for="interes">Tipo de viagem:</label>
                                                <select class="form-control form-control-sm" id="interes"
                                                    name="interes">
                                                    <option value="Família">Viajar en familia</option>
                                                    <option value="Amigos">Viajar con amigos</option>
                                                    <option value="Casal">Viajar em casal</option>
                                                    <option value="Grupo">Viajar em grupo</option>
                                                    <option value="Privado">Viajar em privado</option>
                                                </select>
                                            </div>
                                            <div class="form-group mt-3">
                                                <label for="mensaje">Mensagem: *</label>
                                                <textarea class="form-control" id="mensaje" name="mensaje" rows="5"
                                                    placeholder="Escreva sua mensagem aqui..." required></textarea>
                                            </div>
                                        </div>
                                        <div class="modal-footer justify-content-center mt-3">
                                            <button type="submit"
                                                style="background: #0a487c;
                                            color: #fff;
                                            border-radius: 7px;
                                            padding: 0.4em 1.4em; border-none">Enviar</button>
                                        </div>
                                    </form> --}}
                                    <form id="contact-form" name="contact-form" action="{{ route('mensajeIndex') }}" method="POST">
                                        @csrf
                                        <div class="row formTransparent">
                                            <div class="col-md-6">
                                                <div class="md-form mb-4">
                                                    <input type="text" id="name" name="name" class="form-control"
                                                        placeholder="Nombre:" required>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="md-form mb-4">
                                                    <input type="text" id="email" name="email" class="form-control"
                                                        placeholder="Email:" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="md-form mb-4">
                                                    <input type="text" id="phone" name="phone" class="form-control"
                                                        placeholder="Teléfono:" required>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="md-form mb-4">
                                                    <input type="text" id="country" name="country" class="form-control"
                                                        placeholder="Nacionalidad:">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="md-form mb-4">
                                                    <input type="number" id="adults" name="adults" class="form-control"
                                                        placeholder="Adultos:">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="md-form mb-4">
                                                    <select name="tipo" id="tipo" class="form-control md">
                                                        <option selected>Opciones de viaje:</option>
                                                        <option value="familia">Viaje en familia</option>
                                                        <option value="pareja">Viaje en pareja</option>
                                                        <option value="amigos">Con amigos</option>
                                                        <option value="grupo">Viaje en grupo</option>
                                                        <option value="privado">Viaje privado</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mt-2">
                                                <div class="md-form">
                                                    <textarea type="text" placeholder="Escriba acá su mensaje..." id="message" name="message" rows="2"
                                                        class="form-control md-textarea" required></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mt-2">
                                                <div class="text-center">
                                                    <button class="btnTransparent" type="submit">Enviar</button>
                                                </div>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <script>
                        document.addEventListener("DOMContentLoaded", function() {
                            var openButtons = document.querySelectorAll(".open-popup");
                            var closeButtons = document.querySelectorAll(".close-popup");
                            var popups = document.querySelectorAll(".popup");

                            openButtons.forEach(function(button) {
                                button.addEventListener("click", function(e) {
                                    e.preventDefault();
                                    var target = this.getAttribute("href");
                                    document.querySelector(target).style.display = "flex";
                                });
                            });

                            closeButtons.forEach(function(button) {
                                button.addEventListener("click", function() {
                                    var popup = this.closest(".popup");
                                    popup.style.display = "none";
                                });
                            });

                            // Cerrar el popup al hacer clic fuera de él
                            popups.forEach(function(popup) {
                                popup.addEventListener("click", function(e) {
                                    if (e.target === this) {
                                        this.style.display = "none";
                                    }
                                });
                            });
                        });
                    </script>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="container mt-4">
            <div class="row">
                <div class="col-12 text-center" style="color: #fff">
                    <p>© <?php $ano_actual = date('Y');
                    echo $ano_actual;
                    ?> Pacha Mama Spirit</p>
                </div>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </script>
</body>

</html>
