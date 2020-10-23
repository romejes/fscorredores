@extends('web.layouts.main') @section('content')

<main>
  <!-- Heading Page -->
  @component('web.components._heading-page')
  Conoce nuestra empresa
  @endcomponent
  <!-- End Heading Page -->

  <section id="section-about_us-mision-vision-values">
    <div class="section-container">
      <div class="section-row align-items-stretch">
        <div class="col-12 col-md-6">
          <article data-aos="fade-up">
            <img src="{{ asset('images/mision.svg') }}" alt="">
            <h2>Nuestra Misión</h2>
            <p> Brindar un asesoramiento profesional y confiable en la gestion integral de seguros, a
              través de un eficáz servicio de atención al cliente </p>
          </article>
        </div>
        <div class="col-12 col-md-6">
          <article data-aos="fade-up">
            <img src="{{ asset('images/vision.svg') }}" alt="">
            <h2>Nuestra Visión</h2>
            <p>Ser la empresa de asesoría y corretaje en seguros de mayor prestigio y confianza en el
              mercado asegurador peruano, que brinde soluciones innovadoras, simples, transparentes y con altos
              estándares de servicio.</p>
          </article>
        </div>
        <div class="col-12">
          <article>
            <h2>Valores de la empresa</h2>
            <div class="wrapper-card wrapper-company-values">
              @foreach ($values as $value)
              <div class="card company-value" data-aos="fade-up">
                <div class="company-value-icon">
                  <i class="fas fa-star"></i>
                </div>
                <div class="company-value-text">
                  <span>{{ $value }}</span>
                </div>
              </div>
              @endforeach
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>

  <!-- Section: El equipo -->
  <section class="section-grey" id="section-about_us-staff">
    <div class="section-container">
      <div class="section-row">
        <div class="section-heading col-12">
          <h2 class="section-title">Nuestro equipo</h2>
        </div>
        <div class="section-body col-12">
          <div class="wrapper-card">
            @foreach ($staff as $worker)
            <div class="card staff-card" data-aos="fade-up">
              <div class="card-body">
                <dl>
                  <div class="dl-row">
                    <dt class="dt-icon"><i class="fas fa-user fa-2x"></i></dt>
                    <dd>
                      <p class="worker-name"> {{ $worker["name"] }}</p>
                      <i class="worker-job">{{ $worker["charge"] }}</i>
                    </dd>
                  </div>
                  <div class="dl-row">
                    <dt class="dt-icon"> <i class="fas fa-envelope fa-2x"></i></dt>
                    <dd>
                      <p>{{ $worker["email"]}}</p>
                    </dd>
                  </div>
                  <div class="dl-row">
                    <dt class="dt-icon"> <i class="fab fa-whatsapp fa-2x"></i></dt>
                    <dd>
                      <p>{{ $worker["phone"]}}</p>
                    </dd>
                  </div>
                </dl>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Section: El equipo -->
</main>
@endsection

@section('title')
Nosotros
@endsection