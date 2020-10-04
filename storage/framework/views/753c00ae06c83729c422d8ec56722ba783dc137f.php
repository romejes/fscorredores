 <?php $__env->startSection('content'); ?>
<main>
  <!-- Heading -->
  <?php $__env->startComponent('web.components._section-header'); ?>
  Nuestros clientes
  <?php echo $__env->renderComponent(); ?>
  <!-- End Heading-->

  <!-- Customers -->
  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col-12 py-4">
          <h4 class="section-title color-fs-blue">Municipalidades</h4>
          <ul class="list-clientes <?php echo e(count($clientes["municipalidades"]) > 7 ? 'list-clientes-divide' :''); ?>">
            <?php $__currentLoopData = $clientes["municipalidades"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $municipalidad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="list-clientes-item" data-aos="fade-up"><?php echo e($municipalidad); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
        </div>

        <div class="col-12 py-4">
          <h4 class="section-title color-fs-blue">Universidades</h4>
          <ul class="list-clientes <?php echo e(count($clientes["universidades"]) > 7 ? 'list-clientes-divide' :''); ?>">
            <?php $__currentLoopData = $clientes["universidades"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $universidad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="list-clientes-item" data-aos="fade-up"><?php echo e($universidad); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
        </div>

        <div class="col-12 py-4">
          <h4 class="section-title color-fs-blue">Gobiernos Regionales</h4>
          <ul class="list-clientes <?php echo e(count($clientes["gobiernos_regionales"]) > 7 ? 'list-clientes-divide' :''); ?>">
            <?php $__currentLoopData = $clientes["gobiernos_regionales"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gobiernoRegional): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="list-clientes-item" data-aos="fade-up"><?php echo e($gobiernoRegional); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
        </div>

        <div class="col-12 py-4">
          <h4 class="section-title color-fs-blue">Otros</h4>
          <ul class="list-clientes <?php echo e(count($clientes["otros"]) > 7 ? 'list-clientes-divide' :''); ?>">
            <?php $__currentLoopData = $clientes["otros"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $otro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="list-clientes-item" data-aos="fade-up"><?php echo e($otro); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Customers-->
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>