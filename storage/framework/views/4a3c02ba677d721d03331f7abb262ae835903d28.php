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
          <ul class="nav nav-seguros flex-column d-none d-lg-block">
            <li class="nav-seguros-item">
              <span>Seguros SCTR</span>
              <ul class="nav-seguros-item-children">
                <li>
                  <a
                    href="#seguros-sctr-pension"
                    class="nav-seguros-link active"
                    >SCTR Pensión</a
                  >
                </li>
                <li>
                  <a href="#seguros-sctr-salud" class="nav-seguros-link"
                    >SCTR Salud</a
                  >
                </li>
              </ul>
            </li>
            <li class="nav-seguros-item">
              <span>Seguros para colaboradores</span>
              <ul class="nav-seguros-item-children">
                <li>
                  <a href="#seguros-colaboradores-eps" class="nav-seguros-link"
                    >EPS</a
                  >
                </li>
                <li>
                  <a
                    href="#seguros-colaboradores-vida-ley"
                    class="nav-seguros-link"
                    >Vida Ley</a
                  >
                </li>
              </ul>
            </li>
          </ul>
          <!-- End ...for big screens -->

          <!-- ...for small screens -->
          <div class="form-group d-lg-none">
            <label for="ddo-seguros"
              >Seleccione un seguro para ver su información</label
            >
            <select name="seguros" id="ddo-seguros" class="form-control ">
            </select>
          </div>
          <!-- ...for small screens -->
        </div>
        <!--End Navbar -->

        <!-- Insurance description -->
        <div class="col-lg-8">
          <h4 class="seguro-title">Seguro 1</h4>
          <article class="seguro-description">
            <p>
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. A sed
              corporis doloremque. Vitae officia quisquam, eligendi, adipisci
              ducimus pariatur, fuga ipsa tenetur natus dolore officiis sint
              molestias consequatur facere praesentium?
            </p>
          </article>
        </div>
        <!-- End Insurance description -->
      </div>
    </div>
  </section>
  <!-- End Main section content -->
</main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('web.layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>