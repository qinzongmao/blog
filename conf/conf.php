<?php
#构建配置数组
$config = array(

    //数据库配置
    'db' => [
        'type' =>  'mysql',
        'host' =>  'localhost',
        'port' =>  3306,
        'char' =>  'utf8',
        'dbname' =>  'db1',
        'acc' =>  'root',
        'pwd' =>  '123abc'
    ],

    //默认访问的页面
    'web' => [
        'p' => 'admin',
        'm' => 'News',
        'a' => 'showList'
    ],

    //文件上传配置
    'upF' => [
        'limitType' => ['image/jpeg', 'image/png'],
        'limitSize' => 200*1024,
        'path' => 'F:/home/class/day23/code/mvc/public/admin/img'
    ]
);