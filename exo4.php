<?php
    $number1 = 1;
    ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 4</title>
</head>
<body>
    <?php
    while ($number1<10){
        echo "$number1 <br>";
        // $number1 = $number1 + $number1/2;
        $number1+=$number1/2;
    }

    ?>
</body>
</html>