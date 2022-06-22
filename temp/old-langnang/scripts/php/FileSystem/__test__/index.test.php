<?php

include_once "../FileSystem.php";

$file = new \FileSystemModule\FileSystemModule(__FILE__);

$dir = new \FileSystemModule\FileSystemModule("E:\Documents\Langnang\Admin\[9004]PHP");

$dir->setAllChildren();

var_dump($file);
var_dump($dir);