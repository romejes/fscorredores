@extends('web.plantillas.servicio')

@section('formularioServicio')
<h2>Comprar SOAT</h2>
<article>
  <p>
    Solicite su SOAT electrónico a través de las compañias de seguros mostradas
    abajo. Haga click sobre las imágenes para acceder al formulario de compra.
  </p>
  <ul class="compra_soat-insurance-companies">
    <li>
      <a href="#">
        <img
          src="{{ asset('images/aseguradoras/mapfre.svg') }}"
          alt="Comprar SOAT en MAPFRE"
        />
      </a>
    </li>
  </ul>
</article>
@endsection 

@section('title') Solicitudes - Comprar SOAT @endsection
