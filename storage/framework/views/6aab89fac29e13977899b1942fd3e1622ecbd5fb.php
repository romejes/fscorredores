 <?php $__env->startSection('content'); ?>
<!-- Content header -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">
          Solicitudes de Compra
          <small>SOAT</small>
        </h1>
      </div>

      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item">
            <a href="<?php echo e(URL::to('intranet')); ?>"><i class="fas fa-home"></i></a>
          </li>
          <li class="breadcrumb-item">
            <a href="<?php echo e(URL::to('intranet/compras/soat')); ?>">Compra SOAT</a>
          </li>
          <li class="breadcrumb-item active">Ver detalle</li>
        </ol>
      </div>
    </div>
  </div>
</div>

<!-- Main Content -->
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col">
        <div class="card card-primary card-outline">
          <div class="card-header">
            <div class="float-sm-left">
              <h4 class="card-title m-0">Detalle de la solicitud</h4>
            </div>
            <div class="float-sm-right">
              <a class="btn btn-primary" href="<?php echo e(url('intranet/compras/soat')); ?>"><i class="fas fa-arrow-left"></i>
                Ver Listado</a>
            </div>
          </div>
          <div class="card-body" id="detail-compra-soat">
            <?php $__env->startComponent('intranet.components.status_info_box', ['estadoSolicitud' =>
            $detalleCompra->solicitud->IdEstadoSolicitud]); ?>
            <?php echo $__env->renderComponent(); ?>
            <dl class="row">
              <dt class="col-sm-4">Código</dt>
              <dd class="col-sm-8"><?php echo e($detalleCompra->solicitud->Codigo); ?></dd>
            </dl>
            <dl class="row">
              <dt class="col-sm-4">Solicitado Por</dt>
              <dd class="col-sm-8"><?php echo e($detalleCompra->solicitado_por); ?></dd>
            </dl>
            <dl class="row">
              <dt class="col-sm-4">Fecha de Nacimiento</dt>
              <dd class="col-sm-8"><?php echo e($detalleCompra->FechaNacimiento); ?></dd>
            </dl>
            <dl class="row">
              <dt class="col-sm-4">Teléfono</dt>
              <dd class="col-sm-8">
                <?php echo e(!$detalleCompra->Telefono ? "-" : $detalleCompra->Telefono); ?>

              </dd>
            </dl>
            <dl class="row">
              <dt class="col-sm-4">Correo Electrónico</dt>
              <dd class="col-sm-8"><?php echo e($detalleCompra->Email); ?></dd>
            </dl>
            <dl class="row">
              <dt class="col-sm-4">N° Documento de Identidad</dt>
              <dd class="col-sm-8"><?php echo e($detalleCompra->documento_identidad); ?></dd>
            </dl>
            <dl class="row">
              <dt class="col-sm-4">Tipo de Compra</dt>
              <dd class="col-sm-8"><?php echo e($detalleCompra->TipoCompra); ?></dd>
            </dl>

            <?php if($detalleCompra->TipoCompra === 'Adquisición'): ?>
            <dl class="row">
              <dt class="col-sm-4">Dirección de envío</dt>
              <dd class="col-sm-8"><?php echo e($detalleCompra->Direccion); ?></dd>
            </dl>

            <dl class="row">
              <dt class="col-sm-4">Placa</dt>
              <dd class="col-sm-8"><?php echo e($detalleCompra->Placa); ?></dd>
            </dl>

            <dl class="row">
              <dt class="col-sm-4">Asientos</dt>
              <dd class="col-sm-8"><?php echo e($detalleCompra->Asientos); ?></dd>
            </dl>

            <dl class="row">
              <dt class="col-sm-4">Uso</dt>
              <dd class="col-sm-8"><?php echo e($detalleCompra->Uso); ?></dd>
            </dl>

            <dl class="row">
              <dt class="col-sm-4">Compañia de Seguros</dt>
              <dd class="col-sm-8"><?php echo e($detalleCompra->CompaniaSeguro); ?></dd>
            </dl>

            <dl class="row">
              <dt class="col-sm-4">Documento de Identidad</dt>
              <dd class="col-sm-8">
                <a href="<?php echo e(url('intranet/afiliaciones/seguro_estudiante/' . $detalleCompra->solicitud->Codigo . '/adjuntos/' .$detalleCompra->ImagenDni)); ?>"
                  target="_blank">Ver</a>
              </dd>
            </dl>

            <dl class="row">
              <dt class="col-sm-4">Tarjeta de Propiedad</dt>
              <dd class="col-sm-8">
                <a target="_blank"
                  href="<?php echo e(url('intranet/afiliaciones/seguro_estudiante/' . $detalleCompra->solicitud->Codigo . '/adjuntos/' . $detalleCompra->ImagenTarjetaPropiedad)); ?>">Ver</a>
              </dd>
            </dl>
            <?php else: ?>
            <dl class="row">
              <dt class="col-sm-4">Póliza del seguro</dt>
              <dd class="col-sm-8">
                <a href="<?php echo e(url('intranet/afiliaciones/seguro_estudiante/' . $detalleCompra->solicitud->Codigo . '/adjuntos/' .$detalleCompra->ImagenPoliza)); ?>"
                  target="_blank">Ver</a>
              </dd>
            </dl>
            <?php endif; ?>

          </div>
          <div class="card-footer">
            <div class="float-sm-right">
              <?php if($detalleCompra->solicitud->IdEstadoSolicitud == 1): ?>
              <button class="btn btn-danger" id="btn-rechazar">Rechazar</button>
              <button class="btn btn-success" id="btn-marcar-atendido">Marcar como atendido</button>
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('intranet.layouts.dashboard', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>