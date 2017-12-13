<?php
/* Smarty version 3.1.31, created on 2017-10-23 06:07:36
  from "E:\php\nginx-1.13.4\html\11\public\templates\login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_59ed8728c90800_60282942',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3a2e17ed4fea29b7d04d2a2ad0b113e0a9aaa78b' => 
    array (
      0 => 'E:\\php\\nginx-1.13.4\\html\\11\\public\\templates\\login.html',
      1 => 1508738042,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59ed8728c90800_60282942 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="login.php?action=auth">
  <div>账号：
    <label for="account"></label>
    <input type="text" name="account" id="account" />
    密码：
    <label for="passwd"></label>
    <input type="password" name="passwd" id="passwd" />
    <input type="submit" name="button" id="button" value="登录" />
  </div>
</form>
</body>
</html>
<?php }
}
