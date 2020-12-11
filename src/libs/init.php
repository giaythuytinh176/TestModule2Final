<?php

namespace MVCFinalTamLe\libs;

use MVCFinalTamLe\controllers\ToolControllers;

class init
{
    public static function start()
    {
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        error_reporting(E_ALL);
        ini_set("display_errors", 1);
    }
}