<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <title>SIG | Service Request</title>
</head>

<body>
  <div class="loading">
    <!-- <img class="loading-img" src="./images/loading.gif" alt=""> -->
  </div>
  <nav class="nav-container">
    <!-- <img src="images/sig-logo-new-1-400x175-2.png" alt="" style="width:200px;margin-right:10px;margin-top:5px;"> -->
    LOGO
  </nav>
  <section class="form-container">
    <div class="form-wrapper">
      <section class="">
        <h1 class="emp-request-title">Employee Service Request</h1>
        <form action="script.php" method="POST">


          <section class="form-page page-1">
            <div class="form-content-wrapper">

              <div class="employee-status-container">
                <div class="employee-status-type">
                  <input checked id="new-employee" value="New Employee" name="empType[]" class="employee-type emp-radio" data-id="New Employee" type="radio">
                  <label class="employee-label" for="new-employee">New Employee</label>
                </div>
                <div class="employee-status-type">
                  <input class="employee-type emp-radio" data-id="Employee Transfer" id="employee-transfer" value="Employee Transfer" name="empType[]" type="radio">
                  <label class="employee-label" for="employee-transfer">Employee Transfer</label>
                </div>
                <div class="employee-status-type">
                  <input id="employee-separation" value="Employee Separation" name="empType[]" class="employee-type emp-radio" data-id="Employee Separation" type="radio">
                  <label class="employee-label" for="employee-separation">Employee Separation</label>
                </div>
              </div>

              <div class="flex-container">
                <div class="left-50">
                  <div class="input-text-contatiner">
                    <label class="employee-label" for="">Name</label>
                    <input name="employeeName" required data-id="EmployeeName" class="input-text page-1-empInfo" type="text">
                  </div>
                  <div class="input-text-contatiner">
                    <label class="employee-label" for="">Department</label>
                    <input name="department" required data-id="Department" class="input-text page-1-empInfo" type="text">
                  </div>
                  <div class="input-text-contatiner">
                    <label class="employee-label" for="">Action Date</label>
                    <input name="actionDate" required data-id="ActionDate" class="input-text page-1-empInfo" type="date">
                  </div>
                </div>

                <div class="right-50">
                  <div class="tech-container">
                    <div class="tech-item-container">
                      <h2 class="tech-title">Computer Type</h2>
                      <div class="tech-item">
                        <input value="Desktop" name="computerType[]" data-id="Desktop" class="computer-type page-1-empInfo" type="checkbox">
                        <label for="">Desktop</label>
                      </div>
                      <div class="tech-item">
                        <input value="Laptop" name="computerType[]" data-id="Laptop" class="computer-type page-1-empInfo" type="checkbox">
                        <label for="">Laptop</label>
                      </div>
                    </div>
                    <div class="tech-item-container">
                      <h2 class="tech-title">Webcam</h2>
                      <div class="tech-item">
                        <input value="Webcam" name="computerType[]" data-id="Webcam" class="computer-type page-1-empInfo" type="checkbox">
                        <label for="">Yes</label>
                      </div>
                    </div>

                    <div class="tech-item-container">
                      <h2 class="tech-title">Direct Number</h2>
                      <div class="tech-item">
                        <input value="Direct Number" name="computerType[]" data-id="Directnumber" class="computer-type page-1-empInfo" type="checkbox">
                        <label for="">Yes</label>
                      </div>
                    </div>
                    <div class="tech-item-container">
                      <h2 class="tech-title">Phone Programming</h2>
                      <div class="tech-item">
                        <input value="Phone Programming" name="computerType[]" data-id="PhoneProgramming" class="computer-type page-1-empInfo" type="checkbox">
                        <label for="">Ring Groups</label>
                      </div>
                    </div>
                    <div class="tech-item-container">
                      <h2 class="tech-title">Network Drives</h2>
                      <p>Please list drives needed (separated by comma)</p>
                      <div class="tech-item">
                        <input name="networkDrives" data-id="NetworkDrives" class="input-text page-1-empInfo" type="input">
                      </div>
                    </div>
                    <div class="tech-item-container">
                      <h2 class="tech-title">Network Printers</h2>
                      <p>Please list nearest printers (separated by comma)</p>
                      <div class="tech-item">
                        <input name="networkPrinters" data-id="NetworkPrinters" class="input-text page-1-empInfo" type="input" placeholder="">
                      </div>
                    </div>
                  </div>
                  <!-- END TECH CONTAINER -->
                </div>
                <!-- END RIGHT -->
              </div>
              <!-- END FLEX CONTAINER -->
              <h2 class="tech-title">Email Accounts</h2>
              <div class="email-status-container">
                <div class="employee-status-type">
                  <input id="new-employee" name="email[]" value="SIGEmail" class="email-type page-1-empInfo" type="checkbox">
                  <label class="employee-label" for="new-employee">SIG</label>
                </div>
                <div class="employee-status-type">
                  <input class="email-type page-1-empInfo" value="AAEmail" data-id="AAEmail" id="employee-transfer" name="email[]" type="checkbox">
                  <label class="employee-label" for="employee-transfer">AA</label>
                </div>
                <div class="employee-status-type">
                  <input id="employee-separation" name="email[]" value="SISEmail" class="email-type page-1-empInfo" data-id="SISEmail" type="checkbox">
                  <label class="employee-label" for="employee-separation">SIS</label>
                </div>
                <div class="employee-status-type">
                  <input id="employee-separation" name="email[]" value="SFGEmail" class="email-type page-1-empInfo" data-id="SFGEmail" type="checkbox">
                  <label class="employee-label" for="employee-separation">SFG</label>
                </div>
                <div class="employee-status-type">
                  <input id="employee-separation" name="email[]" value="AddtionalEmail" class="email-type page-1-empInfo" data-id="AdditionalEmail" type="checkbox">
                  <label class="employee-label" for="employee-separation">Addtional Mailboxes</label>
                </div>
              </div>
              <!-- END email-status-container -->
              <h2 class="btn btn-next page-1-next">Next</h2>
            </div>

          </section>
          <!-- END PAGE 1 -->
          <section class="form-page page-2">
            <div class="form-content-wrapper">
              <h2 class="software-title">Software Accounts</h2>

              <div class="software-container">

              </div>
              <input class="btn btn-next page-2-next" type="submit" value="Submit">
            </div>
          </section>

        </form>
      </section>
    </div>


  </section>
  <script src="app.js"></script>
</body>

<!-- CHECKBOX -->
<!-- <form method="post" action="submit.php">
  <label>
    <input type="checkbox" name="fruit[]" value="apple"> Apple
  </label>
  <br>
  <label>
    <input type="checkbox" name="fruit[]" value="banana"> Banana
  </label>
  <br>
  <label>
    <input type="checkbox" name="fruit[]" value="orange"> Orange
  </label>
  <br>
  <button type="submit">Submit</button>
</form> -->

<!-- if (isset($_POST['fruit'])) {
// Loop through the selected values
foreach ($_POST['fruit'] as $fruit) {
echo $fruit . "<br>";
}
} else {
echo "No fruits selected.";
} -->






</html>