<?php $__env->startSection('content'); ?>

    <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="<?php echo e(asset('assets/css/cart.css')); ?>" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


</head>
<body>

<div class="container mt-lg-5">
    <h1 class="text-black-50"><?php echo e(lang('order_content')); ?>:<?php echo e($items[0]->order->order_code ?? ''); ?></h1>
    

</div>

<div class="shopping-cart ">

    <div class="product">
        <label class="product-image"><?php echo e(lang('img_product')); ?></label>
        <label class="product-details"><?php echo e(lang('name')); ?></label>
        <label class="product-details"><?php echo e(lang('price_one')); ?></label>
        <label class="product-details"><?php echo e(lang('quantity')); ?></label>

        <label class="product-details"><?php echo e(lang('one_price')); ?></label>
    </div>


    <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="product ">
            <div class="product-image">
                <a href="<?php echo e(route('langs.product_details',$item->product->id)); ?>">
                    <img src="<?php echo e($item->product->getFirstMediaUrl('products')); ?>">
                </a>
            </div>
            <div class="product-details">
                <div class="product-title"><?php echo e(getTrans($item->product,'name')); ?></div>
                <p class="product-description"><?php echo e(getTrans($item->product,'discrption')); ?></p>
            </div>
            <div class="product-details"><?php echo e($item->price); ?></div>
            <div class="product-details"><?php echo e($item->quantity); ?></div>

            <div class="product-details"><?php echo e($item->total); ?></div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


    <div class="totals">
        <div class="totals-item">
            <label><?php echo e(lang('sub_total')); ?></label>
            <div class="sum d-none">

            </div>


            <div class="totals-value " id="cart-subtotal"><?php echo e($sum); ?></div>


        </div>

        <div class="totals-item w-25 float-right  d-flex justify-content-end date">

            <div class="product-detail  mb-0"><h6><?php echo e(lang('history')); ?>: <?php echo e(date('d-m-y',strtotime($items[0]->created_at))); ?></h6>
            </div>


        </div>

    </div>

</div>

<script src="<?php echo e(asset('assets/js/cart.js')); ?>">


</script>

</body>
</html>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\1\altin\resources\views/pages/order-details.blade.php ENDPATH**/ ?>