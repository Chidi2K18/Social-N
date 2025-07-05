<?php $__env->startSection('title', __('Job Details')); ?>
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
                            <div class="project-preview-contents mt-4">
                                <div class="customMarkup__single__item__flex project--rejected--wrapper">
                                    <h4 class="customMarkup__single__title"><?php if (isset($component)) { $__componentOriginal03379f522cfceba10901e2e1e89a2bd7 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal03379f522cfceba10901e2e1e89a2bd7 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.status.table.active-inactive','data' => ['status' => $job->status]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('status.table.active-inactive'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['status' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($job->status)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal03379f522cfceba10901e2e1e89a2bd7)): ?>
<?php $attributes = $__attributesOriginal03379f522cfceba10901e2e1e89a2bd7; ?>
<?php unset($__attributesOriginal03379f522cfceba10901e2e1e89a2bd7); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal03379f522cfceba10901e2e1e89a2bd7)): ?>
<?php $component = $__componentOriginal03379f522cfceba10901e2e1e89a2bd7; ?>
<?php unset($__componentOriginal03379f522cfceba10901e2e1e89a2bd7); ?>
<?php endif; ?></h4>
                                    <h4 class="customMarkup__single__title"><?php echo e(__('No of Edit')); ?> <span
                                            class="project-reject-edit-count"><?php echo e($job->job_history?->edit_count ?? '0'); ?></span>
                                    </h4>
                                </div>
                                <h4 class="project-preview-contents-title mt-3"> <?php echo e($job->title); ?> </h4>
                                <p class="project-preview-contents-para"> <?php echo $job->description; ?> </p>
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
                                                <?php echo e($user->user_introduction?->title); ?> ·
                                                <span><?php echo e($user->user_state?->state); ?>,
                                                    <?php echo e($user->user_country?->country); ?></span> </p>
                                            <div class="jobFilter-proposal-author-contents-review mt-2">
                                                <a href="javascript:void(0)"
                                                    class="jobFilter-proposal-author-contents-jobs">
                                                    <?php echo e($complete_jobs_count->count()); ?> Jobs Completed </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-8">
                        <div class="sticky-sidebar">
                            <div class="project-preview">
                                <div class="project-preview-tab">
                                    <div class="project-preview-tab-contents mt-4">

                                        <div class="tab-content-item dashboard-tab-content-item active" id="basic">
                                            <div class="project-preview-tab-header">
                                                <div class="project-preview-tab-header-item">
                                                    <span class="left"><i class="fa-solid fa-repeat"></i>
                                                        <?php echo e(__('Type')); ?></span>
                                                    <strong class="right"><?php echo e(__(ucfirst($job->type))); ?></strong>
                                                </div>
                                                <div class="project-preview-tab-header-item">
                                                    <span class="left"><i class="fa-regular fa-clock"></i>
                                                        <?php echo e(__('Budget')); ?></span>
                                                    <strong
                                                        class="right"><?php echo e(amount_with_currency_symbol($job->budget ?? '')); ?></strong>
                                                </div>
                                            </div>
                                            <div class="project-preview-tab-inner mt-4">
                                                <?php if($job->last_seen != null): ?>
                                                    <div class="project-preview-tab-inner-item">
                                                        <span class="left"><?php echo e(__('Last Seen')); ?></span>
                                                        <span class="check-icon">
                                                            <?php echo e(\Carbon\Carbon::parse($job->last_seen)?->diffForHumans()); ?>

                                                        </span>
                                                    </div>
                                                <?php endif; ?>
                                                <?php if($job->attachment): ?>
                                                    <div class="project-preview-tab-inner-item">
                                                        <span class="left"><?php echo e(__('Attchment')); ?></span>
                                                        <span class="check-icon">
                                                            <?php if(cloudStorageExist() && in_array(Storage::getDefaultDriver(), ['s3', 'cloudFlareR2', 'wasabi'])): ?>
                                                                <a href="<?php echo e(render_frontend_cloud_image_if_module_exists('jobs/'.$job->attachment, load_from: $job->load_from)); ?>"
                                                                   download class="single-refundRequest-item-uploads">
                                                                    <i class="fa-solid fa-cloud-arrow-down"></i>
                                                                    <?php echo e(__('Download Attachment')); ?>

                                                                </a>
                                                            <?php else: ?>
                                                                <a href="<?php echo e(asset('assets/uploads/jobs/' . $job->attachment)); ?>"
                                                                    download class="single-refundRequest-item-uploads">
                                                                    <i class="fa-solid fa-cloud-arrow-down"></i>
                                                                    <?php echo e(__('Download Attachment')); ?>

                                                                </a>
                                                            <?php endif; ?>
                                                        </span>
                                                    </div>
                                                <?php endif; ?>
                                                <?php if($job->level): ?>
                                                    <div class="project-preview-tab-inner-item">
                                                        <span class="left"><?php echo e(__('Experience Level')); ?></span>
                                                        <span class="check-icon"><?php echo e(ucfirst($job->level)); ?></span>
                                                    </div>
                                                <?php endif; ?>
                                                <div class="project-preview-tab-inner-item">
                                                    <span class="left"><?php echo e(__('Category')); ?></span>
                                                    <span
                                                        class="check-icon"><?php echo e($job->job_category?->category ?? ''); ?></span>
                                                </div>
                                            </div>
                                        </div>

                                        <hr class="mt-5">
                                        <div class="btn-wrapper flex-btn justify-content-between">
                                            <?php if($job->status === 0): ?>
                                                <?php if (isset($component)) { $__componentOriginaled49183813b6264fe02b2283042511dd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaled49183813b6264fe02b2283042511dd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.status.table.status-change','data' => ['title' => __('Approve Job'),'class' => 'btn-profile btn-bg-1 swal_status_change_button','url' => route('admin.job.status.change', $job->id)]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('status.table.status-change'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Approve Job')),'class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('btn-profile btn-bg-1 swal_status_change_button'),'url' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.job.status.change', $job->id))]); ?>
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
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.status.table.status-change','data' => ['title' => __('Inactive Job'),'class' => 'btn-profile btn-bg-1 swal_status_change_button','url' => route('admin.job.status.change', $job->id)]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('status.table.status-change'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Inactive Job')),'class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('btn-profile btn-bg-1 swal_status_change_button'),'url' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.job.status.change', $job->id))]); ?>
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

                                            <?php if (isset($component)) { $__componentOriginalfc4e3c8108f5f9458dc90e11adc2a670 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfc4e3c8108f5f9458dc90e11adc2a670 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.notice.general-notice','data' => ['description' => __(
                                                'Notice: Active means the job will show for the website users.',
                                            ),'description1' => __(
                                                'Notice: Inactive means the job will not show for the website users.',
                                            )]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('notice.general-notice'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['description' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__(
                                                'Notice: Active means the job will show for the website users.',
                                            )),'description1' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__(
                                                'Notice: Inactive means the job will not show for the website users.',
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

<?php echo $__env->make('backend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/clouddeployx.com/public_html/core/resources/views/backend/pages/job/job-details.blade.php ENDPATH**/ ?>