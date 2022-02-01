productDetail = document.querySelector("#ProDetails");
// productDetail.style.display = "none";
function disp(val) {
  //productDetail = document.querySelector("#ProDetails");
  if (productDetail.style.display === "none") {
    productDetail.style.display = "flex";
  } else {
    productDetail.style.display = "none";
  }
  if (`${val}`) {
    parentDiv = document.getElementById(`${val}`);
    children = parentDiv.childNodes;
    //   children.forEach((element) => {
    //     document.querySelector(`${element}`).innerHTML =
    //       parentDiv.querySelector("h3").innerHTML;
    //   });

    document.getElementById("ProDetailImage").src =
      parentDiv.querySelector(".image").src;
    document.querySelector("h3").innerHTML =
      parentDiv.querySelector("h3").innerHTML;
    document.querySelector("h2").innerHTML =
      parentDiv.querySelector("h2").innerHTML;
    document.querySelector(".pDescription").innerHTML =
      parentDiv.querySelector(".pDescription").innerHTML;
    document.querySelector(".fName").innerHTML =
      parentDiv.querySelector(".fName").innerHTML;
    document.querySelector(".fContact").innerHTML =
      parentDiv.querySelector(".fContact").innerHTML;
    document.querySelector(".pDiscount").innerHTML =
      parentDiv.querySelector(".pDiscount").innerHTML;
    document.querySelector(".fAddress").innerHTML =
      parentDiv.querySelector(".fAddress").innerHTML;
  }
}
