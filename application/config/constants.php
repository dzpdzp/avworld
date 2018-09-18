<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| Display Debug backtrace
|--------------------------------------------------------------------------
|
| If set to TRUE, a backtrace will be displayed along with php errors. If
| error_reporting is disabled, the backtrace will not display, regardless
| of this setting
|
*/
defined('SHOW_DEBUG_BACKTRACE') OR define('SHOW_DEBUG_BACKTRACE', TRUE);

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
defined('FILE_READ_MODE')  OR define('FILE_READ_MODE', 0644);
defined('FILE_WRITE_MODE') OR define('FILE_WRITE_MODE', 0666);
defined('DIR_READ_MODE')   OR define('DIR_READ_MODE', 0755);
defined('DIR_WRITE_MODE')  OR define('DIR_WRITE_MODE', 0755);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/
defined('FOPEN_READ')                           OR define('FOPEN_READ', 'rb');
defined('FOPEN_READ_WRITE')                     OR define('FOPEN_READ_WRITE', 'r+b');
defined('FOPEN_WRITE_CREATE_DESTRUCTIVE')       OR define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 'wb'); // truncates existing file data, use with care
defined('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE')  OR define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 'w+b'); // truncates existing file data, use with care
defined('FOPEN_WRITE_CREATE')                   OR define('FOPEN_WRITE_CREATE', 'ab');
defined('FOPEN_READ_WRITE_CREATE')              OR define('FOPEN_READ_WRITE_CREATE', 'a+b');
defined('FOPEN_WRITE_CREATE_STRICT')            OR define('FOPEN_WRITE_CREATE_STRICT', 'xb');
defined('FOPEN_READ_WRITE_CREATE_STRICT')       OR define('FOPEN_READ_WRITE_CREATE_STRICT', 'x+b');

/*
|--------------------------------------------------------------------------
| Exit Status Codes
|--------------------------------------------------------------------------
|
| Used to indicate the conditions under which the script is exit()ing.
| While there is no universal standard for error codes, there are some
| broad conventions.  Three such conventions are mentioned below, for
| those who wish to make use of them.  The CodeIgniter defaults were
| chosen for the least overlap with these conventions, while still
| leaving room for others to be defined in future versions and user
| applications.
|
| The three main conventions used for determining exit status codes
| are as follows:
|
|    Standard C/C++ Library (stdlibc):
|       http://www.gnu.org/software/libc/manual/html_node/Exit-Status.html
|       (This link also contains other GNU-specific conventions)
|    BSD sysexits.h:
|       http://www.gsp.com/cgi-bin/man.cgi?section=3&topic=sysexits
|    Bash scripting:
|       http://tldp.org/LDP/abs/html/exitcodes.html
|
*/
defined('EXIT_SUCCESS')        OR define('EXIT_SUCCESS', 0); // no errors
defined('EXIT_ERROR')          OR define('EXIT_ERROR', 1); // generic error
defined('EXIT_CONFIG')         OR define('EXIT_CONFIG', 3); // configuration error
defined('EXIT_UNKNOWN_FILE')   OR define('EXIT_UNKNOWN_FILE', 4); // file not found
defined('EXIT_UNKNOWN_CLASS')  OR define('EXIT_UNKNOWN_CLASS', 5); // unknown class
defined('EXIT_UNKNOWN_METHOD') OR define('EXIT_UNKNOWN_METHOD', 6); // unknown class member
defined('EXIT_USER_INPUT')     OR define('EXIT_USER_INPUT', 7); // invalid user input
defined('EXIT_DATABASE')       OR define('EXIT_DATABASE', 8); // database error
defined('EXIT__AUTO_MIN')      OR define('EXIT__AUTO_MIN', 9); // lowest automatically-assigned error code
defined('EXIT__AUTO_MAX')      OR define('EXIT__AUTO_MAX', 125); // highest automatically-assigned error code

// 前台资源URL
define('BASE_URL','http://avworld.com/');
// 前台资源URL
define('USER_RESOURCE_PATH', BASE_URL . 'assets');
// 新闻动态
define('USER_RESOURCE_NEWS', BASE_URL . 'resource/news/');
// 服务领域
define('USER_RESOURCE_SERVICE', BASE_URL . 'resource/service/');
// 我们的团队
define('USER_RESOURCE_OURSTEAM', BASE_URL . 'resource/oursteam/');


