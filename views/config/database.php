<?php 
$host = "localhost";
$username = "root";
$password = "";
$dbname = "taskmanager";

$conn = new mysqli($host, $username, $password, $dbname);

if($conn->connect_error){
    die("Kết nối database thất bại");
}