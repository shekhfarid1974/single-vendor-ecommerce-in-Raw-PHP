<?php

$host = "localhost";
$db = "single-vendor-ecommerce";
$user = "root";

$pass ='';

$conn = new mysqli($host, $user, $pass, $db);

if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

?>