<?php $__env->startSection('content'); ?>



    <main>
        <section class="d-flex flex-column justify-content-center align-items-center products-1 py-2">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="text-center"><img class="img-fluid" src="<?php echo e($post->getFirstMediaUrl('posts')); ?>">
                        </div>
                    </div>
                    <div class="col">
                        <h1 class="text-dark"><?php echo e(getTrans($post,'tilte')); ?></h1>
                        <p class="text-dark"><span
                                style="font-weight: normal !important; font-style: normal !important; color: rgb(122, 122, 122);">
                             <?php echo e(getTrans($post,'body')); ?>

                            </span><br><br></p>
                    </div>
                </div>
                <div class=" mt-2">
                    <?php $__currentLoopData = $post->tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <a href="#" class="badge badge-dark tag-div py-2 px-2"><?php echo e($tag->name); ?></a>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>


            </div>
        </section>
    </main>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\1\altin\resources\views/pages/news.blade.php ENDPATH**/ ?>