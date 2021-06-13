<?php
    $number1 = 100;
    $number2 = rand(1,100);
    ?> 
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 3</title>
</head>
<body>
    <?php
    while($number1>=10){
        $result = $number1*$number2;
        echo "$result <br>";
        $number1--;
    }
    ?>   
</body>
</html>