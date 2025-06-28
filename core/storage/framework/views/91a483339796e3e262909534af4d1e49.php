<?php if($offers->total() < 1): ?>
    <div class="myOrder-single bg-white padding-20 radius-10">
        <div class="myOrder-single-item">
            <h4 class="text-danger"><?php echo e(__('No Offers Found')); ?></h4>
        </div>
    </div>
<?php else: ?>
    <?php $__currentLoopData = $offers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $offer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="myOrder-single bg-white padding-20 radius-10">
            <div class="myOrder-single-item">
                <div class="myOrder-single-flex">
                    <div class="myOrder-single-content">
                        <span class="myOrder-single-content-id">#000<?php echo e($offer->id); ?></span>
                        <div class="myOrder-single-content-btn flex-btn mt-3">
                            <?php
                                $offer_order = \App\Models\Order::where('identity',$offer->id)->where('is_project_job','offer')->where('payment_status','complete')->first();
                            ?>
                            <?php if($offer_order): ?>
                                <span class="job-progress"><?php echo e(__('Accepted')); ?></span>
                            <?php else: ?>
                                <span class="pending-approval"><?php echo e(__('Pending')); ?></span>
                                <?php if($offer->status == 0): ?>
                                    <a href="#" class="pending-approval delete_offer" data-offer-id="<?php echo e($offer->id); ?>"> <?php echo e(__('Delete')); ?> </a>
                                <?php endif; ?>
                            <?php endif; ?>
                            <span class="custom-order"><?php echo e(__("Custom Offer")); ?></span>
                        </div>
                    </div>
                    <span class="myOrder-single-content-time"><?php echo e($offer->created_at->diffForHumans()); ?> </span>
                </div>
            </div>
            <div class="myOrder-single-item">
                <div class="myOrder-single-block">
                    <div class="myOrder-single-block-item">
                        <div class="myOrder-single-block-item-content">
                            <span class="myOrder-single-block-subtitle"><?php echo e(__('Offer Price')); ?></span>
                            <h6 class="myOrder-single-block-title mt-2"><?php echo e(float_amount_with_currency_symbol($offer->price)); ?>

                            </h6>
                        </div>
                    </div>
                    <?php if($offer->deadline): ?>
                        <div class="myOrder-single-block-item">
                            <div class="myOrder-single-block-item-content">
                                <span class="myOrder-single-block-subtitle"><?php echo e(__('Delivery Time')); ?></span> <br>
                                <h6 class="myOrder_single__block__title mt-2">
                                    <?php echo e($offer->deadline); ?>

                                </h6>
                            </div>
                        </div>
                        <?php else: ?>
                        <div class="myOrder-single-block-item">
                            <div class="myOrder-single-block-item-content">
                                <span class="myOrder-single-block-subtitle"><?php echo e(__('Delivery Time')); ?></span> <br>
                                <h6 class="myOrder_single__block__title mt-2">
                                    <?php echo e(__('By Milestone')); ?>

                                </h6>
                            </div>
                        </div>
                    <?php endif; ?>
                    <div class="myOrder-single-block-item">
                        <div class="myOrder-single-block-item-content">
                            <span class="myOrder-single-block-subtitle"><?php echo e(__('Create Date')); ?></span><br>
                            <h6 class="myOrder_single__block__title mt-2">
                                <?php echo e($offer->created_at->toFormattedDateString() ?? ''); ?>

                            </h6>
                        </div>
                    </div>
                    <div class="myOrder-single-block-item">
                        <div class="myOrder-single-block-item-author">
                            <?php if (isset($component)) { $__componentOriginalcef7038228be606933751cd86f8a6046 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcef7038228be606933751cd86f8a6046 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.order.profile-image','data' => ['image' => $offer?->client->image]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('order.profile-image'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['image' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($offer?->client->image)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalcef7038228be606933751cd86f8a6046)): ?>
<?php $attributes = $__attributesOriginalcef7038228be606933751cd86f8a6046; ?>
<?php unset($__attributesOriginalcef7038228be606933751cd86f8a6046); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcef7038228be606933751cd86f8a6046)): ?>
<?php $component = $__componentOriginalcef7038228be606933751cd86f8a6046; ?>
<?php unset($__componentOriginalcef7038228be606933751cd86f8a6046); ?>
<?php endif; ?>
                        </div>
                        <?php if (isset($component)) { $__componentOriginalf7c7abab8c173225c55632d5d529fb44 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf7c7abab8c173225c55632d5d529fb44 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.order.name-rating','data' => ['firstName' => $offer?->client->first_name,'lastName' => $offer?->client->last_name,'userId' => $offer?->client->id,'orderRating' => '','userType' => $offer?->client->user_type ?? '','isIdentityVerified' => $offer?->client?->user_verified_status]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('order.name-rating'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['firstName' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($offer?->client->first_name),'lastName' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($offer?->client->last_name),'userId' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($offer?->client->id),'orderRating' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(''),'userType' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($offer?->client->user_type ?? ''),'isIdentityVerified' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($offer?->client?->user_verified_status)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf7c7abab8c173225c55632d5d529fb44)): ?>
<?php $attributes = $__attributesOriginalf7c7abab8c173225c55632d5d529fb44; ?>
<?php unset($__attributesOriginalf7c7abab8c173225c55632d5d529fb44); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf7c7abab8c173225c55632d5d529fb44)): ?>
<?php $component = $__componentOriginalf7c7abab8c173225c55632d5d529fb44; ?>
<?php unset($__componentOriginalf7c7abab8c173225c55632d5d529fb44); ?>
<?php endif; ?>
                    </div>
                </div>
                <p class="mt-4"><?php echo Str::limit($offer->description,250 ?? ''); ?></p>
            </div>
            <div class="myOrder-single-item">
                <div class="myOrder-single-flex flex-between">
                    <div class="btn-wrapper flex-btn">
                        <a href="<?php echo e(route('freelancer.offer.details',$offer->id)); ?>" class="btn-profile btn-bg-1"><?php echo e(__('View Offer')); ?></a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php if (isset($component)) { $__componentOriginal0143df8887fb9686c5dbf1f1b0d7027f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0143df8887fb9686c5dbf1f1b0d7027f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.pagination.laravel-paginate','data' => ['allData' => $offers]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('pagination.laravel-paginate'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['allData' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($offers)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0143df8887fb9686c5dbf1f1b0d7027f)): ?>
<?php $attributes = $__attributesOriginal0143df8887fb9686c5dbf1f1b0d7027f; ?>
<?php unset($__attributesOriginal0143df8887fb9686c5dbf1f1b0d7027f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0143df8887fb9686c5dbf1f1b0d7027f)): ?>
<?php $component = $__componentOriginal0143df8887fb9686c5dbf1f1b0d7027f; ?>
<?php unset($__componentOriginal0143df8887fb9686c5dbf1f1b0d7027f); ?>
<?php endif; ?>
<?php endif; ?>
<?php /**PATH /home/clouddeployx.com/public_html/core/Modules/Chat/Resources/views/freelancer/offer/search-result.blade.php ENDPATH**/ ?>