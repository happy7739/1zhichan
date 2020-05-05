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
 * 前台美食中心控制器
 * @package app\index\controller
 */
class Food extends Home
{
    public function index($cat)
    {
//        $test = get_file_path(15);
        //dump($cat);
        $nav = Db::table('dp_admin_navigation')->where(['id'=>$cat])->field(['title'])->find();
        $data1 = Db::table('dp_home_foods')->where(['pid'=>$cat,'status'=>1,'pag'=>1])->order('sort')->field(['img','alt','title'])->select();
        $data2 = Db::table('dp_home_foods')->where(['pid'=>$cat,'status'=>1,'pag'=>2])->order('sort')->field(['img','alt','title'])->select();
        $data3 = Db::table('dp_home_foods')->where(['pid'=>$cat,'status'=>1,'pag'=>3])->order('sort')->field(['img','alt','title'])->select();
        $data4 = Db::table('dp_home_foods')->where(['pid'=>$cat,'status'=>1,'pag'=>4])->order('sort')->field(['img','alt','title'])->select();
        return view('',[
            'title'     => $nav['title'],
            'data1'     => $data1,
            'data2'     => $data2,
            'data3'     => $data3,
            'data4'     => $data4,
        ]);
    }
}
