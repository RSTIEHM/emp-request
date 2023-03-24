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
        $str .= $v . " ";
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

  define("HOSTNAME", "localhost");
  define("USERNAME", "root");
  define("PASSWORD", "");
  define("DATABASE", "employee-request");

  $con = mysqli_connect(HOSTNAME, USERNAME, PASSWORD, DATABASE);

  if (!$con) {
    die("Connection Failed!!!");
  }


  $query = "INSERT INTO `emp` (employeeType, employeeName, department, actionDate, drives, printers, techType, email, software) VALUES ('TYPE', 'Name', 'dept', 'TEST', 'drives', 'printers', 'techtype', 'email', 'software' )";
  // $query = "INSERT INTO `requests` (emp_type, emp_name, dept, action_date, email_accounts, computer_type, webcam, direct_number, phone_programming, network_drives, network_printers, software) VALUES ('TES', 'er', 'wew', 'op', 'op', 'uui', 'uiu', 'klk', 'l;l', 'opo', 'opo', 'op' )";

  $result = mysqli_query($con, $query);
  if (!$result) {
    die("FAILED" . mysqli_error($con));
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
  if (filesize("request.json") == 0) {
    // FIRST MSG ---> Create array in JSON file
    // ONLY NEEDED TO CREATE AN ARRAY TO STORE IN JSON
    $first_request = array($newRequest);
    $data_to_save = $first_request;
  } else {
    // PULL OLD MESSAGES
    $old_records = json_decode(file_get_contents("request.json"));
    array_push($old_records, $newRequest);
    $data_to_save = $old_records;
  }

  if (!file_put_contents("request.json", json_encode($data_to_save, JSON_PRETTY_PRINT, LOCK_EX))) {
    echo "BAD";
  } else {
    // SAVE TO DATA BASE============
    header("location: success.php");
  }



}



?>