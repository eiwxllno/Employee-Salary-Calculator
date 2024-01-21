<?php
class Trainee{
  public $first_name;
  public $last_name;
  public $affiliation;

  private $connection;

  function __construct($db){
    $this->connection = $db;
   
  }
  function readTraineelist(){
     $query = "SELECT * FROM trainee_info";
     $stmt = $this->connection->prepare($query);
     $stmt->execute();

     return $stmt;
  }
}

?>