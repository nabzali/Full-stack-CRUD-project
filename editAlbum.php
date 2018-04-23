<?php
require "header.php";
$artists = "SELECT artName FROM artist";
$result = mysqli_query($conn, $artists);
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
      <td><input type="text" name="editAlbumTitle"></td>
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
      <td>Artist:</td>
      <td>
        <select><?php
          if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {?>
                <option value="#"><?php echo $row["artName"]?></option><?php
            }
          }
        ?></select>
    </td>
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
