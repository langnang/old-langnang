<?php

/**
 * 豆瓣
 */

include_once __DIR__ . "/../String/url.php";
include_once __DIR__ . "/../String/getUrlParams.php";
// url 参数
$params = getUrlParams(url());
// CNAME
$cname_array = array(
  "book" => array(
    "name" => "读书",
    "children" => array(),
  ),
  "movie" => array(
    "name" => "电影",
    "children" => array(
      "chart" => "排行榜",
      "typerank" => "分类排行榜"
    ),
  ),
);
if (!isset($params["cname"]) || !isset($cname_array[$params["cname"]])) {
  $str = "<ul>";
  foreach ($cname_array as $k => $v) {
    $href = "?cname=" . $k;
    $str .= "<li><a href=$href>" .  $v["name"] . "</a>";
    // if (sizeof($v["children"]) > 0) {
    //   $str .= "<ul>";
    //   foreach ($v["children"] as $k1 => $v1) {
    //     $href .= "&link=" . $k1;
    //     $str .= "<li><a href=$href>" .  $v1 . "</a></li>";
    //   }
    //   $str .= "</ul>";
    // }
    $str .= "</li>";
  }
  $str .= "</ul>";
  echo $str;
  return;
}



include_once __DIR__ . "/../Spider/_.php";


if (isset($params["cname"]) && isset($params["subject_id"])) {
  $cname = $params["cname"];
  $subject_id = $params["subject_id"];
  if ($cname == "movie") {
    $url = "https://movie.douban.com/subject/" . $subject_id;
    new DouBanMovie($url);
  } else if ($cname == "book") {
    $url = "https://book.douban.com/subject/" . $subject_id;
    new DouBanBook($url);
  }
  return;
} else {
  echo json_encode(new ArrayObject(), JSON_UNESCAPED_UNICODE);
  return;
}

class DouBan
{
  function pregHtml($url)
  {
    $html = file_get_contents($url);
    // 乱码解决办法，把其他编码格式通过 mb_convert_encoding 函数统一转为 UTF-8 格式
    $html = mb_convert_encoding($html, 'UTF-8', 'UTF-8,GBK,GB2312,BIG5');
    // 页面源码由多行变单行
    $html = str_replace(array("\r\n", "\r", "\n", "/\r|\n|\t/"), "", $html);
    // 连续空格变单个空格
    $html = preg_replace("/\s(?=\s)/", "\\1", $html);
    // echo '<textarea rows="25" cols="5"  style="width: 1200px;">' . $html . '</textarea></br>';
    return $html;
  }
  // 整体内容
  function pregMain($str)
  {
    preg_match('/<script type="application\/ld\+json">(.*)<\/script>/iU', $str, $match);
    return json_decode($match[1]);
  }
  // 标题
  function pregTitle($str)
  {
    preg_match("/<title>(.*)<\/title>/iU", $str, $match);
    // var_dump($match);
    return $match[1];
  }
}

class DouBanMovie extends DouBan
{
  function __construct($url)
  {
    $html = self::pregHtml($url);
    $movie = self::pregMain($html);
    $movie->title = self::pregTitle($html);
    $movie->summary = self::pregSummary($html);
    $movie->IMDb = self::pregIMDb($html);
    $movie->language = self::pregLanguage($html);
    $movie->world = self::pregWorld($html);
    $movie->runtime = self::pregRuntime($html);

    echo json_encode($movie, JSON_UNESCAPED_UNICODE);
  }


  // 剧情简介
  function pregSummary($str)
  {
    preg_match("/v:summary\" class=\"\">(.*)<\/span>/iU", $str, $match);
    // var_dump($match);
    return $match[1];
  }
  // IMDb
  function pregIMDb($str)
  {
    preg_match("/<a href=\"https:\/\/www.imdb.com\/title\/(.*)\" target=\"_blank\" rel=\"nofollow\">(.*)<\/a>/iU", $str, $match);
    // var_dump($match);
    if (sizeof($match) > 0) {
      return $match[1];
    }
    return null;
  }
  // 语言
  function pregLanguage($str)
  {
    preg_match("/语言:<\/span> (.*)<br\/>/iU", $str, $match);
    // var_dump($match);
    return explode("/", $match[1]);
  }
  // 制片国家/地区
  function pregWorld($str)
  {
    preg_match("/制片国家\/地区:<\/span> (.*)<br\/>/iU", $str, $match);
    // var_dump($match);
    return explode("/", $match[1]);
  }

  // 片长
  function pregRuntime($str)
  {
    preg_match("/v:runtime\" content=\"(.*)\">/iU", $str, $match);
    // var_dump($match);
    return $match[1];
  }
}

class DouBanBook extends DouBan
{
  function __construct($url)
  {
    $html = self::pregHtml($url);
    $book = self::pregMain($html);
    $book->title = self::pregTitle($html);
    $book->publisher = self::pregPublisher($html);

    echo json_encode($book, JSON_UNESCAPED_UNICODE);
  }
  // 出版社
  function pregPublisher($str)
  {
    preg_match("/出版社:<\/span> (.*)<br\/>/iU", $str, $match);
    // var_dump($match);
    return explode("/", $match[1]);
  }
  // 出品方
  function pregProducer($str)
  {
  }
}
