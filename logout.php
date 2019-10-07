<?php

session_start();


$var_value="log out successful";

session_destroy();

session_start();
$_SESSION['logout']="logout successful";



header('Location:first.php');
?>
