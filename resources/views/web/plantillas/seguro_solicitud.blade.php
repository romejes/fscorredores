@extends('web.plantillas.principal')

@section('contenidoPlantillaPrincipal')
<main>
  <!-- Heading -->
  @component('web.componentes.banner_pagina')
    <img src="{{ asset('images/banners/banner_servicios.jpg')}}" alt="">
    @slot('tituloBanner')
      Solicite su seguro
    @endslot
  @endcomponent
  <!-- End Heading-->

  <!-- Section -->
  <section>
    <div class="section-container">
      <div class="section-row">
        <div class="section-body col-12">
          <!-- Split Container-->
          <div class="split-container">
            <!-- Left Side -->
            <div class="left-half">
              <!-- Nav for large screens -->
              <nav class="treeview treeview-requests">
                <ul class="treeview-root">
                  @foreach ($solicitudes as $solicitud)
                  <li class="treeview-root-group">
                    <span class="treeview-item">{{ $solicitud['seguro']}}</span>
                    <ul>
                      @foreach ($solicitud['opciones'] as $detalle)
                      <li>
                        <a href="{{ url('solicitudes/'.$detalle['slug']) }}"
                          class="{{ Request::segment(2) == $detalle['slug'] ? 'active':''}}">{{ $detalle['name'] }}</a>
                      </li>
                      @endforeach
                    </ul>
                  </li>
                  @endforeach
                </ul>
              </nav>
              <!-- End Nav for large screens -->

              <!-- Nav for small screens -->
              <select name="seguros" id="sel-requests" class="form-control ">
                <option value="" selected>-- Escoja la solicitud que desea realizar --</option>
                @foreach ($solicitudes as $solicitud)
                <optgroup label="{{ $solicitud['seguro']}}">
                  @foreach ($solicitud['opciones'] as $detalle)
                  <option data-href="{{ url('solicitudes/'. $detalle['slug'])}}">{{ $detalle['name']}}</option>
                  @endforeach
                </optgroup>
                @endforeach
              </select>
              <!-- End Nav for small screens -->
            </div>
            <!-- End Left Side -->

            <div class="divide"></div>

            <!-- Right Side -->
            <div class="right-half">
              @yield('contenidoSolicitud')
            </div>
            <!-- End Right Side -->
          </div>
          <!-- End Split Container-->
        </div>
      </div>
    </div>
  </section>
  <!-- End Section -->
</main>
@endsection