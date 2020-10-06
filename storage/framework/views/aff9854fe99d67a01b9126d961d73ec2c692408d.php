<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>

<body>
    <tr style="background:#000;color:#fff;font-weight:thin">
        <td valign="middle">Apellido Paterno</td>
        <td valign="middle">Apellido Materno</td>
        <td valign="middle">Nombres</td>
        <td valign="middle" style="text-align:center">Sexo</td>
        <td valign="middle" style="text-align:center">Estado Civil</td>
        <td valign="middle" style="text-align:center">Fecha de Nacimiento</td>
        <td valign="middle" style="text-align:center">N° Documento</td>
        <td valign="middle" style="text-align:center">E-mail</td>
        <td valign="middle" style="text-align:center">Teléfono</td>
    </tr>
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fila): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <tr>
        <td style="padding:10px" valign="middle"><?php echo e(strtoupper($fila->ApellidoPaterno)); ?></td>
        <td style="padding:10px" valign="middle"><?php echo e(strtoupper($fila->ApellidoMaterno)); ?></td>
        <td style="padding:10px" valign="middle"><?php echo e(strtoupper($fila->Nombres)); ?></td>
        <td style="padding:10px;text-align:center" valign="middle"><?php echo e($fila->Sexo); ?></td>
        <td style="padding:10px;text-align:center" valign="middle">
            <?php if($fila->EstadoCivil === 'Casado'): ?>
                1
            <?php elseif($fila->EstadoCivil === 'Soltero'): ?>
                2
            <?php elseif($fila->EstadoCivil === 'Viudo'): ?>
                3
            <?php elseif($fila->EstadoCivil === 'Divorciado'): ?>
                4
            <?php endif; ?>
        </td>
        <td style="padding:10px;text-align:center" valign="middle"><?php echo e(date_format(date_create($fila->FechaNacimiento), 'd/m/Y')); ?></td>
        <td style="padding:10px;text-align:center" valign="middle"><?php echo e($fila->NumeroDocumentoIdentidad); ?></td>
        <td style="padding:10px;text-align:center" valign="middle"><?php echo e($fila->Email); ?></td>
        <td style="padding:10px;text-align:center" valign="middle"><?php echo e($fila->Telefono); ?></td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>

</html>