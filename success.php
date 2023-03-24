<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
  $empType = "";
  $empName = "";
  $dept = "";
  $action = "";
  $drives = "";;
  $printers = "";
  $tech = "";
  $email = "";
  $software = "";

  // define("HOSTNAME", "localhost");
  // define("USERNAME", "root");
  // define("PASSWORD", "");
  // define("DATABASE", "employee-request");

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "employee-request";

  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT * FROM emp";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // var_dump($result);
    //output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
      echo "NAME: " . $row["employeeName"] . " DEPARTMENT: " . $row["department"] . "<br>";
    }
  } else {
    echo "0 results";
  }
  $conn->close();

  // $query = "SELECT * FROM `emp` (employeeType, employeeName, department, actionDate, drives, printers, techType, email, software) VALUES ('$empType', '$empName', '$dept', '$action', '$drives', '$printers', '$tech', '$email', '$software' )";
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
</body>
</html>