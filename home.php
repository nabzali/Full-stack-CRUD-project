<?php
require "header.php";

$total_artists = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM artist"));
$total_albums = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM cd"));
$total_tracks = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM track"));
?>
<script>
  //$("h1#title").html("HOME");
  document.getElementById("title").innerHTML = "HOME";
  document.title = "Home";
</script>
<div class = "box">
  <h2>Database metrics:</h2>
  <li>Number of artists: <?php echo "<b>".$total_artists."</b>" ?></li>
  <li>Number of CDs/Albums: <?php echo "<b>".$total_albums."</b>" ?></li>
  <li>Number of Tracks: <?php echo "<b>".$total_tracks."</b>" ?></li>
</div>
</body>
</html>
