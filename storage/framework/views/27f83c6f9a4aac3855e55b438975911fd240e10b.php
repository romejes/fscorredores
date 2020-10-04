 <?php $__env->startSection('content'); ?>
<main id="seguros-main">
  <!-- Heading -->
  <?php $__env->startComponent('web.components._section-header'); ?> Solicite su seguro <?php echo $__env->renderComponent(); ?>
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
              <?php $__currentLoopData = $solicitudes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $solicitud): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li class="nav-seguros-item">
                <span><?php echo e($solicitud['seguro']); ?></span>
                <ul class="nav-seguros-item-children">
                  <?php $__currentLoopData = $solicitud['opciones']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detalle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li>
                    <a href="<?php echo e(url('solicitudes/'.$detalle['slug'])); ?>"
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
            <label for="ddo-seguros">Seleccione un seguro para ver su información</label>
            <select name="seguros" id="ddo-seguros" class="form-control ">
              <?php $__currentLoopData = $solicitudes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $solicitud): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <optgroup label="<?php echo e($solicitud['seguro']); ?>">
                <?php $__currentLoopData = $solicitud['opciones']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detalle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option data-href="<?php echo e(url('solicitudes/'. $detalle['slug'])); ?>"
                  <?php echo e(Request::segment(2) == $detalle['slug'] ? 'selected':''); ?>><?php echo e($detalle['name']); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </optgroup>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
          </div>
          <!-- ...for small screens -->
        </div>
        <!--End Navbar -->

        <!-- Insurance description -->
        <div class="col-lg-8">
          <?php echo $__env->yieldContent('solicitud_content'); ?>
        </div>
        <!-- End Insurance description -->
      </div>
    </div>
  </section>
  <!-- End Main section content -->
</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('web.layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>