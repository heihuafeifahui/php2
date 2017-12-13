<?php
require '../vendor/autoload.php';
require 'UserDb.php';
require 'PhotoDb.php';

$photodb = new PhotoDb();
switch ($_GET["action"]) {
case "config_save":
	$photodb->save_perm($_POST['photoid'], $_POST['userid'], "read");
	break;
case "config_del":
	$photodb->del_perm($_POST['photoid'], $_POST['userid'], "read");
	break;
case "save":
	var_dump($_POST['userids']);
	if (count($_POST['userids']) > 0) {
		for ($i=0; $i<count($_POST['userids']); $i++) {
			$userid = $_POST['userids'][$i];
			echo $userid."===========";
			$perm = $photodb->findPermByUser($userid, $_POST['photoid']);
			echo $perm."===========";
			if ($perm != "") {
			} else {
				$photodb->save_perm($_POST['photoid'], $userid, "read");
			}
		}
	}
	break;
default:
	//无参数默认显示界面
	$smarty = new Smarty();
	//$photodb = new PhotoDb();
	$photo = $photodb->findById($_GET['id']);
	$smarty->assign('photo',$photo);
	
	$userdb = new UserDb();
	$users = $userdb->findAllUserByPhoto($_GET['id']);
	$smarty->assign('users',$users);
	
	$smarty->display('templates/photo_config.html');
}
?>