<?php

//give info to connect to database

$servername = "localhost";//change when you are using an online server
$dBUsername = "root";
$dBPassword = "";
$dBName = "loginsystembina";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

//checks to see if we can connect
if (!$conn) {
    die("Connection failed ".mysqli_connect_error());
}