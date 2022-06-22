<?php

class RequestModel
{
    private $onabort;
    private $onerror;
    private $onload;
    private $onloadend;
    private $onloadstart;
    private $onprogress;
    private $onreadystatechange;
    private $ontimeout;
    private $readyState;
    private $response;
    private $responseText;
    private $responseType;
    private $responseURL;
    private $responseXML;
    private $status;
    private $statusText;
    private $timeout;
    private $upload;
    private $withCredentials;
}


class RequestModule
{
    function get($url)
    {
        return file_get_contents($url);
    }




    function post($url, $data)
    {
    }
    function get_curl($url)
    {
        //初始化
        $ch = curl_init();
        //设置选项，包括URL
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        //执行并获取HTML文档内容
        $output = curl_exec($ch);
        //释放curl句柄
        curl_close($ch);
        //打印获得的数据
        // print_r($output);
        return $output;
    }
    function post_curl($url, $data)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        // post数据
        curl_setopt($ch, CURLOPT_POST, 1);
        // post的变量
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        $output = curl_exec($ch);
        curl_close($ch);
        //打印获得的数据
        // print_r($output);
        return $output;
    }
    function file()
    {
    }
}
