<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php echo app('Illuminate\Foundation\Vite')('resources/sass/app.scss'); ?>
</head>

<body>

    

    <?php $__env->startSection('content'); ?>
        <?php echo $__env->make('home-1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php $__env->stopSection(); ?>
    
    <?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
</body>

</html>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Wahyudi Tri. S\Documents\PAW_LARAVEL\LARAVEL\modul_12\resources\views/home.blade.php ENDPATH**/ ?>