<?php 
$servername="localhost";
$username="root";
$password="";
$database="brief3";

$connection=mysqli_connect($servername,$username,$password,$database);

if(!isset($connection)){
    die(mysqli_error($connection));
}




?>