<?php

   include_once "classes/employee.php";

$first_name = " ";
$last_name = " ";
$hours_worked = " ";
$skill_level = " ";
$rate = 0.0 ;
$regular_pay = 0.0;
$overtime_pay = 0.0;
$totalPay = 0.0;

  if($_POST){
     $first_name = $_POST['first_name'];
     $last_name = $_POST['last_name'];
     $hours_worked = $_POST['hours_worked'];
     $skill_level = $_POST['skill_level'];

    //  instantiate
    $employee = new Employee();
    $employee->skill_level = $skill_level;
    $rate = $employee->getRate();
   
    $employee->hours_worked = $hours_worked;
    $regular_pay = $employee->calculateRegularPay();

    $overtime_pay = $employee->calculateOvertimePay();
    $totalPay = $employee->calculateTotalPay();

  }
?>