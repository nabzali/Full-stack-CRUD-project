<?php
require "header.php";
$albums = "SELECT cdTitle FROM cd";
$result = mysqli_query($conn, $albums);

if (isset($_POST["save"])){
  $newTitle = $_POST["editTrackTitle"];
  $newDuration = $_POST["editTrackDuration"];
  $newAlbum = $_POST["editTrackAlbum"];
  $id = $_GET['id'];
  $cdID_result = mysqli_query($conn, "SELECT cdID FROM cd WHERE cdTitle = '$newAlbum'");
  $row1 = mysqli_fetch_row($cdID_result);
  $new_CD_ID = $row1[0];

  $sql = "UPDATE track SET cdID = $new_CD_ID, trackName = '$newTitle', trackDuration = $newDuration WHERE trackID = $id";
  mysqli_query($conn, $sql);
  header("Location: tracks.php");
}
?>
<script>
    //$("h1#title").html("");
    document.getElementById("title").innerHTML = "EDIT TRACK";
    document.title = "Edit Track";
</script>
<form class="" action="editTrack.php?id=<?php echo $_GET['ed']?>" method="post">
  <table class = "updater">
    <tr>
      <td>Title:</td>
      <td><input type="text" name="editTrackTitle"></td>
    </tr>
    <tr>
      <td>Duration:</td>
      <td><input type="text" name="editTrackDuration"></td>
    </tr>
    <tr>
      <td>Album:</td>
      <td>
        <select name = "editTrackAlbum"><?php
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
