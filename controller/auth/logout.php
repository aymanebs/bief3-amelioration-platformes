<?php 
require __DIR__ . '/../../db/connect.php';

session_start();
unset($_SESSION['username']);  
// session_unset();
session_destroy();
header('Location:../../../view/auth/login.php');
exit();
?>