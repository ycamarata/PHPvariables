<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

//Verifier si les cookies existent avec condition
if (isset($_COOKIE['animal'], $_COOKIE['color'])) {
    //Afficher les valeurs
    echo '<h3>Vos valeurs :</h3>';
    echo 'Animal préféré : ' . htmlspecialchars($_COOKIE['animal']) . '<br>';
    echo 'Couleur préférée : ' . htmlspecialchars($_COOKIE['color']) . '';
} else{
    //Si les cookies n'existent pas
    echo '<p>Aucune valeurs enregistrées</p>';
}
//lien vers index.php
echo '<br><br><a href = "index.php"> Vers index.php</a>';
    ?>
</body>
</html>