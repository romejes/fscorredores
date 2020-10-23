<?php $__env->startSection('insurance-content'); ?>
<h2>EPS</h2>

<article>
  <h3>¿En que consiste?</h3>
  <p>Es un programa médico que te brinda atención ambulatoria y hospitalaria, consulta médica a domicilio, atención de
    emergencia accidental y médica, exámenes preventivos anuales, maternidad y control del niño sano entre otros</p>
</article>

<article>
  <h3>Dirigido a:</h3>
  <p>Empresas peruanas y MYPES (Micro y Pequeña Empresa), asi como empleadoras de trabajadores en planilla </p>
</article>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('title'); ?>
EPS
<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.layouts._insurance-detail', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>