<?php
session_start();
require '../vendor/autoload.php';
require 'UserDb.php';

switch ($_GET["action"]) {
case "auth":
	$userdb = new UserDb();
	$user = $userdb->findByAccount($_POST['account']);
	if ($user->getId() <= 0) {
		echo "账号不存在。";
		exit;
	}
	if ($user->getPasswd() != $_POST['passwd']) {
		echo "密码错误。";
		exit;
	}
	$_SESSION['userid'] = $user->getId();
	echo "登录成功。<a href='index.php'>返回</a>";
	break;
default:
	$smarty = new Smarty();
	$smarty->display('templates/login.html');
}
?>