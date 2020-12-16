<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>FS Corredores de Seguros | @yield('title')</title>

  <meta name="description" content="">
  
  <!-- Fonts -->
  <link rel="stylesheet" href="{{ asset('css/vendor.css')}}">
  <link rel="stylesheet" href="{{ asset('css/web.css')}}">

  <link rel="shortcut icon" href="{{ asset('favicon/favicon.ico')}}" type="image/x-icon">
</head>

<body>
  @include('web.plantillas.principal.sidenav')
  <div class="wrapper">
    <div class="wrapper-shadow"></div>
    @include('web.plantillas.principal.header')
    @yield('contenidoPlantillaPrincipal')
    @include('web.plantillas.principal.footer')
  </div>

  <script src="{{ asset('js/web/vendor.js')}}"></script>
  <script src="{{ asset('js/web/manifest.js')}}"></script>
  <script src="{{ asset('js/web/app.js')}}"></script>

  @stack('scripts')
</body>

</html>