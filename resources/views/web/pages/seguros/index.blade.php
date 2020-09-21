@extends('web.layouts.main') @section('content')
<main id="seguros-main">
  <!-- Heading -->
  @component('web.components._section-header') Nuestros Seguros @endcomponent
  <!-- End Heading-->

  <!-- Content -->
  <section class="section">
    <div class="container">
      <!-- Seguros para Personas -->
      <div class="row my-5">
        <div class="col-12">
          <h4 class="section-title color-fs-blue">
            Seguros para Personas
          </h4>
        </div>
        <div class="col-12">
          <div class="wrapper-seguros">
            @foreach($seguros['persona'] as $seguro)
            <div class="card card-seguro">
              <div class="card-body">
                <h5 class="card-title-seguro">{{ $seguro['name'] }}</h5>
              </div>
              <div class="card-footer card-seguro-footer">
                <a
                  href="{{ url('seguros/'.$seguro['slug']) }}"
                  class="btn btn-primary"
                  >Ver</a
                >
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
      <!-- End Seguros para Personas -->

      <!-- Seguros para Empresas-->
      <div class="row my-5">
        <div class="col-12">
          <h4 class="section-title color-fs-blue">
            Seguros para Empresas y MYPES
          </h4>
        </div>
        <div class="col-12">
          <div class="wrapper-seguros">
            @foreach($seguros['empresas'] as $seguro)
            <div class="card card-seguro">
              <div class="card-body">
                <h5 class="card-title-seguro">{{ $seguro['name'] }}</h5>
              </div>
              <div class="card-footer card-seguro-footer">
                <a
                  href="{{ url('seguros/'.$seguro['slug']) }}"
                  class="btn btn-primary"
                  >Ver</a
                >
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
      <!-- End Seguros para Empresas-->

      <!-- Seguros Vehiculares -->
      <div class="row">
        <div class="col-12">
          <h4 class="section-title color-fs-blue">Seguros Vehiculares</h4>
        </div>
        <div class="col-12">
          <div class="wrapper-seguros">
            @foreach($seguros['vehiculares'] as $seguro)
            <div class="card card-seguro">
              <div class="card-body">
                <h5 class="card-title-seguro">{{ $seguro['name'] }}</h5>
              </div>
              <div class="card-footer card-seguro-footer">
                <a
                  href="{{ url('seguros/'.$seguro['slug']) }}"
                  class="btn btn-primary"
                  >Ver</a
                >
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
      <!-- End Seguros Vehiculares -->
    </div>
  </section>
  <!-- End Content -->
</main>
@endsection
