@extends('web.layouts.main') @section('content')
<main id="seguros-main">
  <!-- Heading -->
  @component('web.components._section-header') Solicite su seguro @endcomponent
  <!-- End Heading-->

  <!-- Form -->
  <section class="section">
    <div class="container">
      <div class="row">
        <div class="col">
          <h4 class="section-title color-fs-blue">
            Cotizar Seguro Vehicular Todo Riesgo
          </h4>
        </div>
      </div>
      <div class="row">
        <div class="wizard">
          <ul class="nav">
            <li>
              <a class="nav-link" href="#tab-pane-datos-personales">Paso 1 <br /><small>Datos personales</small></a>
            </li>
            <li>
              <a class="nav-link" href="#tab-pane-datos-vehiculo">Paso 2 <br /><small>Datos del vehículo</small></a>
            </li>
            <li>
              <a class="nav-link" href="#tab-pane-datos-aseguradora">Paso 3 <br /><small>Aseguradore</small></a>
            </li>
          </ul>

          <form autocomplete="off">
            <div class="tab-content">
              <!-- Datos personales -->
              <div class="tab-pane" id="tab-pane-datos-personales">
                <div class="form-group col-12 col-md-6">
                  <label for="txt-nombres">Nombres</label>
                  <input type="text" name="nombres" id="txt-nombres" class="form-control" />
                </div>

                <div class="form-group col-12 col-md-6">
                  <label for="txt-apellido-paterno">Apellido Paterno</label>
                  <input type="text" name="apellido-paterno" id="txt-apellido-paterno" class="form-control" />
                </div>

                <div class="form-group col-12 col-md-6">
                  <label for="txt-apellido-materno">Apellido Materno</label>
                  <input type="text" name="apellido-materno" id="txt-apellido-materno" class="form-control" />
                </div>

                <div class="form-group col-12 col-md-6">
                  <label for="ddo-tipo-documento-identidad">Documento de Identidad</label>
                  <select name="tipo-documento-identidad" id="ddo-tipo-documento-identidad" class="form-control">
                    @foreach ($tipoDocumentoIdentidad as $tipo)
                    <option value="{{$tipo->IdTipoDocumentoIdentidad}}">{{ $tipo->Descripcion}}</option>
                    @endforeach
                  </select>
                </div>

                <div class="form-group col-12 col-md-6">
                  <input type="text" name="documento-identidad" id="txt-numero-documento-identidad" class="form-control"
                    placeholder="N° de documento" />
                </div>

                <div class="form-group col-12 col-md-6">
                  <label for="txt-telefono">Teléfono/Celular</label>
                  <input type="tel" name="telefono" id="txt-telefono" class="form-control" />
                </div>

                <div class="form-group col-12 col-md-6">
                  <label for="txt-apellido-materno">Correo electrónico</label>
                  <input type="email" name="email" id="txt-email" class="form-control" />
                </div>
              </div>
              <!-- End Datos personales -->

              <!-- Datos del vehiculo -->
              <div class="tab-pane show active" id="tab-pane-datos-vehiculo">
                <div class="form-group col-12 col-md-6">
                  <label for="ddo-anio-vehiculo">Año de fabricación</label>
                  <select name="anio-vehiculo" id="ddo-anio-vehiculo" class="form-control">
                    @for ($i = date('Y'); $i >= 1950; $i--)
                    <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                  </select>
                </div>

                <div class="form-group col-12 col-md-6">
                  <label for="txt-placa">Placa</label>
                  <input type="text" name="placa" id="txt-placa" class="form-control" />
                </div>

                <div class="form-group col-12 col-md-6">
                  <label for="txt-uso">Uso del vehículo</label>
                  <select name="uso" id="txt-uso" class="form-control">
                    <option value="">-- Escoja una opción --</option>
                    <option value="particular">Particular</option>
                    <option value="carga">Carga</option>
                    <option value="transporte_personal">Transporte de Personal</option>
                    <option value="escolar">Escolar</option>
                  </select>
                </div>

                <div class="form-group col-12 col-md-6">
                  <label for="txt-asientos">Asientos</label>
                  <input type="number" name="asientos" id="txt-asientos" class="form-control" step="1" min="1"
                    value="1" />
                </div>

                <div class="form-group col-12 col-md-6">
                  <label for="txt-clase-vehiculo">Clase de vehículo</label>
                  <select name="clase-vehiculo" id="txt-clase-vehiculo" class="form-control">
                    <option value="">-- Escoja una opción --</option>
                    @foreach($claseVehiculo as $clase)
                    <option value="{{ $clase->IdClaseVehiculo }}">{{ $clase->Descripcion}}</option>
                    @endforeach
                  </select>
                </div>

                <div class="form-group col-12 col-md-6">
                  <label for="txt-marca">Marca</label>
                  <input type="text" name="marca" id="txt-marca" class="form-control" />
                </div>

                <div class="form-group col-12 col-md-6">
                  <label for="txt-modelo">Modelo</label>
                  <input type="text" name="modelo" id="txt-modelo" class="form-control" />
                </div>

                <div class="form-group col-12 col-md-6">
                  <label for="txt-costo-vehiculo">Costo del vehículo (precio en US$)</label>
                  <input type="text" name="costo-vehiculo" id="txt-costo-vehiculo" class="form-control" />
                </div>
              </div>
              <!-- End Datos del vehiculo-->

              <!-- Datos de la cotizacion-->
              <div class="tab-pane" id="tab-pane-datos-aseguradora">
                <div class="form-group col-12">
                  <label>Elija la compañia de seguros con la que quiere
                    trabajar</label>
                  <div class="form-check">
                    <input type="radio" name="compania-seguro" id="rad-mapfre" />
                    <label for="rad-mapfre">MAPFRE</label>
                  </div>
                  <div class="form-check">
                    <input type="radio" name="compania-seguro" id="rad-rimac" />
                    <label for="rad-rimac">RIMAC</label>
                  </div>
                  <div class="form-check">
                    <input type="radio" name="compania-seguro" id="rad-pacifico" />
                    <label for="rad-pacifico">Pacífico</label>
                  </div>
                  <div class="form-check">
                    <input type="radio" name="compania-seguro" id="rad-la_positiva" />
                    <label for="rad-la_positiva">La Positiva</label>
                  </div>
                </div>
              </div>
              <!-- End Datos de la cotizacion-->
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- End Form -->
</main>
@endsection('content')