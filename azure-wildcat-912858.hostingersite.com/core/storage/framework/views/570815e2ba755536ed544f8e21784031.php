<?php $__env->startSection('title', __('Project Details')); ?>
<?php $__env->startSection('style'); ?>
    <?php if (isset($component)) { $__componentOriginal7a9f1fc0e33dbb5b6865e47c39fccade = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7a9f1fc0e33dbb5b6865e47c39fccade = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.select2.select2-css','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('select2.select2-css'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7a9f1fc0e33dbb5b6865e47c39fccade)): ?>
<?php $attributes = $__attributesOriginal7a9f1fc0e33dbb5b6865e47c39fccade; ?>
<?php unset($__attributesOriginal7a9f1fc0e33dbb5b6865e47c39fccade); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7a9f1fc0e33dbb5b6865e47c39fccade)): ?>
<?php $component = $__componentOriginal7a9f1fc0e33dbb5b6865e47c39fccade; ?>
<?php unset($__componentOriginal7a9f1fc0e33dbb5b6865e47c39fccade); ?>
<?php endif; ?>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="dashboard__body">
        <div class="customMarkup__single__item">

            <div class="customMarkup__single__inner mt-4">
                <div class="row g-4">
                    <div class="col-xl-7 col-lg-12">
                        <div class="project-preview">
                            <div class="project-preview-thumb">
                                <?php if(cloudStorageExist() && in_array(Storage::getDefaultDriver(), ['s3', 'cloudFlareR2', 'wasabi'])): ?>
                                    <img src="<?php echo e(render_frontend_cloud_image_if_module_exists('project/'.$project->image, load_from: $project->load_from)); ?>" alt="<?php echo e($project->title ?? ''); ?>">
                                <?php else: ?>
                                    <img src="<?php echo e(asset('assets/uploads/project/' . $project->image)); ?>" alt="<?php echo e($project->title); ?>">
                                <?php endif; ?>
                            </div>
                            <div class="project-preview-contents mt-4">
                                <div class="customMarkup__single__item__flex project--rejected--wrapper">
                                    <span class="customMarkup__single__title"><?php echo e(__('Status:')); ?>

                                        <?php if($project->status === 0): ?>
                                            <span><?php echo e(__('Pending')); ?></span>
                                        <?php elseif($project->status === 1): ?>
                                            <span><?php echo e(__('Approved')); ?></span>
                                        <?php elseif($project->status === 2): ?>
                                            <span><?php echo e(__('Rejected')); ?></span>
                                        <?php endif; ?>
                                    </span>
                                    <span class="customMarkup__single__title"><?php echo e(__('Reject:')); ?>

                                        <span><?php echo e($project->project_history?->reject_count ?? '0'); ?></span>
                                    </span>
                                    <span class="customMarkup__single__title"><?php echo e(__('Edit:')); ?>

                                        <span><?php echo e($project->project_history?->edit_count ?? '0'); ?></span>
                                    </span>
                                </div>
                                <h4 class="project-preview-contents-title mt-3"> <?php echo e($project->title); ?> </h4>
                                <p class="project-preview-contents-para"> <?php echo $project->description; ?> </p>
                            </div>
                        </div>
                        <div class="project-preview">
                            <div class="myJob-wrapper-single-flex flex-between align-items-center">
                                <div class="myJob-wrapper-single-contents">
                                    <div class="jobFilter-proposal-author-flex">
                                        <div class="jobFilter-proposal-author-thumb">
                                            <?php if($user->image): ?>
                                                <?php if(cloudStorageExist() && in_array(Storage::getDefaultDriver(), ['s3', 'cloudFlareR2', 'wasabi'])): ?>
                                                    <img src="<?php echo e(render_frontend_cloud_image_if_module_exists( 'profile/'. $user->image, load_from: $user->load_from ?? '')); ?>" alt="<?php echo e(__('profile img')); ?>">
                                                <?php else: ?>
                                                    <img src="<?php echo e(asset('assets/uploads/profile/' . $user->image)); ?>" alt="<?php echo e($user->first_name); ?>">
                                                <?php endif; ?>
                                            <?php else: ?>
                                                <img src="<?php echo e(asset('assets/static/img/author/author.jpg')); ?>" alt="<?php echo e(__('AuthorImg')); ?>">
                                            <?php endif; ?>
                                        </div>
                                        <div class="jobFilter-proposal-author-contents">
                                            <h4 class="jobFilter-proposal-author-contents-title"> <?php echo e($user->first_name); ?>

                                                <?php echo e($user->last_name); ?></h4>
                                            <p class="jobFilter-proposal-author-contents-subtitle mt-2">
                                                <?php if($user->user_introduction?->title): ?>
                                                <?php echo e($user->user_introduction?->title); ?> ·
                                                <?php endif; ?>
                                                <span>
                                                    <?php if($user->user_state?->state): ?>
                                                    <?php echo e($user->user_state?->state); ?>,
                                                    <?php endif; ?>
                                                    <?php if($user->user_country?->country): ?>
                                                    <?php echo e($user->user_country?->country); ?>

                                                    <?php endif; ?>
                                                </span>
                                            </p>

                                            <div class="jobFilter-proposal-author-contents-review mt-2">
                                                <?php echo freelancer_rating($user->id); ?>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php if(!empty($project->standard_title) && !empty($project->premium_title)): ?>
                            <div class="project-preview">
                                <div class="project-preview-head profile-border-bottom">
                                    <h4 class="project-preview-head-title"> <?php echo e(__('Compare Packages')); ?> </h4>
                                </div>
                                <div class="pricing-wrapper d-flex flex-wrap">
                                    <!-- left wrapper -->
                                    <div class="pricing-wrapper-left">
                                        <div class="pricing-wrapper-card mb-30 wow fadeInLeft" data-wow-delay=".1s">
                                            <div class="pricing-wrapper-card-top">
                                            </div>
                                            <div class="pricing-wrapper-card-bottom">
                                                <div class="pricing-wrapper-card-bottom-list">
                                                    <ul class="list-style-none">
                                                        <li><?php echo e(__('Revisions')); ?></li>
                                                        <li><?php echo e(__('Delivery time')); ?></li>
                                                        <?php $__currentLoopData = $project->project_attributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <li><?php echo e($attr->check_numeric_title); ?></li>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        <li><?php echo e(__('Charges')); ?></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pricing-wrapper-right d-flex flex-wrap">
                                        <?php if($project->basic_title): ?>
                                            <div class="pricing-wrapper-card text-center wow fadeInRight"
                                                data-wow-delay=".2s">
                                                <div class="pricing-wrapper-card-top">
                                                    <h2 class="pricing-wrapper-card-top-prices">
                                                        <?php echo e($project->basic_title); ?></h2>
                                                </div>
                                                <div class="pricing-wrapper-card-bottom">
                                                    <div class="pricing-wrapper-card-bottom-list">
                                                        <ul class="list-style-none">
                                                            <li><span class="close-icon"> <?php echo e($project->basic_revision); ?>

                                                                </span></li>
                                                            <li><span class="close-icon">
                                                                    <?php echo e($project->basic_delivery); ?></span></li>
                                                            <?php $__currentLoopData = $project->project_attributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                <?php if($attr->basic_check_numeric == 'on'): ?>
                                                                    <li><span class="check-icon"> <i
                                                                                class="fas fa-check"></i> </span></li>
                                                                <?php else: ?>
                                                                    <li><span class="close-icon">
                                                                            <?php echo e($attr->basic_check_numeric); ?> </span></li>
                                                                <?php endif; ?>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            <li>
                                                                <div class="price">
                                                                    <?php if($project->basic_discount_charge != null && $project->basic_discount_charge > 0): ?>
                                                                        <h6 class="price-main">
                                                                            <?php echo e(amount_with_currency_symbol($project->basic_discount_charge)); ?>

                                                                        </h6>
                                                                        <s class="price-old">
                                                                            <?php echo e(amount_with_currency_symbol($project->basic_regular_charge)); ?></s>
                                                                    <?php else: ?>
                                                                        <h6 class="price-main">
                                                                            <?php echo e(amount_with_currency_symbol($project->basic_regular_charge)); ?>

                                                                        </h6>
                                                                    <?php endif; ?>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                        <div class="pricing-wrapper-card text-center wow fadeInLeft" data-wow-delay=".2s">
                                            <div class="pricing-wrapper-card-top">
                                                <h2 class="pricing-wrapper-card-top-prices"> <?php echo e($project->standard_title); ?>

                                                </h2>
                                            </div>
                                            <div class="pricing-wrapper-card-bottom">
                                                <div class="pricing-wrapper-card-bottom-list">
                                                    <ul class="list-style-none">
                                                        <li><span class="close-icon">
                                                                <?php echo e($project->standard_revision); ?></span></li>
                                                        <li><span class="close-icon"> <?php echo e($project->standard_delivery); ?>

                                                            </span></li>
                                                        <?php $__currentLoopData = $project->project_attributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php if($attr->basic_check_numeric == 'on'): ?>
                                                                <li><span class="check-icon"> <i class="fas fa-check"></i>
                                                                    </span></li>
                                                            <?php else: ?>
                                                                <li><span class="close-icon">
                                                                        <?php echo e($attr->standard_check_numeric); ?> </span></li>
                                                            <?php endif; ?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        <li>
                                                            <div class="price">
                                                                <?php if($project->standard_discount_charge != null && $project->standard_discount_charge > 0): ?>
                                                                    <h6 class="price-main">
                                                                        <?php echo e(amount_with_currency_symbol($project->standard_discount_charge)); ?>

                                                                    </h6>
                                                                    <s class="price-old">
                                                                        <?php echo e(amount_with_currency_symbol($project->standard_regular_charge ?? '')); ?></s>
                                                                <?php else: ?>
                                                                    <h6 class="price-main">
                                                                        <?php echo e(amount_with_currency_symbol($project->standard_regular_charge ?? '')); ?>

                                                                    </h6>
                                                                <?php endif; ?>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="pricing-wrapper-card text-center wow fadeInRight" data-wow-delay=".3s">
                                            <div class="pricing-wrapper-card-top">
                                                <h2 class="pricing-wrapper-card-top-prices"><?php echo e($project->premium_title); ?>

                                                </h2>
                                            </div>
                                            <div class="pricing-wrapper-card-bottom">
                                                <div class="pricing-wrapper-card-bottom-list">
                                                    <ul class="list-style-none">
                                                        <li><span class="close-icon"> <?php echo e($project->premium_revision); ?>

                                                            </span></li>
                                                        <li><span class="close-icon"> <?php echo e($project->premium_delivery); ?>

                                                            </span></li>
                                                        <?php $__currentLoopData = $project->project_attributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <?php if($attr->basic_check_numeric == 'on'): ?>
                                                                <li><span class="check-icon"> <i class="fas fa-check"></i>
                                                                    </span></li>
                                                            <?php else: ?>
                                                                <li><span class="close-icon">
                                                                        <?php echo e($attr->premium_check_numeric); ?> </span></li>
                                                            <?php endif; ?>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        <li>
                                                            <div class="price">
                                                                <?php if($project->premium_discount_charge != null && $project->premium_discount_charge > 0): ?>
                                                                    <h6 class="price-main">
                                                                        <?php echo e(amount_with_currency_symbol($project->premium_discount_charge)); ?>

                                                                    </h6>
                                                                    <s class="price-old">
                                                                        <?php echo e(amount_with_currency_symbol($project->premium_regular_charge)); ?>

                                                                    </s>
                                                                <?php else: ?>
                                                                    <h6 class="price-main">
                                                                        <?php echo e(amount_with_currency_symbol($project->premium_regular_charge)); ?>

                                                                    </h6>
                                                                <?php endif; ?>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif; ?>

                    </div>

                    <div class="col-xl-5 col-lg-8">
                        <div class="sticky-sidebar">
                            <div class="project-preview">
                                <div class="project-preview-tab">
                                    <ul class="tabs dashboard-tabs">
                                        <li data-tab="basic" class="active"><?php echo e($project->basic_title); ?></li>
                                        <li data-tab="standard"><?php echo e($project->standard_title); ?></li>
                                        <li data-tab="premium"><?php echo e($project->premium_title); ?></li>
                                    </ul>
                                    <div class="project-preview-tab-contents mt-4">

                                        <div class="tab-content-item dashboard-tab-content-item active" id="basic">
                                            <div class="project-preview-tab-header">
                                                <div class="project-preview-tab-header-item">
                                                    <span class="left"><i class="fa-solid fa-repeat"></i>
                                                        <?php echo e(__('Revisions')); ?></span>
                                                    <strong class="right"><?php echo e($project->basic_revision); ?></strong>
                                                </div>
                                                <div class="project-preview-tab-header-item">
                                                    <span class="left"><i class="fa-regular fa-clock"></i>
                                                        <?php echo e(__('Delivery time')); ?></span>
                                                    <strong class="right"><?php echo e($project->basic_delivery); ?> </strong>
                                                </div>
                                            </div>
                                            <div class="project-preview-tab-inner mt-4">
                                                <?php $__currentLoopData = $project->project_attributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="project-preview-tab-inner-item">
                                                        <span class="left"><?php echo e($attr->check_numeric_title); ?></span>
                                                        <?php if($attr->basic_check_numeric == 'on'): ?>
                                                            <span class="check-icon"> <i class="fas fa-check"></i> </span>
                                                        <?php else: ?>
                                                            <span class="right"> <?php echo e($attr->basic_check_numeric); ?> </span>
                                                        <?php endif; ?>
                                                    </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <div class="project-preview-tab-inner-item">
                                                    <?php if($project->basic_discount_charge != null && $project->basic_discount_charge > 0): ?>
                                                        <span class="left price-title"><?php echo e(__('Price')); ?></span>
                                                        <span class="right price">
                                                            <s><?php echo e(amount_with_currency_symbol($project->basic_regular_charge ?? '')); ?></s><?php echo e(amount_with_currency_symbol($project->basic_discount_charge)); ?></span>
                                                    <?php else: ?>
                                                        <span class="left price-title"><?php echo e(__('Price')); ?></span>
                                                        <span
                                                            class="right price"><?php echo e(amount_with_currency_symbol($project->basic_regular_charge ?? '')); ?></span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-content-item dashboard-tab-content-item" id="standard">
                                            <div class="project-preview-tab-header">
                                                <div class="project-preview-tab-header-item">
                                                    <span class="left"><i class="fa-solid fa-repeat"></i>
                                                        <?php echo e(__('Revisions')); ?></span>
                                                    <strong class="right"><?php echo e($project->basic_revision); ?></strong>
                                                </div>
                                                <div class="project-preview-tab-header-item">
                                                    <span class="left"><i class="fa-regular fa-clock"></i>
                                                        <?php echo e(__('Delivery time')); ?></span>
                                                    <strong class="right"><?php echo e($project->basic_delivery); ?></strong>
                                                </div>
                                            </div>
                                            <div class="project-preview-tab-inner mt-4">
                                                <?php $__currentLoopData = $project->project_attributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="project-preview-tab-inner-item">
                                                        <span class="left"><?php echo e($attr->check_numeric_title); ?></span>
                                                        <?php if($attr->standard_check_numeric == 'on'): ?>
                                                            <span class="check-icon"> <i class="fas fa-check"></i> </span>
                                                        <?php else: ?>
                                                            <span class="right"> <?php echo e($attr->standard_check_numeric); ?>

                                                            </span>
                                                        <?php endif; ?>
                                                    </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                <div class="project-preview-tab-inner-item">
                                                    <?php if($project->standard_discount_charge != null && $project->standard_discount_charge > 0): ?>
                                                        <span class="left price-title"><?php echo e(__('Price')); ?></span>
                                                        <span class="right price">
                                                            <s><?php echo e(amount_with_currency_symbol($project->standard_regular_charge ?? '')); ?></s><?php echo e(amount_with_currency_symbol($project->standard_discount_charge)); ?></span>
                                                    <?php else: ?>
                                                        <span class="left price-title"><?php echo e(__('Price')); ?></span>
                                                        <span
                                                            class="right price"><?php echo e(amount_with_currency_symbol($project->standard_regular_charge ?? '')); ?></span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-content-item dashboard-tab-content-item" id="premium">
                                            <div class="project-preview-tab-header">
                                                <div class="project-preview-tab-header-item">
                                                    <span class="left"><i class="fa-solid fa-repeat"></i>
                                                        <?php echo e(__('Revisions')); ?></span>
                                                    <strong class="right"><?php echo e($project->premium_revision); ?></strong>
                                                </div>
                                                <div class="project-preview-tab-header-item">
                                                    <span class="left"><i class="fa-regular fa-clock"></i>
                                                        <?php echo e(__('Delivery time')); ?></span>
                                                    <strong class="right"><?php echo e($project->premium_delivery); ?></strong>
                                                </div>
                                            </div>
                                            <div class="project-preview-tab-inner mt-4">
                                                <?php $__currentLoopData = $project->project_attributes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $attr): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <div class="project-preview-tab-inner-item">
                                                        <span class="left"><?php echo e($attr->check_numeric_title); ?></span>
                                                        <?php if($attr->premium_check_numeric == 'on'): ?>
                                                            <span class="check-icon"> <i class="fas fa-check"></i> </span>
                                                        <?php else: ?>
                                                            <span class="right"> <?php echo e($attr->premium_check_numeric); ?>

                                                            </span>
                                                        <?php endif; ?>
                                                    </div>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                                <div class="project-preview-tab-inner-item">
                                                    <?php if($project->premium_discount_charge != null && $project->premium_discount_charge > 0): ?>
                                                        <span class="left price-title"><?php echo e(__('Price')); ?></span>
                                                        <span class="right price">
                                                            <s><?php echo e(amount_with_currency_symbol($project->premium_regular_charge ?? '')); ?></s><?php echo e(amount_with_currency_symbol($project->premium_discount_charge)); ?></span>
                                                    <?php else: ?>
                                                        <span class="left price-title"><?php echo e(__('Price')); ?></span>
                                                        <span
                                                            class="right price"><?php echo e(amount_with_currency_symbol($project->premium_regular_charge ?? '')); ?></span>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>

                                        <hr class="mt-5">
                                        <div class="btn-wrapper flex-btn justify-content-between">
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('project-reject')): ?>
                                                <a href="#" class="btn-profile btn-outline-gray btn-hover-danger" data-bs-target="#rejectProjectModal" data-bs-toggle="modal"><?php echo e(__('Click to Reject')); ?></a>
                                            <?php endif; ?>
                                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('project-status-change')): ?>
                                                <?php if($project->status === 0 || $project->status === 2): ?>
                                                    <?php if (isset($component)) { $__componentOriginaled49183813b6264fe02b2283042511dd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaled49183813b6264fe02b2283042511dd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.status.table.status-change','data' => ['title' => __('Click to Active'),'class' => 'btn-profile btn-bg-1 swal_status_change_button','url' => route('admin.project.status.change', $project->id)]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('status.table.status-change'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Click to Active')),'class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('btn-profile btn-bg-1 swal_status_change_button'),'url' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.project.status.change', $project->id))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaled49183813b6264fe02b2283042511dd)): ?>
