<?php

class User
{

    private $id;

    private $account;

    private $passwd;

    private $name;

    private $image;

    private $regtime;
	
	private $perm;

    function __construct($id, $account, $passwd, $name, $image, $regtime)
    {
        $this->id = $id;
        $this->account = $account;
        $this->passwd = $passwd;
        $this->name = $name;
        $this->image = $image;
        $this->regtime = $regtime;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getAccount()
    {
        return $this->account;
    }

    public function setAccount($account)
    {
        $this->account = $account;
    }

    public function getPasswd()
    {
        return $this->passwd;
    }

    public function setPasswd($passwd)
    {
        $this->passwd = $passwd;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    public function getRegtime()
    {
        return $this->regtime;
    }

    public function setRegtime($regtime)
    {
        $this->regtime = $regtime;
    }
	
	public function getPerm()
    {
        return $this->perm;
    }

    public function setPerm($perm)
    {
        $this->perm = $perm;
    }
}

?>