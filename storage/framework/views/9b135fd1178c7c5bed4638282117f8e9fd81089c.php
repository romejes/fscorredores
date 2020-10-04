 <?php $__env->startSection('solicitud_content'); ?>
<h4 class="section-title color-fs-blue text-left">Comprar SOAT</h4>
<div class="wizard" id="wizard-comprar-soat">
  <ul class="nav">
    <li>
      <a class="nav-link" href="#tab-pane-tipo-compra">Paso 1 <br /><small>Tipo de compra</small></a>
    </li>
    <li>
      <a class="nav-link" href="#tab-pane-datos-personales">Paso 2 <br /><small>Datos personales del
          propietario</small></a>
    </li>
    <li>
      <a class="nav-link" href="#tab-pane-datos-vehiculo">Paso 3 <br /><small>Datos del Vehiculo</small></a>
    </li>
    <li>
      <a class="nav-link" href="#tab-pane-datos-poliza">Paso 3 <br /><small>Poliza de seguro</small></a>
    </li>
    <li>
      <a class="nav-link" href="#tab-pane-datos-adicionales">Paso 4 <br /><small>Datos adicionales</small></a>
    </li>
  </ul>

  <form autocomplete="off" id="frm-comprar-soat">
    <div class="tab-content">
      <!-- Paso 1 - Tipo de compra -->
      <div class="tab-pane" id="tab-pane-tipo-compra">
        <div class="container">
          <fieldset class="form-group">
            <div class="row">
              <legend class="col-sm-5 col-form-label pt-0">¿Que tipo de operación quiere realizar? </legend>
              <div class="col-sm-7">
                <div class="form-check">
                  <input type="radio" name="tipo_compra" id="rad-renovar" value="renovacion" />
                  <label for="rad-renovar" class="form-check-label">Renovar</label>
                </div>
                <div class="form-check">
                  <input type="radio" name="tipo_compra" id="rad-adquirir" value="adquisicion" />
                  <label for="rad-adquirir" class="form-check-label">Adquirir</label>
                </div>
              </div>
            </div>
          </fieldset>
        </div>
      </div>
      <!-- End Paso 1-->

      <!-- Paso 2 - Datos personales -->
      <div class="tab-pane" id="tab-pane-datos-personales">
        <div class="container">
          <div class="form-group row">
            <label for="txt-nombres" class="col-sm-5 col-form-label">Nombres</label>
            <div class="col-sm-7">
              <input type="text" name="nombres" id="txt-nombres" class="form-control" required />
            </div>
          </div>

          <div class="form-group row">
            <label for="txt-apellido-paterno" class="col-sm-5 col-form-label">Apellido Paterno</label>
            <div class="col-sm-7">
              <input type="text" name="apellido_paterno" id="txt-apellido-paterno" class="form-control" required />
            </div>
          </div>

          <div class="form-group row">
            <label for="txt-apellido-materno" class="col-sm-5 col-form-label">Apellido Materno</label>
            <div class="col-sm-7">
              <input type="text" name="apellido_materno" id="txt-apellido-materno" class="form-control" />
            </div>
          </div>

          <div class="form-group row">
            <label for="ddo-tipo-documento-identidad" class="col-sm-5 col-form-label">Documento de
              Identidad</label>
            <div class="col-sm-7">
              <div class="form-group">
                <select name="tipo_documento_identidad" id="ddo-tipo-documento-identidad" class="form-control" required>
                  <?php $__currentLoopData = $tipoDocumentoIdentidad; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tipo): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo e($tipo->IdTipoDocumentoIdentidad); ?>"><?php echo e($tipo->Descripcion); ?>

                  </option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
              </div>

              <div class="form-group">
                <input type="text" name="numero_documento_identidad" id="txt-numero-documento-identidad" required
                  class="form-control" placeholder="N° de documento" />
              </div>
            </div>
          </div>

          <div class="form-group row">
            <label for="txt-fecha-nacimiento" class="col-form-label col-sm-5">Fecha de Nacimiento</label>
            <div class="col-sm-7">
              <input type="text" name="fecha_nacimiento" id="txt-fecha-nacimiento" class="form-control" required />
            </div>
          </div>

          <div class="form-group row">
            <label for="txt-email" class="col-form-label col-sm-5">Teléfono</label>
            <div class="col-sm-7">
              <input type="text" name="telefono" id="txt-telefono" class="form-control" required />
            </div>
          </div>

          <div class="form-group row">
            <label for="txt-correo" class="col-form-label col-sm-5">Correo electrónico</label>
            <div class="col-sm-7">
              <input type="email" name="correo" id="txt-correo" class="form-control" required />
            </div>
          </div>

          <div class="form-group row">
            <label for="txt-direccion" class="col-form-label col-sm-5">Dirección</label>
            <div class="col-sm-7">
              <input type="text" name="direccion" id="txt-direccion" class="form-control" />
            </div>
          </div>
        </div>
      </div>
      <!-- End Datos personales -->

      <!-- Paso 3 - Datos del vehiculo -->
      <div class="tab-pane" id="tab-pane-datos-vehiculo">
        <div class="container">
          <div class="form-group row">
            <label for="ddo-anio-vehiculo" class="col-form-label col-sm-5">Año de fabricación</label>
            <div class="col-sm-7">
              <select name="anio_vehiculo" id="ddo-anio-vehiculo" class="form-control">
                <?php for($i = date('Y'); $i >= 1950; $i--): ?>
                <option value="<?php echo e($i); ?>"><?php echo e($i); ?></option>
                <?php endfor; ?>
              </select>
            </div>
          </div>

          <div class="form-group row">
            <label for="txt-placa" class="col-form-label col-sm-5">Placa</label>
            <div class="col-sm-7">
              <input type="text" name="placa" id="txt-placa" class="form-control" />
            </div>
          </div>

          <div class="form-group row">
            <label for="ddo-uso" class="col-form-label col-sm-5">Uso del vehículo</label>
            <div class="col-sm-7">
              <select name="uso" id="ddo-uso" class="form-control">
                <option value="">-- Escoja una opción --</option>
                <option value="Particular">Particular</option>
                <option value="Carga">Carga</option>
                <option value="Transporte de Personal">Transporte de Personal</option>
                <option value="Escolar">Escolar</option>
              </select>
            </div>
          </div>

          <div class="form-group row">
            <label for="txt-asientos" class="col-form-label col-sm-5">Asientos</label>
            <div class="col-sm-7">
              <input type="number" name="asientos" id="txt-asientos" class="form-control" step="1" min="1" value="1" />
            </div>
          </div>
        </div>
      </div>
      <!-- End Datos del vehiculo-->

      <!-- Paso 3 - Poliza -->
      <div class="tab-pane " id="tab-pane-datos-poliza">
        <div class="container">
          <div class="form-group col-12">
            <label>Adjunta tu póliza de seguro actual o anterior en formato
              PDF, o una foto de la misma</label>
            <div class="custom-file">
              <input type="file" name="imagen_poliza" id="fil-poliza" class="custom-file-input"
                accept="image/*,application/pdf" />
              <label class="custom-file-label" for="fil-poliza" data-browse="Examinar">Seleccionar
                Archivo</label>
            </div>
          </div>
        </div>
      </div>
      <!--End Paso 3 - Poliza-->

      <!-- Paso 4 - Datos adicionales-->
      <div class="tab-pane" id="tab-pane-datos-adicionales">
        <div class="container">
          <fieldset class="form-group">
            <div class="row">
              <legend class="col-sm-5 col-form-label pt-0">Elija la compañia de seguros con la que quiere
                trabajar</legend>
              <div class="col-sm-7">
                <?php echo $__env->make('web.components._aseguradoras', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
              </div>
            </div>
          </fieldset>

          <div class="form-group col-12">
            <label>Adjunta la foto de tu tarjeta de propiedad</label>
            <div class="custom-file">
              <input type="file" name="imagen_tarjeta_propiedad" id="fil-tarjeta-propiedad" class="custom-file-input"
                accept="image/*,application/pdf" />
              <label class="custom-file-label" for="fil-tarjeta-propiedad" data-browse="Examinar">Seleccionar
                Archivo</label>
            </div>
          </div>

          <div class="form-group col-12">
            <label>Adjunta la foto de tu documento de identidad</label>
            <div class="custom-file">
              <input type="file" name="imagen_dni" id="fil-dni" class="custom-file-input"
                accept="image/*,application/pdf" />
              <label class="custom-file-label" for="fil-dni" data-browse="Examinar">Seleccionar
                Archivo</label>
            </div>
          </div>
        </div>
      </div>
      <!-- End Datos de la cotizacion-->
    </div>
  </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.layouts._detalle-solicitud', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>