<?php
/* Smarty version 3.1.31, created on 2017-09-30 06:09:50
  from "E:\php\nginx-1.13.4\html\7\public\templates\register.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59cf352ebe48d9_13868199',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0fa2d3a474b9d16a2a288d576b01ce2893c555c6' => 
    array (
      0 => 'E:\\php\\nginx-1.13.4\\html\\7\\public\\templates\\register.html',
      1 => 1506751598,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59cf352ebe48d9_13868199 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<form action="register.php?action=save" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <div>账号：
    <input name="account" type="text" id="account" value="" />
    <div></div>
  </div>
  <div>密码：
    <input type="text" name="passwd" id="passwd" value="" />
    <div></div>
  </div>
  <div>确认密码：
    <input type="text" name="cpasswd" id="cpasswd" />
  </div>
  <div>姓名：
    <input type="text" name="name" id="name" />
  </div>
  <div>上传头像：
    <input type="file" name="file" id="file" />
  </div>
  <div>输入验证码：
  	<input type="text" name="vcode" id="vcode" />
    <div></div>
  </div>
  <div><img src="verify_code.php" /></div>
  <div>
    <input type="submit" name="button" id="button" value="提交" />
  </div>
</form>
</body>
</html>
<?php }
}
