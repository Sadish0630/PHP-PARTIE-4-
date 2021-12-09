<?php

declare(strict_types=1) ?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="index.css" />
    <title>PARTIE 4 EXO 4</title>
</head>

<body>
    <p>
        <?php
        function calc(int $number1, int $number2)
        {
            if ($number1 > $number2) {
                return 'le premier nombre est le plus grand.';
            } elseif ($number1 < $number2) {
                return 'le deuxième nombre est le plus grand.';
            } else {
                return 'les deux nombres sont égaux';
            }
        }
        echo calc(4, 7);
        ?>
    </p>

</body>

</html>