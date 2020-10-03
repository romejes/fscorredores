<header>
  <div class="container">
    <nav class="navbar">
      <!-- Logo -->
      <a href="<?php echo e(url('/')); ?>" class="navbar-brand">
        <img src="<?php echo e(asset('img/logo.svg')); ?>" alt="FS Corredores de Seguros" id="img-logo" />
      </a>
      <!--End Logo -->

      <!-- Menu button -->
      <button class="btn" id="btn-menu">
        <i class="fas fa-bars fa-2x color-fs-blue"></i>
      </button>
      <!-- End Menu button-->

      <!-- Links -->
      <div class="menu-content">
        <ul class="nav-menu-links mb-0">
          <li class="nav-menu-link-item <?php echo e(Request::segment(1) == 'nosotros' ? 'active':''); ?>">
            <a href="<?php echo e(url('nosotros')); ?>" title="Nosotros">Nosotros</a>
          </li>
          <li class="nav-menu-link-item <?php echo e(Request::segment(1) == 'seguros' ? 'active':''); ?>">
            <a href="<?php echo e(url('seguros')); ?>" title="Seguros">Seguros</a>
          </li>
          <li class="nav-menu-link-item <?php echo e(Request::segment(1) == 'solicitudes' ? 'active':''); ?>">
            <a href="<?php echo e(url('solicitudes')); ?>" title="Solicitudes">Solicitudes</a>
          </li>
          <li class="nav-menu-link-item <?php echo e(Request::segment(1) == 'clientes' ? 'active':''); ?>">
            <a href="<?php echo e(url('clientes')); ?>" title="Clientes">Clientes</a>
          </li>
          <li class="nav-menu-link-item <?php echo e(Request::segment(1) == 'contacto' ? 'active':''); ?>">
            <a href="<?php echo e(url('contacto')); ?>" title="Contacto">Contacto</a>
          </li>
          <li class="nav-menu-link-item">
            <a href="<?php echo e(url('intranet/login')); ?>" target="_blank" title="Intranet"><i class="fas fa-lock"></i></a>
          </li>
        </ul>
      </div>
      <!-- End Links-->
    </nav>
  </div>
</header>