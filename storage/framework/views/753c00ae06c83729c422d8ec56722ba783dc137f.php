 <?php $__env->startSection('content'); ?>
<main>
  <!-- Heading Page-->
  <?php $__env->startComponent('web.components._heading-page'); ?>
  Nuestros clientes
  <?php echo $__env->renderComponent(); ?>
  <!-- End Heading Page -->

  <!-- Section Clientes Municipalidades -->
  <section>
    <div class="section-container">
      <div class="section-row">
        <div class="section-heading col-12">
          <h2 class="section-title">Municipalidades</h2>
        </div>
        <div class="section-body col-12">
          <ul class="wrapper-customers <?php echo e(count($clientes["municipalidades"]) > 7 ? 'list-clientes-divide' :''); ?>">
            <?php $__currentLoopData = $clientes["municipalidades"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $municipalidad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="customer-item" data-aos="fade-up"><?php echo e($municipalidad); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Section Clientes Municipalidades -->

  <!-- Section Clientes Universidades -->
  <section>
    <div class="section-container">
      <div class="section-row">
        <div class="section-heading col-12">
          <h2 class="section-title">Universidades</h2>
        </div>
        <div class="section-body col-12">
          <ul class="wrapper-customers <?php echo e(count($clientes["universidades"]) > 7 ? 'list-clientes-divide' :''); ?>">
            <?php $__currentLoopData = $clientes["universidades"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $universidad): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="customer-item" data-aos="fade-up"><?php echo e($universidad); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Section Clientes Universidades -->

  <!-- Section Clientes Gobiernos Regionales -->
  <section>
    <div class="section-container">
      <div class="section-row">
        <div class="section-heading col-12">
          <h2 class="section-title">Gobiernos Regionales</h2>
        </div>
        <div class="section-body col-12">
          <ul class="wrapper-customers <?php echo e(count($clientes["gobiernos_regionales"]) > 7 ? 'list-clientes-divide' :''); ?>">
            <?php $__currentLoopData = $clientes["gobiernos_regionales"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gobiernoRegional): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="customer-item" data-aos="fade-up"><?php echo e($gobiernoRegional); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Section Clientes Gobiernos Regionales -->

  <!-- Section Clientes Otros -->
  <section>
    <div class="section-container">
      <div class="section-row">
        <div class="section-heading col-12">
          <h2 class="section-title">Otros</h2>
        </div>
        <div class="section-body col-12">
          <ul class="wrapper-customers <?php echo e(count($clientes["otros"]) > 7 ? 'list-clientes-divide' :''); ?>">
            <?php $__currentLoopData = $clientes["otros"]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $otro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li class="customer-item" data-aos="fade-up"><?php echo e($otro); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Section Clientes Otros -->
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>