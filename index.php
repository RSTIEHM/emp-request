<?php require_once("config/db.php"); ?>

<?php

if ($_SERVER["REQUEST_METHOD"] == "GET") {
  $sql = "SELECT * FROM emp";
  $result = $conn->query($sql);
}


?>
<?php require("includes/header.php"); ?>
<?php require( "helpers/functions.php"); ?>

<div class="table-flex">
  <div class="esr-nav flex-container-center">
    <h1 class="p-15-all text-white">Employee Requests</h1>
    <a class="text-white add-new-btn" href="<?php echo $approot ?>/service-form">Add New</a>
  </div>

  <table>
    <tr class="tr-dark">
      <th>Name</th>
      <th>Department</th>
      <th>Type</th>
      <th>Action Date</th>
      <!-- <th>Emails</th> -->
      <th>Details</th>
    </tr>
    <?php

    if ($result) {
      if ($result->num_rows > 0) {
        while ($row = mysqli_fetch_assoc($result)) { ?>
          <tr class="single-table-row">
            <td><?php echo $row["employeeName"]; ?></td>
            <td><?php echo $row["department"]; ?></td>
            <td><?php echo ucfirst($row["employeeType"]); ?></td>
            <td><?php echo formatDateStr($row["actionDate"]); ?></td>
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