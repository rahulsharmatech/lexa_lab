<?php   
session_start(); 
session_destroy();
unset($_SESSION["admin_name"]);
unset($_SESSION["admin_email"]);
header("location:login.php");

?>