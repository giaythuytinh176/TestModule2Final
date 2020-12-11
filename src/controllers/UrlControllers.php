<?php

namespace MVCFinalTamLe\controllers;

use MVCFinalTamLe\controllers\ProductControllers;
use MVCFinalTamLe\controllers\RenderControllers;
use MVCFinalTamLe\config\config;
use MVCFinalTamLe\controllers\ToolControllers;

class UrlControllers
{
    protected $controllers = "index";
    protected $action = "";
    protected $params = [];
    protected $render;
    protected $search;
    protected $product_controllers;


    public function __construct()
    {
        $this->render = new RenderControllers();
        $this->search = new SearchControllers();
        $this->product_controllers = new ProductControllers();
    }

    public function parseController()
    {
        //ToolControllers::dd($this);
        switch ($this->controllers) {
            case "add":
                $this->product_controllers->addProduct();
                break;
            case "edit":
                if (!empty($this->action)) {
                    $this->product_controllers->editProduct($this->action);
                } else {
                    $this->render->errorPage();
                }
                break;
            case "delete":
                if (!empty($this->action)) {
                    $this->product_controllers->deleteProduct($this->action);
                } else {
                    $this->render->errorPage();
                }
                break;
            case "search":
                if (!empty($_POST['search'])) {
                    $this->search->search();
                } else {
                    $this->render->errorPage();
                }
                break;
            default:
                $this->product_controllers->getProductList();
        }
    }

    public function index()
    {
        static::ParseActionsParams(self::parseURL());
        static::parseController();
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
