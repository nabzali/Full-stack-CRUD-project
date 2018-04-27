<?php
require "header.php";
$albums = "SELECT cdTitle FROM cd";
$result = mysqli_query($conn, $albums);

if (isset($_POST["save"])){
  $newTitle = $_POST["addTrackTitle"];
  $newDuration = $_POST["addTrackDuration"];
  $newAlbum = $_POST["addTrackAlbum"];

  $cdID_result = mysqli_query($conn, "SELECT cdID FROM cd WHERE cdTitle = '$newAlbum'");
  $row1 = mysqli_fetch_row($cdID_result);
  $new_CD_ID = $row1[0];

  $sql = "INSERT INTO track (trackID, cdID, trackName, trackDuration) VALUES (null, $new_CD_ID, '$newTitle', $newDuration)";
  mysqli_query($conn, $sql);

}

?>
<script>
   //$("h1#title").html("");
   document.getElementById("title").innerHTML = "ADD TRACK";
   document.title = "Add Track";
}
</script>
<form name = "addArtist" class="" action="addTrack.php" method="post">
  <table class = "updater">
    <tr>
      <td>Title:</td>
      <td><input type="text" name="addTrackTitle"></td>
    </tr>
    <tr>
      <td>Duration:</td>
      <td><input type="text" name="addTrackDuration"></td>
    </tr>
    <tr>
      <td>Album:</td>
      <td>
        <select name = "addTrackAlbum"><?php
          if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {?>
                <option><?php echo $row["cdTitle"]?></option><?php
            }
          }
        ?></select>
    </td>
    </tr>
    <tr>
      <td><input type="submit" name="save" value="Save" class = "save"></td>
      <!--<td><a href= "tracks.php" class = "back">Back</a></td>-->
    </tr>
  </table>
</form>
<?php include "footer.php"; ?>
</body>
</html>
