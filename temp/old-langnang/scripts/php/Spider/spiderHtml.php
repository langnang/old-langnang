<?php

function spiderHtml($url)
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
