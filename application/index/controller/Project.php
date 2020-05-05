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
use app\index\model\AnalysisMessage as MessageModel;

/**
 * 前台项目中心控制器
 * @package app\index\controller
 */
class Project extends Home
{
    public function index()
    {
        $data = Db::table('dp_home_media')->where(['id'=>1])->find();
        $data1 = Db::table('dp_home_media_img')->where(['status'=>1,'pag'=>0])->order('sort')->field(['img','alt','title'])->select();
        $data2 = Db::table('dp_home_media_img')->where(['status'=>1,'pag'=>1])->order('sort')->field(['img','alt','title'])->select();

        return view('',[
            'title'    => '项目中心',
            'data'     => $data,
            'data1'    => $data1,
            'data2'    => $data2,
        ]);
    }
    public function project($cat)
    {
        $nav = Db::table('dp_admin_navigation')->where(['id'=>$cat])->field(['title'])->find();
        $data = Db::table('dp_home_project')->where(['pid'=>$cat,'status'=>1])->order('sort')->field(['img','alt','title'])->select();
        return view('',[
            'title'    =>$nav['title'],
            'data'     => $data,
        ]);
    }
    public function agent(){
        $data = Db::table('dp_home_agent')->select();
        $data1 = Db::table('dp_home_agent_img')->where(['status'=>1,'pag'=>0])->order('sort')->field(['img','alt','title'])->select();
        $data2 = Db::table('dp_home_agent_img')->where(['status'=>1,'pag'=>1])->order('sort')->field(['img','alt','title'])->select();

        return view('',[
            'title'    => '代理专区',
            'bg_id'    => 192,
            'data'     => $data,
            'data1'    => $data1,
            'data2'    => $data2,
        ]);
    }
    public function cases(){
        //第几页
        $param = request()->param();
        $is_page = array_key_exists('page', $param);
        if($is_page == true){
            $page = $param['page'];
        }else{
            $page = 1;
        }
        $config = array(
            'page'     => $page,
        );
        $data = Db::table('dp_home_cases')->where(['status'=>1])->order('sort')->paginate(6,false,$config);
        $render = $data->render();

        return view('',[
            'title'    => '成功案例',
            'page'     => $page,
            'data'     => $data,
            'render'   => $render,
        ]);
    }
    //渲染文章详情
    public function details($id){
        //上一页数据
        $up = Db::table('dp_home_cases')
            ->where([
                ['id','<',$id],
            ])
            ->order('sort')
            ->field(['id','title'])
            ->find();
        if(empty($up)){
            $up = array(
                'id'    => $id,
                'title' => '没有上一篇了'
            );
        }
        //下一页数据
        $lo = Db::table('dp_home_news')
            ->where([
                ['id','>',$id],
            ])
            ->order('sort')
            ->field(['id','title'])
            ->find();
        if(empty($lo)){
            $lo = array(
                'id'    => $id,
                'title' => '没有下一篇了'
            );
        }
        //第几页
        $param = request()->param();
        $is_page = array_key_exists('page', $param);
        if($is_page == true){
            $page = $param['page'];
        }else{
            $page = 1;
        }
        $data = Db::table('dp_home_cases')->where(['id'=>$id])->find();
        return view('',[
            'title'    => '成功案例',
            'page'     => $page,
            'data'     => $data,
            'up'       => $up,
            'lo'       => $lo,
        ]);
    }
    //自助分析
    public function analysis(){
        $data = Db::table('dp_home_analysis')->find();
//        $budget = explode("、",$data['budget']);
//        $area = explode("、",$data['area']);
//        $position = explode("、",$data['position']);
//        $style = explode("、",$data['style']);
//        dump($budget);
        return view('',[
            'title'    => '自助投资分析',
            'budget'   => explode("、",$data['budget']),
            'area'     => explode("、",$data['area']),
            'position' => explode("、",$data['position']),
            'style'    => explode("、",$data['style']),
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
