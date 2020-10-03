 <?php $__env->startSection('content'); ?>
<main>
  <!-- Heading -->
  <?php $__env->startComponent('web.components._section-header'); ?> Pagina no encontrada
  <?php echo $__env->renderComponent(); ?>
  <!-- End Heading-->

  <!-- Customers -->
  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col-12 py-4 text-center">
          <i class="far fa-frown fa-10x my-5"></i>
          <p class="mt-3">
            Lo sentimos, la página que intenta visitar no existe
          </p>
        </div>
      </div>
    </div>
  </section>
  <!-- End Customers-->
</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('web.layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>