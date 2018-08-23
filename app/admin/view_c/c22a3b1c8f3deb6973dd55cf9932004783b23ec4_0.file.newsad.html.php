<?php
/* Smarty version 3.1.29, created on 2018-05-09 02:38:19
  from "F:\home\class\day23\code\mvc\app\admin\view\news\newsad.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5af25f1be4f482_27280661',
  'file_dependency' => 
  array (
    'c22a3b1c8f3deb6973dd55cf9932004783b23ec4' => 
    array (
      0 => 'F:\\home\\class\\day23\\code\\mvc\\app\\admin\\view\\news\\newsad.html',
      1 => 1496287263,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5af25f1be4f482_27280661 ($_smarty_tpl) {
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
