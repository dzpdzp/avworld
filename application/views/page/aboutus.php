


<div class="banner banner-about">
    <div class="banner-about-txt"></div>
</div>
<div class="mainbox">
    <div class="imgtitle">
        <div class="imgtitle-title title-about-1">
            <img src="<?php echo BASE_URL?>Images/zh/about_title_1.png" />
        </div>
    </div>
    <div class="zh-m-enable">
        <p><?php echo $data['text1']?></p>
        <p><?php echo $data['text2'] ?></p>            
    </div>
    <div class="index-txt-about detail">
        <div class="zhdisable" data-scroll-reveal="enter bottom" data-scroll-reveal-initialized="true">
            <p><?php echo $data['text1']?></p>
            <p><?php echo $data['text2']?></p>            
        </div>
        <br />
        <div data-scroll-reveal="enter top" data-scroll-reveal-initialized="true">
            <!--<img src="<?php echo BASE_URL?>Images/about_txt_en.png" style="width:auto;">-->
        </div>
    </div>


</div>


<div class="mainbox">
    <div class="imgtitle">
        <div class="imgtitle-title title-about-1">
            业务范围
        </div>
    </div>
    <div class="txt detail">
        <img src="<?php echo BASE_URL?>resource/businessrange.png" />
    </div>
</div>
<!--<div class="about-bg-2">
    <img src="<?php echo BASE_URL?>Images/about_bg_2.png" />
</div>-->
<div class="mainbox">
    <div class="imgtitle">
        <div class="imgtitle-title title-about-1">
            获得的证书及感谢信
        </div>
    </div>
    <style>
        .zhengshu img{
            width:10%;
        }
    </style>
    <div class="txt detail zhengshu">
        <div>
            <img src="<?php echo BASE_URL?>resource/zhengshu/1.png">
            <img src="<?php echo BASE_URL?>resource/zhengshu/2.png" />
            <img src="<?php echo BASE_URL?>resource/zhengshu/3.png" />
            <img src="<?php echo BASE_URL?>resource/zhengshu/4.png" />
            <img src="<?php echo BASE_URL?>resource/ganxiexin/11.png" />
            <img src="<?php echo BASE_URL?>resource/ganxiexin/12.png" />
            <img src="<?php echo BASE_URL?>resource/ganxiexin/13.png" />
            <img src="<?php echo BASE_URL?>resource/ganxiexin/14.png" />
            <img src="<?php echo BASE_URL?>resource/ganxiexin/15.png" />
        </div>
        <div>
            <img src="<?php echo BASE_URL?>resource/zhengshu/5.png" />
            <img src="<?php echo BASE_URL?>resource/zhengshu/6.png" />
            <img src="<?php echo BASE_URL?>resource/zhengshu/7.png" />
            <img src="<?php echo BASE_URL?>resource/zhengshu/8.png" />
            <img src="<?php echo BASE_URL?>resource/zhengshu/9.png" />
            <img src="<?php echo BASE_URL?>resource/zhengshu/10.png" />
        </div>
    </div>
</div>
<!--<div class="mainbox">
    <div class="imgtitle">
        <div class="imgtitle-title title-about-1">
            <img src="<?php echo BASE_URL?>Images/zh/about_title_2.png" />
        </div>
    </div>
    <div class="txt detail">
        <img src="<?php echo BASE_URL?>Images/zh/about_bg_3.jpg" />
    </div>
</div>-->

<script>
    var w = $(window).width();
    if (w < 479) {
        var p = $('.about-bg-2').find('img')[0].src; //.attr('src', path);
        p = p.replace('.jpg', '_m.jpg');
        $('.about-bg-2').find('img').attr('src', p);
    }
</script>
