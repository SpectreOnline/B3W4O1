<?php 
require('connect.php');

$id = $_GET['id'];

$stmt = $pdo->prepare("SELECT * FROM characters WHERE id =?");
$stmt->execute([$id]);

$char = $stmt -> fetch();

$pdo = null;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='assets/css/stylesheet.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/f7a3729fdf.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <title><?=$char['name']?></title>
</head>
<body>
    <?php include('assets/pages/header.php'); ?>
<img src='assets/images/<?=$char["avatar"]?>'>
<h2 class="charname"><?=$char["name"] ?></h2>
<p class="bio"><?=$char["bio"]?></p>
<div class='charstat' style = background-color:<?=$char['color']?>><i class='fas fa-heart'></i><?=$char['health']?><br><i class='fas fa-fist-raised'></i><?=$char['attack']?><br><i class='fas fa-shield-alt'></i><?=$char['defense']?><br>
<div class="charequip"></div>
</body>
</html>