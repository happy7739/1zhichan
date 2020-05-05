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
use app\admin\model\Store as StoreModel;
use app\admin\model\Attachment as AttachmentModel;

/**
 * 店铺实拍控制器
 * @package app\admin\controller
 */
class Store extends Admin
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
        $data_list = StoreModel::where($map)->order($order)->paginate();
        foreach ($data_list as $key => &$value) {
            $img = AttachmentModel::where(['id'=>$value['img']])->field('path')->find();
            $value['type'] = '<div class="js-gallery"><img class="image" title="点击查看大图" data-original="'. PUBLIC_PATH . $img['path'].'" src="'. PUBLIC_PATH . $img['path'].'"></div>';
        }

        // 使用ZBuilder快速创建数据表格
        return ZBuilder::make('table')
            ->setTableName('home_store')
            ->setSearch(['title' => '标题']) // 设置搜索框
            ->addColumns([ // 批量添加数据列
                ['id', 'ID'],
                ['type', '封面图'],
                ['title', '标题', 'text.edit'],
                ['create_time', '创建时间', 'datetime'],
                ['sort', '排序', 'text.edit'],
                ['status', '状态', 'switch'],
                ['right_button', '操作', 'btn']
            ])
            ->addTopButtons('add,enable,disable,delete') // 批量添加顶部按钮
            ->addRightButtons(['edit', 'delete' => ['data-tips' => '删除后无法恢复。']]) // 批量添加右侧按钮
            ->addOrder('id,title,create_time')
            ->setRowList($data_list) // 设置表格数据
            ->addValidate('Page', 'title')
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
            $result = $this->validate($data, 'News');
            if(true !== $result) $this->error($result);

            if ($page = StoreModel::create($data)) {
                // 记录行为
                action_log('news_add', 'admin_news', $page['id'], UID, "添加新闻");
                $this->success('新增成功', 'index');
            } else {
                $this->error('新增失败');
            }
        }

        // 显示添加页面
        return ZBuilder::make('form')
            ->addFormItems([
                ['image', 'img', '图片'],
                ['text', 'alt', '替代文本'],
                ['text', 'title', '标题'],
                ['text', 'desc', '简介'],
                ['text', 'url', '跳转链接'],
                ['number', 'sort', '排序','',0],
                ['radio', 'status', '立即启用', '', ['否', '是'], 1],
            ])
            ->fetch();
    }

    /**
     * 编辑
     * @param null $id 单页id
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
            $result = $this->validate($data, 'News');
            if(true !== $result) $this->error($result);

            if (StoreModel::update($data)) {
                // 记录行为
                action_log('store_edit', 'admin_store', $id, UID, "编辑新闻");
                $this->success('编辑成功', 'index');
            } else {
                $this->error('编辑失败');
            }
        }

        $info = StoreModel::get($id);

        // 显示编辑页面
        return ZBuilder::make('form')
            ->addFormItems([
                ['hidden', 'id'],
                ['image', 'img', '图片'],
                ['text', 'alt', '替代文本'],
                ['text', 'title', '标题'],
                ['text', 'desc', '简介'],
                ['text', 'url', '跳转链接'],
                ['radio', 'status', '立即启用', '', ['否', '是']],
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
        $page_title = StoreModel::where('id', 'in', $ids)->column('title');
        return parent::setStatus($type, ['page_'.$type, 'admin_store', 0, UID, implode('、', $page_title)]);
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
        $page    = StoreModel::where('id', $id)->value($field);
        $details = '字段(' . $field . ')，原值(' . $page . ')，新值：(' . $value . ')';
        return parent::quickEdit(['store_edit', 'admin_store', $id, UID, $details]);
    }
}
