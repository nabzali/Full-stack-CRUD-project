<?php
require "header.php";
$select_artist = "SELECT * FROM artist ORDER BY artID";
$select_artist_result =  mysqli_query($conn, $select_artist);
if (isset ($_POST['search1'])){
  $data = $_POST['search1'];
  $sql = "SELECT * FROM artist WHERE (artName LIKE '%$data%') OR (artID LIKE '%$data%')";
  $select_artist_result = mysqli_query($conn, $sql);
}
if (isset ($_GET["del"])){
  $delete = $_GET["del"];
  $delete_artist = "DELETE FROM artist WHERE artID = $delete";
  mysqli_query($conn, $delete_artist);
  header("Location: artists.php");
}
?>
<script>
    //$("h1#title").html("ARTISTS");
    document.getElementById("title").innerHTML = "ARTISTS";
    document.title = "Artists";
</script>

<form action = "artists.php" method = "post">
  <input id = "artSearch" class = "search" type = "text" name = "search1" placeholder = "Search Artists...">
</form>

<table>
  <thead>
    <tr>
      <th>Artist ID:</th><th>Artist Name:</th><th colspan = "3">Options:</th>
    </tr>
  </thead>
  <?php
    echo "<tbody>";
    if (mysqli_num_rows($select_artist_result) > 0) {
        // output data of each row
        while($row = mysqli_fetch_assoc($select_artist_result)) {
            $artist = $row["artName"];
            echo "<tr>";
            echo "<td>" . $row["artID"]. "</td><td>" . $artist . "</td>";?>
            <td><a href = "artists.php?del=<?php echo $row['artID']?>" class = "deleteButton" onclick = "return confirm('Are you sure you want to delete this Artist?')">Delete</a></td>
            <td><a href = "editArtist.php?ed=<?php echo $row['artID']?>" class = "editButton">Edit</a></td>
            <td><a href = "albums.php?al=<?php echo $row['artID']?>" class = "blueButton">Albums</a></td>
            <?php echo "</tr>";
        }
    } else {
        echo "<p style = 'padding-left:10px'>0 results.</p>";
        ?><script>$('thead').hide();</script><?php

  }

    echo "</tbody>";

  ?>
</table>

<a href = "addArtist.php" class = "addButton">Add New Artist:</a>
<?php include "footer.php"; ?>
</body>
</html>
