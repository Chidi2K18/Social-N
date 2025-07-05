<?php if($orders->total() < 1): ?>
    <div class="myOrder-single bg-white padding-20 radius-10">
        <div class="myOrder-single-item">
            <h4 class="text-danger"><?php echo e(__('No Order')); ?></h4>
        </div>
    </div>
<?php else: ?>
    <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php $rating =  \App\Models\Rating::select('id','order_id','rating')->where('order_id',$order->id)->where('sender_type',1)->first(); ?>

        <div class="myOrder-single bg-white padding-20 radius-10">
            <div class="myOrder-single-item">
                <div class="myOrder-single-flex">
                    <div class="myOrder-single-content">
                        <span class="myOrder-single-content-id">#000<?php echo e($order->id); ?></span>
                        <h4 class="myOrder-single-content-title mt-2">
                            <?php if($order->is_project_job == 'project'): ?>
                                <a href="<?php echo e(route('freelancer.order.details',$order->id)); ?>"> <?php echo e($order?->project->title ?? ''); ?> </a>
                            <?php elseif($order->is_project_job == 'job'): ?>
                                <a href="<?php echo e(route('freelancer.order.details',$order->id)); ?>"><?php echo e($order?->job->title ?? ''); ?></a>
                            <?php else: ?>
                                <?php echo e(__('Custom order')); ?>

                            <?php endif; ?>
                        </h4>
                        <div class="myOrder-single-content-btn flex-btn mt-3">
                            <?php if (isset($component)) { $__componentOriginald2cd1824644302ab8fd16ca2027f25d9 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginald2cd1824644302ab8fd16ca2027f25d9 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.order.order-status','data' => ['status' => $order->status]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('order.order-status'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['status' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($order->status)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginald2cd1824644302ab8fd16ca2027f25d9)): ?>
<?php $attributes = $__attributesOriginald2cd1824644302ab8fd16ca2027f25d9; ?>
<?php unset($__attributesOriginald2cd1824644302ab8fd16ca2027f25d9); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald2cd1824644302ab8fd16ca2027f25d9)): ?>
<?php $component = $__componentOriginald2cd1824644302ab8fd16ca2027f25d9; ?>
<?php unset($__componentOriginald2cd1824644302ab8fd16ca2027f25d9); ?>
<?php endif; ?>
                            <?php if (isset($component)) { $__componentOriginal5c7d7c9d888fc7c2cdebae9414fcf5ae = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5c7d7c9d888fc7c2cdebae9414fcf5ae = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.order.is-custom','data' => ['isCustom' => $order->is_project_job]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('order.is-custom'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['isCustom' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($order->is_project_job)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5c7d7c9d888fc7c2cdebae9414fcf5ae)): ?>
<?php $attributes = $__attributesOriginal5c7d7c9d888fc7c2cdebae9414fcf5ae; ?>
<?php unset($__attributesOriginal5c7d7c9d888fc7c2cdebae9414fcf5ae); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5c7d7c9d888fc7c2cdebae9414fcf5ae)): ?>
<?php $component = $__componentOriginal5c7d7c9d888fc7c2cdebae9414fcf5ae; ?>
<?php unset($__componentOriginal5c7d7c9d888fc7c2cdebae9414fcf5ae); ?>
<?php endif; ?>
                            <?php if (isset($component)) { $__componentOriginal398d03e4589fec85d4b03fdb1bf70726 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal398d03e4589fec85d4b03fdb1bf70726 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.order.payment-verify','data' => ['paymentVerifyCheck' => $order]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('order.payment-verify'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['paymentVerifyCheck' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($order)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal398d03e4589fec85d4b03fdb1bf70726)): ?>
<?php $attributes = $__attributesOriginal398d03e4589fec85d4b03fdb1bf70726; ?>
<?php unset($__attributesOriginal398d03e4589fec85d4b03fdb1bf70726); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal398d03e4589fec85d4b03fdb1bf70726)): ?>
<?php $component = $__componentOriginal398d03e4589fec85d4b03fdb1bf70726; ?>
<?php unset($__componentOriginal398d03e4589fec85d4b03fdb1bf70726); ?>
<?php endif; ?>
                        </div>
                    </div>
                    <span class="myOrder-single-content-time"><?php echo e($order->created_at->diffForHumans()); ?> </span>
                </div>
            </div>
            <div class="myOrder-single-item">
                <div class="myOrder-single-block">
                    <div class="myOrder-single-block-item">
                        <div class="myOrder-single-block-item-content">
                            <?php if($order->is_fixed_hourly == 'hourly'): ?>
                                <span class="myOrder-single-block-subtitle"><?php echo e(__('Hourly rate')); ?></span>
                                <h6 class="myOrder-single-block-title mt-2"><?php echo e(float_amount_with_currency_symbol($order?->job->hourly_rate)); ?></h6>
                            <?php else: ?>
                                <span class="myOrder-single-block-subtitle"><?php echo e(__('Order budget')); ?></span>
                                <h6 class="myOrder-single-block-title mt-2"><?php echo e(float_amount_with_currency_symbol($order->price)); ?>

                                    <?php if (isset($component)) { $__componentOriginalb63c7ad67c6931e2e669d0f22cbb9d30 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalb63c7ad67c6931e2e669d0f22cbb9d30 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.order.is-funded','data' => ['isFunded' => $order->payment_status,'paymentGateway' => $order->payment_gateway]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('order.is-funded'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['isFunded' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($order->payment_status),'paymentGateway' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($order->payment_gateway)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalb63c7ad67c6931e2e669d0f22cbb9d30)): ?>
<?php $attributes = $__attributesOriginalb63c7ad67c6931e2e669d0f22cbb9d30; ?>
<?php unset($__attributesOriginalb63c7ad67c6931e2e669d0f22cbb9d30); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalb63c7ad67c6931e2e669d0f22cbb9d30)): ?>
<?php $component = $__componentOriginalb63c7ad67c6931e2e669d0f22cbb9d30; ?>
<?php unset($__componentOriginalb63c7ad67c6931e2e669d0f22cbb9d30); ?>
<?php endif; ?>
                                </h6>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php if($order->delivery_time): ?>
                    <div class="myOrder-single-block-item">
                        <div class="myOrder-single-block-item-content">
                            <span class="myOrder-single-block-subtitle"><?php echo e(__('Delivery Time')); ?></span> <br>
                            <?php if (isset($component)) { $__componentOriginal5f3cdccd6938f5c78a7c65a1dbfd3779 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5f3cdccd6938f5c78a7c65a1dbfd3779 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.order.deadline','data' => ['deadline' => $order->delivery_time ?? '' ]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('order.deadline'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['deadline' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($order->delivery_time ?? '' )]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5f3cdccd6938f5c78a7c65a1dbfd3779)): ?>
<?php $attributes = $__attributesOriginal5f3cdccd6938f5c78a7c65a1dbfd3779; ?>
<?php unset($__attributesOriginal5f3cdccd6938f5c78a7c65a1dbfd3779); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5f3cdccd6938f5c78a7c65a1dbfd3779)): ?>
<?php $component = $__componentOriginal5f3cdccd6938f5c78a7c65a1dbfd3779; ?>
<?php unset($__componentOriginal5f3cdccd6938f5c78a7c65a1dbfd3779); ?>
<?php endif; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                    <div class="myOrder-single-block-item">
                        <div class="myOrder-single-block-item-author">
                            <?php if (isset($component)) { $__componentOriginalcef7038228be606933751cd86f8a6046 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalcef7038228be606933751cd86f8a6046 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.order.profile-image','data' => ['image' => $order?->user->image,'loadFrom' => $order?->user->load_from]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('order.profile-image'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['image' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($order?->user->image),'loadFrom' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($order?->user->load_from)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalcef7038228be606933751cd86f8a6046)): ?>
<?php $attributes = $__attributesOriginalcef7038228be606933751cd86f8a6046; ?>
<?php unset($__attributesOriginalcef7038228be606933751cd86f8a6046); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalcef7038228be606933751cd86f8a6046)): ?>
<?php $component = $__componentOriginalcef7038228be606933751cd86f8a6046; ?>
<?php unset($__componentOriginalcef7038228be606933751cd86f8a6046); ?>
<?php endif; ?>
                        </div>
                        <?php if (isset($component)) { $__componentOriginalf7c7abab8c173225c55632d5d529fb44 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginalf7c7abab8c173225c55632d5d529fb44 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.order.name-rating','data' => ['firstName' => $order?->user->first_name,'lastName' => $order?->user->last_name,'userId' => $order?->user->id,'orderRating' => $rating->rating ?? '' ,'userType' => $order?->user?->user_type,'isIdentityVerified' => $order?->user?->user_verified_status]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('order.name-rating'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['firstName' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($order?->user->first_name),'lastName' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($order?->user->last_name),'userId' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($order?->user->id),'orderRating' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($rating->rating ?? '' ),'userType' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($order?->user?->user_type),'isIdentityVerified' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($order?->user?->user_verified_status)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginalf7c7abab8c173225c55632d5d529fb44)): ?>
<?php $attributes = $__attributesOriginalf7c7abab8c173225c55632d5d529fb44; ?>
<?php unset($__attributesOriginalf7c7abab8c173225c55632d5d529fb44); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf7c7abab8c173225c55632d5d529fb44)): ?>
<?php $component = $__componentOriginalf7c7abab8c173225c55632d5d529fb44; ?>
<?php unset($__componentOriginalf7c7abab8c173225c55632d5d529fb44); ?>
<?php endif; ?>
                    </div>
                </div>
            </div>
            <div class="myOrder-single-item">
                <div class="myOrder-single-flex flex-between">
                    <div class="btn-wrapper">
                        <?php if($order->status == 0): ?>
                            <?php if (isset($component)) { $__componentOriginaled49183813b6264fe02b2283042511dd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaled49183813b6264fe02b2283042511dd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.status.table.status-change','data' => ['title' => __('Decline Order'),'class' => 'btn-profile btn-outline-cancel decline_and_change_order_status','value' => __('decline'),'url' => route('freelancer.order.decline',$order->id)]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('status.table.status-change'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Decline Order')),'class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('btn-profile btn-outline-cancel decline_and_change_order_status'),'value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('decline')),'url' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('freelancer.order.decline',$order->id))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaled49183813b6264fe02b2283042511dd)): ?>
