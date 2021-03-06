<?php
// +----------------------------------------------------------------------
// | 海豚PHP框架 [ DolphinPHP ]
// +----------------------------------------------------------------------
// | 版权所有 2016~2017 河源市卓锐科技有限公司 [ http://www.zrthink.com ]
// +----------------------------------------------------------------------
// | 官方网站: http://dolphinphp.com
// +----------------------------------------------------------------------
// | 开源协议 ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------

namespace app\admin\validate;

use think\Validate;

/**
 * 项目中心/成功案例验证器
 * @package app\cms\validate
 */
class Cases extends Validate
{
    // 定义验证规则
    protected $rule = [
        'title|页面标题'   => 'require',
        'img|封面图'       => 'require',
        'text|文章内容'        => 'require',
    ];

    //定义验证提示
    protected $message = [
        'title.require'  => '请填写页面标题',
        'img.require'    => '请上传图片',
        'text.require'   => '请填写文章内容',
    ];

    // 定义验证场景
    protected $scene = [
        'title' => ['title']
    ];
}
