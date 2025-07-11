<!-- Pricing area starts -->
<?php if(get_static_option('subscription_enable_disable') != 'disable'): ?>
    <section class="pricing-area pat-50 pab-50" data-padding-top="<?php echo e($padding_top ?? ''); ?>" data-padding-bottom="<?php echo e($padding_bottom ?? ''); ?>" style="background-color:<?php echo e($section_bg ?? ''); ?>">
    <div class="container">
        <div class="section-title center-text">
            <h2 class="title"><?php echo e(__($title) ?? __('Pricing Plan')); ?> </h2>
        </div>
        <div class="row gy-4 mt-4">
            <?php $__currentLoopData = $subscriptions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subscription): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-xxl-4 col-lg-4 col-md-6">
                    <div class="single-pricing single-pricing-border radius-10">
                        <div class="single-pricing-top d-flex gap-3 flex-wrap align-items-center">
                            <div class="single-pricing-brand">
                                <?php echo render_image_markup_by_attachment_id($subscription->logo ?? ''); ?>

                            </div>
                            <div class="single-pricing-top-contents">
                                <h5 class="single-pricing-title"> <?php echo e($subscription->title ?? ''); ?></h5>
                                <p class="single-pricing-para"><?php echo e($subscription->limit ?? ''); ?> <?php echo e(__('Connects')); ?></p>
                            </div>
                        </div>
                        <ul class="single-pricing-list list-style-none">
                            <?php $__currentLoopData = $subscription->features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($feature->status == 'on'): ?>
                                    <li class="single-pricing-list-item">
                                        <span class="single-pricing-list-item-icon">
                                            <i class="fa-solid fa-check"></i>
                                        </span> <?php echo e($feature->feature ?? ''); ?>

                                    </li>
                                <?php else: ?>
                                    <li class="single-pricing-list-item">
                                        <span class="single-pricing-list-item-icon cross-icon">
                                            <i class="fa-solid fa-xmark"></i>
                                        </span><?php echo e($feature->feature ?? ''); ?>

                                    </li>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                        <h3 class="single-pricing-price">
                            <?php echo e(float_amount_with_currency_symbol($subscription->price ?? '')); ?>

                            <sub>/<?php echo e(ucfirst($subscription->subscription_type?->type)); ?></sub>
                        </h3>
                        <div class="btn-wrapper mt-4">
                            <a href="<?php echo e(route('subscriptions.all')); ?>"
                                class="cmn-btn btn-bg-gray btn-small w-100 choose_plan">
                                <?php echo e(__('View Plan')); ?></a>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</section>
<?php endif; ?>
<!-- Pricing area end -->
<?php /**PATH /home/u412525603/domains/azure-wildcat-912858.hostingersite.com/core/app/Providers/../../plugins/PageBuilder/views/price-plan/price-plan-one.blade.php ENDPATH**/ ?>