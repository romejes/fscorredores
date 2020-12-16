@extends('web.plantillas.principal')

@section('contenidoPlantillaPrincipal')
<main>
  <!-- Heading Page-->
  @component('web.componentes.banner_pagina', ["imagenBanner" => 'banner_seguros.jpg'])
    @slot('tituloBanner')
    <h1>Nuestros seguros</h1>
    @endslot
  @endcomponent
  <!-- End Heading Page-->

  <!-- Section -->
  @foreach ($seguros as $grupoSeguro)
  <section>
    <div class="section-container">
      <div class="section-row">
        <div class="section-heading col-12">
          <h2 class="section-title">{{ $grupoSeguro['titulo']}}</h2>
        </div>
        <div class="section-body col-12">
          <div class="wrapper-card">
            @foreach ($grupoSeguro['seguros'] as $seguro)
            <div class="card" data-aos="fade-up">
              <img src="{{ asset('images/seguros/'. $seguro['imagen_miniatura']) }}" alt="">
              <div class="card-body">
                <h3 class="card-title">{{ $seguro['nombre'] }}</h3>
              </div>
              <div class="card-footer">
                <a href="{{ url('seguros/'. $seguro['slug'])}}" class="button button-primary">Más información</a>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>
  @endforeach
</main>
@endsection

@section('title')
Seguros
@endsection
