@extends('layouts.apppt')
@php $titulo="Puno — Capital do Folclore Peruano e o Lago Titicaca | Pacha Mama Spirit" @endphp
@php $descripcion="Puno é a capital folclórica do Peru, situada às margens do místico Lago Titicaca, o lago navegável mais alto do mundo. Conheça as Ilhas dos Uros e Taquile." @endphp
@php $keywords="Puno, Lago Titicaca, ilhas uros, taquile, amantani, festa da candelaria puno, turismo em puno" @endphp
@php $img="https://pachamamaspirit.com/img/panoramico/viajar-a-puno.webp" @endphp
@section('titulo', $titulo)
@include('layouts.metasblogs')
@section('content')
    <div class="puno">
        <div class="container d-flex align-items-center justify-content-center vh-100">
            <div class="row">
                <h1 class="h1-destinos">Puno, Capital do Folclore</h1>
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
                                    href="{{ route('pt.destinos') }}">Destinos</a> / <a>Puno</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10">
                    <h2 class="text-center">"PUNO"</h2>
                    <div class="accordion accordion-flush accordion-destiny" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    Capital do Folclore Peruano e da América
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Reconhecida oficialmente como a <strong>Capital do Folclore do Peru</strong>, a região de Puno reúne mais de 350 danças tradicionais que entrelaçam rituais pré-hispânicos agrícolas de quechuas e aimarás com o catolicismo colonial. Situada a 3.827 metros de altitude nas margens do Lago Titicaca, Puno transborda ritmo, cor e reverência à <em>Pachamama</em> (Mãe Terra).<br><br>
                                    Durante o mês de fevereiro, a cidade se transforma no epicentro cultural da América do Sul com a colossal <strong>Festa da Virgem da Candelária</strong> (Patrimônio Cultural Imaterial da Humanidade pela UNESCO). Milhares de dançarinos e músicos em trajes repletos de bordados a ouro e máscaras esculpidas percorrem as ruas dia e noite, destacando-se a emblemática dança da <em>Diablada</em>, a alegre <em>Pandilla Puneña</em> e os sons profundos dos <em>Sikuris</em> (flautas de pã andinas).<br><br>
                                    <img src="{{ asset('img/galeria/PUNO-PERU-CANDELARIA-VIRGIN.webp') }}" width="100%"
                                        alt="Virgem da Candelária e dançarinos em Puno" loading="lazy">
                                    <i>Foto: Celebração da Virgem da Candelária em Puno</i>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    Resumo Histórico de Puno
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Antes da chegada dos espanhóis, o planalto do Collao era o território ancestral dos reinos Kolla (língua quéchua) ao norte e Lupaca (língua aimará) ao sul, que desenvolveram técnicas notáveis de cultivo em camellones (waru-warus) e criação de lhamas e alpacas.<br><br>
                                    A vila colonial de San Carlos de Puno foi oficialmente fundada em 4 de novembro de 1668 pelo vice-rei Conde de Lemos. Ao longo dos séculos XIX e XX, a cidade consolidou-se como ponto nevrálgico de ligação comercial entre o sul do Peru, a Bolívia e a bacia do Rio da Prata, mantendo até hoje os históricos vapores a vapor que navegaram pelo lago sagrado e a ferrovia cênica que a conecta a Cusco e Arequipa.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFour" aria-expanded="false"
                                    aria-controls="flush-collapseFour">
                                    As Grandes Danças e Expressões Folclóricas
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <h3>A Diablada Puneña</h3>
                                    Uma das maiores manifestações sincréticas da América Andina, representando o triunfo do Arcanjo Miguel sobre as forças das trevas e a homenagem dos mineiros à Virgem protetora. Os trajes trazem dragões, serpentes e máscaras monumentais de chifres retorcidos ricamente ornamentados.<br><br>
                                    <img src="{{ asset('img/galeria/danzantes-de-Diablada-Puno.webp') }}" width="100%"
                                        alt="Dançarinos da Diablada em Puno" loading="lazy">
                                    <i>Foto: Dançarinos da tradicional Diablada Puneña</i><br><br>

                                    <h3>A Pandilla Puneña</h3>
                                    Dança pausada e aristocrática, onde as <em>cholitas puneñas</em> exibem elegantes polleras de seda, xales bordados e chapéus-coco, acompanhadas por cavalheiros de terno com passos cadenciados de grande nobreza.<br><br>

                                    <h3>Os Sikuris e a Dança Wifala</h3>
                                    Conjuntos de dezenas de músicos que tocam harmoniosamente a zampoña (siku) e bumbos andinos, girando em formações geométricas ancestrais que reverenciam as forças da natureza.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    Principais Atrativos Turísticos no Lago Titicaca e Puno
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <h3>1. Ilhas Flutuantes dos Uros</h3>
                                    <i>Viver sobre plataformas flutuantes tecidas em junco totora</i><br>
                                    A 3.812 metros de altitude no Lago Titicaca, o povo milenar Uros construiu um modo de vida único no planeta. Suas ilhas, casas e embarcações são feitas de camadas sobrepostas de junco totora. Seus habitantes compartilham com orgulho sua história, língua e artesanato com viajantes de todo o mundo.<br><br>
                                    <img src="{{ asset('img/galeria/Uros-island-Puno.webp') }}" width="100%"
                                        alt="Ilhas flutuantes dos Uros no Lago Titicaca" loading="lazy">
                                    <i>Foto: Ilhas flutuantes dos Uros, Lago Titicaca</i><br><br>

                                    <h3>2. Ilhas de Taquile e Amantaní</h3>
                                    Na Ilha de Taquile, a tecelagem tradicional é feita exclusivamente pelos homens e foi declarada Obra-Prima do Patrimônio Oral e Imaterial da Humanidade pela UNESCO. A ilha não possui estradas nem carros, proporcionando caminhadas com vistas panorâmicas sobre as águas azul-marinho do lago com a Cordilheira Real boliviana ao fundo. Em Amantaní, a experiência do turismo comunitário permite pernoitar na casa de famílias nativas e desfrutar de refeições preparadas com produtos orgânicos locais.<br><br>
                                    <img src="{{ asset('img/galeria/Isla-Amantani-Puno.webp') }}" width="100%"
                                        alt="Ilha Amantaní no Lago Titicaca" loading="lazy">
                                    <i>Foto: Vista da Ilha Amantaní, Puno</i><br><br>

                                    <h3>3. Chullpas de Sillustani</h3>
                                    Localizado às margens da deslumbrante Lagoa Umayo, este cemitério pré-inca dos Kollas e Incas abriga impressionantes torres funerárias cilíndricas de pedra perfeitamente encaixada com mais de 12 metros de altura.<br><br>

                                    <h3>4. Mirantes de Kuntur Wasi e Puma Uta</h3>
                                    Mirantes panorâmicos que oferecem vista de 360 graus sobre a cidade de Puno, a baía e o lago sagrado, guardados por esculturas monumentais do Condor e do Puma andino.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseSix" aria-expanded="false"
                                    aria-controls="flush-collapseSix">
                                    Calendário Festivo em Puno
                                </button>
                            </h2>
                            <div id="flush-collapseSix" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <p><strong>1. Ritual do Pagamento à Terra (Pachamama):</strong> <i>Mês de janeiro e agosto</i></p>
                                    <p><strong>2. Festividade da Virgem da Candelária:</strong> <i>2 a 18 de fevereiro (dias centrais)</i></p>
                                    <p><strong>3. Semana Santa e Peregrinação ao Cerro Azoguini:</strong> <i>Março / Abril</i></p>
                                    <p><strong>4. Aniversário da Fundação de Puno:</strong> <i>4 de novembro</i></p>
                                    <img src="{{ asset('img/galeria/353-aniversario-de-Puno.webp') }}"
                                        alt="Aniversário da cidade de Puno" width="100%" loading="lazy">
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
