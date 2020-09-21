<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>FS Corredores de Seguros</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('css/web.css')}}">
</head>

<body>
  <div class="wrapper">
    @include('web.layouts._header')
    @yield('content')
    @include('web.layouts._footer')
  </div>
  <script src="{{ asset('js/web/vendor.js')}}"></script>
  <script src="{{ asset('js/web/manifest.js')}}"></script>
  <script src="{{ asset('js/web/app.js')}}"></script>
</body>

</html>