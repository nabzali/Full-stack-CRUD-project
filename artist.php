<?php
require "home.php";


?>

<script>
  $( ".boxClass" ).hide();
  $("footer").insertAfter($("body"));
  document.getElementById("h").innerHTML = "Artists";
  document.title = "Artists";
</script>


<form id = "theForm" class = "form" action="artist.php" method="post"> <!-- First form -->
  <input id = "search1" class = "search" type="text" name="searchBox1" placeholder="Search...">
<table id = "table">
  <thead>
    <tr>
      <th>Artist ID:</th><th>Artist Name:</th>
    </tr>
  </thead>
  <?php
    echo "<tbody>";
    if (mysqli_num_rows($select_artist_result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($select_artist_result)) {
            echo "<tr>";
            echo "<td>" . $row["artID"]. "</td><td>" . $row["artName"] . "</td>";
            echo "<td><div style = 'background-color: #18BC9C' class = 'button'><a href = 'editArtist.php'>Edit</a></div></td>";
            echo "<td><div style = 'background-color: #ff4d4d' class = 'button'>Delete</div></td>";
            echo "<td><div style = 'background-color: #00ace6' class = 'button'>Albums</div></td>";
            echo "</tr>";
        }
    } else {
        echo "0 results.";
    }
    echo "</tbody>";

  ?>
</table>
<div id = 'newArtist' class='button'><a href = "newArtist.php">Add New Artist</a></div>
</form>
