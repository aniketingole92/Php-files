<?php

session_start();

session_unset();
session_destory();

echo "session destroy. you have been logout out.";

?>

<a href="session.php"> Start session again </a>
