<?php

namespace ArrayModule;
/**
 * Class ArrayModule
 * @package ArrayModule
 * @func length
 * @func key_exists
 */
class ArrayModule
{
    public function length($array)
    {
        return sizeof($array);
    }

    public function index_of($array, $v)
    {
    }

    // 检测存在值
    public function is_exists($array, $v)
    {
        return in_array($v, $array);
    }

    public function key_exists()
    {
        return array_key_exists();
    }
}
