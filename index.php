<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

// Affiche toutes les informations, comme le ferait INFO_ALL
phpinfo();

    // Affiche uniquement le module d'information.
    // phpinfo(8) fournirait les mêmes informations.
    phpinfo(INFO_MODULES);

    ?>
</body>

</html>