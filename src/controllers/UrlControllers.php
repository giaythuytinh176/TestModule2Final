<?php

namespace MVCFinalTamLe\controllers;

use \MVCFinalTamLe\config\config;
use \MVCFinalTamLe\controllers\ToolControllers;

class UrlControllers
{
    protected $controllers = "index";
    protected $action = "index";
    protected $params = [];

    public function index()
    {
        static::ParseActionsParams(self::parseURL());
        static::parseController();
    }

    public function parseController()
    {
        //ToolControllers::dd($this);
        switch ($this->controllers) {


            default:
                //(new RenderControllers)->errorPage();
                (new RenderControllers)->homepage();
        }
    }

    public static function parseURL()
    {
        if (!empty($_GET['url'])) {
            //return explode("/", filter_var(trim($_GET['url'], "/")));
            return explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
    }

    public static function url($q = "", $p = \MVCFinalTamLe\config\config::BASE_FOLDER)
    {
        return sprintf(
            "%s://%s/%s" . (($q == "") ? "" : "/%s"),
            isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
            $_SERVER['SERVER_NAME'], $p, $q
        );
    }

    public function ParseActionsParams($parseurl): void
    {
        if (!empty($parseurl[0])) {
            $this->controllers = $parseurl[0];
        }
        if (!empty($parseurl[1])) {
            $this->action = $parseurl[1];
        }
        if (!empty($parseurl[0]) && !empty($parseurl[1]) && !empty($parseurl[2])) {
            unset($parseurl[0]);
            unset($parseurl[1]);
            $this->params = array_values($parseurl);
        }
    }
}
