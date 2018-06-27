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
        <div class="index-title-about"></div>
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
    <div class="imgtitle">
        <div class="index-title-service"></div>
    </div>
    <div class="txt">
        <div class="list c2" data-scroll-reveal="enter top after 0.1s">
            <a class="link" href="<?php echo BASE_URL?>zh/Service/Index/1">
                <div class="list-img">
                    <img src="<?php echo BASE_URL?>Images/s1.png" />
                </div>
                <div class="list-txtbox">
                    <div class="title1">Corporate and Industry </div>
                    <div class="title2 zhdisable">商业会展</div>
                </div>
                <div class="list-sk"></div>
            </a>
        </div>
        <div class="list c2 mg-l-20 m-mg-l-20" data-scroll-reveal="enter top after 0.3s">
            <a class="link" href="<?php echo BASE_URL?>zh/Service/Index/2">
                <div class="list-img">
                    <img src="<?php echo BASE_URL?>Images/s3.png"   />
                </div>
                <div class="list-txtbox">
                    <div class="title1">Events and Sporting</div>
                    <div class="title2  zhdisable">文化体育</div>
                </div>
                <div class="list-sk"></div>
            </a>
        </div>
        <div class="list c2" data-scroll-reveal="enter top after 0.6s">
            <a class="link" href="<?php echo BASE_URL?>zh/Service/Index/3">
                <div class="list-img">
                    <img src="<?php echo BASE_URL?>Images/s4.png"  />
                </div>
                <div class="list-txtbox">
                    <div class="title1">Theme Exhibition Hall</div>
                    <div class="title2 zhdisable">主题展厅</div>
                </div>
                <div class="list-sk"></div>
            </a>
        </div>
        <!--        <div class="list c2 mg-l-20 m-mg-l-20" data-scroll-reveal="enter top after 0.8s">
                    <a class="link" href="<?php echo BASE_URL?>zh/Service/Index/4">
                        <div class="list-img">
                            <img src="<?php echo BASE_URL?>Images/s6.png" />
                        </div>
                        <div class="list-txtbox">
                            <div class="title1">Film Game</div>
                            <div class="title2 zhdisable">影视游戏</div>
                        </div>
                        <div class="list-sk"></div>
                    </a>
                </div>-->


    </div>
</div>

<!--<div class="i-technology">
    <div class="mainbox">
        <div class="imgtitle">
            
            <div class="index-title-product"></div>
        </div>
        <div class="txt">
            <div class="list c3" data-scroll-reveal="enter bottom after 0.1s">
                <div class="list-img">
                    <img src="<?php echo BASE_URL?>Images/t3.jpg" />
                    <div class="pp1">
                        <a href="<?php echo BASE_URL?>zh/product/index/7 ">
                            <div class="imgtitle">
                                <div class="title4">RADIO</div>
                                <div class="imgtitle-line"></div>
                            </div>
                            <div class="txt2 zhdisable">音频</div>
                            <div class="icon2"></div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="list c3 mg-lr-20 m-mg-l-20" data-scroll-reveal="enter bottom after 0.3s">
                <div class="list-img">
                    <img src="<?php echo BASE_URL?>Images/t4.jpg" />
                    <div class="pp1">
                        <a href="<?php echo BASE_URL?>zh/product/index/8 ">
                            <div class="imgtitle">
                                <div class="title4">VIDEO</div>
                                <div class="imgtitle-line"></div>
                            </div>
                            <div class="txt2 zhdisable">视频</div>
                            <div class="icon2"></div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="list c3 m-mg-l-p25" data-scroll-reveal="enter bottom after 0.5s">
                <div class="list-img">
                    <img src="<?php echo BASE_URL?>Images/t5.jpg" />
                    <div class="pp1">
                        <a href="<?php echo BASE_URL?>zh/product/index/9 ">
                            <div class="imgtitle">
                                <div class="title4">LIGHT</div>
                                <div class="imgtitle-line"></div>
                            </div>
                            <div class="txt2 zhdisable">灯光</div>
                            <div class="icon2"></div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="list c2" data-scroll-reveal="enter left after 0.7s">
                <div class="list-img">
                    <img src="<?php echo BASE_URL?>Images/t1.png" />
                    <div class="pp1">
                        <a href="<?php echo BASE_URL?>zh/product/index/10 ">
                            <div class="imgtitle">
                                <div class="title4">ACTIV</div>
                                <div class="imgtitle-line"></div>
                            </div>
                            <div class="txt2 zhdisable">互动</div>
                            <div class="icon2"></div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="list c2 mg-l-20" data-scroll-reveal="enter right after 0.9s">
                <div class="list-img">
                    <img src="<?php echo BASE_URL?>Images/t2.png" />
                    <div class="pp1">
                        <a href="<?php echo BASE_URL?>zh/product/index/11 ">
                            <div class="imgtitle">
                                <div class="title4">FILM</div>
                                <div class="imgtitle-line"></div>
                            </div>
                            <div class="txt2 zhdisable">影视</div>
                            <div class="icon2"></div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>-->

<div class="mainbox">
    <div class="imgtitle">

        <div class="index-title-news"></div>
    </div>
    <div class="txt">
        <div class="list c2 ">
            <div class="listbox">
                <div class="list-news-img">
                    <img src="<?php echo BASE_URL?>resource/news/thumb/news1.jpg" />
                </div>
                <div class="list-news-box">
                    <a href="<?php echo BASE_URL?>zh/news/detail/?nid=c3685d4d-d1ca-4c7f-b80f-9097e011c010">
                        <div class="date">2012/4/20</div>
                        <div class="line"></div>
                        <div class="desc">2012 BMW“奥运之悦”盛典 </div>
                        <div class="sk"></div>
                    </a>
                </div>
            </div>
        </div>
        <div class="list c2 mg-l-20">
            <div class="listbox">
                <div class="list-news-img">
                    <img src="<?php echo BASE_URL?>resource/news/thumb/news2.png" />
                </div>
                <div class="list-news-box">
                    <a href="<?php echo BASE_URL?>zh/news/detail/?nid=370ac023-e1cd-4f39-a483-70e5bbe258f4">
                        <div class="date">2016/5/10</div>
                        <div class="line"></div>
                        <div class="desc">2016年 雪佛兰品牌之夜</div>
                        <div class="sk"></div>
                    </a>
                </div>
            </div>
        </div>
        <div class="list c2 ">
            <div class="listbox">
                <div class="list-news-img">
                    <img src="<?php echo BASE_URL?>resource/news/thumb/news3.png" />
                </div>
                <div class="list-news-box">
                    <a href="<?php echo BASE_URL?>zh/news/detail/?nid=9262ea68-a7eb-4a46-b206-b768c2e210ff">
                        <div class="date">2017/11/11</div>
                        <div class="line"></div>
                        <div class="desc">2017天猫双11全球狂欢节 </div>
                        <div class="sk"></div>
                    </a>
                </div>
            </div>
        </div>
        <div class="list c2 mg-l-20">
            <div class="listbox">
                <div class="list-news-img">
                    <img src="<?php echo BASE_URL?>resource/news/thumb/news4.png" />
                </div>
                <div class="list-news-box">
                    <a href="<?php echo BASE_URL?>zh/news/detail/?nid=b5ba263a-67f5-48bc-aed8-ced3bc8a9324">
                        <div class="date">2018/04/14</div>
                        <div class="line"></div>
                        <div class="desc">2018年BMW M5上市发布会</div>
                        <div class="sk"></div>
                    </a>
                </div>
            </div>
        </div>

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

