<?php 
$host = "";
$dbname = "";
$user = "";
$password = "";

$pdo = new PDO("mysql: host=$host; dbname=$dbname " , "$user", "$password");

$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>


