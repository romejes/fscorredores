@extends('web.layouts.main') @section('content')
<main>
  <!-- Heading Page-->
  @component('web.components._heading-page')
    <img src="{{ asset('images/banners/banner_clientes.jpg')}}" alt="">
    @slot('headingTitle')
      Nuestros clientes
    @endslot
  @endcomponent
  <!-- End Heading Page -->

  <!-- Section Entidades Publicas -->
  <section>
    <div class="section-container">
      <div class="section-row">
        <div class="section-heading col-12">
          <h2 class="section-title">Entidades Públicas</h2>
        </div>
        <div class="section-body col-12">
          <div class="wrapper-card wrapper-customer">
            @foreach ($clientes["publicas"] as $entidadPublica)
            <div class="card customer-card" data-aos="fade-up">
              <img src="{{ asset("images/clientes/" . $entidadPublica["logo"]) }}" alt="{{$entidadPublica['nombre'] }}">
              <div class="card-body">
                <p>{{$entidadPublica['nombre'] }}</p>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Section Entidades Publicas -->

  <!-- Section Entidades Privadas -->
  <section>
    <div class="section-container">
      <div class="section-row">
        <div class="section-heading col-12">
          <h2 class="section-title">Entidades Públicas</h2>
        </div>
        <div class="section-body col-12">
          <div class="wrapper-card wrapper-customer">
            @foreach ($clientes["privadas"] as $entidadPrivada)
            <div class="card customer-card" data-aos="fade-up">
              @if (is_null($entidadPrivada["logo"]))
              <img src="{{ asset("images/no_logo.png") }}" alt="Sin logo disponible">    
              @else
              <img src="{{ asset("images/clientes/" . $entidadPrivada["logo"]) }}" alt="{{$entidadPrivada['nombre'] }}">
              @endif
              <div class="card-body">
                <p>{{$entidadPrivada['nombre'] }}</p>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Section Entidades Publicas -->
</main>
@endsection


@section('title')
Clientes
@endsection