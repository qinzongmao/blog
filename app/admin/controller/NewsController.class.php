<?php

namespace admin\controller;  //创建了 全局空间  下的  admin空间  下的  controller空间
use \core\Controller; //引入  全局空间  下的  core空间  下的 Controller类

class NewsController extends Controller{
    #列表页相关
    public function showList(){ 
        
        #调用模型查询数据
        //$model = new \model\NewsModel;
        $model = \core\App::single('\\model\\NewsModel');
        $sql = 'select id, title, intro, post_date from news where 1 order by id desc limit 10';
        $datas = $model->getRows($sql);

        #调用smarty展示视图模板文件
        //$smarty = new \Smarty;
        //$templateDir = APP_ADMIN_PATH.'view';//   mvc/app/admin/view
        //$smarty->setTemplateDir($templateDir);//设置存放后台模板文件的目录全路径
        //$compileDir = APP_ADMIN_PATH.'view_c';//  mvc/app/admin/view_c
        //$smarty->setCompileDir($compileDir);//设置存放后台模板编译缓存文件的全路径

        //$this->smarty->assign('datas', $datas);
        $this->assign('datas', $datas);

        #调用视图模板展示页面
        //include '../view/news/newslist.html';
        //include APP_ADMIN_VIEW_PATH . 'news/newslist.html';
        //$this->smarty->display('news/newslist.html');
        $this->display('news/newslist.html');
    }
    #添加页面相关
    public function showAd(){ 

        #调用smarty展示视图模板文件
        //$smarty = new \Smarty;
        //$templateDir = APP_ADMIN_PATH.'view';//   mvc/app/admin/view
        //$smarty->setTemplateDir($templateDir);//设置存放后台模板文件的目录全路径
        //$compileDir = APP_ADMIN_PATH.'view_c';//  mvc/app/admin/view_c
        //$smarty->setCompileDir($compileDir);//设置存放后台模板编译缓存文件的全路径

        //include '../view/news/newsad.html';
        //include APP_ADMIN_VIEW_PATH . 'news/newsad.html';
        //$this->smarty->display('news/newsad.html');
        $this->display('news/newsad.html');
    }

    #文件上传相关
    //展示上传界面
    public function showUpfile(){ 
        
        $this->display('news/upfile.html');
    }
    //处理上传功能
    public function upfile_h(){ 
        
        echo '<pre>';
        var_dump( $_FILES ); echo '<hr/>';

        $upFileTool = \core\App::single('\\plugins\\UpFileTool');
        var_dump( $upFileTool ); 

        $upFileTool->upfile($_FILES['img']);
    }
}

