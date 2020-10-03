@extends('web.layouts.main') @section('content')
<main id="seguros-main">
  <!-- Heading -->
  @component('web.components._section-header') Solicite su seguro @endcomponent
  <!-- End Heading-->

  <!-- Content -->
  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="wrapper-solicitudes">
            <!-- SOAT -->
            <div class="card card-solicitud">
              <div class="card-body">
                <h5 class="card-title-solicitud">SOAT</h5>
              </div>
              <div class="card-footer card-solicitud-footer">
                <a
                  href="{{ url('solicitudes/cotizar_soat') }}"
                  class="btn btn-primary"
                  >Cotizar</a
                >
                <a
                  href="{{ url('solicitudes/comprar_soat') }}"
                  class="btn btn-primary"
                  >Comprar</a
                >
              </div>
            </div>
            <!-- End SOAT-->

            <!-- Seguro Vehicular Todo Riesgo -->
            <div class="card card-solicitud">
              <div class="card-body">
                <h5 class="card-title-solicitud">Seguro Vehicular Todo Riesgo</h5>
              </div>
              <div class="card-footer card-solicitud-footer">
                <a
                  href="{{
                    url('solicitudes/cotizar_seguro_vehicular_todo_riesgo')
                  }}"
                  class="btn btn-primary"
                  >Cotizar</a
                >
              </div>
            </div>
            <!-- End Seguro Vehicular Todo Riesgo -->

            <!-- Seguro Estudiante -->
            <div class="card card-solicitud">
              <div class="card-body">
                <h5 class="card-title-solicitud">Seguro Estudiantil</h5>
              </div>
              <div class="card-footer card-solicitud-footer">
                <a
                  href="{{ url('solicitudes/afiliar_seguro_estudiantil') }}"
                  class="btn btn-primary"
                  >Afiliar</a
                >
              </div>
            </div>
            <!-- End Seguro Estudiante -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Content -->
</main>
@endsection
