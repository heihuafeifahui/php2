<?php
/* Smarty version 3.1.31, created on 2017-11-17 02:20:31
  from "E:\php\nginx-1.13.4\html\16\public\templates\photos.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a0e476fc1b089_54671197',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0e87dbfb798a074986b6e384504c646fc6bd611' => 
    array (
      0 => 'E:\\php\\nginx-1.13.4\\html\\16\\public\\templates\\photos.html',
      1 => 1510554264,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a0e476fc1b089_54671197 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<div>上传：
  <form action="upload.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
    <input type="file" name="file" id="file" />
    <input type="submit" name="button" id="button" value="提交" />
  </form>
</div>
<div>
  <div style="height:30px; padding:5px;">共：<?php echo $_smarty_tpl->tpl_vars['photos']->value->getPagecount();?>
页</div>
  <div>信息总数：<?php echo $_smarty_tpl->tpl_vars['photos']->value->getTotal();?>
，每页<?php echo $_smarty_tpl->tpl_vars['photos']->value->getPagesize();?>
条，当前第<?php echo $_smarty_tpl->tpl_vars['photos']->value->getPage();?>
页，上一页：<?php echo $_smarty_tpl->tpl_vars['photos']->value->getPrepage();?>
，下一页：<?php echo $_smarty_tpl->tpl_vars['photos']->value->getNextpage();?>
</div>
  <div><ul>
  	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['photos']->value->getPages(), 'p');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['p']->value) {
?>
    <li><a href="?page=1"><?php echo $_smarty_tpl->tpl_vars['p']->value;?>
</a></li>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

  </ul></div>
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['photos']->value->getList(), 'photo');
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
