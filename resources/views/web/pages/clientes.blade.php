@extends('web.layouts.main') @section('content')
<main>
  <!-- Heading -->
  @component('web.components._section-header')
  Nuestros clientes
  @endcomponent
  <!-- End Heading-->

  <!-- Customers -->
  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col-12 py-4">
          <h4 class="section-title color-fs-blue">Municipalidades</h4>
          <ul class="list-clientes {{ count($clientes["municipalidades"]) > 7 ? 'list-clientes-divide' :'' }}">
            @foreach ($clientes["municipalidades"] as $municipalidad)
            <li class="list-clientes-item" data-aos="fade-up">{{ $municipalidad }}</li>
            @endforeach
          </ul>
        </div>

        <div class="col-12 py-4">
          <h4 class="section-title color-fs-blue">Universidades</h4>
          <ul class="list-clientes {{ count($clientes["universidades"]) > 7 ? 'list-clientes-divide' :'' }}">
            @foreach ($clientes["universidades"] as $universidad)
            <li class="list-clientes-item" data-aos="fade-up">{{ $universidad }}</li>
            @endforeach
          </ul>
        </div>

        <div class="col-12 py-4">
          <h4 class="section-title color-fs-blue">Gobiernos Regionales</h4>
          <ul class="list-clientes {{ count($clientes["gobiernos_regionales"]) > 7 ? 'list-clientes-divide' :'' }}">
            @foreach ($clientes["gobiernos_regionales"] as $gobiernoRegional)
            <li class="list-clientes-item" data-aos="fade-up">{{ $gobiernoRegional }}</li>
            @endforeach
          </ul>
        </div>

        <div class="col-12 py-4">
          <h4 class="section-title color-fs-blue">Otros</h4>
          <ul class="list-clientes {{ count($clientes["otros"]) > 7 ? 'list-clientes-divide' :'' }}">
            @foreach ($clientes["otros"] as $otro)
            <li class="list-clientes-item" data-aos="fade-up">{{ $otro }}</li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Customers-->
</main>
@endsection