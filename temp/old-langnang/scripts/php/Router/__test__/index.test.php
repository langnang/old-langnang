<?php

//var_dump(preg_match("#/test/(.*?)#si", "/test/lang"));


include_once "../Router.php";
include_once "testRoute.test.php";
$indexRoutes = array(
    "path" => "/",
    "hooks" => array(
        "received" => function ($data) {
//            var_dump($data);
        }
    ),
);
//var_dump($testRoutes);
$routes = array($indexRoutes, $testRoutes);

$router = new \RouterModule\RouterModule($routes);

//var_dump($router);