<?php

/*
* Template principal
*/
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= $title ?></title>
        <link rel="stylesheet" href="../assets/styles/style.css">
    </head>

    <body>

        <?php require_once('header.php'); ?>
        
        <main>
            <?= $content ?>
        </main>

        <?php require_once('footer.php'); ?>

    </body>
</html>