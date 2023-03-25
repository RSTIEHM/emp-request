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
}


?>
<?php require("includes/header.php"); ?>

<div class="table-flex">

  <table>
    <tr class="tr-dark">
      <th>Name</th>
      <th>Department</th>
      <th>Type</th>
      <th>Action Date</th>
      <th>Emails</th>
      <th>Details</th>
    </tr>
    <?php
    $sql = "SELECT * FROM emp";
    $result = $conn->query($sql);

    if ($result) {
      if ($result->num_rows > 0) {
        while ($row = mysqli_fetch_assoc($result)) { ?>
          <tr class="single-table-row">
            <td><?php echo $row["employeeName"]; ?></td>
            <td><?php echo $row["department"]; ?></td>
            <td><?php echo ucfirst($row["employeeType"]); ?></td>
            <td><?php echo $row["actionDate"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
            <td><a class="view-more" href="<?php echo $approot ?>/view-single.php?id=<?php echo $row['id']; ?>">View</a></td>
          </tr>
    <?php  }
      } else {
        echo "0 results";
      }
    }
    $conn->close();
    ?>
  </table>


</div>
</body>

</html>