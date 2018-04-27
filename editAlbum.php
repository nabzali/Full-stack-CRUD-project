<?php
require "header.php";
$artists = "SELECT artName FROM artist";
$result = mysqli_query($conn, $artists);

if (isset($_POST["save"])){
  $newTitle = $_POST["editAlbumTitle"];
  $newPrice = $_POST["editAlbumPrice"];
  $newGenre = $_POST["editAlbumGenre"];
  $newArtist = $_POST["editAlbumArtist"];
  $newTracks = $_POST["editAlbumTracks"];
  $id = $_GET['id'];
  $artID_result = mysqli_query($conn, "SELECT artID FROM artist WHERE artName = '$newArtist'");
  $row1 = mysqli_fetch_row($artID_result);
  $newArtID = $row1[0];

  $sql = "UPDATE cd SET cdTitle = '$newTitle', cd.artID = $newArtID, cdPrice = $newPrice, cdGenre = '$newGenre', cdNumTracks = $newTracks WHERE cdID = $id";
  mysqli_query($conn, $sql);
  header("Location: albums.php");
}

?>
<script>
    //$("h1#title").html("");
    document.getElementById("title").innerHTML = "EDIT ALBUM";
    document.title = "Edit Album";
</script>
<form class="" action="editAlbum.php?id=<?php echo $_GET['ed']?>" method="post">
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
        <select name = "editAlbumArtist"><?php
          if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {?>
                <option><?php echo $row["artName"]?></option><?php
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
      <td><input type="submit" name="save" value="Save" class = "save"></td>
      <!--<td><a href= "albums.php" class = "back">Back</a></td>-->
    </tr>
  </table>
</form>
<?php include "footer.php"; ?>
</body>
</html>
