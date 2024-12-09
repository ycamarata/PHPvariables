<?php
session_start();

$nom = $_POST['nom'];
$password = $_POST['password'];
$url = 'user.php';

$userarray = ["user1", "user2", "user3", "user4", "user5"];
$passarray = ["pass1", "pass2", "pass3", "pass4", "pass5"];


$userlength = count($userarray);


for ($compteur = 0; $compteur < $userlength; $compteur++) {
  
    if ($nom == $userarray[$compteur] && $password == $passarray[$compteur]) {
        session_start();
        $_SESSION['nom'] = $nom;  
        $_SESSION['islogin'] = true; 

      
        header("Location: $url");
        exit; 
    }
}

echo "Pas bon ! ";
echo '<a href="login.php">Login</a>';
?>