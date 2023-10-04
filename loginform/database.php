<?php

$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "loginform";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("something went wrong:");
}

?>