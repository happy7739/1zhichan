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
 * 项目中心/代理专区/table验证器
 * @package app\admin\validate
 * @author 蔡伟明 <314013107@qq.com>
 */
class Agent extends Validate
{
    //定义验证规则
    protected $rule = [
        'img|文本'    => 'require',
        'title|文本'  => 'require',
        'alt|文本'    => 'require',
        'status|文本' => 'require',
        'sort|文本'   => 'require',
    ];

    //定义验证提示
    protected $message = [
        'img.require'       => '请填写文本',
        'title.require'     => '请填写文本',
        'alt.require'       => '请填写文本',
        'status.require'    => '请填写文本',
        'sort.require'      => '请填写文本',
    ];

    // 定义场景，供快捷编辑时验证
    protected $scene = [
        'img'       => ['img'],
        'title'     => ['title'],
        'alt'       => ['alt'],
        'status'    => ['status'],
        'sort'      => ['sort'],
    ];
}
