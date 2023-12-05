<?php

function updateServices($id,$libel,$category,$price){
global $connection;

$stmt=mysqli_prepare($connection,"UPDATE services SET libel=?,category=?,price=? WHERE id='$id' ");
mysqli_stmt_bind_param($stmt,'ssd',$libel,$category,$price);
return mysqli_stmt_execute($stmt);

}



?>