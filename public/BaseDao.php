<?php
abstract class BaseDao {
	protected $dbh;
	
	public function __construct() {
		try {
			$this->dbh = new PDO('mysql:host=localhost;dbname=db', "root", "root", array(
				PDO::ATTR_PERSISTENT => true
			));
			return $dbh;
		} catch (PDOException $e) {
			print "连接数据库失败。";
			die();
		}
	}
}
?>