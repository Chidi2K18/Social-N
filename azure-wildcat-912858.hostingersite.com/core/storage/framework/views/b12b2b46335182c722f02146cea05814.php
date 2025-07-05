<!-- Setup Education Start -->
<div class="setup-wrapper-contents">
	<form id="password_change_form">
			<?php echo csrf_field(); ?>
			<?php if (isset($component)) { $__componentOriginal4bb59b834d778ff0cb72af5a473e2885 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal4bb59b834d778ff0cb72af5a473e2885 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.validation.error','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('validation.error'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal4bb59b834d778ff0cb72af5a473e2885)): ?>
<?php $attributes = $__attributesOriginal4bb59b834d778ff0cb72af5a473e2885; ?>
<?php unset($__attributesOriginal4bb59b834d778ff0cb72af5a473e2885); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4bb59b834d778ff0cb72af5a473e2885)): ?>
<?php $component = $__componentOriginal4bb59b834d778ff0cb72af5a473e2885; ?>
<?php unset($__componentOriginal4bb59b834d778ff0cb72af5a473e2885); ?>
<?php endif; ?>
			<div class="single-profile-settings">
				<h4><?php echo e(__('Change Password')); ?></h4>
				<div class="change-password custom-form">
					<div class="error_msg_container my-2"></div>
					<?php if (isset($component)) { $__componentOriginal7402aa1f0ef356e6819f9aab3e9a0e98 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7402aa1f0ef356e6819f9aab3e9a0e98 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.password','data' => ['title' => __('Current Password'),'type' => 'password','name' => 'current_password','id' => 'current_password','class' => 'form-control','placeholder' => __('Type Current Password')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.password'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Current Password')),'type' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('password'),'name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('current_password'),'id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('current_password'),'class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('form-control'),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Type Current Password'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7402aa1f0ef356e6819f9aab3e9a0e98)): ?>
<?php $attributes = $__attributesOriginal7402aa1f0ef356e6819f9aab3e9a0e98; ?>
<?php unset($__attributesOriginal7402aa1f0ef356e6819f9aab3e9a0e98); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7402aa1f0ef356e6819f9aab3e9a0e98)): ?>
<?php $component = $__componentOriginal7402aa1f0ef356e6819f9aab3e9a0e98; ?>
<?php unset($__componentOriginal7402aa1f0ef356e6819f9aab3e9a0e98); ?>
<?php endif; ?>
					<span id="current_password_match"></span>
					<?php if (isset($component)) { $__componentOriginal7402aa1f0ef356e6819f9aab3e9a0e98 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7402aa1f0ef356e6819f9aab3e9a0e98 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.password','data' => ['title' => __('New Password'),'type' => 'password','name' => 'new_password','id' => 'new_password','class' => 'form-control','placeholder' => __('Type New Password')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.password'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('New Password')),'type' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('password'),'name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('new_password'),'id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('new_password'),'class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('form-control'),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Type New Password'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7402aa1f0ef356e6819f9aab3e9a0e98)): ?>
<?php $attributes = $__attributesOriginal7402aa1f0ef356e6819f9aab3e9a0e98; ?>
<?php unset($__attributesOriginal7402aa1f0ef356e6819f9aab3e9a0e98); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7402aa1f0ef356e6819f9aab3e9a0e98)): ?>
<?php $component = $__componentOriginal7402aa1f0ef356e6819f9aab3e9a0e98; ?>
<?php unset($__componentOriginal7402aa1f0ef356e6819f9aab3e9a0e98); ?>
<?php endif; ?>
					<?php if (isset($component)) { $__componentOriginal7402aa1f0ef356e6819f9aab3e9a0e98 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7402aa1f0ef356e6819f9aab3e9a0e98 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.password','data' => ['title' => __('Confirm New Password'),'type' => 'password','name' => 'confirm_new_password','id' => 'confirm_new_password','class' => 'form-control','placeholder' => __('Confirm New Password')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.password'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Confirm New Password')),'type' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('password'),'name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('confirm_new_password'),'id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('confirm_new_password'),'class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('form-control'),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Confirm New Password'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7402aa1f0ef356e6819f9aab3e9a0e98)): ?>
<?php $attributes = $__attributesOriginal7402aa1f0ef356e6819f9aab3e9a0e98; ?>
<?php unset($__attributesOriginal7402aa1f0ef356e6819f9aab3e9a0e98); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7402aa1f0ef356e6819f9aab3e9a0e98)): ?>
<?php $component = $__componentOriginal7402aa1f0ef356e6819f9aab3e9a0e98; ?>
<?php unset($__componentOriginal7402aa1f0ef356e6819f9aab3e9a0e98); ?>
<?php endif; ?>
					<span id="new_password_match"></span>
				</div>
				<div class="btn-wrapper profile-border-top flex-btn justify-content-end">
					<?php if (isset($component)) { $__componentOriginald51d03ac38950c6ca9fceee323ea1e0d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald51d03ac38950c6ca9fceee323ea1e0d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.btn.submit','data' => ['title' => __('Change Password'),'class' => 'btn-profile btn-bg-1']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('btn.submit'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Change Password')),'class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('btn-profile btn-bg-1')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald51d03ac38950c6ca9fceee323ea1e0d)): ?>
