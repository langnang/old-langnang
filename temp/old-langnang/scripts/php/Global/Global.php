<?php

namespace GlobalModule;
class GlobalModule
{
    public function GLOBALS()
    {
        return $GLOBALS;
    }

    public function SERVER()
    {
        return $_SERVER;
    }

    public function REQUEST()
    {
        return $_REQUEST;
    }

    public function POST()
    {
        return $_POST;
    }

    public function GET()
    {
        return $_GET;
    }

    public function FILES()
    {
        return $_FILES;
    }

    public function ENV()
    {
        return $_ENV;
    }

    public function COOKIE()
    {
        return $_COOKIE;
    }

    public function SESSION()
    {
        return $_SESSION;
    }
}