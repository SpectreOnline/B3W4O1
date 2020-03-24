<?php 
require('connect.php');

//$stmt stands for statement here below is the mysql querry that orders the items by name
$stmt = $pdo->prepare("SELECT * FROM characters ORDER BY name ");
$stmt->execute();

$pdo = null;

$count = 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='assets/css/stylesheet.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/f7a3729fdf.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <title>Superhero database</title>
</head>
<body>
    <!--Sets the header that is to be used for both index.php and characters.php -->
    <?php include('assets/pages/header.php');?>
    <?php 
    foreach($stmt as $row){
        $i++;
        $duration = $i."s";
        echo("<div class='characterplate' style = 'background-color:$row[5]; animation-duration: $duration;'><a href='character.php?id=$row[0]'><img src='assets/images/$row[2]' class ='indeximg'></a>
        
        <h2 class='charname'>$row[1]</h2><div class='stat'><i class='fas fa-heart'></i>$row[3]<br><i class='fas fa-fist-raised'></i>$row[6]<br><i class='fas fa-shield-alt'></i>$row[7]<br>
        <a href='character.php?id=$row[0]' class='details'><i class='fas fa-search'></i>Details</a>
        </div>
        
        </div>");
    }
    ?>
    <?php include('assets/pages/footer.php'); ?>
</body>
</html>