@extends('intranet.layouts.main') 

@section('body-content')
<body class="hold-transition sidebar-mini">
  <div class="wrapper">
    <!-- Navbar-->
    @include('intranet.layouts._navbar')

    <!-- Sidebar -->
    @include('intranet.layouts._sidebar')

    <!-- Main Content-->
    <div class="content-wrapper">
      @yield('content')
    </div>
  </div>
  
  <script src="{{ asset("js/manifest.js") }}"></script>
  <script src="{{ asset("js/vendor.js") }}"></script>
  <script src="{{ asset("js/intranet.js") }}"></script>

  @stack('scripts')
</body>
@endsection
