<?php
require "header.php";
if (isset($_POST["addArtistInput"])){
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
  <p>Add new Artist:</p>
  <input type="text" name="addArtistInput" placeholder="Name...">
  <input type="submit" name="save" value="Save">
  <a href= "artists.php">Back</a>
</form>
