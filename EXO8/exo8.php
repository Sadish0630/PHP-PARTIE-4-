<?php
declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="index.css" />
    <title>PARTIE 4 EXO 8</title>
</head>

<body>
    <!-- Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme des ces nombres.  
    Tous les paramètres doivent avoir une valeur par défaut. -->
    <?php 
    function threeNumbers(int $number1 = 0, int $number2 = 0, int $number3 = 0):int{
        return $number1 + $number2 + $number3 ;
    }
    ?>
</body></html>