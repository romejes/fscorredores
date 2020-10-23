<?php $__env->startSection('insurance-content'); ?>
<h2>Seguro contra incendios</h2>

<article>
  <h3>¿En que consiste?</h3>
  <p>Es un seguro que cubre los daños sobre la edificación, contenidos, existencias, y en general todos los bienes
    por un accidente súbito e imprevisto en el cual resultes civilmente responsable. </p>
</article>

<article>
  <h3>Dirigido a:</h3>
  <p>Empresas comerciales, industriales, de servicios y en general todo tipo de empresas que requieran asegurar su
    patrimonio.</p>
</article>
<?php $__env->stopSection(); ?>


<?php $__env->startSection('title'); ?>
Seguro contra incendios
<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.layouts._insurance-detail', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>