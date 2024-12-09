<?php
session_start(); 

// Vérifier si l'utilisateur est connecté
if (!isset($_SESSION['nom']) || !isset($_SESSION['islogin']) || $_SESSION['islogin'] !== true) {
    echo "Veuillez vous connecter d'abord.";
    exit;  // Stopper le script si l'utilisateur n'est pas connecté
}

// Afficher le message de bienvenue si l'utilisateur est connecté
echo "Bienvenue " . htmlspecialchars($_SESSION['nom']);


if (isset($_COOKIE['mesprefs'])) {


    $mesprefs = unserialize($_COOKIE['mesprefs']); 

    
    echo "Mes préférences : animal " . $mesprefs['animal'] . " et la couleur " . $mesprefs['couleur'];
    echo "<a href='edit.php'>Ajouter une préférence</a>";
    echo "<a href='logout.php'>Quitter</a>";
} else {
   
    echo 'Pas de préférences définies.';

    echo "<a href='edit.php'>Ajouter une préférence</a>";
    echo "<a href='logout.php'>Quitter</a>";
}

?>

