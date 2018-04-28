<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'nextdev')); ?></title>

    <!-- Styles -->
    <link href="<?php echo e(asset('bootstrap/css/bootstrap.css')); ?>" rel="stylesheet">
</head>

  <body>

    <div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
      <h5 class="my-0 mr-md-auto font-weight-normal">Rubeyond</h5>
      <nav class="my-2 my-md-0 mr-md-3">
        <a class="p-2 text-dark" href="/portfolios">Portfolios</a>
        <a class="p-2 text-dark" href="/products">Our Products</a>
        <a class="p-2 text-dark" href="/care">We care</a>
      </nav>
      <a class="btn btn-outline-primary" href="/register">Sign up</a>
    </div>

    <div class="container">
    <?php echo $__env->yieldContent('content'); ?>
    </div>


<!-- Scripts -->
<script src="<?php echo e(asset('js/jquery-3.2.1.min.js')); ?>" ></script>
<script src="<?php echo e(asset('js/popper.min.js')); ?>" ></script>
<script src="<?php echo e(asset('bootstrap/js/bootstrap.js')); ?>" ></script>
</body>
</html>