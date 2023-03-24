<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>

<body>
  <nav class="nav-container">
    LOGO
  </nav>

  <section class="form-container">

    <div class="form-wrapper">


      <form action="script.php" method="POST">
        <h1 class="emp-request-title">Employee Service Request</h1>
        <div class="border-container">
          <div class="employee-status-container">
            <div class="employee-status-type">
              <input class="employee-type emp-radio" value="new" type="radio" name="empType[]" id="">
              <label class="employee-label" for="">New</label>
            </div>
            <div class="employee-status-type">
              <input class="employee-type emp-radio" value="transfer" type="radio" name="empType[]" id="">
              <label class="employee-label" for="">Transfer</label>
            </div>
            <div class="employee-status-type">
              <input class="employee-type emp-radio" value="separation" type="radio" name="empType[]" id="">
              <label class="employee-label" for="">Separation</label>
            </div>
          </div>
          <div class="generic-container">
            <div class="input-text-contatiner">
              <label class="employee-label" for="">Employee Name</label>
              <input name="employeeName" required data-id="EmployeeName" class="input-text page-1-empInfo" type="text">
            </div>
            <div class="input-text-contatiner">
              <label class="employee-label" for="">Department</label>
              <input name="department" required data-id="Department" class="input-text page-1-empInfo" type="text">
            </div>
            <div class="input-text-contatiner mb-10">
              <label class="employee-label" for="">Action Date</label>
              <input name="actionDate" required data-id="ActionDate" class="input-text page-1-empInfo" type="date">
            </div>
          </div>


          <label class="employee-label" for="">Telecom</label>
          <div class="flex-container-left mb-10">
            <div class="tech-wrap">
              <div class="tech-item">
                <input value="desktop" name="techType[]" data-id="Desktop" class="computer-type page-1-empInfo" type="checkbox">
                <label for="">Desktop</label>
              </div>
              <div class="tech-item">
                <input value="laptop" name="techType[]" data-id="Laptop" class="computer-type page-1-empInfo" type="checkbox">
                <label for="">Laptop</label>
              </div>
            </div>

            <div class="tech-item">
              <input value="webcam" name="techType[]" data-id="Webcam" class="computer-type page-1-empInfo" type="checkbox">
              <label for="">Webcam</label>
            </div>
            <div class="tech-item">
              <input value="directNumber" name="techType[]" data-id="Directnumber" class="computer-type page-1-empInfo" type="checkbox">
              <label for="">Direct Number</label>
            </div>
            <div class="tech-item">
              <input value="phoneProgramming" name="techType[]" data-id="PhoneProgramming" class="computer-type page-1-empInfo" type="checkbox">
              <label for="">Ring Groups</label>
            </div>
          </div>

          <div class="flex-container-left mb-10">
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

          <p class="employee-label">Email Accounts</p>
          <div class="flex-container-left mb-10">
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
          <p class="employee-label mb-10">Software</p>
          <div class="software-container">

          </div>
          <br>
          <input class="btn btn-next" type="submit" value="Submit">
        </div>
    </div>
    </form>

    </div>
  </section>

  <script>
    let software = [
      "Act",
      "AssetBook",
      "BloomGrowth",
      "BombBomb",
      "CellTrust",
      "ClickUp",
      "DesignSoftware",
      "Dropbox",
      "Fidelity",
      "FileMaker",
      "GoogleDrive",
      "HubSpot",
      "OneDrive",
      "OpenPath",
      "ProSeries",
      "QuickBooks",
      "RedBlack",
      "RedTail",
      "RiskAlyze",
      "SchwabAdvisor",
      "SureLC",
      "TDThinkPipes",
      "TDVeo",
      "WordPress",
      "Zoom",
    ];
    let softwareContainer = document.querySelector(".software-container")
    let loadSoftWare = function(programs) {
      let html = "";
      programs.forEach((program) => {
        html += `
      <div class="tech-item">
        <input value="${program}" name="software[]" data-id="${program}" class="computer-type page-2-empInfo" type="checkbox">
        <label class="software-label" for="">${program}</label>
      </div>
    `;
      });
      softwareContainer.innerHTML = html;
    };

    loadSoftWare(software);
  </script>
</body>

</html>