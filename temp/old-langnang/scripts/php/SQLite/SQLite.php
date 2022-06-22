<?php

class SQLiteModel
{
    private $path;

    function __construct()
    {
    }
}

class SQLiteModule
{
    function __construct($path)
    {
        $this->open($path);
    }

    function toJSON($data)
    {
        $rowData = array();
        while ($row = $data->fetchArray(SQLITE3_ASSOC)) {
            // var_dump($row);
            $array = array();
            foreach ($row as $k => $v) {
                $array[$k] = $v;
            }
            array_push($rowData, $array);
        }
        return json_encode($rowData);
    }
}
