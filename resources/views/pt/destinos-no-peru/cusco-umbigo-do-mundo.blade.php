@extends('layouts.apppt')
@php $titulo="Cusco — Umbigo do Mundo e Capital Imperial dos Incas | Pacha Mama Spirit" @endphp
@php $descripcion="Descubra Cusco no Peru: a lendária capital do Império Inca, o Vale Sagrado, Sacsayhuamán, a Montanha de 7 Cores e a majestosa cidadela de Machu Picchu." @endphp
@php $keywords="Cusco, Cuzco, umbigo do mundo, machu picchu peru, vale sagrado cusco, sacsayhuaman, turismo em cusco peru" @endphp
@php $img="https://pachamamaspirit.com/img/panoramico/cusco-ciudad-imperial.webp" @endphp
@section('titulo', $titulo)
@include('layouts.metasblogs')
@section('content')
    <div class="cusco">
        <div class="container d-flex align-items-center justify-content-center vh-100">
            <div class="row">
                <h1 class="h1-destinos">Cusco Imperial</h1>
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
                                    href="{{ route('pt.destinos') }}">Destinos</a> /
                                <a>Cusco</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10">
                    <h2 class="text-center">"Cusco"</h2>
                    <div class="accordion accordion-flush accordion-destiny" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    Cusco: O Umbigo do Mundo e Capital dos Incas
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Cusco foi a capital do glorioso Império Inca (Tawantinsuyu). Por sua grandeza arquitetônica e monumental,
                                    é consagrada internacionalmente como a <strong>"Capital Arqueológica da América"</strong> e Patrimônio Cultural da
                                    Humanidade pela UNESCO.<br><br>
                                    Seu nome deriva do termo quéchua original <em>Qosqo</em> ou <em>Qusqu</em>, que significa literalmente "umbigo" ou "centro".
                                    Segundo a cosmologia andina, este era o ponto sagrado de convergência onde se encontravam os três mundos da existência:
                                    o mundo subterrâneo dos ancestrais (<em>Uku Pacha</em>), o mundo terreno visível dos vivos (<em>Kay Pacha</em>)
                                    e o mundo celestial dos deuses e dos astros (<em>Hanan Pacha</em>).<br><br>
                                    Caminhar por suas ruas de pedra milenares é sentir pulsar a história viva de uma das civilizações mais brilhantes que a Terra já conheceu.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    História Imperial, Mitos e Arquitetura Inca
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    A lenda mítica relata que o deus Sol (Inti) enviou seus filhos <strong>Manco Cápac</strong> e <strong>Mama Ocllo</strong>,
                                    surgidos das águas do Lago Titicaca, com uma haste de ouro para fundar a capital no local onde a vara afundasse na terra — o que
                                    ocorreu na colina de Huanacaure, no vale de Cusco.<br><br>
                                    Sob o reinado do grande imperador <strong>Pachacútec</strong> no século XV, a cidade foi redesenhada em escala monumental com o
                                    traçado urbano no formato sagrado de um <strong>Puma</strong> (símbolo de sabedoria e força terrena), tendo a imponente fortaleza
                                    de Sacsayhuamán como a cabeça do felino.<br><br>
                                    A engenharia lítica inca espanta até hoje os maiores especialistas do mundo: blocos ciclópicos de andesito e diorito que pesam
                                    dezenas de toneladas, talhados e encaixados com precisão milimétrica sem o uso de qualquer argamassa, resistindo a todos os grandes
                                    terremotos da história andina.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    Principais Atrativos no Centro Histórico de Cusco
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <ul>
                                        <li><strong>Plaza de Armas e a Catedral Basílica:</strong> O coração pulsante da cidade, cercado por imponentes arcadas coloniais de pedra e duas das mais ricas igrejas renascentistas e barrocas do continente.</li>
                                        <li><strong>Qorikancha (Templo do Sol):</strong> O templo mais sagrado de todo o Império Inca, cujas paredes eram forradas com espessas placas de ouro maciço dedicadas ao Sol. Sobre suas bases líticas monumentais os espanhóis ergueram o Convento de Santo Domingo.</li>
                                        <li><strong>Bairro Tradicional de San Blas:</strong> Conhecido como o bairro dos artesãos e artistas plásticos, com vielas estreitas e empinadas, ateliês de escultura, cafés charmosos e mirantes panorâmicos sobre os telhados avermelhados de Cusco.</li>
                                        <li><strong>Pedra dos Doze Ângulos (Hatun Rumiyoc):</strong> Famoso exemplo do virtuosismo lítico incaico, encaixada com tanta exatidão no antigo palácio de Inca Roca que é impossível introduzir uma folha de papel entre suas junções.</li>
                                        <li><strong>Complexo Arqueológico de Sacsayhuamán:</strong> Majestosa fortaleza cerimonial no topo da montanha que domina Cusco, construída com blocos que chegam a pesar mais de 120 toneladas.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFour" aria-expanded="false"
                                    aria-controls="flush-collapseFour">
                                    O Vale Sagrado dos Incas e a Maravilha de Machu Picchu
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        A viagem a Cusco se estende pelas férteis margens do rio Vilcanota/Urubamba no lendário <strong>Vale Sagrado dos Incas</strong>:
                                    </p>
                                    <ul>
                                        <li><strong>Pisac:</strong> Famoso por seu colorido mercado de artesanato andino e seus colossais terraços agrícolas esculpidos nas encostas das montanhas.</li>
                                        <li><strong>Ollantaytambo:</strong> A última "cidade inca viva", que preserva o traçado urbano original do império e uma colossal fortaleza cerimonial onde os incas venceram uma importante batalha contra os espanhóis.</li>
                                        <li><strong>Salineras de Maras e os Terraços Circulares de Moray:</strong> Milhares de piscinas naturais de sal operadas desde tempos pré-incas e os impressionantes anfiteatros concêntricos de Moray, utilizados como laboratório de aclimatação agrícola.</li>
                                        <li><strong>Santuário Histórico de Machu Picchu:</strong> Uma das Novas 7 Maravilhas do Mundo Moderno. Aninhada entre picos cobertos de vegetação subtropical na borda da selva alta, Machu Picchu é a obra-prima máxima da harmonia entre arquitetura sagrada e natureza imponente.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFive" aria-expanded="false"
                                    aria-controls="flush-collapseFive">
                                    Trilhas de Trekking e Aventura nos Andes
                                </button>
                            </h2>
                            <div id="flush-collapseFive" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        Para os amantes do trekking e das paisagens andinas de alta montanha, Cusco oferece algumas das rotas mais famosas do mundo:
                                    </p>
                                    <ul>
                                        <li><strong>Trilha Inca Clássica (Camino Inca):</strong> 4 dias de caminhada por calçamentos incas originais, cruzando passos andinos e florestas nubladas até adentrar Machu Picchu pela Porta do Sol (Inti Punku).</li>
                                        <li><strong>Trilha Salkantay:</strong> Considerada pela National Geographic uma das 25 melhores trilhas do planeta, cruzando geleiras a mais de 4.600 metros de altitude antes de descer para os vales de café e frutas tropicais.</li>
                                        <li><strong>Montanha de Sete Cores (Vinicunca):</strong> Uma formação geológica espetacular a mais de 5.000 metros de altitude cujos minerais criam listras vibrantes em arco-íris contra o céu andino.</li>
                                        <li><strong>Lagoa Humantay:</strong> Lagoa de águas azul-turquesa cristalinas alimentada pelos degelos da montanha sagrada Salkantay.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseSix" aria-expanded="false"
                                    aria-controls="flush-collapseSix">
                                    Festividades, Tradições Vivas e Gastronomia Andina
                                </button>
                            </h2>
                            <div id="flush-collapseSix" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        Cusco mantém viva a alma de seus antepassados através de celebrações como o magnífico <strong>Inti Raymi</strong> (Festa do Sol),
                                        realizada anualmente em 24 de junho na esplanada de Sacsayhuamán com centenas de atores trajados à moda imperial inca.<br><br>
                                        Sua culinária reúne ingredientes andinos autênticos domesticados há milênios: o milho gigante de Urubamba com queijo fresco,
                                        a truta fresca dos rios andinos, o tradicional cuy chactado crocante, a nutritiva quinoa real e mais de 3.000 variedades
                                        nativas de batatas peruanas.
                                    </p>
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
