function deleting(val) {
  fetch(`./php/delete.php?id=${val}`)
    .then((Response) => console.log(Response.json()))
    .then((error) => console.log(error));
  window.location.reload(true);
}
