<?php $__env->startSection('content'); ?>
<main>
  <!-- Heading -->
  <?php $__env->startComponent('web.components._section-header'); ?>
  Contáctanos
  <?php echo $__env->renderComponent(); ?>
  <!-- End Heading-->

  <!-- Contact Form -->
  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h4 class="section-title color-fs-blue">Deja tus preguntas o sugerencias</h4>
        </div>
        <div class="col-12">
          <form method="POST" id="frm-contacto" class="form-row" novalidate>
            <div class="form-group col-lg-6">
              <label for="txt-nombres">Nombres y Apellidos</label>
              <input type="text" name="nombres-apellidos" id="txt-nombres-apellidos" class="form-control" required>
            </div>
            <div class="form-group col-lg-6">
              <label for="txt-asunto">Asunto</label>
              <input type="text" name="asunto" id="txt-asunto" class="form-control" required>
            </div>
            <div class="form-group col-lg-6">
              <label for="txt-email">Email</label>
              <input type="email" name="email" id="txt-email" class="form-control" required>
            </div>
            <div class="form-group col-lg-6">
              <label for="txt-telefono">Telefono</label>
              <input type="tel" name="telefono" id="txt-telefono" class="form-control" required>
            </div>
            <div class="form-group col-12">
              <label for="txt-comentario">Comentarios, quejas o sugerencias</label>
              <textarea name="comentario" id="txt-comentario" cols="30" rows="5" class="form-control"
                required></textarea>
            </div>
            <div class="form-group col text-center">
              <button class="btn btn-primary" type="button" id="btn-enviar">Enviar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Form -->

  <!-- Map -->
  <section class="section pb-0">
    <div class="container">
      <div class="row">
        <div class="col">
          <h4 class="section-title color-fs-blue">...o visita nuestra oficina</h4>
        </div>
      </div>
    </div>
    <div id="location-map"></div>
  </section>
  <!-- End Map -->
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>