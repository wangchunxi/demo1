<?php
/**
 * 新闻前端模块
 * User: Administrator
 * Date: 2018/1/6/006
 * Time: 21:54
 */

namespace app\index\controller;


use app\common\controller\Frontend;

class News extends Frontend
{
    public function index(){
        return $this->view->fetch();
    }
    public function info(){
        return $this->view->fetch();
    }
}