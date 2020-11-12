@extends('web.layouts.main') @section('content')
<main>
  <!-- Heading -->
  @component('web.components._heading-page')
    <img src="{{ asset('images/banners/banner_seguros.jpg')}}" alt="">
    @slot('headingTitle')
      Nuestros seguros
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
              <nav class="treeview treeview-insurances">
                <ul class="treeview-root">
                  @foreach ($seguros as $seguro)
                  <li class="treeview-root-group">
                    <span class="treeview-item">{{ $seguro['title']}}</span>
                    <ul>
                      @foreach ($seguro['seguros'] as $detalle)
                      <li>
                        <a href="{{ url('seguros/'.$detalle['slug']) }}"
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
              <select name="seguros" id="sel-insurances" class="form-control ">
                <option value="" selected>-- Escoja el seguro que desea revisar --</option>
                @foreach ($seguros as $seguro)
                <optgroup label="{{ $seguro['title']}}">
                  @foreach ($seguro['seguros'] as $detalle)
                  <option data-href="{{ url('seguros/'. $detalle['slug'])}}">{{ $detalle['name']}}</option>
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
              @yield('insurance-content')
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