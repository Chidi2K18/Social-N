<script>
    (function($){
        "use strict";
        $(document).ready(function(){

            // Enable 2fa
            $(document).on('click','.check_enable_2fa',function(e){
               if($('#secret').val() == ''){
                   toastr_warning_js("<?php echo e(__('Please enter your code')); ?>");
                   return false;
               }
            });

            // disable 2fa
            $(document).on('click','.check_disable_2fa',function(e){
                if($('#current_password').val() == ''){
                    toastr_warning_js("<?php echo e(__('Please enter your current password')); ?>");
                    return false;
                }
            });

        });
    }(jQuery));

</script>
<?php /**PATH /home/clouddeployx.com/public_html/core/resources/views/frontend/user/freelancer/_2fa/-2fa-js.blade.php ENDPATH**/ ?>