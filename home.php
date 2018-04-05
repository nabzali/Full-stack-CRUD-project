<?php require "connect.php";?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title id="title">Home</title>
    <link rel="stylesheet" href="dbicw.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC:300" rel="stylesheet">
    <script src="dbicw.js"></script> <!-- Javascript-->
    <script src = "https://code.jquery.com/jquery-3.3.1.min.js"></script><!-- JQuery-->
  </head>
  <body>
    <header id = "h">Home</header>
    <nav>
      <li><a href = "home.php">Home</a></li>
      <li><a href = "artist.php">Artists</a></li>
      <li><a href = "album.php">Albums</a></li>
      <li><a href = "track.php">Tracks</a></li>
    </nav>
    <div class = "boxClass" id="box">
      <h2 id = "h2">Database metrics: </h2>
      <li>Number of artists: <?php echo "<b>".$num1."</b>" ?></li>
      <li>Number of CDs/Albums: <?php echo "<b>".$num2."</b>" ?></li>
      <li>Number of Tracks: <?php echo "<b>".$num3."</b>" ?></li>
    </div>
    <footer id = "footer">
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
