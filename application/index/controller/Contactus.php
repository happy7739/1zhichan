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
use think\Request;
use app\index\model\ContactusMessage as MessageModel;

/**
 * 前台联系我们控制器
 * @package app\index\controller
 */
class Contactus extends Home
{
    public function index()
    {
        $data = Db::table('dp_home_contactus')->where(['id'=>1])->find();
        $data1 = Db::table('dp_home_contactus_img')->where(['status'=>1,'pag'=>0])->field(['img','alt','title'])->select();
        $data2 = Db::table('dp_home_contactus_img')->where(['status'=>1,'pag'=>1])->field(['img','alt','title'])->select();
        return view('',[
            'title'    => '联系方式',
            'data'     => $data,
            'data1'    => $data1,
            'data2'    => $data2,
        ]);
    }
    public function message(){
        return view('',[
        ]);
    }
    //新增在线留言处理
    public function insert_message(Request $request){
        if($request->isPost()) {
            $param = $request->post();
            $param['ip'] = $_SERVER["REMOTE_ADDR"];
            if(MessageModel::create($param)){
                return json(['code'=>1,'msg'=>'提交成功']);
            }else{
                return  json(['code'=>0,'msg'=>'提交失败']);
            }
        }
    }
}
