<?php

class PageUtil
{

    private $total = 0;
    private $pagesize = 3;
    private $start = 0;
    private $list = array();
 // 列表数据
    private $pagecount = 0;
 // 总页数
    private $page = 1;
 // 当前页
    private $prepage = 1;
 // 上一页
    private $nextpage = 1;
 // 下一页
    private $pages = array();
 // 5个页码
    public function __construct($total, $page, $pagesize)
    {
        $this->total = $total;
        if ($this->total < 0)
            $this->total = 0;
        $this->page = $page;
        if ($this->page < 1)
            $this->page = 1;
        $this->pagesize = $pagesize;
        if ($this->pagesize < 3)
            $this->pagesize = 3;
        //$this->list = $list;
        
        if ($total <= 0) {
            $this->pagecount = 0;
        } else
            $this->pagecount = ceil($total / $pagesize);
        
        if ($this->page > $this->pagecount)
            $this->page = $this->pagecount;
        
        $this->start = ($page-1)*$pagesize;
        
        $this->prepage = $this->page-1;
        if ($this->prepage <= 0)
            $this->prepage = 1;
        $this->nextpage = $this->page + 1;
        if ($this->nextpage > $this->pagecount)
            $this->nextpage = $this->pagecount;
			
		$s = $this->page-2;
		if ($s < 1)
            $s = 1;
		if ($this->page == 1)
			$e = $this->page+4;
		else if ($this->page == 2)
			$e = $this->page+3;
		else if ($this->page == $this->pagecount) {
			$s = $this->page-4;
			$e = $this->page;
		} else if ($this->page == $this->pagecount-1) {
			$s = $this->page-3;
			$e = $this->pagecount;
		} else
			$e = $this->page+2;
		if ($e > $this->pagecount)
            $e = $this->pagecount;
		for ($i=$s; $i<=$e; $i++) {
			$this->pages[] = $i;
		}
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

    public function getPage()
    {
        return $this->page;
    }

    public function setPage($page)
    {
        $this->page = $page;
    }

    public function getPrepage()
    {
        return $this->prepage;
    }

    public function setPrepage($prepage)
    {
        $this->prepage = $prepage;
    }

    public function getNextpage()
    {
        return $this->nextpage;
    }

    public function setNextpage($nextpage)
    {
        $this->nextpage = $nextpage;
    }

    public function getPages()
    {
        return $this->pages;
    }

    public function setPages($pages)
    {
        $this->pages = $pages;
    }
 public function getTotal()
    {
        return $this->total;
    }

 public function setTotal($total)
    {
        $this->total = $total;
    }

 public function getPagesize()
    {
        return $this->pagesize;
    }

 public function setPagesize($pagesize)
    {
        $this->pagesize = $pagesize;
    }

 public function getStart()
    {
        return $this->start;
    }

 public function setStart($start)
    {
        $this->start = $start;
    }

}

?>