<?php
require "header.php";
$albums = "SELECT cdTitle FROM cd";
$result = mysqli_query($conn, $albums);

if (isset($_POST["save"])){
  $newTitle = $_POST["addTrackTitle"];
  $newDuration = $_POST["addTrackDuration"];
  $newAlbum = $_POST["addTrackAlbum"];
/*
  $cdIDAndArtID_result = mysqli_query($conn, "SELECT artist.artID, cd.cdID FROM artist, cd WHERE artName = '$newArtist'");
  $row1 = mysqli_fetch_row($artID_result);
  $newArtID = $row1[0];

  $sql = "INSERT INTO cd (cdID, artID, cdTitle, cdPrice, cdGenre, cdNumTracks) VALUES (null, $newArtID, '$newTitle', $newPrice, '$newGenre', $newTracks)";
  mysqli_query($conn, $sql);
  */
}

 ?>
<script>
   //$("h1#title").html("");
   document.getElementById("title").innerHTML = "ADD TRACK";
   document.title = "Add Track";
</script>
<form class="" action="addTrack.php" method="post">
  <table class = "updater">
    <tr>
      <td>Title:</td>
      <td><input type="text" name="AddTrackTitle"></td>
    </tr>
    <tr>
      <td>Duration:</td>
      <td><input type="text" name="AddTrackDuration"></td>
    </tr>
    <tr>
      <td>Album:</td>
      <td>
        <select name = "AddTrackAlbum"><?php
          if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {?>
                <option value="#"><?php echo $row["cdTitle"]?></option><?php
            }
          }
        ?></select>
    </td>
    </tr>
    <tr>
      <td><input type="submit" name="save" value="Save" class = "save"></td>
      <td><a href= "tracks.php" class = "back">Back</a></td>
    </tr>
  </table>
</form>
<?php include "footer.php"; ?>
</body>
</html>
