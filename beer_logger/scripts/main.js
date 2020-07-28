const btn_start_block = document.getElementById("btn_start_block");
const btn_login_block = document.getElementById("btn_login_block");

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

btn_start_block.onclick = function() {
  move_to_start();
};

btn_login_block.onclick = function() {
  move_to_login();
};
