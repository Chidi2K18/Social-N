<div class="shop-sidebar-content">
    <div class="shop-close-content">
        <div class="shop-close-content-icon"> <i class="fas fa-times"></i> </div>
        <div class="single-shop-left bg-white radius-10">
            <div class="single-shop-left-filter">
                <div class="single-shop-left-filter-flex flex-between">
                    <div class="single-shop-left-filter-title">
                        <h5 class="title">
                            <?php echo e(__('Talent Filter')); ?>

                        </h5>
                    </div>
                    <a href="<?php echo e(route('talents.all')); ?>" class="single-shop-left-filter-reset"><?php echo e(__('Reset Filter')); ?></a>
                </div>
            </div>
        </div>
        <div class="single-shop-left bg-white radius-10 mt-4">
            <div class="single-shop-left-title open">
                <h5 class="title"> <?php echo e(__('Search by Country')); ?> </h5>
                <div class="single-shop-left-inner margin-top-15">
                    <div class="single-shop-left-select">
                        <?php if (isset($component)) { $__componentOriginal12fe48fc0aa2632da8ebcb778f3ef00f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal12fe48fc0aa2632da8ebcb778f3ef00f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.filter-project-job-country','data' => ['innerTitle' => __('Select'),'name' => 'category','id' => 'country']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.filter-project-job-country'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['innerTitle' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Select')),'name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('category'),'id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('country')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal12fe48fc0aa2632da8ebcb778f3ef00f)): ?>
<?php $attributes = $__attributesOriginal12fe48fc0aa2632da8ebcb778f3ef00f; ?>
<?php unset($__attributesOriginal12fe48fc0aa2632da8ebcb778f3ef00f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal12fe48fc0aa2632da8ebcb778f3ef00f)): ?>
<?php $component = $__componentOriginal12fe48fc0aa2632da8ebcb778f3ef00f; ?>
<?php unset($__componentOriginal12fe48fc0aa2632da8ebcb778f3ef00f); ?>
<?php endif; ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="single-shop-left bg-white radius-10 mt-4">
            <div class="single-shop-left-title open">
                <h5 class="title"><?php echo e(__('Experience Level')); ?></h5>
                <div class="single-shop-left-inner margin-top-15">
                    <div class="single-shop-left-select">
                        <div class="single-flex-input">
                            <div class="single-input">
                                <select name="level" id="level" class="form-control">
                                    <option value=""><?php echo e(__('Select')); ?></option>
                                    <option value="junior"><?php echo e(__('Junior')); ?></option>
                                    <option value="midLevel"><?php echo e(__('MidLevel')); ?></option>
                                    <option value="senior"><?php echo e(__('Senior')); ?></option>
                                </select>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <?php if(moduleExists('FreelancerLevel')): ?>
            <?php
                $levels = \Modules\FreelancerLevel\Entities\FreelancerLevel::latest()->whereHas('level_rule')
                ->with('level_rule')
                ->where('status',1)
                ->get();
            ?>
        <div class="single-shop-left bg-white radius-10 mt-4">
            <div class="single-shop-left-title open">
                <h5 class="title"><?php echo e(__('Talent Badge')); ?></h5>
                <div class="single-shop-left-inner margin-top-15">
                    <div class="single-shop-left-select">
                        <div class="single-flex-input">
                            <div class="single-input">
                                <select name="talent_badge" id="talent_badge" class="form-control">
                                    <option value=""><?php echo e(__('Select')); ?></option>
                                    <?php $__currentLoopData = $levels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $level): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($level?->level_rule?->period); ?>"><?php echo e($level->level); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                                </select>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <?php endif; ?>

        <div class="single-shop-left bg-white radius-10 mt-4">
            <div class="single-shop-left-title open">
                <h5 class="title"><?php echo e(__('Search By Category')); ?></h5>
                <div class="single-shop-left-inner margin-top-15">
                    <div class="single-shop-left-select">
                        <?php if (isset($component)) { $__componentOriginal84806209167b80946d2b24ff70d8da26 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal84806209167b80946d2b24ff70d8da26 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.category-dropdown','data' => ['title' => '','name' => 'category','id' => 'category','class' => 'form-control']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.category-dropdown'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(''),'name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('category'),'id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('category'),'class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('form-control')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal84806209167b80946d2b24ff70d8da26)): ?>
<?php $attributes = $__attributesOriginal84806209167b80946d2b24ff70d8da26; ?>
<?php unset($__attributesOriginal84806209167b80946d2b24ff70d8da26); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal84806209167b80946d2b24ff70d8da26)): ?>
<?php $component = $__componentOriginal84806209167b80946d2b24ff70d8da26; ?>
<?php unset($__componentOriginal84806209167b80946d2b24ff70d8da26); ?>
<?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-shop-left bg-white radius-10 mt-4">
            <div class="single-shop-left-title open">
                <h5 class="title"> <?php echo e(__('Search by Subcategory')); ?> </h5>
                <div class="single-shop-left-inner margin-top-15">
                    <div class="single-shop-left-select">
                        <div class="single-input mt-3">
                            <select name="subcategory[]" id="subcategory" class="form-control get_subcategory subcategory_select2" multiple>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="single-shop-left bg-white radius-10 mt-4">
            <div class="single-shop-left-title open">
                <h5 class="title"><?php echo e(__('Search By Skill')); ?></h5>
                <div class="single-shop-left-inner margin-top-15">
                    <div class="single-shop-left-select">
                        <select name="skill" id="skill" class="form-control">
                            <option value=""><?php echo e(__('Select Skill')); ?></option>
                            <?php $__currentLoopData = $allSkills = \App\Models\Skill::all_skills(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <option value="<?php echo e($data->skill); ?>"><?php echo e($data->skill); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<?php /**PATH /home/clouddeployx.com/public_html/core/resources/views/frontend/pages/talent/sidebar.blade.php ENDPATH**/ ?>