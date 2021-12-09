<?php

declare(strict_types=1);
/**
 * Cette fonction permet de concaténer un nombre et une chaine de caractère.
 *
 * @param integer $number
 * @param string $string
 * @return string
 */
function numberAndString(int $number, string $string): string
{
    return $number . $string;
}
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 4 exo 5</title>
</head>

<body>

    <div>
        <?php try { ?>
            <p><?= numberAndString(5, ' chats') ?></p>
        <?php } catch (TypeError $error) { ?>
            <p>Une erreur est survenue : <?php echo $error->getMessage() ?></p>
        <?php } ?>
    </div>

</body>

</html>