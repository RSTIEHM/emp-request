<?php 

if($_SERVER["REQUEST_METHOD"] == "POST") {

  function addToArray($arr) {
    $str = "";
    $stop = count($arr);
    $counter = 0;
    foreach ($arr as $k => $v) {
      $counter = $counter + 1;
      if ($counter == $stop) {
        $str .= $v;
      } else {
        $str .= $v . ", ";
      }
    }
    return $str;
  }

  if(isset($_POST["techType"])) {
    $techArr = addToArray($_POST["techType"]);
  } else {
    $techArr = "";
  }
  if (isset($_POST["email"])) {
    $emailArr = addToArray($_POST["email"]);
  } else {
    $emailArr = "";
  }
  if (isset($_POST["software"])) {
    $softWareArr = addToArray($_POST["software"]);
  } else {
    $softWareArr = "";
  }




  $newRequest = [
    "employeeType" => $_POST["empType"][0],
    "employeeName" => strval($_POST["employeeName"]),
    "department" => strval($_POST["department"]),
    "actionDate" => strval($_POST["actionDate"]),
    "drives" => strval($_POST["networkDrives"]),
    "printers" => strval($_POST["networkPrinters"]),
    "techType" => strval($techArr),
    "email" => strval($emailArr),
    "software" => strval($softWareArr)
  ];

  $empType = $_POST["empType"][0];
  $empName = $_POST["employeeName"];
  $dept = $_POST["department"];
  $action = $_POST["actionDate"];
  $drives = $_POST["networkDrives"];
  $printers = $_POST["networkPrinters"];
  $tech = $techArr;
  $email = $emailArr;
  $software = $softWareArr;

  define("HOSTNAME", "localhost");
  define("USERNAME", "root");
  define("PASSWORD", "");
  define("DATABASE", "employee-request");

  $con = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);

  if (!$con) {
    die("Connection Failed!!!");
  }


  $query = "INSERT INTO `emp` (employeeType, employeeName, department, actionDate, drives, printers, techType, email, software) VALUES ('$empType', '$empName', '$dept', '$action', '$drives', '$printers', '$tech', '$email', '$software' )";


  $result = mysqli_query($con, $query);
  if (!$result) {
    die("FAILED" . mysqli_error($con));
  }  else {
    header("location: success.php");
  }

  // $newRequest = [
  //   "employeeType" => $_POST["empType"][0],
  //   "employeeName" => strval($_POST["employeeName"]),
  //   "department" => strval($_POST["department"]),
  //   "actionDate" => strval($_POST["actionDate"]),
  //   "drives" => strval($_POST["networkDrives"]),
  //   "printers" => strval($_POST["networkPrinters"]),
  //   "techType" => strval($techArr),
  //   "email" => strval($emailArr),
  //   "software" => strval($softWareArr)
  // ];





  // CHECK TO SEE IF ITS THE FIRST MESSAGE
  // if (filesize("request.json") == 0) {
  //   $first_request = array($newRequest);
  //   $data_to_save = $first_request;
  // } else {
  //   $old_records = json_decode(file_get_contents("request.json"));
  //   array_push($old_records, $newRequest);
  //   $data_to_save = $old_records;
  // }

  // if (!file_put_contents("request.json", json_encode($data_to_save, JSON_PRETTY_PRINT, LOCK_EX))) {
  //   echo "BAD";
  // } else {

  //   header("location: success.php");
  // }



}



?>