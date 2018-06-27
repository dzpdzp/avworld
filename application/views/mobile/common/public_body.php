
<body>
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
                    <a class="navbar-brand" href="<?php echo base_url('admin/top') ?>"><img src="<?php echo ADMIN_RESOURCE_PATH ?>/images/logo.png" border="0" alt="E-Metals"></a>
                </div>
                <!-- ロゴ ここまで -->
                <!-- サイドメニュー ここから -->
                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li><p class="text-center" style="color: #337ab7;padding-top:10px;"><?php echo $this->session->login_user_info['lastname'] . lang('CALL'); ?><br><?php echo lang('COMMON_BODY_01')?><br><?php echo format_db_datetime($this->session->login_user_info['lastlogintime'], TRUE) ?></p></li>
                            <li>
                                <a href="<?php echo base_url('admin/top') ?>"><i class="fa fa-home fa-fw"></i> <?php echo lang('COMMON_TOP')?></a>
                            </li>
                            <li>
                              <a href="<?php echo base_url('admin/productqa')?>"><i class="fa fa-comments fa-fw"></i> <?php echo lang('PRODUCT_QA_001')?></a>
                            </li>
                            <!-- Add nls mjh 20171218 start-->
                            <li>
                              <a href="<?php echo base_url('admin/productqa/quotation')?>"><i class="fa fa-comments fa-fw"></i> <?php echo lang('PRODUCT_QA_033')?></a>
                            </li>
                            <!-- Add nls mjh 20171218 end-->
                            <li>
                              <a href="<?php echo base_url('admin/mitumori')?>"><i class="fa fa-reply-all  fa-fw"></i> <?php echo lang('OFFER_REPLY_001')?></a>
                            </li>
                            <!-- Add nls mjh 20171222 start-->
                            <li>
                                <a href="<?php echo base_url('admin/allmitumori_log') ?>"><i class="fa fa-shopping-cart fa-fw"></i> <?php echo lang('MITUMORI_LOG_MENU')?></a>
                            </li>
                            <!-- Add nls mjh 20171222 end-->
                            <li>
                                <a href="<?php echo base_url('admin/order') ?>"><i class="fa fa-shopping-cart fa-fw"></i> <?php echo lang('MST_ORDER_001')?></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-line-chart fa-fw"></i> <?php echo lang('MST_SALES_020')?><span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="<?php echo base_url('admin/sales/day') ?>"><?php echo lang('MST_SALES_002')?></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('admin/sales/product') ?>"><?php echo lang('ORDER_022')?></a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="<?php echo base_url('admin/discount/discount') ?>"> <i class="fa fa-jpy fa-fw"></i><?php echo lang('MST_COMMON_006')?></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-building fa-fw"></i> <?php echo lang('SUPPLIER_COMMON_001')?><span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="<?php echo base_url('admin/supplier/search') ?>"><?php echo lang('COMMON_SEARCH_DETAIL')?></a>
                                    </li>
                                    <li>
                                      <a href="<?php echo base_url('admin/supplier/minweight')?>"><?php echo lang('ADMIN_MIN_WEIGHT')?></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('admin/supplier/special') ?>"><?php echo lang('SPECIAL_001')?></a>
                                    </li>
				                  <li style="<?php if(ADMIN_PRODUCT_UPLOAD || ADMIN_PRODUCT_HISTORY){echo "";}else{echo "display:none;";}?>">
					                <a href="#"><?php echo lang('SUPPLIER_TEMPLATE')?><span class="fa arrow"></span></a>
						                <ul class="nav nav-second-level">
									    <li style="<?php if(ADMIN_PRODUCT_UPLOAD){echo "";}else{echo "display:none;";}?>">
						                    <a href="<?php echo base_url('admin/product/upload')?>"><?php echo lang('SUPPLIER_UPLOAD')?></a>
						                </li>
						                <li style="<?php if(ADMIN_PRODUCT_HISTORY){echo "";}else{echo "display:none;";}?>">
						                     <a href="<?php echo base_url('admin/product/history')?>"><?php echo lang('PRODUCT_HISTORY')?></a>
						                </li>
					                </ul>
					               </li>
                                </ul>
                            </li>
                            <li>
                                <a href="<?php echo base_url('admin/customer/search') ?>"><i class="fa fa-smile-o fa-fw"></i> <?php echo lang('CUSTOMER_COMMON_001')?></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-sitemap fa-fw"></i> <?php echo lang('SITE_COMMON_001')?><span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="<?php echo base_url('admin/site/content') ?>"><?php echo lang('CONTENT_INFO_003')?></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('admin/site/point/search') ?>"><?php echo lang('COMMON_POINT_SETTING')?></a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-table fa-fw"></i> <?php echo lang('MST_COMMON_001')?><span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="<?php echo base_url('admin/master/grouping') ?>"><?php echo lang('MST_GROUPING_001')?></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('admin/master/material') ?>"><?php echo lang('MST_MATERIAL_001')?></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('admin/master/purpose') ?>"><?php echo lang('MST_PURPOSE_001')?></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('admin/master/shape') ?>"><?php echo lang('MST_SHAPE_001')?></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('admin/master/choices') ?>"><?php echo lang('MST_CHOICES_001')?></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('admin/master/exchangerate') ?>"><?php echo lang('MST_RAET_001')?></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('admin/master/dictionary') ?>"><?php echo lang('MST_DICT_001')?></a>
                                    </li>
