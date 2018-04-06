<?php
// Provide more information if something is wrong with your code:

error_reporting(-1);
ini_set('display_errors', 'On');
// Settings used to connect to the database:

$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'cddatabase';

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (mysqli_connect_errno()) echo "Failed to connect to MySQL, error code: " . mysqli_connect_errno();

$num_artist = "SELECT COUNT(*) AS artistTotal FROM artist;";
$num_cd = "SELECT COUNT(*) AS cdTotal FROM cd;";
$num_track = "SELECT COUNT(*) AS trackTotal FROM track;";

$num_artist_result =  mysqli_query($conn, $num_artist);
$num_cd_result =  mysqli_query($conn, $num_cd);
$num_track_result =  mysqli_query($conn, $num_track);

$data1 = mysqli_fetch_assoc($num_artist_result);
$data2 = mysqli_fetch_assoc($num_cd_result);
$data3 = mysqli_fetch_assoc($num_track_result);

$num1 = $data1["artistTotal"];
$num2 = $data2["cdTotal"];
$num3 = $data3["trackTotal"];


// Above is used to get data for metrics

$select_artist = "SELECT * FROM artist;";
$select_cd = "SELECT * FROM cd;";
$select_track = "SELECT * FROM track;";

$select_artist_result =  mysqli_query($conn, $select_artist);
$select_cd_result =  mysqli_query($conn, $select_cd);
$select_track_result =  mysqli_query($conn, $select_track);

if (isset ($_POST['searchBox1'])){
  $s = $_POST['searchBox1'];
  $sql = "SELECT * FROM artist WHERE artName LIKE '%$s%';";
  $select_artist_result = mysqli_query($conn, $sql);
  }

if (isset ($_POST['searchBox2'])){
  $s = $_POST['searchBox2'];
  $sql = "SELECT * FROM cd WHERE cdTitle LIKE '%$s%';";
  $select_cd_result = mysqli_query($conn, $sql);
  }

if (isset ($_POST['searchBox3'])){
  $s = $_POST['searchBox3'];
  $sql = "SELECT * FROM track WHERE trackName LIKE '%$s%';";
  $select_track_result = mysqli_query($conn, $sql);
  }
