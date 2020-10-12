 <?php $__env->startSection('seguro-content'); ?>
<h4 class="seguro-title">Seguro contra terremotos</h4>
<article class="seguro-description">
  <h5 class="seguro-subtitle">¿En que consiste?</h5>
  <p>Es un seguro que cubre lacubre el inmueble descrito como Materia Asegurada en las Condiciones Particulares o
    Certificado de Seguro contra los daños materiales que le ocurran durante la vigencia de la Póliza, siempre y cuando
    dichos daños materiales sucedan en forma accidental, súbita e imprevista, como consecuencia directa de: </p>
  <ul>
    <li>Incendio y/o rayo</li>
    <li>Terremoto y/o temblor</li>
    <li>Erupcion volcánica</li>
    <li>Fuego subterraneo</li>
    <li>Tsunami</li>
    <li>Actos de destrucción ordenados por las autoridades durante el Incendio</li>
  </ul>
</article>

<article class="seguro-description">
  <h5 class="seguro-subtitle">Dirigido a:</h5>
  <p>Personas habitantes de departamentos en edificios, destinados y efectivamente utilizados únicamente para vivienda.
    No aplica para casas ni cuando el edificio, del que forma parte el departamento asegurado, sea de propiedad de una
    sola persona, natural o jurídica, o del ASEGURADO. </p>
</article>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.layouts._detalle-seguro', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>