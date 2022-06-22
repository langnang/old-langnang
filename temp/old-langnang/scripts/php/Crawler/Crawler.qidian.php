<?php
include_once __DIR__ . "/Crawler.php";

class QiDianModel
{
    const baseUrl = "https://www.qidian.com/";
    const novelUrl = "https://book.qidian.com/info/";
    const searchUrl = "https://www.qidian.com/search";
    public $coverrec = array();
    public $strongrec = array();
    public $sanjiang = array();
    public $rank = array(
        "yuepiao" => array(),
        "hotsales" => array(),
        "readIndex" => array(),
        "recom" => array(),
        "collect" => array(),
        "signnewbook" => array(),
        "pubnewbook" => array(),
        "fengyun" => array(),
    );
    public $searches = array();
}

class AuthorModel
{
    public $id;
    public $name;
}

class NovelModel
{
    public $id;// ID
    public $type;// 分类
    public $status;// 状态：连载、完结、太监
    public $name;// 书名
    public $author;// 作者
    public $intro;// 介绍
    public $catalog;// 目录
    public $words;// 字数
    public $recommend_total;
    public $recommend_week;
    public $update;// 最新章节
}

class NovelChapterModel
{
    const freeUrl = "https://read.qidian.com/chapter/";
    const vipUrl = "";
    public $index;
    public $title;
    public $text;
    public $datetime;
    public $link;
    public $free;
    public $words;
    public $content;
}

class QiDianController extends QiDianModel
{
    function __construct()
    {
    }


    function crawlerFinish()
    {
    }

    /**
     * 单一榜单
     * @param string $rank
     * @param int $page
     * @return bool
     */
    function crawlerRank($rank = "yuepiao", $page = 1)
    {
        if (!isset($this->rank[$rank])) {
            return false;
        }
        $crawler = new \CrawlerModule\CrawlerModule(self::baseUrl . "rank/$rank?page=$page");
        $crawler->run();
        $content = $crawler->getContent();
        preg_match_all('#<li data-rid="(.*?)">(.*?) target="_blank" data-eid="qd_C40" data-bid="(.*?)">(.*?)</a></h4> <p class="author"> <img src="//qidian.gtimg.com/qd/images/ico/user.f22d3.png"><a class="name" href="//me.qidian.com/authorIndex.aspx\?id=(.*?)" target="_blank" data-eid="qd_C41">(.*?)</a><em>\|</em><a href="//www.qidian.com/(.*?)" target="_blank" data-eid="qd_C42">(.*?)</a><em>\|</em><span>(.*?)</span> </p> <p class="intro"> (.*?)</p> <p class="update"><a href="(.*?)" target="_blank" data-eid="qd_C43" data-bid="(.*?)最新更新 (.*?)</a><em>\&\#183;</em><span>(.*?)</span> </p> </div>(.*?)</li>#si', $content, $novels);
//        var_dump($novels);
        foreach ($novels[0] as $k => $v) {
            $novel = new NovelController($novels[3][$k]);
            $novel->type = $novels[8][$k];
            $novel->name = $novels[4][$k];
            $novel->status = $novels[9][$k];
            $novel->author = new AuthorController();
            $novel->author->id = $novels[5][$k];
            $novel->author->name = $novels[6][$k];
            $novel->intro = $novels[10][$k];
            $novel->update = new NovelChapterController();
            $novel->update->title = $novels[13][$k];
            $novel->update->datetime = $novels[14][$k];
            $this->rank[$rank][$k] = $novel;
        }
    }

