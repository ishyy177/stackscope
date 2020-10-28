<?php



$servername = "eu-cdbr-west-03.cleardb.net";
$dbusername = "b28dcd3a62c46f";
$dbpassword = "";
$dbname = "newinfo";

$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

if (!$conn) {
    die("connection failed" . mysqli_connect_error());
}
