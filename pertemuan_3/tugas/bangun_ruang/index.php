<?php 
    require 'Bola.php';

    $bola = new Bola;
    $bola->setJarijari(10);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>192410101086</title>
</head>
<body>
    <h3>Evi Hidayatun Nafiah</h3>
    <h1>Bangun Ruang : Bola</h1>

    <ul>
        <li>Jari-jari : <?php echo($bola->getJarijari())?></li>
        <li>Luas : <?php echo($bola->getLuas())?></li>
        <li>Volume : <?php echo($bola->getVolume())?></li>
    </ul>
</body>
</html>