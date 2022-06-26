<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$db = "warehouse1";

$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $db);

if (!$conn) {
    die("connection failed: " . mysqli_connect_error());
}
