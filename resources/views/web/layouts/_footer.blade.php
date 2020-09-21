<footer>
  <div class="footer-main bg-color-fs-red color-white">
    <div class="container">
      <div class="row">
        <!-- Footer Block Logo-->
        <div class="footer-main-block col-12 col-md-4"></div>
        <!-- End Footer Block Logo-->

        <!-- Footer Nuestra Oficina Block -->
        <div class="footer-main-block col-12 col-md-4">
          <h4 class="footer-main-block-title">Nuestra oficina</h4>
          <div class="footer-main-block-body">
            <ul class="list-unstyled">
              <li class="media mb-2">
                <div class="media-icon align-self-center">
                  <i class="fas fa-map-marker-alt fa-lg"></i>
                </div>
                <div class="media-body">
                  <p>Agrupación Rosa Ara A-12 2da Etapa - Tacna, Perú</p>
                </div>
              </li>
              <li class="media">
                <div class="media-icon align-self-center">
                  <i class="fas fa-phone fa-lg align-self-center"></i>
                </div>
                <div class="media-body">
                  <p>+51 (052) 285846</p>
                </div>
              </li>
            </ul>
          </div>
        </div>
        <!-- End Footer Nuestra Oficina Block -->

        <!-- Footer Supervisados por Block-->
        <div class="footer-main-block col-12 col-md-4">
          <h4 class="footer-main-block-title">Supervisados por</h4>
          <div class="footer-main-block-body text-center">
            <img
              id="img-logo-sbs"
              src="{{ asset('img/sbs.png') }}"
              alt="Superintendencia de Banca y Seguros"
            />
          </div>
        </div>
        <!-- End Footer Supervisados por Block-->
      </div>
    </div>
  </div>

  <div class="footer-copyright bg-color-fs-red-2 color-white">
    <div class="container">
      <p class="text-center py-3 mb-0">
        FS Corredores de Seguros &copy; {{ date('Y') }}. Todos los derechos
        reservados.
      </p>
    </div>
  </div>
</footer>
