<?php

namespace PostgreSQLModule;

use StringModule\StringModule;

include_once __DIR__ . "/../String/String.php";

/**
 * Class PostgreSQLModel
 * @package PostgreSQLModule
 * @done connect 连接
 * @done connect_db 连接数据库
 * @done close 关闭连接
 * @done tosql 转换为SQL
 * @done query 查询
 * @todo insert
 * @todo update
 * @todo delete
 * @done is_db_exist 检测数据库是否存在
 * @done create_db 创建数据库
 * @todo is_schema_exist
 * @todo create_schema
 * @todo is_tb_exist
 * @todo create_tb
 * @todo fetch_all 从结果中提取所有行作为一个数组
 * @todo fetch_array 提取一行作为数组
 * @todo fetch_assoc 提取一行作为关联数组
 * @todo fetch_object 提取一行作为对象
 * @todo fetch_result 从结果资源中返回值
 * @todo fetch_row 提取一行作为枚举数组
 * @todo copy_from
 * @todo copy_to
 *
 *
 * @todo setResultInfo 提取结果信息
 * @todo getDbs
 * @todo getSchemas
 * @todo getTbs
 */
class PostgreSQLModel
{
    const SQLs = array(
        "is_db_exist" => "SELECT COUNT(*) FROM pg_catalog.pg_database where datname=':dbname';",
        "create_db" => "CREATE DATABASE \":dbname\";",
        "drop_db" => "DROP DATABASE \":dbname\";",
        "is_schema_exist" => "SELECT COUNT(*) FROM information_schema.schemata WHERE schema_name =':schema' ;",
        "create_schema" => "CREATE SCHEMA \":schema\";",
        "drop_schema" => "DROP SCHEMA \":schema\";",
        "is_tb_exist" => "SELECT COUNT(*) FROM pg_tables WHERE tablename NOT LIKE 'pg%' and tablename NOT LIKE 'sql_%' AND schemaname=':schema' AND tablename=':tb';",
        "create_tb" => "CREATE TABLE \":schema\".\"tb\" ();",
        "drop_tb" => "DROP TABLE \":schema\".\":tb\";",
        "getDbs" => "SELECT * FROM pg_database;",
        "getSchemas" => "SELECT * FROM information_schema . schemata WHERE schema_name NOT LIKE 'pg%' and schema_name != 'information_schema';",
        "getTbs" => "SELECT * FROM pg_tables WHERE tablename NOT LIKE 'pg%' and tablename NOT LIKE 'sql_%';",
    );
    public $connection; // 连接
    public $connection_info = array();// 链接信息

    public $dbs;// 数据库
    public $schemas;// 模式
    public $tbs;// 数据表

    public $sql;// 查询语句

    public $result; // 查询结果
    public $result_history = array();
    public $result_info = array();// 查询结果信息

    public function fetch_array($cb, $rowIndex = null)
    {
        if ($rowIndex === null) {
            while ($row = pg_fetch_array($this->result)) {
                $cb($row);
            }
        } else {
            return pg_fetch_array($this->result, $rowIndex);
        }
    }

    public function fetch_all()
    {
        return pg_fetch_all($this->result);
    }

    public function fetch_assoc($row = 0)
    {
        return pg_fetch_assoc($this->result, $row);
    }

    public function connect($links)
    {
        $connection_string = "";
        if (isset($links["host"])) {
            $this->connection_info["host"] = $links["host"];
            $connection_string = $connection_string . " host=" . $links["host"];
        }
        if (isset($links["port"])) {
            $this->connection_info["port"] = $links["port"];
            $connection_string = $connection_string . " port=" . $links["port"];
        }
        if (isset($links["user"])) {
            $this->connection_info["user"] = $links["user"];
            $connection_string = $connection_string . " user=" . $links["user"];
        }
        if (isset($links["password"])) {
            $this->connection_info["password"] = $links["password"];
            $connection_string = $connection_string . " password=" . $links["password"];
        }
        $this->connection = pg_connect($connection_string) or die("Could not connect");
        // 连接数据库
        if (isset($links["dbname"])) {
            self::connect_db($links["dbname"]);
        }
    }

    public function connect_db($dbname)
    {
        $this->connection_info["dbname"] = $dbname;
        // 检测数据库是否存在
        if (!self::is_db_exist($dbname)) {
            // 创建数据库
            if (!self::create_db($dbname)) {
                die("Create Database failed");
            };
        }
        $connection_string = " host=" . $this->connection_info["host"] . " port=" . $this->connection_info["port"] . " user=" . $this->connection_info["user"] . " password=" . $this->connection_info["password"] . " dbname=" . $dbname;
        $this->connection = pg_connect($connection_string) or die("Could not connect");
    }

    public function close()
    {
        pg_close($this->connection);
    }

    public function tosql($sql, $params = array())
    {
        if (array_key_exists($sql, self::SQLs)) {
            $this->sql = StringModule::replace(self::SQLs[$sql], $params);
        } else {
            $this->sql = StringModule::replace($sql, $params);
        }

    }

    public function query()
    {
        $result = pg_query($this->connection, $this->sql);
        $this->result = $result;
        self::setResultInfo();
        array_unshift($this->result_history, $result);
        return $result;
    }

//    public function insert()
//    {
//    }
//
//    public function update()
//    {
//    }
//
//    public function delete()
//    {
//    }

    public function is_db_exist($dbname)
    {
        $this->sql = StringModule::replace(self::SQLs[__FUNCTION__], array(
            ":dbname" => $dbname
        ));
        self::query();
        return pg_fetch_assoc($this->result, 0)["count"] > 0 ? true : false;
    }

