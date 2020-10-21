<header>
  <div class="container">
    <!-- Logo -->
    <a href="<?php echo e(url('/')); ?>">
      <img src="<?php echo e(asset('images/logo.svg')); ?>" alt="FS Corredores de Seguros" id="company-logo-header">
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
        <li class="navbar-link <?php echo e(Request::segment(1) == 'seguros' ? 'active':''); ?>">
          <a href="<?php echo e(url('seguros')); ?>" title="Seguros">Seguros</a>
        </li>
        <li class="navbar-link <?php echo e(Request::segment(1) == 'solicitudes' ? 'active':''); ?>">
          <a href="<?php echo e(url('solicitudes')); ?>" title="Solicitudes">Solicitudes</a>
        </li>
        <li class="navbar-link <?php echo e(Request::segment(1) == 'nosotros' ? 'active':''); ?>">
          <a href="<?php echo e(url('nosotros')); ?>" title="Nosotros">Nosotros</a>
        </li>
        <li class="navbar-link <?php echo e(Request::segment(1) == 'clientes' ? 'active':''); ?>">
          <a href="<?php echo e(url('clientes')); ?>" title="Clientes">Clientes</a>
        </li>
        <li class="navbar-link <?php echo e(Request::segment(1) == 'contacto' ? 'active':''); ?>">
          <a href="<?php echo e(url('contacto')); ?>" title="Contacto">Contacto</a>
        </li>
        <li class="navbar-link">
          <a href="<?php echo e(url('intranet/login')); ?>" target="_blank" title="Intranet"><i class="fas fa-lock"></i></a>
        </li>
      </ul>
      <!-- End Navbar Links -->
    </nav>
    <!-- End Navbar -->
  </div>
</header>