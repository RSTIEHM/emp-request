<?php require_once("config/db.php"); ?>

<?php

if ($_SERVER["REQUEST_METHOD"] == "GET") {
  if (!isset($_GET["id"])) {
    header("location: 404.html");
  } else {
    $id = $_GET["id"];
    $sql = "SELECT * FROM emp WHERE id=$id";
    $result = $conn->query($sql);
  }
}

?>
<?php require("./includes/header.php"); ?>
<?php require("helpers/functions.php"); ?>


<div class="bg-wrap">
  <div class="view-single-container">
    <div class="view-single-wrapper">

      <?php
      if ($result) {
        if ($result->num_rows > 0) {
          $row = mysqli_fetch_assoc($result); ?>
          <h1 style="text-decoration:underline;">Employee Info</h1>
          <h2>Employee Name: <span class="view-single-span"><?php echo $row["employeeName"]; ?></span></h2>
          <h2>Department: <span class="view-single-span"><?php echo $row["department"]; ?></span></h2>
          <h2>Employee Type: <span class="view-single-span"><?php echo ucfirst($row["employeeType"]); ?></span></h2>
          <h2>Action Date: <span class="view-single-span"><?php echo formatDateStr($row["actionDate"]); ?></span></h2>
          <h2>TeleCom: <span class="view-single-span"><?php echo $row["techType"]; ?></span></h2>
          <h2>Drives: <span class="view-single-span"><?php echo $row["drives"]; ?></span></h2>
          <h2>Printers: <span class="view-single-span"><?php echo $row["printers"]; ?></span></h2>
          <h2>Email Accounts: <span class="view-single-span"><?php echo $row["email"]; ?></span></h2>
          <h2>Software: <span class="view-single-span"><?php echo $row["software"]; ?></span></h2>
          <a href="<?php echo $approot; ?>">HOME</a>
          <a href="<?php echo $approot; ?>/service-form">ADD NEW</a>
      <?php } else {
          header("location: 404.html");
        }
      }
      $conn->close();

      ?>

    </div>
  </div>
</div>



</body>

</html>