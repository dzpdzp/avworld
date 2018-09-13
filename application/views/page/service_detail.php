<div class="banner  banner-service">
    <div class="banner-service-txt"></div>
</div>
<div class="mainbox">
    <div class="imgtitle">
        <div class="imgtitle-title title1"><?php echo $service_detail['service_title']?></div>
        <div class="imgtitle-line"></div>
    </div>
    <div class="txt mtop20">
        <div class="detail">
            <br />
            <div class="panel panel-default">
                <div class="panel-body">
                  <?php echo $service_detail['service_des']?>
                </div>
            </div>
            <p>
                <img alt="" src="<?php echo USER_RESOURCE_SERVICE.$service_detail['service_img']?>" />
            <br />
                <!--<img alt="" src="<?php echo USER_RESOURCE_SERVICE.$service_detail['service_img']?>" />-->
            </p>
        </div>
    </div>
</div>