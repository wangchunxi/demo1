<?php
/**
 * 关于我们
 * User: Administrator
 * Date: 2018/1/6/006
 * Time: 22:37
 */

namespace app\index\controller;


use app\common\controller\Frontend;

class AboutUs extends Frontend
{
    public function index(){
        return $this->view->fetch();
    }
}