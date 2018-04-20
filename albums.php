<?php
require "header.php";
$select_album = "SELECT cdID, cdTitle, cdGenre, cdNumTracks, artName FROM artist, cd WHERE artist.artID = cd.artID ORDER BY cdID";
$select_album_result =  mysqli_query($conn, $select_album);
if (isset ($_POST['search2'])){
  $data = $_POST['search2'];
  $sql = "SELECT cdID, cdTitle, cdGenre, cdNumTracks, artName FROM artist, cd WHERE (artist.artID = cd.artID) AND (cdGenre LIKE '%$data%' OR cdTitle LIKE '%$data%' OR cdID LIKE '%$data%' OR cdNumTracks LIKE '%$data%' OR artName LIKE '%$data%') ORDER BY cdID";
  $select_album_result = mysqli_query($conn, $sql);
  }
?>
<script>
    //$("h1#title").html("ALBUMS");
    document.getElementById("title").innerHTML = "CDs/ALBUMS";
    document.title = "Albums";
</script>

<form class="" action="albums.php" method="post">
  <input id = "albumSearch" class = "search" type="text" name="search2" placeholder="Search Albums...">
</form>

<table>
  <thead>
    <tr>
      <th>CD ID:</th><th>Title:</th><th>Genre:</th><th>Number of Tracks:</th><th>Artist Name:</th>
    </tr>
  </thead>
  <?php
    echo "<tbody>";
    if (mysqli_num_rows($select_album_result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($select_album_result)) {
            echo "<tr>";
            echo "<td>" . $row["cdID"]. "</td><td>" . $row["cdTitle"] . "</td><td>" . $row["cdGenre"] . "</td><td>" . $row["cdNumTracks"] . "</td><td>" . $row["artName"] . "</td>";
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
<a href = "addAlbum.php"><div class="addButton">Add Album</div></a>
</body>
</html>
