<?php
// konfigurasi
$host = "localhost";
$dbname = "dbpuskesmas";
$user = "root";
$pass = "";

$dsn = "mysql:host=$host;port=3308;dbname=$dbname";

// koneksiin
$dbh = new PDO($dsn, $user, $pass);


?>