<?php $__env->startSection('title', __('All Roles')); ?>
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
    <style>
        #edit_user_details {
            height: calc(100vh - 210px);
            overflow-y: auto;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="dashboard__body">
        <div class="row">
            <div class="col-lg-12">
                <div class="customMarkup__single">
                    <div class="customMarkup__single__item">
                        <div class="customMarkup__single__item__flex">
                            <h4 class="customMarkup__single__title"><?php echo e(__('All Roles')); ?></h4>
                            <a
                                class="btn btn-primary btn-md d-flex align-items-center"
                                href="javascript:void(0)"
                                data-bs-target="#addRoleModal"
                                data-bs-toggle="modal"
                            ><i class="fas fa-plus-circle"></i> <?php echo e(__('Add Role')); ?></a>
                        </div>
                        <div class="customMarkup__single__inner mt-4">
                            <!-- Table Start -->
                            <div class="custom_table style-04 search_result">
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
                                <table class="table_activation">
                                    <thead>
                                    <tr>
                                        <th><?php echo e(__('ID')); ?></th>
                                        <th><?php echo e(__('Name')); ?></th>
                                        <th><?php echo e(__('Action')); ?></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php if($roles->count() >=1): ?>
                                        <?php $__currentLoopData = $roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $role): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <tr>
                                                <td><?php echo e($role->id); ?></td>
                                                <td><?php echo e($role->name); ?></td>
                                                <td>
                                                    <?php if($role->name == 'Super Admin'): ?>
                                                        <span><?php echo e(__('By default super admin has all permissions.')); ?></span>
                                                    <?php else: ?>
                                                        <?php if (isset($component)) { $__componentOriginal8f171b7aec972ecdf8c21b4ace25e397 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8f171b7aec972ecdf8c21b4ace25e397 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.status.table.select-action','data' => ['title' => __('Select Action')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('status.table.select-action'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Select Action'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8f171b7aec972ecdf8c21b4ace25e397)): ?>
<?php $attributes = $__attributesOriginal8f171b7aec972ecdf8c21b4ace25e397; ?>
<?php unset($__attributesOriginal8f171b7aec972ecdf8c21b4ace25e397); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8f171b7aec972ecdf8c21b4ace25e397)): ?>
<?php $component = $__componentOriginal8f171b7aec972ecdf8c21b4ace25e397; ?>
<?php unset($__componentOriginal8f171b7aec972ecdf8c21b4ace25e397); ?>
<?php endif; ?>
                                                        <ul class="dropdown-menu status_dropdown__list">
                                                            <li class="status_dropdown__item">
                                                                <a href="javascript:void(0)"
                                                                   class="btn dropdown-item status_dropdown__list__link edit_role_modal"
                                                                   data-bs-target="#editRoleModal"
                                                                   data-bs-toggle="modal"
                                                                   data-role-id="<?php echo e($role->id); ?>"
                                                                   data-role-name="<?php echo e($role->name); ?>"
                                                                ><?php echo e(__('Edit Role')); ?></a>
                                                            </li>
                                                            <li class="status_dropdown__item">
                                                                <a class="btn dropdown-item status_dropdown__list__link" href="<?php echo e(route('admin.role.permission',$role->id)); ?>">
                                                                    <?php echo e(__('Assign Permission')); ?>

                                                                </a>
                                                            </li>
                                                            <li class="status_dropdown__item">
                                                                <?php if (isset($component)) { $__componentOriginal7973b0ce98592c79f9209abd6e46a09b = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7973b0ce98592c79f9209abd6e46a09b = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.popup.delete-popup','data' => ['title' => __('Delete Role'),'url' => route('admin.role.delete',$role->id)]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('popup.delete-popup'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Delete Role')),'url' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('admin.role.delete',$role->id))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7973b0ce98592c79f9209abd6e46a09b)): ?>
<?php $attributes = $__attributesOriginal7973b0ce98592c79f9209abd6e46a09b; ?>
<?php unset($__attributesOriginal7973b0ce98592c79f9209abd6e46a09b); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7973b0ce98592c79f9209abd6e46a09b)): ?>
<?php $component = $__componentOriginal7973b0ce98592c79f9209abd6e46a09b; ?>
<?php unset($__componentOriginal7973b0ce98592c79f9209abd6e46a09b); ?>
<?php endif; ?>
                                                            </li>
                                                        </ul>
                                                    <?php endif; ?>

                                                </td>
                                            </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php else: ?>
                                        <?php if (isset($component)) { $__componentOriginal299c0410dd55ce378949b38ffa493a39 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal299c0410dd55ce378949b38ffa493a39 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.table.no-data-found','data' => ['colspan' => '7','class' => 'text-danger text-center py-5']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('table.no-data-found'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['colspan' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('7'),'class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('text-danger text-center py-5')]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal299c0410dd55ce378949b38ffa493a39)): ?>
<?php $attributes = $__attributesOriginal299c0410dd55ce378949b38ffa493a39; ?>
<?php unset($__attributesOriginal299c0410dd55ce378949b38ffa493a39); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal299c0410dd55ce378949b38ffa493a39)): ?>
<?php $component = $__componentOriginal299c0410dd55ce378949b38ffa493a39; ?>
<?php unset($__componentOriginal299c0410dd55ce378949b38ffa493a39); ?>
<?php endif; ?>
                                    <?php endif; ?>
                                    </tbody>
                                </table>
                            </div>
                            <!-- Table End -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php echo $__env->make('rolepermission::roles.add-role-modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->make('rolepermission::roles.edit-role-modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
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
    <?php echo $__env->make('rolepermission::roles.role-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/clouddeployx.com/public_html/core/Modules/RolePermission/Resources/views/roles/all-roles.blade.php ENDPATH**/ ?>