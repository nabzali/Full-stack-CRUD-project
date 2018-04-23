<?php
require "header.php";

if (isset($_POST["save"])){
  $data1 = $_GET["ed"];
  $data2 = $_POST["editArtistInput"];
  $edit_artist = "UPDATE artist SET artName = '$data2' WHERE artID = $data1";
  mysqli_query($conn, $edit_artist);
}
?>
<script>
function checkInput(){
  var x = /^[a-z0-9]+$/i;
  var element = document.getElementByID("editArtistInput");
  if !(element.value.matches(x)){
    alert("doesnt match");
    //element.style.border = "1px solid red";
  }
  else{
    alert("I");
  }
}
</script><script>
  //$("h1#title").html("");
  document.getElementById("title").innerHTML = "EDIT ARTIST";
  document.title = "Edit Artist";

</script>
<form name = "editArtist" onsubmit="checkInput()" class="" action="editArtist.php?ed=<?php echo $_GET["ed"]; ?>" method="post">
  <table class = "updater">
    <td>Name:</td>
    <td><input id = "editArtistInput" type="text" name="editArtistInput"></td>
    <td><input type="submit" name="save" value="Save"></td>
    <td><a href= "artists.php">Back</a></td>
  </table>
</form>




</body>
</html>
