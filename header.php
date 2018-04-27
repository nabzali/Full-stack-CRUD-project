<?php
  require "connect.php";
?>
 <!DOCTYPE html>
<html lang = "en" dir = "ltr"> <!-- Language: English, Direction: Left-to-Right !-->
  <head>
    <script src = "https://code.jquery.com/jquery-3.3.1.min.js"></script>
     <meta charset = "utf-8"> <!-- Character set UTF8, allows encoding of 1112064 unicode characters!-->
     <title></title>
     <link rel = "stylesheet" href = "styles.css">
     <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
   </head>
   <body>
      <header>
        <h1 id = "title"></h1>
        <nav>
          <a href = "home.php"><li>Home</li></a>
          <a href = "artists.php"><li>Artists</li></a>
          <a href = "albums.php"><li>Albums</li></a>
          <a href = "tracks.php"><li>Tracks</li></a>
        </nav>
      </header>
