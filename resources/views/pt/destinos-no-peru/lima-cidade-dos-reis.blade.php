@extends('layouts.apppt')
@php $titulo="Lima, Cidade dos Reis — Capital do Peru | Pacha Mama Spirit" @endphp
@php $descripcion="Lima é a vibrante capital da República do Peru, banhada pelo Oceano Pacífico e reconhecida mundialmente como a capital gastronômica da América do Sul." @endphp
@php $keywords="Lima, cidade dos reis, Lima capital do Peru, turismo em Lima, gastronomia peruana, Miraflores, Centro Histórico de Lima" @endphp
@php $img="https://pachamamaspirit.com/img/panoramico/ciudad-de-reyes-lima.webp" @endphp
@section('titulo', $titulo)
@include('layouts.metasblogs')
@section('content')
    <div class="lima">
        <div class="container d-flex align-items-center justify-content-center vh-100">
            <div class="row">
                <h1 class="h1-destinos">Lima, a Cidade dos Reis</h1>
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
                                    href="{{ route('pt.destinos') }}">Destinos</a> / <a>Lima</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10">
                    <h2 class="text-center">"Lima"</h2>
                    <div class="accordion accordion-flush accordion-destiny" id="accordionFlushExample">
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseOne" aria-expanded="false"
                                    aria-controls="flush-collapseOne">
                                    Por que é chamada de "Cidade dos Reis"?
                                </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Quando o conquistador <strong>Francisco Pizarro</strong> recebeu a missão de escolher a capital do vice-reinado espanhol, priorizou uma localização com acesso direto ao mar. Assim, escolheu o fértil vale banhado pelo rio Rímac, onde fundou oficialmente a cidade no dia 18 de janeiro de 1535.<br><br>
                                    Segundo os historiadores, a data coincidiu com o mês da celebração da Epifania (os Reis Magos), motivo pelo qual Pizarro a batizou originalmente de <strong>“Cidade dos Reis”</strong>. Desde então, Lima transformou-se profundamente sob as perspectivas territorial, demográfica e cultural.<br><br>
                                    Apesar dessas transformações e do ritmo contemporâneo, Lima ainda preserva santuários pré-incas, imponentes casarões virreinais e áreas verdes litorâneas que constituem os pulmões de uma metrópole de múltiplos rostos, lar de quase 10 milhões de habitantes.<br><br>
                                    <img src="{{ asset('img/panoramico/ciudad-de-reyes-lima.webp') }}"
                                        alt="Cidade de Lima e o bairro de Miraflores" width="100%" loading="lazy">
                                    <i>Foto: Orla de Miraflores, Lima</i>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                    aria-controls="flush-collapseTwo">
                                    A metrópole de Lima e sua importância
                                </button>
                            </h2>
                            <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    Lima é a capital da República do Peru e está situada na costa central do país, debruçada sobre as falésias do Oceano Pacífico. Flanqueada pelo deserto costeiro e estendida sobre os vales dos rios Chillón, Rímac e Lurín, forma a ampla conurbação de Lima Metropolitana.<br><br>
                                    Atualmente, é o principal centro político, financeiro, acadêmico e cultural do país, além de ser a quinta metrópole mais populosa da América Latina. Sua posição geoestratégica, seu aeroporto internacional e sua premiada cena gastronômica fazem dela a porta de entrada obrigatória para a grande maioria dos viajantes internacionais.<br><br>
                                    <h3>A maior comunidade chinesa da América Latina</h3>
                                    Estima-se que mais de um milhão de descendentes de chineses vivam no Peru, com cerca de 200 mil em Lima, constituindo uma das maiores colônias orientais do continente. Essa presença deu origem ao charmoso Barrio Chino no centro histórico e à consagrada gastronomia <em>chifa</em> (fusão cantonês-peruana), que conquistou o paladar de moradores e turistas.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseFour" aria-expanded="false"
                                    aria-controls="flush-collapseFour">
                                    Lima: Resumo Histórico
                                </button>
                            </h2>
                            <div id="flush-collapseFour" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    O nome Lima deriva do vocábulo quéchua <em>Limaq</em> (que significa "falador", em referência a um oráculo pré-hispânico local). Muito antes da chegada dos colonizadores espanhóis, a região abrigava sociedades avançadas como as culturas Lima, Ychsma e o Império Inca, que deixaram impressionantes pirâmides de adobe conhecidas como <em>huacas</em>.<br><br>
                                    Durante a era colonial, Lima foi a sede do Vice-Reinado do Peru e a mais rica e influente metrópole da América do Sul. Após a proclamação da independência em 1821 pelo general José de San Martín, consagrou-se como a capital da jovem República, consolidando-se ao longo dos séculos como um polo de diversidade, arte e gastronomia de nível internacional.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseThree" aria-expanded="false"
                                    aria-controls="flush-collapseThree">
                                    Principais Atrativos Turísticos de Lima
                                </button>
                            </h2>
                            <div id="flush-collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <h3>Centro Histórico de Lima</h3>
                                    <i>A elegância de uma capital com séculos de tradição</i><br>
                                    Tombado pela UNESCO como Patrimônio Cultural da Humanidade, o Centro Histórico é uma autêntica viagem no tempo. Seus imponentes edifícios barrocos e neoclássicos contam com sacadas de madeira entalhada únicas no mundo. Destaques incluem a Plaza Mayor, o Palácio de Governo, a Catedral Metropolitana com a tumba de Pizarro e o Convento de São Francisco, famoso por sua biblioteca histórica e suas misteriosas catacumbas subterrâneas.<br><br>
                                    <img src="{{ asset('img/galeria/tour-caballos-en-centro-de-lima.webp') }}"
                                        alt="Passeio no Centro Histórico de Lima" width="100%" loading="lazy">
                                    <i>Foto: Centro Histórico de Lima</i><br><br>

                                    <h3>Miraflores e o Calçadão da Costa Verde</h3>
                                    <i>Uma janela panorâmica sobre o Oceano Pacífico</i><br>
                                    Miraflores combina segurança, modernidade e vida ao ar livre. O calçadão do Malecón se estende ao longo das falésias com parques floridos, como o romântico Parque del Amor, mirantes para assistir ao pôr do sol, rampas para saltos de parapente e o shopping a céu aberto Larcomar, construído diretamente na encosta rochosa.<br><br>

                                    <h3>Museu Larco</h3>
                                    <i>Um encontro inesquecível com 5.000 anos de história pré-colombiana</i><br>
                                    Instalado em uma charmosa mansão virreinal do século XVIII cercada por jardins premiados, o Museu Larco abriga a mais completa coleção privada de arte pré-colombiana do Peru. Destacam-se as galerias de ouro e prata dos povos Mochica, Chimú e Nazca, além da famosa sala de cerâmicas eróticas.<br><br>

                                    <strong>Informações práticas para visitação:</strong>
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Ingresso</th>
                                                <th scope="col">Clima médio</th>
                                                <th scope="col">Horário</th>
                                                <th scope="col">Altitude</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Adultos: aprox. S/ 35<br>Maiores de 65: S/ 30<br>Estudantes: S/ 17</td>
                                                <td>Mín. 16 ℃ / Máx. 25 ℃</td>
                                                <td>10h00 às 19h00</td>
                                                <td>82 metros acima do nível do mar</td>
                                            </tr>
                                        </tbody>
                                    </table><br>
                                    <img src="{{ asset('img/galeria/Museo-Larco-lima-Pacha-Mama-Spirit.webp') }}"
                                        alt="Museu Larco em Lima" width="100%" loading="lazy">
                                    <i>Foto: Museu Larco, Lima</i><br><br>

                                    <h3>Museus imperdíveis na capital</h3>
                                    O Museu de Arte de Lima (MALI), o Museu Pedro de Osma no boêmio bairro de Barranco, e o Museu Nacional de Arqueologia e Antropologia completam um circuito cultural imperdível para quem deseja entender as raízes da América do Sul.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2>
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#flush-collapseSix" aria-expanded="false"
                                    aria-controls="flush-collapseSix">
                                    Calendário e Festividades Tradicionais em Lima
                                </button>
                            </h2>
                            <div id="flush-collapseSix" class="accordion-collapse collapse"
                                aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">
                                    <h3>1. Aniversário da Cidade de Lima</h3>
                                    <p><strong>Data: 18 de janeiro</strong></p>
                                    Comemorado com grande entusiasmo, o aniversário de Lima conta com serenatas na Plaza de Armas, apresentações de danças costeiras como a marinera e o festejo, desfiles cívicos e concorridas feiras gastronômicas com clássicos como arroz con pato, anticuchos e sobremesas coloniais (mazamorra morada e suspiro limeño).<br><br>

                                    <h3>2. Dia de Santa Rosa de Lima</h3>
                                    <p><strong>Data: 30 de agosto</strong></p>
                                    Santa Rosa de Lima é a primeira santa canonizada das Américas e padroeira do Peru, das Filipinas e da Polícia Nacional. Milhares de fiéis visitam seu santuário no centro da cidade para depositar cartas com pedidos de bênçãos no lendário “Poço dos Desejos”.<br><br>

                                    <h3>3. Concurso Nacional do Cavalo Peruano de Passo</h3>
                                    <p><strong>Data: Mês de abril</strong></p>
                                    Realizado na histórica fazenda de Mamacona em Lurín, reúne mais de 700 exemplares desta raça equina única no mundo, famosa por seu andar lateral cadenciado (“paso llano”) que proporciona uma cavalgada de incomparável suavidade.<br><br>

                                    <h3>4. Dia da Canção Crioula</h3>
                                    <p><strong>Data: 31 de outubro</strong></p>
                                    Celebração que exalta a música costeira e as tradições de compositores consagrados como Chabuca Granda, Felipe Pinglo e Augusto Polo Campos, com apresentações memoráveis nas tradicionais <em>peñas criollas</em> dos bairros de Barranco e Breña.<br><br>

                                    <h3>5. Dia Nacional do Pisco Sour</h3>
                                    <p><strong>Data: Primeiro sábado de fevereiro</strong></p>
                                    O coquetel mais famoso do Peru é celebrado em bares, restaurantes e praças públicas de toda a cidade com degustações, workshops e concursos dos melhores barmen do país.<br><br>
                                    <img src="{{ asset('img/galeria/pisco-sour-peru.webp') }}" alt="Pisco Sour tradicional peruano"
                                        width="100%" loading="lazy">
                                    <i>Foto: Pisco Sour peruano</i>
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
