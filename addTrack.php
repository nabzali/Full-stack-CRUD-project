<?php
require "header.php";
$albums = "SELECT cdTitle FROM cd";
$result = mysqli_query($conn, $albums);
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
      <td><input type="text" name="editTrackTitle"></td>
    </tr>
    <tr>
      <td>Duration:</td>
      <td><input type="text" name="editTrackDuration"></td>
    </tr>
    <tr>
      <td>Album:</td>
      <td>
        <select><?php
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