    /**
     * 人气榜单
     * @param int $chn
     */
    function crawlerRanks($chn = -1)
    {
        $crawler = new \CrawlerModule\CrawlerModule(self::baseUrl . "rank?chn=$chn");
        $crawler->run();
        $content = $crawler->getContent();
//        echo '<textarea rows="25" cols="5"  style="width: 1200px;">' . $content . '</textarea></br>';
        preg_match_all('#<li class="unfold" data-rid="1"> <div class="book-wrap cf"> <div class="book-info fl"> <h3>NO.1</h3> <h4> <a href="//book.qidian.com/info/(.*?)" target="_blank" data-eid="qd_C40" data-bid="(.*?)">(.*?)</a>(.*?)<p class="author"> <a class="type" href="//www.qidian.com/(.*?)" target="_blank" data-eid="qd_C42">(.*?)</a><i>\&\#183;</i><a class="writer" href="//me.qidian.com/authorIndex.aspx\?id=(.*?)" target="_blank" data-eid="qd_C41">(.*?)</a> </p> </div> <div class="book-cover"> <a class="link" href="//book.qidian.com/info/(.*?)" target="_blank" data-eid="qd_C39" data-bid="(.*?)"> <img src="(.*?)"> </a> <span></span> </div> </div> </li>#si', $content, $no_1);
        foreach ($no_1[0] as $k => $v) {
            $novel = new NovelController($no_1[1][$k]);
            $novel->type = $no_1[6][$k];
            $novel->name = $no_1[3][$k];
            $novel->author = new AuthorController();
            $novel->author->id = $no_1[7][$k];
            $novel->author->name = $no_1[8][$k];
            switch ($k) {
                case 0:
                    $this->rank["yuepiao"][0] = $novel;
                    break;
                case 1:
                    $this->rank["hotsales"][0] = $novel;
                    break;
                case 2:
                    $this->rank["readIndex"][0] = $novel;
                    break;
                case 3:
                    $this->rank["recom"][0] = $novel;
                    break;
                case 4:
                    $this->rank["collect"][0] = $novel;
                    break;
                case 5:
                    $this->rank["signnewbook"][0] = $novel;
                    break;
                case 6:
                    $this->rank["pubnewbook"][0] = $novel;
                    break;
                case 7:
                    $this->rank["fengyun"][0] = $novel;
                    break;
            }
        }
//        var_dump($this->rank);
        // <li data-rid="2"> <div class="num-box"><span class="num2">2</span></div> <div class="name-box"> <a class="name" href="//book.qidian.com/info/1017125042" target="_blank" data-eid="qd_C40" data-bid="1017125042">临渊行</a> <i class="total">112993</i> </div> </li>
        preg_match_all('#<li data-rid="(.*?)"> <div class="num-box"><span class="num(.*?)</span></div> <div class="name-box"> <a class="name" href="//book.qidian.com/info/(.*?)" target="_blank" data-eid="qd_C40" data-bid="(.*?)">(.*?)</a>(.*?)</li>#si', $content, $novels);
//        var_dump($novels);
        foreach ($novels[0] as $k => $v) {
            $novel = new NovelController($novels[3][$k]);
            $novel->name = $novels[5][$k];
//            var_dump($novel);
//            var_dump(floor($k / 9));
            switch (floor($k / 9)) {
                case 0:
                    $this->rank["yuepiao"][$k % 9 + 1] = $novel;
//                    array_push($this->rank["yuepiao"], $novel);
                    break;
                case 1:
                    $this->rank["hotsales"][$k % 9 + 1] = $novel;
//                    array_push($this->rank["hotsales"], $novel);
                    break;
                case 2:
                    $this->rank["readIndex"][$k % 9 + 1] = $novel;
//                    array_push($this->rank["readIndex"], $novel);
                    break;
                case 3:
                    $this->rank["recom"][$k % 9 + 1] = $novel;
//                    array_push($this->rank["recom"], $novel);
                    break;
                case 4:
                    $this->rank["collect"][$k % 9 + 1] = $novel;
//                    array_push($this->rank["collect"], $novel);
                    break;
                case 5:
                    $this->rank["signnewbook"][$k % 9 + 1] = $novel;
//                    array_push($this->rank["signnewbook"], $novel);
                    break;
                case 6:
                    $this->rank["pubnewbook"][$k % 9 + 1] = $novel;
//                    array_push($this->rank["pubnewbook"], $novel);
                    break;
                case 7:
                    $this->rank["fengyun"][$k % 9 + 1] = $novel;
//                    array_push($this->rank["fengyun"], $novel);
                    break;
            }
        }
//        var_dump($this->rank);
    }


