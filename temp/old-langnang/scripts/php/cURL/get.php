<?php
function get($url)
{
    $headerArray = array("Content-type:application/json;", "Accept:application/json");
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($url, CURLOPT_HTTPHEADER, $headerArray);
    $result = curl_exec($ch);
    curl_close($ch);
    // $output = json_decode($output,true);
    return $result;
}