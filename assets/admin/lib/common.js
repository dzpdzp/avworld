/**
 * 获取面板显示类
 *     面板打开时返回 'in'
 *     面板关闭时返回 ''
 * @param {type} id 元素ID
 * @returns {String} 
 */
function get_panel_display_class(id) {
    if ($("#" + id + ".in").length > 0) {
        return 'in';
    }
    else {
        return '';
    }
}

/**
 * 日期控件to内容对比
 * @param {type} obj 控件对象
 */
function to_judge(obj) {
    // 获取日期控件from中的内容
    var from_val = $(obj).val();
    // 获取日期控件to的id
    var to_id = $(obj).attr('id').replace('from', 'to');
    // 获取日期控件to中的内容
    var to_val = $('#' + to_id).val();
    // 生成日期对象from
    var from_date = new Date(from_val);
    // 生成日期对象to
    var to_date = new Date(to_val);
    // 如果日期控件to的内容不为空，且日期from大于日期to
    if (to_val !== '' && from_date > to_date) {
        // 将日期控件to中的内容替换成日期控件from中的内容
        $('#' + to_id).val(from_val);
    }
    
    // 日期控件to重新初始化所需参数
    var init_obj = {
        direction: [from_val, false],
        format: 'Y/m/d',
        days: ['日', '月', '火', '水', '木', '金', '土'],
        months: ['1月', '2月', '3月', '4月', '5月', '6月', '7月', '8月', '9月', '10月', '11月', '12月'],
        show_select_today: '今日',
        lang_clear_date: '削除',
        header_captions: {
            'days': 'Y年F',
            'months': 'Y年',
            'years': 'Y1年 - Y2年'
        }
    };
    // 重新初始化日期控件to
    $('#' + to_id).Zebra_DatePicker(init_obj);
}

function valid_ajax (data) {
    try {
        if (typeof data === "string" && data !== "") {
            data = eval("("+data+")");
        }
        if (data.csrf_error || data.usertype_error || data.common_error) {
            location.href = data.redirect_url;
            return false;
        }
    } catch (e) {
        
    }
    return true;
}

$(function(){
    // プロフィール 按钮点击事件
    $("#edit_login_user").click(function(){
        // 提交表单，编辑个人信息
        $("#login_user_form").submit();
    });
});
