 <?php $__env->startSection('content'); ?>
<main id="seguros-main">
  <!-- Heading -->
  <?php $__env->startComponent('web.components._section-header'); ?> Nuestros Seguros <?php echo $__env->renderComponent(); ?>
  <!-- End Heading-->

  <!-- Content -->
  <section class="section">
    <div class="container">
      <?php $__currentLoopData = $seguros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seguro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="row my-5">
        <div class="col-12">
          <h4 class="section-title color-fs-blue"><?php echo e($seguro['title']); ?> </h4>
        </div>
        <div class="col-12">
          <div class="wrapper-seguros">
            <?php $__currentLoopData = $seguro['seguros']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detalle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card card-seguro">
              <div class="card-body">
                <h5 class="card-title-seguro"><?php echo e($detalle['name']); ?></h5>
              </div>
              <div class="card-footer card-seguro-footer">
                <a href="<?php echo e(url('seguros/'.$detalle['slug'])); ?>" class="btn btn-primary">Ver</a>
              </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        </div>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  </section>
  <!-- End Content -->
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>