<?php

setcookie ('mesprefs', " ", time() -3000, "/" );
session_start();
session_unset();
session_destroy();


echo '<meta http-equiv="refresh" content = "3;url=login.php">';

echo 'connecter : <a href = login.php>Login</a>';

?>