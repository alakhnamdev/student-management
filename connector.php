<?php
$servername = "localhost";
$hostname = "root";
$password = "";
$database = "mydatabase";
$connector = mysqli_connect($servername,$hostname,$password,$database);
if(!$connector){
    die("Connection Failed".mysqli_connect_error());
}
?>