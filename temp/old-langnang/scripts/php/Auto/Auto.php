<?php

namespace AutoModule;
class AutoModel
{
    public $interval = 60 * 30; // 执行间隔

    /**
     * @param float|int $interval
     */
    public function setInterval($interval)
    {
        $this->interval = $interval;
    }
}

class AutoModule extends AutoModel
{
    public function __construct()
    {
        $i = 1;
        ignore_user_abort();//关掉浏览器，PHP脚本也可以继续执行.
        set_time_limit(0);// 通过set_time_limit(0)可以让程序无限制的执行下去
        $interval = 60 * 30;// 每隔半小时运行

    }

    public function run()
    {
        do {
            $run = include 'config.php';
            if (!$run) die('process abort');
            //这里是你要执行的代码
            $file = "cron.txt";
            $content = "这是第" . $i . "次执行！\r\n";
            $fp = fopen($file, "a+");
            fwrite($fp, $content);
            fclose($fp);
            $i++;
            sleep($this->interval);// 每隔半小时运行

        } while (true);
    }

    // 加载
    public function load()
    {

    }

    public function loadPHP($path)
    {
    }

    public function loadJS($path)
    {
    }

    public function loadJSON($path)
    {
    }


    // 开始
    public function start()
    {
    }

    // 关闭
    public function close()
    {
    }

    // 停止
    public function stop()
    {
    }

    // 安装
    public function install()
    {
    }

    // 卸载
    public function uninstall()
    {
    }

    // 提交
    public function commit()
    {
    }

    // 拉取
    public function pull($data)
    {
        if ($data['ref'] == 'refs/heads/master') {
            $repository = $data['repository']['name'];
            // var_dump($repository);
            //PHP函数执行git命令
            $res = shell_exec("cd C:\Langnang\\$repository & git pull origin master");

            $res_log = '-------------------------' . PHP_EOL;
            $res_log .= ' 在' . date('Y-m-d H:i:s') . '向' . $repository
                . '项目的' . $data['ref'] . '分支push' . $res;
            //将每次拉取信息追加写入到日志里
            file_put_contents(VIEW_PATH . "/Auto/git-webhook.txt", $res_log, FILE_APPEND);
        }
    }

    // 推送
    public function push()
    {
    }
}
