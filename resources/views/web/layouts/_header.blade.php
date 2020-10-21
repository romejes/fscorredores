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
      <ul class="navbar-links-container">
        <li class="navbar-link {{ Request::segment(1) == 'seguros' ? 'active':''}}">
          <a href="{{ url('seguros') }}" title="Seguros">Seguros</a>
        </li>
        <li class="navbar-link {{ Request::segment(1) == 'solicitudes' ? 'active':''}}">
          <a href="{{ url('solicitudes') }}" title="Solicitudes">Solicitudes</a>
        </li>
        <li class="navbar-link {{ Request::segment(1) == 'nosotros' ? 'active':''}}">
          <a href="{{ url('nosotros') }}" title="Nosotros">Nosotros</a>
        </li>
        <li class="navbar-link {{ Request::segment(1) == 'clientes' ? 'active':''}}">
          <a href="{{ url('clientes') }}" title="Clientes">Clientes</a>
        </li>
        <li class="navbar-link {{ Request::segment(1) == 'contacto' ? 'active':''}}">
          <a href="{{ url('contacto') }}" title="Contacto">Contacto</a>
        </li>
        <li class="navbar-link">
          <a href="{{ url('intranet/login') }}" target="_blank" title="Intranet"><i class="fas fa-lock"></i></a>
        </li>
      </ul>
      <!-- End Navbar Links -->
    </nav>
    <!-- End Navbar -->
  </div>
</header>