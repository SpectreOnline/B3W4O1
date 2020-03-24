<?php
$host = "localhost";
$username = "root";
$password = "mysql";
$database = "superhero";

//With this try catch statement connect.php tries to make a connection by logging into the database
// A PDO is a connection with a database
try {
    $pdo = new PDO("mysql:host=$host;dbname=$database;", "$username", "$password");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $err){
    die("something went wrong in the database". $err);
}
?>