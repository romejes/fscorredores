@extends('web.layouts.main') @section('content')
<main>
  <!-- Heading -->
  @component('web.components._section-header') Pagina no encontrada
  @endcomponent
  <!-- End Heading-->

  <!-- Customers -->
  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col-12 py-4 text-center">
          <i class="far fa-frown fa-10x my-5"></i>
          <p class="mt-3">
            Lo sentimos, la página que intenta visitar no existe
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- End Customers-->
</main>
@endsection
