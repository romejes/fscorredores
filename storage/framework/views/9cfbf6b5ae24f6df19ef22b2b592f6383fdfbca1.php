 <?php $__env->startSection('content'); ?>
<main id="seguros-main">
  <!-- Heading -->
  <?php $__env->startComponent('web.components._section-header'); ?> Nuestros Seguros <?php echo $__env->renderComponent(); ?>
  <!-- End Heading-->

  <!-- Main section content -->
  <section class="section">
    <div class="container">
      <div class="row">
        <!-- Navbar-->
        <div class="col-lg-4">
          <!-- ...for big screens -->
          <div class="d-none d-lg-block">
            <ul class="nav nav-seguros">
              <?php $__currentLoopData = $seguros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seguro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li class="nav-seguros-item">
                <span><?php echo e($seguro['title']); ?></span>
                <ul class="nav-seguros-item-children">
                  <?php $__currentLoopData = $seguro['seguros']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detalle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li>
                    <a href="<?php echo e(url('seguros/'.$detalle['slug'])); ?>"
                      class="nav-seguros-link <?php echo e(Request::segment(2) == $detalle['slug'] ? 'active':''); ?>"><?php echo e($detalle['name']); ?></a>
                  </li>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
              </li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
          </div>
          <!-- End ...for big screens -->

          <!-- ...for small screens -->
          <div class="form-group d-lg-none">
            <select name="seguros" id="ddo-seguros" class="form-control ">
              <option value="" selected>-- Escoja el seguro que desea revisar --</option>
              <?php $__currentLoopData = $seguros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seguro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <optgroup label="<?php echo e($seguro['title']); ?>">
                <?php $__currentLoopData = $seguro['seguros']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detalle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option data-href="<?php echo e(url('seguros/'. $detalle['slug'])); ?>"><?php echo e($detalle['name']); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </optgroup>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
          </div>
          <!-- ...for small screens -->
          <div class="divide"></div>
        </div>
        <!--End Navbar -->


        <!-- Insurance description -->
        <div class="col-lg-8">
          <?php echo $__env->yieldContent('seguro-content'); ?>
        </div>
        <!-- End Insurance description -->
      </div>
    </div>
  </section>
  <!-- End Main section content -->
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>