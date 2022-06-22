<?php

namespace MySQLModule;
class MySQLModel
{
    public $host;
    public $user;
    public $password;
    public $port;
    public $db;
    public $connect;
    public $sql;
    public $result;

    /**
     * @param mixed $con
     */
    public function setConnect()
    {
        $this->connect = mysqli_connect($this->host, $this->user, $this->password);
    }
}

class MySQLModule extends MySQLModel
{
    public function __construct($link)
    {
        // 存储连接参数
        $this->link = $link;
        // 连接数据库
        $this->connect = mysqli_connect($link["host"], $link["user"], $link["password"]);
        // 检测连接
        if (!$this->is_connect()) {
            die("Error: " . mysqli_connect_error());
        }
        // 检测db
        if (!$this->is_db_exists($link["db"])) {
            die("Error: " . mysqli_connect_error());
            // $this->create_db($link["db"]);
        }
        // 连接db
        mysqli_select_db($this->con, $link["db"]);
    }

    public function is_connect()
    {
        return $this->connect ? true : false;
    }

    public function is_db_exists($db)
    {
        $this->result = mysqli_query($this->con, "show databases like '$db'");
        return $this->count() !== 0 ? true : false;
    }

    public function create_db($db)
    {
        mysqli_query($this->con, "CREATE DATABASE $db");
    }

    public function is_table_exists($tb)
    {
        $this->result = mysqli_query($this->con, "show tables like '$tb'");
        return $this->count() !== 0 ? true : false;
    }

    public function create_tb($name, $struct)
    {
        $sql = "create table $name (";
        foreach ($struct as $k => $v) {
            $sql .= "`$k` $v,";
        }
        $sql = substr($sql, 0, strlen($sql) - 1);
        $sql .= ");";
        // echo $sql;
        mysqli_query($this->con, $sql);
    }

    public function query($sql)
    {
        $this->sql = $sql;
        return $this->result = mysqli_query($this->con, $sql);
    }

    public function count()
    {
        return mysqli_num_rows($this->result);
    }

    public function empty_tb($tb, $log = true)
    {
        if ($log) {
            $this->sql = "delete from $tb";
        } else {
            $this->sql = "truncate table $tb";
        }
        return $this->result = mysqli_query($this->con, $this->sql);
    }

    public function rows()
    {
        $result = array();
        $col = array();
        while ($row = mysqli_fetch_field($this->result)) {
            $col[$row->name] = null;
        }

        while ($row = mysqli_fetch_assoc($this->result)) {
            $r = $col;
            foreach ($col as $k => $v) {
                $r[$k] = $row[$k];
            }
            array_push($result, $r);
        }
        return $this->result = $result;
    }

    public function backup()
    {
    }

    public function restore()
    {
    }

    public function close()
    {
        mysqli_close($this->con);
    }
}
