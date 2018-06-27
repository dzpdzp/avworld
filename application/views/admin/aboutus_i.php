<style>
    /* 去掉鼠标经过浮动样式。*/
    table.stripe tr td{ height:28px; line-height:28px;background:#FFF;} 
    table.stripe tr.changcolor td{ height:28px; line-height:28px;background:#F2F2F2;} 
    table.stripe tr.othercolor2 td{ height:28px; line-height:28px;background: #8bd876;} 
    table.stripe tr.othercolor31 td{ height:28px; line-height:28px;background:#8bd876;} 
    table.stripe tr.othercolor32 td{ height:28px; line-height:28px;background:#8bd876;} 
    table.stripe tr.othercolor2{border: 2px solid red;} 
    table.stripe tr.othercolor31{border: 2px solid red;} 
    table.stripe tr.othercolor32{border: 2px solid red;} 
    table.stripe tr.othercolor0 td{ height:28px; line-height:28px;background:#a8b1bc;} 
    /* css注释：默认css背景被白色 */ 
    table.stripe tr.alt{ background:#F2F2F2;} 
    /* css 注释：默认隔行背景颜色 */
</style>
<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <ul class="breadcrumb">
                <li>关于我们</li>
            </ul>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                修改公司信息            </div>
            <div class="panel-body">
                <form class="form-horizontal" role="form" method="post" action="<?php echo base_url('admin/aboutus_i/change')?>">
                    <input type="hidden" name="submit_flag" value="submit_flag">
                    <div class="form-group">
                        <label class="control-label col-lg-2 col-md-4 col-sm-5">公司简介</label>
                        <div class="col-lg-6 col-md-4 col-sm-5">
                            <textarea class="form-control" placeholder="公司简介" type="text" required="" name="text1" value="111" maxlength="500" rows="5" style="font-size:12px"><?php echo $data['text1']?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-lg-2 col-md-4 col-sm-5">公司简介二</label>
                        <div class="col-lg-6 col-md-4 col-sm-5">
                            <textarea class="form-control" placeholder="公司简介二" type="text" required=""  name="text2" value="222"  rows="5" maxlength="500" style="font-size:12px"><?php echo $data['text2']?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="text-center">
                            <input type="submit" class="btn btn-lg btn-success" value="保存">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- ページコンテンツ ここまで -->

<?php require APPPATH . 'views/common/public_javascripts.php'; ?>
<script>
    $(function () {
        <?php if(isset($updata_suc) && $updata_suc):?>
                alert('更新成功！');
                window.location="<?php echo base_url('admin/top')?>";
        <?php endif;?>
    });
</script>
</body>
</html>
