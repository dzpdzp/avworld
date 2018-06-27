<body>
<div class="modal" id="confirm_goto_top" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">
          <span aria-hidden="true">&#215;</span><span class="sr-only">閉じる</span>
        </button>
        <h4 class="modal-title">
        確認</h4>
      </div>
      <div class="modal-body">
      トップページを開きます、よろしいですか。</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" id="confirm_goto_top_ok" data-dismiss="modal">確認</button>
        <button type="button" class="btn btn-default" id="confirm_goto_top_cancel" data-dismiss="modal">キャンセル</button>
      </div>
    </div>
  </div>
</div>
<!--Admin画面でLOGO CLICK時の確認-->
<!--缓冲图片-->
    <div id="img_loading" style="position:relative;z-index: 9999;display:none;">
        <div style="position: fixed;background-color: #FFF;width:100%;height:100%;filter:alpha(opacity=80);-moz-opacity:0.8;-khtml-opacity: 0.8;opacity: 0.8; ">
            <div style="margin-top:20%;margin-left:50%;font-size: 20px;">
                <img src="<?php echo USER_RESOURCE_PATH?>/images/loading.gif"/>
            </div>
        </div>
    </div>
    <div id="wrapper">
      <!-- ナビゲーション ここから -->
      <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
      <?php if ($this->session->login_user_info['usertype'] == 1): ?>
        <!-- ロゴ ここから -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="javascript:void(0);"><img src="<?php echo ADMIN_RESOURCE_PATH?>/images/logo.png" border="0" alt="E-Metals" id="logo-img"></a>
        </div>
        <!-- ロゴ ここまで -->

        <!-- ヘッダー ここから -->
        <ul class="nav navbar-top-links navbar-right" style="display: inline-block;">
          <!-- ログイン・ユーザ ここから -->
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
              <i class="fa fa-user fa-fw fa-2x"></i>
              <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-messages">
                <li><p class="text-center small">当前时间<br><?php echo date('H:i:s',time())?></p></li>
             <!-- <li class="divider"></li>
              <li><a href="javascript:void(0)" id="edit_login_user"><i class="fa fa-user fa-fw"></i>プロフィール</a></li>-->
              <li class="divider"></li>
              <li><a href="<?php echo BASE_URL?>"><i class="fa fa-sign-out fa-fw"></i>Avworld.com</a></li>
            </ul>
          </li>
          <!-- ログイン・ユーザ ここまで -->
        </ul>
        <!-- login user-->
        <ul class="nav navbar-top-links navbar-right" style="display: inline-block;">
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" style="padding:24px;background-color: inherit;cursor: context-menu;">
              您好！
            </a>
          </li>
        </ul>
        <!--login user end-->

        <!-- サイドメニュー ここから -->
        <div class="navbar-default sidebar" role="navigation">
          <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
              <li>
                <a href="<?php echo base_url('admin/top')?>"><i class="fa fa-home fa-fw"></i> 首页 </a>
              </li>
             
              <li>
                <a href="<?php echo base_url('admin/aboutus_i')?>"><i class="glyphicon glyphicon-hand-right"></i> 关于我们</a>
              </li>
              <li>
                <a href="<?php echo base_url('admin/order')?>"><i class="fa fa-shopping-cart fa-fw"></i> 图片</a>
              </li>
<!--              <li>
                <a href="#"><i class="fa fa-line-chart fa-fw"></i> 1级<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                  <li>
                    <a href="<?php echo base_url('admin/sales/day')?>">2-1</a>
                  </li>
                  <li>
                    <a href="<?php echo base_url('admin/sales/product')?>">2-2</a>
                  </li>
                  <li>
                    <a href="<?php echo base_url('admin/sales/accountings')?>">2-3</a>
                  </li>
                  <li>
                    <a href="<?php echo base_url('admin/sales/report')?>">2-4</a>
                  </li>
                </ul>
              </li>-->
              
              
              <li>
                <a href="<?php echo base_url('password/change')?>"><i class="fa fa-expeditedssl fa-fw"></i>变更密码</a>
              </li>
            </ul>
          </div>
        </div>
      <?php endif; ?>
      </nav>
      <!-- ナビゲーション ここまで -->
