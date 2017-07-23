<?php


  // Connect to database
  class dbManipulate
  {
      private $host = '127.0.0.1';
      private $db   = 'northwind';
      private $user = 'root';
      private $pass = '';
      private $charset = 'utf8';
      private $pdo;
      private $dsn = 'mysql:host=$host;dbname=$db;charset=$charset';
      private $opt = [
                        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                        PDO::ATTR_EMULATE_PREPARES   => false,
                    ];

      public function __construct()
      {
          $this->connect();
      }

    
      public function connect()
      {
          $this->pdo = new PDO($this->dsn, $this->user, $this->pass, $this->opt);
      }

      public function runQuery( $theQuery )
      {
          return $this->pdo->query( $theQuery );
      }

      public function getTableNames()
      {
          $row = $this->pdo->query("SELECT TABLE_NAME 
                                    FROM INFORMATION_SCHEMA.TABLES
                                    WHERE TABLE_TYPE = 'BASE TABLE' AND TABLE_SCHEMA=$this->getDbName()");
      }

      public function showTableNames()
      {
          $row = $this->getTableNames();

          echo "<form><select>";
            while ($row = $this->pdo->fetch())
                    {
                    echo "<option value=" . $row["id"] . "  name='gotit'>" . "manufacturer: " . $row['manufacturer'] . ", price: " . $row['price'] ."</option>";
                    }
            echo "</select>";
            echo "<input type='submit' name='choosen'></form>";


      }

      private function getDbName()
      {
          return $this->db;
      }
        // Insert data
        
        /*
        $statement = $pdo->prepare("INSERT INTO l40_screens(manufacturer, model , price, size)
            VALUES(:manufacturer, :model, :price, :size)");
        
        $statement->execute(array(
            "manufacturer" => $this->getManufacturer(),
            "model" => $this->getModel(),
            "price" => $this->getPrice() ,
            "size" => $this->getsize() 
        ));
        */

}

?>