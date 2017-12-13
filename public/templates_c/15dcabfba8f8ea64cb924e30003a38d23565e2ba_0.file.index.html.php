<?php
/* Smarty version 3.1.31, created on 2017-10-16 05:36:44
  from "E:\php\nginx-1.13.4\html\9\public\templates\index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59e4456c79a925_04490581',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '15dcabfba8f8ea64cb924e30003a38d23565e2ba' => 
    array (
      0 => 'E:\\php\\nginx-1.13.4\\html\\9\\public\\templates\\index.html',
      1 => 1506751201,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59e4456c79a925_04490581 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
首页<?php echo $_smarty_tpl->tpl_vars['name']->value;?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
<div>
  <div><?php echo $_smarty_tpl->tpl_vars['user']->value['account'];?>
</div>
  <div><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</div>
</div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

</body>
</html>
<?php }
}
