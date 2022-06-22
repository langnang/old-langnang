<?php

/**
 * 百度
 * @param cname top, 爬虫网站二级域名，子类网站
 * @param subject 分类
 */


$spider_baidu_array = array(
    "__name" => "百度",
    "__key" => "cname",
    "top" => array(
        "__name" => "百度搜索风云榜",
        "__key" => "subject",
    )
);


if (!isset($_GET["cname"])) {
    echo '
    <ul>
        <li><a href="?cname=top">百度搜索风云榜</a></li>
    </ul>
    ';
    return;
}

if (!isset($_GET["subject"])) {
}

include_once __DIR__ . "/../String/url.php";
include_once __DIR__ . "/../String/getUrlParams.php";
// url 参数
$params = getUrlParams(url());

$cname_array = array(
    "top" => array(
        "name" => "百度搜索风云榜",
        "children" => array(
            // "风云时讯" => 'news?fr=topindex',
            "全部电影" => 'buzz?b=26&c=1&fr=topbuzz_b338',
            "爱情电影" => 'buzz?b=338&c=1&fr=topbuzz_b26_c1',
            "喜剧电影" => 'buzz?b=340&c=1&fr=topbuzz_b338_c1',
            "惊悚电影" => 'buzz?b=339&c=1&fr=topbuzz_b338_c1',
            "科幻电影" => 'buzz?b=437&c=1&fr=topbuzz_b338_c1',
            "剧情电影" => 'buzz?b=337&c=1&fr=topbuzz_b338_c1',

            "全部电视剧" => 'buzz?b=4&c=2&fr=topbuzz_b4_c2',
            "偶像电视剧" => "buzz?b=349&c=2&fr=topbuzz_b4_c2",
            "言情电视剧" => "buzz?b=350&c=2",
            "古装电视剧" => "buzz?b=351&c=2",
            "武侠电视剧" => "buzz?b=1586&c=2",
            "家庭伦理电视剧" => "buzz?b=448&c=2",
            "美剧电视剧" => "buzz?b=452&c=2",
            "韩剧电视剧" => "buzz?b=453&c=2",
            "日剧电视剧" => "buzz?b=466&c=2",
            "港剧电视剧" => "buzz?b=464&c=2",
            "台剧电视剧" => "buzz?b=465&c=2",
            "泰剧电视剧" => "buzz?b=467&c=2",
            "全部综艺" => "buzz?b=19&c=3&fr=topcategory_c3",
            "访谈综艺" => "buzz?b=439&c=3",
            "情感综艺" => "buzz?b=440&c=3",
            "选秀综艺" => "buzz?b=441&c=3",
            "内地综艺" => "buzz?b=368&c=3",
            "港台综艺" => "buzz?b=369&c=3",
            "脱口秀" => "buzz?b=1587&c=3",
            "全部动漫" => "buzz?b=23&c=5",
            "搞笑动漫" => "buzz?b=442&c=5",
            "益智动漫" => "buzz?b=443&c=5&fr=topcategory_c5",
            "冒险动漫" => "buzz?b=444&c=5",
            "情感动漫" => "buzz?b=623&c=5",
            "国产动漫" => "buzz?b=445&c=5",
            "日本动漫" => "buzz?b=446&c=5",
            "欧美动漫" => "buzz?b=447&c=5&fr=topcategory_c5",
            "少儿影视" => 'buzz?b=1677&c=536&fr=topbuzz_b1677_c536',
            "网页游戏" => "buzz?b=173&c=16",
            "网络游戏" => "buzz?b=62&c=16",
            "手机游戏" => "buzz?b=524&c=16",
            "单机游戏" => "buzz?b=451&c=16",
            "热点人物" => "buzz?b=258&c=9&fr=topbuzz_b258_c9",
            "名家人物" => "buzz?b=260&c=9",
            "公益人物" => "buzz?b=612&c=9",
            "财经人物" => "buzz?b=261&c=9",
            "体坛人物" => "buzz?b=255&c=9",
            "主持人" => "buzz?b=454&c=9",
            "历史人物" => "buzz?b=259&c=9",
            "互联网人物" => "buzz?b=257&c=9",
            "女明星" => "buzz?b=1570&c=9",
            "男明星" => "buzz?b=1569&c=9",
            "欧美明星" => "buzz?b=491&c=9",
            "热搜汽车" => "buzz?b=1540&c=18&fr=topbuzz_b1540_c18",
            "电动汽车" => "buzz?b=1676&c=18",
            "微型车" => "buzz?b=1543&c=18",
            "小型车" => "buzz?b=1544&c=18",
            "紧凑型车" => "buzz?b=1541&c=18",
            "中级车" => "buzz?b=1545&c=18",
            "中高级车" => "buzz?b=1546&c=18",
            "豪华车" => "buzz?b=1548&c=18",
            "SUV" => "buzz?b=1542&c=18",
            "MPV" => "buzz?b=1549&c=18",
            "汽车月度榜单" => "buzz?b=1564&c=18",

            "纪录片" => 'buzz?b=1678&c=537&fr=topbuzz_b1678_c537',

            "实时热点" => "buzz?b=1&c=513&fr=topbuzz_b1_c513",
            "今日热点" => "buzz?b=341&c=513&fr=topbuzz_b1_c513",
            "七日热点" => "buzz?b=42&c=513&fr=topbuzz_b341_c513",
        )
    )
);

if (!isset($params["cname"])) {
    $str = "<ul>";
    foreach ($cname_array as $k => $v) {
        $str .= "<li>" . $v["name"];
        if (sizeof($v["children"]) > 0) {
            $str .= "<ul>";
            foreach ($v["children"] as $k1 => $v1) {
                $str .= "<a href=?cname=$k&subject=$k1><li>" . $k1 . "</li></a>";
            }
            $str .= "</ul>";
        }
        $str .= "</li>";
    }
    $str .= "</ul>";
    echo $str;
    return;
}

if (isset($params["cname"]) && isset($params["subject"])) {
    $cname = $params["cname"];
    $subject = $params["subject"];
    if ($cname == "top" && isset($cname_array["top"]["children"][$subject])) {
        $url = "https://top.baidu.com/" . $cname_array["top"]["children"][$subject];
        return new BaiduTop($url);
    }
    return print json_encode(new ArrayObject(), JSON_UNESCAPED_UNICODE);
} else {
    return print json_encode(new ArrayObject(), JSON_UNESCAPED_UNICODE);
}

class Baidu
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
}
class BaiduTop extends Baidu
{
    function __construct($url)
    {
        $html = self::pregHtml($url);
        $top = self::pregMain($html);
        echo json_encode($top, JSON_UNESCAPED_UNICODE);
    }

    function pregMain($str)
    {
        preg_match_all('/<a class="list-title" target="_blank" href="(.*?)" href_top="(.*?)">(.*?)<\/a>/i', $str, $match);
        // var_dump($top_array);

        $main = array();
        foreach ($match[0] as $k => $v) {
            array_push($main, array(
                "href" => $match[1][$k],
                "title" => $match[3][$k],
            ));
        };
        return $main;
    }
}
