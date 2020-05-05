<?php
// +----------------------------------------------------------------------
// | 海豚PHP框架 [ DolphinPHP ]
// +----------------------------------------------------------------------
// | 版权所有 2016~2019 广东卓锐软件有限公司 [ http://www.zrthink.com ]
// +----------------------------------------------------------------------
// | 官方网站: http://dolphinphp.com
// +----------------------------------------------------------------------

namespace app\admin\validate;

use think\Validate;

/**
 * banner背景图验证器
 * @package app\admin\validate
 */
class BannerBg extends Validate
{
    //定义验证规则
    protected $rule = [
        'img|图片'        => 'require',
    ];

    //定义验证提示
    protected $message = [
        'img.require'  => '请上传图片',
    ];
}
