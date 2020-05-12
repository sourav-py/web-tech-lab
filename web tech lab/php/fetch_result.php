<?php
//UE183106 SOURAV SINGH

//connection credentials for db already created with myphpadmin.
$servername = "localhost";
$username = "root";
$password = "";
$db = "student";

// Create connection
$conn = new mysqli($servername, $username, $password,$db);

//fetch get request parameter
$roll = $_REQUEST["par"];
$query = 'SELECT result FROM student_table WHERE roll_no = '.(String)$roll;
$result =  $conn->query($query);

if ($result->num_rows > 0) {
  
    while($row = $result->fetch_assoc()) {
      echo "Result\t";
      echo $row["result"];
      echo "%";
    }
  } 
  else {
    echo "----";
  }

  //UE183106 SOURAV SINGH

?> 