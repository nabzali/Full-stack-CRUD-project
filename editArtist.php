<?php
require "header.php";

if (isset($_POST["save"])){
  $data1 = $_GET["ed"];
  $data2 = $_POST["editArtistInput"];
  $edit_artist = "UPDATE artist SET artName = '$data2' WHERE artID = $data1";
  mysqli_query($conn, $edit_artist);
  header("Location: artists.php");
}
?>
<script>
  //$("h1#title").html("");
  document.getElementById("title").innerHTML = "EDIT ARTIST";
  document.title = "Edit Artist";

  function validateForm() {
   var x = document.forms["editArtist"]["editArtistInput"].value;
   if (x == "") {
       document.getElementById("editArtistInput").style.border = "1px solid red";
       //alert("Cannot leave field blank");
       return false;
   }
  }

</script>
<form name = "editArtist" onsubmit = "return validateForm()" action = "editArtist.php?ed=<?php echo $_GET["ed"];?>" method = "post">
  <table class = "updater">
    <td>Name:</td>
    <td><input id = "editArtistInput" type = "text" name = "editArtistInput"></td>
    <td><input type = "submit" name = "save" value = "Save" class = "save"></td>
    <!--<td><a href= "artists.php" class = "back">Back</a></td>-->
  </table>
</form>
<?php include "footer.php"; ?>
</body>
</html>
