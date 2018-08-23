<?php


/**
 * 读取配置项参数的函数
 * @param   $str    string    配置项下标以"."分隔的字符串；例: $str='db.type'
 */
function C($str){ 
    $arr = explode('.', $str);

    $target = $GLOBALS['config'];

    foreach( $arr as $v ){ 
        $target = $target[$v];
    }
    return $target;
}

/**
 * 读取全局变量的函数
 * @param   $str    string    表示全局变量的变量名部分
 */
function G($str){ 

    return $GLOBALS[$str];
}