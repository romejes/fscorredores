@extends('intranet.layouts.main')

@section('body-content')
<body class="login-page">
  <div class="login-box">
    <!-- Logo  -->
    <div class="login-logo"></div>
    <!-- End Logo -->

    <!-- Login Box -->
    <div class="card">
      <div class="card-body login-card-body">
        <form action="{{ URL::to('/login') }}" method="POST">
          {{ csrf_field() }}
          <div class="input-group mb-3">
            <input
              type="text"
              name="usuario"
              class="form-control"
              placeholder="Usuario"
            />
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>
              </div>
            </div>
          </div>
          <div class="input-group mb-3">
            <input
              type="password"
              name="contrasena"
              class="form-control"
              placeholder="Contraseña"
            />
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-lock"></span>
              </div>
            </div>
          </div>
          <div class="row">
            <button type="submit" class="btn btn-primary btn-block">
              <i class="fas fa-sign-in-alt"></i> Iniciar Sesión
            </button>
          </div>
        </form>
      </div>
    </div>
    <!-- End Login Box -->
  </div>

</body>
@endsection