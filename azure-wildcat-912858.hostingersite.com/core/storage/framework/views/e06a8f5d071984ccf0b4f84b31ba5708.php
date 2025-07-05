<!-- Country Edit Modal -->
<div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel"><?php echo e(__('Add New Department')); ?></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?php echo e(route('admin.department')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="modal-body">
                    <?php if (isset($component)) { $__componentOriginalfc4e3c8108f5f9458dc90e11adc2a670 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalfc4e3c8108f5f9458dc90e11adc2a670 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.notice.general-notice','data' => ['description' => __('Notice: If you select inactive status the department will not show while create a ticket.'),'class' => 'mb-5']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('notice.general-notice'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['description' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Notice: If you select inactive status the department will not show while create a ticket.')),'class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('mb-5')]); ?>
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
                    <?php if (isset($component)) { $__componentOriginal2497cd08ed4b80389f11a0f1101e9ba2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2497cd08ed4b80389f11a0f1101e9ba2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.text','data' => ['title' => __('Department'),'type' => __('text'),'name' => 'name','id' => 'name','placeholder' => __('Enter department name')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.text'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Department')),'type' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('text')),'name' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('name'),'id' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('name'),'placeholder' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Enter department name'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2497cd08ed4b80389f11a0f1101e9ba2)): ?>
<?php $attributes = $__attributesOriginal2497cd08ed4b80389f11a0f1101e9ba2; ?>
<?php unset($__attributesOriginal2497cd08ed4b80389f11a0f1101e9ba2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2497cd08ed4b80389f11a0f1101e9ba2)): ?>
<?php $component = $__componentOriginal2497cd08ed4b80389f11a0f1101e9ba2; ?>
<?php unset($__componentOriginal2497cd08ed4b80389f11a0f1101e9ba2); ?>
<?php endif; ?>
                    <?php if (isset($component)) { $__componentOriginal1f61620c990fe8cc258019f51dea44d4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1f61620c990fe8cc258019f51dea44d4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.form.active-inactive','data' => ['title' => __('Select Status')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.active-inactive'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Select Status'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1f61620c990fe8cc258019f51dea44d4)): ?>
<?php $attributes = $__attributesOriginal1f61620c990fe8cc258019f51dea44d4; ?>
<?php unset($__attributesOriginal1f61620c990fe8cc258019f51dea44d4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1f61620c990fe8cc258019f51dea44d4)): ?>
<?php $component = $__componentOriginal1f61620c990fe8cc258019f51dea44d4; ?>
<?php unset($__componentOriginal1f61620c990fe8cc258019f51dea44d4); ?>
<?php endif; ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary mt-4" data-bs-dismiss="modal"><?php echo e(__('Close')); ?></button>
                    <?php if (isset($component)) { $__componentOriginald51d03ac38950c6ca9fceee323ea1e0d = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald51d03ac38950c6ca9fceee323ea1e0d = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.btn.submit','data' => ['title' => __('Save'),'class' => 'btn btn-primary mt-4 pr-4 pl-4 add_department']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('btn.submit'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Save')),'class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('btn btn-primary mt-4 pr-4 pl-4 add_department')]); ?>
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
            </form>
        </div>
    </div>
</div>
<?php /**PATH /home/clouddeployx.com/public_html/core/Modules/SupportTicket/Resources/views/backend/department/add-modal.blade.php ENDPATH**/ ?>