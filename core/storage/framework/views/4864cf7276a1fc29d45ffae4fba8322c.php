<?php $__env->startSection('title', __('Edit Menu')); ?>
<?php $__env->startSection('style'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('assets/backend/css/nestable.css')); ?>">
    <style>
        span.expand {
            position: relative;
        }

        h2.mb-0 {
            margin-top: -20px;
        }

        .accordion-wrapper .card {
            margin: 20px 0;
            border: none;
        }
        .accordion-wrapper .card .card-header button {
            padding: 10px 20px;
            font-size: 16px;
            font-weight: 500;
            color: #333;
            border: none;
            text-decoration: none;
        }
        .accordion-wrapper .card .card-header {
            border: none;
            background-color: #f3f8fb;
        }
        .dd-list .dd-list {
            padding-left: 30px;
        }
        ol li:before {
            counter-increment: none;
            content: none;
            font-weight: 500;
            margin-right: 10px;
        }
        .menu-structure-wrapper .title,
        .menu-left-side-content .title{
            font-size: 20px;
            line-height: 30px;
            font-weight: 600;
        }

        .page-list-ul {
            margin: 0;
            padding: 0;
            list-style: none;
        }

        .page-list-ul li input {
            margin-right: 5px;
        }

        .single-input {
            margin-bottom: 20px;
        }

    </style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
    <div class="dashboard__body">
        <div class="row">
            <div class="col-lg-12">
                <div class="customMarkup__single">
                    <div class="customMarkup__single__item">
                        <h4 class="customMarkup__single__title"><?php echo e(__('Edit Menu')); ?></h4>
                        <div class="customMarkup__single__inner mt-4">
                            <form action="<?php echo e(route('admin.menu.update',$menu->id)); ?>" id="menu_update_form" method="post"
                                  enctype="multipart/form-data">
                                <input type="hidden" name="menu_id" id="menu_id" value="<?php echo e($menu->id); ?>">
                                <?php echo csrf_field(); ?>
                                <?php
                                    $menu_content = '';
                                    if (!empty($menu->page_content)){
                                        $menu_content = $menu->page_content;
                                    }else{
                                        $menu_content = '[{"ptype":"custom","pname":"Home","purl":"@url","id":1}]';
                                    }
                                ?>
                                <textarea  id="menu_content" name="menu_content" class="form-control d-none" ><?php echo e($menu_content); ?></textarea>
                                <div class="row">
                                    <div class="col-lg-12 mb-4">
                                        <div class="single-input">
                                            <label for="title" class="label-title"><?php echo e(__('Title')); ?></label>
                                            <input type="text" class="form-control" id="title" name="title" value="<?php echo e($menu->title); ?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="menu-left-side-content">
                                            <h3 class="title"><?php echo e(__('Add menu items')); ?></h3>
                                            <div class="accordion accordion-wrapper" id="add_menu_item_accordion">
                                                <?php echo render_dynamic_pages_list($menu->lang); ?>


                                                
                                                <div class="card">

                                                    <div class="card-header" id="id_7188851-page-list-items">
                                                        <h2 class="mb-0"><button class="btn btn-link" type="button" data-bs-toggle="collapse" data-bs-target="#id_7188851-page-list-items-content" aria-expanded="true">Static Pages</button></h2>
                                                    </div>

                                                    <div id="id_7188851-page-list-items-content" class="collapse" aria-labelledby="id_7188851page-list-items" data-parent="#add_menu_item_accordion">
                                                        <div class="card-body">
                                                            <ul class="page-list-ul">
                                                                <li>
                                                                    <label class="menu-item-title">
                                                                        <input type="checkbox" class="menu-item-checkbox" data-title="Home" data-url="@url"> <?php echo e(__('Home')); ?>

                                                                    </label>
                                                                </li>
                                                                <li>
                                                                    <label class="menu-item-title">
                                                                        <input type="checkbox" class="menu-item-checkbox" data-title="Subscriptions" data-url="@url/subscriptions/all"> <?php echo e(__('Subscriptions')); ?>

                                                                    </label>
                                                                </li>
                                                                <li>
                                                                    <label class="menu-item-title">
                                                                        <input type="checkbox" class="menu-item-checkbox" data-title="Projects" data-url="@url/projects/all"> <?php echo e(__('Projects')); ?>

                                                                    </label>
                                                                </li>
                                                                <li>
                                                                    <label class="menu-item-title">
                                                                        <input type="checkbox" class="menu-item-checkbox" data-title="Jobs" data-url="@url/jobs/all"> <?php echo e(__('Jobs')); ?>

                                                                    </label>
                                                                </li>
                                                                <li>
                                                                    <label class="menu-item-title">
                                                                        <input type="checkbox" class="menu-item-checkbox" data-title="Talents" data-url="@url/talents/all"> <?php echo e(__('Talents')); ?>

                                                                    </label>
                                                                </li>
                                                                <li>
                                                                    <label class="menu-item-title">
                                                                        <input type="checkbox" class="menu-item-checkbox" data-title="Blogs" data-url="@url/blogs/all"> <?php echo e(__('Blog')); ?>

                                                                    </label>
                                                                </li>
                                                            </ul>

                                                            <div class="form-group"><button type="button" class="btn btn-primary btn-xs mt-4 pr-4 pl-4 add_static_page_to_menu"> <?php echo e(__('Add To Menu')); ?></button></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                

                                                <div class="card">
                                                    <div class="card-header" id="custom-links">
                                                        <h2 class="mb-0">
                                                            <button class="btn btn-link collapsed" type="button"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#custom-links-content"
                                                                    aria-expanded="false"
                                                                    aria-controls="custom-links-content">
                                                                <?php echo e(__('Custom Links')); ?>

                                                            </button>
                                                        </h2>
                                                    </div>
                                                    <div id="custom-links-content" class="collapse"
                                                         aria-labelledby="custom-links"
                                                         data-parent="#add_menu_item_accordion">
                                                        <div class="card-body">
                                                            <div class="single-input">
                                                                <label for="custom_url" class="label-title"><strong><?php echo e(__("URL")); ?></strong></label>
                                                                <input type="text" name="custom_url" id="custom_url"
                                                                       class="form-control"
                                                                       placeholder="<?php echo e(__('https://')); ?>">
                                                            </div>
                                                            <div class="single-input">
                                                                <label for="custom_label_text" class="label-title"><strong><?php echo e(__("Link Text")); ?></strong></label>
                                                                <input type="text" name="custom_label_text"
                                                                       id="custom_label_text" class="form-control"
                                                                       placeholder="<?php echo e(__('label text')); ?>">
                                                            </div>
                                                            <div class="single-input">
                                                                <button type="button" id="add_custom_links" class="btn btn-primary btn-xs mt-4 pr-4 pl-4"><?php echo e(__('Add To Menu')); ?></button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8">
                                        <div class="menu-structure-wrapper">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h3 class="title"><?php echo e(__('Menu Structure')); ?></h3>
                                                </div>
                                                <div class="card-body new-style">
                                                    <section id="drop_down_menu_builder_wrapper">
                                                        <div class="dd" id="nestable">
                                                            <ol class="dd-list">
                                                                <?php if(!empty($menu->content)): ?>
                                                                    <?php echo render_draggable_menu($menu->id); ?>

                                                                <?php else: ?>
                                                                    <li class="dd-item" data-id="1" data-purl="@url" data-pname="<?php echo e(__('Home')); ?>" data-ptype="custom">
                                                                        <div class="dd-handle">
                                                                            <?php echo e(__('Home')); ?>

                                                                        </div>
                                                                        <span class="remove_item">x</span>
                                                                    </li>
                                                                <?php endif; ?>
                                                            </ol>
                                                        </div>
                                                    </section><!-- END #demo -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" id="menu_structure_submit_btn" class="btn btn-primary mt-4 pr-4 pl-4"><?php echo e(__('Update Changes')); ?></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('script'); ?>
    <script src="<?php echo e(asset('assets/backend/js/jquery.nestable.js')); ?>"></script>

    <script>
        (function($){
            "use strict";
            $(document).ready(function(){

                $('#nestable').nestable({
                    group: 1,
                    maxDepth:5
                }).on('change', function (e) {
                });

                function removeTags(str) {
                    if ((str===null) || (str==='')){
                        return false;
                    }
                    str = str.toString();
                    return str.replace( /(<([^>]+)>)/ig, '');
                }


                $(document).on('click','.add_mega_menu_to_menu',function (e) {
                    e.preventDefault();

                    var allList = $(this).parent().prev().find('input[type="checkbox"]:checked');
                    var draggAbleMenuWrap = $('#nestable > ol');

                    $.each(allList,function (index,value) {
                        $(this).attr('checked',false);
                        var draggAbleMenuLength = $('#nestable ol li').length + 1;
                        var allDataAttr = '';
                        var menuType = $(this).parent().parent().data('ptype');
                        var itemSelectMarkup = '';
                        allDataAttr += ' data-ptype="'+menuType+'"';
                        var randomID = Math.floor((Math.random() * 99999999) + 1);
                        var oldRandomId  = randomID;
                        var AjaxRandomId  = randomID;
                        draggAbleMenuWrap.append('<li class="dd-item" data-uniqueid="'+oldRandomId+'" data-id="'+draggAbleMenuLength+'" '+ allDataAttr +'>\n' +
                            ' <div class="dd-handle">'+$(this).parent().text()+'</div>\n' +
                            '<span class="remove_item">x</span>'+
                            '<span class="expand"><i class="ti-angle-down"></i></span>'+
                            '<div class="dd-body hide">' +
                            '<p>loading items...</p>'+
                            '</div>'+
                            '</li>');

                        $.ajax({
                            type: 'POST',
                            url: "<?php echo e(route('admin.mega.menu.item.select.markup')); ?>",
                            data:{
                                _token: "<?php echo e(csrf_token()); ?>",
                                type : menuType,
                                lang : $('select[name="lang"]').val(),
                                menu_id : $('#menu_id').val(),
                            },
                            success:function (data) {
                                var html = data;
                                setTimeout(function () {
                                    $('li[data-uniqueid="'+AjaxRandomId+'"] .dd-body').html(html);
                                },1000);
                            }
                        });

                    });

                });

                $(document).on('click','.add_page_to_menu',function (e) {
                    e.preventDefault();
                    //nestable
                    var allList = $(this).parent().prev().find('input[type="checkbox"]:checked');
                    var draggAbleMenuWrap = $('#nestable > ol');
                    $.each(allList,function (index,value) {
                        $(this).attr('checked',false);
                        var draggAbleMenuLength = $('#nestable ol li').length + 1;
                        var allDataAttr = '';
                        var menuType = $(this).parent().parent().data('ptype');

                        if(menuType == 'static'){

                            var menuPslug = $(this).parent().parent().data('pslug');
                            var menuPname = $(this).parent().parent().data('pname');

                            allDataAttr += 'data-pname="'+menuPname+'"';
                            allDataAttr += ' data-pslug="'+menuPslug+'"';
                            allDataAttr += ' data-ptype="'+menuType+'"';

                        }else if(menuType == 'dynamic'){

                            var menuPid = $(this).parent().parent().data('pid');

                            allDataAttr += 'data-pid="'+menuPid+'"';
                            allDataAttr += ' data-ptype="'+menuType+'"';

                        }else if(menuType == 'custom'){

                            var menuPurl = $(this).parent().parent().data('purl');
                            var menuPName = $(this).parent().parent().data('pname');

                            allDataAttr += 'data-purl="'+menuPurl+'"';
                            allDataAttr += 'data-pname="'+menuPName+'"';
                            allDataAttr += ' data-ptype="'+menuType+'"';
                        }else{
                            var menuPid = $(this).parent().parent().data('pid');

                            allDataAttr += 'data-pid="'+menuPid+'"';
                            allDataAttr += ' data-ptype="'+menuType+'"';
                        }
                        draggAbleMenuWrap.append('<li class="dd-item" data-id="'+draggAbleMenuLength+'" '+ allDataAttr +'>\n' +
                            ' <div class="dd-handle">'+$(this).parent().text()+'</div>\n' +
                            '<span class="remove_item">x</span>'+
                            '<span class="expand"><i class="ti-angle-down"></i></span>'+
                            '<div class="dd-body hide">' +
                            '<input type="text" class="icon_picker" placeholder="eg: fas-fa-facebook"/>'+
                            '<input type="text" class="anchor_target" placeholder="eg: _target">'+
                            '<input type="text" class="menu_label" placeholder="eg: menu label" >'+
                            '</div>'+
                            '</li>');
                    });
                });

                //add static page to menu
                $(document).on('click','.add_static_page_to_menu',function (e) {
                    e.preventDefault();
                    //nestable
                    var allList = $(this).parent().prev().find('input[type="checkbox"]:checked');
                    var draggAbleMenuWrap = $('#nestable > ol');

                    $.each(allList,function (index,value) {
                        $(this).attr('checked',false);
                        var draggAbleMenuLength = $('#nestable ol li').length + 1;

                        let menuSlug = $(value).attr('data-url');
                        let menuName = $(value).attr('data-title');

                        draggAbleMenuWrap.append('<li class="dd-item" data-id="'+draggAbleMenuLength+'" data-ptype="custom" data-purl="'+removeTags(menuSlug)+'" data-pname="'+removeTags(menuName)+'">\n' +
                            ' <div class="dd-handle">'+removeTags(menuName)+'</div>\n' +
                            '<span class="remove_item">x</span>'+
                            '<span class="expand"><i class="fas fa-angle-down"></i></span>'+
                            '<div class="dd-body hide"><input type="text" class="anchor_target" placeholder="eg: _blank"/><input type="text" class="icon_picker" placeholder="eg: fas-fa-facebook"/></div>'+
                            '</li>');
                    });
                });
                //add static page to menu end

                $(document).on('click','#add_custom_links',function (e) {
                    e.preventDefault();

                    var draggAbleMenuWrap = $('#nestable > ol');

                    var draggAbleMenuLength = $('#nestable ol li').length + 1;

                    var menuType = $(this).parent().parent().data('ptype');
                    var menuName = $('#custom_label_text').val();//custom_label_text
                    var menuSlug = $('#custom_url').val();//custom_url


                    draggAbleMenuWrap.append('<li class="dd-item" data-id="'+draggAbleMenuLength+'" data-ptype="custom" data-purl="'+removeTags(menuSlug)+'" data-pname="'+removeTags(menuName)+'">\n' +
                        ' <div class="dd-handle">'+removeTags(menuName)+'</div>\n' +
                        '<span class="remove_item">x</span>'+
                        '<span class="expand"><i class="fas fa-angle-down"></i></span>'+
                        '<div class="dd-body hide"><input type="text" class="anchor_target" placeholder="eg: _blank"/><input type="text" class="icon_picker" placeholder="eg: fas-fa-facebook"/></div>'+
                        '</li>');
                    $('#custom_label_text').val('');
                    $('#custom_url').val('');
                });

                $(document).on('input','.menu_label',function (e) {
                    var el = $(this);
                    var value = el.val();

                    if(value != '' ){
                        el.parent().parent().attr('data-menulabel',value);
                    }else{
                        el.parent().parent().removeAttr('data-menulabel');
                    }
                });
                $(document).on('input','.icon_picker',function (e) {
                    var el = $(this);
                    var value = el.val();

                    if(value != '' ){
                        el.parent().parent().attr('data-icon',value);
                    }else{
                        el.parent().parent().removeAttr('data-icon');
                    }
                });
                $(document).on('input','.anchor_target',function (e) {
                    var el = $(this);
                    var value = el.val();

                    if(value != '' ){
                        el.parent().parent().attr('data-antarget',value);
                    }else{
                        el.parent().parent().removeAttr('data-antarget');
                    }
                });
                $(document).on('input','.static_pname',function (e) {
                    var el = $(this);
                    var value = el.val();

                    if(value != '' ){
                        el.parent().parent().attr('data-pname',value);
                    }else{
                        el.parent().parent().removeAttr('data-pname');
                    }
                });

                $(document).on('click', '.remove_item', function(e) {
                    $(this).parent().remove();
                });

                $('body').on('change','select[name="items_id"]',function (e) {
                    e.preventDefault();
                    var el = $(this);
                    var item_id = $(this).val();
                    if(item_id != '' ){
                        el.parent().parent().attr('data-items_id',item_id);
                    }else{
                        el.parent().parent().removeAttr('data-items_id');
                    }
                });

                $(document).on('click','#menu_structure_submit_btn',function (e) {
                    e.preventDefault();
                    var alldata = $('#nestable').nestable('serialize');
                    $('#menu_content').val(JSON.stringify(alldata));
                    $(this).addClass("disabled");
                    $(this).html('<i class="fas fa-spinner fa-spin mr-1"></i> <?php echo e(__("Updating")); ?>');
                    $('#menu_update_form').trigger("submit");
                })

            });
        }(jQuery));
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('backend.layout.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/clouddeployx.com/public_html/core/resources/views/backend/menus/edit-menu.blade.php ENDPATH**/ ?>