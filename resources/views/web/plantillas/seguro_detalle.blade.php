@extends('web.plantillas.principal')

@section('contenidoPlantillaPrincipal')
<main>
  <!-- Heading -->
  @yield('bannerSeguro')
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
              <nav class="treeview treeview-insurances">
                <ul class="treeview-root">
                  @foreach ($seguros as $grupoSeguros)
                  <li class="treeview-root-group">
                    <span class="treeview-item">{{ $grupoSeguros['titulo']}}</span>
                    <ul>
                      @foreach ($grupoSeguros['seguros'] as $seguro)
                      <li>
                        <a href="{{ url('seguros/'.$seguro['slug']) }}"
                          class="{{ Request::segment(2) == $seguro['slug'] ? 'active':''}}">{{ $seguro['nombre'] }}</a>
                      </li>
                      @endforeach
                    </ul>
                  </li>
                  @endforeach
                </ul>
              </nav>
              <!-- End Nav for large screens -->

              <!-- Nav for small screens -->
              <select name="seguros" id="sel-insurances" class="form-control ">
                <option value="" selected>-- Escoja el seguro que desea revisar --</option>
                @foreach ($seguros as $grupoSeguros)
                <optgroup label="{{ $grupoSeguros['titulo']}}">
                  @foreach ($grupoSeguros['seguros'] as $seguro)
                  <option data-href="{{ url('seguros/'. $seguro['slug'])}}">{{ $seguro['nombre']}}</option>
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
              @yield('informacionSeguro')
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