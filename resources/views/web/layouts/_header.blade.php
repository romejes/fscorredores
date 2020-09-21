<header>
  <div class="container">
    <div class="row align-items-center py-2">
      <!-- Logo -->
      <div class="col-auto">
        <a href="{{ url('/') }}">
          <img
            src="{{ asset('img/logo.png') }}"
            alt="FS Corredores de Seguros"
            id="img-logo"
          />
        </a>
      </div>
      <!-- End Logo -->

      <!-- Nav -->
      <nav class="col d-none d-lg-flex justify-content-end">
        <ul class="list-inline mb-0">
          <li class="list-inline-item">
            <a href="{{ url('nosotros') }}" title="Nosotros">Nosotros</a>
          </li>
          <li class="list-inline-item">
            <a href="{{ url('seguros') }}" title="Seguros">Seguros</a>
          </li>
          <li class="list-inline-item">
            <a href="{{ url('solicitudes') }}" title="Solicitudes"
              >Solicitudes</a
            >
          </li>
          <li class="list-inline-item">
            <a href="{{ url('clientes') }}" title="Clientes">Clientes</a>
          </li>
          <li class="list-inline-item">
            <a href="{{ url('contacto') }}" title="Contacto">Contacto</a>
          </li>
          <li class="list-inline-item">
            <a
              href="{{ url('intranet/login') }}"
              target="_blank"
              title="Intranet"
              ><i class="fas fa-lock"></i
            ></a>
          </li>
        </ul>
      </nav>
      <!-- End Nav-->

      <!-- Mobile Menu Button-->
      <div class="col d-lg-none">
        <button class="btn btn-flat btn-lg" id="btn-menu">
          <i class="fas fa-bars color-fs-blue"></i>
        </button>
      </div>
      <!-- End Mobile Menu Button-->
    </div>
  </div>
</header>