<?php $attributes = $__attributesOriginaled49183813b6264fe02b2283042511dd; ?>
<?php unset($__attributesOriginaled49183813b6264fe02b2283042511dd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaled49183813b6264fe02b2283042511dd)): ?>
<?php $component = $__componentOriginaled49183813b6264fe02b2283042511dd; ?>
<?php unset($__componentOriginaled49183813b6264fe02b2283042511dd); ?>
<?php endif; ?>
                        <?php endif; ?>
                    </div>

                    <div class="btn-wrapper flex-btn">
                        <?php if($order->status == 0): ?>
                            <?php if (isset($component)) { $__componentOriginaled49183813b6264fe02b2283042511dd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaled49183813b6264fe02b2283042511dd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.status.table.status-change','data' => ['title' => __('Accept Order'),'class' => 'btn-profile btn-outline-gray accept_and_change_order_status','url' => route('freelancer.order.accept',$order->id)]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('status.table.status-change'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Accept Order')),'class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('btn-profile btn-outline-gray accept_and_change_order_status'),'url' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('freelancer.order.accept',$order->id))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaled49183813b6264fe02b2283042511dd)): ?>
<?php $attributes = $__attributesOriginaled49183813b6264fe02b2283042511dd; ?>
<?php unset($__attributesOriginaled49183813b6264fe02b2283042511dd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaled49183813b6264fe02b2283042511dd)): ?>
<?php $component = $__componentOriginaled49183813b6264fe02b2283042511dd; ?>
<?php unset($__componentOriginaled49183813b6264fe02b2283042511dd); ?>
<?php endif; ?>
                        <?php else: ?>
                            <?php if($order->status != 5 && $order->status != 4 && $order->status != 3 && $order->status != 7): ?>
                                <?php if (isset($component)) { $__componentOriginaled49183813b6264fe02b2283042511dd = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginaled49183813b6264fe02b2283042511dd = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.status.table.status-change','data' => ['title' => __('Cancel Order'),'class' => 'btn-profile btn-outline-cancel cancel_and_change_order_status','value' => __('cancel'),'url' => route('freelancer.order.decline',$order->id)]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('status.table.status-change'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Cancel Order')),'class' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute('btn-profile btn-outline-cancel cancel_and_change_order_status'),'value' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('cancel')),'url' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(route('freelancer.order.decline',$order->id))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginaled49183813b6264fe02b2283042511dd)): ?>
