<?php $__env->startSection('site_title', __('Subscriptions')); ?>
<?php $__env->startSection('meta_title'); ?><?php echo e(__('Subscriptions')); ?><?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <main>
        <?php if(moduleExists('CoinPaymentGateway')): ?><?php else: ?><?php if (isset($component)) { $__componentOriginal7ecac999957263c09523da7583aa96ad = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7ecac999957263c09523da7583aa96ad = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.category.category','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('frontend.category.category'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7ecac999957263c09523da7583aa96ad)): ?>
<?php $attributes = $__attributesOriginal7ecac999957263c09523da7583aa96ad; ?>
<?php unset($__attributesOriginal7ecac999957263c09523da7583aa96ad); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7ecac999957263c09523da7583aa96ad)): ?>
<?php $component = $__componentOriginal7ecac999957263c09523da7583aa96ad; ?>
<?php unset($__componentOriginal7ecac999957263c09523da7583aa96ad); ?>
<?php endif; ?><?php endif; ?>
        <?php if (isset($component)) { $__componentOriginal1886b76dac2bd4a55dfc12d1a06ee6e4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1886b76dac2bd4a55dfc12d1a06ee6e4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.breadcrumb.user-profile-breadcrumb','data' => ['title' => __('Subscriptions') ?? __('Subscriptions'),'innerTitle' => __('Subscriptions') ?? '']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('breadcrumb.user-profile-breadcrumb'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Subscriptions') ?? __('Subscriptions')),'innerTitle' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Subscriptions') ?? '')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1886b76dac2bd4a55dfc12d1a06ee6e4)): ?>
<?php $attributes = $__attributesOriginal1886b76dac2bd4a55dfc12d1a06ee6e4; ?>
<?php unset($__attributesOriginal1886b76dac2bd4a55dfc12d1a06ee6e4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1886b76dac2bd4a55dfc12d1a06ee6e4)): ?>
<?php $component = $__componentOriginal1886b76dac2bd4a55dfc12d1a06ee6e4; ?>
<?php unset($__componentOriginal1886b76dac2bd4a55dfc12d1a06ee6e4); ?>
<?php endif; ?>
        <!-- Pricing area start -->
        <section class="pricing-area section-bg-2 pat-100 pab-100">
            <div class="container">
                <div class="section-title center-text">
                    <h1 class="title"><?php echo e(__('Subscription Plan')); ?></h1>
                </div>
                <div class="row mt-5">
                    <div class="pricing-tabs subsription-tabs">
                        <div class="tab-parents pricing-tabs-switch justify-content-center">
                            <span data-type_id="all" class="get_subscription_type_id subsription-btn active"><?php echo e(__('All')); ?> </span>
                            <?php $__currentLoopData = $subscription_types; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $type): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <span data-type_id="<?php echo e($type->id); ?>" class="get_subscription_type_id subsription-btn">
                                    <?php echo e($type->type); ?> </span>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
                <div class="row gy-4 mt-4 search_subscription_result">
                    <?php echo $__env->make('subscription::frontend.subscriptions.search-result', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
        </section>
        <!-- Pricing area end -->
    </main>
    <?php echo $__env->make('subscription::frontend.subscriptions.login-markup', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('subscription::frontend.subscriptions.gateway-markup', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <?php if (isset($component)) { $__componentOriginala8bbaec8b85679b9c75e7fd34ed38e55 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala8bbaec8b85679b9c75e7fd34ed38e55 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.payment-gateway.gateway-select-js','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('frontend.payment-gateway.gateway-select-js'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala8bbaec8b85679b9c75e7fd34ed38e55)): ?>
<?php $attributes = $__attributesOriginala8bbaec8b85679b9c75e7fd34ed38e55; ?>
<?php unset($__attributesOriginala8bbaec8b85679b9c75e7fd34ed38e55); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala8bbaec8b85679b9c75e7fd34ed38e55)): ?>
<?php $component = $__componentOriginala8bbaec8b85679b9c75e7fd34ed38e55; ?>
<?php unset($__componentOriginala8bbaec8b85679b9c75e7fd34ed38e55); ?>
<?php endif; ?>
    <?php echo $__env->make('subscription::frontend.subscriptions.subscriptions-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/clouddeployx.com/public_html/core/Modules/Subscription/Resources/views/frontend/subscriptions/subscriptions.blade.php ENDPATH**/ ?>