    /**
     * 查询
     * @param string $kw
     * @param int $page
     */
    function crawlerSearch($kw = "", $page = 1)
    {
//        var_dump($kw);
        $url = self::searchUrl . "?kw=$kw";
//        var_dump($url);
        $crawler = new \CrawlerModule\CrawlerModule($url);
        $crawler->run();
        $content = $crawler->getContent();
//        echo '<textarea rows="25" cols="5"  style="width: 1000px;">' . $content . '</textarea></br>';
        preg_match_all('#<div class="book-mid-info"> <h4><a href="//book.qidian.com/info/(.*?)" target="_blank" data-eid="qd_S24" data-bid="(.*?)">(.*?)</a></h4> <p class="author"> <img src="//qidian.gtimg.com/qd/images/ico/user.f22d3.png"><a class="name" href="//my.qidian.com/author/(.*?)" target="_blank" data-eid="qd_S25">(.*?)</a><em>\|</em><a href="//www.qidian.com/(.*?)" target="_blank" data-eid="qd_S26">(.*?)</a><em>\|</em><span>(.*?)</span> </p> <p class="intro"> (.*?) </p> <p class="update"><a href="(.*?)" target="_blank">最新更新 (.*?)</a>(.*?)</div>#si', $content, $novels);
//        var_dump($novels);
        foreach ($novels[0] as $k => $v) {
            $novel = new NovelController($novels[1][$k]);
            $author = new AuthorController();
            $update = new NovelChapterController();
            $novel->id = $novels[1][$k];
            $novel->name = $novels[3][$k];
            $novel->type = $novels[7][$k];
            $novel->status = $novels[8][$k];
            $novel->intro = $novels[9][$k];
            $author->id = $novels[4][$k];
            $author->name = $novels[5][$k];
            $update->setLink($novels[10][$k]);
            $update->title = $novels[11][$k];
            $novel->update = $update;
            $novel->author = $author;
            array_push($this->searches, $novel);
        }
//        var_dump($this->searches);
    }

    /**
     * 往期封推
     * @param int $page
     */
    function crawlerPreviousCoverrec($page = 1)
    {
        $crawler = new \CrawlerModule\CrawlerModule(self::baseUrl . "book/coverrec?page=$page");
        $crawler->run();
        $content = $crawler->getContent();
//        echo '<textarea rows="25" cols="5"  style="width: 1200px;">' . $content . '</textarea></br>';
        preg_match_all('#<li> <div class="focus-img"> <a href="https://book.qidian.com/info/(.*?)" data-eid="qd_A178" target="_blank"><img src="(.*?)" alt=""></a> </div> <div class="info"> <span>(.*?)</span> <p><a href="https://book.qidian.com/info/(.*?)" title="(.*?)" target="_blank">(.*?)</a></p> </div> </li>#si', $content, $novels);
//        var_dump($novels);
        foreach ($novels[0] as $k => $v) {
            $novel = new NovelController();
            $novel->id = $novels[1][$k];
            $novel->name = $novels[5][$k];
            $this->coverrec[($page - 1) * 60 + $k + 1] = $novel;
        }
//        var_dump($this->coverrec);
    }

    /**
     * 往期强推
     * @param int $page
     */
    function crawlerPreviousStrongrec($page = 1)
    {
        $crawler = new \CrawlerModule\CrawlerModule(self::baseUrl . "book/strongrec?page=$page");
        $crawler->run();
        $content = $crawler->getContent();
        preg_match_all('#<li> <a href="//www.qidian.com/(.*?)" class="channel" data-eid="qd_A175" target="_blank"> <em>「</em>(.*?)<em>」</em> </a> <strong> <a href="//book.qidian.com/info/(.*?)" class="name" data-eid="qd_A176" data-bid="(.*?)" title="(.*?)" target="_blank">(.*?)</a> </strong> <a href="//me.qidian.com/authorIndex.aspx\?id=(.*?)" class="author" data-eid="qd_A177" title="(.*?)" target="_blank">(.*?)</a> </li>#si', $content, $novels);
        $novelArray = array();
        foreach ($novels[0] as $k => $v) {
            if ($k / 17 > 0 && $k % 17 == 0) {
                $this->strongrec[$k / 17] = $novelArray;
                $novelArray = array();
            }
            $novel = new NovelController($novels[3][$k]);
            $novel->type = $novels[2][$k];
            $novel->name = $novels[5][$k];
            $novel->author = new AuthorController();
            $novel->author->id = $novels[7][$k];
            $novel->author->name = $novels[8][$k];
            array_push($novelArray, $novel);
        }
//        var_dump($this->strongrec);
    }

    /**
     * 往期三江
     * @param int $page
     */
    function crawlerPreviousSanJiang($page = 1)
    {
        $content = Crawler(array(
            "url" => self::baseUrl . "book/sanjiang?page=$page"
        ));
        preg_match_all('#<li> <a href="//www.qidian.com/(.*?)" class="channel" data-eid="qd_A175" target="_blank"> <em>「</em>(.*?)<em>」</em> </a> <strong> <a href="//book.qidian.com/info/(.*?)" class="name" title="(.*?)" data-eid="qd_A176" data-bid="(.*?)" target="_blank">(.*?)</a> </strong> <span class="rec" title="(.*?)" target="_blank">(.*?)</span> </li>#si', $content, $novels);
        $novelArray = array();
        foreach ($novels[0] as $k => $v) {
            if ($k / 17 > 0 && $k % 17 == 0) {
                $this->sanjiang[($page - 1) * 12 + $k / 17] = $novelArray;
                $novelArray = array();
            }
            $novel = new NovelController();
            $novel->id = $novels[3][$k];
            $novel->type = $novels[2][$k];
            $novel->name = $novels[4][$k];
            $novel->author = $novels[7][$k];
            array_push($novelArray, $novel);
        }
    }

