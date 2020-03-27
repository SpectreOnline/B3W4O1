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
<body style = 'overflow: hidden;'>
    <?php include('assets/pages/header.php'); ?>
<img src='assets/images/<?=$char["avatar"]?>' style="margin-top: 1%">
<h1 class="charname"><?=$char["name"] ?></h1>
<div class="bio"><p><?=$char["bio"]?></p></div>
<div class='charstat' style = background-color:<?=$char['color']?>><i class='fas fa-heart'></i><?=$char['health']?><br>
<i class='fas fa-fist-raised'></i><?=$char['attack']?><br>
<i class='fas fa-shield-alt'></i><?=$char['defense']?><br>
</div>
<div class="charequip" style = background-color:<?=$char['color']?>>
<?php if($char['weapon'] != null) echo "Weapon: <br>" . $char['weapon']. ' <br> <br>';?>

<?php if($char['armor'] != null) echo "Armor: <br>";?> 
<?php if($char['armor'] != null) echo $char['armor'] . '<br> <br>'; ?> 

</div>
<?php include('assets/pages/footer.php'); ?>
</body>
</html>