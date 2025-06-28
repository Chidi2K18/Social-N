<?php $__env->startSection('site_title'); ?>
    <?php echo e($blog_details->title ?? __('Blog Details')); ?>

<?php $__env->stopSection(); ?>

<?php if(isset($blog_details?->meta_data->meta_title) && !empty($blog_details?->meta_data->meta_title)): ?>
    <?php $__env->startSection('meta_title', $blog_details->meta_data->meta_title); ?>
<?php endif; ?>

<?php if(isset($blog_details?->meta_data->meta_description) && !empty($blog_details?->meta_data->meta_description)): ?>
    <?php $__env->startSection('meta_description', $blog_details->meta_data->meta_description); ?>
<?php endif; ?>

<?php $__env->startSection('style'); ?>
    <style>
        .jobFilter-about-clients.active {
            border-color: var(--main-color-one);
            color: var(--main-color-one);
        }
        .jobFilter-about-clients.active .jobFilter-about-clients-para {
            color: var(--main-color-one);
        }
        .single-shop-left-title .blog-category-title {
            font-size: 20px;
        }
    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <main>
        <?php if(moduleExists('CoinPaymentGateway')): ?><?php else: ?><?php if (isset($component)) { $__componentOriginal7ecac999957263c09523da7583aa96ad = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal7ecac999957263c09523da7583aa96ad = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.frontend.category.category','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('frontend.category.category'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal7ecac999957263c09523da7583aa96ad)): ?>
<?php $attributes = $__attributesOriginal7ecac999957263c09523da7583aa96ad; ?>
<?php unset($__attributesOriginal7ecac999957263c09523da7583aa96ad); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7ecac999957263c09523da7583aa96ad)): ?>
<?php $component = $__componentOriginal7ecac999957263c09523da7583aa96ad; ?>
<?php unset($__componentOriginal7ecac999957263c09523da7583aa96ad); ?>
<?php endif; ?><?php endif; ?>
        <?php if (isset($component)) { $__componentOriginal1886b76dac2bd4a55dfc12d1a06ee6e4 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1886b76dac2bd4a55dfc12d1a06ee6e4 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.breadcrumb.user-profile-breadcrumb','data' => ['title' => __('Blog Details'),'innerTitle' => __('Blog Details')]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('breadcrumb.user-profile-breadcrumb'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Blog Details')),'innerTitle' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(__('Blog Details'))]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1886b76dac2bd4a55dfc12d1a06ee6e4)): ?>
<?php $attributes = $__attributesOriginal1886b76dac2bd4a55dfc12d1a06ee6e4; ?>
<?php unset($__attributesOriginal1886b76dac2bd4a55dfc12d1a06ee6e4); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1886b76dac2bd4a55dfc12d1a06ee6e4)): ?>
<?php $component = $__componentOriginal1886b76dac2bd4a55dfc12d1a06ee6e4; ?>
<?php unset($__componentOriginal1886b76dac2bd4a55dfc12d1a06ee6e4); ?>
<?php endif; ?>
        <!-- Project preview area Starts -->
        <div class="preview-area section-bg-2 pat-100 pab-100">
            <div class="container">
                <div class="row g-4">
                    <div class="col-xl-8 col-lg-8 search_result">
                        <div class="project-preview">
                            <div class="project-preview-thumb">
                                <?php echo render_image_markup_by_attachment_id($blog_details->image); ?>

                            </div>
                            <div class="project-preview-contents mt-4">
                                <h1 class="project-preview-contents-title mt-3"> <?php echo e($blog_details->title); ?> </h1>
                                <p class="project-preview-contents-para"> <?php echo $blog_details->content; ?> </p>
                            </div>
                        </div>
                        <div class="project-preview">
                            <div class="myJob-wrapper-single-flex flex-between align-items-center">
                                <div class="myJob-wrapper-single-contents">
                                    <div class="row g-4">
                                        <h4><?php echo e(__('Related Blogs')); ?></h4>
                                        <?php $__currentLoopData = $related_blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <div class="col-xxl-6">
                                                <div class="project-category-item radius-10">
                                                    <div class="single-project project-catalogue">
                                                        <div class="single-project-thumb">
                                                            <a href="<?php echo e(route('blog.details',$blog->slug)); ?>">
                                                                <?php echo render_image_markup_by_attachment_id($blog->image); ?>

                                                            </a>
                                                        </div>
                                                        <div class="single-project-content">
                                                            <h4 class="single-project-content-title">
                                                                <a href="<?php echo e(route('blog.details',$blog->slug)); ?>"> <?php echo e($blog->title); ?> </a>
                                                            </h4>
                                                        </div>
                                                        <div class="project-category-item-bottom profile-border-top">
                                                            <div class="project-category-item-bottom-flex flex-between align-items-center">
                                                                <div class="project-category-right-flex flex-btn">
                                                                    <p><?php echo e($blog->created_at->toFormattedDateString()); ?></p>
                                                                </div>
                                                                <div class="project-category-item-btn flex-btn">
                                                                    <a href="<?php echo e(route('blog.details',$blog->slug)); ?>" class="btn-profile btn-outline-1"> <?php echo e(__('View Details')); ?> </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-xl-4 col-lg-4">
                        <div class="sticky-sidebar">
                           <?php echo $__env->make('blog::frontend.blogs.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Project preview area end -->
    </main>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <?php echo $__env->make('blog::frontend.blogs.blog-js', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('frontend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/clouddeployx.com/public_html/core/Modules/Blog/Resources/views/frontend/blogs/blog-details.blade.php ENDPATH**/ ?>