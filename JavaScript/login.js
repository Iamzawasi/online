//include("./delete.js");
function include(file) {
  var script = document.createElement("script");
  script.src = file;
  script.type = "text/javascript";
  script.defer = true;

  document.getElementsByTagName("head").item(0).appendChild(script);
}
/* Include Many js files */
include("./JavaScript/delete.js");
include("./JavaScript/search.js");
include("./JavaScript/disp.js");

var localStorageDATA;
//alert("HI");
function hideAndShow(popUpForm) {
  elementt = `${popUpForm}`;
  document.getElementById("textAfter").style.display = "none";
  document.getElementById("SignUpForm").style.display = "flex";
  document.getElementById(elementt).style.visibility == "visible"
    ? (document.getElementById(elementt).style.visibility = "hidden")
    : (document.getElementById(elementt).style.visibility = "visible");
  // if (document.getElementById("textAfter").style.display == "flex") {
  //   document.getElementById("SignUpForm").style.visibility = "visible";

  // }
}
function login() {
  password = document.getElementById("password").value;
  email = document.getElementById("UserName").value;
  //ln = ln.lenght;
  if (password.length > 0 && email.length > 0) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        localS(this.responseText);
        window.location.reload(true);
        checkSafety();
      }
    };
    xmlhttp.open(
      "GET",
      "./php/Database.php?email=" + email + "&pass=" + password,
      true
    );
    xmlhttp.send();
  } else {
    alert("Please enter both user name and password");
  }
}
function localS(val) {
  localStorage.clear();
  if (val) {
    localStorage.setItem("mj154aaakkdkkiaiiaiiaiidddiddi", JSON.stringify(val));
    // console.log(
    //   JSON.parse(localStorage.getItem("mj154aaakkdkkiaiiaiiaiidddiddi"))
    // );
    document.getElementById("EntryUser").value = val;
    document.getElementById("login_popup").style.visibility = "hidden";
    document.getElementById("Login").style.visibility = "hidden";
    document.getElementById("LogOut").style.visibility = "visible";
  } else {
    alert("User Name/Password is wrong!");
  }
}
function checkSafety() {
  console.log("checking");

  localStorageDATA = JSON.parse(
    localStorage.getItem("mj154aaakkdkkiaiiaiiaiidddiddi")
  );
  if (localStorageDATA) {
    document.getElementById("Login").style.visibility = "hidden";
    document.getElementById("LoginSale").style.visibility = "visible";
    document.getElementById("LogOut").style.visibility = "visible";
    document.getElementById("EntryUser").value = localStorageDATA;
  } else {
    document.getElementById("Login").style.visibility = "visible";
    document.getElementById("LogOut").style.visibility = "hidden";
    document.getElementById("LoginSale").style.visibility = "hidden";
    document.getElementById("EntryUser").value = "";
  }
  // fetch(
  //   (localStorageDATA = JSON.parse(
  //     localStorage.getItem("mj154aaakkdkkiaiiaiiaiidddiddi")
  //   ))
  // ).then(function res(Response) {
  //   document.getElementById("Login").style.visibility = "hidden";
  //   document.getElementById("LoginSale").style.visibility = "visible";
  //   document.getElementById("LogOut").style.visibility = "visible";
  //   document.getElementById("EntryUser").value = Response;
  // });
}
checkSafety();
function logout() {
  localStorage.clear();
  document.getElementById("login_popup").style.visibility = "visible";
  checkSafety();
}
$("#LogOut").click(function () {
  $.post("index.php", { log: "out" }, function (data, status) {
    console.log(data);
    window.location.reload(true);
  });
});

function HideandShow() {
  form = document.getElementById("RegPro");
  if (form.style.visibility == "visible") {
    form.style.visibility = "hidden";
  } else {
    form.style.visibility = "visible";
  }
}
var x = document.getElementById("nothing");