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
 * banner图验证器
 * @package app\admin\validate
 */
class Banner extends Validate
{
    //定义验证规则
    protected $rule = [
        'url|链接'        => 'require',
        'img1|图片'        => 'require',
        'img2|图片'        => 'require',
    ];

    //定义验证提示
    protected $message = [
        'url.require'  => '请填写链接',
        'img1.require'  => '请上传图片',
        'img2.require'  => '请上传图片',
    ];
}
