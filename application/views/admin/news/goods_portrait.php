<style>
      .file {
          position: relative;
          display: inline-block;
          background: #D0EEFF;
          border: 1px solid #99D3F5;
          border-radius: 4px;
          padding: 4px 12px;
          overflow: hidden;
          color: #1E88C7;
          text-decoration: none;
          text-indent: 0;
          line-height: 20px;
      }
      .file input {
          position: absolute;
          font-size: 100px;
          right: 0;
          top: 0;
          opacity: 0;
      }
      .file:hover {
          background: #AADFFD;
          border-color: #78C3F3;
          color: #004974;
          text-decoration: none;
      }
      .table > tbody > tr.table_format_control {
          border: none;
      }
      .table > tbody > tr.table_format_control > td {
          padding: 0px;
          border: none;
      }
      </style>
<!-- ページコンテンツ ここから -->
        <div id="page-wrapper">
            <!-- ページタイトル ここから -->
            <div class="row">
                <div class="col-lg-12">
                    <ul class="breadcrumb">
                        <li><a href="<?php echo base_url('admin/news')?>">新闻动态</a></li>
                        <li>新闻动态详细</li>
                    </ul>
                </div>
            </div>
            <!-- ページタイトル ここまで  -->

            <!-- 商品画像登録 ここから -->
            <div class="row">
                <div class="col-lg-12">
                    <form id="img_upload" class="form-horizontal" role="form" method="post" action="<?php echo base_url('admin/news/goods_portrait') ;?>" enctype="multipart/form-data">
                        <input type="hidden" name="submit_flag" value="submit_flag">
                        <input type="hidden" name="news_id" value="<?php echo $news_info['id']?>">
                        <div class="panel-group">
                            <div class="panel panel-default">
                                <div class="panel-heading" >新闻动态信息</div>
                                <div class="panel-body" >
                                    <div class="row col-sm-12">
                                            <div class="form-group">
                                                    <label class="control-label col-lg-2 col-md-3 col-sm-3" style="text-align:right;">新闻名称:</label>
                                                    <label class="control-label col-lg-2 col-md-3 col-sm-3" style="text-align:left;"><?php echo $news_info['title']?></label>
                                            </div>
                                            <div class="form-group">
                                                    <label class="control-label col-lg-2 col-md-3 col-sm-3" style="text-align:right;">新闻内容:</label>
                                                    <label class="control-label col-lg-2 col-md-3 col-sm-3" style="text-align:left;"><?php echo $news_info['description']?></label>
                                            </div>
                                            <div class="form-group">
                                                    <label class="control-label col-lg-2 col-md-3 col-sm-3" style="text-align:right;">新闻主图</label>
                                                    <label class="control-label col-lg-2 col-md-3 col-sm-3" style="text-align:left;">
                                                        <figure class="figure">
                                                            <img src="<?php echo USER_RESOURCE_NEWS.$news_info['imgpath']?>" class="figure-img img-fluid rounded img-thumbnail" alt=".">
                                                            <!--<figcaption class="figure-caption">A caption for the above image.</figcaption>-->
                                                        </figure>
                                                    </label>
                                            </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default panel_no_top_border check_par">
                                <div class="panel-heading clearfix my-selection-header" >
                                    <span class="line-txt">图片</span>
                                    <span>图片数：<span class="image_num"><?php echo $image_num?></span>最多上传5张</span>
                                </div>
                                <div class="panel-body sub_panel">
                                    <div class="table-responsive scroll-box" style="clear:both;overflow-x: auto;">
                                    <table class="table table-striped table-bordered table-hover" style="border: none;">
                                        <tr style="line-height:10px;text-align:center;" class="table_format_control">
                                            <td width="100px" >
                                            </td>
                                            <td width="100px" >
                                            </td>
                                            <td width="100px" >
                                            </td>
                                            <td width="100px" >
                                            </td>
                                            <td width="100px" >
                                            </td>
                                        </tr>
                                        <?php foreach ($image_list as $key => $images): ?>
                                            <?php     if ($key % 5 === 0): ?>
                                                <tr style="line-height:10px;text-align:center;">
                                            <?php     endif; ?>
                                                    <td width="100px" >
                                                        <a href="<?php echo USER_RESOURCE_NEWS.$images['imagename']?>" target="_blank">
                                                            <img src="<?php echo USER_RESOURCE_NEWS.$images['imagename']?>" width="100px" />
                                                        </a>
                                                    </td>
                                            <?php     if ($key % 5 === 4): ?>
                                                </tr>
                                            <?php endif;?>
                                        <?php endforeach; ?>
                                    </table>
                                    </div>
                                    <div class="form-group col-lg-12 col-md-12 col-sm-12" height="30" <?php if(!count($image_list)){echo 'style="display:none"';}?>>
                                        <input type="button" class="btn btn-danger" id="delete_image" value="删除"/>
                                    </div>
                                    <div class="row col-lg-12 col-md-12 col-sm-12">
                                        <div class="col-lg-2 col-md-3 col-sm-4" style="padding-left:0px;">
                                            <span class="file fileinput-button">
                                                <span>选择文件</span>
                                                <input type="file" name="files" id="updload_file" multiple>
                                            </span>
                                        </div>
                                        <div class="col-sm-1">
                                            <input type="submit" class="btn btn-info" id="btn_upd" value="追加"/>
                                        </div>
                                    </div>
                                    <div class="col-sm-10 file_box" style="margin-top: 10px; padding-left:0;">
                                    </div>
                                </div>
                                
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- 商品画像登録 ここまで -->
        </div>
      <!-- ページコンテンツ ここまで -->
    </div>
    
    <!-- checkのモーダルダイアログ ここから -->
    <div class="modal" id="check_dialog" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&#215;</span><span class="sr-only">关闭</span>
                    </button>
                    <h4 class="modal-title">图片上传</h4>
                </div>
                <div class="modal-body">
                    <p class="recipient"><span id="check_message"></span></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                </div>
            </div>
        </div>
    </div>
    <!-- checkのモーダルダイアログ ここまで -->

    <!-- 画像削除のモーダルダイアログ ここから -->
    <div class="modal" id="del_confirm_dialog" role="dialog" data-backdrop="static">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&#215;</span><span class="sr-only">关闭</span>
                    </button>
                    <h4 class="modal-title">删除图片</h4>
                </div>
                <div class="modal-body">
                    <p class="recipient">确定删除图片吗</p>
                </div>
                <div class="modal-footer">
                    <form role="form" id="delForm" method="post" action="<?php echo base_url('supplier/product/photo/del_portrait') ;?>">
                          <input type="hidden" name="news_id" value="<?php echo $news_info['id']?>">
                          <input type="submit" class="btn btn-default" value="确认">
                          <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- 画像削除のモーダルダイアログ ここまで -->

    <!-- jQuery -->
    <?php require APPPATH.'views/common/public_javascripts.php';?>
    <!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
    <script src="<?php echo ADMIN_RESOURCE_PATH ?>/lib/jquery-fileupload/vendor/jquery.ui.widget.js"></script>
    <!-- The Iframe Transport is required for browsers without support for XHR file uploads -->
    <script src="<?php echo ADMIN_RESOURCE_PATH ?>/lib/jquery-fileupload/jquery.iframe-transport.js"></script>
    <!-- The basic File Upload plugin -->
    <script src="<?php echo ADMIN_RESOURCE_PATH ?>/lib/jquery-fileupload/jquery.fileupload.js"></script>
    <!-- The File Upload processing plugin -->
    <script src="<?php echo ADMIN_RESOURCE_PATH ?>/lib/jquery-fileupload/jquery.fileupload-process.js"></script>
    <!-- The File Upload validation plugin -->
    <script src="<?php echo ADMIN_RESOURCE_PATH ?>/lib/jquery-fileupload/jquery.fileupload-validate.js"></script>
    <!-- Custom JavaScript -->
    <script type="text/javascript">
		
        $(function() {
            <?php if(count($image_list) && count($image_list) == PRODUCT_IMAGE_FILE_MAX_NUM_PER):?>
                    $("#btn_upd").attr("disabled",true);
                    $("#updload_file").attr("disabled",true);
            <?php endif;?>
            // 文件删除  
            $('#delete_image').click(function(){
                // 所选中的画像编号
                var imagecds = "";
                $(this).parents(".check_par").find("[type=checkbox][name=checkflg]:checked").each(function(){
                    imagecds += $(this).val() + ",";
                });
                // 未选中画像时
                if (imagecds === "") {
                    // 不作操作
                    return ;
                }
                $('#delForm').append('<input type="hidden" name="del_imgcd" value="'+imagecds+'">');
                $('#del_confirm_dialog').modal('show');
                return false;
            });
            
            // 文件上传插件绑定
            $("#img_upload").fileupload({
                url: '<?php echo base_url('upload')?>',
                formData: {
                        "file_belongs": 1
                },
                dataType: "json",
                dropZone: $("#img_upload"),
                // 添加文件时
                add: function (e, data) {
                    // 验证画像个数
                    if ($(".file_row").length + data.originalFiles.length > 50) {
                        show_check_dialog("最多上传5个");
                        return false;
                    }
                    // 循环文件信息
                    for (var i = 0; i < data.files.length; i++) {
                        // 验证文件类型
                        var file_ext = data.files[i].name.substr(data.files[i].name.lastIndexOf(".")).toUpperCase();
                        if (".JPG|.JPEG|.GIF|.PNG".indexOf(file_ext) === -1) {
                            var allowed_type_msg = "请上传正确格式的图片（.JPG|.JPEG|.GIF|.PNG）";
                            show_check_dialog(allowed_type_msg);
                            return false;
                        }
                        // 验证文件大小
                        if (data.files[i].size > <?php echo PRODUCT_IMAGE_FILE_MAX_SIZE * 1024 * 1024?>) {
                            var max_size_msg = "上传的图片过大，不超过10M";
                            show_check_dialog(max_size_msg);
                            return false;
                        }
                    }
                    
                    // 自动上传
                    if (data.autoUpload || (data.autoUpload !== false &&
                            $(this).fileupload('option', 'autoUpload'))) {
                        data.process().done(function () {
                            data.submit();
                        });
                    }
                },
                // 文件上传成功时
                done: function (e, data) {
                    // 获取ajax返回结果
                    var result = data.result;
                    // php未返回错误信息时
                    if (result.error === "") {
                        var file_name = result.files.client_name;
                        var file_path = result.files.full_path;
                        var file_type = result.files.file_ext.replace(".","");
                        // 向文件栏添加一行数据
                        $(".file_box").append(''
                                +'<div class="row col-xs-12 file_row" style="margin-bottom:5px;">'
                                +'    <div class="col-sm-11 " style="padding:0;margin-bottom:5px;">'
                                +'        <input class="form-control" type="text" name="file_name[]" value="'+file_name+'" readonly>'
                                +'        <input type="hidden" name="file_path[]" value="'+file_path+'">'
                                +'        <input type="hidden" name="file_type[]" value="'+file_type+'">'
                                +'    </div>'
                                +'    <div class="col-sm-1">'
                                +'        <button type="button" class="btn btn-sm btn-danger delete_file">削除</button>'
                                +'    </div>'
                                +'</div>');
                        // 重新绑定删除按钮点击事件
                        $(".delete_file").unbind('click').on("click", function(){
                            $(this).parent().parent().remove();
                        });
                    }
                    // php返回错误信息时
                    else {
                        // 显示错误信息
                        show_check_dialog(result.error);
                    }
                }
            });
            
            // 绑定变更商品主图事件
            bind_change_main_event();
        });
        /**
         * 显示验证提示框
         * @param {type} message
         */
        function show_check_dialog(message) {
            // 更新提示框消息
            $("#check_message").text(message);
            // 显示提示框
            $("#check_dialog").modal("show");
        }
        
        /***
         * 全选、
         **/
         function check_all(){
            if ($('#select_all').is(':checked')) {
                $("input[name=checkflg]").prop("checked", true);
                $("input[name=checkflg]").attr("checked", true);
            } else {
                $("input[name=checkflg]").prop("checked", false);
                $("input[name=checkflg]").attr("checked", false);
            }
         }
         
        /**
         *画像选择 
         **/
         function img_check(){
            // 画面复选框
            var checkboxs = $("input[name=checkflg]");
            // 画面复选框个数
            var length = $(checkboxs).length;
            // 初始化选中复选框个数
            var checkedLength = 0;
            // 循环选中的复选框
            $(checkboxs).each(function(){
                if($(this).is(':checked')){
                    checkedLength ++;
                }
            });
            // 全部选中全选控件选中
            if(length === checkedLength){
                $('#select_all').prop("checked", true);
                $('#select_all').attr("checked", true);
            } else {
                $('#select_all').prop("checked", false);
                $('#select_all').attr("checked", false);
            }
         }
         
         /**
          * 绑定变更商品主图事件
          */
         function bind_change_main_event() {
            // 主图按钮点击事件
            $(".main_flag.btn-default").unbind("click").bind("click", function(){
                // 新商品主图按钮对象
                var new_obj = $(this);
                // 旧商品主图按钮对象
                var old_obj = $(".main_flag.btn-info");
                // 获取 新商品主图编号
                var new_main_cd = new_obj.prev("div").find("input").val();
                // 初始化 旧商品主图编号
                var old_main_cd = "";
                // 旧商品主图按钮对象存在时
                if (old_obj.length !== 0) {
                    // 更新旧商品主图编号
                    old_main_cd = old_obj.prev("div").find("input").val();
                }
                // ajax更新商品主图
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url('supplier/product/photo/change_main_image')?>",
                    async: false,
                    data: {
                        news_id: "<?php echo $news_info['id']?>",
                        new_main_cd: new_main_cd,
                        old_main_cd: old_main_cd
                    },
                    success: function(res){
                        // 判断ajax是否过期
                        if (valid_ajax(res)) {
                            // 旧商品主图按钮对象存在时
                            if (old_obj.length !== 0) {
                                // 更新 旧商品主图按钮样式
                                old_obj.removeClass('btn-info').addClass('btn-default');
                            }
                            // 更新 新商品主图按钮样式
                            new_obj.removeClass('btn-default').addClass('btn-info');
                            // 重新绑定变更商品主图事件
                            bind_change_main_event();
                        }
                    }
                });
            });
         }
    </script>