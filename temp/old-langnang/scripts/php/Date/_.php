<?php

namespace DateModule;
class DateModule
{
    public function toDate($date)
    {
        return strtotime($date);
    }

    function format()
    {
    }

    function toTimeStamp()
    {
    }

    function zh_cn()
    {
        date_default_timezone_set('PRC');
    }
}
