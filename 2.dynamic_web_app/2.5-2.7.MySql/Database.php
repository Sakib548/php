<?php
class Database{
   
   public $connection;
   
   public function __construct(){
        $ds = "mysql:host=localhost;port=3306;dbname=myapp;user=root;charset=utf8mb4";

       $this->connection = new PDO($ds);
   }
   public function query($query){

      

       $statement =  $this->connection->prepare($query);

       $statement->execute();

       return $statement;
   }

}

?>