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
 * 前台首页控制器
 * @package app\index\controller
 */
class Index extends Home
{
    public function index()
    {
//        $test = get_file_path(15);
        //dump($this->nav_2());
        // 默认跳转模块
        if (config('home_default_module') != '' && config('home_default_module') != 'index') {
            $this->redirect(config('home_default_module'). '/index/index');
        }
        $banner_bg = Db::table('dp_home_banner_bg')->where(['status'=>1])->order('sort')->field(['id','img'])->select();
        $banner = Db::table('dp_home_banner')->where(['status'=>1])->order('sort')->limit(4)->select();
        $album = Db::table('dp_home_album')->where(['status'=>1])->order('sort')->select();
        $food = Db::table('dp_home_food')->where(['status'=>1])->order('sort')->limit(5)->select();
        $news = Db::table('dp_home_news')->where(['status'=>1,'is_tui'=>1])->limit(5)->select();
        $store = Db::table('dp_home_store')->where(['status'=>1])->limit(4)->select();
        $roll = Db::table('dp_home_roll')->where(['status'=>1])->order('sort')->select();
        return view('',[
            'title'         => '一纸馋官网,烤肉加盟,韩国烤肉加盟,纸上烤肉加盟,自助烤肉加盟',
            'banner_bg'     => $banner_bg,
            "banner"        => $banner,
            'album'         =>$album,
            "food"          => $food,
            'news'          => $news,
            'store'          => $store,
            'roll'          => $roll,
        ]);
    }
}
