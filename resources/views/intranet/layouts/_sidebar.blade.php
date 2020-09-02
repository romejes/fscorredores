<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <a href="" class="brand-link">
    <span class="brand-text font-weight-light">FSCA</span>
  </a>

  <div class="sidebar">
    <nav class="mt-2">
      <ul
        class="nav nav-pills nav-sidebar flex-column"
        data-widget="treeview"
        role="menu"
        data-accordion="false"
      >
        <li class="nav-item">
          <a
            href="{{ url('intranet') }}"
            class="nav-link {{ Request::segment(2) == '' ? 'active': ''}}"
          >
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>Panel de Control</p>
          </a>
        </li>
        <li
          class="nav-item has-treeview  {{Request::segment(2) == 'compras' ? 'menu-open' : ''}}"
        >
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-money-check-alt"></i>
            <p>
              Compras
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a
                href="{{ URL::to('intranet/compras/soat') }}"
                class="nav-link {{ Request::segment(3) == 'soat' && Request::segment(2) == 'compras' ? 'active': ''}}"
              >
                <i class=" far fa-circle nav-icon"></i>
                <p>SOAT</p>
              </a>
            </li>
          </ul>
        </li>
        <li
          class="nav-item has-treeview {{Request::segment(2) == 'cotizaciones' ? 'menu-open' : ''}}"
        >
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-comment-dollar"></i>
            <p>
              Cotizaciones
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a
                href="{{ URL::to('intranet/cotizaciones/soat') }}"
                class="nav-link {{ Request::segment(3) == 'soat' && Request::segment(2) == 'cotizaciones' ? 'active': ''}}"
              >
                <i class="far fa-circle nav-icon"></i>
                <p>SOAT</p>
              </a>
            </li>
            <li class="nav-item">
              <a
                href="{{ URL::to('intranet/cotizaciones/vehiculo_todo_riesgo') }}"
                class="nav-link {{ Request::segment(3) == 'vehiculo_todo_riesgo' && Request::segment(2) == 'cotizaciones' ? 'active': ''}}"
              >
                <i class="far fa-circle nav-icon"></i>
                <p>Seguro Vehículo Todo Riesgo</p>
              </a>
            </li>
          </ul>
        </li>
        <li
          class="nav-item has treeview {{Request::segment(2) == 'afiliaciones' ? 'menu-open' : ''}}"
        >
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
              Afiliaciones
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a
                href="{{ URL::to('intranet/afiliaciones/seguro_estudiantil') }}"
                class="nav-link {{ Request::segment(3) == 'seguro_estudiantil' ? 'active': ''}}"
                >>
                <i class="far fa-circle nav-icon"></i>
                <p>Seguro Estudiantil</p>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
  </div>
</aside>
