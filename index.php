<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio 07</title>
    <link rel="shortcut icon" href="favicon.png" type="image/png">
    <link rel="stylesheet" href="./css/style.css">
    
</head>
<body>
    <h1>Tira i dadi e tenta la fortuna</h1>
    <?php
        $dado1 = rand(1, 6);
        $dado2 = rand(1, 6);
    ?>

    <img src="./images/dado<?php echo $dado1 ?>.png" class="<?php echo $dado1 === $dado2 ? "red" : ""; ?>" alt="" width="100" height="100">
    <img src="./images/dado<?php echo $dado2 ?>.png" class="<?php echo $dado1 === $dado2 ? "red" : ""; ?>" alt="" width="100" height="100">

    <p>Tototale dei due dadi: <?php echo $dado1 + $dado2; ?></p>
    <a href="index.php">TIRA I DADI</a>
</body>
</html>