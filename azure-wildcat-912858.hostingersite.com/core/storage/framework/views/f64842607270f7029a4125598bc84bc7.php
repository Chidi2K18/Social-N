<div class="single-input">
    <label class="label-title"><?php echo e($title); ?></label>
    <select name="<?php echo e($name ?? ''); ?>" id="<?php echo e($id ?? ''); ?>" class="form-control get_state_city city_select2">
        <option value=""><?php echo e(__('Select City')); ?></option>
        <?php if(!empty(Auth::guard('web')->user()->country_id)): ?>
            <?php $__currentLoopData = $all_cities = \Modules\CountryManage\Entities\City::where('state_id',Auth::guard('web')->user()->state_id)->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($city->id); ?>" <?php if($city->id == Auth::guard('web')->user()->city_id): ?> selected <?php endif; ?>><?php echo e($city->city); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php else: ?>
            <?php $__currentLoopData = $all_cities = \Modules\CountryManage\Entities\City::all_cities(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $city): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($city->id); ?>" <?php if($city->id == Auth::guard('web')->user()->city_id): ?> selected <?php endif; ?>><?php echo e($city->city); ?></option>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </select>
    <span class="city_info"></span>
</div>
<?php /**PATH /home/clouddeployx.com/public_html/core/resources/views/components/form/city-dropdown.blade.php ENDPATH**/ ?>