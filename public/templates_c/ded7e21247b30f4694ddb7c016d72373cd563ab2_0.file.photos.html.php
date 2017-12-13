<?php
/* Smarty version 3.1.31, created on 2017-10-24 01:15:09
  from "E:\php\nginx-1.13.4\html\11\public\templates\photos.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59ee941d15d6c8_12659813',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ded7e21247b30f4694ddb7c016d72373cd563ab2' => 
    array (
      0 => 'E:\\php\\nginx-1.13.4\\html\\11\\public\\templates\\photos.html',
      1 => 1508807704,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59ee941d15d6c8_12659813 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<div>此处显示新 Div 标签的内容
  <form action="upload.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
    <input type="file" name="file" id="file" />
    <input type="submit" name="button" id="button" value="提交" />
  </form>
</div>
<div>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['photos']->value, 'photo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['photo']->value) {
?>
  <div>
    <div><img src="upload/<?php echo $_smarty_tpl->tpl_vars['photo']->value->getPath();?>
" height="150px" width="150px" /></div>
    <div><?php echo $_smarty_tpl->tpl_vars['photo']->value->getName();?>
</div>
    <div><?php echo $_smarty_tpl->tpl_vars['photo']->value->getUser()->getName();?>
</div>
  </div>
  <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

</div>
</body>
</html>
<?php }
}
