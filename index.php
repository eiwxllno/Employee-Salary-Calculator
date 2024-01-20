<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
</body>
</html>

<?php

class Trainee{
  // properties/field/characteristic/attribute
  // access_modifier fieldname
  public $firstname; //$firstname = Anna
  public $lastname;

  // method/behavior/functions
  // function function_name(parameter/arguments)
  function set_first_name($firstname2){ //set_first_name(Anna)
      $this->firstname = $firstname2; //$this->firstname = Anna
  }

  function get_first_name(){
    return $this->firstname;
  }

  function calculate(){

  }
}

//instantiate
$trainee1 = new Trainee();

//call the method
$trainee1->set_first_name("Anna");

//execute get
echo "<h1>" . $trainee1->get_first_name() . "</h1>"; //returned Anna



?>