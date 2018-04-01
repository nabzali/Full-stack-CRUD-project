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
/*
$num_cd_result =  mysqli_query($conn, $num_cd);
$num_track_result =  mysqli_query($conn, $num_track);
*/
if (mysqli_num_rows($num_artist_result) == 1) {
    // output data of each row
    $row = mysqli_fetch_assoc($num_artist_result);
    $num = $row["artistTotal"];
} else {
    $num = 0;
}

  mysqli_close($conn);
