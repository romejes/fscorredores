<footer>
  <!-- Contenido principal del pie de pagina -->
  <section id="footer-main">
    <div class="container">
      <div class="row">
        <div class="col-12 col-sm-6 col-md-4 col-lg-4">
          <h3>Seguros para Personas</h3>
          <ul>
            <?php $__currentLoopData = $seguros[0]['seguros']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seguro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li><a
                  href="<?php echo e(url('seguros/'. $seguro['slug'])); ?>"><?php echo e($seguro['nombre']); ?></a>
              </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4">
          <h3>Seguros para Empresas</h3>
          <ul>
            <?php $__currentLoopData = $seguros[1]['seguros']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seguro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li><a
                  href="<?php echo e(url('seguros/'. $seguro['slug'])); ?>"><?php echo e($seguro['nombre']); ?></a>
              </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4">
          <h3>Nuestra Oficina</h3>
          <div class="office-grid">
            <div class="office-icon-cell">
              <i class="fas fa-map-marker"></i>
            </div>
            <div class="office-info-cell">
              <span>Agrup. J. Rosa Ara A-12 (a 2da. Cdra. Ovalo Callao por la Av. Grau)</span>
            </div>
            <div class="office-icon-cell">
              <i class="fas fa-phone"></i>
            </div>
            <div class="office-info-cell">
              <span>+51 052-285846</span>
            </div>
          </div>
          <!--img src="<?php echo e(asset('images/logo2.svg')); ?>" id="footer-logo" alt="FS Corredores de Seguros">
          
          <img src="<?php echo e(asset('images/sbs.svg')); ?>" id="sbs-logo" alt="Superintendencia de Banca y Seguros"-->
        </div>
      </div>
    </div>
  </section>
  <!-- Fin Contenido principal del pie de pagina -->

  <!-- Texto de copyright -->
  <section id="footer-copyright">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <p class="text-center">FS Corredores de Seguros &copy; <?php echo e(date('Y')); ?>. Todos los derechos
            reservados.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- Fin Texto de copyright -->
</footer>