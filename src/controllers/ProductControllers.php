<?php


namespace MVCFinalTamLe\controllers;

use MVCFinalTamLe\controllers\ToolControllers;
use MVCFinalTamLe\models\ProductModels;

class ProductControllers extends RenderControllers
{
    protected $productmodels;

    public function __construct()
    {
        $this->productmodels = new ProductModels();
    }

    public function getProductList()
    {
        $ProductList = $this->productmodels->getProductList();
        $this->view("index/index", $ProductList);
    }


    public function addProduct()
    {
        if (!empty($_POST['ProductName']) &&
            !empty($_POST['ProductType']) &&
            !empty($_POST['Price']) &&
            !empty($_POST['Quantity']) &&
            !empty($_POST['Created']) &&
            !empty($_POST['Description'])
        ) {
            $data['ProductName'] = $_POST['ProductName'];
            $data['ProductType'] = $_POST['ProductType'];
            $data['Price'] = $_POST['Price'];
            $data['Quantity'] = $_POST['Quantity'];
            $data['Created'] = $_POST['Created'];
            $data['Description'] = $_POST['Description'];
            $this->productmodels->addProduct($data);
        }
        $this->view("add");
    }

    public function editProduct($product_id)
    {
        if (!empty($_POST['ProductName']) &&
            !empty($_POST['ProductType']) &&
            !empty($_POST['Price']) &&
            !empty($_POST['Quantity']) &&
            !empty($_POST['Created']) &&
            !empty($_POST['Description']) && !empty($product_id)
        ) {
            $data['ProductName'] = $_POST['ProductName'];
            $data['ProductType'] = $_POST['ProductType'];
            $data['Price'] = $_POST['Price'];
            $data['Quantity'] = $_POST['Quantity'];
            $data['Created'] = $_POST['Created'];
            $data['Description'] = $_POST['Description'];

            $where['ProductID'] = $product_id;
            $this->productmodels->editProduct($data, $where);
            $this->view("edit");
        } else {
            $getDetailProduct = $this->productmodels->getDetailProduct(['ProductID' => $product_id]);
            $this->view("edit", $getDetailProduct);
        }
    }

    public function deleteProduct($id)
    {
        $this->productmodels->deleteProduct(["ProductID" => $id]);
        $this->redirectAfterSecondPage("", 0);
    }


}