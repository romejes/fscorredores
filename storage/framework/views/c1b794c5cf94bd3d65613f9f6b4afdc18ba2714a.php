 <?php $__env->startSection('seguro-content'); ?>
<h4 class="seguro-title">EPS</h4>
<article class="seguro-description">
  <h5 class="seguro-subtitle">¿En que consiste?</h5>
  <p>Es un programa médico que te brinda atención ambulatoria y hospitalaria, consulta médica a domicilio, atención de
    emergencia accidental y médica, exámenes preventivos anuales, maternidad y control del niño sano entre otros
  </p>
</article>

<article class="seguro-description">
  <h5 class="seguro-subtitle">Dirigido a:</h5>
  <p>Empresas peruanas y MYPES (Micro y Pequeña Empresa), asi como empleadoras de trabajadores en planilla </p>
</article>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.layouts._detalle-seguro', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>