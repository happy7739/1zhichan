<?php
// +----------------------------------------------------------------------
// | 海豚PHP框架 [ DolphinPHP ]
// +----------------------------------------------------------------------
// | 版权所有 2016~2019 广东卓锐软件有限公司 [ http://www.zrthink.com ]
// +----------------------------------------------------------------------
// | 官方网站: http://dolphinphp.com
// +----------------------------------------------------------------------

namespace app\index\controller;

use think\Db;

/**
 * 前台关于我们控制器
 * @package app\index\controller
 */
class Aboutus extends Home
{
    public function index($cat)
    {
//        $test = get_file_path(15);
        //dump($cat);
        $nav = Db::table('dp_admin_navigation')->where(['id'=>$cat])->field(['title'])->find();
        $data = Db::table('dp_home_aboutus')->where(['pid'=>$cat,'status'=>1])->order('sort')->field(['img','alt','title'])->select();
        return view('',[
            'title'    => $nav['title'],
            'data'     => $data,
        ]);
    }
}