<?php $attributes = $__attributesOriginaled49183813b6264fe02b2283042511dd; ?>
<?php unset($__attributesOriginaled49183813b6264fe02b2283042511dd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaled49183813b6264fe02b2283042511dd)): ?>
<?php $component = $__componentOriginaled49183813b6264fe02b2283042511dd; ?>
<?php unset($__componentOriginaled49183813b6264fe02b2283042511dd); ?>
<?php endif; ?>
                                                <?php else: ?>
                                                    <?php if (isset($component)) { $__componentOriginaled49183813b6264fe02b2283042511dd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaled49183813b6264fe02b2283042511dd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.status.table.status-change','data' => ['title' => __('Click to Inactive'),'class' => 'btn-profile btn-bg-1 swal_status_change_button','url' => route('admin.project.status.change', $project->id)]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('status.table.status-change'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Click to Inactive')),'class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('btn-profile btn-bg-1 swal_status_change_button'),'url' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.project.status.change', $project->id))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaled49183813b6264fe02b2283042511dd)): ?>
<?php $attributes = $__attributesOriginaled49183813b6264fe02b2283042511dd; ?>
<?php unset($__attributesOriginaled49183813b6264fe02b2283042511dd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaled49183813b6264fe02b2283042511dd)): ?>
<?php $component = $__componentOriginaled49183813b6264fe02b2283042511dd; ?>
<?php unset($__componentOriginaled49183813b6264fe02b2283042511dd); ?>
<?php endif; ?>
                                                <?php endif; ?>
                                            <?php endif; ?>
                                            <div class="mt-3">
                                                <?php if (isset($component)) { $__componentOriginalfc4e3c8108f5f9458dc90e11adc2a670 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfc4e3c8108f5f9458dc90e11adc2a670 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.notice.general-notice','data' => ['description' => __(
                                                    'Notice: Active means users will be able to see the project on the website.',
                                                ),'description1' => __(
                                                    'Notice: Inactive means the project will be hidden from users.',
                                                ),'description2' => __(
                                                        'Notice: Rejected means the project has issues and the user is requested to resolve these issues and resubmit the project.',
                                                    )]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('notice.general-notice'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['description' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__(
                                                    'Notice: Active means users will be able to see the project on the website.',
                                                )),'description1' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__(
                                                    'Notice: Inactive means the project will be hidden from users.',
                                                )),'description2' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__(
                                                        'Notice: Rejected means the project has issues and the user is requested to resolve these issues and resubmit the project.',
                                                    ))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalfc4e3c8108f5f9458dc90e11adc2a670)): ?>
