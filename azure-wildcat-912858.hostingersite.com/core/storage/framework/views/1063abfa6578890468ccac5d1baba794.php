<?php $__env->startSection('content'); ?>
    <div class="login-area">
        <div class="container">
            <div class="login-box ptb--100">
                <form method="POST" action="<?php echo e(route('admin.login')); ?>">
                    <?php echo csrf_field(); ?>
                    <div class="login-form-head">
                        <div class="logo-wrapper" style="margin-bottom: 40px;">
                            <?php echo render_image_markup_by_attachment_id(get_static_option('site_logo')); ?>

                        </div>
                        <h4><?php echo e(__('Admin Login')); ?></h4>
                        <p><?php echo e(__('Hello there, Sign in and start managing your website')); ?></p>
                    </div>
                    <div class="login-form-inner">
                        <div class="error-message"></div>
                    </div>
                    <div class="login-form-body">
                        <div class="form-gp focused">
                            <label for="username"><?php echo e(__('Username or Email')); ?></label>
                            <input type="text" id="username" name="username">
                            <i class="fa-solid fa-envelope"></i>
                        </div>

                        <div class="form-gp focused">
                            <label for="password"><?php echo e(__('Password')); ?></label>
                            <input type="password" id="password" name="password" >
                            <i class="fa-solid fa-lock"></i>
                        </div>
                        <div class="row mb-4 rmber-area">
                            <div class="col-6">
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" name="remember" class="custom-control-input" id="remember">
                                    <label class="custom-control-label" for="remember"><?php echo e(__('Remember Me')); ?></label>
                                </div>
                            </div>
                            <div class="col-6 text-end">
                                <a href="<?php echo e(route('admin.forgot.password')); ?>" class="forgot-password"><?php echo e(__('Forgot Password?')); ?></a>
                            </div>
                        </div>
                        <div class="submit-btn-area">
                            <button id="form_submit" type="submit"><?php echo e(__('Login')); ?> <i class="fa-solid fa-arrow-right"></i></button>
                        </div>

                        
                        <?php if(url()->current() == 'https://xilancer.xgenious.com/admin'): ?>
                            <div class="adminlogin-info">
                                <table class="table">
                                    <tbody>
                                    <tr>
                                        <th><?php echo e(__('Username')); ?></th>
                                        <th><?php echo e(__('Password')); ?></th>
                                        <th><?php echo e(__('Action')); ?></th>
                                    </tr>
                                    <tr>
                                        <td id="td_username">super_admin</td>
                                        <td id="td_password">12345678</td>
                                        <td><button type="button" class="autoLogin" id="autoLogin"><?php echo e(__('Login')); ?></button></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        <?php endif; ?>
                        

                    </div>
                </form>
            </div>
        </div>
    </div>

<?php $__env->stopSection(); ?>


<?php $__env->startSection('scripts'); ?>
    <script>
        (function($){
        "use strict";

            $(document).ready(function ($){
                 $(document).on('click','#autoLogin',function(){
                   let el = $(this);
                   let username = $('#td_username').text();
                   let passwrod = $('#td_password').text();
                   $('#username').val(username);
                   $('#password').val(passwrod);
                   $('#form_submit').trigger('click');
                });

                $(document).on('click','#form_submit',function (e){
                    e.preventDefault();
                    var el = $(this);
                    var erContainer = $(".error-message");
                    erContainer.html('');
                    el.text('<?php echo e(__('Please Wait..')); ?>');
                    $.ajax({
                        url: "<?php echo e(route('admin.login')); ?>",
                        type: "POST",
                        data: {
                            _token : "<?php echo e(csrf_token()); ?>",
                            username : $('#username').val(),
                            password : $('#password').val(),
                            remember : $('#remember').val(),
                        },
                        error:function(data){
                            var errors = data.responseJSON;
                            erContainer.html('<div class="alert alert-danger"></div>');
                            $.each(errors.errors, function(index,value){
                                erContainer.find('.alert.alert-danger').append('<p>'+value+'</p>');
                            });
                            el.text('<?php echo e(__('Login')); ?>');
                        },
                        success:function (data){
                            $('.alert.alert-danger').remove();
                            if (data.status == 'ok'){
                                el.text('<?php echo e(__('Redirecting')); ?>..');
                                erContainer.html('<div class="alert alert-'+data.type+'">'+data.msg+'</div>');
                                window.location = "<?php echo e(route('admin.dashboard')); ?>";
                            }else{
                                erContainer.html('<div class="alert alert-'+data.type+'">'+data.msg+'</div>');
                                el.text('<?php echo e(__('Login')); ?>');
                            }
                        }
                    });
                });

            });
        })(jQuery);
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.login-screens', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u412525603/domains/azure-wildcat-912858.hostingersite.com/core/resources/views/backend/pages/auth/login.blade.php ENDPATH**/ ?>