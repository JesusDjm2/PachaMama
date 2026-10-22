@extends('layouts.apppt')
@php $titulo="Arequipa — A Cidade Branca e o Cânion do Colca | Pacha Mama Spirit" @endphp
@php $descripcion="Conheça Arequipa, a Cidade Branca do Peru: arquitetura colonial em pedra sillar vulcânica, vulcão Misti, o impressionante Cânion do Colca e gastronomia única." @endphp
@php $keywords="Arequipa, a cidade branca, turismo em arequipa, cânion do colca, vulcão misti, mosteiro santa catalina, mirador de yanahuara" @endphp
@php $img="https://pachamamaspirit.com/img/panoramico/la-ciudad-blanca-de-arequipa.webp" @endphp
@section('titulo', $titulo)
@include('layouts.metasblogs')
@section('content')
    <div class="arequipa">
        <div class="container d-flex align-items-center justify-content-center vh-100">
            <div class="row">
                <h1 class="h1-destinos">A Cidade Branca de Arequipa</h1>
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
                                    href="{{ route('pt.destinos') }}">Destinos</a> / <a>Arequipa</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10">
                    <h2 class="text-center">"Arequipa"</h2>
                    <div class="accordion accordion-flush accordion-destiny" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    Por que é chamada de "Cidade Branca"?
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Arequipa é carinhosamente conhecida como a <strong>Cidade Branca</strong> devido à sua arquitetura singular construída com uma rocha vulcânica clara denominada <strong>sillar</strong>. Essa pedra porosa e resistente, formada pela compactação de cinzas piroclásticas dos vulcões vizinhos, passou a ser extraída das pedreiras locais no final do século XVI como excelente solução estrutural e antissísmica.<br><br>
                                    Caminhando pelo centro histórico, nota-se o brilho reluzente do sillar nas fachadas de igrejas, conventos, arcos triunfais, casarões senhoriais, museus e restaurantes típicos, conferindo à cidade uma identidade estética inconfundível aos pés do vulcão Misti.<br><br>
                                    <img src="{{ asset('img/panoramico/la-ciudad-blanca-de-arequipa.webp') }}"
                                        alt="Catedral de Arequipa e o Vulcão Misti ao fundo" width="100%" loading="lazy">
                                    <i>Foto: Catedral de Arequipa e o imponente Vulcão Misti</i>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    Arequipa, Patrimônio Cultural da Humanidade
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    O Centro Histórico de Arequipa foi tombado pela UNESCO como Patrimônio Cultural da Humanidade no ano 2000, graças à genial fusão entre as técnicas construtivas europeias e a criatividade dos mestres canteiros indígenas andinos. Emoldurada por uma fértil campiña agrícola e guardada por três vulcões monumentais (Misti, Chachani e Pichu Pichu), Arequipa é a segunda cidade mais importante e populosa do Peru, com mais de um milhão de habitantes.<br><br>
                                    Fundada em 15 de agosto de 1540, a cidade orgulha-se de sua forte identidade regional, expressa em suas acolhedoras <em>picanterías tradicionais</em> (onde se saboreiam o emblemático rocoto relleno, o pastel de papa e o chupe de camarones), seus festivais folclóricos e sua arte barroco-mestiça.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFour" aria-expanded="false"
                                    aria-controls="flush-collapseFour">
                                    Arequipa: Resumo Histórico
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Antes da chegada dos incas por volta de 1170, a região era habitada por povos agrícolas e pastores como os collaguas, cabanas e yarabayas. Em 1540, o conquistador espanhol Garcí Manuel de Carbajal fundou a "Villa Hermosa de Nuestra Señora de la Asunción de Arequipa" às margens do rio Chili.<br><br>
                                    Durante os séculos coloniais, Arequipa floresceu graças à agricultura irrigada de vinhedos, oliveiras e ao comércio de lã de alpaca e minérios com o Alto Peru (atual Bolívia). Na luta pela emancipação, destacou-se pela bravura de heróis patriotas como o brigadeiro Mateo Pumacahua e o poeta Mariano Melgar. Hoje, consolida-se como líder econômica, universitária e turística do sul peruano.<br><br>
                                    <img src="{{ asset('img/galeria/historia-sobre-arequipa-Perú.webp') }}" width="100%"
                                        alt="Cultura e história viva em Arequipa" loading="lazy">
                                    <i>Foto: Tradições e cultura viva em Arequipa</i>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    Principais Lugares Turísticos em Arequipa
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <h3>1. Mosteiro de Santa Catalina</h3>
                                    Considerado uma verdadeira "cidade dentro da cidade", este convento de clausura dominicano fundado em 1579 possui mais de 20.000 metros quadrados. Seus claustros decorados em vibrantes tons de azul cobalto e ocre terracota, suas ruelas de paralelepípedos floridas e suas celas históricas transportam o visitante diretamente ao século XVI.<br><br>
                                    <img src="{{ asset('img/galeria/Monasterio-de-Santa-Catalina-Arequipa.webp') }}"
                                        width="100%" alt="Claustro do Mosteiro de Santa Catalina em Arequipa" loading="lazy">
                                    <i>Foto: Mosteiro de Santa Catalina, Arequipa</i><br><br>

                                    <h3>2. Cânion do Colca e o Mirante Cruz del Cóndor</h3>
                                    Com mais de 3.400 metros de profundidade, o Cânion do Colca é duas vezes mais profundo que o Grand Canyon americano e um dos atrativos naturais mais famosos da América do Sul. O ponto alto da expedição é o mirante <strong>Cruz del Cóndor</strong>, de onde se contempla o majestoso voo ascendente do condor-dos-andes sob as correntes térmicas matinais, ladeado por vilarejos tradicionais como Chivay e Yanque.<br><br>
                                    <img src="{{ asset('img/galeria/COLCA-canyon-AREQUIPA--pacha-mama-Spirit.webp') }}"
                                        alt="Cânion do Colca e o voo do Condor" loading="lazy" width="100%">
                                    <i>Foto: Mirante Cruz del Cóndor no Cânion do Colca</i><br><br>

                                    <h3>3. Mirante de Yanahuara</h3>
                                    Localizado no charmoso bairro boêmio de Yanahuara, a cerca de 15 minutos da Plaza de Armas, este mirante oferece a vista clássica de Arequipa emoldurada por arcos de sillar gravados com poemas arequipenhos, tendo o vulcão Misti como guardião no horizonte.<br><br>
                                    <img src="{{ asset('img/galeria/mirador-de-Yanahuara-Arequipa.webp') }}" width="100%"
                                        alt="Mirante de Yanahuara com vista para o vulcão Misti" loading="lazy">
                                    <i>Foto: Arcos de Yanahuara e o vulcão Misti</i><br><br>

                                    <h3>4. O Vulcão Misti (5.822 m)</h3>
                                    Símbolo máximo de Arequipa, este vulcão imponente é uma das trilhas de alta montanha mais cobiçadas pelos amantes de trekking e montanhismo na América do Sul, permitindo acampar sob o céu estrelado e alcançar a borda da cratera ativa.<br><br>

                                    <h3>5. A Rota do Sillar (Canteras de Añashuayco)</h3>
                                    Uma excursão fascinante pelas gargantas naturais onde os mestres cortadores continuam talhando manualmente os blocos de sillar branco, com esculturas monumentais esculpidas diretamente nas paredes de pedra.<br><br>

                                    <h3>6. Plaza de Armas e a Basílica Catedral</h3>
                                    Considerada uma das praças mais belas do continente, cercada por portais coloniais em sillar e pela monumental fachada neoclássica da Catedral, com seu museu de arte sacra e tesouros em prata trabalhada.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseSix" aria-expanded="false"
                                    aria-controls="flush-collapseSix">
                                    Festividades e Datas Comemorativas em Arequipa
                                </button>
                            </h2>
                            <div id="flush-collapseSix" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <h3>1. Festa da Virgem de Chapi (1º de maio)</h3>
                                    A maior peregrinação religiosa do sul peruano, onde dezenas de milhares de devotos caminham pelo deserto rochoso até o santuário da Virgem de Chapi em Polobaya.<br><br>

                                    <h3>2. Aniversário da Fundação de Arequipa (15 de agosto)</h3>
                                    A comemoração mais esperada do ano, com o tradicional Corso da Amizade (grande desfile de danças folclóricas), festivais de gastronomia nas picanterías e serenatas musicais pela cidade.<br><br>

                                    <h3>3. Festivais Gastronômicos e Carnaval Arequipenho</h3>
                                    Celebrações repletas de música de cordas, coplas tradicionais e degustações de pratos típicos como o solterito de queso, adobo arequipeño aos domingos e a refrescante chicha de jora.
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
