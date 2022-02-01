// class validations {
//   requiredArray = document
//     .getElementById("SignUpForm")
//     .querySelectorAll("[required]");
//   printAll() {
//     this.requiredArray.forEach(function check(eachInput) {
//       console.log(eachInput.id);
//       if (eachInput.length == 0) {
//         document.getElementById("Remark").value = `Please fill ${eachInput}`;
//       }
//     });
//   }
// }
// let printrequird = new validations();
// printrequird.printAll();
//=========above code can be used for required field validations in Javascript
function CheckFields(val) {
  compName = document.getElementById("compName").value;
  Email = document.getElementById("email").value;
  password = document.getElementById("passwordsignUp").value;
  remark = document.getElementById("Remark");
  checkboxTerms = document.getElementById("checkboxTerms");

  if (compName.length == 0 || Email.length == 0 || password.length == 0) {
    remark.innerHTML = "Please fill the required fields";
    remark.style.color = "red";
    console.log(compName);
  } else if (!checkboxTerms.checked && val == "val") {
    remark.innerHTML = "please accept the Terms and Conditions";
    remark.style.color = "red";
  } else if (
    compName.length != 0 &&
    Email.length != 0 &&
    password.length != 0 &&
    checkboxTerms.checked
  ) {
    remark.innerHTML = "";
    remark.style.color = "red";
  }
}

function checkDuplicate(str) {
  if (str.length == 0) {
    document.getElementById("Remark").innerText = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        if (this.responseText != "") {
          document.getElementById("Remark").innerHTML = this.responseText;
          document.getElementById("Remark").style.color = "red";
          document.getElementById("email").value = "";
        } else {
          document.getElementById("Remark").innerText = "";
        }
      }
    };
    xmlhttp.open("GET", "./php/checkDuplicate.php?q=" + str, true);
    xmlhttp.send();
  }
}
var base64;
///container = document.getElementById("Product_container");

function SaveProduct() {
  Pname = document.getElementById("Pname").value;
  Pdesc = document.getElementById("PDescrip").value;
  pDiscount = document.getElementById("PDiscount").value;
  PPrice = document.getElementById("PPrice").value;
  P_listed_Date = document.getElementById("P_listed_Date").value;
  EntryUser = document.getElementById("EntryUser").value;
  url = `Pname=${Pname}&PDescrip=${Pdesc}&PDiscount=${pDiscount}&PPrice=${PPrice}&P_listed_Date=${P_listed_Date}&EntryUser=${EntryUser}`;
  var formData = new FormData();
  // const container = document.querySelector("#Product_container");
  // const inputs = container.querySelectorAll("div.inputDiv > input");

  formData.append("userfile", document.getElementById("PUpload").files[0]);
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      if (this.responseText == "Succeed") {
        console.log(this.responseText);
        inputs = document.querySelectorAll("div.inputDiv > input");
        inputs.forEach((element) => (element.disabled = true));
        document.getElementById("savebtn").disabled = true;
        window.location.reload(true);
      }
    }
  };

  xmlhttp.open("POST", "./php/SaveProduct.php?" + url, true);
  xmlhttp.send(formData);
}
function resetForm() {
  inputs = document.querySelectorAll("div.inputDiv > input");
  inputs.forEach((element) => (element.disabled = false));
  inputs.forEach((element) => (element.value = ""));
  document.getElementById("EntryUser").value = "localStorageDAT";
  document.getElementById("EntryUser").disabled = true;
  document.getElementById("EntryUser").value = localStorageDATA; // its from login.js page
  document.getElementById("savebtn").disabled = false;
  document.getElementById("image").src = "";
  console.log(localStorageDATA);
}
var loadFile = function (event) {
  var reader = new FileReader();
  reader.onload = function () {
    var output = document.getElementById("image");
    base64 = reader.result;
    output.src = reader.result;
  };
  reader.readAsDataURL(event.target.files[0]);
};