<!--                                    <li>
                                        <a href="<?php echo base_url('admin/master/explain') ?>"><?php echo lang('MATERIAL_EXPLAIN_TITLE')?></a>
                                    </li>-->
                                </ul>
                            </li>
                            <li>
                                <a href="<?php echo base_url('admin/staff/staff') ?>"><i class="fa fa-user fa-fw"></i><?php echo lang('MST_COMMON_004')?></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('password/change') ?>"><i class="fa fa-expeditedssl fa-fw"></i> <?php echo lang('COMMON_CHANGE_PW_01') ?></a>
                            </li>
                            <li><a href="<?php echo base_url('logout') ?>"><i class="fa fa-sign-out fa-fw"></i><?php echo lang('COMMON_BODY_02')?></a></li>
                        </ul>
                    </div>
                </div>
            <?php endif; ?>
            <?php if ($this->session->login_user_info['usertype'] == 2): ?>
                <!-- ロゴ ここから -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url('supplier/top') ?>"><img src="<?php echo ADMIN_RESOURCE_PATH ?>/images/logo.png" border="0" alt="E-Metals"></a>
                </div>
                <!-- ロゴ ここまで -->

                <!-- サイドメニュー ここから -->
                <div class="navbar-default sidebar" role="navigation"   >
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li><p class="text-center " style="color: #337ab7;padding-top:10px;"><?php echo $this->session->login_user_info['lastname'] . lang('CALL'); ?><br><?php echo lang('COMMON_BODY_01')?><br><?php echo format_db_datetime($this->session->login_user_info['lastlogintime'], TRUE) ?></p></li>
                            <li>
                                <a href="<?php echo base_url('supplier/top') ?>"><i class="fa fa-home fa-fw"></i> <?php echo lang('COMMON_TOP')?></a>
                            </li>
                            <!-- Del nls mjh 20171225 start -->
                            <!--<li>
                              <a href="<?php echo base_url('supplier/productqa')?>"><i class="fa fa-comments fa-fw"></i> <?php echo lang('PRODUCT_QA_001')?></a>
                            </li>-->
                            <!-- Del nls mjh 20171225 end -->
                            <li>
                                <a href="#"><i class="fa fa-building fa-fw"></i> <?php echo lang('SUPPLIER_TEMPLATE')?><span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li style="<?php if(SUPPLIER_PRODUCT){echo "";}else{echo "display:none;";}?>">
				                         <a href="<?php echo base_url('supplier/product/template')?>"><?php echo lang('TEMPLATE_DOWNLOAD')?></a>
				                    </li>
				                    <li style="<?php if(SUPPLIER_PRODUCT_UPLOAD){echo "";}else{echo "display:none;";}?>">
				                        <a href="<?php echo base_url('supplier/product/upload')?>"><?php echo lang('SUPPLIER_UPLOAD')?></a>
				                    </li>
				                    <li style="<?php if(SUPPLIER_PRODUCT_HISTORY){echo "";}else{echo "display:none;";}?>">
				                         <a href="<?php echo base_url('supplier/product/history')?>"><?php echo lang('PRODUCT_HISTORY')?></a>
				                    </li>
                                    <li>
                                        <a href="<?php echo base_url('supplier/product/photo') ?>"><?php echo lang('PRODUCT_PHOTO')?></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('supplier/product/millsheet') ?>"><?php echo lang('PRODUCT_MILLSHEET')?></a>
                                    </li>
