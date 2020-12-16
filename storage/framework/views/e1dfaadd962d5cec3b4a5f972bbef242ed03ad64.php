 <?php $__env->startSection('contenidoPlantillaPrincipal'); ?>
<main>
  <!-- Heading Page -->
  <?php $__env->startComponent('web.componentes.banner_pagina', ["imagenBanner" => 'banner_nosotros2.jpg', 'tituloBanner' => "Acerca de nosotros"]); ?>
  <?php echo $__env->renderComponent(); ?>
  <!-- End Heading Page -->

  <!-- Section: Quienes somos -->
  <section id="section-about_us-who_whe_are">
    <div class="section-container">
      <div class="section-row">
        <div class="section-heading col-12">
          <h2 class="section-title">¿Quienes somos?</h2>
        </div>
        <div class="section-body col-12">
          <p>
            Somos unae empresa especializada en la asesoría integral en Seguros,
            operando en el mercado nacional desde el año 2014, desarrollamos
            soluciones a la medida del cliente.
          </p>
          <p>
            FS Corredores de Seguros, viene alcanzando un posicionamiento de
            relevancia en el Mercado Asegurador a través de la intermediación de
            seguros a empresas públicas, privadas y personas naturales.
          </p>
        </div>
      </div>
    </div>
  </section>
  <!--End Section: Quienes Somos-->

  <!-- Section: Por que elegirnos -->
  <section id="section-about_us-who_whe_are">
    <div class="section-container">
      <div class="section-row">
        <div class="section-heading col-12">
          <h2 class="section-title">¿Por qué elegirnos?</h2>
        </div>
        <div class="section-body col-12">
          <ul>
            <li>Adecuada y oportuna Asesoría Profesional.</li>
            <li>Le permite ahorro en la contratación de sus seguros.</li>
            <li>
              Ante la ocurrencia de un siniestro, brindamos una asesoría
              personalizada logrando indemnizaciones justas y oportunas.
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!--End Section: Por que elegirnos-->

  <!-- Section: Que nos distingie -->
  <section id="section-about_us-who_whe_are">
    <div class="section-container">
      <div class="section-row">
        <div class="section-heading col-12">
          <h2 class="section-title">¿Qué nos distingue de la competencia?</h2>
        </div>
        <div class="section-body col-12">
          <ul>
            <li>Desarrollamos soluciones efectivas para nuestros clientes.</li>
            <li>Innovación, eficiencia y rapidez en el servicio.</li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!--End Section: Que nos distingie -->

  <section id="section-about_us-mision-vision-values">
    <div class="section-container">
      <div class="section-row align-items-stretch">
        <div class="col-12 col-md-6">
          <article data-aos="fade-up">
            <img src="<?php echo e(asset('images/mision.svg')); ?>" alt="" />
            <h2>Nuestra Misión</h2>
            <p>
              Brindar un asesoramiento profesional y confiable en la gestion
              integral de seguros, a través de un eficáz servicio de atención al
              cliente
            </p>
          </article>
        </div>
        <div class="col-12 col-md-6">
          <article data-aos="fade-up">
            <img src="<?php echo e(asset('images/vision.svg')); ?>" alt="" />
            <h2>Nuestra Visión</h2>
            <p>
              Ser la empresa de asesoría y corretaje en seguros de mayor
              prestigio y confianza en el mercado asegurador peruano, que brinde
              soluciones innovadoras, simples, transparentes y con altos
              estándares de servicio.
            </p>
          </article>
        </div>
        <div class="col-12">
          <article>
            <h2>Valores de la empresa</h2>
            <div class="wrapper-card wrapper-company-values">
              <?php $__currentLoopData = $values; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="card company-value" data-aos="fade-up">
                <div class="company-value-icon">
                  <i class="fas fa-star"></i>
                </div>
                <div class="company-value-text">
                  <span><?php echo e($value); ?></span>
                </div>
              </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
          </article>
        </div>
      </div>
    </div>
  </section>

  <!-- Section: El equipo -->
  <section class="section-grey" id="section-about_us-staff">
    <div class="section-container">
      <div class="section-row">
        <div class="section-heading col-12">
          <h2 class="section-title">Nuestro equipo</h2>
        </div>
        <div class="section-body col-12">
          <div class="wrapper-card">
            <?php $__currentLoopData = $staff; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $worker): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="card staff-card" data-aos="fade-up">
              <div class="card-body">
                <dl>
                  <div class="dl-row">
                    <dt class="dt-icon"><i class="fas fa-user fa-2x"></i></dt>
                    <dd>
                      <p class="worker-name"><?php echo e($worker['name']); ?></p>
                      <i class="worker-job"><?php echo e($worker['charge']); ?></i>
                    </dd>
                  </div>
                  <div class="dl-row">
                    <dt class="dt-icon">
                      <i class="fas fa-envelope fa-2x"></i>
                    </dt>
                    <dd>
                      <p><?php echo e($worker['email']); ?></p>
                    </dd>
                  </div>
                  <div class="dl-row">
                    <dt class="dt-icon">
                      <i class="fab fa-whatsapp fa-2x"></i>
                    </dt>
                    <dd>
                      <p><?php echo e($worker['phone']); ?></p>
                    </dd>
                  </div>
                </dl>
              </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Section: El equipo -->
</main>
<?php $__env->stopSection(); ?> <?php $__env->startSection('title'); ?> Nosotros <?php $__env->stopSection(); ?>

<?php echo $__env->make('web.plantillas.principal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>