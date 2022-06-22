<?php
include_once __DIR__ . "/../../Router/Router.php";
include_once __DIR__ . "/../Git.php";

/**
 * @done /git
 */
$gitRoute = array(
    "path" => "/git",
    "hooks" => array("received" => function ($data) {
        $data->response->_200(array(
            "version" => "0.0.1",
            "datetime" => "2020-09-25",
            "author" => "langnang",
        ));
    }),
    "children" => array(
        array(
            "path" => "/pull",
            "args" => array(
                "repositories" => array(
                    "PHP" => "9004",
                    "API-PHP" => "9091",
                    "Works" => "9099"
                )
            ),
            "receive_method" => "POST",
            "receive_params" => array("ref", "repository"),
            "hooks" => array(
                "beforeRequest" => function (&$data) {
//                    var_dump($data->args["repositories"]);
//                    var_dump($data->receive_data["repository"]);
                    $repo = "[" . $data->args["repositories"][$data->receive_data["repository"]["name"]] . "]" . $data->receive_data["repository"]["name"];
//                    var_dump(__DIR__ . "/../../../" . $repo);
                    $data->args["path"] = __DIR__ . "/../../../" . $repo;
                },
                "requesting" => function ($data) {
//                    var_dump($data);
                    $repo = new \GitModule\GitModule($data->args["path"]);
                    if ('refs/heads/' . $repo->branch === $data->receive_data["ref"]) {
                        $res = $repo->pull();
                        $data->response->_200($res);
                    }
//                    $repo->branch();
//                    $path = $data->args["path"];
//                    $res = shell_exec("cd $path & git pull origin master");
//                    var_dump($res);
//                    var_dump($data->args);
//                    var_dump($data->receive_data);
//                    if ($data['ref'] == 'refs/heads/master') {
//                        $repository = $data['repository']['name'];
//                        // var_dump($repository);
//                        //PHP函数执行git命令
//                        $res = shell_exec("cd C:\Langnang\\$repository & git pull origin master");
//
//                        $res_log = '-------------------------' . PHP_EOL;
//                        $res_log .= ' 在' . date('Y-m-d H:i:s') . '向' . $repository
//                            . '项目的' . $data['ref'] . '分支push' . $res;
//                        //将每次拉取信息追加写入到日志里
//                        file_put_contents(VIEW_PATH . " / Auto / git - webhook . txt", $res_log, FILE_APPEND);
//                    }
                }
            ),
        ),
    )
);
$routes = array($gitRoute);

$router = new \RouterModule\RouterModule($routes, array(
    "log" => true,
));