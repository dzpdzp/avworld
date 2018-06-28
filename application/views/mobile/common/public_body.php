
<body>
    <div id="wrapper">
        <!-- ナビゲーション ここから -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <!-- ロゴ ここから -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo base_url('admin/top') ?>"><img src="<?php echo ADMIN_RESOURCE_PATH ?>/images/logo.png" border="0" alt="E-Metals"></a>
            </div>
            <!-- ロゴ ここまで -->
            <!-- サイドメニュー ここから -->
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="<?php echo base_url('admin/top') ?>"><i class="fa fa-home fa-fw"></i> 首页 </a>
                        </li>

                        <li>
                            <a href="<?php echo base_url('admin/aboutus_i') ?>"><i class="glyphicon glyphicon-hand-right"></i> 关于我们</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('admin/certificate') ?>"><i class="fa fa-shopping-cart fa-fw"></i> 证书管理</a>
                        </li>
                        <!--              <li>
                                        <a href="#"><i class="fa fa-line-chart fa-fw"></i> 1级<span class="fa arrow"></span></a>
                                        <ul class="nav nav-second-level">
                                          <li>
                                            <a href="<?php echo base_url('admin/sales/day') ?>">2-1</a>
                                          </li>
                                          <li>
                                            <a href="<?php echo base_url('admin/sales/product') ?>">2-2</a>
                                          </li>
                                          <li>
                                            <a href="<?php echo base_url('admin/sales/accountings') ?>">2-3</a>
                                          </li>
                                          <li>
                                            <a href="<?php echo base_url('admin/sales/report') ?>">2-4</a>
                                          </li>
                                        </ul>
                                      </li>-->


                        <li>
                            <a href="<?php echo base_url('password/change') ?>"><i class="fa fa-expeditedssl fa-fw"></i>变更密码</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- ナビゲーション ここまで -->
