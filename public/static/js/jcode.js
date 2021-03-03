document.getElementById("date").innerHTML = new Date().getFullYear();

function nav_button() {
  var x = document.getElementById("top-nav");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
var btn = document.getElementById("nav-bar");
    btn.addEventListener('click', nav_button, false);

function dept_button() {
    var x = document.getElementById("show-table");
    if (x.style.display === "block") {
      x.style.display = "none";
    } else {
      x.style.display = "block";
    }
  }
var btn2 = document.getElementById("hide-table");
    btn2.addEventListener('click', dept_button, false);


