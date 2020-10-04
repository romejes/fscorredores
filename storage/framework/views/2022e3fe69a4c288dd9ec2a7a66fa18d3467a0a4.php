 <?php $__env->startSection('content'); ?>
<main>
  <!-- Carousel -->
  <div class="carousel splide">
    <div class="splide__track">
      <ul class="splide__list">
        <li class="splide__slide">
          <img src="<?php echo e(asset('img/img_slide1.jpg')); ?>" />
        </li>
        <li class="splide__slide">
          <img src="<?php echo e(asset('img/img_slide2.jpg')); ?>" />
        </li>
        <li class="splide__slide">
          <img src="<?php echo e(asset('img/img_slide3.jpg')); ?>" />
        </li>
      </ul>
    </div>
  </div>
  <!-- End Carousel -->

  <!-- Nuestros Seguros -->
  <section class="section bg-color-white">
    <div class="container">
      <div class="row py-3">
        <div class="col">
          <h4 class="section-title color-fs-blue">Nuestros Seguros</h4>
        </div>
      </div>
      <div class="row py-3">
        <div class="seguros-card-home-wrapper">
          <div class="seguros-card-home card" data-aos="fade-up">
            <img src="<?php echo e(asset('img/seguro_miniatura.jpg')); ?>" alt="">
            <div class="card-body text-center">
              <h5 class="card-title color-fs-blue card-title-size">Seguro 1</h5>
              <p class="card-text text-center">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Quisquam porro, corporis accusantium labore officiis saepe,
                cumque, obcaecati explicabo recusandae enim eos consequatur
                doloribus rem laudantium culpa cum adipisci molestiae
                laboriosam.
              </p>
              <a href="<?php echo e(url('seguros#seguros-sctr-salud')); ?>" class="btn btn-primary">Ver más</a>
            </div>
          </div>
          <div class="seguros-card-home card" data-aos="fade-up">
            <img src="<?php echo e(asset('img/seguro_miniatura2.jpg')); ?>" alt="">
            <div class="card-body text-center">
              <h5 class="card-title color-fs-blue card-title-size">Seguro 1</h5>
              <p class="card-text text-center">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Incidunt ipsa exercitationem, aliquam ex numquam voluptatibus!
                Fugiat ab doloremque debitis explicabo quia suscipit et, magni
                alias ipsam deleniti praesentium itaque dolorum!
              </p>
              <a href="<?php echo e(url('seguros#seguros-sctr-pension')); ?>" class="btn btn-primary">Ver más</a>
            </div>
          </div>
          <div class="seguros-card-home card" data-aos="fade-up">
            <img src="<?php echo e(asset('img/seguro_miniatura3.jpg')); ?>" alt="">
            <div class="card-body text-center">
              <h5 class="card-title color-fs-blue card-title-size">Seguro 1</h5>
              <p class="card-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Excepturi suscipit deserunt labore sunt quasi quis laborum
                corporis ipsam facere at pariatur, fugit iusto similique
                possimus officiis quo, amet nobis eius!
              </p>
              <a href="<?php echo e(url('seguros#seguros-colaboradores-eps')); ?>" class="btn btn-primary">Ver más</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row py-5">
        <div class="col text-center">
          <a href="<?php echo e(url('seguros')); ?>" class="btn btn-primary" data-aos="fade-up">Mostrar todos</a>
        </div>
      </div>
    </div>
  </section>
  <!-- End Nuestros Seguros -->

  <!-- SOAT -->
  <section class="section bg-color-fs-blue color-white">
    <div class="container">
      <div class="row py-3">
        <div class="col">
          <h4 class="section-title">
            ¿Necesitas un SOAT?<br />
            Tranquilo, nosotros lo tenemos
          </h4>
        </div>
      </div>
      <div class="row py-3 ">
        <div class="col-12 text-center">
          <a href="<?php echo e(url('solicitudes/cotizar_soat')); ?>" class="btn btn-alt" data-aos="fade-right"
            id="btn-soat-cotizar">Cotiza aquí</a>
          <a href="<?php echo e(url('solicitudes/comprar_soat')); ?>" class="btn btn-alt" data-aos="fade-left"
            id="btn-soat-comprar">Compra aquí</a>
        </div>
      </div>
    </div>
  </section>
  <!-- End SOAT -->

  <!-- Aseguradoras -->
  <section class="section bg-color-fs-grey color-white" id="aseguradoras-section">
    <div class="container">
      <div class="row py-3 align-items-center">
        <div class="col-12 col-lg-5">
          <h4 class="section-title">
            Trabajamos con las principales compañías de seguros del país
          </h4>
        </div>
        <div class="col-12 col-lg-7">
          <div class="insurance-company-wrapper">
            <img data-aos="fade-up" src="<?php echo e(asset('img/mapfre.svg')); ?>" alt="MAPFRE" />
            <img data-aos="fade-up" src="<?php echo e(asset('img/lapositivaseguros.svg')); ?>" alt="La Positiva" />
            <img data-aos="fade-up" src="<?php echo e(asset('img/pacifico.svg')); ?>" alt="Pacífico" />
            <img data-aos="fade-up" src="<?php echo e(asset('img/rimac.svg')); ?>" alt="Rimac" />
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Aseguradoras -->
</main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('web.layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>