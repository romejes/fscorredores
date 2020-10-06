@extends('intranet.layouts.dashboard') @section('content')
<!-- Content header -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Panel de Control</h1>
      </div>

      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item active">
            <a><i class="fas fa-home"></i></a>
          </li>
        </ol>
      </div>
    </div>
  </div>
</div>

<!-- Main Content -->
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h5 class="card-title">Solicitudes sin atender</h5>
          </div>
          <div class="card-body row">
            @if ($solicitudesSinAtender['cotizacion_soat'] > 0)
            <div class="col-12 col-sm-6 col-md-4">
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3>{{ $solicitudesSinAtender['cotizacion_soat'] }}</h3>
                  <p>Cotización de SOAT</p>
                </div>
                <div class="icon">
                  <i class="fas fa-hourglass-start"></i>
                </div>
                <a href="{{ url('intranet/cotizaciones/soat') }}" class="small-box-footer">Ver solicitudes</a>
              </div>
            </div>
            @endif

            @if ($solicitudesSinAtender['cotizacion_seguro_vehiculo_todo_riesgo'] > 0 )
            <div class="col-12 col-sm-6 col-md-4">
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3>{{ $solicitudesSinAtender['cotizacion_seguro_vehiculo_todo_riesgo'] }}</h3>
                  <p>Cotización de Seguro Vehicular Todo Riesgo</p>
                </div>
                <div class="icon">
                  <i class="fas fa-hourglass-start"></i>
                </div>
                <a href="{{ url('intranet/cotizaciones/vehiculo_todo_riesgo') }}" class="small-box-footer">Ver
                  solicitudes</a>
              </div>
            </div>
            @endif

            @if ($solicitudesSinAtender['compra_soat'] > 0)
            <div class="col-12 col-sm-6 col-md-4">
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3>{{ $solicitudesSinAtender['compra_soat'] }}</h3>
                  <p>Compra de SOAT</p>
                </div>
                <div class="icon">
                  <i class="fas fa-hourglass-start"></i>
                </div>
                <a href="{{ url('intranet/compras/soat') }}" class="small-box-footer">Ver solicitudes</a>
              </div>
            </div>
            @endif

            @if ($solicitudesSinAtender['afiliacion_seguro_estudiante'] > 0)
            <div class="col-12 col-sm-6 col-md-4">
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3>{{ $solicitudesSinAtender['afiliacion_seguro_estudiante'] }}</h3>
                  <p>Afiliaciones al Seguro Estudiantil contra Accidentes</p>
                </div>
                <div class="icon">
                  <i class="fas fa-hourglass-start"></i>
                </div>
                <a href="{{url('intranet/afiliaciones/seguro_estudiante') }}" class="small-box-footer">Ver
                  solicitudes</a>
              </div>
            </div>
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection