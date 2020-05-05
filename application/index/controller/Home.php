<?php
// +----------------------------------------------------------------------
// | 海豚PHP框架 [ DolphinPHP ]
// +----------------------------------------------------------------------
// | 版权所有 2016~2019 广东卓锐软件有限公司 [ http://www.zrthink.com ]
// +----------------------------------------------------------------------
// | 官方网站: http://dolphinphp.com
// +----------------------------------------------------------------------

namespace app\index\controller;

use app\admin\model\Configuration as ConfigurationModel;
use app\admin\model\Navigation as NavigationModel;
use app\index\model\Message as MessageModel;
use app\common\controller\Common;
use think\Db;
use think\Request;

/**
 * 前台公共控制器
 * @package app\index\controller
 */
class Home extends Common
{
    public function __construct()
    {
        parent::__construct();
        //action class
        $path = request()->path();
        if($path == ''){
            $path = "index/index/index";
        }
        $nav_pf = NavigationModel::where('url_value', $path)->field(['id','pid'])->find();
        if($nav_pf['pid'] == 0){
            $nav_pid = $nav_pf['id'];
            $nav_f = NavigationModel::where('pid', $nav_pid)->field(['id'])->order('sort')->find();
            if(empty($nav_f)){
                $nav_id = 0;
            }else{
                $nav_id = $nav_f['id'];
            }
        }else{
            $nav_pid = $nav_pf['pid'];
            $nav_id = $nav_pf['id'];
        }
        $param = request()->param();
        $is_cat = array_key_exists('cat', $param);
        if($is_cat == true){
            $nav_id = $param['cat'];
        }
        //标题
        $nav = Db::table('dp_admin_navigation')->where(['id'=>$nav_id])->field(['title'])->find();
        //二级导航栏
        $nav_h = $this->nav_h($nav_pid);
        $this->assign(
            [
                'title'             => $nav['title'],
                'configuration'     => $this->configuration(),
                'nav_1'             => $this->nav_1(),
                'nav_2'             => $this->nav_2(),
                'nav_h'             => $nav_h,
                'nav_f'             => $this->nav_f(),
                'nav_pid'           => $nav_pid,
                'nav_id'            => $nav_id
            ]
        );
    }
    /**
     * 初始化方法
     */
    protected function initialize()
    {
        // 系统开关
        if (!config('web_site_status')) {
            $this->error('站点已经关闭，请稍后访问~');
        }
    }
    //查询基本配置数据
    public function configuration(){
        return ConfigurationModel::where('id', 1)->find();
    }
    //查询前台一级导航栏数据
    public function nav_1(){
        return NavigationModel::where(['pid'=>0,'status'=>1])
            ->order('sort')
            ->field(['id','title','url_value','params'])
            ->select();
    }
    //查询前台二级导航栏数据
    public function nav_2(){
        $data_list = $this->nav_1();
        foreach ($data_list as $key => $val){
            if ($val['url_value'] != "index/index/index"){
                $data[] = NavigationModel::where(['pid'=>$val['id'],'status'=>1])
                    ->order('sort')
                    ->field(['id','title','url_value','params'])
                    ->select();
            }
        }
        return $data;
    }
    public function nav_h($pid){
        return NavigationModel::where(['pid'=>$pid,'status'=>1])
            ->order('sort')
            ->field(['id','title','url_value','params'])
            ->select();
    }
    //底部导航栏
    public function nav_f(){
        return NavigationModel::where(['footer'=>1,'status'=>1])
            ->order('sort')
            ->field(['id','title','url_value','params'])
            ->select();
    }
    //新增申请处理
    public function insert_message(Request $request){
        if($request->isPost()) {
            $param = $request->post();
            $param['ip'] = $_SERVER["REMOTE_ADDR"];
            if(MessageModel::create($param)){
                return json(['code'=>1,'msg'=>'申请成功']);
            }else{
                return  json(['code'=>0,'msg'=>'申请失败']);
            }
        }
    }
}
