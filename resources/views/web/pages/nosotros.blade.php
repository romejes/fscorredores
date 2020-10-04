@extends('web.layouts.main') @section('content')

<main>
  <!-- Heading -->
  @component('web.components._section-header')
  Conoce nuestra empresa
  @endcomponent
  <!-- End Heading-->

  <!-- Mision, Vision, Valores -->
  <section class="section bg-color-white">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-6 py-3" id="mision-block">
          <h4 class="section-title color-fs-blue">Nuestra Misión</h4>
          <p class="text-center" data-aos="fade-up">
            Brindar un asesoramiento profesional y confiable en la gestion
            integral de seguros, a través de un eficáz servicio de atención al
            cliente
          </p>
        </div>
        <div class="col-12 col-lg-6 py-3" id="vision-block">
          <h4 class="section-title color-fs-blue">Nuestra Visión</h4>
          <p class="text-center" data-aos="fade-up">
            Ser la empresa de asesoría y corretaje en seguros de mayor prestigio
            y confianza en el mercado asegurador peruano, que brinde soluciones
            innovadoras, simples, transparentes y con altos estándares de
            servicio.
          </p>
        </div>
        <div class="col-12 py-3" id="valores-block">
          <h4 class="section-title color-fs-blue">Valores de la empresa</h4>
          <ul class="list-valores">
            <li class="list-valores-item" data-aos="fade-up">Disciplina</li>
            <li class="list-valores-item" data-aos="fade-up">Autocrítica</li>
            <li class="list-valores-item" data-aos="fade-up">Responsabilidad</li>
            <li class="list-valores-item" data-aos="fade-up">Disponibilidad al cambio</li>
            <li class="list-valores-item" data-aos="fade-up">Perseverancia</li>
            <li class="list-valores-item" data-aos="fade-up">Proactividad</li>
            <li class="list-valores-item" data-aos="fade-up">Aprendizaje</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Mision, Vision, Valores -->

  <!-- Staff-->
  <section class="section bg-color-fs-grey color-white">
    <div class="container">
      <div class="row">
        <div class="col">
          <h4 class="section-title">Nuestro Equipo</h4>
        </div>
      </div>
      <div class="row my-3">
        <div class="card-staff-wrapper">
          @foreach ($staff as $worker)
          <div class="card card-staff" data-aos="fade-up">
            <div class="card-staff-body">
              <div class="card-staff-body-row">
                <div class="card-staff-icon">
                  <i class="fas fa-user fa-2x"></i>
                </div>
                <div class="card-staff-description">
                  <p>{{ $worker["name"] }}</p>
                  <i>{{ $worker["charge"] }}</i>
                </div>
              </div>
              <div class="card-staff-body-row">
                <div class="card-staff-icon">
                  <i class="fas fa-envelope fa-2x"></i>
                </div>
                <div class="card-staff-description">
                  <p>{{ $worker["email"]}}</p>
                </div>
              </div>
              <div class="card-staff-body-row">
                <div class="card-staff-icon">
                  <i class="fab fa-whatsapp fa-2x"></i>
                </div>
                <div class="card-staff-description">
                  <p>{{ $worker["phone"]}}</p>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>
  <!-- End Staff-->
</main>
@endsection