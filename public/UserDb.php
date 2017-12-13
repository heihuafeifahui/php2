<?php
require_once 'BaseDao.php';
require_once 'User.php';

class UserDb extends BaseDao {
	
	function save($account, $passwd, $name, $imageurl) {
		$sth = $this->dbh->prepare('insert into user(account,passwd,name,image,regtime)values(:account,:passwd,:name,:image,NOW())');
		$sth->bindParam(':account', $account, PDO::PARAM_STR);
		$sth->bindParam(':passwd', $passwd, PDO::PARAM_STR);
		$sth->bindParam(':name', $name, PDO::PARAM_STR);
		$sth->bindParam(':image', $imageurl, PDO::PARAM_STR);
		$sth->execute();
		$arr = $sth->errorInfo();
		//print_r($arr);
	}

	function findAllUser() {
		try {
			$sth = $this->dbh->prepare('SELECT * FROM user WHERE 1 ORDER BY regtime DESC');
			$sth->execute();
			//print_r($sth->errorInfo());
			$result = $sth->fetchAll();
			//print_r($result);
			$list = array();
			foreach ($result as $value) {
				//echo $value["account"];
				$user = new User($value["id"], $value["account"], $value["passwd"], $value["name"], $value["image"], $value["regtime"]);
				$list[] = $user;
			}
			return $list;
		} catch (PDOException $e) {
			print "连接数据库失败。";
			die();
		}
	}
	
	function findAllUserByPhoto($photoid) {
		try {
			$sth = $this->dbh->prepare('SELECT * FROM user WHERE 1 ORDER BY regtime DESC');
			$sth->execute();
			//print_r($sth->errorInfo());
			$result = $sth->fetchAll();
			//print_r($result);
			$list = array();
			$photodb = new PhotoDb();
			foreach ($result as $value) {
				//echo $value["account"];
				$user = new User($value["id"], $value["account"], $value["passwd"], $value["name"], $value["image"], $value["regtime"]);
				$perm = $photodb->findPermByUser($value["id"], $photoid);
				//if ($perm == "read")
				$user->setPerm($perm);
				$list[] = $user;
			}
			return $list;
		} catch (PDOException $e) {
			print "连接数据库失败。";
			die();
		}
	}
	
	function findByAccount($account) {
		try {
			$sth = $this->dbh->prepare('SELECT * FROM user WHERE account=:account');
			$sth->bindParam(':account', $account, PDO::PARAM_STR);
			$sth->execute();
			$result = $sth->fetch();
			$user = new User($result["id"], $result["account"], $result["passwd"], $result["name"], $result["image"], $result["regtime"]);
			return $user;
		} catch (PDOException $e) {
			print "连接数据库失败。";
			die();
		}
	}
	
	function findById($id) {
		try {
			$sth = $this->dbh->prepare('SELECT * FROM user WHERE id=:id');
			$sth->bindParam(':id', $id, PDO::PARAM_INT);
			$sth->execute();
			$result = $sth->fetch();
			$user = new User($result["id"], $result["account"], $result["passwd"], $result["name"], $result["image"], $result["regtime"]);
			return $user;
		} catch (PDOException $e) {
			print "连接数据库失败。";
			die();
		}
	}
}
?>