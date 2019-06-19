<?php
namespace Model;

class Product
{
    public $id;
    public $nameProduct;
    public $priceProduct;
    public $factory;
    public $describeProduct;
    public function __construct($nameProduct,$priceProduct,$describeProduct,$factory)
    {
        $this->nameProduct = $nameProduct;
        $this->priceProduct = $priceProduct;
        $this->describeProduct =$describeProduct;
        $this->factory = $factory;
    }

}