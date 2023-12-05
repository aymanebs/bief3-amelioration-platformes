<?php 
function updateDevelopers($id,$name,$username,$email,$phone,$adress,$role){
    global $connection;
    $stmt=mysqli_prepare($connection,"UPDATE users SET name=?,username=?,email=?,phone=?,adress=?,role=? WHERE id='$id' ");
    mysqli_stmt_bind_param($stmt,'ssssss',$name,$username,$email,$phone,$adress,$role);
    return mysqli_stmt_execute($stmt);
}


?>