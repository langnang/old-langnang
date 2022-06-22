<?php

namespace ResponseModule;
class ResponseModel
{
    public $status;
    public $statusText;
    public $data;
    public $config;
    public $headers;
    public $request = array();
}

class ResponseModule extends ResponseModel
{
    function __construct($request = null)
    {
        self::setRequest($request);
        $this->headers = getallheaders();
    }

    /**
     * 1xx 信息性状态码 请求正在处理
     */
    public function _100()
    {
    }

    public function _101()
    {
    }

    /**
     * 2xx 成功 请求征程处理完毕
     * 200 成功
     */
    public function _200($data = null)
    {
        self::setStatus(200);
        self::setStatusText("Success");
        self::setData($data);
    }

    /**
     * 3xx 重定向 需要附加操作完成请求
     * 301 永久重定向
     * 302 临时重定向
     * 303 临时重定向，采用get方法获取资源
     * 304 缓存有效
     */
    public function _300()
    {
    }

    /**
     * 4xx 客户端错误 服务端无法处理请求
     * 400 请求失败 一般出现是请求的参数或格式错误
     * 401 未授权 要求身份验证
     * 403 被拒绝 没有权限访问此资源
     * 404 未找到 服务端没有该资源
     * 405 请求的方法不被允许
     */
    public function _400($statusText = "Failed", $data = null)
    {
        self::setStatus(400);
        self::setStatusText($statusText);
        self::setData($data);
    }

    public function _404($statusText = "Not Found", $data = null)
    {
        self::setStatus(404);
        self::setStatusText($statusText);
        self::setData($data);
    }

    /**
     * 5xx 服务端错误 服务端处理请求出错
     * 500 服务器错误
     * 502 错误网关
     * 503 服务器维护或超负载
     * 504 超时
     */
    public function _500()
    {
        self::setStatus(500);
    }

    public function print()
    {
        if ($this->status == null) {
            self::_404();
        }
        echo json_encode($this);
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @param mixed $statusText
     */
    public function setStatusText($statusText)
    {
        $this->statusText = $statusText;
    }

    /**
     * @param mixed $data
     */
    public function setData($data)
    {
        $this->data = $data;
    }

    /**
     * @param array $request
     */
    public function setRequest($request)
    {
        if ($request === null) {
            $this->request["REQUEST_URI"] = $_SERVER["REQUEST_URI"];
        } else {
            $this->request = $request;
        }
    }
}
