<?php


namespace Model;

class ProductDB
{
    public $connection;

    public function __construct($connection)
    {
        $this->connection = $connection;
    }

    public function getAll()
    {
        $sql = "SELECT * FROM `products`";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll();
        $products = [];
        foreach ($result as $row) {
            $product = new Product($row["nameProduct"], $row["priceProduct"], $row["describeProduct"], $row["factory"]);
            $product->id = $row['id'];
            $products[] = $product;
        }
        return $products;
    }

    public function getProduct($id)
    {
        $sql = "SELECT * FROM products WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        $statement->execute();
        $row = $statement->fetch();
        $product = new Product($row["nameProduct"], $row["priceProduct"], $row["describeProduct"], $row["factory"]);
        $product->id = $row['id'];
        return $product;
    }
    public function create($product)
    {
        $sql = "INSERT INTO `products`(`nameProduct`, `priceProduct`, `describeProduct`, `factory`) VALUES (?,?,?,?)";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1,$product->nameProduct);
        $statement->bindParam(2,$product->priceProduct);
        $statement->bindParam(3,$product->describeProduct);
        $statement->bindParam(4,$product->factory);
        return $statement->execute();


    }
    public function delete($id){
        $sql = "DELETE FROM products WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $id);
        return $statement->execute();
    }
    public function update($id,$product)
    {
        $sql = "UPDATE `products` SET `nameProduct`= ?,`priceProduct`= ?,`describeProduct`= ?,`factory`= ? WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $product->nameProduct);
        $statement->bindParam(2, $product->priceProduct);
        $statement->bindParam(3, $product->describeProduct);
        $statement->bindParam(4, $product->factory);
        $statement->bindParam(5, $id);
        return $statement->execute();
    }




}