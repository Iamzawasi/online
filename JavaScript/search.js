function Search() {
  searchValue = document.getElementById("searchInput").value.toLowerCase(); //both should be lower case
  productName = document.querySelectorAll(".Product");
  //console.clear();
  productName.forEach((element) => {
    ProToLower = element.innerHTML.toLowerCase();
    if (!ProToLower.includes(`${searchValue}`)) {
      console.log(element.innerHTML);
      getParent = element.parentNode;
      //getParent.setAttribute("class", "classDelete");
      getParent.style.display = "none"; // hide all those elements which are not matching.
    } else {
      element.parentNode.style.display = "block"; // display the matching elements
    }
  });
}
