<?php

session_start();
$_SESSION = [];
session_unset();
session_destroy();

setcookie('Login', '', time() - 3600);

header("Location: login.php");
exit;

?>