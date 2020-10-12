@extends('web.layouts.main') @section('content')
<main id="seguros-main">
  <!-- Heading -->
  @component('web.components._section-header') Nuestros Seguros @endcomponent
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
              @foreach ($seguros as $seguro)
              <li class="nav-seguros-item">
                <span>{{ $seguro['title'] }}</span>
                <ul class="nav-seguros-item-children">
                  @foreach ($seguro['seguros'] as $detalle)
                  <li>
                    <a href="{{ url('seguros/'.$detalle['slug']) }}"
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
            <select name="seguros" id="ddo-seguros" class="form-control ">
              <option value="" selected>-- Escoja el seguro que desea revisar --</option>
              @foreach ($seguros as $seguro)
              <optgroup label="{{ $seguro['title']}}">
                @foreach ($seguro['seguros'] as $detalle)
                <option data-href="{{ url('seguros/'. $detalle['slug'])}}">{{ $detalle['name']}}</option>
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
          @yield('seguro-content')
        </div>
        <!-- End Insurance description -->
      </div>
    </div>
  </section>
  <!-- End Main section content -->
</main>
@endsection