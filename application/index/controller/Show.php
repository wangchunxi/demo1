<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/1/3/003
 * Time: 21:29
 */

namespace app\index\controller;


use app\common\controller\Frontend;

class Show extends Frontend
{
    public function _initialize()
    {
        parent::_initialize();
    }

    public function index()
    {
        //echo __DIR__;
        return $this->view->fetch();
    }
}