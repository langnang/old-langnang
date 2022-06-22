<?php

namespace StringModule;
/**
 * Class StringModel
 * @package StringModule
 * @done lower
 * @done upper
 * @done replace
 */
class StringModel
{
    public function lower($str)
    {
        return strtolower($str);
    }

    public function upper($str)
    {
        return strtoupper($str);
    }

    public function replace($str, $one2one)
    {
        foreach ($one2one as $k => $v) {
            $str = str_replace($k, $v, $str);
        }
        return $str;
    }
}

class StringModule extends StringModel
{
    public function createUUID($prefix = "")
    {
        if (function_exists("uuid_create")) {
            // return uuid_create();
        } else {
            $str = md5(uniqid(mt_rand(), true));
            $uuid = substr($str, 0, 8) . '-';
            $uuid .= substr($str, 8, 4) . '-';
            $uuid .= substr($str, 12, 4) . '-';
            $uuid .= substr($str, 16, 4) . '-';
            $uuid .= substr($str, 20, 12);
            return $prefix . $uuid;
        }
    }

    public function isUUID($uuid)
    {
        if (sizeof($uuid) !== 36) {
            return false;
        }
        return true;
    }

    public function createGUID()
    {
        return sprintf(
            '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
            mt_rand(0, 0xffff),
            mt_rand(0, 0xffff),
            mt_rand(0, 0xffff),
            mt_rand(0, 0x0fff) | 0x4000,
            mt_rand(0, 0x3fff) | 0x8000,
            mt_rand(0, 0xffff),
            mt_rand(0, 0xffff),
            mt_rand(0, 0xffff)
        );
    }

    public function uuid($namespace = '')
    {
        $charid = strtoupper(md5(uniqid(mt_rand(), true)));
        $hyphen = chr(45); // "-"
        $uuid = substr($charid, 0, 8) . $hyphen
            . substr($charid, 8, 4) . $hyphen
            . substr($charid, 12, 4) . $hyphen
            . substr($charid, 16, 4) . $hyphen
            . substr($charid, 20, 12);
        return $uuid;
    }

    public function token($name)
    {
        $header = array(
            'typ' => 'JWT'
        );
        $array = array(
            'iss' => 'auth', // 权限验证作者
            'iat' => time(), // 时间戳
            'exp' => 3600, // token有效期，1小时
            'sub' => 'demo', // 案例
            'user_name' => $name

        );
        $token = base64_encode(json_encode($header)) . '.' . base64_encode(json_encode($array));
        $token = urlencode($token);
        return $token;
    }

    public function uuid_mysql_db()
    {
        // mysql 数据库名限制长度为64字符
        $charid = strtolower(md5(uniqid(mt_rand(), true)));
        $charid .= strtolower(md5($charid));
        // var_dump($charid);
        $hyphen = chr(45); // "-"
        // var_dump($hyphen);
        $uuid = substr($charid, 0, 12) . $hyphen
            . substr($charid, 12, 12) . $hyphen
            . substr($charid, 24, 12) . $hyphen
            . substr($charid, 36, 12) . $hyphen
            . substr($charid, 48, 12);
        return $uuid;
    }
}
