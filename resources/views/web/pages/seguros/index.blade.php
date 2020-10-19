@extends('web.layouts.main') @section('content')
<main>
  <!-- Heading Page-->
  @component('web.components._heading-page') Nuestros Seguros @endcomponent
  <!-- End Heading Page-->

  <!-- Section -->
  @foreach ($seguros as $seguro)
  <section>
    <div class="section-container">
      <div class="section-row">
        <div class="section-heading col-12">
          <h2 class="section-title">{{ $seguro['title']}}</h2>
        </div>
        <div class="section-body col-12">
          <div class="wrapper-card">
            @foreach ($seguro['seguros'] as $detalle)
            <div class="card" data-aos="fade-up">
              <img src="{{ asset('img/seguros/'. $detalle['picture']) }}" alt="">
              <div class="card-body">
                <h3 class="card-title">{{ $detalle['name'] }}</h3>
              </div>
              <div class="card-footer">
                <a href="{{ url('seguros/'. $detalle['slug'])}}" class="button button-primary">Ver</a>
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