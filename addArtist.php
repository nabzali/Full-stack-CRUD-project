<?php
require "header.php";
if (isset($_POST["save"])){
  $newArtist = $_POST["addArtistInput"];
  $sql = "INSERT INTO artist VALUES (null, '$newArtist')";
  mysqli_query($conn, $sql);
}
?>
<script>
     //$("h1#title").html("");
   document.getElementById("title").innerHTML = "ADD ARTIST";
   document.title = "Add Artist";

   function validateForm() {
    var x = document.forms["addArtist"]["addArtistInput"].value;
    if (x == "") {
        document.getElementById("addArtistInput").style.border = "1px solid red";
        //alert("Cannot leave field blank");
        return false;
    }
   }
</script>
<form name = "addArtist" action = "addArtist.php" method = "post" onsubmit = "return validateForm()">
  <table class = "updater">
    <td>Name:</td>
    <td><input id = "addArtistInput" type = "text" name = "addArtistInput"></td>
    <td><input type = "submit" name = "save" value = "Save" class = "save"></td>
    <!--<td><a href= "artists.php" class = "back">Back</a></td>-->
  </table>
</form>
<?php include "footer.php";?>
</body>
</html>
