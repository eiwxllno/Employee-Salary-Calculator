<?php

   include_once "classes/employee.php";

$first_name = " ";
$last_name = " ";
$hours_worked = " ";
$skill_level = " ";
$rate = 0.0 ;
$regular_pay = 0.0;

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
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Em-Sal Calculator</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="row justify-content-center align-items-center my-5 g-2">
      <div class="col"><h1>Employee Salary Calculator</h1></div>
    </div>
     <div
      class="row justify-content-center g-2" >
  <div class="col-md-8">
    <form method ="POST" action="employee_salary_calculator.php" >
      <div class="row justify-content-center align-items-center g-2">
      <div class="col-md-6">
        <div class="mb-3">
          <label for="" class="form-label">First Name</label>
          <input
            type="text"
            class="form-control"
            name="first_name"
            id=""
          />
        </div>
        
      </div>
      <div class="col-md-6">
        <div class="mb-3">
          <label for="" class="form-label">Last Name</label>
          <input
            type="text"
            class="form-control"
            name="last_name"
            id=""
          />
        </div>  
      </div>
      </div>
      <div class="row justify-content-center align-items-center g-2">
      <div class="col-md-6">
        <div class="mb-3">
          <label for="" class="form-label">Hours Worked</label>
          <input
            type="text"
            class="form-control"
            name="hours_worked"
            id=""
          />
        </div>
        
      </div>
      <div class="col-md-6 md-3">
        <div class="mb-3">
          <label for="" class="form-label">Skill</label>
          <select
            class="form-select form-select-md"
            name="skill_level"
            id=""
          >
            <option selected>Select Skill</option>
            <option value="1">Skill 1</option>
            <option value="2">Skill 2</option>
            <option value="3">Skill 3</option>
          </select>
        </div>
        
      </div>
      </div>
      <div class="row justify-content-center align-items-center g-2">
      <div class="col">
      <button
        type="submit"
        class="btn btn-primary"
      >
        Submit
      </button>
      </div>
      </div>
    </form> 
  </div>
      <div class="col-md-4">
        <div class="card">
          <div class="card-body">
            <p class="card-text fw-bold">First Name: <?php echo $first_name ?> </p>
            <p class="card-text fw-bold">Last Name: <?php echo $last_name ?> </p>
            <p class="card-text fw-bold">Hours Worked: <?php echo $hours_worked ?> </p>
            <p class="card-text fw-bold">Skill: <?php echo $skill_level ?> </p>
            <p class="card-text fw-bold">Rate: <?php echo $rate ?> </p>
            <p class="card-text fw-bold">Regular Pay:<?php echo $regular_pay ?></p> 
            <p class="card-text fw-bold">Overtime Pay:</p>
            <p class="card-text fw-bold">Total Pay:</p>
          </div>
        </div>
      </div>
     </div>
  </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>