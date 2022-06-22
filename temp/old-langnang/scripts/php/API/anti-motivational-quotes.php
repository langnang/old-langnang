<?php

// 随机一条毒鸡汤
$url="https://api.github.com/repos/langnang/MyBlog/issues/107";
$issue = file_get_contents($url,false,stream_context_create(
    array(
        "http" => array(
            "header" => "User-Agent: Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.36"
        )
    )
));
$body=json_decode($issue)->body;
$body = str_replace(array("\r\n", "\r", "\n", "/\r|\n|\t/"), "", $body);
$quotations=explode("- ",$body);
print $quotations[rand(1, sizeof($quotations) - 1)];