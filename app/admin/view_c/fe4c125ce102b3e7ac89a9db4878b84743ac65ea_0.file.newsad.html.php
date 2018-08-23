<?php
/* Smarty version 3.1.29, created on 2018-05-08 08:52:52
  from "F:\home\class\day22\code\mvc\app\admin\view\news\newsad.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5af16564bbbe86_28719983',
  'file_dependency' => 
  array (
    'fe4c125ce102b3e7ac89a9db4878b84743ac65ea' => 
    array (
      0 => 'F:\\home\\class\\day22\\code\\mvc\\app\\admin\\view\\news\\newsad.html',
      1 => 1496287263,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5af16564bbbe86_28719983 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<HTML>
<head>
    <meta charset="UTF-8">
    <title>列表页</title>
</head>
<body>
    <form method="post" action="" >
        <p>
            <span>新闻标题：</span>
            <input type="text" name="title" value="" />
        </p>
        <p>
            <span>新闻简介：</span>
            <input type="text" name="intro" value=""  style="width:300px;"  />
        </p>
        <p>
            <span>新闻内容：</span>
            <textarea name="content" rows=5 cols=70></textarea>
        </p>
        <p>
            <input type="submit" value="添加新闻" />
        </p>
    </form>

    <p>
        <a href="">返回新闻列表页</a>
    </p>
</body>
</HTML><?php }
}