// 管理端资源URL
define('ADMIN_RESOURCE_PATH', BASE_URL . 'assets/admin');
// 默认使用的格式化方式

/*****数字格式化*****/
// 四舍五入
define('NUMBER_FORMAT_ROUND', 1);
// 进一法取整
define('NUMBER_FORMAT_CEIL', 2);
// 舍去法取整
define('NUMBER_FORMAT_FLOOR', 3);
// 默认使用的格式化方式
define('NUMBER_FORMAT_FLAG', NUMBER_FORMAT_FLOOR);
// 默认使用的计算方法
switch (NUMBER_FORMAT_FLAG) {
    case NUMBER_FORMAT_ROUND:
        define('NUMBER_FORMAT_FUNC', 'round');
        break;
    case NUMBER_FORMAT_CEIL:
        define('NUMBER_FORMAT_FUNC', 'ceil');
        break;
    case NUMBER_FORMAT_FLOOR:
        define('NUMBER_FORMAT_FUNC', 'floor');
        break;
}


// 商品画像访问URL
define('PRODUCT_IMAGE_URL', BASE_URL . 'datafile/user/');
// 商品画像ファイルのMAXサイズ  単位：MB
define('PRODUCT_IMAGE_FILE_MAX_SIZE', 10);
define('PRODUCT_IMAGE_FILE_MAX_NUM_PER', 5);
// 商品毎の画像ファイルの許可されているファイルの種類
define('PRODUCT_IMAGE_FILE_ALLOWED_TYPE', '.JPG|.JPEG|.GIF|.PNG');
// CARTファイルの許可されているファイルの種類
define('CART_FILE_ALLOWED_TYPE', '.TXT|.JPG|.JPEG|.GIF|.PNG|.ZIP|.DOC|.DOCX|.XLS|.XLSX|.XLSM|.PDF|.PPT|.PPTX');
// 材質ｕｐの許可されているファイルの種類
define('MATERIAL_FILE_ALLOWED_TYPE', '.TXT|.JPG|.JPEG|.GIF|.PNG|.ZIP|.DOC|.DOCX|.XLS|.XLSX|.XLSM|.PDF');
// ﾙｼｰﾄファイルの許可されているファイルの種類
define('MILLSHEET_FILE_ALLOWED_TYPE', '.TXT|.JPG|.JPEG|.GIF|.PNG|.ZIP|.DOC|.DOCX|.XLS|.XLSX|.XLSM|.PPT|.PPTX|.PDF');
// ﾙｼｰﾄファイルの許可されているファイルの種類
define('ORTHER_DESCRIPTION_FILE_ALLOWED_TYPE', '.JPG|.JPEG|.GIF|.PNG|.ZIP|.DOC|.DOCX|.XLS|.XLSX|.XLSM|.PPT|.PPTX|.PDF');
// 临时文件目录
define('TEMPORARY_DIR', PROJPATH . 'datafile/temp/');
// 商品登録履歴
define('FILE_BELONG_NONE', 0);
// 商品画像ファイル
define('FILE_BELONG_PRODUCT_IMAGE', 1);
// お知らせファイル
define('FILE_BELONG_MESSAGE', 2);
// 材質ファイル
define('FILE_BELONG_MATERIAL', 3);
// ﾙｼｰﾄファイル
define('FILE_BELONG_MILLSHEET', 4);
// お問い合わせファイル
define('FILE_BELONG_ORDER_MESSAGE', 5);
// その他説明ファイル
define('FILE_BELONG_ORTHER_DESCRIPTION', 6);
// 商品画像ｕｐサーバーROOT DIR
define('PRODUCT_IMAGE_FILE_UPLOAD_DIR', PROJPATH . 'datafile/user/');
// 商品画像缩略图 宽
define('PRODUCT_IMG_THUMB_WIDTH', 330);
// 商品画像缩略图 高
define('PRODUCT_IMG_THUMB_HEIGHT', 470);