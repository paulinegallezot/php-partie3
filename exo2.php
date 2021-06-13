<?php
$number1 = 0;
$number2 = 80;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 2</title>
</head>
<body>
    <?php
    while ($number1<=20){
        $result = $number1*$number2;
        echo $result;
        $number1++;
    }
    ?>
</body>
</html>