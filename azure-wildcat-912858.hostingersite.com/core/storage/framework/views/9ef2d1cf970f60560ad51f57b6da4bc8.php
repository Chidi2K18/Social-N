

<div class="setup-wrapper-contents active">
	<div class="setup-wrapper-contents-item">
	<?php echo $__env->make('frontend.user.freelancer.profile.profile-photo', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		<?php echo $__env->make('frontend.user.freelancer.profile.profile-info', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
	</div>
    <div class="setup-wrapper-contents-item">
        <h3 class="setup-wrapper-contents-title"><?php echo e(get_static_option('professional_title') ?? __('Tell us what professional title describes you?(Introduction)')); ?> </h3>
        <div class="setup-wrapper-contents-form">
            <form action="#">
                <div class="setup-wrapper-contents-form-item">
                    <input type="text" name="title" id="title" <?php if(!empty($user_introduction)): ?> value="<?php echo e($user_introduction->title); ?>" <?php endif; ?> class="form--control" placeholder="<?php echo e(__('Enter Your Title')); ?>">
                </div>
            </form>
        </div>
    </div>
    <div class="setup-wrapper-contents-item">
        <h3 class="setup-wrapper-contents-title"><?php echo e(get_static_option('intro_title') ?? __('Provide an intro about yourself')); ?></h3>
        <div class="setup-wrapper-contents-form">
            <form action="#">
                <div class="setup-wrapper-contents-form-item">
                    <textarea name="description" id="description" class="form-message" cols="30" rows="3" placeholder="<?php echo e(__('I am a professional develop...')); ?>"><?php if(!empty($user_introduction)): ?> <?php echo e($user_introduction->description); ?> <?php endif; ?></textarea>
                </div>
            </form>
        </div>
    </div>
	
	
	<!-- Setup Introduction Start -->


</div>
<?php /**PATH /home/clouddeployx.com/public_html/core/resources/views/frontend/user/freelancer/account/introduction.blade.php ENDPATH**/ ?>