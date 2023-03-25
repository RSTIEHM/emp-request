<?php 

if($_SERVER["REQUEST_METHOD"] == "GET") {
  if (isset($_GET["id"])) {
    echo "ID: " . $_GET["id"];
  }
}







?>