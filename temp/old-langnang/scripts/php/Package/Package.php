<?php

class PackageModule
{
    // 遍历至指定深度
    function forEachDepth($list, $callback, ...$args)
    {
        if (empty($list)) {
            return;
        }
        foreach ($list as $k => $v) {
            $callback($v, ...$args);
            PackageModule::forEachDepth($v->content, $callback, ...$args);
        }
    }

    // 遍历
    function forEach($list, $callback, ...$args)
    {
        if (empty($list)) {
            return;
        }
        foreach ($list as $k => $v) {
            $callback($v, ...$args);
        }
    }

    // 将字符串参数变为数组
    function convertUrlQuery($query)
    {
        $queryParts = explode('&', $query);
        $params = array();
        foreach ($queryParts as $param) {
            $item = explode('=', $param);
            $params[$item[0]] = $item[1];
        }
        return $params;
    }

    // 将参数变为字符串
    function getUrlQuery($array_query)
    {
        $tmp = array();
        foreach ($array_query as $k => $param) {
            $tmp[] = $k . '=' . $param;
        }
        $params = implode('&', $tmp);
        return $params;
    }
}
