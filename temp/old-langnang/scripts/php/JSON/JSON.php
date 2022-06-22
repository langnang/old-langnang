<?php

class JSONModule
{
    // 格式化json数组为字符串
    function json_format($json)
    {
        return json_encode($json, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);
    }

    // 检测存在关键字
    function key_exists($json, $k)
    {
        return array_key_exists($k, $json);
    }
}
