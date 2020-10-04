@extends('web.layouts.main') @section('content')
<main id="seguros-main">
  <!-- Heading -->
  @component('web.components._section-header') Solicite su seguro @endcomponent
  <!-- End Heading-->

   <!-- Main section content -->
   <section class="section">
    <div class="container">
      <div class="row">
        <!-- Navbar-->
        <div class="col-lg-4">
          <!-- ...for big screens -->
          <div class="d-none d-lg-block">
            <ul class="nav nav-seguros">
              @foreach ($solicitudes as $solicitud)
              <li class="nav-seguros-item">
                <span>{{ $solicitud['seguro'] }}</span>
                <ul class="nav-seguros-item-children">
                  @foreach ($solicitud['opciones'] as $detalle)
                  <li>
                    <a href="{{ url('solicitudes/'.$detalle['slug']) }}"
                      class="nav-seguros-link {{ Request::segment(2) == $detalle['slug'] ? 'active':''}}">{{ $detalle['name'] }}</a>
                  </li>
                  @endforeach
                </ul>
              </li>
              @endforeach
            </ul>
          </div>
          <!-- End ...for big screens -->

          <!-- ...for small screens -->
          <div class="form-group d-lg-none">
            <label for="ddo-seguros">Seleccione un seguro para ver su información</label>
            <select name="seguros" id="ddo-seguros" class="form-control ">
              @foreach ($solicitudes as $solicitud)
              <optgroup label="{{ $solicitud['seguro']}}">
                @foreach ($solicitud['opciones'] as $detalle)
                <option data-href="{{ url('solicitudes/'. $detalle['slug'])}}"
                  {{ Request::segment(2) == $detalle['slug'] ? 'selected':''}}>{{ $detalle['name']}}</option>
                @endforeach
              </optgroup>
              @endforeach
            </select>
          </div>
          <!-- ...for small screens -->
        </div>
        <!--End Navbar -->

        <!-- Insurance description -->
        <div class="col-lg-8">
          @yield('solicitud_content')
        </div>
        <!-- End Insurance description -->
      </div>
    </div>
  </section>
  <!-- End Main section content -->
</main>
@endsection
