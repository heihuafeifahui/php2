<?php
session_start();
require '../vendor/autoload.php';

if (isset($_SESSION['userid']) && $_SESSION['userid'] > 0)
	$userid = $_SESSION['userid'];
else {
	echo "请登录后再操作。<a href='login.php'>登录</a>";
	exit;
}

$upload_path = "upload";
if (!file_exists($upload_path)) {
	mkdir($upload_path);
}

function microtime_float()
{
    list($usec, $sec) = explode(" ", microtime());
    //return ((float)$usec + (float)$sec);
	$str = str_replace("0.", "", $usec);
	return $sec.$str;
}

try {
		$dbh = new PDO('mysql:host=localhost;dbname=db', "root", "123456", array(
			PDO::ATTR_PERSISTENT => true
		));
	} catch (PDOException $e) {
		print "连接数据库失败。";
		die();
	}
	
	//var_dump($_FILES);
	//echo date("Ymd");
	//exit;
	$filename = "";
	if ($_FILES["file"]["error"] == UPLOAD_ERR_OK) {
		//echo "aaaaaaaaaaaaaa".$upload_path."/".date("Ymd");
		if (!file_exists($upload_path."/".date("Ymd"))) {
			//echo "bbbbbbbbbbbbbbbbb";
			mkdir($upload_path."/".date("Ymd"));
		}
		//$filename = $_FILES["file"]["name"];
		$filename = microtime_float().".".pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
		$imageurl = date("Ymd")."/".$filename;
		move_uploaded_file($_FILES["file"]["tmp_name"], $upload_path."/".$imageurl);
	}
	
	$sth = $dbh->prepare('insert into photo(path,name,uptime,userid)values(:path,:name,NOW(),:userid)');
	$sth->bindParam(':path', $imageurl, PDO::PARAM_STR);
	$sth->bindParam(':name', $filename, PDO::PARAM_STR);
	$sth->bindParam(':userid', $userid, PDO::PARAM_STR);
	$sth->execute();
	$arr = $sth->errorInfo();
	print_r($arr);
?>