    /**
     * 主页
     */
    public function crawlerIndex()
    {
        $crawler = new \CrawlerModule\CrawlerModule(self::baseUrl);
        $crawler->run();
        $content = $crawler->getContent();
        self::crawlerLatestCoverrec($content);
        self::crawlerLatestStrongrec($content);
        self::crawlerLatestSanJiang($content);
    }

    /**
     * 本日封推
     */
    function crawlerLatestCoverrec($content)
    {
    }

    /**
     * 本周强推
     */
    function crawlerLatestStrongrec($content)
    {
        preg_match_all('#<li class="(.*?)" data-rid="(.*?)"><a class="channel" href="//www.qidian.com/(.*?)" target="_blank" data-eid="qd_A102"><em>「</em>(.*?)<em>」</em></a><strong><a class="name" href="//book.qidian.com/info/(.*?)" target="_blank" data-eid="qd_A103" data-bid="(.*?)" title="(.*?)">(.*?)</a>(.*?)</strong><a class="author" href="//me.qidian.com/authorIndex.aspx\?id=(.*?)" data-eid="qd_A104" target="_blank">(.*?)</a></li>#si', $content, $novels);
        $novelArray = array();
        foreach ($novels[0] as $k => $v) {
            $novel = new NovelController($novels[5][$k]);
            $novel->type = $novels[4][$k];
            $novel->name = $novels[7][$k];
            $novel->author = new AuthorController();
            $novel->author->id = $novels[10][$k];
            $novel->author->name = $novels[11][$k];
            array_push($novelArray, $novel);
        }
        $this->strongrec[0] = $novelArray;
    }

    /**
     * 本周三江
     */
    function crawlerLatestSanJiang($content)
    {
        preg_match_all('#<li class="(.*?)" data-rid="(.*?)"><a class="channel" href="//www.qidian.com/(.*?)" data-eid="qd_A112" target="_blank"><em>「</em>(.*?)<em>」</em></a><strong><a class="name" href="//book.qidian.com/info/(.*?)" data-eid="qd_A113" target="_blank" data-bid="(.*?)" title="(.*?)">(.*?)</a>(.*?)</strong><span class="rec" target="_blank">(.*?)</span></li>#si', $content, $novels);
        $novelArray = array();
        foreach ($novels[0] as $k => $v) {
            $novel = new NovelController($novels[5][$k]);
            $novel->type = $novels[4][$k];
            $novel->name = $novels[7][$k];
            $novel->author = new AuthorController();
            $novel->author->name = $novels[10][$k];
            array_push($novelArray, $novel);
        }
        $this->sanjiang[0] = $novelArray;
    }
}

class NovelController extends NovelModel
{
    function __construct($id)
    {
        self::setId($id);
    }

    /**
     * 获取小说信息
     */
    function crawlerInfo()
    {
        $crawler = new \CrawlerModule\CrawlerModule("https://book.qidian.com/info/$this->id");
        $crawler->run();
        $content = $crawler->getContent();
//        echo '<textarea rows="25" cols="5"  style="width: 1000px;">' . $content . '</textarea></br>';
        preg_match('#<div class="book-info ">(.*?)</div>#si', $content, $book_info);
//        var_dump($book_info[1]);
        preg_match('#<h1> <em>(.*?)</em> <span><a class="writer" href="//me.qidian.com/authorIndex.aspx\?id=(.*?)" target="_blank" data-eid="qd_G08">(.*?)</a> 著</span> </h1>#si', $book_info[1], $book_info_1);
        $this->name = $book_info_1[1];
        $this->author = new AuthorController();
        $this->author->id = $book_info_1[2];
        $this->author->name = $book_info_1[3];
        preg_match('#<div class="book-intro"> <p>(.*?)</p> </div>#si', $content, $book_intro);
        $this->intro = preg_replace('#<br>#si', '\n', $book_intro[1]);
    }

