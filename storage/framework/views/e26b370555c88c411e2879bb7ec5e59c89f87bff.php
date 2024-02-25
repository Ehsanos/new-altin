<?php $__env->startSection('content'); ?>

    <main <?php if($style): ?> style="background-color:<?php echo e($style->primary); ?>" <?php endif; ?>>
        
        <?php if(Session::has('message')): ?>

            <div class="w-25" x-data="{show: true}" x-init="setTimeout(() => show = false, 3000)" x-show="show">
                <div class="alert alert-success"><?php echo e(Session::get('message')); ?></div>
            </div>
        <?php endif; ?>
        <header class="mt-1">
            <div class="top-content">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">








                    <div class="carousel-inner">

                        <?php $__currentLoopData = $slider; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slide): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="carousel-item <?php if($loop->first): ?>active <?php endif; ?>">
                                <a <?php if($slide->cats): ?> href="<?php echo e(route('langs.fofo',$slide->cats)); ?>" <?php else: ?> href="<?php echo e($slide->url); ?>" <?php endif; ?> >
                                    <div class="h-50 w-100"
                                         style="background: url('<?php echo e($slide->getFirstMediaUrl('slider')); ?>') center / cover no-repeat;">

                                <div class="h-50 w-100 ">

                                    <?php if(app()->getLocale()=='ar'): ?>
                                        <div class="slide_style_left">
                                            <div class="row justify-content-center align-items-center">
                                                <div
                                                    class="col-12 text-center align-self-center slide-text ">

                                                    <p class="animate__animated animate__fadeInUp px-4 "><?php echo e(getTrans($slide,'discrption')); ?></p>
                                                </div>

                                            </div>
                                        </div>

                                    <?php else: ?>
                                        <div class="slide_style_right">
                                            <div class="row justify-content-center align-items-center">
                                                <div
                                                    class="col-12 text-center align-self-center slide-text ">

                                                    <p class="animate__animated animate__fadeInUp px-4 "><?php echo e(getTrans($slide,'discrption')); ?></p>
                                                </div>

                                            </div>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                                </a>
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
        </header>


        
        <section class="d-flex flex-column justify-content-center align-items-center mt-5   sections-s">
            <div class="container-fluid">
                <div class="row justify-content-center  py-0">
                    <div class="col-12 col-lg-10">
                        <div id="sections" class="owl-carousel">

                            <?php $__currentLoopData = $prodcuts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="px-3 product-item" onmouseover="show(this)" onmouseleave="hide(this)">
                                    <div class="adding-hidden" id="add">
                                        <form action="<?php echo e(route('langs.addToCart')); ?>" method="post">
                                            <?php echo csrf_field(); ?>


                                            <input hidden value="<?php echo e($product->id); ?>" name="product">
                                            <input hidden type="number" min="0" value="1" name="num">
                                            <button type="submit" class="btn">
                                                <i class="fas fa-plus-circle icn"></i>
                                            </button>
                                        </form>

                                    </div>

                                    <a class="text-decoration-none"
                                                                  href="<?php echo e(route('langs.product_details',[$product])); ?>">
                                        <div class="card cards-shadown cards-hover w-100" data-aos="flip-left"
                                             data-aos-duration="950">
                                            <div class="card-header"><img class="img-fluid rounded-img"
                                                                          src="<?php echo e($product->getFirstMediaUrl('products')); ?>">
                                            </div>
                                            <div class="card-body after">
                                                <p class="card-text sub-text-color"><?php echo e(getTrans($product,'name')); ?></p>
                                                
                                            </div>
                                        </div>
                                    </a></div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>
                    </div>
                </div>

                <div class="row justify-content-center  py-0">
                    <div class="col-12 col-lg-10">
                        <div id="sections-2" class="owl-carousel">

                            <?php $__currentLoopData = $prodcuts->sortBy('name'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="px-2 product-item my-3" onmouseover="show(this)" onmouseleave="hide(this)">
                                    <div class="adding-hidden" id="add">
                                        <form action="<?php echo e(route('langs.addToCart')); ?>" method="post">
                                            <?php echo csrf_field(); ?>


                                            <input hidden value="<?php echo e($product->id); ?>" name="product">
                                            <input hidden type="number" min="0" value="1" name="num">
                                            <button type="submit" class="btn">
                                                <i class="fas fa-plus-circle icn"></i>
                                            </button>
                                        </form>

                                    </div>

                                    <a class="text-decoration-none"
                                                                  href="<?php echo e(route('langs.product_details',[$product])); ?>">
                                        <div class="card cards-shadown cards-hover my-3 w-100" data-aos="flip-left"
                                             data-aos-duration="950">
                                            <div class="card-header"><img class="img-fluid rounded-img"
                                                                          src="<?php echo e($product->getFirstMediaUrl('products')); ?>">
                                            </div>
                                            <div class="card-body after">
                                                <p class="card-text sub-text-color"><?php echo e(getTrans($product,'name')); ?></p>
                                                
                                            </div>
                                        </div>
                                    </a></div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>
                    </div>
                </div>
            </div>
        </section>


        
        <section class="d-flex flex-column justify-content-center align-items-center pb-5 products">
            <div class="container-fluid">
                <div class="row justify-content-center align-items-center">
                    <div class="col-12 col-lg-9">
                        <div id="products" class="owl-carousel py-4">


                            <?php $__currentLoopData = $catigories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="px-3 product-item"><a class="text-decoration-none"
                                                                  href="<?php echo e(route('langs.fofo',$cat)); ?>">
                                        <div class="card cards-shadown cards-hover  w-100" data-aos="flip-left"
                                             data-aos-duration="950">
                                            <div class="card-header"><img class="rounded-img"
                                                                          src="<?php echo e($cat->getFirstMediaUrl('categories')); ?>">
                                            </div>
                                            <div class="card-body">
                                                <p class="card-text sub-text-color"><?php echo e($cat->name); ?></p>
                                                
                                            </div>
                                        </div>
                                    </a></div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                        </div>
                    </div>
                </div>
            </div>
        </section>


        
        <section class="wrapper-numbers">

            <div class="container">
                <div class="row countup text-center">
                    <div class="col-sm-6 col-md-3 column">
                        <p><i class="fas fa-box-open" aria-hidden="true"></i></p>
                        <p><span class="count replay"><?php echo e($statics[1]->number); ?></span></p>
                        <h2><?php echo e($statics[1]->discrption); ?></h2>
                    </div>
                    <div class="col-sm-6 col-md-3 column">
                        <p><i class="fas fa-th" aria-hidden="true"></i></p>
                        <p><span class="count replay"><?php echo e($statics[3]->number); ?></span></p>
                        <h2><?php echo e($statics[3]->discrption); ?></h2>
                    </div>
                    <div class="col-sm-6 col-md-3 column">
                        <p><i class="fas fa-bookmark" aria-hidden="true"></i></p>
                        <p><span class="count replay"><?php echo e($statics[2]->number); ?></span></p>
                        <h2><?php echo e($statics[2]->discrption); ?></h2>
                    </div>
                    <div class="col-sm-6 col-md-3 column">
                        <p><i class="fa fa-user" aria-hidden="true"></i></p>
                        <p><span class="count replay"><?php echo e($statics[0]->number); ?></span></p>
                        <h2><?php echo e($statics[0]->discrption); ?></h2>
                    </div>
                </div>
            </div>
        </section>


        <section class="d-flex flex-column justify-content-center align-items-center mt-5   sections-s">
            <div class="container-fluid">
                <div class="row justify-content-center  py-0">
                    <div class="col-12 col-lg-10">
                        <div id="sections-slider" class="owl-carousel">

                            <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="px-3 product-item" onmouseover="show(this)" onmouseleave="hide(this)">
                                    <div class="adding-hidden" id="add">
                                    </div>

                                    <a class="text-decoration-none"
                                       href="<?php echo e(route('langs.products',[$product->category->id,$product->id])); ?>">
                                        <div class="card cards-shadown cards-hover w-100" data-aos="flip-left"
                                             data-aos-duration="950">
                                            <div class="card-header"><img class="img-fluid rounded-img"
                                                                          src="<?php echo e($product->getFirstMediaUrl('departments')); ?>">
                                            </div>
                                            <div class="card-body after">
                                                <p class="card-text sub-text-color"><?php echo e(getTrans($product,'name')); ?></p>
                                                
                                            </div>
                                        </div>
                                    </a></div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>
                    </div>
                </div>

                <div class="row justify-content-center  py-0">
                    <div class="col-12 col-lg-10">
                        <div id="sections-2" class="owl-carousel">

                            <?php $__currentLoopData = $prodcuts->sortBy('name'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="px-2 product-item my-3" onmouseover="show(this)" onmouseleave="hide(this)">
                                    <div class="adding-hidden" id="add">
                                        <form action="<?php echo e(route('langs.addToCart')); ?>" method="post">
                                            <?php echo csrf_field(); ?>


                                            <input hidden value="<?php echo e($product->id); ?>" name="product">
                                            <input hidden type="number" min="0" value="1" name="num">
                                            <button type="submit" class="btn">
                                                <i class="fas fa-plus-circle icn"></i>
                                            </button>
                                        </form>

                                    </div>

                                    <a class="text-decoration-none"
                                       href="<?php echo e(route('langs.product_details',[$product])); ?>">
                                        <div class="card cards-shadown cards-hover my-3 w-100" data-aos="flip-left"
                                             data-aos-duration="950">
                                            <div class="card-header"><img class="img-fluid rounded-img"
                                                                          src="<?php echo e($product->getFirstMediaUrl('products')); ?>">
                                            </div>
                                            <div class="card-body after">
                                                <p class="card-text sub-text-color"><?php echo e(getTrans($product,'name')); ?></p>
                                                
                                            </div>
                                        </div>
                                    </a></div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>
                    </div>
                </div>
            </div>
        </section>



        <section class="wrapper-numbers">

            <div class="container">
                <div class="row countup text-center">

                    <?php echo getTrans($settings,'address'); ?>


                </div>
            </div>
        </section>

        
































    </main>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\1\altin\resources\views/pages/index.blade.php ENDPATH**/ ?>