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
 * 前台店铺风采控制器
 * @package app\index\controller
 */
class Store extends Home
{
    public function index()
    {
//        $test = get_file_path(15);
        //dump($cat);
        $data = Db::table('dp_home_stores')->where(['status'=>1])->order('sort')->field(['img','alt','title'])->paginate(6);
        $page = $data->render();
        //dump($page);
        return view('',[
            'title'    => '店铺风采',
            'data'     => $data,
            'page'     => $page,
        ]);
    }
}
