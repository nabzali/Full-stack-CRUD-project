<?php
error_reporting(-1);
ini_set('display_errors', 'On');
// Settings used to connect to the database:

$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'cddatabase';

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (mysqli_connect_errno()) echo "Failed to connect to MySQL, error code: " . mysqli_connect_errno();
//else echo "Successfully connected to localhost";
?>
