<?php $__env->startSection('content'); ?>

    <header class="">












































        <div class="container policy" <?php if($style): ?> style="background-color:<?php echo e($style->primary); ?>" <?php endif; ?>>
            <h1 class=""><?php echo e(lang('policy')); ?></h1>

            <p >
             <?php echo getTrans($setting,'description'); ?>

            </p>
        </div>
    </header>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\1\altin\resources\views/pages/jobs.blade.php ENDPATH**/ ?>