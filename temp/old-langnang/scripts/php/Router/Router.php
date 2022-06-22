<?php

namespace RouterModule;
include_once "Route.php";

/**
 * Class RouterModel
 * @package RouterModule
 */
class RouterModel
{
    const defPath = "/";
    const defMethod = "GET";
    public $routes = array();
    public $routesMatch = array();
    public $routeOption = array();// 路由全局配置
}

/**
 * Interface RouterInterface
 * @package RouterModule
 */
interface RouterInterface
{
}

/**
 * Class RouterModule
 * @package RouterModule
 * @done 路由匹配
 * @done 路由参数传值
 */
class RouterModule extends RouterModel implements RouterInterface
{
    public function __construct($routes, $routeOption = array())
    {
        self::setRouteOption($routeOption);
        self::setDefaultRoute();
        self::loadRoutes($routes, "");
        self::run();

    }

    public function loadRoutes($routes, $prefixPath = "")
    {
        foreach ($routes as $v) {
            $v["path"] = $prefixPath . $v["path"];
            if (array_key_exists("receive_method", $v)) {
                $v["method"] = $v["receive_method"];
            } else {
                $v["method"] = "GET";
            }
            $this->routes['(' . $v["method"] . ")" . $v["path"]] = new \RouteModule\RouteModule(self::getRouteOption($v));
            if (isset($v["children"])) {
                self::loadRoutes($v["children"], $v["path"]);
            }
        }
    }

    public function setDefaultRoute()
    {
        $this->routes['(GET)' . self::defPath] = new \RouteModule\RouteModule(
            self::getRouteOption(array(
                "path" => self::defPath,
            ))
        );
    }

    public function run()
    {
        // 检测路径信息
        $method = isset($_SERVER['REQUEST_METHOD']) ? $_SERVER['REQUEST_METHOD'] : 'GET';
        $path = '(' . $method . ')' . (isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : self::defPath);
        // 检测路由是否已定义
//        var_dump($path);

        if (array_key_exists($path, $this->routes)) {
            $route = $this->routes[$path];
        } else {
            $route = self::getMatchRoute($path);
        }
//        var_dump($route);
        if ($route == null) {
            $route = $this->routes['(' . self::defMethod . ')' . self::defPath];
        }
//        var_dump($route);
        $route->run();
    }

    public function getMatchRoute($path)
    {
        $route = null;
        foreach ($this->routes as $v) {
            if ($v->path_match && sizeof(preg_split('/\//', $v->path_match)) == sizeof(preg_split('/\//', $path))) {
                $v->setParams($path);
                $route = $v;
                break;
            }
        }
        return $route;
    }

    public function setRouteOption($routeOption)
    {
        $this->routeOption = $routeOption;
    }

    public function getRouteOption($option)
    {
        foreach ($this->routeOption as $k => $v) {
            $option[$k] = $v;
        }
        return $option;
    }

    public function view($path, $viewPath)
    {

    }

    public function get()
    {

    }

    public function post()
    {
    }

    public function render()
    {
    }
}


