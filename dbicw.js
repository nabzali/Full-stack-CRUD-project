function changePage(id)
{
  var table = document.getElementById("table");
  var table2 = document.getElementById("table2");
  var form = document.getElementById("theForm");
  var box = document.getElementById("box");

  document.getElementById("h").innerHTML = id; //Makes heading the id
  document.title = id; //Makes title the id

  switch (id) {
    case "Home":
      table.style.display = "none";
      table2.style.display = "none";
      form.style.display = "none";
      box.style.display = "block";
      break;
    default:
      box.style.display = "none";
      form.style.display = "block";
      if (id == "Artists"){
        table.style.display = "block";
        table2.style.display = "none";
      }
      else if (id == "Albums") {
        table.style.display = "none";
        table2.style.display = "block";
      }
      else{
        table.style.display = "none";
        table2.style.display = "none";
      }
  }
}
