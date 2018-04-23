<?php
require "header.php";
?>
<script>
    //$("h1#title").html("");
    document.getElementById("title").innerHTML = "EDIT ALBUM";
    document.title = "Edit Album";
</script>
<form class="" action="editAlbum.php" method="post">
  <table class = "updater">
    <tr>
      <td>Title:</td>
      <td><input type="text" name="editAlbumName"></td>
    </tr>
    <tr>
      <td>Price:</td>
      <td><input type="text" name="editAlbumPrice"></td>
    </tr>
    <tr>
      <td>Genre:</td>
      <td><input type="text" name="editAlbumGenre"></td>
    </tr>
    <tr>
      <td>Tracks:</td>
      <td><input type="text" name="editAlbumTracks"></td>
    </tr>
    <tr>
      <td><input type="submit" name="save" value="Save"></td>
      <td><a href= "albums.php">Back</a></td>
    </tr>
  </table>
</form>
