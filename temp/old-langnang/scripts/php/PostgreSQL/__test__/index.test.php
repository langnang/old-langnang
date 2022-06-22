<?php

include_once "../PostgreSQL.php";

$pg = new \PostgreSQLModule\PostgreSQLModule(
    array(
        "host" => "101.37.27.53",
        "port" => 5432,
        "dbname" => "Langnang.test",
        "user" => "postgres",
        "password" => "postgres"
    )
);
var_dump($pg->is_schema_exist("public"));
//var_dump($pg->is_db_exist("Advantech123"));

//$pg->create_db("Advantech.test", array());

var_dump($pg);