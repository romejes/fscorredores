<ul>
    <li>Codigo: <?php echo e($detalle->solicitud->Codigo); ?></li>
    <li>Nombres y apellidos del solicitante: <?php echo e($detalle->solicitado_por); ?></li>
    <li>Fecha y Hora de envio: <?php echo e($detalle->solicitud->FechaHoraRegistro); ?></li>
</ul>