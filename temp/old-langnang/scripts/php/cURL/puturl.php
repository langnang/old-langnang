<?php
function puturl($url, $data)
{
    $data = json_encode($data);
    $ch = curl_init(); //初始化CURL句柄
    curl_setopt($ch, CURLOPT_URL, $url); //设置请求的URL
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type:application/json'));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //设为TRUE把curl_exec()结果转化为字串，而不是直接输出
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "PUT"); //设置请求方式
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data); //设置提交的字符串
    $output = curl_exec($ch);
    curl_close($ch);
    return json_decode($output, true);
}