@extends('web.plantillas.principal') @section('contenidoPlantillaPrincipal')
<main>
  <!-- Carousel -->
  <div class="carousel owl-carousel">
    <div
      class="carousel-slide"
      data-img="{{ asset('images/carousel/banner_soat_small.jpg') }}"
      data-md-img="{{ asset('images/carousel/banner_soat_large.jpg') }}"
    >
      <div class="carousel-slide-text">
        <h2 class="carousel-text-animated">Tu SOAT en un instante</h2>
        <p class="carousel-text-animated">
          Cotizalo y adquierelo en menos de un minuto
        </p>
        <a
          class="carousel-text-animated button button-primary"
          href="{{ asset('solicitudes/comprar_soat') }}"
          >Comprar</a
        >
        <a
          class="carousel-text-animated button button-primary"
          href="{{ asset('solicitudes/cotizar_soat') }}"
          >Cotizar</a
        >
      </div>
    </div>
    <div
      class="carousel-slide"
      data-img="{{ asset('images/carousel/banner_seguro_vehiculo_small.jpg') }}"
      data-md-img="{{
        asset('images/carousel/banner_seguro_vehiculo_large.jpg')
      }}"
    >
      <div class="carousel-slide-text">
        <h2 class="carousel-text-animated">
          No permitas que le pase esto a tu auto
        </h2>
        <p class="carousel-text-animated">Protégelo con nosotros</p>
        <a
          class="carousel-text-animated button button-primary"
          href="{{ asset('solicitudes/cotizar_seguro_vehicular_todo_riesgo') }}"
          >Cotizar Seguro Vehicular</a
        >
      </div>
    </div>
    <div
      class="carousel-slide"
      data-img="{{
        asset('images/carousel/banner_seguro_estudiante_small.jpg')
      }}"
      data-md-img="{{
        asset('images/carousel/banner_seguro_estudiante_large.jpg')
      }}"
    >
      <div class="carousel-slide-text">
        <h2 class="carousel-text-animated">Estudia protegido</h2>
        <p class="carousel-text-animated">
          Si eres estudiante de la UNJBG, asegúrate y estudia con total
          tranquilidad
        </p>
        <a
          class="carousel-text-animated button button-primary"
          href="{{ asset('solicitudes/afiliar_seguro_estudiantil') }}"
          >Afiliar</a
        >
      </div>
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
              <img src="{{ asset('images/seguros/seguro_soat.jpg') }}" alt="" />
              <div class="card-body">
                <h3 class="card-title">SOAT</h3>
                <p class="card-text">
                  El SOAT (Seguro Obligatorio de Accidentes de Tránsito) brinda
                  una cobertura a todos aquellas personas que ocupan un vehiculo
                  y a los peatones en caso de ocurrir un accidente de tránsito.
                  Es de caracter obligatorio establecido por ley.
                </p>
              </div>
              <div class="card-footer">
                <a
                  href="{{ url('seguros/soat') }}"
                  class="button button-primary"
                  >Ver más</a
                >
              </div>
            </div>

            <div class="card" data-aos="fade-up">
              <img
                src="{{ asset('images/seguros/seguro_vehiculo.jpg') }}"
                alt=""
              />
              <div class="card-body">
                <h3 class="card-title">Seguro Vehicular</h3>
                <p class="card-text">
                  Es un seguro destino a la protección de su vehículo ante
                  cualquier siniestro o daño que se produzca, asi com tambien a
                  los pasajeros que ocupen el vehiculo asegurado.
                </p>
              </div>
              <div class="card-footer">
                <a
                  href="{{ url('seguros/seguro_vehicular') }}"
                  class="button button-primary"
                  >Ver más</a
                >
              </div>
            </div>

            <div class="card" data-aos="fade-up">
              <img src="{{ asset('images/seguros/seguro_covid19.jpg') }}" alt="" />
              <div class="card-body">
                <h3 class="card-title">Seguro contra COVID-19</h3>
                <p class="card-text">
                  Es un seguro que te protege del COVID-19, otorgándote una
                  renta económica por cada día de hospitalización.
                </p>
              </div>
              <div class="card-footer">
                <a
                  href="{{ url('seguros/seguro_covid19') }}"
                  class="button button-primary"
                  >Ver más</a
                >
              </div>
            </div>
          </div>
        </div>
        <div class="section-footer col-12">
          <a href="{{ url('seguros') }}" class="button button-primary"
            >Mostrar todos</a
          >
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
          <h2 class="section-title">
            ¿Necesitas un SOAT?<br />Tranquilo, nosotros lo tenemos
          </h2>
        </div>
        <div class="section-body col-12">
          <a
            href="{{ url('solicitudes/cotizar_soat') }}"
            class="button button-alt"
            id="btn-quote-soat"
            data-aos="fade-right"
            id="btn-soat-cotizar"
            >Cotiza aquí</a
          >
          <a
            href="{{ url('solicitudes/comprar_soat') }}"
            class="button button-alt"
            id="btn-buy-soat"
            data-aos="fade-left"
            id="btn-soat-comprar"
            >Compra aquí</a
          >
        </div>
      </div>
    </div>
  </section>
  <!-- End Section: Buscas SOAT -->

  <!-- Section: Compañias de Seguros -->
  <section class="section-grey" id="section-home-insurance-companies">
    <div class="section-container">
      <div class="section-row">
        <div class="section-heading col-12">
          <h2 class="section-title">
            Trabajamos con las principales compañías de seguros en el país
          </h2>
        </div>
        <div class="section-body col-12">
          <div class="insurance-companies-wrapper">
            <img
              class="insurance-company-logo"
              data-aos="fade-up"
              src="{{ asset('images/aseguradoras/mapfre.svg') }}"
              alt="MAPFRE"
            />
            <img
              class="insurance-company-logo"
              data-aos="fade-up"
              src="{{ asset('images/aseguradoras/lapositivaseguros.svg') }}"
              alt="La Positiva"
            />
            <img
              class="insurance-company-logo"
              data-aos="fade-up"
              src="{{ asset('images/aseguradoras/pacifico.svg') }}"
              alt="Pacífico"
            />
            <img
              class="insurance-company-logo"
              data-aos="fade-up"
              src="{{ asset('images/aseguradoras/rimac.svg') }}"
              alt="Rimac"
            />
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Section: Compañias de Seguros -->
</main>
@endsection @section('title') Pagina de Inicio @endsection
