<style>
    .avworld{
        font-size: 24px;
        font-family: STHupo;
        text-align: center;
        padding-top: 10px;

    }
    .left-div{
        float: left;
        background-color:blanchedalmond;
        font-family: STHupo;
        width: 200px;
        min-height: 245px;
    }
    .tit{
        font-size: 20px;
        color: red;
    }

    .des{
        font-size: 20px
    }
    .descrip{
        padding: 15px;
    }
</style>

<div class="banner banner-contact">
    <div class="banner-contact-txt"></div>
</div>
<?php if ($this->agent->is_mobile()): ?>
    <style>

        .left-div{
            float: left;
            background-color:blanchedalmond;
            width: 100%;
            height: 100%;
        }
    </style>
    <div class="mainbox mtop80 mtop20">
        <div class="txt detail">
            <div class="contact-map">
                <div class="left-div"  >
                    <address>
                        <strong>Avworld.</strong><br>
                        北京市朝阳区天辰东路9号 <br>
                        国家体育馆152室<br>
                        <abbr title="Phone">P:</abbr> 010-84372886
                        <abbr title="Email">E:</abbr> av99@163.com
                    </address>
<!--                    <div class="avworld">Avworld</div>
                    <hr>
                    <div class="descrip">
                        <font class="tit" >地址：</font> <font class="des">北京市朝阳区天辰东路9号 国家体育馆152室</font>
                        <br>
                        <font class="tit" >Tel :</font> <font class="des">010-84372886</font>
                        <br>
                        <font class="tit" >传真 :</font> <font class="des">123-123-412</font>
                        <br>
                        <font class="tit" >email :</font> <font class="des">av99@163.com</font>
                    </div>-->
                </div>
            </div>
        </div>
    </div>
<?php else : ?>

    <div class="mainbox mtop80 mtop20">
        <div class="txt detail">
            <div class="contact-map">    
                <div class="row-fluid">
                <ul class="thumbnails">
                  <li class="span4">
                    <div class="thumbnail">
                        <div class="map-detail" id="allmap" ></div>
                      <div class="caption">
                        <address>
                            <strong><h3>Avworld.</h3></strong><br>
                            <h5>
                                北京市朝阳区天辰东路9号 <br>
                                国家体育馆152室<br>
                            </h5>
                            <h6>
                                <abbr title="Phone">TEL:</abbr> 010-84372886<br>
                                <abbr title="Email">Email:</abbr> av99@163.com
                            </h6>
                        </address>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
<!--                <div class="left-div"  >
                    <div class="avworld">Avworld</div>
                    <hr>
                    <div class="descrip">
                        <font class="tit" >地址：</font> <font class="des">北京市朝阳区天辰东路9号 国家体育馆152室</font>
                        <br>
                        <font class="tit" >Tel :</font> <font class="des">010-84372886</font>
                        <br>
                        <font class="tit" >传真 :</font> <font class="des">123-123-412</font>
                        <br>
                        <font class="tit" >email :</font> <font class="des">av99@163.com</font>
                    </div>
                </div>-->
            </div>
        </div>
    </div>
    <div style="width: 100%; height: 30px"></div>
    <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=CsAgWFLoKxpVwf9RbQ3xq1Fu2vNDH7jp"></script>
    <script>
        var map = new BMap.Map("allmap");//请注意这段
        var lng = '116.396606';
        var lat = '40.002527';
        var point = new BMap.Point(lng, lat);
        map.centerAndZoom(point, 17);
//        map.zoomOut();
    //        map.zoomOut();
    //        map.zoomOut();
//        map.zoomOut();//缩放比例
        var marker = new BMap.Marker(point);  // 创建标注
        map.addOverlay(marker);               // 将标注添加到地图中 
        marker.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画 
        map.enableScrollWheelZoom(true); //设置鼠标放大
        var top_left_control = new BMap.ScaleControl({anchor: BMAP_ANCHOR_TOP_LEFT}); // 左上角，添加比例尺 
        var top_left_navigation = new BMap.NavigationControl();  //左上角，添加默认缩放平移控件 
        map.addControl(top_left_control);
        map.addControl(top_left_navigation);
    </script>
<?php endif; ?>
</body>  
</html>