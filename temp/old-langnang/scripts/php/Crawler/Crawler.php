<?php

namespace CrawlerModule;

class CrawlerModel
{
    public $url;// 地址
    public $title;// 标题
    public $content;// 内容
    public $html;// 页面
    public $method = "file_get_contents";// 方式
    public $rules = array();// 爬取数据后的处理规则
    public $result;// 爬取处理后的数据

    /**
     * @param mixed $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @param string $method
     */
    public function setMethod($method)
    {
        $this->method = $method;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getHtml()
    {
        return $this->html;
    }
}

interface CrawlerInterface
{
}

class CrawlerModule extends CrawlerModel implements CrawlerInterface
{
    function __construct($url, $method = "file_get_contents")
    {
        self::setUrl($url);
        self::setMethod($method);
    }

    function run()
    {
        if ($this->method === "file_get_contents") {
            self::setContent(self::runByFileGetContents());
        } else {
            self::setContent(self::runByFileGetContents());
        }
    }

    function runByFileGetContents()
    {
        $html = file_get_contents($this->url);
        // 乱码解决办法，把其他编码格式通过 mb_convert_encoding 函数统一转为 UTF-8 格式
        $html = mb_convert_encoding($html, 'UTF-8', 'UTF-8,GBK,GB2312,BIG5');
        $html = str_replace(array("\r\n", "\r", "\n", "/\r|\n|\t/"), "", $html);
        $html = preg_replace("/\s(?=\s)/", "\\1", $html);
        // 通过 preg_match 函数提取获取页面的标题信息
        preg_match("/<title>(.*)<\/title>/iU", $html, $titleArr);

        $this->title = $titleArr[1];

        return $html;
    }

    public function getHtmlByFileGetContent()
    {
        $html = file_get_contents($this->url);
        // 乱码解决办法，把其他编码格式通过 mb_convert_encoding 函数统一转为 UTF-8 格式
        $html = mb_convert_encoding($html, 'UTF-8', 'UTF-8,GBK,GB2312,BIG5');
        // 页面源码由多行变单行
        $html = str_replace(array("\r\n", "\r", "\n", "/\r|\n|\t/"), "", $html);
        // 连续空格变单个空格
        $html = preg_replace("/\s(?=\s)/", "\\1", $html);
        $this->html = $html;
        // 通过 preg_match 函数提取获取页面的标题信息
        preg_match("/<title>(.*)<\/title>/iU", $html, $titleArr);
        $this->title = $titleArr[1];
    }

    /**
     * @return mixed
     */
    public function getHtml()
    {
        if ($this->method === 'file_get_contents') {
            self::getHtmlByFileGetContent();
        } else {
            self::getHtmlByFileGetContent();
        }
        return $this->html;
    }
}
