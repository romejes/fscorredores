@extends('web.layouts.main') @section('content')
<main>
  <!-- Carousel -->
  <section>
    <div class="glide carousel">
      <div class="glide__track" data-glide-el="track">
        <ul class="glide__slides">
          <li class="glide__slide"><img class="img-fluid" src="{{ asset('img/img_slide1.jpg') }}" alt=""></li>
          <li class="glide__slide"><img class="img-fluid" src="{{ asset('img/img_slide2.jpg') }}" alt=""></li>
          <li class="glide__slide"><img class="img-fluid" src="{{ asset('img/img_slide3.jpg') }}" alt=""></li>
        </ul>
      </div>

      <div class="glide__arrows" data-glide-el="controls">
        <button class="glide__arrow glide__arrow--left" data-glide-dir="<">prev</button>
        <button class="glide__arrow glide__arrow--right" data-glide-dir=">">next</button>
      </div>

      <div class="glide__bullets" data-glide-el="controls[nav]">
        <button class="glide__bullet" data-glide-dir="=0"></button>
        <button class="glide__bullet" data-glide-dir="=1"></button>
        <button class="glide__bullet" data-glide-dir="=2"></button>
      </div>
    </div>
  </section>
  <!-- End Carousel -->

  <!-- Nuestros Seguros -->
  <section class="section">
    <div class="container">
      <div class="row py-3">
        <div class="col">
          <h4 class="section-title color-fs-blue">Nuestros Seguros</h4>
        </div>
      </div>
      <div class="row py-3">
        <div class="col-12 col-md-4">
          <div class="card" data-aos="fade-in">
            <div class="card-body text-center">
              <h5 class="card-title color-fs-blue card-title-size">Seguro 1</h5>
              <p class="card-text text-center">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Quisquam porro, corporis accusantium labore officiis saepe,
                cumque, obcaecati explicabo recusandae enim eos consequatur
                doloribus rem laudantium culpa cum adipisci molestiae
                laboriosam.
              </p>
              <a href="{{ url('seguros#seguros-sctr-salud')}}" class="btn btn-primary">Ver más</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="card" data-aos="fade-in">
            <div class="card-body text-center">
              <h5 class="card-title color-fs-blue card-title-size">Seguro 1</h5>
              <p class="card-text text-center">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Incidunt ipsa exercitationem, aliquam ex numquam voluptatibus!
                Fugiat ab doloremque debitis explicabo quia suscipit et, magni
                alias ipsam deleniti praesentium itaque dolorum!
              </p>
              <a href="{{ url('seguros#seguros-sctr-pension')}}" class="btn btn-primary">Ver más</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4">
          <div class="card" data-aos="fade-in">
            <div class="card-body text-center">
              <h5 class="card-title color-fs-blue card-title-size">Seguro 1</h5>
              <p class="card-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Excepturi suscipit deserunt labore sunt quasi quis laborum
                corporis ipsam facere at pariatur, fugit iusto similique
                possimus officiis quo, amet nobis eius!
              </p>
              <a href="{{ url('seguros#seguros-colaboradores-eps')}}" class="btn btn-primary">Ver más</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row py-5">
        <div class="col text-center">
          <a href="{{ url("seguros") }}" class="btn btn-primary">Mostrar todos</a>
        </div>
      </div>
    </div>
  </section>
  <!-- End Nuestros Seguros -->

  <!-- SOAT -->
  <section class="section bg-color-fs-blue color-white">
    <div class="container">
      <div class="row py-3">
        <div class="col">
          <h4 class="section-title">
            ¿Necesitas un SOAT?<br> Tranquilo, nosotros lo tenemos
          </h4>
        </div>
      </div>
      <div class="row py-3 ">
        <div class="col-12 text-center">
          <a href="{{ url('solicitudes/cotizar_soat')}}" class="btn btn-alt" data-aos="fade-right"
            id="btn-soat-cotizar">Cotiza aquí</a>
          <a href="{{ url('solicitudes/comprar_soat')}}" class="btn btn-alt" data-aos="fade-left"
            id="btn-soat-comprar">Compra aquí</a>
        </div>
      </div>
    </div>
  </section>
  <!-- End SOAT -->

  <!-- Aseguradoras -->
  <section class="section bg-color-fs-grey color-white">
    <div class="container">
      <div class="row py-3 align-items-center">
        <div class="col-12 col-md-5">
          <h4 class="section-title">
            Trabajamos con las principales compañías de seguros del país
          </h4>
        </div>
        <div class="col-12 col-md-7">
          <div class="insurance-company-wrapper">
            <img class="img-insurance-company" data-aos="fade-up" src="{{ asset('img/mapfre.svg') }}" alt="MAPFRE">
            <img class="img-insurance-company" data-aos="fade-up" src="{{ asset('img/lapositivaseguros.svg')}}"
              alt="La Positiva">
            <img class="img-insurance-company" data-aos="fade-up" src="{{ asset('img/pacifico.svg')}}" alt="Pacífico">
            <img class="img-insurance-company" data-aos="fade-up" src="{{ asset('img/rimac.svg')}}" alt="Rimac">
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Aseguradoras -->
</main>
@endsection