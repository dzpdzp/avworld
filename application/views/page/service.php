
<style>
    .imgtitle ul {
        margin: 0 auto;
        text-align: center;
    }

    .imgtitle ul li {
        display: inline;
        padding: 10px 10px;
        line-height: 2;
    }

    .imgtitle ul  .activ {
        background: rgb(240,133,0);
    }

    .imgtitle ul li a {
        color: #000;
        font-size: .7rem;
    }
    .imgtitle ul .activ a {color: #fff;        }

    .title-btn {
        /*background:rgb(240,133,0);*/
        border-radius:4px; 
        border:1px solid #333333;
        text-align:center;
        height:35px;
        line-height:35px;
        padding:0 5px;
        display:inline-block;
        margin:10px 5px;
    }
    .imgtitle .activ {
        border:1px solid rgb(240,133,0);
        background:rgb(240,133,0);
    }
    .imgtitle .activ a {
        color:#fff;
    }
</style>
<div class="banner banner-service">
    <div class="banner-service-txt"></div>
</div>
<div class="mainbox">
    <div class="imgtitle">
        <div class="title-btn"><a href="<?php echo BASE_URL?>zh/service/Index/1">商业会展</a></div>
        <div class="title-btn"><a href="<?php echo BASE_URL?>zh/service/Index/3">主题展厅</a></div>
        <div class="title-btn"><a href="<?php echo BASE_URL?>zh/service/Index/2">文化体育</a></div>
        <div class="title-btn"><a href="<?php echo BASE_URL?>zh/service/Index/4">影视游戏</a></div>

    </div>
    <div class="imgtitle" style="text-align: center;display:none;">
        <ul>
            <li><a href="<?php echo BASE_URL?>zh/service/Index/1">商业会展</a></li>
            <li><a href="<?php echo BASE_URL?>zh/service/Index/2">文化体育</a></li>
            <li><a href="<?php echo BASE_URL?>zh/service/Index/3">主题展厅</a></li>
            <li><a href="<?php echo BASE_URL?>zh/service/Index/4">影视游戏</a></li>
        </ul>
    </div>
    <div class="txt  detail" aaa<?php echo $type;?>>
        <?php if($type == 1 || !is_numeric($type)):?>
        <div class="list">
            <a  href="<?php echo BASE_URL?>zh/service/detail/?wsid=c31d3519-beaf-4b82-8814-5add92025394">
                <div class="list-img">
                    <img src="<?php echo BASE_URL?>resource/ws/service_1.jpg" />
                </div>
                <div class="list-txtbox">
                    <div class="title2"> 庆典典礼</div>
                    <div class="title3">走过红毯，置身舞台，绚丽灯光闪烁，动人音响环绕，舞台上发生的一切都受到台下及镜头之外万千观众的密切关注</div>
                </div>
                <div class="list-sk"></div>
            </a>
        </div>
        <?php elseif($type == 2):?>
        <div class="list">
            <a  href="<?php echo BASE_URL?>zh/service/detail/?wsid=99283a61-f739-4a1e-b6fb-8386a7a8f7cf">
                <div class="list-img">

                    <img src="<?php echo BASE_URL?>resource/ws/service_1.jpg" />

                </div>
                <div class="list-txtbox">
                    <div class="title2"> 发布会</div>
                    <div class="title3">面向经销商，面向媒体，面向核心消费人群，新产品发布历来都是企业活动中的重中之重</div>
                </div>
                <div class="list-sk"></div>
            </a>
        </div>
        
        <?php elseif($type == 3):?>
        <div class="list">
            <a  href="<?php echo BASE_URL?>zh/service/detail/?wsid=058f5b4b-6d8d-4d2c-b997-a4089fd0dc47">
                <div class="list-img">

                    <img src="<?php echo BASE_URL?>resource/ws/service_1.jpg" />

                </div>
                <div class="list-txtbox">
                    <div class="title2"> 国际车展</div>
                    <div class="title3">汽车行业在全球范围内拥有极为广阔的受众，对于会展行业来说则是最为重要的服务对象之一</div>
                </div>
                <div class="list-sk"></div>
            </a>
        </div>
        <?php elseif($type == 4):?>
        <div class="list">
            <a  href="<?php echo BASE_URL?>zh/service/detail/?wsid=d4e5850a-4e80-4c65-976d-cee0724b2afa">
                <div class="list-img">

                    <img src="<?php echo BASE_URL?>resource/ws/service_1.jpg" />

                </div>
                <div class="list-txtbox">
                    <div class="title2"> 行业大型会议</div>
                    <div class="title3">全行业的目光在此聚焦，全领域的热点由此扩散，一场盛会的召开离不开视听效果的包装</div>
                </div>
                <div class="list-sk"></div>
            </a>
        </div>
        <?php endif;?>

    </div>
</div>

<script>
    var si = 0;
    $(".imgtitle ul li").each(function(index, obj) {
        var url = location.href;
        var v = url.charAt(url.length - 1);

        $(this).removeClass("activ");
        if (v == (index + 1)) {
            si = 1;
            $(this).addClass("activ");
        }
    });

    if (si == 0) {
        $(".imgtitle ul li").eq(0).addClass("activ");
    }

    var si2 = 0;
    $(".imgtitle .title-btn").each(function(index, obj) {
        var url = location.href;
        var v = url.charAt(url.length - 1);
        if (v == 2)
            v = 3;
        else if (v == 3)
            v = 2;
        $(this).removeClass("activ");
        if (v == (index + 1)) {
            si2 = 1;
            $(this).addClass("activ");
        }
    });

    if (si2 == 0) {
        $(".imgtitle .title-btn").eq(0).addClass("activ");
    }
</script>


