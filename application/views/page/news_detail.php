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
        <div class="panel panel-default">
            <div class="panel-body">
              <?php echo $new_list[0]['description']?>
            </div>
        </div>
        <?php if(!empty($new_list[0]['videopath'])):?>
        <div class="txt detail text-center" data-scroll-reveal="enter bottom" data-scroll-reveal-initialized="true">
            <a data-fancybox="" data-width="640" data-height="360" href="<?php echo USER_RESOURCE_NEWS.$new_list[0]['videopath']?>">
                <video width="640" height="320" controls >
                    <source src="<?php echo USER_RESOURCE_NEWS.$new_list[0]['videopath']?>" type="video/mp4">
                </video>
            </a>
        </div>
        <?php endif;?>
        <?php foreach ($new_img_list as $key => $value):?>
        ​<picture>
            <?php $img_name = explode('.', $value['imagename']);$img_big = $img_name[0].'_big.'; $img_big_suffix=$img_name[1] ?>
            <source srcset="<?php echo USER_RESOURCE_NEWS.$img_big.$img_big_suffix?>" type="image/svg+xml">
            <img src="<?php echo USER_RESOURCE_NEWS.$img_big.$img_big_suffix?>" class="img-fluid img-thumbnail" alt="">
        </picture>
        <?php endforeach;?>
    </div>
</div>
<script type="text/javascript">    

</script>
