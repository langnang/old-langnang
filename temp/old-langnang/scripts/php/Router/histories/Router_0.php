<?php

class RouterModel
{
    // 路由数组, 存储定义的路由
    public $routers = array();
    // 模糊匹配
    public $matchers = array();
    // 回调函数参数
    public $variable = array();
    // 回调函数全局参数
    public $globals = array();
    // 生命周期钩子
    /**
     *
     * 1. beforeReceive
     * 2. received
     * 3. beforeResponse
     * 4. response
     */
    public $hooks = array();
}

class Me_Router extends RouterModel
{

    function __construct(...$globalArgs)
    {
        foreach ($globalArgs as $k => $v) {
            $this->globals[$k] = $v;
        }
    }

    // 将定义的路由加入到$routers数组

    function insert($route, $callback, ...$args)
    {
        // var_dump($route);
//         @todo 模糊匹配
//         模糊匹配
        if (preg_match('/:/', $route)) {
            $this->matchers[$route] = $callback;
            // echo "模糊匹配";
        } else {
            // 精准匹配
            $this->routers[$route] = $callback;
            // echo "精准匹配";
        }
        $this->variable[$route] = $args;
    }

    // 执行路由
    function execute()
    {
        // var_dump($_SERVER);
        $path = '/';
        if (!isset($_SERVER['PATH_INFO'])) {
        } else {
            $path = $_SERVER['PATH_INFO'];
        }

        /**
         * 检测路由是否被定义
         * 或者执行默认的/首页路由
         */


        if (array_key_exists($path, $this->routers)) {
            $this->routers[$path](...$this->globals, ...$this->variable[$path]);
            return;
        }
        // var_dump(explode('/', $path));
        $this->routers['/'](...$this->globals, ...$this->variable['/']);
    }

    function list()
    {
        // var_dump($this->routers);
        $list = array();
        foreach ($this->routers as $k => $v) {
            array_push($list, $k);
        }
        foreach ($this->matchers as $k => $v) {
            // var_dump($k, $v);
            array_push($list, $k);
        }
        // var_dump($list);
        return $list;
    }
}
