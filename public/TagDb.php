<?php
require_once 'BaseDao.php';
//require_once 'Photo.php';
//require_once 'UserDb.php';

class TagDb extends BaseDao {
	
	function findByName($name) {
		try {
			$sth = $this->dbh->prepare('SELECT * FROM tag WHERE name=:name');
			$sth->bindParam(':name', $name, PDO::PARAM_STR);
			$sth->execute();
			//print_r($sth->errorInfo());
			$result = $sth->fetch();
			return $result["id"];
		} catch (PDOException $e) {
			print "连接数据库失败。";
			die();
		}
	}
	
	function save($name, $num) {
		try {
			$sth = $this->dbh->prepare('insert into tag(name,num)values(:name,:num)');
			$sth->bindParam(':name', $name, PDO::PARAM_STR);
			$sth->bindParam(':num', $num, PDO::PARAM_INT);
			$sth->execute();
			$arr = $sth->errorInfo();
			//$this->dbh->commit();
			//print_r($arr);
		} catch (PDOException $e) {
			print "连接数据库失败。";
			die();
		}
	}
	
	function incrementNum($id) {
		try {
			$sth = $this->dbh->prepare('update tag set num=num+1 where id=:id');
			$sth->bindParam(':id', $id, PDO::PARAM_INT);
			$sth->execute();
			$arr = $sth->errorInfo();
			//$this->dbh->commit();
			//print_r($arr);
		} catch (PDOException $e) {
			print "连接数据库失败。";
			die();
		}
	}
	
}
?>