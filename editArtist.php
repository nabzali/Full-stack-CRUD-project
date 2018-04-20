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
    //$("h1#title").html("");
    document.getElementById("title").innerHTML = "EDIT ARTIST";
    document.title = "Edit Artist";
</script>
<form class="" action="editArtist.php?ed=<?php echo $_GET["ed"]; ?>" method="post">
  <p>Edit Artist:</p>
  <input type="text" name="editArtistInput" placeholder="Name:">
  <input type="submit" name="save" value="Save">
  <a href= "artists.php">Back</a>
</form>
