<?php


namespace MVCFinalTamLe\models;

use MVCFinalTamLe\models\CRUDModels;
use MVCFinalTamLe\controllers\ToolControllers;

class ProductModels
{
    private $CRUDmodels;

    public function __construct()
    {
        $this->CRUDmodels = new CRUDModels();
    }

    public function getProductList()
    {
        return $this->CRUDmodels->select("SuperMarketManager", "", "", "All");
    }

    public function getDetailProduct($data)
    {
        return $this->CRUDmodels->select("SuperMarketManager", $data);
    }

    public function addProduct($data)
    {
        $this->CRUDmodels->insert("SuperMarketManager", $data);
    }

    public function editProduct($data, $where)
    {
        $this->CRUDmodels->update("SuperMarketManager", $data, $where);
    }

    public function deleteProduct($data)
    {
        $this->CRUDmodels->delete("SuperMarketManager", $data);
    }

}