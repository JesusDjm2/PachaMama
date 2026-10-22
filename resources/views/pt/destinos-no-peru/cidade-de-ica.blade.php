@extends('layouts.apppt')
@php $titulo="Ica — A Terra do Sol Eterno e o Oásis de Huacachina | Pacha Mama Spirit" @endphp
@php $descripcion="Descubra Ica no Peru: o impressionante oásis de Huacachina, passeios de buggy e sandboard nas dunas, a tradicional Rota do Pisco e os enigmas das Linhas de Nazca." @endphp
@php $keywords="Ica, oásis de huacachina, rota do pisco, linhas de nazca, dunas de ica, turismo em ica peru" @endphp
@php $img="https://pachamamaspirit.com/img/panoramico/huacachina-ica-peru-tour.webp" @endphp
@section('titulo', $titulo)
@include('layouts.metasblogs')
@section('content')
    <div class="ica">
        <div class="container d-flex align-items-center justify-content-center vh-100">
            <div class="row">
                <h1 class="h1-destinos">Ica, a Terra do Sol Eterno</h1>
            </div>
        </div>
    </div>
    <section class="destinations-peru-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="details">
                        <div class="location">
                            <p><a href="{{ route('pt.index') }}">Início</a> / <a
                                    href="{{ route('pt.destinos') }}">Destinos</a> / <a>Ica</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10">
                    <h2 class="text-center">"Ica"</h2>
                    <div class="accordion accordion-flush accordion-destiny" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    Ica, a cidade do sol eterno e berço do Pisco
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Ica é carinhosamente conhecida como a <strong>terra do sol eterno</strong>, pois nela raramente se veem dias cinzentos ou chuvosos. Localizada a apenas cerca de 4 horas ao sul da capital Lima pela Rodovia Pan-Americana, esta região ensolarada é um dos refúgios favoritos tanto de peruanos quanto de viajantes do mundo inteiro.<br><br>
                                    As imensas dunas de areia dourada de seus desertos abrigam o espetacular oásis natural da <strong>Lagoa de Huacachina</strong>, cercado por palmeiras e eucaliptos como em um cenário de conto de fadas. Além disso, os vales férteis de Ica concentram os vinhedos e alambiques mais tradicionais do Peru, onde se produz a bebida-símbolo nacional: o legítimo Pisco peruano.<br><br>
                                    <img src="{{ asset('img/panoramico/huacachina-ica-peru-tour.webp') }}" width="100%"
                                        alt="Oásis de Huacachina em Ica, Peru" loading="lazy">
                                    <i>Foto: Oásis natural de Huacachina entre as dunas de Ica</i>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    História Milenar e Origens de Ica
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Os primeiros povoadores da região remontam a mais de 9.000 anos. O famoso “Homem de Paracas”, descoberto nas pampas de Santo Domingo, data de aproximadamente 6.870 a.C. e é um dos horticultores mais antigos das Américas.<br><br>
                                    Duas das civilizações pré-incas mais brilhantes floresceram nestes vales: a <strong>Cultura Paracas</strong> (famosa por seus mantos têxteis policromáticos perfeitamente conservados e cirurgias cranianas de trepanação) e a <strong>Cultura Nazca</strong> (criadora dos enigmáticos geoglifos no deserto). Em 1563, o capitão espanhol Jerónimo Luis de Cabrera fundou a cidade com o nome de Villa de Valverde de Ica, tornando-se desde então um centro de prósperas fazendas vinícolas e algodoeiras.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    Ica, o Autêntico Berço do Pisco
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    O Pisco nasceu nos vales da região de Ica no final do século XVI, quando os produtores começaram a destilar o mosto fresco de uvas aromáticas e não aromáticas (como a Quebranta, Torontel, Moscatel e Itália). Essa aguardente límpida e nobre era embarcada pelo porto litorâneo de Pisco com destino a Lima e a todas as capitanias da América colonial.<br><br>
                                    Documentos históricos do século XVII já registravam a qualidade insuperável do destilado de uvas de Ica. Hoje, o Pisco peruano possui Denominação de Origem internacionalmente reconhecida em dezenas de países e acumula medalhas de ouro nos mais exigentes concursos mundiais de destilados.<br><br>
                                    <img src="{{ asset('img/galeria/la-comercializacion-del-pisco.webp') }}"
                                        width="100%" alt="Alambiques e vinhedos tradicionais em Ica" loading="lazy">
                                    <i>Foto: Destilação tradicional de Pisco em vinícola de Ica</i>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFive" aria-expanded="false"
                                    aria-controls="flush-collapseFive">
                                    Principais Atrações Turísticas em Ica
                                </button>
                            </h2>
                            <div id="flush-collapseFive" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <h3>Oásis de Huacachina</h3>
                                    Uma lagoa natural de águas esmeralda encravada no coração das dunas mais altas da América do Sul. É o epicentro da adrenalina: passeios em carros tubulares (buggies) em alta velocidade pelas encostas de areia e descidas emocionantes de sandboard.<br><br>

                                    <h3>As Enigmáticas Linhas de Nazca</h3>
                                    Geoglifos pré-incas gigantescos gravados na planície desértica, retratando animais como o beija-flor, o macaco, a aranha e a misteriosa figura com olhos salientes conhecida como o "Astronauta". O sobrevoo em monomotor a partir do aeródromo de Nazca ou Ica proporciona uma das visões arqueológicas mais impressionantes do mundo.<br><br>
                                    <img src="{{ asset('img/galeria/Overflight-of-the-Nazca-lines.webp') }}" loading="lazy"
                                        width="100%" alt="Sobrevoo nas Linhas de Nazca">
                                    <i>Foto: Sobrevoo sobre os geoglifos de Nazca</i><br><br>

                                    <h3>Cânion de los Perdidos</h3>
                                    Uma formação geológica profunda de 600 metros de desfiladeiro esculpida pela erosão hídrica e eólica no meio do deserto de Ocucaje, com pequenas lagoas no fundo e fósseis de baleias e tubarões pré-históricos.<br><br>
                                    <img src="{{ asset('img/galeria/canon-de-los-pasos-perdidos.webp') }}" width="100%"
                                        loading="lazy" alt="Cânion de los Perdidos em Ica">
                                    <i>Foto: Cânion de los Perdidos, Ica</i><br><br>

                                    <h3>Santuário do Senhor de Luren</h3>
                                    Padroeiro fervoroso da cidade, cujo santuário moderno atrai centenas de milhares de peregrinos nas procissões de outubro.<br><br>

                                    <h3>A Rota das Vinícolas e Degustação de Pisco</h3>
                                    Visitas guiadas a vinhedos históricos (como Tacama, Vista Alegre e a secular Fazenda La Caravedo), permitindo caminhar entre parreiras, conhecer o processo de destilação em alambiques de cobre e desfrutar de catas harmonizadas.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseSix" aria-expanded="false"
                                    aria-controls="flush-collapseSix">
                                    Atividades e Festividades em Ica
                                </button>
                            </h2>
                            <div id="flush-collapseSix" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <h3>Festival Internacional da Vindima de Ica (FIVI)</h3>
                                    Realizado todo mês de março, celebra a colheita das uvas com pisa tradicional das uvas, coroação da Rainha da Vindima, shows de música crioula, feiras gastronômicas e degustação da tradicional <em>cachina</em>.<br><br>

                                    <h3>Festividade do Senhor de Luren</h3>
                                    Comemorada na terceira segunda-feira de outubro com procissões noturnas pelas ruas centrais de Ica enfeitadas com tapetes de flores naturais.
                                </div>
                            </div>
                        </div>
                    </div>
                    @include('pt.destinos-no-peru._tours-by-location')
                </div>
                <div class="space"></div>
            </div>
        </div>
    </section>
@endsection
