<?php
require "header.php";
$select_album = "SELECT cdID, cdTitle, cdPrice, cdGenre, cdNumTracks, artName FROM artist, cd WHERE artist.artID = cd.artID ORDER BY cdID";
$select_album_result =  mysqli_query($conn, $select_album);
if (isset ($_POST['search2'])){
  $data = $_POST['search2'];
  $sql = "SELECT cdID, cdTitle, cdPrice, cdGenre, cdNumTracks, artName FROM artist, cd WHERE (artist.artID = cd.artID) AND (cdGenre LIKE '%$data%' OR cdTitle LIKE '%$data%' OR cdID LIKE '%$data%' OR cdNumTracks LIKE '%$data%' OR artName LIKE '%$data%') ORDER BY cdID";
  $select_album_result = mysqli_query($conn, $sql);
}
if (isset ($_GET["del"])){
  $delete = $_GET["del"];
  $delete_album = "DELETE FROM cd WHERE cdID = $delete";
  mysqli_query($conn, $delete_album);
  header("Location: albums.php");
}
if (isset ($_GET["al"])){
  $al = $_GET["al"];
  $select_album = "SELECT cdID, cdTitle, cdPrice, cdGenre, cdNumTracks, artName FROM artist, cd WHERE (artist.artID = cd.artID) AND (cd.artID = $al) ORDER BY cdID";
  $select_album_result = mysqli_query($conn, $select_album);
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
      <th>CD ID:</th><th>Title:</th><th>Price:</th><th>Genre:</th><th>No. Tracks:</th><th>Artist Name:</th>
    </tr>
  </thead>
  <?php
    echo "<tbody>";
    if (mysqli_num_rows($select_album_result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($select_album_result)) {
            echo "<tr>";
            echo "<td>" . $row["cdID"]. "</td><td>" . $row["cdTitle"] . "</td><td>" . "<small>$</small>" . $row["cdPrice"] . "</td><td>" . $row["cdGenre"] . "</td><td>" . $row["cdNumTracks"] . "</td><td>" . $row["artName"] . "</td>";
            ?>
            <td><a href = "albums.php?del=<?php echo $row['cdID']?>">Delete</a></td>
            <td><a href = "editAlbum.php?ed=<?php echo $row['cdID']?>"class="editButton">Edit</a></td>
            <td><a href = "tracks.php?tr=<?php echo $row['cdID']?>" class = "blueButton">Tracks</a><td>
            <?php echo "</tr>";
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
