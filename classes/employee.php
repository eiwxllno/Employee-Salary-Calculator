<?php
class Employee{
  //fields
  public $skill_level;
  public $hours_worked;
  private $rate;

  function getRate(){
    if($this->skill_level==1){
       $this->rate = 300.00;
    }
    elseif($this->skill_level==2){
      $this->rate = 400.00;
    }
    elseif($this->skill_level==3){
      $this->rate = 500.00;
    }
    else{
       $this->rate = 0.00;
    }
    return $this->rate;
  }

  function calculateRegularPay(){
    if($this->hours_worked <= 40){
    $regular_pay = $this->hours_worked * $this->rate;
    }
    else{
       $regular_pay = 40 * $this->rate;
    }
    return $regular_pay;
  }
   function calculateOvertimePay(){
      if ($this->hours_worked > 40){
      $excessHours = $this->hours_worked - 40;
      $overtime_pay = $this->rate * $excessHours * 1.5;
      }
      else{
        $overtime_pay = "No overtime pay";
      }
      return $overtime_pay;
   }

   function calculateTotalPay(){
    if ($this->hours_worked > 40){
      $totalPay = $this->calculateRegularPay() + $this->calculateOvertimePay();
    }
    else{
      $totalPay = $this->calculateRegularPay();
    }
    return $totalPay;
   }
  }
?>

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