<?php

namespace MVCFinalTamLe\models;

use MVCFinalTamLe\models\CRUDModels;

class SearchModels
{
    private $CRUDmodels;

    public function __construct()
    {
        $this->CRUDmodels = new CRUDModels();
    }

    public function search($data)
    {
        return $this->CRUDmodels->select("SuperMarketManager", $data, "LIKE", 'All');
    }
}