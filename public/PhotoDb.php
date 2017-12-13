<?php
//require_once 'BaseDao.php';
require_once 'Photo.php';
require_once 'UserDb.php';
require_once 'CommentDb.php';
require_once 'Page.php';
require_once 'PageUtil.php';

class PhotoDb extends BaseDao {
	
	function updateTagjson($id, $tagjson) {
		try {
			echo $tagjson;
			$sth = $this->dbh->prepare('update photo set tagjson=:tagjson where id=:id');
			$sth->bindParam(':id', $id, PDO::PARAM_INT);
			$sth->bindParam(':tagjson', $tagjson, PDO::PARAM_STR);
			$sth->execute();
			$arr = $sth->errorInfo();
			print_r($sth->errorInfo());
		} catch (PDOException $e) {
			print "连接数据库失败。";
			die();
		}
	}

	function findAllPhoto($page, $pagesize) {
		$userdb = new UserDb();
		$commentdb = new CommentDb();
		try {
			$sth = $this->dbh->prepare('SELECT count(id) as num FROM photo');
			$sth->execute();
			$row = $sth->fetch(PDO::FETCH_BOTH);
			$pageutil = new PageUtil($row['num'], $page, $pagesize);
			
			$sth = $this->dbh->prepare('SELECT * FROM photo WHERE 1 ORDER BY uptime DESC LIMIT :start,:pagesize');
			$sth->bindParam(':start', $pageutil->getStart(), PDO::PARAM_INT);
			$sth->bindParam(':pagesize', $pagesize, PDO::PARAM_INT);
			$sth->execute();
			//print_r($sth->errorInfo());
			$list = array();
			while ($value = $sth->fetch(PDO::FETCH_BOTH)) {
				$photo = new Photo($value["id"],$value["tagjson"],$value["path"],$value["name"],$value["extname"],$value["uptime"]);
				$user = $userdb->findById($value["userid"]);
				$photo->setUser($user);
				$comments = $commentdb->findByPhotoid($value["id"], 1, 3);
				$photo->setComments($comments);
				$list[] = $photo;
			}
			$pageutil->setList($list);
			return $pageutil;
		} catch (PDOException $e) {
			print "连接数据库失败。";
			die();
		}
	}
	
	function findById($id) {
		$userdb = new UserDb();
		try {
			$sth = $this->dbh->prepare('SELECT * FROM photo WHERE id=:id');
			$sth->bindParam(':id', $id, PDO::PARAM_INT);
			$sth->execute();
			//print_r($sth->errorInfo());
			$result = $sth->fetch();
			$photo = new Photo($result["id"],$value["tagjson"],$result["path"],$result["name"],$result["extname"],$result["uptime"]);
			$user = $userdb->findById($result["userid"]);
			$photo->setUser($user);
			return $photo;
		} catch (PDOException $e) {
			print "连接数据库失败。";
			die();
		}
	}
	
	function save_perm($id, $userid, $perm) {
		try {
			$sth = $this->dbh->prepare('insert into permission(userid,photoid,perm)values(:userid,:photoid,:perm)');
			$sth->bindParam(':userid', $userid, PDO::PARAM_INT);
			$sth->bindParam(':photoid', $id, PDO::PARAM_INT);
			$sth->bindParam(':perm', $perm, PDO::PARAM_STR);
			echo $id."=====".$userid."=====".$perm;
			$sth->execute();
			$arr = $sth->errorInfo();
			//$this->dbh->commit();
			//print_r($arr);
		} catch (PDOException $e) {
			print "连接数据库失败。";
			die();
		}
	}
	
	function del_perm($id, $userid, $perm) {
		try {
			$sth = $this->dbh->prepare('delete from permission where userid=:userid AND photoid=:photoid AND perm=:perm');
			$sth->bindParam(':userid', $userid, PDO::PARAM_INT);
			$sth->bindParam(':photoid', $id, PDO::PARAM_INT);
			$sth->bindParam(':perm', $perm, PDO::PARAM_STR);
			$sth->execute();
			$arr = $sth->errorInfo();
			//print_r($arr);
		} catch (PDOException $e) {
			print "连接数据库失败。";
			die();
		}
	}
	
	function findPermByUser($userid, $photoid) {
		try {
			$sth = $this->dbh->prepare('SELECT * FROM permission WHERE userid=:userid AND photoid=:photoid');
			$sth->bindParam(':userid', $userid, PDO::PARAM_INT);
			$sth->bindParam(':photoid', $photoid, PDO::PARAM_INT);
			$sth->execute();
			//print_r($sth->errorInfo());
			$result = $sth->fetch();
			if ($result["id"] > 0)
				return "read";
			else
				return "";
			//$photo = new Photo($result["id"],$result["path"],$result["name"],$result["extname"],$result["uptime"]);
			//$user = $userdb->findById($result["userid"]);
			//$photo->setUser($user);
			//return $photo;
		} catch (PDOException $e) {
			print "连接数据库失败。";
			die();
		}
	}
}
?>