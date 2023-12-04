<?php $__env->startSection('content'); ?>
    <header >
        <?php if(Session::has('message')): ?>

            <div class="w-25" x-data="{show: true}" x-init="setTimeout(() => show = false, 1500)" x-show="show">
                <div class="alert alert-success"><?php echo e(Session::get('message')); ?></div>
            </div>
        <?php endif; ?>
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
    </header>

    <section class="d-flex flex-column justify-content-center align-items-center products-1 py-2">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-3">
                    <div class="row">
                        <div class="col-12 m-0">
                            <div
                                class="d-flex flex-row justify-content-start align-items-center align-content-center pt-3">
                                <div class="div-hr"></div>
                                <h5 class="text-dark mx-2"><?php echo e(lang('search_cat')); ?></h5>
                            </div>
                            <div class="row padMar">
                                <div class="col padMar">
                                    <form action="<?php echo e(route('langs.search')); ?>">
                                        <?php echo csrf_field(); ?>
                                        <div class="input-group ">
                                            <div class="input-group-prepend"></div>
                                            <input class="form-control autocomplete" type="text"
                                                   placeholder="<?php echo e(lang('search_cat')); ?>">
                                            <div class="input-group-append">
                                                <button class="btn btn-sm search-btn btn-outline-dark"
                                                        type="submit"><i
                                                        class="fa fa-search"></i></button>

                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row pt-5">
                    <div class="col-12 alfeat-head">
                        <div class="p-2">
                            <h3 class="text-dark font-weight-bolder m-0"><?php echo e(lang('cats')); ?></h3>
                        </div>
                    </div>
                    <div class="col">
                        <div class="list-group">
                            <?php $__currentLoopData = $cats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a class="list-group-item list-group-item-action font-weight-bolder"
                                   href="<?php echo e(route('langs.products', ["catId"=>$cat->id])); ?>"><?php echo e(getTrans($cat,'name')); ?></a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>
                    </div>
                    <div class="row pt-5">
                        <div class="col-12 alfeat-head">
                            <div class="p-2">
                                <h3 class="text-dark font-weight-bolder m-0"><?php echo e(lang('sections')); ?></h3>
                            </div>
                        </div>
                        <div class="col">
                            <div class="list-group">
                                <?php $__currentLoopData = $departments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $dep): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <a class="list-group-item list-group-item-action font-weight-bolder"
                                       href="<?php echo e(route("langs.products",["catId"=>$dep->category_id,"depId"=>"$dep->id"])); ?>"><?php echo e($dep->name); ?></a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-9">
                <div class="row p-3">
                    <div class="col p-0">
                        <div class="d-flex flex-row justify-content-end align-items-center bg-gray">
                            <div class="px-3">
                                
                            </div>
                            <div class="div-left"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


                        <div class="col-12 col-md-6 col-lg-4 mb-2">
                            <a class="text-decoration-none" href="<?php echo e(route('langs.product_details',[$product])); ?>">
                                <div class="p-2 card product-main">
                                    <div class="text-center">
                                        <h5 class="text-truncate font-weight-bolder"><?php echo e(getTrans($product,'name')); ?></h5>
                                    </div>
                                    <div class="div-hr-w"></div>
                                    <div>
                                        <div class="text-center card-img p-2"><img class="img-fluid"
                                                                                   src="<?php echo e($product->getFirstMediaUrl('products')); ?>">
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
        </div>
        


        </div>
        <div class=" mt-2 container">
            <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <a href="#" class="badge badge-dark tag-div py-2 px-2 mb-1"><?php echo e($tag->name['ar']); ?></a>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            


        </div>
    </section>
<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\1\altin\resources\views/pages/products.blade.php ENDPATH**/ ?>