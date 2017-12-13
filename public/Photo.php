<?php

class Photo
{
    
    private $id;
	private $tagjson;
    private $path;
    private $name;
    private $extname;
    private $uptime;
    private $userid;
	private $user;
	private $comments = array();
    
    function __construct($id,$tagjson,$path,$name,$extname,$uptime){
        $this->id = $id;
		$this->tagjson = $tagjson;
        $this->path = $path;
        $this->name = $name;
        $this->extname = $extname;
        $this->uptime = $uptime;
    }
	
	private $tags = array();
	
	public function getTags() {
		return json_decode($this->getTagjson(), true);
	}
	
	public function addTag($tag) {
		$tags = $this->getTags();
		$tags[] = $tag;
		$this->tagjson = json_encode($tags);
	}
	
 public function getId()
    {
        return $this->id;
    }

 public function setId($id)
    {
        $this->id = $id;
    }
	
	public function getTagjson()
    {
        return $this->tagjson;
    }

 public function setTagjson($tagjson)
    {
        $this->tagjson = $tagjson;
    }

 public function getPath()
    {
        return $this->path;
    }

 public function setPath($path)
    {
        $this->path = $path;
    }

 public function getName()
    {
        return $this->name;
    }

 public function setName($name)
    {
        $this->name = $name;
    }

 public function getExtname()
    {
        return $this->extname;
    }

 public function setExtname($extname)
    {
        $this->extname = $extname;
    }

 public function getUptime()
    {
        return $this->uptime;
    }

 public function setUptime($uptime)
    {
        $this->uptime = $uptime;
    }
	
	public function getUserid()
    {
        return $this->userid;
    }
	
	public function setUserid($userid)
    {
        $this->userid = $userid;
    }
	
	public function getUser()
    {
        return $this->user;
    }
	
	public function setUser($user)
    {
        $this->user = $user;
    }
	
	public function getComments()
    {
        return $this->comments;
    }
	
	public function setComments($comments)
    {
        $this->comments = $comments;
    }

}

?>