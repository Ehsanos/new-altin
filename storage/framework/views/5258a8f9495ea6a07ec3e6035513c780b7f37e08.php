<?php $__env->startSection('content'); ?>

    <header class="h-100">
        <div class="top-content">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <?php $__currentLoopData = $slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li data-target="#myCarousel" data-slide-to="<?php echo e($loop->index); ?>"
                            <?php if($loop->first): ?> class="active" <?php endif; ?>></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    
                    
                </ol>
                <div class="carousel-inner">

                    <?php $__currentLoopData = $slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="carousel-item <?php if($loop->first): ?>active <?php endif; ?>">

                            <div class="h-100 w-100 img-div"
                                 style="background: url('<?php echo e($slide->getFirstMediaUrl('slider')); ?>') center / cover no-repeat;">

                                <div class="h-100 w-100 ">
                                    <div class="slide_style_right">
                                        <div class="row justify-content-center align-items-center">
                                            <div class="col-12 text-center align-self-center slide-text">
                                                
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>
                <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev"><span
                        class="carousel-control-prev-icon" aria-hidden="true"></span><span
                        class="sr-only">Previous</span></a><a class="carousel-control-next" href="#myCarousel"
                                                              role="button" data-slide="next"><span
                        class="carousel-control-next-icon" aria-hidden="true"></span><span
                        class="sr-only">Next</span></a>
            </div>
        </div>

        <div class="container">
            <h3 class="">Title</h3>

            <p>
             discption
            </p>
        </div>
    </header>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\1\altin\resources\views/pages/jobs.blade.php ENDPATH**/ ?>