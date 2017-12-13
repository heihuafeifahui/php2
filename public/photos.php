<?php
require_once '../vendor/autoload.php';
require_once 'PhotoDb.php';

switch ($_GET["action"]) {
case "xxx":
	break;
default:
	$smarty = new Smarty();
	//$users = findAllUser();
	$photodb = new PhotoDb();
	if ($_GET['page']<=0)
		$_GET['page'] = 1;
	$smarty->assign('photos',$photodb->findAllPhoto($_GET['page'], 3));
	$smarty->display('templates/photos.html');
}
?>