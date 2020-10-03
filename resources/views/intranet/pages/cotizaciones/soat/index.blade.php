@extends('intranet.layouts.dashboard') @section('content')
<!-- Content header -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">
          Solicitudes de Cotización
          <small>SOAT</small>
        </h1>
      </div>

      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item">
            <a href="{{ URL::to('intranet') }}"><i class="fas fa-home"></i></a>
          </li>
          <li class="breadcrumb-item active">Cotización SOAT</li>
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
            <h4 class="card-title m-0">Listado de Solicitudes</h4>
          </div>
          <div class="card-body">
            <table class="table table-bordered" id="tbl-cotizaciones-soat"></table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

@push("scripts")
<script src="{{ asset('js/intranet/tables.js') }}"></script>
@endpush