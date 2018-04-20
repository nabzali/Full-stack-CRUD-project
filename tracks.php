<?php
require "header.php";
$select_track = "SELECT trackID, trackName, trackDuration, cdTitle, artName FROM track, artist, cd WHERE cd.cdID = track.cdID AND cd.artID = artist.artID ORDER BY trackID";
$select_track_result =  mysqli_query($conn, $select_track);
if (isset ($_POST['search3'])){
  $data = $_POST['search3'];
  $sql = "SELECT trackID, trackName, trackDuration, cdTitle, artName FROM track, artist, cd WHERE cd.cdID = track.cdID AND cd.artID = artist.artID AND (trackID LIKE '%$data%' OR trackName LIKE '%$data%' OR trackDuration LIKE '%$data%' OR cdTitle LIKE '%$data%' OR artName LIKE '%$data%') ORDER BY trackID";
  $select_track_result = mysqli_query($conn, $sql);
}
?>
<script>
    //$("h1#title").html("TRACKS");
    document.getElementById("title").innerHTML = "TRACKS";
    document.title = "Tracks";
</script>

<form class="" action="tracks.php" method="post">
  <input id = "trackSearch" class = "search" type="text" name="search3" placeholder="Search Tracks...">
</form>

<table>
  <thead>
    <tr>
      <th>Track ID:</th><th>Track Title:</th><th>Track Duration:</th><th>CD Title:</th><th>Artist Name:</th>
    </tr>
  </thead>
  <?php
    echo "<tbody>";
    if (mysqli_num_rows($select_track_result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($select_track_result)) {
            echo "<tr>";
            echo "<td>" . $row["trackID"]. "</td><td>" . $row["trackName"] . "</td><td>" . $row["trackDuration"] . "</td><td>" . $row["cdTitle"] . "</td><td>" . $row["artName"] . "</td>";
            //extras
            echo "</tr>";
        }
    } else {
      echo "<p style = 'padding-left:10px'>0 results.</p>";
      ?><script>$('thead').hide();</script><?php
    }
    echo "</tbody>";

  ?>
</table>
<a href = "addTrack.php"><div class="addButton">Add Track</div></a>
</body>
</html>