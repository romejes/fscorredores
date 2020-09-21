@extends('web.layouts.main') @section('content')
<main>
  <!-- Carousel -->
  <section>
    <h4>Banner</h4>
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
          <div class="card">
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
          <div class="card">
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
          <div class="card">
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
            ¿Necesitas un SOAT? Tranquilo, nosotros lo tenemos
          </h4>
        </div>
      </div>
      <div class="row py-3 ">
        <div class="col-12 text-center">
          <a href="" class="btn btn-alt" id="btn-soat-cotizar">Cotiza aquí</a>
          <a href="" class="btn btn-alt" id="btn-soat-comprar">Compra aquí</a>
        </div>
      </div>
    </div>
  </section>
  <!-- End SOAT -->

  <!-- Aseguradoras -->
  <section class="section bg-color-fs-grey color-white">
    <div class="container">
      <div class="row py-3">
        <div class="col-12 col-md-6">
          <h4 class="section-title">
            Trabajamos con las principales compañías de seguros del país
          </h4>
        </div>
        <div class="col-12 col-md-6"></div>
      </div>
    </div>
  </section>
  <!-- End Aseguradoras -->
</main>
@endsection