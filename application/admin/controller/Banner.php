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
use app\admin\model\Banner as BannerModel;
use app\admin\model\Attachment as AttachmentModel;

/**
 * 首页banner图控制器
 * @package app\admin\controller
 */
class Banner extends Admin
{
    /**
     * banner图列表页
     * @return mixed
     * @throws \think\Exception
     * @throws \think\exception\DbException
     */
    public function index()
    {
        // 数据列表
        $data_list = BannerModel::order('sort')->paginate();
        foreach ($data_list as $key => &$value) {
            $img1 = AttachmentModel::where(['id'=>$value['img1']])->field('path')->find();
            $value['type1'] = '<div class="js-gallery"><img class="image" title="点击查看大图" data-original="'. PUBLIC_PATH . $img1['path'].'" src="'. PUBLIC_PATH . $img1['path'].'"></div>';
            $img2 = AttachmentModel::where(['id'=>$value['img2']])->field('path')->find();
            $value['type2'] = '<div class="js-gallery"><img class="image" title="点击查看大图" data-original="'. PUBLIC_PATH . $img2['path'].'" src="'. PUBLIC_PATH . $img2['path'].'"></div>';
        }

        // 使用ZBuilder快速创建数据表格
        return ZBuilder::make('table')
            ->setTableName('home_banner')
            ->addColumns([ // 批量添加数据列
                ['id', 'ID'],
                ['desc', '描述'],
                ['type1', '图片1'],
                ['type2', '图片2'],
                ['create_time', '上传时间', 'datetime'],
                ['status', '状态', 'switch'],
                ['right_button', '操作', 'btn']
            ])
            ->addTopButtons('add,enable,disable,delete') // 批量添加顶部按钮
            ->addRightButtons('edit,delete') // 批量添加右侧按钮
            ->setRowList($data_list) // 设置表格数据
            ->fetch(); // 渲染模板
    }

    /**
     * 新增
     * @return mixed
     */
    public function add()
    {
        // 保存数据
        if ($this->request->isPost()) {
            $data = $this->request->post();

            // 验证
            $result = $this->validate($data, 'Banner');
            // 验证失败 输出错误信息
            if(true !== $result) $this->error($result);

            // 添加数据
            if ($role = BannerModel::create($data)) {
                // 记录行为
                action_log('Banner_add', 'admin_Banner', $role['id'], UID, "添加图片");
                $this->success('新增成功', url('index'));
            } else {
                $this->error('新增失败');
            }
        }

        // 使用ZBuilder快速创建表单
        return ZBuilder::make('form')
            ->setPageTitle('新增') // 设置页面标题
            ->addFormItems([ // 批量添加表单项
                ['text', 'url', '链接', "请填写<code>模块/控制器/操作</code>，如：<code>admin/menu/add</code>。"],
                ['text', 'params', '参数', '如：a=1&b=2'],
                ['text', 'desc', '描述'],
                ['image', 'img1', '图片1'],
                ['text', 'alt1', '图片1替代文本'],
                ['text', 'title1', '图片1描述'],
                ['image', 'img2', '图片2'],
                ['text', 'alt2', '图片2替代文本'],
                ['text', 'title2', '图片2描述'],
                ['text', 'sort', '排序', '', 100],
                ['radio', 'status', '状态', '', ['禁用', '启用'], 1]
            ])
            ->fetch();
    }

    /**
     * 编辑
     * @param null $id
     * @return mixed
     */
    public function edit($id = null)
    {
        if ($id === null) $this->error('缺少参数');

        // 保存数据
        if ($this->request->isPost()) {
            $data = $this->request->post();

            // 验证
            $result = $this->validate($data, 'Banner');
            // 验证失败 输出错误信息
            if(true !== $result) $this->error($result);

            if (BannerModel::update($data)) {
                // 记录行为
                action_log('Banner_edit', 'admin_Banner', $id, UID, "编辑图片");
                $this->success('编辑成功', url('index'));
            } else {
                $this->error('编辑失败');
            }
        }

        // 获取数据
        $info = BannerModel::where('id', $id)->find();

        // 使用ZBuilder快速创建表单
        return ZBuilder::make('form')
            ->setPageTitle('编辑') // 设置页面标题
            ->addFormItems([ // 批量添加表单项
                ['hidden', 'id'],
                ['text', 'url', '链接', "请填写<code>模块/控制器/操作</code>，如：<code>admin/menu/add</code>。"],
                ['text', 'params', '参数', '如：a=1&b=2'],
                ['text', 'desc', '描述'],
                ['image', 'img1', '图片1'],
                ['text', 'alt1', '图片1替代文本'],
                ['text', 'title1', '图片1描述'],
                ['image', 'img2', '图片2'],
                ['text', 'alt2', '图片2替代文本'],
                ['text', 'title2', '图片2描述'],
                ['radio', 'status', '状态', '', ['禁用', '启用']]
            ])
            ->setFormData($info) // 设置表单数据
            ->fetch();
    }

    /**
     * 删除
     * @param array $record 行为日志
     * @throws \think\Exception
     * @throws \think\exception\PDOException
     */
    public function delete($record = [])
    {
        return $this->setStatus('delete');
    }

    /**
     * 启用
     * @param array $record 行为日志
     * @throws \think\Exception
     * @throws \think\exception\PDOException
     */
    public function enable($record = [])
    {
        return $this->setStatus('enable');
    }

    /**
     * 禁用
     * @param array $record 行为日志
     * @throws \think\Exception
     * @throws \think\exception\PDOException
     */
    public function disable($record = [])
    {
        return $this->setStatus('disable');
    }

    /**
     * 设置状态：删除、禁用、启用
     * @param string $type 类型：delete/enable/disable
     * @param array $record
     * @throws \think\Exception
     * @throws \think\exception\PDOException
     */
    public function setStatus($type = '', $record = [])
    {
        $ids = $this->request->isPost() ? input('post.ids/a') : input('param.ids');
        $ids = (array)$ids;

        foreach ($ids as $id) {
            switch ($type) {
                case 'enable':
                    if (false === BannerModel::where('id', $id)->setField('status', 1)) {
                        $this->error('启用失败，ID：'.$id);
                    }
                    break;
                case 'disable':
                    if (false === BannerModel::where('id', $id)->setField('status', 0)) {
                        $this->error('禁用失败，ID：'.$id);
                    }
                    break;
                case 'delete':
                    if (false === BannerModel::where('id', $id)->delete()) {
                        $this->error('删除失败，ID：'.$id);
                    }
                    break;
                default:
                    $this->error('非法操作');
            }

            action_log('Banner_'.$type, 'admin_Banner', $id, UID);
        }

        $this->success('操作成功');
    }
}
