<?php
/**
 * 首页banna图
 * User: Administrator
 * Date: 2018/1/15/015
 * Time: 19:33
 */

namespace app\common\library\Banna;


class Banna
{
    private $Men;
    private $MenName;
    private $BannaDb;
    public function __construct($Men = true)
    {
        $this->Men = $Men;
        $this->MenName = md5(md5('HomeBanna'));
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
     * 获取banna图
     * @return mixed|void
     */
    public function getBanna(){
        if($this->Men){
            $result = cache($this->MenName);
            if(!isset($result) || empty($result)){
                $result =  $this->getBannaData();
            }
        }else{
            $result = $this->getBannaData();
        }
        return $result;
    }
    private function getBannaData($cache = true){
        $db = $this->getBannaDb();
        $result = $db->where('status',1)
            ->alias('a')
            ->join('d_attachment b','a.attachmentId = b.id')
            ->field('b.url,b.storage')
            ->select();
        if($cache){
            cache($this->MenName,$result);
        }
        return  $result;
    }
}