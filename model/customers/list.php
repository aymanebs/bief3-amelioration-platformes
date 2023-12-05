<?php

function getCustomers(){
    global $connection;
    $sql="SELECT id,username,name,email,phone,adress,created_at 
    FROM users
    WHERE role='Client' ";
    return $query=mysqli_query($connection,$sql);
    
}

function getCustomersById($id){
    global $connection;
    $id=$_GET['id'];
    $sql="SELECT id,username,name,email,phone,adress,role
    FROM users
    WHERE id='$id' ";
    return $query=mysqli_query($connection,$sql);
}



?>