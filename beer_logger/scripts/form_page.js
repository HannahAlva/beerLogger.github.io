// Displaying value for slider
$(document).ready(function() {

  const $valueSpan = $('.valueSpan');
  const $value = $('#beer_range');
  $valueSpan.html($value.val());
  $value.on('input change', () => {

    $valueSpan.html($value.val());
  });
});


// JS Code for Editing Brewery List

const btn_add_brewer = document.getElementById("btn_add_brewer");
const btn_rmv_brewer = document.getElementById("btn_remove_brewer");
const brewer_list = document.getElementById("form_control_select_brewer");
const brewer_list_copy = document.getElementById("form_control_select_brewer_copy");
const txt_new_brewery = document.getElementById("txt_input_add_brewer");

function add_brewer() {
  // Create a new option element
  var new_brewery = txt_new_brewery.value;
  var opt = document.createElement('option');

  // Set the name and class of new brewery
  opt.textContent = new_brewery;
  opt.setAttribute('class', new_brewery);

  // Clone for appending
  var opt_clone = opt.cloneNode(true);

  // Append new breweries
  brewer_list.appendChild(opt);
  brewer_list_copy.appendChild(opt_clone);
  // alert("Done");
};

function rmv_brewer() {
  var old_brewery = brewer_list_copy.value;
  var rmv_brewery = brewer_list.getElementsByClassName(old_brewery)[0];
  var rmv_brewery_copy = brewer_list_copy.getElementsByClassName(old_brewery)[0];
  rmv_brewery.parentNode.removeChild(rmv_brewery);
  rmv_brewery_copy.parentNode.removeChild(rmv_brewery_copy);
};

btn_add_brewer.onclick = function() {
  add_brewer();
};

btn_rmv_brewer.onclick = function() {
  rmv_brewer();
};

// JS Code for Editing Style List
const btn_add_style = document.getElementById("btn_add_style");
const btn_rmv_style = document.getElementById("btn_remove_style");
const style_list = document.getElementById("form_control_select_style");
const style_list_copy = document.getElementById("form_control_select_style_copy");
const txt_new_style = document.getElementById("txt_input_add_style");

function add_style() {
  // Create a new option element
  var new_style = txt_new_style.value;
  var opt = document.createElement('option');

  // Set the name and class of new brewery
  opt.textContent = new_style;
  opt.setAttribute('class', new_style);

  // Clone for appending
  var opt_clone = opt.cloneNode(true);

  // Append new breweries
  style_list.appendChild(opt);
  style_list_copy.appendChild(opt_clone);
  // alert("Done");
};

function rmv_style() {
  var old_style = style_list_copy.value;
  var rmv_style = style_list.getElementsByClassName(old_style)[0];
  var rmv_style_copy = style_list_copy.getElementsByClassName(old_style)[0];
  rmv_style.parentNode.removeChild(rmv_style);
  rmv_style_copy.parentNode.removeChild(rmv_style_copy);
};

btn_add_style.onclick = function() {
  add_style();
};

btn_rmv_style.onclick = function() {
  rmv_style();
};

// Basic Adding Logged Beers to Beer History page
const form = document.getElementById("main_form");
const image_url = document.getElementById("input_add_picture");
var history_arr = JSON.parse(window.sessionStorage.getItem("history_arr_str")) || [];
var image = document.createElement("img");

form.addEventListener("submit", function(event) {
  event.preventDefault();
  var logged_beer = $(this).serializeJSON();
  logged_beer.image_url = image_url.value;
  // if (image_url.files[0]) {
  //   image.src = URL.createObjectURL(image_url.files[0]);
  //   logged_beer.image_url = image.src;
  // }
  history_arr.push(logged_beer);
  var history_arr_str = JSON.stringify(history_arr);
  window.sessionStorage.setItem("history_arr_str", history_arr_str);
  this.reset();
});
