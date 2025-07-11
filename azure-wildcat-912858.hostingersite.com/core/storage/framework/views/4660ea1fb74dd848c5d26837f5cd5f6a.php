<script>
    (function ($) {
        "use strict";
        $(document).ready(function () {
            $('.country_select2').select2();

            //star rating filter
            $(document).on('click', '.active-list .list', function() {
                $(this).siblings().removeClass('active');
                $(this).addClass('active');
            });

            $(document).on('click','#job_search_by_text',function(){
                if ($('#job_search_string').val() == '') {
                    return false;
                }else{
                    let country = $('#country').val();
                    let type = $('#type').val();
                    let skill = $('#skill_id').val();
                    let level = $('#level').val();
                    let min_price = $('#min_price').val();
                    let max_price = $('#max_price').val();
                    let duration = $('#duration').val();
                    let job_search_string = $('#job_search_string').val();
                    $.ajax({
                        url:"<?php echo e(route('skill.jobs.filter')); ?>",
                        method:'GET',
                        data:{country:country,type:type,level:level,min_price:min_price,max_price:max_price,duration:duration,skill:skill,job_search_string:job_search_string},
                        success:function(res){
                            if(res.status=='nothing'){
                                $('.search_job_result').html(
                                    `<div class="congratulation-area section-bg-2 pat-100 pab-100">
                                    <div class="container">
                                        <div class="congratulation-wrapper">
                                            <div class="congratulation-contents center-text">
                                                <div class="congratulation-contents-icon bg-danger wow  zoomIn animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">
                                                    <i class="fas fa-times"></i>
                                                </div>
                                                <h4 class="congratulation-contents-title"> <?php echo e(__('OPPS!')); ?> </h4>
                                                <p class="congratulation-contents-para"><?php echo e(__('Nothing')); ?> <strong><?php echo e(__('Found')); ?></strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>`);
                            }else{
                                $('.search_job_result').html(res);
                            }
                        }
                    });
                }
            })

            //jobs filter
            $(document).on('change', '#country , #type , #level , #duration', function() {
                let country = $('#country').val();
                let type = $('#type').val();
                let skill = $('#skill_id').val();
                let level = $('#level').val();
                let min_price = $('#min_price').val();
                let max_price = $('#max_price').val();
                let duration = $('#duration').val();
                let job_search_string = $('#job_search_string').val();

                $.ajax({
                    url:"<?php echo e(route('skill.jobs.filter')); ?>",
                    method:'GET',
                    data:{country:country,type:type,level:level,min_price:min_price,max_price:max_price,duration:duration,skill:skill,job_search_string:job_search_string},
                    success:function(res){
                        if(res.status=='nothing'){
                            $('.search_job_result').html(
                                `<div class="congratulation-area section-bg-2 pat-100 pab-100">
                                    <div class="container">
                                        <div class="congratulation-wrapper">
                                            <div class="congratulation-contents center-text">
                                                <div class="congratulation-contents-icon bg-danger wow  zoomIn animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">
                                                    <i class="fas fa-times"></i>
                                                </div>
                                                <h4 class="congratulation-contents-title"> <?php echo e(__('OPPS!')); ?> </h4>
                                                <p class="congratulation-contents-para"><?php echo e(__('Nothing')); ?> <strong><?php echo e(__('Found')); ?></strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>`);
                        }else{
                            $('.search_job_result').html(res);
                        }
                    }
                });
            });
            $(document).on('click', '#set_price_range', function() {
                let country = $('#country').val();
                let type = $('#type').val();
                let skill = $('#skill_id').val();
                let level = $('#level').val();
                let min_price = $('#min_price').val();
                let max_price = $('#max_price').val();
                let duration = $('#duration').val();
                let job_search_string = $('#job_search_string').val();
                $.ajax({
                    url:"<?php echo e(route('skill.jobs.filter')); ?>",
                    method:'GET',
                    data:{country:country,type:type,level:level,min_price:min_price,max_price:max_price,duration:duration,skill:skill,job_search_string:job_search_string},
                    success:function(res){
                        if(res.status=='nothing'){
                            $('.search_job_result').html(
                                `<div class="congratulation-area section-bg-2 pat-100 pab-100">
                                    <div class="container">
                                        <div class="congratulation-wrapper">
                                            <div class="congratulation-contents center-text">
                                                <div class="congratulation-contents-icon bg-danger wow  zoomIn animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: zoomIn;">
                                                    <i class="fas fa-times"></i>
                                                </div>
                                                <h4 class="congratulation-contents-title"> <?php echo e(__('OPPS!')); ?> </h4>
                                                <p class="congratulation-contents-para"><?php echo e(__('Nothing')); ?> <strong><?php echo e(__('Found')); ?></strong> </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>`);
                        }else{
                            $('.search_job_result').html(res);
                        }
                    }
                });
            });
            // pagination
            $(document).on('click', '.pagination a', function(e){
                e.preventDefault();
                let page = $(this).attr('href').split('page=')[1];
                let country = $('#country').val();
                let skill = $('#skill_id').val();
                let type = $('#type').val();
                let level = $('#level').val();
                let min_price = $('#min_price').val();
                let max_price = $('#max_price').val();
                let duration = $('#duration').val();
                let job_search_string = $('#job_search_string').val();

                jobs(page,country,skill,type,level,min_price,max_price,duration,job_search_string);
            });
            function jobs(page,country,category,type,level,min_price,max_price,duration,job_search_string){
                $.ajax({
                    url:"<?php echo e(route('skill.jobs.pagination').'?page='); ?>" + page,
                    method:'GET',
                    data:{country:country,skill:skill,type:type,level:level,min_price:min_price,max_price:max_price,duration:duration,job_search_string:job_search_string},
                    success:function(res){
                        if(res.status=='nothing'){
                            $('.search_job_result').html('<h3 class="text-center text-danger">'+"<?php echo e(__('Nothing Found')); ?>"+'</h3>');
                        }else{
                            $('.search_job_result').html(res);
                        }
                    }

                });
            }

            // filter reset
            $(document).on('click', '#category_job_filter_reset', function(){
                $('#country').val('').trigger('change');
                $('#type').val('');
                $('#level').val('');
                $('#min_price').val('');
                $('#max_price').val('');
                $('#duration').val('');
                $('#job_search_string').val('');
                let skill = $('#skill_id').val();
                $.ajax({
                    url:"<?php echo e(route('skill.jobs.filter.reset')); ?>",
                    method:'GET',
                    data:{skill:skill},
                    success:function(res){
                        if(res.status=='nothing'){
                            $('.search_job_result').html('<h3 class="text-center text-danger">'+"<?php echo e(__('Nothing Found')); ?>"+'</h3>');
                        }else{
                            $('.search_job_result').html(res);
                        }
                    }

                });
            });
        });
    }(jQuery));
</script>
<?php /**PATH /home/clouddeployx.com/public_html/core/resources/views/frontend/pages/skill-jobs/jobs-filter-js.blade.php ENDPATH**/ ?>