<?php

session_start();
$host = "localhost";
$user = "root";
$pass = "";
$db = "mbc_hotel";

$conn = mysqli_connect($host,$user,$pass,$db);
if ($conn){
}
else{
    echo("Error description: " . mysqli_error($con));
}
?>