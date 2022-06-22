<?php

namespace GitModule;

class GitModel
{
    public $repository;
    public $path;
    public $branch;
    public $log = false;
}

class GitModule extends GitModel
{
    public function __construct($path)
    {
        $this->path = $path;
        self::setBranch();
    }

    public function setBranch()
    {
        $HEAD = file_get_contents($this->path . '/.git/HEAD');
        if (!empty($HEAD)) {
            $HEAD = trim($HEAD);
            $i = strripos($HEAD, '/');
            $this->branch = substr($HEAD, $i + 1);
        }
//        var_dump($HEAD);
//        var_dump($this->branch);
    }

    public function commit()
    {
    }

    public function log()
    {
    }

    public function pull()
    {
        return shell_exec("cd $this->path & git pull");
    }

    public function push()
    {
    }

    public function reset()
    {
    }

    public function revert()
    {
    }

}
