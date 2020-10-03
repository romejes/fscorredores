 <?php $__env->startSection('content'); ?>

<main>
  <!-- Heading -->
  <?php $__env->startComponent('web.components._section-header'); ?>
  Conoce nuestra empresa
  <?php echo $__env->renderComponent(); ?>
  <!-- End Heading-->

  <!-- Mision, Vision, Valores -->
  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col-12 col-lg-6 py-3">
          <h4 class="section-title color-fs-blue">Nuestra Misión</h4>
          <p class="text-center">
            Brindar un asesoramiento profesional y confiable en la gestion
            integral de seguros, a través de un eficáz servicio de atención al
            cliente
          </p>
        </div>
        <div class="col-12 col-lg-6 py-3">
          <h4 class="section-title color-fs-blue">Nuestra Visión</h4>
          <p class="text-center">
            Ser la empresa de asesoría y corretaje en seguros de mayor prestigio
            y confianza en el mercado asegurador peruano, que brinde soluciones
            innovadoras, simples, transparentes y con altos estándares de
            servicio.
          </p>
        </div>
        <div class="col-12 py-3">
          <h4 class="section-title color-fs-blue">Valores de la empresa</h4>
          <ul class="list-valores">
            <li class="list-valores-item">Disciplina</li>
            <li class="list-valores-item">Autocrítica</li>
            <li class="list-valores-item">Responsabilidad</li>
            <li class="list-valores-item">Disponinilidad al cambio</li>
            <li class="list-valores-item">Perseverancia</li>
            <li class="list-valores-item">Proactividad</li>
            <li class="list-valores-item">Aprendizaje</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Mision, Vision, Valores -->

  <!-- Staff-->
  <section class="section bg-color-fs-grey color-white">
    <div class="container">
      <div class="row">
        <div class="col">
          <h4 class="section-title">Nuestro Equipo</h4>
        </div>
      </div>
      <div class="row my-3">
        <?php $__currentLoopData = $staff; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $worker): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-12 col-sm-6">
          <div class="card card-staff">
            <div class="card-staff-body">
              <div class="card-staff-body-row">
                <div class="card-staff-icon">
                  <i class="fas fa-user fa-2x"></i>
                </div>
                <div class="card-staff-description">
                  <p><?php echo e($worker["name"]); ?></p>
                  <i><?php echo e($worker["charge"]); ?></i>
                </div>
              </div>
              <div class="card-staff-body-row">
                <div class="card-staff-icon">
                  <i class="fas fa-envelope fa-2x"></i>
                </div>
                <div class="card-staff-description">
                  <p><?php echo e($worker["email"]); ?></p>
                </div>
              </div>
              <div class="card-staff-body-row">
                <div class="card-staff-icon">
                  <i class="fab fa-whatsapp fa-2x"></i>
                </div>
                <div class="card-staff-description">
                  <p><?php echo e($worker["phone"]); ?></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </div>
  </section>
  <!-- End Staff-->
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>