<ul class="navbar-links-container list-unstyled">
  <li class="navbar-link has-submenu">
    <a title="Seguros">Seguros</a>
    <div class="container-submenu pb-3">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6">
            <h3>Para Personas</h3>
            <ul class="pl-0">
              <li><a href="">SOAT</a></li>
              <li><a href="">Seguro Vehicular</a></li>
              <li><a href="">Seguros de Vida</a></li>
              <li><a href="">Seguro de Salud</a></li>
              <li><a href="">Seguro de Hogar</a></li>
              <li><a href="">Seguro de Viajes</a></li>
            </ul>
          </div>
          <div class="col-lg-6">
            <h3>Para Empresas</h3>
            <ul class="pl-0">
              <li><a href="">EPS</a></li>
              <li><a href="">SCTR</a></li>
              <li><a href="">Seguro de Transportes</a></li>
              <li><a href="">Seguro contra Incendios</a></li>
              <li><a href="">Seguro por Responsabilidad Civil</a></li>
              <li><a href="">Seguro por Deshonestidad</a></li>
              <li><a href="">Seguro contra Robo y/o Asalto</a></li>
              <li><a href="">Seguro contra Terremotos</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </li>
  <li class="navbar-link has-submenu">
    <a title="Solicitudes">Solicitudes</a>
    <div class="container-submenu pb-3">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4">
            <h3>Cotizar</h3>
            <ul class="pl-0">
              <li><a href="<?php echo e(url('solicitudes/cotizar_soat')); ?>">SOAT</a></li>
              <li><a href="<?php echo e(url('solicitudes/cotizar_seguro_vehicular')); ?>">Seguro Vehicular</a></li>
            </ul>
          </div>
          <div class="col-lg-4">
            <h3>Comprar</h3>
            <ul class="pl-0">
              <li><a href="<?php echo e(url('solicitudes/comprar_soat')); ?>">SOAT</a></li>
            </ul>
          </div>
          <div class="col-lg-4">
            <h3>Afiliar</h3>
            <ul class="pl-0">
              <li><a href="<?php echo e(url('solicitudes/afiliar_seguro_estudiantil')); ?>">Seguro Estudiantil contra Accidentes</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </li>
  <li class="navbar-link has-submenu">
    <a title="Nosotros" href="<?php echo e(url('nosotros')); ?>">Nosotros</a>
  </li>
  <li class="navbar-link has-submenu">
    <a title="Clientes" href="<?php echo e(url('clientes')); ?>">Clientes</a>
  </li>
  <li class="navbar-link has-submenu">
    <a title="Contacto" href="<?php echo e(url('contacto')); ?>">Contacto</a>
  </li>
  <li class="navbar-link">
    <a href="<?php echo e(url('intranet/login')); ?>" target="_blank" title="Intranet"
      ><i class="fas fa-lock"></i
    ></a>
  </li>
</ul>
