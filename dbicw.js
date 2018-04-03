function changePage(id)
{
  var table = document.getElementById("table");
  var table2 = document.getElementById("table2");
  var form1 = document.getElementById("theForm");
  var box = document.getElementById("box");

  document.getElementById("h").innerHTML = id; //Makes heading the id
  document.title = id; //Makes title the id

  switch (id) {
    case "Home":
      table.style.display = "none";
      table2.style.display = "none";
      form1.style.display = "none";
      box.style.display = "block";
      break;
    default:
      box.style.display = "none";
      if (id == "Artists"){
        table.style.display = "block";
        form1.style.display = "block";
        table2.style.display = "none";
      }
      else if (id == "Albums") {
        table.style.display = "none";
        table2.style.display = "block";
        form1.style.display = "none";
      }
      else{
        table.style.display = "none";
        table2.style.display = "none";
        form1.style.display = "none";
      }
  }
}
