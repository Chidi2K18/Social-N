<div class="profile-details-widget-single radius-10">
    <div class="profile-wrapper-item-flex flex-between align-items-center profile-border-bottom">
        <h4 class="profile-wrapper-item-title"> <?php echo e(__('Portfolio')); ?> </h4>
        <?php if(Auth::guard('web')->check() &&
                Auth::guard('web')->user()->user_type == 2 &&
                Auth::guard('web')->user()->username == $username): ?>
            <div class="profile-wrapper-item-plus add-portfolio-click add_portfolio_show_hide">
                <i class="fas fa-plus"></i>
            </div>
        <?php endif; ?>
        <?php if(Auth::guard('web')->check() &&
                Auth::guard('web')->user()->user_type == 1 &&
                Auth::guard('web')->user()->username == $username && Session::get('user_role') == 'freelancer'): ?>
            <div class="profile-wrapper-item-plus add-portfolio-click add_portfolio_show_hide">
                <i class="fas fa-plus"></i>
            </div>
        <?php endif; ?>
    </div>
    <div class="profile-details-widget-portfolio-row portfolio_details_display">
        <?php $__currentLoopData = $portfolios; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $portfolio): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="profile-details-widget-portfolio-col click-portfolio view_portfolio_details"
                data-id="<?php echo e($portfolio->id); ?>">
                <div class="profile-details-portfolio ">
                    <div class="profile-details-portfolio-thumb">
                        <a href="#/">
                            <?php if(cloudStorageExist() && in_array(Storage::getDefaultDriver(), ['s3', 'cloudFlareR2', 'wasabi'])): ?>
                                <img src="<?php echo e(render_frontend_cloud_image_if_module_exists( 'portfolio/'.$portfolio->image, load_from: $portfolio->load_from)); ?>" alt="<?php echo e(__('portfolio')); ?>">
                            <?php else: ?>
                                <img src="<?php echo e(asset('assets/uploads/portfolio/' . $portfolio->image)); ?>" alt="<?php echo e(__('portfolio')); ?>">
                            <?php endif; ?>
                        </a>
                    </div>
                    <div class="profile-details-portfolio-content mt-3">
                        <h5 class="profile-details-portfolio-content-title d-flex justify-content-between">
                            <a href="#/"><?php echo e($portfolio->title); ?></a>
                        </h5>
                        <div class="d-flex justify-content-between align-items-center mt-1">
                            <p class="profile-details-portfolio-content-para">
                                <?php echo e($portfolio->created_at->toFormattedDateString() ?? ''); ?> </p>
                            <a href="#/" class="btn-profile btn-outline-1 btn-small"><?php echo e(__('Details')); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>
<?php /**PATH /home/u412525603/domains/azure-wildcat-912858.hostingersite.com/core/resources/views/frontend/profile-details/all-portfolio.blade.php ENDPATH**/ ?>