# Router
> 路由

## RouteModule

### RouteModel

- $path;// 路径
- $path_match;// 参数匹配路径
- $args = array();// 变量
- $log = false;// 日志
- $log_path = \_\_DIR\_\_ . "\\logs";// 日志路径
- $desc;// 描述
- $receive_data;// 接收到的数据
- $receive_params = array();// 接收到的必须参数
- $receive_method = "GET";// 接受方式
- $request_data;// 请求到的数据
- $request_method = "GET";// 请求方式
- $hooks = array();// 钩子函数
- $response;// 响应数据
- $params = array();

### RouteModule

#### 生命周期

- beforeReceive：接受前。检测环境、服务等等
- receiving：接收
- received：接受后。检测接受到的数据格式，以及是否符合要求
- beforeRequest：请求前。根据接受的数据对请求传递的数据进行整理
- requesting：请求
- requested：请求后。对请求得到的数据进行处理

### Examples

## RouterModule


### Examples


