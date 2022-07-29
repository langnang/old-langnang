<?php

/**
 * 部署GitHub代码到指定目录
 * 1. 下载 GigtHub 仓库代码压缩包到本地
 * 2. 解压缩到对应文件夹下，并删除压缩包
 * 3. 复制文件夹到指定目录，并删除原文件夹
 *
 * .../deploy-github-repo.php?secret=123456&owner=langnang&repo=langnang.github.io&branch=master&out=../langnang.ml
 */
// var_dump($_GET);
// 密码
$secret = file_get_contents(__DIR__ . "/../secret");
// 用户名
$owner = $_GET["owner"];
// 仓库名
$repo = $_GET["repo"];
// 分支名
$branch = $_GET["branch"];
// 指定目录，相对地址
$out = $_GET["out"];
// 下载文件到本地的地址
$dirPath = __DIR__ . "/deploy-github-repo/";

if (!($_GET["secret"] == $secret && $owner && $repo && $branch && $out)) {
    die("params missing or secret error!!!");
}

if (!file_exists($dirPath)) {
    mkdir($dirPath, 0755);
}

$url = "https://codeload.github.com/$owner/$repo/zip/refs/heads/$branch";

$file = "$dirPath/$repo-$branch.zip";

$step_1 = download_github_repo($url, $file);
if (!$step_1) {
    die("1. 代码下载失败！");
}
$step_2 = unzip($file, $dirPath);
if (!$step_2) {
    die("2. 解压缩失败！");
}
$step_3 = remove_dir(__DIR__ . "/deploy-github-repo/$repo-$branch", __DIR__ . "/$out");
if (!$step_3) {
    die("3. 移动文件夹失败！");
}
//rmdir($dirPath);
die("Deploy GitHub Repo Success");
/**
 * 下载GitHub仓库压缩包
 * @param $url
 * @param $file
 */
function download_github_repo($url, $file)
{
    $content = file_get_contents($url, true);
    if (!$content) {
        return false;
    }
    return file_put_contents($file, file_get_contents($url));
}

/**
 * 解压缩到指定目录，解压完毕后删除压缩包
 * @param $file
 * @param $outPath
 */
function unzip($file, $outPath)
{
    $zip = new ZipArchive();
    $openRes = $zip->open($file);
    if ($openRes === TRUE) {
        $result = $zip->extractTo($outPath);
        $zip->close();
        unlink($file);
        return $result;
    }
    return false;
}

/**
 * 移动文件夹到指定目录，移动完毕后删除原文件
 * @param $dirPath
 * @param $outPath
 */
function remove_dir($dirPath, $outPath)
{
    if (!file_exists($dirPath)) {
        return false;
    }
    if (!file_exists($outPath)) {
        mkdir($outPath);
    }
    $dir = opendir($dirPath);
    $target = true;
    while ($filename = readdir($dir)) {
        if ($filename !== '.' && $filename !== '..') {
            $srcfile = $dirPath . '/' . $filename;//原目录名或文件名
            $tofile = $outPath . '/' . $filename;//新目录名或文件名
            if (is_dir($srcfile)) {
                $target = remove_dir($srcfile, $tofile);
            } else {
                $target = copy($srcfile, $tofile);
                unlink($srcfile);
            }
        }
        if (!$target) {
            return $target;
        }
    }
    closedir($dir);
    rmdir($dirPath);
    return $target;
}