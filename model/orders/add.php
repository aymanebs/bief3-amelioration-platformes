<?php 
function addOrder($service_id,$team_id,$user_id){
    global $connection;
  
    $service_id = $_POST['service_id'];
    $team_id = $_POST['team_id'];
    $user_id = $_POST['user_id'];
    $stmt=mysqli_prepare($connection,"INSERT INTO orders(service_id,team_id,user_id) Values(?,?,?)");
    mysqli_stmt_bind_param($stmt,'ssd',$service_id,$team_id,$user_id);
    return mysqli_stmt_execute($stmt);
}

?>