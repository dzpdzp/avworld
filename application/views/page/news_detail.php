<style>
    .newsdetail {
        position: relative;
        padding: 0 10rem;
        padding-bottom:30px;
        text-align:left;
    }
</style>

<div class="banner banner-news">
    <div class="banner-news-txt"></div>
</div>
<div class="mainbox">
    <div class="imgtitle">
        <div class="imgtitle-title title1"><?php echo $new_list[0]['title']?></div>
        <div class="imgtitle-title title3">
            <!--2017-07-06-->
        </div>
        <div class="imgtitle-line"></div>
    </div>
    <div class="txt  detail">
        <img src="<?php echo BASE_URL.$new_list[0]['imgpath']?>" />
        <br />
        <p><?php echo $new_list[0]['description']?></p>
    </div>
</div>
