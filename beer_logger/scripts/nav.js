const btn_start = document.getElementById("nav_btn_start");
const btn_login = document.getElementById("nav_btn_login");

function move_to_start() {
  location.href = "form_page.html";
};

function move_to_login() {
  location.href = "login.html";
};

btn_start.onclick = function() {
  move_to_start();
};

btn_login.onclick = function() {
  move_to_login();
};
