<?php
require "home.php";
?>
<script>
  $( ".boxClass" ).hide();
  $("footer").insertAfter($("body"));
  document.getElementById("h").innerHTML = "Tracks";
  document.title = "Tracks";
</script>

<form id="form3" class = "form" action="track.php" method="post"><!-- Third form -->
  <input id = "search3" class = "search" type="text" name="searchBox3" placeholder="Search...">
  <table id = "table3">
    <thead>
      <tr>
        <th>Track ID:</th><th>CD ID:</th><th>Track Name:</th><th>Track Duration:</th>
      </tr>
    </thead>
    <?php
      echo "<tbody>";
      if (mysqli_num_rows($select_track_result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($select_track_result)) {
              echo "<tr>";
              echo "<td>" . $row["trackID"]. "</td><td>" . $row["cdID"]. "</td><td>" . $row["trackName"] . "</td><td>". $row["trackDuration"] . "</td>";
              echo "<td><div style = 'background-color: #18BC9C' class = 'button'>Edit</div></td>";
              echo "<td><div style = 'background-color: #ff4d4d' class = 'button'>Delete</div></td>";
              echo "</tr>";
          }
      } else {
          echo "0 results.";
      }
      echo "</tbody>";
    ?>
  </table>
  <div id = 'newTrack' class='button'><a href="newTrack.php">Add New Track</a></div>
</form>
