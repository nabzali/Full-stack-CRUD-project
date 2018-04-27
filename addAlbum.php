<?php
require "header.php";
$artists = "SELECT artName FROM artist";
$result = mysqli_query($conn, $artists);

if (isset($_POST["save"])){
  $newTitle = $_POST["addAlbumTitle"];
  $newPrice = $_POST["addAlbumPrice"];
  $newGenre = $_POST["addAlbumGenre"];
  $newArtist = $_POST["addAlbumArtist"];
  $newTracks = $_POST["addAlbumTracks"];

  $artID_result = mysqli_query($conn, "SELECT artID FROM artist WHERE artName = '$newArtist'");
  $row1 = mysqli_fetch_row($artID_result);
  $newArtID = $row1[0];

  $sql = "INSERT INTO cd (cdID, artID, cdTitle, cdPrice, cdGenre, cdNumTracks) VALUES (null, $newArtID, '$newTitle', $newPrice, '$newGenre', $newTracks)";
  mysqli_query($conn, $sql);
}
?>
<script>
   //$("h1#title").html("");
   document.getElementById("title").innerHTML = "ADD ALBUM";
   document.title = "Add Album";

   var inputs = ["addAlbumTitle", "addAlbumPrice", "addAlbumTracks", "addAlbumGenre"];

   function validateForm() {
      var invalid = false;
      for (var i = 0; i < inputs.length; i++){
        if (document.getElementById(inputs[i]).value == "") {
            document.getElementById(inputs[i]).style.border = "1px solid red";
            invalid = true;
        }
        else{
          document.getElementById(inputs[i]).style.border = "0px solid #000";
        }
      }
      for (var j = 1; j < 3; j++){
        if (isNaN(document.getElementById(inputs[j]).value)){
          document.getElementById(inputs[j]).style.border = "1px solid red";
          invalid = true;
        }
        else{
          if (document.getElementById(inputs[j]).style.border != "1px solid red"){
            document.getElementById(inputs[j]).style.border = "0px solid #000";
          }
        }
      }
      if (invalid == true){
        return false;
      }
   }

</script>
<form name = "addAlbum" onsubmit="return validateForm()" action = "addAlbum.php" method = "post">
  <table class = "updater">
    <tr>
      <td>Title:</td>
      <td><input type = "text" name = "addAlbumTitle" id = "addAlbumTitle"></td>
    </tr>
    <tr>
      <td>Price:</td>
      <td><input type = "text" name = "addAlbumPrice" id = "addAlbumPrice"></td>
    </tr>
    <tr>
      <td>Genre:</td>
      <td><input type = "text" name = "addAlbumGenre" id = "addAlbumGenre"></td>
    </tr>
    <tr>
      <td>Artist:</td>
      <td>
        <select name = "addAlbumArtist" id = "addAlbumArtist"><?php
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
      <td><input type = "text" name = "addAlbumTracks" id = "addAlbumTracks"></td>
    </tr>
    <tr>
      <td><input type = "submit" name = "save" value = "Save" class = "save"></td>
      <!--<td><a href= "albums.php" class = "back">Back</a></td>-->
    </tr>
  </table>
</form>
<?php include "footer.php";?>
</body>
</html>
