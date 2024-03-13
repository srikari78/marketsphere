<?php
$dbservername = "localhost";
$dbusername = "u696946200_marketdb";
$dbpassword = "Marketdb@4";
$dbName = "u696946200_marketdb";

$conn = mysqli_connect($dbservername, $dbusername, $dbpassword, $dbName);

if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    //you need to exit the script, if there is an error
    exit();
}
?>