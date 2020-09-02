@extends('intranet.layouts.dashboard') @section('content')
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
            <a href="{{ URL::to('intranet') }}"><i class="fas fa-home"></i></a>
          </li>
          <li class="breadcrumb-item">
            <a href="{{ URL::to('intranet/compras/soat') }}">Compra SOAT</a>
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
              <a class="btn btn-primary" href="{{ url('intranet/compras/soat') }}"><i class="fas fa-arrow-left"></i>
                Ver Listado</a>
            </div>
          </div>
          <div class="card-body">
            <dl class="row">
              <dt class="col-sm-4">Código</dt>
              <dd class="col-sm-8">{{ $detalleCompra->solicitud->Codigo}}</dd>
            </dl>
            <dl class="row">
              <dt class="col-sm-4">Solicitado Por</dt>
              <dd class="col-sm-8">{{ $detalleCompra->solicitado_por}}</dd>
            </dl>
            <dl class="row">
              <dt class="col-sm-4">Fecha de Nacimiento</dt>
              <dd class="col-sm-8">{{ $detalleCompra->FechaNacimiento}}</dd>
            </dl>
            <dl class="row">
              <dt class="col-sm-4">Teléfono</dt>
              <dd class="col-sm-8">
                {{ !$detalleCompra->Teléfono ? "-" : $detalleCompra->Telefono}}
              </dd>
            </dl>
            <dl class="row">
              <dt class="col-sm-4">Correo Electrónico</dt>
              <dd class="col-sm-8">{{ $detalleCompra->Email}}</dd>
            </dl>
            <dl class="row">
              <dt class="col-sm-4">N° Documento de Identidad</dt>
              <dd class="col-sm-8">{{ $detalleCompra->documento_identidad}}</dd>
            </dl>
            <dl class="row">
              <dt class="col-sm-4">Tipo de Compra</dt>
              <dd class="col-sm-8">{{ $detalleCompra->TipoCompra}}</dd>
            </dl>
          </div>
          <div class="card-footer">
            <div class="float-sm-right">
              @if ($detalleCompra->solicitud->IdEstadoSolicitud == 1)
              <button class="btn btn-primary">Atender</button>
              @endif

              @if ($detalleCompra->solicitud->IdEstadoSolicitud == 2)
              <button class="btn btn-danger">Rechazar</button>
              <button class="btn btn-success">Marcar como atendido</button>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection