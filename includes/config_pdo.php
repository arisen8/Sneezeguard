<?php
require("configure.php");

$servername = DB_SERVER;
$username = DB_SERVER_USERNAME;
$password = DB_SERVER_PASSWORD;
$dbname = DB_DATABASE;

try {
    $dbConn = new PDO("mysql:host={$servername};dbname={$dbname}", $username, $password);
    
    $dbConn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // 
} catch(PDOException $e) {
    echo $e->getMessage();
}
?>