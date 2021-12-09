<?php
    declare(strict_types = 1);
    function concat(string $sentence1, string $sentence2) {
        return $sentence1 . $sentence2;
    }
?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PARTIE 4 EXO 3</title>
</head>
<body>
    <p><?php echo concat('Bonjour je suis ', 'Clement')?> </p>
</body>
</html>
