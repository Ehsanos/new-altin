<?php $__env->startSection('content'); ?>


        <div class="top-content-slider">
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

                            <div class="w-100 img-div"
                                 style="background: url('<?php echo e($slide->getFirstMediaUrl('slider')); ?>') center / cover no-repeat;">

                                <div class="top-content-slider w-100 ">
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
                <a class="carousel-control-prev h-50" href="#myCarousel" role="button" data-slide="prev"><span
                        class="carousel-control-prev-icon" aria-hidden="true"></span><span
                        class="sr-only">Previous</span></a><a class="carousel-control-next h-50" href="#myCarousel"
                                                              role="button" data-slide="next"><span
                        class="carousel-control-next-icon" aria-hidden="true"></span><span
                        class="sr-only">Next</span></a>
            </div>
        </div>



    <main <?php if($style): ?>style="background-color:<?php echo e($style->primary); ?>"<?php endif; ?>>
        <section class="d-flex flex-column justify-content-center align-items-center products-1 py-2">
            <div class="container-fluid py-5">
                <div class="row justify-content-center">
                    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $new): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>














                        <div class="col-3"><a class="text-decoration-none"
                                                          href="<?php echo e(route('langs.showPost',['post'=>$new])); ?>">
                                <div class="card cards-shadown cards-hover w-100" data-aos="flip-left"
                                     data-aos-duration="950">
                                    <div class="card-header"><img class="img-fluid rounded-img"
                                                                  src="<?php echo e($new->getFirstMediaUrl('posts')); ?>">
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text sub-text-color"><?php echo getTrans($new,'tilte'); ?></p>
                                        
                                    </div>
                                </div>
                            </a></div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                </div>


            </div>


            <div class=" mt-2">


                <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="#" class="badge badge-dark tags-div py-2 px-2"><?php echo e($tag->name['ar']); ?></a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>

        </section>

    </main>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\1\altin\resources\views/pages/main-news.blade.php ENDPATH**/ ?>