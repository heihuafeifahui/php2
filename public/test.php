<?php
class A {
	public static function getInstance() {
		static $b = null;
		if ($b === null) {
			$b = new B();
		}
		return $b;
	}
}

class B {
	public $text = "";
	public function __construct() {
		$this->text = "B".mt_rand(0,99999);
	}
}

var_dump(A::getInstance());
?>