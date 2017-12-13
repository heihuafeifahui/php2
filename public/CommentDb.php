<?php
require_once 'BaseDao.php';
require_once 'Comment.php';
//require_once 'UserDb.php';

class CommentDb extends BaseDao {
	
	function findByPhotoid($photoid, $page, $pagesize) {
		try {
			$start = ($page-1)*$pagesize;
			$sth = $this->dbh->prepare('SELECT * FROM comment WHERE photoid=:photoid ORDER BY pubtime DESC LIMIT :start,:pagesize');
			$sth->bindParam(':photoid', $photoid, PDO::PARAM_INT);
			$sth->bindParam(':start', $start, PDO::PARAM_INT);
			$sth->bindParam(':pagesize', $pagesize, PDO::PARAM_INT);
			$sth->execute();
			$list = array();
			while ($value = $sth->fetch(PDO::FETCH_BOTH)) {
				$comment = new Comment($value["id"],$value["photoid"],$value["userid"],$value["content"],$value["pubtime"]);
				$list[] = $comment;
			}
			return $list;
		} catch (PDOException $e) {
			print "连接数据库失败。";
			die();
		}
	}
	
	function save($photoid, $userid, $content) {
		$sth = $this->dbh->prepare('insert into comment(photoid,userid,content,pubtime)values(:photoid,:userid,:content,NOW())');
		$sth->bindParam(':photoid', $photoid, PDO::PARAM_INT);
		$sth->bindParam(':userid', $userid, PDO::PARAM_INT);
		$sth->bindParam(':content', $content, PDO::PARAM_STR);
		$sth->execute();
		$arr = $sth->errorInfo();
		//print_r($arr);
	}
	
}
?>