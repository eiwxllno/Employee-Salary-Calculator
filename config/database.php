<?php
  class Database{
  // specify database credentials
  private $host = "localhost";
  private $db_name = "trainee";
  private $username = "root";
  private $password = "";

  public $connection;

  public function getConnection(){
    $this->connection = null;
      try{
        // mysql:host=localhost;dbname=trainee,root,
         $this->connection = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
      }
      catch(PDOException $exception){
          echo "Connection error: " . $exception->getMessage();
      }
      
   return $this->connection;
  }
}
?>