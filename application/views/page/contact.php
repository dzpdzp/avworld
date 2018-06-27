

<div class="banner banner-contact">
    <div class="banner-contact-txt"></div>
</div>
<div class="mainbox mtop80 mtop20">
    <div class="txt detail">
            <div class="contact-map">
                <div class="map-detail" id="allmap" style="margin-left: 200px;min-height: 245px;"></div>
                <div class="" style="float: right;width: 200px;min-height: 245px;">暗暗暗暗暗暗啊</div>
            </div>
    </div>
</div>
<div style="width: 100%; height: 30px"></div>

        <div id="allmap"></div>
        <script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=CsAgWFLoKxpVwf9RbQ3xq1Fu2vNDH7jp"></script>
        <script>
            var map = new BMap.Map("allmap");//请注意这段
            var lng='116.396606';
            var lat='40.002527';
            var point = new BMap.Point(lng, lat);
            map.centerAndZoom(point, 17);
            map.zoomOut(); map.zoomOut(); map.zoomOut(); map.zoomOut();//缩放比例
            var marker = new BMap.Marker(point);  // 创建标注
            map.addOverlay(marker);               // 将标注添加到地图中 
            marker.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画 
            map.enableScrollWheelZoom(true); //设置鼠标放大
            var top_left_control = new BMap.ScaleControl({ anchor: BMAP_ANCHOR_TOP_LEFT }); // 左上角，添加比例尺 
            var top_left_navigation = new BMap.NavigationControl();  //左上角，添加默认缩放平移控件 
            map.addControl(top_left_control);
            map.addControl(top_left_navigation);
        </script>
    </body>  
</html>