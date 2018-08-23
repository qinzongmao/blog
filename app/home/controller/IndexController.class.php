<?php

namespace home\controller;//创建一个  全局空间  下的  home空间  下的  controller空间
use \core\Controller;

class IndexController extends Controller{

    public function showIndex(){ 
        $this->display('index.html');
    }
}