<?php
class Page {
	private $list;
	private $pagecount;
	
	
	public function __construct($list, $pagecount)
    {
        $this->list = $list;
        $this->pagecount = $pagecount;
    }
	
	public function getList()
    {
        return $this->list;
    }

    public function setList($list)
    {
        $this->list = $list;
    }
	
	public function getPagecount()
    {
        return $this->pagecount;
    }

    public function setPagecount($pagecount)
    {
        $this->pagecount = $pagecount;
    }
}
?>