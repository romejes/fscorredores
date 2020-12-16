<?php $__env->startSection('contenidoPlantillaPrincipal'); ?>
<main>
  <!-- Heading -->
  <?php echo $__env->yieldContent('bannerSeguro'); ?>
  <!-- End Heading-->

  <!-- Section -->
  <section>
    <div class="section-container">
      <div class="section-row">
        <div class="section-body col-12">
          <!-- Split Container-->
          <div class="split-container">
            <!-- Left Side -->
            <div class="left-half">
              <!-- Nav for large screens -->
              <nav class="treeview treeview-insurances">
                <ul class="treeview-root">
                  <?php $__currentLoopData = $seguros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $grupoSeguros): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <li class="treeview-root-group">
                    <span class="treeview-item"><?php echo e($grupoSeguros['titulo']); ?></span>
                    <ul>
                      <?php $__currentLoopData = $grupoSeguros['seguros']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seguro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <li>
                        <a href="<?php echo e(url('seguros/'.$seguro['slug'])); ?>"
                          class="<?php echo e(Request::segment(2) == $seguro['slug'] ? 'active':''); ?>"><?php echo e($seguro['nombre']); ?></a>
                      </li>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                  </li>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
              </nav>
              <!-- End Nav for large screens -->

              <!-- Nav for small screens -->
              <select name="seguros" id="sel-insurances" class="form-control ">
                <option value="" selected>-- Escoja el seguro que desea revisar --</option>
                <?php $__currentLoopData = $seguros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $grupoSeguros): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <optgroup label="<?php echo e($grupoSeguros['titulo']); ?>">
                  <?php $__currentLoopData = $grupoSeguros['seguros']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $seguro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option data-href="<?php echo e(url('seguros/'. $seguro['slug'])); ?>"><?php echo e($seguro['nombre']); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </optgroup>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
              <!-- End Nav for small screens -->
            </div>
            <!-- End Left Side -->

            <div class="divide"></div>

            <!-- Right Side -->
            <div class="right-half">
              <?php echo $__env->yieldContent('informacionSeguro'); ?>
            </div>
            <!-- End Right Side -->
          </div>
          <!-- End Split Container-->
        </div>
      </div>
    </div>
  </section>
  <!-- End Section -->
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.plantillas.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>