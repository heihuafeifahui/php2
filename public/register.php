<?php
require '../vendor/autoload.php';
require 'UserDb.php';

$upload_path = "upload";
if (!file_exists($upload_path)) {
	mkdir($upload_path);
}

switch ($_GET["action"]) {
case "save":
	//保存
	$userdb = new UserDb();
	$imageurl = "";
	if ($_FILES["file"]["error"] == UPLOAD_ERR_OK) {
		//echo "aaaaaaaaaaaaaa".$upload_path."/".date("Ymd");
		if (!file_exists($upload_path."/".date("Ymd"))) {
			//echo "bbbbbbbbbbbbbbbbb";
			mkdir($upload_path."/".date("Ymd"));
		}
		$imageurl = date("Ymd")."/".$_FILES["file"]["name"];
		move_uploaded_file($_FILES["file"]["tmp_name"], $upload_path."/".$imageurl);
	}
	$userdb->save($_POST['account'], $_POST['passwd'], $_POST['name'], $imageurl);
	
	break;
default:
	//无参数默认显示注册界面
	$smarty = new Smarty();
	$smarty->display('templates/register.html');
}
?>