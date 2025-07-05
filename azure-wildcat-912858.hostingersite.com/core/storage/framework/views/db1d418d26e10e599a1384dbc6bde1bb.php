<div class="single-input">
    <label class="label-title"><?php echo e($title ?? ''); ?></label>
    <select name="<?php echo e($name ?? ''); ?>" id="<?php echo e($id ?? ''); ?>" class="form-control country_select2">
        <option value=""><?php echo e($innerTitle ?? ''); ?></option>
        <?php $__currentLoopData = $all_countries = \Modules\CountryManage\Entities\Country::all_countries(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $country): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($country->id); ?>"><?php echo e($country->country); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
</div>
<?php /**PATH /home/u412525603/domains/azure-wildcat-912858.hostingersite.com/core/resources/views/components/form/filter-project-job-country.blade.php ENDPATH**/ ?>