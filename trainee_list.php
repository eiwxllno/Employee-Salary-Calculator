<?php
include_once "header.php";
include_once "config/database.php";
include_once "classes/trainee.php";

// instantiate database object
$database = new Database();
$db = $database->getConnection(); //database connection string is stored in $db

// instantiate trainee object
$trainee = new Trainee($db);
 $stmt = $trainee->readTraineelist();


echo '<div class="table-responsive">
  <table class="table table-primary">
    <thead>
      <tr>
        <th scope="col">First name</th>
        <th scope="col">Last name</th>
        <th scope="col">Affiliation</th>
      </tr>
    </thead>
    <tbody>';
    while($row = $stmt->fetch(PDO::FETCH_ASSOC)){
      extract($row);
    echo "<tr>";
      echo "<td> {$first_name} </td>";
      echo "<td> {$last_name} </td>";
      echo "<td> {$affiliation} </td>";
    echo "</tr>";  
    }
echo  
    '</tbody>
  </table>
</div>';

?>