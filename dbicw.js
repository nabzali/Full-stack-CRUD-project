function changePage(id)
{
  var table = document.getElementById("table");
  var form = document.getElementById("theForm");
  var box = document.getElementById("box");

  document.getElementById("h").innerHTML = id; //Makes heading the id
  document.title = id; //Makes title the id

  switch (id) {

    case "Home":

      table.style.display = "none";
      form.style.display = "none";
      box.style.display = "block";
      break;
    default:
      box.style.display = "none";
      form.style.display = "block";
      table.style.display = "block";
  }
}
