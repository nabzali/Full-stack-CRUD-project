<?php
require "header.php";
$artists = "SELECT artName FROM artist";
$result = mysqli_query($conn, $artists);
 ?>
<script>
   //$("h1#title").html("");
   document.getElementById("title").innerHTML = "ADD ALBUM";
   document.title = "Add Album";
</script>
<form class="" action="addAlbum.php" method="post">
  <table class = "updater">
    <tr>
      <td>Title:</td>
      <td><input type="text" name="addAlbumTitle"></td>
    </tr>
    <tr>
      <td>Price:</td>
      <td><input type="text" name="addAlbumPrice"></td>
    </tr>
    <tr>
      <td>Genre:</td>
      <td><input type="text" name="addAlbumGenre"></td>
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
      <td><input type="text" name="addAlbumTracks"></td>
    </tr>
    <tr>
      <td><input type="submit" name="save" value="Save"></td>
      <td><a href= "albums.php">Back</a></td>
    </tr>
  </table>
</form>
</body>
</html>
