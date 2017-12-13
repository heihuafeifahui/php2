<?php
require '../vendor/autoload.php';
require 'UserDb.php';

switch ($_GET["action"]) {
case "xxx":
	break;
default:
	//无参数默认显示界面
	$smarty = new Smarty();
	$userdb = new UserDb();
	$users = $userdb->findAllUser();
	$smarty->assign('users',$users);
	$smarty->display('templates/index.html');
}
?>