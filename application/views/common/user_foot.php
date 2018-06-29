
<script src="<?php echo USER_RESOURCE_PATH ?>/Scripts/scrollReveal.js"></script>
<script>
    if (!(/msie [6|7|8|9]/i.test(navigator.userAgent))) {
        (function() {
            window.scrollReveal = new scrollReveal({reset: true});
        })();
    }
    ;

    $('.banner-index-down').on('click', function() {
        $('body,html').animate({scrollTop: $(window).height()}, 500);
    });

    function initMap(ad) {
        var path1 = '/images/zh/contact_' + ad + '1.png';
        var path2 = '/images/zh/contact_' + ad + '2.jpg';
        $('.imap-right').find('img').eq(0).attr('src', path2);
        $('.imap-right2').find('img').eq(0).attr('src', path1);
    }
</script>
<style>
/*    .footer {
        background: url(<?php echo BASE_URL?>/images/ft.jpg) left top repeat-x white;
        min-height: 200px;
        color: #979b9b;
    }*/
</style>
<footer id="footer" class="footer">
    <div class="mainbox ">
        <div class="copyinfo">
            <div class="copyinfo-txt">
<!--                <div class="logo"><img src="<?php echo BASE_URL?>Images/logo2.png" /></div>
                <div class="copy-code"><label for="">证券代码</label>：835078</div>-->
                <div class="copy-txt">Copyright (C) 2018 www.avworld.com</div>
                <!--, all rights reserved       Beijing Huelead Audiovisual Technology co., Ltd..-->
<!--                <div class="copy-txt">
                    <a target="_blank" href="http://www.beian.gov.cn/portal/registerSystemInfo?recordcode=11011402010099" >
                        <img src="<?php echo BASE_URL?>images/icon_bn.png" style="width: 15px; position: relative; top: 3px;" />京公网安备 11011402010099号</a>
                    &nbsp;&nbsp;
                    <a target="_blank" href="http://www.miibeian.gov.cn/publish/query/indexFirst.action" >京ICP备14027210号-1</a>
                </div>-->
                <!--<div class="copy-txt lang"><a href="<?php echo BASE_URL?>en">English</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo BASE_URL?>">中文</a></div>-->
            </div>
<!--            <div class="copyinfo-qrcode">
                <img src="<?php echo BASE_URL?>Images/qrcode.png" />
                <br />
                <div><label for="">关注公众号</label></div>
            </div>-->
        </div>
    </div>  

</footer>
<script>
    var i = 0;
    $("#header nav ul li").each(function(index, obj) {
        var v = $(this).find(".nav-en").html().toLowerCase();

        var url = location.href.toLowerCase();

        $(this).find('div').eq(0).removeClass("activ");
        if (url.indexOf(v) != -1) {
            i = 1;
            $(this).find('div').eq(0).addClass("activ");
        }
    });
    if (i == 0) {
        $("#header nav ul li").find('div').eq(0).addClass("activ");
    }

    $('.nav-m-icon').on('click', function(e) {
        //$('.nav ul').toggle();
        if ($('.nav ul').is(":hidden")) {
            $('.nav ul').show();
        } else {
            $('.nav ul').hide();
        }

        $(document).one("click", function() {
            $('.nav ul').hide();
        });

        e.stopPropagation();
    });

</script>
</body>
</html>