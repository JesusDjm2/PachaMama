@extends('layouts.apppt')
@php $titulo="Puerto Maldonado — O Coração da Amazônia Peruana | Pacha Mama Spirit" @endphp
@php $descripcion="Explore Puerto Maldonado e a região de Madre de Dios no Peru: a Reserva Nacional Tambopata, o mágico Lago Sandoval, o Parque Nacional do Manu e a mais pura biodiversidade amazônica." @endphp
@php $keywords="Puerto Maldonado, floresta amazônica peruana, madre de dios peru, tambopata peru, lago sandoval, ecoturismo peru" @endphp
@php $img="https://pachamamaspirit.com/img/panoramico/puerto-maldonado-peru.webp" @endphp
@section('titulo', $titulo)
@include('layouts.metasblogs')
@section('content')
    <div class="puerto">
        <div class="container d-flex align-items-center justify-content-center vh-100">
            <div class="row">
                <h1 class="h1-destinos">O Coração da Floresta Amazônica</h1>
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
                                <a>Puerto Maldonado</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10">
                    <h2 class="text-center">"Madre de Dios"</h2>
                    <div class="accordion accordion-flush accordion-destiny" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    Madre de Dios, terra da biodiversidade incomparável
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        Localizada no sudeste do Peru, a região de Madre de Dios guarda a natureza em seu estado mais puro e selvagem.
                                        Árvores centenárias gigantescas que tocam as nuvens, bandos de macacos cruzando velozmente o dossel da floresta
                                        e o canto melodioso de araras coloridas voando aos pares sobre os rios Madre de Dios e Tambopata.<br><br>
                                        A porta de entrada para esta imensidão verde é a calorosa cidade de <strong>Puerto Maldonado</strong>, capital
                                        do departamento. Dela partem as lanchas a motor para os mais exclusivos lodges ecológicos imersos na mata,
                                        oferecendo conforto e experiências autênticas de ecoturismo e desconexão.<br><br>
                                        Madre de Dios abriga algumas das unidades de conservação mais célebres do planeta, incluindo o
                                        <strong>Parque Nacional do Manu</strong> (Reserva da Biosfera e Patrimônio Natural da Humanidade pela UNESCO)
                                        e a espetacular <strong>Reserva Nacional Tambopata</strong>.<br><br>
                                        <img src="{{ asset('img/galeria/biodiversidad-de-la-selva-peruana-madre-de-dios.webp') }}"
                                            width="100%" alt="Biodiversidade da floresta amazônica em Madre de Dios"
                                            loading="lazy"><br><br>
                                        <i>Foto: Biodiversidade intocada nos rios e florestas de Madre de Dios</i>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    O que fazer e vivenciar em Puerto Maldonado
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        A aventura amazônica começa logo ao desembarcar no aeroporto Padre Aldamiz e navegar pelas águas barrentas e
                                        vitalizantes do rio. As principais atividades incluem:
                                    </p>
                                    <ul>
                                        <li><strong>Caminhadas em passarelas suspensas (Canopy Walkways):</strong> Pontes pênseis construídas a mais de 30 metros de altura para observar a vida no topo das árvores e aves exóticas.</li>
                                        <li><strong>Safáris noturnos em barco e trilha:</strong> Expedições guiadas por biólogos para avistar jacarés-pretos, corujas, rãs arborícolas fluorescentes, tarântulas e insetos fascinantes.</li>
                                        <li><strong>Observação de araras em barreiros de argila (Colpas):</strong> Um dos espetáculos visuais mais emblemáticos da Terra, onde centenas de araras, papagaios e periquitos se reúnem ao amanhecer para ingerir argila rica em sais minerais.</li>
                                        <li><strong>Convivência com comunidades nativas:</strong> Visita a povos ancestrais como os Ese Eja, aprendendo sobre medicina tradicional com plantas da mata, arco e flecha e cosmologia amazônica.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    Principais Atrativos Turísticos
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <h3>O Lago Sandoval</h3>
                                    <p>
                                        Uma joia em forma de ferradura encravada na Reserva Tambopata. Em suas águas tranquilas cercadas por palmeiras
                                        de buriti (aguajes), navega-se silenciosamente em canoas a remo para admirar uma família residente de
                                        <strong>ariranhas gigantes</strong> (lontras gigantes de rio em perigo de extinção), jacarés, macacos-uivadores
                                        e a curiosa ave pré-histórica catingueira (hoatzin).
                                    </p>

                                    <h3>Reserva Nacional Tambopata</h3>
                                    <p>
                                        Com mais de 274.000 hectares, protege bacias hidrográficas intocadas e registra recordes mundiais de diversidade
                                        em borboletas, aves e árvores por hectare. As colpas de argila Chuncho e Colorado são pontos de referência mundial.
                                    </p>

                                    <h3>Parque Nacional Bahuaja Sonene</h3>
                                    <p>
                                        Onde a selva úmida se encontra com as savanas de cerrado, sendo o único refúgio no Peru para espécies raras como
                                        o lobo-guará e o cervo-do-pantanal.
                                    </p>

                                    <h3>Ilha dos Macacos (Isla de los Monos)</h3>
                                    <p>
                                        Uma ilhota no rio Madre de Dios dedicada à reabilitação e proteção de espécies de primatas como o macaco-aranha,
                                        macaco-prego e o sagui-pigmeu.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFour" aria-expanded="false"
                                    aria-controls="flush-collapseFour">
                                    Gastronomia Típica da Selva Peruana
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        A gastronomia de Puerto Maldonado é uma celebração de ingredientes silvestres frescos e peixes de rio:
                                    </p>
                                    <ul>
                                        <li><strong>Juane:</strong> Arroz temperado com açafrão-da-terra e especiarias com pedaços de galinha caipira e ovos cozidos, cuidadosamente embrulhado em folhas de bijao e cozido no vapor.</li>
                                        <li><strong>Tacacho con Cecina:</strong> Banana-verde assada e amassada com pequenos torresmos artesanais, acompanhada de carne suína defumada e linguiça da selva.</li>
                                        <li><strong>Patarashca:</strong> Filé de peixe amazônico (como o tambaqui ou paiche) marinado com ervas aromáticas da floresta e assado sobre brasas envolvido em folhas naturais.</li>
                                        <li><strong>Castanhas da Amazônia e Frutas Exóticas:</strong> Puerto Maldonado é a capital peruana da castanha-do-brasil. Sucos refrescantes de camu-camu (altíssimo teor de vitamina C), copoazú e maracujá selvagem completam a experiência.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFive" aria-expanded="false"
                                    aria-controls="flush-collapseFive">
                                    Flora e Fauna Exuberante da Amazônia
                                </button>
                            </h2>
                            <div id="flush-collapseFive" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        Madre de Dios é o santuário da onça-pintada (jaguar), da anta brasileira, do tamanduá-bandeira e de mais de 1.000
                                        espécies catalogadas de aves. Árvores colossais como a castanheira e a samaúma (lupuna) chegam a viver mais de 500
                                        anos e ultrapassar 60 metros de altura, sustentando um ecossistema complexo e sagrado que inspira respeito e admiração.
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
