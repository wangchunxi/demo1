<?php
/**
 * 联系我们
 * User: Administrator
 * Date: 2018/1/6/006
 * Time: 23:06
 */

namespace app\index\controller;


use app\common\controller\Frontend;

class Contact extends  Frontend
{
    public function index(){
        return $this->view->fetch();
    }
}