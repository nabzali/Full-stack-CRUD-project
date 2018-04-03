<?php include "dbi.php.php";?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title id="title">Home</title>
    <link rel="stylesheet" href="dbicw.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC:300" rel="stylesheet">
    <script src="dbicw.js"></script>
  </head>
  <body>
    <header id = "h">Home</header>
    <nav>
      <li onclick = "changePage('Home')">Home</li>
      <li onclick = "changePage('Artists')">Artists</li>
      <li onclick = "changePage('Albums')">CDs/Albums</li>
      <li onclick = "changePage('Tracks')">Tracks</li>
    </nav>
    <div class = "boxClass" id="box">
      <h2 id = "h2">Database metrics: </h2>
      <li>Number of artists: <?php echo "<b>".$num1."</b>" ?></li>
      <li>Number of CDs/Albums: <?php echo "<b>".$num2."</b>" ?></li>
      <li>Number of Tracks: <?php echo "<b>".$num3."</b>" ?></li>
    </div>

    <form id = "theForm" class = "form" action=".php" method="post" style="display:none"> <!-- First form -->
      <input id = "search1" class = "search" type="text" name="searchBox" placeholder="Search...">
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
                echo "<td><div style = 'background-color: #18BC9C' class = 'button'>Edit</div></td>";
                echo "<td><div style = 'background-color: #ff4d4d' class = 'button'>Delete</div></td>";
                echo "<td><div style = 'background-color: #00ace6' class = 'button'>Albums</div></td>";
                echo "</tr>";
            }
        } else {
            echo "0 results.";
        }
        echo "</tbody>";

      ?>
      <tr><td><br><div id = 'newArtist' class='button'>Add New Artist</div><td><tr>

    </table>
    </form>
    <form id="form2" class = "form" action="index.html" method="post" style="display:none"><!-- Second form -->
      <input id = "search2" class = "search" type="text" name="searchBox" placeholder="Search...">
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
                  echo "<td>" . $row["cdID"]. "</td><td>" . $row["artID"]. "</td><td>" . $row["cdTitle"] . "</td><td>" . $row["cdPrice"] . "</td><td>" . $row["cdGenre"] . "</td>";
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
        <tr><td><br><div id = 'newAlbum' class='button'>Add New Album</div><td><tr>
      </table>
    </form>

    <footer>
      <p>G51DBI</p>
      <p><a href="https://www.github.com/nabzali">Nabeel Ali</a> 2018 | Computer Science @ Nottingham</p>
    </footer>
  </body>
</html>
<?php
mysqli_free_result($num_artist_result);
mysqli_free_result($num_cd_result);
mysqli_free_result($num_track_result);
mysqli_close($conn);
?>
