<?php
// site-wide variables
$site_title = "Lesley Tabi Portfolio";
$admin_email = "lesley@gmail.com";
// databse connection
$dsn = "mysql:host=localhost;dbname=portfolio_db";
$dbusername = "root";
$password = "";

try {
    $pdo = new PDO($dsn, $dbusername, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Uncomment the line below to check the connection
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
  
}