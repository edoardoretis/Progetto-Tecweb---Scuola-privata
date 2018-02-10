<?php

$server = "localhost";
$serverUser = "root";
$serverPassword = "";
$db = "Tecweb";
/*
Per accedere dal server:
$server = "localhost";
$serverUser = "tgranzie";
$serverPassword = "Yaiyahqu9guz9oox";
$db = "tgranzie";
*/
$conn = new mysqli($server,$serverUser,$serverPassword,$db);

// Check connection
if ($conn->connect_error)
    die("Connection failed: " . $conn->connect_error);

?>