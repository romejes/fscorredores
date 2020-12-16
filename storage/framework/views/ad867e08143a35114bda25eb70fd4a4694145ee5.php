<?php $__env->startSection('contenidoPlantillaPrincipal'); ?>
<main>
  <!-- Heading Page-->
  <?php $__env->startComponent('web.componentes.banner_pagina', ["imagenBanner" => 'banner_seguros.jpg']); ?>
    <?php $__env->slot('tituloBanner'); ?>
    <h1>Nuestros seguros</h1>
    <?php $__env->endSlot(); ?>
  <?php echo $__env->renderComponent(); ?>
  <!-- End Heading Page-->

  <!-- Section -->
  <?php $__currentLoopData = $seguros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $grupoSeguro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <section>
    <div class="section-container">
      <div class="section-row">
        <div class="section-heading col-12">
          <h2 class="section-title"><?php echo e($grupoSeguro['titulo']); ?></h2>
        </div>
        <div class="section-body col-12">
          <div class="wrapper-card">
            <?php $__currentLoopData = $grupoSeguro['seguros']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seguro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card" data-aos="fade-up">
              <img src="<?php echo e(asset('images/seguros/'. $seguro['imagen_miniatura'])); ?>" alt="">
              <div class="card-body">
                <h3 class="card-title"><?php echo e($seguro['nombre']); ?></h3>
              </div>
              <div class="card-footer">
                <a href="<?php echo e(url('seguros/'. $seguro['slug'])); ?>" class="button button-primary">Más información</a>
              </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</main>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
Seguros
<?php $__env->stopSection(); ?>

<?php echo $__env->make('web.plantillas.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>