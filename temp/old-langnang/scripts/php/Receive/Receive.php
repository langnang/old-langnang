<?php

namespace ReceiveModule;

class ReceiveModule
{
    public function run($method, ...$args)
    {
        if ($method == "GET") {
            return self::get($args);
        }

        if ($method == "POST") {
            return self::post($args);
        }

        return false;
    }

    function post($isJSON = true)
    {
        $result = json_decode(file_get_contents('php://input'), true);
//        $result = json_decode(file_get_contents('php://input'), $isJSON);
//        var_dump($result);
        if ($result === null) {
            return $_POST;
        }
        return $result;
        // var_dump($_POST);
        // var_dump(file_get_contents('php://input'));
        // return json_decode(file_get_contents('php://input'), $isJSON);
    }

    function get()
    {
        return $_GET;
    }

    function file($key = "file")
    {
        return $_FILES[$key];
    }

    function upload($key = "file")
    {
        return $_FILES[$key];
    }

    function all()
    {
        $data = array();
        $upload = ReceiveModule::upload();
        $get = ReceiveModule::get();
        $post = ReceiveModule::post();
        foreach ($upload as $k => $v) {
            $data[$k] = $v;
        }
        foreach ($get as $k => $v) {
            $data[$k] = $v;
        }
        foreach ($post as $k => $v) {
            $data[$k] = $v;
        }

        return $data;
    }
}
