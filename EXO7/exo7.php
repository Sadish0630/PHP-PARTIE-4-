<?php
declare(strict_types=1);
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="index.css" />
    <title>PARTIE 4 EXO 7</title>
</head>

<body>
    <?php
function people() {
    $age = 5;
    $gender ='Homme';
    if (($age >= 18)&($gender === 'Femme')) {
             echo("Vous êtes une femme et vous êtes majeur");
        } elseif (($age >= 18)&($gender === 'Homme')){
             echo("Vous êtes un homme et vous êtes majeur");
         }elseif (($age <= 17)&($gender === 'Femme')){
            echo("Vous êtes un Femme et vous êtes mineur");
        }elseif (($age <= 17)&($gender === 'Homme')){
            echo("Vous êtes un homme et vous êtes mineur");
        }
}
?>
    <p><?= people() ?></p>
</body>
</html>