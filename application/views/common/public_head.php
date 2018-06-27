<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Avworld 后台登录</title>
<?php header('Cache-control: private, must-revalidate');?>
<link rel="shortcut icon" href="<?php echo ADMIN_RESOURCE_PATH?>/images/icon.png"  type="image/png">
<!-- Bootstrap Core CSS -->
<link href="<?php echo ADMIN_RESOURCE_PATH?>/lib/bootstrap/css/bootstrap.css" rel="stylesheet">
<!-- MetisMenu CSS -->
<link href="<?php echo ADMIN_RESOURCE_PATH?>/lib/metisMenu/metisMenu.min.css" rel="stylesheet">
<!-- SB Admin 2 CSS -->
<link href="<?php echo ADMIN_RESOURCE_PATH?>/lib/sbAdmin2/css/sb-admin-2.css" rel="stylesheet">
<?php if (isset($css['checkboxstyle'])) :?>
<!-- checkboxstyle -->
<link href="<?php echo ADMIN_RESOURCE_PATH?>/lib/css/checkboxstyle.css"rel="stylesheet">
<?php endif;?>
<?php if (isset($css['combobox'])) :?>
<!-- jquery.ajax-combobox style -->
<link href="<?php echo ADMIN_RESOURCE_PATH?>/lib/combobox/jquery.ajax-combobox.css"rel="stylesheet">
<?php endif;?>
<?php if (isset($css['zebra_datepicker'])) :?>
<!-- Zebra Datepicker -->
<link href="<?php echo ADMIN_RESOURCE_PATH?>/lib/zebra_datepicker/bootstrap.css" rel="stylesheet">
<?php endif;?>
<?php if (isset($css['bootstrap-multiselect'])) :?>
<!-- Bootstrap Multiselect -->
<link href="<?php echo ADMIN_RESOURCE_PATH?>/lib/bootstrap-multiselect/bootstrap-multiselect.css" rel="stylesheet">
<?php endif;?>
<?php if (isset($css['bootstrap-switch'])) :?>
<!-- Bootstrap Switch -->
<link href="<?php echo ADMIN_RESOURCE_PATH?>/lib/bootstrap-switch/bootstrap-switch.min.css" rel="stylesheet">
<?php endif;?>
<?php if (isset($css['jquery-listnav'])) :?>
<!-- listnav -->
<link href="<?php echo ADMIN_RESOURCE_PATH?>/lib/jquery-listnav/css/listnav.css" rel="stylesheet" >
<?php endif;?>
<?php if (isset($css['minicolors'])) :?>
<!--minicolors-->
<link href="<?php echo ADMIN_RESOURCE_PATH?>/lib/minicolors/jquery.minicolors.css" rel="stylesheet">
<?php endif;?>
<?php if (isset($css['fileupload'])) :?>    
<!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
<link rel="stylesheet" href="<?php echo ADMIN_RESOURCE_PATH ?>/lib/jquery-fileupload/jquery.fileupload.css">
<link rel="stylesheet" href="<?php echo ADMIN_RESOURCE_PATH ?>/lib/jquery-fileupload/jquery.fileupload-ui.css">
<?php endif;?>
<?php if (isset($css['selectpicker'])) :?>
<!-- bootstrap-select -->
<link rel="stylesheet" href="<?php echo USER_RESOURCE_PATH ?>/bootstrap-select/css/bootstrap-select.min.css">
<?php endif;?>
<!-- Font Awesome(CORS対策でCDN) -->
<link href="https://netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet">
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
<!-- fontstyle -->
<link href="<?php echo ADMIN_RESOURCE_PATH?>/lib/css/style.css" rel="stylesheet">
<link href="<?php echo ADMIN_RESOURCE_PATH?>/lib/css/media.css" rel="stylesheet">
<!-- ckeditor -->
<script src="<?php echo ADMIN_RESOURCE_PATH.'/ckeditor/';?>ckeditor.js"></script> 
<!-- ckfinder -->
<script src="<?php echo ADMIN_RESOURCE_PATH.'/ckfinder/';?>ckfinder.js"></script> 
</head>
