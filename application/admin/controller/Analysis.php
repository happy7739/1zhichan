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
use app\admin\model\Analysis as AnalysisModel;

/**
 * 项目中心/自助投资分析控制器
 * @package app\admin\controller
 */
class Analysis extends Admin
{
    /**
     * 公共配置
     * @return string
     */
    public function index()
    {
        // 保存数据
        if ($this->request->isPost()) {
            $data = $this->request->post();

            $data['budget'] == '' && $this->error('投资预算不能为空');
            $data['area'] == '' && $this->error('门店面积不能为空');
            $data['position'] == '' && $this->error('门店位置不能为空');
            $data['style'] == '' && $this->error('店面风格不能为空');
            $data['id'] = 1;

            $AnalysisModel = new AnalysisModel();
            if ($Configuration = $AnalysisModel->allowField(['budget', 'area', 'position', 'style'])->update($data)) {
                // 记录行为
                action_log('analysis_edit', 'admin_analysis', UID, UID, get_nickname(UID));
                $this->success('编辑成功');
            } else {
                $this->error('编辑失败');
            }
        }

        // 获取数据
        $info = AnalysisModel::where('id', 1)->find();

        // 使用ZBuilder快速创建表单
        return ZBuilder::make('form')
            ->addFormItems([ // 批量添加表单项
                ['text', 'budget', '投资预算', '多个选项之间用、隔开'],
                ['text', 'area', '门店面积', '多个选项之间用、隔开'],
                ['text', 'position', '门店位置', '多个选项之间用、隔开'],
                ['text', 'style', '店面风格', '多个选项之间用、隔开'],
            ])
            ->setFormData($info) // 设置表单数据
            ->fetch();
    }

}