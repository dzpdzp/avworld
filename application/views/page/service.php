
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
        border:#1f4e79;
        background:#1f4e79;
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
        <?php foreach($service_type as $st_k =>$st_l):?>
        <div class="title-btn"><a href="<?php echo BASE_URL?>zh/service/Index/<?php echo $st_l['service_type'];?>"><?php echo $st_l['service_name'];?></a></div>
        <?php endforeach;?>

    </div>
    <div class="imgtitle" style="text-align: center;display:none;">
        <ul> 
            <?php foreach($service_type as $st_k =>$st_l):?>
                <li><a href="<?php echo BASE_URL?>zh/service/Index/<?php echo $st_l['service_type'];?>"><?php echo $st_l['service_name'];?></a></li>
            <?php endforeach;?>
        </ul>
    </div>
    <div class="txt  detail" >
        <?php if(empty($service_list)):?>
            <div class="alert alert-warning" role="alert">没有数据</div>
        <?php  else:?>
        <?php foreach ($service_list as $k => $v):?>
        <div class="list">
            <a  href="<?php echo BASE_URL?>zh/service/detail/?serviceid=<?php echo $v['service_id']?>">
                <div class="list-img">
                    <img src="<?php echo USER_RESOURCE_SERVICE.$v['service_img']?>"width="" />
                </div>
                <div class="list-txtbox">
                    <!--<div class="title2"> 庆典典礼</div>-->
                    <div class="title3"><?php echo $v['service_title']?></div>
                </div>
                <div class="list-sk"></div>
            </a>
        </div>
        <?php endforeach;?>
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
//        if (v == 2)
//            v = 3;
//        else if (v == 3)
//            v = 2;
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


