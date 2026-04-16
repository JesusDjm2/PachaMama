@extends('layouts.app')
@php $titulo="Preguntas Frecuentes para Viajar a Perú | Pacha Mama Spirit" @endphp
@php $descripcion="Resuelve todas tus dudas antes de viajar a Perú: seguridad, idioma, clima, vacunas, moneda y más. Guía completa de la agencia Pacha Mama Spirit." @endphp
@php $keywords="preguntas frecuentes para viajar a Perú, preguntas frecuentes Peru, como viajar a Peru, que llevar a Peru, seguridad Peru, moneda Peru, clima Peru" @endphp
@php $img="https://pachamamaspirit.com/img/panoramico/trekking-peru.webp" @endphp
@section('titulo', $titulo)
@include('layouts.metasblogs')
@push('page_metas')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "¿Es necesario hablar español para viajar por Perú?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "En Perú el idioma oficial es el español y lo habla el 82% de la población. Si viaja con una agencia de viajes, contará con guías en su idioma. Los idiomas más comunes son inglés, francés, chino, alemán e italiano."
      }
    },
    {
      "@type": "Question",
      "name": "¿Qué tan seguro es viajar por Perú?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Perú es un país tranquilo en sus zonas turísticas. Se recomienda conocer la ciudad a la que viaja, no transitar por zonas desoladas, mostrarse discreto y tener el número de la policía turística. La forma más segura es viajar con una agencia de viajes que lo guíe en todo momento."
      }
    },
    {
      "@type": "Question",
      "name": "¿Es caro viajar a Perú?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Perú ofrece mucha variedad económica para los viajeros. En general, tiene productos muy accesibles si sabe dónde buscar, aunque también existen opciones de lujo y exclusividad."
      }
    }
  ]
}
</script>
@endpush
@section('content')
    @include('layouts.menu')
    <div class="preguntas">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 style="padding-top: 250px;color:#fff" class="h1web">Preguntas frecuentes antes de viajar a Perú</h1>
                </div>
            </div>
        </div>
    </div>
    <section>
        <div class="container" id="pachamama">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <h1 class="h1-index">
                        <beige>Lo que necesitas saber antes de viajar a Perú</beige>
                    </h1>
                    <h2>1- ¿Es necesario hablar español para viajar por Perú?</h2>
                    <p>
                        En Perú el idioma oficial es el español y lo habla el 82% de la población y solo el 5% habla
                        español-inglés. Si Ud. visita Perú por su cuenta es indispensable que tenga al menos una base en
                        español, ya que lo necesitara para poder viajar y moverse dentro del país, pero si Ud. viaja con una
                        agencia de viajes, lo mas probable es que no tenga problemas con no saber hablar español ya que
                        durante todo su recorrido estará rodeado de personas que hablan el inglés. Las agencias de viaje
                        también otorgan en sus tours guías exclusivos que sepan hablar el idioma que el pasajero requiera,
                        los idiomas mas comunes son: inglés, francés, chino, alemán e italiano.
                    </p>
                    <h2>2- ¿Qué tan seguro es viajar por Perú?</h2>
                    <p>
                        Perú es un país tranquilo y sereno con respecto a la delincuencia en sus zonas turísticas, se
                        recomienda a los visitantes conocer siempre la ciudad a la que viajan o ayudarse con una aplicación
                        que le ayude a ubicarse bien, no transitar por zonas muy alejadas o desoladas, ya que existen como
                        en todo país zonas de riesgo delictivo. Igualmente te aconsejamos mostrarse discreto y no cargar
                        muchas sumas de dinero cuando se va por la calle. Tener a la mano el número de emergencia de la
                        policía turística o policía local. Y lo más seguro es viajar con agente de viaje que te guie todo el
                        tiempo de su visita.
                    </p>
                    <h2>3- ¿Es caro viajar a Perú?</h2>
                    <p>
                        Perú ofrece mucha variedad con respecto a lo económico para los viajeros, en general Perú tiene
                        productos muy económicos para ofrecer si sabes donde buscar
                    </p>
                </div>

                <div class="space"></div>
                <div class="space"></div>
            </div>
        </div>
    </section>
@endsection
