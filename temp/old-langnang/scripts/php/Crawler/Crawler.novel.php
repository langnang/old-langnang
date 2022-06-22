<?php

include_once "Crawler.php";

class NovelSiteModel
{
    const sites = array(
        "qidian" => "http://www.qidian.com/",
        "feilu" => "http://b.faloo.com/",
        "readnovel" => "http://www.readnovel.com/",
        "http://www.hongxiu.com/",
        "http://www.xxsy.net/",
        "http://top.baidu.com/buzz/book.html",
        "http://www.xs8.cn/",
        "http://www.jjwxc.net/",
        "zongheng" => "http://www.zongheng.com/",
        "http://www.kanshu.com/",
        "http://book.sina.com.cn/",
        "http://yuedu.163.com/",
        "http://www.zhulang.com/",
        "http://www.19lou.com/topic/html/2016/yuedu.html",
        "http://www.17k.com/",
        "http://chuangshi.qq.com/",
        "http://www.3gsc.com.cn/",
        "http://www.heiyan.com",
        "http://www.qdmm.com/",
        "hongshu" => "http://www.hongshu.com/",
        "http://www.motie.com/",
        "http://www.kujiang.com/",
        "http://www.shuhai.com/",
        "http://www.xiang5.com/",
        "http://yuedu.baidu.com",
        "http://www.fmx.cn/",
        "http://www.hbooker.com",
    );
    public $site;
    public $url;
    public $info;
    public $catalog;
    public $chapter;
}

class NovelModel
{

    const __sites = array(
        "http://www.qidian.com/",
        "http://b.faloo.com/",
        "http://www.readnovel.com/",
        "http://www.hongxiu.com/",
        "http://www.xxsy.net/",
        "http://top.baidu.com/buzz/book.html",
        "http://www.xs8.cn/",
        "http://www.jjwxc.net/",
        "http://www.zongheng.com/",
        "http://www.kanshu.com/",
        "http://book.sina.com.cn/",
        "http://yuedu.163.com/",
        "http://www.zhulang.com/",
        "http://www.19lou.com/topic/html/2016/yuedu.html",
        "http://www.17k.com/",
        "http://chuangshi.qq.com/",
        "http://www.3gsc.com.cn/",
        "http://www.heiyan.com",
        "http://www.qdmm.com/",
        "http://www.hongshu.com/",
        "http://www.motie.com/",
        "http://www.kujiang.com/",
        "http://www.shuhai.com/",
        "http://www.xiang5.com/",
        "http://yuedu.baidu.com",
        "http://www.fmx.cn/",
        "http://www.hbooker.com",
    );
    public $site;
    public $id;
    public $name;
    public $catalog;
    public $author;
    public $update;
    public $link;
    const sites = array(
        "qidian" => array(
            "url" => "http://www.qidian.com/",
        ),
    );

}

class AuthorModel
{
    public $id;
    public $name;
}

class ChapterModel
{
    public $index;
    public $id;
    public $title;
    public $datetime;
    public $content;
    public $words;
    public $link;
}

class NovelSiteController extends NovelSiteModel
{
    public function __construct($site)
    {
        if (!array_key_exists($site, self::sites)) {
            $site = "qidian";
        }
        $this->site = $site;
        $this->url = self::sites[$site];
    }

    /**
     * @param string $id
     */
    public function setCatalog($id)
    {
        switch ($this->site) {
            case "qidian":
                $this->catalog = array(
                    "url" => "https://book.qidian.com/info/$id#Catalog",
                    "patterns" => array(
                        '',
                        ''
                    ),
                    "matches" => array(
                        function ($matches) {
                        },
                        function ($matches) {
                        },
                    )
                );
                break;
            default:
                break;
        }
    }

    /**
     * @param string $id
     */
    public function setInfo($id)
    {
        switch ($this->site) {
            case "qidian":
                $this->info = array(
                    "url" => "https://book.qidian.com/info/$id",
                    "patterns" => array(
                        '',
                        ''
                    ),
                    "matches" => array(
                        function ($matches) {
                        },
                        function ($matches) {
                        },
                    )
                );
                break;
            default:
                break;
        }
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }
}

class NovelController extends NovelModel
{
    public function __construct($site = "qidian", $id)
    {
        self::setSite($site);
        self::setId($id);
        $this->site->setInfo($id);
    }


    public function crawlerInfo()
    {
        $crawler = new \CrawlerModule\CrawlerModule($this->site->info["url"]);
        $crawler->run();
        $content = $crawler->getContent();
//        echo '<textarea rows="25" cols="5"  style="width: 1000px;">' . $content . '</textarea></br>';
        preg_match_all('#<div class="book-detail-wrap center990"> <div class="book-information cf" data-l1="2"> <div class="book-img"> <a class="J-getJumpUrl" id="bookImg" href="//read.qidian.com/chapter/VnLxpIiGuCZMWSz3e5zy7Q2/MmOrOFWcRgvwrjbX3WA1AA2" data-eid="qd_G09" data-bid="1023058602" data-firstchapterjumpurl="//read.qidian.com/chapter/VnLxpIiGuCZMWSz3e5zy7Q2/MmOrOFWcRgvwrjbX3WA1AA2"><img src="//bookcover.yuewen.com/qdbimg/349573/1023058602/180"></a> </div> <div class="book-info "> <h1> <em>(.*?)</em>(.*?)</div>#si', $content, $info);
//        preg_match_all('#<div class="book-info ">(.*?)</div>#si', $content, $book_info);
        var_dump($info);

//        var_dump($book_info[1]);
//        preg_match('#<h1> <em>(.*?)</em> <span><a class="writer" href="//me.qidian.com/authorIndex.aspx\?id=(.*?)" target="_blank" data-eid="qd_G08">(.*?)</a> 著</span> </h1>#si', $book_info[1], $book_info_1);
//        var_dump($book_info_1);
//        $this->name = $book_info_1[1];
//        $this->author = new AuthorController();
//        $this->author->id = $book_info_1[2];
//        $this->author->name = $book_info_1[3];
//        preg_match('#<div class="book-intro"> <p>(.*?)</p> </div>#si', $content, $book_intro);
//        $this->intro = preg_replace('#<br>#si', '\n', $book_intro[1]);
//        var_dump($this);
    }


    /**
     * @param mixed $site
     */
    public function setSite($site)
    {
        $this->site = new NovelSiteController($site);
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
}

class AuthorController extends AuthorModel
{
}

class ChapterController extends ChapterModel
{
}