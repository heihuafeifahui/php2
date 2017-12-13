<?php
/* Smarty version 3.1.31, created on 2017-11-06 05:52:40
  from "E:\php\nginx-1.13.4\html\14\public\templates\photos.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59fff8a8ec9474_58528706',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '528e3ad174e5538229185e66937c6cd6d3c5d2c6' => 
    array (
      0 => 'E:\\php\\nginx-1.13.4\\html\\14\\public\\templates\\photos.html',
      1 => 1509947559,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59fff8a8ec9474_58528706 (Smarty_Internal_Template $_smarty_tpl) {
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
  <div>
  	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['photo']->value->getComments(), 'comment');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['comment']->value) {
?>
    <div><?php echo $_smarty_tpl->tpl_vars['comment']->value->getUserid();?>
：<?php echo $_smarty_tpl->tpl_vars['comment']->value->getContent();?>
(<?php echo $_smarty_tpl->tpl_vars['comment']->value->getPubtime();?>
)</div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

  </div>
  <form id="form2" name="form2" method="post" action="comment_action.php?action=save">
  <div>
  	<div>评论：
  	  <input type="text" name="content" id="content" />
  	  <input type="submit" name="button2" id="button2" value="发送" />
  	  <input name="photoid" type="hidden" id="photoid" value="<?php echo $_smarty_tpl->tpl_vars['photo']->value->getId();?>
" />
  	</div>
  </div>
  </form>
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
