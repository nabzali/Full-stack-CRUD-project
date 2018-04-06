<?php
require "home.php";
?>
<script>
  $( ".boxClass" ).hide();
  $("footer").insertAfter($("body"));
  document.getElementById("h").innerHTML = "Albums/CDs";
  document.title = "Albums";
</script>
<form id="form2" class = "form" action="album.php" method="post"><!-- Second form -->
  <input id = "search2" class = "search" type="text" name="searchBox2" placeholder="Search...">
  <table id = "table2">
    <thead>
      <tr>
        <th>CD ID:</th><th>Artist ID:</th><th>CD Title:</th><th>CD Price:</th><th>CD Genre:</th>
      </tr>
    </thead>
    <?php
      echo "<tbody>";
      if (mysqli_num_rows($select_cd_result) > 0) {
          // output data of each row
          while($row = mysqli_fetch_assoc($select_cd_result)) {
              echo "<tr>";
              echo "<td>" . $row["cdID"]. "</td><td>" . $row["artID"]. "</td><td>" . $row["cdTitle"] . "</td><td><small>$ </small>" . $row["cdPrice"] . "</td><td>" . $row["cdGenre"] . "</td>";
              echo "<td><div style = 'background-color: #18BC9C' class = 'button'>Edit</div></td>";
              echo "<td><div style = 'background-color: #ff4d4d' class = 'button'>Delete</div></td>";
              echo "<td><div style = 'background-color: #00ace6' class = 'button'>Tracks</div></td>";
              echo "</tr>";
          }
      } else {
          echo "0 results.";
      }
      echo "</tbody>";
    ?>
  </table>
  <div id = 'newAlbum' class='button'><a href = "newAlbum.php">Add New Album</a></div>
</form>
