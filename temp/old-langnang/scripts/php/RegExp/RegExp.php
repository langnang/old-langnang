<?php

namespace RegExpModule;
class RegExpModel
{

}

class RegExpModule extends RegExpModel
{
    /**
     * @param $pattern 要搜索的模式，也就是编辑好的正则表达式
     * @param string $subject 要搜索的字符串
     * @param $matches 可选参数（数组类型），如果提供了 $matches，它将被填充为搜索结果。
     * @param int $flags 可选参数，$flags 可以被设置为 PREG_OFFSET_CAPTURE，如果传递了这个标记，对于每一个出现的匹配，返回时都会附加上字符串偏移量（相对于目标字符串的）
     * @param int $offset 可选参数，用于指定从目标字符串的哪个位置开始搜索（单位是字节）。
     */
    public function match($pattern, $subject, &$matches, $flags = 0, $offset = 0)
    {
        return preg_match($pattern, $subject, $matches, $flags, $offset);
    }

    public function match_all()
    {
        return preg_match_all();
    }

    public function grep()
    {
        return preg_grep();
    }

    public function replace()
    {
        return preg_replace();
    }

    public function filter()
    {
        return preg_filter();
    }

    public function split()
    {
        return preg_split();
    }

    public function quote()
    {
        return preg_quote();
    }
}
