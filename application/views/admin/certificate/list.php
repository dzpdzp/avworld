
<!-- ページコンテンツ ここから -->
<div id="page-wrapper">
    <!-- ページタイトル ここから -->
    <div class="row">
        <div class="col-lg-12">
            <ul class="breadcrumb">
                <li>证书管理</li>
                <li>一览</li>
            </ul>
        </div>
    </div>
    <!-- ページタイトル ここまで  -->

    <!-- 新規作成ボタン ここから -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <?php if(!empty($error)):?>
                    <div class="form-group alert alert-danger" role="alert" style="margin: 0 0 20px 0;"><?php echo $error;?></div>
                    <?php endif;?>
                    <form id="pagination" name="pagination" method="post" action="" enctype="multipart/form-data" >
                        <input type="hidden" name="submit_flag" value="submit_flag">
                        <div class="form-group">
                            <label class="control-label col-lg-2 col-md-4 col-sm-5">证书名称</label>
                            <div class="col-lg-10 col-md-8 col-sm-7">
                                <input class="form-control" placeholder="证书名称" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-lg-2 col-md-4 col-sm-5">上传图片</label>
                            <div class="col-lg-10 col-md-8 col-sm-7">
                                <input type="file" name="userfile" size="20" />
                            </div>
                        </div>
                        <div class="text-center">
                            <input type="submit" class="btn btn-lg btn-success" value="保存">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- 新規作成ボタン ここまで -->
    <!-- 検索結果 ここから -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    证书一览
                </div>
                <div class="panel-body">

                    <?php
                    // 查询结果不为空
                    if (count($certificate_list)) {
                        ?>
                        <div class="table-responsive scroll-box" style="clear:both;overflow-x: auto;">
                            <table class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th width="10%" class="text-nowrap text-center" style="vertical-align:middle;padding:0 40px;">当前证书有</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-left">
                                        <?php foreach ($certificate_list as $certificate): ?>
                                            <img src="<?php echo BASE_URL.$certificate['imgpath']?>">
                                        <?php endforeach; ?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <?php
                    }
                    // 查询结果为空
                    else {
                        // 输出提示信息 
                        echo '还没有添加证书';
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
    <!-- 検索結果 ここまで -->
</div>
<!-- ページコンテンツ ここまで -->

<!-- 削除のモーダルダイアログ ここから -->
<div class="modal" id="delete_dialog" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&#215;</span><span class="sr-only">X</span>
                </button>
                <h4 class="modal-title">
                    删除证书
                </h4>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default delete" data-dismiss="modal">确认</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
            </div>
        </div>
    </div>
</div>
<div class="modal" id="delete_done_dialog" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&#215;</span><span class="sr-only">关闭</span>
                </button>
                <h4 class="modal-title">
                    删除成功
                </h4>
            </div>
            <div class="modal-body">
                删除成功
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
            </div>
        </div>
    </div>
</div>
<!-- 削除のモーダルダイアログ ここまで -->
</div>

<?php require APPPATH . 'views/common/public_javascripts.php'; ?>
<!-- jquery.ajax-combobox JavaScript -->
<script src="<?php echo ADMIN_RESOURCE_PATH ?>/lib/combobox/jquery.ajax-combobox.min.js"></script>
<!-- Custom JavaScript -->
<script type="text/javascript">
    $(function() {
        // 点击新规登录按钮
        $('#add').click(function() {
            $("#panel_display_class").val(get_panel_display_class("searchOption"));
            $("#pagination").append('<input type="hidden" name="pagi_action" value="' + location.href + '">');
            $("#pagination").attr('action', "<?php echo base_url('admin/master/shape/add') ?>");
            $("#pagination").submit();
            return false;
        });
        // 点击分页链接
        $('.pagination a').click(function() {
            if ($(this).parent('li').attr('class') !== 'active') {
                $("#pagination").attr('action', $(this).attr('href'));
                $("#panel_display_class").val(get_panel_display_class("searchOption"));
                $("#pagination").submit();
                return false;
            }
        });
        // 所删除形状的编号、名称
        var del_cd = '', del_name = '';
        // 点击列表中的删除按钮
        $("a.delete").click(function() {
            del_cd = $.trim($(this).parents("tr").find("td").eq(0).html());
            del_name = $.trim($(this).parents("tr").find("td a").eq(0).html());
            var confirm_text = "选择的[{0}:{1}]确定删除吗".replace("{0}", del_cd).replace("{1}", del_name);
            $("#delete_dialog .modal-body").html(confirm_text);
            // 显示删除确认对话框
            $("#delete_dialog").modal("show");
            return false;
        });
        // 点击删除确认对话框中的确认按钮
        $("#delete_dialog .delete").click(function() {
            $.ajax({
                type: "POST",
                url: "<?php echo base_url('admin/master/shape/delete') ?>",
                async: false,
                data: {sharpcd: del_cd},
                success: function(res) {
                    // 判断ajax是否过期
                    if (valid_ajax(res)) {
                        $("#delete_done_dialog").modal("show");
                    }
                }
            });
        });
        // 删除完成提示对话框消失时
        $('#delete_done_dialog').on('hidden.bs.modal', function(e) {
            window.location.reload();
        });
    });
</script>
</body>
</html>
