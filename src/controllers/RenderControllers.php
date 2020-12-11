<?php

namespace MVCFinalTamLe\controllers;

use \MVCFinalTamLe\controllers\ToolControllers;

class RenderControllers
{
    public function homepage()
    {
        $this->view("index/index");
    }

    public function errorPage($head = "")
    {
        $this->view("error/404", ["", "", $head]);
    }

    public function view($v, $data = [])
    {
        require_once "./src/views/pages/$v.php";
        //exit();
    }

    public static function redirectAfterSecondPage($page = "", $second = 1)
    {
        if (headers_sent()) {
            die("Redirect to new page ... <a href='" . \MVCFinalTamLe\controllers\UrlControllers::url($page) . "'></a> <meta http-equiv=\"Refresh\" content=\"" . $second . "; url=" . \MVCFinalTamLe\controllers\UrlControllers::url($page) . "\">");
        } else {
            exit(header("Location: " . \MVCFinalTamLe\controllers\UrlControllers::url($page)));
        }
    }

    public function redirectPage($page = "")
    {
        header("Location: " . UrlControllers::url($page));
        exit();
    }
}