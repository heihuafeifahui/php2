<?php
/* Smarty version 3.1.31, created on 2017-10-30 06:13:35
  from "E:\php\nginx-1.13.4\html\13\public\templates\photos.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59f6c30f0c9a89_03638759',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '387fccf89bd6772cd2f9e3987d9b84cf095e2c62' => 
    array (
      0 => 'E:\\php\\nginx-1.13.4\\html\\13\\public\\templates\\photos.html',
      1 => 1509072548,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f6c30f0c9a89_03638759 (Smarty_Internal_Template $_smarty_tpl) {
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
    <div><a href="photo_config.php?id=<?php echo $_smarty_tpl->tpl_vars['photo']->value->getId();?>
">设置</a></div>
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
