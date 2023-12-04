<?php 
session_start();
session_destroy();
header('LOCATION:../../../view/auth/login.php');
?>