    public function create_db($dbname, $construct = array())
    {
        $this->sql = StringModule::replace(self::SQLs[__FUNCTION__], array(
            ":dbname" => $dbname
        ));
        self::query();
        return $this->result_info["status"] ? true : false;
    }

    public function is_schema_exist($schema)
    {
        self::tosql(__FUNCTION__, array(":schema" => $schema));
        self::query();
        return pg_fetch_assoc($this->result, 0)["count"] > 0 ? true : false;
    }


    /**
     * @return mixed
     */

    public function setDbs()
    {
        $this->dbs = pg_fetch_all(pg_query($this->connect, "select * from pg_database"));
    }


    /**
     * @param mixed $result_info
     */

    public function setResultInfo()
    {
        $this->result_info = array(
            "status" => pg_result_status($this->result),
            "affected_rows" => pg_affected_rows($this->result),// 受影响的记录数目
            "num_rows" => pg_num_rows($this->result),// 行的数目
            "num_fields" => pg_num_fields($this->result),// 字段的数目
        );
    }

    /**
     * @param mixed $connection_info
     */

    public function setConnectionInfo()
    {
        $this->connection_info = array(
            "status" => pg_connection_status($this->connect),// 状态
            "client_encoding" => pg_client_encoding($this->connect),// 客户端编码方式
            "is_busy" => pg_connection_busy($this->connect),// 是否为忙
            "dbname" => pg_dbname($this->connect),
            "port" => pg_port($this->connect),
            "options" => pg_options($this->connect),
        );
    }

    /**
     * @param mixed $tables
     */

    public function setTables()
    {
        $this->tables = pg_fetch_all(pg_query($this->connect, "SELECT * FROM pg_tables WHERE tablename NOT LIKE 'pg%' and tablename NOT LIKE 'sql_%'"));
    }

    /**
     * @param mixed $schemas
     */

    public function setSchemas()
    {
        $this->schemas = pg_fetch_all(pg_query($this->connect, "SELECT * FROM information_schema . schemata WHERE schema_name NOT LIKE 'pg%' and schema_name != 'information_schema'"));
    }

    /**
     * 连接数据库
     * @param mixed $connect
     */

    public function setConnect()
    {
        $this->connect = pg_connect($this->connection) or die("Could not connect");;
        self::setConnectionInfo();
//        self::setDbs();
//        self::setSchemas();
//        self::setTables();
    }

    /**
     * @param mixed $connection
     */

    public function setConnection($connection)
    {
        $connection_string = "";
        if (isset($connection["host"])) {
            $connection_string = $connection_string . " host=" . $connection["host"];
        }
        if (isset($connection["port"])) {
            $connection_string = $connection_string . " port=" . $connection["port"];
        }
//        if (isset($connection["dbname"])) {
//            $connection_string = $connection_string . " dbname=" . $connection["dbname"];
//        }
        if (isset($connection["user"])) {
            $connection_string = $connection_string . " user=" . $connection["user"];
        }
        if (isset($connection["password"])) {
            $connection_string = $connection_string . " password=" . $connection["password"];
        }
        $this->connection = $connection_string;
    }
}


interface PostgreSQLInterface
{
    // function list();
    public function listOfSchema(); // 所有模式名

    public function listOfTable(); // 所有表名
    // function listOfTableBySchema(); // 模式下所有表名
    // function listOfColumn($schema, $table); // 所有列名
    // function create();
    // function drop();
    // function insert();
    // function delete();
    // function update();
    // function select();
}


class PostgreSQLModule extends PostgreSQLModel
{
    public function __construct($links)
    {
        // 检测pgsql模块是否开启
        if (!function_exists("pg_connect")) {
            die("pgsql 模块未开启");
        }
        // 连接pgsql服务
        self::connect($links);
        // 连接数据库
//        self::setConnection($connection);
//        self::setConnect();
    }

    public function list()
    {
        $this->listOfTable();
        $result = array();
        while ($row = pg_fetch_array($this->result)) {
            if (!isset($result[$row["schemaname"]])) {
                $result[$row["schemaname"]] = array();
            }
            array_push($result[$row["schemaname"]], $row["tablename"]);
        }
        return $result;
    }


    public function listOfTable()
    {
        $this->result = pg_query($this->con, "SELECT * FROM pg_tables WHERE tablename NOT LIKE 'pg%' and tablename NOT LIKE 'sql_%'");


        $this->close();
        // $callback($result);
        return $this->result;
    }

    public function listOfTableBySchema($schema)
    {
        $this->result = pg_query($this->con, "SELECT * FROM pg_tables WHERE tablename NOT LIKE 'pg%' and tablename NOT LIKE 'sql_%' where schemaname = '{$schema}'");


        $this->close();
        // $callback($result);
        return $this->result;
    }

    public function select($sql)
    {
        $this->result = pg_query($this->con, $sql);
        $this->close();
        return $this->result;
    }

    public function create()
    {
    }

    public function drop()
    {
    }

    public function insert($sql)
    {
        if (pg_query($this->con, $sql)) {
            $this->result = true;
        } else {
            $this->result = false;
        }

        $this->close();
        return $this->result;
    }

    public function delete()
    {
    }

    public function update()
    {
    }

    public function iResult()
    {
        if (!$this->result) {
            return false;
        }
        return true;
    }

    public function count()
    {
        return pg_num_rows($this->result);
    }

    public function forEach($callback)
    {
        while ($row = pg_fetch_array($this->result)) {
            $callback($row);
        }
    }
}
