<?php

class Comment
{

    private $id;

    private $photoid;

    private $userid;

    private $content;

    private $pubtime;

    function __construct($id,$photoid,$userid,$content,$pubtime)
    {
        $this->id = $id;
        $this->photoid = $photoid;
        $this->userid = $userid;
        $this->content = $content;
        $this->pubtime = $pubtime;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getPhotoid()
    {
        return $this->photoid;
    }

    public function setPhotoid($photoid)
    {
        $this->photoid = $photoid;
    }

    public function getUserid()
    {
        return $this->userid;
    }

    public function setUserid($userid)
    {
        $this->userid = $userid;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function getPubtime()
    {
        return $this->pubtime;
    }

    public function setPubtime($pubtime)
    {
        $this->pubtime = $pubtime;
    }
}

?>