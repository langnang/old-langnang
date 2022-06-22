<?php

$testRoutes = array(
    "path" => "/test",
    "receive_method" => "GET",
    "children" => array(
        array(
            "path" => "/123",
        ),
        array(
            "path" => "/:id",
            "hooks" => array(
                "received" => function ($data) {
//                    var_dump($data->params["id"]);
                }
            )
        ),
        array(
            "path" => "/:id/:name/:chapter"
        )
    )
);