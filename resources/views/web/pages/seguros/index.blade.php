@extends('web.layouts.main') @section('content')
<main id="seguros-main">
  <!-- Heading -->
  @component('web.components._section-header') Nuestros Seguros @endcomponent
  <!-- End Heading-->

  <!-- Content -->
  <section class="section">
    <div class="container">
      @foreach ($seguros as $seguro)
      <div class="row my-5">
        <div class="col-12">
          <h4 class="section-title color-fs-blue">{{ $seguro['title']}} </h4>
        </div>
        <div class="col-12">
          <div class="wrapper-seguros">
            @foreach($seguro['seguros'] as $detalle)
            <div class="card card-seguro">
              <div class="card-body">
                <h5 class="card-title-seguro">{{ $detalle['name'] }}</h5>
              </div>
              <div class="card-footer card-seguro-footer">
                <a href="{{ url('seguros/'.$detalle['slug']) }}" class="btn btn-primary">Ver</a>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
      @endforeach
    </div>
  </section>
  <!-- End Content -->
</main>
@endsection