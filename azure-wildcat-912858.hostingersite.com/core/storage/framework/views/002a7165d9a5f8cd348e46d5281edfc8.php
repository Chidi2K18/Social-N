<script>
    (function($){
        "use strict";
        $(document).ready(function(){
            // pagination
            $(document).on('click', '.pagination a', function(e){
                e.preventDefault();
                let page = $(this).attr('href').split('page=')[1];
                countries(page);
            });
            function countries(page){
                $.ajax({
                    url:"<?php echo e(route('admin.user.paginate.delete.data').'?page='); ?>" + page,
                    success:function(res){
                        $('.search_result').html(res);
                    }
                });
            }
            // search user
            $(document).on('keyup','#string_search',function(){
                let string_search = $(this).val();
                $.ajax({
                    url:"<?php echo e(route('admin.user.delete.search')); ?>",
                    method:'GET',
                    data:{string_search:string_search},
                    success:function(res){
                        if(res.status=='nothing'){
                            $('.search_result').html('<h3 class="text-center text-danger">'+"<?php echo e(__('Nothing Found')); ?>"+'</h3>');
                        }else{
                            $('.search_result').html(res);
                        }
                    }
                });
            })

        });
    }(jQuery));

</script>
<?php /**PATH /home/clouddeployx.com/public_html/core/resources/views/backend/pages/user/trash-user/delete-user-js.blade.php ENDPATH**/ ?>