<?php
/* Smarty version 3.1.31, created on 2017-10-31 01:31:48
  from "E:\php\nginx-1.13.4\html\13\public\templates\photo_config.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59f7d2848660f1_21182342',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f749555d5cdc2bb7242fcf0e4f42ad925760da2' => 
    array (
      0 => 'E:\\php\\nginx-1.13.4\\html\\13\\public\\templates\\photo_config.html',
      1 => 1509413495,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59f7d2848660f1_21182342 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
 <div>
    <div><img src="upload/<?php echo $_smarty_tpl->tpl_vars['photo']->value->getPath();?>
" height="150px" width="150px" /></div>
    <div><?php echo $_smarty_tpl->tpl_vars['photo']->value->getName();?>
</div>
    <div><?php echo $_smarty_tpl->tpl_vars['photo']->value->getUser()->getName();?>
</div>
</div>
<div>请选择允许查看的用户</div>
<form id="form1" name="form1" method="post" action="photo_config.php?action=save">
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
?>
<div>
  <div>
    <input data-userids name="userids[]" type="checkbox" id="userids[]" value="<?php echo $_smarty_tpl->tpl_vars['user']->value->getId();?>
" <?php if ($_smarty_tpl->tpl_vars['user']->value->getPerm() == 'read') {?>checked="checked"<?php }?> />
  </div>
  <div>权限：<?php echo $_smarty_tpl->tpl_vars['user']->value->getPerm();?>
</div>
  <div><?php echo $_smarty_tpl->tpl_vars['user']->value->getAccount();?>
</div>
  <div><?php echo $_smarty_tpl->tpl_vars['user']->value->getName();?>
</div>
</div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

<div>
  <input type="submit" name="button" id="button" value="提交" />
  <input name="photoid" type="hidden" id="photoid" value="<?php echo $_smarty_tpl->tpl_vars['photo']->value->getId();?>
" />
</div>
</form>
</body>
<?php echo '<script'; ?>
 src="js/jquery-3.2.1.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
>
$(function($){
	$("[data-userids]").click(function(e) {
        console.log($(this).prop('checked'));
		// photo_config.php?action=config_save
		var photoid = $("#photoid").val();
		var userid = $(this).val();
		console.log(photoid);
		console.log(userid);
		if ($(this).prop('checked')) {
			//save
			$.post("photo_config.php?action=config_save", {photoid:photoid,userid:userid}, function(data){
				console.log(data);
			});
		} else {
			//del
			$.post("photo_config.php?action=config_del", {photoid:photoid,userid:userid}, function(data){
				console.log(data);
			});
		}
    });
})
<?php echo '</script'; ?>
>

</html>
<?php }
}