    /**
     * 获取小说章节
     * @done 过滤所有非正文章节
     */
    function crawlerCatalog()
    {
        $crawler = new \CrawlerModule\CrawlerModule("https://book.qidian.com/info/$this->id#Catalog");
        $crawler->run();
        $content = $crawler->getContent();
//        echo '<textarea rows="25" cols="5"  style="width: 1000px;">' . $content . '</textarea></br>';
        preg_match_all('#<li data-rid="(.*?)"><a href="(.*?)" target="_blank" data-eid="qd_G55" data-cid="(.*?)" title="首发时间：(.*?) 章节字数：(.*?)">(.*?)</a>(.*?)</li>#si', $content, $catalogs);
//        var_dump($catalogs);
        $section = 0;
        foreach ($catalogs[0] as $k => $v) {
            $chapter = new NovelChapterController();
            $chapter->index = $section + 1;
            $chapter->setLink("https:" . $catalogs[3][$k]);
            $chapter->datetime = $catalogs[4][$k];
            $chapter->words = (int)$catalogs[5][$k];
            $chapter->title = $catalogs[6][$k];
            if ($chapter->isText()) {
                $section++;
                $this->catalog[$section - 1] = $chapter;
            }
        }
    }

    /**
     * @param mixed $id
     */
    function setId($id)
    {
        $this->id = $id;
    }

    function crawlerSearch($kw)
    {
        $crawler = new CrawlerController("http://www.baidu.com/s?wd=$kw");
        $crawler->run();
        $content = $crawler->getContent();
        preg_match_all('#<div class="result c-container new-pmd"(.*?)href = "(.*?)" target="_blank"	>(.*?)</a></h3>(.*?)</div>#si', $content, $novels);
        var_dump($novels);
    }
}

class NovelChapterController extends NovelChapterModel
{
    public function __construct()
    {
    }

    /**
     * 根据标题检测正文章节
     * @return bool
     */
    public function isText()
    {
        //        if (strstr($this->title, '第') || strstr($this->title, '章')) {
        $this->text = true;
        return true;
//        }
//        return false;
    }

    public function isFree()
    {
        if (stripos($this->link, "read.qidian.com/chapter/") > 0) {
            $this->free = true;
        } else {
            $this->free = false;
        }
    }

    public function crawlerContent()
    {
        $crawler = new \CrawlerModule\CrawlerModule(self::freeUrl . "TOxiwmgRNSfffahp3g1tpg2/1uFYjICD80WaGfXRMrUjdw2");
        $crawler->run();
        $content = $crawler->getContent();
        preg_match_all('#<div class="read-content j_readContent">(.*?)</div>#si', $content, $chapter_content);
//        print $content;
//        echo '<textarea rows="25" cols="5"  style="width: 1200px;">' . $chapter_content[1][0] . '</textarea></br>';
//        var_dump($chapter_content);
        $this->content = $chapter_content[1][0];
        $this->content = preg_replace('#<p>#si', '\n', $chapter_content[1][0]);
    }

    /**
     * @param mixed $link
     */
    public function setLink($link)
    {
        $this->link = $link;
        $this->isFree();
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
        $this->isBody();
    }
}

class AuthorController extends AuthorModel
{
}


//$qidian = new QiDianController();
//$qidian->crawlerSearch("万");
//var_dump($qidian->searches);
//$novel = new NovelController("1022909523");
//$novel->crawlerInfo();
//NovelController::crawlerSearch("万族之劫");

//NovelChapterController::crawlerChapterContent();

//$qidian = new QiDianController();
//$qidian->getLatestStrongrec();
//$qidian->getRank("yuepiao", $page = 3);

//$novel_1 = new NovelController();
//$novel_1->id = "1009480992";
//$novel_1->getInfo();
//var_dump($novel_1);

//$novel_2 = new NovelController();
//$novel_1->id = "1019664125";
//$novel_1->getInfo();


//$page_content = Crawler(array(
//    "url" => $rules["baseUrl"]
//));

//preg_match_all('#<div class="book-list"><ul>(.*?)</ul></div>#si', $page_content, $test1);
//echo '<textarea rows="25" cols="5"  style="width: 1200px;">' . $content . '</textarea></br>';
//print_r($test1[0][2]);
//preg_match_all('#<li (.*?)data-rid="(.*?)">(.*?)</li>#si', $test1[0][2], $novels);
//echo '<textarea rows="10" cols="5"  style="width: 800px;">' . $novels[0][0] . '</textarea></br>';
//print_r($novels);
//    $novelArray = array();
//    foreach ($novels[0] as $k => $v) {
//        $novelArray[$k] = array(
//            "id" => $novels[5][$k],
//            "type" => $novels[4][$k],
//            "name" => $novels[7][$k],
//            "author" => $novels[10][$k]
//        );
//    }
//    print_r($novelArray);