<?php $__env->startSection('content'); ?>



    <main <?php if($style): ?> style="background-color:<?php echo e($style->primary); ?>" <?php endif; ?>>
        <section class="d-flex flex-column justify-content-center align-items-center products-1 py-2">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="text-center d-flex justify-content-center">
                            <?php $__currentLoopData = $post->getMedia("*"); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                                <img class="img-thumbnail" style="height: 250px; width: 100%;object-fit: cover"
                                     src="<?php echo e($index->getUrl()); ?>">
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>

                    <?php if($post->video): ?>
                        <iframe width="100%" height="315" class="m-auto mt-1 mt-md-4" src="<?php echo e($post->video); ?>"
                                frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>
                    <?php endif; ?>
                    <div class="col">
                        <p class="text-dark"><?php echo getTrans($post,'tilte'); ?></p>
                        <p class="text-dark"><span
                                style="font-weight: normal !important; font-style: normal !important; color: rgb(122, 122, 122);">
                             <?php echo getTrans($post,'body'); ?>

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