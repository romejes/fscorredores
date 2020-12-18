@extends('web.plantillas.principal')

@section('contenidoPlantillaPrincipal')

<!-- Banner -->
@component('web.componentes.banner', ["imagenBanner" =>
  'banner_nosotros.jpg', 'tituloBanner' => "Acerca de nosotros"])
@endcomponent
<!-- Fin Banner -->

<!-- Seccion Quienes somos -->
<section class="bgc-white">
  <div class="container">
    <div class="row">
      <article class="col-12 col-lg-6">
        <h2 class="clr-blue">¿Quienes Somos?</h2>
        <p>
          Somos una empresa especializada en la asesoría integral en Seguros,
          operando en el mercado nacional desde el año 2014, desarrollamos
          soluciones a la medida del cliente.
        </p>
        <p>
          FS Corredores de Seguros, viene alcanzando un posicionamiento de
          relevancia en el Mercado Asegurador a través de la intermediación de
          seguros a empresas públicas, privadas y personas naturales.
        </p>
      </article>
      <div class="col-12 col-lg-6"></div>
    </div>
  </div>
</section>
<!-- Fin Seccion Quienes somos -->

<!-- Seccion Por qué elegirnos - Que nos distingue de la competencia? -->
<section class="bgc-grey">
  <div class="container">
    <div class="row">
      <article class="col-12 col-md-6">
        <h2 class="clr-blue">¿Por qué elegirnos?</h2>
        <ul>
          <li>Adecuada y oportuna Asesoría Profesional.</li>
          <li>Le permite ahorro en la contratación de sus seguros.</li>
          <li>
            Ante la ocurrencia de un siniestro, brindamos una asesoría
            personalizada logrando indemnizaciones justas y oportunas.
          </li>
        </ul>
      </article>
      <article class="col-12 col-md-6">
        <h2 class="clr-blue">¿Qué nos distingue de la competencia?</h2>
        <ul>
          <li>Desarrollamos soluciones efectivas para nuestros clientes.</li>
          <li>Innovación, eficiencia y rapidez en el servicio.</li>
        </ul>
      </article>
    </div>
  </div>
</section>
<!-- Fin Seccion Por qué elegirnos - Que nos distingue de la competencia? -->

<!-- Seccion Mision - Vision - Valores -->
<section class="bgc-white">
  <div class="container">
    <div class="row">
      <article class="col-12 col-md-4">
        <h2 class="clr-blue text-center">Misión</h2>
        <p class="text-center">
          Brindar un asesoramiento profesional y confiable en la gestion
          integral de seguros, a través de un eficáz servicio de atención al
          cliente
        </p>
      </article>
      <article class="col-12 col-md-4">
        <h2 class="clr-blue text-center">Visión</h2>
        <p class="text-center">
          Ser la empresa de asesoría y corretaje en seguros de mayor prestigio
          y confianza en el mercado asegurador peruano, que brinde soluciones
          innovadoras, simples, transparentes y con altos estándares de
          servicio.
        </p>
      </article>
      <article class="col-12 col-md-4">
        <h2 class="clr-blue text-center">Valores</h2>
        <ul>
          @foreach ($valores as $valor)
          <li>{{ $valor }}</li>
          @endforeach
        </ul>
      </article>
    </div>
  </div>
</section>
<!-- Fin Seccion Mision - Vision - Valores -->

<!-- Seccion: El equipo -->
<section class="bgc-grey">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="clr-blue text-center">Nuestro equipo</h2>
      </div>
      <div class="col-12">
        <div class="cards-container staff-card-container">
          @foreach($staff as $trabajador)
            <div class="card">
              <div class="card-body">
                <div class="data-staff-grid">
                  <div class="data-staff-icon-cell">
                    <i class="fas fa-user fa-2x"></i>
                  </div>
                  <div class="data-staff-info-cell">
                    <p class="mb-0"> {{ $trabajador['nombre'] }} <br>
                      <i>{{ $trabajador['cargo'] }}</i> </p>
                  </div>
                  <div class="data-staff-icon-cell">
                    <i class="fas fa-envelope fa-2x"></i>
                  </div>
                  <div class="data-staff-info-cell">
                    <p>{{ $trabajador['correo'] }}</p>
                  </div>
                  <div class="data-staff-icon-cell">
                    <i class="fab fa-whatsapp fa-2x"></i>
                  </div>
                  <div class="data-staff-info-cell">
                    <p>{{ $trabajador['telefono'] }}</p>
                  </div>
                </div>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Fin Seccion: El equipo -->
@endsection

@section('title') Nosotros @endsection