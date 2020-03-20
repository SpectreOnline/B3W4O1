<?php
$host = "localhost";
$username = "root";
$password = "mysql";
$database = "superhero";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$database;", "$username", "$password");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $err){
    die("something went wrong in the database". $err);
}
?>