<header>
  <div class="container">
    <!-- Logo -->
    <a href="{{ url('/') }}">
      <img src="{{ asset('images/logo.svg') }}" alt="FS Corredores de Seguros" id="company-logo-header">
    </a>
    <!-- End logo -->

    <!-- Navbar -->
    <nav class="navbar">

      <!-- Menu button -->
      <button id="btn-menu" class="button" type="button">
        <i class="fas fa-bars fa-2x"></i>
      </button>
      <!-- End Menu button-->

      <!-- Navbar Links -->
      @include('web.plantillas.principal.nav')
      <!-- End Navbar Links -->
    </nav>
    <!-- End Navbar -->
  </div>
</header>