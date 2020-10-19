@extends('web.layouts.main') @section('content')
<main>
  <!-- Heading Page-->
  @component('web.components._heading-page') Solicite su seguro @endcomponent
  <!-- End Heading Page-->

  <!-- Section -->
  <section>
    <div class="section-container">
      <div class="section-row">
        <div class="section-body col-12">
          <div class="wrapper-card">
            @foreach ($solicitudes as $solicitud)
            <div class="card" data-aos="fade-up">
              <div class="card-body">
                <h3 class="card-title">{{ $solicitud['seguro'] }}</h3>
              </div>
              <div class="card-footer">
                @foreach ($solicitud['opciones'] as $opcion)
                <a href="{{ url('solicitudes/' . $opcion['slug'])}}"
                  class="button button-primary">{{ $opcion['name'] }}</a>
                @endforeach
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Section -->
</main>
@endsection