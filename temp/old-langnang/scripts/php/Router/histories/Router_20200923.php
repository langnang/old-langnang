<?php

namespace RouterModule;


class RouterModel
{
    // 类全局配置   
    protected $globals;
    // 路由数组, 存储定义的路由
    protected $routers = array();
    // 模糊匹配
    protected $matchers = array();
    // 回调函数参数
    protected $variable = array();

    // 生命周期钩子
    /**
     *
     * 1. beforeReceive
     * 2. received
     * 3. beforeRequest
     * 4. requested
     */
    protected $hooks = array();
}

interface RouterInterface
{

}


/**
 *
 * // TODO 模糊匹配路由
 */
class RouterModule extends RouterModel implements RouterInterface
{
    function __construct($opts = array())
    {
        $defOpts = array(
            // 是否开启日志记录功能,此功能需关联日志模块
            "log" => isset($opts["log"]) ? $opts["log"] : array(),
            // 全局参数
            "args" => isset($opts["args"]) ? $opts["args"] : array(),
            // 接收数据前
            "beforeReceive" => isset($opts["beforeReceive"]) ? $opts["beforeReceive"] : function () {
            },
            // 接收数据
            "receiving" => isset($opts["receiving"]) ? $opts["receiving"] : function () {
            },
            // 接收数据后
            "received" => isset($opts["received"]) ? $opts["received"] : function () {
            },
            // 请求数据前
            "beforeRequest" => isset($opts["beforeRequest"]) ? $opts["beforeRequest"] : function () {
            },
            // 请求数据
            "requesting" => isset($opts["requesting"]) ? $opts["requesting"] : function () {
            },
            // 请求数据后
            "requested" => isset($opts["requested"]) ? $opts["requested"] : function () {
            },
            // 全局执行钩子
            "hooks" => isset($opts["hooks"]) ? $opts["hooks"] : array("beforeReceive", "receiving", "received", "beforeRequest", "requesting", "requested"),
            // 描述
            "description" => isset($opts["description"]) ? $opts["description"] : "-"
        );
        // var_dump($defOpts);
        $this->globals = $defOpts;
    }

    // 将定义的路由加入到$routers数组

    public function insert($opts = array())
    {
        $defOpts = array(
            // 路由地址
            "path" => isset($opts["path"]) ? $opts["path"] : "/",
            // 全局参数
            "args" => isset($opts["args"]) ? $opts["args"] : array(),
            // 描述
            "description" => isset($opts["description"]) ? $opts["description"] : "-",
            // 接收数据前
            "beforeReceive" => isset($opts["beforeReceive"]) ? $opts["beforeReceive"] : function () {
            },
            // 接收数据
            "receiving" => isset($opts["receiving"]) ? $opts["receiving"] : function () {
            },
            // 接收数据后
            "received" => isset($opts["received"]) ? $opts["received"] : function () {
            },
            // 请求数据前
            "beforeRequest" => isset($opts["beforeRequest"]) ? $opts["beforeRequest"] : function () {
            },
            // 请求数据
            "requesting" => isset($opts["requesting"]) ? $opts["requesting"] : function () {
            },
            // 请求数据后
            "requested" => isset($opts["requested"]) ? $opts["requested"] : function () {
            },
        );
        $this->routers[$defOpts["path"]] = $defOpts;
    }

    // 执行路由
    public function execute()
    {
        // var_dump($this);
        // var_dump($_SERVER);
        // 设置默认路径
        $path = '/';
        // 检测路径信息
        if (isset($_SERVER['PATH_INFO'])) {
            $path = $_SERVER['PATH_INFO'];
        }
        // 检测路由是否已定义
        if (!array_key_exists($path, $this->routers)) {
            header('Location: /');
            $path = "/";
        }
        // 获取路由配置信息
        $opts = $this->routers[$path];
        // 执行路由配置
        // var_dump($this->globals);
        // 遍历全局钩子函数执行顺序
        foreach ($this->globals["hooks"] as $k => $v) {
            // $isContinue = false;
            // $isBreak = false;
            // 执行全局钩子函数(全局参数,局部参数)
            $is = $this->globals[$v](...$this->globals["args"], ...$opts["args"]);
            // 检测是否跳过/停止循环
            if ($is === 'continue') {
                continue;
            }
            if ($is === "break") {
                break;
            }
            // 执行局部钩子函数(全局参数,局部参数)
            $is = $opts[$v](...$this->globals["args"], ...$opts["args"]);
            // 检测是否跳过/停止循环
            if ($is === 'continue') {
                continue;
            }
            if ($is === "break") {
                break;
            }
        }

        // 钩子函数执行后会返回相应数据，如何将相应数据传递给其它钩子
        // 设置全局或全局函数参数
        // 启动参数引用传递==>在函数定义中该参数的前面加上符号 &
        // 在设置参数及钩子函数参数前面加上符号&
    }

    // 路由列表
    public function getList()
    {
        // var_dump($this->routers);
        $list = array();
        foreach ($this->routers as $k => $v) {
            // var_dump($v);
            array_push($list, array(
                "path" => $k,
                "description" => $v["description"]
            ));
        }
        foreach ($this->matchers as $k => $v) {
            // var_dump($k, $v);
            array_push($list, array(
                "path" => $k,
                "description" => $v["description"]
            ));
        }
        // var_dump($list);
        return $list;
    }

    // 格式化路由
    public function format($opts = array())
    {
        $func = ``;

        return $func;
    }
}
