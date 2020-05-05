<?php
// +----------------------------------------------------------------------
// | 海豚PHP框架 [ DolphinPHP ]
// +----------------------------------------------------------------------
// | 版权所有 2016~2019 广东卓锐软件有限公司 [ http://www.zrthink.com ]
// +----------------------------------------------------------------------
// | 官方网站: http://dolphinphp.com
// +----------------------------------------------------------------------

namespace app\admin\controller;

use app\common\builder\ZBuilder;
use app\admin\model\Foods as FoodsModel;
use app\admin\model\Attachment as AttachmentModel;
use think\Db;

/**
 * 美食中心轮播图控制器
 * @package app\admin\controller
 */
class Foodc extends Admin
{
    /**
     * 单页列表
     * @return mixed
     * @throws \think\Exception
     * @throws \think\exception\DbException
     */
    public function index()
    {
        // 查询
        $map = $this->getMap();
        // 排序
        $order = $this->getOrder();
        // 数据列表
        $data_list = FoodsModel::where($map)->whereIn('pag','3')->order($order)->paginate();
        //所属分页
        foreach ($data_list as $key => &$val){
            $nav = Db::table("dp_admin_navigation")->where(['id'=>$val['pid']])->field(['title'])->find();
            $val['pid'] = $nav['title'];
            $img = AttachmentModel::where(['id'=>$val['img']])->field('path')->find();
            $val['type'] = '<div class="js-gallery"><img class="image" title="点击查看大图" data-original="'. PUBLIC_PATH . $img['path'].'" src="'. PUBLIC_PATH . $img['path'].'"></div>';
        }
        //分页数组
        $nav = Db::table("dp_admin_navigation")->where(['pid'=>9])->order('sort')->field(['id','title'])->select();
        foreach ($nav as $key => $val){
            $nav_data[$val['id']] = $val['title'];
        }

        // 使用ZBuilder快速创建数据表格
        return ZBuilder::make('table')
            ->setTableName('home_foods')
            ->setSearchArea([
                ['select', 'pid', '所属分页', '', '', $nav_data],
            ])
            ->setSearch(['title' => '标题']) // 设置搜索框
            ->addColumns([ // 批量添加数据列
                ['id', 'ID'],
                ['pid', '所属分页'],
                ['type', '图片'],
                ['sort', '排序', 'text.edit'],
                ['create_time', '创建时间', 'datetime'],
                ['status', '状态', 'switch'],
                ['right_button', '操作', 'btn']
            ])
            ->addTopButtons('add,enable,disable,delete') // 批量添加顶部按钮
            ->addRightButtons(['edit', 'delete' => ['data-tips' => '删除后无法恢复。']]) // 批量添加右侧按钮
            ->addOrder('id,pid,create_time')
            ->setRowList($data_list) // 设置表格数据
            ->addValidate('Table', 'sort')
            ->fetch(); // 渲染模板
    }

    /**
     * 新增
     * @return mixed
     * @throws \think\Exception
     */
    public function add()
    {
        // 保存数据
        if ($this->request->isPost()) {
            // 表单数据
            $data = $this->request->post();

            // 验证
            $result = $this->validate($data, 'Aboutus');
            if(true !== $result) $this->error($result);

            if ($page = FoodsModel::create($data)) {
                // 记录行为
                action_log('foodc_add', 'admin_foodc', $page['id'], UID, "添加");
                $this->success('新增成功', 'index');
            } else {
                $this->error('新增失败');
            }
        }

        //所属分页
        $list = Db::table("dp_admin_navigation")->where(['pid'=>9])->order('sort')->field(['id','title'])->select();
        foreach ($list as $key => $val){
            $list_data[$val['id']] = $val['title'];
        }
        // 显示添加页面
        return ZBuilder::make('form')
            ->addSelect('pid', '选择所属分页', '请选择所属分页', $list_data)
            ->addFormItems([
                ['hidden', 'pag',3],
                ['image', 'img', '图片'],
                ['text', 'alt', '替代文本'],
                ['text', 'title', '描述'],
                ['number', 'sort', '排序','',0],
                ['radio', 'status', '立即启用', '', ['否', '是'], 1]
            ])
            ->fetch();
    }

    /**
     * 编辑
     * @param null $id 单页id
     * @author 蔡伟明 <314013107@qq.com>
     * @return mixed
     * @throws \think\Exception
     */
    public function edit($id = null)
    {
        if ($id === null) $this->error('缺少参数');

        // 保存数据
        if ($this->request->isPost()) {
            // 表单数据
            $data = $this->request->post();

            // 验证
            $result = $this->validate($data, 'Aboutus');
            if(true !== $result) $this->error($result);

            if (FoodsModel::update($data)) {
                // 记录行为
                action_log('foodc_edit', 'admin_foodc', $id, UID, "编辑");
                $this->success('编辑成功', 'index');
            } else {
                $this->error('编辑失败');
            }
        }

        $info = FoodsModel::get($id);

        //所属分页
        $list = Db::table("dp_admin_navigation")->where(['pid'=>9])->order('sort')->field(['id','title'])->select();
        foreach ($list as $key => $val){
            $list_data[$val['id']] = $val['title'];
        }
        // 显示编辑页面
        return ZBuilder::make('form')
            ->addSelect('pid', '选择所属分页', '请选择所属分页', $list_data ,$info['pid'])
            ->addFormItems([
                ['hidden', 'id'],
                ['image', 'img', '图片'],
                ['text', 'alt', '替代文本'],
                ['text', 'title', '描述'],
                ['number', 'sort', '排序'],
                ['radio', 'status', '立即启用', '', ['否', '是']]
            ])
            ->setFormdata($info)
            ->fetch();
    }

    /**
     * 删除单页
     * @param array $record 行为日志
     * @throws \think\Exception
     * @throws \think\exception\PDOException
     */
    public function delete($record = [])
    {
        return $this->setStatus('delete');
    }

    /**
     * 启用单页
     * @param array $record 行为日志
     * @throws \think\Exception
     * @throws \think\exception\PDOException
     */
    public function enable($record = [])
    {
        return $this->setStatus('enable');
    }

    /**
     * 禁用单页
     * @param array $record 行为日志
     * @throws \think\Exception
     * @throws \think\exception\PDOException
     */
    public function disable($record = [])
    {
        return $this->setStatus('disable');
    }

    /**
     * 设置单页状态：删除、禁用、启用
     * @param string $type 类型：delete/enable/disable
     * @param array $record
     * @throws \think\Exception
     * @throws \think\exception\PDOException
     */
    public function setStatus($type = '', $record = [])
    {
        $ids        = $this->request->isPost() ? input('post.ids/a') : input('param.ids');
        $page_title = FoodsModel::where('id', 'in', $ids)->column('title');
        return parent::setStatus($type, ['page_'.$type, 'admin_foodc', 0, UID, implode('、', $page_title)]);
    }

    /**
     * 快速编辑
     * @param array $record 行为日志
     * @return mixed
     */
    public function quickEdit($record = [])
    {
        $id      = input('post.pk', '');
        $field   = input('post.name', '');
        $value   = input('post.value', '');
        $page    = FoodsModel::where('id', $id)->value($field);
        $details = '字段(' . $field . ')，原值(' . $page . ')，新值：(' . $value . ')';
        return parent::quickEdit(['foodc_edit', 'admin_foodc', $id, UID, $details]);
    }
}
