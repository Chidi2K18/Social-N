<?php $__env->startSection('title', __('All Departments')); ?>
<?php $__env->startSection('content'); ?>
    <div class="dashboard__body">
        <div class="row">
            <div class="col-lg-12">
                <div class="customMarkup__single">
                    <div class="customMarkup__single__item">
                        <div class="customMarkup__single__item__flex">
                            <h4 class="customMarkup__single__title"><?php echo e(__('All Departments')); ?></h4>
                            <?php if (app(\Illuminate\Contracts\Auth\Access\Gate::class)->check('department-add')): ?>
                            <?php if (isset($component)) { $__componentOriginal6ed017f2ec07de0f219e80c147d739bc = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal6ed017f2ec07de0f219e80c147d739bc = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.btn.add-modal','data' => ['title' => __('Add Department')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('btn.add-modal'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Add Department'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal6ed017f2ec07de0f219e80c147d739bc)): ?>
<?php $attributes = $__attributesOriginal6ed017f2ec07de0f219e80c147d739bc; ?>
<?php unset($__attributesOriginal6ed017f2ec07de0f219e80c147d739bc); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal6ed017f2ec07de0f219e80c147d739bc)): ?>
<?php $component = $__componentOriginal6ed017f2ec07de0f219e80c147d739bc; ?>
<?php unset($__componentOriginal6ed017f2ec07de0f219e80c147d739bc); ?>
<?php endif; ?>
                            <?php endif; ?>
                        </div>
                        <div class="search_delete_wrapper">
                            <?php if (isset($component)) { $__componentOriginal41fc2efab414de3fc9c6739ba1ffcc6e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal41fc2efab414de3fc9c6739ba1ffcc6e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.bulk-action.bulk-action','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('bulk-action.bulk-action'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal41fc2efab414de3fc9c6739ba1ffcc6e)): ?>
<?php $attributes = $__attributesOriginal41fc2efab414de3fc9c6739ba1ffcc6e; ?>
<?php unset($__attributesOriginal41fc2efab414de3fc9c6739ba1ffcc6e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal41fc2efab414de3fc9c6739ba1ffcc6e)): ?>
<?php $component = $__componentOriginal41fc2efab414de3fc9c6739ba1ffcc6e; ?>
<?php unset($__componentOriginal41fc2efab414de3fc9c6739ba1ffcc6e); ?>
<?php endif; ?>
                        </div>
                        <div class="customMarkup__single__inner mt-4">
                            <?php if (isset($component)) { $__componentOriginalfc4e3c8108f5f9458dc90e11adc2a670 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfc4e3c8108f5f9458dc90e11adc2a670 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.notice.general-notice','data' => ['description' => __('Notice: Department status inactive means the department will not show while create a ticket.')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('notice.general-notice'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['description' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Notice: Department status inactive means the department will not show while create a ticket.'))]); ?>
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
                            <!-- Table Start -->
                            <div class="custom_table style-04 search_result">
                                <?php echo $__env->make('supportticket::backend.department.search-result', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                            </div>
                            <!-- Table End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php echo $__env->make('supportticket::backend.department.add-modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('supportticket::backend.department.edit-modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
    <?php if (isset($component)) { $__componentOriginal9a875eaa6e62a31e621f3a0caba5849e = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal9a875eaa6e62a31e621f3a0caba5849e = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.bulk-action.bulk-delete-js','data' => ['url' => route('admin.department.delete.bulk.action')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('bulk-action.bulk-delete-js'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['url' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.department.delete.bulk.action'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal9a875eaa6e62a31e621f3a0caba5849e)): ?>
<?php $attributes = $__attributesOriginal9a875eaa6e62a31e621f3a0caba5849e; ?>
<?php unset($__attributesOriginal9a875eaa6e62a31e621f3a0caba5849e); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal9a875eaa6e62a31e621f3a0caba5849e)): ?>
<?php $component = $__componentOriginal9a875eaa6e62a31e621f3a0caba5849e; ?>
<?php unset($__componentOriginal9a875eaa6e62a31e621f3a0caba5849e); ?>
<?php endif; ?>
    <?php echo $__env->make('supportticket::backend.department.department-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/clouddeployx.com/public_html/core/Modules/SupportTicket/Resources/views/backend/department/departments.blade.php ENDPATH**/ ?>