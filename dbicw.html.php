<?php include "dbi.php.php";?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title id="title">Home</title>
    <link rel="stylesheet" href="dbicw.css">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Arvo" rel="stylesheet">
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
      <li>Number of artists: <?php echo $num1 ?></li>
      <li>Number of CDs/Albums: <?php echo $num2 ?></li>
      <li>Number of Tracks: <?php echo $num3 ?></li>
    </div>
    <!--
    <div class= "boxClass" id = "moreBox" style="display:none">
      <li>This is a front end interface to a database designed by Nabeel S Ali.</li>
      <li>A University of Nottingham Computer Science project.</li>
      <li>Use the tabs to navigate in order to view the various tables of the database.</li>
      <li>This project uses HTML, CSS, JavaScript, PHP and SQL.</li>
    </div>
    -->
    <form id = "theForm" action=".php" method="post" style="display:none">
      <input type="text" name="searchBox" placeholder=" Search...">
    </form>
    <table id = "table" class = "tableClass" style="display:none">
      <thead>
          <tr id = "trHead">
          </tr>
      </thead>
      <tbody>
      </tbody>
    </table>
    <footer>
      <p>G51DBI</p>
      <p><a href="https://www.github.com/nabzali">Nabeel Ali</a> 2018 | Computer Science @ Nottingham</p>
    </footer>
  </body>
</html>
