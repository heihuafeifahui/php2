<?php
require '../vendor/autoload.php';
require 'TagDb.php';
require 'PhotoDb.php';

switch ($_GET["action"]) {
case "add":
	$tagdb = new TagDb();
	$id = $tagdb->findByName($_POST['name']);
	if ($id > 0)
		$tagdb->incrementNum($id);
	else {
		$tagdb->save($_POST['name'], 1);
		$photodb = new PhotoDb();
		$tags = array($_POST['name']);
		//var_dump($tags);
		//var_dump(json_encode($tags));
		$photo = $photodb->findById($_POST['photoid']);
		$photo->addTag($_POST['name']);
		$photodb->updateTagjson($_POST['photoid'], $photo->getTagjson());
	}
	break;
default:
	//无参数默认显示界面
	
}
?>