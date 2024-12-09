<?php

$mesprefs = $_POST;


$newprefs = serialize($mesprefs);


setcookie('mesprefs', $newprefs, time() + (30 * 24 * 60 * 60), "/");  

header('Location: user.php');
exit; 
?>
