 <?php $__env->startSection('seguro-content'); ?>
<h4 class="seguro-title">Seguro obligatorio contra accidentes de tránsito (SOAT)</h4>
<article class="seguro-description">
  <h5 class="seguro-subtitle">¿En que consiste?</h5>
  <p>El SOAT (Seguro Obligatorio de Accidentes de Tránsito) cubre no solo al conductor del vehículo, sino también a
    ocupantes o terceros no ocupantes de un vehículo automotor, este vela por tu bienestar y beneficia a la sociedad de
    manera inmediata e incondicional. </p>
</article>

<article class="seguro-description">
  <h5 class="seguro-subtitle">Cobertura del seguro</h5>
  <p>Trabajadores que laboran en empresas que desarrollan actividades económicas del alto riesgo, descritas en el anexo
    5 del Decreto Supremo N° 009-97-SA "Reglamento de la Ley de Modernización de la Seguridad Social". </p>

  <table class="table color-fs-grey">
    <thead>
      <th class="center">Descripción</th>
      <th class="center">Cobertura por persona</th>
    </thead>
    <tbody>
      <tr>
        <td class="left">Muerte</td>
        <td class="valor">4 UIT</td>
      </tr>
      <tr>
        <td class="left">Invalidez permanente</td>
        <td class="valor">Hasta 4 UIT</td>
      </tr>
      <tr>
        <td class="left">Incapacidad temporal</td>
        <td class="valor">Hasta 1 UIT</td>
      </tr>
      <tr>
        <td class="left">Gastos médicos</td>
        <td class="valor">Hasta 5 UIT</td>
      </tr>
      <tr>
        <td class="left">Gastos de sepelio</td>
        <td class="valor">Hasta 1 UIT</td>
      </tr>
    </tbody>
  </table>
</article>

<article class="seguro-description">
  <h5 class="seguro-subtitle">No cobertura del seguro</h5>
  <p>Quedan excluidas de la cobertura de esta póliza la muerte y/o lesiones corporales producidas como consecuencia de
    la ocurrencia de los siguientes eventos:</p>
  <ul>
    <li>Causadas en carreras de automóviles y otras competencias de vehículos automotores </li>
    <li>Ocurridas fuera del territorio nacional. </li>
    <li>Ocurridas como consecuencia de guerras, eventos de la naturaleza u otros casos fortuitos o de fuerza mayor
      enteramente extraños a la circulación del vehículo automotor. </li>
    <li>El suicidio y la comisión de lesiones auto inferidas utilizando el vehículo automotor asegurado. </li>
  </ul>
</article>

<article class="seguro-description">
  <h5 class="seguro-subtitle">Dirigido a:</h5>
  <p>Publico en general, que posea algun vehiculo motorizado </p>
</article>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.layouts._detalle-seguro', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>