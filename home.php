<?php
require "header.php";

$data1 = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) AS artistTotal FROM artist;"));
$data2 = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) AS albumTotal FROM cd;"));
$data3 = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(*) AS trackTotal FROM track;"));

$num1 = $data1["artistTotal"];
$num2 = $data2["albumTotal"];
$num3 = $data3["trackTotal"];
?>
<script>
  //$("h1#title").html("HOME");
  document.getElementById("title").innerHTML = "HOME";
  document.title = "Home";
</script>
<div class = "box">
  <h2>Database metrics:</h2>
  <li>Number of artists: <?php echo "<b>".$num1."</b>" ?></li>
  <li>Number of CDs/Albums: <?php echo "<b>".$num2."</b>" ?></li>
  <li>Number of Tracks: <?php echo "<b>".$num3."</b>" ?></li>
</div>
</body>
</html>
