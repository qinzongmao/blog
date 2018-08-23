<?php
/* Smarty version 3.1.29, created on 2018-05-09 08:56:14
  from "F:\home\class\day23\code\mvc\app\admin\view\news\upfile.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5af2b7ae539801_25322804',
  'file_dependency' => 
  array (
    'e460c99d58c97d9fca0d00434710ba6e38610518' => 
    array (
      0 => 'F:\\home\\class\\day23\\code\\mvc\\app\\admin\\view\\news\\upfile.html',
      1 => 1525856171,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5af2b7ae539801_25322804 ($_smarty_tpl) {
?>
<!DOCTYPE html>
<HTML>
<head>
	<meta charset="UTF-8">
	<title>XXXXX</title>
</head>
<body>
	<form action="http://www.mvc.com/index.php?p=admin&m=news&a=upfile_h" method="post" enctype="multipart/form-data" >
		<p>
			<span>图片：</span>
			<input type="file" name="img" />
		</p>
		<p>
			<input type="submit" value="立即上传" />
		</p>
	</form>
</body>
</HTML><?php }
}
