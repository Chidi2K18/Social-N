<?php $__env->startSection('site_title',__('Dashboard')); ?>
<?php $__env->startSection('style'); ?>
    <style>
     .total_balance{background-color: #e3e1ff !important;}
     .single-profile-settings-header {
         justify-content: space-between;
         gap: 10px;
         flex-wrap: wrap;
         align-items: center;
         .btn-profile {
             padding-left: 10px;
             padding-right: 10px;
         }
     }
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <main>
        <?php if (isset($component)) { $__componentOriginal1886b76dac2bd4a55dfc12d1a06ee6e4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1886b76dac2bd4a55dfc12d1a06ee6e4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.breadcrumb.user-profile-breadcrumb','data' => ['title' => __('Dashboard'),'innerTitle' => __('Dashboard')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('breadcrumb.user-profile-breadcrumb'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Dashboard')),'innerTitle' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Dashboard'))]); ?>
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
        <!-- Profile Settings area Starts -->
        <div class="responsive-overlay"></div>
        <div class="profile-settings-area pat-100 pab-100 section-bg-2">
            <div class="container">
                <div class="row g-4">
                    <?php echo $__env->make('frontend.user.layout.partials.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <div class="col-xl-9 col-lg-8">
                        <div class="profile-settings-wrapper">

                            <div class="single-profile-settings">
                                <div class="single-profile-settings-header d-flex">
                                    <div class="single-profile-settings-header-flex">
                                        <?php if (isset($component)) { $__componentOriginaldd5d165d00da56cf3441fe2a6f4754db = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldd5d165d00da56cf3441fe2a6f4754db = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.form-title','data' => ['title' => __('Dashboard Info'),'class' => 'single-profile-settings-header-title']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.form-title'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Dashboard Info')),'class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('single-profile-settings-header-title')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldd5d165d00da56cf3441fe2a6f4754db)): ?>
<?php $attributes = $__attributesOriginaldd5d165d00da56cf3441fe2a6f4754db; ?>
<?php unset($__attributesOriginaldd5d165d00da56cf3441fe2a6f4754db); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldd5d165d00da56cf3441fe2a6f4754db)): ?>
<?php $component = $__componentOriginaldd5d165d00da56cf3441fe2a6f4754db; ?>
<?php unset($__componentOriginaldd5d165d00da56cf3441fe2a6f4754db); ?>
<?php endif; ?>
                                    </div>
                                    <?php if(get_static_option('profile_switch_enable_disable') != 'disable'): ?>
                                    <div class="switcher">
                                        <div>
                                            <select class="btn-profile btn-bg-1" onchange="switchProfile(this.value)">
                                                <?php if(Session::get('user_role') == 'client'): ?>
                                                    <option value="client" selected <?php if(Session::get('user_role') == 'client'): ?> class="d-none" <?php endif; ?>><?php echo e(__('Acting as Client')); ?></option>
                                                    <option value="freelancer"><?php echo e(__('Switch to Freelancer')); ?></option>
                                                <?php elseif(Session::get('user_role') == 'freelancer'): ?>
                                                    <option value="freelancer" selected <?php if(Session::get('user_role') == 'freelancer'): ?> class="d-none" <?php endif; ?>><?php echo e(__('Acting as Freelancer')); ?></option>
                                                    <option value="client"><?php echo e(__('Switch to Client')); ?></option>
                                                <?php else: ?>
                                                    <option value="freelancer" selected><?php echo e(__('Acting as Freelancer')); ?></option>
                                                    <option value="client"><?php echo e(__('Switch to Client')); ?></option>
                                                <?php endif; ?>
                                            </select>
                                        </div>
                                    </div>
                                    <?php endif; ?>
                                </div>
                                <div class="single-profile-settings-inner profile-border-top">
                                    <div class="row">

                                        <div class="col-xxl-3 col-lg-6 col-sm-6 col-md-4">
                                            <div class="myJob-wrapper-single-balance total_balance">
                                                <div class="myJob-wrapper-single-balance-contents">
                                                    <div class="myJob-wrapper-single-balance-price d-flex gap-2 justify-content-between">
                                                        <h4 class="contract_single__balance-price"><?php echo e(float_amount_with_currency_symbol($total_wallet_balance) ?? 0.0); ?></h4>
                                                    </div>
                                                    <p class="myJob-wrapper-single-balance-para"><?php echo e(__('Wallet Balance')); ?></p>
                                                </div>
                                            </div>
                                        </div>

                                        <?php if(get_static_option('project_enable_disable') != 'disable'): ?>
                                        <div class="col-xxl-3 col-lg-6 col-sm-6 col-md-4">
                                            <a href="<?php echo e(route('freelancer.profile.details', Auth::guard('web')->user()->username)); ?>">
                                                <div class="myJob-wrapper-single-balance">
                                                    <div class="myJob-wrapper-single-balance-contents">
                                                        <div class="myJob-wrapper-single-balance-price d-flex gap-2 justify-content-between">
                                                            <h4 class="contract_single__balance-price"><?php echo e($total_project ?? 0); ?></h4>
                                                        </div>
                                                        <p class="myJob-wrapper-single-balance-para"><?php echo e(__('Total Projects')); ?></p>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                       <?php endif; ?>
                                        <div class="col-xxl-3 col-lg-6 col-sm-6 col-md-4">
                                            <div class="myJob-wrapper-single-balance">
                                                <div class="myJob-wrapper-single-balance-contents">
                                                    <div class="myJob-wrapper-single-balance-price d-flex gap-2 justify-content-between">
                                                        <h4 class="contract_single__balance-price"><?php echo e($complete_order ?? 0); ?></h4>
                                                    </div>
                                                    <p class="myJob-wrapper-single-balance-para"><?php echo e(__('Complete Order')); ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xxl-3 col-lg-6 col-sm-6 col-md-4">
                                            <div class="myJob-wrapper-single-balance">
                                                <div class="myJob-wrapper-single-balance-contents">
                                                    <div class="myJob-wrapper-single-balance-price d-flex gap-2 justify-content-between">
                                                        <h4 class="contract_single__balance-price"><?php echo e($active_order ?? 0); ?></h4>
                                                    </div>
                                                    <p class="myJob-wrapper-single-balance-para"><?php echo e(__('Active Order')); ?></p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            
                            <div class="single-profile-settings">
                                <div class="single-profile-settings-header">
                                    <div class="single-profile-settings-header-flex">
                                        <?php if (isset($component)) { $__componentOriginaldd5d165d00da56cf3441fe2a6f4754db = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldd5d165d00da56cf3441fe2a6f4754db = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.form-title','data' => ['title' => __('Latest Orders'),'class' => 'single-profile-settings-header-title']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.form-title'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Latest Orders')),'class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('single-profile-settings-header-title')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldd5d165d00da56cf3441fe2a6f4754db)): ?>