<?php $attributes = $__attributesOriginald51d03ac38950c6ca9fceee323ea1e0d; ?>
<?php unset($__attributesOriginald51d03ac38950c6ca9fceee323ea1e0d); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald51d03ac38950c6ca9fceee323ea1e0d)): ?>
<?php $component = $__componentOriginald51d03ac38950c6ca9fceee323ea1e0d; ?>
<?php unset($__componentOriginald51d03ac38950c6ca9fceee323ea1e0d); ?>
<?php endif; ?>
				</div>
			</div>
		</form>
 <?php /*?>  <div class="setup-wrapper-contents-item">
        <h3 class="setup-wrapper-contents-title">{{ get_static_option('education_title') ?? __('What’s your Educational Background?(Education)') }}</h3>
        <div class="setup-wrapper-experience">
            <div class="setup-wrapper-experience-add">
                <span class="setup-wrapper-experience-add-title">{{ __('Add a Educational Background') }}</span>
                <a href="javascript:void(0)" class="setup-wrapper-experience-add-icon add-education"> <i class="fas fa-plus"></i> </a>
            </div>
        </div>
    </div>
    <div class="setup-wrapper-contents-item">
		
		 
        <h4 class="setup-wrapper-contents-title-two">{{ get_static_option('education_inner_title') ?? __('Education') }}</h4>
        <div class="setup-wrapper-experience" id="display_user_education_data">
            @foreach($educations as $education)
                <div class="setup-wrapper-experience-details">
                    <div class="setup-wrapper-experience-details-flex">
                        <div class="setup-wrapper-experience-details-left">
                            <h5 class="setup-wrapper-experience-details-title">{{ $education->subject }}</h5>
                            <p class="setup-wrapper-experience-details-subtitle">{{ $education->institution }}</p>
                        </div>
                        <a href="javascript:void(0)"
                           class="setup-wrapper-experience-details-edit education-click edit_single_education"
                           data-id ="{{ $education->id }}"
                           data-institution ="{{ $education->institution }}"
                           data-subject ="{{ $education->subject }}"
                           data-degree ="{{ $education->degree }}"
                           data-start_date="{{ Carbon\Carbon::parse($education->start_date)->toFormattedDateString() }}"
                           data-end_date="{{ Carbon\Carbon::parse($education->end_date)->toFormattedDateString() }}"
                        >
                            <i class="fas fa-edit"></i>
                        </a>
                    </div>
                    <ul class="setup-wrapper-experience-details-list">
                        <li class="setup-wrapper-experience-details-list-item">
                            <span class="list-inner"> <i class="fa-solid fa-graduation-cap"></i>
                                <span class="list-inner-para">{{ __('Degree') }}</span>
                            </span>
                            <span class="list-inner">
                                <span class="list-inner-para">{{ $education->degree }}</span>
                            </span>
                        </li>
                        <li class="setup-wrapper-experience-details-list-item">
                            <span class="list-inner"> <i class="fa-solid fa-calendar-days"></i> <span class="list-inner-para">{{ __('From-To') }}</span> </span>
                            <span class="list-inner">
                                <span class="list-inner-para">{{ Carbon\Carbon::parse($education->start_date)->toFormattedDateString() }} - <a href="javascript:void(0)">{{ $education->end_date ? Carbon\Carbon::parse($education->end_date)->toFormattedDateString() : __('(Expected)') }}</a></span>
                            </span>
                        </li>
                    </ul>
                </div>
            @endforeach
        </div>
    </div><?php */?>
</div>

<?php echo $__env->make('frontend.user.freelancer.account.education.add-education-modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('frontend.user.freelancer.account.education.edit-education-modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<!-- Setup Education Ends -->
<?php /**PATH /home/clouddeployx.com/public_html/core/resources/views/frontend/user/freelancer/account/education/education.blade.php ENDPATH**/ ?>