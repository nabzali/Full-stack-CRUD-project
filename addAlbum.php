<?php
require "header.php";
$artists = "SELECT artName FROM artist";
$result = mysqli_query($conn, $artists);
if (isset($_POST["save"])){
  $newTitle = $_POST["addAlbumTitle"];
  $newPrice = $_POST["addAlbumPrice"];
  $newGenre = $_POST["addAlbumGenre"];
  $newArtist = $_POST["addAlbumArtist"];
  $get_artID = "SELECT artID FROM artist WHERE artName = $newArtist";
  $artID_result = mysqli_fetch_field(mysqli_result($conn, $get_artID));
  $newArtID = $artID_result["artID"];
  $newTracks = $_POST["addAlbumTracks"];
  $sql = "INSERT INTO cd VALUES (null, $newArtID, $newTitle, $newPrice, $newGenre, $newTracks)";
  mysqli_query($conn, $sql);
}
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
        <select name = "addAlbumArtist"><?php
          if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {?>
                <option value=""><?php echo $row["artName"]?></option><?php
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
      <td><input type="submit" name="save" value="Save" class = "save"></td>
      <td><a href= "albums.php" class = "back">Back</a></td>
    </tr>
  </table>
</form>
<?php include "footer.php"; ?>
</body>
</html>
