<style>
    .list-txt {
        position: relative;
        background: rgb(247,247,247);
        padding: 10px 20px 20px 20px;
        text-align: left;top:-10px;
    }

        .list-txt span {
            display: block;
            width: 0;
            height: 0;
            border-width: 0 .6rem .6rem;
            border-style: solid;
            border-color: transparent transparent rgb(247,247,247); /*透明 透明  黄*/
            position: absolute;
            top: -.6rem;
            left: 20px;
        }

        .list-txt .line {
            height: 1px;
            border-bottom: 1px solid #d3d3d3;
            margin: 10px 0;
        }
</style>

<div class="banner banner-news">
    <div class="banner-news-txt"></div>
</div>
<div class="mainbox mtop80 mtop20">
    <div class="txt  detail mlist">
        <?php foreach($new_list as $k=>$v):?>
                <a href="<?php echo BASE_URL.'zh/news/detail/'.$v['id']?>">
                    <div class="list c2 <?php if($k%2 !==0){echo 'mg-l-20'; }?>"  data-scroll-reveal="enter right after 0.5s">
                        <div class="list-img">
                            <img src="<?php echo BASE_URL.$v['imgpath']?>" />
                        </div>
                        <div class="list-txt">
                            <span></span>
                            <div class="date"><?php echo $v['creattime']?></div>
                            <div class="line"></div>
                            <div class="desc"><?php echo $v['title']?></div>
                        </div>
                    </div>
                </a>
        <?php endforeach;?>
    </div>
</div>

