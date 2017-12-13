<?php
session_start();
require_once("User.php");
$errors = array("account_error"=>"账号必须大与6位。","passwd_error"=>"密码必须大与6位。","vcode_error"=>"验证码错误。");
//valid data
$is_error = false;
unset($_SESSION['user']);
$user = new User();
$user->setAccount($_POST['account']);
$user->setPasswd($_POST['passwd']);
$user->setCpasswd($_POST['cpasswd']);
$user->setName($_POST['name']);
if ($_SESSION['vcode']!="" && $_SESSION['vcode']==$_POST['vcode']) {
} else {
	$is_error = true;
	$user->setVcode_error("vcode_error");
}
if (strlen($_POST['account']) < 6) {
	$is_error = true;
	$user->setAccount_error("account_error");
}
if (strlen($_POST['passwd']) < 6) {
	$is_error = true;
	$user->setPasswd_error("passwd_error");
}
if ($is_error) {
	$_SESSION['user'] = $user;
	header('Location: register.php');
	exit;
}

try {
	$dbh = new PDO('mysql:host=localhost;dbname=db', "root", "123456", array(
    	PDO::ATTR_PERSISTENT => true
	));
	
	//test
	$account = "zhangsan@gmail.com";
	$sth = $dbh->prepare('SELECT * FROM user WHERE account=:account');
	$sth->bindParam(':account', $account, PDO::PARAM_STR);
	$sth->execute();
	
	$arr = $sth->errorInfo();
	print_r($arr);
	
	$result = $sth->fetchAll();
	print_r($result);
	
} catch (PDOException $e) {
    print "连接数据库失败。";
    die();
}

$sth = $dbh->prepare('insert into user(account,passwd,name,regtime)values(:account,:passwd,:name,NOW())');
$sth->bindParam(':account', $_POST['account'], PDO::PARAM_STR);
$sth->bindParam(':passwd', $_POST['passwd'], PDO::PARAM_STR);
$sth->bindParam(':name', $_POST['name'], PDO::PARAM_STR);
$sth->execute();
$arr = $sth->errorInfo();
print_r($arr);


?>