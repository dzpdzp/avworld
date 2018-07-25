
    <!-- jQuery -->
    <script src="<?php echo ADMIN_RESOURCE_PATH?>/lib/jquery/jquery-2.1.4.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo ADMIN_RESOURCE_PATH?>/lib/bootstrap/js/bootstrap.js"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo ADMIN_RESOURCE_PATH?>/lib/metisMenu/metisMenu.min.js"></script>
    <!-- SB Admin 2 JavaScript -->
    <script src="<?php echo ADMIN_RESOURCE_PATH?>/lib/sbAdmin2/js/sb-admin-2.js"></script>
    <!-- Common JavaScript -->
    <script src="<?php echo ADMIN_RESOURCE_PATH?>/lib/common.js"></script>
    <script src="<?php echo ADMIN_RESOURCE_PATH?>/lib/js/.js"></script>
    <script>
        /**
         * 数字格式化
         * @param {type} number 传进来的数
         * @param {type} fix 保留的小数位,默认保留两位小数
         * @param {type} fh fh为整数位间隔符号,默认为空格
         * @param {type} jg jg为整数位每几位间隔,默认为3位一隔
         * @returns {String|zsw}
         */
        function number_format(number,fix,fh,jg) {
            var fix = typeof arguments[1] !== "undefined" ? arguments[1] : 2 ;
            var fh = arguments[2] ? arguments[2] : ',' ;
            var jg = arguments[3] ? arguments[3] : 3 ;
            switch (<?php echo NUMBER_FORMAT_FLAG?>) {
                // 2 进一法取整
                case <?php echo NUMBER_FORMAT_CEIL?>:
                    number = Math.ceil(parseFloat(number) * Math.pow(10, fix)) / Math.pow(10, fix);
                // 3 舍去法取整
                case <?php echo NUMBER_FORMAT_FLOOR?>:
                    number = Math.floor(parseFloat(number) * Math.pow(10, fix)) / Math.pow(10, fix);
                // 1 四舍五入
                case <?php echo NUMBER_FORMAT_ROUND?>:
                // 默认（四舍五入）
                default :
                    ;
            }
            var str = '' ;
            number = number.toFixed(fix);
            zsw = number.split('.')[0];//整数位
            xsw = typeof number.split('.')[1] === "undefined" ? "" : number.split('.')[1];//小数位
            zswarr = zsw.split('');//将整数位逐位放进数组
            for(var i=1;i<=zswarr.length;i++)
            {
                str = zswarr[zswarr.length-i] + str ;
                if(i%jg == 0)
                {
                  str = fh+str;//每隔jg位前面加指定符号
                }
            }
            str = (zsw.length%jg==0) ? str.substr(1) : str;//如果整数位长度是jg的的倍数,去掉最左边的fh
            zsw = str+(xsw !== "" ? '.'+xsw : "");//重新连接整数和小数位
            return zsw;
        }
        
        // js 换行
        function nl2br (str, is_xhtml) {
            var breakTag = (is_xhtml || typeof is_xhtml === 'undefined') ? '<br />' : '<br>';
            return (str + '').replace(/([^>\r\n]?)(\r\n|\n\r|\r|\n)/g, '$1'+ breakTag +'$2');
        }
        // 弹出帮助窗口
        function openHelp(url){
        	var leftIndex = $(document).width() - 632;
        	var winHeight = $(document).height()-120;
        	window.open('<?php echo base_url()?>'+url,'',' top=20, left=50, width='+(screen.width-100)+' ,height='+(screen.height-130)+',toolbar=no, status=no, menubar=no, resizable=yes, scrollbars=yes');
        	return false;
        }
        

        // LOGO Image Click
        $("#logo-img").click(function(){
            // 显示确认对话框
            $("#confirm_goto_top").modal("show");
        });
        // 确认按钮点击事件
        $("#confirm_goto_top_ok").click(function(){
        	//redirect to top page
            window.location.href ="<?php echo base_url('')?>";
        });

        $('#confirm_goto_top_cancel').click(function() {
            // Close确认对话框
            $("#confirm_goto_top").modal("hide");
        });

    </script>