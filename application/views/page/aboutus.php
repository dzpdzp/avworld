
<div class="banner banner-about">
    <div class="banner-about-txt"></div>
</div>
<div class="mainbox">
    <div class="imgtitle">
        <div class="type-title">关于我们</div>
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
        <div class="type-title">业务范围</div>
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
            <div class="type-title">证书及感谢信</div>
        </div>
    </div>
    <style>
        .zhengshu img{
            width:10%;
        }
        .carousel-control.left{
            background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, .5) 0%, rgba(0, 0, 0, .0001) 100%); 
            background-image:  -webkit-gradient(linear, left top, right top, from(rgba(0, 0, 0, .5)), to(rgba(0, 0, 0, .0001)));
            background-image: linear-gradient(to right, rgba(0, 0, 0, .5) 0%, rgba(0, 0, 0, .0001) 100%);
        }
    </style>
    
    <p>
            <!--Image gallery (ps, try using mouse scroll wheel)<br />-->
    </p>    
    <?php foreach ($certificate_list as $key => $value) :?>
        <?php foreach ($value as $k => $v) :?>
            <div style="text-align:center;display: inline-block" >
                <a rel="example_group" href="<?php echo BASE_URL.$v['imgpath']?>" title="<?php echo $v['title']?>">
                    <img alt="" src="<?php echo BASE_URL.$v['imgpath']?>" class="img-responsive img-rounded" style="width:200px;height:300px;"/>
                </a>
                <br><?php echo $v['title']?>
            </div>
        <?php endforeach;?>
    <?php endforeach;?>
    
    
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
<!-- Bootstrap Core JavaScript -->
<script src="<?php echo ADMIN_RESOURCE_PATH?>/lib/bootstrap/js/bootstrap.js"></script>
<script type="text/javascript">
        $(document).ready(function() {
                $("a[rel=example_group]").fancybox({
                        'transitionIn'		: 'none',
                        'transitionOut'		: 'none',
                        'titlePosition' 	: 'over',
                        'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
                                return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
                        }
                });
        });
</script>