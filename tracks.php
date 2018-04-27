<?php
require "header.php";
$select_track = "SELECT trackID, trackName, trackDuration, cdTitle, artName FROM track, artist, cd WHERE cd.cdID = track.cdID AND cd.artID = artist.artID ORDER BY trackID";
$select_track_result =  mysqli_query($conn, $select_track);
if (isset ($_POST['search3'])){
  $data = $_POST['search3'];
  $sql = "SELECT trackID, trackName, trackDuration, cdTitle, artName FROM track, artist, cd WHERE cd.cdID = track.cdID AND cd.artID = artist.artID AND (trackID LIKE '%$data%' OR trackName LIKE '%$data%' OR trackDuration LIKE '%$data%' OR cdTitle LIKE '%$data%' OR artName LIKE '%$data%') ORDER BY trackID";
  $select_track_result = mysqli_query($conn, $sql);
}
if (isset ($_GET["del"])){
  $delete = $_GET["del"];
  $delete_track = "DELETE FROM track WHERE trackID = $delete";
  mysqli_query($conn, $delete_track);
  header("Location: tracks.php");
}
if (isset ($_GET["tr"])){
  $tr = $_GET["tr"];
  $select_track = "SELECT trackID, trackName, trackDuration, cdTitle, artName FROM track, artist, cd WHERE (cd.cdID = track.cdID) AND (cd.artID = artist.artID) AND (track.cdID = $tr) ORDER BY trackID";
  $select_track_result = mysqli_query($conn, $select_track);
}
?>
<script>
    //$("h1#title").html("TRACKS");
    document.getElementById("title").innerHTML = "TRACKS";
    document.title = "Tracks";
</script>

<form action = "tracks.php" method = "post">
  <input id = "trackSearch" class = "search" type = "text" name = "search3" placeholder = "Search Tracks...">
</form>

<table>
  <thead>
    <tr>
      <th>Track ID:</th><th>Track Title:</th><th>Track Duration:</th><th>CD Title:</th><th>Artist Name:</th><th colspan = "2">Options:</th>
    </tr>
  </thead>
  <?php
    echo "<tbody>";
    if (mysqli_num_rows($select_track_result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($select_track_result)) {
            echo "<tr>";
            echo "<td>" . $row["trackID"]. "</td><td>" . $row["trackName"] . "</td><td>" . $row["trackDuration"] . "</td><td>" . $row["cdTitle"] . "</td><td>" . $row["artName"] . "</td>"; ?>
            <td><a href = "tracks.php?del=<?php echo $row['trackID']?>" class = "deleteButton" onclick = "alert('Are you sure you want to delete this Artist?')">Delete</a></td>
            <td><a href = "editTrack.php?ed=<?php echo $row['trackID']?>"class = "editButton">Edit</a></td>
            <?php echo "</tr>";
        }
    } else {
      echo "<p style = 'padding-left:10px'>0 results.</p>";
      ?><script>$('thead').hide();</script><?php
    }
    echo "</tbody>";

  ?>
</table>
<a href = "addTrack.php" class = "addButton">Add New Track:</a>
<?php include "footer.php"; ?>
</body>
</html>
