<style>
    .list-img {
        position: relative;
        overflow: hidden;
    }
    .pp1 {
        width: 100%;
        height: 250px;
        background-color: rgba(122,122,122,.5);
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        overflow: hidden;
        color: #fff;
        opacity: 0;
        z-index: 9;
        /*transition: opacity 2s;*/
        transition: All 0.4s ease-in-out;
        -webkit-transition: All 0.4s ease-in-out;
        -moz-transition: All 0.4s ease-in-out;
        -o-transition: All 0.4s ease-in-out;
    }
    .txt .list .list-img:hover .pp1 {
        opacity: 1;
        /*transform:scale(1.2);
        -webkit-transform:scale(1.2);
        -moz-transform:scale(1.2);
        -o-transform:scale(1.2);
        -ms-transform:scale(1.2);*/
        /*transition-duration: 0s;*/
    }
    .txt .list .list-img img {
        transition: All 0.4s ease-in-out;
        -webkit-transition: All 0.4s ease-in-out;
        -moz-transition: All 0.4s ease-in-out;
        -o-transition: All 0.4s ease-in-out;
    }

    .txt .list .list-img:hover img {
        transform: scale(.9);
        -webkit-transform: scale(.9);
        -moz-transform: scale(.9);
        -o-transform: scale(9);
        -ms-transform: scale(.9);
        /*transition-duration: 0s;*/
    }

    .txt .list .list-txtbox {
        transition: All 1s ease-in-out;
        -webkit-transition: All 1s ease-in-out;
        -moz-transition: All 1s ease-in-out;
        -o-transition: All 1s ease-in-out;
    }

    .txt .list:hover .list-txtbox {
        /*transform: rotate3d(0,1,0,360deg);
        -o-transform: rotate3d(0,1,0,360deg);
        -webkit-transform: rotate3d(0,1,0,360deg);
        -moz-transform: rotate3d(0,1,0,360deg);
        -ms-transform: rotate3d(0,1,0,360deg);*/
        background: rgba(122,122,122,.9);
    }

    .txt .list:hover .title1 {
        color: #fff;
    }

    .txt .list:hover .title2 {
        color: #fff;
    }

    .pp1 .imgtitle-line {
        border-bottom: 2px solid #fff;
    }

    .pp1 a {
        color: #fff;
    }

    .pp1 .txt2 {
        width: 80%;
        margin-left: 10%;
        text-align: center;
        font-size: 1.0rem;
        padding-bottom: 20px;
    }
    .icon2 {
        width: 30px;
        height: 30px;
        background: url(../../images/icon_go2.png) no-repeat;
        background-size: 100%;
        position: absolute;
        left: 0;
        right: 0;
        margin: auto;
    }

</style>

<div class="banner banner-index">

    <!--<div class="banner-index-pro animated flash"></div>-->
    <div class="banner-index-text animated flash">
        <p >
            以一流的技术、高质的服务、和谐的艺术，通过全体员工齐心协力拼搏，争创AV行业领航企业 <br>
            <font style="float: right;">--avworld</font>
        </p>
    </div>
    <div class="banner-index-way"></div>
    <div class="banner-index-down"></div>
</div>

<div class="mainbox">
    <div class="imgtitle">
        <div class="type-title">关于我们</div>
    </div>
    <div class="zh-m-enable">
        <p><?php echo $this->lang->line('company_info'); ?></p>
        <p><?php echo $this->lang->line('company_info2'); ?></p>            
    </div>
    <div class="index-txt-about detail">
        <div class="zhdisable" data-scroll-reveal="enter bottom" data-scroll-reveal-initialized="true">
            <p><?php echo $this->lang->line('company_info'); ?></p>
            <p><?php echo $this->lang->line('company_info2'); ?></p>            
        </div>
        <br />
        <div data-scroll-reveal="enter top" data-scroll-reveal-initialized="true">
            <!--<img src="<?php echo BASE_URL?>Images/about_txt_en.png"  style="width:auto;" />-->
        </div>
    </div>
</div>

<div class="mainbox">
    <div class="imgtitle " data-scroll-reveal="enter right after 0.5s">
        <div class="type-title">服务领域</div>
    </div>
    <div class="txt">
        
        <?php foreach($service_type_list as $sk => $sv):?>
        
        <div class="list c2<?php if($sk%2 !==0){echo ' mg-l-20 m-mg-l-20'; }?>" data-scroll-reveal="enter top after 0.1s">
            <a class="link" href="<?php echo BASE_URL?>zh/Service/Index/1">
                <div class="list-img ">
                    <img src="<?php echo BASE_URL.$sv['service_img']?>" width="590px" height="390px" />
                </div>
                <div class="list-txtbox">
                    <div class="title2 zhdisable"><?php echo $sv['service_name']?></div>
                </div>
                <div class="list-sk"></div>
            </a>
        </div>
       <?php endforeach;?>
    </div>
</div>
<div class="mainbox">
    <div class="imgtitle" data-scroll-reveal="enter right after 0.5s">
        <div class="type-title">新闻动态</div>
    </div>
    <div class="txt">
        <?php foreach($new_list as $newk => $newv):?>
        <?php if($newk<6):?>
        <div class="list c2 <?php if($newk%2 !==0){echo 'mg-l-20'; }?>">
            <div class="listbox">
                <div class="list-news-img">
                    <a href="<?php echo BASE_URL?>zh/news/detail/?id=<?php echo $newv['id']?>">
                        <img src="<?php echo USER_RESOURCE_NEWS.$newv['imgpath']?>" width="160px" height="95px" />
                    </a>
                </div>
                <div class="list-news-box">
                    <a href="<?php echo BASE_URL?>zh/news/detail/?id=<?php echo $newv['id']?>">
                        <!--<div class="date">2012/4/20</div>-->
                        <div class="title"><?php echo $newv['title']?></div>
                        <div class="line"></div>
                        <div class="sk"></div>
                    </a>
                </div>
            </div>
        </div>
        <?php endif;?>
       <?php endforeach;?>
    </div>
</div>
<!--<div class="mainbox">
    <div class="imgtitle">
        
        <div class="index-title-contact"></div>
    </div>
    <div class="txt pc-index-contact">
        <div class="imap-left">
            <div class="imap-label" onclick="initMap('bj')">北京</div>
            <div class="imap-label" onclick="initMap('sh')">上海</div>
            <div class="imap-label" onclick="initMap('gz')">广州</div>
        </div>
        <div class="imap-right" id="dituContent">
            <img src="<?php echo BASE_URL?>Images/zh/contact_bj2.jpg" />
        </div>
        <div class="imap-right2">
            <img src="<?php echo BASE_URL?>Images/zh/contact_bj1.png" />
        </div>
    </div>
    <div class="txt  m-index-contact">
        <img src="<?php echo BASE_URL?>Images/zh/m_index_contact_3.jpg" /><br />
        <img src="<?php echo BASE_URL?>Images/zh/m_index_contact_2.jpg" /><br />
        <img src="<?php echo BASE_URL?>Images/zh/m_index_contact_1.jpg" />
    </div>
</div>-->

<div class="null-h-30"></div>

