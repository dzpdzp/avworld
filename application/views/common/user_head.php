<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta content="initial-scale=1.0,user-scalable=no,maximum-scale=1,width=device-width" name="viewport" />
    <meta http-equiv="cache-control" content="no-cache, must-revalidate" />
    <meta http-equiv="Pragma" content="no-cache" />
    <meta http-equiv="cache-control" content="no-cache, must-revalidate" />
    <meta http-equiv="expires" content="0" />
    <meta content="telephone=no, address=no" name="format-detection" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <link rel="alternate" type="application/vnd.wap.xhtml+xml" media="handheld" href="target" />
    <link rel="shortcut icon" href="<?php echo ADMIN_RESOURCE_PATH?>/images/icon.png"  type="image/png">
    <link href="<?php echo ADMIN_RESOURCE_PATH?>/lib/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo BASE_URL?>/Css/style.css" rel="stylesheet" />
    <style>
    #header {
        background: none;
        background-color: rgba(240,144,24,.9);
    }
    </style>
    <script>
        var dynamicLoading = {
            css: function (path) {
                if (!path || path.length === 0) {
                    throw new Error('argument "path" is required !');
                }
                var head = document.getElementsByTagName('head')[0];
                var link = document.createElement('link');
                link.href = path;
                link.rel = 'stylesheet';
                link.type = 'text/css';
                head.appendChild(link);
            },
            js: function (path) {
                if (!path || path.length === 0) {
                    throw new Error('argument "path" is required !');
                }
                var head = document.getElementsByTagName('head')[0];
                var script = document.createElement('script');
                script.src = path;
                script.type = 'text/javascript';
                head.appendChild(script);
            }
        }
        var lang = 'zh';
        var pageCss = '<?php echo BASE_URL?>/css/' + lang + '/page.css';
        var mobileCss = '<?php echo BASE_URL?>/css/' + lang + '/mobile.css';
        dynamicLoading.css(pageCss);
        dynamicLoading.css(mobileCss);
    </script>
    <link href="<?php echo BASE_URL?>Css/animation.css" rel="stylesheet" />
    <script src="<?php echo USER_RESOURCE_PATH?>/Scripts/jquery-2.1.4.js"></script>
    <title>AvWorld 音响世界</title>
</head>
<body>
    <header id="header">
        <div class="mainbox">
            <div class="logo">
                <a href="<?php echo BASE_URL?>/zh">
                    <!--<img src="<?php echo BASE_URL?>Images/logo1.png" />-->
                    <font style="color:white;" size="6">
                        Avworld  <?php echo ($this->agent->is_mobile())?'':'音响世界'?>
                    </font>
                </a>
            </div>
            <div class="navlang">
                <!--<a href="<?php echo BASE_URL?>en"> EN </a> / <a href="<?php echo BASE_URL?>zh"> 中 </a>-->
            </div>
            <nav class="nav">
                <div class="nav-m">
                    <div class="nav-m-icon"></div>
                </div>
                <ul class="nav-p">
                    <li class="nav-p-li">
                        <div class="nav-lang-box">
                            <a href="<?php echo BASE_URL?>/zh/">
                                <div class="nav-en">HOME</div>
                                <div class="nav-zh">首页</div>
                            </a>
                        </div>
                    </li>
                    <li class="nav-p-li">
                        <div class="nav-lang-box">
                            <a href="<?php echo BASE_URL?>/zh/aboutus">
                                <div class="nav-en">ABOUT</div>
                                <div class="nav-zh">关于我们</div>
                            </a>
                        </div>
                    </li>
                    <li class="nav-p-li">
                        <div class="nav-lang-box">
                            <a href="<?php echo BASE_URL?>/zh/service">
                                <div class="nav-en">SERVICE</div>
                                <div class="nav-zh">服务领域</div>
                            </a>
                        </div>
                    </li>
<!--                    <li class="nav-p-li">
                        <div class="nav-lang-box">
                            <a href="<?php echo BASE_URL?>zh/product">
                                <div class="nav-en">PRODUCT</div>
                                <div class="nav-zh">技术产品</div>
                            </a>
                        </div>
                    </li>-->
                    <li class="nav-p-li">
                        <div class="nav-lang-box">
                            <a href="<?php echo BASE_URL?>/zh/news">
                                <div class="nav-en">NEWS</div>
                                <div class="nav-zh">新闻动态</div>
                            </a>
                        </div>
                    </li>
                    <li class="nav-p-li">
                        <div class="nav-lang-box">
                            <a href="<?php echo BASE_URL?>/zh/contact">
                                <div class="nav-en">CONTACT</div>
                                <div class="nav-zh">联系我们</div>
                            </a>
                        </div>
                    </li>
<!--                    <li class="nav-p-li">
                        <div class="nav-lang-box">
                            <a href="<?php echo BASE_URL?>zh/join">
                                <div class="nav-en">JOIN</div>
                                <div class="nav-zh">加入我们</div>
                            </a>
                        </div>
                    </li>-->
                </ul>
            </nav>
            
        </div>
        <div>
        </div>
    </header>
    
