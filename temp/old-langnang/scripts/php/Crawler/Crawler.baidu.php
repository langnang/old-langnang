<?php
include_once "Crawler.php";

class BaiduModel
{
    const baseUrl = "http://www.baidu.com/";
    public $nodes = array();
}

class BaiduNodeModel
{
    public $title;// 标题
    public $link;// 链接
}

class BaiduController extends BaiduModel
{
    function crawlerSearch($kw, $page = 1)
    {
        $pn = ($page - 1) * 10;
        $crawler = new CrawlerController(self::baseUrl . "s?wd=$kw&pn=$pn");
        $crawler->run();
        $content = $crawler->getContent();
        preg_match_all('#<div class="result c-container new-pmd"(.*?)href = "(.*?)" target="_blank"	>(.*?)</a></h3>(.*?)</div>#si', $content, $nodes);
//        var_dump($nodes);
        foreach ($nodes[0] as $k => $v) {
            $node = new BaiduNodeController();
            $node->setLink($nodes[2][$k]);
            $node->setTitle($nodes[3][$k]);
//            $this->nodes[$k] = $node;
            array_push($this->nodes, $node);
        }
    }
}

class BaiduNodeController extends BaiduNodeModel
{
    function __construct()
    {
    }

    /**
     * @param mixed $link
     */
    function setLink($link)
    {
        $this->link = $link;
    }

    /**
     * @param mixed $title
     */
    function setTitle($title)
    {
        $this->title = $title;
    }
}

$baidu = new BaiduController();
$baidu->crawlerSearch("万族之劫", 2);
