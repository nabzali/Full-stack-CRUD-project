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
</script>
<form class="" action="addArtist.php" method="post">
  <table class = "updater">
    <td>Name:</td>
    <td><input type="text" name="addArtistInput"></td>
    <td><input type="submit" name="save" value="Save" class = "save"></td>
    <td><a href= "artists.php" class = "back">Back</a></td>
  </table>
</form>
<?php include "footer.php"; ?>
</body>
</html>