<!--                                    <li>
                                        <a href="<?php echo base_url('supplier/product/description') ?>"><?php echo lang('SPECS_DETAIL_002')?></a>
                                    </li>-->
                                    <li>
                                        <a href="<?php echo base_url('supplier/product/ortherdescription')?>"><?php echo lang('ORTHER_PRODUCT_LOGIN')?></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('supplier/product/special') ?>"><?php echo lang('SPECIAL_001')?></a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                              <a href="<?php echo base_url('supplier/mitumori')?>"><i class="fa fa-reply-all  fa-fw"></i> <?php echo lang('OFFER_REPLY_001')?></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('supplier/order') ?>"><i class="fa fa-shopping-cart fa-fw"></i> <?php echo lang('ORDER_001')?></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-line-chart fa-fw"></i> <?php echo lang('MST_SALES_020')?><span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="<?php echo base_url('supplier/sales/day') ?>"><?php echo lang('MST_SALES_002')?></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('supplier/sales/product') ?>"><?php echo lang('MST_SALES_022')?></a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="<?php echo base_url('supplier/discount/discount') ?>"> <i class="fa fa-jpy fa-fw"></i><?php echo lang('MST_COMMON_006')?></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('supplier/company/edit') ?>"><i class="fa fa-users fa-fw"></i> <?php echo lang('SUPPLIER_001')?></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('supplier/staff/staff') ?>"><i class="fa fa-user fa-fw"></i> <?php echo lang('MST_COMMON_004')?></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('password/change') ?>"><i class="fa fa-expeditedssl fa-fw"></i> <?php echo lang('COMMON_CHANGE_PW_01') ?></a>
                            </li>
                            <li><a href="<?php echo base_url('logout') ?>"><i class="fa fa-sign-out fa-fw"></i><?php echo lang('COMMON_BODY_02')?></a></li>
				              <li class="help-li">
				               <a href="#" onClick="openHelp('<?php echo $forward_url?>');return false;"><i class="fa fa-info-circle fa-fw"></i> <?php echo lang('COMMON_HELP')?></a>
				              </li>
				              <li class="ask-li">
				               <a href="#" onClick="openHelp('support/?page_id=224');return false;"><i class="fa fa-question-circle fa-fw"></i> <?php echo lang('COMMON_CONSULTATIVE')?></a>
				              </li>
                        </ul>
                    </div>
                </div>
            <?php endif; ?>
            <?php if ($this->session->login_user_info['usertype'] == 3): ?>
                <!-- ロゴ ここから -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url('buyer/top') ?>"><img src="<?php echo ADMIN_RESOURCE_PATH ?>/images/logo.png" border="0" alt="E-Metals"></a>
                </div>
                <!-- ロゴ ここまで -->

                <!-- サイドメニュー ここから -->
                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">
                            <li><p class="text-center small" style="color: #337ab7;padding-top:10px;"><?php echo $this->session->login_user_info['lastname'] . lang('CALL'); ?><br><?php echo lang('COMMON_BODY_01')?><br><?php echo format_db_datetime($this->session->login_user_info['lastlogintime'], TRUE) ?></p></li>
                            <li><a href="<?php echo base_url('user/index') ?>"><i class="fa fa-edge  fa-fw"></i>E-Metals</a></li>
                            <li>
                                <a href="<?php echo base_url('buyer/top') ?>"><i class="fa fa-home fa-fw"></i> <?php echo lang('COMMON_TOP')?></a>
                            </li>
                            <li>
                              <a href="<?php echo base_url('buyer/productqa')?>"><i class="fa fa-comments fa-fw"></i> <?php echo lang('PRODUCT_QA_001')?></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('buyer/order') ?>"><i class="fa fa-shopping-cart fa-fw"></i> <?php echo lang('ORDER_113')?></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-line-chart fa-fw"></i> <?php echo lang('COMMON_BODY_03')?><span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li>
                                        <a href="<?php echo base_url('buyer/sales/day') ?>"><?php echo lang('MST_SALES_002')?></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo base_url('buyer/sales/product') ?>"><?php echo lang('MST_SALES_022')?></a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="<?php echo base_url('buyer/company/edit') ?>"><i class="fa fa-users fa-fw"></i> <?php echo lang('SUPPLIER_001')?></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('buyer/staff/staff') ?>"><i class="fa fa-user fa-fw"></i> <?php echo lang('MST_COMMON_004')?></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('buyer/address/address') ?>"><i class="fa fa-globe fa-fw"></i> <?php echo lang('PLACE_001')?></a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('password/change') ?>"><i class="fa fa-expeditedssl fa-fw"></i> <?php echo lang('COMMON_CHANGE_PW_01') ?></a>
                            </li>
                            <li><a href="<?php echo base_url('logout') ?>"><i class="fa fa-sign-out fa-fw"></i><?php echo lang('COMMON_BODY_02')?></a></li>
			              <li class="help-li">
			               <a href="#" onClick="openHelp('<?php echo $forward_url?>');return false;"><i class="fa fa-info-circle fa-fw"></i> <?php echo lang('COMMON_HELP')?></a>
			              </li>
			              <li class="ask-li">
			               <a href="#" onClick="openHelp('support/?page_id=100');return false;"><i class="fa fa-question-circle fa-fw"></i> <?php echo lang('COMMON_CONSULTATIVE')?></a>
			              </li>
                        </ul>
                    </div>
                </div>
            <?php endif; ?>
        </nav>
        <!-- ナビゲーション ここまで -->
