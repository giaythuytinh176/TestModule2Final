<?php

namespace MVCFinalTamLe\controllers;

use MVCFinalTamLe\models\SearchModels;

class SearchControllers extends RenderControllers
{
    protected $sm;

    public function __construct()
    {
        $this->sm = new SearchModels();
    }

    public function search()
    {
        $dataSQL = [];
        if (!empty($_POST['search'])) {
            $arr = ['ProductName' => $_POST['search']
                , 'ProductType' => $_POST['search']
                , 'Description' => $_POST['search']
            ];
            $dataSQL = $this->sm->search($arr);
            if (empty($dataSQL)) {
                $dataSQL = ["errors" => "Search not found."];
            }
        }
        $this->view("index/search", $dataSQL);
    }
}