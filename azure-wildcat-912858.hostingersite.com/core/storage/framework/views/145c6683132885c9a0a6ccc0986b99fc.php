<script>
    (function($){
        "use strict";
        $(document).ready(function(){

            //accept and pay
            $(document).on('click','.accept_and_pay',function(e){
                e.preventDefault();
                Swal.fire({
                    title: '<?php echo e(__("Accept and Pay ?")); ?>',
                    text: '<?php echo e(__("If you accept freelancer will get the amount and you will not be able to change it.")); ?>',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: "<?php echo e(__('Yes, Pay it!')); ?>"
                }).then((result) => {
                    if (result.isConfirmed) {
                        $(this).next().find('.swal_form_submit_btn').trigger('click');
                    }
                });
            });

            //delete project
            $(document).on('click','.delete_offer',function(e){
                e.preventDefault();
                let offer_id = $(this).data('offer-id');
                $('.change-portfolio-popup, .popup-overlay').removeClass('popup-active');
                Swal.fire({
                    title: "<?php echo e(__('Are you sure?')); ?>",
                    text: "<?php echo e(__('To delete this offer !')); ?>",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: "<?php echo e(__('Yes, delete it!')); ?>"
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url:"<?php echo e(route('freelancer.offer.delete')); ?>",
                            method:'post',
                            data:{offer_id:offer_id},
                            success:function(res){
                                if(res.status == 'success'){
                                    $('.search_result').load(location.href + ' .search_result');
                                    toastr_delete_js(res.msg)
                                }
                            }
                        })
                    }
                })
            })

            //paginate
            $(document).on('click', '.pagination a', function(e){
                e.preventDefault();
                let page = $(this).attr('href').split('page=')[1];
                $.ajax({
                    url:"<?php echo e(route('freelancer.offer.paginate').'?page='); ?>" + page,
                    success:function(res){
                        $('.search_result').html(res);
                    }
                });
            });


        });
    }(jQuery));

    // todo toastr warning
    function toastr_warning_js(msg){
        Command: toastr["warning"](msg, "Warning !")
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
    }

    //toastr success
    function toastr_success_js(msg){
        Command: toastr["success"](msg, "Success !")
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
    }

    //toastr delete
    function toastr_delete_js(msg){
        Command: toastr["error"](msg, "Delete !")
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }
    }

</script>
<?php /**PATH /home/clouddeployx.com/public_html/core/Modules/Chat/Resources/views/freelancer/offer/offer-js.blade.php ENDPATH**/ ?>