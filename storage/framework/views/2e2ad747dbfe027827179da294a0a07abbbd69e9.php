<?php $__env->startSection('content'); ?>
    <main>

        <div class="container w-100 py-0 py-md-3 py-lg-5 mt-1 mt-md-5" >
            <div class="row">
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                    <div class="col-12 col-md-6 col-lg-4 mb-2">
                        <a class="text-decoration-none" href="<?php echo e(route('langs.product_details',[$product->id])); ?>">
                            <div class="p-2 card product-main">
                                <div class="text-center">
                                    <h5 class="text-truncate font-weight-bolder"><?php echo e(getTrans($product,'name')); ?></h5>
                                </div>
                                <div class="div-hr-w"></div>
                                <div>
                                    <div class="text-center card-img p-2"><img class="img-fluid" src="<?php echo e($product->getFirstMediaUrl('products')); ?>">
                                    </div>
                                    <div class="px-3">
                                        <p class="text-dark font-weight-bold"><?php echo e($product->department->name ?? 'None'); ?></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </main>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\1\altin\resources\views/pages/product-search.blade.php ENDPATH**/ ?>