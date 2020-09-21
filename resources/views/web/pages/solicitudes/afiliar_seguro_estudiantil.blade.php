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
            Afiliación a Seguro Estudiantil contra Accidentes
          </h4>
        </div>
      </div>
      <div class="row">
        <div class="wizard">
          <ul class="nav">
            <li>
              <a class="nav-link" href="#tab-pane-datos-personales"
                >Paso 1 <br /><small>Datos personales</small></a
              >
            </li>
            <li>
              <a class="nav-link" href="#tab-pane-pago"
                >Paso 2 <br /><small>Información de pago</small></a
              >
            </li>
          </ul>

          <form autocomplete="off">
            <div class="tab-content">
              <!-- Datos personales -->
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

                <div class="form-group col-12">
                  <label>Sexo</label>
                  <div class="form-check">
                    <input type="radio" name="sexo" id="rad-masculino" />
                    <label for="rad-mapfre">Masculino</label>
                  </div>
                  <div class="form-check">
                    <input type="radio" name="sexo" id="rad-femenino" />
                    <label for="rad-rimac">Femenino</label>
                  </div>
                </div>

                <div class="form-group col-12 col-md-6">
                  <label for="ddo-pais">Pais de procedencia</label>
                  <select name="pais" id="ddo-pais" class="form-control">
                    @foreach ($paises as $pais)
                    <option value="{{$pais->Codigo}}" {{$pais->Codigo === 'PE' ? 'selected': ''}} >
                      {{ $pais->Nombre}}
                    </option>
                    @endforeach
                  </select>
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
                  <label for="ddo-estado-civil">Estado Civil</label>
                  <select
                    name="estado-civil"
                    id="ddo-estado-civil"
                    class="form-control"
                  >
                    <option value="">-- Seleccione su estado civil --</option>
                    <option value="casado">Casado(a)</option>
                    <option value="soltero">Soltero(a)</option>
                    <option value="viudo">Viudo(a)</option>
                    <option value="divorciado">Divorciado(a)</option>
                  </select>
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
              </div>
              <!-- End Datos personales -->

              <!-- Datos de la cotizacion-->
              <div class="tab-pane  show active" id="tab-pane-pago">
                <div class="form-group col-12">
                  <label for="fil-voucher"
                    >Adjunta la foto de tu voucher de pago</label
                  >
                  <input type="file" name="voucher" id="fil-voucher" />
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
