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
 * 前台品牌动态控制器
 * @package app\index\controller
 */
class News extends Home
{
    public function index($cat)
    {
        $nav = Db::table('dp_admin_navigation')->where(['id'=>$cat])->field(['title'])->find();
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
            'query'    => ['cat'=>$cat],
        );
        $data = Db::table('dp_home_news')->where(['status'=>1,'pid'=>$cat])->order('sort')->paginate(3,false,$config);
        $render = $data->render();

        return view('',[
            'title'    => $nav['title'],
            'cat'      => $cat,
            'page'     => $page,
            'data'     => $data,
            'render'   => $render,
        ]);
    }
    //渲染文章详情
    public function details($id,$cat){
        //上一页数据
        $up = Db::table('dp_home_news')
            ->where([
                ['id','<',$id],
                ['pid','=',$cat],
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
                ['pid','=',$cat],
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
        $data = Db::table('dp_home_news')->where(['id'=>$id])->find();
        return view('',[
            'title'    => '品牌动态',
            'cat'      => $cat,
            'page'     => $page,
            'data'     => $data,
            'up'       => $up,
            'lo'       => $lo,
        ]);
    }
}
