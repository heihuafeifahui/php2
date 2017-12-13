<?php
session_start();
require '../vendor/autoload.php';
require 'CommentDb.php';

switch ($_GET["action"]) {
case "save":
	if ($_SESSION['userid'] > 0) {
	} else {
		header("Location: login.php");
		exit;
	}
	$commentdb = new CommentDb();
	$commentdb->save($_POST["photoid"], $_SESSION['userid'], $_POST["content"]);
	header("Location: photos.php");
	break;
default:
	
}
?>