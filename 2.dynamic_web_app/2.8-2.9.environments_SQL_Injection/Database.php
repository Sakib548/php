<?php
class Database{
   
   public $connection;
   
   public function __construct($config,$username="root",$password=""){

      

       // dd(http_build_query($config,'',';')); //"host=localhost;port=3306;dbname=myapp;charset=utf8mb4"
        $ds = "mysql:".http_build_query($config,'',';');

       $this->connection = new PDO($ds,$username,$password,[
          PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC
       ]);
   }
   public function query($query,$params=[]){

      

       $statement =  $this->connection->prepare($query);

       $statement->execute($params);

       return $statement;
   }

}

?>