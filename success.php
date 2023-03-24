<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "employee-request";

  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql = "SELECT * FROM emp";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    while ($row = mysqli_fetch_assoc($result)) { ?>
     <h2><?php echo $row["employeeName"]; ?></h2>   
   <? } 
  } else {
    echo "0 results";
  }
  $conn->close();

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