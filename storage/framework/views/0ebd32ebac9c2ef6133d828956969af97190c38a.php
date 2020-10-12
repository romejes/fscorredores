 <?php $__env->startSection('seguro-content'); ?>
<h4 class="seguro-title">Seguro contra robo domiciliario</h4>
<article class="seguro-description">
  <h5 class="seguro-subtitle">¿En que consiste?</h5>
  <p>Este tipo de contrato permite asegurar cualquier casa habitación de uso particular (no para negocios) no solo en
    caso de robo o actos de vandalismo. La cobertura incluye la infraestructura de la vivienda, llamada usualmente casco
    o construcción, y todo su contenido.
  </p>
</article>

<article class="seguro-description">
  <h5 class="seguro-subtitle">Dirigido a:</h5>
  <p>Publico en general, no aplica para locales destinados a negocios. </p>
</article>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.layouts._detalle-seguro', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>