<?php

namespace admin\controller;  //创建了 全局空间  下的  admin空间  下的  controller空间

class UserController{
    
    #列表页相关
    public function showList(){ 
        echo '用户管理系统的列表页'; 
    }
    #添加页面相关
    public function showAd(){ 
        echo '用户管理系统的添加页'; 
    }
}

