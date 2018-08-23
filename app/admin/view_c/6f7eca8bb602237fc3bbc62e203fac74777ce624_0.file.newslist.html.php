<?php
/* Smarty version 3.1.29, created on 2018-05-08 08:53:11
  from "F:\home\class\day22\code\mvc\app\admin\view\news\newslist.html" */

if ($_smarty_tpl->smarty->ext->_validateCompiled->decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.29',
  'unifunc' => 'content_5af16577bf2988_83140987',
  'file_dependency' => 
  array (
    '6f7eca8bb602237fc3bbc62e203fac74777ce624' => 
    array (
      0 => 'F:\\home\\class\\day22\\code\\mvc\\app\\admin\\view\\news\\newslist.html',
      1 => 1525768403,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5af16577bf2988_83140987 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'F:\\home\\class\\day22\\code\\mvc\\plugins\\smarty\\plugins\\modifier.date_format.php';
?>
<!DOCTYPE html>
<HTML>
<head>
    <meta charset="UTF-8">
    <title>列表页</title>
</head>
<body>
    <p>
        <a href="">添加新闻</a>
    </p>

    <table border=1>
        <thead>
        <tr>
            <td>序号</td>
            <td>ID</td>
            <td>新闻标题</td>
            <td>新闻简介</td>
            <td>添加时间</td>
            <td>操作</td>
        </tr>
        </thead>
        <tbody>
		
		<?php
$_from = $_smarty_tpl->tpl_vars['datas']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$__foreach_f1_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_foreach_f1']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_f1'] : false;
$__foreach_f1_0_saved_item = isset($_smarty_tpl->tpl_vars['datas_val']) ? $_smarty_tpl->tpl_vars['datas_val'] : false;
$__foreach_f1_0_saved_key = isset($_smarty_tpl->tpl_vars['datas_key']) ? $_smarty_tpl->tpl_vars['datas_key'] : false;
$_smarty_tpl->tpl_vars['datas_val'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['__smarty_foreach_f1'] = new Smarty_Variable(array('iteration' => 0));
$_smarty_tpl->tpl_vars['datas_key'] = new Smarty_Variable();
$_smarty_tpl->tpl_vars['datas_val']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['datas_key']->value => $_smarty_tpl->tpl_vars['datas_val']->value) {
$_smarty_tpl->tpl_vars['datas_val']->_loop = true;
$_smarty_tpl->tpl_vars['__smarty_foreach_f1']->value['iteration']++;
$__foreach_f1_0_saved_local_item = $_smarty_tpl->tpl_vars['datas_val'];
?>
		<tr>
            <td><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_f1']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_f1']->value['iteration'] : null);?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['datas_val']->value['id'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['datas_val']->value['title'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['datas_val']->value['intro'];?>
</td>
            <td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['datas_val']->value['post_date'],'%Y-%m-%d %H:%M:%S');?>
</td>
            <td>
                <a href="">编辑新闻</a>
                <a href="">删除新闻</a>
            </td>
        </tr>
		<?php
$_smarty_tpl->tpl_vars['datas_val'] = $__foreach_f1_0_saved_local_item;
}
if ($__foreach_f1_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_foreach_f1'] = $__foreach_f1_0_saved;
}
if ($__foreach_f1_0_saved_item) {
$_smarty_tpl->tpl_vars['datas_val'] = $__foreach_f1_0_saved_item;
}
if ($__foreach_f1_0_saved_key) {
$_smarty_tpl->tpl_vars['datas_key'] = $__foreach_f1_0_saved_key;
}
?>
        <!-- <tr> -->
            <!-- <td>2</td> -->
            <!-- <td>22</td> -->
            <!-- <td>title2</td> -->
            <!-- <td>intro2</td> -->
            <!-- <td>post_date2</td> -->
            <!-- <td> -->
                <!-- <a href="">编辑新闻</a> -->
                <!-- <a href="">删除新闻</a> -->
            <!-- </td> -->
        <!-- </tr> -->
        </tbody>
    </table>

</body>
</HTML><?php }
}