<?php $attributes = $__attributesOriginaldd5d165d00da56cf3441fe2a6f4754db; ?>
<?php unset($__attributesOriginaldd5d165d00da56cf3441fe2a6f4754db); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldd5d165d00da56cf3441fe2a6f4754db)): ?>
<?php $component = $__componentOriginaldd5d165d00da56cf3441fe2a6f4754db; ?>
<?php unset($__componentOriginaldd5d165d00da56cf3441fe2a6f4754db); ?>
<?php endif; ?>
                                        <a href="<?php echo e(route('freelancer.order.all')); ?>" class="btn-profile btn-bg-1"> <?php echo e(__('All Orders')); ?> </a>
                                    </div>
                                </div>
                                <div class="single-profile-settings-inner profile-border-top">
                                    <div class="custom_table style-04">
                                        <table>
                                            <thead>
                                            <tr>
                                                <th><?php echo e(__('Budget')); ?></th>
                                                <th><?php echo e(__('Delivery Time')); ?></th>
                                                <th><?php echo e(__('Payment Status')); ?></th>
                                                <th><?php echo e(__('Create Date')); ?></th>
                                                <th><?php echo e(__('Order Details')); ?></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $__currentLoopData = $latest_orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e(float_amount_with_currency_symbol($order->price) ?? ''); ?></td>
                                                    <td><?php echo e(__($order->delivery_time) ?? ''); ?></td>
                                                    <td><?php echo e(__($order->payment_status) ?? ''); ?></td>
                                                    <td><?php echo e($order->created_at->toFormattedDateString()); ?></td>
                                                    <td><a href="<?php echo e(route('freelancer.order.details',$order->id)); ?>" class="btn-profile btn-bg-1"><?php echo e(__('Order Details')); ?></a></td>
                                                </tr>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            
                            <?php if(get_static_option('project_enable_disable') != 'disable'): ?>
                                <div class="single-profile-settings">
                                    <div class="single-profile-settings-header">
                                        <div class="single-profile-settings-header-flex">
                                            <?php if (isset($component)) { $__componentOriginaldd5d165d00da56cf3441fe2a6f4754db = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaldd5d165d00da56cf3441fe2a6f4754db = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.form-title','data' => ['title' => __('Latest Projects'),'class' => 'single-profile-settings-header-title']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.form-title'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Latest Projects')),'class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('single-profile-settings-header-title')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaldd5d165d00da56cf3441fe2a6f4754db)): ?>
<?php $attributes = $__attributesOriginaldd5d165d00da56cf3441fe2a6f4754db; ?>
<?php unset($__attributesOriginaldd5d165d00da56cf3441fe2a6f4754db); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldd5d165d00da56cf3441fe2a6f4754db)): ?>
<?php $component = $__componentOriginaldd5d165d00da56cf3441fe2a6f4754db; ?>
<?php unset($__componentOriginaldd5d165d00da56cf3441fe2a6f4754db); ?>
<?php endif; ?>
                                            <a href="<?php echo e(route('freelancer.profile.details', Auth::guard('web')->user()->username)); ?>" class="btn-profile btn-bg-1"> <?php echo e(__('All Projects')); ?> </a>
                                        </div>
                                    </div>
                                    <div class="single-profile-settings-inner profile-border-top">
                                        <div class="custom_table style-04">
                                            <table>
                                                <thead>
                                                <tr>
                                                    <th><?php echo e(__('Title')); ?></th>
                                                    <th><?php echo e(__('Action')); ?></th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php $__currentLoopData = $my_projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <tr>
                                                        <td><?php echo e($project->title); ?></td>
                                                        <td>
                                                            <a href="<?php echo e(route('freelancer.project.edit',$project->id)); ?>" class="btn-profile btn-bg-1 edit_info_show_hide"> <?php echo e(__('Edit Project')); ?> </a>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Profile Settings area end -->
    </main>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script>
        function switchProfile(role) {
            $.ajax({
                url:"<?php echo e(route('freelancer.switch.profile')); ?>",
                method:'post',
                data:{role:role},
                success:function(res){
                    if(res.status=='success'){
                        if(res.user_role == 'freelancer'){
                            window.location.href = "<?php echo e(route('freelancer.dashboard')); ?>";
                        }
                        if(res.user_role == 'client'){
                            window.location.href = "<?php echo e(route('client.dashboard')); ?>";
                        }
                        // location.reload();
                    }
                }
            });
        }
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/clouddeployx.com/public_html/core/resources/views/frontend/user/freelancer/dashboard/dashboard.blade.php ENDPATH**/ ?>