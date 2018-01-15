<?php

namespace app\index\controller;

use app\common\controller\Frontend;
use app\common\library\Banna\Banna;

class Index extends Frontend
{

    protected $layout = '';

    public function _initialize()
    {
        parent::_initialize();
    }

    public function index()
    {
        /*首页banna*/
        $banna = new Banna();
        $bannaArray = $banna->getBanna();
        $cdnurl = preg_replace("/\/(\w+)\.php$/i", '', $this->request->root());
        foreach ($bannaArray as &$value){
            $value['fullurl'] = ($value['storage'] == 'local' ? $cdnurl : $this->view->config['upload']['cdnurl']) . $value['url'];
        }
        /*bannaEnd*/
        $this->assign('bannaArray',$bannaArray);
        return $this->view->fetch();
    }

    public function news()
    {
        $newslist = [];
        return jsonp(['newslist' => $newslist, 'new' => count($newslist), 'url' => 'http://www.fastadmin.net?ref=Sample']);
    }

}
