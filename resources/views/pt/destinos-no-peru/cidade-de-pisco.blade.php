@extends('layouts.apppt')
@php $titulo="Pisco — Berço da Bandeira e Porta da Liberdade | Pacha Mama Spirit" @endphp
@php $descripcion="Descubra a histórica cidade de Pisco no Peru: as espetaculares Ilhas Ballestas, a Reserva Nacional de Paracas, o Candelabro, Tambo Colorado e a tradição do autêntico pisco peruano." @endphp
@php $keywords="Pisco, cidade de pisco, turismo em pisco peru, ilhas ballestas, reserva de paracas, pisco peruano" @endphp
@php $img="https://pachamamaspirit.com/img/panoramico/pisco-city-tourism.webp" @endphp
@section('titulo', $titulo)
@include('layouts.metasblogs')
@section('content')
    <div class="pisco">
        <div class="container d-flex align-items-center justify-content-center vh-100">
            <div class="row">
                <h1 class="h1-destinos">A Cidade de Pisco</h1>
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
                                <a>Pisco</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10">
                    <h2 class="text-center">"Pisco"</h2>
                    <div class="accordion accordion-flush accordion-destiny" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    Pisco, berço da bandeira e porta da liberdade
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <div class="text-center">
                                        <i>Pisco, berço da bandeira e porta da liberdade! Todos os anos, o desembarque da
                                            expedição libertadora sob o comando do General Don José de San Martín na Baía de
                                            Paracas é celebrado com grande fervor patriótico. Pois foi em Pisco que nasceu a
                                            liberdade do Peru...</i><br><br>
                                    </div>
                                    <p>
                                        O desembarque do General José de San Martín em Paracas, próximo ao porto de Pisco,
                                        em 8 de setembro de 1820, é um dos marcos mais decisivos na história da emancipação
                                        sul-americana. A expedição libertadora contou com mais de 4.000 combatentes
                                        argentinos, chilenos e voluntários peruanos comprometidos em selar a independência
                                        do continente.<br><br>
                                        Foi também nas areias e horizontes de Pisco que nasceu a primeira bandeira do Peru,
                                        inspirada, segundo a tradição e o decreto do próprio Libertador, nas cores vermelha e
                                        branca das <em>parihuanas</em> (flamingos andinos) que sobrevoavam a costa da Baía de Paracas.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    História e Significado da Província de Pisco
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <h3>O que significa a palavra "Pisco"?</h3>
                                    <p>
                                        A palavra <strong>Pisco</strong> tem origem no vocábulo quéchua <em>pishqu</em> ou <em>pisqu</em>,
                                        que significa "pássaro" ou "ave". A região sempre se destacou pela impressionante abundância de aves
                                        marinhas que habitam sua costa e suas ilhas rochosas.<br><br>
                                        Antes da chegada dos incas e dos conquistadores espanhóis, este território floresceu com as
                                        avançadas culturas pré-colombianas <strong>Paracas</strong> e <strong>Nazca</strong>, célebres por seus
                                        mantos têxteis refinados, cerâmicas policromadas e rituais funerários. Durante a colônia, o porto de
                                        Pisco converteu-se na principal via de escoamento marítimo das aguardentes de uva produzidas nos vales
                                        vizinhos, dando nome definitivo à famosa bebida destilada peruana.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    Pisco como Destino Turístico
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        Localizada a cerca de 230 km ao sul de Lima, a província de Pisco é uma das escapadas mais procuradas
                                        da costa peruana. Sua infraestrutura conecta perfeitamente os encantos naturais da Baía de Paracas, as
                                        águas ricas da corrente de Humboldt e os sítios arqueológicos do vale.<br><br>
                                        A cidade divide-se entre "Pisco Pueblo" (com seu centro histórico, catedral, praça principal e comércio)
                                        e "Pisco Playa", debruçada sobre o Oceano Pacífico. É a base ideal para quem deseja combinar passeios
                                        de barco com observação de vida marinha, passeios ecológicos no deserto e rica culinária marinha costeira.<br><br>
                                        <img src="{{ asset('img/galeria/turists-places-in-Pisco.webp') }}"
                                            alt="Ilhas Ballestas em Pisco Paracas Peru" width="100%" loading="lazy">
                                        <i>Foto: Formações rochosas e fauna nas Ilhas Ballestas</i>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFive" aria-expanded="false"
                                    aria-controls="flush-collapseFive">
                                    Principais Atrativos e Atividades Turísticas em Pisco
                                </button>
                            </h2>
                            <div id="flush-collapseFive" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <h3>As Ilhas Ballestas</h3>
                                    <p>
                                        Conhecidas internacionalmente como as "Galápagos do Peru", as <strong>Ilhas Ballestas</strong> abrigam
                                        uma densidade espetacular de lobos-marinhos de um e dois pelos, pinguins-de-humboldt ameaçados de extinção,
                                        pelicanos peruanos, atobás e milhares de aves guaneras. Os passeios saem em lanchas rápidas do píer turístico de
                                        El Chaco em Paracas.
                                    </p>

                                    <h3>O Geoglifo do Candelabro</h3>
                                    <p>
                                        Enigmática figura de mais de 180 metros de comprimento esculpida nas encostas de areia da península de Paracas.
                                        Visível apenas a partir do mar, sua origem e propósito exato permanecem cercados de mistério — ligando-se tanto às
                                        Linhas de Nazca quanto a antigas referências de navegação costeira.
                                    </p>

                                    <h3>Reserva Nacional de Paracas</h3>
                                    <p>
                                        Um dos ecossistemas desértico-marinhos mais impressionantes da América do Sul. Suas praias de areia avermelhada,
                                        como a Praia Vermelha (Playa Roja), falésias douradas e a formação rochosa da Catedral proporcionam paisagens
                                        inesquecíveis para fotografia e ecoturismo.
                                    </p>

                                    <h3>Complexo Arqueológico de Tambo Colorado</h3>
                                    <p>
                                        Situado a cerca de 40 km de Pisco no vale do rio Pisco, é um dos centros administrativos e militares incas mais
                                        bem preservados da costa peruana, conservando ainda grande parte de suas pinturas murais originais em tons de
                                        vermelho, ocre e amarelo.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseSix" aria-expanded="false"
                                    aria-controls="flush-collapseSix">
                                    O Legítimo Pisco Peruano e Suas Variedades
                                </button>
                            </h2>
                            <div id="flush-collapseSix" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p>
                                        O Pisco é a bebida destilada nacional do Peru, declarada Patrimônio Cultural da Nação com rigorosa
                                        Denominação de Origem. Ao contrário de outras aguardentes, o autêntico pisco peruano é destilado em alambiques
                                        de cobre sem adição de água, retificações aromáticas ou envelhecimento em madeira, preservando a pureza máxima
                                        dos aromas da uva pisqueira.
                                    </p>
                                    <h3>Classificação do Pisco Peruano:</h3>
                                    <ul>
                                        <li><strong>Pisco Puro:</strong> Elaborado exclusivamente a partir de uma única variedade de uva pisqueira (Quebranta, Mollar, Negra Criolla, etc.), de sabor seco, encorpado e marcante.</li>
                                        <li><strong>Pisco Aromático:</strong> Produzido com uvas aromáticas como Itália, Torontel, Moscatel e Albilla, destacando-se por perfumes florais e frutados frescos.</li>
                                        <li><strong>Pisco Mosto Verde:</strong> Obtido a partir da destilação de mostos frescos cuja fermentação foi interrompida, resultando em uma bebida aveludada, refinada e suave no paladar.</li>
                                        <li><strong>Pisco Acholado:</strong> Harmonioso corte ou assemblage de duas ou mais variedades de uvas ou mostos pisqueiros, equilibrando aroma, corpo e persistência.</li>
                                    </ul>
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
