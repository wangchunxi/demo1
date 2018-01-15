<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/9/009
 * Time: 20:01
 */

namespace app\admin\controller;


use app\common\controller\Backend;
use app\common\library\Banna\UpdateBanna;
use think\Db;

class Banna extends Backend
{
    /***@var Db $model**/
    protected $model = null;
    protected $UpdateBannaModel;
    public function _initialize()
    {
        parent::_initialize();
        $this->model = model('Banna');
    }
    public function index(){
        //设置过滤方法
        $this->request->filter(['strip_tags']);
        if ($this->request->isAjax())
        {
            list($where, $sort, $order, $offset, $limit) = $this->buildparams();
            $total = $this->model
                ->where($where)
                ->order($sort, $order)
                ->count();

            $list = $this->model
                ->where($where)
                ->alias('a')
                ->order($sort, $order)
                ->join('d_attachment b','a.attachmentId = b.id')
                ->limit($offset, $limit)
                ->field('a.*,b.url,b.storage,b.mimetype')
                ->select();
            $cdnurl = preg_replace("/\/(\w+)\.php$/i", '', $this->request->root());
            foreach ($list as $k => &$v)
            {
                $v['fullurl'] = ($v['storage'] == 'local' ? $cdnurl : $this->view->config['upload']['cdnurl']) . $v['url'];
            }
            unset($v);
            $result = array("total" => $total, "rows" => $list);

            return json($result);
        }
        return $this->view->fetch();
    }

    /**
     * 获取修改类
     * @return UpdateBanna
     */
    private function getUpdateBanna(){
        if(!isset($this->UpdateBannaModel)){
            $this->UpdateBannaModel = new UpdateBanna();
        }
        return  $this->UpdateBannaModel;
    }
    public function add()
    {
        return $this->view->fetch();
    }
    public function edit($ids = NULL)
    {

    }

    /**
     * 删除
     * @param string $ids
     */
    public function del($ids = "")
    {
        if($this->request->isAjax()){
            try {
                $this->getUpdateBanna()->setId($ids)->del();
                $this->success(__('Operation completed'));
            }catch (\Exception $e){
                $this->error($e->getMessage());
            }
            $this->success(__('Operation completed'));
        }
    }

    /**
     * 修改或者添加
     */
    public function update(){
        if($this->request->isAjax()){
            try{
                $post = input('post.');
                $post['id'] = isset($post['id'])?$post['id']:0;
                $userInfo  = (Session('admin'))->toArray();
                $this->getUpdateBanna()
                    ->setAttachmentId($post['attachmentId'])
                    ->setId( $post['id'])
                    ->setOpId($userInfo['id'])
                    ->setSort($post['sort'])
                    ->setTitle($post['title'])
                    ->updatedata();
            }catch (\Exception $e){
                $this->error($e->getMessage());
            }
            $this->success(__('Operation completed'));
        }
    }


}