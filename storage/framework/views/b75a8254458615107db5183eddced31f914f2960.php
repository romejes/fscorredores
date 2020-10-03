<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>FS Corredores de Seguros</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="<?php echo e(asset('css/web.css')); ?>">

  <link rel="shortcut icon" href="<?php echo e(asset('favicon/favicon.ico')); ?>" type="image/x-icon">
</head>

<body>
  <div class="sidenav">
  </div>
  <div class="wrapper">
    <div class="overlay"></div>
    <?php echo $__env->make('web.layouts._header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->yieldContent('content'); ?>
    <?php echo $__env->make('web.layouts._footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  </div>

  <script src="<?php echo e(asset('js/web/vendor.js')); ?>"></script>
  <script src="<?php echo e(asset('js/web/manifest.js')); ?>"></script>
  <script src="<?php echo e(asset('js/web/app.js')); ?>"></script>

  <?php echo $__env->yieldPushContent('scripts'); ?>
</body>

</html>