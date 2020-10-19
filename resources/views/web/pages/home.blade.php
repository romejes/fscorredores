@extends('web.layouts.main') @section('content')
<main>
  <!-- Carousel -->
  <div class="carousel splide">
    <div class="splide__track">
      <ul class="splide__list">
        <li class="splide__slide">
          <img src="{{ asset('img/carousel/seguro_vehiculo_banner.jpg') }}" />
          <div class="carousel-image-caption">
            <h2>No permitas que le pase esto a tu auto</h2>
            <p>Protégelo con nosotros</p>
            <a class="button button-alt" href="{{ asset('solicitudes/cotizar_seguro_vehicular_todo_riesgo') }}">Cotizar Seguro Vehicular</a>
          </div>
        </li>
        <li class="splide__slide">
          <img src="{{ asset('img/carousel/soat_banner.jpg') }}" />
          <div class="carousel-image-caption">
            <h2>Tu SOAT en un instante</h2>
            <p>Cotizalo y adquierelo en menos de un minuto</p>
            <a class="button button-alt" href="{{ asset('solicitudes/comprar_soat') }}">Comprar</a>
            <a class="button button-alt" href="{{ asset('solicitudes/cotizar_soat') }}">Cotizar</a>
          </div>
        </li>
        <li class="splide__slide">
          <img src="{{ asset('img/carousel/seguro_estudiante_banner.jpg') }}" />
          <div class="carousel-image-caption">
            <h2>Estudia protegido</h2>
            <p>Si eres estudiante de la UNJBG, asegúrate y estudia con total tranquilidad</p>
            <a class="button button-alt" href="{{ asset('solicitudes/afiliar_seguro_estudiantil') }}">Afiliar</a>
          </div>
        </li>
      </ul>
    </div>
  </div>
  <!-- End Carousel -->

  <!-- Section: Nuestros Seguros -->
  <section>
    <div class="section-container">
      <div class="section-row">
        <div class="section-heading col-12">
          <h2 class="section-title">Nuestros Seguros</h2>
        </div>
        <div class="section-body col-12">
          <div class="wrapper-card">
            <div class="card" data-aos="fade-up">
              <img src="{{ asset('img/seguros/seguro_soat.jpg') }}" alt="">
              <div class="card-body">
                <h3 class="card-title">SOAT</h3>
                <p class="card-text">El SOAT (Seguro Obligatorio de Accidentes de Tránsito) cubre no solo al conductor
                  del
                  vehículo, sino también a ocupantes o terceros no ocupantes de un vehículo automotor, este vela por tu
                  bienestar y beneficia a la sociedad de manera inmediata e incondicional. </p>
              </div>
              <div class="card-footer">
                <a href="{{ url('seguros/soat') }}" class="button button-primary">Ver más</a>
              </div>
            </div>

            <div class="card" data-aos="fade-up">
              <img src="{{ asset('img/seguros/seguro_vehiculo.jpg') }}" alt="">
              <div class="card-body">
                <h3 class="card-title">Seguro Vehicular</h3>
                <p class="card-text">En estos tiempos contar con un seguro vehicular nos da la tranquilidad ya que
                  cuando
                  sufrimos un accidente como un choque o robo, donde podremos ser respaldados e indemnizados por la
                  compañía de seguros y dejar a nuestro auto en las mismas condiciones como estaba antes del accidente.
                </p>
              </div>
              <div class="card-footer">
                <a href="{{ url('seguros/seguro_vehicular_todo_riesgo') }}" class="button button-primary">Ver más</a>
              </div>
            </div>

            <div class="card" data-aos="fade-up">
              <img src="{{ asset('img/seguros/seguro_eps.jpg') }}" alt="">
              <div class="card-body">
                <h3 class="card-title">EPS</h3>
                <p class="card-text">Es un programa médico que te brinda atención ambulatoria y hospitalaria, consulta
                  médica a domicilio, atención de emergencia accidental y médica, exámenes preventivos anuales,
                  maternidad
                  y control del niño sano entre otros. </p>
              </div>
              <div class="card-footer">
                <a href="{{ url('seguros/eps') }}" class="button button-primary">Ver más</a>
              </div>
            </div>
          </div>
        </div>
        <div class="section-footer col-12">
          <a href="{{ url('seguros') }}" class="button button-primary" data-aos="fade-up">Mostrar todos</a>
        </div>
      </div>
    </div>
  </section>
  <!-- End Section: Nuestros Seguros -->

  <!-- Section: Buscas SOAT -->
  <section class="section-blue" id="section-home-look-for-soat">
    <div class="section-container">
      <div class="section-row">
        <div class="section-heading col-12">
          <h2 class="section-title">¿Necesitas un SOAT?<br />Tranquilo, nosotros lo tenemos</h2>
        </div>
        <div class="section-body col-12">
          <a href="{{ url('solicitudes/cotizar_soat') }}" class="button button-alt" id="btn-quote-soat"
            data-aos="fade-right" id="btn-soat-cotizar">Cotiza aquí</a>
          <a href="{{ url('solicitudes/comprar_soat') }}" class="button button-alt" id="btn-buy-soat"
            data-aos="fade-left" id="btn-soat-comprar">Compra aquí</a>
        </div>
      </div>
    </div>
  </section>
  <!-- End Section: Buscas SOAT -->

  <!-- Section: Compañias de Seguros -->
  <section class="section-grey" id="section-home-insurance-companies">
    <div class="section-container">
      <div class="section-row">
        <div class="section-heading col-12 col-lg-5">
          <h2 class="section-title">Trabajamos con las principales compañías de seguros en el país</h2>
        </div>
        <div class="section-body col-12 col-lg-7">
          <div class="insurance-companies-wrapper">
            <img data-aos="fade-up" src="{{ asset('img/aseguradoras/mapfre.svg') }}" alt="MAPFRE" />
            <img data-aos="fade-up" src="{{ asset('img/aseguradoras/lapositivaseguros.svg') }}" alt="La Positiva" />
            <img data-aos="fade-up" src="{{ asset('img/aseguradoras/pacifico.svg') }}" alt="Pacífico" />
            <img data-aos="fade-up" src="{{ asset('img/aseguradoras/rimac.svg') }}" alt="Rimac" />
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Section: Compañias de Seguros -->
</main>
@endsection