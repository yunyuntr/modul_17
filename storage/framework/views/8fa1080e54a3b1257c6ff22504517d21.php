<div class="container mt-4" class="card-header" style="font-size: 1.45rem; font-weight:600; color: #000000;">
    <?php echo e(__('Dashboard')); ?>

    <hr>
    <div class="d-flex align-items-center py-2 px-4 bg-light rounded-3 border">
        <div class="bi-house-fill me-3 fs-1"></div>
        <div class="mb-0" class="card-body" style="">

            <?php if(session('status')): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo e(session('status')); ?>

                </div>
            <?php endif; ?>
            <?php echo e(__('You are logged in!')); ?>

        </div>
    </div>
    <br>
    <div class="p-6 m-20 bg-white rounded shadow">
        <?php echo $chart->container(); ?>

    </div>

    <script src="<?php echo e($chart->cdn()); ?>"></script>

    <?php echo e($chart->script()); ?>

</div>
<?php /**PATH C:\Users\Wahyudi Tri. S\Documents\PAW_LARAVEL\LARAVEL\modul_12\resources\views/home-1.blade.php ENDPATH**/ ?>