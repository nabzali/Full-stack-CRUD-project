
function changePage(id)
{

  var form3 = document.getElementById("form3");
  var form2 = document.getElementById("form2");
  var form1 = document.getElementById("theForm");
  var box = document.getElementById("box");

  document.getElementById("h").innerHTML = id; //Makes heading the id
  document.title = id; //Makes title the id

  switch (id) {
    case "Home":
      form3.style.display = "none";
      form2.style.display = "none";
      form1.style.display = "none";
      box.style.display = "block";
      break;
    default:
      box.style.display = "none";
      if (id == "Artists"){
        form1.style.display = "block";
        form2.style.display = "none";
        form3.style.display = "none";
      }
      else if (id == "Albums") {
        form2.style.display = "block";
        form3.style.display = "none";
        form1.style.display = "none";
      }
      else{
        form2.style.display = "none";
        form1.style.display = "none";
        form3.style.display = "block";
      }
  }
}
