<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "erp";
$connector = mysqli_connect($servername,$username,$password,$database);
if(!$connector){
    die("Connection Failed".mysqli_connect_error());
}
?>