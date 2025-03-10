<?php
session_start();
$_SESSION["username"] = "Aniket";
$_SESSION["role"] = "Admin";

echo "sessionn vriable are set.<br>";

?>

<a href="session_read.php"> Go to Next page </a>
