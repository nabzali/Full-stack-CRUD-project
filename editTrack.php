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
}
?>
<script>
    //$("h1#title").html("");
    document.getElementById("title").innerHTML = "EDIT TRACK";
    document.title = "Edit Track";

    var inputs = ["editTrackTitle", "editTrackDuration"];

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

       if (isNaN(document.getElementById(inputs[1]).value)){
         document.getElementById(inputs[1]).style.border = "1px solid red";
         invalid = true;
       }
       else{
         if (document.getElementById(inputs[1]).style.border != "1px solid red"){
           document.getElementById(inputs[1]).style.border = "0px solid #000";
         }
       }
       if (invalid == true){
         return false;
       }
    }

</script>
<form action = "editTrack.php?id=<?php echo $_GET['ed']?>" method = "post" onsubmit = "return validateForm()">
  <table class = "updater">
    <tr>
      <td>Title:</td>
      <td><input type = "text" name = "editTrackTitle" id = "editTrackTitle"></td>
    </tr>
    <tr>
      <td>Duration:</td>
      <td><input type = "text" name = "editTrackDuration" id = "editTrackDuration"></td>
    </tr>
    <tr>
      <td>Album:</td>
      <td>
        <select name = "editTrackAlbum" id = "editTrackAlbum"><?php
          if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {?>
                <option><?php echo $row["cdTitle"]?></option><?php
            }
          }
        ?></select>
    </td>
    </tr>
    <tr>
      <td><input type = "submit" name = "save" value = "Save" class = "save"></td>
      <!--<td><a href= "tracks.php" class = "back">Back</a></td>-->
    </tr>
  </table>
</form>
<?php include "footer.php"; ?>
</body>
</html>