<?php $attributes = $__attributesOriginalfc4e3c8108f5f9458dc90e11adc2a670; ?>
<?php unset($__attributesOriginalfc4e3c8108f5f9458dc90e11adc2a670); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalfc4e3c8108f5f9458dc90e11adc2a670)): ?>
<?php $component = $__componentOriginalfc4e3c8108f5f9458dc90e11adc2a670; ?>
<?php unset($__componentOriginalfc4e3c8108f5f9458dc90e11adc2a670); ?>
<?php endif; ?>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php echo $__env->make('backend.pages.project.project-reject', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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
    <?php if (isset($component)) { $__componentOriginala34b824a201f14e7e09beb6785e605e8 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginala34b824a201f14e7e09beb6785e605e8 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.select2.select2-js','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('select2.select2-js'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginala34b824a201f14e7e09beb6785e605e8)): ?>
<?php $attributes = $__attributesOriginala34b824a201f14e7e09beb6785e605e8; ?>
<?php unset($__attributesOriginala34b824a201f14e7e09beb6785e605e8); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala34b824a201f14e7e09beb6785e605e8)): ?>
<?php $component = $__componentOriginala34b824a201f14e7e09beb6785e605e8; ?>
<?php unset($__componentOriginala34b824a201f14e7e09beb6785e605e8); ?>
<?php endif; ?>
    <?php echo $__env->make('backend.pages.project.project-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/clouddeployx.com/public_html/core/resources/views/backend/pages/project/project-details.blade.php ENDPATH**/ ?>