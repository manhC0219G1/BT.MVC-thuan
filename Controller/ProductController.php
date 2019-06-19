<?php

use Model\DBConnection;
use Model\Product;
use Model\ProductDB;

class ProductController
{
    public $productDB;

    public function __construct()
    {
        $db_connection = new DBConnection("mysql:host=localhost;dbname=manage_product", "root", "Vuvanmanh@1");
        $this->productDB = new ProductDB($db_connection->connect());
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include 'View/add.php';
        } else {
            $nameProduct = $_POST['nameProduct'];
            $priceProduct = $_POST['priceProduct'];
            $describeProduct = $_POST['describeProduct'];
            $factory = $_POST['factory'];
            $product = new Product($nameProduct, $priceProduct, $describeProduct, $factory);
            $this->productDB->create($product);
            include 'View/add.php';
            header('Location: index.php');
        }
    }
    public function delete()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $product = $this->productDB->getProduct($id);
            include 'View/delete.php';
        } else {
            $id = $_POST['id'];
            $this->productDB->delete($id);
            header('Location: index.php');
        }
    }
    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $product = $this->productDB->getProduct($id);
            include 'View/edit.php';
        } else {
            $id = $_POST['id'];
            $product = new Product($_POST['nameProduct'], $_POST['priceProduct'], $_POST['describeProduct'],$_POST['factory']);
            $this->productDB->update($id, $product);
            header('Location: index.php');

        }
    }


    public function index()
    {
        $products = $this->productDB->getAll();
        include "View/list.php";
    }


}