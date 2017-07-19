<?php

class ElectronicPart {
    private $manufacturer; 
    private $price; 
    private $model; 

    public function __construct($manufacturer, $price, $model ) {
        $this->model = $model; 
        $this->price = $price; 
        $this->manufacturer = $manufacturer; 
    }

    public function insert()
    {
        // Connect to database
        $host = '127.0.0.1';
        $db   = 'northwind';
        $user = 'root';
        $pass = '';
        $charset = 'utf8';

        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $opt = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        $pdo = new PDO($dsn, $user, $pass, $opt);

        // Insert data
        $statement = $pdo->prepare("INSERT INTO l40_screens(manufacturer, model , price, size)
            VALUES(:manufacturer, :model, :price, :size)");
        
        $statement->execute(array(
            "manufacturer" => $this->getManufacturer(),
            "model" => $this->getModel(),
            "price" => $this->getPrice() ,
            "size" => $this->getsize() 
        ));

    }

    

    function getModel() {
        return $this->model; 
    }

    function getPrice() {
        return $this->price; 
    }

    function getManufacturer() {
        return $this->manufacturer; 
    }
}


?>