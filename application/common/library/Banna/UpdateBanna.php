<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/15/015
 * Time: 21:49
 */

namespace app\common\library\Banna;


class UpdateBanna
{
    public function __construct()
    {
        $this->MenName = md5(md5('HomeBanna'));
    }
    private $title;
    private $sort;
    private $attachmentId;
    private $opId;
    private $id;
    private $BannaDb;

    public function setTitle($title = ''){
        $this->title = $title;
        return $this;
    }
    public function setSort($sort  = ''){
        $this ->sort  = $sort;
        return $this;
    }
    public function setAttachmentId($attachmentId =  0 ){
        $this  ->attachmentId  = $attachmentId;
        return  $this;
    }
    public function setOpId($opId = 0 ){
        $this->opId = $opId;
        return $this;
    }
    public function setId($Id = 0 ){
        $this->id = $Id;
        return $this;
    }
    /**
     * 获取数据库
     * @return \think\db\Query
     */
    private function getBannaDb(){
        if(!isset($this->BannaDb)){
            $this->BannaDb = Db('Banna');
        }
        return $this->BannaDb;
    }

    /**
     * 检验参数
     * @param array $post
     */
    private function checkData($post= []){
        if(!isset($post['attachmentId']) || empty($post['attachmentId'])){
            exception(__('Did not get the picture id'));
        }
        if(empty($post['title']) || !isset($post['title'])){
            exception(__('Did not get the picture id'));
        }
    }

    /**
     * 修改或者添加
     * @return bool
     * @throws \Exception
     * @throws \think\Exception
     * @throws \think\exception\PDOException
     */
    public function updatedata(){
        $post['title'] = $this->title;
        $post['sort'] = $this->sort;
        $post['attachmentId'] = $this->attachmentId;
        $post['status'] = 1;
        if($this->id>0){
            $post['updateId'] = $this->opId;
            $post['updateTime'] = time();
            $this->checkData($post);
            $result = $this->getBannaDb()->update($post);
        }else{
            $post['createId'] = $this->opId;
            $post['updateTime'] = time();
            $this->checkData($post);
            $result = $this->getBannaDb()->insert($post);
        }
        if(!$result){
            exception(__('Operation failed'));
        }
        cache($this->MenName,null);
        return true;
    }

    /**
     * 删除
     */
    public function del(){
        $result = $this->getBannaDb()->where($map)->delete(explode(',',$this->id));
        if(!$result){
            exception(__('Operation failed'));
        }
        cache($this->MenName,null);
        return true;
    }
}