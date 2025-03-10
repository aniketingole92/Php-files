<?php
session_start();

echo "welcome," .$_SESSION["username"]."!<br>";

echo "Your role is :" .$_SESSION["role"]."<br>";

?>

<a href="session_destroy.php"> Logout </a>
