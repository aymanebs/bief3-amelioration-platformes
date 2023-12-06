<?php

function updateOrder($id,$service_id,$team_id,$user_id){
global $connection;

$stmt=mysqli_prepare($connection,"UPDATE orders SET service_id=?,team_id=?,user_id=? WHERE id='$id' ");
mysqli_stmt_bind_param($stmt,'ssd',$service_id,$team_id,$user_id);
return mysqli_stmt_execute($stmt);

}



?>