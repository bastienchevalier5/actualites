<?php
$host = "127.0.0.1";
$db = "site_actualités"; //les accents c'est pas cool
$user = "root";
$pass = "";
$port = 3306;
$charset = "utf8mb4";

$dsn = "mysql:host=$host;dbname=$db;charset=$charset;port=$port";
$pdo = new PDO($dsn, $user, $pass);