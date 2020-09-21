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
          <h4 class="section-title color-fs-blue">Comprar SOAT</h4>
        </div>
      </div>
      <div class="row">
        <div class="wizard">
          <ul class="nav">
            <li>
              <a class="nav-link" href="#tab-pane-tipo-compra"
                >Paso 1 <br /><small>Tipo de compra</small></a
              >
            </li>
            <li>
              <a class="nav-link" href="#tab-pane-datos-personales"
                >Paso 2 <br /><small>Datos del propietario</small></a
              >
            </li>
            <li>
              <a class="nav-link" href="#tab-pane-datos-personales"
                >Paso 2 <br /><small>Datos personales</small></a
              >
            </li>
            <li>
              <a class="nav-link" href="#tab-pane-datos-vehiculo"
                >Paso 3 <br /><small>Datos del Vehiculo</small></a
              >
            </li>
            <li>
              <a class="nav-link" href="#tab-pane-datos-poliza"
                >Paso 3 <br /><small>Poliza de seguro</small></a
              >
            </li>
            <li>
              <a class="nav-link" href="#tab-pane-datos-adicionales"
                >Paso 4 <br /><small>Datos adicionales</small></a
              >
            </li>
          </ul>

          <form autocomplete="off">
            <div class="tab-content">
              <!-- Paso 1 - Tipo de compra -->
              <div class="tab-pane" id="tab-pane-tipo-compra">
                <div class="form-group col-12">
                  <label>¿Que tipo de operación quiere realizar?</label>
                  <div class="form-check">
                    <input type="radio" name="renovar-soat" id="rad-renovar" />
                    <label for="rad-renovar">Renovar</label>
                  </div>
                  <div class="form-check">
                    <input
                      type="radio"
                      name="adquirir-soat"
                      id="rad-adquirir"
                    />
                    <label for="rad-adquirir">Adquirir</label>
                  </div>
                </div>
              </div>
              <!-- End Paso 1-->

              <!-- Paso 2 - Datos personales -->
              <div class="tab-pane" id="tab-pane-datos-personales">
                <div class="form-group col-12 col-md-6">
                  <label for="txt-nombres">Nombres</label>
                  <input
                    type="text"
                    name="nombres"
                    id="txt-nombres"
                    class="form-control"
                  />
                </div>

                <div class="form-group col-12 col-md-6">
                  <label for="txt-apellido-paterno">Apellido Paterno</label>
                  <input
                    type="text"
                    name="apellido-paterno"
                    id="txt-apellido-paterno"
                    class="form-control"
                  />
                </div>

                <div class="form-group col-12 col-md-6">
                  <label for="txt-apellido-materno">Apellido Materno</label>
                  <input
                    type="text"
                    name="apellido-materno"
                    id="txt-apellido-materno"
                    class="form-control"
                  />
                </div>

                <div class="form-group col-12 col-md-6">
                  <label for="ddo-tipo-documento-identidad"
                    >Documento de Identidad</label
                  >
                  <select
                    name="tipo-documento-identidad"
                    id="ddo-tipo-documento-identidad"
                    class="form-control"
                  >
                    @foreach ($tipoDocumentoIdentidad as $tipo)
                    <option value="{{$tipo->IdTipoDocumentoIdentidad}}"
                      >{{ $tipo->Descripcion}}
                    </option>
                    @endforeach
                  </select>
                </div>

                <div class="form-group col-12 col-md-6">
                  <input
                    type="text"
                    name="documento-identidad"
                    id="txt-numero-documento-identidad"
                    class="form-control"
                    placeholder="N° de documento"
                  />
                </div>

                <div class="form-group col-12 col-md-6">
                  <label for="txt-fecha-nacimiento">Fecha de Nacimiento</label>
                  <input
                    type="text"
                    name="fecha-nacimiento"
                    id="txt-fecha-nacimiento"
                    class="form-control"
                    placeholder="Ejemplo: {{ date('d/m/Y') }}"
                  />
                </div>

                <div class="form-group col-12 col-md-6">
                  <label for="txt-telefono">Teléfono/Celular</label>
                  <input
                    type="tel"
                    name="telefono"
                    id="txt-telefono"
                    class="form-control"
                  />
                </div>

                <div class="form-group col-12 col-md-6">
                  <label for="txt-apellido-materno">Correo electrónico</label>
                  <input
                    type="email"
                    name="email"
                    id="txt-email"
                    class="form-control"
                  />
                </div>

                <div class="form-group col-12 col-md-6">
                  <label for="txt-apellido-materno">Dirección</label>
                  <input
                    type="text"
                    name="direccion"
                    id="txt-direccion"
                    class="form-control"
                  />
                </div>
              </div>
              <!-- End Datos personales -->

              <!-- Paso 3 - Datos del vehiculo -->
              <div class="tab-pane" id="tab-pane-datos-vehiculo">
                <div class="form-group col-12 col-md-6">
                  <label for="ddo-anio-vehiculo">Año de fabricación</label>
                  <select
                    name="anio-vehiculo"
                    id="ddo-anio-vehiculo"
                    class="form-control"
                  >
                    @for ($i = date('Y'); $i >= 1950; $i--)
                    <option value="{{ $i }}">{{ $i }}</option>
                    @endfor
                  </select>
                </div>

                <div class="form-group col-12 col-md-6">
                  <label for="txt-placa">Placa</label>
                  <input
                    type="text"
                    name="placa"
                    id="txt-placa"
                    class="form-control"
                  />
                </div>

                <div class="form-group col-12 col-md-6">
                  <label for="txt-uso">Uso del vehículo</label>
                  <select name="uso" id="txt-uso" class="form-control">
                    <option value="">-- Escoja una opción --</option>
                    <option value="particular">Particular</option>
                    <option value="carga">Carga</option>
                    <option value="transporte_personal"
                      >Transporte de Personal</option
                    >
                    <option value="escolar">Escolar</option>
                  </select>
                </div>

                <div class="form-group col-12 col-md-6">
                  <label for="txt-asientos">Asientos</label>
                  <input
                    type="number"
                    name="asientos"
                    id="txt-asientos"
                    class="form-control"
                    step="1"
                    value="1"
                    min="1"
                  />
                </div>
              </div>
              <!-- End Datos del vehiculo-->

              <!-- Paso 3 - Poliza -->
              <div class="tab-pane " id="tab-pane-datos-poliza">
                <div class="form-group col-12">
                  <label for="fil-poliza"
                    >Adjunta tu póliza de seguro actual o anterior en formato
                    PDF, o una foto de la misma</label
                  >
                  <input type="file" name="poliza" id="fil-poliza" />
                </div>
              </div>
              <!--End Paso 3 - Poliza-->

              <!-- Paso 4 - Datos adicionales-->
              <div class="tab-pane show active" id="tab-pane-datos-adicionales">
                <div class="form-group col-12">
                  <label
                    >Elija la compañia de seguros con la que quiere
                    trabajar</label
                  >
                  <div class="form-check">
                    <input
                      type="radio"
                      name="compania-seguro"
                      id="rad-mapfre"
                    />
                    <label for="rad-mapfre">MAPFRE</label>
                  </div>
                  <div class="form-check">
                    <input type="radio" name="compania-seguro" id="rad-rimac" />
                    <label for="rad-rimac">RIMAC</label>
                  </div>
                  <div class="form-check">
                    <input
                      type="radio"
                      name="compania-seguro"
                      id="rad-pacifico"
                    />
                    <label for="rad-pacifico">Pacífico</label>
                  </div>
                  <div class="form-check">
                    <input
                      type="radio"
                      name="compania-seguro"
                      id="rad-la_positiva"
                    />
                    <label for="rad-la_positiva">La Positiva</label>
                  </div>
                </div>

                <div class="form-group col-12">
                  <label for="fil-tarjeta-propiedad"
                    >Adjunta la foto de tu tarjeta de propiedad</label
                  >
                  <input
                    type="file"
                    name="tarjeta-propiedad"
                    id="fil-tarjeta-propiedad"
                  />
                </div>

                <div class="form-group col-12">
                  <label for="fil-dni"
                    >Adjunta la foto de tu documento de identidad</label
                  >
                  <input type="file" name="dni" id="fil-dni" />
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