<?php $attributes = $__attributesOriginaled49183813b6264fe02b2283042511dd; ?>
<?php unset($__attributesOriginaled49183813b6264fe02b2283042511dd); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaled49183813b6264fe02b2283042511dd)): ?>
<?php $component = $__componentOriginaled49183813b6264fe02b2283042511dd; ?>
<?php unset($__componentOriginaled49183813b6264fe02b2283042511dd); ?>
<?php endif; ?>
                            <?php endif; ?>
                        <?php endif; ?>
                        <?php if($order->status == 3): ?>
                            <?php if($order?->freelancer?->is_suspend !=1): ?>
                                <a href="<?php echo e(route('freelancer.order.invoice.generate',$order->id)); ?>" class="btn-profile btn-outline-gray"><?php echo e(__('Invoice')); ?></a>
                                <a href="<?php echo e(route('freelancer.order.rating',$order->id)); ?>" class="btn-profile btn-outline-gray"><?php echo e(__('Submit Review')); ?></a>
                            <?php endif; ?>
                        <?php endif; ?>
                            <a href="<?php echo e(route('freelancer.order.details',$order->id)); ?>" class="btn-profile btn-bg-1"><?php echo e(__('View Order')); ?></a>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php if (isset($component)) { $__componentOriginal0143df8887fb9686c5dbf1f1b0d7027f = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal0143df8887fb9686c5dbf1f1b0d7027f = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.pagination.laravel-paginate','data' => ['allData' => $orders]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('pagination.laravel-paginate'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['allData' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($orders)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal0143df8887fb9686c5dbf1f1b0d7027f)): ?>
<?php $attributes = $__attributesOriginal0143df8887fb9686c5dbf1f1b0d7027f; ?>
<?php unset($__attributesOriginal0143df8887fb9686c5dbf1f1b0d7027f); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0143df8887fb9686c5dbf1f1b0d7027f)): ?>
<?php $component = $__componentOriginal0143df8887fb9686c5dbf1f1b0d7027f; ?>
<?php unset($__componentOriginal0143df8887fb9686c5dbf1f1b0d7027f); ?>
<?php endif; ?>
<?php endif; ?>
<?php /**PATH /home/clouddeployx.com/public_html/core/resources/views/frontend/user/freelancer/order/search-result.blade.php ENDPATH**/ ?>