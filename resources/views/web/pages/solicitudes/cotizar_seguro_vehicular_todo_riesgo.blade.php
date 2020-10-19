@extends('web.layouts._detail-request')

@section('request-content')
<h2>Cotizar Seguro Vehicular Todo Riesgo</h2>

<div class="wizard" id="wizard-cotizar-seguro-vehicular-todo-riesgo">
  <ul class="nav">
    <li>
      <a class="nav-link" href="#tab-pane-datos-personales">Paso 1 <br /><small>Datos personales</small></a>
    </li>
    <li>
      <a class="nav-link" href="#tab-pane-datos-vehiculo">Paso 2 <br /><small>Datos del vehículo</small></a>
    </li>
    <li>
      <a class="nav-link" href="#tab-pane-datos-aseguradora">Paso 3 <br /><small>Aseguradora</small></a>
    </li>
  </ul>

  <form autocomplete="off" id="frm-cotizar-seguro-vehicular-todo-riesgo">
    <div class="tab-content">
      <!-- Datos personales -->
      <div class="tab-pane" id="tab-pane-datos-personales">
        <div class="container">
          <div class="form-group row">
            <label for="txt-nombres" class="col-sm-5 col-form-label">Nombres</label>
            <div class="col-sm-7">
              <input type="text" name="nombres" id="txt-nombres" class="form-control" required maxlength="40" />
            </div>
          </div>

          <div class="form-group row">
            <label for="txt-apellido-paterno" class="col-sm-5 col-form-label">Apellido Paterno</label>
            <div class="col-sm-7">
              <input type="text" name="apellido_paterno" id="txt-apellido-paterno" class="form-control" maxlength="40"
                required />
            </div>
          </div>

          <div class="form-group row">
            <label for="txt-apellido-materno" class="col-sm-5 col-form-label">Apellido Materno</label>
            <div class="col-sm-7">
              <input type="text" name="apellido_materno" id="txt-apellido-materno" class="form-control"
                maxlength="40" />
            </div>
          </div>

          <div class="form-group row">
            <label for="ddo-tipo-documento-identidad" class="col-sm-5 col-form-label">Documento de
              Identidad</label>
            <div class="col-sm-7">
              <div class="form-group">
                <select name="tipo_documento_identidad" id="ddo-tipo-documento-identidad" class="form-control" required>
                  @foreach ($tipoDocumentoIdentidad as $tipo)
                  <option value="{{$tipo->IdTipoDocumentoIdentidad}}">{{ $tipo->Descripcion}}
                  </option>
                  @endforeach
                </select>
              </div>

              <div class="form-group">
                <input type="text" name="numero_documento_identidad" id="txt-numero-documento-identidad" required
                  class="form-control" placeholder="N° de documento" maxlength="15" />
              </div>
            </div>
          </div>


          <div class="form-group row">
            <label for="txt-telefono" class="col-form-label col-sm-5">Teléfono/Celular</label>
            <div class="col-sm-7">
              <input type="tel" name="telefono" id="txt-telefono" class="form-control" maxlength="40" required />
            </div>
          </div>

          <div class="form-group row">
            <label for="txt-correo" class="col-form-label col-sm-5">Correo electrónico</label>
            <div class="col-sm-7">
              <input type="email" name="correo" id="txt-correo" class="form-control" maxlength="40" required />
            </div>
          </div>
        </div>
      </div>
      <!-- End Datos personales -->

      <!-- Datos del vehiculo -->
      <div class="tab-pane" id="tab-pane-datos-vehiculo">
        <div class="container">
          <div class="form-group row">
            <label for="ddo-anio-vehiculo" class="col-form-label col-sm-5">Año de fabricación</label>
            <div class="col-sm-7">
              <select name="anio_vehiculo" id="ddo-anio-vehiculo" class="form-control" required>
                @for ($i = date('Y'); $i >= 1950; $i--)
                <option value="{{ $i }}">{{ $i }}</option>
                @endfor
              </select>
            </div>
          </div>

          <div class="form-group row">
            <label for="txt-placa" class="col-form-label col-sm-5">Placa</label>
            <div class="col-sm-7">
              <input type="text" name="placa" id="txt-placa" class="form-control" maxlength="10" required />
            </div>
          </div>

          <div class="form-group row">
            <label for="ddo-uso" class="col-form-label col-sm-5">Uso del vehículo</label>
            <div class="col-sm-7">
              <select name="uso" id="ddo-uso" class="form-control" required>
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
              <input type="number" name="asientos" id="txt-asientos" class="form-control" step="1" min="1" value="1"
                required />
            </div>
          </div>

          <div class="form-group row">
            <label for="txt-clase-vehiculo" class="col-form-label col-sm-5">Clase de vehículo</label>
            <div class="col-sm-7">
              <select name="clase_vehiculo" id="txt-clase-vehiculo" class="form-control" required>
                <option value="">-- Escoja una opción --</option>
                @foreach($claseVehiculo as $clase)
                <option value="{{ $clase->IdClaseVehiculo }}">{{ $clase->Descripcion}}</option>
                @endforeach
              </select>
            </div>
          </div>

          <div class="form-group row">
            <label for="txt-marca" class="col-form-label col-sm-5">Marca</label>
            <div class="col-sm-7">
              <input type="text" name="marca" id="txt-marca" class="form-control" maxlength="40" required />
            </div>
          </div>

          <div class="form-group row">
            <label for="txt-modelo" class="col-form-label col-sm-5">Modelo</label>
            <div class="col-sm-7">
              <input type="text" name="modelo" id="txt-modelo" class="form-control" maxlength="100" required />
            </div>
          </div>

          <div class="form-group row">
            <label for="txt-costo-vehiculo" class="col-form-label col-sm-5">Costo del vehículo (precio en
              US$)</label>
            <div class="col-sm-7">
              <input type="number" name="costo" id="txt-costo-vehiculo" class="form-control" required min="1"
                step="1.00" />
            </div>
          </div>
        </div>
      </div>
      <!-- End Datos del vehiculo-->

      <!-- Datos de la cotizacion-->
      <div class="tab-pane" id="tab-pane-datos-aseguradora">
        <div class="container">
          <fieldset class="form-group">
            <div class="row">
              <legend class="col-sm-5 col-form-label">Elija la compañia de seguros con la que quiere
                trabajar</legend>
              <div class="col-sm-7">
                @include('web.components._aseguradoras')
              </div>
            </div>
          </fieldset>
        </div>
      </div>
      <!-- End Datos de la cotizacion-->
    </div>
  </form>
</div>
@endsection