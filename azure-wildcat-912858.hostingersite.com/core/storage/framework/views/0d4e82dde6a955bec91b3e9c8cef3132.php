<?php $__env->startSection('site_title',__('My Offers')); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.breadcrumb.user-profile-breadcrumb','data' => ['title' => __('Custom Offers'),'innerTitle' => __('Custom Offers')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('breadcrumb.user-profile-breadcrumb'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Custom Offers')),'innerTitle' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Custom Offers'))]); ?>
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

        <!-- Profile Details area Starts -->
        <div class="profile-area pat-100 pab-100 section-bg-2">
            <div class="container">
                <div class="row gy-4 justify-content-center">
                    <div class="<?php if(get_static_option('project_enable_disable') != 'disable'): ?> col-xl-8 col-lg-9 <?php else: ?> col-12 <?php endif; ?>">
                        <div class="shop-contents-wrapper-right">
                            <div class="myOrder-wrapper">
                                <div class="myOrder-wrapper-tabs">
                                    <div class="myOrder-tab-content">
                                        <div class="tab-content-item active">
                                            <div class="search_result">
                                                <?php echo $__env->make('chat::client.offer.search-result', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php if(get_static_option('project_enable_disable') != 'disable'): ?>
                    <div class="col-xl-4 col-lg-7">
                        <div class="profile-details-widget sticky_top_lg">
                            <div class="profile-wrapper-item-flex flex-between align-items-center profile-border-bottom">
                                <h4 class="profile-wrapper-item-title"> <?php echo e(__('Project Catalogues')); ?> </h4>
                                <a href="<?php echo e(route('projects.all')); ?>" class="profile-wrapper-item-browse-btn"> <?php echo e(__('Browse All')); ?></a>
                            </div>
                            <?php if($top_projects->count() > 0): ?>
                                <?php $__currentLoopData = $top_projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="project-category-item radius-10">
                                        <div class="single-project project-catalogue">
                                            <div class="single-project-thumb">
                                                <a href="<?php echo e(route('project.details', ['username' => $project->project_creator?->username, 'slug' => $project->slug])); ?>">
                                                    <?php if(cloudStorageExist() && in_array(Storage::getDefaultDriver(), ['s3', 'cloudFlareR2', 'wasabi'])): ?>
                                                        <img src="<?php echo e(render_frontend_cloud_image_if_module_exists( 'project/'. $project->image, load_from: $project->load_from ?? '')); ?>" alt="<?php echo e($project->title ?? ''); ?>">
                                                    <?php else: ?>
                                                        <img src="<?php echo e(asset('assets/uploads/project/'.$project->image) ?? ''); ?>" alt="<?php echo e($project->title ?? ''); ?>">
                                                    <?php endif; ?>
                                                </a>
                                            </div>
                                            <div class="single-project-content">
                                                <div class="single-project-content-top align-items-center flex-between">
                                                    <?php echo project_rating($project->id); ?>

                                                </div>
                                                <h4 class="single-project-content-title">
                                                    <a href="<?php echo e(route('project.details', ['username' => $project->project_creator?->username, 'slug' => $project->slug])); ?>"> <?php echo e($project->title); ?> </a>
                                                </h4>
                                            </div>
                                            <div class="single-project-bottom flex-between">
                        <span class="single-project-content-price">
                            <?php if($project->basic_discount_charge): ?>
                                <?php echo e(float_amount_with_currency_symbol($project->basic_discount_charge)); ?>

                                <s><?php echo e(float_amount_with_currency_symbol($project->basic_regular_charge)); ?></s>
                            <?php else: ?>
                                <?php echo e(float_amount_with_currency_symbol($project->basic_regular_charge)); ?>

                            <?php endif; ?>
                        </span>
                                                <div class="single-project-delivery">
                                                    <span class="single-project-delivery-icon"> <i class="fa-regular fa-clock"></i><?php echo e(__('Delivery')); ?></span>
                                                    <span class="single-project-delivery-days"> <?php echo e($project->basic_delivery); ?> </span>
                                                </div>
                                            </div>
                                            <div class="project-category-item-bottom profile-border-top">
                                                <div class="project-category-item-bottom-flex flex-between align-items-center">
                                                    <div class="project-category-right-flex flex-btn">
                                                        <?php if (isset($component)) { $__componentOriginale21bda0e4eb7de5736eda0cf4920c139 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginale21bda0e4eb7de5736eda0cf4920c139 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.bookmark','data' => ['identity' => $project->id,'type' => 'project']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('frontend.bookmark'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['identity' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($project->id),'type' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('project')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginale21bda0e4eb7de5736eda0cf4920c139)): ?>
<?php $attributes = $__attributesOriginale21bda0e4eb7de5736eda0cf4920c139; ?>
<?php unset($__attributesOriginale21bda0e4eb7de5736eda0cf4920c139); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale21bda0e4eb7de5736eda0cf4920c139)): ?>
<?php $component = $__componentOriginale21bda0e4eb7de5736eda0cf4920c139; ?>
<?php unset($__componentOriginale21bda0e4eb7de5736eda0cf4920c139); ?>
<?php endif; ?>
                                                    </div>
                                                    <div class="project-category-item-btn flex-btn">
                                                        <a href="<?php echo e(route('project.details', ['username' => $project->project_creator?->username, 'slug' => $project->slug])); ?>" class="btn-profile btn-outline-1"> <?php echo e(__('Order Now')); ?> </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <!-- Profile Details area end -->
    </main>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <?php if (isset($component)) { $__componentOriginal54c16274d3d0b2e3d7bba6b79dadebcb = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal54c16274d3d0b2e3d7bba6b79dadebcb = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sweet-alert.sweet-alert2-js','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('sweet-alert.sweet-alert2-js'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal54c16274d3d0b2e3d7bba6b79dadebcb)): ?>
<?php $attributes = $__attributesOriginal54c16274d3d0b2e3d7bba6b79dadebcb; ?>
<?php unset($__attributesOriginal54c16274d3d0b2e3d7bba6b79dadebcb); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal54c16274d3d0b2e3d7bba6b79dadebcb)): ?>
<?php $component = $__componentOriginal54c16274d3d0b2e3d7bba6b79dadebcb; ?>
<?php unset($__componentOriginal54c16274d3d0b2e3d7bba6b79dadebcb); ?>
<?php endif; ?>
    <?php echo $__env->make('chat::client.offer.offer-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/clouddeployx.com/public_html/core/Modules/Chat/Resources/views/client/offer/offer.blade.php ENDPATH**/ ?>