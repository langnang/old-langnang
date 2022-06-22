<?php

namespace LogModule;

class LogModel
{
    public $datetime;// when
    public $user;// who
    public $action;// where
    public $log;// 日志内容
    public $filename;
    public $file;// 日志文档
    public $path;// 路径
    public $head;// 头部
    public $content;// 日志文件内容
    public $mode = "txt";// 记录日志的模式：txt，json，db

    /**
     * @param string $mode
     */
    public function setMode($mode = "txt")
    {
        $modes = array("txt", "json", "db");
        if (!in_array($mode, $modes)) {
            $mode = "txt";
        }
        $this->mode = $mode;
    }
}

class LogModule extends LogModel
{
    public function __construct($dir, $fileSuffix = "")
    {
        self::setFilename($fileSuffix);
        self::setPath($dir);
        self::setFile();
        self::setContent();
//        $this->date = date('Y-m-d H:i:s', time());
//        $this->file = date('Y-m-d', time()) . ".txt";
//        $this->head = '--' . $this->date . '---------------------' . PHP_EOL;
//        // var_dump($path);
//        if (!is_dir($path)) {
//            mkdir($path, 0777, true);
//        }
//        $this->path = $path . "/" . $this->file;
//        file_put_contents($this->path, $this->head . $content . PHP_EOL, FILE_APPEND);
    }

    public function encode()
    {
    }

    // 前置，预置
    public function prepend()
    {
    }

    // 追加，附加，增补，后置
    public function append()
    {
    }

    // 追加，附加，增补
    public function after()
    {
    }

    // 前置
    public function before()
    {
    }

    public function write()
    {
        file_put_contents($this->path, $this->log . PHP_EOL . $this->content);
//        fwrite($this->path, $this->log . PHP_EOL . $this->content);
    }

    public function read()
    {
    }

    public function open()
    {
    }

    /**
     * @param mixed $content
     */
    public function setContent()
    {
//        var_dump(filesize($this->path));
        $this->content = file_get_contents($this->path);
//        var_dump(file_get_contents($this->path));
//        $this->content = fread($this->file, filesize($this->path));
    }

    /**
     * @param mixed $path
     */
    public function setPath($dir)
    {
        if (!is_dir($dir)) {
            mkdir($dir, 0777, true);
        }
        $this->path = $dir . "\\" . $this->filename;

    }

    /**
     * @param mixed $file
     */
    public function setFile()
    {
//        if (!is_file($this->path)) {
        $this->file = fopen($this->path, 'a');
        fclose($this->file);
//        }
    }

    /**
     * @param mixed $filename
     */
    public function setFilename($filename)
    {
        if ($filename == "") {
            $this->filename = date('Ymd', time()) . ".txt";
        } else {
            $this->filename = $filename . "_" . date('Ymd', time()) . ".txt";
        }
    }

    /**
     * @param mixed $log
     */
    public function setLog($log)
    {
        $this->log = "[" . date('Y-m-d h:i:s', time()) . "]" . $log;
    }
}
