<?php

namespace RouteModule;
include_once __DIR__ . "/../Receive/Receive.php";
include_once __DIR__ . "/../Response/Response.php";
include_once __DIR__ . "/../Log/Log.php";

/**
 * Class RouteModel
 * @package RouteModule
 */
class RouteModel
{
    public $path;// 路径
    public $path_match;// 参数匹配路径
    public $global_args;// 路由全局变量
    public $args = array();// 变量
    public $log = false;// 日志
    public $log_path = __DIR__ . "\\logs";// 日志路径
    public $desc;// 描述
    public $receive_data;// 接收到的数据
    public $receive_params = array();// 接收到的必须参数
    public $receive_method = "GET";// 接受方式
    public $request_data;// 请求到的数据
    public $request_method = "GET";// 请求方式
    public $hooks = array();// 钩子函数
    public $promise = array();// Promise 函数数组
    public $response;// 响应数据
    public $params = array();
}

/**
 * Class RouteModule
 * @package RouteModule
 */
class RouteModule extends RouteModel
{
    public function __construct($options = array())
    {
        $this->path = isset($options["path"]) ? $options["path"] : $this->path;
        $this->args = isset($options["args"]) ? $options["args"] : $this->args;
        $this->global_args = isset($options["global_args"]) ? $options["global_args"] : $this->global_args;
        $this->log = isset($options["log"]) ? $options["log"] : $this->log;
        $this->log_path = isset($options["log_path"]) ? $options["log_path"] : $this->log_path;
        $this->desc = isset($options["desc"]) ? $options["desc"] : $this->desc;
        $this->receive_method = isset($options["receive_method"]) ? $options["receive_method"] : $this->receive_method;
        $this->receive_params = isset($options["receive_params"]) ? $options["receive_params"] : $this->receive_params;
        $this->request_method = isset($options["request_method"]) ? $options["request_method"] : $this->request_method;
        $this->hooks = isset($options["hooks"]) ? $options["hooks"] : $this->hooks;
        $this->response = new \ResponseModule\ResponseModule();
        self::is_match();
    }

    public function run()
    {
        self::runHooks();
        if ($this->log) {
            $log = new \LogModule\LogModule($this->log_path, str_replace('/', '_', $this->path));
            $log->setLog(json_encode($this->response));
            $log->write();
//            var_dump($log);
        }
        self::print();
    }

    public function runHooks()
    {
        if (self::hook_beforeReceive() === false) {
            return;
        };
        if (self::hook_receiving() === false) {
            return;
        };
        // 默认的必须参数检测机制
        if (self::is_params_exist($this->receive_params, $this->receive_data) === false) {
            return;
        }

//        foreach ($this->promise as $k => $v) {
//            if ($v($this) === false) {
//                return;
//            }
//        }

        if (self::hook_received() === false) {
            return;
        };
        if (self::hook_beforeRequest() === false) {
            return;
        };
        if (self::hook_requesting() === false) {
            return;
        };
        if (self::hook_requested() === false) {
            return;
        };
    }

    public function hook_beforeReceive()
    {
        if (isset($this->hooks["beforeReceive"])) {
            return $this->hooks["beforeReceive"]($this);
        }
    }

    public function hook_receiving()
    {
        if (isset($this->hooks["receiving"])) {
            return $this->hooks["receiving"]($this);
        } else {
            $this->receive_data = \ReceiveModule\ReceiveModule::run($this->receive_method);
        }
    }

    public function hook_received()
    {
        if (isset($this->hooks["received"])) {
            return $this->hooks["received"]($this);
        }
    }

    public function hook_beforeRequest()
    {
        if (isset($this->hooks["beforeRequest"])) {
            return $this->hooks["beforeRequest"]($this);
        }
    }

    public function hook_requesting()
    {
        if (isset($this->hooks["requesting"])) {
            return $this->hooks["requesting"]($this);
        }
    }

    public function hook_requested()
    {
        if (isset($this->hooks["requested"])) {
            return $this->hooks["requested"]($this);
        }
    }

    public function is_match()
    {
        // 检测参数符号
        if (preg_match('/:/', $this->path) > 0) {
            $path_match = $this->path;
            // 分割路径
            $args = preg_split('/\//', $this->path);
            // 提取参数名
            $params = preg_filter("/:/", "", $args);
            foreach ($params as $v) {
//                $this->params[$v] = null;
                // 转换为匹配正则路径
                $path_match = preg_replace('/:' . $v . '/', '(.*?)', $path_match);
            }
            $this->path_match = '#' . $path_match . "#si";
//            var_dump($this->params);
//            var_dump($path_match);
        }
    }

    public function setParams($path)
    {
        $params = preg_filter("/:/", "", preg_split('/\//', $this->path));
        $match_params = preg_split('/\//', $path);
        foreach ($params as $k => $v) {
            $this->params[$v] = $match_params[$k];
        }
    }

    public function getHookData()
    {
    }

    public function getSelf()
    {
        return array(
            "path" => $this->path,
            "path_match" => $this->path_match,
//            "args" => $this->args,
//            "log" => $this->log,
//            "log_path" => $this->log_path,
            "desc" => $this->desc,
//            "receive_data" => $this->receive_data,
            "receive_params" => $this->receive_params,
            "receive_method" => $this->receive_method,
//            "request_data" => $this->request_data,
//            "request_method" => $this->request_method,
//            "hooks" => $this->hooks,
//            "params" => $this->params,
        );
    }

    /**
     * 参数检测机制
     * @param $params
     * @param $data
     * @return int
     */
    public function is_params_exist($params, $data, $prefix = "")
    {
        foreach ($params as $k => $v) {
            if (is_array($v)) {
                if (!array_key_exists($k, $data)) {
                    $this->response->_404("Missing received params (" . $prefix . $k . ")");
                    return false;
                }
                if (self::is_params_exist($v, $data[$k], $k . ".") == false) {
                    return false;
                }
            } else {
                if (!isset($data[$v]) || !array_key_exists($v, $data)) {
                    $this->response->_404("Missing received params(" . $prefix . $v . ")");
                    return false;
                }
            }

        }
        return true;
    }

    public function print()
    {
        $this->response->route = self::getSelf();
        if ($this->receive_method != "NONE") {
            return $this->response->print();
        }
    }
}