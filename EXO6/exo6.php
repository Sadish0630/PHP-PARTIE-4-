<?php

declare(strict_types=1);
/**
 * Function creating a sentence
 *
 * @param string $lastName
 * @param string $firstName
 * @param integer $age
 * @return string
 */
function sentence(string $lastName, string $firstName, int $age): string
{
    return 'Bonjour ' . $lastName . ' ' . $firstName . ', tu as ' . $age . ' ans.';
}
$myLastName = 'Doe';
$myFirstName = 'John';
$myAge = 42;
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>PARTIE 4 EXO 6</title>
</head>

<body>
    <?php
    //Function testing var types
    try { ?>
        <p><?= sentence($myLastName, $myFirstName, $myAge) ?></p>
    <?php } catch (TypeError $error) { ?>
        <p>Une erreur est survenue : <?= $error->getMessage() ?></p>
    <?php } ?>
</body>

</html>