@extends('web.layouts.main') @section('content')
<main>
  <!-- Heading Page-->
  @component('web.components._heading-page')
  Nuestros clientes
  @endcomponent
  <!-- End Heading Page -->

  <!-- Section Clientes Municipalidades -->
  <section>
    <div class="section-container">
      <div class="section-row">
        <div class="section-heading col-12">
          <h2 class="section-title">Municipalidades</h2>
        </div>
        <div class="section-body col-12">
          <ul class="wrapper-customers {{ count($clientes["municipalidades"]) > 7 ? 'list-clientes-divide' :'' }}">
            @foreach ($clientes["municipalidades"] as $municipalidad)
            <li class="customer-item" data-aos="fade-up">{{ $municipalidad }}</li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Section Clientes Municipalidades -->

  <!-- Section Clientes Universidades -->
  <section>
    <div class="section-container">
      <div class="section-row">
        <div class="section-heading col-12">
          <h2 class="section-title">Universidades</h2>
        </div>
        <div class="section-body col-12">
          <ul class="wrapper-customers {{ count($clientes["universidades"]) > 7 ? 'list-clientes-divide' :'' }}">
            @foreach ($clientes["universidades"] as $universidad)
            <li class="customer-item" data-aos="fade-up">{{ $universidad }}</li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Section Clientes Universidades -->

  <!-- Section Clientes Gobiernos Regionales -->
  <section>
    <div class="section-container">
      <div class="section-row">
        <div class="section-heading col-12">
          <h2 class="section-title">Gobiernos Regionales</h2>
        </div>
        <div class="section-body col-12">
          <ul class="wrapper-customers {{ count($clientes["gobiernos_regionales"]) > 7 ? 'list-clientes-divide' :'' }}">
            @foreach ($clientes["gobiernos_regionales"] as $gobiernoRegional)
            <li class="customer-item" data-aos="fade-up">{{ $gobiernoRegional }}</li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Section Clientes Gobiernos Regionales -->

  <!-- Section Clientes Otros -->
  <section>
    <div class="section-container">
      <div class="section-row">
        <div class="section-heading col-12">
          <h2 class="section-title">Otros</h2>
        </div>
        <div class="section-body col-12">
          <ul class="wrapper-customers {{ count($clientes["otros"]) > 7 ? 'list-clientes-divide' :'' }}">
            @foreach ($clientes["otros"] as $otro)
            <li class="customer-item" data-aos="fade-up">{{ $otro }}</li>
            @endforeach
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Section Clientes Otros -->
</main>
@endsection