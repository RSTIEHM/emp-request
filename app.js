const employeeStatusContainer = document.querySelector(
  ".employee-status-container"
);
const page1 = document.querySelector(".page-1");
const page2 = document.querySelector(".page-2");
const page1Next = document.querySelector(".page-1-next");
const page2Next = document.querySelector(".page-2-next");
let softwareContainer = document.querySelector(".software-container");
let loading = document.querySelector(".loading");
let software = [
  "Act",
  "Asset Book",
  "Bloom Growth",
  "BombBomb",
  "Cell Trust",
  "ClickUp",
  "Design Software",
  "Dropbox",
  "Fidelity",
  "FileMaker",
  "Google Drive",
  "HubSpot",
  "OneDrive",
  "OpenPath",
  "ProSeries",
  "QuickBooks",
  "RedBlack",
  "RedTail",
  "RiskAlyze",
  "Schwab Advisor",
  "SureLC",
  "TD ThinkPipes",
  "TD Veo",
  "WordPress",
  "Zoom",
];

let appState = {
  currentPage: 1,
  employee: {},
  email: [],
  programs: [],
};

let loadSoftWare = function (programs) {
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

// RADIO BUTTON SELECT ONLY ONE =============================
// employeeStatusContainer.addEventListener("change", (e) => {
//   let target = e.target;
//   document.querySelectorAll(".employee-type").forEach((item) => {
//     item.checked = false;
//   });
//   target.checked = true;
// });

page1Next.addEventListener("click", () => {

  loading.style.display = "flex";

  setTimeout(() => {
    page1.style.display = "none";
    loading.style.display = "none";
    page2.style.display = "block";
  }, 500);


});

// page2Next.addEventListener("click", () => {
//   console.log("CLICKED");
//   let softwareInfo = document.querySelectorAll(".page-2-empInfo");
//   let temp = [];
//   softwareInfo.forEach((item) => {
//     if (item.checked === true) {
//       temp.push(item.dataset.id);
//     }
//   });
//   appState.programs = temp;
//   console.log(appState);
// });
